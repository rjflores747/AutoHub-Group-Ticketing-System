-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220719.04fabfdc7e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 03:14 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autohub-ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket_suggestions`
--

CREATE TABLE `ticket_suggestions` (
  `id` int NOT NULL,
  `suggestions_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `suggestions_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `suggestions_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_suggestions`
--

INSERT INTO `ticket_suggestions` (`id`, `suggestions_name`, `suggestions_description`, `createdAt`, `suggestions_status`) VALUES
(1, 'Keyboard', 'Keyboard to change 10 mins to 15 mins ', '2022-12-19 08:50:17', '1'),
(2, 'Mouse', 'Mouse to change 10 mins to 15 mins', '2023-01-09 07:03:25', '1'),
(3, 'sa', 'asa', '0000-00-00 00:00:00', '1'),
(4, 'Earphones', 'Earphones to change 10 mins to 15 mins', '0000-00-00 00:00:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_suggestions`
--
ALTER TABLE `ticket_suggestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_suggestions`
--
ALTER TABLE `ticket_suggestions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
