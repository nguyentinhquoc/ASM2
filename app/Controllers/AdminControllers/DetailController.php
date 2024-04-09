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

class DetailController extends BaseController
{
    function detailSanPham($id)
    {
        $danhmuc = dahmucModel::Select();
        $loadColor = ColorModel::Select();
        $loadSize = SizeModel::Select();
        $valueSp = sanPhamModel::SelectOne($id);
        $bienThe = BienTheModel::SelectWhereT('idsp','=', $id);
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminDetail", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe', 'taikhoan_id'));
        } else {
            $this->BladeOne("AdminDetail", compact('danhmuc', 'loadColor', 'loadSize', 'valueSp', 'bienThe'));
        }
    }
}
