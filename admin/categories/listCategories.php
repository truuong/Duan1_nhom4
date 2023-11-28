<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Quản lý danh mục</h3>
                    <a href="index.php?action=categories-add" class="btn btn-primary mb-3">Thêm mới</a>
                    <table class="table table-hover" border="0.5">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Quản trị</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        foreach ($listcategories as $cate) {
                            extract($cate);
                            $sua_cate = "index.php?action=categories-edit&id=".$id;
                            $xoa_cate = "index.php?action=categories-delete&id=".$id;
                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$created_at.'</td>
                                <td>'.$updated_at.'</td>
                                <td>
                                    <a href="'.$sua_cate.'" class="btn btn-primary">Sửa</a>
                                    <a onclick="return confirm('."'".'  Bạn có muốn xoá Danh Mục này không?'."'".');" href="'.$xoa_cate.'" class="btn btn-danger">Xóa</a>




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
      </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->