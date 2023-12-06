<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Quản lý tài khoản</h3>
                <a href="index.php?action=user-add" class="btn btn-primary mb-3">Thêm mới</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Tên đăng nhập</th>
                            <th>Vai trò</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listkh as $kh) {
                            extract($kh);
                            $suakh = "index.php?action=users-edit&id=" . $id;
                            $xoakh = "index.php?action=users-delete&id=" . $id;

                            ($permission == 1) ? $permission = "Admin" : $permission = "Người dùng";
                            echo ' <tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $email . '</td>
                            <td>' . $username . '</td>
                            <td>' . $permission . '</td>
                            <td>
                                <a href="' . $suakh . '" class="btn btn-primary">Cập nhật</a>
                                <a onclick="return confirm('."'".'  Bạn có muốn xoá khách hàng này không?'."'".');" href="'.$xoakh.'" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>';
                        }
                        ?>


                    </tbody>
                </table>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo "<p class='text-success'>$thongbao</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>