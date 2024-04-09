<?php

namespace App\Models;

class TaiKhoanModel extends BaseModel
{
protected $tableName="taikhoan";
static function dangky($name_dk,$pass_dk, $tel_dk,$email_dk,$address){
    $model= new static;
    $model->sql="INSERT INTO `taikhoan` (`name`, `pass`, `tel`, `email`,`address`,`img`) VALUES ('$name_dk', '$pass_dk', $tel_dk, '$email_dk','$address','avatar.png');";
    return DB::getDataN($model->sql,true);
}
}