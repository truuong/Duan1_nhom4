<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Thanh Toán</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center"><b>Vui lòng điền thông tin cụ thể</b>
                </h3>
                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input class="form-control" id="name" type="text" name="customer_name">
                </div>
                <div class="form-group">
                    <label for="sdt">Số điện thoại</label>
                    <input class="form-control" id="sdt" type="text" name="customer_phone">

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control " id="email" type="email" name="customer_gmail">

                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input class="form-control input-lg" value="2" id="email" type="hidden" name="user_id">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <textarea class="form-control" rows="5" id="address" name="shipping_address"></textarea>

                </div>
                <div class="form-group">
                    <label for="note">Ghi chú</label>
                    <textarea class="form-control" rows="5" id="note" name="note"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <h3 class="text-center"><b>Thông tin sản phẩm</b>
                </h3>
                
                    <div class=" " >
                        <table class="table table-hover" style="width:400px;" >
                            <thead style="font-size: 15px;">
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Tổng</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-center">Tổng giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td  class="col-sm-8 col-md-6">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/public/assets/img/gallery/choce_watch1.png" style="width: 72px; height: 72px;"> </a>
                                    </td>
                                    <td  class="col-sm-1 col-md-1">
                                    <strong> <sup>sdfsfd</sup></strong>
                                    </td>
                                    <td></td>
                                    <td class="col-sm-1 col-md-1" style="text-align: center;">
                                        <input type="number" class="form-control qty cart_update" value="1" min="1">
                                    </td>
                                    
                                    <td class="col-sm-1 col-md-1 text-center">
                                        <strong> <sup>25000VND</sup></strong>
                                    </td>
                                    <td class="col-sm-1 col-md-1 text-center">
                                        <strong> <sup>25000VND</sup></strong>
                                    </td>
                                   
                                </tr>

                                <tr>
                                    
                                    <td>
                                        <h5>Tổng giá</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong></strong></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <td>
                                        <h5>Phí giao hàng</h5>
                                    </td>
                                    <td class="text-right">
                                        <h5><strong class="text-success">Miễn phí</strong></h5>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <h4>Tổng hóa đơn</h4>
                                    </td>
                                    <td class="text-right">
                                        <h4><strong>400000</strong></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-success" style="">
                                            Thanh toán <span class="glyphicon glyphicon-play"></span>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="index.php?page=cart" type="button" class="btn btn-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
</svg>
                                        </a>
                                    </td>



                                </tr>

                            </tbody>
                            <td>
                                <form action="" method="POST">

                                    <button type="submit" class="btn btn-success" name="redirect" style="">
                                        Thanh toán vnpay <span class="glyphicon glyphicon-play"></span>
                                    </button>
                                </form>
                            </td>
                        </table>
                    </div>
                
            </div>
        </div>
    </form>




</div>