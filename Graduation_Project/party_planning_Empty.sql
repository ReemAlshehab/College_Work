-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `party_planning`
--
CREATE DATABASE IF NOT EXISTS `party_planning` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `party_planning`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Phone` int(10) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Phone`, `Admin_Email`, `password`) VALUES
(1, 'Admin', 557455213, 'Admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `completedoccasion`
--

CREATE TABLE `completedoccasion` (
  `COccasion_ID` int(11) NOT NULL,
  `Occasion_Price` int(11) NOT NULL,
  `Occasion_Date` date NOT NULL,
  `Occasion_Location` varchar(50) NOT NULL,
  `Customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_Phone` int(10) NOT NULL,
  `Customer_Email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_ID` int(11) NOT NULL,
  `payment_information` text NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `requestedoccasion`
--

CREATE TABLE `requestedoccasion` (
  `ROccasion_ID` int(11) NOT NULL,
  `Occasion_Type` varchar(50) NOT NULL,
  `Seats_No` int(11) NOT NULL,
  `Cake_flavor` varchar(50) NOT NULL,
  `Clown` tinyint(1) NOT NULL,
  `Theme_color` varchar(20) NOT NULL,
  `Occasion_Date` date NOT NULL,
  `Occasion_price` int(11) NOT NULL,
  `Occasion_Location` varchar(50) NOT NULL,
  `Customer_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `completedoccasion`
--
ALTER TABLE `completedoccasion`
  ADD PRIMARY KEY (`COccasion_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_ID`);

--
-- Indexes for table `requestedoccasion`
--
ALTER TABLE `requestedoccasion`
  ADD PRIMARY KEY (`ROccasion_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `completedoccasion`
--
ALTER TABLE `completedoccasion`
  MODIFY `COccasion_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requestedoccasion`
--
ALTER TABLE `requestedoccasion`
  MODIFY `ROccasion_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
