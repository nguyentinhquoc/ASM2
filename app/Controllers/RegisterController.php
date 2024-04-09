<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\dahmucModel;
use App\Models\TaiKhoanModel;
session_start();

class RegisterController extends BaseController
{
    function Register(){
        $danhmuc = dahmucModel::Select();
        $this->BladeOne("Register",compact('danhmuc'));
}
    function RegisterPost(){

        if (isset($_POST['submit_dk'])) {
            $pattern_tel = '/^(03[2-9]|07[0-9]|08[1-9]|09[0-9])[0-9]{7}$/';
            $pattern_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            $name_dk = $_POST['name_dk'];
            $tel_dk = $_POST['tel_dk'];
            $email_dk = $_POST['email_dk'];
            $pass_dk = $_POST['pass_dk'];
            $repass_dk = $_POST['repass_dk'];
            $address = $_POST['tinh'] . "-" . $_POST['huyen'] . "-" . $_POST['xa'];
            $check_dk = true;
            $taikhoan_all = TaiKhoanModel::Select();
            foreach ($taikhoan_all as $key) {
                if (isset($key->email) && isset($key->tel) && isset($tel_dk) && isset($email_dk)) {
                    if ($key->email == $email_dk) {
                        $err['email'] = "* Email đã tồn tại";
                        $check_dk = false;
                    }
                    if ($key->tel == $tel_dk) {
                        $err['tel'] = "* Số điện thoại đã tồn tại";
                        $check_dk = false;
                    }
                }
            }
            if ($_POST['xa'] == "") {
                $err['diachi'] = '* Vui lòng nhập địa chỉ';
                $check_dk = false;
            }
            if (!preg_match($pattern_tel, $tel_dk)) {
                if (isset($tel_dk)) {
                    $check_dk = false;
                    $err['tel'] = "* Số điện thoại không hợp lệ";
                }
            }
            if (!preg_match($pattern_email, $email_dk)) { 
                if (isset($email_dk)) {
                    $check_dk = false;
                    $err['email'] = "* Email không hợp lệ";
                }
            }
        
            if (isset($name_dk) && $name_dk == "") {
                $err['name'] = "* Vui lòng nhập họ và tên";
                $check_dk = false;
            }
            if (isset($pass_dk) && $pass_dk == "") {
                $err['pass'] = "* Vui lòng nhập mật khẩu";
                $check_dk = false;
            } elseif (strlen($pass_dk) <= 6) {
                $err['pass'] = "* Mật khẩu phải nhiều hơn 6 ký tự";
            }
            if (isset($repass_dk) && $repass_dk == "") {
                $err['rePass'] = "* Vui lòng nhập lại mật khẩu";
                $check_dk = false;
            }
            if ($pass_dk != $repass_dk) {
                $err['rePass'] = "* Xác nhận mật khẩu sai !!!";
                $check_dk = false;
            }
            if ($check_dk==false) {
                $danhmuc = dahmucModel::Select();
                $this->BladeOne("Register",compact('danhmuc','err'));
            }
            if ($check_dk == true) {
                TaiKhoanModel::dangky($name_dk,$pass_dk, $tel_dk,$email_dk,$address);
                header("Location: http://localhost/ASM2/User-MAU/dangnhap");
            }
        }

}
}