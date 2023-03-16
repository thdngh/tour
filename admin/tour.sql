-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 14, 2022 lúc 07:51 AM
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
-- Cơ sở dữ liệu: `chmp`
DROP DATABASE IF EXISTS `tour`;
CREATE DATABASE IF NOT EXISTS `tour` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `tour`;


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
CREATE TABLE `dmvanchuyen` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Du Lịch Trong Nước '),
(2, 'Du Lịch Nước Ngoài');

INSERT INTO `dmvanchuyen` (`id`, `tendanhmuc`) VALUES
(1, 'Đặt xe'),
(2, 'Đặt vé máy bay');
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
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
(6, 10, 'Mỹ Long', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `dattour` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien` float NOT NULL DEFAULT '0',
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `dattour` (`id`, `nguoidung_id`, `diachi_id`, `ngay`, `tongtien`, `ghichu`) VALUES
(1, 4, 1, '2020-10-23 13:38:40', 1320000, NULL),
(2, 5, 2, '2020-10-24 15:13:10', 3920000, NULL),
(3, 8, 4, '2021-03-13 16:38:57', 6035000, NULL),
(4, 9, 5, '2021-03-13 16:53:28', 6035000, NULL),
(5, 10, 6, '2021-03-13 16:55:44', 7800000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangct`
--
CREATE TABLE `tttour` (
  `id` int(11) NOT NULL,
  `tentour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `gia` float NOT NULL DEFAULT '0',
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT '0',
  `luotdat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `cttour` (
  `id` int(11) NOT NULL,
  `dattour_id` int(11) NOT NULL,
  `tttour_id` int(11) NOT NULL,
  `tentour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float NOT NULL DEFAULT '0',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangct`

-- --------------------------------------------------------



INSERT INTO `tttour` (`id`, `tentour`, `mota`, `gia`, `hinhanh`, `danhmuc_id`, `luotxem`, `luotdat`) VALUES
(1, 'Miền Tây - Đồng Tháp - Tràm Chim - Khu Du lịch sinh thái Mỹ Phước Thành - Khu Di Tích Xẻo Quýt - Giấc mơ xanh giữa Xứ Sen Hồng (khách sạn tương đương 4 sao)',						NULL, 2590000, 'images/chamchim.jpg',1, 3, 0),
(2, 'Phú Quốc - Trải nghiệm chèo Sup - Đạp xe tại Rạch Vẹm hoang sơ - Cắm trại đêm - BBQ tối',							                                                                NULL, 2700000, 'images/pquoc.jpg', 1, 9, 0),
(3, 'VinWonders Phú Quốc được chia làm 6 khu vực với 12 chủ đề liên quan tới các câu chuyện cổ tích ',								                                                    NULL, 1750000, 'images/pquoc2.jpg', 1, 9, 0),
(4, 'Grand World Phú Quốc thế giới châu âu thu nhỏ',									                                                                                                NULL, 2100000, 'images/pquoc3.jpg', 1, 7, 0),
(5, 'Sun World Hòn Thơm Phú Quốc quần thể du lịch biển đẳng cấp- công viên nước hàng đầu châu á- cáp treo vượt biển dài nhất thế giới',								                    NULL, 2700000, 'images/pquoc4.jpg', 2, 4, 0),
(7, 'Miền Tây: Tiền Giang - Cần Thơ - Bạc Liêu - Nhà Thờ Tắc Sậy',														                                                                NULL, 3590000, 'images/tiengiang.jpg', 1, 2, 0),
(8, 'Miền Tây - Mỹ Tho - Thới Sơn - Bến Tre',				                                                                                                                            NULL,  590000, 'images/tiengiang2.jpg', 1, 1, 0),
(9, 'Châu Đốc: Rừng Tràm Trà Sư - Hà Tiên - Rạch Giá - Cần Thơ (Khách sạn tương đương 3*& 4*)',										                                                    NULL,  4190000, 'images/mientay1.jpg', 1, 6, 0),
(10, 'Miền Tây - Vĩnh Long - khám phá Vương Quốc Đỏ - Trải nghiệm Đệ Nhất Homestay Mekong Nature Lodge - Cần Thơ - Chợ Nổi Cái Răng - Nghỉ dưỡng Cần Thơ Eco Resort',				    NULL,  4390000, 'images/mientay2.jpg', 1, 6, 0),
(11, 'Liên Tuyến Trung Bắc: Đà Nẵng - Huế - La Vang - Động Phong Nha & Thiên Đường - Bà Nà - Cầu Vàng - Hội An - Đà Nẵng - Hà Nội - Sapa - Fansipan - Vịnh Hạ Long - Động Thiên Cung - Hà Nội',NULL, 16990000, 'images/mienbac1.jpg', 1, 6, 0),
(12, 'Hà Nội - Hạ Long - Ninh Bình - Bái Đính - Tràng An - Tuyệt Tịnh Cốc (Khách sạn 4 sao) | Nhân dịp Ngày Hội Du Lịch',													            NULL,  6990000,'images/mienbac2.jpg', 1, 6, 0),
(13, 'Hà Nội - Sapa - Fansipan - Ninh Bình - Tràng An - Bái Đính - Tuyệt Tịnh Cốc - Hạ Long - Yên Tử I Ngắm Hoa Ban',												                    NULL,  10590000,'images/mienbac3.jpg', 1, 6, 0),
(14, 'Hà Nội - Hạ Long - Ninh Bình - Bái Đính - Tràng An - Tuyệt Tịnh Cốc (Khách sạn 4 sao) | Nhân dịp Ngày Hội Du Lịch',								                                NULL,  6990000,'images/mienbac4.jpg', 1, 6, 0),
(15, 'Đà Nẵng - Huế - Đầm Lập An - La Vang - Động Phong Nha & Thiên Đường - KDL Bà Nà - Cầu Vàng -Sơn Trà - Hội An - Đà Nẵng (Khách sạn 4* trọn tour)',							        NULL, 7390000,'images/mientrung1.jpg', 1, 6, 0),
(16, 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - Hội An – Tặng vé vui chơi tại Công viên nước Mikazuki Đà Nẵng (Khách sạn 4* trọn tour) - Bay cùng Vietnam Airlines',					    NULL, 6190000,'images/mientrung2.jpg', 1, 6, 0),
(17, 'Đà Nẵng - Huế - Đầm Lập An - La Vang - Động Thiên Đường - KDL Bà Nà - Cầu Vàng - Hội An - Đà Nẵng | Nhân dịp Ngày Hội Du Lịch',							                        NULL, 5990000,'images/mientrung3.jpg', 1, 6, 0),
(18, 'Đà Nẵng - Huế - Đại Nội - Đầm Lập An - KDL Bà Na - Cầu Vàng - Sơn Trà - Phố cổ Hội An - Đà Nẵng',										                                            NULL, 5790000,'images/mientrung4.jpg', 1, 6, 0),
(19, 'Khám phá Ai Cập: Cairo - Aswan - Edfu - Kom Obo - Luxor - Trải nghiệm du thuyền 5 sao sông Nile huyền bí',						                                                NULL, 69900000,'images/chauphi1.jpg', 2, 6, 0),
(20, 'Nam Phi: Cape Town - Sun City - Pretoria - Johannesburg | Lễ 30/4 (Giảm 2.000.000đ/khách khi thanh toán trước ngày 15/03/2023)',						                            NULL, 79990000,'images/chauphi2.jpg', 2, 6, 0),
(21, 'Khám phá Hai nước Đông Dương Campuchia - Lào: Kratie - Pakse - Stung Treng',				                                                                                        NULL, 7990000,'images/chaua1.jpg', 2, 6, 0),
(22, 'Campuchia: Siem Reap - Phnom Penh (Khách sạn 4*)',									                                                                                            NULL, 6590000,'images/chaua2.jpg', 2, 6, 0),
(23, 'Hongkong : Núi Thái Bình - Thiền Viện Chí Liên - Chiêm ngưỡng toàn vịnh Victoria trên tàu Hong kong',										                                        NULL, 15900000,'images/chaua3.jpg', 2, 6, 0),
(24, 'Thái Lan: Chiangmai – Chiangrai: Khám phá Chùa Trắng - Tam Giác Vàng - Safari Night | Nhân dịp Ngày Hội Du Lịch',										                            NULL, 8990000,'images/chaua4.jpg', 2, 6, 0),
(25, 'Singapore - Malaysia ( 02 đêm tại Singapore, Tặng vé tham quan Floral Fantasy Dome và Bảo tàng sáp Madame Tussauds )',									                    NULL, 13590000,'images/chaua5.jpg', 2, 6, 0);

-- --------------------------------------------------------

-- cấu trúc bảng khách hàng
CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dattour_id` int(11) NOT NULL,
  `tttour_id` int(11) NOT NULL,
  `gia` float NOT NULL DEFAULT '0',
  `thanhtien` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- Cấu trúc bảng cho bảng `nguoidung`
--


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
(10, 'eee@abc.com', '1234567894', 'f66f4446648ae7ae56419eca43bf2b8a', 'EEE', 3, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `dmvanchuyen`
  ADD PRIMARY KEY (`id`);
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `dattour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Chỉ mục cho bảng `donhangct`
--
ALTER TABLE `cttour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dattour_id` (`dattour_id`),
  ADD KEY `tttuor_id` (`tttour_id`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `tttour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
ALTER TABLE `dmvanchuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `dattour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `donhangct`
--
ALTER TABLE `cttour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mathang`
--
ALTER TABLE `tttour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);
--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `dattour`
  ADD CONSTRAINT `dattour_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangct`
--
ALTER TABLE `cttour`
  ADD CONSTRAINT `cttour_ibfk_1` FOREIGN KEY (`dattour_id`) REFERENCES `dattour` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`tttour_id`) REFERENCES `tttour` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `tttour`
  ADD CONSTRAINT `tttour_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

ALTER TABLE `khachhang`
  ADD CONSTRAINT `khdattour_ibfk_1` FOREIGN KEY (`dattour_id`) REFERENCES `dattour` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `khtttour_ibfk_2` FOREIGN KEY (`tttour_id`) REFERENCES `tttour`(`id`) ON UPDATE CASCADE;

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
