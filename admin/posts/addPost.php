<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <h3 class="text-center">Thêm bài viết</h3>
                <form action="/xu-ly-them-moi" method="POST" enctype="multipart/form-data">
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
      </div>
</section>