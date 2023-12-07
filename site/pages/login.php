<main>
    
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Đăng nhập</h2>
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
                            <h2>Lần đầu đến với chúng tôi?</h2>
                            <p>Để có thể mua hàng cũng như chúng tôi có thể hỗ trợ quý khách được tốt hơn, xin vui lòng:</p>
                            <a href="index.php?page=register" class="btn_3">Tạo tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Chào mừng quý khách trở lại ! <br></h3>
                            
                            <form class="row contact_form" action="index.php?page=dangnhap" method="post">
                                    
                                <div class="col-md-12 form-group p_star">
                                    <label for="username">Tên đăng nhập:</label>
                                    <input type="text" class="form-control" id="username" name="username"  placeholder="Nhập tên đăng nhập" required>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <label for="password">Mật khẩu:</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" required>
                                </div>
                                <div class="col-md-12 form-group">
                                <span style="color:red;">
                            <?php 
                                    if(isset($thongbao)&&($thongbao !="")){
                                        echo $thongbao;
                                    }
                            ?>
                            </span>
                                    <div class="creat_account d-flex align-items-center">
                                    
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Lưu mật khẩu</label>
                                    </div>
                                    
            
                                    <button type="submit"   id="dangnhap" name="dangnhap" class="btn_3">
                                        Đăng nhập
                                    </button>
                                    
                                    <a class="lost_pass" href="#">Quên mật khẩu?</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>
