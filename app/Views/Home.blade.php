@php
    // session_start();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panda Shop</title>
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Tromic car accessories bootstrap 5 template is an awesome website template for any modern car accessories shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/ASM2/User-MAU/assets/images/logo/dark.png" />
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/magnific-popup.min.css" />
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/plugins/ion.rangeSlider.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Style CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://localhost/ASM2/User-MAU/assets/css/style.css">

</head>

<body>

    <div class="main-wrapper">
        <header class="main-header-area">
            <div class="header-top border-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <ul class="dropdown-wrap text-matterhorn">
                                    <li>
                                        PANDA SHOP - Shop giày uy tín số 1 Fpoly
                                    </li>


                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">

                            <div class="header-top-right text-matterhorn">
                                Email
                                <a href="">: nguyentinh140321@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-sticky py-6 py-lg-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap position-relative">
                                <a href="http://localhost/ASM2/User-MAU/" class="header-logo">
                                    <img src="http://localhost/ASM2/User-MAU/assets/images/logo/dark.png"
                                        alt="Header Logo" width="100px">
                                </a>

                                <div class="main-menu d-none d-lg-block">
                                    <nav class="main-nav">
                                        <ul>

                                            <li class="drop-holder">
                                                <a href="http://localhost/ASM2/User-MAU/">Trang chủ
                                                </a>

                                            </li>

                                            <li class="drop-holder">
                                                <a href="http://localhost/ASM2/User-MAU/SanPham/Page_1">Sản phẩm
                                                    <i class="pe-7s-angle-down"></i>
                                                </a>
                                                <ul class="drop-menu">

                                                    @foreach ($danhmuc as $key)
                                                        <li>
                                                            <a
                                                                href="http://localhost/ASM2/User-MAU/SanPham/listSanPham/{{ $key->id }}/Page_1">{{ $key->name }}</a>
                                                        </li>
                                                    @endforeach


                                                </ul>
                                            </li>
                                            <li class="drop-holder">
                                                <a href="index.php?act=tintuc">Tin tức
                                                </a>

                                            </li>
                                            <li>
                                                <a href="http://localhost/ASM2/User-MAU/Lienhe">Liên hệ</a>
                                            </li>
                                            <li>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        @if (isset($_SESSION['user']) && $_SESSION['user'] != '')
                                            <li class="dropdown d-none d-lg-block">
                                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                                    id="settingButton" data-bs-toggle="dropdown" aria-label="setting"
                                                    aria-expanded="false">
                                                    <img src="http://localhost/ASM2/User-MAU/assets/images/avarta_user/{{ $taikhoan_id->img }}"
                                                        alt="" width="40px" height="40px"
                                                        style="border-radius: 50%; width: 40px; margin: 0 auto;">
                                                </button>
                                                {{ $taikhoan_id->name }}
                                                <ul class="dropdown-menu right-side" aria-labelledby="settingButton">

                                                    <?php
                                                    ?>
                                                    <li><a class="dropdown-item"
                                                            href="http://localhost/ASM2/User-MAU/">Tài
                                                            khoản của tôi</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="http://localhost/ASM2/User-MAU/dangxuat">Đang xuất</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                        @if (!isset($_SESSION['user']) || $_SESSION['user'] == '')
                                            <li class="dropdown d-none d-lg-block">
                                                <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button"
                                                    id="settingButton" data-bs-toggle="dropdown" aria-label="setting"
                                                    aria-expanded="false">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i>

                                                </button>
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/ASM2/User-MAU/dangky">Đang ký</a></li>
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/ASM2/User-MAU/dangnhap">Đang nhập</a></li>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-area">
                <div class="swiper-container main-slider swiper-arrow with-bg_white">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide animation-style-01">
                            <div class="slide-inner bg-height"
                                data-bg-image="http://localhost/ASM2/User-MAU/assets/images/slider/pngtree-shoes-promotion-banner-background-image_1466238.jpg">
                                <div class="container">
                                    <div class="slide-content text-white">
                                        <h3 class="sub-title">Tưng bừng khai trương</h3>
                                        <h2 class="title mb-3">PANDA SHOP</h2>
                                        <p class="short-desc different-width mb-10">Giảm giá cực sốc lên tới 50%</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary"
                                                href="index.php?act=sanpham_list&page=1">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide animation-style-01">
                            <div class="slide-inner bg-height"
                                data-bg-image="http://localhost/ASM2/User-MAU/assets/images/slider/poster-giay-dep-mat.jpg">
                                <div class="container">
                                    <div class="slide-content text-white">
                                        <h3 class="sub-title">Tưng bừng khai trương</h3>
                                        <h2 class="title mb-3">PANDA SHOP</h2>
                                        <p class="short-desc different-width mb-10">Giảm giá cực sốc lên tới 50%</p>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary"
                                                href="index.php?act=sanpham_list&page=1">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination with-bg d-md-none"></div>

                    <!-- Custom Arrows -->
                    <div class="custom-arrow-wrap d-none d-md-block">
                        <div class="custom-button-prev"></div>
                        <div class="custom-button-next"></div>
                    </div>
                </div>

            </div>
            <!-- Slider Area End Here -->

            <div class="background-img">
                <div class="inner-bg">
                    <img src="http://localhost/ASM2/User-MAU/assets/images/background-img/inner-bg/1-1-496x566.png"
                        alt="Inner Background">
                </div>
                <div class="banner-area section-space-top-100">
                    <div class="container">
                        <div class="row">
                            @foreach ($danhmuc as $item)
                                <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                                    <div class="banner-item img-hover-effect">
                                        <div class="banner-img img-zoom-effect">
                                            <img class="img-full"
                                                src="http://localhost/ASM2/User-MAU/assets/images/banner/{{ $item->img }}"
                                                alt="Banner Image" height="609px">
                                            <div class="inner-content text-white">
                                                <h2 class="title mb-5">{{ $item->name }}</h2>
                                                <h3 class="offer"
                                                    style="background-color: rgba(115, 111, 111, 0.8);">
                                                    {{ $item->mota }}</h3>
                                                <div class="button-wrap">
                                                    <a class="btn btn-custom-size btn-primary"
                                                        href="http://localhost/ASM2/User-MAU/SanPham/{{ $item->name }}">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- Begin Shipping Area -->
                <div class="shipping-area section-space-y-axis-100">
                    <div class="container">
                        <div class="shipping-bg"
                            data-bg-image="http://localhost/ASM2/User-MAU/assets/images/shipping/bg/1-1-1280x202.jpg">
                            <div class="row shipping-wrap py-5 py-xl-0">
                                <div class="col-lg-4">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="http://localhost/ASM2/User-MAU/assets/images/shipping/icon/plane.png"
                                                alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">Hỗ trợ trực tuyến</h2>
                                            <p class="short-desc mb-0">Đảm bảo hộ trợ trực tuyến cho khách hàng 24/24
                                                khi gọi vào
                                                hotline</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-4 pt-lg-0">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="http://localhost/ASM2/User-MAU/assets/images/shipping/icon/earphones.png"
                                                alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">Miến phí vận chuyển</h2>
                                            <p class="short-desc mb-0">Miễn phí cho đơn hàng có giá trị lớn hơn
                                                1.000.000đ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pt-4 pt-lg-0">
                                    <div class="shipping-item">
                                        <div class="shipping-img">
                                            <img src="http://localhost/ASM2/User-MAU/assets/images/shipping/icon/shield.png"
                                                alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-content">
                                            <h2 class="title">An toàn bảo mật</h2>
                                            <p class="short-desc mb-0">Đảm bảo chất lượng sản phẩm, bảo mật thông tin
                                                tuyệt đối</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shipping Area End Here -->

            </div>

            <!-- Begin Product Area -->
            <div class="brand-area section-space-y-axis-100 white-smoke-bg">
                <div class="container">
                    <h2>SẢN PHẨM MỚI NHẤT</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container brand-slider">
                                <div class="swiper-wrapper" style="height:500px;">

                                    @foreach ($sanPhamMoi as $key)
                                        <a href="http://localhost/ASM2/User-MAU/SanPham/{{ $key->id }}"></a>
                                        <div class="swiper-slide">
                                            <a class="brand-item"
                                                href="http://localhost/ASM2/User-MAU/SanPham/{{ $key->id }}">
                                                <img src="{{ 'assets/images/sanpham/' . $key->img }}"
                                                    alt="Brand Image" height="300px" width="200px"
                                                    style="border-radius: 10px;">
                                            </a>
                                            <p class="price_sp">{{ number_format($key->price, 0, ',', '.') }}
                                                <del
                                                    style="color: #ccc9c2;">{{ number_format($key->price + $key->price * ($key->sale / 100), 0, ',', '.') }}</del>
                                            </p>
                                            <p class="name_sp">{{ $key->name }}</p>

                                            <p class="dabansp">Đã bán :{{ $key->total_luotban }}</p>
                                        </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Area End Here -->

            <!-- Begin Banner Area -->
            <div class="banner-area section-border-y-axis ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 align-self-md-center order-2 order-md-1 pt-5 pt-md-0">
                            <div class="banner-content text-center">
                                <div class="inner-img mb-2">
                                    <img src="http://localhost/ASM2/User-MAU/assets/images/banner/inner-img/1-1-201x57.png"
                                        alt="Banner Image">
                                </div>
                                <h3 class="title text-charcoal">Ngày hội mua sắm</h3>
                                <h4 class="sub-title text-primary mb-6">Hot Deal ! Sale Up To 40% Off </h4>
                                <div class="countdown-wrap pb-8">
                                    <div countdown="" data-date="December 15 2023 10:10:10">
                                        Chỉ còn: <span data-days>00</span> ngày
                                        <span data-hours>00</span> giờ
                                        <span data-minutes>00</span> phút
                                        <span data-seconds>00</span> giây
                                    </div>
                                </div>
                                <div class="button-wrap pb-8 pb-md-0">
                                    <a class="btn btn-custom-size lg-size btn-primary"
                                        href="index.php?act=sanpham_list&page=1">Shop
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-md-2">
                            <div class="banner-img">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/banner/2-1-407x529.png"
                                    alt="Banner Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Area End Here -->
            <div class="brand-area section-space-y-axis-100 white-smoke-bg">
                <div class="container">
                    <h2>SẢN PHẨM BÁN CHẠY</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper-container brand-slider">
                                <div class="swiper-wrapper">

                                    @foreach ($sanPhamBanChay as $key)
                                        <div class="swiper-slide">
                                            <a href="http://localhost/ASM2/User-MAU/SanPham/{{ $key->id }}">
                                                <img src="{{ 'assets/images/sanpham/' . $key->img }}"
                                                    alt="Brand Image" height="300px" width="200px"
                                                    style="border-radius: 10px;">
                                            </a>
                                            <p class="price_sp">{{ number_format($key->price, 0, ',', '.') }}
                                                <del
                                                    style="color: #ccc9c2;">{{ number_format($key->price + $key->price * ($key->sale / 100), 0, ',', '.') }}</del>
                                            </p>
                                            <p class="name_sp">{{ $key->name }}</p>

                                            <p class="dabansp">Đã bán :{{ $key->total_luotban }}</p>
                                        </div>
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="newsletter-area section-border-y-axis">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="newsletter-img">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/newsletter/1-1-491x529.png"
                                    alt="Newsletter Image">
                            </div>
                        </div>
                        <div class="col-md-6 align-self-md-center pb-10 pb-md-0">
                            <div class="newsletter-content">
                                <h2 class="newsletter-title mb-4">Cùng nhau mua sắm.</h2>
                                <h3 class="newsletter-sub-title text-primary mb-8">Giúp nhau săn sale !!!</h3>
                                <form action="index.php" method="post" style="display: flex;">
                                    <input style="width: 400px; border:0; background-color: #dfdfdf;" type="email"
                                        name="marketing_email" placeholder="Nhập email người giới thiệu">
                                    <div class="button-wrap">
                                        <button class="btn btn-custom-size btn-primary" " name="
                                marketing_submit">Subscribe</button>
                        </div>
                    </form>
                    
                    <!-- Mailchimp Alerts -->
                    <div class="mailchimp-alerts text-centre pt-5">
                        <div class="mailchimp-submitting"></div>
                        <div class="mailchimp-success"></div>
                        <div class="mailchimp-error"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Area End Here -->


