<?php

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

          case 'products':
            if (isset($_GET['sub_action'])) {
                $subAction = $_GET['sub_action'];
                switch ($subAction) {
                    case 'edit':
                        include "products/editProduct.php";
                        break;
                    case 'add':
                        include "products/addProduct.php";
                        break;
                    default:
                        include "products/listProducts.php";
                        break;
                }
            } else {
                include "products/listProducts.php";
            }
            break;
        
        case 'posts':
            if (isset($_GET['sub_action'])) {
                $subAction = $_GET['sub_action'];
                switch ($subAction) {
                    case 'edit':
                        include "posts/editPost.php";
                        break;
                    case 'add':
                        include "posts/addPost.php";
                        break;
                    default:
                        include "posts/listPosts.php";
                        break;
                }
            } else {
                include "posts/listPosts.php";
            }
            break;
        
        case 'users':
            if (isset($_GET['sub_action'])) {
                $subAction = $_GET['sub_action'];
                switch ($subAction) {
                    case 'edit':
                        include "users/editUser.php";
                        break;
                    default:
                        include "users/listUsers.php";
                        break;
                }
            } else {
                include "users/listUsers.php";
            }
            break;
        
        case 'comments':
            if (isset($_GET['sub_action'])) {
                $subAction = $_GET['sub_action'];
                switch ($subAction) {
                    case 'edit':
                        include "comments/detailComment.php";
                        break;
                    default:
                        include "comments/comments.php";
                        break;
                }
            } else {
                include "comments/comments.php";
            }
            break;
        
        case 'orders':
            if (isset($_GET['sub_action'])) {
                $subAction = $_GET['sub_action'];
                switch ($subAction) {
                    case 'edit':
                        include "orders/detailOrder.php";
                        break;
                    default:
                        include "orders/listOrders.php";
                        break;
                }
            } else {
                include "orders/listOrders.php";
            }
            break;
        

      default:
          include "components/home.php";
          break;
  }
} else {
  include "components/home.php";
}

 
include "components/footer.php";
?>