<?php
require_once 'pdo.php';

function thong_ke_hang_hoa(){
    $sql =" SELECT loai.ma_loai as madm, loai.ten_loai as tendm, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice FROM hang_hoa left join loai on loai.ma_loai=hang_hoa.ma_loai group by loai.ma_loai order by loai.ma_loai ASC ";
    
    $listthongke = pdo_query($sql);
    return $listthongke;
}

// function thong_ke_binh_luan(){
//     $sql = "SELECT hh.ma_hh, hh.ten_hh,"
//             . " COUNT(*) so_luong,"
//             . " MIN(bl.ngay_bl) cu_nhat,"
//             . " MAX(bl.ngay_bl) moi_nhat"
//             . " FROM binh_luan bl "
//             . " JOIN products hh ON hh.ma_hh=bl.ma_hh "
//             . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
//             . " GROUP BY hh.ma_hh, hh.ten_hh"
//             . " HAVING so_luong > 0";
//     return pdo_query($sql);
// }