-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 09:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `proiect_final_users`
--

CREATE TABLE `proiect_final_users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proiect_final_users`
--

INSERT INTO `proiect_final_users` (`ID`, `Name`, `UserName`, `Email`, `Password`) VALUES
(1, '', 'manu07', 'cemanuel86@gmail.com', '$2a$12$wc/1hKSBnh8jhOYyZa/W/OJwiqnriEEgw7HANaTsEjeJAgoF7raZq'),
(3, '', 'harisJ89', 'haris.john@aol.com', '$2y$10$Fhg4uOhxTICB0e6uMCiFoelUF7p647KISbR9T2RaFNkNOVUHge4da');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proiect_final_users`
--
ALTER TABLE `proiect_final_users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proiect_final_users`
--
ALTER TABLE `proiect_final_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
