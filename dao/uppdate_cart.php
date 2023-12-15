<?php
require_once 'pdo.php';
// Lấy giá trị số lượng mới và product_id từ yêu cầu POST
$newQuantity = $_POST['quantity'];
$productId = $_POST['id'];

// Thực hiện tính toán giá mới dựa trên giá cố định của sản phẩm (ví dụ)
 // Giá cố định của sản phẩm (đổi thành biến thực tế của bạn)
$newTotalPrice = $newQuantity * $price;

// Cập nhật giỏ hàng (có thể lưu vào cơ sở dữ liệu hoặc bất kỳ loại lưu trữ nào khác)

// Trả về tổng tiền mới để cập nhật trên trang
return $newTotalPrice;
?>