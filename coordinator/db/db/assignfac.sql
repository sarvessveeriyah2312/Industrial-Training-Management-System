-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 01:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `fac_db`
--

CREATE TABLE IF NOT EXISTS `fac_db` (
  `fac_id` varchar(14) NOT NULL DEFAULT '',
  `faculty_id` varchar(14) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  `responsibilities` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fac_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_db`
--

INSERT INTO `fac_db` (`fac_id`, `faculty_id`, `description`, `responsibilities`) VALUES
('2201', '102233', 'Faculty Supervisor', 'Manage Internship Student'),
('2202', '102236', 'Faculty Supervisor', 'Manage Internship Student'),
('2203', '102237', 'Faculty Supervisor', 'Manage Internship Student'),
('2204', '102238', 'Faculty Supervisor', 'Manage Internship Student'),
('2205', '102239', 'Faculty Supervisor', 'Manage Internship Student'),
('2206', '102241', 'Faculty Supervisor', 'Manage Internship Student'),
('2207', '102243', 'Faculty Supervisor', 'Manage Internship Student'),
('2208', '102245', 'Faculty Supervisor', 'Manage Internship Student');

-- --------------------------------------------------------

--
-- Table structure for table `statusf_db`
--

CREATE TABLE IF NOT EXISTS `statusf_db` (
  `prospectf_id` varchar(14) NOT NULL DEFAULT '',
  `student_id` varchar(14) DEFAULT NULL,
  `fac_id` varchar(14) DEFAULT NULL,
  `status` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`prospectf_id`),
  KEY `fac_id` (`fac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusf_db`
--

INSERT INTO `statusf_db` (`prospectf_id`, `student_id`, `fac_id`, `status`) VALUES
('st001', '1002', '2201', 'Assign'),
('st002', '1003', '2202', 'Assign'),
('st003', '10054', '2203', 'Assign'),
('st004', 'CA19022', '2204', 'Assign'),
('st005', 'CB19011', '2205', 'Assign'),
('st006', 'CD19033', '2206', 'Assign');

-- --------------------------------------------------------


--
-- Constraints for dumped tables
--

--
-- Constraints for table `fac_db`
--
ALTER TABLE `fac_db`
  ADD CONSTRAINT `fac_db_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_detail` (`FACULTY_ID`);

--
-- Constraints for table `statusf_db`
--
ALTER TABLE `statusf_db`
  ADD CONSTRAINT `statusf_db_ibfk_1` FOREIGN KEY (`fac_id`) REFERENCES `fac_db` (`fac_id`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;