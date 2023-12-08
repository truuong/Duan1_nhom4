<main>
    
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Đăng ký</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Bạn đã có tài khoản ?</h2>
                            <a href="index.php?page=dangnhap" class="btn_3">Đăng nhập</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Chào mừng quý khách trở lại ! <br></h3>
                            
                            <form id="registerForm" method="post" action="index.php?page=register">
                            <!-- Các input và các phần tử khác -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tên đăng nhập:</label>
                                    <input type="text" class="form-control" id="username" name="username"  placeholder="Nhập tên đăng nhập...">
                                    <?php echo !empty($errors['username']['required']) ? '<div style="color:red;">' . $errors['username']['required'] . '</div>' : ''; ?>
                                    <?php echo !empty($errors['username']['invalid']) ? '<div style="color:red;">' . $errors['username']['invalid'] . '</div>' : ''; ?>
                                    <?php echo !empty($errors['username']['repeat']) ? '<div style="color:red;">' . $errors['username']['repeat'] . '</div>' : ''; ?>
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
                                    <?php echo !empty($errors['phone']['invalid']) ? '<div style="color:red;">' . $errors['phone']['invalid'] . '</div>' : ''; ?>
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

                                
                                <div class="input-group mb-3">
                                <input class="form-check-input" value="1" type="hidden" name="permission"
                                    id="permission" >
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
                                <button type="submit" id='register' name="register" class="btn_3">Đăng ký</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>
