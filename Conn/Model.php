<?php

namespace Conn;

class Model
{

    function __construct()
    {
        // Cria na propriedade 'db' o objeto da classe Database
        $this->db = new Database(TYPE, HOST, DBSA, USER, PASS);
    }

}