<?php

class UserDAO extends DAO{

	public function insert(User $user){

		$sql = "INSERT INTO user
					(name,email,password,date_year,level, idPicture)
				VALUES
					(:name,:email,:password,:date_year,:level, :idPicture)";

		$query = $this->db()->prepare($sql);

		$query->execute(array(
			':name'		=> $user->getName(),
			':email'	=> $user->getEmail(),
			':password'	=> $user->getPassword(),
			':date_year'=> $user->getDateYear(),
			':level'	=> $user->getLevel() ? $user->getNivel() : 3,
            ':idPicture'=> $user->getIdPicture() ? $user->getIdPicture() : NULL
		));

		return $this->db()->lastInsertId();

	}

    public function getUser($id){

        $sql = "SELECT u.*, p.idPicture, p.nomePic, p.addressPic FROM user u
				LEFT JOIN picture p
					ON(u.idPicture = p.idPicture)
        	 	WHERE u.idUser = :id";

        $query = $this->db()->prepare($sql);

        $query->execute(array(':id' => $id));

        $data = $query->fetch();

			$pic = new Picture();
				$pic->setIdPicture($data['idPicture']);
				$pic->setNamePic($data['namePic']);
				$pic->setAddressPic($data['addressPic']);

			$user = new User();
				$user->setIdUser($data['idUser']);
                $user->setName($data['name']);
                $user->setEmail($data['email']);
                $user->setPassword($data['password']);
                $user->setDateYear($data['data_year']);
                $user->setLevel($data['level']);
                $user->setIdPicture($pic);
                $user->setLastOrder($data['lastOrder']);

        return $user;

    }

    /*public function getLastOrder($id){
        $sql = "SELECT u.lastOrder FROM user u
        	 	WHERE u.idUser = :id";

        $query = $this->db()->prepare($sql);

        $query->execute(array(':id' => $id));

        $data = $query->fetch();

        $user = new User();
            $user->setLastOrder($data['lastOrder']);

        return $user;
    }*/

	public function getList(){

		$sql = "SELECT u.*, f.idPicture, f.nomePic, f.addressPic FROM user u
				LEFT JOIN picture p
					ON(u.idPicture = f.idPicture)";

		$query = $this->db()->query($sql);


		$lista = array();

		foreach($query as $data){

			$pic = new Picture();
				$pic->setIdTVLPic($data['idPicture']);
				$pic->setNomePic($data['nomePic']);
				$pic->setAddressPic($data['addressPic']);

			$user = new User();
                $user->setIdUser($data['idUser']);
                $user->setName($data['name']);
                $user->setEmail($data['email']);
				$user->setPassword($data['password']);
	            $user->setDateYear($data['data_year']);
	            $user->setLevel($data['level']);
	            $user->setIdPicture($pic);

			array_push($lista, $user);


		}

		return $lista;

	}

	public function edit(User $user){

		$sql = "UPDATE user 
				SET name=:name,
					email=:email,
					password=:password,
					date_year=:date_year,
					level=:level
				WHERE
					idUser=:idUser";

		$query = $this->db()->prepare($sql);

		$query->bindParam(':idUser', $user->getIdUser(), PDO::PARAM_INT);
		$query->bindParam(':name', $user->getName(), PDO::PARAM_STR);
		$query->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
		$query->bindParam(':password', $user->getSenha(), PDO::PARAM_STR);
		$query->bindParam(':date_year', $user->setDateYear(), PDO::PARAM_STR);
		$query->bindParam(':level', $user->getLevel(), PDO::PARAM_INT);

		return $query->execute();

	}

	public function deleteUser($idUser){

		$sql = "DELETE FROM tvluser WHERE idUser = :idUser";

		$query = $this->db()->prepare($sql);

		return $query->execute(array(':idUser' => $idUser));

	}


	public function login($email, $pass){

		$sql = "SELECT u.*, p.idPicture, p.namePic, p.addressPic FROM user u
				LEFT JOIN picture p
					ON(u.idPicture = p.idPicture)
				WHERE 	email = :email
				AND		password = :password";

		$query = $this->db()->prepare($sql);
		$query->execute(array(':email' => $email, ':password' => $pass));

		$data = $query->fetch();
		print_r($data);
		if(empty($data)){
			return false;
		}else{

            $pic = new Picture();
            $pic->setIdPicture($data['idPicture']);
            $pic->setNamePic($data['namePic']);
            $pic->setAddressPic($data['addressPic']);

            $user = new User();
                $user->setIdUser($data['idUser']);
                $user->setName($data['name']);
                $user->setEmail($data['email']);
				$user->setPassword($data['password']);
	            $user->setDateYear($data['data_year']);
	            $user->setLevel($data['level']);
	            $user->setIdPicture($pic);
				
			session_start();
			$_SESSION['login'] = $user;
			return true;
		}

	}

}


?>