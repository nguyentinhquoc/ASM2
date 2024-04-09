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
         if ($_POST['search']!="") {
          $Search=$_POST['search'];
          $tuKhoa=$Search;
          $check = true;
          $sanpham_list=sanPhamModel::sanPhamSearchAll($Search,$viTriBatDau);
          $sanpham_listCount=sanPhamModel::sanPhamSearchAllCount($Search);
        }
       }
       if ($check==false) {
        $tuKhoa="";
        $Search=false;
        $sanpham_list=sanPhamModel::sanPhamSearchAll($Search,$viTriBatDau);
        $sanpham_listCount=sanPhamModel::sanPhamSearchAllCount($Search);
       }
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
      $vtriBD = ($page - 1) * 20;
      $danhmuc = dahmucModel::Select();
      if (isset($_POST['search'])) {
        if ($_POST['search']!="") {
         $Search=$_POST['search'];
         $tuKhoa=$Search;
         $check = true;
         $sanpham_list=sanPhamModel::sanPhamSearchDM($Search,$iddm,$vtriBD);

         $sanpham_listCount=sanPhamModel::sanPhamSearchDMCount($Search,$iddm);
       }
      }
      if ($check==false) {
       $tuKhoa="";
       $Search=false;
       $sanpham_list=sanPhamModel::sanPhamSearchDM($Search,$iddm,$vtriBD);
       $sanpham_listCount=sanPhamModel::sanPhamSearchDMCount($Search,$iddm);
      }
        $danhmucDS = dahmucModel::SelectOne($iddm);
        $DSSP="Danh sách sản phẩm: $danhmucDS->name";
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
          $id = $_SESSION['user'];
          $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
          $this->BladeOne("List",compact('sanpham_list','danhmuc','taikhoan_id','DSSP','tuKhoa','page'));
      } else {
        $this->BladeOne("List",compact('sanpham_list','danhmuc','DSSP','tuKhoa','page'));
      }
    }
    //  function listJordan(){
    //    $danhmuc = dahmucModel::Select();
    //     $sanpham_list=sanPhamModel::SelectWhere('iddm','=','2');
    //     if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
    //       $id = $_SESSION['user'];
    //       $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
    //       $this->BladeOne("List",compact('sanpham_list','danhmuc','taikhoan_id'));
    //   } else {
    //     $this->BladeOne("List",compact('sanpham_list','danhmuc'));
    //   }
    // }
    //  function listMlb(){
    //    $danhmuc = dahmucModel::Select();
    //     $sanpham_list=sanPhamModel::SelectWhere('iddm','=','3');
    //     if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
    //       $id = $_SESSION['user'];
    //       $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
    //       $this->BladeOne("List",compact('sanpham_list','danhmuc','taikhoan_id'));
    //   } else {
    //     $this->BladeOne("List",compact('sanpham_list','danhmuc'));
    //   }
    // }
}