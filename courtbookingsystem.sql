-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courtbookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `badmintoncourt`
--

CREATE TABLE `badmintoncourt` (
  `bookingID` varchar(10) NOT NULL,
  `badcourtID` varchar(10) NOT NULL,
  `badcourtName` varchar(255) NOT NULL,
  `badcourtNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badmintoncourt`
--

INSERT INTO `badmintoncourt` (`bookingID`, `badcourtID`, `badcourtName`, `badcourtNum`) VALUES
('B001', 'BC01', 'Badminton Court 01', 2),
('B002', 'BC02', 'Badminton Court 02', 2),
('B001', 'BC03', 'Court Badminton 3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `bookingID` varchar(10) NOT NULL,
  `Full name` varchar(100) NOT NULL,
  `Phone number` varchar(20) NOT NULL,
  `Duration` int(200) NOT NULL,
  `Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`bookingID`, `Full name`, `Phone number`, `Duration`, `Date`) VALUES
('B001', '', '', 0, ''),
('B002', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `futsalcourt`
--

CREATE TABLE `futsalcourt` (
  `bookingID` varchar(10) NOT NULL,
  `futcourtID` varchar(10) NOT NULL,
  `futcourtName` varchar(255) NOT NULL,
  `futcourtNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `futsalcourt`
--

INSERT INTO `futsalcourt` (`bookingID`, `futcourtID`, `futcourtName`, `futcourtNum`) VALUES
('B001', 'F01', 'Futsal Court 01', 2),
('B002', 'F02', 'Futsal Court 02', 2),
('B001', 'F03', 'Futsal Court 3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badmintoncourt`
--
ALTER TABLE `badmintoncourt`
  ADD PRIMARY KEY (`badcourtID`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `futsalcourt`
--
ALTER TABLE `futsalcourt`
  ADD PRIMARY KEY (`futcourtID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
