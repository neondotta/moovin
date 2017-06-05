<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 01:27
 */

    class ProductController{

        public function insert(){

            $categoryDAO = new CategoryDAO();
                $listaCategory = $categoryDAO->getList();

            if(isset($_POST['name'], $_POST['description'], $_POST['price'])){

                $arrayPic = array();

                if(count($_FILES['image']['name'] > 0)) {
                    $pic = new PictureController();
                    $idPic = $pic->insertPic();
                }

                //print_r(count($idPic));exit();
                $productDAO = new ProductDAO();

                $product = new Product();
                $product->setName($_POST['name']);
                $product->setDescription($_POST['description']);
                $product->setPrice($_POST['price']);
                $product->setHeight($_POST['height']);
                $product->setWidth($_POST['width']);
                $product->setLength($_POST['length']);
                $product->setValuePromotion($_POST['value_promotion']);
                $product->setActive($_POST['active']);
                $product->setQuantity($_POST['quantity']);
                $product->setIdCategory($_POST['idCategory']);

                $idProduct = $productDAO->insert($product);

                if(count($_FILES['image']['name'] > 0)) {
                    $pic = new PictureController();
                    $idPic = $pic->insertPic();
                }
                for ($i = 0; $i < count($idPic); $i++){
                    $addPic = $idPic[$i];
                    echo $addPic;
                    $productDAO->image_product($idProduct, $addPic);
                }
                $redirect = "?r=index/index";
                $mensagem = "Deu certo";
                require_once __DIR__."/../views/mensagem.php";
            }else{
                $mensagem = "Deu errado";
                require_once __DIR__."/../views/mensagem.php";
                require_once __DIR__."/../views/product/form.php";
            }

        }

        public function getList(){

            $dao = new ProductDAO();
            $list = $dao->getList();
            if(!empty($list)){
                require_once __DIR__."/../views/product/index.php";
            }else{
                $mensagem = "Sem usuários cadastrados";
                require_once __DIR__."/../views/index/index.php";
            }

        }

    }