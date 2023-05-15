-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220719.04fabfdc7e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 02:42 AM
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
-- Table structure for table `ticket_user`
--

CREATE TABLE `ticket_user` (
  `id` int NOT NULL,
  `u_id` int DEFAULT NULL,
  `ticket_users` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_fn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_ln` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_employee_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_user_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_deal_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_comp_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_position` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_dob` date NOT NULL,
  `ticket_user_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_user_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `u_id`, `ticket_users`, `ticket_fn`, `ticket_ln`, `ticket_employee_id`, `ticket_email`, `ticket_password`, `ticket_status`, `ticket_user_department`, `ticket_deal_name`, `ticket_comp_name`, `ticket_position`, `ticket_mobile`, `ticket_dob`, `ticket_user_url`, `ticket_user_role`, `ticket_createdAt`) VALUES
(69, 2314, '', 'ALBERTO', 'FLORES', '60512', 'Aflores@autohubgroup.com', '35757c244bb22c3a9f40435772adcb10', '1', '15', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'WEB DEVELOPER', '09618191459', '2023-03-20', 'ibro.png', '2', '2022-02-01'),
(70, 1295, '', 'CLARENCE', 'ANDAYA', '60418', 'candaya@autohubgroup.com', '098f6bcd4621d373cade4e832627b4f6', '1', '15', '', '', '', '', '0000-00-00', 'ibro.png', '1', '0000-00-00'),
(71, 2233, '', 'Michael', 'Balibrea', '60514', 'mbalibrea@autohubgroup.com', 'efd8b781b9b1046f5ae5918e028bc60d', '1', '15', '', '', '', '', '0000-00-00', 'ibro.png', '1', '0000-00-00'),
(112, 517, '', 'MA. DANICA', 'MAGTANGOB', '60410', 'dmagtangob@autohubgroup.com', '1a51cd5cdd173c04dbdaa0c5fc5b168e', '1', '15', 'AUTOHUB GROUP INC', 'TRIUMPH MOTORCYCLES PHILIPPINES, INC.', 'Database Assistant', '09176331398', '0000-00-00', 'ibro.png', '1', '2022-12-02'),
(124, 2888, '', 'Christil', 'Almazan', '3638283', 'almazan@autohub.com', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '0', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'Workshop Supervisor', '09125735445', '0000-00-00', 'ibro.png', '1', '2023-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_user`
--
ALTER TABLE `ticket_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_user`
--
ALTER TABLE `ticket_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
