<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\BaseModel;
use App\Models\BienTheModel;
use App\Models\ColorModel;
use App\Models\dahmucModel;
use App\Models\sanPhamModel;
use App\Models\SizeModel;
use App\Models\TaiKhoanModel;

session_start();

class AddController extends BaseController
{
    function addSanPhamGet()
    {

        $danhmuc = dahmucModel::Select();
        $loadColor = ColorModel::Select();
        $loadSize = SizeModel::Select();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminAdd", compact('danhmuc', 'loadColor', 'loadSize', 'taikhoan_id'));
        } else {
            $this->BladeOne("AdminAdd", compact('danhmuc', 'loadColor', 'loadSize'));
        }
    }
    function addSanPhamPost()
    {
        if ($_POST['name'] == "" || $_POST['mota'] == "" || $_POST['price'] == "" || $_POST['sale'] == "" || $_FILES['img']['name'] == "" || !isset($_FILES['img']['name'])) {
            $valueInput['name'] = $_POST['name'];
            $valueInput['mota'] = $_POST['mota'];
            $valueInput['price'] = $_POST['price'];
            $valueInput['sale'] = $_POST['sale'];
            if ($_POST['name'] == "") {
                $ERROR['name'] = "Vui lòng nhập tên sản phẩm";
            }
            if ($_POST['mota'] == "") {
                $ERROR['moTa'] = "Vui lòng nhập mô tả sản phẩm";
            }
            if ($_POST['price'] == "") {
                $ERROR['price'] = "Vui lòng nhập giá sản phẩm";
            }
            if ($_POST['sale'] == "" || $_POST['sale'] > 100) {
                $ERROR['sale']  = "Vui lòng nhập đúng(0<sale<100)";
            }
            if ($_FILES['img']['name'] == "" || !isset($_FILES['img']['name'])) {
                $ERROR['img']  = "Vui lòng chọn ảnh sản phẩm";
            }
            $danhmuc = dahmucModel::Select();
            $loadColor = ColorModel::Select();
            $loadSize = SizeModel::Select();
            $check['add'] = false;
            $this->BladeOne("AdminAdd", compact('danhmuc', 'loadColor', 'loadSize', 'ERROR', 'valueInput', 'check'));
        } else {
            $danhmuc = $_POST['danhmuc'];
            $name = $_POST['name'];
            $mota = $_POST['mota'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $img = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], "assets/images/sanpham/" . $_FILES['img']['name']);
            $masp = time();
            sanPhamModel::addSanPham($name, $price, $img, $mota, $danhmuc, $sale, $masp);
            $idsp = sanPhamModel::SelectWheref('masp', '=', $masp);
            $idsp = $idsp->id;
            $tongcolor = ColorModel::Select();
            $tongsize = SizeModel::Select();
            foreach ($tongsize as $key => $value2) {
                foreach ($tongcolor as $key => $value1) {
                    '<br>' .   $slbienthe = $_POST[$value1->id . '_' . $value2->id];
                    '<br>' .   $mabt = $value1->id . "_" . $value2->id;
                    '<br>' .   $idsize = $value2->id;
                    '<br>' .   $idcolor = $value1->id;
                    BienTheModel::addBienThe($idsp, $idcolor, $idsize, $slbienthe, $mabt);
                }
            }
            $valueInput['name'] = $_POST['name'];
            $valueInput['mota'] = $_POST['mota'];
            $valueInput['price'] = $_POST['price'];
            $valueInput['sale'] = $_POST['sale'];
            $danhmuc = dahmucModel::Select();
            $loadColor = ColorModel::Select();
            $loadSize = SizeModel::Select();
            $check['add'] = true;
            $ERROR = "";
            $this->BladeOne("AdminAdd", compact('danhmuc', 'loadColor', 'loadSize', 'ERROR', 'valueInput', 'check'));
        }
    }
}
