<?php include '../components/header.php';?>
        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <form action="/xu-ly-sua" method="post" enctype="multipart/form-data">
                        <!-- Hình ảnh -->
                        <div class="mb-3">
                            <label for="hinh-anh" class="form-label">Hình ảnh:</label>
                            <input type="file" class="form-control w-100" id="hinh-anh" name="hinhAnh" accept="image/*">
                        </div>

                        <!-- Tiêu đề -->
                        <div class="mb-3">
                            <label for="tieu-de" class="form-label">Tiêu đề:</label>
                            <input type="text" class="form-control w-100" id="tieu-de" name="tieuDe" required>
                        </div>

                        <!-- Đường dẫn -->
                        <div class="mb-3">
                            <label for="duong-dan" class="form-label">Đường dẫn:</label>
                            <input type="text" class="form-control w-100" id="duong-dan" name="duongDan" required>
                        </div>

                        <!-- Mô tả chi tiết -->
                        <div class="mb-3">
                            <label for="mo-ta" class="form-label">Mô tả chi tiết:</label>
                            <textarea class="form-control w-100" id="mo-ta" name="moTa" rows="4" required></textarea>
                        </div>

                        <!-- Nút submit -->
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
            </div>
        </main>
<?php include '../components/footer.php';?>