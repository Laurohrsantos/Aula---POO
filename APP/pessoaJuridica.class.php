<?php

require_once "clientes.class.php";
require_once "clientesInterface.php";

class pessoaJuridica extends cliente implements importancia
{

	private $inscricaoEstadual;
	private $cnpj;

	public function setInscricaoEstadual($inscricaoEstadual)
	{
		$this->inscricaoEstadual = $inscricaoEstadual;
	}

	public function getInscricaoEstadual()
	{
		return $this->inscricaoEstadual;
	}

	public function setCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
	}
	
	public function getCnpj()
	{
		return $this->cnpj;
	}

	public function setGrau ($grau)
	{
		$this->grau = $grau;
	}

	public function getGrau ()
	{
		return $this->grau;
	}

	

}