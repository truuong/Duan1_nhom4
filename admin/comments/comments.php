<?php include '../components/header.php';?>

        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="text-center">Quản trị bình luận</h3>
                    <table class="table table-hover" style="text-align:center">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Sản phẩm bình luận</th>
                                <th>Số bình luận</th>
                                <th>Bình luận gần nhất</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSJv_06krOqCNisodkCNGkfGSb17ukdCotgmzXtaXhdy2A_1HhCnaLMg5tkmgRlfbijiQzYtfl_vY9UOvjUAubDPmYYarUMJDNMiU_cSTV_uVPfwc1ivQoGWg&usqp=CAE" alt width="100px" height="100px">
                                </td>
                                <td>1</td>
                                <td>2023/11/14</td>
                                <td>
                                    <a href="detailComment.php" class="btn btn-info">Xem chi tiết</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </main>
<?php include '../components/footer.php';?>