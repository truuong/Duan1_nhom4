<?php
include_once "site/components/header.php";

if (isset($_GET["page"])){
$page=$_GET["page"];
    switch ($page){
        case 'home':
            include_once "site/pages/home.php";
            break;

        case 'shop':
            include_once "site/pages/product.php";
            break;

        case 'login':
            include_once "site/pages/login.php";
            break;

        case 'cart':
            include_once "site/pages/cart.php";
            break;
    

        default:
            include_once "site/pages/home.php";
        

    }
}else{
    include_once "site/pages/home.php";
        
}



include_once "site/components/footer.php";



















?>