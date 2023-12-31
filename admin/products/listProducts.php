<?php
if (isset($thongbao) && ($thongbao != "")) {
    echo "<p class='text-success'>$thongbao</p>";
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Quản lý sản phẩm</h3>
                <a href="index.php?action=products-add" class="btn btn-primary mb-3">Thêm mới</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Giảm giá</th>
                            <th>Giá</th>
                            <th>Danh mục</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($listsp as $sp) {
                            extract($sp);
                            $sua = "index.php?action=products-edit&id=" . $id;
                            $xoa = "index.php?action=products-xoa&id=" . $id;

                            echo '<tr>
                                    <td>' .$id. '</td>
                                    <td>' .$name. '</td>
                                    <td><img src="'.IMG_PATH_ADMIN.$image. '"
                                        width="70px"  height="70px" alt="' .$name. '">
                                    </td>
                                    <td>' .$price_sale. '%</td>
                                    <td>' .$price. ' VNĐ</td>
                                    <td>' .$cate_id. '</td>

                                    <td>
                                    <a href="' .$sua. '" class="btn btn-primary">Sửa</a>
                                    <a onclick="return confirm('."'".'  Bạn có muốn xoá san pham này không?'."'".');" href="'.$xoa.'" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>