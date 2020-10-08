-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 09:13 AM
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
-- Table structure for table `cpu_tbl`
--

CREATE TABLE `cpu_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `core_count` int(10) NOT NULL,
  `thread_count` int(10) NOT NULL,
  `socket` varchar(25) NOT NULL,
  `frequency` int(10) NOT NULL,
  `turboboost` varchar(20) NOT NULL,
  `igpu` varchar(25) NOT NULL,
  `lithography` varchar(20) NOT NULL,
  `cache` int(10) NOT NULL,
  `tdp` int(10) NOT NULL,
  `max_temp` int(10) NOT NULL,
  `purpose` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu_tbl`
--

INSERT INTO `cpu_tbl` (`name`, `company`, `core_count`, `thread_count`, `socket`, `frequency`, `turboboost`, `igpu`, `lithography`, `cache`, `tdp`, `max_temp`, `purpose`, `price`, `pic`, `status`) VALUES
('AMD 200GE', 'AMD', 2, 4, 'AM4', 3200, '3200 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 95, 'BUSINESS', '5700', 'AMD 200GE.jpg', 1),
('AMD 220GE', 'AMD', 2, 4, 'AM4', 3400, '3400 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 105, 'BUSINESS', '6100', 'AMD 220GE.jpg', 1),
('AMD 240GE', 'AMD', 2, 4, 'AM4', 3500, '3500 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 105, 'BUSINESS', '6500', 'AMD 240GE.jpg', 1),
('AMD A10-9700', 'AMD', 4, 4, 'AM4', 3500, '3800 Mhz', 'AMD Radeon R7', '28nm', 320, 65, 90, 'BUSINESS', '6000', 'AMD A10-9700.jpg', 1),
('AMD A10-9700E', 'AMD', 4, 4, 'AM4', 3000, '3500 Mhz', 'AMD Radeon R7', '28nm', 320, 35, 90, 'BUSINESS', '5600', 'AMD A10-9700E.jpg', 1),
('AMD A10-9800E', 'AMD', 4, 4, 'AM4', 3100, '3800 Mhz', 'AMD Radeon R7', '28nm', 320, 35, 90, 'BUSINESS', '7200', 'AMD A10-9800E.jpg', 1),
('AMD A4-7300', 'AMD', 2, 2, 'FM2+', 3800, '4000 Mhz', 'AMD Radeon R5', '28 nm', 96, 65, 70, 'BUSINESS', '2800', 'AMD A4-7300.jpg', 1),
('AMD A6-7400K', 'AMD', 2, 2, 'FM2+', 3500, '3900 Mhz', 'AMD Radeon R5', '28 nm', 128, 65, 70, 'BUSINESS', '3500', 'AMD A6-7400K.jpg', 1),
('AMD A6-7480', 'AMD', 2, 2, 'FM2+', 3500, '3800 Mhz', 'AMD Radeon R5', '28 nm', 128, 65, 70, 'BUSINESS', '3000', 'AMD A6-7480.jpg', 1),
('AMD A6-9400', 'AMD', 2, 2, 'AM4', 3500, '3700', 'AMD Radeon R5', '28 nm', 160, 65, 90, 'BUSINESS', '2800', 'AMD A6-9400.jpg', 1),
('AMD A6-9500', 'AMD', 2, 2, 'AM4', 3500, '3800 Mhz', 'AMD Radeon R5', '28nm', 160, 65, 90, 'BUSINESS', '5000', 'AMD A6-9500.jpg', 1),
('AMD A6-9500E', 'AMD', 2, 2, 'AM4', 3000, '3400 Mhz', 'AMD Radeon R5', '28 nm', 160, 35, 90, 'BUSINESS', '5000', 'AMD A6-9500E.jpg', 1),
('AMD A8-9600', 'AMD', 4, 4, 'AM4', 3100, '3400 Mhz', 'AMD Radeon R7', '28nm', 320, 65, 90, 'BUSINESS', '4800', 'AMD A8-9600.jpg', 1),
('AMD ATHLON 840', 'AMD', 4, 4, 'FM2+', 3100, '3800 Mhz', 'None', '28nm', 256, 65, 72, 'BUSINESS', '4400', 'AMD ATHLON 840.jpg', 1),
('AMD ATHLON 845', 'AMD', 4, 4, 'FM2+', 3500, '3800 Mhz', 'None', '28nm', 320, 65, 72, 'BUSINESS', '4600', 'AMD ATHLON 845.jpg', 1),
('AMD ATHLON 860K', 'AMD', 4, 4, 'FM2+', 3700, '4000 Mhz', 'None', '28nm', 256, 95, 72, 'BUSINESS', '5500', 'AMD ATHLON 860K.jpg', 1),
('AMD ATHLON 870K', 'AMD', 4, 4, 'FM2+', 3900, '4100 Mhz', 'None', '28nm', 256, 95, 72, 'BUSINESS', '5000', 'AMD ATHLON 870K.jpg', 1),
('AMD ATHLON X4 950', 'AMD', 4, 4, 'AM4', 3500, '3800 Mhz', 'None', '28nm', 320, 65, 72, 'BUSINESS', '5700', 'AMD ATHLON X4 950.jpg', 1),
('AMD FX-4300', 'AMD', 4, 4, 'AM3+', 3800, '4000 Mhz', 'None', '32nm', 198, 95, 70, 'BUSINESS', '5300', 'AMD FX-4300.jpg', 1),
('AMD FX-4320', 'AMD', 4, 4, 'AM3+', 4000, '4100 Mhz', 'None', '32nm', 198, 95, 70, 'BUSINESS', '5800', 'AMD FX-4320.jpg', 1),
('AMD FX-4350', 'AMD', 4, 4, 'AM3+', 4200, '4300 Mhz', 'None', '32nm', 192, 95, 70, 'BUSINESS', '6100', 'AMD FX-4350.jpg', 1),
('AMD RYZEN 1200', 'AMD', 4, 4, 'AM4', 3100, '3400 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '8600', 'AMD RYZEN 1200.jpg', 1),
('AMD RYZEN 1300X', 'AMD', 4, 4, 'AM4', 3500, '3700 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '9600', 'AMD RYZEN 1300X.jpg', 1),
('AMD RYZEN 1400', 'AMD', 4, 8, 'AM4', 3200, '3400 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '10700', 'AMD RYZEN 1400.jpg', 1),
('AMD RYZEN 1500X', 'AMD', 4, 8, 'AM4', 3500, '3700 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '11000', 'AMD RYZEN 1500X.jpg', 1),
('AMD RYZEN 1600', 'AMD', 6, 12, 'AM4', 3200, '3600 Mhz', 'None', '14nm', 576, 65, 95, 'BUSINESS', '12000', 'AMD RYZEN 1600.jpg', 1),
('AMD RYZEN 1600X', 'AMD', 6, 12, 'AM4', 3600, '4000 Mhz', 'None', '14nm', 576, 95, 95, 'BUSINESS', '12700', 'AMD RYZEN 1600X.jpg', 1),
('AMD RYZEN 2200G', 'AMD', 4, 4, 'AM4', 3500, '3700 Mhz', 'AMD Radeon RX Vega', '14nm', 384, 65, 95, 'BUSINESS', '9300', 'AMD RYZEN 2200G.jpg', 1),
('AMD RYZEN 2600', 'AMD', 6, 12, 'AM4', 3400, '3900 Mhz', 'None', '12nm', 576, 65, 95, 'GAMING', '15000', 'AMD RYZEN 2600.jpg', 1),
('AMD RYZEN 2600X', 'AMD', 6, 12, 'AM4', 4000, '4200 Mhz', 'None', '12nm', 576, 95, 95, 'GAMING', '15000', 'AMD RYZEN 2600X.jpg', 1),
('AMD RYZEN 2700', 'AMD', 8, 16, 'AM4', 3200, '4100 Mhz', 'None', '12nm', 768, 65, 95, 'GAMING', '17800', 'AMD RYZEN 2700.jpg', 1),
('AMD RYZEN 2700X', 'AMD', 8, 16, 'AM4', 3700, '4300 Mhz', 'None', '12nm', 768, 105, 85, 'GAMING', '20100', 'AMD RYZEN 2700X.jpg', 1),
('AMD RYZEN 3200G', 'AMD', 4, 4, 'AM4', 3600, '4000 Mhz', 'AMD Radeon RX Vega', '14nm', 384, 65, 95, 'BUSINESS', '10000', 'AMD RYZEN 3200G.jpg', 1),
('AMD RYZEN 3400G', 'AMD', 4, 8, 'AM4', 3700, '4200 Mhz', 'None', '12nm', 384, 65, 95, 'GAMING', '15300', 'AMD RYZEN 3400G.jpg', 1),
('AMD RYZEN 3700X', 'AMD', 8, 16, 'AM4', 3600, '4400 Mhz', 'None', '7nm', 2048, 65, 75, 'GAMING', '30500', 'AMD RYZEN 3700X.jpg', 1),
('AMD RYZEN 3800X', 'AMD', 8, 16, 'AM4', 3900, '4500 Mhz', 'None', '7nm', 2048, 105, 75, 'GAMING', '31500', 'AMD RYZEN 3800X.jpg', 1),
('AMD RYZEN 3900X', 'AMD', 12, 24, 'AM4', 3800, '4600 Mhz', 'None', '7nm', 3096, 105, 100, 'GAMING', '43000', 'AMD RYZEN 3900X.jpg', 1),
('AMD RYZEN TR 1900', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'GAMING', '34000', 'AMD RYZEN TR 1900.jpg', 1),
('AMD RYZEN TR 1900X', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'GAMING', '34000', 'AMD RYZEN TR 1900X.jpg', 1),
('AMD RYZEN TR 1920X', 'AMD', 16, 32, 'TR4', 3400, '4000 Mhz', 'None', '14nm', 1152, 180, 68, 'GAMING', '50000', 'AMD RYZEN TR 1920X.jpg', 1),
('INTEL G3900', 'INTEL', 2, 2, 'LGA 1151', 2800, '2800 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '3400', 'INTEL G3900.jpg', 1),
('INTEL G3930', 'INTEL', 2, 2, 'LGA 1151', 2900, '2900 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '5500', 'INTEL G3930.jpg', 1),
('INTEL G4400', 'Intel', 2, 2, 'LGA 1151 V2', 3300, '3300 Mhz', 'Intel HD Graphics 530', '14nm', 64, 54, 100, 'BUSSINESS', '7500', 'INTEL G4400.jpg', 1),
('INTEL G4500', 'Intel', 2, 2, 'LGA 1151 V2', 3500, '3500 Mhz', 'Intel HD Graphics 530', '14nm', 64, 51, 100, 'BUSINESS', '6500', 'INTEL G4500.jpg', 1),
('INTEL G4500T', 'Intel', 2, 2, 'LGA 1151 V2', 3000, '3000', 'Intel HD Graphics 530', '14nm', 64, 35, 100, 'BUSINESS', '7500', 'INTEL G4500T.jpg', 1),
('INTEL G4520', 'Intel', 2, 2, 'LGA 1151 V2', 3600, '3600', 'Intel HD Graphics 530', '14nm', 64, 47, 100, 'BUSINESS', '6800', 'INTEL G4520.jpg', 1),
('INTEL G4900', 'INTEL', 2, 2, 'LGA 1151 V2', 3100, '3100 Mhz', 'Intel HD Graphics 610', '14nm', 128, 54, 100, 'BUSINESS', '3700', 'INTEL G4900.jpg', 1),
('INTEL G4920', 'INTEL', 2, 2, 'LGA 1151 V2', 3200, '3200 Mhz', 'Intel HD Graphics 610', '14nm', 128, 54, 100, 'BUSINESS', '5200', 'INTEL G4920.jpg', 1),
('INTEL I3-8300', 'Intel', 4, 4, 'LGA 1151 V2', 3700, '3700 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 105, 'BUSINESS', '10500', 'INTEL I3-8300.jpg', 1),
('INTEL I3-8350K', 'Intel', 4, 4, 'LGA 1151 V2', 4000, '4000 Mhz', 'Intel UHD Graphics ', '14nm', 512, 91, 105, 'BUSINESS', '13500', 'INTEL I3-8350K.jpg', 1),
('INTEL I3_8100', 'Intel', 4, 4, 'LGA 1151 V2', 3600, '3600 Mhz', 'Intel UHD Graphics ', '14nm', 256, 65, 105, 'BUSINESS', '10500', 'INTEL I3_8100.jpg', 1),
('INTEL I5-7640X', 'Intel', 4, 4, 'LGA 2066', 4000, '4200 Mhz', 'None', '14nm', 256, 112, 105, 'BUSINESS', '15000', 'INTEL I5-7640X.jpg', 1),
('INTEL I5-9400', 'Intel', 6, 6, 'LGA 1151 V2', 2900, '4100 Mhz', 'Intel UHD Graphics ', '14nm', 384, 65, 100, 'GAMING', '14000', 'INTEL I5-9400.jpg', 1),
('INTEL I5-9500', 'Intel', 6, 6, 'LGA 1151 V2', 3000, '4400 Mhz', 'Intel UHD Graphics ', '14nm', 384, 65, 100, 'GAMING', '18000', 'INTEL I5-9500.jpg', 1),
('INTEL I5-9600K', 'Intel', 6, 6, 'LGA 1151 V2', 3700, '4600 Mhz', 'Intel UHD Graphics ', '14nm', 384, 95, 100, 'GAMING', '19500', 'INTEL I5-9600K.jpg', 1),
('INTEL I7-10700', 'Intel', 8, 16, 'LGA 1151 V2', 3800, '4800 Mhz', 'Intel UHD Graphics ', '14nm', 640, 65, 75, 'GAMING', '30000', 'INTEL I7-10700.jpg', 1),
('INTEL I7-10700K', 'Intel', 8, 16, 'LGA 1151 V2', 3800, '5000 Mhz', 'Intel UHD Graphics ', '14nm', 640, 125, 90, 'GAMING', '35000', 'INTEL I7-10700K.jpg', 1),
('INTEL I7-6800K', 'Intel', 6, 12, 'LGA 2011-3', 3400, '3800 Mhz', 'None', '14nm', 384, 140, 100, 'GAMING', '26000', 'INTEL I7-6800K.jpg', 1),
('INTEL I7-7700', 'Intel', 4, 8, 'LGA 1151', 3600, '4200 Mhz', 'Intel HD Graphics 630', '14nm', 256, 65, 100, 'GAMING', '26000', 'INTEL I7-7700.jpg', 1),
('INTEL I7-7700K', 'Intel', 4, 8, 'LGA 1151', 4200, '4500 Mhz', 'Intel HD Graphics 630', '14nm', 256, 91, 100, 'GAMING', '27000', 'INTEL I7-7700K.jpg', 1),
('INTEL I7-7740X', 'Intel', 4, 8, 'LGA 2066', 4300, '4500 Mhz', 'None', '14nm', 256, 112, 100, 'GAMING', '25000', 'INTEL I7-7740X.png', 1),
('INTEL I7-8700', 'Intel', 6, 12, 'LGA 1151 V2', 3200, '4600 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '27500', 'INTEL I7-8700.jpg', 1),
('INTEL I7-9700', 'Intel', 8, 8, 'LGA 1151', 3000, '4700 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '29500', 'INTEL I7-9700.jpg', 1),
('INTEL I7-9700K', 'Intel', 8, 8, 'LGA 1151', 3600, '4900 Mhz', 'Intel UHD Graphics ', '14nm', 512, 95, 100, 'GAMING', '31000', 'INTEL I7-9700K.jpg', 1),
('INTEL I9-9900', 'Intel', 8, 16, 'LGA 1151 V2', 3100, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 65, 100, 'GAMING', '37000', 'INTEL I9-9900.jpg', 1),
('INTEL I9-9900K', 'Intel', 8, 16, 'LGA 1151 V2', 3600, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 95, 100, 'GAMING', '41500', 'INTEL I9-9900K.jpg', 1),
('INTEL XEON E-2100', 'Intel', 4, 8, 'LGA 1151 V2', 3800, '4700 Mhz', 'None', '14nm', 256, 71, 100, 'GAMING', '30000', 'INTEL XEON E-2100.jpg', 1),
('INTEL XEON E-2176G', 'Intel', 6, 12, 'LGA 1151 V2', 3700, '4700 Mhz', 'None', '14nm', 386, 80, 100, 'GAMING', '34000', 'INTEL XEON E-2176G.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`loginid`, `password`, `usertype`) VALUES
('asd', 'asd', 'admin'),
('qwe', 'qwe', 'user'),
('sada', 'asd', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `memory_tbl`
--

CREATE TABLE `memory_tbl` (
  `name` varchar(25) NOT NULL,
  `size` int(10) NOT NULL,
  `form_factor` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mothertbl`
--

CREATE TABLE `mothertbl` (
  `name` varchar(50) NOT NULL,
  `company` varchar(25) NOT NULL,
  `socket` varchar(20) NOT NULL,
  `form_factor` varchar(20) NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `max_ram` int(5) NOT NULL,
  `pcie_count` int(5) NOT NULL,
  `mb_pow` int(5) NOT NULL,
  `cpu_pow` int(5) NOT NULL,
  `chipset` varchar(20) NOT NULL,
  `ram_count` int(5) NOT NULL,
  `sata_count` int(5) NOT NULL,
  `m2_count` int(5) NOT NULL,
  `max_freq` int(10) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mothertbl`
--

INSERT INTO `mothertbl` (`name`, `company`, `socket`, `form_factor`, `ram_type`, `max_ram`, `pcie_count`, `mb_pow`, `cpu_pow`, `chipset`, `ram_count`, `sata_count`, `m2_count`, `max_freq`, `purpose`, `price`, `pic`, `status`) VALUES
('ASROCK AB350 PRO4', 'ASROCK', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B350', 4, 4, 2, 2666, 'GAMING', '8000', 'ASROCK AB350 PRO4.jpg', 1),
('ASROCK B250', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B250', 4, 4, 2, 2666, 'GAMING', '8400', 'ASROCK B250.jpg\r\n', 1),
('ASROCK B365', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2666, 'GAMING', '9800', 'ASROCK B365.jpg', 1),
('ASROCK FM2A68M', 'ASROCK', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2400, 'BUSSINESS', '2850', 'ASROOK FM2A68M.jpg\r\n', 1),
('ASROCK H110M-DGS', 'ASROCK', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '3060', 'ASROOK H110M-DGS.jpg', 1),
('ASROCK H270', 'ASROCK', 'AM4', 'ATX', 'DDR4', 32, 2, 24, 4, 'INTEL H270', 2, 4, 2, 2400, 'GAMING', '7300', 'ASROCK H270.jpg', 1),
('ASROCK H370', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '8400', 'ASROCK H370.jpg', 1),
('ASROCK H370F', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '11600', 'ASROCK H370F.jpg', 1),
('ASROCK X399', 'ASROCK', 'TR4', 'ATX', 'DDR4', 128, 4, 24, 16, 'AMD X399 ', 8, 6, 3, 4133, 'GAMING', '34500', 'ASROCK X399.jpg', 1),
('ASROCK Z390', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z390', 4, 4, 2, 4300, 'GAMING', '9700', 'ASROCK Z390.jpg\r\n', 1),
('ASUS A68HM-K', 'ASUS ', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '2920', 'ASUS A68HM-K.jpg', 1),
('ASUS B150 PRO', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B150', 4, 6, 1, 2133, 'GAMING', '5830', 'ASUS B150 PRO.jpg', 1),
('ASUS B360 MC', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'BUSINESS', '8750', 'ASUS B360 MC.jpg', 1),
('ASUS B365-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2400, 'BUSINESS', '8700', 'ASUS B365-PLUS.jpg', 1),
('ASUS EX B250-V7', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL B250', 4, 4, 0, 2400, 'GAMING', '9100', 'ASUS EX B250-V7.jpg', 1),
('ASUS EX-B360M', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H370', 2, 4, 2, 2666, 'GAMING', '8000', 'ASUS EX-B360M.jpg', 1),
('ASUS H110-PLUS', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '6600', 'ASUS H110-PLUS.jpg', 1),
('ASUS H310-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2666, 'GAMING', '8800', 'ASUS H310-PLUS.jpg\r\n', 1),
('ASUS M5A78L-M', 'ASUS', 'AM3+', 'MicroATX', 'DDR3', 16, 1, 24, 4, 'AMD 760G', 2, 4, 0, 1866, 'BUSINESS', '2920', 'ASUS M5A78L-M.jpg', 1),
('ASUS MAXIMUS IX', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL Z390', 2, 6, 2, 4700, 'GAMING', '30000', 'ASUS MAXIMUS IX.jpg', 1),
('ASUS MAXIMUS VIII', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z170', 4, 6, 2, 3800, 'GAMING', '13500', 'ASUS MAXIMUS VIII.jpg', 1),
('ASUS PRIME H310M-C', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2166, 'BUSINESS', '6600', 'ASUS PRIME H310M-C.jpg', 1),
('ASUS ROG B360-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'ASUS ROG B360-H.jpg', 1),
('ASUS ROG B450-E', 'ASUS', 'AM4', 'ATX', 'DDR4', 64, 3, 24, 8, 'AMD B450', 4, 4, 2, 3533, 'GAMING', '14150', 'ASUS ROG B450-E.jpg', 1),
('ASUS ROG STRIX H370-F', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '13100', 'ASUS ROG STRIX H370-F.jpg', 1),
('ASUS ROG Z390-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z390', 4, 4, 2, 4266, 'GAMING', '20900', 'ASUS ROG Z390-H.jpG', 1),
('ASUS TUF Z370', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z370', 4, 4, 2, 4000, 'GAMING', '13450', 'ASUS TUF Z370.jpg', 1),
('ASUS X299', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 4, 24, 16, 'INTEL X299', 8, 6, 2, 4133, 'GAMING', '46000', 'ASUS X299.jpg', 1),
('ASUS X299-XE', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 3, 24, 16, 'INTEL Z390', 8, 6, 2, 4133, 'GAMING', '40000', 'ASUS X299-XE.jpg', 1),
('ASUS X99', 'ASUS', 'LGA 2011-3', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL X99', 8, 6, 1, 2400, 'GAMING', '31000', 'ASUS X99.jpg', 1),
('GIGABYTE B450', 'GIGABYTE', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 2, 3200, 'GAMING', '10500', 'GIGABYTE B450.jpg\r\n', 1),
('GIGABYTE F2A68HM', 'GIGABYTE', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 8, 'AMD A68H', 2, 4, 0, 2400, 'BUSSINESS', '3150', 'GIGABYTE F2A68HM.JPG', 1),
('GIGABYTE H110-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 1, 2133, 'BUSINESS', '5500', 'GIGABYTE H110-D3.jpg', 1),
('GIGABYTE X399', 'GIGABYTE', 'TR4', 'ATX', 'DDR4', 128, 5, 24, 16, 'AMD X399', 8, 6, 1, 3600, 'GAMING', '44000', 'GIGABYTE X399.jpg', 1),
('GIGABYTE Z270P-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 6, 1, 3866, 'GAMING', '6900', 'GIGABYTE Z270P-D3.jpg', 1),
('GIGABYTE Z270P-D4', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 4, 2, 3866, 'GAMING', '7150', 'GIGABYTE Z270P-D4.jpg', 1),
('MSI A68HM-E33', 'MSI', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '3300', 'MSI A68HM-E33.jpg', 1),
('MSI B360GPC', 'MSI', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'MSI B360GPC.jpg', 1),
('MSI B450', 'MSI', 'AM4', 'MicroATX', 'DDR4', 64, 2, 24, 8, 'INTEL B450', 4, 4, 2, 2666, 'GAMING', '9500', 'MSI B450.png\r\n', 1),
('MSI B450 GAMING PLUS', 'MSI', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 1, 3466, 'GAMING', '10500', 'MSI B450 GAMING PLUS.png\r\n', 1),
('MSI H110M', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '2920', 'MSI H110M.jpg', 1),
('MSI H110M-R2', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 64, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2666, 'BUSINESS', '3100', 'MSI H110M-R2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `orderid` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(2) NOT NULL,
  `total` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`orderid`, `loginid`, `name`, `category`, `price`, `qty`, `total`) VALUES
(1, 'qwe', 'ASROCK B365', 'Motherboard', '9800', 1, '9800'),
(2, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(3, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(4, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(5, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(6, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(7, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(8, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(9, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000'),
(10, 'qwe', 'ASROCK AB350 PRO4', 'Motherboard', '8000', 1, '8000');

-- --------------------------------------------------------

--
-- Table structure for table `ram_tbl`
--

CREATE TABLE `ram_tbl` (
  `name` varchar(25) NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `ram_size` int(10) NOT NULL,
  `mem_freq` int(10) NOT NULL,
  `fsb` varchar(20) NOT NULL,
  `voltage` int(10) NOT NULL,
  `timing` int(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`name`, `address`, `gender`, `email`, `phone`, `loginid`, `regid`) VALUES
('jobin', 'asdf', 'M', 'jobinmathew@mca.ajce.in', '9990804990', 'qwe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpu_tbl`
--
ALTER TABLE `cpu_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `memory_tbl`
--
ALTER TABLE `memory_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `mothertbl`
--
ALTER TABLE `mothertbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `loginid` (`loginid`);

--
-- Indexes for table `ram_tbl`
--
ALTER TABLE `ram_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`regid`),
  ADD UNIQUE KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD CONSTRAINT `ordertbl_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `user_login` (`loginid`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `logintable` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
