-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 08:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amecro`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `m_id` int(100) NOT NULL,
  `prdName` varchar(200) NOT NULL,
  `prdFeature` varchar(550) NOT NULL,
  `img` varchar(250) NOT NULL,
  `tableTop` varchar(50) NOT NULL,
  `elevationTable` varchar(50) NOT NULL,
  `elevationChair` varchar(50) NOT NULL,
  `maxLoad` varchar(50) NOT NULL,
  `elevationPhoropterarm` varchar(50) NOT NULL,
  `phoropterRotation` varchar(50) NOT NULL,
  `tableRotation` varchar(50) NOT NULL,
  `chargingPort` varchar(50) NOT NULL,
  `topLamp` varchar(50) NOT NULL,
  `fuse` varchar(50) NOT NULL,
  `voltage` varchar(50) NOT NULL,
  `inputPower` varchar(50) NOT NULL,
  `tableWeight` varchar(50) NOT NULL,
  `chairWeight` varchar(50) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
