<?php
require "APP/clientesDB.php";

$getId = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

?>

<!DOCTYPE>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Página Cliente</title>

	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="navbar-brand">Menu</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="panel panel-default">

		  <div class="panel-heading"><h4>Cliente: <b><?= $cliente[$getId]->nome ?></b></></h4></div>
		  <div class="panel-body">
		  	<p><b>Índice:</b> <?= $getId ?></p>
		  	<p><b>Nome:</b> <?= $cliente[$getId]->nome ?></p>
		  	<p><b>Sexo:</b> <?= $cliente[$getId]->sexo ?></p>
		  	<p><b>E-mail:</b> <?= $cliente[$getId]->email ?></p>
		  	<p><b>Fone:</b> <?= $cliente[$getId]->fone ?></p>
		  	<p><b>CPF:</b> <?= $cliente[$getId]->cpf ?></p>
		  	<p><b>Endereço:</b> <?= $cliente[$getId]->endereco ?></p>
		  	<p><b>Cidade:</b> <?= $cliente[$getId]->cidade ?></p>
		  	<p><b>Estado:</b> <?= $cliente[$getId]->estado ?></p>
		  </div>
		  </div>

		</div>
	</div>

</body>
	
	<script type="text/javascript" src="vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</html>