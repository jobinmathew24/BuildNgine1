-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 05:00 PM
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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `price` decimal(10,0) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinet_tbl`
--

INSERT INTO `cabinet_tbl` (`name`, `company`, `model`, `int_power`, `pow_sup`, `pic`, `sold_by`, `price`, `status`, `verified`) VALUES
('acc', 'asd', 'asd', 'asd', 'asd', 'acc.jpg', 'retailer', '123', 1, 0),
('APPLE MAC PRO', 'Apple', 'MAC PRO', 'No', 'No', 'APPLE MAC PRO.jpg', 'BulidNgine Pvt. Ltd. ', '18000', 1, 1),
('COOLER MASTER ELITE 350', 'Cooler Master', 'ELITE 350', 'No', 'No', 'COOLER MASTER ELITE 350.jpg', 'BulidNgine Pvt. Ltd. ', '3000', 1, 1),
('COOLER MASTER H500M', 'Cooler Master', 'H500M', 'No', 'No', 'COOLER MASTER H500M.jpg', 'BulidNgine Pvt. Ltd. ', '15500', 1, 1),
('COOLER MASTER H500P', 'Cooler Master', 'H500P', 'No', 'No', 'COOLER MASTER H500P.jpg', 'BulidNgine Pvt. Ltd. ', '13500', 1, 1),
('COOLER MASTER LITE 5', 'Cooler Master', ' LITE 5', 'No', 'No', 'COOLER MASTER LITE 5.png', 'BulidNgine Pvt. Ltd. ', '6800', 1, 1),
('COOLER MASTER MB500', 'Cooler Master', 'MB500', 'No', 'No', 'COOLER MASTER MB500.png', 'BulidNgine Pvt. Ltd. ', '6600', 1, 1),
('COOLER MASTER MB530P', 'Cooler Master', 'MB530P', 'No', 'No', 'COOLER MASTER MB530P.jpg', 'BulidNgine Pvt. Ltd. ', '9500', 1, 1),
('COOLER MASTER MB600L', 'Cooler Master', 'MB600L', 'No', 'No', 'COOLER MASTER MB600L.jpg', 'BulidNgine Pvt. Ltd. ', '4600', 1, 1),
('COOLER MASTER SL600M', 'Cooler Master', 'SL600M', 'No', 'No', 'COOLER MASTER SL600M.jpg', 'BulidNgine Pvt. Ltd. ', '10450', 1, 1),
('DEEPCOOL MATREXX 55X', 'Deepcool', 'MATREXX 55X', 'No', 'No', 'DEEPCOOL MATREXX 55X.jpg', 'BulidNgine Pvt. Ltd. ', '3800', 1, 1),
('DEEPCOOL MATREXX 5S', 'Deepcool', 'MATREXX 5S', 'No', 'No', 'DEEPCOOL MATREXX 5S.jpg', 'BulidNgine Pvt. Ltd. ', '3600', 1, 1),
('DEEPCOOL TESSERACT BF', 'Deepcool', 'TESSERACT BF', 'No', 'No', 'DEEPCOOL TESSERACT BF.jpg', 'BulidNgine Pvt. Ltd. ', '6000', 1, 1),
('joerj', 'asd', 'asd', 'asd', 'asd', 'as.png', 'retailer', '123', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is BuildNgine'),
(4, 'what should I call you', 'You can call me BuildNgine'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day');

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu_fan_tbl`
--

