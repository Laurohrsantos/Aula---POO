<?php

namespace APP;

class cliente
{

	private $nome;
	private $email;
	private $fone;
	private $endereco;
	private $cidade;
	private $estado;


	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setFone($fone)
	{
		$this->fone = $fone;
	}

	public function getFone()
	{
		return $this->fone;
	}

	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
	}

	public function getCidade()
	{
		return $this->cidade;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
	}

	public function getEstado()
	{
		return $this->estado;
	}	

}