<?php
namespace App\Controllers;

use App\Models\dahmucModel;
use App\Models\TaiKhoanModel;

session_start();
class LoginController extends BaseController
{
    function Login()
    {
        $danhmuc = dahmucModel::Select();
        $this->BladeOne("Login", compact('danhmuc'));
    }
    function LogOut(){
        unset($_SESSION['user']);
        header("Location: http://localhost/ASM2/User-MAU/");

    }
    function LoginPost()
    {
        $email_dn = $_POST['email_dn'];
        $pass_dn = $_POST['pass_dn'];
        $taikhoan_all = TaiKhoanModel::Select();
        foreach ($taikhoan_all as $key) {
            if (isset($pass_dn) && isset($email_dn)) {
                if ($key->email == $email_dn && $key->pass == $pass_dn && $key->role == 1 && $key->trangthai == 1) {
                    $_SESSION['user']=$key->id;
                    header("Location: http://localhost/ASM2/User-MAU/");
                } 
                if ($key->email == $email_dn && $key->pass == $pass_dn && $key->role == 2 && $key->trangthai == 1) {
                    $_SESSION['admin']=$key->id;
                    header("Location: http://localhost/ASM2/User-MAU/admin");
                } if ($key->email != $email_dn || $key->pass != $pass_dn) {
                    $err = 1;
                }
            }
        }
        if (isset($err)) {
            $danhmuc = dahmucModel::Select();
            $check = "Lỗi";
            $this->BladeOne("Login", compact('danhmuc', "check"));
        }
    }
}