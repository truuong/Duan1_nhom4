<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/assets/css/flaticon.css">
    <link rel="stylesheet" href="public/assets/css/slicknav.css">
    <link rel="stylesheet" href="public/assets/css/animate.min.css">
    <link rel="stylesheet" href="public/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="public/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/slick.css">
    <link rel="stylesheet" href="public/assets/css/nice-select.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    
</head>

<body>
    <!--? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="public/assets/img/logo/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="public/assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php?page=home">Trang chủ</a></li>
                                    <li><a href="index.php?page=sanpham">Sản phẩm</a></li>
                                    <li><a href="about.html">Về chúng tôi</a></li>
                                    <li><a href="blog.html">Tin tức</a>
                                    </li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                            <span class="flaticon-search"></span>
                                    </div>
                                </li>

                                <?php
                                    if(isset($_SESSION['ss_user'])){
                                        extract($_SESSION['ss_user']);
                                        $a="index.php?page=thongtinkh";
                                        $b='<li>Thoát</li>';
                                    }else{
                                        $a="index.php?page=dangnhap";
                                        $b="";
                                    }

                                ?>
                                <li> <a href="<?php echo $a ?>"><span class="flaticon-user"></span></a></li>
                                
                                <li><a href="index.php?page=cart"><span class="flaticon-shopping-cart"></span></a> </li>
                                <?php echo "<a class='text-dark' href='index.php?page=dangxuat'>$b</a>"; ?>

                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    