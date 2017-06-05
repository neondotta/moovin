<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 01:32
 */

    class Category{

        private $idCategory;
        private $name;

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



    }

?>