<?php

class User{
	
	private $idUser;
	private $name;
	private $email;
	private $password;
	private $date_year;
	private $level;
	private $idPicture;
	private $lastOrder;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDateYear()
    {
        return $this->date_year;
    }

    /**
     * @param mixed $data_year
     */
    public function setDateYear($date_year)
    {
        $this->data_year = $date_year;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getIdPicture()
    {
        return $this->idPicture;
    }

    /**
     * @param mixed $idPicture
     */
    public function setIdPicture($idPicture)
    {
        $this->idPicture = $idPicture;
    }

    /**
     * @return mixed
     */
    public function getLastOrder()
    {
        return $this->lastOrder;
    }

    /**
     * @param mixed $lastOrder
     */
    public function setLastOrder($lastOrder)
    {
        $this->lastOrder = $lastOrder;
    }



}

?>