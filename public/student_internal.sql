-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 02:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_internal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminEmail`, `adminPassword`) VALUES
(1, 'admin@admin.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(255) NOT NULL,
  `division_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`) VALUES
(1, 'marketing'),
(4, 'hotel_management');

-- --------------------------------------------------------

--
-- Table structure for table `excel_data`
--

CREATE TABLE `excel_data` (
  `Roll_no` varchar(255) NOT NULL,
  `prn_no` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `Assignment` int(255) NOT NULL,
  `class_participation` int(255) NOT NULL,
  `Case_Study` int(255) NOT NULL,
  `Surprise_Test_01` int(255) NOT NULL,
  `Converted` int(255) NOT NULL,
  `Surprise_Test_02` int(255) NOT NULL,
  `converted_surprise_test_2` int(255) NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `excel_data`
--

INSERT INTO `excel_data` (`Roll_no`, `prn_no`, `subjects`, `Assignment`, `class_participation`, `Case_Study`, `Surprise_Test_01`, `Converted`, `Surprise_Test_02`, `converted_surprise_test_2`, `Total`) VALUES
('19MCA019', 'S1062190763', 'AI', 10, 10, 20, 20, 5, 20, 5, 50);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `subject7` varchar(255) NOT NULL,
  `subject8` varchar(255) NOT NULL,
  `subject9` varchar(255) NOT NULL,
  `subject10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `year`, `school`, `branch`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`) VALUES
(3, '2', 'MITSOM', 'MBA', 'AI', 'python', 'java', 'DBMS', 'AI', 'demo_subject_6', 'demo_subject_7', 'demo_subject_8', 'demo_subject_9', 'demo_subject_10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'abc@gmail.com', '123'),
(4, 'vivekjalankar20@gmail.com', 'R2h3MTR6enox'),
(5, 'vsdfdsf@sdf.com', 'MTIz'),
(6, 'ui@test.com', 'MTIzNA=='),
(7, 'ui@test.com', 'NTQz'),
(8, 'tester@test.com', '123'),
(9, 'demo@gmail.com', '1234'),
(10, 'nikhil@gmail.com', '123'),
(11, 'test@test.com', '123'),
(12, 'karen@gmail.com', '123'),
(13, 'demo@gmail.com', '123'),
(14, 'tester@test.com', '123'),
(15, 'S1062190763', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(255) NOT NULL,
  `trisemester` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `trisemester`, `branch`, `division`) VALUES
(2, 'Trisemester 1', 'MCA', 'Division A'),
(5, 'trisemester3', 'MBA', 'Marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `excel_data`
--
ALTER TABLE `excel_data`
  ADD PRIMARY KEY (`prn_no`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `division_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
