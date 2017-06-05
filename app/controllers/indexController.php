<?php

class IndexController{
	public function index(){
		$productController = new ProductController();
            $productController->getList();
		require_once __DIR__.'/../views/product/index.php';
	}
}
?>