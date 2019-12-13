-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 03:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_syllabus`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `sid` int(11) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `ssem` int(2) NOT NULL,
  `scredit` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `scode`, `sname`, `ssem`, `scredit`) VALUES
(1, 's1', 'web programming', 1, 4),
(2, 's2', 'algorithm', 1, 5),
(3, 's3', 'dbms', 1, 4),
(5, 's5', 'networking', 5, 5),
(16, 's4', 'soft computing', 3, 5),
(18, 's11', 'c++', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `sem` int(3) NOT NULL,
  `p1` varchar(40) DEFAULT NULL,
  `p2` varchar(40) DEFAULT NULL,
  `p3` varchar(40) DEFAULT NULL,
  `p4` varchar(40) DEFAULT NULL,
  `p5` varchar(40) DEFAULT NULL,
  `p6` varchar(40) DEFAULT NULL,
  `p7` varchar(40) DEFAULT NULL,
  `p8` varchar(40) DEFAULT NULL,
  `p9` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`sem`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`) VALUES
(1, 'Programming and Problem Solving', 'IT & Management', 'Digital And Computer Organization', 'Foundation Of Logic', 'Shell Programming', 'C_LAB', 'DCO_LAB', NULL, NULL),
(3, 'Operating System', 'DBMS', 'Soft Computing', 'Analysis of Algorithm', 'Object Based  Modeling', 'OS_LAB', 'DBMS_LAB', 'WEB_PROGRAMMING_LAB', 'Algo_LAB'),
(5, 'E Commerce', 'Professional Ethics', 'Data Warehouse and Mininng', 'Software Project Management', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `tid` varchar(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tsubject` varchar(20) NOT NULL,
  `tsem` int(1) NOT NULL,
  `description` varchar(200) NOT NULL,
  `temail` varchar(30) DEFAULT NULL,
  `tmobile` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `tname`, `tsubject`, `tsem`, `description`, `temail`, `tmobile`) VALUES
('t22', 'mohit', 'web technology', 5, 'phd in web tech', 'abc@mail.com', '8604828396'),
('t23', 'naman pradhan', 'operating system', 3, 'iit se phd hai farzi', 'gaurav@gmail.com', '8604828396'),
('t3', 'ramesh kumar', 'operating system', 1, 'phd from mnnit', ' ramesh@gmail.com', '1235779778'),
('t4', 'gaurav mishra', 'fol', 1, 'pdh from iit delhi', 'rr47061@gmail.com', '13456799'),
('t8', 'deepak kumar', 'python', 3, 'mtech', 'rnskjksj@gmail.com', '8604828396');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`sem`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
