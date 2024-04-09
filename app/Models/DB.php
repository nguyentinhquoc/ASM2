<?php

namespace App\Models;

use PDO;

class DB
{
    static function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME .
            ";charset=" . DBCHARSET, DBUSER, DBPASS);
        return $connect;
    }
    static function getDataY($query,$data, $getAll)
    {
        $stmt = self::getConnect()->prepare($query);
        $stmt->execute($data);
        if ($getAll) {
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } else {
            $dataOne= $stmt->fetchAll(PDO::FETCH_CLASS);
            return $dataOne[0];
        }
    }
    static function getDataN($query, $getAll)
    {
        $stmt = self::getConnect()->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } else {
            $dataOne= $stmt->fetchAll(PDO::FETCH_CLASS);
            return $dataOne[0];
        }
    }
}