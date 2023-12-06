<?php 
function get_tong(){
    $tong=0;
    foreach($_SESSION['cart'] as $sp){
        extract($sp);
        $tt=(Int)$price*(Int)$quantity;
        $tong+=$tt;
    }
    return $tong;
}


?>