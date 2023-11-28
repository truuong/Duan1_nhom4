<?php
include "../dao/global.php";
include "../dao/pdo.php";
include "../dao/sanpham.php";
include "../dao/categories.php";




include "components/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'categories-list':
            include "categories/listCategories.php";
            break;

        case 'categories-edit':
            include "categories/editCategory.php";
            break;
        case 'categories-add':
            include "categories/addCategory.php";
            break;
            // ---------------------------------------------
            case 'products-edit':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $id = $_GET['id'];
                    $dm = products_select_by_id($id);
                }
                $listcategories = categories_select_all();
                
        include "products/editProduct.php";
        break;

        case 'products-update':
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            $price_sale = $_POST['price_sale'];
            $cate_id = $_POST['cate_id'];
            $intro = $_POST['intro'];
           
            products_update($id, $name, $price, $price_sale, $image,$cate_id ,$intro);
            $target_file =IMG_PATH_ADMIN.$image;
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $thongbao = "uppdate thành công!"; 
        }
        
        $listcategories=categories_select_all();
        $listsp = products_select_all();
        include "products/listProducts.php";
        break;

        case 'products-add':
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image = $_FILES['image']['name'];
                $price_sale = $_POST['price_sale'];
                $cate_id = $_POST['cate_id'];
                $intro = $_POST['intro'];
                $target_file =IMG_PATH_ADMIN.$image;
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                products_insert($name, $price, $price_sale, $image, $cate_id, $intro);
                $thongbao = "Thêm thành công!"; 
            }
            $listcategories=categories_select_all();
            include "products/addProduct.php";
            break;

        case 'products-list':
            $listsp = products_select_all();
            include "products/listProducts.php";
            break;


        case 'products-xoa':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $image =IMG_PATH_ADMIN.get_image($id);
                products_delete($id);
                $thongbao = "Xóa thành công!";
            }
            
            
            $listsp = products_select_all();
            include "products/listProducts.php";
            break;
// -------------------------------------------------

        case 'users-list':
            include "users/listUsers.php";
            break;

        case 'users-edit':
            include "users/editUser.php";
            break;

// -----------------------------------------------------

        case 'comments-list':
            include "comments/listComments.php";

            break;
        case 'comments-edit':
            include "orders/detailOrder.php";
            break;
        default:
            include "components/home.php";
            break;
    }
} else {
    include "components/home.php";
}


include "components/footer.php";
