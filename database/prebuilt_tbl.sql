-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 05:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulid`
--

-- --------------------------------------------------------

--
-- Table structure for table `prebuilt_tbl`
--

CREATE TABLE `prebuilt_tbl` (
  `prebuilt_id` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `motherboard` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `gpu` varchar(50) NOT NULL DEFAULT 'null',
  `mem` varchar(50) NOT NULL,
  `mem_m2` varchar(50) NOT NULL DEFAULT 'null',
  `smps` varchar(50) NOT NULL,
  `cpu_fan` varchar(50) NOT NULL DEFAULT 'null',
  `cabinet` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL DEFAULT 'null',
  `apps` varchar(50) NOT NULL DEFAULT 'null',
  `display` varchar(50) NOT NULL DEFAULT 'null',
  `keyboard` varchar(50) NOT NULL DEFAULT 'null',
  `mouse` varchar(50) NOT NULL DEFAULT 'null',
  `price` decimal(10,0) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prebuilt_tbl`
--
ALTER TABLE `prebuilt_tbl`
  ADD PRIMARY KEY (`prebuilt_id`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `motherboard` (`motherboard`),
  ADD KEY `prebuilt_tbl_ibfk_3` (`ram`),
  ADD KEY `cpu` (`cpu`),
  ADD KEY `gpu` (`gpu`),
  ADD KEY `mem` (`mem`),
  ADD KEY `mem_m2` (`mem_m2`),
  ADD KEY `smps` (`smps`),
  ADD KEY `cpu_fan` (`cpu_fan`),
  ADD KEY `cabinet` (`cabinet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prebuilt_tbl`
--
ALTER TABLE `prebuilt_tbl`
  MODIFY `prebuilt_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prebuilt_tbl`
--
ALTER TABLE `prebuilt_tbl`
  ADD CONSTRAINT `prebuilt_tbl_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `logintable` (`loginid`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_10` FOREIGN KEY (`cabinet`) REFERENCES `cabinet_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_2` FOREIGN KEY (`motherboard`) REFERENCES `mothertbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_3` FOREIGN KEY (`ram`) REFERENCES `ram_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_4` FOREIGN KEY (`cpu`) REFERENCES `cpu_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_5` FOREIGN KEY (`gpu`) REFERENCES `gpu_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_6` FOREIGN KEY (`mem`) REFERENCES `memory_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_7` FOREIGN KEY (`mem_m2`) REFERENCES `memory_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_8` FOREIGN KEY (`smps`) REFERENCES `smps_tbl` (`name`),
  ADD CONSTRAINT `prebuilt_tbl_ibfk_9` FOREIGN KEY (`cpu_fan`) REFERENCES `cpu_fan_tbl` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
