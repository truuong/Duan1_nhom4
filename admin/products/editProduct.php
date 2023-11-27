<?php if (is_array($dm)){extract($dm);}?>





<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <h3 class="text-center">Sửa sản phẩm</h3>
                <?php
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $dm = products_select_by_id($id);
                }
                ?>
                    <form action="index.php?action=products-update" method="POST" enctype="multipart/form-data">
                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $dm['name']; ?>"required>
                    </div>

                    <!-- Giá sản phẩm -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá sản phẩm:</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?php echo $dm['price']; ?>"required>
                    </div>

                    <!-- Ảnh sản phẩm -->
                    <div class="mb-3">
                        <label for="exampleInputFile" class="form-label">Ảnh sản phẩm:</label>
                        <input type="file" class="form-control" id="exampleInputFile" name="image" accept="image/*">
                        <?=$image?>
                    </div>

                    <!-- Giảm giá % -->
                    <div class="mb-3">
                        <label for="price_sale" class="form-label">Giảm giá %:</label>
                        <input type="number" class="form-control" value="<?php echo $dm['price_sale']; ?>" id="price_sale" name="price_sale">
                    </div>
                    
                    
                    <!-- Danh mục -->
                    <div class="mb-3">
                        <label for="cate_id" class="form-label">Danh mục:</label>
                        <select class="form-control" id="cate_id" required name="cate_id" >
                            <?php
                            foreach ($listcategories as $cate) {
                                extract($cate);
                                 $selected = ($dm[$id] == $item->cate_id) ?  'selected' : '';
                                    echo '<option value="' .$dm[$id]. '" ' . $selected. '>' .$dm[$name]. '</option>';
                            }
                            ?>


                            
                        </select>
                    </div>



                    <div class="mb-3">
                    <label for="intro" class="col-sm-3 text-end control-label col-form-label">Mô tả</label>         
                    <input type="text"  class="form-control" id="intro" name="intro" value="<?php echo $dm['intro']; ?>" placeholder="nhập mô tả ...">        
                    </div>

                        <!-- Giới thiệu sản phẩm -->
                        
                        <!-- Nút submit -->
                        <input type="hidden" name="id" id="id" value="<?php  echo $dm['id'] ;?>">
                        <button type="submit" id="update" name="update" class="btn btn-primary">uppdate</button>
                    </form>
                </div>
            </div>
      </div>
</section>