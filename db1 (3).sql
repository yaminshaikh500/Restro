-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Members` varchar(30) COLLATE utf8_bin NOT NULL,
  `Mobile` varchar(30) COLLATE utf8_bin NOT NULL,
  `Restaurant` varchar(30) COLLATE utf8_bin NOT NULL,
  `date` varchar(30) COLLATE utf8_bin NOT NULL,
  `time` varchar(30) COLLATE utf8_bin NOT NULL,
  `Seat` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Name`, `Members`, `Mobile`, `Restaurant`, `date`, `time`, `Seat`) VALUES
(56, 'yamin', '5', '9999999999', 'Restaurant 1', '0', '10:00', ''),
(57, 'yamin', '2', '1234567890', '', '0', '10:00', ''),
(58, 'yamin', '4', '0987654321', '', '0', '10:00', ''),
(59, 'yamin', '4', '0987654321', 'Restaurant 1', '0', '10:00', ''),
(60, 'yamin', '4', '0987654321', 'Restaurant 1', '0', '10:00', ''),
(61, 'Soaeb', '2', '12345678', 'Restaurant 2', '0', '02:00', ''),
(62, 'pqr', '5', '12345677890', 'Restaurant 1', '0', '10:00', ''),
(63, 'pqr', '5', '12345677890', 'Restaurant 1', '2022', '10:00', ''),
(64, 'pqr', '5', '12345677890', 'Restaurant 1', '2022', '10:00', ''),
(65, 'pqr', '5', '12345677890', 'Restaurant 1', '2022-08-07', '10:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(30) NOT NULL,
  `Username` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Mobile` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`, `Email`, `Mobile`) VALUES
(20, 'Yamin', '1234', 'abcd@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(30) NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `question` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `question`) VALUES
(1, 'admin', 'abcd@gmail.com', ' hello'),
(2, 'admin', 'abcd@gmail.com', ' hello'),
(3, 'admin', 'abcd@gmail.com', ' hello'),
(4, 'admin', 'abcd@gmail.com', ' hello'),
(5, 'admin', 'abcd@gmail.com', ' hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
