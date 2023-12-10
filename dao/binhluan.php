<?php
require_once 'pdo.php';

function binh_luan_insert($content,$user_id, $id_product){
    $sql = "INSERT INTO comments(content,user_id, id_product) VALUES ('$content','$user_id','$id_product')";
    pdo_execute($sql);
}

function binh_luan_update($id,$content,$user_id, $id_product){
    $sql = "UPDATE comments SET content='$content',user_id='$user_id',id_product='$id_product' WHERE id='$id'";
    pdo_execute($sql);
}

function binh_luan_delete($id){
    $sql = "DELETE FROM comments WHERE id='$id'";
    pdo_execute($sql);
    
}

function binh_luan_select_by_product($id_product){
    $sql = "SELECT * FROM comments WHERE id_product='$id_product' ORDER BY created_at DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function binh_luan_select_all($id){
    $sql = "SELECT c.id,content,c.created_at,user_id,id_product,name FROM comments c LEFT JOIN users u ON c.user_id = u.id
    WHERE id_product='$id' ORDER BY created_at DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function binh_luan_all(){
    $sql = "SELECT * FROM comments ORDER BY created_at DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function binh_luan_select_by_id($id){
    $sql = "SELECT * FROM comments WHERE ma_bl=";
    return pdo_query_one($sql);
}

function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM comments WHERE ma_bl='$ma_bl'";
    $dem = pdo_query_value($sql, $ma_bl) > 0;
     return $dem;
}
//-------------------------------//
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM comments b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}