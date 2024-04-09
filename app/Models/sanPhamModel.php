<?php

namespace App\Models;

class sanPhamModel extends BaseModel
{
    protected $tableName = "sanpham";
    static function sanPhamMoi()
    {
        $model = new static;
        $model->sql = "SELECT sanpham.id,
        sanpham.name,
        sanpham.price,
        sanpham.img,
        sanpham.luotxem,
        SUM(bienthe.luotban) AS total_luotban,
        sanpham.sale 
    FROM sanpham 
    JOIN bienthe ON bienthe.idsp = sanpham.id 
    WHERE sanpham.trangthai=1
    GROUP BY sanpham.id, sanpham.name, sanpham.price, sanpham.img, sanpham.luotxem, sanpham.sale 
    ORDER BY sanpham.id DESC 
    LIMIT 10;
";
        return DB::getDataN($model->sql, true);
    }
    static function sanPhamBanChay()
    {
        $model = new static;
        $model->sql = "SELECT sanpham.id, sanpham.name, sanpham.price, sanpham.img, sanpham.luotxem, SUM(bienthe.luotban) AS 'luotban', sanpham.sale FROM sanpham JOIN bienthe ON bienthe.idsp = sanpham.id where sanpham.trangthai=1 GROUP BY sanpham.id, sanpham.name, sanpham.price, sanpham.img, sanpham.luotxem, sanpham.sale ORDER BY luotban DESC LIMIT 10 ";
        return DB::getDataN($model->sql, true);
    }
    static function soLuong($idsp){
        $model = new static;
        $model->sql = "SELECT SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` WHERE idsp=$idsp";
        return DB::getDataN($model->sql, false);
    }
    static function sanPhamLienQuan($id){
        $model = new static;
        $model->sql = "SELECT * 
        FROM sanpham 
        WHERE iddm = (SELECT iddm FROM sanpham WHERE id = $id)  
        ORDER BY sanpham.id DESC 
        LIMIT 7;";
        return DB::getDataN($model->sql, true);
    }
    static function sanPhamAdmin(){
        $model = new static;
        $model->sql = "SELECT sanpham.trangthai,sanpham.masp,sanpham.id,sanpham.name,sanpham.price,sanpham.img,SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp GROUP BY sanpham.id";
        return DB::getDataN($model->sql, true);
    }
    static function sanPhamAdmin1(){
        $model = new static;
        $model->sql = "SELECT sanpham.trangthai, sanpham.masp,sanpham.id,sanpham.name,sanpham.price,sanpham.img,SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp WHERE sanpham.trangthai=1 GROUP BY sanpham.id ";
        return DB::getDataN($model->sql, true);
    }
    static function sanPhamAdmin0(){
        $model = new static;
        $model->sql = "SELECT sanpham.trangthai,sanpham.masp,sanpham.id,sanpham.name,sanpham.price,sanpham.img,SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp where sanpham.trangthai=0 GROUP BY sanpham.id ";
        return DB::getDataN($model->sql, true);
    }
    static function setupSp($id){
        $model = new static;
        $sanPham=sanPhamModel::SelectOne($id);
        if($sanPham->trangthai == 1){
        $model->sql = "UPDATE `sanpham` SET `trangthai` = '0' WHERE `sanpham`.`id` = $id;";
    }
        else {
            $model->sql = "UPDATE `sanpham` SET `trangthai` = '1' WHERE `sanpham`.`id` = $id;";
        }
        return DB::getDataN($model->sql, true);
    }

    static function coutSanPhamNike(){
        $model = new static;
        $model->sql = "SELECT SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp WHERE sanpham.iddm = 1;";
        return DB::getDataN($model->sql, false);
    }
    static function coutSanPhamJordan(){
        $model = new static;
        $model->sql = "SELECT SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp WHERE sanpham.iddm = 2;";
        return DB::getDataN($model->sql, false);
    }
    static function coutSanPhamMlb(){
        $model = new static;
        $model->sql = "SELECT SUM(bienthe.soluong) AS 'soluong' FROM `bienthe` JOIN sanpham ON sanpham.id=bienthe.idsp WHERE sanpham.iddm = 3;";
        return DB::getDataN($model->sql, false);
    }
    static function addSanPham($name,$price,$img,$mota,$danhmuc,$sale,$masp){
        $model = new static;
        $model->sql="INSERT INTO `sanpham` (`name`, `price`, `img`, `mota`, `iddm`, `sale`, `trangthai`, `masp`) VALUES ('$name', '$price', '$img', '$mota', '$danhmuc','$sale', '1', '$masp');";
        return DB::getDataN($model->sql,true);
    }
    static function editSanPham($name,$price,$iddm,$img,$mota,$sale,$id){
        $model = new static;
        $model->sql="UPDATE `sanpham` SET `mota` = '$mota',`name`='$name',`price`=$price,`iddm`=$iddm,`sale`=$sale  WHERE `sanpham`.`id` = $id";
        if ($img!="") {
            $model->sql="UPDATE `sanpham` SET `mota` = '$mota',`name`='$name',`price`=$price,`img`='$img',`iddm`=$iddm,`sale`=$sale  WHERE `sanpham`.`id` = $id";
        }
        return DB::getDataN($model->sql,true);;
    }
    static function sanPhamSearchAll($Search,$vtriBD){
        $model = new static;
        $model->sql="SELECT * FROM `sanpham` WHERE sanpham.name LIKE '%$Search%' AND sanpham.trangthai=1 Limit $vtriBD,20";
        return DB::getDataN($model->sql,true);;
    }
    static function sanPhamSearchAllCount($Search){
        $model = new static;
        $model->sql="SELECT * FROM `sanpham` WHERE sanpham.name LIKE '%$Search%' AND sanpham.trangthai=1";
        return DB::getDataN($model->sql,true);;
    }
    static function sanPhamSearchDM($Search,$iddm,$vtriBD){
        $model = new static;
        $model->sql="SELECT * FROM `sanpham` WHERE sanpham.iddm=$iddm and sanpham.name LIKE '%$Search%' AND sanpham.trangthai=1 Limit $vtriBD,20";
        return DB::getDataN($model->sql,true);;
    }
    static function sanPhamSearchDMCount($Search,$iddm){
        $model = new static;
        $model->sql="SELECT * FROM `sanpham` WHERE sanpham.iddm=$iddm and sanpham.name LIKE '%$Search%' AND sanpham.trangthai=1";
        return DB::getDataN($model->sql,true);;
    }
}