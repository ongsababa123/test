<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="<?= base_url('assets/fontgoogle.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dist/sweetalert/sweetalert2.min.css'); ?>">
    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/paper-kit.css') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/demo/demo.css') ?>" rel="stylesheet" />

</head>
<style>
    * {
        font-family: 'Kanit', sans-serif;
    }
</style>

<body class="landing-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-success" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?= site_url('/') ?>" rel="tooltip" title="Coded by Creative Tim"
                    data-placement="bottom">
                    ร้านบางเล่ม
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= site_url('/book/booklist') ?>" class="nav-link"> รายการหนังสือ</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/contact') ?>" class="nav-link"> ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/login') ?>" class="btn btn-warning btn-round">ล็อคอิน</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="btn btn-warning btn-round"><i
                                class="fas fa-user-circle"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('/cart') ?>">ตระกร้าสินค้า <i class="fas fa-shopping-cart"></i></a>
                            <a class="dropdown-item" href="<?= site_url('/profile') ?>">โปรไฟล์ <i
                                    class="fas fa-id-card-alt"></i></a>
                            <a class="dropdown-item" href="<?= site_url('/history') ?>">ประวัติเช่าหนังสือ <i class="fas fa-history"></i></a>
                            <a class="dropdown-item" href="#">ออกจากระบบ <i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?= base_url('assets/js/plugins/bootstrap-switch.js') ?>"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url('assets/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?= base_url('assets/js/plugins/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages, etc -->
    <script src="<?= base_url('assets/js/paper-kit.js?v=2.2.0') ?>" type="text/javascript"></script>
    <script src="<?= base_url('dist/sweetalert/sweetalert2.js'); ?>"></script>
</body>

</html>