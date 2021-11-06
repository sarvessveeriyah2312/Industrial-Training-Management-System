-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 12:37 PM
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
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS`announcement` (
  `announcement_id` varchar(14) NOT NULL DEFAULT '',
  `announcement_date` date DEFAULT NULL,
  `announcement_time` time DEFAULT NULL,
  `announcement_detail` varchar(500) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_date`, `announcement_time`, `announcement_detail`, `notes`) VALUES
('AN10001', '2021-05-03', '10:00:00', 'Meeting with assigned faculty supervisor', 'Student, Faculty Supervisor'),
('AN10002', '2021-05-10', '10:00:00', 'Briefing about companies for industrial training', 'Student, Faculty Supervisor'),
('AN10003', '2021-05-11', '10:00:00', 'Companies confirmation for industrial training', 'Industrial Supervisor'),
('AN10004', '2021-05-30', '08:00:00', 'Get ready with presentation', 'Student');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;