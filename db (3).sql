-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 01:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `student_id` varchar(12) DEFAULT NULL,
  `t_name` varchar(10) DEFAULT NULL COMMENT 'คำนำหน้าชื้อ',
  `f_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อจริง',
  `l_name` varchar(255) DEFAULT NULL COMMENT 'นานสกุล',
  `tel` varchar(10) DEFAULT NULL COMMENT 'เบอร์โทร',
  `branch_name` varchar(255) DEFAULT NULL,
  `group` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `student_id`, `t_name`, `f_name`, `l_name`, `tel`, `branch_name`, `group`) VALUES
(79, '2001', 'นางสาว', 'คาตายะ', 'กาวศรี', '0980230774', 'เทคโนโลยีปิโตรเลียม', 'D'),
(80, '2002', 'นางสาว', 'คาตายะ', 'กาวศรี', '0980230774', 'เทคนิคยายนต์ไฟฟ้า', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `edit_book`
--

CREATE TABLE `edit_book` (
  `student_id` varchar(10) DEFAULT NULL,
  `A` varchar(255) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `date_pay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_list`
--

CREATE TABLE `equipment_list` (
  `id` int(11) NOT NULL,
  `list_ID` int(6) NOT NULL,
  `list` varchar(100) NOT NULL,
  `list_size` varchar(4) NOT NULL,
  `list_price` int(11) NOT NULL,
  `quantity` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `equipment_list`
--

INSERT INTO `equipment_list` (`id`, `list_ID`, `list`, `list_size`, `list_price`, `quantity`) VALUES
(1, 0, '-', '-', 0, 0),
(2, 1001, 'เสื้อฝึกงาน (เสื้อช็อป) ', 'S', 350, 0),
(3, 1002, 'เสื้อฝึกงาน (เสื้อช็อป) ', 'M', 350, 0),
(4, 1003, 'เสื้อฝึกงาน (เสื้อช็อป) ', 'L', 350, 0),
(5, 1004, 'เสื้อฝึกงาน (เสื้อช็อป) ', 'XL', 350, 0),
(6, 1005, 'เสื้อฝึกงาน (เสื้อช็อป) ', '2XL', 350, 0),
(7, 2001, 'เสื้อยืดฝึกฝีมือ (คอกลม)  ', 'S', 140, 0),
(8, 2002, 'เสื้อยืดฝึกฝีมือ (คอกลม)  ', 'M', 140, 0),
(9, 2003, 'เสื้อยืดฝึกฝีมือ (คอกลม)  ', 'L', 140, 0),
(10, 2004, 'เสื้อยืดฝึกฝีมือ (คอกลม)  ', 'XL', 140, 0),
(11, 2005, 'เสื้อยืดฝึกฝีมือ (คอกลม)  ', '2XL', 140, 0),
(12, 3001, 'เสื้อพละ    ', 'S', 200, 0),
(13, 3002, 'เสื้อพละ    ', 'M', 200, 0),
(14, 3003, 'เสื้อพละ    ', 'L', 200, 0),
(15, 3004, 'เสื้อพละ    ', 'XL', 200, 0),
(16, 3005, 'เสื้อพละ    ', '2XL', 200, 0),
(17, 3006, 'เสื้อพละ    ', '3XL', 200, 0),
(18, 3007, 'เสื้อพละ    ', '4XL', 200, 0),
(19, 4001, 'กางเกงพละ', 'S', 200, 0),
(20, 4002, 'กางเกงพละ', 'M', 200, 0),
(21, 4003, 'กางเกงพละ', 'L', 200, 0),
(22, 4004, 'กางเกงพละ', 'XL', 200, 0),
(23, 4005, 'กางเกงพละ', '2XL', 200, 0),
(24, 4006, 'กางเกงพละ', '3XL', 200, 0),
(25, 5001, 'เข็มขัดและหัวเข็มขัด            ', 'NoS', 170, 0),
(26, 6001, 'เน็คไทและเข็ม                ', 'NoS', 150, 0),
(27, 7001, 'กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่', 'NoS', 290, 0),
(28, 8001, 'สมุดตราวิทยาลัยเทคนิคหาดใหญ่ (1โหล)', 'NoS', 115, 0),
(29, 9001, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', 'SS', 200, 0),
(30, 9002, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', 'S', 200, 0),
(31, 9003, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', 'M', 200, 0),
(32, 9004, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', 'L', 200, 0),
(33, 9005, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', 'XL', 200, 0),
(34, 9006, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', '2XL', 200, 0),
(35, 9007, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', '3XL', 200, 0),
(36, 9008, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', '4XL', 200, 0),
(37, 9009, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', '5XL', 200, 0),
(38, 9010, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว(ชาย)    ', '6XL', 200, 0),
(39, 9101, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', 'S', 200, 0),
(40, 9102, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', 'M', 200, 0),
(41, 9103, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', 'L', 200, 0),
(42, 9104, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', 'XL', 200, 0),
(43, 9105, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', '2XL', 200, 0),
(44, 9106, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', '3XL', 200, 0),
(45, 9107, 'เสื้อนักเรียนสีขาว แขนสั้น/แขนยาว (หญิง)    ', '4XL', 200, 0),
(46, 10001, 'กางเกงขายาว สีกรม    (เอว)', 'SS', 370, 0),
(47, 10002, 'กางเกงขายาว สีกรม    (เอว)', 'S', 370, 0),
(48, 10003, 'กางเกงขายาว สีกรม    (เอว)', 'M', 370, 0),
(49, 10004, 'กางเกงขายาว สีกรม    (เอว)', 'L', 370, 0),
(50, 10005, 'กางเกงขายาว สีกรม    (เอว)', 'XL', 370, 0),
(51, 10006, 'กางเกงขายาว สีกรม    (เอว)', '2XL', 370, 0),
(52, 10007, 'กางเกงขายาว สีกรม    (เอว)', '3XL', 370, 0),
(53, 10008, 'กางเกงขายาว สีกรม    (เอว)', '4XL', 370, 0),
(54, 10009, 'กางเกงขายาว สีกรม    (เอว)', '5XL', 370, 0),
(55, 10010, 'กางเกงขายาว สีกรม    (เอว)', '6XL', 370, 0),
(56, 11001, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '37', 350, 0),
(57, 11002, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '38', 350, 0),
(58, 11003, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '39', 350, 0),
(59, 11004, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '40', 350, 0),
(60, 11005, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '41', 350, 0),
(61, 11006, 'รองเท้าผ้าใบสีเเดง      (เบอร์) ', '42', 350, 0),
(62, 11007, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '43', 350, 0),
(63, 11008, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '44', 350, 0),
(64, 11009, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '45', 350, 0),
(65, 11010, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '46', 350, 0),
(66, 11011, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '47', 350, 0),
(67, 11012, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '48', 350, 0),
(68, 11013, 'รองเท้าผ้าใบสีดำ       (เบอร์) ', '49', 350, 0),
(69, 12001, 'ถุงเท้า (5 คู่)', 'NoS', 100, 0),
(70, 13001, 'กระโปรง สีกรม (เอว)\r\n\r\n', 'SS', 280, 0),
(71, 13002, 'กระโปรง สีกรม (เอว)', 'S', 280, 0),
(72, 13003, 'กระโปรง สีกรม (เอว)', 'M', 280, 0),
(73, 13004, 'กระโปรง สีกรม (เอว)', 'L', 280, 0),
(74, 13005, 'กระโปรง สีกรม (เอว)', 'XL', 280, 0),
(75, 13006, 'กระโปรง สีกรม (เอว)', '2XL', 280, 0),
(76, 13007, 'กระโปรง สีกรม (เอว)', '3XL', 280, 0),
(77, 13008, 'กระโปรง สีกรม (เอว)', '4XL', 280, 0),
(78, 13009, 'กระโปรง สีกรม (เอว)', '5XL', 280, 0),
(79, 13010, 'กระโปรง สีกรม (เอว)', '6XL', 280, 0),
(80, 14001, 'กระโปรง สีดำ (เอว)', 'SS', 280, 0),
(81, 14002, 'กระโปรง สีดำ (เอว)', 'S', 280, 0),
(82, 14003, 'กระโปรง สีดำ (เอว)', 'M', 280, 0),
(83, 14004, 'กระโปรง สีดำ (เอว)', 'L', 280, 0),
(84, 14005, 'กระโปรง สีดำ (เอว)', 'XL', 280, 0),
(85, 14006, 'กระโปรง สีดำ (เอว)', '2XL', 280, 0),
(86, 14007, 'กระโปรง สีดำ (เอว)', '3XL', 280, 0),
(87, 14008, 'กระโปรง สีดำ (เอว)', '4XL', 280, 0),
(88, 14009, 'กระโปรง สีดำ (เอว)', '5XL', 280, 0),
(89, 14010, 'กระโปรง สีดำ (เอว)', '6XL', 280, 0),
(90, 15001, 'กางเกงขายาว สีดำ (เอว)', 'SS', 280, 0),
(91, 15002, 'กางเกงขายาว สีดำ (เอว)', 'S', 280, 0),
(92, 15003, 'กางเกงขายาว สีดำ (เอว)', 'M', 280, 0),
(93, 15004, 'กางเกงขายาว สีดำ (เอว)', 'L', 280, 0),
(94, 15005, 'กางเกงขายาว สีดำ (เอว)', 'XL', 280, 0),
(95, 15006, 'กางเกงขายาว สีดำ (เอว)', '2XL', 280, 0),
(96, 15007, 'กางเกงขายาว สีดำ (เอว)', '3XL', 280, 0),
(97, 15008, 'กางเกงขายาว สีดำ (เอว)', '4XL', 280, 0),
(98, 15009, 'กางเกงขายาว สีดำ (เอว)', '5XL', 280, 0),
(99, 15010, 'กางเกงขายาว สีดำ (เอว)', '5XL', 280, 0),
(100, 17001, 'ตะไบ', 'NoS', 90, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hvoc`
--

