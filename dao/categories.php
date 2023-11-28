<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $name là tên loại
 * @throws PDOException lỗi thêm mới
 */
function categories_insert($name){
    $sql = "INSERT INTO product_categories(name) VALUES('$name')";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 * @param int $id  là mã loại cần cập nhật
 * @param String $name là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function categories_update($id, $name) {
    $sql = "UPDATE product_categories SET name=? WHERE id=?";
    pdo_execute($sql, $name, $id);
}

/**
 * Xóa một hoặc nhiều loại
 * @param mix $id  là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function categories_delete($id){
    $sql = "DELETE FROM product_categories WHERE id ='$id '";
    pdo_execute($sql);
    
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function categories_select_all(){
    $sql = "SELECT * FROM product_categories ORDER BY id  DESC";
    $listcategories = pdo_query($sql);
    return $listcategories;
}
/**
 * Truy vấn một loại theo mã
 * @param int $id  là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function categories_select_by_id($id) {
    $sql = "SELECT * FROM product_categories WHERE id=?";
    $dm = pdo_query_one($sql, $id);
    return $dm;
}

/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id  là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function categories_exist($id ){
    $sql = "SELECT count(*) FROM product_categories WHERE id =$id ";
    return pdo_query_value($sql, $id ) > 0;
}
?>