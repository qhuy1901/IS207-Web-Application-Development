-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 04, 2022 at 11:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `MaChiNhanh` varchar(40) NOT NULL,
  `TenChiNhanh` varchar(40) DEFAULT NULL,
  `DiaChi` varchar(40) DEFAULT NULL,
  `MaCongTy` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`MaChiNhanh`, `TenChiNhanh`, `DiaChi`, `MaCongTy`) VALUES
('CN01', 'TP. Hồ Chí Minh', 'Địa chỉ 1', 'CT01'),
('CN02', 'TP. Đà Nẵng', 'Địa chỉ 2', 'CT02'),
('CN03', 'TP. Biên Hòa', 'Địa chỉ 3', 'CT01'),
('CN04', 'TP. Dĩ An', 'Địa chỉ 4', 'CT01');

-- --------------------------------------------------------

--
-- Table structure for table `congty`
--

CREATE TABLE `congty` (
  `MaCongTy` varchar(40) NOT NULL,
  `TenCongTy` varchar(40) DEFAULT NULL,
  `DiaChi` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `congty`
--

INSERT INTO `congty` (`MaCongTy`, `TenCongTy`, `DiaChi`) VALUES
('CT01', 'Công ty A', 'Địa chỉ A'),
('CT02', 'Công ty C', 'Địa chỉ C');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` varchar(40) NOT NULL,
  `TenNhanVien` varchar(40) NOT NULL,
  `LuongThang` float NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `MaPhong` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `TenNhanVien`, `LuongThang`, `GioiTinh`, `MaPhong`) VALUES
('NV01', 'Nguyễn Xuân Hùng', 15000000, 0, 'PB003'),
('NV02', 'Nguyễn Xuân Tú', 15000000, 1, 'PB002'),
('NV03', 'Nguyễn Kim Tuyến', 13000, 0, 'PB003'),
('NV04', 'Nguyễn Tuấn Anh', 34000, 1, 'PB003'),
('NV09', 'Nguyễn Thị Hạnh', 14500000, 0, 'PB003'),
('NV10', 'Nguyễn Văn Sơn', 4560000, 0, 'PB002'),
('NV11', 'Nguyễn Thị Hương', 45260000, 0, 'PB002');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPhong` varchar(40) NOT NULL,
  `TenPhong` varchar(40) NOT NULL,
  `MaChiNhanh` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPhong`, `TenPhong`, `MaChiNhanh`) VALUES
('PB001', 'Phòng Kế Toán', 'CN01'),
('PB002', 'Phòng Kỹ thuật', 'CN01'),
('PB003', 'Phòng Tổ chức', 'CN02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`MaChiNhanh`),
  ADD KEY `MaCongTy` (`MaCongTy`);

--
-- Indexes for table `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`MaCongTy`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaPhong` (`MaPhong`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPhong`),
  ADD KEY `MaChiNhanh` (`MaChiNhanh`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD CONSTRAINT `chinhanh_ibfk_1` FOREIGN KEY (`MaCongTy`) REFERENCES `congty` (`MaCongTy`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`MaPhong`) REFERENCES `phongban` (`MaPhong`);

--
-- Constraints for table `phongban`
--
ALTER TABLE `phongban`
  ADD CONSTRAINT `phongban_ibfk_1` FOREIGN KEY (`MaChiNhanh`) REFERENCES `chinhanh` (`MaChiNhanh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
