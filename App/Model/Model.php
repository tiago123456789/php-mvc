<?php

namespace App\Model;


use App\Conn;

abstract class Model
{

    private $db;
    private $table;

    public function __construct($table)
    {
        $this->db = Conn::getConexaoDb();
        $this->table = $table;
    }

    public function searchAll() {
        $sql = "SELECT * FROM " . $this->table;
        return $this->db->query($sql)->fetchAll();
    }


    protected function getConexao() {
        return $this->db;
    }
}