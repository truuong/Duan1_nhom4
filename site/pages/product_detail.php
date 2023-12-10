<?php
if(isset($_SESSION['ss_user'])) {
    $id = $_REQUEST['id'];
}
$dsbl = binh_luan_select_all($id);

?>
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Chi tiết sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <?php
                    if(is_array($onesp)) {
                        extract($onesp);

                    }
                    $image = $img_path.$image;

                    ?>
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">
                                <img id="main-image" src="<?php echo $image ?>" width="250" />
                            </div>
                            <div class="thumbnail text-center">
                                <img onclick="change_image(this)" src="<?php echo $image ?>" width="70">
                                <img onclick="change_image(this)" src="<?php echo $image ?>" width="70">
                                <img onclick="change_image(this)" src="<?php echo $image ?>" width="70">
                                <img onclick="change_image(this)" src="<?php echo $image ?>" width="70">
                                <img onclick="change_image(this)" src="<?php echo $image ?>" width="70">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3">
                                <h5 class="text-uppercase">
                                    <?php echo $name ?>
                                </h5>
                                <div class="price d-flex flex-row align-items-center">
                                    <div class="card-title font-weight-bold">
                                        <?php
                                        $a = $price * ((100 - $price_sale) / 100);
                                        if($price_sale > 0) {
                                            echo '<s>
                                            '.number_format($price).' đ
                                            </s>&ensp;
                                            <span class="bg-warning p-1 text-dark fw-bold rounded">-'.$price_sale.'%</span><br>
                                            '.number_format($a).' đ';
                                        } else {
                                            echo number_format($price).'đ';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <p class="about font-weight-bold">
                                <?php echo $intro ?>
                            </p>
                            <div class="cart mt-4 align-items-center">
                                <form action="index.php?page=cart" method="post">
                                    <input type="hidden" name="ma_hh" id="ma_hh" value="<?php echo $id ?>">
                                    <button id="themvaogio" name="themvaogio" class="btn btn-danger rounded text-uppercase mr-2 px-4">Thêm vào giỏ hàng</button>
                                </form><br><br>
                                <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-secondary">
                <h1 class="p-3 mb-2 bg-light text-dark text-center font-weight-bold">Bình Luận</h1>
                <div class="p-4 m-4">
                    <form action="index.php?page=binhluan" method="post">
                        <input hidden value="<?php echo $id; ?>" id="id" name="id" type="text">
                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
                                src="public/assets/img/product-img/avt.png" width="40">
                            <textarea required class="form-control ml-1 shadow-none textarea" name="content" id="content"
                                placeholder="Nhập nội dung bình luận..."></textarea>
                        </div>
                    
                    <div class="mt-2 text-right m-2 p-1">
                        <button class="btn btn-dark btn-sm rounded" id="binhluan" name="binhluan" type="submit">Gửi bình luận</button>
                    </div>
                    </form>
                    <?php foreach($dsbl as $bl) {
                        extract($bl);
                        echo ' 
                    <div class="rounded bg-white p-3 m-1">
                  
                        <div class="d-flex flex-row align-items-start">
                        <img class="rounded-circle" src="public/assets/img/product-img/avt.png" width="40">
                            <div class="d-flex flex-column justify-content-start ml-2"><span
                                    class="d-block font-weight-bold name">'.$name.'</span><span
                                    class="date text-black-50">'.$created_at.'</span></div>
                        </div>
                        <div class="mt-2">
                            <p class="comment-text">'.$content.'</p>
                        </div>
                    </div>';
                    }
                    if(empty($bl)) {
                        echo '
                    <div class="m-2 text-center">
                    <h3 class="text-warning">Sản phẩm chưa có bình luận</h3>
                    </div>
                    ';
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<!-- list san pham cung loai start -->
<div class="shop-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
    <h1 class="text-center col-12"><strong>SẢN PHẨM CÙNG LOẠI</strong></h1>
    <div class="container">
        <div class="row">


            <?php
            foreach($spcungloai as $sp) {
                extract($sp);
                $linksp = "index.php?page=chitietsanpham&id=".$id;
                $image = $img_path.$image;
                $a = $price * ((100 - $price_sale) / 100);
                if($price_sale > 0) {
                    $b = '
                    <div class="card-title">
                    <s>
                    '.number_format($price).' đ
                    </s>
                    <span class="bg-warning p-1 text-dark fw-bold">-'.$price_sale.'%</span><br>
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
                            <form action="index.php?page=cart" method="post" class="d-flex justify-content-center">
                                <input type="hidden" name="id" id="id" value="'.$id.'">
                                <button class="btn" type="submit" id="themvaogio" name="themvaogio"><i class="ti-shopping-cart"></i>
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
        </form>


        </div>
    </div>
</div>
<!-- list san pham cung loai end -->

<script>
    function change_image(image) {
        var container = document.getElementById("main-image");

        // Loại bỏ class 'clicked' từ tất cả các ảnh mini trước khi thêm vào ảnh mới
        var thumbnails = document.querySelectorAll('.thumbnail img');
        thumbnails.forEach(function (thumbnail) {
            thumbnail.classList.remove('clicked');
        });

        container.src = image.src;
        image.classList.add('clicked'); // Thêm class 'clicked' vào ảnh mini đang được click
    }

    document.addEventListener("DOMContentLoaded", function (event) {
        // Thêm sự kiện click cho tất cả các ảnh mini
        var thumbnails = document.querySelectorAll('.thumbnail img');
        thumbnails.forEach(function (thumbnail) {
            thumbnail.addEventListener('click', function () {
                change_image(this);
            });
        });
    });
</script>