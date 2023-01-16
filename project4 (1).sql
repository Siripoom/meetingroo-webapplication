-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 02:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `room` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` enum('รออนุมัติ','อนุมัติ','ไม่อนุมัติ') NOT NULL,
  `member` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department` enum('ช่างยนต์','เครื่องมือกล','เขียนแบบเครื่องกล','เชื่อมโลหะ','ไฟฟ้ากำลัง','อิเล็กทรอนิกส์','ก่อสร้าง','สถาปัตยกรรม','การบัญชี','การตลาด','การเลขานุการ','คอมพิวเตอร์ธุรกิจ','ธุรกิจค้าปลีก','วิจิตรศิลป์','ออกแบบ','ศิลปกรรมเซรามิก','คอมพิวเตอร์กราฟิก','ออกแบบเสื้อผ้า','อาหารและโภชนาการ','คหกรรม','การโรงแรม','วิชาสามัญ') NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `email` varchar(100) NOT NULL,
  `line` varchar(100) NOT NULL,
  `tell` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `username`, `password`, `firstname`, `lastname`, `department`, `role`, `email`, `line`, `tell`) VALUES
(5, 'admin', 'admin', 'admin', 'admin', 'คอมพิวเตอร์ธุรกิจ', 'admin', 'admin@gmail.com', '', ''),
(6, 'user', '123456', 'w', 'w', 'ศิลปกรรมเซรามิก', 'user', 'admin@gmail.com', '', ''),
(7, 'เมษา', '12345678', 'เมษา', 'หกเห้ำห่้หะพ่หพ', 'คอมพิวเตอร์ธุรกิจ', 'user', 'maysazaza123@gmail.com', '', ''),
(8, 'เมษา', '1234567', 'เำไเฟำไเฟไเ', 'ฟไเฟเฟเ', 'ศิลปกรรมเซรามิก', 'user', 'maysazaza123@gmail.com', '', ''),
(9, 'testaaaaaa', '123456', 'admin', 'admin', 'ก่อสร้าง', 'user', 'test@gmail.com', '', ''),
(10, 'testg', '123456', 'เกมมาแล้ว', 'ครับผม', 'คอมพิวเตอร์ธุรกิจ', 'user', 'zzzzz@gmail.com', '', ''),
(11, 'somchai', '1234567', 'สิริภูมิ', 'admin', 'คอมพิวเตอร์กราฟิก', 'user', 'jame@gmail.com', '', ''),
(12, 'siripoom', '123456', 'Siripoom', 'Arthornsirirat', 'คอมพิวเตอร์ธุรกิจ', 'user', 'admin@gmail.com', '12345678', '0922723450');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member` (`member`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
