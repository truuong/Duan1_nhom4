<?php include '../components/header.php';?>

        <main class="main">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3 class="text-center">Trang quản trị</h3>
                    <?php include '../components/menuAdmin.php';?>
                </div>
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h3 class="text-center">Thêm sản phẩm</h3>
                    <form action="/xu-ly-them-san-pham" method="post" enctype="multipart/form-data">
                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ten-san-pham" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" id="ten-san-pham" name="tenSanPham" required>
                        </div>
                
                        <!-- Giá sản phẩm -->
                        <div class="mb-3">
                            <label for="gia-san-pham" class="form-label">Giá sản phẩm:</label>
                            <input type="number" class="form-control" id="gia-san-pham" name="giaSanPham" required>
                        </div>
                
                        <!-- Ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="anh-san-pham" class="form-label">Ảnh sản phẩm:</label>
                            <input type="file" class="form-control" id="anh-san-pham" name="anhSanPham" accept="image/*">
                        </div>
                
                        <!-- Giảm giá % -->
                        <div class="mb-3">
                            <label for="giam-gia" class="form-label">Giảm giá %:</label>
                            <input type="number" class="form-control" id="giam-gia" name="giamGia">
                        </div>
                
                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="so-luong" class="form-label">Số lượng:</label>
                            <input type="number" class="form-control" id="so-luong" name="soLuong" required>
                        </div>
                
                        <!-- Danh mục -->
                        <div class="mb-3">
                            <label for="danh-muc" class="form-label">Danh mục:</label>
                            <select class="form-control" id="danh-muc" name="danhMuc" required>
                                <option value="danh-muc-1">Danh mục 1</option>
                                <option value="danh-muc-2">Danh mục 2</option>
                                <option value="danh-muc-3">Danh mục 3</option>
                                <!-- Thêm các tùy chọn danh mục khác nếu cần -->
                            </select>
                        </div>
                
                        <!-- Giới thiệu sản phẩm -->
                        <div class="mb-3">
                            <label for="gioi-thieu-san-pham" class="form-label">Giới thiệu sản phẩm:</label>
                            <textarea class="form-control" id="gioi-thieu-san-pham" name="gioiThieuSanPham" rows="4" required></textarea>
                        </div>
                
                        <!-- Chi tiết sản phẩm -->
                        <div class="mb-3">
                            <label for="chi-tiet-san-pham" class="form-label">Chi tiết sản phẩm:</label>
                            <textarea class="form-control" id="chi-tiet-san-pham" name="chiTietSanPham" rows="8" required></textarea>
                        </div>
                
                        <!-- Nút submit -->
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
        </main>
<?php include '../components/footer.php';?>