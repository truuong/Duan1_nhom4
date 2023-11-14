<?php include '../components/header.php';?>

        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9 ">
                    <h3 class="text-center">Quản trị danh mục</h3>
                    <a href="addCategories.php" class="btn btn-primary mb-3">Thêm mới</a>
                    <table class="table table-hover" border="0.5">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Quản trị</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Thời trang nam</td>
                                <td>
                                    <a href="editCategories.php" class="btn btn-primary">Sửa</a>
                                    <a href="" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    
<?php include '../components/footer.php';?>
    