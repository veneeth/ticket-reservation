-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 02:45 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadardetails`
--

CREATE TABLE `aadardetails` (
  `AadharNumber` int(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(3) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `State` varchar(50) NOT NULL,
  `PINCode` int(10) NOT NULL,
  `EnrollmentNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadardetails`
--

INSERT INTO `aadardetails` (`AadharNumber`, `Name`, `Gender`, `Age`, `DOB`, `Address`, `Email`, `MobileNo`, `State`, `PINCode`, `EnrollmentNumber`) VALUES
(1234567890, 'balraj', 'male', 24, '10/5/1993', 'chennai', 'balraj111777@gmail.com', 9942412462, 'tamilnadu', 628704, 1234567890),
(123456, 'bal', 'male', 24, '10/5/1993', 'chennai', 'balraj111777@gmail.com', 9942412462, 'tamilnadu', 628704, 1234567890),
(123, 'bal', 'male', 24, '10/5/1993', 'chennai', 'balraj111777@gmail.com', 9566090506, 'tamilnadu', 628704, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `MobileNumber` bigint(10) NOT NULL,
  `AadarNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`MobileNumber`, `AadarNumber`) VALUES
(9942412462, 1234567890),
(9566090506, 123);

-- --------------------------------------------------------

--
-- Table structure for table `ticketrequest`
--

CREATE TABLE `ticketrequest` (
  `Id` int(4) NOT NULL,
  `AadharNum` int(15) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketrequest`
--

INSERT INTO `ticketrequest` (`Id`, `AadharNum`, `MobileNumber`, `Date`, `Status`) VALUES
(1, 1234567890, 2147483647, '2017-05-13', 'Completed'),
(2, 1234567890, 2147483647, '2017-05-13', 'Completed'),
(3, 123, 2147483647, '2017-05-13', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `traveldetails`
--

CREATE TABLE `traveldetails` (
  `Id` int(11) NOT NULL,
  `AadharNum` int(10) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Couch` varchar(50) NOT NULL,
  `Cost` int(50) NOT NULL,
  `Seat` varchar(50) NOT NULL,
  `OTP` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveldetails`
--

INSERT INTO `traveldetails` (`Id`, `AadharNum`, `MobileNumber`, `Source`, `Destination`, `Time`, `Date`, `Class`, `Couch`, `Cost`, `Seat`, `OTP`) VALUES
(1, 1234567890, '2147483647', 'Trichy', 'Coimbatore', '10 pm', '2017-05-09', 'First Class', 'Middle', 600, '4', '19082'),
(2, 123, '9566090506', 'Trichy', 'Coimbatore', '10 pm', '2017-05-16', 'First Class', 'Middle', 650, '4', '58607');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticketrequest`
--
ALTER TABLE `ticketrequest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `traveldetails`
--
ALTER TABLE `traveldetails`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticketrequest`
--
ALTER TABLE `ticketrequest`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `traveldetails`
--
ALTER TABLE `traveldetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
