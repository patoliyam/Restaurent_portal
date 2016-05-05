-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2016 at 04:26 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=`` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Beverages`
--

CREATE TABLE `Beverages` (
  `ID` int(10) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Price per item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Beverages`
--

INSERT INTO `Beverages` (`ID`, `Items`, `Price per item`) VALUES
(1, 'Mineral water 1L', 20),
(2, 'Green Tea', 10),
(3, 'Tea', 8),
(4, 'Coffee', 15),
(5, 'Coco Cola(600 mL)', 35),
(6, 'Tomato Soup', 70);

-- --------------------------------------------------------

--
-- Table structure for table `Breakfast`
--

CREATE TABLE `Breakfast` (
  `ID` int(10) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Price per item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Breakfast`
--

INSERT INTO `Breakfast` (`ID`, `Items`, `Price per item`) VALUES
(1, 'Aloo with Poori(4pc)', 20),
(2, 'Chole Bathura(2 pc)', 30),
(3, 'Bread Omellete', 30),
(4, 'Paneer Parantha', 20),
(5, 'Fried Rice', 20),
(6, 'Poha', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `S.No` int(11) NOT NULL,
  `Customer_name` varchar(255) NOT NULL,
  `Total` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`S.No`, `Customer_name`, `Total`, `Date`) VALUES
(1, 'Shubz', 80, '2016-02-06 14:34:50'),
(2, 'Shubham', 120, '2016-02-06 15:12:57'),
(3, 'G', 400, '2016-02-06 15:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `Dinner`
--

CREATE TABLE `Dinner` (
  `ID` int(10) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Price per item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dinner`
--

INSERT INTO `Dinner` (`ID`, `Items`, `Price per item`) VALUES
(1, 'Dal Makhni', 70),
(2, 'Kathi Roll', 60),
(3, 'Kadhi Pakora', 65),
(4, 'Dum Aloo', 70),
(5, 'Mushroom', 85),
(6, 'Shahi Paneer', 85);

-- --------------------------------------------------------

--
-- Table structure for table `Lunch`
--

CREATE TABLE `Lunch` (
  `ID` int(10) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Price per item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Lunch`
--

INSERT INTO `Lunch` (`ID`, `Items`, `Price per item`) VALUES
(1, 'Mix Veg', 60),
(2, 'Fried Dal', 75),
(3, 'Chole', 70),
(4, 'Chicken Masala', 80),
(5, 'Dal Makhni', 70),
(6, 'Shahi Paneer', 85);

-- --------------------------------------------------------

--
-- Table structure for table `Snacks`
--

CREATE TABLE `Snacks` (
  `ID` int(10) NOT NULL,
  `Items` varchar(255) NOT NULL,
  `Price per item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Snacks`
--

INSERT INTO `Snacks` (`ID`, `Items`, `Price per item`) VALUES
(1, 'Maggi', 15),
(2, 'Chowmein', 20),
(3, 'Egg Chowmein', 25),
(4, 'Momos(4 pc)', 20),
(5, 'Veg cheese Roll', 30),
(6, 'French Fries', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Beverages`
--
ALTER TABLE `Beverages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Breakfast`
--
ALTER TABLE `Breakfast`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `Dinner`
--
ALTER TABLE `Dinner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Lunch`
--
ALTER TABLE `Lunch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Snacks`
--
ALTER TABLE `Snacks`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Beverages`
--
ALTER TABLE `Beverages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Breakfast`
--
ALTER TABLE `Breakfast`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Dinner`
--
ALTER TABLE `Dinner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Lunch`
--
ALTER TABLE `Lunch`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Snacks`
--
ALTER TABLE `Snacks`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