INSERT INTO `cpu_fan_tbl` (`name`, `company`, `cooler_type`, `socket`, `max_tdp`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('AEROCOOL VERKHO 2', 'AeroCool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 115, '2800', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL VERHO 2.jpg', 1, 1),
('AEROCOOL VERKHO 3+', 'AeroCool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 120, '3000', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL VERKHO 3+.jpg', 1, 1),
('COOL MASTER AIR 8', 'Cooler Master', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3', 200, '5200', 'BulidNgine Pvt. Ltd. ', 'COOL MASTER AIR 8.png', 1, 1),
('DEEPCOOL 15 PWM', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151', 95, '1400', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL 15 PWM.jpeg', 1, 1),
('DEEPCOOL 31 PWM', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151', 100, '1800', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL 31 PWM.jpg', 1, 1),
('DEEPCOOL BETA 10', 'Deepcool', 'Box Cooler', 'AM3+ FM2+', 85, '1100', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL BETA 10.jpg', 1, 1),
('DEEPCOOL CASTLE 240', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 230, '8000', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL CASTLE 240.jpg', 1, 1),
('DEEPCOOL CASTLE 280', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 250, '9000', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL CASTLE 280.jpg', 1, 1),
('DEEPCOOL CASTLE 320', 'Deepcool', 'Water Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066 LGA 2011-3 TR4', 250, '11000', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL CASTLE 320.jpg', 1, 1),
('DEEPCOOL CK-AM209', 'Deepcool', 'Box Cooler', 'AM3+ FM2+', 65, '800', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL CK-AM209.jpg', 1, 1),
('DEEPCOOL ICE 100', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 100, '1800', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL ICE 100.jpg', 1, 1),
('DEEPCOOL MAXX 300', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+', 130, '3100', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL MAXX 300.jpg', 1, 1),
('DEEPCOOL MAXX GTE', 'Deepcool', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4', 150, '3600', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL MAXX GTE.jpg', 1, 1),
('joerj2', 'asd', 'Water Cooler', 'asd', 123, '123', 'retailer', 'as.png', 1, 0),
('ZALMAN CNPS10 II', 'ZALMAN', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066', 185, '4650', 'BulidNgine Pvt. Ltd. ', 'ZALMAN CNPS10 II.jpg', 1, 1),
('ZALMAN CNPS9X', 'ZALMAN', 'Box Cooler', 'LGA 1151 V2 LGA 1151 FM2+ AM3+ AM4 LGA 2066', 180, '4000', 'BulidNgine Pvt. Ltd. ', 'ZALMAN CNPS9X.jpg', 1, 1);

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpu_tbl`
--

INSERT INTO `cpu_tbl` (`name`, `company`, `core_count`, `thread_count`, `socket`, `frequency`, `turboboost`, `igpu`, `lithography`, `cache`, `tdp`, `max_temp`, `purpose`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('AMD 200GE', 'AMD', 2, 4, 'AM4', 3200, '3200 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 95, 'BUSINESS', '5700', 'BulidNgine Pvt. Ltd. ', 'AMD 200GE.jpg', 1, 1),
('AMD 220GE', 'AMD', 2, 4, 'AM4', 3400, '3400 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 105, 'BUSINESS', '6100', 'BulidNgine Pvt. Ltd. ', 'AMD 220GE.jpg', 1, 1),
('AMD 240GE', 'AMD', 2, 4, 'AM4', 3500, '3500 Mhz', 'AMD Radeon RX Vega', '14nm', 192, 35, 105, 'BUSINESS', '6500', 'BulidNgine Pvt. Ltd. ', 'AMD 240GE.jpg', 1, 1),
('AMD A10-9700', 'AMD', 4, 4, 'AM4', 3500, '3800 Mhz', 'AMD Radeon R7', '28nm', 320, 65, 90, 'BUSINESS', '6000', 'BulidNgine Pvt. Ltd. ', 'AMD A10-9700.jpg', 1, 1),
('AMD A10-9700E', 'AMD', 4, 4, 'AM4', 3000, '3500 Mhz', 'AMD Radeon R7', '28nm', 320, 35, 90, 'BUSINESS', '5600', 'BulidNgine Pvt. Ltd. ', 'AMD A10-9700E.jpg', 1, 1),
('AMD A10-9800E', 'AMD', 4, 4, 'AM4', 3100, '3800 Mhz', 'AMD Radeon R7', '28nm', 320, 35, 90, 'BUSINESS', '7200', 'BulidNgine Pvt. Ltd. ', 'AMD A10-9800E.jpg', 1, 1),
('AMD A4-7300', 'AMD', 2, 2, 'FM2+', 3800, '4000 Mhz', 'AMD Radeon R5', '28 nm', 96, 65, 70, 'BUSINESS', '2800', 'BulidNgine Pvt. Ltd. ', 'AMD A4-7300.jpg', 1, 1),
('AMD A6-7400K', 'AMD', 2, 2, 'FM2+', 3500, '3900 Mhz', 'AMD Radeon R5', '28 nm', 128, 65, 70, 'BUSINESS', '3500', 'BulidNgine Pvt. Ltd. ', 'AMD A6-7400K.jpg', 1, 1),
('AMD A6-7480', 'AMD', 2, 2, 'FM2+', 3500, '3800 Mhz', 'AMD Radeon R5', '28 nm', 128, 65, 70, 'BUSINESS', '3000', 'BulidNgine Pvt. Ltd. ', 'AMD A6-7480.jpg', 1, 1),
('AMD A6-9400', 'AMD', 2, 2, 'AM4', 3500, '3700 Mhz', 'AMD Radeon R5', '28 nm', 160, 65, 90, 'BUSINESS', '2800', 'BulidNgine Pvt. Ltd. ', 'AMD A6-9400.jpg', 1, 1),
('AMD A6-9500', 'AMD', 2, 2, 'AM4', 3500, '3800 Mhz', 'AMD Radeon R5', '28nm', 160, 65, 90, 'BUSINESS', '5000', 'BulidNgine Pvt. Ltd. ', 'AMD A6-9500.jpg', 1, 1),
('AMD A6-9500E', 'AMD', 2, 2, 'AM4', 3000, '3400 Mhz', 'AMD Radeon R5', '28 nm', 160, 35, 90, 'BUSINESS', '5000', 'BulidNgine Pvt. Ltd. ', 'AMD A6-9500E.jpg', 1, 1),
('AMD A8-9600', 'AMD', 4, 4, 'AM4', 3100, '3400 Mhz', 'AMD Radeon R7', '28nm', 320, 65, 90, 'BUSINESS', '4800', 'BulidNgine Pvt. Ltd. ', 'AMD A8-9600.jpg', 1, 1),
('AMD ATHLON 840', 'AMD', 4, 4, 'FM2+', 3100, '3800 Mhz', 'None', '28nm', 256, 65, 72, 'BUSINESS', '4400', 'BulidNgine Pvt. Ltd. ', 'AMD ATHLON 840.jpg', 1, 1),
('AMD ATHLON 845', 'AMD', 4, 4, 'FM2+', 3500, '3800 Mhz', 'None', '28nm', 320, 65, 72, 'BUSINESS', '4600', 'BulidNgine Pvt. Ltd. ', 'AMD ATHLON 845.jpg', 1, 1),
('AMD ATHLON 860K', 'AMD', 4, 4, 'FM2+', 3700, '4000 Mhz', 'None', '28nm', 256, 95, 72, 'BUSINESS', '5500', 'BulidNgine Pvt. Ltd. ', 'AMD ATHLON 860K.jpg', 1, 1),
('AMD ATHLON 870K', 'AMD', 4, 4, 'FM2+', 3900, '4100 Mhz', 'None', '28nm', 256, 95, 72, 'BUSINESS', '5000', 'BulidNgine Pvt. Ltd. ', 'AMD ATHLON 870K.jpg', 1, 1),
('AMD ATHLON X4 950', 'AMD', 4, 4, 'AM4', 3500, '3800 Mhz', 'None', '28nm', 320, 65, 72, 'BUSINESS', '5700', 'BulidNgine Pvt. Ltd. ', 'AMD ATHLON X4 950.jpg', 1, 1),
('AMD FX-4300', 'AMD', 4, 4, 'AM3+', 3800, '4000 Mhz', 'None', '32nm', 198, 95, 70, 'BUSINESS', '5300', 'BulidNgine Pvt. Ltd. ', 'AMD FX-4300.jpg', 1, 1),
('AMD FX-4320', 'AMD', 4, 4, 'AM3+', 4000, '4100 Mhz', 'None', '32nm', 198, 95, 70, 'BUSINESS', '5800', 'BulidNgine Pvt. Ltd. ', 'AMD FX-4320.jpg', 1, 1),
('AMD FX-4350', 'AMD', 4, 4, 'AM3+', 4200, '4300 Mhz', 'None', '32nm', 192, 95, 70, 'BUSINESS', '6100', 'BulidNgine Pvt. Ltd. ', 'AMD FX-4350.jpg', 1, 1),
('AMD RYZEN 1200', 'AMD', 4, 4, 'AM4', 3100, '3400 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '8600', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1200.jpg', 1, 1),
('AMD RYZEN 1300X', 'AMD', 4, 4, 'AM4', 3500, '3700 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '9600', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1300X.jpg', 1, 1),
('AMD RYZEN 1400', 'AMD', 4, 8, 'AM4', 3200, '3400 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '10700', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1400.jpg', 1, 1),
('AMD RYZEN 1500X', 'AMD', 4, 8, 'AM4', 3500, '3700 Mhz', 'None', '14nm', 384, 65, 95, 'BUSINESS', '11000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1500X.jpg', 1, 1),
('AMD RYZEN 1600', 'AMD', 6, 12, 'AM4', 3200, '3600 Mhz', 'None', '14nm', 576, 65, 95, 'BUSINESS', '12000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1600.jpg', 1, 1),
('AMD RYZEN 1600X', 'AMD', 6, 12, 'AM4', 3600, '4000 Mhz', 'None', '14nm', 576, 95, 95, 'BUSINESS', '12700', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 1600X.jpg', 1, 1),
('AMD RYZEN 2200G', 'AMD', 4, 4, 'AM4', 3500, '3700 Mhz', 'AMD Radeon RX Vega', '14nm', 384, 65, 95, 'BUSINESS', '9300', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 2200G.jpg', 1, 1),
('AMD RYZEN 2600', 'AMD', 6, 12, 'AM4', 3400, '3900 Mhz', 'None', '12nm', 576, 65, 95, 'GAMING', '15000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 2600.jpg', 1, 1),
('AMD RYZEN 2600X', 'AMD', 6, 12, 'AM4', 4000, '4200 Mhz', 'None', '12nm', 576, 95, 95, 'GAMING', '15000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 2600X.jpg', 1, 1),
('AMD RYZEN 2700', 'AMD', 8, 16, 'AM4', 3200, '4100 Mhz', 'None', '12nm', 768, 65, 95, 'GAMING', '17800', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 2700.jpg', 1, 1),
('AMD RYZEN 2700X', 'AMD', 8, 16, 'AM4', 3700, '4300 Mhz', 'None', '12nm', 768, 105, 85, 'GAMING', '20100', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 2700X.jpg', 1, 1),
('AMD RYZEN 3200G', 'AMD', 4, 4, 'AM4', 3600, '4000 Mhz', 'AMD Radeon RX Vega', '14nm', 384, 65, 95, 'BUSINESS', '10000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 3200G.jpg', 1, 1),
('AMD RYZEN 3400G', 'AMD', 4, 8, 'AM4', 3700, '4200 Mhz', 'None', '12nm', 384, 65, 95, 'GAMING', '15300', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 3400G.jpg', 1, 1),
('AMD RYZEN 3700X', 'AMD', 8, 16, 'AM4', 3600, '4400 Mhz', 'None', '7nm', 2048, 65, 75, 'PROFESSIONAL', '30500', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 3700X.jpg', 1, 1),
('AMD RYZEN 3800X', 'AMD', 8, 16, 'AM4', 3900, '4500 Mhz', 'None', '7nm', 2048, 105, 75, 'PROFESSIONAL', '31500', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 3800X.jpg', 1, 1),
('AMD RYZEN 3900X', 'AMD', 12, 24, 'AM4', 3800, '4600 Mhz', 'None', '7nm', 3096, 105, 100, 'PROFESSIONAL', '43000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN 3900X.jpg', 1, 1),
('AMD RYZEN TR 1900', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'PROFESSIONAL', '34000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN TR 1900.jpg', 1, 1),
('AMD RYZEN TR 1900X', 'AMD', 12, 24, 'TR4', 3500, '4000 Mhz', 'None', '14nm', 1536, 180, 68, 'PROFESSIONAL', '34000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN TR 1900X.jpg', 1, 1),
('AMD RYZEN TR 1920X', 'AMD', 16, 32, 'TR4', 3400, '4000 Mhz', 'None', '14nm', 1152, 180, 68, 'PROFESSIONAL', '50000', 'BulidNgine Pvt. Ltd. ', 'AMD RYZEN TR 1920X.jpg', 1, 1),
('INTEL G3900', 'Intel', 2, 2, 'LGA 1151', 2800, '2800 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '3400', 'BulidNgine Pvt. Ltd. ', 'INTEL G3900.jpg', 1, 1),
('INTEL G3930', 'Intel', 2, 2, 'LGA 1151', 2900, '2900 Mhz', 'None', '14nm', 128, 51, 90, 'BUSINESS', '5500', 'BulidNgine Pvt. Ltd. ', 'INTEL G3930.jpg', 1, 1),
('INTEL G4400', 'Intel', 2, 2, 'LGA 1151 V2', 3300, '3300 Mhz', 'Intel HD Graphics 530', '14nm', 64, 54, 100, 'BUSINESS', '7500', 'BulidNgine Pvt. Ltd. ', 'INTEL G4400.jpg', 1, 1),
('INTEL G4500', 'Intel', 2, 2, 'LGA 1151 V2', 3500, '3500 Mhz', 'Intel HD Graphics 530', '14nm', 64, 51, 100, 'BUSINESS', '6500', 'BulidNgine Pvt. Ltd. ', 'INTEL G4500.jpg', 1, 1),
('INTEL G4500T', 'Intel', 2, 2, 'LGA 1151 V2', 3000, '3000 Mhz', 'Intel HD Graphics 530', '14nm', 64, 35, 100, 'BUSINESS', '7500', 'BulidNgine Pvt. Ltd. ', 'INTEL G4500T.jpg', 1, 1),
('INTEL G4520', 'Intel', 2, 2, 'LGA 1151 V2', 3600, '3600 Mhz', 'Intel HD Graphics 530', '14nm', 64, 47, 100, 'BUSINESS', '6800', 'BulidNgine Pvt. Ltd. ', 'INTEL G4520.jpg', 1, 1),
('INTEL G4900', 'Intel', 2, 2, 'LGA 1151 V2', 3100, '3100 Mhz', 'Intel HD Graphics 610', '14nm', 128, 54, 100, 'BUSINESS', '3700', 'BulidNgine Pvt. Ltd. ', 'INTEL G4900.jpg', 1, 1),
('INTEL G4920', 'Intel', 2, 2, 'LGA 1151 V2', 3200, '3200 Mhz', 'Intel HD Graphics 610', '14nm', 128, 54, 100, 'BUSINESS', '5200', 'BulidNgine Pvt. Ltd. ', 'INTEL G4920.jpg', 1, 1),
('INTEL I3-8300', 'Intel', 4, 4, 'LGA 1151 V2', 3700, '3700 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 105, 'BUSINESS', '10500', 'BulidNgine Pvt. Ltd. ', 'INTEL I3-8300.jpg', 1, 1),
('INTEL I3-8350K', 'Intel', 4, 4, 'LGA 1151 V2', 4000, '4000 Mhz', 'Intel UHD Graphics ', '14nm', 512, 91, 105, 'BUSINESS', '13500', 'BulidNgine Pvt. Ltd. ', 'INTEL I3-8350K.jpg', 1, 1),
('INTEL I3_8100', 'Intel', 4, 4, 'LGA 1151 V2', 3600, '3600 Mhz', 'Intel UHD Graphics ', '14nm', 256, 65, 105, 'BUSINESS', '10500', 'BulidNgine Pvt. Ltd. ', 'INTEL I3_8100.jpg', 1, 1),
('INTEL I5-7640X', 'Intel', 4, 4, 'LGA 2066', 4000, '4200 Mhz', 'None', '14nm', 256, 112, 105, 'BUSINESS', '15000', 'BulidNgine Pvt. Ltd. ', 'INTEL I5-7640X.jpg', 1, 1),
('INTEL I5-9400', 'Intel', 6, 6, 'LGA 1151 V2', 2900, '4100 Mhz', 'Intel UHD Graphics ', '14nm', 384, 65, 100, 'GAMING', '14000', 'BulidNgine Pvt. Ltd. ', 'INTEL I5-9400.jpg', 1, 1),
('INTEL I5-9500', 'Intel', 6, 6, 'LGA 1151 V2', 3000, '4400 Mhz', 'Intel UHD Graphics ', '14nm', 384, 65, 100, 'GAMING', '18000', 'BulidNgine Pvt. Ltd. ', 'INTEL I5-9500.jpg', 1, 1),
('INTEL I5-9600K', 'Intel', 6, 6, 'LGA 1151 V2', 3700, '4600 Mhz', 'Intel UHD Graphics ', '14nm', 384, 95, 100, 'GAMING', '19500', 'BulidNgine Pvt. Ltd. ', 'INTEL I5-9600K.jpg', 1, 1),
('INTEL I7-10700', 'Intel', 8, 16, 'LGA 1151 V2', 3800, '4800 Mhz', 'Intel UHD Graphics ', '14nm', 640, 65, 75, 'GAMING', '30000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-10700.jpg', 1, 1),
('INTEL I7-10700K', 'Intel', 8, 16, 'LGA 1151 V2', 3800, '5000 Mhz', 'Intel UHD Graphics ', '14nm', 640, 125, 90, 'PROFESSIONAL', '35000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-10700K.jpg', 1, 1),
('INTEL I7-6800K', 'Intel', 6, 12, 'LGA 2011-3', 3400, '3800 Mhz', 'None', '14nm', 384, 140, 100, 'GAMING', '26000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-6800K.jpg', 1, 1),
('INTEL I7-7700', 'Intel', 4, 8, 'LGA 1151', 3600, '4200 Mhz', 'Intel HD Graphics 630', '14nm', 256, 65, 100, 'GAMING', '26000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-7700.jpg', 1, 1),
('INTEL I7-7700K', 'Intel', 4, 8, 'LGA 1151', 4200, '4500 Mhz', 'Intel HD Graphics 630', '14nm', 256, 91, 100, 'GAMING', '27000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-7700K.jpg', 1, 1),
('INTEL I7-7740X', 'Intel', 4, 8, 'LGA 2066', 4300, '4500 Mhz', 'None', '14nm', 256, 112, 100, 'GAMING', '25000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-7740X.png', 1, 1),
('INTEL I7-8700', 'Intel', 6, 12, 'LGA 1151 V2', 3200, '4600 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '27500', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-8700.jpg', 1, 1),
('INTEL I7-9700', 'Intel', 8, 8, 'LGA 1151', 3000, '4700 Mhz', 'Intel UHD Graphics ', '14nm', 512, 65, 100, 'GAMING', '29500', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-9700.jpg', 1, 1),
('INTEL I7-9700K', 'Intel', 8, 8, 'LGA 1151', 3600, '4900 Mhz', 'Intel UHD Graphics ', '14nm', 512, 95, 100, 'PROFESSIONAL', '31000', 'BulidNgine Pvt. Ltd. ', 'INTEL I7-9700K.jpg', 1, 1),
('INTEL I9-9900', 'Intel', 8, 16, 'LGA 1151 V2', 3100, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 65, 100, 'PROFESSIONAL', '37000', 'BulidNgine Pvt. Ltd. ', 'INTEL I9-9900.jpg', 1, 1),
('INTEL I9-9900K', 'Intel', 8, 16, 'LGA 1151 V2', 3600, '5000 Mhz', 'Intel HD Graphics 630', '14nm', 512, 95, 100, 'PROFESSIONAL', '41500', 'BulidNgine Pvt. Ltd. ', 'INTEL I9-9900K.jpg', 1, 1),
('INTEL XEON E-2100', 'Intel', 4, 8, 'LGA 1151 V2', 3800, '4700 Mhz', 'None', '14nm', 256, 71, 100, 'GAMING', '30000', 'BulidNgine Pvt. Ltd. ', 'INTEL XEON E-2100.jpg', 1, 1),
('INTEL XEON E-2176G', 'Intel', 6, 12, 'LGA 1151 V2', 3700, '4700 Mhz', 'None', '14nm', 386, 80, 100, 'PROFESSIONAL', '34000', 'BulidNgine Pvt. Ltd. ', 'INTEL XEON E-2176G.jpg', 1, 1),
('qwe', 'qe', 12, 13, 'TR4', 123, '13', 'qd', 'afsf', 132, 123, 123, 'PROFESSIONAL', '123', 'retailer', 'as.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `reason` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`, `status`, `reason`) VALUES
(1, 1, 'North and Middle Andama', 1, ''),
(2, 1, 'South Andama', 1, ''),
(3, 1, 'Nicobar', 1, ''),
(4, 2, 'Anantapur', 1, ''),
(5, 2, 'Chittoor', 1, ''),
(6, 2, 'East Godavari', 1, ''),
(7, 2, 'Guntur', 1, ''),
(8, 2, 'Krishna', 1, ''),
(9, 2, 'Kurnool', 1, ''),
(10, 2, 'Prakasam', 1, ''),
(11, 2, 'Srikakulam', 1, ''),
(12, 2, 'Sri Potti Sri Ramulu Nellore', 1, ''),
(13, 2, 'Vishakhapatnam', 1, ''),
(14, 2, 'Vizianagaram', 1, ''),
(15, 2, 'West Godavari', 1, ''),
(16, 2, 'Cudappah', 1, ''),
(17, 3, 'Anjaw', 1, ''),
(18, 3, 'Changlang', 1, ''),
(19, 3, 'East Siang', 1, ''),
(20, 3, 'East Kameng', 1, ''),
(21, 3, 'Kurung Kumey', 1, ''),
(22, 3, 'Lohit', 1, ''),
(23, 3, 'Lower Dibang Valley', 1, ''),
(24, 3, 'Lower Subansiri', 1, ''),
(25, 3, 'Papum Pare', 1, ''),
(26, 3, 'Tawang', 1, ''),
(27, 3, 'Tirap', 1, ''),
(28, 3, 'Dibang Valley', 1, ''),
(29, 3, 'Upper Siang', 1, ''),
(30, 3, 'Upper Subansiri', 1, ''),
(31, 3, 'West Kameng', 1, ''),
(32, 3, 'West Siang', 1, ''),
(33, 4, 'Baksa', 1, ''),
(34, 4, 'Barpeta', 1, ''),
(35, 4, 'Bongaigao', 1, ''),
(36, 4, 'Cachar', 1, ''),
(37, 4, 'Chirang', 1, ''),
(38, 4, 'Darrang', 1, ''),
(39, 4, 'Dhemaji', 1, ''),
(40, 4, 'Dima Hasao', 1, ''),
(41, 4, 'Dhubri', 1, ''),
(42, 4, 'Dibrugarh', 1, ''),
(43, 4, 'Goalpara', 1, ''),
(44, 4, 'Golaghat', 1, ''),
(45, 4, 'Hailakandi', 1, ''),
(46, 4, 'Jorhat', 1, ''),
(47, 4, 'Kamrup', 1, ''),
(48, 4, 'Kamrup Metropolita', 1, ''),
(49, 4, 'Karbi Anglong', 1, ''),
(50, 4, 'Karimganj', 1, ''),
(51, 4, 'Kokrajhar', 1, ''),
(52, 4, 'Lakhimpur', 1, ''),
(53, 4, 'Morigao', 1, ''),
(54, 4, 'Nagao', 1, ''),
(55, 4, 'Nalbari', 1, ''),
(56, 4, 'Sivasagar', 1, ''),
(57, 4, 'Sonitpur', 1, ''),
(58, 4, 'Tinsukia', 1, ''),
(59, 4, 'Udalguri', 1, ''),
(60, 5, 'Araria', 1, ''),
(61, 5, 'Arwal', 1, ''),
(62, 5, 'Aurangabad', 1, ''),
(63, 5, 'Banka', 1, ''),
(64, 5, 'Begusarai', 1, ''),
(65, 5, 'Bhagalpur', 1, ''),
(66, 5, 'Bhojpur', 1, ''),
(67, 5, 'Buxar', 1, ''),
(68, 5, 'Darbhanga', 1, ''),
(69, 5, 'East Champara', 1, ''),
(70, 5, 'Gaya', 1, ''),
(71, 5, 'Gopalganj', 1, ''),
(72, 5, 'Jamui', 1, ''),
(73, 5, 'Jehanabad', 1, ''),
(74, 5, 'Kaimur', 1, ''),
(75, 5, 'Katihar', 1, ''),
(76, 5, 'Khagaria', 1, ''),
(77, 5, 'Kishanganj', 1, ''),
(78, 5, 'Lakhisarai', 1, ''),
(79, 5, 'Madhepura', 1, ''),
(80, 5, 'Madhubani', 1, ''),
(81, 5, 'Munger', 1, ''),
(82, 5, 'Muzaffarpur', 1, ''),
(83, 5, 'Nalanda', 1, ''),
(84, 5, 'Nawada', 1, ''),
(85, 5, 'Patna', 1, ''),
(86, 5, 'Purnia', 1, ''),
(87, 5, 'Rohtas', 1, ''),
(88, 5, 'Saharsa', 1, ''),
(89, 5, 'Samastipur', 1, ''),
(90, 5, 'Sara', 1, ''),
(91, 5, 'Sheikhpura', 1, ''),
(92, 5, 'Sheohar', 1, ''),
(93, 5, 'Sitamarhi', 1, ''),
(94, 5, 'Siwa', 1, ''),
(95, 5, 'Supaul', 1, ''),
(96, 5, 'Vaishali', 1, ''),
(97, 5, 'West Champara', 1, ''),
(98, 6, 'Chandigarh', 1, ''),
(99, 7, 'Bastar', 1, ''),
(100, 7, 'Bijapur', 1, ''),
(101, 7, 'Bilaspur', 1, ''),
(102, 7, 'Dantewada', 1, ''),
(103, 7, 'Dhamtari', 1, ''),
(104, 7, 'Durg', 1, ''),
(105, 7, 'Jashpur', 1, ''),
(106, 7, 'Janjgir-Champa', 1, ''),
(107, 7, 'Korba', 1, ''),
(108, 7, 'Koriya', 1, ''),
(109, 7, 'Kanker', 1, ''),
(110, 7, 'Kabirdham (formerly Kawardha);', 1, ''),
(111, 7, 'Mahasamund', 1, ''),
(112, 7, 'Narayanpur', 1, ''),
(113, 7, 'Raigarh', 1, ''),
(114, 7, 'Rajnandgao', 1, ''),
(115, 7, 'Raipur', 1, ''),
(116, 7, 'Surajpur', 1, ''),
(117, 8, 'Dadra and Nagar Haveli', 1, ''),
(118, 9, 'Dama', 1, ''),
(119, 9, 'Diu', 1, ''),
(120, 10, 'Central Delhi', 1, ''),
(121, 10, 'East Delhi', 1, ''),
(122, 10, 'New Delhi', 1, ''),
(123, 10, 'North Delhi', 1, ''),
(124, 10, 'North East Delhi', 1, ''),
(125, 10, 'North West Delhi', 1, ''),
(126, 10, 'South Delhi', 1, ''),
(127, 10, 'South West Delhi', 1, ''),
(128, 10, 'West Delhi', 1, ''),
(129, 11, 'North Goa', 1, ''),
(130, 11, 'South Goa', 1, ''),
(131, 12, 'Ahmedabad', 1, ''),
(132, 12, 'Amreli', 1, ''),
(133, 12, 'Anand', 1, ''),
(134, 12, 'Aravalli', 1, ''),
(135, 12, 'Banaskantha', 1, ''),
(136, 12, 'Bharuch', 1, ''),
(137, 12, 'Bhavnagar', 1, ''),
(138, 12, 'Dahod', 1, ''),
(139, 12, 'Dang', 1, ''),
(140, 12, 'Gandhinagar', 1, ''),
(141, 12, 'Jamnagar', 1, ''),
(142, 12, 'Junagadh', 1, ''),
(143, 12, 'Kutch', 1, ''),
(144, 12, 'Kheda', 1, ''),
(145, 12, 'Mehsana', 1, ''),
(146, 12, 'Narmada', 1, ''),
(147, 12, 'Navsari', 1, ''),
(148, 12, 'Pata', 1, ''),
(149, 12, 'Panchmahal', 1, ''),
(150, 12, 'Porbandar', 1, ''),
(151, 12, 'Rajkot', 1, ''),
(152, 12, 'Sabarkantha', 1, ''),
(153, 12, 'Surendranagar', 1, ''),
(154, 12, 'Surat', 1, ''),
(155, 12, 'Tapi', 1, ''),
(156, 12, 'Vadodara', 1, ''),
(157, 12, 'Valsad', 1, ''),
(158, 13, 'Ambala', 1, ''),
(159, 13, 'Bhiwani', 1, ''),
(160, 13, 'Faridabad', 1, ''),
(161, 13, 'Fatehabad', 1, ''),
(162, 13, 'Gurgao', 1, ''),
(163, 13, 'Hissar', 1, ''),
(164, 13, 'Jhajjar', 1, ''),
(165, 13, 'Jind', 1, ''),
(166, 13, 'Karnal', 1, ''),
(167, 13, 'Kaithal', 1, ''),
(168, 13, 'Kurukshetra', 1, ''),
(169, 13, 'Mahendragarh', 1, ''),
(170, 13, 'Mewat', 1, ''),
(171, 13, 'Palwal', 1, ''),
(172, 13, 'Panchkula', 1, ''),
(173, 13, 'Panipat', 1, ''),
(174, 13, 'Rewari', 1, ''),
(175, 13, 'Rohtak', 1, ''),
(176, 13, 'Sirsa', 1, ''),
(177, 13, 'Sonipat', 1, ''),
(178, 13, 'Yamuna Nagar', 1, ''),
(179, 14, 'Bilaspur', 1, ''),
(180, 14, 'Chamba', 1, ''),
(181, 14, 'Hamirpur', 1, ''),
(182, 14, 'Kangra', 1, ''),
(183, 14, 'Kinnaur', 1, ''),
(184, 14, 'Kullu', 1, ''),
(185, 14, 'Lahaul and Spiti', 1, ''),
(186, 14, 'Mandi', 1, ''),
(187, 14, 'Shimla', 1, ''),
(188, 14, 'Sirmaur', 1, ''),
(189, 14, 'Sola', 1, ''),
(190, 14, 'Una', 1, ''),
(191, 15, 'Anantnag', 1, ''),
(192, 15, 'Badgam', 1, ''),
(193, 15, 'Bandipora', 1, ''),
(194, 15, 'Baramulla', 1, ''),
(195, 15, 'Doda', 1, ''),
(196, 15, 'Ganderbal', 1, ''),
(197, 15, 'Jammu', 1, ''),
(198, 15, 'Kargil', 1, ''),
(199, 15, 'Kathua', 1, ''),
(200, 15, 'Kishtwar', 1, ''),
(202, 15, 'Kupwara', 1, ''),
(203, 15, 'Kulgam', 1, ''),
(204, 15, 'Leh', 1, ''),
(205, 15, 'Poonch', 1, ''),
(206, 15, 'Pulwama', 1, ''),
(207, 15, 'Rajouri', 1, ''),
(208, 15, 'Ramba', 1, ''),
(209, 15, 'Reasi', 1, ''),
(210, 15, 'Samba', 1, ''),
(211, 15, 'Shopia', 1, ''),
(212, 15, 'Srinagar', 1, ''),
(213, 15, 'Udhampur', 1, ''),
(214, 16, 'Bokaro', 1, ''),
(215, 16, 'Chatra', 1, ''),
(216, 16, 'Deoghar', 1, ''),
(217, 16, 'Dhanbad', 1, ''),
(218, 16, 'Dumka', 1, ''),
(219, 16, 'East Singhbhum', 1, ''),
(220, 16, 'Garhwa', 1, ''),
(221, 16, 'Giridih', 1, ''),
(222, 16, 'Godda', 1, ''),
(223, 16, 'Gumla', 1, ''),
(224, 16, 'Hazaribag', 1, ''),
(225, 16, 'Jamtara', 1, ''),
(226, 16, 'Khunti', 1, ''),
(227, 16, 'Koderma', 1, ''),
(228, 16, 'Latehar', 1, ''),
(229, 16, 'Lohardaga', 1, ''),
(230, 16, 'Pakur', 1, ''),
(231, 16, 'Palamu', 1, ''),
(232, 16, 'Ramgarh', 1, ''),
(233, 16, 'Ranchi', 1, ''),
(234, 16, 'Sahibganj', 1, ''),
(235, 16, 'Seraikela Kharsawa', 1, ''),
(236, 16, 'Simdega', 1, ''),
(237, 16, 'West Singhbhum', 1, ''),
(238, 17, 'Bagalkot', 1, ''),
(239, 17, 'Bangalore Rural', 1, ''),
(240, 17, 'Bangalore Urba', 1, ''),
(241, 17, 'Belgaum', 1, ''),
(242, 17, 'Bellary', 1, ''),
(243, 17, 'Bidar', 1, ''),
(244, 17, 'Bijapur', 1, ''),
(245, 17, 'Chamarajnagar', 1, ''),
(246, 17, 'Chikkamagaluru', 1, ''),
(247, 17, 'Chikkaballapur', 1, ''),
(248, 17, 'Chitradurga', 1, ''),
(249, 17, 'Davanagere', 1, ''),
(250, 17, 'Dharwad', 1, ''),
(251, 17, 'Dakshina Kannada', 1, ''),
(252, 17, 'Gadag', 1, ''),
(253, 17, 'Gulbarga', 1, ''),
(254, 17, 'Hassa', 1, ''),
(255, 17, 'Haveri', 1, ''),
(256, 17, 'Kodagu', 1, ''),
(257, 17, 'Kolar', 1, ''),
(258, 17, 'Koppal', 1, ''),
(259, 17, 'Mandya', 1, ''),
(260, 17, 'Mysore', 1, ''),
(261, 17, 'Raichur', 1, ''),
(262, 17, 'Shimoga', 1, ''),
(263, 17, 'Tumkur', 1, ''),
(264, 17, 'Udupi', 1, ''),
(265, 17, 'Uttara Kannada', 1, ''),
(266, 17, 'Ramanagara', 1, ''),
(267, 17, 'Yadgir', 1, ''),
(268, 18, 'Alappuzha', 1, ''),
(269, 18, 'Ernakulam', 1, ''),
(270, 18, 'Idukki', 1, ''),
(271, 18, 'Kannur', 1, ''),
(272, 18, 'Kasaragod', 1, ''),
(273, 18, 'Kollam', 1, ''),
(274, 18, 'Kottayam', 1, ''),
(275, 18, 'Kozhikode', 1, ''),
(276, 18, 'Malappuram', 1, ''),
(277, 18, 'Palakkad', 1, ''),
(278, 18, 'Pathanamthitta', 1, ''),
(279, 18, 'Thrissur', 1, ''),
(280, 18, 'Thiruvananthapuram', 1, ''),
(281, 18, 'Wayanad', 1, ''),
(282, 19, 'Lakshadweep', 1, ''),
(283, 20, 'Agar', 1, ''),
(284, 20, 'Alirajpur', 1, ''),
(285, 20, 'Anuppur', 1, ''),
(286, 20, 'Ashok Nagar', 1, ''),
(287, 20, 'Balaghat', 1, ''),
(288, 20, 'Barwani', 1, ''),
(289, 20, 'Betul', 1, ''),
(290, 20, 'Bhind', 1, ''),
(291, 20, 'Bhopal', 1, ''),
(292, 20, 'Burhanpur', 1, ''),
(293, 20, 'Chhatarpur', 1, ''),
(294, 20, 'Chhindwara', 1, ''),
(295, 20, 'Damoh', 1, ''),
(296, 20, 'Datia', 1, ''),
(297, 20, 'Dewas', 1, ''),
(298, 20, 'Dhar', 1, ''),
(299, 20, 'Dindori', 1, ''),
(300, 20, 'Guna', 1, ''),
(301, 20, 'Gwalior', 1, ''),
(302, 20, 'Harda', 1, ''),
(303, 20, 'Hoshangabad', 1, ''),
(304, 20, 'Indore', 1, ''),
(305, 20, 'Jabalpur', 1, ''),
(306, 20, 'Jhabua', 1, ''),
(307, 20, 'Katni', 1, ''),
(308, 20, 'Khandwa (East Nimar);', 1, ''),
(309, 20, 'Khargone (West Nimar);', 1, ''),
(310, 20, 'Mandla', 1, ''),
(311, 20, 'Mandsaur', 1, ''),
(312, 20, 'Morena', 1, ''),
(313, 20, 'Narsinghpur', 1, ''),
(314, 20, 'Neemuch', 1, ''),
(315, 20, 'Panna', 1, ''),
(316, 20, 'Raise', 1, ''),
(317, 20, 'Rajgarh', 1, ''),
(318, 20, 'Ratlam', 1, ''),
(319, 20, 'Rewa', 1, ''),
(320, 20, 'Sagar', 1, ''),
(321, 20, 'Satna', 1, ''),
(322, 20, 'Sehore', 1, ''),
(323, 20, 'Seoni', 1, ''),
(324, 20, 'Shahdol', 1, ''),
(325, 20, 'Shajapur', 1, ''),
(326, 20, 'Sheopur', 1, ''),
(327, 20, 'Shivpuri', 1, ''),
(328, 20, 'Sidhi', 1, ''),
(329, 20, 'Singrauli', 1, ''),
(330, 20, 'Tikamgarh', 1, ''),
(331, 20, 'Ujjai', 1, ''),
(332, 20, 'Umaria', 1, ''),
(333, 20, 'Vidisha', 1, ''),
(334, 21, 'Ahmednagar', 1, ''),
(335, 21, 'Akola', 1, ''),
(336, 21, 'Amravati', 1, ''),
(337, 21, 'Aurangabad', 1, ''),
(338, 21, 'Beed', 1, ''),
(339, 21, 'Bhandara', 1, ''),
(340, 21, 'Buldhana', 1, ''),
(341, 21, 'Chandrapur', 1, ''),
(342, 21, 'Dhule', 1, ''),
(343, 21, 'Gadchiroli', 1, ''),
(344, 21, 'Gondia', 1, ''),
(345, 21, 'Hingoli', 1, ''),
(346, 21, 'Jalgao', 1, ''),
(347, 21, 'Jalna', 1, ''),
(348, 21, 'Kolhapur', 1, ''),
(349, 21, 'Latur', 1, ''),
(350, 21, 'Mumbai City', 1, ''),
(351, 21, 'Mumbai suburba', 1, ''),
(352, 21, 'Nanded', 1, ''),
(353, 21, 'Nandurbar', 1, ''),
(354, 21, 'Nagpur', 1, ''),
(355, 21, 'Nashik', 1, ''),
(356, 21, 'Osmanabad', 1, ''),
(357, 21, 'Parbhani', 1, ''),
(358, 21, 'Pune', 1, ''),
(359, 21, 'Raigad', 1, ''),
(360, 21, 'Ratnagiri', 1, ''),
(361, 21, 'Sangli', 1, ''),
(362, 21, 'Satara', 1, ''),
(363, 21, 'Sindhudurg', 1, ''),
(364, 21, 'Solapur', 1, ''),
(365, 21, 'Thane', 1, ''),
(366, 21, 'Wardha', 1, ''),
(367, 21, 'Washim', 1, ''),
(368, 21, 'Yavatmal', 1, ''),
(369, 22, 'Bishnupur', 1, ''),
(370, 22, 'Churachandpur', 1, ''),
(371, 22, 'Chandel', 1, ''),
(372, 22, 'Imphal East', 1, ''),
(373, 22, 'Senapati', 1, ''),
(374, 22, 'Tamenglong', 1, ''),
(375, 22, 'Thoubal', 1, ''),
(376, 22, 'Ukhrul', 1, ''),
(377, 22, 'Imphal West', 1, ''),
(378, 23, 'East Garo Hills', 1, ''),
(379, 23, 'East Khasi Hills', 1, ''),
(380, 23, 'Jaintia Hills', 1, ''),
(381, 23, 'Ri Bhoi', 1, ''),
(382, 23, 'South Garo Hills', 1, ''),
(383, 23, 'West Garo Hills', 1, ''),
(384, 23, 'West Khasi Hills', 1, ''),
(385, 24, 'Aizawl', 1, ''),
(386, 24, 'Champhai', 1, ''),
(387, 24, 'Kolasib', 1, ''),
(388, 24, 'Lawngtlai', 1, ''),
(389, 24, 'Lunglei', 1, ''),
(390, 24, 'Mamit', 1, ''),
(391, 24, 'Saiha', 1, ''),
(392, 24, 'Serchhip', 1, ''),
(393, 25, 'Dimapur', 1, ''),
(394, 25, 'Kiphire', 1, ''),
(395, 25, 'Kohima', 1, ''),
(396, 25, 'Longleng', 1, ''),
(397, 25, 'Mokokchung', 1, ''),
(398, 25, 'Mo', 1, ''),
(399, 25, 'Pere', 1, ''),
(400, 25, 'Phek', 1, ''),
(401, 25, 'Tuensang', 1, ''),
(402, 25, 'Wokha', 1, ''),
(403, 25, 'Zunheboto', 1, ''),
(404, 26, 'Angul', 1, ''),
(405, 26, 'Boudh (Bauda);', 1, ''),
(406, 26, 'Bhadrak', 1, ''),
(407, 26, 'Balangir', 1, ''),
(408, 26, 'Bargarh (Baragarh);', 1, ''),
(409, 26, 'Balasore', 1, ''),
(410, 26, 'Cuttack', 1, ''),
(411, 26, 'Debagarh (Deogarh);', 1, ''),
(412, 26, 'Dhenkanal', 1, ''),
(413, 26, 'Ganjam', 1, ''),
(414, 26, 'Gajapati', 1, ''),
(415, 26, 'Jharsuguda', 1, ''),
(416, 26, 'Jajpur', 1, ''),
(417, 26, 'Jagatsinghpur', 1, ''),
(418, 26, 'Khordha', 1, ''),
(419, 26, 'Kendujhar (Keonjhar);', 1, ''),
(420, 26, 'Kalahandi', 1, ''),
(421, 26, 'Kandhamal', 1, ''),
(422, 26, 'Koraput', 1, ''),
(423, 26, 'Kendrapara', 1, ''),
(424, 26, 'Malkangiri', 1, ''),
(425, 26, 'Mayurbhanj', 1, ''),
(426, 26, 'Nabarangpur', 1, ''),
(427, 26, 'Nuapada', 1, ''),
(428, 26, 'Nayagarh', 1, ''),
(429, 26, 'Puri', 1, ''),
(430, 26, 'Rayagada', 1, ''),
(431, 26, 'Sambalpur', 1, ''),
(432, 26, 'Subarnapur (Sonepur);', 1, ''),
(433, 26, 'Sundergarh', 1, ''),
(434, 27, 'Karaikal', 1, ''),
(435, 27, 'Mahe', 1, ''),
(436, 27, 'Pondicherry', 1, ''),
(437, 27, 'Yanam', 1, ''),
(438, 28, 'Amritsar', 1, ''),
(439, 28, 'Barnala', 1, ''),
(440, 28, 'Bathinda', 1, ''),
(441, 28, 'Firozpur', 1, ''),
(442, 28, 'Faridkot', 1, ''),
(443, 28, 'Fatehgarh Sahib', 1, ''),
(444, 28, 'Fazilka', 1, ''),
(445, 28, 'Gurdaspur', 1, ''),
(446, 28, 'Hoshiarpur', 1, ''),
(447, 28, 'Jalandhar', 1, ''),
(448, 28, 'Kapurthala', 1, ''),
(449, 28, 'Ludhiana', 1, ''),
(450, 28, 'Mansa', 1, ''),
(451, 28, 'Moga', 1, ''),
(452, 28, 'Sri Muktsar Sahib', 1, ''),
(453, 28, 'Pathankot', 1, ''),
(454, 28, 'Patiala', 1, ''),
(455, 28, 'Rupnagar', 1, ''),
(456, 28, 'Ajitgarh (Mohali);', 1, ''),
(457, 28, 'Sangrur', 1, ''),
(458, 28, 'Shahid Bhagat Singh Nagar', 1, ''),
(459, 28, 'Tarn Tara', 1, ''),
(460, 29, 'Ajmer', 1, ''),
(461, 29, 'Alwar', 1, ''),
(462, 29, 'Bikaner', 1, ''),
(463, 29, 'Barmer', 1, ''),
(464, 29, 'Banswara', 1, ''),
(465, 29, 'Bharatpur', 1, ''),
(466, 29, 'Bara', 1, ''),
(467, 29, 'Bundi', 1, ''),
(468, 29, 'Bhilwara', 1, ''),
(469, 29, 'Churu', 1, ''),
(470, 29, 'Chittorgarh', 1, ''),
(471, 29, 'Dausa', 1, ''),
(472, 29, 'Dholpur', 1, ''),
(473, 29, 'Dungapur', 1, ''),
(474, 29, 'Ganganagar', 1, ''),
(475, 29, 'Hanumangarh', 1, ''),
(476, 29, 'Jhunjhunu', 1, ''),
(477, 29, 'Jalore', 1, ''),
(478, 29, 'Jodhpur', 1, ''),
(479, 29, 'Jaipur', 1, ''),
(480, 29, 'Jaisalmer', 1, ''),
(481, 29, 'Jhalawar', 1, ''),
(482, 29, 'Karauli', 1, ''),
(483, 29, 'Kota', 1, ''),
(484, 29, 'Nagaur', 1, ''),
(485, 29, 'Pali', 1, ''),
(486, 29, 'Pratapgarh', 1, ''),
(487, 29, 'Rajsamand', 1, ''),
(488, 29, 'Sikar', 1, ''),
(489, 29, 'Sawai Madhopur', 1, ''),
(490, 29, 'Sirohi', 1, ''),
(491, 29, 'Tonk', 1, ''),
(492, 29, 'Udaipur', 1, ''),
(493, 30, 'East Sikkim', 1, ''),
(494, 30, 'North Sikkim', 1, ''),
(495, 30, 'South Sikkim', 1, ''),
(496, 30, 'West Sikkim', 1, ''),
(497, 31, 'Ariyalur', 1, ''),
(498, 31, 'Chennai', 1, ''),
(499, 31, 'Coimbatore', 1, ''),
(500, 31, 'Cuddalore', 1, ''),
(501, 31, 'Dharmapuri', 1, ''),
(502, 31, 'Dindigul', 1, ''),
(503, 31, 'Erode', 1, ''),
(504, 31, 'Kanchipuram', 1, ''),
(505, 31, 'Kanyakumari', 1, ''),
(506, 31, 'Karur', 1, ''),
(507, 31, 'Krishnagiri', 1, ''),
(508, 31, 'Madurai', 1, ''),
(509, 31, 'Nagapattinam', 1, ''),
(510, 31, 'Nilgiris', 1, ''),
(511, 31, 'Namakkal', 1, ''),
(512, 31, 'Perambalur', 1, ''),
(513, 31, 'Pudukkottai', 1, ''),
(514, 31, 'Ramanathapuram', 1, ''),
(515, 31, 'Salem', 1, ''),
(516, 31, 'Sivaganga', 1, ''),
(517, 31, 'Tirupur', 1, ''),
(518, 31, 'Tiruchirappalli', 1, ''),
(519, 31, 'Theni', 1, ''),
(520, 31, 'Tirunelveli', 1, ''),
(521, 31, 'Thanjavur', 1, ''),
(522, 31, 'Thoothukudi', 1, ''),
(523, 31, 'Tiruvallur', 1, ''),
(524, 31, 'Tiruvarur', 1, ''),
(525, 31, 'Tiruvannamalai', 1, ''),
(526, 31, 'Vellore', 1, ''),
(527, 31, 'Viluppuram', 1, ''),
(528, 31, 'Virudhunagar', 1, ''),
(529, 32, 'Adilabad', 1, ''),
(530, 32, 'Hyderabad', 1, ''),
(531, 32, 'Karimnagar', 1, ''),
(532, 32, 'Khammam', 1, ''),
(533, 32, 'Mahbubnagar', 1, ''),
(534, 32, 'Medak', 1, ''),
(535, 32, 'Nalgonda', 1, ''),
(536, 32, 'Nizamabad', 1, ''),
(537, 32, 'Ranga Reddy', 1, ''),
(538, 32, 'Warangal', 1, ''),
(539, 33, 'Dhalai', 1, ''),
(540, 33, 'North Tripura', 1, ''),
(541, 33, 'South Tripura', 1, ''),
(542, 33, 'Khowai', 1, ''),
(543, 33, 'West Tripura', 1, ''),
(544, 35, 'Agra', 1, ''),
(545, 35, 'Aligarh', 1, ''),
(546, 35, 'Allahabad', 1, ''),
(547, 35, 'Ambedkar Nagar', 1, ''),
(548, 35, 'Auraiya', 1, ''),
(549, 35, 'Azamgarh', 1, ''),
(550, 35, 'Bagpat', 1, ''),
(551, 35, 'Bahraich', 1, ''),
(552, 35, 'Ballia', 1, ''),
(553, 35, 'Balrampur', 1, ''),
(554, 35, 'Banda', 1, ''),
(555, 35, 'Barabanki', 1, ''),
(556, 35, 'Bareilly', 1, ''),
(557, 35, 'Basti', 1, ''),
(558, 35, 'Bijnor', 1, ''),
(559, 35, 'Budau', 1, ''),
(560, 35, 'Bulandshahr', 1, ''),
(561, 35, 'Chandauli', 1, ''),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)', 1, ''),
(563, 35, 'Chitrakoot', 1, ''),
(564, 35, 'Deoria', 1, ''),
(565, 35, 'Etah', 1, ''),
(566, 35, 'Etawah', 1, ''),
(567, 35, 'Faizabad', 1, ''),
(568, 35, 'Farrukhabad', 1, ''),
(569, 35, 'Fatehpur', 1, ''),
(570, 35, 'Firozabad', 1, ''),
(571, 35, 'Gautam Buddh Nagar', 1, ''),
(572, 35, 'Ghaziabad', 1, ''),
(573, 35, 'Ghazipur', 1, ''),
(574, 35, 'Gonda', 1, ''),
(575, 35, 'Gorakhpur', 1, ''),
(576, 35, 'Hamirpur', 1, ''),
(577, 35, 'Hardoi', 1, ''),
(578, 35, 'Hathras (Mahamaya Nagar);', 1, ''),
(579, 35, 'Jalau', 1, ''),
(580, 35, 'Jaunpur', 1, ''),
(581, 35, 'Jhansi', 1, ''),
(582, 35, 'Jyotiba Phule Nagar', 1, ''),
(583, 35, 'Kannauj', 1, ''),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);', 1, ''),
(585, 35, 'Kanpur Nagar', 1, ''),
(586, 35, 'Kanshi Ram Nagar', 1, ''),
(587, 35, 'Kaushambi', 1, ''),
(588, 35, 'Kushinagar', 1, ''),
(589, 35, 'Lakhimpur Kheri', 1, ''),
(590, 35, 'Lalitpur', 1, ''),
(591, 35, 'Lucknow', 1, ''),
(592, 35, 'Maharajganj', 1, ''),
(593, 35, 'Mahoba', 1, ''),
(594, 35, 'Mainpuri', 1, ''),
(595, 35, 'Mathura', 1, ''),
(596, 35, 'Mau', 1, ''),
(597, 35, 'Meerut', 1, ''),
(598, 35, 'Mirzapur', 1, ''),
(599, 35, 'Moradabad', 1, ''),
(600, 35, 'Muzaffarnagar', 1, ''),
(601, 35, 'Panchsheel Nagar (Hapur);', 1, ''),
(602, 35, 'Pilibhit', 1, ''),
(603, 35, 'Pratapgarh', 1, ''),
(604, 35, 'Raebareli', 1, ''),
(605, 35, 'Rampur', 1, ''),
(606, 35, 'Saharanpur', 1, ''),
(607, 35, 'Sambhal(Bheem Nagar);', 1, ''),
(608, 35, 'Sant Kabir Nagar', 1, ''),
(609, 35, 'Sant Ravidas Nagar', 1, ''),
(610, 35, 'Shahjahanpur', 1, ''),
(611, 35, 'Shamli', 1, ''),
(612, 35, 'Shravasti', 1, ''),
(613, 35, 'Siddharthnagar', 1, ''),
(614, 35, 'Sitapur', 1, ''),
(615, 35, 'Sonbhadra', 1, ''),
(616, 35, 'Sultanpur', 1, ''),
(617, 35, 'Unnao', 1, ''),
(618, 35, 'Varanasi', 1, ''),
(619, 34, 'Almora', 1, ''),
(620, 34, 'Bageshwar', 1, ''),
(621, 34, 'Chamoli', 1, ''),
(622, 34, 'Champawat', 1, ''),
(623, 34, 'Dehradu', 1, ''),
(624, 34, 'Haridwar', 1, ''),
(625, 34, 'Nainital', 1, ''),
(626, 34, 'Pauri Garhwal', 1, ''),
(627, 34, 'Pithoragarh', 1, ''),
(628, 34, 'Rudraprayag', 1, ''),
(629, 34, 'Tehri Garhwal', 1, ''),
(630, 34, 'Udham Singh Nagar', 1, ''),
(631, 34, 'Uttarkashi', 1, ''),
(632, 36, 'Bankura', 1, ''),
(633, 36, 'Bardhama', 1, ''),
(634, 36, 'Birbhum', 1, ''),
(635, 36, 'Cooch Behar', 1, ''),
(636, 36, 'Dakshin Dinajpur', 1, ''),
(637, 36, 'Darjeeling', 1, ''),
(638, 36, 'Hooghly', 1, ''),
(639, 36, 'Howrah', 1, ''),
(640, 36, 'Jalpaiguri', 1, ''),
(641, 36, 'Kolkata', 1, ''),
(642, 36, 'Maldah', 1, ''),
(643, 36, 'Murshidabad', 1, ''),
(644, 36, 'Nadia', 1, ''),
(645, 36, 'North 24 Parganas', 1, ''),
(646, 36, 'Paschim Medinipur', 1, ''),
(647, 36, 'Purba Medinipur', 1, ''),
(648, 36, 'Purulia', 1, ''),
(649, 36, 'South 24 Parganas', 1, ''),
(650, 36, 'Uttar Dinajpur', 1, '');

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `image` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu_tbl`
--

INSERT INTO `gpu_tbl` (`name`, `company`, `processor`, `core_freq`, `mem_freq`, `mem_type`, `mem_size`, `mem_width`, `pow_con`, `purpose`, `price`, `sold_by`, `image`, `status`, `verified`) VALUES
('ASROCK RX 5700', 'ASROCK', 'AMD', '1765 Mhz', '14000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '28000', 'BulidNgine Pvt. Ltd. ', 'ASROCK RX 5700.png', 1, 1),
('ASUS GT 710', 'ASUS', 'NVIDIA', '590 Mhz', '1200 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '3800', 'BulidNgine Pvt. Ltd. ', 'ASUS GT 710.jpeg', 1, 1),
('ASUS GTX 1050', 'ASUS', 'NVIDIA', '1442 Mhz', '7000 Mhz', 'GDDR5', '3 GB', '128 Bits', 'None', 'PROFESSIONAL', '11500', 'BulidNgine Pvt. Ltd. ', 'ASUS GTX 1050.jpg', 1, 1),
('ASUS GTX 1060', 'ASUS', 'NVIDIA', '1506 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '6 pin', 'GAMING', '21000', 'BulidNgine Pvt. Ltd. ', 'ASUS GTX 1060.jpg', 1, 1),
('ASUS GTX 1650', 'ASUS', 'NVIDIA', '1695 Mhz', '8000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'GAMING', '15000', 'BulidNgine Pvt. Ltd. ', 'ASUS GTX 1650.jpg', 1, 1),
('ASUS R5 230', 'ASUS', 'AMD', '650 Mhz', '1200 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '3400', 'BulidNgine Pvt. Ltd. ', 'ASUS R5 230.jpeg', 1, 1),
('ASUS RX 550', 'ASUS', 'AMD', '1071 Mhz', '6000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'BUSINESS', '8700', 'BulidNgine Pvt. Ltd. ', 'ASUS RX 550.jpg', 1, 1),
('ASUS RX 570', 'ASUS', 'AMD', '1266 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '17000', 'BulidNgine Pvt. Ltd. ', 'ASUS RX 570.jpg', 1, 1),
('ASUS TITAN RTX', 'ASUS', 'NVIDIA', '2900 Mhz', '19000 Mhz', 'GDDR6', '24 GB', '3096 Bit', '8+8 Pin', 'PROFESSIONAL', '320000', 'BulidNgine Pvt. Ltd. ', 'ASUS TITAN RTX.png', 1, 1),
('GIGABYTE GT 1030', 'GIGABYTE', 'NVIDIA', '1252 Mhz', '6008 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '7200', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GT 1030.jpg', 1, 1),
('GIGABYTE GT 710', 'GIGABYTE', 'NVIDIA', '954 Mhz', '1800 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '3300', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GT 710.jpg', 1, 1),
('GIGABYTE GT 730', 'GIGABYTE', 'NVIDIA', '902 Mhz', '5000 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '6000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GT 730.jpeg', 1, 1),
('GIGABYTE GTX 1050', 'GIGABYTE', 'NVIDIA', '1379 Mhz', '7000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'PROFESSIONAL', '10450', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 1050.png', 1, 1),
('GIGABYTE GTX 1060', 'GIGABYTE', 'NVIDIA', '1620 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '20000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 1060.jpg', 1, 1),
('GIGABYTE GTX 1070Ti', 'GIGABYTE', 'NVIDIA', '1632 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '31000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 1070Ti.png', 1, 1),
('GIGABYTE GTX 1080', 'GIGABYTE', 'NVIDIA', '1657 Mhz', '10000 Mhz', 'GDDR5X', '8 GB', '256 Bit', '8 Pin', 'GAMING', '47000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 1080.png', 1, 1),
('GIGABYTE GTX 1080Ti', 'GIGABYTE', 'NVIDIA', '1750 Mhz', '11010 Mhz', 'GDDR5X', '8 GB', '352 Bits', '8+8 Pin', 'GAMING', '54000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 1080Ti.png', 1, 1),
('GIGABYTE GTX 3080', 'GIGABYTE', 'NVIDIA', '2600 Mhz', '18000 Mhz', 'GDDR6', '10 GB', '3096 Bit', '8+8 Pin', 'GAMING', '120000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 3080.jpg', 1, 1),
('GIGABYTE GTX 750', 'GIGABYTE', 'NVIDIA', '1260 Mhz', '6010 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '8200', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 750.jpg', 1, 1),
('GIGABYTE GTX 750Ti', 'GIGABYTE', 'NVIDIA', '1300 Mhz', '6010 Mhz', 'GDDR5', '2 GB', '64 Bit', 'None', 'BUSINESS', '8200', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 750Ti.jpg', 1, 1),
('GIGABYTE GTX 970', 'GIGABYTE', 'NVIDIA', '1050 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '15000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE GTX 970.png', 1, 1),
('GIGABYTE QR RTX 6000', 'GIGABYTE', 'NVIDIA', '1940 Mhz', '14000 Mhz', 'GDDR6', '24 GB', '256 Bit', '8+8 Pin', 'PROFESSIONAL', '350000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE QR RTX 6000.jpg', 1, 1),
('GIGABYTE R5 230', 'GIGABYTE', 'AMD', '625 Mhz', '1066 Mhz', 'GDDR3', '1 GB', '64 Bit', 'None', 'BUSINESS', '2800', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE R5 230.jpg', 1, 1),
('GIGABYTE R9 270', 'GIGABYTE', 'AMD', '1189 Mhz', '2100 Mhz', 'GDDR4', '2 GB', '64 Bit', 'None', 'BUSINESS', '7200', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE R9 270.jpg', 1, 1),
('GIGABYTE RTX 2060', 'GIGABYTE', 'NVIDIA', '1750 Mhz', '14000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '30000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RTX 2060.png', 1, 1),
('GIGABYTE RTX 2070', 'GIGABYTE', 'NVIDIA', '1850 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '40000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RTX 2070.png', 1, 1),
('GIGABYTE RX 550', 'GIGABYTE', 'AMD', '1195 Mhz', '7000 Mhz', 'GDDR5', '2 GB', '128 Bits', 'None', 'BUSINESS', '9500', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RX 550.png', 1, 1),
('GIGABYTE RX 580', 'GIGABYTE', 'AMD', '1355 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '256 Bit', '8 Pin', 'GAMING', '20500', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RX 580.jpg', 1, 1),
('GIGABYTE RX VEGA 56', 'GIGABYTE', 'AMD', '1170 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '35000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RX VEGA 56.png', 1, 1),
('GIGABYTE RX VEGA 64', 'GIGABYTE', 'AMD', '2000 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '2048 Bit', '8+8 Pin', 'GAMING', '45000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE RX VEGA 64.png', 1, 1),
('joerjq', 'MSI', 'NVIDIA', '1231', 'qweq', 'GDDR5X', '8 GB', 'qqw', 'qwe', 'PROFESSIONAL', '1231', 'retailer', 'as.png', 1, 0),
('MSI GT 1030', 'MSI', 'NVIDIA', '1189 Mhz', '2100 Mhz', 'GDDR4', '2 GB', '64 Bit', 'None', 'BUSINESS', '8000', 'BulidNgine Pvt. Ltd. ', 'MSI GT 1030.jpg', 1, 1),
('MSI GT 710', 'MSI', 'NVIDIA', '954 Mhz', '1600 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '3300', 'BulidNgine Pvt. Ltd. ', 'MSI GT 710.jpg', 1, 1),
('MSI GTX 1050Ti', 'MSI', 'NVIDIA', '1341 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'PROFESSIONAL', '13500', 'BulidNgine Pvt. Ltd. ', 'MSI GTX 1050Ti.png', 1, 1),
('MSI GTX 1060', 'MSI', 'NVIDIA', '1544 Mhz', '8000 Mhz', 'GDDR5', '3 GB', '192 Bit', '8 Pin', 'GAMING', '16000', 'BulidNgine Pvt. Ltd. ', 'MSI GTX 1060.jpg', 1, 1),
('MSI GTX 1070', 'MSI', 'NVIDIA', '1506 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '28000', 'BulidNgine Pvt. Ltd. ', 'MSI GTX 1070.png', 1, 1),
('MSI GTX 1650', 'MSI', 'NVIDIA', '1860 Mhz', '8000 Mhz', 'GDDR5', '4 GB', '128 Bits', '6 pin', 'GAMING', '16000', 'BulidNgine Pvt. Ltd. ', 'MSI GTX 1650.jpg', 1, 1),
('MSI GTX 1660', 'MSI', 'NVIDIA', '1785 Mhz', '8000 Mhz', 'GDDR5', '6 GB', '192 Bit', '8 Pin', 'GAMING', '19500', 'BulidNgine Pvt. Ltd. ', 'MSI GTX 1660.png', 1, 1),
('MSI R7 240', 'MSI', 'AMD', '730 Mhz', '1800 Mhz', 'GDDR3', '2 GB', '64 Bit', 'None', 'BUSINESS', '4500', 'BulidNgine Pvt. Ltd. ', 'MSI R7 240.jpg', 1, 1),
('MSI RTX 2080', 'MSI', 'NVIDIA', '1900 Mhz', '14000 Mhz', 'GDDR6', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '41000', 'BulidNgine Pvt. Ltd. ', 'MSI RTX 2080.png', 1, 1),
('MSI RTX 2080Ti', 'MSI', 'NVIDIA', '2000 Mhz', '14000 Mhz', 'GDDR6', '11 GB', '352 Bits', '8+8 Pin', 'GAMING', '140000', 'BulidNgine Pvt. Ltd. ', 'MSI RTX 2080Ti.png', 1, 1),
('MSI RX 550', 'MSI', 'AMD', '1203 Mhz', '7000 Mhz', 'GDDR5', '4 GB', '128 Bits', 'None', 'PROFESSIONAL', '10450', 'BulidNgine Pvt. Ltd. ', 'MSI RX 550.png', 1, 1),
('MSI RX 580', 'MSI', 'AMD', '1341 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8 Pin', 'GAMING', '27000', 'BulidNgine Pvt. Ltd. ', 'MSI RX 580.jpg', 1, 1),
('MSI RX 590', 'MSI', 'AMD', '1544 Mhz', '8000 Mhz', 'GDDR5', '8 GB', '256 Bit', '8+8 Pin', 'GAMING', '28000', 'BulidNgine Pvt. Ltd. ', 'MSI RX 590.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `loginid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`loginid`, `password`, `usertype`, `status`) VALUES
('adhin', '837b783362236598611ab6cdf081154c', 'user', 1),
('ajualx', '28dcc1da30ca857246c1d160db06abef', 'user', 1),
('asd', '7815696ecbf1c96e6894b779456d330e', 'admin', 1),
('j', '363b122c528f54df4a0446b6bab05515', 'user', 1),
('Joe', '3a368818b7341d48660e8dd6c5a77dbe', 'user', 1),
('retailer', 'bdca866007fb255201297d2a15a49513', 'retailer', 1),
('retailer1', 'bdca866007fb255201297d2a15a49513', 'retailer', 1);

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memory_tbl`
--

INSERT INTO `memory_tbl` (`name`, `company`, `size`, `form_factor`, `type`, `ssd_type`, `rpm`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('acc', 'asd', 1000, '\"3.5', 'HDD', 'nil', 1231, '1231', 'retailer', 'as.png', 1, 0),
('asd', 'asd', 3000, 'M.2', 'SSD', 'TLC', 0, '123', 'retailer', 'as.png', 1, 0),
('HYPERX A400', 'HYPERX', 120, '\"2.5', 'SSD', '3D V-NAND', 0, '2900', 'BulidNgine Pvt. Ltd. ', 'HYPERX A400.jpg', 1, 1),
('HYPERX FURY S44', 'HYPERX', 240, '\"2.5', 'SSD', '3D V-NAND', 0, '5000', 'BulidNgine Pvt. Ltd. ', 'HYPERX FURY S44.jpg', 1, 1),
('joerj', 'asd', 2000, '\"3.5', 'HDD', 'nil', 1312, '1311', 'retailer1', 'joly.png', 1, 0),
('null', '', 0, '\"2.5', 'HDD', '', 0, '0', 'BulidNgine Pvt. Ltd. ', '', 0, 1),
('SAMSUNG 860 DCT', 'Samsung', 2000, '\"2.5', 'SSD', '3D V-NAND', 0, '30000', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 860 DCT.jpg', 1, 1),
('SAMSUNG 860 EVO', 'Samsung', 500, '\"2.5', 'SSD', '3D V-NAND', 0, '6800', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 860 EVO.jpg', 1, 1),
('SAMSUNG 920 DCT', 'Samsung', 2000, '\"2.5', 'SSD', '3D V-NAND', 0, '30000', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 920 DCT.jpg', 1, 1),
('SEAGATE ST2000DM006', 'SEAGATE', 2000, '\"3.5', 'HDD', 'nil', 7200, '4000', 'BulidNgine Pvt. Ltd. ', 'SEAGATE ST2000DM006.jpg', 1, 1),
('SEAGATE ST3000DM006', 'SEAGATE', 3000, '\"3.5', 'HDD', 'nil', 7200, '6400', 'BulidNgine Pvt. Ltd. ', 'SEAGATE ST3000DM006.jpg', 1, 1),
('SEAGATE ST500DM009', 'SEAGATE', 500, '\"3.5', 'HDD', 'nil', 7200, '4500', 'BulidNgine Pvt. Ltd. ', 'SEAGATE ST500DM009.jpg', 1, 1),
('WD BLACK DWS500', 'Western Digital', 500, 'M.2', 'SSD', '3D V-NAND', 0, '11000', 'BulidNgine Pvt. Ltd. ', 'WD BLACK DWS500.png', 1, 1),
('WD BLUE DWS1000', 'Western Digital', 1000, '\"2.5', 'SSD', 'TLC', 0, '15000', 'BulidNgine Pvt. Ltd. ', 'WD BLUE DWS1000.png', 1, 1),
('WD BLUE DWS1000M', 'Western Digital', 1000, 'M.2', 'SSD', '3D V-NAND', 0, '10000', 'BulidNgine Pvt. Ltd. ', 'WD BLUE DWS1000M.jpg', 1, 1),
('WD BLUE WD10EZEX', 'Western Digital', 1000, '\"3.5', 'HDD', 'nil', 7200, '4900', 'BulidNgine Pvt. Ltd. ', 'WD BLUE WD10EZEX.jpg', 1, 1),
('WD BLUE WD5000AZRZ', 'Western Digital', 500, '\"3.5', 'HDD', 'nil', 5400, '2400', 'BulidNgine Pvt. Ltd. ', 'WD BLUE WD5000AZRZ.jpg', 1, 1),
('WD GREEN DWS120', 'Western Digital', 120, '\"2.5', 'SSD', 'TLC', 0, '2400', 'BulidNgine Pvt. Ltd. ', 'WD GREEN DWS120.jpg', 1, 1),
('WD GREEN DWS240', 'Western Digital', 240, 'M.2', 'SSD', '3D V-NAND', 0, '2900', 'BulidNgine Pvt. Ltd. ', 'WD GREEN DWS240.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(11, 'ho', '2021-04-02 12:38:29', 'user'),
(12, 'Hello, how are you.', '2021-04-02 12:38:29', 'bot');

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mothertbl`
--

INSERT INTO `mothertbl` (`name`, `company`, `socket`, `form_factor`, `ram_type`, `max_ram`, `pcie_count`, `mb_pow`, `cpu_pow`, `chipset`, `ram_count`, `sata_count`, `m2_count`, `max_freq`, `purpose`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('ASROCK AB350 PRO4', 'ASROCK', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B350', 4, 4, 2, 2666, 'GAMING', '8000', 'BulidNgine Pvt. Ltd. ', 'ASROCK AB350 PRO4.jpg', 1, 1),
('ASROCK B250', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B250', 4, 4, 2, 2666, 'GAMING', '8400', 'BulidNgine Pvt. Ltd. ', 'ASROCK B250.jpg\r\n', 1, 1),
('ASROCK B365', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2666, 'GAMING', '9800', 'BulidNgine Pvt. Ltd. ', 'ASROCK B365.jpg', 1, 1),
('ASROCK FM2A68M', 'ASROCK', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '2850', 'BulidNgine Pvt. Ltd. ', 'ASROcK FM2A68M.jpg\r\n', 1, 1),
('ASROCK H110M-DGS', 'ASROCK', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '3060', 'BulidNgine Pvt. Ltd. ', 'ASROOK H110M-DGS.jpg', 1, 1),
('ASROCK H270', 'ASROCK', 'AM4', 'ATX', 'DDR4', 32, 2, 24, 4, 'INTEL H270', 2, 4, 2, 2400, 'GAMING', '7300', 'BulidNgine Pvt. Ltd. ', 'ASROCK H270.jpg', 1, 1),
('ASROCK H370', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '8400', 'BulidNgine Pvt. Ltd. ', 'ASROCK H370.jpg', 1, 1),
('ASROCK H370F', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '11600', 'BulidNgine Pvt. Ltd. ', 'ASROCK H370F.jpg', 1, 1),
('ASROCK X399', 'ASROCK', 'TR4', 'ATX', 'DDR4', 128, 4, 24, 16, 'AMD X399 ', 8, 6, 3, 4133, 'PROFESSIONAL', '34500', 'BulidNgine Pvt. Ltd. ', 'ASROCK X399.jpg', 1, 1),
('ASROCK Z390', 'ASROCK', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z390', 4, 4, 2, 4300, 'PROFESSIONAL', '9700', 'BulidNgine Pvt. Ltd. ', 'ASROCK Z390.jpg\r\n', 1, 1),
('ASUS A68HM-K', 'ASUS ', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '2920', 'BulidNgine Pvt. Ltd. ', 'ASUS A68HM-K.jpg', 1, 1),
('ASUS B150 PRO', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B150', 4, 6, 1, 2133, 'GAMING', '5830', 'BulidNgine Pvt. Ltd. ', 'ASUS B150 PRO.jpg', 1, 1),
('ASUS B360 MC', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 1, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'BUSINESS', '8750', 'BulidNgine Pvt. Ltd. ', 'ASUS B360 MC.jpg', 1, 1),
('ASUS B365-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B365', 4, 4, 2, 2400, 'BUSINESS', '8700', 'BulidNgine Pvt. Ltd. ', 'ASUS B365-PLUS.jpg', 1, 1),
('ASUS EX B250-V7', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL B250', 4, 4, 0, 2400, 'GAMING', '9100', 'BulidNgine Pvt. Ltd. ', 'ASUS EX B250-V7.jpg', 1, 1),
('ASUS EX-B360M', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 8, 'INTEL H370', 2, 4, 2, 2666, 'GAMING', '8000', 'BulidNgine Pvt. Ltd. ', 'ASUS EX-B360M.jpg', 1, 1),
('ASUS H110-PLUS', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '6600', 'BulidNgine Pvt. Ltd. ', 'ASUS H110-PLUS.jpg', 1, 1),
('ASUS H310-PLUS', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2666, 'GAMING', '8800', 'BulidNgine Pvt. Ltd. ', 'ASUS H310-PLUS.jpg\r\n', 1, 1),
('ASUS M5A78L-M', 'ASUS', 'AM3+', 'MicroATX', 'DDR3', 16, 1, 24, 4, 'AMD 760G', 2, 4, 0, 1866, 'BUSINESS', '2920', 'BulidNgine Pvt. Ltd. ', 'ASUS M5A78L-M.jpg', 1, 1),
('ASUS MAXIMUS IX', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL Z390', 2, 6, 2, 4700, 'PROFESSIONAL', '30000', 'BulidNgine Pvt. Ltd. ', 'ASUS MAXIMUS IX.jpg', 1, 1),
('ASUS MAXIMUS VIII', 'ASUS', 'LGA 1151', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z170', 4, 6, 2, 3800, 'GAMING', '13500', 'BulidNgine Pvt. Ltd. ', 'ASUS MAXIMUS VIII.jpg', 1, 1),
('ASUS PRIME H310M-C', 'ASUS', 'LGA 1151 V2', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H310', 2, 4, 1, 2166, 'BUSINESS', '6600', 'BulidNgine Pvt. Ltd. ', 'ASUS PRIME H310M-C.jpg', 1, 1),
('ASUS ROG B360-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'BulidNgine Pvt. Ltd. ', 'ASUS ROG B360-H.jpg', 1, 1),
('ASUS ROG B450-E', 'ASUS', 'AM4', 'ATX', 'DDR4', 64, 3, 24, 8, 'AMD B450', 4, 4, 2, 3533, 'GAMING', '14150', 'BulidNgine Pvt. Ltd. ', 'ASUS ROG B450-E.jpg', 1, 1),
('ASUS ROG STRIX H370-F', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL H370', 4, 4, 2, 2666, 'GAMING', '13100', 'BulidNgine Pvt. Ltd. ', 'ASUS ROG STRIX H370-F.jpg', 1, 1),
('ASUS ROG Z390-H', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 3, 24, 8, 'INTEL Z390', 4, 4, 2, 4266, 'PROFESSIONAL', '20900', 'BulidNgine Pvt. Ltd. ', 'ASUS ROG Z390-H.jpG', 1, 1),
('ASUS TUF Z370', 'ASUS', 'LGA 1151 V2', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z370', 4, 4, 2, 4000, 'GAMING', '13450', 'BulidNgine Pvt. Ltd. ', 'ASUS TUF Z370.jpg', 1, 1),
('ASUS X299', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 4, 24, 16, 'INTEL X299', 8, 6, 2, 4133, 'PROFESSIONAL', '46000', 'BulidNgine Pvt. Ltd. ', 'ASUS X299.jpg', 1, 1),
('ASUS X299-XE', 'ASUS', 'LGA 2066', 'ATX', 'DDR4', 128, 3, 24, 16, 'INTEL Z390', 8, 6, 2, 4133, 'PROFESSIONAL', '40000', 'BulidNgine Pvt. Ltd. ', 'ASUS X299-XE.jpg', 1, 1),
('ASUS X99', 'ASUS', 'LGA 2011-3', 'ATX', 'DDR4', 64, 3, 24, 16, 'INTEL X99', 8, 6, 1, 2400, 'GAMING', '31000', 'BulidNgine Pvt. Ltd. ', 'ASUS X99.jpg', 1, 1),
('GIGABYTE B450', 'GIGABYTE', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 2, 3200, 'GAMING', '10500', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE B450.jpg\r\n', 1, 1),
('GIGABYTE F2A68HM', 'GIGABYTE', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 8, 'AMD A68H', 2, 4, 0, 2400, 'BUSINESS', '3150', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE F2A68HM.JPG', 1, 1),
('GIGABYTE H110-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 32, 1, 24, 8, 'INTEL H110', 2, 4, 1, 2133, 'BUSINESS', '5500', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE H110-D3.jpg', 1, 1),
('GIGABYTE X399', 'GIGABYTE', 'TR4', 'ATX', 'DDR4', 128, 5, 24, 16, 'AMD X399', 8, 6, 1, 3600, 'GAMING', '44000', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE X399.jpg', 1, 1),
('GIGABYTE Z270P-D3', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 6, 1, 3866, 'GAMING', '6900', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE Z270P-D3.jpg', 1, 1),
('GIGABYTE Z270P-D4', 'GIGABYTE', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL Z270', 4, 4, 2, 3866, 'GAMING', '7150', 'BulidNgine Pvt. Ltd. ', 'GIGABYTE Z270P-D4.jpg', 1, 1),
('joerja', 'asd', 'TR4', 'asd', 'DDR4', 1, 1, 1, 1, '1', 1, 1, 1, 1, 'PROFESSIONAL', '1', 'retailer', 'as.png', 1, 0),
('MSI A68HM-E33', 'MSI', 'FM2+', 'MicroATX', 'DDR3', 32, 1, 24, 4, 'AMD A68H', 2, 4, 0, 2133, 'BUSINESS', '3300', 'BulidNgine Pvt. Ltd. ', 'MSI A68HM-E33.jpg', 1, 1),
('MSI B360GPC', 'MSI', 'LGA 1151', 'ATX', 'DDR4', 64, 2, 24, 8, 'INTEL B360', 4, 4, 2, 2666, 'GAMING', '12000', 'BulidNgine Pvt. Ltd. ', 'MSI B360GPC.jpg', 1, 1),
('MSI B450', 'MSI', 'AM4', 'MicroATX', 'DDR4', 64, 2, 24, 8, 'INTEL B450', 4, 4, 2, 2666, 'GAMING', '9500', 'BulidNgine Pvt. Ltd. ', 'MSI B450.png\r\n', 1, 1),
('MSI B450 GAMING PLUS', 'MSI', 'AM4', 'ATX', 'DDR4', 64, 2, 24, 8, 'AMD B450', 4, 4, 1, 3466, 'GAMING', '10500', 'BulidNgine Pvt. Ltd. ', 'MSI B450 GAMING PLUS.png\r\n', 1, 1),
('MSI H110M', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 32, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2133, 'BUSINESS', '2920', 'BulidNgine Pvt. Ltd. ', 'MSI H110M.jpg', 1, 1),
('MSI H110M-R2', 'MSI', 'LGA 1151', 'MicroATX', 'DDR4', 64, 1, 24, 4, 'INTEL H110', 2, 4, 0, 2666, 'BUSINESS', '3100', 'BulidNgine Pvt. Ltd. ', 'MSI H110M-R2.jpg', 1, 1);

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
  `date` varchar(100) NOT NULL,
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `status` int(2) NOT NULL DEFAULT 1,
  `bulid` int(2) NOT NULL DEFAULT 0,
  `save` int(2) NOT NULL DEFAULT 0,
  `buy` int(2) NOT NULL DEFAULT 0,
  `remark` varchar(100) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`orderid`, `loginid`, `name`, `category`, `price`, `qty`, `total`, `date`, `sold_by`, `status`, `bulid`, `save`, `buy`, `remark`, `pic`) VALUES
(167, 'ajualx', 'INTEL I9-9900K', 'CPU', '41500', 1, '41500', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(168, 'ajualx', 'APPLE MAC PRO', 'cabinet', '18000', 1, '18000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(198, 'Joe', 'MAC PRO INTEL I7-9700K 4900 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'professional', '123630', 1, '123630', '29 / 01 / 2021', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 1, 'Order in Transit', 'APPLE MAC PRO'),
(208, 'joe', ' LITE 5 INTEL I7-10700 4800 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'professional', '108200', 1, '108200', '29 / 01 / 2021', 'BulidNgine Pvt. Ltd. ', 0, 0, 0, 1, 'Order cancelled by User', 'COOLER MASTER LITE 5'),
(217, 'joe', 'MATREXX 55X INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics MSI GDDR3 2 GB', 'Business', '34900', 1, '34900', '22 / 02 / 2021', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 1, 'Processing Order', 'DEEPCOOL MATREXX 55X'),
(226, 'joe', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'gaming', '52920', 1, '52920', '19 / 04 / 2021', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 1, 'Processing Order', 'COOLER MASTER MB500'),
(227, 'joe', 'MSI GT 710', 'GPU', '3300', 1, '3300', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(236, 'joe', 'MAC PRO AMD A6-7400K 3900 Mhz  4Gb  DDR3   RAM 240Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '39970', 1, '39970', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'APPLE MAC PRO'),
(258, 'Joe', 'MATREXX 5S INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '31220', 1, '31220', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 5S'),
(259, 'joe', 'MSI A68HM-E33', 'Motherboard', '3300', 1, '3300', '29 / 01 / 2021', 'BulidNgine Pvt. Ltd. ', 0, 0, 0, 1, 'Order cancelled by User', ''),
(302, 'joe', 'MATREXX 5S INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '39820', 1, '39820', '2020/12/13 08:12:48', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 5S'),
(311, 'joe', 'MATREXX 55X INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR4 2 GB', 'Business', '33020', 1, '33020', '2020/12/13 08:12:10', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 55X'),
(321, 'joe', 'MATREXX 5S INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD 1000Gb   SSD  Graphics MSI GDDR3 2 GB', 'Business', '45550', 1, '45550', '2020/12/29 08:12:59', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 5S'),
(322, 'joe', 'AMD A6-7400K', 'CPU', '3500', 1, '3500', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(323, 'joe', 'ASUS B150 PRO', 'Motherboard', '5830', 1, '5830', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(324, 'joe', 'GOODRAM 0QH0', 'RAM', '1250', 1, '1250', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(325, 'joe', 'HYPERX A400', 'MEMORY', '2900', 1, '2900', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(326, 'joe', 'WD BLACK DWS500', 'MEMORY', '11000', 1, '11000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(327, 'joe', 'DEEPCOOL DN500', 'SMPS', '5000', 1, '5000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(328, 'joe', 'DEEPCOOL 15 PWM', 'CPU FAN', '1400', 1, '1400', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(329, 'joe', 'COOLER MASTER ELITE 350', 'cabinet', '3000', 1, '3000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(330, 'joe', 'COOLMASTER V2', 'SMPS', '5300', 1, '5300', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(331, 'joe', 'WD BLACK DWS500', 'MEMORY', '11000', 1, '11000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(332, 'joe', 'WD BLACK DWS500', 'MEMORY', '11000', 1, '11000', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(342, 'joe', 'TESSERACT BF INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '30220', 1, '30220', '2021/01/07 12:01:47', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL TESSERACT BF'),
(360, 'joe', 'MATREXX 55X INTEL G4900 3100 Mhz  4Gb  DDR4   RAM 120Gb   HDD 240Gb   SSD  Graphics GIGABYTE GDDR3 1 GB', 'Business', '34200', 1, '34200', '2021/01/26 04:01:36', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 55X'),
(370, 'joe', ' LITE 5 INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 500Gb   HDD 500Gb   SSD  Graphics MSI GDDR4 2 GB', 'gaming', '58830', 1, '58830', '2021/01/27 10:01:27', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'COOLER MASTER LITE 5'),
(371, 'joe', 'ASUS H110-PLUS', 'Motherboard', '6600', 1, '6600', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 1, 0, '', ''),
(381, 'j', 'SL600M INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 500Gb   HDD 240Gb   SSD  Graphics GIGABYTE GDDR5 4 GB', 'gaming', '60350', 1, '60350', '2021/01/28 09:01:51', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'COOLER MASTER SL600M'),
(392, 'j', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics MSI GDDR4 2 GB', 'gaming', '67060', 1, '67060', '2021/01/28 11:01:53', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'COOLER MASTER MB500'),
(402, 'JOE', ' LITE 5 AMD RYZEN 2600X 4200 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR5 4 GB', 'gaming', '78500', 1, '78500', '20 / 02 / 2021', 'BulidNgine Pvt. Ltd. ', 0, 0, 0, 1, 'Order cancelled by User', 'COOLER MASTER LITE 5'),
(416, 'joe', 'MATREXX 55X INTEL G4500 3500 Mhz  8Gb  DDR4   RAM 1000Gb   HDD 500Gb   SSD  Graphics GIGABYTE GDDR3 1 GB', 'gaming', '52000', 1, '52000', '2021/02/22 06:02:32', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', 'DEEPCOOL MATREXX 55X'),
(417, 'joe', 'ASROCK FM2A68M', 'Motherboard', '2850', 1, '2850', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(418, 'joe', 'MSI H110M', 'Motherboard', '2920', 1, '2920', '', 'BulidNgine Pvt. Ltd. ', 1, 0, 0, 0, '', ''),
(419, 'Joe', 'MSI H110M', 'Motherboard', '2920', 1, '2920', '2021/03/30 11:03:11', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'MSI H110M'),
(420, 'Joe', 'INTEL G3930', 'CPU', '5500', 1, '5500', '2021/03/30 11:03:16', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'INTEL G3930'),
(421, 'Joe', 'SAMSUNG 3DB0', 'RAM', '6000', 1, '6000', '2021/03/30 11:03:18', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'SAMSUNG 3DB0'),
(422, 'Joe', 'GIGABYTE R5 230', 'GPU', '2800', 1, '2800', '2021/03/30 11:03:20', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'GIGABYTE R5 230'),
(423, 'Joe', 'WD BLUE WD5000AZRZ', 'MEMORY', '2400', 1, '2400', '2021/03/30 11:03:22', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'WD BLUE WD5000AZRZ'),
(424, 'Joe', 'AEROCOOL VX 500W', 'SMPS', '3200', 1, '3200', '2021/03/30 11:03:24', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'AEROCOOL VX 500W'),
(425, 'Joe', 'DEEPCOOL 15 PWM', 'CPU FAN', '1400', 1, '1400', '2021/03/30 11:03:26', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'DEEPCOOL 15 PWM'),
(427, 'joe', 'ASROCK FM2A68M', 'Motherboard', '2850', 1, '2850', '2021/04/13 08:04:47', 'BulidNgine Pvt. Ltd. ', 1, 1, 0, 0, '', 'ASROCK FM2A68M');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `id` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `date` varchar(100) NOT NULL,
  `category` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prebuilt_tbl`
--

INSERT INTO `prebuilt_tbl` (`prebuilt_id`, `loginid`, `name`, `motherboard`, `cpu`, `ram`, `gpu`, `mem`, `mem_m2`, `smps`, `cpu_fan`, `cabinet`, `cpu_name`, `cpu_freq`, `ram_size`, `ram_type`, `hdd_size`, `grap_comp`, `grap_size`, `os`, `apps`, `display`, `keyboard`, `mouse`, `price`, `pic`, `date`, `category`, `status`) VALUES
(4, 'Joe', 'MAC PRO INTEL I7-9700K 4900 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'ASUS B150 PRO', 'INTEL I7-9700K', 'SAMSUNG 3DB0', 'ASUS GT 710', 'SAMSUNG 920 DCT', 'WD BLUE DWS1000M', 'ZALMAN ZM850', 'DEEPCOOL CASTLE 240', 'APPLE MAC PRO', 'INTEL I7-9700K', 4900, 8, 'DDR4', 2000, 'ASUS', 1, 'null', 'null', 'null', 'null', 'null', '123630', 'APPLE MAC PRO', '', 'professional', 1),
(5, 'joe', ' LITE 5 INTEL I7-10700 4800 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR3 1 GB', 'ASUS H310-PLUS', 'INTEL I7-10700', 'GOODRAM L17S', 'ASUS GT 710', 'SAMSUNG 860 DCT', 'WD BLUE DWS1000M', 'AEROCOOL VX 700W', 'DEEPCOOL MAXX 300', 'COOLER MASTER LITE 5', 'INTEL I7-10700', 4800, 8, 'DDR4', 2000, 'ASUS', 1, 'null', 'null', 'null', 'null', 'null', '108200', 'COOLER MASTER LITE 5', '', 'professional', 1),
(6, 'joe', 'MATREXX 55X INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics MSI GDDR3 2 GB', 'ASUS H110-PLUS', 'INTEL G3930', 'SAMSUNG 3DB0', 'MSI GT 710', 'HYPERX A400', 'null', 'DEEPCOOL DN500', 'DEEPCOOL 31 PWM', 'DEEPCOOL MATREXX 55X', 'INTEL G3930', 2900, 8, 'DDR4', 120, 'MSI', 2, 'null', 'null', 'null', 'null', 'null', '34900', 'DEEPCOOL MATREXX 55X', '', 'Business', 1),
(7, 'joe', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'MSI H110M', 'INTEL I7-7700', 'SAMSUNG 3DB0', 'GIGABYTE R5 230', 'WD BLUE WD5000AZRZ', 'null', 'AEROCOOL VX 500W', 'AEROCOOL VERKHO 3+', 'COOLER MASTER MB500', 'INTEL I7-7700', 4200, 8, 'DDR4', 500, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '52920', 'COOLER MASTER MB500', '', 'gaming', 1),
(8, 'joe', 'MAC PRO AMD A6-7400K 3900 Mhz  4Gb  DDR3   RAM 240Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'ASUS A68HM-K', 'AMD A6-7400K', 'SAMSUNG 3CH0', 'GIGABYTE R5 230', 'HYPERX FURY S44', 'null', 'DEEPCOOL DN500', 'DEEPCOOL CK-AM209', 'APPLE MAC PRO', 'AMD A6-7400K', 3900, 4, 'DDR3', 240, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '39970', 'APPLE MAC PRO', '', 'Business', 1),
(9, 'Joe', 'MATREXX 5S INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'MSI H110M-R2', 'INTEL G3930', 'GOODRAM L17S', 'GIGABYTE R5 230', 'HYPERX A400', 'null', 'DEEPCOOL DN500', 'DEEPCOOL 31 PWM', 'DEEPCOOL MATREXX 5S', 'INTEL G3930', 2900, 8, 'DDR4', 120, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '31220', 'DEEPCOOL MATREXX 5S', '', 'Business', 1),
(10, 'joe', 'MATREXX 5S INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'MSI H110M', 'INTEL G3900', 'SAMSUNG 3DB0', 'GIGABYTE R5 230', 'HYPERX A400', 'null', 'AEROCOOL KCAS 650G', 'DEEPCOOL CASTLE 320', 'DEEPCOOL MATREXX 5S', 'INTEL G3900', 2800, 8, 'DDR4', 120, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '39820', 'DEEPCOOL MATREXX 5S', '2020/12/13 08:12:48', 'Business', 1),
(11, 'joe', 'MATREXX 55X INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 120Gb   HDD  Graphics GIGABYTE GDDR4 2 GB', 'MSI H110M', 'INTEL G3900', 'SAMSUNG 3DB0', 'GIGABYTE R9 270', 'HYPERX A400', 'null', 'DEEPCOOL DN500', 'DEEPCOOL 31 PWM', 'DEEPCOOL MATREXX 55X', 'INTEL G3900', 2800, 8, 'DDR4', 120, 'GIGABYTE', 2, 'null', 'null', 'null', 'null', 'null', '33020', 'DEEPCOOL MATREXX 55X', '2020/12/13 08:12:10', 'Business', 1),
(12, 'joe', 'MATREXX 5S INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 120Gb   HDD 1000Gb   SSD  Graphics MSI GDDR3 2 GB', 'GIGABYTE Z270P-D4', 'INTEL G3930', 'GOODRAM L17S', 'MSI GT 710', 'HYPERX A400', 'WD BLUE DWS1000M', 'DEEPCOOL DN500', 'DEEPCOOL 15 PWM', 'DEEPCOOL MATREXX 5S', 'INTEL G3930', 2900, 8, 'DDR4', 120, 'MSI', 2, 'null', 'null', 'null', 'null', 'null', '45550', 'DEEPCOOL MATREXX 5S', '2020/12/29 08:12:59', 'Business', 1),
(13, 'joe', 'TESSERACT BF INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics GIGABYTE GDDR3 1 GB', 'MSI H110M', 'INTEL G3930', 'SAMSUNG 3DB0', 'GIGABYTE R5 230', 'WD BLUE WD5000AZRZ', 'null', 'AEROCOOL VX 500W', 'DEEPCOOL 15 PWM', 'DEEPCOOL TESSERACT BF', 'INTEL G3930', 2900, 8, 'DDR4', 500, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '30220', 'DEEPCOOL TESSERACT BF', '2021/01/07 12:01:47', 'Business', 1),
(14, 'joe', 'MATREXX 55X INTEL G4900 3100 Mhz  4Gb  DDR4   RAM 120Gb   HDD 240Gb   SSD  Graphics GIGABYTE GDDR3 1', 'ASROCK H370F', 'INTEL G4900', 'GOODRAM L15S', 'GIGABYTE R5 230', 'WD GREEN DWS120', 'WD GREEN DWS240', 'AEROCOOL VX 400W', 'DEEPCOOL 15 PWM', 'DEEPCOOL MATREXX 55X', 'INTEL G4900', 3100, 4, 'DDR4', 120, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '34200', 'DEEPCOOL MATREXX 55X', '2021/01/26 04:01:36', 'Business', 1),
(15, 'joe', ' LITE 5 INTEL G3930 2900 Mhz  8Gb  DDR4   RAM 500Gb   HDD 500Gb   SSD  Graphics MSI GDDR4 2 GB', 'ASUS B150 PRO', 'INTEL G3930', 'SAMSUNG 3DB0', 'MSI GT 1030', 'SAMSUNG 860 EVO', 'WD BLACK DWS500', 'COOLMASTER V3', 'AEROCOOL VERKHO 2', 'COOLER MASTER LITE 5', 'INTEL G3930', 2900, 8, 'DDR4', 500, 'MSI', 2, 'null', 'null', 'null', 'null', 'null', '58830', 'COOLER MASTER LITE 5', '2021/01/27 10:01:27', 'gaming', 1),
(16, 'j', 'SL600M INTEL G3900 2800 Mhz  8Gb  DDR4   RAM 500Gb   HDD 240Gb   SSD  Graphics GIGABYTE GDDR5 4 GB', 'GIGABYTE Z270P-D3', 'INTEL G3900', 'SAMSUNG 3DB0', 'GIGABYTE GTX 970', 'SAMSUNG 860 EVO', 'WD GREEN DWS240', 'COOLMASTER V2', 'DEEPCOOL MAXX GTE', 'COOLER MASTER SL600M', 'INTEL G3900', 2800, 8, 'DDR4', 500, 'GIGABYTE', 4, 'null', 'null', 'null', 'null', 'null', '60350', 'COOLER MASTER SL600M', '2021/01/28 09:01:51', 'gaming', 1),
(17, 'j', 'MB500 INTEL I7-7700 4200 Mhz  8Gb  DDR4   RAM 500Gb   HDD  Graphics MSI GDDR4 2 GB', 'ASROCK H110M-DGS', 'INTEL I7-7700', 'SAMSUNG 3DB0', 'MSI GT 1030', 'WD BLUE WD5000AZRZ', 'null', 'AEROCOOL KCAS 650G', 'DEEPCOOL 31 PWM', 'COOLER MASTER MB500', 'INTEL I7-7700', 4200, 8, 'DDR4', 500, 'MSI', 2, 'null', 'null', 'null', 'null', 'null', '67060', 'COOLER MASTER MB500', '2021/01/28 11:01:53', 'gaming', 1),
(18, 'JOE', ' LITE 5 AMD RYZEN 2600X 4200 Mhz  8Gb  DDR4   RAM 2000Gb   HDD 1000Gb   SSD  Graphics ASUS GDDR5 4 G', 'MSI B450 GAMING PLUS', 'AMD RYZEN 2600X', 'HYPERX 6PB3', 'ASUS GTX 1650', 'SEAGATE ST2000DM006', 'WD BLUE DWS1000M', 'DEEPCOOL DN500', 'COOL MASTER AIR 8', 'COOLER MASTER LITE 5', 'AMD RYZEN 2600X', 4200, 8, 'DDR4', 2000, 'ASUS', 4, 'null', 'null', 'null', 'null', 'null', '78500', 'COOLER MASTER LITE 5', '2021/02/20 02:02:51', 'gaming', 1),
(19, 'joe', 'MATREXX 55X INTEL G4500 3500 Mhz  8Gb  DDR4   RAM 1000Gb   HDD 500Gb   SSD  Graphics GIGABYTE GDDR3 ', 'ASROCK B250', 'INTEL G4500', 'GOODRAM L17S', 'GIGABYTE R5 230', 'WD BLUE WD10EZEX', 'WD BLACK DWS500', 'COOLMASTER V3', 'DEEPCOOL 31 PWM', 'DEEPCOOL MATREXX 55X', 'INTEL G4500', 3500, 8, 'DDR4', 1000, 'GIGABYTE', 1, 'null', 'null', 'null', 'null', 'null', '52000', 'DEEPCOOL MATREXX 55X', '2021/02/22 06:02:32', 'gaming', 1);

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram_tbl`
--

INSERT INTO `ram_tbl` (`name`, `company`, `ram_type`, `ram_size`, `mem_freq`, `fsb`, `voltage`, `timing`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('GOODRAM 0QH0', 'GOODRAM', 'DDR3', 2, 1333, '10600 MB/s', 2, '9-9-9-24', '1250', 'BulidNgine Pvt. Ltd. ', 'GOODRAM 0QH0.jpg', 1, 1),
('GOODRAM 9QHQ', 'GOODRAM', 'DDR3', 4, 1600, '12800 MB/s', 2, '11-11-11-28', '2700', 'BulidNgine Pvt. Ltd. ', 'GOODRAM 9QHQ.jpg', 1, 1),
('GOODRAM L15S', 'GOODRAM', 'DDR4', 4, 2133, '17000 MB/s', 1, '15-15-15', '3200', 'BulidNgine Pvt. Ltd. ', 'GOODRAM L15S.jpg', 1, 1),
('GOODRAM L17S', 'GOODRAM', 'DDR4', 8, 2400, '19200 MB/s', 1, '17-17-17', '6700', 'BulidNgine Pvt. Ltd. ', 'GOODRAM L17S.jpg', 1, 1),
('HYPERX 10FB', 'HYPERX', 'DDR3', 4, 1866, '14900 MB/s', 2, '10-11-10-30', '2700', 'BulidNgine Pvt. Ltd. ', 'HYPERX 10FB.jpg', 1, 1),
('HYPERX 6PB3', 'HYPERX', 'DDR4', 8, 3200, '25600 MB/s', 1, '16-18-18', '7000', 'BulidNgine Pvt. Ltd. ', 'HYPERX 6PB3.jpg', 1, 1),
('HYPERX 80JB', 'HYPERX', 'DDR3', 8, 1866, '14900 MB/s', 2, '10-11-10-30', '3500', 'BulidNgine Pvt. Ltd. ', 'HYPERX 80JB.jpg', 1, 1),
('joerja', 'asd', 'DDR4', 8, 123, 'qwe', 1234, 'qweq', '123', 'retailer', 'as.png', 1, 0),
('SAMSUNG 0QH0', 'Samsung', 'DDR3', 8, 1866, '14900 MB/s', 2, '13-13-13', '4500', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 0QH0.jpg', 1, 1),
('SAMSUNG 3CH0', 'Samsung', 'DDR3', 4, 1600, '12800 MH/s', 2, '11-11-11', '1950', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 3CHO.jpg', 1, 1),
('SAMSUNG 3DB0', 'Samsung', 'DDR4', 8, 2133, '17000 MB/s', 1, '15-15-15-42', '6000', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 3DB0.jpg', 1, 1),
('SAMSUNG 3DH0', 'Samsung', 'DDR3', 2, 1333, '10600 MB/s', 2, '9-9-9', '1100', 'BulidNgine Pvt. Ltd. ', 'SAMSUNG 3DH0.jpg', 1, 1);

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
  `sold_by` varchar(100) NOT NULL DEFAULT 'BulidNgine Pvt. Ltd. ',
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `verified` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smps_tbl`
--

INSERT INTO `smps_tbl` (`name`, `company`, `power`, `cpu_pow`, `mb_pow`, `sata_count`, `pci_count`, `price`, `sold_by`, `pic`, `status`, `verified`) VALUES
('AEROCOOL GM 1200W', 'AeroCool', 1200, '8 pin / 16 pin', '24 pin', 6, 8, '16000', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL GM 1200W.jpg', 1, 1),
('AEROCOOL KCAS 650G', 'AeroCool', 650, '4 pin / 8 pin', '24 pin', 6, 2, '7200', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL KCAS 650G.jpg', 1, 1),
('AEROCOOL VX 400W', 'AeroCool', 400, '4 pin / 8 pin', '24 pin', 2, 0, '2400', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL VX 400W.jpg', 1, 1),
('AEROCOOL VX 500W', 'AeroCool', 500, '4 pin / 8 pin', '24 pin', 3, 1, '3200', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL VX 500W.jpeg', 1, 1),
('AEROCOOL VX 700W', 'AeroCool', 700, '4 pin / 8 pin', '24 pin', 6, 2, '9000', 'BulidNgine Pvt. Ltd. ', 'AEROCOOL VX 700W.png', 1, 1),
('COOLMASTER V2', 'Cooler Master.', 550, '4 pin / 8 pin', '24 pin', 5, 2, '5300', 'BulidNgine Pvt. Ltd. ', 'COOLMASTER v2.jpg', 1, 1),
('COOLMASTER V3', 'Cooler Master.', 600, '4 pin / 8 pin', '24 pin', 6, 2, '6100', 'BulidNgine Pvt. Ltd. ', 'COOLMASTER v3.jpg', 1, 1),
('DEEPCOOL DN500', 'Deepcool', 500, '4 pin / 8 pin', '24 pin', 5, 1, '5000', 'BulidNgine Pvt. Ltd. ', 'DEEPCOOL DN500.jpg', 1, 1),
('joerja', 'asd', 123, '4 pin / 8 pin', '1231', 3, 0, '11231', 'retailer', 'as.png', 1, 0),
('ZALMAN ZM1000', 'ZALMAN', 1000, '4 pin / 8 pin', '24 pin', 6, 4, '14000', 'BulidNgine Pvt. Ltd. ', 'ZALMAN ZM1000.jpg', 1, 1),
('ZALMAN ZM850', 'ZALMAN', 850, '4 pin / 8 pin', '24 pin', 6, 4, '11000', 'BulidNgine Pvt. Ltd. ', 'ZALMAN ZM850.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `reason` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`, `status`, `reason`) VALUES
(1, 'Andaman and Nicobar Island (UT)', 1, ''),
(2, 'Andhra Pradesh', 1, ''),
(3, 'Arunachal Pradesh', 1, ''),
(4, 'Assam', 1, ''),
(5, 'Bihar', 1, ''),
(6, 'Chandigarh (UT)', 1, ''),
(7, 'Chhattisgarh', 1, ''),
(8, 'Dadra and Nagar Haveli (UT)', 1, ''),
(9, 'Daman and Diu (UT)', 1, ''),
(10, 'Delhi (NCT)', 1, ''),
(11, 'Goa', 1, ''),
(12, 'Gujarat', 1, ''),
(13, 'Haryana', 1, ''),
(14, 'Himachal Pradesh', 1, ''),
(15, 'Jammu and Kashmir', 1, ''),
(16, 'Jharkhand', 1, ''),
(17, 'Karnataka', 1, ''),
(18, 'Kerala', 1, ''),
(19, 'Lakshadweep (UT)', 1, ''),
(20, 'Madhya Pradesh', 1, ''),
(21, 'Maharashtra', 1, ''),
(22, 'Manipur', 1, ''),
(23, 'Meghalaya', 1, ''),
(24, 'Mizoram', 1, ''),
(25, 'Nagaland', 1, ''),
(26, 'Odisha', 1, ''),
(27, 'Puducherry (UT)', 1, ''),
(28, 'Punjab', 1, ''),
(29, 'Rajastha', 1, ''),
(30, 'Sikkim', 1, ''),
(31, 'Tamil Nadu', 1, ''),
(32, 'Telangana', 1, ''),
(33, 'Tripura', 1, ''),
(34, 'Uttarakhand', 1, ''),
(35, 'Uttar Pradesh', 1, ''),
(36, 'West Bengal', 1, '');

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
  `pic` varchar(100) NOT NULL DEFAULT 'user.png',
  `loginid` varchar(20) NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`name`, `address`, `gender`, `state`, `district`, `email`, `phone`, `pic`, `loginid`, `regid`) VALUES
('asd', 'asd', 'M', 18, 'Kottayam', 'asd@gmail.com', '7897897897', 'admin.png', 'asd', 6),
('jobin', 'ambatu', 'M', 18, 'Kottayam', 'jobinrj31255@gmail.com', '8977897788', 'user.png', 'Joe', 7),
('Aju Alex', 'My Address', 'M', 18, 'Kottayam', 'hellogmagil@com', '8779322316', 'user.png', 'ajualx', 8),
('retailer', 'asd', 'M', 1, 'North and Middle Andama', 'retailer@gmail.com', '9990804990', 'retailer.png', 'retailer', 9),
('retailer1', 'asd', 'M', 1, 'North and Middle Andama', 'retailer1@gmail.com', '9990804990', 'retailer.png', 'retailer1', 11),
('ADHIN BABU', '90/13\r\nKOZHIKODE\r\n', 'M', 2, '', 'adhinbabu1998@gmaio.com', '9990804990', 'user.png', 'adhin', 12),
('jo', 'as', 'M', 18, 'Kottayam', 'abc@gmail.com', '9111111111', 'user.png', 'j', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet_tbl`
--
ALTER TABLE `cabinet_tbl`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `prebuilt_tbl`
--
ALTER TABLE `prebuilt_tbl`
  MODIFY `prebuilt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
