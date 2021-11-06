-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 01:19 PM
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
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

-- --------------------------------------------------------

--
-- Table structure for table `cms_area`
--

CREATE TABLE `cms_area` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `CMS_NAME` varchar(20) DEFAULT NULL,
  `CMS_CODE` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_area`
--

INSERT INTO `cms_area` (`ID`, `STUDENT_ID`, `CMS_NAME`, `CMS_CODE`) VALUES
('0edf1', '10203', 'default', ''),
('4f9fa', 'CA19022', 'default', '323232'),
('5b560', 'AA', 'default', '000000'),
('5c1fc', 'CA19022', 'default', '323232'),
('647d6', 'CA19022', 'default', '323232'),
('7c39d', 'CA19022', 'default', '323232'),
('85aed', 'CA19022', 'default', '323232'),
('8f8db', '1003', 'default', '044030'),
('9a6f2', 'CA19022', 'default', '323232'),
('9c958', 'CA19022', 'default', '323232'),
('a71cf', '2086', 'default', '000004'),
('b0b45', '', 'default', '01234'),
('b8e48', '354', 'default', '00000'),
('c18cc', '10203', 'default', ''),
('c3799', '234234', 'default', '00000'),
('c4ae2', 'CD19033', 'default', '234323'),
('ce5d8', '22222', 'default', '00000'),
('d186b', 'CB19011', 'default', '333333'),
('d5644', '', 'default', '00000'),
('de98f', '10203', 'default', ''),
('e291d', '10203', 'default', ''),
('e8fe6', '1002', 'default', '021013'),
('eb7ca', '10203', 'default', ''),
('eec93', '10054', 'default', '042034');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `CO_NAME` varchar(32) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `CITY` varchar(32) DEFAULT NULL,
  `POSTAL_CODE` varchar(10) DEFAULT NULL,
  `COUNTRY` varchar(32) DEFAULT NULL,
  `C_FIRST_NAME` varchar(20) DEFAULT NULL,
  `C_LAST_NAME` varchar(20) DEFAULT NULL,
  `C_POSITION` varchar(32) DEFAULT NULL,
  `TELEPHONE` varchar(14) DEFAULT NULL,
  `EMAIL` varchar(32) DEFAULT NULL,
  `FAX` varchar(14) DEFAULT NULL,
  `FACULTY_ID` varchar(14) DEFAULT NULL,
  `NOTES` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`ID`, `CO_NAME`, `ADDRESS`, `CITY`, `POSTAL_CODE`, `COUNTRY`, `C_FIRST_NAME`, `C_LAST_NAME`, `C_POSITION`, `TELEPHONE`, `EMAIL`, `FAX`, `FACULTY_ID`, `NOTES`) VALUES
('5003', 'Apple Inc', '1 Infinity loop', 'Palo Alto', '2345', 'India', 'John', 'Chen', 'HR-Manager', '495-3311', 'sergio@UOW.ca', '98759789', '102238', 'Dont disturb me, pls'),
('5004', 'HP', 'Wall Street, New York', 'New York', '234234', 'USA', 'Janine', 'Labrune', 'HR-Manager', '98746354', 'labrune@hr.hp.com', '654655', '102236', 'Be prepared'),
('5011', 'Intel', 'Phase 3, Free Industrial Zone', 'Bayan Lepas', '11900', 'Malaysia', 'Robert', 'Smith', 'HR Manager', '6046422222', 'robertsmith@intel.com', '6046435200', '102241', 'Get ready!'),
('5013', 'Dell', '2900, Persiaran Apec', 'Cyberjaya', '63000', 'Malaysia', 'Michael', 'Philips', 'HR Manager', '0398763322', 'michaelp@dell.com', '60378904411', '102243', 'Get ready!');

-- --------------------------------------------------------

--
-- Table structure for table `edu_training`
--

CREATE TABLE `edu_training` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `DEGREE` varchar(50) DEFAULT NULL,
  `MAJOR` varchar(50) DEFAULT NULL,
  `GPA` varchar(7) DEFAULT NULL,
  `UNIVERSITY` varchar(50) DEFAULT NULL,
  `COUNTRY` char(50) DEFAULT NULL,
  `DURATION` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edu_training`
--

