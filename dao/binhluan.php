<?php
require_once 'pdo.php';

function binh_luan_insert($ma_kh, $ma_hh, $noi_dung){
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung) VALUES ('$ma_kh','$ma_hh','$noi_dung')";
    pdo_execute($sql);
}

function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung){
    $sql = "UPDATE binh_luan SET ma_kh='$ma_kh',ma_hh='$ma_hh',noi_dung='$noi_dung' WHERE ma_bl='$ma_bl'";
    pdo_execute($sql);
}

function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl='$ma_bl'";
    pdo_execute($sql);
    
}

function binh_luan_select_all($ma_hh){
    $sql = "SELECT * FROM binh_luan WHERE ma_hh='$ma_hh' ORDER BY ngay_bl DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function binh_luan_all(){
    $sql = "SELECT * FROM binh_luan ORDER BY ngay_bl DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}

function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}

function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl='$ma_bl'";
    $dem = pdo_query_value($sql, $ma_bl) > 0;
     return $dem;
}
//-------------------------------//
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}