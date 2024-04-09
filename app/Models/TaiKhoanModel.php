<?php

namespace App\Models;

class TaiKhoanModel extends BaseModel
{
    protected $tableName = "taikhoan";
    static function dangky($name_dk, $pass_dk, $tel_dk, $email_dk, $address)
    {
        $model = new static;
        $model->sql = "INSERT INTO `taikhoan` (`name`, `pass`, `tel`, `email`,`address`,`img`) VALUES ('$name_dk', '$pass_dk', $tel_dk, '$email_dk','$address','avatar.png');";
        return DB::getDataN($model->sql, true);
    }
    static function setTrangThai($id)
    {
        $model = new static;
        $tk = TaiKhoanModel::SelectOne($id);
        if ($tk->trangthai == 0) {
            $model->sql = "UPDATE `taikhoan` SET `trangthai` = '1' WHERE `taikhoan`.`id` = $id;";
        }
        if ($tk->trangthai == 1) {
            $model->sql = "UPDATE `taikhoan` SET `trangthai` = '0' WHERE `taikhoan`.`id` = $id;";
        }
        return DB::getDataN($model->sql, true);
    }
}
