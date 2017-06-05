<?php
/**
 * Created by PhpStorm.
 * User: Externo
 * Date: 05/06/2017
 * Time: 01:02
 */

    class ProductDAO extends DAO {

        public function insert(Product $product){

            $sql = "INSERT INTO product
                      (name, description, price, height, width, length, value_promotion, active, quantity, idCategory)
                    VALUES
                      (:name, :description, :price, :height, :width, :length, :value_promotion, :active, :quantity, :idCategory)
                    ";

            $query = $this->db()->prepare($sql);
            $query->execute(array(
                ':name' => $product->getName(),
                ':description' => $product->getDescription(),
                ':price' => $product->getPrice(),
                ':height' => $product->getHeight(),
                ':width' => $product->getWidth(),
                ':length' => $product->getLength(),
                ':value_promotion' => $product->getValuePromotion(),
                ':active' => $product->getActive(),
                ':quantity' => $product->getQuantity(),
                ':idCategory' => $product->getIdCategory()
            ));

            return $this->db()->lastInsertId();

        }

        public function image_product($product, $image){

            $sql = 'INSERT INTO product_picture
                          (idProduct, idPicture)
                      VALUES
                          (:idProduct, :idPicture)
                    ';

            $query = $this->db()->prepare($sql);

            $query->execute(array(':idProduct' => $product, ':image' => $image));

            return $query;

        }

        public function getProduct($id){

            $sql = "SELECT FROM user u
				    WHERE u.idProduct = :id";

            $query = $this->db()->prepare($sql);

            $query->execute(array(':id' => $id));

            $data = $query->fetch();

            $product = new Product();
            $product->setIdProduct($data['idProduct']);
            $product->setName($data['name']);
            $product->setDescription($data['description']);
            $product->setPrice($data['price']);
            $product->setHeight($data['height']);
            $product->setWidth($data['width']);
            $product->setLength($data['length']);
            $product->setValuePromotion($data['vale_promotion']);
            $product->setActive($data['active']);
            $product->setQuantity($data['quantity']);

            return $product;

        }


        public function getList(){

            $sql = "SELECT p.*, c.name as nameCategory FROM product p
                    INNER JOIN category c
                    USING(idCategory)
                    WHERE p.active = TRUE ";

            $query = $this->db()->query($sql);

            $list = array();

            foreach($query as $data){

                $category = new Category();
                $category->setName($data['nameCategory']);

                $product = new Product();
                $product->setIdProduct($data['idProduct']);
                $product->setName($data['name']);
                $product->setDescription($data['description']);
                $product->setPrice($data['price']);
                $product->setHeight($data['height']);
                $product->setWidth($data['width']);
                $product->setLength($data['length']);
                //$product->setValuePromotion($data['vale_promotion']);
                $product->setActive($data['active']);
                $product->setQuantity($data['quantity']);
                $product->setIdCategory($category);

                array_push($list, $product);


            }

            return $list;

        }

    }

?>