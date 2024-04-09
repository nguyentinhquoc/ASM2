<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use App\Models\LienheModel;
use App\Models\TaiKhoanModel;

session_start();

class LienheController extends BaseController
{

    function LienHeGet()
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
            $id = $_SESSION['user'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("Lienhe", compact('taikhoan_id'));
        } else {
            $this->BladeOne("Lienhe", []);
        }
    }
    function LienHePost()
    {
        $pattern_tel = '/^(03[2-9]|07[0-9]|08[1-9]|09[0-9])[0-9]{7}$/';
        $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $tel_lh = $_POST['tel'];
        $email_lh = $_POST['email'];
        $noidung_lh = $_POST['noidung'];
        $fullName_lh = $_POST['name'];
        $check_lh = true;
        if (!preg_match($pattern_tel, $tel_lh)) {
            if (isset($tel_lh)) {
                $check_lh = false;
                $err['sdt'] = "* Số điện thoại không hợp lệ";
            }
        }
        if (!preg_match($pattern_email, $email_lh)) {
            if (isset($email_lh)) {
                $check_lh = false;
                $err['email']  = "* Email không hợp lệ";
            }
        }
        if ($check_lh == false) {
            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                $id = $_SESSION['user'];
                $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
                $check = false;
                $this->BladeOne("Lienhe", compact('taikhoan_id', 'err', 'check'));
            } else {
                $this->BladeOne("Lienhe", compact('err', 'check'));
            }
        }
        if ($check_lh == true) {
            $noidung = $_POST['noidung'];
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            LienheModel::sendLienHe($noidung, $fullname, $email, $tel);
            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                $id = $_SESSION['user'];
                $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
                $check = true;
                $this->BladeOne("Lienhe", compact('taikhoan_id', 'check'));
            } else {
                $this->BladeOne("Lienhe", compact('check'));
            }
        }
    }
}
