<?php
include "../dao/pdo.php";
include "../dao/sanpham.php";
include "../dao/User.php";




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
            $listkh = users_select_all();
            include "users/listUsers.php";
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
