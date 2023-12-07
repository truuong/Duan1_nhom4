<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="text-center">Thêm Tài Khoản</h3>
                <form id="addUserForm" method="post" action="index.php?action=user-add">
                <!-- Các input và các phần tử khác -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập:</label>
                        <input type="text" class="form-control" id="username" name="username"  placeholder="Nhập tên đăng nhập...">
                        <?php echo !empty($errors['username']['required']) ? '<div style="color:red;">' . $errors['username']['required'] . '</div>' : ''; ?>
                        <?php echo !empty($errors['username']['invalid']) ? '<div style="color:red;">' . $errors['username']['invalid'] . '</div>' : ''; ?>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password"  placeholder="Nhập mật khẩu...">
                        <?php echo !empty($errors['password']['required']) ? '<div style="color:red;">' . $errors['password']['required'] . '</div>' : ''; ?>
                        <?php echo !empty($errors['password']['invalid']) ? '<div style="color:red;">' . $errors['password']['invalid'] . '</div>' : ''; ?>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại:</label>
                        <input type="number" class="form-control" id="phone" name="phone"  placeholder="Nhập số điện thoại...">
                        <?php echo !empty($errors['phone']['required']) ? '<div style="color:red;">' . $errors['phone']['required'] . '</div>' : ''; ?>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="Nhập email...">
                        <?php echo !empty($errors['email']['required']) ? '<div style="color:red;">' . $errors['email']['required'] . '</div>' : ''; ?>
                        <?php echo !empty($errors['email']['invalid']) ? '<div style="color:red;">' . $errors['email']['invalid'] . '</div>' : ''; ?>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Tên người dùng:</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Nhập tên người dùng...">
                        <?php echo !empty($errors['name']['required']) ? '<div style="color:red;">' . $errors['name']['required'] . '</div>' : ''; ?>
                        <?php echo !empty($errors['name']['min_length']) ? '<div style="color:red;">' . $errors['name']['min_length'] . '</div>' : ''; ?>
                    </div>

                    <label for="permission">Vai trò</label>
                    <div class="input-group mb-3">
                        <select  name="permission" id="permission" style="height: 38px;" class="w-100">
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>

                    <button type="submit" id='add' name="add" class="btn btn-primary mt-3">Thêm mới</button>
                </form>
                <?php
                if(isset($thongbao) && ($thongbao != "")) {
                    echo "<p class='text-success'>$thongbao</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>