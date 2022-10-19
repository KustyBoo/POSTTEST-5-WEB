-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `respon_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `ID` int(10) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `WARNA` varchar(25) NOT NULL,
  `BRAND` varchar(25) NOT NULL,
  `JENIS` varchar(25) NOT NULL,
  `UKURAN` int(3) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`ID`, `NAMA`, `WARNA`, `BRAND`, `JENIS`, `UKURAN`, `EMAIL`) VALUES
(8, 'dunk low sb panda', 'putih', 'nike', 'sb dunk', 43, 'christoperafrian@gmail.com'),
(9, 'air jordan 1 mocha', 'coklat', 'nike', 'jordan', 44, 'kananda@gmail.com'),
(10, 'yeezy bone white', 'putih', 'adidas', 'yeezy', 38, 'heidarsadhana@gmail.com'),
(11, 'Air Force 1', 'putih', 'nike', 'air force', 36, 'aowkoawkokao@gmail.com'),
(12, 'converse off-white', 'putih', 'converse', 'high', 47, 'kananda@gmail.com'),
(18, 'yeezy boost 350 v2 Slate', 'grey', 'adidas', 'yeezy', 34, 'christoperafrian@gmail.com'),
(20, 'New Balance V200', 'brown-white', 'New Balance', 'track', 30, 'thisisme@gmail.com'),
(22, 'New Balance 550 White-Green', 'White-Green', 'New Balance', 'trainer', 33, 'thomasthetrain@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
