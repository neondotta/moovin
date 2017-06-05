<?php

class UserController{

	public function insert(){

		if(isset($_POST['name'],$_POST['email'], $_POST['password'])){

		    $idPic ='';

            if(isset($_FILES['image'])) {
                $pic = new PictureController();
                $idPic = $pic->insertPic();
            }

			$userDAO = new UserDAO();

			$user = new User();
                $user->setName($_POST['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->setDateYear($_POST['date_year']);
                $user->setLevel($_POST['level']);
			    $user->setIdPicture($idPic);

			$idUser = $userDAO->insert($user);
			$user->setIdUser($idUser);

			$redirect = "?r=index/index";
			$mensagem = "Deu certo";
			require_once __DIR__."/../views/mensagem.php";
		}else{
			require_once __DIR__."/../views/user/form.php";
		}

	}

	public function getList(){

		$dao = new UserDAO();
		$list = $dao->getList();
		if(!empty($list)){
			require_once __DIR__."/../views/user/index.php";
		}else{
			$mensagem = "Sem usuários cadastrados";
			require_once __DIR__."/../views/index/index.php";
		}

	}

	public function edit(){
		if(isset($_POST['nome'],$_POST['email'], $_POST['password'],$_POST['data_year'],$_POST['level'])){

            $user = new User();
            $user->setName($_POST['name']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setDataYear($_POST['data_year']);
            $user->setLevel($_POST['level']);
			$dao = new UserDAO();

			if($dao->edit($user)){
				$mensagem = "Editado com sucesso.";
			}else{
				$mensagem = "Erro ao editar.";
			}

			$redirect = "?r=index/index";

			require_once __DIR__."/../views/mensagem.php";

		}else{
			$id = $_GET['id'];
			$dao = new UserDAO();

			$user = $dao->getUser($id);
			require_once __DIR__."/../views/user/form.php";
		}
	}

	public function deleteUser(){

		$id = $_GET['id'];
		$dao = new UserDAO();

		if($user = $dao->deleteUser($id)){
			$mensagem = "Deletado com sucesso";
		}else{
			$mensagem = "Erro ao deletar";
		}

	}

	public function login(){

	    if(isset($_POST['email']) && $_POST['password']){
            session_start();
            $dao = new UserDAO();
            $list = $dao->login($_POST['email'],$_POST['password']);
            if($list){
                header("Location: /moovin/index.php");
            }else{
                $mensagem = "Dados incorretos";
                require_once __DIR__."/../views/mensagem.php";
            }

	    }else{
            require_once __DIR__."/../views/login.php";
        }

	}
	public function logout() {
		session_start();
		unset($_SESSION["login"]);
		session_destroy();

		header('Location: /moovin/');
	}

}

?>