
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
	    					<a href="/moovin/?r=user/insert">Incluir</a>
	    				</div>
					</div>				

				</div>
					
				<?php
					foreach ($lista as $user):
				?>
						<ul class="list-group">

							<li class="list-group-item">
								<div class="row">	

	                        		<div class="col-md-10">
	                        			<img src="<?=($user->getIdPicture()->getIdTVLPic() != NULL ? $user->getIdPicture()->getAddressPic().$user->getIdPicture()->getNomePic() : "upImage/noUser.png") ?>" width="200" height="200" alt="">
									</div>
									<div class="col-md-10">
										<?=$user->getNome()?>
									</div>
	                        		<div class="col-md-10">
										<?=$user->getEmail()?>
									</div>
	                        		<div class="col-md-10">
										<?=$user->getDataNascimento()?>
									</div>
	                        		<div class="col-md-10">
										<?=$user->getSenha()?>
									</div>
	                        		<div class="col-md-10">
										<?=$user->getNivel()?>
									</div>
									
								
									<div class="col-md-1">
										<a href="/travel/?r=user/edit&id=<?=$user->getIdTVLUser()?>">Editar</a>
	                				</div>

									<div class="col-md-1">
	              						<a href="/travel/?r=user/deleteUser&id=<?=$user->getIdTVLUser()?>">Excluir</a>
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