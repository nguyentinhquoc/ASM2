<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use App\Models\ColorModel;
use App\Models\dahmucModel;
use App\Models\sanPhamModel;
use App\Models\SizeModel;
use App\Models\TaiKhoanModel;

session_start();
class DetailController extends BaseController
{
    function detail($id)
    {
        $danhmuc = dahmucModel::Select();
        $sanPhamLienQuan = sanPhamModel::sanPhamLienQuan($id);
        $soLuong = sanPhamModel::soLuong($id);
        $sanphamct = sanPhamModel::SelectOne($id);
        $loadColor = ColorModel::Select();
        $loadSize = SizeModel::Select();

        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
            $id = $_SESSION['user'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("Detail", compact('sanphamct', 'soLuong', 'loadColor', 'loadSize', 'danhmuc', 'sanPhamLienQuan', 'taikhoan_id'));
        } else {
            $this->BladeOne("Detail", compact('sanphamct', 'soLuong', 'loadColor', 'loadSize', 'danhmuc', 'sanPhamLienQuan'));
        }
    }
}
