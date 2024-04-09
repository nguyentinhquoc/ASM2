<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\LienheModel;
use App\Models\TaiKhoanModel;

session_start();

class LienHeController extends BaseController
{
    function LienHe()
    {
        $lienHe = LienheModel::Select();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminLienHe", compact('lienHe', 'taikhoan_id'));
        } else {
            $this->BladeOne("AdminLienHe", compact('lienHe'));
        }
    }
    function deleteLienHe($id)
    {
        LienheModel::Delete($id);
        $lienHe = LienheModel::Select();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $check['delete'] = true;
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminLienHe", compact('lienHe', 'taikhoan_id', 'check'));
        } else {
            $this->BladeOne("AdminLienHe", compact('lienHe', 'check'));
        }
    }
}
