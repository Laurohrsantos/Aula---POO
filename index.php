<?php

use APP\model\clientesModel;
use APP\model\clientesModelJuridico;

require "config/config.inc.php";


$getOrdem = filter_input(INPUT_GET, 'ordem', FILTER_DEFAULT);

if(isset($getOrdem) & $getOrdem == true):
	krsort($cliente);
	krsort($clienteJ);
else:
	//ksort($cliente);
	//ksort($clienteJ);
endif;

$ler = new clientesModel();
$ler->getAll();

$ler2 = new ClientesModelJuridico();
$ler->getAll();

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

		  <div class="panel-heading"><h4>Lista de Clientes</h4></div>
		  <div class="panel-body">
		    <p>Listagem dos clientes cadastrados na base de dados do sistema de acompanhamento.</p>
		  </div>

		  <!-- Tabela -->
		  <div class="panel-body">

		  	<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
			    	<li role="presentation" class="active"><a href="#pf" aria-controls="pf" role="tab" data-toggle="tab">Pessoa Física</a></li>
			    	<li role="presentation"><a href="#pj" aria-controls="pj" role="tab" data-toggle="tab">Pessoa Jurídica</a></li>
				</ul>

		  		<!-- Tab panes -->
				<div class="tab-content">
			    	<div role="tabpanel" class="tab-pane active" id="pf">

			    		<table class="table table-condensed table-bordered table-responsive"  style="text-align: center">
				            <thead>
				                <tr>
				                    <th class="text-center"><a href="/?ordem=true">Índice:</a></th>
				                    <th class="text-center">Nome:</th>
				                    <th class="text-center">E-mail:</th>
				                    <th class="text-center">Fone:</th>
				                    <th class="text-center">Ações</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<?php
				            		if($ler->getAll()):

					                	foreach ($ler->getAll() as $k => $v):
						                	echo "
						                			<tr>
						                				<td><a href='/visualizar.php?id=". $v['id'] ."&cliente=pf'>". $v['id'] ."</a></td>
						                				<td><a href='/visualizar.php?id=". $v['id'] ."&cliente=pf'>". $v['nome'] ."</a></td>
						                				<td>". $v['email'] ."</td>
						                				<td>". APP\helpers\common::sFone($v['fone']) ."</td>
						                				<td> 
						                					<a href='/visualizar.php?id=". $v['id'] ."&cliente=pf'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></a> </td>
						                			</tr>
						                		 ";
										endforeach;
										                	
				            		endif;
				            	?>
				            </tbody>
				        </table>

			    	</div>
			    	<div role="tabpanel" class="tab-pane" id="pj">

			    		<table class="table table-condensed table-bordered table-responsive"  style="text-align: center">
				            <thead>
				                <tr>
				                    <th class="text-center"><a href="/?ordem=true">Índice:</a></th>
				                    <th class="text-center">Nome:</th>
				                    <th class="text-center">E-mail:</th>
				                    <th class="text-center">Fone:</th>
				                    <th class="text-center">Ações</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<?php
				            		if($ler2->getAll()):

					                	foreach ($ler2->getAll() as $k => $v):
						                	echo "
						                			<tr>
						                				<td><a href='/visualizar.php?id=". $v['id'] ."&cliente=pj'>". $v['id'] ."</a></td>
						                				<td><a href='/visualizar.php?id=". $v['id'] ."&cliente=pj'>". $v['nome'] ."</a></td>
						                				<td>". $v['email'] ."</td>
						                				<td>". APP\helpers\common::sFone($v['fone']) ."</td>
						                				<td> 
						                					<a href='/visualizar.php?id=". $v['id'] ."&cliente=pj'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></a> </td>
						                			</tr>
						                		 ";
										endforeach;
										                	
				            		endif;
				            	?>
				            </tbody>
				        </table>

			    	</div>
				</div>

			</div>

		  	
		  </div>

		</div>
	</div>

</body>

	<script type="text/javascript" src="vendor/twbs/bootstrap/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</html>