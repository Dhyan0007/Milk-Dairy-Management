-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(11) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('9844', 'sagar'),
('sagar', 'sagar');

-- --------------------------------------------------------

--
-- Table structure for table `dairy`
--

CREATE TABLE `dairy` (
  `dairy_id` int(11) NOT NULL,
  `dairy_name` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `authorized_person` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dairy`
--

INSERT INTO `dairy` (`dairy_id`, `dairy_name`, `location`, `authorized_person`, `email`, `contact`) VALUES
(101, 'NANDINI', 'TUMKUR', 'SAGAR', 'SAGAR666@GMAIL.COM', '9844290669'),
(102, 'KMF', 'RR NAGAR', 'SHIRISHA', 'SHIRISHA55@GMAIL.COM', '8978905678'),
(103, 'BMF', 'CHANNASANDRA', 'RAJ KUMAR', 'RAJKUMAR78@GMAIL.COM', '9008967567');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` int(11) NOT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `dairy_id`, `fname`, `address`, `contact`, `email`) VALUES
(1001, 101, 'GAGAN', 'TUMKUR', '7760800315', 'GAGAN666@GMAIL.COM'),
(1002, 101, 'ULLAS', 'No. 45,Brundavana ,near cake palace , sit backgate', '7686987634', 'ULLAS666@GMAIL.COM'),
(1003, 101, 'ronak', 'No. 145 , anugraha nilaya , near karnataka bank ,batawadi , tumkur - 572103', '9878906753', 'ronak999@gmail.com'),
(1004, 101, 'SHOAIB', 'TUMKUR', '7788669955', 'SHOAIB@GMAIL.COM'),
(1005, 101, 'GIRISH', 'GUBBI', '8789978967', 'GIRISH777@GMAIL.COM'),
(1006, 101, 'MANIKANTA', 'NITTUR', '9898786798', 'MANI55@GMAIL.COM'),
(1007, 101, 'HEMANTH', 'TUMKUR', '7898675434', 'HEMANTH33@GMAIL.COM'),
(1008, 101, 'KEMPAMMA', 'KYATHSANDRA ', '9990878979', 'KEMPU777@GMAIL.COM'),
(1009, 101, 'SUBBAKKA ', 'BATAWADI', '8790563424', 'SUBBI88@GMAIL.COM'),
(1010, 101, 'MAHALAKSHMI', 'SIT ', '7890679807', 'LAKSHMI789@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `req_id` int(11) NOT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `req_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `feed_type` varchar(20) DEFAULT NULL,
  `cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`req_id`, `dairy_id`, `f_id`, `req_date`, `qty`, `feed_type`, `cost`) VALUES
(1, 101, 1001, '2020-11-23', 2, 'corn', 2000),
(2, 101, 1005, '2020-12-08', 1, 'PADDY STRAWS', 1000),
(3, 101, 1003, '2020-12-10', 2, 'MAIZE', 500),
(4, 101, 1004, '2020-12-13', 1, 'CORN', 900);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `f_id` int(11) DEFAULT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `f_id`, `dairy_id`, `date`, `amount`) VALUES
(1, 1001, 101, '2020-12-08', 2000),
(2, 1002, 101, '2020-12-07', 500),
(3, 1006, 101, '2020-12-10', 1000),
(4, 1007, 101, '2020-12-11', 2000),
(5, 1008, 101, '2020-12-20', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `s_no` int(11) NOT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL,
  `fat` float DEFAULT NULL,
  `clr` float DEFAULT NULL,
  `snf` float DEFAULT NULL,
  `litre` float DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`s_no`, `dairy_id`, `f_id`, `date`, `time`, `fat`, `clr`, `snf`, `litre`, `rate`, `total`) VALUES
(1, 101, 1001, '2020-12-14', '15:40:00', 3, 8, 2, 25, 20, 100),
(2, 102, 1010, '2020-12-14', '12:00:00', 3, 3, 3, 23, 12, 100),
(4, 101, 1006, '2020-12-14', '17:27:55', 2, 3, 5, 20, 12, 100);

--
-- Triggers `purchase`
--
DELIMITER $$
CREATE TRIGGER `insertLogs` AFTER INSERT ON `purchase` FOR EACH ROW INSERT INTO purchase_logs VALUES(null,NEW.dairy_id,'Inserted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_logs`
--

CREATE TABLE `purchase_logs` (
  `id` int(11) NOT NULL,
  `dairy_id` int(11) NOT NULL,
  `action` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_logs`
--

INSERT INTO `purchase_logs` (`id`, `dairy_id`, `action`, `date`) VALUES
(1, 101, 'Inserted', '2020-12-14 17:57:29'),
(2, 102, 'Inserted', '2020-12-14 18:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `r_id` int(11) NOT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rate` float NOT NULL,
  `litre` float NOT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`r_id`, `dairy_id`, `f_id`, `date`, `rate`, `litre`, `amount`) VALUES
(1, 101, 1001, '2020-12-07', 40, 5, 200),
(2, 101, 1002, '2020-12-07', 40, 3, 120),
(3, 101, 1003, '2020-12-07', 40, 8, 320),
(4, 101, 1004, '2020-12-07', 40, 7, 280),
(5, 101, 1005, '2020-12-07', 40, 5, 200),
(6, 101, 1006, '2020-12-07', 40, 10, 400),
(7, 101, 1007, '2020-12-07', 40, 9, 360);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `s_no` int(11) NOT NULL,
  `dairy_id` int(11) DEFAULT NULL,
  `customer_name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `litre` float DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`s_no`, `dairy_id`, `customer_name`, `date`, `rate`, `litre`, `total`) VALUES
(1, 101, 'ramu', '2020-11-23', 40, 3, 120),
(2, 101, 'PAVAN', '2020-12-07', 45, 6, 260),
(3, 101, 'VARUN', '2020-12-07', 45, 10, 450),
(4, 101, 'RAMESH', '2020-12-07', 45, 1, 45),
(5, 101, 'RAGHU', '2020-12-07', 45, 2, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dairy`
--
ALTER TABLE `dairy`
  ADD PRIMARY KEY (`dairy_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `dairy_id` (`dairy_id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `dairy_id` (`dairy_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `dairy_id` (`dairy_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `dairy_id` (`dairy_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `purchase_logs`
--
ALTER TABLE `purchase_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `dairy_id` (`dairy_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `dairy_id` (`dairy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_logs`
--
ALTER TABLE `purchase_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmer_ibfk_1` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`);

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `feeds_ibfk_2` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`),
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`dairy_id`) REFERENCES `dairy` (`dairy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
