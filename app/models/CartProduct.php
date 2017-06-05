<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 11:03
 */

class CartProduct{

    private $idProduct_cart;
    private $idProduct;
    private $idCart;
    private $quantity;
    private $date_insert;

    /**
     * @return mixed
     */
    public function getIdProductCart()
    {
        return $this->idProduct_cart;
    }

    /**
     * @param mixed $idProduct_cart
     */
    public function setIdProductCart($idProduct_cart)
    {
        $this->idProduct_cart = $idProduct_cart;
    }


    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param mixed $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return mixed
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * @param mixed $idCart
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDateInsert()
    {
        return $this->date_insert;
    }

    /**
     * @param mixed $dateInsert
     */
    public function setDateInsert($date_insert)
    {
        $this->date_insert = $date_insert;
    }

}