<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\BinhLuanModel;
use App\Models\DanhGiaModel;
use App\Models\PhanLoaiDHModel;
use App\Models\TaiKhoanModel;
use App\Models\VocherModel;

session_start();

class TaiKhoanController extends BaseController
{
    function TaiKhoan()
    {
        $TaiKhoan = TaiKhoanModel::Select();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan', 'taikhoan_id'));
        } else {
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan'));
        }
    }
    function TaiKhoanDelete($id)
    {
        VocherModel::Delete($id);
        PhanLoaiDHModel::Delete($id);
        DanhGiaModel::Delete($id);
        BinhLuanModel::Delete($id);
        TaiKhoanModel::Delete($id);
        $TaiKhoan = TaiKhoanModel::Select();

        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $check['delete'] = true;
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan', 'taikhoan_id', 'check'));
        } else {
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan', 'check'));
        }
    }
    function TaiKhoanEdit($id)
    {
        TaiKhoanModel::setTrangThai($id);
        $TaiKhoan = TaiKhoanModel::Select();
        if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
            $id = $_SESSION['admin'];
            $check['set'] = true;
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan', 'taikhoan_id', 'check'));
        } else {
            $this->BladeOne("AdminTaiKhoan", compact('TaiKhoan', 'check'));
        }
    }
}
