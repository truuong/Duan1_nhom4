<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Quản lý sản phẩm</h3>
                <a href="index.php?action=products&sub_action=add" class="btn btn-primary mb-3">Thêm mới</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Giảm giá</th>
                            <th>Giá</th>
                            <!-- <th>Danh mục</th> -->
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php

                        foreach ($listsp as $sp) {
                            extract($sp);
                            $suasp = "index.php?action=products-edit&id=" . $id;


                            echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td><img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSJv_06krOqCNisodkCNGkfGSb17ukdCotgmzXtaXhdy2A_1HhCnaLMg5tkmgRlfbijiQzYtfl_vY9UOvjUAubDPmYYarUMJDNMiU_cSTV_uVPfwc1ivQoGWg&usqp=CAE"
                                        width="50px" height="50px" alt="">
                                    </td>
                                    <td>' . $price_sale . '%</td>
                                    <td>' . $price . 'VNĐ</td>
                                    

                                    <td>
                                    <a href="' . $suasp . '" class="btn btn-primary">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>
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