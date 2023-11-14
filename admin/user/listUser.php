<?php include '../components/header.php';?>
        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="text-center">Quản trị tài khoản</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Quyền</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cường</td>
                                <td>cuonghcpc04375@fpt.edu.vn</td>
                                <td>123456</td>
                                <td>Admin</td>
                                <td>Hoạt động</td>
                                <td>
                                    <a href="editUser.php" class="btn btn-danger">Cập nhật</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>
<?php include '../components/footer.php';?>