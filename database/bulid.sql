-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 03:01 PM
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
-- Table structure for table `cabinet_tbl`
--

CREATE TABLE `cabinet_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `int_power` varchar(10) NOT NULL,
  `pow_sup` varchar(10) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinet_tbl`
--

INSERT INTO `cabinet_tbl` (`name`, `company`, `model`, `int_power`, `pow_sup`, `pic`, `price`, `status`) VALUES
('APPLE MAC PRO', 'Apple', 'MAC PRO', 'No', 'No', 'APPLE MAC PRO.jpg', '18000', 1),
('COOLER MASTER ELITE 350', 'Cooler Master', 'ELITE 350', 'No', 'No', 'COOLER MASTER ELITE 350.jpg', '3000', 1),
('COOLER MASTER H500M', 'Cooler Master', 'H500M', 'No', 'No', 'COOLER MASTER H500M.jpg', '15500', 1),
('COOLER MASTER H500P', 'Cooler Master', 'H500P', 'No', 'No', 'COOLER MASTER H500P.jpg', '13500', 1),
('COOLER MASTER LITE 5', 'Cooler Master', ' LITE 5', 'No', 'No', 'COOLER MASTER LITE 5.png', '6800', 1),
('COOLER MASTER MB500', 'Cooler Master', 'MB500', 'No', 'No', 'COOLER MASTER MB500.png', '6600', 1),
('COOLER MASTER MB530P', 'Cooler Master', 'MB530P', 'No', 'No', 'COOLER MASTER MB530P.jpg', '9500', 1),
('COOLER MASTER MB600L', 'Cooler Master', 'MB600L', 'No', 'No', 'COOLER MASTER MB600L.jpg', '4600', 1),
('COOLER MASTER SL600M', 'Cooler Master', 'SL600M', 'No', 'No', 'COOLER MASTER SL600M.jpg', '10450', 1),
('DEEPCOOL MATREXX 55X', 'Deepcool', 'MATREXX 55X', 'No', 'No', 'DEEPCOOL MATREXX 55X.jpg', '3800', 1),
('DEEPCOOL MATREXX 5S', 'Deepcool', 'MATREXX 5S', 'No', 'No', 'DEEPCOOL MATREXX 5S.jpg', '3600', 1),
('DEEPCOOL TESSERACT BF', 'Deepcool', 'TESSERACT BF', 'No', 'No', 'DEEPCOOL TESSERACT BF.jpg', '6000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpu_fan_tbl`
--

CREATE TABLE `cpu_fan_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `cooler_type` varchar(25) NOT NULL,
  `socket` varchar(75) NOT NULL,
  `max_tdp` int(5) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu_fan_tbl`
--

INSERT INTO `cpu_fan_tbl` (`name`, `company`, `cooler_type`, `socket`, `max_tdp`, `price`, `pic`, `status`) VALUES
('AEROCOOL VERKHO 2', 'AeroCool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 115, '2800', 'AEROCOOL VERHO 2.jpg', 1),
('AEROCOOL VERKHO 3+', 'AeroCool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 120, '3000', 'AEROCOOL VERKHO 3+.jpg', 1),
('COOL MASTER AIR 8', 'Cooler Master', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3', 200, '5200', 'COOL MASTER AIR 8.png', 1),
('DEEPCOOL 15 PWM', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151', 95, '1400', 'DEEPCOOL 15 PWM.jpeg', 1),
('DEEPCOOL 31 PWM', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151', 100, '1800', 'DEEPCOOL 31 PWM.jpg', 1),
('DEEPCOOL BETA 10', 'Deepcool', 'Box Cooler', 'AM3+ FM2+', 85, '1100', 'DEEPCOOL BETA 10.jpg', 1),
('DEEPCOOL CASTLE 240', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 230, '8000', 'DEEPCOOL CASTLE 240.jpg', 1),
('DEEPCOOL CASTLE 280', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 250, '9000', 'DEEPCOOL CASTLE 280.jpg', 1),
('DEEPCOOL CASTLE 320', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 250, '11000', 'DEEPCOOL CASTLE 320.jpg', 1),
('DEEPCOOL CK-AM209', 'Deepcool', 'Box Cooler', 'AM3+ FM2+', 65, '800', 'DEEPCOOL CK-AM209.jpg', 1),
('DEEPCOOL ICE 100', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 100, '1800', 'DEEPCOOL ICE 100.jpg', 1),
('DEEPCOOL MAXX 300', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 130, '3100', 'DEEPCOOL MAXX 300.jpg', 1),
('DEEPCOOL MAXX GTE', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4', 150, '3600', 'DEEPCOOL MAXX GTE.jpg', 1),
('ZALMAN CNPS10 II', 'ZALMAN', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066', 185, '4650', 'ZALMAN CNPS10 II.jpg', 1),
('ZALMAN CNPS9X', 'ZALMAN', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066', 180, '4000', 'ZALMAN CNPS9X.jpg', 1);

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
('AMD A6-9400', 'AMD', 2, 2, 'AM4', 3500, '3700 Mhz', 'AMD Radeon R5', '28 nm', 160, 65, 90, 'BUSINESS', '2800', 'AMD A6-9400.jpg', 1),
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
('AMD RYZEN 3700X', 'AMD', 8, 16, 'AM4', 3600, '4400 Mhz', 'None', '7nm', 2048, 65, 75, 'PROFESSIONAL', '30500', 'AMD RYZEN 3700X.jpg', 1),
('AMD RYZEN 3800X', 'AMD', 8, 16, 'AM4', 3900, '4500 Mhz', 'None', '7nm', 2048, 105, 75, 'PROFESSIONAL', '31500', 'AMD RYZEN 3800X.jpg', 1),
('AMD RYZEN 3900X', 'AMD', 12, 24, 'AM4', 3800, '4600 Mhz', 'None', '7nm', 3096, 105, 100, 'PROFESSIONAL', '43000', 'AMD RYZEN 3900X.jpg', 1),
('AMD RYZEN TR 1900', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'PROFESSIONAL', '34000', 'AMD RYZEN TR 1900.jpg', 1),
('AMD RYZEN TR 1900X', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'PROFESSIONAL', '34000', 'AMD RYZEN TR 1900X.jpg', 1),
('AMD RYZEN TR 1920X', 'AMD', 16, 32, 'TR4', 3400, '4000 Mhz', 'None', '14nm', 1152, 180, 68, 'PROFESSIONAL', '50000', 'AMD RYZEN TR 1920X.jpg', 1),
('INTEL G3900', 'INTEL', 2, 2, 'LGA 1151', 2800, '2800 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '3400', 'INTEL G3900.jpg', 1),
('INTEL G3930', 'INTEL', 2, 2, 'LGA 1151', 2900, '2900 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '5500', 'INTEL G3930.jpg', 1),
('INTEL G4400', 'Intel', 2, 2, 'LGA 1151 V2', 3300, '3300 Mhz', 'Intel HD Graphics 530', '14nm', 64, 54, 100, 'BUSINESS', '7500', 'INTEL G4400.jpg', 1),
('INTEL G4500', 'Intel', 2, 2, 'LGA 1151 V2', 3500, '3500 Mhz', 'Intel HD Graphics 530', '14nm', 64, 51, 100, 'BUSINESS', '6500', 'INTEL G4500.jpg', 1),
('INTEL G4500T', 'Intel', 2, 2, 'LGA 1151 V2', 3000, '3000 Mhz', 'Intel HD Graphics 530', '14nm', 64, 35, 100, 'BUSINESS', '7500', 'INTEL G4500T.jpg', 1),
('INTEL G4520', 'Intel', 2, 2, 'LGA 1151 V2', 3600, '3600 Mhz', 'Intel HD Graphics 530', '14nm', 64, 47, 100, 'BUSINESS', '6800', 'INTEL G4520.jpg', 1),
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
('INTEL I7-10700K', 'Intel', 8, 16, 'LGA 1151 V2', 3800, '5000 Mhz', 'Intel UHD Graphics ', '14nm', 640, 125, 90, 'PROFESSIONAL', '35000', 'INTEL I7-10700K.jpg', 1),
('INTEL I7-6800K', 'Intel', 6, 12, 'LGA 2011-3', 3400, '3800 Mhz', 'None', '14nm', 384, 140, 100, 'GAMING', '26000', 'INTEL I7-6800K.jpg', 1),
('INTEL I7-7700', 'Intel', 4, 8, 'LGA 1151', 3600, '4200 Mhz', 'Intel HD Graphics 630', '14nm', 256, 65, 100, 'GAMING', '26000', 'INTEL I7-7700.jpg', 1),
('INTEL I7-7700K', 'Intel', 4, 8, 'LGA 1151', 4200, '4500 Mhz', 'Intel HD Graphics 630', '14nm', 256, 91, 100, 'GAMING', '27000', 'INTEL I7-7700K.jpg', 1),
('INTEL I7-7740X', 'Intel', 4, 8, 'LGA 2066', 4300, '4500 Mhz', 'None', '14nm', 256, 112, 100, 'GAMING', '25000', 'INTEL I7-7740X.png', 1),
('INTEL I7-8700', 'Intel', 6, 12, 'LGA 1151 V2', 3200, '4600 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '27500', 'INTEL I7-8700.jpg', 1),
('INTEL I7-9700', 'Intel', 8, 8, 'LGA 1151', 3000, '4700 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '29500', 'INTEL I7-9700.jpg', 1),
('INTEL I7-9700K', 'Intel', 8, 8, 'LGA 1151', 3600, '4900 Mhz', 'Intel UHD Graphics ', '14nm', 512, 95, 100, 'PROFESSIONAL', '31000', 'INTEL I7-9700K.jpg', 1),
('INTEL I9-9900', 'Intel', 8, 16, 'LGA 1151 V2', 3100, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 65, 100, 'PROFESSIONAL', '37000', 'INTEL I9-9900.jpg', 1),
('INTEL I9-9900K', 'Intel', 8, 16, 'LGA 1151 V2', 3600, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 95, 100, 'PROFESSIONAL', '41500', 'INTEL I9-9900K.jpg', 1),
('INTEL XEON E-2100', 'Intel', 4, 8, 'LGA 1151 V2', 3800, '4700 Mhz', 'None', '14nm', 256, 71, 100, 'GAMING', '30000', 'INTEL XEON E-2100.jpg', 1),
('INTEL XEON E-2176G', 'Intel', 6, 12, 'LGA 1151 V2', 3700, '4700 Mhz', 'None', '14nm', 386, 80, 100, 'PROFESSIONAL', '34000', 'INTEL XEON E-2176G.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gpu_tbl`
--

CREATE TABLE `gpu_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `processor` varchar(25) NOT NULL,
  `core_freq` varchar(25) NOT NULL,
  `mem_freq` varchar(25) NOT NULL,
  `mem_type` varchar(25) NOT NULL,
  `mem_size` varchar(25) NOT NULL,
  `mem_width` varchar(25) NOT NULL,
  `pow_con` varchar(25) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu_tbl`
--

INSERT INTO `gpu_tbl` (`name`, `company`, `processor`, `core_freq`, `mem_freq`, `mem_type`, `mem_size`, `mem_width`, `pow_con`, `purpose`, `price`, `image`, `status`) VALUES
('ASROCK RX 5700', 'ASROCK', 'AMD', '1765 Mhz', '14000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '28000', 'ASROCK RX 5700.png', 1),
('ASUS GT 710', 'ASUS', 'NVIDIA', '590 Mhz', '1200 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '3800', 'ASUS GT 710.jpeg', 1),
('ASUS GTX 1050', 'ASUS', 'NVIDIA', '1442 Mhz', '7000 Mhz', 'GDDR5', '3 GB', '128 Bits', 'None', 'PROFESSIONAL', '11500', 'ASUS GTX 1050.jpg', 1),
('ASUS GTX 1060', 'ASUS', 'NVIDIA', '1506 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '6 pin', 'GAMING', '21000', 'ASUS GTX 1060.jpg', 1),
('ASUS GTX 1650', 'ASUS', 'NVIDIA', '1695 Mhz', '8000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'GAMING', '15000', 'ASUS GTX 1650.jpg', 1),
('ASUS R5 230', 'ASUS', 'AMD', '650 Mhz', '1200 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '3400', 'ASUS R5 230.jpeg', 1),
('ASUS RX 550', 'ASUS', 'AMD', '1071 Mhz', '6000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'BUSINESS', '8700', 'ASUS RX 550.jpg', 1),
('ASUS RX 570', 'ASUS', 'AMD', '1266 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '17000', 'ASUS RX 570.jpg', 1),
('ASUS TITAN RTX', 'ASUS', 'NVIDIA', '2900 Mhz', '19000 Mhz', 'GDDR6', '24 GB', '3096 Bit', '8+8 Pin', 'PROFESSIONAL', '320000', 'ASUS TITAN RTX.png', 1),
('GIGABYTE GT 1030', 'GIGABYTE', 'NVIDIA', '1252 Mhz', '6008 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '7200', 'GIGABYTE GT 1030.jpg', 1),
('GIGABYTE GT 710', 'GIGABYTE', 'NVIDIA', '954 Mhz', '1800 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '3300', 'GIGABYTE GT 710.jpg', 1),
('GIGABYTE GT 730', 'GIGABYTE', 'NVIDIA', '902 Mhz', '5000 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '6000', 'GIGABYTE GT 730.jpeg', 1),
('GIGABYTE GTX 1050', 'GIGABYTE', 'NVIDIA', '1379 Mhz', '7000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'PROFESSIONAL', '10450', 'GIGABYTE GTX 1050.png', 1),
('GIGABYTE GTX 1060', 'GIGABYTE', 'NVIDIA', '1620 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '20000', 'GIGABYTE GTX 1060.jpg', 1),
('GIGABYTE GTX 1070Ti', 'GIGABYTE', 'NVIDIA', '1632 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '31000', 'GIGABYTE GTX 1070Ti.png', 1),
('GIGABYTE GTX 1080', 'GIGABYTE', 'NVIDIA', '1657 Mhz', '10000 Mhz', 'GDDR5X', '8 GB', '256 Bit', '8 Pin', 'GAMING', '47000', 'GIGABYTE GTX 1080.png', 1),
('GIGABYTE GTX 1080Ti', 'GIGABYTE', 'NVIDIA', '1750 Mhz', '11010 Mhz', 'GDDR5X', '8 GB', '352 Bits', '8+8 Pin', 'GAMING', '54000', 'GIGABYTE GTX 1080Ti.png', 1),
('GIGABYTE GTX 3080', 'GIGABYTE', 'NVIDIA', '2600 Mhz', '18000 Mhz', 'GDDR6', '10 GB', '3096 Bit', '8+8 Pin', 'GAMING', '120000', 'GIGABYTE GTX 3080.jpg', 1),
('GIGABYTE GTX 750', 'GIGABYTE', 'NVIDIA', '1260 Mhz', '6010 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '8200', 'GIGABYTE GTX 750.jpg', 1),
('GIGABYTE GTX 750Ti', 'GIGABYTE', 'NVIDIA', '1300 Mhz', '6010 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '8200', 'GIGABYTE GTX 750Ti.jpg', 1),
('GIGABYTE GTX 970', 'GIGABYTE', 'NVIDIA', '1050 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '15000', 'GIGABYTE GTX 970.png', 1),
('GIGABYTE QR RTX 6000', 'GIGABYTE', 'NVIDIA', '1940 Mhz', '14000 Mhz', 'GDDR6', '24 GB', '256 Bit', '8+8 Pin', 'PROFESSIONAL', '350000', 'GIGABYTE QR RTX 6000.jpg', 1),
('GIGABYTE R5 230', 'GIGABYTE', 'AMD', '625 Mhz', '1066 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '2800', 'GIGABYTE R5 230.jpg', 1),
('GIGABYTE R9 270', 'GIGABYTE', 'AMD', '1189 Mhz', '2100 Mhz', 'GDDR4', '2 GB', '64 Bit', 'None', 'BUSINESS', '7200', 'GIGABYTE R9 270.jpg', 1),
('GIGABYTE RTX 2060', 'GIGABYTE', 'NVIDIA', '1750 Mhz', '14000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '30000', 'GIGABYTE RTX 2060.png', 1),
('GIGABYTE RTX 2070', 'GIGABYTE', 'NVIDIA', '1850 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '40000', 'GIGABYTE RTX 2070.png', 1),
('GIGABYTE RX 550', 'GIGABYTE', 'AMD', '1195 Mhz', '7000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'BUSINESS', '9500', 'GIGABYTE RX 550.png', 1),
('GIGABYTE RX 580', 'GIGABYTE', 'AMD', '1355 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '20500', 'GIGABYTE RX 580.jpg', 1),
('GIGABYTE RX VEGA 56', 'GIGABYTE', 'AMD', '1170 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '35000', 'GIGABYTE RX VEGA 56.png', 1),
('GIGABYTE RX VEGA 64', 'GIGABYTE', 'AMD', '2000 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '2048 Bit', '8+8 Pin', 'GAMING', '45000', 'GIGABYTE RX VEGA 64.png', 1),
('MSI GT 1030', 'MSI', 'NVIDIA', '1189 Mhz', '2100 Mhz', 'GDDR4', '2 GB', '64 Bit', 'None', 'BUSINESS', '8000', 'MSI GT 1030.jpg', 1),
('MSI GT 710', 'MSI', 'NVIDIA', '954 Mhz', '1600 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '3300', 'MSI GT 710.jpg', 1),
('MSI GTX 1050Ti', 'MSI', 'NVIDIA', '1341 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'PROFESSIONAL', '13500', 'MSI GTX 1050Ti.png', 1),
('MSI GTX 1060', 'MSI', 'NVIDIA', '1544 Mhz', '8000 Mhz', 'GDDR5', '3 GB', '192 Bit', '8 Pin', 'GAMING', '16000', 'MSI GTX 1060.jpg', 1),
('MSI GTX 1070', 'MSI', 'NVIDIA', '1506 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '28000', 'MSI GTX 1070.png', 1),
('MSI GTX 1650', 'MSI', 'NVIDIA', '1860 Mhz', '8000 Mhz', 'GDDR5', '4 GB', '128 Bits', '6 pin', 'GAMING', '16000', 'MSI GTX 1650.jpg', 1),
('MSI GTX 1660', 'MSI', 'NVIDIA', '1785 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '19500', 'MSI GTX 1660.png', 1),
('MSI R7 240', 'MSI', 'AMD', '730 Mhz', '1800 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '4500', 'MSI R7 240.jpg', 1),
('MSI RTX 2080', 'MSI', 'NVIDIA', '1900 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '41000', 'MSI RTX 2080.png', 1),
('MSI RTX 2080Ti', 'MSI', 'NVIDIA', '2000 Mhz', '14000 Mhz', 'GDDR6', '11 GB', '352 Bits', '8+8 Pin', 'GAMING', '140000', 'MSI RTX 2080Ti.png', 1),
('MSI RX 550', 'MSI', 'AMD', '1203 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'PROFESSIONAL', '10450', 'MSI RX 550.png', 1),
('MSI RX 580', 'MSI', 'AMD', '1341 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '27000', 'MSI RX 580.jpg', 1),
('MSI RX 590', 'MSI', 'AMD', '1544 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '28000', 'MSI RX 590.jpg', 1);

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
('9146', 'qwe', 'user'),
('asd', 'asd', 'admin'),
('jo', 'jo', 'user'),
('qwe', 'qwe', 'user'),
('wqe', 'qwe', 'user');

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
('ASROCK FM2A68M', 'ASROCK', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '2850', 'ASROOK FM2A68M.jpg\r\n', 1),
('ASROCK H110M-DGS', 'ASROCK', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '3060', 'ASROOK H110M-DGS.jpg', 1),
('ASROCK H270', 'ASROCK', 'AM4', 'ATX', 'DDR4', 32, 2, 24, 4, 'INTEL H270', 2, 4, 2, 2400, 'GAMING', '7300', 'ASROCK H270.jpg', 1),
('ASROCK H370', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '8400', 'ASROCK H370.jpg', 1),
('ASROCK H370F', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '11600', 'ASROCK H370F.jpg', 1),
('ASROCK X399', 'ASROCK', 'TR4', 'ATX', 'DDR4', 128, 4, 24, 16, 'AMD X399 ', 8, 6, 3, 4133, 'PROFESSIONAL', '34500', 'ASROCK X399.jpg', 1),
('ASROCK Z390', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z390', 4, 4, 2, 4300, 'PROFESSIONAL', '9700', 'ASROCK Z390.jpg\r\n', 1),
('ASUS A68HM-K', 'ASUS ', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '2920', 'ASUS A68HM-K.jpg', 1),
('ASUS B150 PRO', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B150', 4, 6, 1, 2133, 'GAMING', '5830', 'ASUS B150 PRO.jpg', 1),
('ASUS B360 MC', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'BUSINESS', '8750', 'ASUS B360 MC.jpg', 1),
('ASUS B365-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2400, 'BUSINESS', '8700', 'ASUS B365-PLUS.jpg', 1),
('ASUS EX B250-V7', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL B250', 4, 4, 0, 2400, 'GAMING', '9100', 'ASUS EX B250-V7.jpg', 1),
('ASUS EX-B360M', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H370', 2, 4, 2, 2666, 'GAMING', '8000', 'ASUS EX-B360M.jpg', 1),
('ASUS H110-PLUS', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '6600', 'ASUS H110-PLUS.jpg', 1),
('ASUS H310-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2666, 'GAMING', '8800', 'ASUS H310-PLUS.jpg\r\n', 1),
('ASUS M5A78L-M', 'ASUS', 'AM3+', 'MicroATX', 'DDR3', 16, 1, 24, 4, 'AMD 760G', 2, 4, 0, 1866, 'BUSINESS', '2920', 'ASUS M5A78L-M.jpg', 1),
('ASUS MAXIMUS IX', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL Z390', 2, 6, 2, 4700, 'PROFESSIONAL', '30000', 'ASUS MAXIMUS IX.jpg', 1),
('ASUS MAXIMUS VIII', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z170', 4, 6, 2, 3800, 'GAMING', '13500', 'ASUS MAXIMUS VIII.jpg', 1),
('ASUS PRIME H310M-C', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2166, 'BUSINESS', '6600', 'ASUS PRIME H310M-C.jpg', 1),
('ASUS ROG B360-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'ASUS ROG B360-H.jpg', 1),
('ASUS ROG B450-E', 'ASUS', 'AM4', 'ATX', 'DDR4', 64, 3, 24, 8, 'AMD B450', 4, 4, 2, 3533, 'GAMING', '14150', 'ASUS ROG B450-E.jpg', 1),
('ASUS ROG STRIX H370-F', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '13100', 'ASUS ROG STRIX H370-F.jpg', 1),
('ASUS ROG Z390-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z390', 4, 4, 2, 4266, 'PROFESSIONAL', '20900', 'ASUS ROG Z390-H.jpG', 1),
('ASUS TUF Z370', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z370', 4, 4, 2, 4000, 'GAMING', '13450', 'ASUS TUF Z370.jpg', 1),
('ASUS X299', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 4, 24, 16, 'INTEL X299', 8, 6, 2, 4133, 'PROFESSIONAL', '46000', 'ASUS X299.jpg', 1),
('ASUS X299-XE', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 3, 24, 16, 'INTEL Z390', 8, 6, 2, 4133, 'PROFESSIONAL', '40000', 'ASUS X299-XE.jpg', 1),
('ASUS X99', 'ASUS', 'LGA 2011-3', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL X99', 8, 6, 1, 2400, 'GAMING', '31000', 'ASUS X99.jpg', 1),
('GIGABYTE B450', 'GIGABYTE', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 2, 3200, 'GAMING', '10500', 'GIGABYTE B450.jpg\r\n', 1),
('GIGABYTE F2A68HM', 'GIGABYTE', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 8, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '3150', 'GIGABYTE F2A68HM.JPG', 1),
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
  `total` decimal(20,0) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `save` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`orderid`, `loginid`, `name`, `category`, `price`, `qty`, `total`, `status`, `save`) VALUES
(2, 'jo', 'HYPERX A400', 'MEMORY', '2900', 1, '2900', 0, 0),
(3, 'jo', 'HYPERX A400', 'MEMORY', '2900', 1, '2900', 0, 0),
(4, 'jo', 'WD BLUE WD5000AZRZ', 'MEMORY', '2400', 1, '2400', 0, 1),
(20, 'jo', 'COOLER MASTER H500P', 'cabinet', '13500', 1, '13500', 0, 0),
(21, 'jo', 'AMD A6-9400', 'CPU', '2800', 1, '2800', 0, 0),
(22, 'jo', 'AMD A6-9400', 'CPU', '2800', 1, '2800', 0, 0),
(23, 'jo', 'ASUS ROG Z390-H', 'Motherboard', '20900', 1, '20900', 0, 0),
(24, 'jo', 'INTEL I5-9500', 'CPU', '18000', 1, '18000', 0, 0),
(25, 'jo', 'GOODRAM L17S', 'RAM', '6700', 1, '6700', 0, 0),
(26, 'jo', 'MSI RTX 2080Ti', 'GPU', '140000', 1, '140000', 0, 0),
(27, 'jo', 'SAMSUNG 860 EVO', 'MEMORY', '6800', 1, '6800', 0, 0),
(28, 'jo', 'WD BLUE DWS1000M', 'MEMORY', '10000', 1, '10000', 0, 0),
(29, 'jo', 'AEROCOOL KCAS 650G', 'SMPS', '7200', 1, '7200', 0, 0),
(30, 'jo', 'DEEPCOOL CASTLE 240', 'CPU FAN', '8000', 1, '8000', 0, 0),
(31, 'jo', 'COOLER MASTER H500M', 'cabinet', '15500', 1, '15500', 0, 0),
(32, 'jo', 'MSI H110M-R2', 'Motherboard', '3100', 1, '3100', 0, 1),
(34, 'jo', 'ASUS MAXIMUS VIII', 'Motherboard', '13500', 1, '13500', 0, 0),
(35, 'jo', 'INTEL I7-7700', 'CPU', '26000', 1, '26000', 0, 0),
(36, 'jo', 'SAMSUNG 3DB0', 'RAM', '6000', 1, '6000', 0, 0),
(37, 'jo', 'GIGABYTE QR RTX 6000', 'GPU', '350000', 1, '350000', 0, 0),
(38, 'jo', 'SAMSUNG 860 DCT', 'MEMORY', '30000', 1, '30000', 0, 0),
(40, 'jo', 'AEROCOOL KCAS 650G', 'SMPS', '7200', 1, '7200', 0, 0),
(41, 'jo', 'DEEPCOOL CASTLE 320', 'CPU FAN', '11000', 1, '11000', 0, 0),
(42, 'jo', 'COOLER MASTER H500M', 'cabinet', '15500', 1, '15500', 0, 0),
(43, 'jo', 'GIGABYTE X399', 'Motherboard', '44000', 1, '44000', 0, 0),
(44, 'jo', 'AMD RYZEN TR 1920X', 'CPU', '50000', 1, '50000', 0, 0),
(45, 'jo', 'GOODRAM L17S', 'RAM', '6700', 1, '6700', 0, 0),
(46, 'jo', 'GIGABYTE QR RTX 6000', 'GPU', '350000', 1, '350000', 0, 0),
(47, 'jo', 'SAMSUNG 860 DCT', 'MEMORY', '30000', 1, '30000', 0, 0),
(48, 'jo', 'WD BLUE DWS1000M', 'MEMORY', '10000', 1, '10000', 0, 0),
(49, 'jo', 'AEROCOOL GM 1200W', 'SMPS', '16000', 1, '16000', 0, 0),
(50, 'jo', 'DEEPCOOL CASTLE 280', 'CPU FAN', '9000', 1, '9000', 0, 0),
(51, 'jo', 'COOLER MASTER H500M', 'cabinet', '15500', 1, '15500', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ram_tbl`
--

CREATE TABLE `ram_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `ram_size` int(10) NOT NULL,
  `mem_freq` int(10) NOT NULL,
  `fsb` varchar(20) NOT NULL,
  `voltage` int(10) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram_tbl`
--

INSERT INTO `ram_tbl` (`name`, `company`, `ram_type`, `ram_size`, `mem_freq`, `fsb`, `voltage`, `timing`, `price`, `pic`, `status`) VALUES
('GOODRAM 0QH0', 'GOODRAM', 'DDR3', 2, 1333, '10600 MB/s', 2, '9-9-9-24', '1250', 'GOODRAM 0QH0.jpg', 1),
('GOODRAM 9QHQ', 'GOODRAM', 'DDR3', 4, 1600, '12800 MB/s', 2, '11-11-11-28', '2700', 'GOODRAM 9QHQ.jpg', 1),
('GOODRAM L15S', 'GOODRAM', 'DDR4', 4, 2133, '17000 MB/s', 1, '15-15-15', '3200', 'GOODRAM L15S.jpg', 1),
('GOODRAM L17S', 'GOODRAM', 'DDR4', 8, 2400, '19200 MB/s', 1, '17-17-17', '6700', 'GOODRAM L17S.jpg', 1),
('HYPERX 10FB', 'HYPERX', 'DDR3', 4, 1866, '14900 MB/s', 2, '10-11-10-30', '2700', 'HYPERX 10FB.jpg', 1),
('HYPERX 6PB3', 'HYPERX', 'DDR4', 8, 3200, '25600 MB/s', 1, '16-18-18', '7000', 'HYPERX 6PB3.jpg', 1),
('HYPERX 80JB', 'HYPERX', 'DDR3', 8, 1866, '14900 MB/s', 2, '10-11-10-30', '3500', 'HYPERX 80JB.jpg', 1),
('SAMSUNG 0QH0', 'Samsung', 'DDR3', 8, 1866, '14900 MB/s', 2, '13-13-13', '4500', 'SAMSUNG 0QH0.jpg', 1),
('SAMSUNG 3CH0', 'Samsung', 'DDR3', 4, 1600, '12800 MH/s', 2, '11-11-11', '1950', 'SAMSUNG 3CHO.jpg', 1),
('SAMSUNG 3DB0', 'Samsung', 'DDR4', 8, 2133, '17000 MB/s', 1, '15-15-15-42', '6000', 'SAMSUNG 3DB0.jpg', 1),
('SAMSUNG 3DH0', 'Samsung', 'DDR3', 2, 1333, '10600 MB/s', 2, '9-9-9', '1100', 'SAMSUNG 3DH0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smps_tbl`
--

CREATE TABLE `smps_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `power` int(10) NOT NULL,
  `cpu_pow` varchar(20) NOT NULL,
  `mb_pow` varchar(20) NOT NULL,
  `sata_count` int(3) NOT NULL,
  `pci_count` int(3) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smps_tbl`
--

INSERT INTO `smps_tbl` (`name`, `company`, `power`, `cpu_pow`, `mb_pow`, `sata_count`, `pci_count`, `price`, `pic`, `status`) VALUES
('AEROCOOL GM 1200W', 'AeroCool', 1200, '8 pin / 16 pin', '24 pin', 6, 8, '16000', 'AEROCOOL GM 1200W.jpg', 1),
('AEROCOOL KCAS 650G', 'AeroCool', 650, '4 pin / 8 pin', '24 pin', 6, 2, '7200', 'AEROCOOL KCAS 650G.jpg', 1),
('AEROCOOL VX 400W', 'AeroCool', 400, '4 pin / 8 pin', '24 pin', 2, 0, '2400', 'AEROCOOL VX 400W.jpg', 1),
('AEROCOOL VX 500W', 'AeroCool', 500, '4 pin / 8 pin', '24 pin', 3, 1, '3200', 'AEROCOOL VX 500W.jpeg', 1),
('AEROCOOL VX 700W', 'AeroCool', 700, '4 pin / 8 pin', '24 pin', 6, 2, '9000', 'AEROCOOL VX 700W.png', 1),
('COOL MASTER V2', 'Cooler Master.', 550, '4 pin / 8 pin', '24 pin', 5, 2, '5300', 'COOLMASTER v2.jpg', 1),
('COOL MASTER V3', 'Cooler Master.', 600, '4 pin / 8 pin', '24 pin', 6, 2, '6100', 'COOLMASTER v3.jpg', 1),
('DEEPCOOL DN500', 'Deepcool', 500, '4 pin / 8 pin', '24 pin', 5, 1, '5000', 'DEEPCOOL DN500.jpg', 1),
('ZALMAN ZM1000', 'ZALMAN', 1000, '4 pin / 8 pin', '24 pin', 6, 4, '14000', 'ZALMAN ZM1000.jpg', 1),
('ZALMAN ZM850', 'ZALMAN', 850, '4 pin / 8 pin', '24 pin', 6, 4, '11000', 'ZALMAN ZM850.jpg', 1);

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
('jobin', 'asdf', 'M', 'jobinmathew@mca.ajce.in', '9990804990', 'qwe', 1),
('asd', 'asd', 'M', 'jobinrj31255@gmail.com', '8977897788', 'wqe', 2),
('jo', 'asd', 'M', 'jobinrj31255@gmail.com', '8977897788', 'jo', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet_tbl`
--
ALTER TABLE `cabinet_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cpu_fan_tbl`
--
ALTER TABLE `cpu_fan_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cpu_tbl`
--
ALTER TABLE `cpu_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `gpu_tbl`
--
ALTER TABLE `gpu_tbl`
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
-- Indexes for table `smps_tbl`
--
ALTER TABLE `smps_tbl`
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
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
