<?php

require_once "clientes.class.php";
require_once "clientesInterface.php";

class pessoaFisica extends cliente implements importancia
{

	private $sexo;	
	private $cpf;

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getCpf()
	{
		return $this->cpf;
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