-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220719.04fabfdc7e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 10:12 AM
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
(41, '60418', 'You have successfully login', '2022-07-20 15:35:45');

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
(59, 94, 1, '2022-07-20 13:59:45', 'test3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_deparment`
--

CREATE TABLE `ticket_deparment` (
  `id` int NOT NULL,
  `ticket_dept_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_dept_tnd` datetime NOT NULL,
  `ticket_dept_uid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_deparment`
--

INSERT INTO `ticket_deparment` (`id`, `ticket_dept_name`, `ticket_dept_tnd`, `ticket_dept_uid`) VALUES
(1, 'APPLICATION & DATABASE ', '2022-06-04 08:59:57', 'AD0001'),
(2, 'INFORMATION TECHNOLOGY', '2022-06-04 04:31:03', 'IT0002'),
(3, 'HUMAN RESOURCE', '2022-06-04 04:31:03', 'HR0003'),
(4, 'ADMIN DEPARTMENT ', '2022-06-04 04:31:03', 'AD0004'),
(5, 'PROCUREMENT DEPARTMENT', '2022-06-04 04:31:03', 'PD0005'),
(6, 'CREDIT AND COLLECTION', '2022-06-04 04:31:03', 'CC0006'),
(7, 'ACCOUNTING DEPARTMENT', '2022-06-04 04:31:03', 'ACD0007'),
(8, 'TREASURY DEPARTMENT', '2022-06-04 04:31:03', 'TD0008'),
(9, 'MARKETING DEPARTMENT', '2022-06-04 04:31:03', 'MD0009'),
(10, 'SALES DEPARTMENT', '2022-06-04 04:31:03', 'SD0010');

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
(2, 'CLARENCE ANDAYA', 'AD0001'),
(3, 'NYCA AMPONIN', 'HR0003');

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
(69, 'ATK_9570_69', 60418, 'albertflores', '----- NONE CATEGORY -----', 'sampletetest1', 'sampletest123', 'sampltest1234', 'asd', 'sdasda', 'sampltest12342', 'New', '111', 'twst1', 'high 1', '2', '', '2', '2028-06-22 05:50:33', '0000-00-00 00:00:00'),
(70, 'ATK_62273_70', 60418, 'albertflores', '', '', '', '', 'sampletest1151', 'sampletest1151', '', 'In Progress', '', '', '', '', '3', '1', '2028-06-22 05:51:37', '0000-00-00 00:00:00'),
(71, 'ATK_31008_71', 3, 'albertflores', '', '', '', '', 'sample143', 'sample143', '', 'New', '', '', '', '', '', '1', '2028-06-22 07:43:20', '0000-00-00 00:00:00'),
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
(86, 'ATK_60592_86', 60513, 'elijoyjordan', '', '', '', '', 'jean test', 'jean test', '', 'New', '', '', '', '', '', '3', '2002-07-22 09:04:00', '0000-00-00 00:00:00'),
(87, 'ATK_70856_87', 60513, 'elijoyjordan', '', '', '', '', 'sample2010702022', 'sample2010702022', '', 'New', '', '', '', '', '', '2', '2004-07-22 08:01:20', '0000-00-00 00:00:00'),
(88, 'ATK_63730_88', 3, 'CLARENCEANDAYA', '', '', '', '', 'test ', 'test', '', 'New', '', '', '', '', '', '1', '2004-07-22 10:11:32', '0000-00-00 00:00:00'),
(89, 'ATK_5171_89', 1, 'albertflores', '', '', '', '', 'tecket assign ', 'ticket assign\r\n', '', 'New', '', '', '', '', '', '2', '2007-07-22 09:23:39', '0000-00-00 00:00:00'),
(90, 'ATK_9348_90', 1, 'albertflores', '', '', '', '', 'test', 'test', '', 'In Progress', '', '', '', '', '', '1', '2011-07-22 10:19:59', '0000-00-00 00:00:00'),
(91, 'ATK_62960_91', 1, 'albertflores', '', '', '', '', '', '', '', 'New', '', '', '', '', '', '', '2011-07-22 10:22:42', '0000-00-00 00:00:00'),
(92, 'ATK_94495_92', 1, 'albertflores', '', '', '', '', 'sample', 'sample', '', 'In Progress', '', '', '', '', '', '1', '2016-07-22 04:45:50', '0000-00-00 00:00:00'),
(93, 'ATK_13751_93', 1, 'albertflores', '', '', '', '', 'sample403', 'sample403', '', 'New', '', '', '', '', '', '1', '2019-07-22 10:04:01', '0000-00-00 00:00:00'),
(94, 'ATK_22639_94', 3, 'CLARENCEANDAYA', '', '', '', '', 'Test Subject', 'Hello \r\n', '', 'In Progress', '', '', '', '', '1', '2', '2020-07-22 07:53:36', '0000-00-00 00:00:00'),
(95, 'ATK_89333_95', 2, 'elijoyjordan', '', '', '', '', 'sample 222222', 'sample22222', '', 'New', '', '', '', '', '2', '1', '2020-07-22 08:53:34', '0000-00-00 00:00:00');

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
  `rating_user_rate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_rating`
--

INSERT INTO `ticket_rating` (`id`, `rating_ticket_id`, `rating_user_rate`) VALUES
(17, '64', 4);

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
  `ticket_status_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`ticket_status_id`, `ticket_status_name`) VALUES
(1, 'Pending'),
(2, 'Open'),
(3, 'Close'),
(4, 'In Progress'),
(5, 'Success\r\n'),
(6, 'New');

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
  `u_id` int NOT NULL,
  `ticket_users` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_fn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_ln` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_employee_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_passaword` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_user_role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `u_id`, `ticket_users`, `ticket_fn`, `ticket_ln`, `ticket_employee_id`, `ticket_email`, `ticket_passaword`, `ticket_status`, `ticket_user_department`, `ticket_user_url`, `ticket_user_role`) VALUES
(1, 60512, 'albert flores', 'albert', 'flores', '', 'aflores@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '1', 'ibro.png', '1'),
(2, 60513, 'elijoy', 'elijoy', 'jordan', '', 'ejordan@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '1', 'ekram.JPG', '2'),
(3, 60418, 'test123', 'CLARENCE', 'ANDAYA', '', 'candaya@autohubgroup.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '1', '2', 'ibro.png', '3'),
(4, 0, 'albert', '', '', '', '', '', '0', '', '', ''),
(5, 0, 'michael', '', '', '', '', '', '1', '1', '', ''),
(6, 0, 'rolan', '', '', '', '', '', '', '', '', ''),
(7, 0, 'rolan', '', '', '', '', '', '', '', '', ''),
(8, 0, 'dan', '', '', '', '', '', '1', '1', '', ''),
(9, 0, 'almira', '', '', '', '', '', '1', '1', '', ''),
(10, 0, '', '', '', '', '', '', '', '', '', '');

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ticket_assignee`
--
ALTER TABLE `ticket_assignee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_chat`
--
ALTER TABLE `ticket_chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `ticket_deparment`
--
ALTER TABLE `ticket_deparment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ticket_department_assig`
--
ALTER TABLE `ticket_department_assig`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
