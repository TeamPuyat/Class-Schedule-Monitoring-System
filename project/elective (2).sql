-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 02:05 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elective`
--

-- --------------------------------------------------------

--
-- Table structure for table `day_table`
--

CREATE TABLE IF NOT EXISTS `day_table` (
  `Day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_table`
--

INSERT INTO `day_table` (`Day`) VALUES
('Friday'),
('Monday'),
('Saturday'),
('Thursday'),
('Tuesday'),
('Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `dept_table`
--

CREATE TABLE IF NOT EXISTS `dept_table` (
  `Dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_table`
--

INSERT INTO `dept_table` (`Dept`) VALUES
('CE'),
('CPE'),
('ECE'),
('EE'),
('IE'),
('ME');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_table`
--

CREATE TABLE IF NOT EXISTS `instructor_table` (
  `Instructor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_table`
--

INSERT INTO `instructor_table` (`Instructor`) VALUES
('ENGR BARLOS'),
('ENGR CASTRO'),
('ENGR CERIBO'),
('ENGR MANZANERO'),
('ENGR OBMERGA'),
('ENGR PAVINO');

-- --------------------------------------------------------

--
-- Table structure for table `level_table`
--

CREATE TABLE IF NOT EXISTS `level_table` (
  `Level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_table`
--

INSERT INTO `level_table` (`Level`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `Level` int(10) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`Level`, `Username`, `Password`) VALUES
(1, 'admin', '1234'),
(2, 'teacher', '1234'),
(3, 'student', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room_table`
--

CREATE TABLE IF NOT EXISTS `room_table` (
  `Room` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_table`
--

INSERT INTO `room_table` (`Room`) VALUES
('201'),
('202'),
('203'),
('204'),
('205'),
('206'),
('207'),
('208'),
('209'),
('210'),
('211'),
('212'),
('213'),
('214'),
('215'),
('216'),
('301'),
('302'),
('303'),
('304');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_table`
--

CREATE TABLE IF NOT EXISTS `schedule_table` (
  `Day` varchar(50) NOT NULL,
  `Room` varchar(100) NOT NULL,
  `Time_start` int(11) NOT NULL,
  `Time_end` int(11) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `Instructor` varchar(100) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Subject_code` varchar(50) NOT NULL,
  `Year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_table`
--

INSERT INTO `schedule_table` (`Day`, `Room`, `Time_start`, `Time_end`, `Section`, `Instructor`, `Dept`, `Subject_code`, `Year`) VALUES
('Monday', '201', 73000, 103000, 'GC', 'ENGR CERIBO', 'ECE', 'RES01', 'FOURTH YEAR'),
('Tuesday', '201', 73000, 103000, 'GC', 'ENGR MANZANERO', 'CE', 'RES01', 'FIFTH YEAR'),
('Wednesday', '201', 90000, 103000, 'GB', 'ENGR CERIBO', 'ME', 'RES01', 'SECOND YEAR'),
('Wednesday', '201', 73000, 83000, 'GC', 'ENGR MANZANERO', 'CPE', 'RES01', 'SECOND YEAR'),
('Thursday', '201', 80000, 90000, 'GD', 'ENGR MANZANERO', 'CPE', 'RES01', 'FOURTH YEAR'),
('Friday', '201', 80000, 110000, 'GB', 'ENGR MANZANERO', 'EE', 'RES01', 'SECOND YEAR'),
('Thursday', '201', 93000, 113000, 'GB', 'ENGR BARLOS', 'IE', 'RES01', 'FIRST YEAR'),
('Saturday', '201', 100000, 130000, 'GC', 'ENGR CERIBO', 'ECE', 'RES01', 'FIRST YEAR'),
('Monday', '201', 110000, 130000, 'GB', 'ENGR CERIBO', 'CPE', 'RES01', 'FIRST YEAR'),
('Monday', '201', 130000, 143000, 'GC', 'ENGR CASTRO', 'CE', 'RES01', 'FIRST YEAR'),
('Monday', '202', 73000, 90000, 'GB', 'ENGR CASTRO', 'CPE', 'RES01', 'SECOND YEAR'),
('Monday', '203', 73000, 103000, 'GB', 'ENGR CERIBO', 'CPE', 'RES01', 'FOURTH YEAR'),
('Monday', '204', 110000, 123000, 'GD', 'ENGR CASTRO', 'CPE', 'RES01', 'FIRST YEAR'),
('Monday', '204', 73000, 103000, 'GC', 'ENGR MANZANERO', 'ECE', 'RES01', 'FOURTH YEAR'),
('Monday', '201', 143000, 173000, 'GD', 'ENGR MANZANERO', 'ECE', 'RES01', 'FIRST YEAR'),
('Monday', '202', 93000, 103000, 'GB', 'ENGR BARLOS', 'CPE', 'RES01', 'FOURTH YEAR'),
('Monday', '303', 73000, 90000, 'GD', 'ENGR CERIBO', 'ECE', 'RES01', 'FOURTH YEAR'),
('Monday', '303', 93000, 110000, 'GF', 'ENGR CASTRO', 'ECE', 'RES01', 'FIRST YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

CREATE TABLE IF NOT EXISTS `section_table` (
  `Section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_table`
--

INSERT INTO `section_table` (`Section`) VALUES
('GA'),
('GB'),
('GC'),
('GD'),
('GE'),
('GF'),
('GG'),
('GH'),
('GI'),
('GJ'),
('GK');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE IF NOT EXISTS `subject_table` (
  `Subject_code` varchar(50) NOT NULL,
  `Subject_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`Subject_code`, `Subject_desc`) VALUES
('RES01', 'RESEARCH');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`Time`) VALUES
(73000),
(80000),
(83000),
(90000),
(93000),
(100000),
(103000),
(110000),
(113000),
(120000),
(123000),
(130000),
(133000),
(140000),
(143000),
(150000),
(153000),
(160000),
(163000),
(170000),
(173000),
(180000),
(183000),
(190000),
(193000),
(200000),
(203000),
(210000),
(213000);

-- --------------------------------------------------------

--
-- Table structure for table `year_table`
--

CREATE TABLE IF NOT EXISTS `year_table` (
  `Year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_table`
--

INSERT INTO `year_table` (`Year`) VALUES
('FIFTH YEAR'),
('FIRST YEAR'),
('FOURTH YEAR'),
('SECOND YEAR'),
('THIRD YEAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day_table`
--
ALTER TABLE `day_table`
 ADD PRIMARY KEY (`Day`);

--
-- Indexes for table `dept_table`
--
ALTER TABLE `dept_table`
 ADD PRIMARY KEY (`Dept`);

--
-- Indexes for table `instructor_table`
--
ALTER TABLE `instructor_table`
 ADD PRIMARY KEY (`Instructor`);

--
-- Indexes for table `level_table`
--
ALTER TABLE `level_table`
 ADD PRIMARY KEY (`Level`);

--
-- Indexes for table `room_table`
--
ALTER TABLE `room_table`
 ADD PRIMARY KEY (`Room`);

--
-- Indexes for table `section_table`
--
ALTER TABLE `section_table`
 ADD PRIMARY KEY (`Section`);

--
-- Indexes for table `subject_table`
--
ALTER TABLE `subject_table`
 ADD PRIMARY KEY (`Subject_code`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
 ADD PRIMARY KEY (`Time`);

--
-- Indexes for table `year_table`
--
ALTER TABLE `year_table`
 ADD PRIMARY KEY (`Year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
