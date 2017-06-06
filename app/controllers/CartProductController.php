<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 12:48
 */

class CartProductController{


    public function addProductInCart($idCart){


        if(!empty($_SESSION)) {

            $cartProduct = new CartProduct();
                $cartProduct->setIdProduct($_GET['idProduct']);
                $cartProduct->setIdCart($idCart);

            $cartProductDAO = new CartProductDAO();

            $idCartProduct =  $cartProductDAO->insert($cartProduct);

            return $idCartProduct;

        }else{
            require_once __DIR__."/../views/login.php";
        }


    }

    public function viewProductInCart($idProduct){
        if(!empty($_SESSION)){

            $cartProductDAO = new CartProductDAO();
            $result = $cartProductDAO->viewProductInCart($idProduct);

            if($result){
                   return true;
               }else{
                   return false;
               }

        }

    }

    public function myCart(){

        $idUser = $_SESSION['login']->getIdUser();

        $cartDAO = new CartDAO();
            $idCart = $cartDAO->CartActiveId($idUser);

        $cartProductDAO = new CartProductDAO();
        $list = $cartProductDAO->getCart($idUser, $idCart);

        if(!empty($list)){
            require_once __DIR__."/../views/cartProduct/index.php";
        }else{
            $mensagem = "Carrinho Vazio.";
            require_once __DIR__."/../views/mensagem.php";
            require_once __DIR__."/../views/cartProduct/index.php";
        }

    }

    public function updateQuantityProduct(){
        echo '<pre>';
        print_r($_POST);
        print_r($_GET);
        if(!empty($_SESSION)){

            $idProduct = $_GET['idProduct'];
            $idCart = $_GET['idCart'];

            $cartProduct = new CartProduct();
                $cartProduct->setQuantity($_POST['quantity']);

            $quantity = $cartProduct->getQuantity();

            $cartProductDAO = new CartProductDAO();
               $cartProductDAO->updateQuantityProduct($quantity, $idProduct, $idCart);

                header('Location: /moovin/?r=cartProduct/myCart');
        }else{
            header('Location: /moovin/?r=cartProduct/myCart');
        }

    }

    public function deleteItemOfCart(){

        if(!empty($_SESSION)) {
            $idUser = $_SESSION['login']->getIdUser();
            $idProduct = $_GET['idProduct'];

            $cartDAO = new CartDAO();
                $idCart = $cartDAO->CartActiveId($idUser);
            
            $cartProductDAO = new CartProductDAO();
                $cartProductDAO->deleteItemOfCart($idProduct, $idCart);

            header('Location: /moovin/?r=cartProduct/myCart');
        }

        header('Location: /moovin/?r=cartProduct/myCart');

    }

}