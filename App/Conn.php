<?php

namespace App;


class Conn
{
    private static $conexao_db;

    public static function getConexaoDb() {
        if (self::$conexao_db == null) {
            self::$conexao_db = new \PDO("pgsql:host=localhost;dbname=mvc", "postgres", "r2147258369");
        }

        return self::$conexao_db;
    }

}