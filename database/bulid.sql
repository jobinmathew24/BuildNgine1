-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 02:48 PM
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
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

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
('ajualx', '28dcc1da30ca857246c1d160db06abef', 'user'),
('asd', '7815696ecbf1c96e6894b779456d330e', 'admin'),
('Joe', '3a368818b7341d48660e8dd6c5a77dbe', 'user');

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
('null', '', 0, '', '', '', 0, '0', '', 0),
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
  `status` int(11) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mothertbl`
--

INSERT INTO `mothertbl` (`name`, `company`, `socket`, `form_factor`, `ram_type`, `max_ram`, `pcie_count`, `mb_pow`, `cpu_pow`, `chipset`, `ram_count`, `sata_count`, `m2_count`, `max_freq`, `purpose`, `price`, `pic`, `status`, `verified`) VALUES
('ASROCK AB350 PRO4', 'ASROCK', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B350', 4, 4, 2, 2666, 'GAMING', '8000', 'ASROCK AB350 PRO4.jpg', 1, 1),
('ASROCK B250', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B250', 4, 4, 2, 2666, 'GAMING', '8400', 'ASROCK B250.jpg\r\n', 1, 1),
('ASROCK B365', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2666, 'GAMING', '9800', 'ASROCK B365.jpg', 1, 1),
('ASROCK FM2A68M', 'ASROCK', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '2850', 'ASROOK FM2A68M.jpg\r\n', 1, 1),
('ASROCK H110M-DGS', 'ASROCK', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '3060', 'ASROOK H110M-DGS.jpg', 1, 1),
('ASROCK H270', 'ASROCK', 'AM4', 'ATX', 'DDR4', 32, 2, 24, 4, 'INTEL H270', 2, 4, 2, 2400, 'GAMING', '7300', 'ASROCK H270.jpg', 1, 1),
('ASROCK H370', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '8400', 'ASROCK H370.jpg', 1, 1),
('ASROCK H370F', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '11600', 'ASROCK H370F.jpg', 1, 1),
('ASROCK X399', 'ASROCK', 'TR4', 'ATX', 'DDR4', 128, 4, 24, 16, 'AMD X399 ', 8, 6, 3, 4133, 'PROFESSIONAL', '34500', 'ASROCK X399.jpg', 1, 1),
('ASROCK Z390', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z390', 4, 4, 2, 4300, 'PROFESSIONAL', '9700', 'ASROCK Z390.jpg\r\n', 1, 1),
('ASUS A68HM-K', 'ASUS ', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '2920', 'ASUS A68HM-K.jpg', 1, 1),
('ASUS B150 PRO', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B150', 4, 6, 1, 2133, 'GAMING', '5830', 'ASUS B150 PRO.jpg', 1, 1),
('ASUS B360 MC', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'BUSINESS', '8750', 'ASUS B360 MC.jpg', 1, 1),
('ASUS B365-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2400, 'BUSINESS', '8700', 'ASUS B365-PLUS.jpg', 1, 1),
('ASUS EX B250-V7', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL B250', 4, 4, 0, 2400, 'GAMING', '9100', 'ASUS EX B250-V7.jpg', 1, 1),
('ASUS EX-B360M', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H370', 2, 4, 2, 2666, 'GAMING', '8000', 'ASUS EX-B360M.jpg', 1, 1),
('ASUS H110-PLUS', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '6600', 'ASUS H110-PLUS.jpg', 1, 1),
('ASUS H310-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2666, 'GAMING', '8800', 'ASUS H310-PLUS.jpg\r\n', 1, 1),
('ASUS M5A78L-M', 'ASUS', 'AM3+', 'MicroATX', 'DDR3', 16, 1, 24, 4, 'AMD 760G', 2, 4, 0, 1866, 'BUSINESS', '2920', 'ASUS M5A78L-M.jpg', 1, 1),
('ASUS MAXIMUS IX', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL Z390', 2, 6, 2, 4700, 'PROFESSIONAL', '30000', 'ASUS MAXIMUS IX.jpg', 1, 1),
('ASUS MAXIMUS VIII', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z170', 4, 6, 2, 3800, 'GAMING', '13500', 'ASUS MAXIMUS VIII.jpg', 1, 1),
('ASUS PRIME H310M-C', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2166, 'BUSINESS', '6600', 'ASUS PRIME H310M-C.jpg', 1, 1),
('ASUS ROG B360-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'ASUS ROG B360-H.jpg', 1, 1),
('ASUS ROG B450-E', 'ASUS', 'AM4', 'ATX', 'DDR4', 64, 3, 24, 8, 'AMD B450', 4, 4, 2, 3533, 'GAMING', '14150', 'ASUS ROG B450-E.jpg', 1, 1),
('ASUS ROG STRIX H370-F', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '13100', 'ASUS ROG STRIX H370-F.jpg', 1, 1),
('ASUS ROG Z390-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z390', 4, 4, 2, 4266, 'PROFESSIONAL', '20900', 'ASUS ROG Z390-H.jpG', 1, 1),
('ASUS TUF Z370', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z370', 4, 4, 2, 4000, 'GAMING', '13450', 'ASUS TUF Z370.jpg', 1, 1),
('ASUS X299', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 4, 24, 16, 'INTEL X299', 8, 6, 2, 4133, 'PROFESSIONAL', '46000', 'ASUS X299.jpg', 1, 1),
('ASUS X299-XE', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 3, 24, 16, 'INTEL Z390', 8, 6, 2, 4133, 'PROFESSIONAL', '40000', 'ASUS X299-XE.jpg', 1, 1),
('ASUS X99', 'ASUS', 'LGA 2011-3', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL X99', 8, 6, 1, 2400, 'GAMING', '31000', 'ASUS X99.jpg', 1, 1),
('GIGABYTE B450', 'GIGABYTE', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 2, 3200, 'GAMING', '10500', 'GIGABYTE B450.jpg\r\n', 1, 1),
('GIGABYTE F2A68HM', 'GIGABYTE', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 8, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '3150', 'GIGABYTE F2A68HM.JPG', 1, 1),
('GIGABYTE H110-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 1, 2133, 'BUSINESS', '5500', 'GIGABYTE H110-D3.jpg', 1, 1),
('GIGABYTE X399', 'GIGABYTE', 'TR4', 'ATX', 'DDR4', 128, 5, 24, 16, 'AMD X399', 8, 6, 1, 3600, 'GAMING', '44000', 'GIGABYTE X399.jpg', 1, 1),
('GIGABYTE Z270P-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 6, 1, 3866, 'GAMING', '6900', 'GIGABYTE Z270P-D3.jpg', 1, 1),
('GIGABYTE Z270P-D4', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 4, 2, 3866, 'GAMING', '7150', 'GIGABYTE Z270P-D4.jpg', 1, 1),
('joerj', 'asd', 'TR4', 'asd', 'DDR4', 1, 1, 1, 1, '1', 1, 1, 1, 1, 'PROFESSIONAL', '1', 'tshrt.jpg', 1, 0),
('MSI A68HM-E33', 'MSI', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '3300', 'MSI A68HM-E33.jpg', 1, 1),
('MSI B360GPC', 'MSI', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'MSI B360GPC.jpg', 1, 1),
('MSI B450', 'MSI', 'AM4', 'MicroATX', 'DDR4', 64, 2, 24, 8, 'INTEL B450', 4, 4, 2, 2666, 'GAMING', '9500', 'MSI B450.png\r\n', 1, 1),
('MSI B450 GAMING PLUS', 'MSI', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 1, 3466, 'GAMING', '10500', 'MSI B450 GAMING PLUS.png\r\n', 1, 1),
('MSI H110M', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '2920', 'MSI H110M.jpg', 1, 1),
('MSI H110M-R2', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 64, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2666, 'BUSINESS', '3100', 'MSI H110M-R2.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `orderid` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(2) NOT NULL,
  `total` decimal(20,0) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `bulid` int(2) NOT NULL DEFAULT 0,
  `save` int(2) NOT NULL DEFAULT 0,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`orderid`, `loginid`, `name`, `category`, `price`, `qty`, `total`, `status`, `bulid`, `save`, `pic`) VALUES
(167, 'ajualx', 'INTEL I9-9900K', 'CPU', '41500', 1, '41500', 1, 0, 0, ''),
(168, 'ajualx', 'APPLE MAC PRO', 'cabinet', '18000', 1, '18000', 1, 0, 0, ''),
(198, 'Joe', 'MAC PRO INTEL I7-9700K 4900 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'Business', '123630', 1, '123630', 1, 0, 0, 'APPLE MAC PRO'),
(208, 'joe', ' LITE 5 INTEL I7-10700 4800 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'professional', '108200', 1, '108200', 1, 0, 0, 'COOLER MASTER LITE 5'),
(217, 'joe', 'MATREXX 55X INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics MSI GDDR3 2 GB', 'professional', '34900', 1, '34900', 1, 0, 0, 'DEEPCOOL MATREXX 55X'),
(226, 'joe', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'gaming', '52920', 1, '52920', 1, 0, 0, 'COOLER MASTER MB500'),
(227, 'joe', 'MSI GT 710', 'GPU', '3300', 1, '3300', 1, 0, 0, ''),
(236, 'joe', 'MAC PRO AMD A6-7400K 3900 Mhz  4Gb  DDR3   RAM 240Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '39970', 1, '39970', 1, 0, 0, 'APPLE MAC PRO'),
(237, 'joe', 'MSI H110M', 'Motherboard', '2920', 1, '2920', 1, 0, 0, ''),
(238, 'joe', 'GIGABYTE F2A68HM', 'Motherboard', '3150', 1, '3150', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `prebuilt_tbl`
--

CREATE TABLE `prebuilt_tbl` (
  `prebuilt_id` int(10) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `motherboard` varchar(50) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `gpu` varchar(50) NOT NULL DEFAULT 'null',
  `mem` varchar(50) NOT NULL,
  `mem_m2` varchar(50) NOT NULL DEFAULT 'null',
  `smps` varchar(50) NOT NULL,
  `cpu_fan` varchar(50) NOT NULL DEFAULT 'null',
  `cabinet` varchar(50) NOT NULL,
  `cpu_name` varchar(25) NOT NULL,
  `cpu_freq` int(10) NOT NULL,
  `ram_size` int(10) NOT NULL,
  `ram_type` varchar(25) NOT NULL,
  `hdd_size` int(10) NOT NULL,
  `grap_comp` varchar(25) NOT NULL,
  `grap_size` int(10) NOT NULL,
  `os` varchar(50) NOT NULL DEFAULT 'null',
  `apps` varchar(50) NOT NULL DEFAULT 'null',
  `display` varchar(50) NOT NULL DEFAULT 'null',
  `keyboard` varchar(50) NOT NULL DEFAULT 'null',
  `mouse` varchar(50) NOT NULL DEFAULT 'null',
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `category` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prebuilt_tbl`
--

