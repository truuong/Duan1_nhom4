<main>
    <!--slider section start-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="public/assets/img/hero/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="public/assets/img/hero/1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="public/assets/img/hero/1.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="public/assets/img/hero/1.jpg" alt="Four slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--slider section end-->
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Sản phẩm mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            foreach ($spnew as $sp) {
                extract($sp);
                
                $linksp = "index.php?page=chitietsanpham&id=".$id;
                $image = $img_path.$image;
                $a = $price * ((100 - $price_sale) / 100);
                if($price_sale>0){
                    $b = '
                    <div class="card-title">
                    <s>
                    '.number_format($price).' đ
                    </s>
                    <span class="bg-warning p-1 text-dark fw-bold rounded">-'.$price_sale.'%</span><br>
                    '. number_format($a).' đ
                    </div>';
                }else{
                    $b = '
                    <div class="card-title">
                    '.number_format($price).' đ     
                    </div>';
                }
                echo '
                <div class="col-lg-3 mb-4">
                                <div class="card w-100 p-3 h-100 d-inline-block">
                                    <div class="img-container">
                                        <img class="image card-img-top" src="'.$image.'" alt="product img">
        
                                        <div class="overplay">
                                        <form action="index.php?page=addcart" method="post" class="d-flex justify-content-center">
                                        <input type="hidden" name="id" id="id" value="'.$id. '">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="hidden" name="price_sale" value="'.$price_sale.'">
                                        <input type="hidden" name="image" value="'.$image.'">
                                        <input type="hidden" name="quantity" value="'.$quantity.'">
                                        <button class="btn" type="submit" name="addcart" onclick="return confirm('."'".'  Thêm Thành Công'."'".')">
                                       
                                                Thêm Vào Giỏ</button>
                                    </form>
                                            <a href="'.$linksp.'" class="btn"><i class="ti-eye"></i> Xem Chi Tiết&emsp;</a>
        
                                        </div>
                                    </div>
                                    <div class="card-body font-weight-bold">
                                    <h6>'.$name.'</h6>
                                    '.$b.'

                                    </div>
                                    </div>
                                    </div>
                ';}?>
            </div>
             <!-- Button -->
             <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="index.php?page=shop" class="btn view-btn1">Xem thêm</a>
                </div>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Sản Phẩm Được Quan Tâm</h2>
                        <!-- <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            foreach ($sptop8 as $sp) {
                extract($sp);
                $linksp = "index.php?page=chitietsanpham&id=".$id;
                $image = $img_path.$image;
                $a = $price * ((100 - $price_sale) / 100);
                if($price_sale>0){
                    $b = '
                    <div class="card-title">
                    <s>
                    '.number_format($price).' đ
                    </s>
                    <span class="bg-warning p-1 text-dark fw-bold rounded">-'.$price_sale.'%</span><br>
                    '. number_format($a).' đ
                    </div>';
                }else{
                    $b = '
                    <div class="card-title">
                    '.number_format($price).' đ     
                    </div>';
                }
            echo '
            
            <div class="col-lg-3 mb-4">
            <div class="card w-100 p-3 h-100 d-inline-block">
                <div class="img-container">
                    <img class="image card-img-top" src="'.$image.'" alt="product img">

                    <div class="overplay">
                    <form action="index.php?page=addcart" method="post" class="d-flex justify-content-center">
                    <input type="hidden" name="id" id="id" value="'.$id. '">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="hidden" name="price_sale" value="'.$price_sale.'">
                    <input type="hidden" name="image" value="'.$image.'">
                    <input type="hidden" name="quantity" value="'.$quantity.'">
                    <button class="btn" type="submit" name="addcart" onclick="return confirm('."'".'  Thêm Thành Công'."'".')">
                   
                            Thêm Vào Giỏ</button>
                </form>
                        <a href="'.$linksp.'" class="btn"><i class="ti-eye"></i> Xem Chi Tiết&emsp;</a>

                    </div>
                </div>
                <div class="card-body font-weight-bold">
                <h6>'.$name.'</h6>
                '.$b.'

                </div>
                </div>
                </div>
            ';}
            
            ?>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="index.php?page=shop" class="btn view-btn1">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
<!--? Gallery Area Start -->
<div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img"
                            style="background-image: url(public/assets/img/gallery/gallery1.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img"
                            style="background-image: url(public/assets/img/gallery/gallery2.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img"
                                    style="background-image: url(public/assets/img/gallery/gallery3.png);"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img"
                                    style="background-image: url(public/assets/img/gallery/gallery4.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Watch Choice  Start-->
    <div class="watch-area section-padding30">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-130">
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Đa dạng phong cách</h2>
                        <p>Đa dạng mẫu mã để quý khách có thể lựa chọn theo phong cách yêu thích.</p>
                        <a href="#" class="btn">Xem sản phẩm</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="public/assets/img/gallery/choce_watch1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="public/assets/img/gallery/choce_watch2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Bảo hành 5 năm</h2>
                        <p>Thủ tục nhanh gọn, thay pin miễn phí</p>
                            <a href="#" class="btn">Xem sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Watch Choice  End-->
    
   
</main>