INSERT INTO `edu_training` (`ID`, `STUDENT_ID`, `DEGREE`, `MAJOR`, `GPA`, `UNIVERSITY`, `COUNTRY`, `DURATION`) VALUES
('0dfe0', '10203', 'Undergraduate degree ', 'Computer Science', '8.5', 'UOW', 'Canada', '12months'),
('4f9fa', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('5b560', 'AA', 'A', 'A', 'A', 'A', 'A', 'A'),
('5c1fc', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('647d6', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('7c39d', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('85aed', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('8f8db', '1003', 'Under Graduate', 'Natural Sciences', '7.8', 'University of Windsor', 'Canada', '24 months'),
('9a6f2', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('9c958', 'CA19022', 'Computer Science', 'Networking', '4.00', 'UMP', 'Malaysia', '48 Months'),
('a71cf', '2086', 'UGC', 'Computer Science', '7.5', 'FIEM', 'India', '48months'),
('c4ae2', 'CD19033', 'Computer Science', 'Multimedia', '4.00', 'UMP', 'Malaysia', '48 Months'),
('d186b', 'CB19011', 'Computer Science', 'Software Engineering', '4.00', 'UMP', 'Malaysia', '48 Months'),
('e8fe6', '1002', 'Under Graduate', 'Computer Science', '8.8', 'University of New York', 'USA', '12 months'),
('eec93', '10054', 'Graduate', 'Computer Science', '8.3', 'University Of Windsor', 'Canada', '24 Months');

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
('102239', 'David', 'Cox', 'Senior Lecturer', 'Computer Science', '496-6382', '617', '6876545', 'davidcox@seas.harvard.edu'),
('102241', 'Jannah', 'binti Jamil', 'Professor', 'Computer Science', '093344567', '60', '0192837465', 'jannah@ump.my'),
('102243', 'Hanif', 'bin Hashim', 'Professor', 'Computer Science', '095556798', '60', '0192838888', 'hanif@ump.my'),
('102245', 'Kiranjit', 'A/P Kaur', 'Professor', 'Computer Science', '093334684', '60', '0193874651', 'kiranjit@ump.my');

-- --------------------------------------------------------

--
-- Table structure for table `fac_db`
--

CREATE TABLE `fac_db` (
  `fac_id` varchar(14) NOT NULL DEFAULT '',
  `faculty_id` varchar(14) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  `responsibilities` varchar(50) DEFAULT NULL
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
-- Table structure for table `internship_loc`
--

CREATE TABLE `internship_loc` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `LOC_NAME` varchar(20) DEFAULT NULL,
  `LOC_CODE` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_loc`
--

INSERT INTO `internship_loc` (`ID`, `STUDENT_ID`, `LOC_NAME`, `LOC_CODE`) VALUES
('5b560', 'AA', 'default', '000000000'),
('7c39d', 'CA19022', 'default', '000000000'),
('8f8db', '1003', 'default', '110021021'),
('a71cf', '2086', 'default', '222222222'),
('c4ae2', 'CD19033', 'default', '000000000'),
('d186b', 'CB19011', 'default', '000000000'),
('e8fe6', '1002', 'default', '111000122'),
('eb7ca', '10203', 'default', '112222200'),
('eec93', '10054', 'default', '120121002');

-- --------------------------------------------------------

--
-- Table structure for table `job_db`
--

CREATE TABLE `job_db` (
  `job_id` varchar(14) NOT NULL DEFAULT '',
  `company_id` varchar(14) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL,
  `description` varchar(64) DEFAULT NULL,
  `responsibilities` varchar(50) DEFAULT NULL,
  `requirements` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_db`
--

INSERT INTO `job_db` (`job_id`, `company_id`, `position`, `description`, `responsibilities`, `requirements`) VALUES
('5475', '5004', '55', 'Project Manager', 'C programming', 'good english speaking'),
('5987', '5003', '105', 'Senior Programmer', 'Trainee', 'Java, Web languages '),
('8979', '5004', '50', 'Asst Manager', 'Managing Product End', 'MAC, HR Minor'),
('9077', '5011', '5', 'Internship', 'Intern', 'C, C++, Java'),
('9088', '5013', '5', 'Internship', 'Intern', 'C, PHP, HTML, JavaScript'),
('9099', '5003', '5', 'Internship', 'Intern', 'Graphic Design, Phyton'),
('9199', '5004', '5', 'Internship', 'Intern', 'Networking, Ruby');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_skill`
--

CREATE TABLE `knowledge_skill` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `LANG` varchar(20) DEFAULT NULL,
  `OPT_CODE` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge_skill`
--

INSERT INTO `knowledge_skill` (`ID`, `STUDENT_ID`, `LANG`, `OPT_CODE`) VALUES
('4f9fa', 'CA19022', '', '3333224411311323323222'),
('5b560', 'AA', '', '0000000000000000000000'),
('5c1fc', 'CA19022', '', '3333224411311323323222'),
('647d6', 'CA19022', '', '3333224411311323323222'),
('7c39d', 'CA19022', '', '3333224411311323323222'),
('85aed', 'CA19022', '', '3333224411311323323222'),
('8f8db', '1003', '', '0200403020020324422044'),
('9a6f2', 'CA19022', '', '3333224411311323323222'),
('9c958', 'CA19022', '', '3333224411311323323222'),
('a71cf', '2086', '', '0420003121300313003002'),
('c4ae2', 'CD19033', '', '4323423423423423432342'),
('d186b', 'CB19011', '', '4234232343232443342332'),
('e8fe6', '1002', '', '0122222244410100000040'),
('eec93', '10054', '', '0032203430240430040430');

-- --------------------------------------------------------

--
-- Table structure for table `lang_english`
--

CREATE TABLE `lang_english` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `READ_CODE` varchar(1) DEFAULT NULL,
  `WRITE_CODE` varchar(1) DEFAULT NULL,
  `SPEAK_CODE` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang_english`
--

INSERT INTO `lang_english` (`STUDENT_ID`, `READ_CODE`, `WRITE_CODE`, `SPEAK_CODE`) VALUES
('1002', '3', '4', '3'),
('1003', '4', '4', '4'),
('10054', '4', '4', '4'),
('10203', '', '', ''),
('2086', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `lang_french`
--

CREATE TABLE `lang_french` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `READ_CODE` varchar(1) DEFAULT NULL,
  `WRITE_CODE` varchar(1) DEFAULT NULL,
  `SPEAK_CODE` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lang_french`
--

INSERT INTO `lang_french` (`STUDENT_ID`, `READ_CODE`, `WRITE_CODE`, `SPEAK_CODE`) VALUES
('1002', '3', '3', '2'),
('1003', '3', '3', '2'),
('10054', '4', '3', '2'),
('10203', '', '', ''),
('2086', '0', '0', '0'),
('AA', '0', '0', '0'),
('CA19022', '3', '0', '0'),
('CB19011', '0', '0', '0'),
('CD19033', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lang_other`
--

CREATE TABLE `lang_other` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `READ_CODE` varchar(1) DEFAULT NULL,
  `WRITE_CODE` varchar(1) DEFAULT NULL,
  `SPEAK_CODE` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE `os` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `OS_NAME` varchar(32) DEFAULT NULL,
  `OS_CODE` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`ID`, `STUDENT_ID`, `OS_NAME`, `OS_CODE`) VALUES
('4f9fa', 'CA19022', 'default', '32203322332'),
('5b560', 'AA', 'default', '00000000000'),
('5c1fc', 'CA19022', 'default', '32203322332'),
('647d6', 'CA19022', 'default', '32203322332'),
('7c39d', 'CA19022', 'default', '32203322332'),
('7d2af', '10203', 'default', ''),
('85aed', 'CA19022', 'default', '32203322332'),
('8f8db', '1003', 'default', '02442300204'),
('9a6f2', 'CA19022', 'default', '32203322332'),
('9c958', 'CA19022', 'default', '32203322332'),
('a71cf', '2086', 'default', '10004024100'),
('b0b45', '', 'default', '00000000000'),
('b8e48', '354', 'default', '00000000000'),
('c18cc', '10203', 'default', ''),
('c3799', '234234', 'default', '00000000000'),
('c4ae2', 'CD19033', 'default', '43434343434'),
('ce5d8', '22222', 'default', '00000000000'),
('d186b', 'CB19011', 'default', '33342324233'),
('d5644', '', 'default', '00000000000'),
('de98f', '10203', 'default', ''),
('e291d', '10203', 'default', ''),
('e8fe6', '1002', 'default', '23002031040'),
('eb7ca', '10203', 'default', ''),
('eec93', '10054', 'default', '23432040240');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_allot`
--

CREATE TABLE `presentation_allot` (
  `student_id` varchar(14) NOT NULL DEFAULT '',
  `presentation_id` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation_allot`
--

INSERT INTO `presentation_allot` (`student_id`, `presentation_id`) VALUES
('CB19011', '10011'),
('CA19022', '20022'),
('CD19033', '30033');

-- --------------------------------------------------------

--
-- Table structure for table `presentation_db`
--

CREATE TABLE `presentation_db` (
  `presentation_id` varchar(14) NOT NULL DEFAULT '',
  `department` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `advisor` varchar(50) DEFAULT NULL
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
-- Table structure for table `project_allot`
--

CREATE TABLE `project_allot` (
  `student_id` varchar(14) NOT NULL DEFAULT '',
  `project_id` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_db`
--

CREATE TABLE `project_db` (
  `project_id` varchar(14) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `advisor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_db`
--

INSERT INTO `project_db` (`project_id`, `title`, `description`, `advisor`) VALUES
('6541', 'Ticket Management Portal', 'Buy Ticket Online', 'Yiling Chen'),
('6731', 'Online Examination Portal', 'take exam online', 'Bernard Pearson'),
('849', 'Online Chat System', 'Chat System', 'David Cox');

-- --------------------------------------------------------

--
-- Table structure for table `special_area`
--

CREATE TABLE `special_area` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `SPECIAL_CODE` varchar(12) DEFAULT NULL,
  `INTEREST_CODE` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_area`
--

INSERT INTO `special_area` (`STUDENT_ID`, `SPECIAL_CODE`, `INTEREST_CODE`) VALUES
('1002', '101200233440', '024032323243'),
('1003', '414444001044', '210201420004'),
('10054', '202230140402', '204224240420'),
('10203', '', ''),
('2086', '433113333224', '444444444444'),
('AA', '000000000000', '000000000000'),
('CA19022', '233232444422', '233232444422'),
('CB19011', '243434324232', '233232432443'),
('CD19033', '434442323142', '434442323142');

-- --------------------------------------------------------

--
-- Table structure for table `statusf_db`
--

CREATE TABLE `statusf_db` (
  `prospectf_id` varchar(14) NOT NULL DEFAULT '',
  `student_id` varchar(14) DEFAULT NULL,
  `fac_id` varchar(14) DEFAULT NULL,
  `status` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusf_db`
--

INSERT INTO `statusf_db` (`prospectf_id`, `student_id`, `fac_id`, `status`) VALUES
('15236', 'CB19011', '2205', 'Assign'),
('325e2', 'CD19033', '2206', 'Assign'),
('717f1', 'CA19022', '2204', 'Assign'),
('st001', '1002', '2201', 'Assign'),
('st002', '1003', '2202', 'Assign'),
('st003', '10054', '2203', 'Assign');

-- --------------------------------------------------------

--
-- Table structure for table `status_db`
--

CREATE TABLE `status_db` (
  `prospect_id` varchar(14) NOT NULL DEFAULT '',
  `student_id` varchar(14) DEFAULT NULL,
  `job_id` varchar(14) DEFAULT NULL,
  `status` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_db`
--

INSERT INTO `status_db` (`prospect_id`, `student_id`, `job_id`, `status`) VALUES
('0a847', '1002', '8979', 'Rejected'),
('56b82', 'CD19033', '9099', 'Rejected'),
('58b5d', '10054', '5987', 'Hired'),
('5ed88', 'CB19011', '9088', 'Hired'),
('95a8a', '10054', '5475', 'Rejected'),
('c6eae', '1003', '5987', 'Hired'),
('d2a44', '1003', '8979', 'Hired'),
('dff95', '1003', '5475', 'Hired'),
('eb3e4', 'CA19022', '9077', 'Hired');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `STUDENT_ID` varchar(14) NOT NULL DEFAULT '',
  `FIRST_NAME` char(50) DEFAULT NULL,
  `MIDDLE_NAME` char(50) DEFAULT NULL,
  `LAST_NAME` char(50) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEPHONE` varchar(11) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `SEM_REG` varchar(50) DEFAULT NULL,
  `COURSE` varchar(50) DEFAULT NULL,
  `STATUS_FSV` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`STUDENT_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `EMAIL`, `TELEPHONE`, `STATUS`, `SEM_REG`, `COURSE`, `STATUS_FSV`) VALUES
('1002', 'Ana', '', 'Trujillo', 'trujillo@gmail.com', '798745855', 'Rejected', 'Fall 2013', 'Software Engineering', 'Assign'),
('1003', 'Sven', '', 'Ottlieb', 'Ottlieb@uow.ca', '760969875', 'Undecided', 'Summer 2011', 'Networking', 'Not Assign'),
('10054', 'Peter', 'Pedro', 'Franken', 'Franken@uow.ca', '987687005', 'Hired', 'Spring 2013', 'Multimedia', 'Not Assign'),
('CA19022', 'Karina', '', 'bt Ahmad', 'CA19022@std.ump.my', '6012345666', 'Hired', 'Sem 8', 'Networking', 'Assign'),
('CB19011', 'Aiman', '', 'b Abdul', 'CB19011@std.ump.my', '6012345678', 'Hired', 'Sem 8', 'Software Engineering', 'Assign'),
('CD19033', 'Mustaqim', '', 'b Muzafar', 'CD19033@std.ump.my', '6012345777', 'Rejected', 'Sem 8', 'Multimedia', 'Assign');

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

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `STUDENT_ID` varchar(14) DEFAULT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `START_DATE` varchar(12) DEFAULT NULL,
  `END_DATE` varchar(12) DEFAULT NULL,
  `TITLE` char(30) DEFAULT NULL,
  `DUTIES` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`ID`, `STUDENT_ID`, `COMPANY_NAME`, `START_DATE`, `END_DATE`, `TITLE`, `DUTIES`) VALUES
('0dfe0', '10203', 'Google', '12/1/2014', '-', 'Pragrammer', 'Coding'),
('4f9fa', 'CA19022', '-', '-', '-', '-', '-'),
('5b560', 'AA', 'A', 'A', 'A', 'AA', 'A'),
('5c1fc', 'CA19022', '-', '-', '-', '-', '-'),
('647d6', 'CA19022', '-', '-', '-', '-', '-'),
('7c39d', 'CA19022', '-', '-', '-', '-', '-'),
('85aed', 'CA19022', '-', '-', '-', '-', '-'),
('8f8db', '1003', 'Philips', '2013', '-', 'Data Mining Scientist', 'Data Mining and Analyst'),
('9a6f2', 'CA19022', '-', '-', '-', '-', '-'),
('9c958', 'CA19022', '-', '-', '-', '-', '-'),
('a71cf', '2086', 'Google', '5-5-2015', '-', 'Project Manager', 'Coding'),
('c4ae2', 'CD19033', '-', '-', '-', '-', '-'),
('d186b', 'CB19011', '-', '-', '-', '-', '-'),
('e8fe6', '1002', 'Samsung', '12-4-2014', '12-5-2014', 'Programming', 'Coding'),
('eec93', '10054', 'EA Games', '20-2-2014', '15-5-2014', 'Programmer', 'Coding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `cms_area`
--
ALTER TABLE `cms_area`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `edu_training`
--
ALTER TABLE `edu_training`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty_detail`
--
ALTER TABLE `faculty_detail`
  ADD PRIMARY KEY (`FACULTY_ID`);

--
-- Indexes for table `fac_db`
--
ALTER TABLE `fac_db`
  ADD PRIMARY KEY (`fac_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `internship_loc`
--
ALTER TABLE `internship_loc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `job_db`
--
ALTER TABLE `job_db`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `knowledge_skill`
--
ALTER TABLE `knowledge_skill`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lang_english`
--
ALTER TABLE `lang_english`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `lang_french`
--
ALTER TABLE `lang_french`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `lang_other`
--
ALTER TABLE `lang_other`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `presentation_allot`
--
ALTER TABLE `presentation_allot`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `presentation_id` (`presentation_id`);

--
-- Indexes for table `presentation_db`
--
ALTER TABLE `presentation_db`
  ADD PRIMARY KEY (`presentation_id`);

--
-- Indexes for table `project_allot`
--
ALTER TABLE `project_allot`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_db`
--
ALTER TABLE `project_db`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `special_area`
--
ALTER TABLE `special_area`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `statusf_db`
--
ALTER TABLE `statusf_db`
  ADD PRIMARY KEY (`prospectf_id`),
  ADD KEY `fac_id` (`fac_id`);

--
-- Indexes for table `status_db`
--
ALTER TABLE `status_db`
  ADD PRIMARY KEY (`prospect_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`STUDENT_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fac_db`
--
ALTER TABLE `fac_db`
  ADD CONSTRAINT `fac_db_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty_detail` (`FACULTY_ID`);

--
-- Constraints for table `job_db`
--
ALTER TABLE `job_db`
  ADD CONSTRAINT `job_db_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company_details` (`ID`);

--
-- Constraints for table `presentation_allot`
--
ALTER TABLE `presentation_allot`
  ADD CONSTRAINT `presentation_allot_ibfk_1` FOREIGN KEY (`presentation_id`) REFERENCES `presentation_db` (`presentation_id`);

--
-- Constraints for table `project_allot`
--
ALTER TABLE `project_allot`
  ADD CONSTRAINT `project_allot_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_db` (`project_id`);

--
-- Constraints for table `statusf_db`
--
ALTER TABLE `statusf_db`
  ADD CONSTRAINT `statusf_db_ibfk_1` FOREIGN KEY (`fac_id`) REFERENCES `fac_db` (`fac_id`);

--
-- Constraints for table `status_db`
--
ALTER TABLE `status_db`
  ADD CONSTRAINT `status_db_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_db` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