INSERT INTO `prebuilt_tbl` (`prebuilt_id`, `loginid`, `name`, `motherboard`, `cpu`, `ram`, `gpu`, `mem`, `mem_m2`, `smps`, `cpu_fan`, `cabinet`, `cpu_name`, `cpu_freq`, `ram_size`, `ram_type`, `hdd_size`, `grap_comp`, `grap_size`, `os`, `apps`, `display`, `keyboard`, `mouse`, `price`, `pic`, `category`, `status`) VALUES
(3, 'Joe', ' LITE 5 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 3000Gb   HDD 500Gb   SSD  Graphics ASUS GDDR3 1 GB', 'ASUS B150 PRO', 'INTEL I7-7700', 'SAMSUNG 3DB0', 'ASUS GT 710', 'SEAGATE ST3000DM006', 'WD BLACK DWS500', 'AEROCOOL VX 700W', 'DEEPCOOL MAXX 300', 'COOLER MASTER LITE 5', 'INTEL I7-7700', 4200, 8, 'DDR4', 3000, 'ASUS', 1, 'null', 'null', 'null', 'null', 'null', '6800', 'COOLER MASTER LITE 5', 'professional', 1),
(4, 'Joe', 'MAC PRO INTEL I7-9700K 4900 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'ASUS B150 PRO', 'INTEL I7-9700K', 'SAMSUNG 3DB0', 'ASUS GT 710', 'SAMSUNG 920 DCT', 'WD BLUE DWS1000M', 'ZALMAN ZM850', 'DEEPCOOL CASTLE 240', 'APPLE MAC PRO', 'INTEL I7-9700K', 4900, 8, 'DDR4', 2000, 'ASUS', 1, 'null', 'null', 'null', 'null', 'null', '123630', 'APPLE MAC PRO', 'Business', 1),
(5, 'joe', ' LITE 5 INTEL I7-10700 4800 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'ASUS H310-PLUS', 'INTEL I7-10700', 'GOODRAM L17S', 'ASUS GT 710', 'SAMSUNG 860 DCT', 'WD BLUE DWS1000M', 'AEROCOOL VX 700W', 'DEEPCOOL MAXX 300', 'COOLER MASTER LITE 5', 'INTEL I7-10700', 4800, 8, 'DDR4', 2000, 'ASUS', 1, 'null', 'null', 'null', 'null', 'null', '108200', 'COOLER MASTER LITE 5', 'professional', 1),
(6, 'joe', 'MATREXX 55X INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics MSI GDDR3 2 GB', 'ASUS H110-PLUS', 'INTEL G3930', 'SAMSUNG 3DB0', 'MSI GT 710', 'HYPERX A400', 'null', 'DEEPCOOL DN500', 'DEEPCOOL 31 PWM', 'DEEPCOOL MATREXX 55X', 'INTEL G3930', 2900, 8, 'DDR4', 120, 'MSI', 2, 'null', 'null', 'null', 'null', 'null', '34900', 'DEEPCOOL MATREXX 55X', 'professional', 1),
(7, 'joe', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'MSI H110M', 'INTEL I7-7700', 'SAMSUNG 3DB0', 'GIGABYTE R5 230', 'WD BLUE WD5000AZRZ', 'null', 'AEROCOOL VX 500W', 'AEROCOOL VERKHO 3+', 'COOLER MASTER MB500', 'INTEL I7-7700', 4200, 8, 'DDR4', 500, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '52920', 'COOLER MASTER MB500', 'gaming', 1),
(8, 'joe', 'MAC PRO AMD A6-7400K 3900 Mhz  4Gb  DDR3   RAM 240Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'ASUS A68HM-K', 'AMD A6-7400K', 'SAMSUNG 3CH0', 'GIGABYTE R5 230', 'HYPERX FURY S44', 'null', 'DEEPCOOL DN500', 'DEEPCOOL CK-AM209', 'APPLE MAC PRO', 'AMD A6-7400K', 3900, 4, 'DDR3', 240, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '39970', 'APPLE MAC PRO', 'Business', 1);

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
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `name` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `state` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`name`, `address`, `gender`, `state`, `district`, `email`, `phone`, `loginid`, `regid`) VALUES
('asd', 'asd', 'M', 18, 'Kottayam', 'asd@gmail.com', '7897897897', 'asd', 6),
('jobin', 'ambatu', 'M', 18, 'Kottayam', 'jobinrj31255@gmail.com', '8977897788', 'Joe', 7),
('Aju Alex', 'My Address', 'M', 18, 'Kottayam', 'hellogmagil@com', '8779322316', 'ajualx', 8);

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
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistCode`),
  ADD KEY `StCode` (`StCode`);

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
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

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
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `prebuilt_tbl`
--
ALTER TABLE `prebuilt_tbl`
  MODIFY `prebuilt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD CONSTRAINT `ordertbl_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `user_login` (`loginid`);

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

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`loginid`) REFERENCES `logintable` (`loginid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