CREATE TABLE `hvoc` (
  `id` int(255) NOT NULL,
  `hvoc_id` int(20) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `group` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hvoc`
--

INSERT INTO `hvoc` (`id`, `hvoc_id`, `branch_name`, `group`) VALUES
(1, 0, 'xxxxxx', 'xx'),
(2, 2001, 'เทคนิคยายนต์', 'C'),
(3, 2002, 'เทคนิคยายนต์ไฟฟ้า', 'C'),
(4, 2003, 'เครื่องมือกล', 'C'),
(5, 2004, 'เทคโนโลยีงานเชื่อมโครงสร้างโลหะ', 'C'),
(6, 2005, 'ไฟฟ้ากำลัง', 'C'),
(7, 2006, 'ไฟฟ้าควบคุม', 'C'),
(8, 2007, 'อิเล็กทรอนิกส์อุตสาหกรรม', 'C'),
(9, 2008, 'เทคโนโลยีระบบโทรคมนาคม', 'C'),
(10, 2009, 'คอมพิวเตอร์ระบบเครือข่าย', 'C'),
(11, 2010, 'เมคคคาทรอนิกส์และหุ่นยนต์', 'C'),
(12, 2011, 'ก่อสร้าง', 'C'),
(13, 2012, 'งานเฟอร์นิเจอร์และตกแต่งภายใน', 'C'),
(14, 2013, 'สำรวจ', 'C'),
(15, 2014, 'เทคโนโลยีปิโตรเลียม', 'D'),
(16, 2015, 'เทคโนโลยีหลุมเจาะปิโตรเลียม', 'D'),
(17, 2016, 'โยธา', 'C'),
(18, 2017, 'นักพัฒนาซอฟแวร์คอมพิวเตอร์', 'C'),
(19, 2018, 'นักพัฒนาคอมพิวเตอร์กราฟฟิกส์เกมและแอนิเมชัน', 'C'),
(20, 2019, 'เทคนิคสถาปัตยกรรม', 'C'),
(21, 2020, 'เครื่องทำความเย็นและปรับอากาศ', 'C'),
(22, 2021, 'อิเล็กทรอนิกส์การแพทย์', 'C'),
(23, 2022, 'เทคนิคพลังงานทดแทน', 'C'),
(24, 2023, 'เทคนิคควบคุมและซ่อมบำรุงระบบขนส่งทางราง', 'C'),
(25, 2024, 'การจัดการโลจิสติกส์และซับพลายเชน', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `student_id` varchar(12) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL COMMENT 'วันที่',
  `date_order` date DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `size1` int(11) DEFAULT NULL COMMENT 'เสื้อช็อป(ขนาด)',
  `quantity1` int(11) DEFAULT NULL COMMENT 'เสื้อช็อป(จำนวน)',
  `size2` int(11) DEFAULT NULL COMMENT 'คอกลม(ขนาด)',
  `quantity2` int(11) DEFAULT NULL COMMENT 'คอกลม(จำนวน)',
  `size3` int(11) DEFAULT NULL COMMENT 'เสื้อพละ(ขนาด)',
  `quantity3` int(11) DEFAULT NULL COMMENT 'เสื้อพละ(จำนวน)',
  `size4` int(11) DEFAULT NULL COMMENT 'กางเกงพละ(ขนาด)',
  `quantity4` int(11) DEFAULT NULL COMMENT 'กางเกงพละ(จำนวน)',
  `size5` int(11) DEFAULT NULL COMMENT 'เข็มขัดและหัวเข็มขัด(ขนาด)',
  `quantity5` int(11) DEFAULT NULL COMMENT 'เข็มขัดและหัวเข็มขัด(จำนวน)',
  `size6` int(11) DEFAULT NULL COMMENT 'เน็คไทและเข็ม',
  `quantity6` int(11) DEFAULT NULL COMMENT 'เน็คไทและเข็ม',
  `size7` int(11) DEFAULT NULL COMMENT 'กระเป๋าเป้วิทยาลัยเทคนิคหาดใหญ่',
  `quantity7` int(11) DEFAULT NULL COMMENT 'กระเป๋าเป้',
  `size8` int(11) DEFAULT NULL COMMENT 'สมุดตราวิทยาลัยเทคนิคหาดใหญ่',
  `quantity8` int(11) DEFAULT NULL COMMENT 'สมุด',
  `size9` int(11) DEFAULT NULL COMMENT 'เสื้อนักเรียน(ขนาด)',
  `quantity9` int(11) DEFAULT NULL COMMENT 'เสื้อนักเรียน(จำนวน)',
  `size10` int(11) DEFAULT NULL COMMENT 'กางเกงขายาว(ขนาด)',
  `quantity10` int(11) DEFAULT NULL COMMENT 'กางเกงขายาว(จำนวน)',
  `size11` int(11) DEFAULT NULL COMMENT 'รองเท้าผ้าใบสีดำ(ขนาด)',
  `quantity11` int(11) DEFAULT NULL COMMENT 'รองเท้าผ้าใบสีดำ(จำนวน)',
  `size12` int(11) DEFAULT NULL COMMENT 'ถุงเท้า',
  `quantity12` int(11) DEFAULT NULL COMMENT 'ถุงเท้า(จำนวน)',
  `size13` int(255) DEFAULT NULL,
  `quantity13` int(255) DEFAULT NULL,
  `sizef` int(11) DEFAULT NULL,
  `quantityf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `student_id`, `date`, `date_order`, `date_payment`, `size1`, `quantity1`, `size2`, `quantity2`, `size3`, `quantity3`, `size4`, `quantity4`, `size5`, `quantity5`, `size6`, `quantity6`, `size7`, `quantity7`, `size8`, `quantity8`, `size9`, `quantity9`, `size10`, `quantity10`, `size11`, `quantity11`, `size12`, `quantity12`, `size13`, `quantity13`, `sizef`, `quantityf`) VALUES
