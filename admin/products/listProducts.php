<?php include '../components/header.php';?>

        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="text-center">Quản trị sản phẩm</h3>
                    <a href="addProducts.php" class="btn btn-primary mb-3">Thêm mới</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Giảm giá</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Danh mục</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Đồng hồ Gucci</td>
                                <td><img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSJv_06krOqCNisodkCNGkfGSb17ukdCotgmzXtaXhdy2A_1HhCnaLMg5tkmgRlfbijiQzYtfl_vY9UOvjUAubDPmYYarUMJDNMiU_cSTV_uVPfwc1ivQoGWg&usqp=CAE"
                                        width="50px" height="50px" alt="">
                                </td>
                                <td>30%</td>
                                <td>10,000,000VNĐ</td>
                                <td>110</td>
                                <td>Đồng hồ</td>

                                <td>
                                    <a href="editProducts.php" class="btn btn-primary">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
<?php include '../components/footer.php';?>