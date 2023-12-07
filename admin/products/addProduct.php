
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Thêm sản phẩm</h3>
                <form id="addProductform" action="index.php?action=products-add" method="post" enctype="multipart/form-data">
                    <!-- Tên sản phẩm -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <?php echo !empty($errors['name']['required']) ? '<span style="color:red;">' . $errors['name']['required'] . '</span>' : ''; ?>
                    </div>

                    <!-- Giá sản phẩm -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá sản phẩm:</label>
                        <input type="number" class="form-control" id="price" name="price">
                        <?php echo !empty($errors['price']['required']) ? '<span style="color:red;">' . $errors['price']['required'] . '</span>' : ''; ?>
                        <?php echo !empty($errors['price']['invalid']) ? '<span style="color:red;">' . $errors['price']['invalid'] . '</span>' : ''; ?>
                    </div>

                    <div class="mb-3">
                        <label for="price_sale" class="form-label">Giảm giá %:</label>
                        <input type="number" class="form-control" id="price_sale" name="price_sale">
                    </div>

                    <!-- Ảnh sản phẩm -->
                    <div class="mb-3">
                        <label for="exampleInputFile" class="form-label">Ảnh sản phẩm:</label>
                        <input type="file" class="form-control" id="exampleInputFile" name="image" accept="image/*">
                        <?php echo !empty($errors['image']['required']) ? '<span style="color:red;">' . $errors['image']['required'] . '</span>' : ''; ?>
                        <?php echo !empty($errors['image']['invalid_extension']) ? '<span style="color:red;">' . $errors['image']['invalid_extension'] . '</span>' : ''; ?>
                        <?php echo !empty($errors['image']['upload_error']) ? '<span style="color:red;">' . $errors['image']['upload_error'] . '</span>' : ''; ?>
                    </div>

                    <!-- Giảm giá % -->
                    
                    <div class="mb-3">
                        <label for="price_sale" class="form-label">Giảm giá %:</label>
                        <input type="number" class="form-control" id="price_sale" name="price_sale">
                    </div>
                    
                    <!-- Danh mục -->
                    <div class="mb-3">
                        <label for="cate_id" class="form-label">Danh mục:</label>
                        <select class="form-control" id="cate_id" name="cate_id">
                            <?php
                            foreach ($listcategories as $cate) {
                                extract($cate);
                                echo '<option value="' . $id . '">' . $name . '</option>';
                            }
                            ?>
                        </select>
                        <?php echo !empty($errors['cate_id']['required']) ? '<span style="color:red;">' . $errors['cate_id']['required'] . '</span>' : ''; ?>
                    </div>

                    <div class="mb-3">
                    <label for="intro" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>         
                    <input type="text"  class="form-control" id="intro" name="intro"  placeholder="Nhập mô tả..">        
                    </div>

                    <!-- Nút submit -->
                    <button type="submit" id="add" name="add" class="btn btn-primary" value="Show Alert" >Thêm sản phẩm</button>
                </form>

            </div>
        </div>
    </div>
    
</section>
