<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <?php
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $dm = products_select_by_id($id);
                ?>
                <h3 class="text-center">Sửa sản phẩm</h3>
                    <form action="index.php?action=products-update" method="post">
                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="ten-san-pham" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" id="name"
                                name="name" value="<?php echo $dm['name']; ?>" required>
                            <input type="hidden" name="id" value="<?php echo $dm['id']; ?>">
                        </div>

                        <!-- Giá sản phẩm -->
                        <div class="row mb-3">
                            <label for="gia-san-pham" class="form-label">Giá sản phẩm:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="price" value="<?php echo $dm['price']; ?>"
                                    name="price" required>
                                <span class="input-group-text">VNĐ</span>
                            </div>
                        </div>

                        <!-- Ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="anh-san-pham" class="form-label">Ảnh sản phẩm:</label>
                            <input type="file" class="form-control" id="images" name="images"
                                accept="image/*">
                        </div>

                        <!-- Giảm giá % -->
                        <div class="mb-3">
                            <label for="giam-gia" class="form-label">Giảm giá %:</label>
                            <input type="number" class="form-control"  id="price_sale" name="price_sale" value="<?php echo $dm['price_sale']; ?>">
                        </div>

                        <!-- Danh mục -->
                        <!-- <div class="mb-3">
                            <label for="danh-muc" class="form-label">Danh mục:</label>
                            <select class="form-control" id="danh-muc" name="danhMuc" required>
                                <option value="Đồng hồ">Đồng hồ</option>
                                <option value="danh-muc-2">Danh mục 2</option>
                                <option value="danh-muc-3">Danh mục 3</option>
                            </select>
                        </div> -->

                        <!-- Giới thiệu sản phẩm -->
                        <div class="mb-3">
                            <label for="gioi-thieu-san-pham" class="form-label">Giới thiệu sản phẩm:</label>
                            <textarea class="form-control" id="intro" name="intro" rows="4"
                                required></textarea>
                        </div>
                        <!-- Nút submit -->
                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                    </form>
                </div>
            </div>
      </div>
</section>