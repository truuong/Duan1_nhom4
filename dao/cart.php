<?php 
function get_tong(){
    $tong=0;
    foreach($_SESSION['cart'] as $sp){
        extract($sp);
        $tt=(Int)$sp[3] * ((100 - $sp[4]) / 100)*(Int)$sp[5];
       
        
         $tong +=$tt;
           
        
    }
    return $tong;
}


?>