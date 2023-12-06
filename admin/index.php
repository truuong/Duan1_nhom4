<?php
include "../dao/global.php";
include "../dao/pdo.php";
include "../dao/sanpham.php";
include "../dao/categories.php";
include "../dao/User.php";




include "components/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'categories-list':
            $listcategories = loai_select_all()();
            include "categories/listCategories.php";
            break;

        case 'categories-edit':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $dm = categories_select_by_id($id);
            }
            include "categories/editCategory.php";
            break;
        case 'categories-update':
            if (isset($_POST['capnhat'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                categories_update($id,$name);
            }
            $listcategories = loai_select_all()();
            include "categories/listCategories.php";
            break;
        case 'categories-add':
            include "categories/addCategory.php";
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                categories_insert($name);
            }
            
            break;
        case 'categories-delete':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                categories_delete($id);
                $thongbao = "Xóa thành công !";
            }
            $listcategories = loai_select_all()();
            include "categories/listCategories.php";
            break;
            // ---------------------------------------------
            case 'products-edit':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $id = $_GET['id'];
                    $dm = products_select_by_id($id);
                }
                $listcategories = loai_select_all()();
                
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
            $quantity = $_POST['quantity'];
           
            products_update($id, $name, $price, $price_sale, $image,$cate_id ,$intro,$quantity);
            $target_file =IMG_PATH.$image;
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $thongbao = "uppdate thành công!"; 
        }
        
        $listcategories=loai_select_all()();
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
                $quantity = $_POST['quantity'];
                $target_file =IMG_PATH.$image;
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                products_insert($name, $price, $price_sale, $image, $cate_id, $intro,$quantity);
                $thongbao = "Thêm thành công!"; 
            }
            $listcategories=loai_select_all()();
            include "products/addProduct.php";
            break;

        case 'products-list':
            $listsp = products_select_all();
            include "products/listProducts.php";
            break;


        case 'products-xoa':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $image =IMG_PATH.get_image($id);
                products_delete($id);
                $thongbao = "Xóa thành công!";
            }
            
            
            $listsp = products_select_all();
            include "products/listProducts.php";
            break;
// -------------------------------------------------

case 'users-list':
    $listkh = users_select_all();
    include "users/listUsers.php";
    break;

case 'user-add':
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $permission = $_POST['permission'];

        users_insert( $name, $phone, $password, $email, $username, $permission);
        $thongbao = "Thêm thành công!";
    }
    $listkh = users_select_all();
    include "users/addUser.php";
    break;

case 'users-edit':
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        $dm = users_select_by_id($id);
    }
    include "users/editUser.php";
    break;

case 'users-update':
    if (isset($_POST['capnhat'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $permission = $_POST['permission'];
        users_update($id, $name, $phone, $password, $email, $permission);
        $thongbao = "Cập nhật thành công!";
    }
    $listkh = users_select_all();
    include "users/listUsers.php";
    break;

 case 'users-delete':
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        users_delete($id);
        $thongbao = "Xóa thành công!";
    }
    $listkh = users_select_all();
    include "users/listUsers.php";
    break;

// -----------------------------------------------------

        case 'comments-list':
            $listbl = binh_luan_all();
            include "comments/listComments.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                binh_luan_delete($id);
                $thongbao = "Xóa thành công!";
            }
            $listbl = binh_luan_all();
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