<!-- Begin Brand Area -->
<div class="brand-area section-space-y-axis-100 white-smoke-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide img_f_home ">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-1.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-2.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-3.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-4.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-5.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-6.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                        <div class="swiper-slide img_f_home">
                            <a class="brand-item-f" href="#">
                                <img src="http://localhost/ASM2/User-MAU/assets/images/brand/1-7.png" alt="Brand Image" width="150px" height="200px"
                                    style="border-radius: 20px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="footer-area">
                <div class="footer-top section-space-y-axis-100 text-lavender"
                    data-bg-image="http://localhost/ASM2/User-MAU/assets/images/background-img/1-4-1920x419.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="widget-item">
                                    <div class="footer-logo pb-4">
                                        <a href="http://localhost/ASM2/User-MAU/">
                                            <img src="http://localhost/ASM2/User-MAU/assets/images/logo/light.png" alt="Logo" width="200px">
                                        </a>
                                    </div>
                                    <p class="short-desc mb-2">Chào mừng đến với Panda shop WEBSITE BÁN GIÀY SỐ 1 VIỆT
                                        NAM.</p>
                                    <div class="social-link pt-2">
                                        <ul>
                                            <li>
                                                <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-tumblr"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Facebook" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-tippy="Instagram" data-tippy-inertia="true"
                                                    data-tippy-animation="shift-away" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                                <div class="widget-item">
                                    <h3 class="widget-title mb-5">Quick Links</h3>
                                    <ul class="widget-list-item">
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Support</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Helpline</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Courses</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">About</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Event</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Subject</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                                <div class="widget-item">
                                    <h3 class="widget-title mb-5">Company</h3>
                                    <ul class="widget-list-item">
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">About</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Speakers</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Contact</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Tricket</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Seminar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 pt-8 pt-lg-0">
                                <div class="widget-item">
                                    <h3 class="widget-title mb-5">About Tromic</h3>
                                    <ul class="widget-list-item">
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">How to Shop</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Contact us</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">My Wishlist</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Checkout</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Log in</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <a href="#">Help</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 pt-8 pt-lg-0">
                                <div class="widget-item">
                                    <h3 class="widget-title mb-5">Store Information.</h3>
                                </div>
                                <div class="widget-contact-info pb-2">
                                    <ul>
                                        <li>
                                            FPT HÀ NỘI
                                        </li>
                                        <li>
                                            <a href="mailto://info@example.com">nguyentinh140321@gmail.com</a>
                                        </li>
                                        <li>
                                            <a href="tel://+68-120034509">0862201004</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="payment-method">
                                    <a href="#">
                                        <img src="http://localhost/ASM2/User-MAU/assets/images/payment/1.png" alt="Payment Method">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom bg-midnight-express py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright">
                                    <span class="copyright-text">© 2022 Tromic Made with <i
                                            class="fa fa-heart text-danger"></i> by <a
                                            href="https://themeforest.net/user/codecarnival/portfolio" rel="noopener"
                                            target="_blank">CodeCarnival</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Area End Here -->

            <!-- Begin Modal Area -->
            <div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-wrap row">
                                <div class="col-lg-6">
                                    <div class="modal-img">
                                        <div class="swiper-container modal-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-1-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-2-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-3-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-4-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-5-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="#" class="single-img">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-6-618x578.jpg"
                                                            alt="Product Image">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="thumbs-arrow-holder">
                                            <div class="swiper-container modal-thumbs">
                                                <div class="swiper-wrapper">
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-1-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-2-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-3-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-4-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-5-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                    <a href="#" class="swiper-slide">
                                                        <img class="img-full"
                                                            src="http://localhost/ASM2/User-MAU/assets/images/product/large-size/2-6-618x578.jpg"
                                                            alt="Product Thumnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="thumbs-button-wrap d-none d-md-block">
                                                <div class="thumbs-button-prev">
                                                    <i class="pe-7s-angle-left"></i>
                                                </div>
                                                <div class="thumbs-button-next">
                                                    <i class="pe-7s-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pt-9 pt-lg-0">
                                    <div class="single-product-content">
                                        <h2 class="title mb-3">Auto Clutch & Brake</h2>
                                        <div class="price-box pb-3">
                                            <span class="new-price text-danger">$440.00</span>
                                        </div>
                                        <div class="rating-box-wrap pb-55">
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="review-status ps-4">
                                                <a href="#">( 5 Customer Review )</a>
                                            </div>
                                        </div>
                                        <div class="selector-wrap color-option">
                                            <span class="selector-title border-bottom-0">Color</span>
                                            <select class="nice-select wide border-bottom-0 rounded-0">
                                                <option value="default">Dark Black With Shadow</option>
                                                <option value="blue">Blue</option>
                                                <option value="green">Green</option>
                                                <option value="red">Red</option>
                                            </select>
                                        </div>
                                        <div class="selector-wrap pb-55">
                                            <span class="selector-title">Size</span>
                                            <select class="nice-select wide rounded-0">
                                                <option value="medium">Medium Size With Screw</option>
                                                <option value="large">Large Size With Screw</option>
                                                <option value="small">Small Size With Screw</option>
                                            </select>
                                        </div>
                                        <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea com consequat. Duis aute irure dolor in reprehend in voluptate velit
                                            esse cillum dolore</p>
                                        <ul class="quantity-with-btn pb-9">
                                            <li class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                </div>
                                            </li>
                                            <li class="add-to-cart">
                                                <a class="btn btn-custom-size lg-size btn-primary"
                                                    href="cart.html">Add to cart</a>
                                            </li>
                                            <li class="wishlist-btn-wrap">
                                                <a class="custom-circle-btn" href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                            <li class="compare-btn-wrap">
                                                <a class="custom-circle-btn" href="compare.html">
                                                    <i class="pe-7s-refresh-2"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="product-category pb-3">
                                            <span class="title">SKU:</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Ch-256xl</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-category pb-3">
                                            <span class="title">Categories :</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Office,</a>
                                                </li>
                                                <li>
                                                    <a href="#">Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-category product-tags pb-3">
                                            <span class="title">Tags :</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Furniture</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-category social-link align-items-center pb-lg-8">
                                            <span class="title pe-3">Share:</span>
                                            <ul>
                                                <li>
                                                    <a href="#" data-tippy="Pinterest"
                                                        data-tippy-inertia="true" data-tippy-animation="shift-away"
                                                        data-tippy-delay="50" data-tippy-arrow="true"
                                                        data-tippy-theme="sharpborder">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tippy="Twitter" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tippy="Tumblr" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-tumblr"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-tippy="Dribbble" data-tippy-inertia="true"
                                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                                        data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="fa fa-dribbble"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="scroll-to-top" href="#">
                <i class="fa fa-chevron-up"></i>
            </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/wow.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/jquery-ui.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/jquery.nice-select.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/parallax.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/tippy.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/plugins/mailchimp-ajax.js"></script>
    <script src="http://localhost/ASM2/User-MAU/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Name);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Name === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Name);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Name === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Name);
                    }
                }
            };
        }
    </script>
</body>



</html>
