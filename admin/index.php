<?php
include "../dao/pdo.php";
include "../dao/sanpham.php";




include "components/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];

  switch ($action) {
      case 'categories':
          if (isset($_GET['sub_action'])) {
              $subAction = $_GET['sub_action'];
              switch ($subAction) {
                  case 'edit':
                      include "categories/editCategory.php";
                      break;
                  case 'add':
                      include "categories/addCategory.php";
                      break;
                  default:
                      include "categories/listCategories.php";
                      break;
              }
          } else {
              include "categories/listCategories.php";
          }
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
