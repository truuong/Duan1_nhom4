<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="text-center">Thêm danh mục</h3>
                <form method="post" id="addCateForm" action="index.php?action=categories-add">
                    <label for="name" class="form-label">Danh mục:</label>
                    <input type="text"  class="form-control" id="name" name="name" placeholder="Nhập tên danh mục sản phẩm...">
                    <?php     echo !empty($errors['name']['required']) ?'<span style="color:red;">'. $errors['name']['required'].'</span>' : ''; ?>
                    <?php     echo !empty($errors['name']['min_length']) ?'<span style="color:red;">'. $errors['name']['min_length'].'</span>' : '';?>
                    <br>
                    <button type="submit" id='add' name="add" class="btn btn-primary mt-3">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</section>
