<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;
use App\Models\BienTheModel;
use App\Models\sanPhamModel;
use App\Models\TaiKhoanModel;

session_start();
class ListController extends BaseController
{
  function listAllTK()
  {
    $search=$_POST['search'];
    $Listsp = sanPhamModel::sanPhamAdmin($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }
  function list1TK()
  {
    $search=$_POST['search'];
    $Listsp = sanPhamModel::sanPhamAdmin1($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }
  function list0TK()
  {
    $search=$_POST['search'];
    $Listsp = sanPhamModel::sanPhamAdmin0($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }

// ------------------------------








  function listAll()
  {
    $search="";
    $Listsp = sanPhamModel::sanPhamAdmin($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }
  function list1()
  {
    $search="";
    $Listsp = sanPhamModel::sanPhamAdmin1($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }
  function list0()
  {
    $search="";
    $Listsp = sanPhamModel::sanPhamAdmin0($search);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();

    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc'));
    }
  }


  
  function deleteSanPham($id)
  {
    $seacrch="";
    $Listsp = sanPhamModel::sanPhamAdmin0($seacrch);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();
    BienTheModel::DeleteWhere("idsp", "=", $id);
    sanPhamModel::Delete($id);
    $check['delete'] = true;
    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id', 'check'));
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'check'));
    }
  }
  function setupSp($id)
  {
    $seacrch="";
    $Listsp = sanPhamModel::sanPhamAdmin0($seacrch);
    $danhMuc['Nike'] = sanPhamModel::coutSanPhamNike();
    $danhMuc['Jordan'] = sanPhamModel::coutSanPhamJordan();
    $danhMuc['Mlb'] = sanPhamModel::coutSanPhamMlb();
    sanPhamModel::setupSp($id);
    $check['set'] = true;
    if (isset($_SESSION['admin']) && $_SESSION['admin'] != "") {
      $id = $_SESSION['admin'];
      $taikhoan_id = TaiKhoanModel::SelectWheref('id', '=', $id);
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'taikhoan_id', 'check'));
      // header("Location: http://localhost/ASM2/User-MAU/admin");
    } else {
      $this->BladeOne("AdminList", compact('Listsp', 'danhMuc', 'check'));
    }
  }
}
