<?php

namespace App\Controllers\UserControllers;

use App\Controllers\BaseController;
use App\Models\dahmucModel;
use App\Models\sanPhamModel;
use App\Models\TaiKhoanModel;

session_start();

class ListController extends BaseController
{

     function listAll($page){
      $viTriBatDau = ($page - 1) * 20;
       $danhmuc = dahmucModel::Select();
       $check = false;
       if (isset($_POST['search'])) {
          $Search=$_POST['search'];
          $_SESSION['search']=$_POST['search'];
          $tuKhoa=$Search;
          $check = true;
       }
       if ($check==false) {
         $Search="";
         if (isset($_SESSION['search'])) {
           $Search=$_SESSION['search'];
          }
          $tuKhoa=$Search;
      }
      $sanpham_list=sanPhamModel::sanPhamSearchAll($Search,$viTriBatDau);
      $sanpham_listCount=sanPhamModel::sanPhamSearchAllCount($Search);
       $DSSP="Tất cả sản phẩm";
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
          $id = $_SESSION['user'];
          $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
          $this->BladeOne("List",compact('sanpham_list','danhmuc','taikhoan_id','DSSP','tuKhoa','page','sanpham_listCount'));
      } else {
        $this->BladeOne("List",compact('sanpham_list','danhmuc','DSSP','tuKhoa','page','sanpham_listCount'));
      }
    }


     function list($iddm,$page){
      $viTriBatDau = ($page - 1) * 20;
      $danhmuc = dahmucModel::Select();
      $check = false;
      if (isset($_POST['search'])) {
         $Search=$_POST['search'];
         $_SESSION['search']=$_POST['search'];
         $tuKhoa=$Search;
         $check = true;
      }
      if ($check==false) {
        $Search="";
        if (isset($_SESSION['search'])) {
          $Search=$_SESSION['search'];
         }
         $tuKhoa=$Search;
     }
      $sanpham_list=sanPhamModel::sanPhamSearchDM($Search,$iddm,$viTriBatDau);
      $sanpham_listCount=sanPhamModel::sanPhamSearchDMCount($Search,$iddm);
        $danhmucDS = dahmucModel::SelectOne($iddm);
        $DSSP="Danh sách sản phẩm: $danhmucDS->name";
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
          $id = $_SESSION['user'];
          $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
          $this->BladeOne("List",compact('sanpham_list','danhmuc','taikhoan_id','DSSP','tuKhoa','page','sanpham_listCount'));
      } else {
        $this->BladeOne("List",compact('sanpham_list','danhmuc','DSSP','tuKhoa','page','sanpham_listCount'));
      }
    }
}