<?php

spl_autoload_register(function($class_name){


	try{
		if(strpos($class_name, 'Controller') !== false){
			require_once '/app/controllers/'.$class_name.'.php';
		}else if(strpos($class_name, 'DAO') !== false){
			require_once '/app/models/DAO/'.$class_name.'.php';
		}else{
			require_once '/app/models/'.$class_name.'.php';
		}
	}catch(Exception $e){
		print $e->getMessage();
	}

});

if(isset($_GET['r'])){
	$requisicao = $_GET['r'];
}else{
	$requisicao = 'index/index';
}

$requisicao = explode("/", $requisicao);

if(is_array($requisicao) && (count($requisicao) == 2)){
	$nomeControlador 	= ucfirst($requisicao[0]);
	$acao				= $requisicao[1];

	session_start();
    require_once 'app/views/cabecalho.php';
    eval('$controlador = new ' . $nomeControlador . 'Controller();');
    eval('$controlador->' . $acao . '();');
    require_once 'app/views/rodape.php';

}
else{
	echo 'Página inválida';
}

?>