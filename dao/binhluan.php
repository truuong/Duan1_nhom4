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

function binh_luan_thongke(){
    $sql = "SELECT pc.id,pc.name, count(p.id) as slbl FROM comments c LEFT JOIN products p ON c.id_product = p.id 
    LEFT JOIN product_categories pc ON pc.id = p.cate_id GROUP BY p.cate_id;";
    $listtk = pdo_query($sql);
    return $listtk;
}

function binh_luan_select_by_id($id){
    $sql = "SELECT c.id idbl,c.content nd,c.id_product mahh,p.name tenhh,c.user_id makh,u.name tenkh,c.created_at ngaybl
    FROM comments c LEFT JOIN products p ON c.id_product = p.id LEFT JOIN users u ON u.id = c.user_id 
    WHERE cate_id='$id' ORDER BY c.created_at DESC";
    $listblct = pdo_query($sql);
    return $listblct;
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