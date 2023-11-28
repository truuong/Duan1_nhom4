<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="text-center">Thêm Tài Khoản</h3>
                <form method="post" action="index.php?action=user-add">
                    <label for="username" class="form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="username" name="username" required
                        placeholder="Nhập tên đăng nhập...">

                    <label for="password" class="form-label">Mật Khẩu:</label>
                    <input type="text" class="form-control" id="password" name="password" required
                        placeholder="Nhập mật khẩu...">

                    <label for="phone" class="form-label">SĐT:</label>
                    <input type="number" class="form-control" id="phone" name="phone" required
                        placeholder="Nhập số điện thoại...">

                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required
                        placeholder="Nhập email...">

                    <label for="name" class="form-label">Tên người dùng:</label>
                    <input type="text" class="form-control" id="name" name="name" required
                        placeholder="Nhập tên tài khoản...">

                    <label for="permission">Vai trò</label>
                    <div class="input-group mb-3">
                        <select required name="permission" style="height: 38px;" class="w-100">
                            <option value="" disabled selected>Vai trò</option>
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