<?php

class PictureDAO extends DAO{

	public function insertPic(Picture $pic){

		$sql = 'INSERT INTO picture
					(namePic,addressPic,hourPic)
				VALUES 
					(:namePic,:addressPic,NOW())';

		$query = $this->db()->prepare($sql);
		$query->execute(array(
			':namePic' => $pic->getNamePic() ? $this->verifyName($pic->getNamePic()) : NULL,
			':addressPic' => $pic->getAddressPic() ? $this->verifyAddress($pic->getAddressPic()) : 'image/',
		));

		return $this->db()->lastInsertId();
	}

	public function verifyAddress($dir){
		list($y, $m) = explode('/', date('Y/m'));

		$this->createAddress("{$dir}");
		$this->createAddress("{$dir}/{$y}");
		$this->createAddress("{$dir}/{$y}/{$m}/");
		return $createAddress = "{$dir}/{$y}/{$m}/";
	}

	private function createAddress($dir){

		if(!file_exists($dir) && !is_dir($dir)):

			mkdir($dir, 0777);

		endif;

	}

	public function verifyName($name){

		$fileName = substr($name, 0, strpos($name,'.')).'-'.time().strrchr($name, '.');

		return $fileName;
	}

	public function validateUpload(array $pic, $address, $name){
			// print_r($pic['name']);exit;

			$image = "";

			switch ($pic['type']) {
				case 'image/jpg':
				case 'image/jpeg':
				case 'image/pjpeg':
					$image = imagecreatefromjpeg($pic['tmp_name']);
					break;
				case 'image/png':
				case 'image/x-png':
					$image = imagecreatefrompng($pic['tmp_name']);
					break;
			}


			// var_dump($image);exit;


			if(!$pic){
				$mensagem = 'Erro na imagem';
				echo 'erro na imagem';
			}else{
				$x = imagesx($image);
				$y = imagesy($image);
				$imageX = ($x > 1024 ? 1024 : $x);
				$imageY = ($imageX * $y) / $x;

				$newImage = imagecreatetruecolor($imageX, $imageY);
				imagealphablending($newImage, false);
				imagesavealpha($newImage, true);
				imagecopyresampled($newImage, $image, 0, 0, 0, 0, $imageX, $imageY, $x, $y);

				switch ($pic['type']) {
					case 'image/jpg':
					case 'image/jpeg':
					case 'image/pjpeg':
						imagejpeg($newImage, $address . $name);
						break;
					case 'image/png':
					case 'image/x-png':
						imagepng($newImage, $address . $name);
						break;
				}
				imagedestroy($image);
				imagedestroy($newImage);
			}

			return true;
		// }

	}

}

?>