<?php

namespace APP\types;

use \APP\cliente;
use \APP\clientesInterface;

class pessoaFisica extends cliente implements clientesInterface
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