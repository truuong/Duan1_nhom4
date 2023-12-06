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
            $listcategories = categories_select_all();
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
            if (isset($_POST['capnhat'])&& !empty($_POST['name'])) {
                $name = $_POST['name'];
                $id = $_POST['id'];
                categories_update($id,$name);
                $listcategories = categories_select_all();
                include "categories/listCategories.php";
            }else{
                echo "<script>window.location.href = '{$_SERVER['HTTP_REFERER']}';</script>";
                
                
            }
            
            break;
            case 'categories-add':
                $errors = [];
            
                if (isset($_POST['add'])) {
                    // Xử lý lỗi cho trường 'name'
                    if (empty($_POST['name'])) {
                        $errors['name']['required'] = 'Bắt buộc phải nhập tên danh mục';
                    } elseif (strlen($_POST['name']) <= 5) {
                        $errors['name']['min_length'] = 'Tên danh mục phải lớn hơn 5 ký tự';
                    } else {
                        $name = $_POST['name'];
                    }
            
                    // Kiểm tra nếu không có lỗi, thực hiện thêm danh mục
                    if (empty($errors)) {
                        categories_insert($name);
                        $thongbao = "Thêm thành công!";
                    }
                }
            
                include "categories/addCategory.php";
                break;
            
        case 'categories-delete':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                categories_delete($id);
                $thongbao = "Xóa thành công !";
            }
            $listcategories = categories_select_all();
            include "categories/listCategories.php";
            break;
            // ---------------------------------------------
            case 'products-edit':
                if (isset($_GET['id']) && ($_GET['id']) > 0 ) {
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
            $errors = [];
        
            if (isset($_POST['add'])) {
                // Xử lý lỗi cho trường 'name'
                if (empty($_POST['name'])) {
                    $errors['name']['required'] = 'Bắt buộc phải nhập tên sản phẩm';
                } else {
                    $name = $_POST['name'];
                }
        
                // Xử lý lỗi cho trường 'price'
                if (empty($_POST['price'])) {
                    $errors['price']['required'] = 'Bắt buộc phải nhập giá sản phẩm';
                } elseif (!is_numeric($_POST['price']) || $_POST['price'] <= 0) {
                    $errors['price']['invalid'] = 'Giá sản phẩm phải là một số dương';
                } else {
                    $price = $_POST['price'];
                }
        
                // Xử lý lỗi cho trường 'image'
                if (empty($_FILES['image']['name'])) {
                    $errors['image']['required'] = 'Bắt buộc phải chọn hình ảnh';
                } else {
                    $image = $_FILES['image']['name'];
                    $target_file =IMG_PATH_ADMIN.$image;
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                }
        
                // Xử lý lỗi cho trường 'price_sale'
                if (!isset($_POST['price_sale']) || $_POST['price_sale'] === "") {
                    $errors['price_sale']['required'] = 'Bắt buộc phải nhập giá sale';
                } elseif (!is_numeric($_POST['price_sale']) || $_POST['price_sale'] <= 0) {
                    $errors['price_sale']['invalid'] = 'Giá sale phải là một số dương';
                } else {
                    $price_sale = $_POST['price_sale'];
                }
        
                // Xử lý lỗi cho trường 'cate_id'
                if (empty($_POST['cate_id'])) {
                    $errors['cate_id']['required'] = 'Bắt buộc phải chọn danh mục';
                } else {
                    $cate_id = $_POST['cate_id'];
                }
        
                // Xử lý lỗi cho trường 'intro'
                if (empty($_POST['intro'])) {
                    $errors['intro']['required'] = 'Bắt buộc phải nhập giới thiệu';
                } elseif (strlen($_POST['intro']) < 10) {
                    $errors['intro']['min_length'] = 'Giới thiệu phải chứa ít nhất 10 ký tự';
                } else {
                    $intro = $_POST['intro'];
                }
        
                // Kiểm tra nếu không có lỗi, thực hiện thêm sản phẩm
                if (empty($errors)) {
                    products_insert($name, $price, $price_sale, $image, $cate_id, $intro);
                    $thongbao = "Thêm thành công!";
                }
            }
        
            $listcategories = categories_select_all();
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
    $listkh = users_select_all();
    include "users/listUsers.php";
    break;

    case 'user-add':
        $errors = [];
    
        if (isset($_POST['add'])) {
            // Xử lý lỗi cho trường 'name'
            if (empty($_POST['name'])) {
                $errors['name']['required'] = 'Bắt buộc phải nhập tên người dùng';
            } else {
                $name = $_POST['name'];
            }
    
            // Xử lý lỗi cho trường 'phone'
            if (empty($_POST['phone'])) {
                $errors['phone']['required'] = 'Bắt buộc phải nhập số điện thoại';
            } else {
                $phone = $_POST['phone'];
            }
    
            // Xử lý lỗi cho trường 'password'
            if (empty($_POST['password'])) {
                $errors['password']['required'] = 'Bắt buộc phải nhập mật khẩu';
            } else {
                $password = $_POST['password'];
            }
    
            // Xử lý lỗi cho trường 'email'
            if (empty($_POST['email'])) {
                $errors['email']['required'] = 'Bắt buộc phải nhập địa chỉ email';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email']['invalid'] = 'Địa chỉ email không hợp lệ';
            } else {
                $email = $_POST['email'];
            }
    
            // Xử lý lỗi cho trường 'username'
            if (empty($_POST['username'])) {
                $errors['username']['required'] = 'Bắt buộc phải nhập tên đăng nhập';
            } else {
                $username = $_POST['username'];
            }
    
            // Xử lý lỗi cho trường 'permission'
            if (empty($_POST['permission'])) {
                $errors['permission']['required'] = 'Bắt buộc chọn quyền cho người dùng';
            } else {
                $permission = $_POST['permission'];
            }
    
            // Kiểm tra nếu không có lỗi, thực hiện thêm người dùng
            if (empty($errors)) {
                users_insert($name, $phone, $password, $email, $username, $permission);
                $thongbao = "Thêm thành công!";
            }
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
