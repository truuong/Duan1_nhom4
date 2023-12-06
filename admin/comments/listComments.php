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
                            <th>Mã khách hàng</th>
                            <th>Ngày Bình luận</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listbl as $sp) {
                            extract($sp);
                            $xoabl = "index.php?action=xoabl&id=".$id;
                            echo '
                                    <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$content.'</td>
                                    <td>'.$id_product.'</td>
                                    <td>'.$user_id.'</td>
                                    <td>'.$created_at.'</td>
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