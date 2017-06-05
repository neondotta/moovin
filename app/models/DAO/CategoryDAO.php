<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 01:33
 */

    class CategoryDAO extends DAO{

        public function insert(Category $category){

            $sql = "INSERT INTO category
                      (name)
                    VALUES
                      (:name)";

            $query = $this->db()->prepare($sql);

            $query->execute(array(
                ':name' => $category->getName()
            ));

            return $this->db()->lastInsertId();

        }

        public function edit(Category $category){

            $sql = "UPDATE category
                       SET name=:name
                    WHERE
                      idCategory=:idCategory";

            $query = $this->db()->prepare($sql);

            $query->bindParam(':idUser', $category->getIdCategory(), PDO::PARAM_INT);
            $query->bindParam(':name', $category->getName(), PDO::PARAM_STR);

            return $query->execute();

        }

        public  function getList(){

            $sql = "SELECT * FROM category";

            $query = $this->db()->query($sql);

            $listaCategory = array();

            foreach($query as $data) {

                $category = new Category();
                $category->setIdCategory($data['idCategory']);
                $category->setName($data['name']);

                array_push($listaCategory, $category);

            }

            return $listaCategory;
        }

    }
?>