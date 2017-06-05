<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 00:58
 */

    class Product{

        private $idProduct;
        private $name;
        private $description;
        private $price;
        private $height;
        private $width;
        private $length;
        private $value_promotion;
        private $order;
        private $quantity;
        private $idCategory;

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
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getHeight()
        {
            return $this->height;
        }

        /**
         * @param mixed $height
         */
        public function setHeight($height)
        {
            $this->height = $height;
        }

        /**
         * @return mixed
         */
        public function getWidth()
        {
            return $this->width;
        }

        /**
         * @param mixed $width
         */
        public function setWidth($width)
        {
            $this->width = $width;
        }

        /**
         * @return mixed
         */
        public function getLength()
        {
            return $this->length;
        }

        /**
         * @param mixed $length
         */
        public function setLength($length)
        {
            $this->length = $length;
        }

        /**
         * @return mixed
         */
        public function getValuePromotion()
        {
            return $this->value_promotion;
        }

        /**
         * @param mixed $value_promotion
         */
        public function setValuePromotion($value_promotion)
        {
            $this->value_promotion = $value_promotion;
        }

        /**
         * @return mixed
         */
        public function getActive()
        {
            return $this->active;
        }

        /**
         * @param mixed $order
         */
        public function setActive($active)
        {
            $this->active = $active;
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
        public function getIdCategory()
        {
            return $this->idCategory;
        }
        /**
            * @param mixed $idCategory
        */
        public function setIdCategory($idCategory)
        {
            $this->idCategory = $idCategory;
        }



    }
?>