<?php 


?>
<main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Giỏ hàng</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================Cart Area =================-->
        <section class="cart_area section_padding">
            <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($_SESSION["cart"] as $sp ){
                                    extract($sp);
                                    $tt=(Int)$price*(Int)$quantity;


                                    echo '
                                    <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="'. IMG_PATH1 . $image .'" alt="" />
                                            </div>
                                            
                                        </div>
                                    </td>
                                    <td><div class="media-body">
                                    <p>'.$name.'</p>
                                </div></td>

                                    <td>
                                        <h5>'.$price.'VNĐ</h5>
                                    </td>
                                  
                                    
                                    <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <input type="number" class="form-control qty cart_update"name="quantity" value="'.$quantity.'" min="1">
                                    </td>
                                    
                                    <td>
                                        <h5>'.$tt.'VNĐ</h5>
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td style="width:5px">
                                        <a class="btn btn-danger">xóa</a>
                                    </td>
                                </tr>
                                    
                                    ';
                                    $i++;
                                }
                                
                                
                                ?>
                                <tr class="bottom_button">
                                   <td></td>
                                   
                                    
                                    
                                </tr>
                              
                                <tr class="bottom_button">
                                <td>
                                        
                                        <a href="index.php?page=deleteCart&del=1" onclick="confirm('Bạn có chắc muốn xóa giỏ hàng!!')" class="btn btn-danger">Xóa giỏ hàng</a> 
                                        
                                </td>
                                    <td>
                                        <a class="btn_1" href="">Cập nhật giỏ hàng</a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="cupon_text float-right">
                                            <a class="btn_1" href="#">Mã giảm giá</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td>
                                        <h5>Tổng thanh toán</h5>
                                    </td>
                                    <td>
                                        <h5><?=$tong?>VNĐ</h5>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="checkout_btn_inner float-right">
                            <a class="btn_1" href="index.php?page=shop">Tiếp tục mua hàng</a>
                            <a class="btn_1 checkout_btn_1" href="index.php?page=order">Thanh toán</a>
                        </div>
                    </div>
                </div>
        </section>
        <!--================End Cart Area =================-->
    </main>