<?php

	require_once __DIR__.'/cabecalho.php';

	if(!empty($_SESSION['logar'])) {
		header('Location: /moovin/index.php');
	}
?>

<div class="login col-sm-12 col-tm-12 col-lm-12">
	<form method="post">
		
		<input type="email" name="email" placeholder="Insira seu E-mail" >
		<input type="password" name="password" placeholder="Insira sua senha" >

		<input type="submit" value="CONECTAR" class="col-sm-12 col-tm-12">

	</form>

</div>