<?php 
function get_tong(){
    $tong=0;
    foreach($_SESSION['cart'] as $sp){
        extract($sp);
        $tt=(Int)$price * ((100 - $price_sale) / 100)*(Int)$quantity;
       
        
         $tong +=$tt;
           
        
    }
    return $tong;
}


?>