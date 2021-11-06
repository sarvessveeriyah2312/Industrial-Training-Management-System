-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 11:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myli`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Student_ID` varchar(11) NOT NULL,
  `Year1_gpa` decimal(19,2) NOT NULL,
  `Year2_gpa` decimal(19,2) NOT NULL,
  `Year3_gpa` decimal(19,2) NOT NULL,
  `Year4_gpa` decimal(19,2) NOT NULL,
  `Logbook_marks` decimal(19,2) NOT NULL,
  `Presentation_marks` decimal(19,2) NOT NULL,
  `CGPA` decimal(19,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Student_ID`, `Year1_gpa`, `Year2_gpa`, `Year3_gpa`, `Year4_gpa`, `Logbook_marks`, `Presentation_marks`, `CGPA`) VALUES
('CA20017', '3.56', '2.56', '3.78', '3.67', '100.00', '50.00', '3.89'),
('CB20147', '3.56', '3.00', '4.00', '4.00', '100.00', '50.00', '4.00'),
('CB20148', '3.55', '2.56', '3.55', '0.00', '100.00', '50.00', '3.89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
