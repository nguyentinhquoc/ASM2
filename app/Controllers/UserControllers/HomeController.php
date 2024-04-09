<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use App\Models\dahmucModel;
use App\Models\sanPhamModel;
use App\Models\TaiKhoanModel;

session_start();

class HomeController extends BaseController
{
    function loadHome()
    {
        $danhmuc = dahmucModel::Select();
        $sanPhamMoi = sanPhamModel::sanPhamMoi();
        $sanPhamBanChay = sanPhamModel::sanPhamBanChay();
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
            $id = $_SESSION['user'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("Home", compact('danhmuc', 'sanPhamMoi', 'sanPhamBanChay', 'taikhoan_id'));
        } else {
            $this->BladeOne("Home", compact('danhmuc', 'sanPhamMoi', 'sanPhamBanChay'));
        }
    }
}