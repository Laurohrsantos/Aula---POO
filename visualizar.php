<?php
require "config/config.inc.php";
require "src/app/model/clientesDB.php";
require "src/app/model/clientesDBjuridico.php";

$getId = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$getCliente = filter_input(INPUT_GET, 'cliente', FILTER_DEFAULT);

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

		  <?php if ($getCliente == "pf"): ?>

		  <div class="panel-heading"><h4>Cliente: <b><?= $cliente[$getId]->getNome() ?></b></></h4></div>
		  <div class="panel-body">
		  	<p><b>Nome:</b> <?= $cliente[$getId]->getNome() ?></p>
		  	<p><b>Sexo:</b> <?= $cliente[$getId]->getSexo() ?></p>
		  	<p><b>E-mail:</b> <?= $cliente[$getId]->getEmail() ?></p>
		  	<p><b>Fone:</b> <?= APP\helpers\common::sFone($cliente[$getId]->getFone()) ?></p>
		  	<p><b>CPF:</b> <?= APP\helpers\common::sCPF($cliente[$getId]->getCpf()) ?></p>
		  	<p><b>Endereço:</b> <?= $cliente[$getId]->getEndereco() ?></p>
		  	<p><b>Cidade:</b> <?= $cliente[$getId]->getCidade() ?></p>
		  	<p><b>Estado:</b> <?= $cliente[$getId]->getEstado() ?></p>
		  	<p><b>Grau de Importância:</b> <?= $cliente[$getId]->getGrau() ?></p>
		  

		  <?php elseif ($getCliente == "pj"): ?>

		  <div class="panel-heading"><h4>Cliente: <b><?= $clienteJ[$getId]->getNome() ?></b></></h4></div>
		  <div class="panel-body">
		  	<p><b>Nome:</b> <?= $clienteJ[$getId]->getNome() ?></p>
		  	<p><b>Sexo:</b> <?= $clienteJ[$getId]->getInscricaoEstadual() ?></p>
		  	<p><b>E-mail:</b> <?= $clienteJ[$getId]->getEmail() ?></p>
		  	<p><b>Fone:</b> <?= APP\helpers\common::sFone($clienteJ[$getId]->getFone()) ?></p>
		  	<p><b>CPF:</b> <?= APP\helpers\common::sCNPJ($clienteJ[$getId]->getCnpj()) ?></p>
		  	<p><b>Endereço:</b> <?= $clienteJ[$getId]->getEndereco() ?></p>
		  	<p><b>Cidade:</b> <?= $clienteJ[$getId]->getCidade() ?></p>
		  	<p><b>Estado:</b> <?= $clienteJ[$getId]->getEstado() ?></p>
		  	<p><b>Grau de Importância:</b> <?= $clienteJ[$getId]->getGrau() ?></p>
		  

		  <?php endif; ?>

		  <a class="btn btn-info" href="/">Voltar</a>
		  </div>

		</div>
	</div>

</body>
	
	<script type="text/javascript" src="vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</html>