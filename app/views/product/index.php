
<div class="container">
	<div class="row">
		<div class="col-md-12">	
				        
			<div class="panel panel-primary">						

				<div class="panel-heading">

					<div class="row">
						<div class='col-md-10'>
							Usuários	
						</div>
						
						<div class="col-md-2">
	    					<a href="/moovin/?r=product/insert">Incluir</a>
	    				</div>
					</div>				

				</div>
					
				<?php
					foreach ($list as $product):

				?>
						<ul class="list-group">

							<li class="list-group-item">
								<div class="row">	

                                    <div class="col-md-10">
										<?=$product->getName()?>
									</div>
	                        		<div class="col-md-10">
										<?=$product->getDescription()?>
									</div>
	                        		<div class="col-md-10">
										<?=$product->getPrice()?>
									</div>
	                        		<div class="col-md-10">
										Altura: <?=$product->getHeight()?>
                                        Largura: <?=$product->getWidth()?>
                                        Comprimento: <?=$product->getLength()?>
									</div>
	                        		<div class="col-md-10">
										Valor da promoção: <?=$product->getValuePromotion()?>
									</div>
	                        		<div class="col-md-10">
										Quantidade em estoque: <?=$product->getQuantity()?>
									</div>
	                        		<div class="col-md-10">
										Categoria: <?=$product->getIdCategory()->getName()?>
									</div>
                                    <?php
                                        $cartProductController = new CartProductController();
                                           $result = $cartProductController->viewProductInCart($product->getIdProduct());

                                        if(!$result) {
                                    ?>
                                        <div class="col-md-1">
                                            <a href="/moovin/?r=cart/insertProductInCar&idProduct=<?= $product->getIdProduct() ?>">Adicionar
                                            no carrinho</a>
                                    <?php
                                        }else{
                                    ?>
                                        <p>Produto já adicionado</p>
                                    <?php
                                        }
                                    ?>
									<div class="col-md-1">
                                        <a href="/moovin/?r=product/edit&id=<?=$product->getIdProduct()?>">Editar</a>
                                    </div>

									<div class="col-md-1">
	              						<a href="/moovin/?r=product/delete&id=<?=$product->getIdProduct()?>">Excluir</a>
								</div>
							</li>
						</ul>
					<?php
							endforeach;
			        ?>		            		
	            		
		        </div>	              

		</div>

	</div>	
</div>

<a href="/moovin/">Voltar</a>