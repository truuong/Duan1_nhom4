<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Sửa danh mục</h3>
                <?php
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $dm = categories_select_by_id($id);
                ?>
                <form method="post" action="index.php?action=categories-update">
                    <input type="hidden" name="id" value="<?php echo $dm['id']; ?>">
                    <label for="name" class="form-label">Danh mục:</label>
                    <input type="text" id="name" name="name" class="form-control mb-3" value="<?php echo $dm['name']; ?>">
                    <button type="submit" name="capnhat" class="btn btn-primary">Sửa</button>
                </form>
                <?php
                } else {
                    // Xử lý khi không có ID hợp lệ
                    echo "ID không hợp lệ.";
                }
                ?>
            </div>
        </div>
    </div>
</section>
