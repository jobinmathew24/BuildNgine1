-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 09:55 PM
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
-- Table structure for table `memory_tbl`
--

CREATE TABLE `memory_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `size` int(10) NOT NULL,
  `form_factor` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `ssd_type` varchar(10) NOT NULL,
  `rpm` int(8) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memory_tbl`
--

INSERT INTO `memory_tbl` (`name`, `company`, `size`, `form_factor`, `type`, `ssd_type`, `rpm`, `price`, `pic`, `status`) VALUES
('HYPERX A400', 'HYPERX', 120, '\"2.5', 'SSD', '3D V-NAND', 0, '2900', 'HYPERX A400.jpg', 1),
('HYPERX FURY S44', 'HYPERX', 240, '\"2.5', 'SSD', '3D V-NAND', 0, '5000', 'HYPERX FURY S44.jpg', 1),
('SAMSUNG 860 DCT', 'Samsung', 2000, '\"2.5', 'SSD', '3D V-NAND', 0, '30000', 'SAMSUNG 860 DCT.jpg', 1),
('SAMSUNG 860 EVO', 'Samsung', 500, '\"2.5', 'SSD', '3D V-NAND', 0, '6800', 'SAMSUNG 860 EVO.jpg', 1),
('SAMSUNG 920 DCT', 'Samsung', 2000, '\"2.5', 'SSD', '3D V-NAND', 0, '30000', 'SAMSUNG 920 DCT.jpg', 1),
('SEAGATE ST2000DM006', 'SEAGATE', 2000, '\"3.5', 'HDD', 'nil', 7200, '4000', 'SEAGATE ST2000DM006.jpg', 1),
('SEAGATE ST3000DM006', 'SEAGATE', 3000, '\"3.5', 'HDD', 'nil', 7200, '6400', 'SEAGATE ST3000DM006.jpg', 1),
('SEAGATE ST500DM009', 'SEAGATE', 500, '\"3.5', 'HDD', 'nil', 7200, '4500', 'SEAGATE ST500DM009.jpg', 1),
('WD BLACK DWS500', 'Western Digital', 500, 'M.2', 'SSD', '3D V-NAND', 0, '11000', 'WD BLACK DWS500.png', 1),
('WD BLUE DWS1000', 'Western Digital', 1000, '\"2.5', 'SSD', 'TLC', 0, '15000', 'WD BLUE DWS1000.png', 1),
('WD BLUE DWS1000M', 'Western Digital', 1000, 'M.2', 'SSD', '3D V-NAND', 0, '10000', 'WD BLUE DWS1000M.jpg', 1),
('WD BLUE WD10EZEX', 'Western Digital', 1000, '\"3.5', 'HDD', 'nil', 7200, '4900', 'WD BLUE WD10EZEX.jpg', 1),
('WD BLUE WD5000AZRZ', 'Western Digital', 500, '\"3.5', 'HDD', 'nil', 5400, '2400', 'WD BLUE WD5000AZRZ.jpg', 1),
('WD GREEN DWS120', 'Western Digital', 120, '\"2.5', 'SSD', 'TLC', 0, '2400', 'WD GREEN DWS120.jpg', 1),
('WD GREEN DWS240', 'Western Digital', 240, 'M.2', 'SSD', '3D V-NAND', 0, '2900', 'WD GREEN DWS240.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memory_tbl`
--
ALTER TABLE `memory_tbl`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
