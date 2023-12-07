<?php
    if(!empty($_POST)){

        $errors=[];

        //bắt lỗi namename
        if(empty($_POST['name'])){
            $errors['name']['required'] = 'Bắt buộc phải nhập ';
        }
        else{
            if(strlen($_POST['name'])<5){
                $errors['name']['min_length']= 'Số ký tự phải lớn hơn hoặc bằng 5 ký tự';
            }
        }


        //bắt lỗi email
        if(empty($_POST['email'])){
            $errors['email']['required']='Bắt buộc phải nhập Email';
        }
        else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $errors['email']['invalid']='Email không đúng định dạng';
            }
        }

        // bắt lỗi giá sản phẩm
        if (empty($_POST['price'])) {
            $errors['price']['required'] = 'Bắt buộc phải nhập';
        } else {
            $price = $_POST['price'];
            if (!is_numeric($price)) {
                $errors['price']['invalid'] = 'Giá trị phải là số';
            } elseif ($price <= 0) {
                $errors['price']['positive'] = 'Giá trị phải lớn hơn 0';
            } 
        }

        //image

        if (!empty($_FILES['image']['name'])) {
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            $image_extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        
            // Kiểm tra xem phần mở rộng của tệp có phải là một trong những phần mở rộng được phép không
            if (!in_array($image_extension, $allowed_extensions)) {
                $errors['image']['invalid_extension'] = 'Chỉ chấp nhận tệp JPG, JPEG, PNG, hoặc GIF.';
            } else {
                // Kiểm tra xem có lỗi không trong quá trình tải lên
                if ($_FILES['image']['error'] > 0) {
                    $errors['image']['upload_error'] = 'Có lỗi xảy ra khi tải lên hình ảnh.';
                } else {
                    // Tiếp tục xử lý hình ảnh, ví dụ: lưu vào thư mục và lưu đường dẫn vào cơ sở dữ liệu
                    $upload_dir = 'path/to/upload/directory/';
                    $uploaded_file = $upload_dir . uniqid() . '.' . $image_extension;
        
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaded_file)) {
                        // Hình ảnh đã được tải lên thành công
                    } else {
                        $errors['image']['upload_error'] = 'Có lỗi xảy ra khi lưu hình ảnh vào thư mục.';
                    }
                }
            }
        } else {
            // Nếu không có file hình ảnh được chọn
            $errors['image']['required'] = 'Bắt buộc phải chọn một file hình ảnh.';
        }

        // price_sale

        if (empty($_POST['price_sale'])) {
            $errors['price_sale']['required'] = 'Bắt buộc phải nhập giá sale';
        } else {
            $price_sale = $_POST['price_sale'];
        
            // Kiểm tra xem giá sale có phải là số không
            if (!is_numeric($price_sale)) {
                $errors['price_sale']['invalid'] = 'Giá sale phải là số';
            } elseif ($price_sale <= 0) {
                $errors['price_sale']['positive'] = 'Giá sale phải lớn hơn 0';
            }
        }
        
        // intro

        if (empty($_POST['intro'])) {
            $errors['intro']['required'] = 'Bắt buộc phải nhập giới thiệu';
        } else {
            $intro = $_POST['intro'];

            if (strlen($intro) < 10) {
                $errors['intro']['min_length'] = 'Giới thiệu phải chứa ít nhất 10 ký tự';
            }
        }
    }
        
?>