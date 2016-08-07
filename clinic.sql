-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 03:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkups`
--

CREATE TABLE IF NOT EXISTS `checkups` (
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
`patient_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `findings` varchar(30000) NOT NULL,
  `checkup_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE IF NOT EXISTS `clinic` (
`clinic_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`doctor_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `consultation_start` time NOT NULL,
  `consultation_end` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `clinic_id`, `name`, `specialization`, `email`, `consultation_start`, `consultation_end`) VALUES
(1, 3, 'test test', 'test', 'test@dfasdf.c', '09:00:00', '22:00:00'),
(2, 3, 'doc2 doc2', 'dentist', 'testing', '09:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`user_id` int(11) NOT NULL,
  `bloodtype` varchar(4) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `hasphysician` varchar(7) NOT NULL,
  `lastcheckup` date NOT NULL,
  `doessmoke` varchar(7) NOT NULL,
  `havehospitalized` varchar(7) NOT NULL,
  `hasreaction` varchar(7) NOT NULL,
  `takingmedication` varchar(7) NOT NULL,
  `medications` varchar(200) NOT NULL,
  `chestpains` varchar(7) NOT NULL,
  `injurysurgery` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`timestamp`, `user_id`, `bloodtype`, `height`, `weight`, `hasphysician`, `lastcheckup`, `doessmoke`, `havehospitalized`, `hasreaction`, `takingmedication`, `medications`, `chestpains`, `injurysurgery`) VALUES
('2016-08-07 00:30:35', 1, 'A+', 154, 44, 'No', '2016-03-05', 'No', 'No', 'No', 'No', 'None', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_clinic` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `is_clinic`) VALUES
(1, 'test', 'test', 0),
(3, 'clinic', 'clinic', 1),
(10, 'czarina', 'czarina', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkups`
--
ALTER TABLE `checkups`
 ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
 ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkups`
--
ALTER TABLE `checkups`
MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
