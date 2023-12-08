<main>
<?php
if(isset($_SESSION["ss_user"]) && (is_array($_SESSION['ss_user']))){
    extract($_SESSION['ss_user']);
}
?>
<div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Thông Tin Khách Hàng
                    </div>
                    <div class="card-body">
                        <form method="post" action="index.php?page=thongtinkh">
                            <div class="mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input disabled type="text" class="form-control" value="<?php echo $id?>" id="id" name="id" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên đăng nhập</label>
                                <input disabled type="text" class="form-control" id="username" value="<?php echo $username?>"  name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="name" value="<?php echo $name?>"  name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="<?php echo $email?>"  name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Số Điện Thoại</label>
                                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $phone?>"  required>
                            </div>
                            <button type="submit" class="btn_3">Lưu Thông Tin</button>
                            <?php
                                if($permission==1){
                                    echo "<a href='admin/' class='btn_3'>Trang quản trị</a>";
                                }
                            ?>
                            
                        </form>
                        
                    </div>
                </div>
                </div>
                </div>
</main>