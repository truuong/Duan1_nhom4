<?php
require_once 'pdo.php';
	
function products_insert($name, $price, $price_sale, $image, $cate_id, $created_at, $intro){
    $sql = "INSERT INTO products(name, price, price_sale,image, cate_id, dac_biet, so_luot_xem, created_at, intro) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $price_sale, $image, $cate_id, $created_at, $intro);
}

function products_update($id, $name, $price, $price_sale, $image, $cate_id, $dac_biet, $created_at, $intro){
    $sql = "UPDATE products SET name = ?, price = ?, price_sale = ?, image = ?, cate_id = ?, dac_biet = ?, created_at = ?, intro = ? WHERE id = ?";
    
    pdo_execute($sql, $name, $price, $price_sale, $image, $cate_id, $dac_biet, $created_at, $intro, $id);
}
// ------------------------delete sản phẩm----------------------
function products_delete($id){
    $sql = "DELETE FROM products WHERE  id=$id";
    pdo_execute($sql);
}

//-----------------------list sản phẩm------------------------------
function products_select_all(){
    $sql = "SELECT * FROM products  ORDER BY id DESC ";
    $listsp = pdo_query($sql);
    return $listsp;
    
}


function products_select_by_id($id) {
    $sql = "SELECT * FROM products WHERE id=?";
    $dm = pdo_query_one($sql, $id);
    return $dm;
}

function products_exist($id){
    $sql = "SELECT count(*) FROM products WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function products_tang_so_luot_xem($id){
    $sql = "UPDATE products SET so_luot_xem = so_luot_xem + 1 WHERE id='$id'";
    pdo_execute($sql);
}

// --------------------------------------------------------------

function products_select_top8(){
    $sql = "SELECT * FROM products WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 8";
    return pdo_query($sql);
}

// function products_select_dac_biet(){
//     $sql = "SELECT * FROM products WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function products_select_by_loai($cate_id){
//     $sql = "SELECT * FROM products WHERE cate_id=$cate_id ";
//     $spcungloai = pdo_query($sql);
//     return $spcungloai;
// }

// function products_select_keyword($noidung){
//     $sql = "SELECT * FROM products WHERE name LIKE '%$noidung%'";
//     $nd = pdo_query($sql);
//     return $nd;
// }

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