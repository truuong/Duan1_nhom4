<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <h3 class="text-center">Sửa sản phẩm</h3>
                    <form action="/xu-ly-sua-san-pham" method="post" enctype="multipart/form-data">
                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ten-san-pham" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" value="Đồng hồ Gucci" id="ten-san-pham"
                                name="tenSanPham" required>
                        </div>

                        <!-- Giá sản phẩm -->
                        <div class="row mb-3">
                            <label for="gia-san-pham" class="form-label">Giá sản phẩm:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" value="10000000" id="gia-san-pham"
                                    name="giaSanPham" required>
                                <span class="input-group-text">VNĐ</span>
                            </div>
                        </div>

                        <!-- Ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="anh-san-pham" class="form-label">Ảnh sản phẩm:</label>
                            <input type="file" class="form-control" id="anh-san-pham" name="anhSanPham"
                                accept="image/*">
                        </div>

                        <!-- Giảm giá % -->
                        <div class="mb-3">
                            <label for="giam-gia" class="form-label">Giảm giá %:</label>
                            <input type="number" class="form-control" value="30" id="giam-gia" name="giamGia">
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="so-luong" class="form-label">Số lượng:</label>
                            <input type="number" class="form-control" value="110" id="so-luong" name="soLuong" required>
                        </div>

                        <!-- Danh mục -->
                        <div class="mb-3">
                            <label for="danh-muc" class="form-label">Danh mục:</label>
                            <select class="form-control" id="danh-muc" value="Đồng hồ" name="danhMuc" required>
                                <option value="Đồng hồ">Đồng hồ</option>
                                <option value="danh-muc-2">Danh mục 2</option>
                                <option value="danh-muc-3">Danh mục 3</option>
                                <!-- Thêm các tùy chọn danh mục khác nếu cần -->
                            </select>
                        </div>

                        <!-- Giới thiệu sản phẩm -->
                        <div class="mb-3">
                            <label for="gioi-thieu-san-pham" class="form-label">Giới thiệu sản phẩm:</label>
                            <textarea class="form-control" id="gioi-thieu-san-pham" name="gioiThieuSanPham" rows="4"
                                required></textarea>
                        </div>

                        <!-- Chi tiết sản phẩm -->
                        <div class="mb-3">
                            <label for="chi-tiet-san-pham" class="form-label">Chi tiết sản phẩm:</label>
                            <textarea class="form-control" id="chi-tiet-san-pham" name="chiTietSanPham" rows="8"
                                required></textarea>
                        </div>

                        <!-- Nút submit -->
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
      </div>
</section>