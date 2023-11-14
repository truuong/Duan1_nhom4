<?php include '../components/header.php';?>

        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="text-center">Quản trị tài khoản</h3>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <h3 style="text-align:center">Cập nhật thông tin</h3>
                        <form method="post" id="updateuser">
                            <label for="name">Họ tên</label>
                            <input type="text" value="cuong" name="name" class="form-control">

                            <label for="phone">Số điện thoại</label>
                            <input type="number" value="123456" name="phone" class="form-control">

                            <label for="email">Email</label>
                            <input type="text" value="cuonghcpc04375@fpt.edu.vn" name="email" class="form-control">

                            <label for="password">Mật khẩu</label>
                            <input type="text" name="password" class="form-control">

                            <label for="active">Trạng thái</label>
                            <div class="input-group">
                                <select name="active" style="height: 38px;" class="w-100">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Khóa</option>
                                </select>
                            </div>

                            <label for="permission">Quyền</label>
                            <div class="input-group mb-3">
                                <select name="permission" style="height: 38px;" class="w-100">
                                    <option value="0">Admin</option>
                                    <option value="1">Người dùng</option>
                                </select>
                            </div>

                            <button type="submit" name="updateuser" class="btn btn-danger">Cập nhật</button>
                        </form>

                    </div>
                </div>
            </div>
        </main>
<?php include '../components/footer.php';?>