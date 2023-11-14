<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../dashboard.php"><i class="fas fa-home"></i> Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../orders/listOrders.php"><i class="fas fa-file-alt"></i> Quản Lý Đơn Hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../products/listProducts.php"><i class="fas fa-box"></i> Quản Lý Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../categories/listCategories.php"><i class="fas fa-list"></i> Quản Lý Danh Mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/listUser.php"><i class="fas fa-users"></i> Quản Lý Tài Khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../comments/comments.php"><i class="fas fa-comments"></i> Quản Lý Bình Luận</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../posts/listPosts.php"><i class="fas fa-newspaper"></i> Quản Lý Tin Tức</a>
                </li>
                <!-- Thêm các mục menu khác tùy thuộc vào nhu cầu của bạn -->
            </ul>
        </div>
    </div>
</nav>

