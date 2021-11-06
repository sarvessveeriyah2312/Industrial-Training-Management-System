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
-- Table structure for table `faculty_detail`
--

CREATE TABLE `faculty_detail` (
  `FACULTY_ID` varchar(14) NOT NULL DEFAULT '',
  `FIRST_NAME` char(20) DEFAULT NULL,
  `LAST_NAME` char(20) DEFAULT NULL,
  `POSITION` varchar(50) DEFAULT NULL,
  `SCHOOL` varchar(50) DEFAULT NULL,
  `TELEPHONE` varchar(14) DEFAULT NULL,
  `EXTENSION` varchar(20) DEFAULT NULL,
  `MOBILE` varchar(14) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_detail`
--

INSERT INTO `faculty_detail` (`FACULTY_ID`, `FIRST_NAME`, `LAST_NAME`, `POSITION`, `SCHOOL`, `TELEPHONE`, `EXTENSION`, `MOBILE`, `EMAIL`) VALUES
('102233', 'Bernard', 'Pearson', 'Professor', 'Computer Science', '2456232625', '01', '9706609321', 'bernard@UOW.ca'),
('102236', 'Ryan', 'Adams', 'Assistant Professor', 'Computer Science', '495-3311', '617', '58754165', 'rpa@seas.harvard.edu'),
('102237', 'Yiling', 'Chen', 'John L. Loeb Associate Profess', 'Natural Sciences', '495-3298', '617', '654984654', 'yiling@seas.harvard.edu'),
('102238', 'Stephen', 'Chong', 'Associate Professor', 'Computer Science', '496-6382', '617', '385743515', 'chong@seas.harvard.edu'),
('102239', 'David', 'Cox', 'Senior Lecturer', 'Computer Science', '496-6382', '617', '6876545', 'davidcox@seas.harvard.edu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `telephone`, `email`, `role`) VALUES
('CB00001', 'admin', 'admin', 601456567, 'admin@admin.com', 'admin'),
('2', 'student', 'student', 0, '', 'student'),
('3', 'coordinator', 'coordinator', 0, '', 'coordinator'),
('4', 'supervisor1', 'super1', 0, '', 'FSupervisor'),
('5', 'IndustrySuper', 'industry1', 0, '', 'ISupervisor'),
('6', 'CB20146', 'cb20146', 0, '', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_detail`
--
ALTER TABLE `faculty_detail`
  ADD PRIMARY KEY (`FACULTY_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
