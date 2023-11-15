<?php include '../components/header.php';?>

    
        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h2 class="text-center mb-4">Chi Tiết Đơn Hàng</h2>

                    <!-- Thông tin đơn hàng -->
                    <ul class="list-group order-info">
                        <li class="list-group-item"><strong>Mã Đơn Hàng:</strong> DH001</li>
                        <li class="list-group-item"><strong>Ngày Đặt Hàng:</strong> 01/01/2023</li>
                        <li class="list-group-item"><strong>Tên Khách Hàng:</strong> Nguyễn Văn A</li>
                        <li class="list-group-item"><strong>Tổng Cộng:</strong> 500,000 VNĐ</li>
                        <li class="list-group-item"><strong>Trạng Thái:</strong> Đã Giao Hàng</li>
                    </ul>

                    <!-- Chi tiết sản phẩm trong đơn hàng -->
                    <table class="table product-table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Đơn Giá</th>
                                <th scope="col">Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dòng mẫu, bạn có thể thêm hoặc sao chép để thêm sản phẩm khác -->
                            <tr>
                                <th scope="row">1</th>
                                <td>Tên Sản Phẩm 1</td>
                                <td>2</td>
                                <td>200,000 VNĐ</td>
                                <td>400,000 VNĐ</td>
                            </tr>

                            <!-- Thêm dòng cho mỗi sản phẩm trong đơn hàng -->
                        </tbody>
                    </table>

                    <!-- Tổng cộng -->
                    <div class="total">
                        <h4>Tổng Cộng: 400,000 VNĐ</h4>
                    </div>
                    <form class="update-status-form">
                        <div class="mb-3">
                            <label for="status-select" class="form-label">Cập Nhật Trạng Thái:</label>
                            <select class="form-select" id="status-select" aria-label="Cập Nhật Trạng Thái">
                                <option selected>Đã Giao Hàng</option>
                                <option>Đang Giao Hàng</option>
                                <option>Đã Hủy</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Cập Nhật Trạng Thái</button>
                    </form>
                </div>
        </main>
<?php include '../components/footer.php';?>