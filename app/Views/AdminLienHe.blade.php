<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 23:15:27 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost/ASM2/User-MAU/assetsadmin/images/favicon.ico">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- App css -->

    <link href="http://localhost/ASM2/User-MAU/assetsadmin/css/app.min.css" rel="stylesheet" type="text/css"
        id="app-style" />

    <!-- icons -->
    <link href="http://localhost/ASM2/User-MAU/assetsadmin/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid"
    data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default'
    data-sidebar-user='true'>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="d-none d-lg-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                <button class="btn input-group-text" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found 22 results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-home me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-aperture me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle"
                                                src="http://localhost/ASM2/User-MAU/assetsadmin/images/users/user-2.jpg"
                                                alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                <span class="font-12 mb-0">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex align-items-start">
                                            <img class="d-flex me-2 rounded-circle"
                                                src="http://localhost/ASM2/User-MAU/assetsadmin/images/users/user-5.jpg"
                                                alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="font-12 mb-0">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </li>

                <li class="dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fe-bell noti-icon"></i>
                        <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="#" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="noti-scroll" data-simplebar>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon">
                                    <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/users/user-1.jpg"
                                        class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Cristina Pride</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Hi, How are you? What about our next meeting</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">1 min ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/users/user-4.jpg"
                                        class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user registered.
                                    <small class="text-muted">5 hours ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);"
                            class="dropdown-item text-center text-primary notify-item notify-all">
                            View all
                            <i class="fe-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false">

                        <img src="http://localhost/ASM2/User-MAU/assets/images/avarta_user/{{ $taikhoan_id->img }}"
                            alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                            {{ $taikhoan_id->name }} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="contacts-profile.html" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="http://localhost/ASM2/User-MAU/dangxuat" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-light text-center">
                    <span class="logo-sm">
                        <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/logo-sm.png" alt=""
                            height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/logo-light.png" alt=""
                            height="16">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark text-center">
                    <span class="logo-sm">
                        <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/logo-sm.png" alt=""
                            height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="http://localhost/ASM2/User-MAU/assetsadmin/images/logo-dark.png" alt=""
                            height="16">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                 <li style="list-style: none">
                    <button class="button-menu-mobile disable-btn waves-effect">
                        <i class="fe-menu"></i>
                    </button>
                </li>
                 <li style="list-style: none">
                    <h4 class="page-title-main">Dashboard</h4>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="http://localhost/ASM2/User-MAU/assets/images/avarta_user/{{ $taikhoan_id->img }}"
                        alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                    <div class="dropdown">
                        <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block"
                            data-bs-toggle="dropdown" aria-expanded="false">{{ $taikhoan_id->name }}</a>
                        <div class="dropdown-menu user-pro-dropdown">


                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->


                            <!-- item-->
                            <a href="http://localhost/ASM2/User-MAU/dangxuat" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>

                    <p class="text-muted left-user-info">Admin Head</p>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-muted left-user-info">
                                <i class="mdi mdi-cog"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#">
                                <i class="mdi mdi-power"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <li class="menu-title mt-2">Chi tiết</li>
                     <li style="list-style: none">
                        <a href="#sidebarTaskssp" data-bs-toggle="collapse">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span> Quản lí sản phẩm </span>
                        </a>
                        <div class="collapse" id="sidebarTaskssp">
                            <ul class="nav-second-level">
                                 <li style="list-style: none">
                                    <a href="http://localhost/ASM2/User-MAU/admin">Tất cả sản phẩm</a>
                                </li>
                                 <li style="list-style: none">
                                    <a href="http://localhost/ASM2/User-MAU/admin/1">Sản phẩm hiển thị</a>
                                </li>
                                 <li style="list-style: none">
                                    <a href="http://localhost/ASM2/User-MAU/admin/0">Sản phẩm ẩn</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Tài khoản</li>
                     <li style="list-style: none">
                        <a href="http://localhost/ASM2/User-MAU/admin/TaiKhoan">
                            <span> Quản lí tài khoản </span>
                        </a>
                    </li>
                    <li class="menu-title mt-2">Liên hệ</li>
                     <li style="list-style: none">
                        <a href="http://localhost/ASM2/User-MAU/admin/LienHe">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span> Tổng hợp liên hệ</span>
                        </a>
                    </li>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
    </div>
</body>

<main>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Quản lý liên hệ</h4>
                                <p class="text-muted font-14 mb-3">
                                    Dưới đây là bảng quản lí tất cả các thắc mắc của khách hàng
                                    <br>
                            </div>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Họ tên khách hàng</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lienHe as $key => $value)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }} </th>
                                            <td>{{ $value->fullname }} </td>
                                            <td>{{ $value->email }} </td>
                                            <td>{{ $value->tel }} </td>
                                            <td>{{ $value->noidung }} </td>
                                            <td><a onclick="return confirm('Bạn chắc muốn xóa chứ ?')"
                                                    style="color: white; background: red; border-radius: 3px; padding: 8px"
                                                    href="http://localhost/ASM2/User-MAU/admin/delete/LienHe/{{ $value->id }}">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</main>

</footer>
<!-- end Footer -->
</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">

    <div data-simplebar class="h-100">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
        </div>

        <!-- Tab panes -->
        <div class="tab-content pt-0">

            <div class="tab-pane active" id="settings-tab" role="tabpanel">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, Layout, etc.
                    </div>

                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                            id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                            id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="fluid"
                            id="fluid" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="boxed"
                            id="boxed" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed"
                            id="fixed-check" checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                            id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="light"
                            id="light" />
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark"
                            id="dark" checked />
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand"
                            id="brand" />
                        <label class="form-check-label" for="brand-check">Brand</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient"
                            id="gradient" />
                        <label class="form-check-label" for="gradient-check">Gradient</label>
                    </div>

                    <!-- size -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                            id="default-size-check" checked />
                        <label class="form-check-label" for="default-size-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                            id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small
                                size)</small></label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                            id="compact-check" />
                        <label class="form-check-label" for="compact-check">Compact <small>(Small
                                size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="sidebar-user" value="true"
                            id="sidebaruser-check" />
                        <label class="form-check-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark"
                            id="darktopbar-check" checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light"
                            id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i
                                class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
@if (isset($check) && $check['delete'] == true)
    <script>
        Swal.fire({
            title: "Xóa liên hệ thành công",
            icon: "success",
            willClose: () => {
                window.location.href = "http://localhost/ASM2/User-MAU/admin/LienHe";
            }
        });
    </script>
@endif

<!-- Vendor -->
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/jquery/jquery.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/simplebar/simplebar.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/node-waves/waves.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/feather-icons/feather.min.js"></script>

<!-- knob plugin -->
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/jquery-knob/jquery.knob.min.js"></script>

<!--Morris Chart-->
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/morris.js06/morris.min.js"></script>
<script src="http://localhost/ASM2/User-MAU/assetsadmin/libs/raphael/raphael.min.js"></script>

<!-- Dashboar init js-->
<script src="http://localhost/ASM2/User-MAU/assetsadmin/js/pages/dashboard.init.js"></script>

<!-- App js-->
<script src="http://localhost/ASM2/User-MAU/assetsadmin/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2023 23:15:28 GMT -->

</html>
