<?php
ob_start();
session_start();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=[];
}

include 'dao/pdo.php';
include 'dao/categories.php';
include 'dao/sanpham.php';
include 'dao/binhluan.php';
include 'dao/User.php';
include 'dao/thongke.php';
include "global.php";
include "dao/cart.php";
include 'dao/order.php';
include 'dao/emailer.php.php';
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
// -------------------------------------------------------------------------------------------------------
// -------------------------------------login-------------------------------------
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
                case 'thongtinkh':

                    include_once "site/pages/thongtinkh.php";
                    break;
                case 'dangxuat':
                    session_unset();
                    header('Location: index.php');
                    break;

                

            case 'register':
                $errors = [];
    
                if (isset($_POST['register'])) {
                    // Xử lý lỗi cho trường 'name'
                    if (empty($_POST['name'])) {
                        $errors['name']['required'] = 'Bắt buộc phải nhập tên người dùng';
                    } else {
                        $name = $_POST['name'];
                    }
            
                    // Xử lý lỗi cho trường 'phone'
                    if (empty($_POST['phone'])) {
                        $errors['phone']['required'] = 'Bắt buộc phải nhập số điện thoại';
                    } else {
                        $phone = $_POST['phone'];
                    }
            
                    // Xử lý lỗi cho trường 'password'
                    if (empty($_POST['password'])) {
                        $errors['password']['required'] = 'Bắt buộc phải nhập mật khẩu';
                    } else {
                        $password = $_POST['password'];
                    }
            
                    // Xử lý lỗi cho trường 'email'
                    if (empty($_POST['email'])) {
                        $errors['email']['required'] = 'Bắt buộc phải nhập địa chỉ email';
                    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $errors['email']['invalid'] = 'Địa chỉ email không hợp lệ';
                    } else {
                        $email = $_POST['email'];
                    }
            
                    // Xử lý lỗi cho trường 'username'
                    if (empty($_POST['username'])) {
                        $errors['username']['required'] = 'Bắt buộc phải nhập tên đăng nhập';
                    } else {
                        $username = $_POST['username'];
                    }
            
                    // Xử lý lỗi cho trường 'permission'
                    if (empty($_POST['permission'])) {
                        $errors['permission']['required'] = 'Bắt buộc chọn quyền cho người dùng';
                    } else {
                        $permission = $_POST['permission'];
                    }
            
                    // Kiểm tra nếu không có lỗi, thực hiện thêm người dùng
                    if (empty($errors)) {
                        users_insert($name, $phone, $password, $email, $username, $permission);
                        $thongbao = "Đăng ký thành công!";
                    }
                }
                include_once "site/pages/register.php";
                break;
        


// ---------------------------------------------------------------Cart----------------------------
// -------------------------------------------------------------------------------------------------------
        case 'addcart':
            if(isset($_POST["addcart"])){
                $id=$_POST["id"];
                $name=$_POST["name"];
                $price=$_POST["price"];
                $price_sale=$_POST["price_sale"];
                $image=$_POST["image"];
                $quantity=$_POST["quantity"];

                $sp=array("id"=>$id,"name"=>$name,"image"=>$image,"price"=>$price,"price_sale"=>$price_sale,"quantity"=>$quantity);
                array_push($_SESSION["cart"],$sp);
                // echo var_dump($_SESSION["cart"]);
                header('location: index.php?page=shop');
            }
            // include_once "site/pages/cart.php";
            break;
        case 'cart':

            if(isset($_SESSION["cart"])){
                $tong=get_tong();
            }
            $listsp=products_select_all();
            include_once "site/pages/cart.php";
            break;

            case 'deleteCart':
                if(isset($_GET['del']) && ($_GET['del'] == 1)){
                    unset($_SESSION["cart"]);
                    header('location: index.php?page=cart');
                }else{
                    include_once "site/pages/cart.php";
                }
                break;
                
// -------------------------------------------------------------------------------------------------------
 // ------------------------------------------Order-------------------------------------------------------------
        case 'order':
            if(isset($_SESSION["cart"])){
                $tong=get_tong();
            }
            $listsp=products_select_all();
           
            include_once "site/pages/order.php";
            break;

            case 'addorder':
                if (isset($_POST['addorder'])){
                    $customer_name=$_POST['customer_name'];
                    $customer_phone=$_POST['customer_phone'];
                    $shipping_address=$_POST['shipping_address'];
    
                }
                // insert_order($customer_name, $customer_phone, $shipping_address);
                $listsp=products_select_all();
                include_once "site/pages/order.php";
                break;
// -------------------------------------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------------------
        case 'checkout':
            include "dao/emailer.php";
            break;
        
// --------------------------------------------------------------sản phẩm---------------------------------------
// -----------------------------------------------------------------------------
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
            $listsp=products_select_all();
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
       
// ---------------------------------------------bình luận------------------------------------
// ---------------------------------------------------------------------------------
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