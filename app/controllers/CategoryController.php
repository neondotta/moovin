<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 01:47
 */

    class CategoryController{

        public function insert(){

            if(isset($_POST['name'])){

                $categoryDAO = new CategoryDAO();

                $category = new Category();
                $category->setName($_POST['name']);


                return $categoryDAO->insert($category);


                $mensagem = "Deu certo";
                $redirect = "?r=index/index";
                require_once __DIR__."/../views/mensagem.php";
            }else{
                require_once __DIR__."/../views/category/form.php";
            }

        }


    }

?>