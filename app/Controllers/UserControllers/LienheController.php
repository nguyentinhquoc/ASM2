<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use App\Models\dahmucModel;
use App\Models\LienheModel;
use App\Models\TaiKhoanModel;

session_start();

class LienheController extends BaseController
{

    function test()
    {
        $this->BladeOne("testa", []);
    }
    function LienHeGet()
    {
        $danhmuc = dahmucModel::Select();

        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
            $id = $_SESSION['user'];
            $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
            $this->BladeOne("Lienhe", compact('taikhoan_id', 'danhmuc'));
        } else {
            $this->BladeOne("Lienhe", compact('danhmuc'));
        }
    }
    function LienHePost()
    {
        $danhmuc = dahmucModel::Select();

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
                $check = 2;
                $this->BladeOne("Lienhe", compact('taikhoan_id', 'err', 'check', 'danhmuc'));
            } else {
                $this->BladeOne("Lienhe", compact('err', 'check', 'danhmuc'));
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
                $check = 1;
                $this->BladeOne("Lienhe", compact('taikhoan_id', 'check', 'danhmuc'));
            } else {
                $this->BladeOne("Lienhe", compact('check', 'danhmuc'));
            }
        }
    }
}
