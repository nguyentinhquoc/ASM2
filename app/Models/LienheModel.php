<?php

namespace App\Models;

class LienheModel extends BaseModel
{
    protected $tableName = "lienhe";
    static  function sendLienHe($noidung, $fullname, $email, $tel)
    {
        $model = new static;
        $model->sql = "INSERT INTO `lienhe` (`noidung`, `fullname`, `email`, `tel`) VALUES ('$noidung','$fullname','$email', $tel);";
        return DB::getDataN($model->sql, true);;
    }
}
