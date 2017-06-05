<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Fórum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="/moovin/libs/bootstrap/bootstrap.min.css">
  		<link rel="stylesheet" href="/moovin/config/css/main.css">

  		<script src="/caixa/libs/js/jquery.min.js"></script>
  		<script src="/caixa/libs/js/bootstrap.min.js"></script>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
                    <?php
                    if(!empty($_SESSION)){
                    ?>
                        <li class="dropdown">
					    	<a href="#" class="dropdown-toogle" data-toogle="dropdown">
                        <?php
                            echo $_SESSION['login']->getName();
                        ?>
							<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">b</a></li>
                                <li><a href="">b</a></li>
                            </ul>
					    </li>
                        <?php
                            }else{
                        ?>
                        <li><a href="/moovin/?r=user/login">Logar</a></li>
                        <?php
                        }
                        ?>
					<li><a href="/moovin/?r=product/getList">Produto</a></li>
					<li><a href="/moovin/?r=cartProduct/myCart">Carinho</a></li>
				</ul>
			</nav>
		</header>
		<main class="col-lg-12">