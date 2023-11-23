<?php
include "../dao/pdo.php";
include "../dao/categories.php";
include "../dao/sanpham.php";




include "components/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'categories-list':
            $listloai = categories_select_all();
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
            $listloai = categories_select_all();
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
            $listloai = categories_select_all();
            include "categories/listCategories.php";
            break;

        case 'products-edit':
            include "products/editProduct.php";
            break;

        case 'products-add':
            include "products/addProduct.php";
            break;

        case 'products-list':
            $listsp = products_select_all();
            include "products/listProducts.php";


            break;

        case 'users-list':
            include "users/listUsers.php";
            break;

        case 'users-edit':
            include "users/editUser.php";
            break;

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
