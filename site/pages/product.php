<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End-->


<!-- Nav Card -->
<div class="shop-section section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2 ">
                <!-- Single Sidebar Start -->
                <ul class="list-group">
                <h6 class="sidebar-title">DANH MỤC SẢN PHẨM</h6>
                    <?php foreach($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?page=sanpham&id=".$id;
                        echo '
                        <a class="list-group-item text-dark d-flex justify-content-between align-items-center" href="'.$linkdm.'">'.$name.'</a>';
                    } ?>
                </ul> 
                <!-- Single Sidebar End -->

            </div>
            <div class="col-lg-9 order-lg-2 order-1">
                <div class="row">
                <div class="col-12 text-center">
                        <h3>DANH SÁCH SẢN PHẨM</h3>
                    </div>

                    <?php
                    if(isset($_GET['id']) && ($_GET['id']) > 0) {
                        $nhap = $dssp;
                    } else {
                        $nhap = $spall;
                    }
                    foreach($nhap as $sp) {
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
                                <div class="col-lg-4 mb-4">
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
                                                <button class="btn bg-danger" type="submit" name="addcart" onclick="return confirm('."'".'  Thêm Thành Công'."'".')">
                                               
                                                        Thêm Vào Giỏ</button>
                                            </form>
                                                
                                           
                                            <a href="'.$linksp.'" class="btn bg-danger">Xem Chi Tiết&emsp;</a>
        
                                        </div>
                                    </div>
                                    <div class="card-body font-weight-bold">
                                    <h6>'.$name.'</h6>
                                    '.$b.'

                                    </div>
                                    </div>
                                    </div>
                                    ';
                    }
                    ?>


                   
                </div>
            </div>
        </div>
    </div>

    <!-- End Nav Card -->
