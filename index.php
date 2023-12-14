<?php
ob_start();
session_start();

include "dao/pdo.php";
include "dao/user.php";
include "dao/global.php";
include "dao/sanpham.php";
include "dao/categories.php";


include "site/components/header.php";


if (isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
        case 'home':
            include_once "site/pages/home.php";
            break;

        case 'shop':
            include_once "site/pages/product.php";
            break;


        case 'dangnhap':
            if (isset($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                //xu li:kiem tra
                $kh = checkuser($username, $password);
                if (is_array($kh)) {
                    $_SESSION['ss_user'] = $kh;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại hoặc sai thông tin đăng nhập !!!";
                };
            }
            include "site/pages/login.php";
            break;

        case 'register':
            $errors = [];

            if (isset($_POST['register'])) {
                // Xử lý lỗi cho trường 'name'
                if (empty($_POST['name'])) {
                    $errors['name']['required'] = 'Bắt buộc phải nhập tên người dùng';
                } else {
                    $name = $_POST['name'];
                }

                // Xử lý lỗi cho trường 'phone'
                if (empty($_POST['phone'])) {
                    $errors['phone']['required'] = 'Bắt buộc nhập số điện thoại';
                } else if (substr($_POST['phone'], 0, 1) === '0' || strlen($_POST['phone']) < 10) {
                    $errors['phone']['invalid'] = 'Số điện thoại phải bắt đầu từ 0 và không ít hơn 9 số';
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
                    if (is_array(checkusername($_POST["username"]))) {
                        $errors['username']['repeat'] = 'Tên người dùng đã tồn tại !!!';
                    } else {
                        $username = $_POST["username"];
                    }
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
                    $thongbao = "Đăng ký thành công!";
                }
            }
            include_once "site/pages/register.php";
            break;


        case 'forgot':
            $errors = [];
            if (isset($_POST['forgot'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $kh = getUserEmail($username, $email);
                $code = substr(rand(0, 999999), 0, 6);
                $title = "Quên mật khẩu";
                $conten = "Mã xác nhận của bạn là : <span style='color:green'>" . $code . "</span";
                $mail->sendMail($title, $content, $email);

                $_SESSION['mail'] = $email;
                $_SESSION['code'] = $code;

                header('Location: index.php?page=verification');
            }



            include_once "site/pages/forgot.php";
            break;

        case 'verification':
            include_once "site/pages/verification.php";
            break;

        case 'changePass':
            $errors = [];
            $repeatpassword = [];
            if (isset($_POST['doiMK'])) {
                $id = $_POST['id'];
                if (empty($_POST['password'])) {
                    $errors['password']['required'] = 'Bắt buộc nhập mật khẩu mới ';
                } else {
                    $password = $_POST['password'];
                }

                if (empty($_POST['password2'])) {
                    $errors['password2']['required'] = 'Bắt buộc nhập nhập lại mật khẩu mới';
                } else {
                    $repeatpassword = $_POST['password2'];
                }

                if ($password == $repeatpassword) {
                    change_password($id, $password);
                    header('Location: index.php?page=thongtinkh');
                } else {
                    $thongbao = 'Không được để trống và mật khẩu mới và nhập lại mật khẩu phải giống nhau';
                }
            }


            include_once "site/pages/changePass.php";
            break;
        case 'cart':
            include_once "site/pages/cart.php";
            break;

        case 'about':
            include_once "site/pages/about.php";
            break;

        case 'thongtinkh':
            
            include_once "site/pages/thongtinkh.php";
            break;

        case 'changeUser':

            if (isset($_POST['doiTT'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                // Thực hiện hàm để cập nhật thông tin người dùng
                users_change($id, $name, $email, $phone);

                // Chuyển hướng người dùng sau khi cập nhật thông tin
                header('Location: index.php?page=thongtinkh');
                exit();
            }

            include_once "site/pages/changeUser.php";
            break;
        case 'dangxuat':
            session_unset();
            header('Location: index.php');
            break;

        case 'shop_detail':
            include_once "site/pages/product_detail.php";
            break;

        default:
            include_once "site/pages/home.php";
    }
} else {
    include "site/pages/home.php";
}



include_once "site/components/footer.php";
