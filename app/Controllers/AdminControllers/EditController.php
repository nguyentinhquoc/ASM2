<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\BienTheModel;
use App\Models\ColorModel;
use App\Models\dahmucModel;
use App\Models\sanPhamModel;
use App\Models\SizeModel;
use App\Models\TaiKhoanModel;

session_start();

class EditController extends BaseController
{
    function editSanPhamGet($id)
    {
        $danhmuc = dahmucModel::Select();
        $loadColor = ColorModel::Select();
        $loadSize = SizeModel::Select();
        $valueSp = sanPhamModel::SelectOne($id);
        $bienThe = BienTheModel::SelectWhereT('idsp', '=', $id);
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminEdit", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe', 'taikhoan_id'));
        } else {
            $this->BladeOne("AdminEdit", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe'));
        }
    }
    function editSanPhamPost($id)
    {

        if ($_POST['name'] == "" || $_POST['mota'] == "" || $_POST['price'] == "" || $_POST['sale'] == "") {
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
            $valueSp = sanPhamModel::SelectOne($id);
            $bienThe = BienTheModel::SelectWhereT('idsp', '=', $id);
            $check['edit'] = false;
            if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
                $id = $_SESSION['admin'];
                $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
                $this->BladeOne("AdminEdit", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe', 'ERROR', 'valueInput', 'check'));
            } else {
                $this->BladeOne("AdminEdit", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe', 'ERROR', 'valueInput', 'check'));
            }
        } else {
            $img = "";
            $iddm = $_POST['danhmuc'];
            $name = $_POST['name'];
            $mota = $_POST['mota'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            if (isset($_FILES['img']['name']) || $_FILES['img']['name'] != "") {
                $img = $_FILES['img']['name'];
                move_uploaded_file($_FILES['img']['tmp_name'], "assets/images/sanpham/" . $_FILES['img']['name']);
            }
            sanPhamModel::editSanPham($name, $price, $iddm, $img, $mota, $sale, $id);
            $tongcolor = ColorModel::Select();
            $tongsize = SizeModel::Select();
            foreach ($tongsize as $key => $value1) {
                foreach ($tongcolor as $key => $value2) {
                    $slbienthe = $_POST[$value1->id . '_' . $value2->id];
                    $mabt = $value1->id . "_" . $value2->id;
                    BienTheModel::upadteBienThe($slbienthe, $mabt, $id);
                }
            }
            $danhmuc = dahmucModel::Select();
            $loadColor = ColorModel::Select();
            $loadSize = SizeModel::Select();
            $valueSp = sanPhamModel::SelectOne($id);
            $bienThe = BienTheModel::SelectWhereT('idsp', '=', $id);
            $check['edit'] = true;
            $ERROR['name'] = false;
            $valueInput['name'] = $_POST['name'];
            $valueInput['mota'] = $_POST['mota'];
            $valueInput['price'] = $_POST['price'];
            $valueInput['sale'] = $_POST['sale'];
            $this->BladeOne("AdminEdit", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe', 'ERROR', 'valueInput', 'check'));
        }
    }
}
