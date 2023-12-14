<main>
    <?php
    if (isset($_SESSION["ss_user"]) && (is_array($_SESSION['ss_user']))) {
        extract($_SESSION['ss_user']);
    }
    ?>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Đổi mật khẩu
                </div>
                <div class="card-body">
                    <form method="post" action="index.php?page=changePass">
                        <input type="hidden" id="id" class="form-control" id="id" value="<?php echo $id ?>" name="id">
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php echo !empty($errors['password']['required']) ? '<div style="color:red;">' . $errors['password']['required'] . '</div>' : ''; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Nhập lại mật khẩu mới</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                            <?php echo !empty($errors['password2']['required']) ? '<div style="color:red;">' . $errors['password2']['required'] . '</div>' : ''; ?>
                        </div>
                        <div class="mb-3">
                        <span style="color:red;">
                                <?php 
                                        if(isset($thongbao)&&($thongbao !="")){
                                            echo $thongbao;
                                        }
                                ?>
                                </span>
                        </div>
                        <button type="submit" id="doiMK" name="doiMK" class="btn_3">Lưu mật khẩu</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>