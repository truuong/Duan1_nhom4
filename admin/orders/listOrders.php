<?php include '../components/header.php';?>
    
        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h2>Danh Sách Đơn Hàng</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã Đơn Hàng</th>
                                <th scope="col">Ngày Đặt Hàng</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Tổng Cộng</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <th scope="row">DH001</th>
                                <td>01/01/2023</td>
                                <td>Nguyễn Văn A</td>
                                <td>500,000 VNĐ</td>
                                <td>Đã Giao Hàng</td>
                                <td>
                                    <a href="detailOrder.php" class="btn btn-info">Chi Tiết</a>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>

                            <!-- Thêm dòng cho mỗi đơn hàng khác -->
                        </tbody>
                    </table>
                </div>
        </main>
<?php include '../components/footer.php';?>