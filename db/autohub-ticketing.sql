-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220719.04fabfdc7e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 03:55 AM
-- Server version: 8.0.28
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ticket_incident` ()   BEGIN  
      SELECT * FROM ticket_incident;  
      END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(200) NOT NULL,
  `menu_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `menu_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`, `menu_status`, `menu_department`) VALUES
(1, 'Ticket', 'fas fa-ticket-al', 'Enable', ''),
(2, 'User', 'fa fa-user', 'Enable', ''),
(3, 'Salary', 'fa fa-cash', 'Enable', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int NOT NULL,
  `ticket _generator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time_and_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket _generator`, `time_and_date`) VALUES
(1, 'AHG0001', '2022-06-04 16:11:11'),
(2, '99812171508088838', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket-category`
--

CREATE TABLE `ticket-category` (
  `id` int NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_uid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket-category`
--

INSERT INTO `ticket-category` (`id`, `category_name`, `category_date`, `category_uid`) VALUES
(1, 'Troubleshooting', '06/03/2022', 'AGH001'),
(2, 'Software', '06/03/2022', 'AGH002 '),
(3, 'Hardware', '06/04/2022', 'AGH003'),
(4, 'Network', '06/04/2022', 'AGH004'),
(5, 'Inquiry/Help', '06/04/2022', 'AGH005'),
(6, 'Database', '06/04/2022', 'AGH006\r\n                                                                                             ');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_activity_logs`
--

CREATE TABLE `ticket_activity_logs` (
  `id` int NOT NULL,
  `ticket_activity_uid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_activity_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_activity_created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_activity_logs`
--

INSERT INTO `ticket_activity_logs` (`id`, `ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES
(1, '60512', 'Update Ticket Detail', '2022-07-19 13:37:29'),
(2, '60512', 'Updating the Ticket Incident', '2022-07-19 14:21:33'),
(3, '60512', 'Updating the Ticket Incident', '0000-00-00 00:00:00'),
(4, '60512', 'Updating the Ticket Incident', '2022-07-19 14:35:04'),
(5, '60512', 'Updating the Ticket Incident', '2022-07-19 14:36:30'),
(6, '60512', 'Updating the Ticket Incident', '2022-07-19 14:37:17'),
(7, '60512', 'Updating the Ticket Incident', '2022-07-19 14:37:58'),
(8, '60512', 'Updating the Ticket Incident', '2022-07-19 14:38:24'),
(9, '60512', 'Updating the Ticket Incident', '2022-07-19 14:38:37'),
(10, '60512', 'Updating the Ticket Incident', '2022-07-19 14:39:32'),
(11, '60512', 'Updating the Ticket Incident', '2022-07-19 14:56:57'),
(12, '', 'You have successfully logged out! \',\'', '2022-07-19 15:36:45'),
(13, '', 'You have successfully logged out! \',\'', '2022-07-19 15:40:11'),
(14, '', 'You have successfully logged out!\' ', '2022-07-19 15:46:58'),
(15, '', 'You have successfully logged out!\' ', '2022-07-19 15:49:26'),
(16, '', 'logged out!', '2022-07-19 15:51:34'),
(17, '60512', 'logged out!', '2022-07-19 15:52:36'),
(18, '60512', 'You have successfully logged out', '2022-07-19 15:54:44'),
(19, '60512', 'You have successfully logged out', '2022-07-19 15:56:35'),
(20, '60512', 'You have successfully login', '2022-07-19 15:56:36'),
(21, '60512', 'You have successfully Add new ticket', '2022-07-19 16:04:01'),
(22, '60512', 'You have successfully login', '2022-07-20 08:53:29'),
(23, '60513', 'You have successfully login', '2022-07-20 09:51:55'),
(24, '60512', 'You have successfully logged out', '2022-07-20 10:41:07'),
(25, '60512', 'You have successfully login', '2022-07-20 10:41:08'),
(26, '60512', 'You have successfully login', '2022-07-20 11:29:10'),
(27, '60512', 'You have successfully logged out', '2022-07-20 13:51:52'),
(28, '60418', 'You have successfully login', '2022-07-20 13:52:13'),
(29, '60418', 'You have successfully add new ticket', '2022-07-20 13:53:36'),
(30, '60512', 'You have successfully login', '2022-07-20 13:53:49'),
(31, '60418', 'You have successfully login', '2022-07-20 13:58:44'),
(32, '60512', 'You have successfully logged out', '2022-07-20 14:24:30'),
(33, '60513', 'You have successfully login', '2022-07-20 14:24:33'),
(34, '2', 'You have successfully add new ticket', '2022-07-20 14:53:34'),
(35, '60513', 'You have successfully login', '2022-07-20 14:57:45'),
(36, '60513', 'You have successfully logged out', '2022-07-20 14:59:36'),
(37, '60512', 'You have successfully login', '2022-07-20 14:59:41'),
(38, '60512', 'You have successfully logged out', '2022-07-20 15:34:54'),
(39, '60513', 'You have successfully login', '2022-07-20 15:35:02'),
(40, '60513', 'You have successfully logged out', '2022-07-20 15:35:39'),
(41, '60418', 'You have successfully login', '2022-07-20 15:35:45'),
(42, '60418', 'You have successfully logged out', '2022-07-20 16:20:00'),
(43, '60513', 'You have successfully login', '2022-07-20 16:21:18'),
(44, '60513', 'You have successfully logged out', '2022-07-20 16:25:28'),
(45, '60513', 'You have successfully login', '2022-07-20 16:27:13'),
(46, '60513', 'You have successfully logged out', '2022-07-20 16:35:32'),
(47, '60513', 'You have successfully login', '2022-07-20 16:42:03'),
(48, '60418', 'You have successfully login', '2022-07-21 09:05:49'),
(49, '60418', 'You have successfully logged out', '2022-07-21 10:49:42'),
(50, '60512', 'You have successfully login', '2022-07-21 10:49:49'),
(51, '60418', 'You have successfully login', '2022-07-21 13:18:32'),
(52, '60418', 'You have successfully logged out', '2022-07-21 13:25:22'),
(53, '60513', 'You have successfully login', '2022-07-21 13:25:32'),
(54, '60418', 'You have successfully login', '2022-07-21 13:48:12'),
(55, '3', 'You have successfully add new ticket', '2022-07-21 13:48:39'),
(56, '60513', 'You have successfully logged out', '2022-07-21 14:01:34'),
(57, '60512', 'You have successfully login', '2022-07-21 14:01:46'),
(58, '60512', 'You have successfully logged out', '2022-07-21 14:05:01'),
(59, '60513', 'You have successfully login', '2022-07-21 14:05:13'),
(60, '60513', 'You have successfully updated', '2022-07-21 14:06:01'),
(61, '60512', 'You have successfully login', '2022-07-23 08:00:40'),
(62, '60512', 'You have successfully login', '2022-07-25 09:07:43'),
(63, '60512', 'You have successfully login', '2022-07-25 09:37:19'),
(64, '60512', 'You have successfully logged out', '2022-07-25 09:52:28'),
(65, '60512', 'You have successfully login', '2022-07-25 10:15:21'),
(66, '60512', 'You have successfully login', '2022-07-25 10:15:25'),
(67, '60512', 'You have successfully login', '2022-07-25 10:15:37'),
(68, '60512', 'You have successfully logged out', '2022-07-25 10:53:33'),
(69, '60512', 'You have successfully login', '2022-07-25 11:00:31'),
(70, '60512', 'You have successfully logged out', '2022-07-25 11:18:19'),
(71, '', 'You have successfully logged out', '2022-07-25 11:18:53'),
(72, '60512', 'You have successfully login', '2022-07-25 11:35:15'),
(73, '60512', 'You have successfully logged out', '2022-07-25 11:35:21'),
(74, '60512', 'You have successfully login', '2022-07-25 11:40:48'),
(75, '60512', 'You have successfully logged out', '2022-07-25 11:40:54'),
(76, '60512', 'You have successfully login', '2022-07-25 13:25:39'),
(77, '60512', 'You have successfully login', '2022-07-25 13:34:09'),
(78, '60512', 'You have successfully logged out', '2022-07-25 13:34:45'),
(79, '60512', 'You have successfully login', '2022-07-25 13:34:47'),
(80, '60512', 'You have successfully logged out', '2022-07-25 13:34:53'),
(81, '60512', 'You have successfully login', '2022-07-25 13:34:54'),
(82, '60512', 'You have successfully logged out', '2022-07-25 13:37:25'),
(83, '60512', 'You have successfully login', '2022-07-25 13:39:01'),
(84, '60512', 'You have successfully logged out', '2022-07-25 13:39:04'),
(85, '60512', 'You have successfully login', '2022-07-25 13:39:05'),
(86, '60512', 'You have successfully logged out', '2022-07-25 13:39:08'),
(87, '60512', 'You have successfully login', '2022-07-25 14:01:02'),
(88, '60512', 'You have successfully logged out', '2022-07-25 14:02:14'),
(89, '60512', 'You have successfully login', '2022-07-25 14:02:23'),
(90, '60512', 'You have successfully logged out', '2022-07-25 14:02:46'),
(91, '60512', 'You have successfully login', '2022-07-25 14:03:11'),
(92, '60512', 'You have successfully logged out', '2022-07-25 14:04:30'),
(93, '60512', 'You have successfully login', '2022-07-25 14:06:58'),
(94, '60512', 'You have successfully logged out', '2022-07-25 14:07:33'),
(95, '60512', 'You have successfully login', '2022-07-25 14:07:50'),
(96, '60512', 'You have successfully login', '2022-07-25 14:10:58'),
(97, '60512', 'You have successfully logged out', '2022-07-25 14:11:14'),
(98, '60512', 'You have successfully login', '2022-07-25 14:12:47'),
(99, '60512', 'You have successfully logged out', '2022-07-25 14:13:12'),
(100, '60512', 'You have successfully login', '2022-07-25 14:25:50'),
(101, '60512', 'You have successfully logged out', '2022-07-25 14:31:44'),
(102, '60512', 'You have successfully login', '2022-07-25 14:34:52'),
(103, '60512', 'You have successfully login', '2022-07-25 14:41:49'),
(104, '60512', 'You have successfully logged out', '2022-07-25 14:46:13'),
(105, '60512', 'You have successfully login', '2022-07-25 15:10:22'),
(106, '60512', 'You have successfully logged out', '2022-07-25 15:18:53'),
(107, '', 'You have successfully logged out', '2022-07-25 15:19:04'),
(108, '60512', 'You have successfully login', '2022-07-25 15:21:34'),
(109, '60512', 'You have successfully logged out', '2022-07-25 15:21:50'),
(110, '60512', 'You have successfully login', '2022-07-25 15:22:02'),
(111, '60512', 'You have successfully logged out', '2022-07-25 15:33:06'),
(112, '60418', 'You have successfully login', '2022-07-25 15:33:15'),
(113, '60418', 'You have successfully logged out', '2022-07-25 15:43:05'),
(114, '60512', 'You have successfully login', '2022-07-25 15:44:04'),
(115, '60512', 'You have successfully logged out', '2022-07-25 15:44:08'),
(116, '60512', 'You have successfully login', '2022-07-25 15:44:09'),
(117, '60512', 'You have successfully logged out', '2022-07-25 16:38:07'),
(118, '60512', 'You have successfully login', '2022-07-25 16:38:46'),
(119, '60512', 'You have successfully logged out', '2022-07-25 16:50:52'),
(120, '60512', 'You have successfully login', '2022-07-25 16:53:48'),
(121, '60512', 'You have successfully logged out', '2022-07-25 16:54:07'),
(122, '60512', 'You have successfully login', '2022-07-25 16:55:11'),
(123, '60512', 'You have successfully logged out', '2022-07-25 16:55:19'),
(124, '60512', 'You have successfully login', '2022-07-25 16:59:52'),
(125, '60512', 'You have successfully logged out', '2022-07-25 16:59:57'),
(126, '60512', 'You have successfully login', '2022-07-26 08:28:49'),
(127, '60512', 'You have successfully logged out', '2022-07-26 09:07:53'),
(128, '60512', 'You have successfully login', '2022-07-26 09:19:54'),
(129, '60512', 'You have successfully logged out', '2022-07-26 09:20:03'),
(130, '60512', 'You have successfully login', '2022-07-26 09:37:21'),
(131, '60512', 'You have successfully logged out', '2022-07-26 09:37:42'),
(132, '60512', 'You have successfully logged out', '2022-07-26 10:25:44'),
(133, '60512', 'You have successfully logged out', '2022-07-26 10:28:30'),
(134, '60512', 'You have successfully logged out', '2022-07-26 10:28:50'),
(135, '60512', 'You have successfully logged out', '2022-07-26 10:49:13'),
(136, '1', 'You have successfully add new ticket', '2022-07-26 11:43:23'),
(137, '1', 'You have successfully add new ticket', '2022-07-26 11:43:32'),
(138, '1', 'You have successfully add new ticket', '2022-07-26 11:44:37'),
(139, '60512', 'You have successfully logged out', '2022-07-26 13:22:16'),
(140, '1', 'You have successfully add new ticket', '2022-07-26 13:27:31'),
(141, '1', 'You have successfully add new ticket', '2022-07-26 13:28:11'),
(142, '1', 'You have successfully add new ticket', '2022-07-26 13:56:11'),
(143, '1', 'You have successfully add new ticket', '2022-07-26 14:22:54'),
(144, '1', 'You have successfully add new ticket', '2022-07-26 14:23:56'),
(145, '1', 'You have successfully add new ticket', '2022-07-26 14:24:24'),
(146, '1', 'You have successfully add new ticket', '2022-07-26 14:25:09'),
(147, '1', 'You have successfully add new ticket', '2022-07-26 14:25:45'),
(148, '1', 'You have successfully add new ticket', '2022-07-26 14:26:30'),
(149, '1', 'You have successfully add new ticket', '2022-07-26 14:26:50'),
(150, '1', 'You have successfully add new ticket', '2022-07-26 15:25:30'),
(151, '1', 'You have successfully add new ticket', '2022-07-26 15:33:12'),
(152, '1', 'You have successfully add new ticket', '2022-07-26 15:36:23'),
(153, '1', 'You have successfully add new ticket', '2022-07-26 15:48:54'),
(154, '60512', 'You have successfully logged out', '2022-07-27 10:11:12'),
(155, '1', 'You have successfully add new ticket', '2022-07-27 10:15:27'),
(156, '1', 'You have successfully add new ticket', '2022-07-27 10:17:29'),
(157, '3', 'You have successfully add new ticket', '2022-07-27 10:25:46'),
(158, '3', 'You have successfully add new ticket', '2022-07-27 10:29:11'),
(159, '3', 'You have successfully add new ticket', '2022-07-27 10:33:44'),
(160, '3', 'You have successfully add new ticket', '2022-07-27 10:35:58'),
(161, '60418', 'You have successfully logged out', '2022-07-27 10:36:13'),
(162, '60512', 'You have successfully logged out', '2022-07-27 10:39:15'),
(163, '60512', 'You have successfully logged out', '2022-07-27 10:39:19'),
(164, '60512', 'You have successfully logged out', '2022-07-27 14:28:15'),
(165, '60512', 'You have successfully logged out', '2022-07-27 14:47:15'),
(166, '60418', 'You have successfully logged out', '2022-07-27 15:08:19'),
(167, '60513', 'You have successfully updated', '2022-07-27 15:08:57'),
(168, '60513', 'You have successfully rating', '2022-07-27 15:09:01'),
(169, '60512', 'You have successfully logged out', '2022-07-28 09:00:10'),
(170, '60418', 'You have successfully logged out', '2022-07-28 09:05:07'),
(171, '1', 'You have successfully add new ticket', '2022-07-28 09:10:18'),
(172, '60512', 'You have successfully updated', '2022-07-28 09:11:19'),
(173, '60418', 'You have successfully logged out', '2022-07-28 09:12:45'),
(174, '60512', 'Updating the Ticket Incident', '2022-07-28 09:16:24'),
(175, '60513', 'You have successfully logged out', '2022-07-28 09:16:35'),
(176, '60512', 'You have successfully updated', '2022-07-28 09:22:06'),
(177, '60512', 'You have successfully updated', '2022-07-28 09:22:15'),
(178, '60512', 'You have successfully updated', '2022-07-28 09:25:38'),
(179, '60512', 'You have successfully updated', '2022-07-28 09:25:44'),
(180, '60512', 'You have successfully updated', '2022-07-28 09:25:54'),
(181, '60512', 'You have successfully updated', '2022-07-28 09:26:28'),
(182, '60512', 'You have successfully updated', '2022-07-28 09:26:33'),
(183, '60512', 'You have successfully rating', '2022-07-28 09:31:52'),
(184, '60512', 'You have successfully rating', '2022-07-28 09:44:13'),
(185, '60512', 'You have successfully updated', '2022-07-28 09:44:31'),
(186, '60512', 'Updating the Ticket Incident', '2022-07-28 09:45:57'),
(187, '60512', 'You have successfully logged out', '2022-07-28 09:47:06'),
(188, '3', 'You have successfully add new ticket', '2022-07-28 09:47:45'),
(189, '60513', 'Updating the Ticket Incident', '2022-07-28 11:04:13'),
(190, '60513', 'Updating the Ticket Incident', '2022-07-28 11:05:52'),
(191, '60513', 'Updating the Ticket Incident', '2022-07-28 11:06:07'),
(192, '60513', 'You have successfully logged out', '2022-07-28 14:37:16'),
(193, '60418', 'You have successfully logged out', '2022-07-28 15:07:37'),
(194, '60513', 'You have successfully updated', '2022-07-28 15:13:53'),
(195, '60513', 'You have successfully updated', '2022-07-28 15:19:54'),
(196, '60513', 'You have successfully updated', '2022-07-28 15:21:15'),
(197, '60513', 'You have successfully updated', '2022-07-28 15:23:14'),
(198, '60513', 'You have successfully updated', '2022-07-28 15:23:56'),
(199, '60513', 'You have successfully updated', '2022-07-28 15:24:13'),
(200, '3', 'You have successfully add new ticket', '2022-07-28 15:25:05'),
(201, '60513', 'You have successfully logged out', '2022-08-01 08:53:48'),
(202, '60512', 'You have successfully logged out', '2022-08-01 09:17:01'),
(203, '1', 'You have successfully add new ticket', '2022-08-01 10:01:02'),
(204, '60512', 'You have successfully logged out', '2022-08-01 11:01:25'),
(205, '2314', 'You have successfully logged out', '2022-08-01 15:16:12'),
(206, '41', 'You have successfully add new ticket', '2022-08-01 15:52:13'),
(207, '2314', 'Updating the Ticket Incident', '2022-08-01 16:11:55'),
(208, '1295', 'You have successfully logged out', '2022-08-01 16:25:26'),
(209, '2314', 'Updating the Ticket Incident', '2022-08-01 16:52:07'),
(210, '2314', 'Updating the Ticket Incident', '2022-08-01 16:53:03'),
(211, '2314', 'Updating the Ticket Incident', '2022-08-01 16:54:10'),
(212, '2314', 'Updating the Ticket Incident', '2022-08-01 16:54:24'),
(213, '2314', 'Updating the Ticket Incident', '2022-08-01 16:56:07'),
(214, '2314', 'Updating the Ticket Incident', '2022-08-01 16:57:02'),
(215, '2314', 'Updating the Ticket Incident', '2022-08-02 08:29:41'),
(216, '2314', 'Updating the Ticket Incident', '2022-08-02 08:38:57'),
(217, '2314', 'Updating the Ticket Incident', '2022-08-02 08:39:04'),
(218, '2314', 'Updating the Ticket Incident', '2022-08-02 08:39:34'),
(219, '2314', 'Updating the Ticket Incident', '2022-08-02 08:40:15'),
(220, '2314', 'Updating the Ticket Incident', '2022-08-02 08:41:33'),
(221, '2314', 'Updating the Ticket Incident', '2022-08-02 08:42:11'),
(222, '2314', 'Updating the Ticket Incident', '2022-08-02 08:46:55'),
(223, '2314', 'Updating the Ticket Incident', '2022-08-02 08:48:00'),
(224, '2314', 'Updating the Ticket Incident', '2022-08-02 08:48:32'),
(225, '2314', 'Updating the Ticket Incident', '2022-08-02 08:49:55'),
(226, '2314', 'Updating the Ticket Incident', '2022-08-02 08:50:08'),
(227, '2314', 'Updating the Ticket Incident', '2022-08-02 09:16:20'),
(228, '2314', 'Updating the Ticket Incident', '2022-08-02 09:16:29'),
(229, '2314', 'Updating the Ticket Incident', '2022-08-02 09:17:36'),
(230, '2314', 'Updating the Ticket Incident', '2022-08-02 09:25:27'),
(231, '2314', 'Updating the Ticket Incident', '2022-08-02 09:25:43'),
(232, '2314', 'Updating the Ticket Incident', '2022-08-02 09:26:16'),
(233, '2314', 'Updating the Ticket Incident', '2022-08-02 09:45:55'),
(234, '2314', 'Updating the Ticket Incident', '2022-08-02 10:31:07'),
(235, '2314', 'You have successfully logged out', '2022-08-02 10:44:00'),
(236, '1295', 'You have successfully logged out', '2022-08-02 13:26:16'),
(237, '41', 'You have successfully add new ticket', '2022-08-03 12:51:54'),
(238, '1295', 'You have successfully updated', '2022-08-03 12:52:16'),
(239, '1295', 'Updating the Ticket Incident', '2022-08-03 12:53:16'),
(240, '1295', 'You have successfully logged out', '2022-08-03 12:54:11'),
(241, '2314', 'You have successfully logged out', '2022-08-03 12:57:21'),
(242, '1295', 'You have successfully logged out', '2022-08-03 12:57:59'),
(243, '2314', 'You have successfully logged out', '2022-08-03 13:01:14'),
(244, '2314', 'You have successfully logged out', '2022-08-03 13:07:27'),
(245, '2314', 'Updating the Ticket Incident', '2022-08-03 13:29:59'),
(246, '2314', 'You have successfully rating', '2022-08-03 13:35:29'),
(247, '2314', 'View User ', '2022-08-03 13:36:04'),
(248, '1295', 'View User ', '2022-08-03 13:37:25'),
(249, '2314', 'View User ', '2022-08-03 13:38:04'),
(250, '1295', 'You have successfully updated', '2022-08-03 13:38:59'),
(251, '1295', 'You have successfully rating', '2022-08-03 13:39:06'),
(252, '1295', 'View User ', '2022-08-03 13:39:43'),
(253, '41', 'You have successfully add new ticket', '2022-08-03 13:43:03'),
(254, '2314', 'View User ', '2022-08-03 13:45:20'),
(255, '2314', 'You have successfully logged out', '2022-08-03 13:45:49'),
(256, '2314', 'View User ', '2022-08-03 13:46:06'),
(257, '2314', 'View User ', '2022-08-03 13:46:37'),
(258, '2314', 'You have successfully rating', '2022-08-03 13:48:00'),
(259, '1295', 'View User ', '2022-08-03 13:48:28'),
(260, '1295', 'View User ', '2022-08-03 13:48:37'),
(261, '2314', 'View User ', '2022-08-03 13:50:37'),
(262, '2314', 'View User ', '2022-08-03 13:50:54'),
(263, '2314', 'You have successfully logged out', '2022-08-03 13:51:01'),
(264, '2314', 'View User ', '2022-08-03 13:51:44'),
(265, '1295', 'View User ', '2022-08-03 13:55:20'),
(266, '2314', 'View User ', '2022-08-03 14:36:51'),
(267, '2314', 'View User ', '2022-08-03 14:51:21'),
(268, '2314', 'Updating the Ticket Incident', '2022-08-03 14:52:05'),
(269, '2314', 'View User ', '2022-08-03 14:52:11'),
(270, '2314', 'View User ', '2022-08-03 14:52:33'),
(271, '2314', 'View User ', '2022-08-03 14:52:50'),
(272, '2314', 'Updating the Ticket Incident', '2022-08-03 14:53:11'),
(273, '2314', 'View User ', '2022-08-03 14:53:20'),
(274, '2314', 'View User ', '2022-08-03 14:54:48'),
(275, '2314', 'View User ', '2022-08-03 15:11:11'),
(276, '2314', 'You have successfully logged out', '2022-08-03 15:11:17'),
(277, '1295', 'View User ', '2022-08-03 15:12:39'),
(278, '1295', 'View User ', '2022-08-03 15:19:48'),
(279, '1295', 'View User ', '2022-08-04 08:15:16'),
(280, '41', 'You have successfully add new ticket', '2022-08-04 08:38:06'),
(281, '1295', 'You have successfully updated', '2022-08-04 08:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignee`
--

CREATE TABLE `ticket_assignee` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `ticket_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_assignee`
--

INSERT INTO `ticket_assignee` (`id`, `user_id`, `ticket_id`, `createAt`) VALUES
(1, 1, '1', '2022-06-04 10:14:56'),
(2, 2, '1', '2022-06-06 08:50:20'),
(3, 3, '3', '2022-06-13 16:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignment`
--

CREATE TABLE `ticket_assignment` (
  `id` int NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_assign` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'employee assign in the ticket',
  `ticket_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_chat`
--

CREATE TABLE `ticket_chat` (
  `id` int NOT NULL,
  `ticket_id` int NOT NULL,
  `ticket_user_id` int NOT NULL,
  `ticket_date_time` datetime NOT NULL,
  `ticket_message` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_chat`
--

INSERT INTO `ticket_chat` (`id`, `ticket_id`, `ticket_user_id`, `ticket_date_time`, `ticket_message`, `ticket_status`) VALUES
(1, 64, 0, '2022-06-24 16:43:06', 'test', 1),
(2, 64, 1, '2022-06-24 16:44:48', 'test', 1),
(3, 64, 1, '2022-06-24 17:04:17', '', 1),
(4, 64, 1, '2022-06-24 17:04:22', 'test', 1),
(5, 64, 0, '2022-06-25 15:14:52', '', 1),
(6, 64, 0, '2022-06-25 15:14:56', 'testing', 1),
(7, 64, 0, '2022-06-25 15:15:37', 'hello', 1),
(8, 68, 0, '2022-06-25 15:15:44', '', 1),
(9, 68, 0, '2022-06-25 15:15:45', 'asdasdasd', 1),
(10, 68, 0, '2022-06-25 15:15:46', 'asdasdasd', 1),
(11, 68, 0, '2022-06-25 15:15:46', 'asdasdasd', 1),
(12, 68, 0, '2022-06-25 15:15:46', 'asdasdasd', 1),
(13, 68, 0, '2022-06-25 15:15:46', 'asdasdasd', 1),
(14, 68, 0, '2022-06-25 15:15:47', 'asdasdasd', 1),
(15, 68, 0, '2022-06-25 15:15:47', 'asdasdasd', 1),
(16, 68, 0, '2022-06-25 15:15:50', 'asdasdasd', 1),
(17, 68, 0, '2022-06-25 15:17:34', 'asda', 1),
(18, 68, 0, '2022-06-25 15:28:26', 'sample text', 1),
(19, 68, 0, '2022-06-25 15:33:10', 'bert', 1),
(24, 68, 1, '2022-06-25 15:40:41', 'yes dady', 1),
(25, 64, 1, '2022-06-25 16:05:35', 'sample daddy', 1),
(26, 64, 2, '2022-06-25 16:06:27', 'yes rolan', 1),
(27, 64, 1, '2022-06-25 16:07:10', 'yes daddy ohhhh', 1),
(28, 64, 1, '2022-06-25 16:11:05', 'sample daddy', 1),
(29, 64, 1, '2022-06-25 16:12:10', 'yess mommy', 1),
(30, 64, 1, '2022-06-25 16:12:46', 'yess daddy', 1),
(31, 64, 1, '2022-06-25 16:13:30', 'yessss ', 1),
(32, 64, 1, '2022-06-25 16:14:13', 'jj', 1),
(33, 64, 1, '2022-06-25 16:14:14', '', 1),
(34, 64, 1, '2022-06-25 16:16:01', 'yessss mommy', 1),
(35, 64, 1, '2022-06-25 16:18:35', 'sample chat', 1),
(36, 64, 1, '2022-06-25 16:19:21', 'jh', 1),
(37, 64, 1, '2022-06-27 11:00:38', 'hello po', 1),
(38, 64, 1, '2022-06-27 11:18:35', 'update any progress', 1),
(39, 64, 2, '2022-06-27 11:18:49', 'wait for 5mins', 1),
(40, 64, 1, '2022-06-27 16:17:16', 'noted po maam elijoy', 1),
(41, 66, 1, '2022-06-28 08:48:48', 'good morning sir', 1),
(42, 66, 1, '2022-06-28 08:49:04', 'regading to my request', 1),
(43, 70, 1, '2022-06-28 13:22:35', 'test chat', 1),
(44, 73, 2, '2022-06-28 15:23:30', 'sample 323', 1),
(45, 73, 1, '2022-06-28 15:24:34', 'sample test123', 1),
(46, 73, 2, '2022-06-28 15:24:38', '', 1),
(47, 73, 2, '2022-06-28 15:26:34', 'waiting for progress', 1),
(48, 75, 2, '2022-06-28 16:46:43', 'please help', 1),
(49, 77, 2, '2022-06-29 10:17:01', 'follow up ', 1),
(50, 77, 1, '2022-06-29 10:21:14', 'for process', 1),
(51, 65, 1, '2022-07-01 10:04:35', 'as', 1),
(52, 65, 1, '2022-07-01 10:04:49', '', 1),
(53, 64, 2, '2022-07-02 09:52:12', 'sample test', 1),
(54, 92, 1, '2022-07-16 10:47:07', 'sample ticket', 1),
(55, 92, 3, '2022-07-16 10:48:26', 'sample test', 1),
(56, 94, 3, '2022-07-20 13:53:46', 'test chat creator', 1),
(57, 94, 1, '2022-07-20 13:59:18', 'sample ', 1),
(58, 94, 3, '2022-07-20 13:59:40', 'Test 2', 1),
(59, 94, 1, '2022-07-20 13:59:45', 'test3', 1),
(60, 125, 41, '2022-08-03 12:55:15', 'sample', 1),
(61, 116, 11, '2022-08-03 13:48:22', 'sample', 1),
(62, 116, 41, '2022-08-03 13:49:01', 'hello i need help ', 1),
(63, 116, 11, '2022-08-03 13:49:11', 'yes sir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_deparment`
--

CREATE TABLE `ticket_deparment` (
  `id` int NOT NULL,
  `ticket_dept_source_id` int DEFAULT NULL,
  `ticket_dept_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_dept_tnd` datetime NOT NULL,
  `ticket_dept_uid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_deparment`
--

INSERT INTO `ticket_deparment` (`id`, `ticket_dept_source_id`, `ticket_dept_name`, `ticket_dept_tnd`, `ticket_dept_uid`) VALUES
(1, NULL, 'APPLICATION & DATABASE ', '2022-06-04 08:59:57', 'AD0001'),
(2, NULL, 'INFORMATION TECHNOLOGY', '2022-06-04 04:31:03', 'IT0002'),
(3, NULL, 'HUMAN RESOURCE', '2022-06-04 04:31:03', 'HR0003'),
(4, NULL, 'ADMIN DEPARTMENT ', '2022-06-04 04:31:03', 'AD0004'),
(5, NULL, 'PROCUREMENT DEPARTMENT', '2022-06-04 04:31:03', 'PD0005'),
(6, NULL, 'CREDIT AND COLLECTION', '2022-06-04 04:31:03', 'CC0006'),
(7, NULL, 'ACCOUNTING DEPARTMENT', '2022-06-04 04:31:03', 'ACD0007'),
(8, NULL, 'TREASURY DEPARTMENT', '2022-06-04 04:31:03', 'TD0008'),
(9, NULL, 'MARKETING DEPARTMENT', '2022-06-04 04:31:03', 'MD0009'),
(10, NULL, 'SALES DEPARTMENT', '2022-06-04 04:31:03', 'SD0010'),
(11, 15, 'APP. DEV & DATABASE', '2022-08-01 16:25:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_department_assig`
--

CREATE TABLE `ticket_department_assig` (
  `id` int NOT NULL,
  `ticket_dept_assign_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_dept_assign_uid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_department_assig`
--

INSERT INTO `ticket_department_assig` (`id`, `ticket_dept_assign_name`, `ticket_dept_assign_uid`) VALUES
(1, 'Alberto Flores Jr.', 'AD0001'),
(2, 'CLARENCE ANDAYA', 'IT0002'),
(3, 'NYCA AMPONIN', 'HR0003'),
(4, 'Elijoy Jordan', 'AD0001');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_incident`
--

CREATE TABLE `ticket_incident` (
  `id` int NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `u_id` int NOT NULL,
  `ticket_caller` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_subcategory` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_service` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_config_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_short_discrip` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_discription` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_contact_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_imapact` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_urgent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_priority` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_assign_group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_assign_to` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_timeofdate` datetime NOT NULL,
  `ticket_timeofdate_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_incident`
--

INSERT INTO `ticket_incident` (`id`, `ticket_number`, `u_id`, `ticket_caller`, `ticket_category`, `ticket_subcategory`, `ticket_service`, `ticket_config_item`, `ticket_short_discrip`, `ticket_discription`, `ticket_contact_type`, `ticket_status`, `ticket_imapact`, `ticket_urgent`, `ticket_priority`, `ticket_assign_group`, `ticket_assign_to`, `ticket_department_id`, `ticket_timeofdate`, `ticket_timeofdate_end`) VALUES
(65, 'ATK_45051_65', 60512, 'alberto flores', '6', 'TRACKETING SYSTEM TEST', 'TRACKETING SYSTEM TEST', 'TRACKETING SYSTEM TEST', 'TICKETING SYSTEM TESTING', 'TICKETING SYSTEM TESTING', 'TRACKETING SYSTEM TEST', 'In Progress', 'TRACKETING SYSTEM TEST', 'TRACKETING SYSTEM TEST', 'high ', '3', '', '3', '2018-06-22 10:58:27', '0000-00-00 00:00:00'),
(68, 'ATK_12715_68', 60512, 'alberto flores', '6', 'sampletetest', 'sampletest1234', 'sampltest1234', 'sample user', 'sample user\r\n', 'sampltest1234', 'New', 'test2', 'test21', 'urgen2123', '2', '', '2', '2021-06-22 09:37:06', '0000-00-00 00:00:00'),
(69, 'ATK_9570_69', 60418, 'albertflores', '6', 'sampletetest1', 'sampletest123', 'sampltest1234', 'asd', 'sdasda', 'sampltest1234', 'New', '111', 'twst1', 'high 1', '2', '', '2', '2028-06-22 05:50:33', '0000-00-00 00:00:00'),
(70, 'ATK_62273_70', 60418, 'albertflores', '', '', '', '', 'sampletest1151', 'sampletest1151', '', 'In Progress', '', '', '', '', '3', '1', '2028-06-22 05:51:37', '0000-00-00 00:00:00'),
(71, 'ATK_31008_71', 3, 'albertflores', '----- NONE CATEGORY -----', '', '', '', 'sample143', 'sample143', '', 'Close', '', '', '', '', '41', '15', '2028-06-22 07:43:20', '2022-08-03 13:38:59'),
(72, 'ATK_84629_72', 0, '', '', '', '', '', 'sample 2:28', 'sample 2:28', '', 'New', '', '', '', '', '', '1', '2028-06-22 08:28:33', '0000-00-00 00:00:00'),
(73, 'ATK_9123_73', 0, '', '', '', '', '', 'sample 323', 'sample 323', '', 'In Progress', '', '', '', '', '', '1', '2028-06-22 09:23:24', '0000-00-00 00:00:00'),
(74, 'ATK_1657_74', 60513, 'elijoyjordan', '', '', '', '', 'sample 333', 'sample 333', '', 'New', '', '', '', '', '', '1', '2028-06-22 09:34:00', '0000-00-00 00:00:00'),
(75, 'ATK_83918_75', 60513, 'elijoyjordan', '', '', '', '', 'sample ', 'sample', '', 'New', '', '', '', '', '', '1', '2028-06-22 10:46:31', '0000-00-00 00:00:00'),
(76, 'ATK_7467_76', 0, 'elijoyjordan', '', '', '', '', 'no display monitor', 'no power', '', 'In Progress', '', '', '', '', '', '2', '2029-06-22 04:14:47', '0000-00-00 00:00:00'),
(77, 'ATK_28163_77', 1, 'elijoyjordan', '', '', '', '', 'no data', 'no data', '', 'Close', '', '', '', '', '', '1', '2029-06-22 04:16:07', '0000-00-00 00:00:00'),
(78, 'ATK_97355_78', 3, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2002-07-22 08:26:05', '0000-00-00 00:00:00'),
(79, 'ATK_10373_79', 3, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2002-07-22 08:29:06', '0000-00-00 00:00:00'),
(80, 'ATK_86500_80', 3, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2002-07-22 08:29:38', '0000-00-00 00:00:00'),
(81, 'ATK_56757_81', 1, 'elijoyjordan', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '1', '2002-07-22 08:44:41', '0000-00-00 00:00:00'),
(82, 'ATK_14309_82', 1, 'elijoyjordan', '', '', '', '', 'sample 2022', 'sample 2022', '', 'In Progress', '', '', '', '', '', '1', '2002-07-22 08:44:55', '0000-00-00 00:00:00'),
(83, 'ATK_51888_83', 2, '', '', '', '', '', 'sample 2022', 'sample 2022', '', 'New', '', '', '', '', '', '1', '2002-07-22 08:45:35', '0000-00-00 00:00:00'),
(84, 'ATK_55408_84', 60512, 'albertflores', '', '', '', '', 'sample 2022', 'sample 2022', '', 'New', '', '', '', '', '', '1', '2002-07-22 08:49:27', '0000-00-00 00:00:00'),
(85, 'ATK_92655_85', 1, 'elijoyjordan', '', '', '', '', 'hi jopay', 'jopay\r\n', '', 'New', '', '', '', '', '', '2', '2002-07-22 09:01:42', '0000-00-00 00:00:00'),
(87, 'ATK_70856_87', 60513, 'elijoyjordan', '', '', '', '', 'sample2010702022', 'sample2010702022', '', 'In Progress', '', '', '', '', '', '2', '2004-07-22 08:01:20', '2022-07-28 15:23:56'),
(88, 'ATK_63730_88', 3, 'CLARENCEANDAYA', '', '', '', '', 'test ', 'test', '', 'New', '', '', '', '', '', '1', '2004-07-22 10:11:32', '0000-00-00 00:00:00'),
(89, 'ATK_5171_89', 1, 'albertflores', '3', '', '', '', 'tecket assign ', 'ticket assign\r\n', '', 'New', '', 'high', '', '2', '', '2', '2007-07-22 09:23:39', '0000-00-00 00:00:00'),
(90, 'ATK_9348_90', 1, 'albertflores', '', '', '', '', 'test', 'test', '', 'In Progress', '', '', '', '', '', '1', '2011-07-22 10:19:59', '0000-00-00 00:00:00'),
(91, 'ATK_62960_91', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2011-07-22 10:22:42', '0000-00-00 00:00:00'),
(92, 'ATK_94495_92', 1, 'albertflores', '', '', '', '', 'sample', 'sample', '', 'In Progress', '', '', '', '', '', '1', '2016-07-22 04:45:50', '0000-00-00 00:00:00'),
(93, 'ATK_13751_93', 1, 'albertflores', '', '', '', '', 'sample403', 'sample403', '', 'New', '', '', '', '', '', '1', '2019-07-22 10:04:01', '0000-00-00 00:00:00'),
(94, 'ATK_22639_94', 3, 'CLARENCEANDAYA', '', '', '', '', 'Test Subject', 'Hello \r\n', '', 'In Progress', '', '', '', '', '1', '2', '2020-07-22 07:53:36', '0000-00-00 00:00:00'),
(95, 'ATK_89333_95', 2, 'elijoyjordan', '', '', '', '', 'sample 222222', 'sample22222', '', 'Close', '', '', '', '', '2', '1', '2020-07-22 08:53:34', '0000-00-00 00:00:00'),
(96, 'ATK_62937_96', 3, 'CLARENCEANDAYA', '', '', '', '', 'sample 1:44', 'sample144', '', 'In Progress', '', '', '', '', '2', '1', '2021-07-22 07:48:39', '0000-00-00 00:00:00'),
(97, 'ATK_1422_97', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2026-07-22 05:43:23', '0000-00-00 00:00:00'),
(98, 'ATK_29896_98', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '1', '2026-07-22 05:43:32', '0000-00-00 00:00:00'),
(99, 'ATK_21793_99', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2026-07-22 05:44:37', '0000-00-00 00:00:00'),
(100, 'ATK_8497_100', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2026-07-22 07:27:31', '0000-00-00 00:00:00'),
(101, 'ATK_28064_101', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2026-07-22 07:28:11', '0000-00-00 00:00:00'),
(102, 'ATK_64428_102', 1, 'albertflores', '', '', '', '', 'sample', 'sample', '', 'New', '', '', '', '', '', '1', '2026-07-22 07:56:11', '0000-00-00 00:00:00'),
(103, 'ATK_46993_103', 1, 'albertflores', '', '', '', '', 'masta ', 'masta ', '', 'New', '', '', '', '', '', '1', '2026-07-22 08:22:54', '0000-00-00 00:00:00'),
(104, 'ATK_65558_104', 1, 'albertflores', '', '', '', '', 'test123', 'test123', '', 'New', '', '', '', '', '', '1', '2026-07-22 08:23:56', '0000-00-00 00:00:00'),
(105, 'ATK_73994_105', 1, 'albertflores', '', '', '', '', 'sample123test', 'sample123test', '', 'New', '', '', '', '', '', '4', '2026-07-22 08:24:24', '0000-00-00 00:00:00'),
(106, 'ATK_85092_106', 1, 'albertflores', '', '', '', '', 'sample123test', 'sample123test', '', 'New', '', '', '', '', '', '4', '2026-07-22 08:25:09', '0000-00-00 00:00:00'),
(107, 'ATK_19590_107', 1, 'albertflores', '', '', '', '', 'sample123test', 'sample123test', '', 'New', '', '', '', '', '', '4', '2026-07-22 08:25:45', '0000-00-00 00:00:00'),
(108, 'ATK_5559_108', 1, 'albertflores', '', '', '', '', 'asd', 'asdda', '', 'New', '', '', '', '', '', '1', '2026-07-22 08:26:30', '0000-00-00 00:00:00'),
(109, 'ATK_57810_109', 1, 'albertflores', '', '', '', '', 'asd', 'asdda', '', 'New', '', '', '', '', '', '1', '2026-07-22 08:26:50', '0000-00-00 00:00:00'),
(110, 'ATK_79345_110', 1, 'albertflores', '', '', '', '', 'a', 'a', '', 'New', '', '', '', '', '', '2', '2026-07-22 09:25:30', '0000-00-00 00:00:00'),
(111, 'ATK_16371_111', 1, 'albertflores', '', '', '', '', 'sa', 'sa', '', 'New', '', '', '', '', '', '4', '2026-07-22 09:33:12', '0000-00-00 00:00:00'),
(112, 'ATK_91715_112', 1, 'albertflores', '', '', '', '', 'as', 'asd', '', 'New', '', '', '', '', '', '7', '2026-07-22 09:36:23', '0000-00-00 00:00:00'),
(113, 'ATK_91885_113', 1, 'albertflores', '', '', '', '', 'asd', 'asd', '', 'New', '', '', '', '', '', '3', '2026-07-22 09:48:54', '0000-00-00 00:00:00'),
(114, 'ATK_35726_114', 1, 'albertflores', '', '', '', '', 'sample10:15', '10:15', '', 'New', '', '', '', '', '', '1', '2027-07-22 04:15:27', '0000-00-00 00:00:00'),
(115, 'ATK_18363_115', 1, 'albertflores', '', '', '', '', 'a', 'as', '', 'New', '', '', '', '', '', '7', '2027-07-22 04:17:29', '0000-00-00 00:00:00'),
(116, 'ATK_67077_116', 3, 'CLARENCEANDAYA', '3', '', '', '', 'i cant access the data1', 'no found data\r\n', '', 'Close', '', '', '', '', '41', '15', '2027-07-22 04:25:46', '0000-00-00 00:00:00'),
(117, 'ATK_32232_117', 3, 'CLARENCEANDAYA', '', '', '', '', 'cash', 'i need to pay the gas', '', 'New', '', '', '', '', '', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'ATK_36943_118', 3, 'CLARENCEANDAYA', '', '', '', '', 'DISPLAY', 'NO DISPLAY IN MY COMPUTER I NEED TO HELP', '', 'New', '', '', '', '', '', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'ATK_53372_119', 3, 'CLARENCEANDAYA', '', '', '', '', 'ASA', 'I HAVE A PROBLEM IN MY ASA I CANT ACCESS THE DATA ', '', 'New', '', '', '', '', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'ATK_72802_120', 1, 'albertflores', '----- NONE CATEGORY -----', '', '', '', 'no display', 'sample', '', 'In Progress', '', '', '', '2', '', '2', '0000-00-00 00:00:00', '2022-07-28 15:24:13'),
(121, 'ATK_51276_121', 3, 'CLARENCEANDAYA', '', '', '', '', 'clarence', 'andaya', '', 'New', '', '', '', '', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'ATK_46838_122', 3, 'CLARENCEANDAYA', '', '', '', '', 'masta', 'masta', '', 'New', '', '', '', '', '', '1', '2022-07-28 15:25:05', '0000-00-00 00:00:00'),
(123, 'ATK_68993_123', 1, 'albertflores', '6', 'sample', 'sample', 'sample', 'sample ', 'sample ', 'sample', 'New', 'sample', 'sample', 'sample', '41', '41', '15', '2022-08-01 10:01:02', '0000-00-00 00:00:00'),
(124, 'ATK_57352_124', 41, 'CLARENCEANDAYA', '6', '', '', '', '', '', '', 'New', '', '', '', '41', '41', '15', '2022-08-01 15:52:13', '0000-00-00 00:00:00'),
(125, 'ATK_45568_125', 41, 'CLARENCEANDAYA', '3', '', '', '', 'sample ticket', 'sample ticket', '', 'In Progress', '', '', '', '', '11', '15', '2022-08-03 12:51:54', '2022-08-03 12:52:16'),
(126, 'ATK_23327_126', 41, 'CLARENCEANDAYA', '----- NONE CATEGORY -----', '', '', '', 'i need to have account ', 'for user ', '', 'New', '', '', '', '', '11', '15', '2022-08-03 13:43:03', '0000-00-00 00:00:00'),
(127, 'ATK_38416_127', 41, 'CLARENCEANDAYA', '', '', '', '', 'asda', 'asdasd', '', 'Close', '', '', '', '', '', '2', '2022-08-04 08:38:06', '2022-08-04 08:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_menu_useraccess`
--

CREATE TABLE `ticket_menu_useraccess` (
  `permission_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `sub_menu_id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_menu_useraccess`
--

INSERT INTO `ticket_menu_useraccess` (`permission_id`, `menu_id`, `sub_menu_id`, `user_id`, `user_permission`) VALUES
(13, 1, 1, 5, 'True'),
(14, 2, 2, 5, 'True'),
(15, 2, 3, 5, 'True'),
(16, 1, 1, 1, 'False'),
(17, 2, 2, 1, 'False'),
(18, 2, 3, 1, 'False');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messegers`
--

CREATE TABLE `ticket_messegers` (
  `id` int NOT NULL,
  `ticket_from_user` int NOT NULL,
  `ticket_to_user` int NOT NULL,
  `ticket_message` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_messegers`
--

INSERT INTO `ticket_messegers` (`id`, `ticket_from_user`, `ticket_to_user`, `ticket_message`) VALUES
(1, 4, 5, 'hello'),
(48, 1, 1, 'asd'),
(49, 5, 5, 'asd'),
(50, 4, 4, 'asdasdasd'),
(51, 4, 4, 'asdasdas'),
(52, 4, 4, 'asdadasd'),
(53, 1, 7, 'SADAS'),
(54, 1, 4, 'ASDA'),
(55, 1, 9, 'asd'),
(56, 1, 8, 'asdasda'),
(57, 1, 6, ''),
(58, 1, 6, 'asda'),
(59, 1, 1, ''),
(60, 1, 1, 'dasdasdsa'),
(63, 1, 1, 'asd'),
(64, 1, 1, 'missyoupo\n');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_permission`
--

CREATE TABLE `ticket_permission` (
  `id` int NOT NULL,
  `permission_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `permission_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_permission`
--

INSERT INTO `ticket_permission` (`id`, `permission_name`, `permission_status`) VALUES
(1, 'ticket_view', 1),
(2, 'ticket_add', 1),
(3, 'ticket_update', 1),
(4, 'ticket_delete', 1),
(5, 'user_view', 1),
(6, 'user_add', 1),
(7, 'user_update', 1),
(8, 'user_delete', 1),
(9, 'ticket_detail_status', 1),
(10, 'role_add', 1),
(11, 'permission_add', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_rating`
--

CREATE TABLE `ticket_rating` (
  `id` int NOT NULL,
  `rating_ticket_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rating_user_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rating_user_rate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_rating`
--

INSERT INTO `ticket_rating` (`id`, `rating_ticket_id`, `rating_user_id`, `rating_user_rate`) VALUES
(17, '64', '', 4),
(18, '70', '', 4),
(19, '95', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_role`
--

CREATE TABLE `ticket_role` (
  `id` int NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_role`
--

INSERT INTO `ticket_role` (`id`, `role_name`, `role_status`) VALUES
(1, 'admin', 1),
(2, 'user', 1),
(3, 'employee', 1),
(4, 'view', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_role_permission`
--

CREATE TABLE `ticket_role_permission` (
  `id` int NOT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `permission_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_role_permission`
--

INSERT INTO `ticket_role_permission` (`id`, `role_id`, `permission_id`) VALUES
(1, '1', 1),
(2, '1', 2),
(3, '1', 0),
(4, '1', 0),
(5, '1', 0),
(6, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE `ticket_status` (
  `ticket_status_id` int NOT NULL,
  `ticket_status_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`ticket_status_id`, `ticket_status_name`, `status`) VALUES
(1, 'Pending', 0),
(2, 'Open', 0),
(3, 'Close', 0),
(4, 'In Progress', 0),
(5, 'Success\r\n', 1),
(6, 'New', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status_level`
--

CREATE TABLE `ticket_status_level` (
  `status_id` int NOT NULL,
  `status_name` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_sub_menu`
--

CREATE TABLE `ticket_sub_menu` (
  `submenu_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `submenu_name` varchar(100) NOT NULL,
  `submenu_url` varchar(200) NOT NULL,
  `submenu_display` varchar(10) NOT NULL,
  `submenu_order` int NOT NULL,
  `submenu_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `submenu_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_sub_menu`
--

INSERT INTO `ticket_sub_menu` (`submenu_id`, `menu_id`, `submenu_name`, `submenu_url`, `submenu_display`, `submenu_order`, `submenu_status`, `submenu_department`) VALUES
(1, 1, 'Ticket Details', '../admin/ticket_details_container.php', 'Yes', 1, 'Enable', '1'),
(2, 2, 'User List', 'user_list.php', 'Yes', 2, 'Enable', '1'),
(3, 2, 'Add User', 'user_add.php', 'Yes', 1, 'Enable', '3');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_user`
--

CREATE TABLE `ticket_user` (
  `id` int NOT NULL,
  `u_id` int DEFAULT NULL,
  `ticket_users` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_fn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_ln` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_employee_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `u_id`, `ticket_users`, `ticket_fn`, `ticket_ln`, `ticket_employee_id`, `ticket_email`, `ticket_password`, `ticket_status`, `ticket_user_department`, `ticket_user_url`, `ticket_user_role`) VALUES
(1, NULL, 'albert flores', 'albert', 'flores', '', 'aflores@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '1', 'ibro.png', '1'),
(2, 1, 'elijoy', 'elijoy', 'jordan', '', 'ejordan@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '1', 'ekram.JPG', '2'),
(3, NULL, 'test123', 'CLARENCE', 'ANDAYA', '', 'candaya@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '2', 'ibro.png', '3'),
(4, NULL, 'albert', '', '', '', '', '', '0', '', '', ''),
(5, NULL, 'michael', '', '', '', '', '', '1', '1', '', ''),
(6, NULL, 'rolan', '', '', '', '', '', '', '', '', ''),
(7, NULL, 'rolan', '', '', '', '', '', '', '', '', ''),
(8, NULL, 'dan', '', '', '', '', '', '1', '1', '', ''),
(9, NULL, 'almira', '', '', '', '', '', '1', '1', '', ''),
(10, NULL, '', '', '', '', '', '', '', '', '', ''),
(11, 2314, '', 'ALBERTO', 'FLORES', '60512', 'Aflores@autohubgroup.com', '35757c244bb22c3a9f40435772adcb10', '1', '15', 'ibro.png', '1'),
(41, 1295, '', 'CLARENCE', 'ANDAYA', '60418', 'candaya@autohubgroup.com', '098f6bcd4621d373cade4e832627b4f6', '1', '15', 'ibro.png', '2'),
(49, 2233, '', 'Michael', 'Balibrea', '60514', 'mbalibrea@autohubgroup.com', 'efd8b781b9b1046f5ae5918e028bc60d', '1', '15', 'ibro.png', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket-category`
--
ALTER TABLE `ticket-category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_activity_logs`
--
ALTER TABLE `ticket_activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_assignee`
--
ALTER TABLE `ticket_assignee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_chat`
--
ALTER TABLE `ticket_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_deparment`
--
ALTER TABLE `ticket_deparment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticket_dept_source_id` (`ticket_dept_source_id`);

--
-- Indexes for table `ticket_department_assig`
--
ALTER TABLE `ticket_department_assig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_menu_useraccess`
--
ALTER TABLE `ticket_menu_useraccess`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `ticket_messegers`
--
ALTER TABLE `ticket_messegers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_from_user` (`ticket_from_user`),
  ADD KEY `ticket_to_user` (`ticket_to_user`);

--
-- Indexes for table `ticket_permission`
--
ALTER TABLE `ticket_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_rating`
--
ALTER TABLE `ticket_rating`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rating_ticket_id` (`rating_ticket_id`);

--
-- Indexes for table `ticket_role`
--
ALTER TABLE `ticket_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_role_permission`
--
ALTER TABLE `ticket_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_status`
--
ALTER TABLE `ticket_status`
  ADD PRIMARY KEY (`ticket_status_id`);

--
-- Indexes for table `ticket_status_level`
--
ALTER TABLE `ticket_status_level`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `ticket_sub_menu`
--
ALTER TABLE `ticket_sub_menu`
  ADD PRIMARY KEY (`submenu_id`);

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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket-category`
--
ALTER TABLE `ticket-category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_activity_logs`
--
ALTER TABLE `ticket_activity_logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `ticket_assignee`
--
ALTER TABLE `ticket_assignee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_chat`
--
ALTER TABLE `ticket_chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ticket_deparment`
--
ALTER TABLE `ticket_deparment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ticket_department_assig`
--
ALTER TABLE `ticket_department_assig`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `ticket_menu_useraccess`
--
ALTER TABLE `ticket_menu_useraccess`
  MODIFY `permission_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ticket_messegers`
--
ALTER TABLE `ticket_messegers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ticket_permission`
--
ALTER TABLE `ticket_permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket_rating`
--
ALTER TABLE `ticket_rating`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ticket_role`
--
ALTER TABLE `ticket_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_role_permission`
--
ALTER TABLE `ticket_role_permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
  MODIFY `ticket_status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_status_level`
--
ALTER TABLE `ticket_status_level`
  MODIFY `status_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_sub_menu`
--
ALTER TABLE `ticket_sub_menu`
  MODIFY `submenu_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_user`
--
ALTER TABLE `ticket_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket_messegers`
--
ALTER TABLE `ticket_messegers`
  ADD CONSTRAINT `ticket_messegers_ibfk_1` FOREIGN KEY (`ticket_from_user`) REFERENCES `ticket_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ticket_messegers_ibfk_2` FOREIGN KEY (`ticket_to_user`) REFERENCES `ticket_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
