<!-- Nav Card -->

<div class="shop-section section mt-5 mb-5">
    <div class="col-12 text-center bg-secondary p-5 mb-5 w-100">
        <h3 class="text-warning">KẾT QUẢ TÌM KIẾM</h3>
    </div>
    <div class="container">
    <?php
        if(empty($nd)) {
            echo '<div><h1 class=" text-center font-weight-bold">Sản phẩm không tồn tại!</h1></div>';
        } ?>
        <div class="row m-5">
            <div class="col-lg-12 order-lg-2 order-1">
                <div class="row">


                    <?php
                    foreach($nd as $nd) {
                        extract($nd);
                        $linksp = "index.php?page=chitietsanpham&id=".$id;
                        $image = $img_path.$image;
                        $a = $price * ((100 - $price_sale) / 100);
                        if($price_sale > 0) {
                            $b = '
                            <div class="card-title">
                            <del>
                            '.number_format($price).' đ
                            </del>
                            <span class="bg-warning p-1 text-dark fw-bold">-'.$price_sale.'%</span>
                            '.number_format($a).' đ
                            </div>';
                        } else {
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
                                    ';
                    }
                    ?>




                </div>
            </div>
        </div>
    </div>

    <!-- End Nav Card -->