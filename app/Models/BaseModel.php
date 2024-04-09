<?php

namespace App\Models;

class BaseModel extends DB
{
    protected $id;
    protected $tableName;
    protected $sql;
    protected $key;
    static function Select()
    {
        $model = new static;
        $model->sql = "Select * from $model->tableName";
        return DB::getDataN($model->sql, true);
    }
    static function SelectOne($id)
    {
        $model = new static;
        $model->sql = "Select * from $model->tableName where id=$id";
        return DB::getDataN($model->sql, false);
    }
    static function Insert($data)
    {
        $columName = "";
        $pramName = "";
        foreach ($data as $key => $value) {
            $columName .= "`$key`,";
            $pramName .= ":$key,";
        }
        $columName = rtrim($columName, ",");
        $pramName = rtrim($pramName, ",");
        $model = new static;
        $model->sql = "INSERT INTO `$model->tableName`($columName) VALUES ($pramName)";
        return DB::getDataY($model->sql, $data, true);
    }
    static function Delete($id)
    {
        $model = new static;
        $model->sql = "DELETE FROM $model->tableName WHERE `$model->tableName`.`id` = $id";
        return DB::getDataN($model->sql, true);
    }
    static function DeleteWhere($column, $codition, $value)
    {
        $model = new static;
        $model->sql = "DELETE FROM $model->tableName WHERE `$column` $codition '$value'";
        return DB::getDataN($model->sql, true);
    }

    static function SelectWhere($column, $codition, $value)
    {
        $model = new static;
        $model->sql = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value'";
        return DB::getDataN($model->sql, true);
    }
    static function SelectWheref($column, $codition, $value)
    {
        $model = new static;
        $model->sql = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value'";
        return DB::getDataN($model->sql, false);
    }
    static function SelectWhereT($column, $codition, $value)
    {
        $model = new static;
        $model->sql = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value'";
        return DB::getDataN($model->sql, true);
    }
}
