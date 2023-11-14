<?php include '../components/header.php';?>
        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Chi tiết bình luận</th>
                                <th>Ngày bình luận</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSJv_06krOqCNisodkCNGkfGSb17ukdCotgmzXtaXhdy2A_1HhCnaLMg5tkmgRlfbijiQzYtfl_vY9UOvjUAubDPmYYarUMJDNMiU_cSTV_uVPfwc1ivQoGWg&usqp=CAE" alt="" width="100px"
                                        height="100px"></td>
                                <td>Mắc quá</td>
                                <td>2023/11/14</td>
                                <td>
                                    <a href="" class="btn btn-primary">Xóa</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </main>
<?php include '../components/footer.php';?>