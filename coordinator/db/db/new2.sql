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
-- Table structure for table `edu_training`
--

CREATE TABLE IF NOT EXISTS `edu_training` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `DEGREE` varchar(50) DEFAULT NULL,
  `MAJOR` varchar(50) DEFAULT NULL,
  `GPA` varchar(7) DEFAULT NULL,
  `UNIVERSITY` varchar(50) DEFAULT NULL,
  `COUNTRY` char(50) DEFAULT NULL,
  `DURATION` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_training`
--

INSERT INTO `edu_training` (`ID`, `STUDENT_ID`, `DEGREE`, `MAJOR`, `GPA`, `UNIVERSITY`, `COUNTRY`, `DURATION`) VALUES
('0dfe0', '10203', 'Undergraduate degree ', 'Computer Science', '8.5', 'UOW', 'Canada', '12months'),
('8f8db', '1003', 'Under Graduate', 'Natural Sciences', '7.8', 'University of Windsor', 'Canada', '24 months'),
('a71cf', '2086', 'UGC', 'Computer Science', '7.5', 'FIEM', 'India', '48months'),
('e8fe6', '1002', 'Under Graduate', 'Computer Science', '8.8', 'University of New York', 'USA', '12 months'),
('eec93', '10054', 'Graduate', 'Computer Science', '8.3', 'University Of Windsor', 'Canada', '24 Months');

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
