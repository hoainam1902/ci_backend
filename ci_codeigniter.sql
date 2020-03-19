-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2020 lúc 01:47 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ci_codeigniter`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `created_at`, `updated_at`, `name`, `slug`) VALUES
(1, NULL, NULL, 'Adidas', 'adidas'),
(2, NULL, NULL, 'Nike', 'nike'),
(3, NULL, NULL, 'Uniqlo', 'uniqlo'),
(4, NULL, NULL, 'Burberry', 'burberry'),
(5, NULL, NULL, 'Owen', 'owen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 5, NULL, NULL),
(4, 4, 5, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 5, NULL, NULL),
(7, 7, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(170) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `has_paid` tinyint(4) NOT NULL,
  `email` varchar(170) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `phone`, `address`, `created_at`, `fullname`, `status`, `has_paid`, `email`, `note`) VALUES
(5, 0, '973433484', '01 ngo 7 khu 4 duong nguyen binh , dong trieu - quang ninh', '2020-02-25 15:03:29', 'nguyen duc cuong', 0, 0, 'heineken1200@gmail.com', ''),
(7, 1, '973433484', '01 ngo 7 khu 4 duong nguyen binh , dong trieu - quang ninh', '2020-02-25 15:56:29', 'tang thanh ha', 1, 0, 'heineken1200@gmail.com', ''),
(14, 0, '973433484', '01 ngo 7 khu 4 duong nguyen binh , dong trieu - quang ninh', '2020-02-27 15:28:27', 'nguyen duc cuong', 0, 0, 'heineken1200@gmail.com', ''),
(15, 1, '978363389', '01 ngo 7 khu 4 duong nguyen binh , dong trieu - quang ninh', '2020-02-27 16:29:10', 'nguyen duc cuong', 1, 0, 'heineken1200@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `amount`) VALUES
(4, 7, 1, 1, '0', '0'),
(11, 14, 1, 1, '0', '0'),
(12, 15, 2, 1, '0', '0'),
(13, 15, 3, 4, '150000', '60000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(171) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `price_list` int(11) NOT NULL,
  `image` varchar(171) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(171) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `price_list`, `image`, `images`, `featured`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'ao thun ngan tay nam gucci', 'ao-thun-ngan-tay', 'ao thun ngan tay nam gucci ao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucciao thun ngan tay nam gucci', 150000, 250000, 'bang-ma-mau-thuoc-nhuom-toc-bigen-1.jpg', NULL, 0, NULL, NULL, 1),
(2, 'ao thun ngan tay nu nike', 'ao-thun-ngan-tay-nu', 'ao thun ngan tay nu nike ao thun ngan tay nu nike ao thun ngan tay nu nike', 120000, 220000, NULL, NULL, 0, NULL, NULL, 1),
(3, 'quan dai nam owen', 'quan-dai-nam-owen', 'quan dai nam owenquan dai nam owenquan dai nam owenquan dai nam owenquan dai nam owenquan dai nam owen', 290000, 390000, NULL, NULL, 0, NULL, NULL, 1),
(4, 'ao so mi nam owen', 'ao-so-mi-nam-owen', 'ao so mi nam owen', 390000, 590000, NULL, NULL, 0, NULL, NULL, 1),
(5, 'ao so mi nam ke caro ngan tay owen', 'ao-so-mi-nam-caro-owen', 'ao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owenao so mi nam ke caro ngan tay owen', 290000, 490000, NULL, NULL, 0, NULL, NULL, 1),
(6, 'quan jean owen', 'quan-jean-owen', 'quan jean owenquan jean owenquan jean owenquan jean owenquan jean owenquan jean owenquan jean owenquan jean owen', 390000, 450000, NULL, NULL, 0, NULL, NULL, 1),
(7, 'ao khoac owen', 'ao-khoac-owen', 'ao khoac owenao khoac owenao khoac owenao khoac owenao khoac owenao khoac owen', 990000, 1200000, NULL, NULL, 0, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-11-19 18:21:50', '2019-11-19 18:21:50'),
(2, 'user', 'Normal User', '2019-11-19 18:21:50', '2019-11-19 18:21:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `fullname`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `isActive`, `phone`, `address`) VALUES
(1, 1, 'Admin25251325', 'admin@admin.com', '1Admin252513251.jpg', NULL, '$2y$10$/TuxBNvsT6gVbOOpB2xpT.amgFmBHWVZxAgNmlMr0bC4tHxvx1Gby', 'dEXwUodTuvsXh4tIG56KHLEMpesRJnwIxdCXmetuF5k02Pbm12DckfmF9Wbs', NULL, '2019-11-19 18:25:10', '2019-11-19 18:25:10', 1, '0973433484', '01 ngo 7 khu 4 duong nguyen binh , dong trieu - quang ninh'),
(2, NULL, '', 'hoainam1902@gmail.com', 'users/default.png', NULL, '$2y$10$vMarlYBzaU4Y38801UgIAeCsbQtKDY1uCz70w7O5Ot8NrfUnGH8Lm', NULL, NULL, NULL, NULL, 1, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`,`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
