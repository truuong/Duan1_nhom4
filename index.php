<?php
ob_start();
session_start();

include "dao/pdo.php";
include "dao/user.php";
include "dao/global.php";
include "dao/sanpham.php";
include "dao/categories.php";

include "site/components/header.php";


if (isset($_GET["page"])){
$page=$_GET["page"];
    switch ($page){
        case 'home':
            include_once "site/pages/home.php";
            break;

        case 'shop':
            include_once "site/pages/product.php";
            break;
        

        case 'dangnhap':
            if(isset($_POST["dangnhap"])){
                $username=$_POST["username"];
                $password=$_POST["password"];
                //xu li:kiem tra
                $kh=checkuser($username,$password);
                if(is_array($kh)){
                    $_SESSION['ss_user']=$kh;
                    header('Location: index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại hoặc sai thông tin đăng nhập!!";
                };
            }
            include "site/pages/login.php";
            break;

        case 'cart':
            include_once "site/pages/cart.php";
            break;

        case 'about':
            include_once "site/pages/about.php";
            break;
        case 'thongtinkh':

            include_once "site/pages/thongtinkh.php";
            break;
        case 'dangxuat':
            session_unset();
            header('Location: index.php');
            break;

        case 'shop_detail':
            include_once "site/pages/product_detail.php";
            break;
            
        default:
            include_once "site/pages/home.php";
        
    }
}else{
    include "site/pages/home.php";
        
}



include_once "site/components/footer.php";


?>