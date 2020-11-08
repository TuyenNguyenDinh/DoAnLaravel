-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 04:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `ngaylap_hd` date NOT NULL,
  `noi_nhan_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tong_tien` double UNSIGNED NOT NULL DEFAULT 0,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tinh_trang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chờ xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `ngaylap_hd`, `noi_nhan_hang`, `tong_tien`, `ghi_chu`, `user_id`, `created_at`, `updated_at`, `tinh_trang`) VALUES
(2, 2, '2020-10-27', '2149 Grove Street', 9090000, 'rr', 1, NULL, NULL, 'Đã giao hàng'),
(3, 3, '2020-10-28', 'Quảng Thọ', 11390000, 'Giao hàng nhanh, cẩn thận', 1, NULL, NULL, 'Đã giao hàng'),
(4, 5, '2020-10-31', 'PY', 48930000, NULL, 1, NULL, NULL, 'Xác nhận bởi người mua hàng');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `so_luong_mua` int(11) UNSIGNED NOT NULL,
  `don_gia` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `so_luong_mua`, `don_gia`, `created_at`, `updated_at`) VALUES
(2, 2, 19, 1, 9090000, NULL, NULL),
(3, 3, 8, 1, 11390000, NULL, NULL),
(4, 4, 7, 1, 8250000, NULL, NULL),
(5, 4, 8, 1, 11390000, NULL, NULL),
(6, 4, 2, 2, 9600000, NULL, NULL),
(7, 4, 17, 1, 10090000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TV', NULL, NULL),
(2, 'Loa Karaoke', NULL, NULL),
(3, 'Tủ lạnh', NULL, NULL),
(4, 'Máy giặt', NULL, NULL),
(5, 'Điều hòa', NULL, NULL),
(8, 'Quạt hơi nước', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `sdt`, `dia_chi`, `mail`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đình Tuyên', '6317841135', 'Phước Yên, Quảng Thọ, Quảng Điền, Thừa Thiên Huế', 'tuyennguyendinh1608@gmail.com', NULL, NULL),
(2, 'Nguyễn Đình Tuyên Nguyễn Đình', '6317841135', '2149 Grove Street', 'tuyennguyendinh1608@gmail.com', NULL, NULL),
(3, 'Hoàng Nguyễn Công', '0123456789', 'Quảng Thọ', 'nguyendinhtuyen16082000@gmail.com', NULL, NULL),
(4, 'Pessi', '1234556890', 'ASD', 'pessi0147852@gmail.com', NULL, NULL),
(5, 'Pessi', '0856014749', 'PY', 'pessi0147852@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2020_06_18_024313_create_categories_table', 1),
(18, '2020_06_18_024422_create_customers_table', 1),
(19, '2020_06_18_024608_create_products_table', 1),
(20, '2020_06_18_024649_create_bills_table', 1),
(21, '2020_06_18_024731_create_bill_details_table', 1),
(22, '2020_06_18_040538_add_foreignkey_to_billdetails', 1),
(23, '2020_06_18_040606_add_foreignkey_to_products', 1),
(24, '2020_06_18_040625_add_foreignkey_to_bills', 1),
(25, '2020_06_18_040807_add_role_to_users', 1),
(26, '2020_06_25_010748_add_status_to_bills', 1),
(27, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(28, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(29, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(30, '2016_06_01_000004_create_oauth_clients_table', 2),
(31, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('4116baf90fe952db8896ed0ca6498d85a7aa4b253db89a61762e525d6c1e80b646d81c11cc2b72dc', 9, 1, 'MyApp', '[]', 0, '2020-09-29 03:23:50', '2020-09-29 03:23:50', '2021-09-29 10:23:50'),
('68b94a97e94787f9fcbf6557f1f6b78ad3e09ccccaf349ca2fbdbe8653d37f5ebd79c3e44e8bdb48', 1, 1, 'MyApp', '[]', 0, '2020-09-29 20:15:23', '2020-09-29 20:15:23', '2021-09-30 03:15:23'),
('778bb1c40f0380876d927ade18a94b7055ebc43ffdd44bc99392f130b763ccf50b4b2e6ee14ca9e5', 10, 1, 'MyApp', '[]', 0, '2020-09-29 03:38:32', '2020-09-29 03:38:32', '2021-09-29 10:38:32'),
('82446250e0cee9aa674c1386abcb7dae0f8597cd6d624a9d5a727b6944831bb09905fa357b2c615c', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:43:25', '2020-09-29 02:43:25', '2021-09-29 09:43:25'),
('89cfbad11155ddb0818ae7d1981db65af27419a115c3cfec44970dbb06b7ef62972558feb2612414', 1, 1, 'MyApp', '[]', 0, '2020-09-29 05:10:21', '2020-09-29 05:10:21', '2021-09-29 12:10:21'),
('8ac3dd8a38f1f6934d3353a7c3eb1982c087dd8e9767d1e372ee9ff2db4f938f9c278882d22d10a9', 1, 1, 'MyApp', '[]', 0, '2020-09-29 17:16:45', '2020-09-29 17:16:45', '2021-09-30 00:16:45'),
('9c3092bbfe26fc60686ee9b2ee865f6e940f0e983272714dff42cfcfcee3b7515e54fd6c35f3adcc', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:46:11', '2020-09-29 02:46:11', '2021-09-29 09:46:11'),
('afc45e331ab9efa8e72cbd2ff86f9aaf575b71b872cb6dc4827e03dcd606ab80cef5ddf57fb69e63', 1, 1, 'MyApp', '[]', 0, '2020-09-29 03:09:37', '2020-09-29 03:09:37', '2021-09-29 10:09:37'),
('b54f5e27d48a050232e9725cd9ff7bdbd3dc560b85cd8a88d0f611638ba5778c746543f3f0ae264f', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:44:12', '2020-09-29 02:44:12', '2021-09-29 09:44:12'),
('b5846dbe302997e21881f052d1c99a02363ccf67719741aa23427bcad48abd1759e2cbf714aa3cbc', 1, 1, 'MyApp', '[]', 0, '2020-10-25 00:27:30', '2020-10-25 00:27:30', '2021-10-25 07:27:30'),
('cbd6dafd825fd5749327a2d7d39e6985371e75647e47882c2aae7e55e54fc6bf1d10bcdba9ddc9ba', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:45:34', '2020-09-29 02:45:34', '2021-09-29 09:45:34'),
('d67d5f56c8d46e37cc2901078b868f3936250420ebc000a1b2af584d138e6c425caf684dfc242ec7', 1, 1, 'MyApp', '[]', 0, '2020-09-29 17:40:35', '2020-09-29 17:40:35', '2021-09-30 00:40:35'),
('d77dbd61685672c443559288eff6bd33824f17830aaead91d529e20d317b60d92db2911672284d23', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:45:53', '2020-09-29 02:45:53', '2021-09-29 09:45:53'),
('e2cddb5653e467edf2a6a86623b922f5a271bf9defcd9607c4a9024980a246064ef8f78d2edb765e', 8, 1, 'MyApp', '[]', 0, '2020-09-29 03:23:17', '2020-09-29 03:23:17', '2021-09-29 10:23:17'),
('e5240d02535f178178a5d1e52d71d814ca8e46852441f2b895aac1c74a622ba307baa83fc6ba21c5', 1, 1, 'MyApp', '[]', 0, '2020-09-29 02:57:22', '2020-09-29 02:57:22', '2021-09-29 09:57:22'),
('e544e348a9345bba93642cef5cb4dd97f53edb506ab4d14f20703fe1546d3ef300d9df6538047cca', 1, 1, 'MyApp', '[]', 0, '2020-09-29 05:43:54', '2020-09-29 05:43:54', '2021-09-29 12:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'DGw9rNwwMUbYET7s2Owmvy8C10d95KAJBCAUne4U', NULL, 'http://localhost', 1, 0, 0, '2020-09-29 02:06:44', '2020-09-29 02:06:44'),
(2, NULL, 'Laravel Password Grant Client', '8AVMSZ7hxWGtTwkG2aJybPqfWAOQmplAr5yOncV7', 'users', 'http://localhost', 0, 1, 0, '2020-09-29 02:06:44', '2020-09-29 02:06:44'),
(3, NULL, 'Laravel Personal Access Client', 'AiDSbtrBeSM5x0RDlhWFpLE0PAAPUpIxk2gQZ7UI', NULL, 'http://localhost', 1, 0, 0, '2020-11-02 00:55:08', '2020-11-02 00:55:08'),
(4, NULL, 'Laravel Password Grant Client', '1Xo6pBxvuBpLsB4vtVpnCtiqaY5rjuZdB7k4SJIu', 'users', 'http://localhost', 0, 1, 0, '2020-11-02 00:55:08', '2020-11-02 00:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-09-29 02:06:44', '2020-09-29 02:06:44'),
(2, 3, '2020-11-02 00:55:08', '2020-11-02 00:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` double NOT NULL DEFAULT 0,
  `so_luong` int(11) NOT NULL,
  `thong_tin_cu_the` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `ten`, `anh`, `gia_sp`, `so_luong`, `thong_tin_cu_the`, `created_at`, `updated_at`) VALUES
(1, 1, 'Smart Tivi Samsung 4K 43 inch UA43RU7200', '1592968683_7548108_83791b2f3a3234707b3f60a095a0021c.jpg', 8490000, 20, '<ul>\r\n	<li>Thiết kế m&agrave;n h&igrave;nh cỡ nhỏ 43 inch, kiểu d&aacute;ng cứng c&aacute;p.</li>\r\n	<li>Đ&ocirc;̣ ph&acirc;n giải&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/72220/tivi-sony-kdl-55w800c-24.jpg\" target=\"_blank\">4K</a>&nbsp;sắc n&eacute;t gấp 4 lần Full HD.</li>\r\n	<li>C&ocirc;ng ngh&ecirc;̣&nbsp;HDR10+&nbsp;n&acirc;ng cao đ&ocirc;̣ tương phản cho trải nghiệm h&igrave;nh ảnh ấn tượng.</li>\r\n	<li>C&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/71836/tivi-sony-kdl-50w800c-95.jpg\" target=\"_blank\">PurColor</a>&nbsp;mang đ&ecirc;́n th&ecirc;́ giới hình ảnh rực rỡ đ&acirc;̀y màu sắc.</li>\r\n	<li>C&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/72220/tivi-sony-kdl-55w800c-34.jpg\" target=\"_blank\">UHD Dimming</a>&nbsp;tối ưu cho h&igrave;nh ảnh sắc n&eacute;t, m&agrave;u sắc hiển thị ch&acirc;n thật hơn.</li>\r\n	<li>C&ocirc;ng nghệ Dolby Digital Plus&nbsp;cho trải nghi&ecirc;̣m &acirc;m thanh vòm bùng n&ocirc;̉, s&ocirc;́ng đ&ocirc;̣ng.</li>\r\n	<li>H&ecirc;̣ đi&ecirc;̀u hành&nbsp;<a href=\"https://www.youtube.com/embed/Hs8h_NV6Ytg\" target=\"_blank\">Tizen</a>&nbsp;OS d&ecirc;̃ sử dụng, hỗ trợ nhiều ứng dụng giải tr&iacute; hấp dẫn đi k&egrave;m One remote điều khiển linh hoạt.</li>\r\n	<li>Đi&ecirc;̀u khi&ecirc;̉n tivi bằng đi&ecirc;̣n thoại qua ứng dụng SmartThings.</li>\r\n	<li>H&ocirc;̃ trợ&nbsp;<a href=\"https://www.youtube.com/embed/lRysCT3j6d8\" target=\"_blank\">chi&ecirc;́u màn hình đi&ecirc;̣n thoại l&ecirc;n tivi</a>&nbsp;nhờ Screen Mirroring, Airplay 2.</li>\r\n</ul>', NULL, NULL),
(2, 1, 'Android Tivi Sony 4K 43 inch KD-43X8000G', '1592969208_569026_ff88983e81a92e443a413a74b6e8eb7b.jpg', 9600000, 22, '<ul>\r\n	<li>Kiểu d&aacute;ng hiện đại, gọn g&agrave;ng ph&ugrave; hợp với nhiều kh&ocirc;ng gian nội thất như ph&ograve;ng ngủ, ph&ograve;ng kh&aacute;ch.</li>\r\n	<li>H&igrave;nh ảnh sắc n&eacute;t với độ ph&acirc;n giải&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/201361/sony-kd-43x8000g-18.jpg\" target=\"_blank\">4K</a>&nbsp;.</li>\r\n	<li>T&aacute;i hiện dải m&agrave;u phong ph&uacute;, ch&acirc;n thực hơn c&ugrave;ng c&ocirc;ng nghệ m&agrave;n h&igrave;nh chấm lượng tử&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/71827/tivi-sony-kdl-43w800c-70.jpg\" target=\"_blank\">TRILUMINOS</a>.</li>\r\n	<li>Khả năng n&acirc;ng cấp chất lượng h&igrave;nh ảnh độ ph&acirc;n giải thấp l&ecirc;n gần chuẩn 4K với c&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/71827/tivi-sony-kdl-43w800c-51.jpg\" target=\"_blank\">4K X-Reality PRO</a>.</li>\r\n	<li>Mang đến trải nghiệm &acirc;m thanh mạnh mẽ, sống động với c&ocirc;ng nghệ S-Force Front Surround.</li>\r\n	<li>Hệ điều h&agrave;nh&nbsp;<a href=\"https://www.youtube.com/embed/XlCpVZ6Tj18\" target=\"_blank\">Android&nbsp;8.0</a>&nbsp;hiện đại c&ugrave;ng remote th&ocirc;ng minh,&nbsp;Google Assistant điều khiển, t&igrave;m kiếm giọng n&oacute;i tiếng Việt dễ d&agrave;ng.</li>\r\n	<li>Hỗ trợ điều khiển TV bằng điện thoại qua ứng dụng Video &amp; TV SideView v&agrave; hỗ trợ chiếu m&agrave;n h&igrave;nh điện thoại android l&ecirc;n TV dễ d&agrave;ng.</li>\r\n</ul>', NULL, NULL),
(3, 1, 'Smart Tivi Samsung 43 inch UA43N5500', '1592969384_6566393_0bae88c2d878592e2fcd24f54db26434.jpg', 7890000, 30, '<ul>\r\n	<li>Đ&ocirc;̣ ph&acirc;n giải Full HD sắc nét g&acirc;́p 2 l&acirc;̀n đ&ocirc;̣ ph&acirc;n giải HD.</li>\r\n	<li>C&ocirc;ng ngh&ecirc;̣ Mega Contrast&nbsp;n&acirc;ng c&acirc;́p đ&ocirc;̣ s&acirc;u hình ảnh, cho hình ảnh th&ecirc;m ph&acirc;̀n &acirc;́n tượng.</li>\r\n	<li>C&ocirc;ng ngh&ecirc;̣&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/162885/tivi-samsung-ua49n5500-1.jpg\" target=\"_blank\">PurColor</a>&nbsp;với dải màu r&ocirc;̣ng cho màu sắc rực rỡ.</li>\r\n	<li>C&ocirc;ng ngh&ecirc;̣&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/162885/tivi-samsung-ua49n5500-2.jpg\" target=\"_blank\">Micro Dimming Pro</a>&nbsp;n&acirc;ng c&acirc;́p đ&ocirc;̣ tương phản, hình ảnh, đ&ocirc;̣ nét, đem đ&ecirc;́n sắc đen s&acirc;u thẳm cùng sắc trắng tinh khi&ecirc;́t.</li>\r\n	<li>C&ocirc;ng ngh&ecirc;̣ &acirc;m thanh Dolby Digital Plus cho trải nghi&ecirc;̣m &acirc;m thanh vòm &acirc;́n tượng.</li>\r\n	<li>H&ecirc;̣ đi&ecirc;̀u hành&nbsp;<a href=\"https://www.youtube.com/embed/Hs8h_NV6Ytg\" target=\"_blank\">Tizen</a>&nbsp;d&ecirc;̃ sử dụng cùng hàng nghìn ứng dụng giải trí trực tuy&ecirc;́n thú vị.</li>\r\n	<li>H&ocirc;̃ trợ&nbsp;<a href=\"https://www.youtube.com/embed/lRysCT3j6d8\" target=\"_blank\">chi&ecirc;́u màn hình đi&ecirc;̣n thoại l&ecirc;n tivi</a>&nbsp;và đi&ecirc;̀u khi&ecirc;̉n tivi bằng đi&ecirc;̣n thoại qua ứng dụng SmartThings.</li>\r\n</ul>', NULL, NULL),
(4, 1, 'Smart Tivi LG 4K 43 inch 43UM7400PTA', '1592969426_1886885_9d954c998754c1829ad3a7535ead659c.jpg', 9290000, 18, '<ul>\r\n	<li>M&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước 43 inch, viền 1.3 cm.</li>\r\n	<li>Độ ph&acirc;n giải&nbsp;<a href=\"https://www.youtube.com/embed/GPBKru88gKY\" target=\"_blank\">4K</a>&nbsp;sắc n&eacute;t gấp 4 lần Full HD.</li>\r\n	<li>C&ocirc;ng nghệ&nbsp;True Color Accuracy mang đến dải m&agrave;u rộng.</li>\r\n	<li>N&acirc;ng cấp chất lượng h&igrave;nh ảnh nhờ c&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/165116/lg-55uk6100pta-222.jpg\" target=\"_blank\">4K Upscaler</a>.</li>\r\n	<li>C&ocirc;ng nghệ &acirc;m thanh DTS Virtual:X cho &acirc;m thanh v&ograve;m sống động.</li>\r\n	<li>H&ecirc;̣ đi&ecirc;̀u hành&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/203367/lg-43um7400pta-8.jpg\" target=\"_blank\">WebOS</a>&nbsp;4.5 d&ecirc;̃ sử dụng, kho ứng dụng phong ph&uacute;, remote th&ocirc;ng minh h&ocirc;̃ trợ&nbsp;<a href=\"https://www.youtube.com/embed/16j5jE5bP18\" target=\"_blank\">tìm ki&ecirc;́m giọng nói bằng ti&ecirc;́ng Vi&ecirc;̣t</a>&nbsp;cả 3 mi&ecirc;̀n.</li>\r\n	<li>Điều khiển tivi, t&igrave;m kiếm th&ocirc;ng tin dễ d&agrave;ng với tr&iacute; tuệ nh&acirc;n tạo AI ThinQ.</li>\r\n	<li>Đi&ecirc;̀u khi&ecirc;̉n tivi bằng đi&ecirc;̣n thoại qua ứng dụng&nbsp;<a href=\"https://www.youtube.com/embed/VnsHPHiGvtU\" target=\"_blank\">LG TV Plus</a>.</li>\r\n	<li>H&ocirc;̃ trợ&nbsp;<a href=\"https://www.youtube.com/embed/ggHPIfk_URs\" target=\"_blank\">chi&ecirc;́u màn hình đi&ecirc;̣n thoại l&ecirc;n tivi</a>&nbsp;với&nbsp;t&iacute;nh năng&nbsp;Screen Mirroring v&agrave; AirPlay 2.</li>\r\n</ul>', NULL, NULL),
(5, 1, 'Smart Tivi QLED Samsung 4K 65 inch QA65Q65R', '1592969480_8755074_4eeefbfecf9489c1c988789ac23f4e69.jpg', 24900000, 10, '<ul>\r\n	<li>Thiết kế sang trọng, tinh tế c&ugrave;ng độ ph&acirc;n giải 4K sắc n&eacute;t gấp 4 lần Full HD.</li>\r\n	<li>M&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.youtube.com/embed/nwzNTrsfRjg\" target=\"_blank\">chấm lượng tử</a>&nbsp;QLED rực rỡ, m&agrave;u sắc nổi bật, đa dạng hơn.</li>\r\n	<li>T&aacute;i tạo v&ugrave;ng tối s&acirc;u hơn, v&ugrave;ng s&aacute;ng tươi hơn qua c&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/200413/samsung-qa82q65r-25.jpg\" target=\"_blank\">Direct Full Array</a>.</li>\r\n	<li>C&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/200413/samsung-qa82q65r-23.jpg\" target=\"_blank\">Quantum&nbsp;</a><a href=\"https://cdn.tgdd.vn/Products/Images/1942/168024/tivi-lg-65e8pta-20.jpg\" target=\"_blank\">HDR</a><a href=\"https://cdn.tgdd.vn/Products/Images/1942/200413/samsung-qa82q65r-23.jpg\" target=\"_blank\">&nbsp;4x</a>&nbsp;n&acirc;ng cao độ s&aacute;ng, chi tiết, sắc m&agrave;u hiệu quả.</li>\r\n	<li>N&acirc;ng cấp chất lượng h&igrave;nh ảnh l&ecirc;n gần chuẩn 4K với c&ocirc;ng nghệ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/1942/200413/samsung-qa82q65r-24.jpg\" target=\"_blank\">Quantum 4K Processor</a>.</li>\r\n	<li>&Acirc;m thanh v&ograve;m b&ugrave;ng nổ, mạnh mẽ chuẩn điện ảnh với c&ocirc;ng nghệ Dolby Digital Plus.</li>\r\n	<li>Hệ điều h&agrave;nh&nbsp;<a href=\"https://www.youtube.com/embed/cAwRpgxPjeQ\" target=\"_blank\">Tizen OS</a>&nbsp;hiện đại c&ugrave;ng&nbsp;<a href=\"https://www.youtube.com/embed/n_BgsmEmrbo\" target=\"_blank\">One Remote</a>&nbsp;hỗ trợ điều khiển, thao t&aacute;c truy cập nhanh ch&oacute;ng.</li>\r\n	<li>Nhanh ch&oacute;ng điều khiển tivi c&ugrave;ng nhiều chức năng tiện &iacute;ch kh&aacute;c qua điện thoại với ứng dụng&nbsp;<a href=\"https://www.youtube.com/embed/Y6cZzFHsFdc\" target=\"_blank\">SmartThings</a>.</li>\r\n	<li>Tr&igrave;nh chiếu m&agrave;n h&igrave;nh điện thoại l&ecirc;n tivi qua t&iacute;nh năng&nbsp;<a href=\"https://www.youtube.com/embed/ggHPIfk_URs\" target=\"_blank\">Screen Mirroring</a>, AirPlay 2.</li>\r\n</ul>', NULL, NULL),
(6, 2, 'Loa Karaoke LG Xboom RN5', '1592969580_4148317_351141d33784871a275b1a3ab2bd4c3c.jpg', 7590000, 30, '<ul>\r\n	<li>&Acirc;m thanh trầm, r&otilde; n&eacute;t với kh&ocirc;ng gian tr&ecirc;n 50 m&eacute;t vu&ocirc;ng nhờ c&ocirc;ng suất 300 W v&agrave; c&ocirc;ng nghệ Super Bass Bost.</li>\r\n	<li>Dễ d&agrave;ng chuyển đổi kết nối giữa 2 thiết bị với t&iacute;nh năng kết nối đa điểm.</li>\r\n	<li>Tạo hiệu ứng nhấp nh&aacute;y tr&ecirc;n đ&egrave;n flash của điện thoại với t&iacute;nh năng Party Strobe.</li>\r\n	<li>Kết nối 2 loa kh&ocirc;ng d&acirc;y, điều khiển đ&egrave;n tr&ecirc;n loa tiện lợi với chế độ Wireless Party Link , Dance Lighting.</li>\r\n	<li>Phối c&aacute;c bản nhạc theo phong c&aacute;ch ri&ecirc;ng với b&agrave;n hiệu chỉnh DJ - DJ Pad.</li>\r\n	<li>Điều khiển bằng điện thoại dễ d&agrave;ng, tiện lợi qua ứng dụng XBoom.</li>\r\n</ul>', NULL, NULL),
(7, 2, 'Loa kéo Karaoke Dalton TS-15G600X 600W', '1592969627_8089737_61653a40fea260527d259eab3e739649.jpg', 8250000, 10, '<p>Đặc điểm nổi bật</p>\r\n\r\n<ul>\r\n	<li>Thiết kế vững chắc, sang trọng.</li>\r\n	<li>Loa di chuyển linh hoạt c&ugrave;ng với 4 b&aacute;nh xe v&agrave; tay k&eacute;o chắc chắn.</li>\r\n	<li>&Acirc;m thanh vang dội, mạnh mẽ với loa 2 đường 1 tiếng bao gồm 1 loa bass 3,8 tấc (đường k&iacute;nh 38 cm) v&agrave; 1 loa treble tổng c&ocirc;ng suất 600 W.</li>\r\n	<li>Dễ d&agrave;ng h&aacute;t karaoke mọi l&uacute;c mọi nơi với 2 micro tặng k&egrave;m v&agrave; ứng dụng Dkara.</li>\r\n	<li>Điều khiển loa k&eacute;o Dalton nhanh ch&oacute;ng tiện lợi với remote điều khiển từ xa.</li>\r\n	<li>Loa hỗ trợ FM, Bluetooth cổng kết nối USB, thẻ SD, Jack b&ocirc;ng sen,...</li>\r\n</ul>', NULL, NULL),
(8, 2, 'Loa kéo Karaoke Dalton TS-18G850X 850W', '1592969699_4222530_102d849660d60cebd3afcee300df2392.jpg', 11390000, 8, '<ul>\r\n	<li>Thiết kế cứng c&aacute;p, vững chắc</li>\r\n	<li>Loa di chuyển linh hoạt.</li>\r\n	<li>&Acirc;m thanh vang dội, mạnh mẽ với loa 3 đường tiếng c&ocirc;ng suất 850 W.</li>\r\n	<li>Karaoke với 2 micro tặng k&egrave;m theo loa Dalton</li>\r\n	<li>Điều khiển loa k&eacute;o Dalton k&eacute;o tiện lợi với remote điều khiển từ xa\r\n	<ul>\r\n		<li>Loa hỗ trợ kết nối đa dạng</li>\r\n	</ul>\r\n	</li>\r\n</ul>', NULL, NULL),
(9, 2, 'Loa kéo Karaoke Mobell K1501 800W', '1592969788_5561225_51711a8d1002c92839d13b00de3bee3d.jpg', 6890000, 12, '<p>Đặc điểm nổi bật</p>\r\n\r\n<ul>\r\n	<li>Thiết kế chắc chắn, hiện đại.</li>\r\n	<li>Loa 3 đường tiếng với 1 loa Bass 3,8 tấc (đường k&iacute;nh 38 cm), 1 loa Treble v&agrave; 1 loa Mid với tổng c&ocirc;ng suất 800 W cho &acirc;m thanh mạnh mẽ, sống động.</li>\r\n	<li>Hỗ trợ nhiều kết nối th&ocirc;ng dụng hiện nay như Bluetooth, USB, thẻ nhớ, Jack b&ocirc;ng sen,...</li>\r\n	<li>Tặng k&egrave;m remote điều khiển, 2 Micro kh&ocirc;ng d&acirc;y tiện dụng.</li>\r\n</ul>', NULL, NULL),
(10, 3, 'Tủ lạnh Panasonic Inverter 188 lít NR-BA229PKVN', '1592969866_6423555_5e83883ec4a3f480ca7ca1116e6210f1.jpg', 6590000, 30, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Kh&aacute;ng khuẩn, loại bỏ m&ugrave;i h&ocirc;i mạnh mẽ với c&ocirc;ng nghệ Ag Clean.</li>\r\n	<li>Tiết kiệm điện tối ưu với cảm biến Econavi v&agrave; c&ocirc;ng nghệ Inverter.</li>\r\n	<li>Thổi hơi lạnh nhanh v&agrave; đều khắp tủ nhờ c&ocirc;ng nghệ&nbsp;Panorama.</li>\r\n	<li>Chứa đồ nhiều tr&ecirc;n khay kệ k&iacute;nh chịu lực tốt.</li>\r\n</ul>', NULL, NULL),
(11, 3, 'Tủ lạnh Beko Inverter 188 lít RDNT200I50VS', '1592969947_8347123_64d8c38f2a2dc53c28560e4e9179221b.jpg', 5090000, 10, '<ul>\r\n	<li>C&ocirc;ng nghệ l&agrave;m lạnh NeoFrost - 2 d&agrave;n lạnh độc lập&nbsp;gi&uacute;p tăng tốc độ l&agrave;m lạnh l&ecirc;n gấp 2 lần, tr&aacute;nh bị lẫn m&ugrave;i giữa ngăn đ&aacute; v&agrave; ngăn lạnh.</li>\r\n	<li>C&ocirc;ng nghệ Active Fresh Blue Light giữ vitamin - sự chăm s&oacute;c tuyệt vời cho rau quả.</li>\r\n	<li>Ngăn di chuyển linh động trữ thực phẩm tiện lợi.</li>\r\n	<li>Vận h&agrave;nh &ecirc;m &aacute;i hơn với c&ocirc;ng nghệ Inverter tiết kiệm 40% điện.</li>\r\n	<li>Thương hiệu Ch&acirc;u &Acirc;u -&nbsp;Sản xuất tại: Th&aacute;i Lan.</li>\r\n	<li>Thiết kế nhỏ gọn, ngăn trữ thực phẩm rộng r&atilde;i tho&aacute;ng m&aacute;t.</li>\r\n</ul>', NULL, NULL),
(12, 3, 'Tủ lạnh Samsung Inverter 208 lít RT19M300BG', '1592970083_2224108_acada1dded88b78c147bff45b3b30f7e.jpg', 6090000, 10, '<ul>\r\n	<li>Luồng kh&iacute; lạnh đa chiều cho hơi m&aacute;t lan tỏa đều đến mọi ng&oacute;c ng&aacute;ch trong tủ.</li>\r\n	<li>Kh&aacute;ng khuẩn v&agrave; khử sạch m&ugrave;i h&ocirc;i với bộ lọc Cacbon hoạt t&iacute;nh.</li>\r\n	<li>C&ocirc;ng nghệ Inverter tiết kiệm điện tối ưu, vận h&agrave;nh &ecirc;m &aacute;i v&agrave; bền bỉ.</li>\r\n	<li>Ngăn rau củ giữ ẩm đảm bảo thực phẩm lu&ocirc;n được bảo quản tươi ngon.</li>\r\n</ul>', NULL, NULL),
(13, 3, 'Tủ lạnh Beko 90 lít RS9050P', '1592970167_3663898_bf7930c0bac4c1dd1b91993ab2458f6f.jpg', 2790000, 12, '<ul>\r\n	<li>Tủ lạnh 1 cửa &nbsp;vận h&agrave;nh &ecirc;m &aacute;i, tiết kiệm điện v&agrave; bền bỉ.</li>\r\n	<li>Khay k&iacute;nh chịu lực, an to&agrave;n, thẩm mỹ.</li>\r\n	<li>L&agrave;m lạnh trực tiếp, c&oacute; đ&oacute;ng tuyết.</li>\r\n</ul>', NULL, NULL),
(14, 4, 'Máy giặt Panasonic 9 kg NA-F90A4GRV', '1592970348_1089123_de403f5e1aa1b4ae4825db7774a9e800.jpg', 6890000, 12, '<ul>\r\n	<li>Hệ thống Active Foam - thẩm thấu cực nhanh tr&ecirc;n quần &aacute;o, gi&uacute;p đ&aacute;nh bật ho&agrave;n to&agrave;n c&aacute;c vết bẩn cứng đầu.</li>\r\n	<li>Nh&agrave;o trộn, giặt sạch mạnh mẽ với luồng nước Dancing.</li>\r\n	<li>Chế độ sấy gi&oacute; 90 ph&uacute;t - tiết kiệm thời gian phơi quần &aacute;o.</li>\r\n	<li>Sử dụng tốt ngay cả những khu vực c&oacute; &aacute;p lực nước yếu.</li>\r\n	<li>Lồng giặt Sazanami bảo vệ quần &aacute;o khỏi hư tổn khi ma s&aacute;t trong qu&aacute; tr&igrave;nh giặt.</li>\r\n	<li>T&iacute;nh năng vệ sinh lồng giặt - gi&uacute;p loại bỏ c&aacute;c cặn b&atilde; t&iacute;ch tụ trong lồng giặt.</li>\r\n	<li>Bảng điều kiển ph&iacute;a sau hiện đại, tiện lợi lấy quần &aacute;o ra v&agrave;o.</li>\r\n</ul>', NULL, NULL),
(15, 4, 'Máy giặt Aqua Inverter 10 Kg AQW-DR100ET', '1592970426_7937440_6408bda38552589a3964a739d83314b1.jpg', 7790000, 12, '<ul>\r\n	<li>Động cơ truyền động trực tiếp bền bỉ, &ecirc;m &aacute;i.</li>\r\n	<li>Tiết kiệm điện với c&ocirc;ng nghệ Inverter.</li>\r\n	<li>Tạo d&ograve;ng nước đa chiều, tăng hiệu quả giặt sạch nhờ m&acirc;m giặt k&eacute;p Twin Pulsator.</li>\r\n	<li>Cho quần &aacute;o được bền đẹp như mới với lồng giặt&nbsp;Pillow bằng th&eacute;p chống gỉ.</li>\r\n	<li>Kh&aacute;ng khuẩn khử m&ugrave;i quần &aacute;o với c&ocirc;ng nghệ Nano Ag+.</li>\r\n	<li>Vệ sinh lồng giặt&nbsp;tự động&nbsp;gi&uacute;p tiết kiệm chi ph&iacute;, tăng độ bền cho m&aacute;y.</li>\r\n</ul>', NULL, NULL),
(16, 4, 'Máy giặt Samsung Inverter 9 kg WW90K52E', '1592970576_5399212_3f7755fa19e996b3a444db6b219a3968.jpg', 12990000, 6, '<ul>\r\n	<li>Giặt bong b&oacute;ng Eco Bubble, tạo bọt mịn giặt sạch hiệu quả.</li>\r\n	<li>Cửa phụ Add Door th&ecirc;m đồ khi giặt, kh&ocirc;ng lo s&oacute;t quần &aacute;o.</li>\r\n	<li>Động cơ Digital Inverter tiết kiệm điện, vận h&agrave;nh &ecirc;m.</li>\r\n	<li>Quần &aacute;o được bảo vệ bởi lồng giặt kim cương.</li>\r\n	<li>Giặt nước n&oacute;ng 90 độ C diệt 99% vi khuẩn g&acirc;y dị ứng.</li>\r\n	<li>Quần &aacute;o mau kh&ocirc; hơn với tốc độ quay vắt l&ecirc;n đến 1200 v&ograve;ng/ph&uacute;t.</li>\r\n</ul>', NULL, NULL),
(17, 4, 'Máy giặt Panasonic Inverter 10.5 Kg NA-FD10AR1BV', '1592970639_5285156_0eb42173d3bf496f95518355495a4820.jpg', 10090000, 4, '<ul>\r\n	<li>Giặt sạch c&aacute;c vết bẩn cứng đầu với t&iacute;nh năng StainMaster.</li>\r\n	<li>N&acirc;ng cao hiệu quả giặt sạch nhờ xo&aacute;y nước Water bazooka với TD inverter.</li>\r\n	<li>H&ograve;a tan bột giặt, thẩm thấu nhanh với hệ thống Active Foam.</li>\r\n	<li>Tiện lợi giặt nhiều quần &aacute;o, chăn mền với lồng giặt lớn.</li>\r\n	<li>N&acirc;ng cao hiệu quả giặt sạch với th&aacute;c nước đ&ocirc;i Dual Power Cascade.</li>\r\n	<li>Hạn chế xoắn rối quần &aacute;o nhờ Tangle Care.</li>\r\n</ul>', NULL, NULL),
(18, 5, 'Điều hòa Midea Inverter 9500 BTU MSAFA', '1592970719_3448921_8b8db3d406794d82029f1aa8bf0d91f3.jpg', 7190000, 30, '<ul>\r\n	<li>Tiết kiệm điện năng, vận h&agrave;nh &ecirc;m &aacute;i với c&ocirc;ng nghệ Inverter.</li>\r\n	<li>Cảm gi&aacute;c m&aacute;t lạnh nhanh ch&oacute;ng với&nbsp;chế độ l&agrave;m lạnh Turbo.</li>\r\n	<li>Căn ph&ograve;ng tho&aacute;ng m&aacute;t, kh&ocirc; r&aacute;o khi độ ẩm tăng cao với chức năng h&uacute;t ẩm.</li>\r\n	<li>Ống tho&aacute;t nước 2 chiều tiện lợi trong qu&aacute; tr&igrave;nh lắp đặt.</li>\r\n	<li>Tiện lợi trong qu&aacute; tr&igrave;nh sử dụng với chức năng hẹn giờ.</li>\r\n	<li>Sử dụng như một chiếc quạt thổi gi&oacute; với chế độ&nbsp;Fan only.</li>\r\n	<li><a href=\"https://www.youtube.com/embed/SmPNFpBggMM\" target=\"_blank\">D&agrave;n tản nhiệt mạ v&agrave;ng</a>&nbsp;chống ăn m&ograve;n bền bỉ.</li>\r\n</ul>', NULL, NULL),
(19, 5, 'Điều hòa LG Inverter 9200 BTU V10ENH', '1592970808_4845069_027b5080e85cb94e64ff596de893a381.jpg', 9090000, 12, '<ul>\r\n	<li><a href=\"https://www.youtube.com/embed/ecw_hL24RAQ\" target=\"_blank\">C&ocirc;ng nghệ Dual Inverter</a>&nbsp;n&acirc;ng cao hiệu quả tiết kiệm điện l&ecirc;n đến 70%.</li>\r\n	<li>L&agrave;m lạnh nhanh ch&oacute;ng chỉ trong 3 ph&uacute;t đồng hồ với&nbsp;c&ocirc;ng nghệ&nbsp;<a href=\"https://www.youtube.com/embed/BnY6he7UAHI\" target=\"_blank\">Jet Cool</a>.</li>\r\n	<li>Chế độ thổi gi&oacute; dễ chịu&nbsp;<a href=\"https://www.youtube.com/embed/o809kE9kLKU\" target=\"_blank\">Comfort Air</a>&nbsp;mang lại hơi lạnh &ecirc;m dịu, kh&ocirc;ng lo bị cảm lạnh.</li>\r\n	<li>T&iacute;nh năng tự động l&agrave;m sạch gi&uacute;p m&aacute;y lạnh lu&ocirc;n kh&ocirc; tho&aacute;ng, sạch sẽ.</li>\r\n	<li>Chế độ ngủ đ&ecirc;m - Tự điều ch&igrave;nh nhiệt độ ph&ugrave; hợp với th&acirc;n nhiệt v&agrave; m&ocirc;i trường.</li>\r\n	<li>T&iacute;nh năng tự khởi động lại khi c&oacute; điện - Ghi nhớ c&aacute;c chế độ hiện c&oacute;, kh&ocirc;ng cần c&agrave;i đặt lại.</li>\r\n	<li>Gas R32&nbsp;- an to&agrave;n, th&acirc;n thiện với m&ocirc;i trường</li>\r\n</ul>', NULL, NULL),
(20, 5, 'Điều hòa Panasonic Inverter 9040 BTU', '1592970873_7976624_343bf606136723702e055e8f76ecab72.jpg', 10990000, 4, '<ul>\r\n	<li>C&ocirc;ng nghệ lọc kh&ocirc;ng kh&iacute;&nbsp;<a href=\"https://www.youtube.com/embed/YM56osOTbqo\" target=\"_blank\">Nanoe-G</a>&nbsp;cho bầu kh&ocirc;ng kh&iacute; sạch bụi bẩn, bụi mịn PM2.5.</li>\r\n	<li>Sử dụng như một chiếc m&aacute;y lọc kh&ocirc;ng kh&iacute; với hệ thống lọc kh&iacute; hoạt động độc lập.</li>\r\n	<li>C&ocirc;ng nghệ&nbsp;<a href=\"https://www.youtube.com/embed/_gC8G2l9gjA\" target=\"_blank\">Inverter</a>&nbsp;v&agrave; Eco t&iacute;ch hợp AI gi&uacute;p tiết kiệm điện tối đa.</li>\r\n	<li>L&agrave;m lạnh nhanh tức th&igrave; với chế độ Powerful</li>\r\n	<li>Kh&ocirc;ng kh&iacute; tho&aacute;ng đ&atilde;ng, kh&ocirc; r&aacute;o khi thời tiết ẩm ướt với chế độ h&uacute;t ẩm.</li>\r\n	<li>Tiện lợi hơn với chế độ hẹn giờ bật/tắt m&aacute;y.</li>\r\n</ul>', NULL, NULL),
(21, 5, 'Điều hòa Toshiba Inverter 9000 BTU RAS', '1592970808_4845069_027b5080e85cb94e64ff596de893a381.jpg', 9190000, 23, '<ul>\r\n	<li>Tiết kiệm điện năng, l&agrave;m lạnh hiệu quả với c&ocirc;ng nghệ&nbsp;<a href=\"https://www.youtube.com/embed/b_j_HxA_AGs\" target=\"_blank\">Hybrid Inverter.</a></li>\r\n	<li>Tối ưu tiết giảm điện năng ti&ecirc;u thụ với t&iacute;nh năng Eco.</li>\r\n	<li>Kh&ocirc;ng kh&iacute; trong l&agrave;nh v&agrave; giảm chi ph&iacute; bảo tr&igrave; với c&ocirc;ng nghệ chống b&aacute;m bẩn&nbsp;<a href=\"https://www.youtube.com/embed/OfzEEKa6lBk\" target=\"_blank\">Magic Coil</a>.</li>\r\n	<li>Tạo bầu kh&ocirc;ng kh&iacute; trong l&agrave;nh với bộ lọc&nbsp;<a href=\"https://www.youtube.com/embed/y0mitwbur2Q\" target=\"_blank\">Toshiba IAQ</a>.</li>\r\n	<li>L&agrave;m lạnh nhanh ch&oacute;ng với chế độ&nbsp;<a href=\"https://cdn.tgdd.vn/Products/Images/2002/92135/Slider/vi-vn-lam-lanh-nhanh.jpg\" target=\"_blank\">Hi Power</a>.</li>\r\n	<li>Hơi lạnh lan toả xa v&agrave; đều với&nbsp;<a href=\"https://www.youtube.com/embed/b4rhAv0fxCU\" target=\"_blank\">c&aacute;nh quạt xi&ecirc;n</a>&nbsp;v&agrave;&nbsp;<a href=\"https://www.youtube.com/embed/4ewr-M3Ruo8\" target=\"_blank\">cửa đảo gi&oacute; mở rộng 72 độ</a>.</li>\r\n	<li>L&agrave;m lạnh nhanh hơn với&nbsp;<a href=\"https://www.youtube.com/embed/51AgibiByzE\" target=\"_blank\">mật độ ống đồng tăng 25%</a>.</li>\r\n	<li>Tiện lợi với chế độ tự khởi động lại khi c&oacute; điện.</li>\r\n</ul>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Administrators', 'tuyennguyendinh1608@gmail.com', NULL, '$2y$10$pI1eo5Arp0bpmQ2OP.F4.OgyyiaoH9.rw7qZOTlVKBVgKqsbBKG/i', 'eojOy2eBo6vfvEwS18ahAqErOZgmzCeiQ1LyMKoLDirnPaNBh4PHOUKEdWas', '2020-06-29 23:01:56', '2020-06-29 23:01:56', 'admin'),
(2, 'Tuyên', 'hoangcmnr000@gmail.com', NULL, '$2y$10$Ac5uEJ2/FeQ2Wx7ICNc6HusDQIJIRwACK2F5B4bsWuNnwBwHuBg1.', 'k3tU8LZBxZfeHn3VygguvonH25tAsPdADIWCRQRAo4RuV7sMOsx8NXTkvyOq', '2020-07-14 06:30:06', '2020-07-14 06:30:06', 'guest'),
(4, 'ABC', 'tongcmnr000@gmail.com', NULL, '$2y$10$kqbtQ4KazY0xfiOD.24ssOZVmcUk7dqdNvTxAVp3SeuntjQp4N0Zm', '6E7tDBHMMj8mGjtfOI9H05H4NoyAmVt6RbEBqnceMNXovnOzkUoJSWTnzxJz', '2020-07-16 03:42:09', '2020-10-24 20:33:57', 'guest'),
(10, 'user1', 'user123@gmail.com', NULL, '$2y$10$kqbtQ4KazY0xfiOD.24ssOZVmcUk7dqdNvTxAVp3SeuntjQp4N0Zm', 'JYTTN5i6ucYj1h2xws4moQaQmQ7vqUV7KR20q0OPsaB69ZnhwAq0lxnZ70fj', '2020-09-29 03:38:32', '2020-09-29 03:38:32', 'guest'),
(11, 'Cheems', 'nguyendinhtuyen16082000@gmail.com', NULL, '$2y$10$FVQ//wnt79E6BJhhZorxD.r3fmJplygr5GGv58h1HVf9eNnGSvsdK', NULL, '2020-10-24 20:40:47', '2020-10-24 20:40:47', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`),
  ADD KEY `bills_user_id_foreign` (`user_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
