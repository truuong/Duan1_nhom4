<?php
require_once 'pdo.php';
	
function products_insert($name, $price, $price_sale, $image, $cate_id, $intro,$quantity){
    $sql = "INSERT INTO products(name,price,price_sale,image,intro,quantity, cate_id) VALUES ('$name', '$price', '$price_sale', '$image', '$intro','$quantity', '$cate_id')";
    
    pdo_execute($sql);
}



function products_update($id, $name, $price, $price_sale, $image,$cate_id ,$intro,$quantity){
        $sql = "UPDATE products SET name = ?, price = ?, price_sale = ?, image = ?,cate_id = ?, intro = ? , quantity = ? WHERE id = ?";
        
        pdo_execute($sql, $name, $price, $price_sale, $image,$cate_id, $intro,$quantity, $id);
    }
    function products_select_by_id($id) {
        $sql = "SELECT * FROM products WHERE id=?";
        $dm = pdo_query_one($sql, $id);
        return $dm;
    }

// ------------------------delete sản phẩm----------------------
function products_delete($id){
    $sql = "DELETE FROM products WHERE id= $id";
    pdo_execute($sql);
}
function get_image($id){
    $sql = "SELECT image FROM products WHERE id=?";
    $getimage = pdo_query_one($sql, $id);
    return $getimage['image'];
}

//-----------------------list sản phẩm------------------------------
function products_select_all(){
    $sql = "SELECT * FROM products  ORDER BY id ASC ";
    $listsp = pdo_query($sql);
    return $listsp;
    
}

function products_exist($id){
    $sql = "SELECT count(*) FROM products WHERE id=$id";
    $dem =  pdo_query_value($sql);
    return $dem;
}

function products_tang_so_luot_xem($id){
    $sql = "UPDATE products SET quantity = quantity + 1 WHERE id='$id'";
    pdo_execute($sql);
}

// --------------------------------------------------------------

function products_select_new(){
    $sql = "SELECT * FROM products ORDER BY created_at DESC LIMIT 0, 8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function products_select_top8(){
    $sql = "SELECT * FROM products WHERE quantity > 0 ORDER BY quantity DESC LIMIT 0, 8";
    return pdo_query($sql);
}

// function products_select_dac_biet(){
//     $sql = "SELECT * FROM products WHERE dac_biet=1";
//     return pdo_query($sql);
// }

function products_select_by_loai($cate_id){
    $sql = "SELECT * FROM products WHERE cate_id=$cate_id ";
    $spcungloai = pdo_query($sql);
    return $spcungloai;
}

function products_select_keyword($noidung){
    $sql = "SELECT * FROM products WHERE name LIKE '%$noidung%'";
    $nd = pdo_query($sql);
    return $nd;
}

// function products_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM products");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM products ORDER BY id LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }