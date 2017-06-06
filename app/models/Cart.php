<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 05:27
 */

    class Cart{

        private $idCart;
        private $idUser;
        private $idCoupon;
        private $idDelivery;
        private $status;
        private $total;

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
        public function getIdUser()
        {
            return $this->idUser;
        }

        /**
         * @param mixed $idUser
         */
        public function setIdUser($idUser)
        {
            $this->idUser = $idUser;
        }

        /**
         * @return mixed
         */
        public function getIdCoupon()
        {
            return $this->idCoupon;
        }

        /**
         * @param mixed $idCoupon
         */
        public function setIdCoupon($idCoupon)
        {
            $this->idCoupon = $idCoupon;
        }

        /**
         * @return mixed
         */
        public function getIdDelivery()
        {
            return $this->idDelivery;
        }

        /**
         * @param mixed $idDelivery
         */
        public function setIdDelivery($idDelivery)
        {
            $this->idDelivery = $idDelivery;
        }

        /**
         * @return mixed
         */
        public function getStatus()
        {
            return $this->status;
        }

        /**
         * @param mixed $status
         */
        public function setStatus($status)
        {
            $this->status = $status;
        }

        /**
         * @return mixed
         */
        public function getTotal()
        {
            return $this->total;
        }

        /**
         * @param mixed $total
         */
        public function setTotal($total)
        {
            $this->total = $total;
        }



    }