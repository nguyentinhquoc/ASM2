<?php
/* -------------------------------------------------------------------------- */
/*                         REQUIRE CÁC FILE CẦN THIẾT                         */
require_once 'env.php';
require_once 'vendor/autoload.php';
require_once 'phroute.php';
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*              SO SÁNH KHI ĐỔI TRANG THÌ UNSET SESSION TÌM KIẾM              */
$URL=$_SERVER['REQUEST_URI'];
$check = 'ASM2/User-MAU/SanPham';
if (strpos($URL, $check) === false) {
    unset($_SESSION['search']); 
}
/* -------------------------------------------------------------------------- */
?>