(240, '2001', 'วันอังคาร ที่ 20 กุมภาพันธ์ 2567', '2024-02-20', '2024-02-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5001, 1, 6001, 1, 7001, 1, 8001, 1, 9001, 4, 15001, 1, 11001, 1, 12001, 1, NULL, NULL, 14007, 2),
(241, '2002', 'วันอังคาร ที่ 20 กุมภาพันธ์ 2567', '2024-02-20', '2024-02-20', 1001, 1, NULL, NULL, NULL, NULL, NULL, NULL, 5001, 1, 6001, 1, 7001, 1, 8001, 1, 0, 0, 0, 0, 0, 0, 12001, 0, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `tel`, `email`) VALUES
(136, 'AllOWOVER', 'PCa452547', 'พีรธัช ชูสวัสดิ์', '0992592029', 'arnkung554@gmail.com'),
(138, 'kzazaza', 'kzazaza', 'ka', '023146', 'lion20256@gmail.com'),
(139, 'arn', '1234', 'peeratach choosawat', '0992592029', 'arnkung1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voc`
--

CREATE TABLE `voc` (
  `id` int(255) NOT NULL,
  `branch_id` int(20) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `voc`
--

INSERT INTO `voc` (`id`, `branch_id`, `branch_name`, `group`) VALUES
(1, 0, 'xxxx', 'xx'),
(2, 1001, 'ช่างยนต์', 'A'),
(3, 1002, 'ช่างจักรยานยนต์และเครื่องยนต์เล็กอเนกประสงค์', 'A'),
(4, 1003, 'ช่างกลโรงงาน', 'A'),
(5, 1004, 'ช่างเชื่อมโลหะ', 'A'),
(6, 1005, 'ช่างไฟฟ้ากำลัง', 'A'),
(7, 1006, 'ช่างอิเล็กทรอนิกส์', 'A'),
(8, 1007, 'ช่างเทคนิคคอมพิวเตอร์', 'B'),
(9, 1008, 'ช่างเมคคาทรอนิกส์', 'B'),
(10, 1009, 'ช่างก่อสร้าง', 'B'),
(11, 1010, 'โยธา', 'B'),
(12, 1011, 'สำรวจ', 'B'),
(13, 1012, 'เครื่องทำความเย็น', 'B'),
(14, 1013, 'ช่างเครื่องเรือนและตกแต่งภายใน', 'B'),
(15, 1014, 'ช่างเทคนิกสถาปัตยกรรม', 'B'),
(16, 1015, 'เทคโนโลยีสารสนเทศ', 'B'),
(17, 1016, 'โลจิสติกส์', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_list`
--
ALTER TABLE `equipment_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hvoc`
--
ALTER TABLE `hvoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voc`
--
ALTER TABLE `voc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `equipment_list`
--
ALTER TABLE `equipment_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `hvoc`
--
ALTER TABLE `hvoc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `voc`
--
ALTER TABLE `voc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
