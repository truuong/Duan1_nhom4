<?php
ob_start();
session_start();
include 'dao/pdo.php';
include 'dao/categories.php';
include 'dao/sanpham.php';
include 'dao/binhluan.php';
include 'dao/User.php';
include 'dao/thongke.php';
include "global.php";
include "site/components/header.php";
$sptop8 =  products_select_top8();
$dsdm = loai_select_all();
$spall = products_select_all();
$spnew =  products_select_new();
if (isset($_GET["page"])){
$page=$_GET["page"];
    switch ($page){
        case 'home':
            include "site/pages/home.php";
            break;

        case 'login':
            include "site/pages/login.php";
            break;

        case 'shop':
            include "site/pages/product.php";
            break;

        case 'cart':
            if(isset($_POST["themvaogio"])){
                include "site/pages/cart.php";

            }else{
                include "site/pages/cart.php";            }
            break;
        

        case 'about':
            include "site/pages/about.php";
            break;
        
        case 'dangnhap':
            if(isset($_POST["dangnhap"])){
                $username=$_POST["username"];
                $password=$_POST["password"];
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

         case 'noidungtimkiem':
        if(isset($_POST['noidung']) && ($_POST['noidung'])!=""){
            $noidung = $_POST['noidung'];
            $nd= products_select_keyword($noidung);
            include 'site/pages/noidungtimkiem.php';
        }else{
            include 'site/pages/home.php';
        }
        break;

        case 'sanpham':
        if(isset($_GET['id']) && ($_GET['id'])>0){
            $id = $_GET['id'];
            $dssp = products_select_by_loai($id);
            include 'site/pages/product.php';
        }else{
            include 'site/pages/product.php';
        }
        break;

        case 'chitietsanpham':
            if(isset($_GET['id']) && ($_GET['id'])>0){
                $id = $_GET['id'];
                $onesp = products_select_by_id($id);
                extract($onesp);
                $spcungloai = products_select_by_loai($cate_id);
                products_tang_so_luot_xem($id);
                include 'site/pages/product_detail.php';
        }else{
            include 'site/pages/home.php';
         }
        break;
       

        case 'binhluan':
            if(isset($_POST['binhluan']) && isset($_SESSION['ss_user'])){           
                $user_id= $_SESSION['ss_user']['id'];
                $id_product = $_POST['id'];
                $content = $_POST['content'];
                binh_luan_insert($content,$user_id, $id_product);
                header("location:".$_SERVER["HTTP_REFERER"]);
                include 'site/pages/product_detail.php';
    
        }else{
            include 'site/pages/login.php';
        }         
            break;
    
           case 'dangxuat':
            session_unset();
            header('Location: index.php');
            break;
          
        default:
            include "site/pages/home.php";
        

    }
}else{
    include "site/pages/home.php";
        
}



include "site/components/footer.php";
ob_end_flush(); 




















?>