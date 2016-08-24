<?php

namespace APP\model;

use Conn\Model;

class clientesModel extends Model
{

    private $_tabela = "clientesdb";

    public function getAll()
    {
        return $this->db->select("SELECT * FROM {$this->_tabela}");
    }

    public function find($id)
    {
        $id = (int) $id;

        return $this->db->select("SELECT * FROM {$this->_tabela} WHERE id = :id", array(':id' => $id), FALSE);
    }

}