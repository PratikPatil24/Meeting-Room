-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 04:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall_details`
--

CREATE TABLE `hall_details` (
  `hall_id` varchar(10) NOT NULL,
  `hall_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `by_id` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_details`
--

INSERT INTO `hall_details` (`hall_id`, `hall_name`, `date`, `time`, `by_id`, `status`) VALUES
('123', 'IT', '2014-12-12', '12:00:00', 'C2k1510', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `reservedhall`
--

CREATE TABLE `reservedhall` (
  `id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `hall_id` varchar(20) NOT NULL,
  `seminardate` date NOT NULL,
  `time` time NOT NULL,
  `req` text NOT NULL,
  `description` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservedhall`
--

INSERT INTO `reservedhall` (`id`, `name`, `email`, `phone`, `hall_id`, `seminardate`, `time`, `req`, `description`, `status`) VALUES
('CD', 'Rushikesh Karad', 'a@gmail.com', '4654654654', 'A103', '2018-02-12', '00:12:00', 'Nothing', 'Nothinh=g', 'Rejected'),
('C2K15104967``', 'Rushikesh', 'karad.rush@gmail.com', '4567891230', 'C203', '2018-03-29', '14:12:00', 'Nothing', 'Nothing', 'Pending'),
('C2K15104966', 'Vikas Gacche', 'vikas@gmail.com', '9422942887', 'C203', '2018-02-08', '00:12:00', 'Nothing', 'Nothing', 'Reserved'),
('C2K15104967', 'Rushikesh', 'a@gmail.com', '1234567890', 'C203', '2018-03-06', '00:22:00', 'wdd', 'qwdd', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `std_form`
--

CREATE TABLE `std_form` (
  `Id` int(11) NOT NULL,
  `Room` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_form`
--

INSERT INTO `std_form` (`Id`, `Room`, `Date`, `Time`, `Status`) VALUES
(1, 'A102', '2018-02-02', '12:12:00', 'reserved'),
(2, 'A103', '2018-02-03', '12:45:00', 'empty'),
(3, 'A152', '2018-02-05', '10:12:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `ID` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `division` varchar(10) NOT NULL,
  `roll_no` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`ID`, `name`, `email`, `contact`, `password`, `branch`, `division`, `roll_no`) VALUES
('C2K15104966', 'Vikas Gacche', 'vicks8cool@gmail.com', '9503294676', 'qwerty', 'COMP', 'TE1', 3141),
('C2K15104967', 'Rushikesh Karad', 'karad.rushikesh5@gmail.com', '8237104734', 'qwerty', 'COMP', 'TE2', 3239);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `ID` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`ID`, `name`, `email`, `contact`, `password`, `branch`) VALUES
('T2K12345678', 'Prof. A. Jewalikar', 'jewalikar@gmail.com', '9856231478', 'teacher', 'COMP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
