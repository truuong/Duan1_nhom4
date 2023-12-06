<?php
require_once 'pdo.php';

function product_by_category(){
    $sql =" SELECT product_categories.id as madm, product_categories.name as tendm, count(products.id) as countsp, count(product_categories.id) as countdm FROM products left join product_categories on product_categories.id=products.cate_id group by product_categories.id order by product_categories.id ASC ";
  
    $listthongke = pdo_query($sql);
    return $listthongke;
}
function count_products(){
    $sql =" SELECT products.id from products where 1";
    $countsluongsp = pdo_query($sql);
    return $countsluongsp;
}
function count_orders(){
    $sql =" SELECT orders.id from orders where 1";
    $countorder = pdo_query($sql);
    return $countorder;
}

// function thong_ke_binh_luan(){
//     $sql = "SELECT hh.ma_hh, hh.ten_hh,"
//             . " COUNT(*) so_luong,"
//             . " MIN(bl.ngay_bl) cu_nhat,"
//             . " MAX(bl.ngay_bl) moi_nhat"
//             . " FROM binh_luan bl "
//             . " JOIN products hh ON hh.ma_hh=bl.ma_hh "
//             . " GROUP BY hh.ma_hh, hh.ten_hh"
//             . " HAVING so_luong > 0";
//     return pdo_query($sql);
// }