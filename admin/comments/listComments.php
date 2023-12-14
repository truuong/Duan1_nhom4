<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Quản lý bình luận</h3>
                <table class="table table-hover" style="text-align:center">
                    <thead>
                        <tr>
                            <th>Mã Loại sản phẩm</th>
                            <th>Tên Loại sản phẩm</th>
                            <th>Số lượng BL</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($listtk as $sp) {
                            extract($sp);
                            $ctbl = "index.php?action=chitietbl&id=". $id;
                            echo '
                                    <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$slbl.'</td>
                                    <td>
                                    <a href="' . $ctbl . '" class="btn btn-primary">Chi Tiết</a>
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