-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 31, 2023 lúc 02:48 AM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Du Lịch Trong Nước '),
(2, 'Du Lịch Ngoài Nước ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macdinh` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachi`
--

INSERT INTO `diachi` (`id`, `nguoidung_id`, `diachi`, `macdinh`) VALUES
(1, 4, 'Đông Xuyên, Long Xuyên', 1),
(2, 5, 'Mỹ Xuyên, Long Xuyên', 1),
(3, 7, 'Mỹ Long', 1),
(4, 8, 'Mỹ Thới', 1),
(5, 9, 'Mỹ Xuyên', 1),
(6, 10, 'Mỹ Long', 1),
(7, 11, 'sss', 1),
(8, 12, 'okok', 1),
(9, 13, 'aaaaa', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don`
--

CREATE TABLE `don` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` float NOT NULL DEFAULT '0',
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donct`
--

CREATE TABLE `donct` (
  `id` int(11) NOT NULL,
  `don_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL DEFAULT '1',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `gia` float NOT NULL DEFAULT '0',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT '3',
  `trangthai` tinyint(4) NOT NULL DEFAULT '1',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'abc@abc.com', '0988994683', '900150983cd24fb0d6963f7d28e17f72', 'Quản trị ABC', 1, 1, NULL),
(2, 'def@abc.com', '0988994684', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên DEF', 2, 1, NULL),
(3, 'ghi@abc.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Thu An', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '900150983cd24fb0d6963f7d28e17f72', 'Hồ Xuân Minh', 3, 1, NULL),
(6, 'aaa@abc.com', '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'AAA', 3, 1, NULL),
(7, 'bbb@abc.com', '1234567891', '0f7e44a922df352c05c5f73cb40ba115', 'BBB', 3, 1, NULL),
(8, 'ccc@abc.com', '1234567892', 'd893377c9d852e09874125b10a0e4f66', 'CCC', 3, 1, NULL),
(9, 'ddd@abc.com', '1234567893', '43042f668f07adfd174cb1823d4795e1', 'DDD', 3, 1, NULL),
(10, 'eee@abc.com', '1234567894', 'f66f4446648ae7ae56419eca43bf2b8a', 'EEE', 3, 1, NULL),
(11, 'a@aa.com', '0123456789', '781e5e245d69b566979b86e28d23f2c7', 'Kem chiên', 3, 1, NULL),
(12, 'a@abc.com', '0123456789', '781e5e245d69b566979b86e28d23f2c7', 'Kem chiên', 3, 1, NULL),
(13, 'a@abc.com', '0123456789', '781e5e245d69b566979b86e28d23f2c7', 'Kem chiên', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `tentour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `luotdat` int(11) NOT NULL DEFAULT '0',
  `lichtrinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `tentour`, `gia`, `hinhanh`, `hinhanh2`, `hinhanh3`, `danhmuc_id`, `luotxem`, `luotdat`, `lichtrinh`) VALUES
(1, 'Miền Tây - Đồng Tháp - Tràm Chim - Khu Du lịch sinh thái Mỹ Phước Thành - Khu Di Tích Xẻo Quýt - Giấc mơ xanh giữa Xứ Sen Hồng (khách sạn tương đương 4 sao)', 2590000, 'images/chamchim.jpg', '', '', 1, 4, 0, ''),
(2, 'Phú Quốc - Trải nghiệm chèo Sup - Đạp xe tại Rạch Vẹm hoang sơ - Cắm trại đêm - BBQ tối', 2700000, 'images/pquoc.jpg', '', '', 1, 11, 0, ''),
(3, 'VinWonders Phú Quốc được chia làm 6 khu vực với 12 chủ đề liên quan tới các câu chuyện cổ tích ', 1750000, 'images/pquoc2.jpg', '', '', 1, 9, 0, ''),
(4, 'Grand World Phú Quốc thế giới châu âu thu nhỏ', 2100000, 'images/pquoc3.jpg', '', '', 1, 7, 0, ''),
(5, 'Sun World Hòn Thơm Phú Quốc quần thể du lịch biển đẳng cấp- công viên nước hàng đầu châu á- cáp treo vượt biển dài nhất thế giới', 2700000, 'images/pquoc4.jpg', '', '', 2, 4, 0, ''),
(7, 'Miền Tây: Tiền Giang - Cần Thơ - Bạc Liêu - Nhà Thờ Tắc Sậy', 3590000, 'images/tiengiang.jpg', '', '', 1, 2, 0, ''),
(8, 'Miền Tây - Mỹ Tho - Thới Sơn - Bến Tre', 590000, 'images/tiengiang2.jpg', '', '', 1, 2, 0, ''),
(9, 'Châu Đốc: Rừng Tràm Trà Sư - Hà Tiên - Rạch Giá - Cần Thơ (Khách sạn tương đương 3*& 4*)', 4190000, 'images/mientay1.jpg', '', '', 1, 6, 0, ''),
(10, 'Miền Tây - Vĩnh Long - khám phá Vương Quốc Đỏ - Trải nghiệm Đệ Nhất Homestay Mekong Nature Lodge - Cần Thơ - Chợ Nổi Cái Răng - Nghỉ dưỡng Cần Thơ Eco Resort', 4390000, 'images/mientay2.jpg', '', '', 1, 6, 0, ''),
(11, 'Liên Tuyến Trung Bắc: Đà Nẵng - Huế - La Vang - Động Phong Nha & Thiên Đường - Bà Nà - Cầu Vàng - Hội An - Đà Nẵng - Hà Nội - Sapa - Fansipan - Vịnh Hạ Long - Động Thiên Cung - Hà Nội', 16990000, 'images/mienbac1.jpg', '', '', 1, 6, 0, ''),
(12, 'Hà Nội - Hạ Long - Ninh Bình - Bái Đính - Tràng An - Tuyệt Tịnh Cốc (Khách sạn 4 sao) | Nhân dịp Ngày Hội Du Lịch', 6990000, 'images/mienbac2.jpg', 'images/mienbac4.jpg', '', 1, 6, 0, ''),
(13, 'Hà Nội - Sapa - Fansipan - Ninh Bình - Tràng An - Bái Đính - Tuyệt Tịnh Cốc - Hạ Long - Yên Tử I Ngắm Hoa Ban', 10590000, 'images/mienbac3.jpg', '', '', 1, 6, 0, ''),
(15, 'Đà Nẵng - Huế - Đầm Lập An - La Vang - Động Phong Nha & Thiên Đường - KDL Bà Nà - Cầu Vàng -Sơn Trà - Hội An - Đà Nẵng (Khách sạn 4* trọn tour)', 7390000, 'images/mientrung1.jpg', '', '', 1, 6, 0, ''),
(16, 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - Hội An – Tặng vé vui chơi tại Công viên nước Mikazuki Đà Nẵng (Khách sạn 4* trọn tour) - Bay cùng Vietnam Airlines', 6190000, 'images/mientrung2.jpg', '', '', 1, 6, 0, ''),
(17, 'Đà Nẵng - Huế - Đầm Lập An - La Vang - Động Thiên Đường - KDL Bà Nà - Cầu Vàng - Hội An - Đà Nẵng | Nhân dịp Ngày Hội Du Lịch', 5990000, 'images/mientrung3.jpg', '', '', 1, 6, 0, ''),
(18, 'Đà Nẵng - Huế - Đại Nội - Đầm Lập An - KDL Bà Na - Cầu Vàng - Sơn Trà - Phố cổ Hội An - Đà Nẵng', 5790000, 'images/mientrung4.jpg', '', '', 1, 7, 0, ''),
(19, 'Khám phá Ai Cập: Cairo - Aswan - Edfu - Kom Obo - Luxor - Trải nghiệm du thuyền 5 sao sông Nile huyền bí', 69900000, 'images/chauphi1.jpg', '', '', 2, 9, 0, ''),
(20, 'Nam Phi: Cape Town - Sun City - Pretoria - Johannesburg | Lễ 30/4 (Giảm 2.000.000đ/khách khi thanh toán trước ngày 15/03/2023)', 79990000, 'images/chauphi2.jpg', '', '', 2, 13, 0, ''),
(21, 'Khám phá Hai nước Đông Dương Campuchia - Lào: Kratie - Pakse - Stung Treng', 7990000, 'images/chaua1.jpg', '', '', 2, 6, 0, ''),
(22, 'Campuchia: Siem Reap - Phnom Penh (Khách sạn 4*)', 6590000, 'images/chaua2.jpg', '', '', 2, 6, 0, ''),
(23, 'Hongkong : Núi Thái Bình - Thiền Viện Chí Liên - Chiêm ngưỡng toàn vịnh Victoria trên tàu Hong kong', 15900000, 'images/chaua3.jpg', '', '', 2, 6, 0, ''),
(24, 'Thái Lan: Chiangmai – Chiangrai: Khám phá Chùa Trắng - Tam Giác Vàng - Safari Night | Nhân dịp Ngày Hội Du Lịch', 8990000, 'images/chaua4.jpg', '', '', 2, 8, 0, ''),
(25, 'Singapore - Malaysia ( 02 đêm tại Singapore, Tặng vé tham quan Floral Fantasy Dome và Bảo tàng sáp Madame Tussauds )', 13590000, 'images/chaua5.jpg', '', '', 2, 7, 0, ''),
(26, 'test ', 15000, 'images/anh1_637139840113905768.png', 'images/chamchim.jpg', 'images/chamchim.jpg', 1, 264, 0, 'ok');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Chỉ mục cho bảng `donct`
--
ALTER TABLE `donct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`don_id`),
  ADD KEY `mathang_id` (`mathang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khdattour_ibfk_1` (`don_id`),
  ADD KEY `khtttour_ibfk_2` (`tour_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `don`
--
ALTER TABLE `don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donct`
--
ALTER TABLE `donct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khdattour_ibfk_1` FOREIGN KEY (`don_id`) REFERENCES `dattour` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `khtttour_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
