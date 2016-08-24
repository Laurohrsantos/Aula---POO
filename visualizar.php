<?php

use APP\model\clientesModel;
use APP\model\clientesModelJuridico;

require "config/config.inc.php";


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

		  <?php 

		  if ($getCliente == "pf"):

		  	$ler = new clientesModel();
			$ler->find($getId);

		  ?>

		  <div class="panel-heading"><h4>Cliente: <b><?= $ler->find($getId)['nome'] ?></b></></h4></div>
		  <div class="panel-body">
		  	<p><b>Nome:</b> <?= $ler->find($getId)['nome'] ?></p>
		  	<p><b>Sexo:</b> <?= $ler->find($getId)['sexo'] ?></p>
		  	<p><b>E-mail:</b> <?= $ler->find($getId)['email'] ?></p>
		  	<p><b>Fone:</b> <?= APP\helpers\common::sFone($ler->find($getId)['fone']) ?></p>
		  	<p><b>CPF:</b> <?= APP\helpers\common::sCPF($ler->find($getId)['cpf']) ?></p>
		  	<p><b>Endereço:</b> <?= $ler->find($getId)['endereco'] ?></p>
		  	<p><b>Cidade:</b> <?= $ler->find($getId)['cidade'] ?></p>
		  	<p><b>Estado:</b> <?= $ler->find($getId)['estado'] ?></p>
		  	<p><b>Grau de Importância:</b> <?= $ler->find($getId)['grau'] ?></p>
		  

		  <?php elseif ($getCliente == "pj"):

		  	$ler = new clientesModelJuridico();
			$ler->find($getId);
		  ?>

		  <div class="panel-heading"><h4>Cliente: <b><?=  $ler->find($getId)['nome'] ?></b></></h4></div>
		  <div class="panel-body">
		  	<p><b>Nome:</b> <?=  $ler->find($getId)['nome'] ?></p>
		  	<p><b>Sexo:</b> <?=  $ler->find($getId)['inscricaoestadual'] ?></p>
		  	<p><b>E-mail:</b> <?=  $ler->find($getId)['email'] ?></p>
		  	<p><b>Fone:</b> <?= APP\helpers\common::sFone( $ler->find($getId)['fone']) ?></p>
		  	<p><b>CPF:</b> <?= APP\helpers\common::sCNPJ( $ler->find($getId)['cnpj']) ?></p>
		  	<p><b>Endereço:</b> <?=  $ler->find($getId)['endereco'] ?></p>
		  	<p><b>Cidade:</b> <?=  $ler->find($getId)['cidade'] ?></p>
		  	<p><b>Estado:</b> <?=  $ler->find($getId)['estado'] ?></p>
		  	<p><b>Grau de Importância:</b> <?=  $ler->find($getId)['grau'] ?></p>
		  

		  <?php endif; ?>

		  <a class="btn btn-info" href="/">Voltar</a>
		  </div>

		</div>
	</div>

</body>
	
	<script type="text/javascript" src="vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</html>