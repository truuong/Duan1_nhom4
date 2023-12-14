<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Quản lý bình luận</h3>
                <table class="table table-hover" style="text-align:center">
                    <thead>
                        <tr>
                            <th>Mã bình luận</th>
                            <th>Nội dung</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Thời Gian Bình Luận</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listblct as $sp) {
                            extract($sp);
                            $xoabl = "index.php?action=xoabl&id=".$idbl;
                            echo '
                                    <tr>
                                    <td>'.$idbl.'</td>
                                    <td>'.$nd.'</td>
                                    <td>'.$mahh.'</td>
                                    <td>'.$tenhh.'</td>
                                    <td>'.$makh.'</td>
                                    <td>'.$tenkh.'</td>
                                    <td>'.$ngaybl.'</td>
                                    <td>
                                                <a onclick="return confirm('."'".'Bạn có muốn xoá Bình luận này không?'."'".');" href="'.$xoabl.'" class="btn btn-danger">Xóa</a>
                                            </td>   
                                    </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                            if(isset($thongbao)&&($thongbao!="")){
                            echo "<p class='text-success'>$thongbao</p>";}
                            ?>
            </div>
        </div>
    </div>
</section>