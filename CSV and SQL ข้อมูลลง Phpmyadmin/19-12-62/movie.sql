-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:38 PM
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
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_ID` int(4) NOT NULL,
  `Movie_Name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Movie_ID`, `Movie_Name`) VALUES
(1, 'เกมออฟโทรน (Game of Thrones)'),
(2, 'เซเลอมูน (Sailor Moon)'),
(3, 'เซซามี สตรีท (Sesame Street)'),
(4, 'เปปป้าพิก (Peppa Pig)'),
(5, 'แฟนตาสติกบีส (Fantastic Beasts)'),
(6, 'แอดเวนเจอร์ไทม์ (Adventure Time)'),
(7, 'แฮรี่พอตเตอร์ (Harry Potter)'),
(8, 'โคนัน (Meitantei Conan)'),
(9, 'โดเรม่อน (Doraemon)'),
(10, 'โตโตโร่ (Totoro)'),
(11, 'โปเกม่อน (Pokemon)'),
(12, 'โฟรเซ่น (Frozen)'),
(13, 'วันพันซ์แมน (One Punch Man)'),
(14, 'ไม่มี (None)'),
(15, 'ไลน์ (LINE)'),
(16, 'ไลออนคิง (Lion King)'),
(17, 'กาเกา (Kakao)'),
(18, 'ชินจัง (Shinchan)'),
(19, 'ซานริโอ้ (Sanrio)'),
(20, 'ซิมสัน (The Simpsons)'),
(21, 'ซูมิโกะ (Sumikko)'),
(22, 'ดอร่า (Dora)'),
(23, 'ดัมโบ้ (Dumbo)'),
(24, 'ดิสนีย์แบร์ (Disney Bear)'),
(25, 'ดีซี (DC Comics)'),
(26, 'ทอยสตอรี่ (Toy Story)'),
(27, 'นารูโตะ (Naruto) (Naruto)'),
(28, 'นีโม่ (Finding Nemo)'),
(29, 'บาร์บ้าปาป้า (Barbapapa)'),
(30, 'พาวเวอร์พับเกิล (The Powerpuff Girls)'),
(31, 'มอนสเตอร์อิงค์ (Monster, Inc.)'),
(32, 'มิกกี้เมาส์ (Mickey Mouse)'),
(33, 'มินเนี่ยน (Minions)'),
(34, 'ยัวร์เนม (Your Name)'),
(35, 'ลิตเติ้ลเมอเมด (Little Mermaid)'),
(36, 'ลิตเติ้ลทวินสตาร์ (Little twin star)'),
(37, 'วันพีช (One Piece)'),
(38, 'วินนี่เดอะพูห์ (Winnie-the-Pooh)'),
(39, 'วีแบแบ (We bare bears)'),
(40, 'สนูปปี้ (Snoopy)'),
(41, 'สปอนบ๊อบ (SpongeBob)'),
(42, 'สปิริตอเวย์ (Spirited Away)'),
(43, 'อเวนเจอร์ (Avengers)'),
(44, 'อภินิหารไวกิ้ง (How To Train You Dragon)'),
(45, 'สติช (Stitch)'),
(46, 'อันปังแมน (Anpanman)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
