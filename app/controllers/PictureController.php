<?php

class PictureController{

	public function insertPic(){

		if(isset($_FILES) && !empty($_FILES)) {

			// echo "<pre>";
			// print_r($_FILES);exit;

			$picDAO = new PictureDAO();
            $arrayPic = array();
			for($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $pic = new Picture();

                $pic->setNamePic($_FILES['image']['name'][$i]);
                $pic->setAddressPic('image');

                $result = array(
                    'name' => $_FILES['image']['name'][$i],
                    'tmp_name' => $_FILES['image']['tmp_name'][$i],
                    'type' => $_FILES['image']['type'][$i],
                    'size' => $_FILES['image']['size'][$i]
                );

                if ($_FILES['image']['name'][$i] != NULL) {
                    $upload = $picDAO->validateUpload($result, $picDAO->verifyAddress($pic->getAddressPic()), $picDAO->verifyName($pic->getNamePic()));

                    if ($upload) {
                        $insertPic = $picDAO->insertPic($pic);
                        array_push($arrayPic, $insertPic);
                    }
                }
            }
            return $arrayPic;
		}

	}



}

?>