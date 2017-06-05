<?php

class Picture{

	private $idPicture;
	private $namePic;
	private $addressPic;
	private $hourPic;

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
    public function getNamePic()
    {
        return $this->namePic;
    }

    /**
     * @param mixed $namePic
     */
    public function setNamePic($namePic)
    {
        $this->namePic = $namePic;
    }

    /**
     * @return mixed
     */
    public function getAddressPic()
    {
        return $this->addressPic;
    }

    /**
     * @param mixed $addressPic
     */
    public function setAddressPic($addressPic)
    {
        $this->addressPic = $addressPic;
    }

    /**
     * @return mixed
     */
    public function getHourPic()
    {
        return $this->hourPic;
    }

    /**
     * @param mixed $hourPic
     */
    public function setHourPic($hourPic)
    {
        $this->hourPic = $hourPic;
    }



}

?>