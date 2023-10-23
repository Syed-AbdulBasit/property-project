-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 01:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin1`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` int(30) NOT NULL,
  `Cat_Name` varchar(30) CHARACTER SET ascii NOT NULL,
  `Cat_Details` varchar(30) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Details`) VALUES
(8, 'Test Cat 1', 'For Testing 1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(30) NOT NULL,
  `Name` varchar(22) CHARACTER SET ascii NOT NULL,
  `Email` varchar(22) CHARACTER SET ascii NOT NULL,
  `Subject` varchar(22) CHARACTER SET ascii NOT NULL,
  `Message` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Ali Hassan', 'halihassan97@gmail.com', 'ww', 'wwwww'),
(2, 'Ali Hassan', 'halihassan97@gmail.com', 'd', 'w'),
(3, 'Ali Hassan', 'halihassan97@gmail.com', 'Dentest', 'AAAA'),
(4, 'Ali Hassan', 'halihassan97@gmail.com', 'Test Record', 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `ID` int(30) NOT NULL,
  `Name` varchar(30) CHARACTER SET ascii NOT NULL,
  `Details` varchar(30) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ID`, `Name`, `Details`) VALUES
(3, 'Skin', 'Skin Dep'),
(4, 'Skincare Edit', 'Skin Department');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `ID` int(30) NOT NULL,
  `Name` varchar(22) NOT NULL,
  `Email` varchar(22) NOT NULL,
  `Phone` varchar(22) NOT NULL,
  `DoB` varchar(22) NOT NULL,
  `Department` varchar(22) NOT NULL,
  `Services` varchar(22) NOT NULL,
  `Portfolio` varchar(22) NOT NULL,
  `CV` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`ID`, `Name`, `Email`, `Phone`, `DoB`, `Department`, `Services`, `Portfolio`, `CV`) VALUES
(11, 'Ali Hassan', 'halihassan97@gmail.com', '03017433416', '2022-02-17', 'Skin', 'Test Cat 1', 'sa', '81.jpg'),
(19, 'Ali Hassan', 'halihassan97@gmail.com', '03017433416', '3', 'Skin', 'Test Cat 1', 'asdf', 'New.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(30) NOT NULL,
  `U_Name` varchar(30) CHARACTER SET ascii NOT NULL,
  `U_Email` varchar(30) NOT NULL,
  `U_Username` varchar(30) CHARACTER SET ascii NOT NULL,
  `U_Password` varchar(30) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `U_Name`, `U_Email`, `U_Username`, `U_Password`) VALUES
(1, 'Ali Hassan', 'halihassan97@gmail.com', 'aaaassasddddd', 'dddddddsds'),
(2, 'Ali', 'halihassan97@gmail.com', 'alihassan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
