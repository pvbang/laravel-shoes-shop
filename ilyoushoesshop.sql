-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 01:52 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19966732_ilyoushoesshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id_danh_gia` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_danh_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danh_gia_binh_luan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_giay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danh_gia`
--

INSERT INTO `danh_gia` (`id_danh_gia`, `id_user`, `ten_danh_gia`, `danh_gia`, `danh_gia_binh_luan`, `id_giay`, `created_at`, `updated_at`) VALUES
(1, '1', 'Admin', '4.5', 'cũng ok phết', '1', '2022-05-02 08:04:28', '2022-05-02 08:04:28'),
(2, '1', 'Admin', '4.5', 'Kha ok', '2', '2022-05-02 11:09:19', '2022-05-02 11:09:19'),
(3, '2', 'Phan Văn Bằng', '4.5', 'Giá rẻ lại đẹp, nên mua', '2', '2022-05-02 11:18:06', '2022-05-02 11:18:06'),
(4, '2', 'Phan Văn Bằng', '4.5', 'Giá ok, đẹp', '1', '2022-05-02 11:18:27', '2022-05-02 11:18:27'),
(5, '2', 'Phan Văn Bằng', '3', 'Nhìn ok phết, như đi bộ đội luôn :)))', '3', '2022-05-02 11:19:03', '2022-05-02 11:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(10) UNSIGNED NOT NULL,
  `ten_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tong_tien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_thuc_thanh_toan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoa_don` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `ten_nguoi_nhan`, `sdt`, `dia_chi_nhan`, `ghi_chu`, `tong_tien`, `hinh_thuc_thanh_toan`, `hoa_don`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0123456789', 'huế', NULL, '599,400 VNĐ', 'Sau khi nhận hàng', 'a:1:{i:2;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay4.jpg\";s:8:\"ten_giay\";s:12:\"Nike Joma IC\";s:7:\"don_gia\";s:6:\"666000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"10\";}}', '2022-05-02 08:03:32', '2022-05-02 08:03:32'),
(2, 'Admin', '0123456789', 'Thừa Thiên Huế', NULL, '1,020,000 VNĐ', 'Sau khi nhận hàng', 'a:1:{i:1;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay13.jpg\";s:8:\"ten_giay\";s:6:\"NMD R2\";s:7:\"don_gia\";s:7:\"1200000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"15\";}}', '2022-05-02 08:03:59', '2022-05-02 08:03:59'),
(3, 'Admin', '0123456789', 'huế', NULL, '599,400 VNĐ', 'Sau khi nhận hàng', 'a:1:{i:2;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay4.jpg\";s:8:\"ten_giay\";s:12:\"Nike Joma IC\";s:7:\"don_gia\";s:6:\"666000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"10\";}}', '2022-05-02 11:09:03', '2022-05-02 11:09:03'),
(4, 'Phan Văn Bằng', '0123456788', 'Thừa Thiên Huế', NULL, '2,468,550 VNĐ', 'Sau khi nhận hàng', 'a:3:{i:2;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay4.jpg\";s:8:\"ten_giay\";s:12:\"Nike Joma IC\";s:7:\"don_gia\";s:6:\"666000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"10\";}i:1;a:5:{s:10:\"hinh_anh_1\";s:10:\"giay13.jpg\";s:8:\"ten_giay\";s:6:\"NMD R2\";s:7:\"don_gia\";s:7:\"1200000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"15\";}i:3;a:5:{s:10:\"hinh_anh_1\";s:9:\"giay3.jpg\";s:8:\"ten_giay\";s:19:\"The Nike Premier II\";s:7:\"don_gia\";s:6:\"999000\";s:8:\"so_luong\";s:1:\"1\";s:10:\"khuyen_mai\";s:2:\"15\";}}', '2022-05-02 11:17:11', '2022-05-02 11:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giay`
--

CREATE TABLE `giay` (
  `id_giay` int(10) UNSIGNED NOT NULL,
  `ten_giay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_loai_giay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_thuong_hieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh_anh_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong_mua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giay`
--

INSERT INTO `giay` (`id_giay`, `ten_giay`, `ten_loai_giay`, `ten_thuong_hieu`, `mo_ta`, `don_gia`, `so_luong`, `hinh_anh_1`, `hinh_anh_2`, `hinh_anh_3`, `hinh_anh_4`, `ten_khuyen_mai`, `so_luong_mua`, `so_luot_xem`, `created_at`, `updated_at`) VALUES
(1, 'NMD R2', 'Sandanl', 'Gucci', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1200000', '100', 'giay13.jpg', 'giay13.jpg', 'giay13.jpg', 'giay13.jpg', 'Ngày lễ', '2', 29, '2021-11-25 07:59:26', '2022-05-02 11:17:11'),
(2, 'Nike Joma IC', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay4.jpg', 'giay4.jpg', 'giay4.jpg', 'giay4.jpg', 'Mới ra mắt', '3', 11, '2021-11-29 07:59:26', '2022-05-02 11:17:11'),
(3, 'The Nike Premier II', 'Sneaker', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '999000', '100', 'giay3.jpg', 'giay3.jpg', 'giay3.jpg', 'giay3.jpg', 'Ngày lễ', '1', 13, '2021-12-01 10:21:31', '2022-05-02 11:17:11'),
(4, 'Adidas PUREBOOST 21', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1590000', '100', 'giay20.jpg', 'giay20.jpg', 'giay20.jpg', 'giay20.jpg', 'Mới ra mắt', '0', 2, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(5, 'Adidas STAN SMITH', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1290000', '100', 'giay21.jpg', 'giay21.jpg', 'giay21.jpg', 'giay21.jpg', 'Mới ra mắt', '0', 2, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(6, 'Adidas ALPHAMAGMA', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '799000', '100', 'giay22.jpg', 'giay22.jpg', 'giay22.jpg', 'giay22.jpg', 'Mới ra mắt', '0', 1, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(7, 'Adidas RUNFALCON 2.0', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '599000', '100', 'giay23.jpg', 'giay23.jpg', 'giay23.jpg', 'giay23.jpg', 'Mới ra mắt', '0', 0, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(8, 'Adidas Tiempo Legend 9', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay2.jpg', 'giay2.jpg', 'giay2.jpg', 'giay2.jpg', 'Ngày lễ', '0', 3, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(9, 'Puma One 5.3 TT', 'Thể thao', 'Puma', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '699000', '100', 'giay7.jpg', 'giay7.jpg', 'giay7.jpg', 'giay7.jpg', 'Sale cuối năm', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(11, 'Run Star Hike Sneaker', 'Sneaker', 'Converse', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '966000', '100', 'giay17.jpg', 'giay17.jpg', 'giay17.jpg', 'giay17.jpg', 'Chủ vui nên khuyến mãi', '0', 0, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(12, 'Chuck 70 Sneaker', 'Sneaker', 'Converse', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1280000', '100', 'giay18.jpg', 'giay18.jpg', 'giay18.jpg', 'giay18.jpg', 'Sale cuối năm', '0', 1, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(13, 'Archive Paint Splatter', 'Sneaker', 'Converse', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1880000', '100', 'giay19.jpg', 'giay19.jpg', 'giay19.jpg', 'giay19.jpg', 'Không khuyễn mãi', '0', 0, '2021-11-29 07:59:26', '2021-11-29 07:59:26'),
(14, 'Nike Top Sala14', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay9.jpg', 'giay9.jpg', 'giay9.jpg', 'giay9.jpg', 'Không khuyễn mãi', '0', 0, '2021-11-25 07:59:26', '2021-11-25 07:59:26'),
(15, 'Nike ACE Tango', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '599000', '100', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 'Mới ra mắt', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(16, 'Adidas Mercurial', 'Sandanl', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay15.jpg', 'giay15.jpg', 'giay15.jpg', 'giay15.jpg', 'Ngày lễ', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(17, 'Nike FC', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1100000', '100', 'giay8.jpg', 'giay8.jpg', 'giay8.jpg', 'giay8.jpg', 'Ngày lễ', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(18, 'Adidas X Tango 17.1 FG', 'Sneaker', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay5.jpg', 'giay5.jpg', 'giay5.jpg', 'giay5.jpg', 'Không khuyễn mãi', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(19, 'Superstar KB', 'Thể thao', 'Vans', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1350000', '100', 'giay10.jpg', 'giay10.jpg', 'giay10.jpg', 'giay10.jpg', 'Sale cuối năm', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(20, 'Superstar J', 'Sandanl', 'Vans', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1290000', '100', 'giay11.jpg', 'giay11.jpg', 'giay11.jpg', 'giay11.jpg', 'Ngày lễ', '0', 0, '2021-11-25 07:59:26', '2021-11-25 07:59:26'),
(21, 'Nike Tiempo Legend', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '1990000', '100', 'giay4.jpg', 'giay4.jpg', 'giay4.jpg', 'giay4.jpg', 'Ngày lễ', '0', 0, '2021-11-24 07:59:26', '2021-11-24 07:59:26'),
(22, 'ADIDAS X Speedflow', 'Thể thao', 'Adidas', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay12.jpg', 'giay12.jpg', 'giay12.jpg', 'giay12.jpg', 'Sale cuối năm', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(23, 'Jung 96', 'Thể thao', 'New Balance', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '899000', '100', 'giay14.jpg', 'giay14.jpg', 'giay14.jpg', 'giay14.jpg', 'Sale cuối năm', '0', 0, '2021-12-01 10:21:31', '2021-12-01 10:21:31'),
(24, 'Mercurial Superfly', 'Sneaker', 'Balenciaga', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>', '666000', '100', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 'giay6.jpg', 'Chủ vui nên khuyến mãi', '0', 0, '2021-11-24 07:59:26', '2021-11-24 07:59:26'),
(31, 'Nike Black Pice 99', 'Thể thao', 'Nike', '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!</p>', '550000', '222', 'giay1.jpg', 'giay1.jpg', 'giay1.jpg', 'giay1.jpg', 'Mới ra mắt', '0', 0, '2022-05-03 10:13:28', '2022-05-03 10:13:28');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(10) UNSIGNED NOT NULL,
  `ten_khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tri_khuyen_mai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_khuyen_mai`, `gia_tri_khuyen_mai`) VALUES
(1, 'Không khuyễn mãi', '0'),
(2, 'Ngày lễ', '15'),
(3, 'Mới ra mắt', '10'),
(4, 'Sale cuối năm', '5'),
(5, 'Chủ vui nên khuyến mãi', '3');

-- --------------------------------------------------------

--
-- Table structure for table `loai_giay`
--

CREATE TABLE `loai_giay` (
  `id_loai_giay` int(10) UNSIGNED NOT NULL,
  `ten_loai_giay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_giay`
--

INSERT INTO `loai_giay` (`id_loai_giay`, `ten_loai_giay`, `created_at`, `updated_at`) VALUES
(1, 'Thể thao', NULL, NULL),
(2, 'Sandanl', NULL, NULL),
(3, 'Sneaker', NULL, NULL),
(4, 'Boots', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_02_024954_create_sessions_table', 1),
(6, '2021_11_15_125359_giay_table', 1),
(7, '2021_11_15_125523_loai_giay_table', 1),
(8, '2021_11_15_125541_thuong_hieu_table', 1),
(9, '2021_11_16_082748_khuyen_mai_table', 1),
(10, '2021_11_16_101507_phan_quyen_table', 1),
(11, '2021_11_21_025722_create_don_hang_table', 1),
(12, '2021_12_02_143926_create_danh_gia_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `id_phan_quyen` int(10) UNSIGNED NOT NULL,
  `ten_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phan_quyen`
--

INSERT INTO `phan_quyen` (`id_phan_quyen`, `ten_phan_quyen`) VALUES
(1, 'Quản trị viên'),
(2, 'Người dùng'),
(3, 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0SNERoqovJ2gBTlAou9AOwc45pyaU0Nr3ju6ybK8', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidHBWZnczbUQ2NEM4R2RPNlh1UVBJVmpJQnNVd2trTjFNcVRMejR3bSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651989654),
('0zoT63YHwtQEAGxwcjK74b8jRqPOlAUctBNjxlFG', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYTduWDE4Qzl3MHNrT0lOSGcxRWRZUWpoSXRCNmhqVlFZbVh2UFNnQyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652044478),
('3dOQwVmwLw5rtF5lTehblCMuRtxQAgG38lPFt5s7', NULL, '2001:ee0:4b52:a1d0:cdbe:db96:a03c:ad4c', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMWpLcm1iT0lZeUpIb1VDU0d1WUlZV09Na3h1cFh6RFM0cXhSSDhqYyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2FkbWluL2dpYXkiO31zOjU6ImNoZWNrIjtzOjE6IjEiO3M6ODoiRGFuZ05oYXAiO2k6MTt9', 1653026211),
('7OriWgZCAewzAiLAv5aX7QmG9YbrFTzLChkObWdu', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmJQaFprcEs1OGcxOGpBOHVFVURhUmViOFJiYjhTa3FjbDM3RFdobiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652146184),
('7ZpCOOjThPT9FftQ1irywJKjU3gtqNeTiNPe2mmQ', NULL, '2001:ee0:4b52:a1d0:cd0e:7643:1769:8c66', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibnNROHc3TVhITDhGOFZDT2JlalNTcFViM0lLTXZIMFFuMVBXS3NzYiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJEYW5nTmhhcCI7aToxO3M6NToiY2hlY2siO3M6MToiMSI7fQ==', 1652632684),
('8KoEVp6s8F2BWVzcAn9iVawXHNFlly3Ooa3gft0K', NULL, '2401:d800:6f0:82a6:a5d0:1876:4590:a282', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRDcyQnNkak14anNJYVBtVlZOUlFUSXZSMEpCMFNXOTE1ZTVVUU8wRyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1653096718),
('AREzav0k2K70Gh6cy8lSSs3pKrt6TDbtDcKsEsYh', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaEs3d1Q1RU9JR3VqUGJtY2RudTJVRGJ1NDZrUEtoRENSODQ2TGl5VCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652100332),
('bm649SMbpJZr680ouLaEpQfPUPba8kURseDDqEbW', NULL, '27.2.226.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieUtIZm9FQUxHemxXMjBGaGp6TXMzNEFtazh5eXBjdUI2T0hkaXZMMiI7czo1OiJjaGVjayI7czoxOiIwIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MDoiaHR0cHM6Ly9pbHlvdXNob2Vzc2hvcC4wMDB3ZWJob3N0YXBwLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6ODoiZ2lvX2hhbmciO2E6MDp7fX0=', 1670290989),
('bPAqcvfBMBpGx4HEgm8B0Im23CAdvbKZoGXeX5eF', NULL, '2001:ee0:4b52:a1d0:64df:abf5:9814:d54b', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2o2NFhYWHdONVBSS2NTNnY0MDJkaUlhTVpUanpSSFFZcVNuOWg5RiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2N1YS1oYW5nL3Nhbi1waGFtPTUiO319', 1652155671),
('c3fDlFFijws4q391IvJKObOyRoOdaL311Is9CFUa', NULL, '2001:ee0:4b52:a1d0:2ca7:fe35:27cc:c367', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMUZCUFhHZHlZd1ppT0UwcTFsTU5ERGpqZ0dWNUFSNGh2R05INFNHUyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJEYW5nTmhhcCI7aToxO3M6NToiY2hlY2siO3M6MToiMSI7fQ==', 1652681461),
('EvyzaFyKYrbxJTyASNhvUPlI9qPrDijtjbT4JXUf', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiemRhU21EVUd2UUZSUG90Q2hHektNODhiNnpuYjJyUnlkM3g1bzJxaCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652071870),
('gK8z0aTWNdeY9m5VVuXiJcPPSPcpLbr9LKhibrfy', NULL, '2001:ee0:4b52:a1d0:2ca7:fe35:27cc:c367', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaDR0M0c2TVZ6c24ybUdJN3daOHJKZkhtcjRpYTl0dG1PY2l0dkZHZSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2F1dGgvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6IkRhbmdOaGFwIjtpOjE7czo1OiJjaGVjayI7czoxOiIxIjt9', 1652673207),
('HO162g08ZkG4XaUCsYddCtMziubGZrNDi73mMoRs', NULL, '2001:ee0:4b52:a1d0:e97e:2471:fe99:94da', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmpQQzZUM0lUNkpGQm9YWGFIYnZubDJWc2NpbGsyVVR1OG1jS3ZsTyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651907314),
('HtboBVWyJ1dOHHLZF6Ul7BoeLhCFxTF6TXFEQupN', NULL, '40.77.167.9', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/100.0.4896.127 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTGU5OTZUWUY0Z2VFd0xqWU8xbURQYkF4TTh6YkRWT21BYTZXOVRldCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651934910),
('hUbi2UKONYTOpq8PQu42amdvePeTQ3qbKpA4qv6R', NULL, '112.197.6.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmE2S2pEakU0dElIb2lTU2JJa3JDWU8yWFppZUZEOHVOc21GazhLSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vaWx5b3VzaG9lc3Nob3AuMDAwd2ViaG9zdGFwcC5jb20vYXV0aC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1670290773),
('IKEfGkQMuKaSzvLm91OR7ka1Po8HcqGfWwEinfab', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib1VsRkltUHExY0lNRXY2Z2U0aXBxb0hTT0ZubXV6MDhPQzU3VW84TSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651921145),
('jWCjPRPZOeH9DOYcUamHO7gVwLXItep5iVKQq91F', NULL, '2001:ee0:4b52:a1d0:d487:c6dd:2f2f:42f5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGNoRFppRWozcjZSZkdYaGN2ZmVETTFhMEZFUnNPWDhhVVhudThseiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652628223),
('M7z9vxa3E8JthIxY6xY6fByNGOvFdryxrrShSNVL', NULL, '2001:ee0:4b52:a1d0:cd0e:7643:1769:8c66', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNWdnVWdaUUhybWlrMDVwU1Uyc215MHNFTnVSeUJuRUNJcEp2U295bSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2FkbWluL3RodW9uZ2hpZXUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImNoZWNrIjtzOjE6IjEiO3M6ODoiRGFuZ05oYXAiO2k6MTt9', 1652673419),
('MCXbUzl0q1FcM3B3LOeGWM18fWoXwJxmhRP50qgV', NULL, '14.254.240.54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSkxuMnZIU0oyYWl6d0h6ckpVcjJhRnN5ME5FdkRqTjBIeUlyZ1NDdSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJEYW5nTmhhcCI7aToxO3M6NToiY2hlY2siO3M6MToiMSI7fQ==', 1652694731),
('njlIVacBvOkekVPJjB2kepd4sfxw4AaKLd7JVMgv', NULL, '2402:800:6235:61cc:68c9:884d:c619:9e52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSXlRUFNLbHBUQ1ZVOVFVMVNZR1d1cjZrMFBsdzh2UXdPSUFtYlhUOCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vaWx5b3VzaG9lc3Nob3AuMDAwd2ViaG9zdGFwcC5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImNoZWNrIjtzOjE6IjEiO3M6ODoiRGFuZ05oYXAiO2k6MTt9', 1670291546),
('O3AnVEOj8pmq3rirKUnSAgfkDJPzmS8fZsfVKm4r', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiajZuWFVVZjA4Znc5Qkl0MlBlSGNTUlFHSzYzYnNGUHRsd0pIb0pwMiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651948631),
('O3GvmJQ9IGZqSGGQ5c1NQTUjqZDbRvCdjWxKp9Jq', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRU8xVEZWUnZjajhXcUxZT0lEamtoeVJ2TTNZMU9wMmlDbFdQS3UzYyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651834998),
('oBS2yXZfnVEo316Cg5rA2CvqUKr0w6JT1pAV76es', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM3hIMGdMaUk1UFR1b2tzUDZsclZYY1VJVEpqejZhQjZwcTJtN1N5OCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652030800),
('pDgWbcjxZ36nuKoJHXeqOAI9uZddsSKFUvZ6zQzp', NULL, '2001:ee0:4b52:a1d0:d487:c6dd:2f2f:42f5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT2luT2xmSWJYYWNDN3NWc0hqMTl0dE9DYnAycXBDWkc0aHVUQVZ3NSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2FkbWluIjt9czo4OiJEYW5nTmhhcCI7aToxO3M6NToiY2hlY2siO3M6MToiMSI7fQ==', 1652631405),
('pezttM1SMfdvGAbHZ3nn3vifOguGH8ZCr4kVDfUV', NULL, '2001:ee0:4b52:a1d0:4020:94a4:1936:15d8', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmU4YlBGaWxvREwxUXhLYjV6Q2hzVXFscGw1YjZEbWZUZGZ0UUE5cSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651811130),
('pQRaojPQdXAsoV19IksPMxATMQOuUBia7EiE9k2j', NULL, '171.244.211.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiME5sWUlkN3AyRU9icElnbVYxMG1OVkVqckZnMzFWbVROWFpaV2xueiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2F1dGgvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImNoZWNrIjtzOjE6IjEiO3M6ODoiRGFuZ05oYXAiO2k6MTt9', 1653096391),
('sydnDBRhEO392AR8SzCZeWhCLnZf2rKJIBzj3LNE', NULL, '2001:ee0:4b52:a1d0:9d3a:b27f:94ec:3bdf', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1Azdko2ZDI1RmxVRXcxNmR6dk56cE5nU3lyZHVLeDZVU3doUHNqYyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652543468),
('TbeqTRZFmrTT3zjT5AhHZT2a3cc3q1xVUSjSLpst', NULL, '2001:ee0:4b52:a1d0:9d3a:b27f:94ec:3bdf', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXlNQWQ1U1RJVW1ScE9OUTJIYXhqNFNhRVkzdTVMVmZyWWFhZkt2dSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652531684),
('tu7b4wvuBsgYf4dPMY6myjzLfPHK1nGWCJdx5myp', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1RMSDRBY2NMcHFPN1B1dFVLMnJBcVFjZlhOV3ZkaHlGS0NJWmRXbiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652003340),
('Uol56z8oa9DOL1uqmoT5XlVMD5czy3ZbjaZCxleg', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVjgycndQc3RXak5XdXhBekJmUzIzeVZQSnA4dGhySmswdktxcHZtTSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652212964),
('uSfUpaMbyUBF0EHHcdcPt7gLTglNNaWsV7MRqsR3', NULL, '112.197.6.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkw2Y0pYZ3RiUHBDVTBnQ1lOaXdKVHFsaU5TSWRvMWh4WUNBTEFVbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vaWx5b3VzaG9lc3Nob3AuMDAwd2ViaG9zdGFwcC5jb20vYWRtaW4vZ2lheS94b2EvaWQ9MzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1670291524),
('uYfafUDva11ouWTgjVeqk4XMAdQ5DHHordQ1mAUz', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR3g5TzFOczhEcW8ySmppaW15a2lDT2d1OEhBQlBxSGJOaWFibjVpbyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651962171),
('V4jD8rypdbnhFW1EGtidRlvfZSGpKuDjfkGQZJBh', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaGVXMVowd1JYT2U2WkZ0TW9zU1NGZjZWTEpYa09ZNzBzVFdVREV6dyI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651907529),
('VcaujzDGJMlN8ayP2qtRExCUzNYVmT612kBtsveh', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM2U0QUhKeGgycmlxZkxLRkx6ZWZuYnJvY0N4NVNJY3U4VXVZelRlZiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652124162),
('vpimf91ofeMHFvcJENy1tqxOz8lbDQ9WUdRiRXER', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTzdPN3RmOWx2YkNUa2V6eUtvZVJuckVidXBKU0psanJOT2JNVlNoWSI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651807614),
('XKwx5qdbsPRPvYsR2P621GLd12dpEnXrfSDUPYjx', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibEdtMzk2ZTJOaUhDVFdFanpoSHhNMkVrc2d6YWNmcTExbWFsRVJUSiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1652017010),
('YtdKJIF7M1AwQE2mveo4lQoAmsN1VCKnNJQcMEs9', NULL, '40.77.167.9', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHZrZXFlWlVsSThvekQya3dBZVRxOW5tUWlmUU1aamRrU1M2bkhYRCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651976713),
('ZHjyf6ZHoQeGiMEfsvtlq93awJxbYUAEuZzHXH9j', NULL, '2001:ee0:4b52:a1d0:2ca7:fe35:27cc:c367', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36 Edg/101.0.1210.47', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicWFVaHFEeVJ6TG5QZGViSVpucWIxWXpZWHRiU1F3eVdEWWxxQ3I2WCI7czo4OiJnaW9faGFuZyI7YTowOnt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tL2FkbWluIjt9czo4OiJEYW5nTmhhcCI7aToxO3M6NToiY2hlY2siO3M6MToiMSI7fQ==', 1652673786),
('zZIGrUIgoIs9AIkfa1A3E5An0n9gWKqjrGDHOy7V', NULL, '2001:ee0:4b52:a1d0:11ba:b5e2:997c:62d6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTktvMHJ3WExtZnNsWWduWWJyQlpKdkFvWjNIMHhqS1RuYmxZNWJXZiI7czo4OiJnaW9faGFuZyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vcHZic2hvZXNzaG9wLjAwMHdlYmhvc3RhcHAuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1651836147);

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id_thuong_hieu` int(10) UNSIGNED NOT NULL,
  `ten_thuong_hieu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id_thuong_hieu`, `ten_thuong_hieu`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Converse'),
(4, 'Gucci'),
(5, 'Puma'),
(6, 'Vans'),
(7, 'New Balance'),
(8, 'Balenciaga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ten_dang_nhap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ten_nguoi_dung`, `email`, `sdt`, `Ten_dang_nhap`, `password`, `id_phan_quyen`) VALUES
(1, 'Admin', 'admin@gmail.com', '0123456789', 'admin', '$2y$10$SqPrRKfIpryuVTt3zmFYT.e6QD5t.yAiNAHO0KKkWt9LynVBbkvv2', '1'),
(14, 'Phan Văn Bằng', 'pvbang23092002@gmail.com', '0123456789', 'pvbang', '$2y$10$3GYHvTG089yZ0XAhKpPUluK8maVkaA7jTxLeoXy15oIzl9WrLaqse', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id_danh_gia`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`id_giay`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Indexes for table `loai_giay`
--
ALTER TABLE `loai_giay`
  ADD PRIMARY KEY (`id_loai_giay`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`id_phan_quyen`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id_thuong_hieu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_ten_dang_nhap_unique` (`Ten_dang_nhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id_danh_gia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giay`
--
ALTER TABLE `giay`
  MODIFY `id_giay` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loai_giay`
--
ALTER TABLE `loai_giay`
  MODIFY `id_loai_giay` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `id_phan_quyen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_thuong_hieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
