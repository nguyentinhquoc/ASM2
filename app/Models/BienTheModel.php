<?php

namespace App\Models;

class BienTheModel extends BaseModel
{
protected $tableName="bienthe";
static function addBienThe($idsp, $idcolor, $idsize, $slbienthe, $mabt){
    $model = new static;
     $model->sql="INSERT INTO `bienthe` (`id`, `idsp`, `idcolor`, `idsize`, `soluong`, `mabienthe`,`luotban`) VALUES (NULL, '$idsp', '$idcolor', ' $idsize', '$slbienthe', '$mabt',0);";
    return DB::getDataN($model->sql,true);
}
static function editBienThe($id){
    $model = new static;
    $model->sql="SELECT * FROM `bienthe` WHERE  `idsp` = $id";
   return DB::getDataN($model->sql,true);
}
static function upadteBienThe($slbienthe,$mabt,$idsp){
    $model = new static;
    $model->sql="UPDATE `bienthe` SET `soluong` = '$slbienthe' WHERE `bienthe`.`mabienthe` =  '$mabt' and bienthe.idsp= '$idsp';";
   return DB::getDataN($model->sql,true);
}

}