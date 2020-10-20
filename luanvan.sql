-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2019 lúc 12:28 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `luanvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$YFWJGeJaLq/.23K3kq1gBeaVuYn7/oCfp14NEz5euZLoyqCexRrEu', 'Letjydu3suuQ9thyrf3ijx0TOOMK2KxIVUu5nw7h9MeBO3cAzGQYwfSEhEHs', '2018-12-01 00:45:00', '2018-12-01 00:45:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hangs`
--

CREATE TABLE `chi_tiet_don_hangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `idDonHang` int(10) UNSIGNED NOT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `thanhtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hangs`
--

INSERT INTO `chi_tiet_don_hangs` (`id`, `soLuong`, `donGia`, `idDonHang`, `idSP`, `thanhtien`, `created_at`, `updated_at`) VALUES
(1, 3, 250000, 1, 7, '750000', '2018-04-24 20:33:47', '2018-04-24 20:33:47'),
(3, 1, 250000, 3, 7, '250000', '2018-04-26 22:09:56', '2018-04-26 22:09:56'),
(4, 1, 340000, 3, 16, '340000', '2018-04-26 22:09:57', '2018-04-26 22:09:57'),
(5, 1, 330000, 3, 39, '330000', '2018-04-26 22:09:57', '2018-04-26 22:09:57'),
(6, 1, 200000, 4, 12, '200000', '2018-04-27 01:46:21', '2018-04-27 01:46:21'),
(7, 1, 260000, 4, 8, '260000', '2018-04-27 01:46:21', '2018-04-27 01:46:21'),
(8, 1, 330000, 5, 39, '330000', '2018-04-27 01:53:04', '2018-04-27 01:53:04'),
(9, 2, 335000, 5, 40, '670000', '2018-04-27 01:53:04', '2018-04-27 01:53:04'),
(10, 1, 260000, 5, 8, '260000', '2018-04-27 01:53:04', '2018-04-27 01:53:04'),
(11, 2, 250000, 6, 7, '500000', '2018-05-05 03:44:00', '2018-05-05 03:44:00'),
(12, 1, 250000, 8, 7, '250000', '2018-11-19 04:21:28', '2018-11-19 04:21:28'),
(13, 2, 400000, 9, 25, '800000', '2018-11-19 06:19:53', '2018-11-19 06:19:53'),
(14, 1, 260000, 10, 9, '260000', '2018-11-19 06:35:11', '2018-11-19 06:35:11'),
(15, 2, 200000, 10, 12, '400000', '2018-11-19 06:35:11', '2018-11-19 06:35:11'),
(16, 1, 320000, 11, 48, '320000', '2018-11-19 19:29:06', '2018-11-19 19:29:06'),
(17, 1, 320000, 12, 48, '320000', '2018-11-22 02:23:14', '2018-11-22 02:23:14'),
(18, 1, 330000, 13, 47, '330000', '2018-11-22 02:24:47', '2018-11-22 02:24:47'),
(19, 1, 350000, 14, 45, '350000', '2018-11-22 02:25:36', '2018-11-22 02:25:36'),
(20, 1, 340000, 15, 43, '340000', '2018-11-22 02:26:21', '2018-11-22 02:26:21'),
(21, 1, 235000, 16, 13, '235000', '2018-11-22 02:28:50', '2018-11-22 02:28:50'),
(22, 1, 350000, 17, 45, '350000', '2018-11-22 02:33:18', '2018-11-22 02:33:18'),
(23, 1, 420000, 18, 26, '420000', '2018-11-22 02:34:05', '2018-11-22 02:34:05'),
(24, 1, 320000, 19, 48, '320000', '2018-11-23 23:24:50', '2018-11-23 23:24:50'),
(25, 2, 320000, 20, 48, '640000', '2018-12-01 00:12:42', '2018-12-01 00:12:42'),
(26, 2, 260000, 20, 9, '520000', '2018-12-01 00:12:42', '2018-12-01 00:12:42'),
(27, 2, 200000, 21, 12, '400000', '2018-12-12 20:07:05', '2018-12-12 20:07:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doi_tras`
--

