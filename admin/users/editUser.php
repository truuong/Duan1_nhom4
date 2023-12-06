<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="text-align:center">Cập nhật thông tin</h3>
                <?php
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $dm = users_select_by_id($id);
                    ?>

                    <form id="editUserForm" method="post" action="index.php?action=users-update" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $dm['id']; ?>">
                        <label for="name">Họ tên</label>
                        <input type="text" value="<?php echo $dm['name']; ?>" name="name" class="form-control">
                        <span id="nameError" class="error"></span>
                        <label for="phone">Số điện thoại</label>
                        <input type="number" value="<?php echo $dm['phone']; ?>" name="phone" class="form-control">
                        <span id="phoneError" class="error"></span>
                        <label for="password">Mật khẩu</label>
                        <input type="text" value="<?php echo $dm['password']; ?>" name="password" class="form-control">
                        <span id="passwordError" class="error"></span>

                        <label for="email">Email</label>
                        <input type="text" value="<?php echo $dm['email']; ?>" name="email" class="form-control">
                        <span id="emailError" class="error"></span>
                        <label for="permission">Vai trò</label>
                        <div class="input-group mb-3">
                            <select name="permission" style="height: 38px;" class="w-100">
                                <option value="0" <?php ($dm['permission'] == 0 ? $a = "selected" : $a = '');
                                echo $a; ?>>Người
                                    dùng</option>
                                <option value="1" <?php ($dm['permission'] == 1 ? $a = "selected" : $a = '');
                                echo $a; ?>>Admin
                                </option>
                            </select>
                        </div>

                        <button type="submit" name="capnhat" class="btn btn-danger"onclick="confirm('Uppdate Thành Công!!')">Update</button>
                    </form>
                    <?php
                } else {
                    // Xử lý khi không có ID hợp lệ
                    echo "ID không hợp lệ.";
                }
                ?>
            </div>
        </div>
    </div>
</section>