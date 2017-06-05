<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 05:44
 */

class CartController{

    public function createCart(){

        if(!empty($_SESSION)) {

                $idUser = $_SESSION['login']->getIdUser();
                $cart = new Cart();
                    $cart->setIdUser($idUser);
                    $cart->setIdCoupon(NULL);
                    $cart->setIdDelivery(NULL);

                $cartDAO = new CartDAO();

                $idCart =  $cartDAO->createCart($cart);

                return $idCart;

        }else{
            require_once __DIR__."/../views/login.php";
        }

    }

    public function insertProductInCar(){

        $cartDAO = new CartDAO();
            return $cartDAO->verifyCartOpen();

    }

}

?>