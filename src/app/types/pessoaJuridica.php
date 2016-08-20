<?php

namespace APP\types;

use \APP\cliente;
use \APP\clientesInterface;

class pessoaJuridica extends cliente implements clientesInterface
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