<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $name là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($name){
    $sql = "INSERT INTO loai(name) VALUES('$name')";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 * @param int $id  là mã loại cần cập nhật
 * @param String $name là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($id , $name){
    $sql = "UPDATE loai SET name='$name' WHERE id ='$id '";
    pdo_execute($sql);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id  là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($id ){
    $sql = "DELETE FROM loai WHERE id ='$id '";
    pdo_execute($sql);
    
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM product_categories ORDER BY id  ASC";
    $listloai = pdo_query($sql);
    return $listloai;
}
/**
 * Truy vấn một loại theo mã
 * @param int $id  là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($id ){
    $sql = "SELECT * FROM loai WHERE id =$id ";
    $dm = pdo_query_one($sql);
    return $dm;

}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id  là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($id ){
    $sql = "SELECT count(*) FROM loai WHERE id =$id ";
    return pdo_query_value($sql, $id ) > 0;
}