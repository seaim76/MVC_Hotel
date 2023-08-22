-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abd`
--

-- --------------------------------------------------------

--
-- Table structure for table `ab`
--

CREATE TABLE `ab` (
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ab`
--

INSERT INTO `ab` (`Email`, `password`) VALUES
('seaim000@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`Id`, `Name`, `Email`, `password`, `Address`) VALUES
(1, 'seaim khan', 'seaim000@gmail.com', '0000', 'Dhaka'),
(2, 'seaim khan', 'seaim76@gmail.com', '0000', 'Dhaka'),
(3, 'seaim khan', 'seaim6@gmail.com', '0000', 'Dhaka'),
(4, 'seaim khan', 'seaim1@gmail.com', '0000', 'Dhaka'),
(6, 'seaim khan', 'seaimkhan700@gmail.com', '000', 'Dhaka'),
(30, 'seaim khan', 'seaimkhan7@gmail.com', '0000', 'Dhaka'),
(100, 'seaim khan', 'seaimkhan2@gmail.com', '0000', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
