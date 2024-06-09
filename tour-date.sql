-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2024 at 10:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour-date`
--

CREATE TABLE `tour-date` (
  `id` int NOT NULL,
  `date` varchar(255) NOT NULL,
  `event-name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `ticket_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tour-date`
--

INSERT INTO `tour-date` (`id`, `date`, `event-name`, `place`, `ticket_link`) VALUES
(1, 'April 25, 2024', 'FONTAINEBLEAU', 'LAS VEGAS, NV, USA', 'https://www.greenfieldfestival.ch/en/tickets'),
(2, 'April 26, 2024', 'FONTAINEBLEAU', 'LAS VEGAS, NV, USA', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour-date`
--
ALTER TABLE `tour-date`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
