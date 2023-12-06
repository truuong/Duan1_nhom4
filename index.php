<?php
session_start();
ob_start();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=[];
}

include "dao/pdo.php";
include "dao/global.php";
include "dao/sanpham.php";
include "dao/cart.php";

include_once "site/components/header.php";

if (isset($_GET["page"])){
$page=$_GET["page"];
    switch ($page){
        case 'home':
            include_once "site/pages/home.php";
            break;


        case 'shop':
            $listsp = products_select_all();
            include_once "site/pages/product.php";
            break;


        case 'login':
            include_once "site/pages/login.php";
            break;

// ---------------------------------CART-------------------------
        case 'addcart':

            if(isset($_POST["addcart"])){
                $id=$_POST["id"];
                $name=$_POST["name"];
                $price=$_POST["price"];
                $image=$_POST["image"];
                $quantity=$_POST["quantity"];

                $sp=array("id"=>$id,"name"=>$name,"image"=>$image,"price"=>$price,"quantity"=>$quantity);
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

 // ------------------------------------------Order-------------------------------------------------------------
        case 'order':
            include_once "site/pages/order.php";
            break;



// -------------------------------------------------------------------------------------------------------
        case 'about':
            include_once "site/pages/about.php";
            break;


        case 'shop_detail':
            include_once "site/pages/product_detail.php";
            break;
            
            
        default:
            include_once "site/pages/home.php";
        

    }
}else{
    include_once "site/pages/home.php";
        
}



include_once "site/components/footer.php";



















?>