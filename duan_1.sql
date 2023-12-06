-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2023 lúc 02:27 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `updated_at`, `user_id`, `id_product`) VALUES
(7, 'dep', '2023-12-05 09:09:32', '2023-12-05 09:09:32', 2, 1),
(8, 'ok', '2023-12-05 12:22:11', '2023-12-05 12:22:11', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_gmail` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `intro` text NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `price_sale`, `intro`, `quantity`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Olympia Star OPA58057MSK-T', 4200000, '1.jpg', 10, 'Đồng hồ Olympia Star OPA58057MSK-T với thiết kế tinh xảo, kiểu dáng trẻ trung và thanh lịch, thích hợp cho các quý ông yêu thích sự tươi mới và lịch sự. Bộ 3 kim kèm vót nhọn và ô lịch tại vị trí góc 3h và 6h mang phong cách châu Âu đẹp mắt, giúp người dùng dễ dàng theo dõi thời gian.', 61, 1, '2023-12-02 10:59:39', '2023-12-02 10:59:39'),
(2, 'Đồng Hồ MVMT D-MR01-BBL Nam Quartz', 4000000, '2.jpg', 0, 'Đồng hồ MVMT Revolver Basin MR01-BBL là sản phẩm đồng hồ nam MVMT mang dáng vẻ cực chất. Với bề ngoài đen tuyền toàn bộ khiến cho sản phẩm này trở nên đặc biệt hiếm. Với những chàng trai yêu thích sự huyền bị, nét mạnh mẽ và lạnh lùng từ gam màu đen có thể lựa chọn sử dụng sản phẩm này. Chúng ta hãy cùng ngắm nhìn chiếc đồng hồ đặc biệt này nhé.', 28, 1, '2023-12-02 11:03:07', '2023-12-02 11:03:07'),
(3, 'Đồng Hồ Olym Pianus OP89322S-T Nam Quartz', 3500000, '3.jpg', 10, 'Chiếc đồng hồ Olym Pianus OP89322S-T mang ngoại hình đặc sắc và ấn tượng, thu hút sự chú ý của nhiều người nhờ sự kết hợp hoàn hảo giữa gam màu bạc sáng lấp lánh và những viên đá quý tinh xảo. Thiết kế tinh tế và đặc biệt của sản phẩm càng làm nổi bật sự đẳng cấp và thu hút người nhìn.', 35, 1, '2023-12-02 11:05:58', '2023-12-02 11:05:58'),
(4, 'Đồng Hồ Pierre Lannier 209F438 Nam Quartz', 5200000, '4.jpg', 15, 'Pierre Lannier 209F438 là một chiếc đồng hồ với mặt số và dây đeo thép lưới màu đen đẹp mắt. Kim và vạch chỉ giờ được mạ vàng hồng, tạo nên một vẻ tinh tế và sang trọng. Thiết kế của đồng hồ mang tính hiện đại và phong cách, là một phụ kiện hoàn hảo để tăng thêm sự cuốn hút và sự tự tin cho người đeo.', 91, 1, '2023-12-02 11:06:38', '2023-12-02 11:06:38'),
(5, 'Đồng Hồ Casio LTP-V005L-1BUDF Nữ Quartz', 720000, '5.jpg', 20, 'Casio LTP-V005L-1BUDF nữ với thiết kế đơn giản và tinh tế. Mặt đen kết hợp với dây da đen với vân cá tính, tạo điểm nhấn cho các chỉ số và kim chỉ mạ bạc. Nút điều chỉnh tiện lợi bên hông giúp dễ dàng điều chỉnh thời gian. Đây là một mẫu đồng hồ đẹp và thuận tiện để quan sát thời gian hàng ngày.', 0, 2, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(6, 'Đồng Hồ Citizen EW1580-50E Nữ Eco-Drive', 5720000, '6.jpg', 20, 'Mẫu đồng hồ Citizen EW1580-50E có thiết kế thời trang sang trọng với nền số màu đen, các chi tiết kim chỉ và vạch số được gia công mạ bạc tinh tế và nổi bật. Đồng hồ còn có lịch ngày tiện dụng được đặt ở vị trí 3 giờ. Dây đeo kim loại bóng mịn tạo nên vẻ trang nhã, quyến rũ cho người đeo.\r\n\r\n', 0, 2, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(7, 'Đồng Hồ Daniel Wellington Petite DW00100163 Nữ Quartz', 4650000, '7.jpg', 0, 'Mẫu đồng hồ nữ Daniel Wellington DW00100163 có kim chỉ và vạch số được thiết kế mảnh mai trên nền mặt số màu trắng sang trọng, kết hợp với dây đeo bằng kim loại dạng lưới màu vàng hồng đẹp mắt.\n\n', 0, 2, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(8, 'Đồng Hồ Pierre Lannier 310F908 Nữ Cơ/Automatic', 7500000, '8.jpg', 10, 'Đồng hồ nữ 310F908 Acier Milanais Doré-Rose là mẫu đầu tiên trong bộ sưu tập Eolia sở hữu chuyển động tự động. Là một món trang sức thực sự nữ tính, mẫu này sẽ thu hút bạn bởi nhiều ưu điểm của nó. Sự tinh tế của ren Eolia tương phản độc đáo với chuyển động tự động mang lại cảm giác rất thú vị.\r\n', 4, 2, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(9, 'Đồng Hồ Treo Tường Karlsson KA5751WH Quartz', 2570000, '9.jpg', 0, 'Karlsson là một thương hiệu đồng hồ nổi tiếng trên thế giới đến từ Hà Lan. Họ được biết đến với những sản phẩm đồng hồ để bàn, đồng hồ báo thức và đồng hồ treo tường chất lượng cao, hoàn thiện tốt với những kiểu mẫu và thiết kế sáng tạo phù hợp với mọi phong cách nội thất.', 3, 3, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(10, 'Đồng Hồ Treo Tường Karlsson KA5671BL Quartz', 1280000, '10.jpg', 5, 'Karlsson là một thương hiệu đồng hồ nổi tiếng trên thế giới đến từ Hà Lan. Họ được biết đến với những sản phẩm đồng hồ để bàn, đồng hồ báo thức và đồng hồ treo tường chất lượng cao, hoàn thiện tốt với những kiểu mẫu và thiết kế sáng tạo phù hợp với mọi phong cách nội thất.', 0, 3, '2023-12-02 11:14:24', '2023-12-02 11:14:24'),
(11, 'Đồng Hồ Treo Tường Karlsson KA5734BL Quartz', 1280000, '11.jpg', 0, 'Karlsson là một thương hiệu đồng hồ nổi tiếng trên thế giới đến từ Hà Lan. Họ được biết đến với những sản phẩm đồng hồ để bàn, đồng hồ báo thức và đồng hồ treo tường chất lượng cao, hoàn thiện tốt với những kiểu mẫu và thiết kế sáng tạo phù hợp với mọi phong cách nội thất.', 2, 3, '2023-12-02 11:21:35', '2023-12-02 11:21:35'),
(12, 'Đồng Hồ Treo Tường Seiko QXA769S Quartz', 1340000, '12.jpg', 0, 'Đồng hồ treo tường Seiko QXA769S Quartz có vỏ đồng hồ được làm từ chất liệu nhựa cao cấp, mang lại độ bền và ổn định cho sản phẩm. Mặt số tròn thanh lịch sự phối hợp 2 màu sắc nổi bật – đen và đỏ – giúp chiếc đồng hồ dễ dàng phù hợp với nhiều không gian nội thất đa dạng.\r\n\r\n', 0, 3, '2023-12-02 11:21:35', '2023-12-02 11:21:35'),
(13, 'Dây Da Đồng Hồ Percent Leather A01CY0220XA0', 520000, '13.jpg', 0, 'Percent là thương hiệu dây da đồng hồ cao cấp, được tạo nên từ da bê phôi Ý với chất lượng vượt trội, mang đến vẻ sang trọng và đẳng cấp cho người dùng. Với sự đa dạng của các loại vân da mặt độc đáo như vân da bê tự nhiên tinh tế, vân cá sấu lịch lãm và da Nappa trơn mượt không vân, Percent tạo nên sự khác biệt đặc trưng', 0, 4, '2023-12-02 11:21:35', '2023-12-02 11:21:35'),
(14, ' Dây da đồng hồ Percent Leather A01AY0120XA0 SIZE ', 510000, '14.jpg', 10, 'Percent là thương hiệu dây da đồng hồ cao cấp, được tạo nên từ da bê phôi Ý với chất lượng vượt trội, mang đến vẻ sang trọng và đẳng cấp cho người dùng. Với sự đa dạng của các loại vân da mặt độc đáo như vân da bê tự nhiên tinh tế, vân cá sấu lịch lãm và da Nappa trơn mượt không vân, Percent tạo nên sự khác biệt đặc trưng.', 7, 4, '2023-12-02 11:21:35', '2023-12-02 11:21:35'),
(15, 'Dây Da Đồng Hồ Daniel Wellington DW00200006', 1250000, '15.jpg', 0, 'Daniel Wellington là một thương hiệu đồng hồ cao cấp đến từ Thụy Điển, được sáng lập bởi Filip Tysander vào năm 2011. Các đồng hồ Daniel Wellington sử dụng bộ máy thạch anh và được chia thành 5 dòng sản phẩm chính: Classic, Classic Petite, Classic Black và Dapper.', 0, 4, '2023-12-02 11:21:35', '2023-12-02 11:21:35'),
(16, 'Dây Da Đồng Hồ Daniel Wellington DW00200197', 1250000, '16.jpg', 0, 'Daniel Wellington là một thương hiệu đồng hồ cao cấp đến từ Thụy Điển, được sáng lập bởi Filip Tysander vào năm 2011. Các đồng hồ Daniel Wellington sử dụng bộ máy thạch anh và được chia thành 5 dòng sản phẩm chính: Classic, Classic Petite, Classic Black và Dapper.', 0, 4, '2023-12-02 11:21:35', '2023-12-02 11:21:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đồng hồ nam', '2023-11-27 10:23:27', '2023-11-27 10:23:27'),
(2, 'Đồng hồ nữ', '2023-12-02 10:27:40', '2023-12-02 10:27:40'),
(3, 'Đồng hồ treo tường', '2023-12-02 10:27:40', '2023-12-02 10:27:40'),
(4, 'Dây đeo', '2023-12-02 10:27:40', '2023-12-02 10:27:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `permission` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `password`, `email`, `username`, `created_at`, `updated_at`, `permission`) VALUES
(2, 'truong', '0123456788', '01234432', 'iosvietnam48@gmail.com', 'truongnguyen@', '2023-11-28 09:33:03', '2023-11-28 09:33:03', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `id_product` (`id_product`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `order_id` (`order_id`) USING BTREE,
  ADD KEY `order_details_ibfk_3` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
