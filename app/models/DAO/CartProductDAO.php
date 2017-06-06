<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 11:06
 */

class CartProductDAO extends DAO{

    public function insert(CartProduct $cartProduct){

        $sql = "INSERT INTO product_cart
                  (idProduct, idCart, quantity, date_insert)
                VALUES
                  (:idProduct, :idCart, :quantity, NOW())";


        $query = $this->db()->prepare($sql);
        $query->execute(array(
            ':idProduct' => $cartProduct->getIdProduct(),
            ':idCart' => $cartProduct->getIdCart(),
            ':quantity' => $cartProduct->getQuantity() ? $cartProduct->getQuantity() : 1,
        ));

        return $this->db()->lastInsertId();
    }

    public function viewProductInCart($idProduct){

        $sql = 'SELECT * FROM product_cart
          WHERE idProduct = :idProduct
          AND idCart = :idCart';

        $idUser = $_SESSION['login']->getIdUser();

        $cartDAO = new CartDAO();
        $idCart = $cartDAO->CartActiveId($idUser);

        $query = $this->db()->prepare($sql);

        $query->execute(array(':idProduct' => $idProduct, ':idCart' => $idCart));

        $result = $query->fetch();

        if(!empty($result)){
            return true;
        }else{
            return false;
        }

    }

    public function getCart($user, $cart){

        $sql = 'SELECT pc.*, c.*, u.*,
                p.idProduct,p.name, p.price, p.height, p.width, p.length, p.value_promotion, p.quantity as quantityProduct
                FROM product_cart pc
                  INNER JOIN cart c 
                    USING(idCart)
                  INNER JOIN user u
                    ON(c.idUser = u.idUser)
                  INNER JOIN product p
                    ON(pc.idProduct = p.idProduct)
                WHERE u.idUser = :idUser
                  AND c.idCart = :idCart';

        $query = $this->db()->prepare($sql);

        $query->execute(array(':idUser' => $user, ':idCart' => $cart));

        $list = array();

        foreach ($query as $data){

            $product = new Product();
                $product->setIdProduct($data['idProduct']);
                $product->setName($data['name']);
                $product->setPrice($data['price']);
                $product->setHeight($data['height']);
                $product->setWidth($data['width']);
                $product->setLength($data['length']);
                $product->setValuePromotion($data['value_promotion']);

            $cartProduct = new CartProduct();
                $cartProduct->setIdProduct($product);
                $cartProduct->setIdCart($data['idCart']);
                $cartProduct->setQuantity($data['quantity']);

            array_push($list, $cartProduct);
        }

        return $list;

    }

    public function updateQuantityProduct($quantity, $idProduct, $idCart){

        $sql = "UPDATE product_cart 
                SET 
                  quantity = :quantity
                WHERE idProduct = :idProduct
                AND idCart = :idCart";

        $query = $this->db()->prepare($sql);

        $query->bindParam(':quantity', $quantity, PDO::PARAM_INT);

        return $query->execute(array(':quantity' => $quantity,':idProduct' => $idProduct, ':idCart' => $idCart));

    }

    public function deleteItemOfCart($idProduct, $idCart){

        $sql = 'DELETE FROM product_cart
              WHERE idProduct = :idProduct
              AND idCart = :idCart';

        $query = $this->db()->prepare($sql);

        return $query->execute(array(':idProduct' => $idProduct, ':idCart' => $idCart));

    }

}