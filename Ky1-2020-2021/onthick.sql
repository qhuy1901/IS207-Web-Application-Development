-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 31, 2021 at 06:22 AM
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
-- Database: `onthick`
--

-- --------------------------------------------------------

--
-- Table structure for table `baoduong`
--

CREATE TABLE `baoduong` (
  `MABD` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGAYNHAN` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NGAYTRA` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOKM` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOIDUNG` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SOXE` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `THANHTIEN` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='BAODUONG(MABD, NGAYNHAN, NGAYTRA, SOKM, NOIDUNG, SOXE, THANH';

--
-- Dumping data for table `baoduong`
--

INSERT INTO `baoduong` (`MABD`, `NGAYNHAN`, `NGAYTRA`, `SOKM`, `NOIDUNG`, `SOXE`, `THANHTIEN`) VALUES
('B02', '2021-12-07', NULL, '34', 'Nội dung 2', '1', NULL),
('BD01', '2021-11-30', NULL, '20', 'BD 20', '1', NULL),
('BD02', '2021-12-07', '2021-12-07', '25', 'Nội dung', '34B6', 200000),
('BD04', '2021-12-06', NULL, '34', 'Nội dung 4', '1', NULL),
('BD10', '2021-12-07', NULL, '45', 'Nội dung 10', '34H', NULL),
('BD3', '2021-12-07', NULL, '34', 'Nội dung 3', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `MACV` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TENCV` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DONGIA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='CONGVIEC(MACV, TENCV, DONGIA)';

--
-- Dumping data for table `congviec`
--

INSERT INTO `congviec` (`MACV`, `TENCV`, `DONGIA`) VALUES
('CV01', 'Thay nhớt', 200000),
('CV02', 'Thay thắng', 360000),
('CV03', 'Kiểm tra vỏ', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `ct_bd`
--

CREATE TABLE `ct_bd` (
  `MABD` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MACV` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='CT_BD(MABD, MACV)';

--
-- Dumping data for table `ct_bd`
--

INSERT INTO `ct_bd` (`MABD`, `MACV`) VALUES
('B02', 'CV03'),
('BD02', 'CV01'),
('BD10', 'CV02');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HOTENKH` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIENTHOAI` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='KHACHHANG(MAKH, HOTENKH, DIACHI, DIENTHOAI)';

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKH`, `HOTENKH`, `DIACHI`, `DIENTHOAI`) VALUES
('KH01', 'TA QUANG HUY', '12', '12'),
('KH02', 'Lê Thị Hồng Cúc', 'DC2', '12354');

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `SOXE` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HANGXE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NAMSX` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MAKH` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='XE(SOXE, HANGXE , NAMSX, MAKH)';

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`SOXE`, `HANGXE`, `NAMSX`, `MAKH`) VALUES
('1', 'Toyota', '2020', 'KH02'),
('34B6', 'BMW', '2020', 'KH02'),
('34H', 'Audi', '2020', 'KH01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baoduong`
--
ALTER TABLE `baoduong`
  ADD PRIMARY KEY (`MABD`),
  ADD KEY `SOXE` (`SOXE`);

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MACV`);

--
-- Indexes for table `ct_bd`
--
ALTER TABLE `ct_bd`
  ADD PRIMARY KEY (`MABD`,`MACV`),
  ADD KEY `MACV` (`MACV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`SOXE`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baoduong`
--
ALTER TABLE `baoduong`
  ADD CONSTRAINT `baoduong_ibfk_1` FOREIGN KEY (`SOXE`) REFERENCES `xe` (`SOXE`);

--
-- Constraints for table `ct_bd`
--
ALTER TABLE `ct_bd`
  ADD CONSTRAINT `ct_bd_ibfk_1` FOREIGN KEY (`MABD`) REFERENCES `baoduong` (`MABD`),
  ADD CONSTRAINT `ct_bd_ibfk_2` FOREIGN KEY (`MACV`) REFERENCES `congviec` (`MACV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
