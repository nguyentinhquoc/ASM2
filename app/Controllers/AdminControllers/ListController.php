<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\BienTheModel;
use App\Models\sanPhamModel;
use App\Models\TaiKhoanModel;

session_start();
class ListController extends BaseController
{
function listAll(){
    $Listsp=sanPhamModel::sanPhamAdmin();
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
    $this->BladeOne("AdminList",compact('Listsp','danhMuc','taikhoan_id'));
  } else {
    $this->BladeOne("AdminList",compact('Listsp','danhMuc'));
  }
}
function list1(){
    $Listsp=sanPhamModel::sanPhamAdmin1();
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
    $this->BladeOne("AdminList",compact('Listsp','danhMuc','taikhoan_id'));
  } else {
    $this->BladeOne("AdminList",compact('Listsp','danhMuc'));
  }
}
function list0(){
    $Listsp=sanPhamModel::sanPhamAdmin0();
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
    $this->BladeOne("AdminList",compact('Listsp','danhMuc','taikhoan_id'));
  } else {
    $this->BladeOne("AdminList",compact('Listsp','danhMuc'));
  }
}

function deleteSanPham($id){
  BienTheModel::DeleteWhere("idsp","=",$id);
  sanPhamModel::Delete($id);
  header("Location: http://localhost/ASM2/User-MAU/admin/");
}
function setupSp($id){
  sanPhamModel::setupSp($id);
  header("Location: http://localhost/ASM2/User-MAU/admin/");
}
}?>