CREATE TABLE `doi_tras` (
  `id` int(10) UNSIGNED NOT NULL,
  `idDonHang` int(10) UNSIGNED NOT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tinhTrang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `tinhTrang`, `tongtien`, `iduser`, `created_at`, `updated_at`) VALUES
(1, 'Hủy bỏ', '750,000.00', 11, '2018-04-24 20:33:47', '2018-04-26 21:05:40'),
(3, 'Hủy bỏ', '920,000.00', 11, '2018-04-26 22:09:56', '2018-12-01 02:27:09'),
(4, 'Hủy bỏ', '460,000.00', 11, '2018-04-27 01:46:21', '2018-12-01 02:27:17'),
(5, 'Đang giao', '1,260,000.00', 15, '2018-04-27 01:53:04', '2018-04-27 01:53:51'),
(6, 'Hủy bỏ', '500,000.00', 11, '2018-05-05 03:44:00', '2018-12-01 02:26:16'),
(7, 'Mới đặt', '320,000.00', 27, '2018-11-14 22:33:30', '2018-11-14 22:33:30'),
(8, 'Mới đặt', '250,000.00', 27, '2018-11-19 04:21:28', '2018-11-19 04:21:28'),
(9, 'Mới đặt', '800,000.00', 27, '2018-11-19 06:19:53', '2018-11-19 06:19:53'),
(10, 'Hoàn thành', '660,000.00', 27, '2018-11-19 06:35:11', '2018-12-01 02:25:47'),
(11, 'Hủy bỏ', '320,000.00', 27, '2018-11-19 19:29:06', '2018-11-19 19:30:10'),
(12, 'Mới đặt', '320,000.00', 26, '2018-11-22 02:23:14', '2018-11-22 02:23:14'),
(13, 'Mới đặt', '330,000.00', 26, '2018-11-22 02:24:47', '2018-11-22 02:24:47'),
(14, 'Mới đặt', '350,000.00', 26, '2018-11-22 02:25:36', '2018-11-22 02:25:36'),
(15, 'Mới đặt', '340,000.00', 26, '2018-11-22 02:26:21', '2018-11-22 02:26:21'),
(16, 'Mới đặt', '235,000.00', 26, '2018-11-22 02:28:49', '2018-11-22 02:28:49'),
(17, 'Mới đặt', '350,000.00', 27, '2018-11-22 02:33:18', '2018-11-22 02:33:18'),
(18, 'Mới đặt', '420,000.00', 27, '2018-11-22 02:34:05', '2018-11-22 02:34:05'),
(19, 'Mới đặt', '320,000.00', 27, '2018-11-23 23:24:50', '2018-11-23 23:24:50'),
(20, 'Mới đặt', '1,160,000.00', 27, '2018-12-01 00:12:42', '2018-12-01 00:12:42'),
(21, 'Hoàn thành', '400,000.00', 29, '2018-12-12 20:07:05', '2018-12-12 20:08:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_thuc_k_ms`
--

CREATE TABLE `hinh_thuc_k_ms` (
  `id` int(10) UNSIGNED NOT NULL,
  `hThuc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idKM` int(10) UNSIGNED NOT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hangs`
--

CREATE TABLE `khach_hangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mais`
--

CREATE TABLE `khuyen_mais` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loais`
--

CREATE TABLE `loais` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loais`
--

INSERT INTO `loais` (`id`, `tenloai`, `gioitinh`, `created_at`, `updated_at`) VALUES
(1, 'Quần short', 'Nam', '2018-04-22 01:25:06', '2018-04-22 01:25:06'),
(2, 'Áo sơ mi', 'Nam', '2018-04-22 01:25:32', '2018-04-22 01:25:32'),
(3, 'Quần dài', 'Nam', '2018-04-22 01:25:59', '2018-04-22 01:25:59'),
(4, 'Áo thun', 'Nam', '2018-04-22 01:26:10', '2018-04-22 01:26:10'),
(5, 'Đầm', 'Nữ', '2018-04-22 01:26:28', '2018-04-22 01:26:28'),
(6, 'Quần Jeans', 'Nữ', '2018-04-22 01:26:43', '2018-04-22 01:26:43'),
(7, 'Áo thun nữ', 'Nữ', '2018-04-22 01:27:00', '2018-04-22 01:27:00'),
(8, 'Áo sơ mi nữ', 'Nữ', '2018-04-22 01:27:10', '2018-04-22 01:27:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2018_04_12_094927_create_loais_table', 1),
(35, '2018_04_12_095310_create_nha_cung_caps_table', 1),
(36, '2018_04_12_095727_create_khuyen_mais_table', 1),
(37, '2018_04_12_100116_create_san_phams_table', 1),
(38, '2018_04_15_075654_create_hinh_thuc_k_ms_table', 1),
(39, '2018_04_15_080509_create_don_hangs_table', 1),
(40, '2018_04_15_081020_create_chi_tiet_don_hangs_table', 1),
(41, '2018_04_15_081928_create_doi_tras_table', 1),
(42, '2018_04_21_180844_create_khach_hangs_table', 1),
(43, '2018_05_05_100539_create_admins_table', 2),
(44, '2018_11_24_065001_create_upload_files_table', 3),
(45, '2018_12_01_071727_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_cung_caps`
--

CREATE TABLE `nha_cung_caps` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenncc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_cung_caps`
--

INSERT INTO `nha_cung_caps` (`id`, `tenncc`, `created_at`, `updated_at`) VALUES
(1, 'DOLCE & GABBANA', '2018-04-22 01:29:16', '2018-04-22 01:29:16'),
(2, 'ARMANI', '2018-04-22 01:29:31', '2018-04-22 01:29:31'),
(3, 'VARSACE', '2018-04-22 01:29:43', '2018-04-22 01:29:43'),
(4, 'GUCCI', '2018-04-22 01:29:54', '2018-04-22 01:29:54'),
(5, 'BURBERRY', '2018-04-22 01:30:12', '2018-04-22 01:30:12'),
(6, 'HERMÈS', '2018-04-22 01:30:29', '2018-04-22 01:30:29'),
(7, 'DIOR', '2018-04-22 01:30:46', '2018-04-22 01:30:46'),
(8, 'CHANEL', '2018-04-22 01:30:57', '2018-04-22 01:30:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idloai` int(10) UNSIGNED NOT NULL,
  `idncc` int(10) UNSIGNED NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `tensp`, `soluong`, `gia`, `anh`, `idloai`, `idncc`, `mota`, `created_at`, `updated_at`, `size`) VALUES
(7, 'Áo sơ mi', 10, 250000, 'image/ao-so-mi/1542623388.png', 2, 2, 'Rất đẹp', '2018-04-23 06:02:56', '2018-11-19 04:21:12', 'M'),
(8, 'Áo sơ mi 2', 25, 260000, 'image/ao-so-mi/1542623412.png', 2, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:31:33', '2018-11-19 03:30:12', 'M'),
(9, 'Áo sơ mi 3', 26, 260000, 'image/ao-so-mi/1542623425.png', 2, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:31:55', '2018-11-19 03:30:25', 'L'),
(10, 'Áo sơ mi 4', 13, 250000, 'image/ao-so-mi/1542623629.png', 2, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:32:52', '2018-11-19 03:33:49', 'S'),
(12, 'Quần short 1', 16, 200000, 'image/quan-short/1542623278.png', 1, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:34:59', '2018-11-19 03:27:58', 'M'),
(13, 'Quần short 2', 18, 235000, 'image/quan-short/1542623301.png', 1, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:35:28', '2018-11-19 03:28:21', 'M'),
(14, 'Quần short 3', 15, 220000, 'image/quan-short/1542623321.png', 1, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:36:04', '2018-11-19 03:28:41', 'S'),
(15, 'Quần short 4', 19, 225000, 'image/quan-short/1542623340.png', 1, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:40:22', '2018-11-19 03:29:00', 'L'),
(16, 'Đầm 2', 11, 340000, 'image/dam/1542635051.png', 5, 4, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:41:12', '2018-11-19 06:44:11', 'S'),
(17, 'Đầm 1', 14, 300000, 'image/dam/1542635027.png', 5, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:41:44', '2018-11-19 06:43:47', 'M'),
(18, 'Đầm 3', 14, 335000, 'image/dam/1542635074.png', 5, 4, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:43:13', '2018-11-19 06:44:34', 'S'),
(19, 'Đầm 5', 13, 325000, 'image/dam/1542635096.png', 5, 3, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:43:51', '2018-11-19 06:44:56', 'L'),
(20, 'Đầm 4', 16, 30000, 'image/dam/1542635114.png', 5, 3, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:44:41', '2018-11-19 06:45:14', 'S'),
(21, 'Áo thun', 13, 130000, 'image/ao-thun/1542634727.png', 4, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:45:44', '2018-11-19 06:38:47', 'M'),
(22, 'Áo thun 1', 12, 130000, 'image/ao-thun/1542634750.png', 4, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:53:28', '2018-11-19 06:39:10', 'S'),
(23, 'Áo thun 2', 20, 125000, 'image/ao-thun/1542634773.png', 4, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:53:55', '2018-11-19 06:39:33', 'S'),
(24, 'Áo thun 3', 31, 130000, 'image/ao-thun/1542634793.png', 4, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:54:28', '2018-11-19 06:39:53', 'L'),
(25, 'Quần dài', 12, 400000, 'image/quan-dai/1542623025.png', 1, 1, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:55:30', '2018-12-01 02:20:42', 'M'),
(26, 'Quần dài 1', 13, 420000, 'image/quan-dai/1542623046.png', 3, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:55:59', '2018-11-19 03:24:06', 'S'),
(27, 'Quần dài 3', 17, 400000, 'image/quan-dai/1542623082.png', 3, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:56:30', '2018-11-19 03:24:42', 'M'),
(28, 'Quần dài 2', 11, 435000, 'image/quan-dai/1542623067.png', 3, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:57:01', '2018-11-19 03:24:27', 'L'),
(29, 'Quần jeans', 17, 330000, 'image/quan-jeans/1542623117.png', 6, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 21:59:35', '2018-11-19 03:25:17', 'S'),
(30, 'Quần jeans 1', 13, 320000, 'image/quan-jeans/1542623146.png', 6, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:00:12', '2018-11-19 03:25:46', 'L'),
(31, 'Quần jeans 2', 17, 300000, 'image/quan-jeans/1524805271.jpg', 6, 3, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:01:11', '2018-04-26 22:01:11', 'M'),
(32, 'Quần jeans 3', 6, 280000, 'image/quan-jeans/1542623164.png', 6, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:02:23', '2018-11-19 03:26:04', 'S'),
(33, 'Quần jeans 4', 14, 320000, 'image/quan-jeans/1542623182.png', 6, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:02:59', '2018-11-19 03:26:22', 'L'),
(34, 'Áo thun nữ 1', 19, 120000, 'image/ao-thun-nu/1542634871.png', 7, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:04:02', '2018-11-19 06:41:11', 'M'),
(35, 'Áo thun nữ 2', 22, 130000, 'image/ao-thun-nu/1542634912.png', 7, 3, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:04:30', '2018-11-19 06:42:14', 'S'),
(36, 'Áo thun nữ 3', 16, 125000, 'image/ao-thun-nu/1542634962.png', 7, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:05:22', '2018-11-19 06:42:42', 'M'),
(37, 'Áo thun nữ 4', 20, 140000, 'image/ao-thun-nu/1542634988.png', 7, 4, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:05:47', '2018-11-19 06:43:08', 'L'),
(38, 'Áo sơ mi nữ 1', 21, 330000, 'image/ao-so-mi-nu/1542634602.png', 8, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:06:43', '2018-11-19 06:36:42', 'S'),
(39, 'Áo sơ mi nữ 2', 15, 330000, 'image/ao-so-mi/1542634626.png', 8, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:07:36', '2018-11-19 07:03:29', 'M'),
(40, 'Áo sơ mi nữ 3', 27, 335000, 'image/ao-so-mi/1542634648.png', 8, 2, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:08:12', '2018-11-19 07:03:44', 'L'),
(41, 'Áo sơ mi nữ 4', 26, 340000, 'image/ao-so-mi/1542634672.png', 8, 4, 'Chất liệu vải cực đẹp cực mát và thoải mái khi mặc.', '2018-04-26 22:08:43', '2018-11-19 07:03:59', 'S'),
(43, 'Áo sơ mi nam 01', 20, 340000, 'image/ao-so-mi/1542623654.png', 2, 2, 'Chất liệu vải mềm mịn, thoáng mát, đẹp.', '2018-11-19 01:21:41', '2018-11-19 03:34:14', 'M'),
(44, 'Áo sơ mi nữ 5', 20, 320000, 'image/ao-so-mi-nu/1542634693.png', 8, 2, 'Đẹp', '2018-11-19 02:24:08', '2018-11-19 06:38:13', 'S'),
(45, 'Quần short 5', 20, 350000, 'image/quan-short/1542623355.png', 1, 2, 'Đẹp', '2018-11-19 02:25:36', '2018-11-19 03:29:15', 'M'),
(46, 'Quần dài 5', 30, 400000, 'image/quan-dai/1542623099.png', 3, 2, 'Đẹp', '2018-11-19 02:27:01', '2018-11-19 03:24:59', 'L'),
(47, 'Áo thun nữ 5', 20, 330000, 'image/ao-thun-nu/1542634845.png', 7, 3, 'Đẹp', '2018-11-19 02:28:04', '2018-11-19 06:40:45', 'M'),
(48, 'Áo thun nam 5', 20, 320000, 'image/ao-thun/1542634817.png', 4, 2, 'Đẹp', '2018-11-19 02:29:11', '2018-11-19 06:40:17', 'M');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `sodt`, `diachi`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Le Trung Tin', '', '0907284612', '5a/1', '$2y$10$cr5kKjlzEts0hrMBJ5oSgOtgbp7Cpj6U5dpU.Jbhk.D2YmIdW.fZW', 'VFd0SBsQLKQEZWJEHkQAgqVUBCyUV7bjg6jDCy8CfCsYVxUnzK4Wl6MN55q0', '2018-04-24 20:33:13', '2018-12-01 02:23:53'),
(14, 'Quốc Bảo', 'bao@bao.com', '1234567890', 'Trà Vinh', '$2y$10$72R/LSu0ry2fqBaCBEurhOwlLOXncdY77nzhSXCaXV93Pdf98ssgu', NULL, '2018-04-27 01:45:17', '2018-04-27 01:45:17'),
(15, 'Trung Tín', 'tin@gmail.com', '1234567890', 'Cần Thơ', '$2y$10$NavTXSv6S9e0/1miIOtrveV5X8vlCh7aJPnx28Ja21c7GIr7vqFTG', 'Sbr3bnaJQ7MuOPgGXRhuOCVIbk8wgwRH9w7LbHnxZOJYnsEUz1RFui6aFJyu', '2018-04-27 01:49:32', '2018-04-27 01:49:32'),
(16, 'Nguyễn Phú Quốc', 'admin@gmail.com', '0907284612', '123123', '$2y$10$7mO.TVOI2OHa5Gnt6vKcV.PXZkkg2z7nheTQZ6m6UDBKfDj5x/zbW', 'l0Wmwk5gDVVxOecyouwc70VAcLCXRUnRsmfdL3bzCbtuEI3tNaMjqJQxBuAL', '2018-06-27 19:16:45', '2018-06-27 19:16:45'),
(26, 'Phan Hải Đăng', 'dang@gmail.com', '0907284612', '123/123', '$2y$10$pgFc9yHR79OQkq.GqVhaAeP52PxDJOc6y59GT41oh5ZsXLCj7aA2S', NULL, '2018-11-14 00:59:41', '2018-11-22 02:23:04'),
(27, 'Võ Minh Sang', 'sang@gmail.com', '0907284612', '6a/1, Quận Ninh Kiều TP Cần Thơ', '$2y$10$ZhkHmFTchXOJD3/NOXiXSO.iOxX1jcYmQhtKo5ZpxbF8uXRU.FkGW', 'vmtNe79FY825SiqNdd1fiAz92KaZkUK20l0qCwebKurTvSaNn6IS9nzWYPvo', '2018-11-14 01:01:17', '2018-11-14 21:51:00'),
(28, 'Trương Hiển', 'hien@gmail.com', '0907284612', '6a/1, Quận Ninh Kiều TP Cần Thơ', '$2y$10$ndP4aKaXGCznAX87EXf1POgsUJK5J4wMEhCEMS/J3e2g8Owux0ZQa', NULL, '2018-11-19 06:46:17', '2018-11-19 06:57:26'),
(29, 'Nguyễn Phú Quốc', 'quoc123@gmail.com', '0907284612', '6a/1, Ninh Kiều TP Cần Thơ', '$2y$10$IMdIvDU8JlmifzExxFlZRebECWtYTQEd1exqvN3ri2BAvk9y0RQlS', NULL, '2018-12-12 20:06:37', '2018-12-12 20:06:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_don_hangs_iddonhang_foreign` (`idDonHang`),
  ADD KEY `chi_tiet_don_hangs_idsp_foreign` (`idSP`);

--
-- Chỉ mục cho bảng `doi_tras`
--
ALTER TABLE `doi_tras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doi_tras_iddonhang_foreign` (`idDonHang`),
  ADD KEY `doi_tras_idsp_foreign` (`idSP`);

--
-- Chỉ mục cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `don_hangs_iduser_foreign` (`iduser`);

--
-- Chỉ mục cho bảng `hinh_thuc_k_ms`
--
ALTER TABLE `hinh_thuc_k_ms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinh_thuc_k_ms_idkm_foreign` (`idKM`),
  ADD KEY `hinh_thuc_k_ms_idsp_foreign` (`idSP`);

--
-- Chỉ mục cho bảng `khach_hangs`
--
ALTER TABLE `khach_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loais`
--
ALTER TABLE `loais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_cung_caps`
--
ALTER TABLE `nha_cung_caps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `san_phams_idloai_foreign` (`idloai`),
  ADD KEY `san_phams_idncc_foreign` (`idncc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `doi_tras`
--
ALTER TABLE `doi_tras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hinh_thuc_k_ms`
--
ALTER TABLE `hinh_thuc_k_ms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hangs`
--
ALTER TABLE `khach_hangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loais`
--
ALTER TABLE `loais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `nha_cung_caps`
--
ALTER TABLE `nha_cung_caps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD CONSTRAINT `chi_tiet_don_hangs_iddonhang_foreign` FOREIGN KEY (`idDonHang`) REFERENCES `don_hangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hangs_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `san_phams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `doi_tras`
--
ALTER TABLE `doi_tras`
  ADD CONSTRAINT `doi_tras_iddonhang_foreign` FOREIGN KEY (`idDonHang`) REFERENCES `don_hangs` (`id`),
  ADD CONSTRAINT `doi_tras_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `san_phams` (`id`);

--
-- Các ràng buộc cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD CONSTRAINT `don_hangs_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinh_thuc_k_ms`
--
ALTER TABLE `hinh_thuc_k_ms`
  ADD CONSTRAINT `hinh_thuc_k_ms_idkm_foreign` FOREIGN KEY (`idKM`) REFERENCES `khuyen_mais` (`id`),
  ADD CONSTRAINT `hinh_thuc_k_ms_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `san_phams` (`id`);

--
-- Các ràng buộc cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD CONSTRAINT `san_phams_idloai_foreign` FOREIGN KEY (`idloai`) REFERENCES `loais` (`id`),
  ADD CONSTRAINT `san_phams_idncc_foreign` FOREIGN KEY (`idncc`) REFERENCES `nha_cung_caps` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
