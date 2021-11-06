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
-- Table structure for table `presentation_allot`
--

CREATE TABLE IF NOT EXISTS `presentation_allot` (
  `student_id` varchar(14) NOT NULL DEFAULT '',
  `presentation_id` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `presentation_id` (`presentation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation_allot`
--

INSERT INTO `presentation_allot` (`student_id`, `presentation_id`) VALUES
('1002', '10011');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_db`
--

CREATE TABLE IF NOT EXISTS `presentation_db` (
  `presentation_id` varchar(14) NOT NULL DEFAULT '',
  `department` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `advisor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`presentation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation_db`
--

INSERT INTO `presentation_db` (`presentation_id`, `department`, `date`, `time`, `advisor`) VALUES
('10011', 'Software Engineering', '2021-06-02', '09:00:00', 'Yiling Chen'),
('20022', 'Networking', '2021-06-03', '10:00:00', 'Bernard Pearson'),
('30033', 'Multimedia', '2021-06-04', '11:00:00', 'David Cox');

-- --------------------------------------------------------

--
-- Constraints for table `presentation_allot`
--
ALTER TABLE `presentation_allot`
  ADD CONSTRAINT `presentation_allot_ibfk_1` FOREIGN KEY (`presentation_id`) REFERENCES `presentation_db` (`presentation_id`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
