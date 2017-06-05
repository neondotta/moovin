<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 05:30
 */

class CartDAO extends DAO{

    public function createCart(Cart $cart){

        $sql = 'INSERT INTO cart
                  (idUser, idCoupon, idDelivery, status)
                VALUES
                  (:idUser, :idCoupon, :idDelivery, :status)';

        $query = $this->db()->prepare($sql);

        $query->execute(array(
            ':idUser' => $cart->getIdUser(),
            ':idCoupon' => $cart->getIdCoupon(),
            ':idDelivery' => $cart->getIdDelivery(),
            ':status' => 1
        ));

        return $this->db()->lastInsertId();

    }

    public function verifyCartOpen(){

        $idUser = $_SESSION['login']->getIdUser();

        $sql = 'SELECT * FROM cart
                WHERE idUser = :idUser
                AND status = 1';

        $query = $this->db()->prepare($sql);

        $query->execute(array(':idUser' => $idUser));

        $data = $query->fetch();

        if(empty($data)){
            $cartController = new CartController();
               $idNewCart = $cartController->createCart();

               print_r($idNewCart);
        }else {
            $cart = new Cart();
                $cart->setIdCart($data['idCart']);

            $cartProductController = new CartProductController();
               $cartProductController->addProductInCart($cart->getIdCart());
        }

        if(!empty($idNewCart)){
            $cartProductController = new CartProductController();
                $cartProductController->addProductInCart($idNewCart);
        }

    }

    public function CartActiveId($idUser)
    {

        $sql = 'SELECT * FROM cart
                WHERE idUser = :idUser
                AND status = 1';

        $query = $this->db()->prepare($sql);

        $query->execute(array(':idUser' => $idUser));

        $data = $query->fetch();

        if(!empty($data)){

            $cart = new Cart();
                $cart->setIdCart($data['idCart']);

            $activeCart = $cart->getIdCart();

            return $activeCart;
        }

    }

    public function getCartList($user){

        $sql = 'SELECT c.*, u.* FROM cart c 
                INNER JOIN user u
                USING(idUser)
                WHERE idUser = :idUser';

        $query = $this->db()->prepare($sql);

        $query->execute(array(':idUser' => $user));

        $list = array();

        foreach ($query as $data){

            $cart = new Cart();
                $cart->setIdUser($data['idUser']);
                $cart->setIdCoupon($data['idCoupon']);
                $cart->setIdDelivery($data['idDelivery']);
                $cart->setStatus($data['status']);

            array_push($list, $cart);
        }

        return $list;

    }

}