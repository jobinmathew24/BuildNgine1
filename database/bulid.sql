-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 09:34 PM
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
-- Table structure for table `ram_tbl`
--

CREATE TABLE `ram_tbl` (
  `name` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `ram_type` varchar(10) NOT NULL,
  `ram_size` int(10) NOT NULL,
  `mem_freq` int(10) NOT NULL,
  `fsb` varchar(20) NOT NULL,
  `voltage` decimal(10,0) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `pic` varchar(25) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram_tbl`
--

INSERT INTO `ram_tbl` (`name`, `company`, `ram_type`, `ram_size`, `mem_freq`, `fsb`, `voltage`, `timing`, `price`, `pic`, `status`) VALUES
('GOODRAM 0QH0', 'GOODRAM', 'DDR3', 2, 1333, '10600 MB/s', '2', '9-9-9-24', '1250', 'GOODRAM 0QH0.jpg', 1),
('GOODRAM 4L19', 'GOODRAM', 'DDR4', 16, 2666, '21300 MB/s', '1', '19-19-19', '8500', 'GOODRAM 4L19.jpg', 1),
('GOODRAM 9QHQ', 'GOODRAM', 'DDR3', 4, 1600, '12800 MB/s', '2', '11-11-11-28', '2700', 'GOODRAM 9QHQ.jpg', 1),
('GOODRAM L15S', 'GOODRAM', 'DDR4', 4, 2133, '17000 MB/s', '1', '15-15-15', '3200', 'GOODRAM L15S.jpg', 1),
('GOODRAM L17S', 'GOODRAM', 'DDR4', 8, 2400, '19200 MB/s', '1', '17-17-17', '6700', 'GOODRAM L17S.jpg', 1),
('HYPERX 10FB', 'HYPERX', 'DDR3', 4, 1866, '14900 MB/s', '2', '10-11-10-30', '2700', 'HYPERX 10FB.jpg', 1),
('HYPERX 6PB3', 'HYPERX', 'DDR4', 8, 3200, '25600 MB/s', '1', '16-18-18', '7000', 'HYPERX 6PB3.jpg', 1),
('HYPERX 7PB3', 'HYPERX', 'DDR4', 16, 3600, '28800 MB/s', '1', '17-19-19', '8000', 'HYPERX 7PB3.jpg', 1),
('HYPERX 80JB', 'HYPERX', 'DDR3', 8, 1866, '14900 MB/s', '2', '10-11-10-30', '3500', 'HYPERX 80JB.jpg', 1),
('SAMSUNG 0BH0', 'Samsung', 'DDR3', 16, 1600, '12800 MB/s', '1', '11-11-11', '10000', 'SAMSUNG 0BH0.jpg', 1),
('SAMSUNG 0CB2', 'Samsung', 'DDR4', 32, 2666, '21300 MB/s', '1', '19-19-19', '14000', 'SAMSUNG 0CB2.jpg', 1),
('SAMSUNG 0DM0', 'Samsung', 'DDR3', 32, 1866, '14900 MB/s', '1', '13-13-13', '13000', 'SAMSUNG 0DMo.jpg', 1),
('SAMSUNG 0QH0', 'Samsung', 'DDR3', 8, 1866, '14900 MB/s', '2', '13-13-13', '4500', 'SAMSUNG 0QH0.jpg', 1),
('SAMSUNG 3CB1', 'Samsung', 'DDR4', 16, 2666, '21300 MB/s', '1', '15-15-15-42', '10500', 'SAMSUNG 3CB1.jpg', 1),
('SAMSUNG 3CH0', 'Samsung', 'DDR3', 4, 1600, '12800 MH/s', '2', '11-11-11', '1950', 'SAMSUNG 3CHO.jpg', 1),
('SAMSUNG 3DB0', 'Samsung', 'DDR4', 8, 2133, '17000 MB/s', '1', '15-15-15-42', '6000', 'SAMSUNG 3DB0.jpg', 1),
('SAMSUNG 3DH0', 'Samsung', 'DDR3', 2, 1333, '10600 MB/s', '2', '9-9-9', '1100', 'SAMSUNG 3DH0.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ram_tbl`
--
ALTER TABLE `ram_tbl`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
