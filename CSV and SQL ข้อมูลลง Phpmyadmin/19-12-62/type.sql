-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 07:57 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cftoys`
--

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Type_ID` varchar(4) COLLATE utf8_bin NOT NULL,
  `Type_Name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Type_ID`, `Type_Name`) VALUES
('1', 'ตุ๊กตา'),
('10', 'นาฬิกา'),
('11', 'ตกแต่งห้อง'),
('11.1', 'ป้าย'),
('11.2', 'ผ้าแต่งห้อง'),
('11.3', 'ติดผนัง'),
('11.4', 'ปฏิทิน'),
('11.5', 'ตะแกรง'),
('12', 'พินและเข็มกลัด'),
('12.1', 'พิน'),
('12.2', 'เข็มกลัด'),
('13', 'ชุดเครื่องนอน'),
('13.1', 'ผ้าห่ม'),
('13.2', 'หมอน'),
('14', 'ผ้า'),
('14.1', 'ผ้าคลุม'),
('14.2', 'ผ้าเช็ดหัว'),
('15', 'บรรจุภัณฑ์'),
('15.1', 'แก้ว'),
('15.2', 'จาน'),
('15.3', 'ชาม'),
('15.4', 'กล่องอาหาร'),
('16', 'กำไลข้อมือ'),
('17', 'สติ๊กเกอร์'),
('18', 'อื่นๆ'),
('18.1', 'ลำโพง'),
('18.2', 'ร่ม'),
('18.3', 'สมุด'),
('18.4', 'กระถาง'),
('18.5', 'กล่องใส่ของ'),
('18.6', 'กล่องเพลง'),
('18.7', 'อื่นๆ'),
('2', 'พวงกุญแจ'),
('3', 'กระเป๋า'),
('3.1', 'กระเป๋าซิบ'),
('3.2', 'กระเป๋าตัง'),
('3.3', 'กระเป๋าเคียง'),
('3.4', 'กระเป๋าดินสอ'),
('3.5', 'กระเป๋าเครื่องสำอาง'),
('3.6', 'กระเป๋าหูรูด'),
('3.7', 'กระเป๋าสะพายข้าง'),
('3.8', 'กระเป๋าหูหิ้ว'),
('3.9', 'กระเป๋าเป้'),
('4', 'หมอน'),
('4.1', 'หมอนผ้าห่ม'),
('4.2', 'หมอนสอดมือ'),
('4.3', 'หมอนหนุน'),
('4.4', 'หมอนรองคอ'),
('5', 'หมวก'),
('5.1', 'หมวก'),
('5.2', 'ที่รวบผม'),
('5.3', 'ที่คาดผม'),
('6', 'ถุงเท้า'),
('7', 'รองเท้า'),
('8', 'แสงสว่าง'),
('8.1', 'โคมไฟ'),
('8.2', 'ไฟประดับ'),
('9', 'โมเดล');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Type_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
