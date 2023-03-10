-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2023 at 11:13 AM
-- Server version: 5.7.41-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoph_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_icon` varchar(200) NOT NULL,
  `menu_status` varchar(20) NOT NULL DEFAULT 'Enable',
  `menu_department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` text NOT NULL,
  `country_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticket _generator` varchar(255) NOT NULL,
  `time_and_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket-category`
--

CREATE TABLE `ticket-category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_date` varchar(255) NOT NULL,
  `category_uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_activity_logs`
--

CREATE TABLE `ticket_activity_logs` (
  `id` int(11) NOT NULL,
  `ticket_activity_uid` varchar(255) NOT NULL,
  `ticket_activity_name` varchar(255) NOT NULL,
  `ticket_activity_created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignee`
--

CREATE TABLE `ticket_assignee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignment`
--

CREATE TABLE `ticket_assignment` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(255) NOT NULL,
  `ticket_assign` varchar(255) NOT NULL COMMENT 'employee assign in the ticket',
  `ticket_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_chat`
--

CREATE TABLE `ticket_chat` (
  `id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `ticket_user_id` int(11) NOT NULL,
  `ticket_date_time` datetime NOT NULL,
  `ticket_message` longtext NOT NULL,
  `ticket_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_deparment`
--

CREATE TABLE `ticket_deparment` (
  `id` int(11) NOT NULL,
  `ticket_dept_source_id` int(11) DEFAULT NULL,
  `ticket_dept_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_dept_tnd` datetime NOT NULL,
  `ticket_dept_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_deparment`
--

INSERT INTO `ticket_deparment` (`id`, `ticket_dept_source_id`, `ticket_dept_name`, `ticket_dept_tnd`, `ticket_dept_uid`) VALUES
(35, 15, 'APP. DEV & DATABASE', '2022-08-04 10:44:40', ''),
(90, 0, '', '2023-01-31 09:14:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_files`
--

CREATE TABLE `ticket_files` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_incident`
--

CREATE TABLE `ticket_incident` (
  `id` int(11) NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `ticket_caller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_subcategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_config_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_short_discrip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_discription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_filedownload` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_contact_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_imapact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_urgent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_priority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_assign_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_assign_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_department_id` int(11) NOT NULL,
  `ticket_timeofdate` date NOT NULL,
  `ticket_timeofdate_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_incident`
--

INSERT INTO `ticket_incident` (`id`, `ticket_number`, `u_id`, `ticket_caller`, `ticket_category`, `ticket_subcategory`, `ticket_service`, `ticket_config_item`, `ticket_short_discrip`, `ticket_discription`, `ticket_filedownload`, `ticket_contact_type`, `ticket_status`, `ticket_imapact`, `ticket_urgent`, `ticket_priority`, `ticket_assign_group`, `ticket_assign_to`, `ticket_department_id`, `ticket_timeofdate`, `ticket_timeofdate_end`) VALUES
(154, 'ATK_59043_154', 69, 'ALBERTOFLORES', '3', '', '', '', 'sample', 'sample', '', '', '2', '', '', '', '', '', 1, '2022-08-04', '2023-01-23'),
(156, 'ATK_9005_156', 69, 'ALBERTOFLORES', '----- NONE CATEGORY -----', '', '', '', 'SAMPLE 11:27', 'SAMPLE 11:27', '', '', '1', '', '', '', '', '69', 15, '2022-08-08', '2023-01-24'),
(157, 'ATK_51956_157', 69, 'ALBERTOFLORES', '----- NONE CATEGORY -----', '', '', '', 'sada', 'AS', 'testing.png', '', '3', '', '', '', '', '69', 15, '2022-08-08', '0000-00-00'),
(158, 'ATK_28672_158', 69, 'ALBERTOFLORES', '', '', '', '', 'sample data', 'sample dis', '', '', '3', '', '', '', '', '', 15, '2022-12-09', '0000-00-00'),
(159, 'ATK_49122_159', 69, 'ALBERTOFLORES', '', '', '', '', 'clarence', 'tahong', '', '', '1', '', '', '', '', '', 1, '2022-12-21', '2023-01-27'),
(160, 'ATK_37269_160', 69, 'ALBERTOFLORES', '', '', '', '', 'asd', 'asasasasa', '', '', '3', '', '', '', '', '', 23, '2022-12-21', '0000-00-00'),
(161, 'ATK_28036_161', 69, 'ALBERTOFLORES', '', '', '', '', 'sampleclarence', 'clacla', '', '', '3', '', '', '', '', '', 1, '2022-12-21', '0000-00-00'),
(162, 'ATK_51993_162', 69, 'ALBERTOFLORES', '', '', '', '', 'sample', 'sample2022', '', '', '3', '', '', '', '', '', 3, '2022-12-28', '0000-00-00'),
(163, 'ATK_46956_163', 69, 'ALBERTOFLORES', '', '', '', '', 'sample2022', 'sample1234567', '', '', '3', '', '', '', '', '', 23, '2022-12-28', '0000-00-00'),
(164, 'ATK_75696_164', 69, 'ALBERTOFLORES', '', '', '', '', 'keyboard', 'keyboard', '', '', '3', '', '', '', '', '', 23, '2022-12-28', '0000-00-00'),
(165, 'ATK_99804_165', 69, 'ALBERTOFLORES', '', '', '', '', 'asd', 'a', '', '', '3', '', '', '', '', '', 1, '2022-12-29', '0000-00-00'),
(166, 'ATK_29608_166', 69, 'ALBERTOFLORES', '', '', '', '', 'asda', 'a', '', '', '3', '', '', '', '', '', 2, '2022-12-29', '0000-00-00'),
(167, 'ATK_94169_167', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'as', '', '', '3', '', '', '', '', '', 1, '2023-01-09', '0000-00-00'),
(168, 'ATK_87467_168', 69, 'ALBERTOFLORES', '', '', '', '', ' Not Found', 'as', '', '', '3', '', '', '', '', '', 1, '2023-01-09', '0000-00-00'),
(169, 'ATK_40770_169', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'not working\n', '', '', '3', '', '', '', '', '', 23, '2023-01-09', '0000-00-00'),
(172, 'ATK_79259_172', 112, 'MA. DANICAMAGTANGOB', '----- NONE CATEGORY -----', '', '', '', 'Keyboard', 'NOT WORKING PROPERLY', '', '', '3', '', '', '', '', '112', 15, '2023-01-11', '0000-00-00'),
(173, 'ATK_35291_173', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', ' error key ', 'testing.jpg', '', '3', '', '', '', '', '', 15, '2023-01-11', '0000-00-00'),
(174, 'ATK_14220_174', 124, 'ChristilAlmazan', '1', '', '', '', 'Keyboard', 'Not working', '', '', '3', '', '', '', '', '----- NONE DEPARMENT -----', 1, '2023-01-31', '0000-00-00'),
(175, 'ATK_92449_175', 124, 'ChristilAlmazan', '1', '', '', '', 'Mouse', 'not working', '', '', '1', '', '', '', '', '----- NONE DEPARMENT -----', 1, '2023-01-31', '2023-01-31'),
(177, 'ATK_19578_177', 124, 'ChristilAlmazan', '', '', '', '', 'Keyboard', 'Damaged.', '', '', '3', '', '', '', '', '', 15, '2023-02-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_items`
--

CREATE TABLE `ticket_items` (
  `id` int(11) NOT NULL,
  `ticket_item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ticket_discription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_items`
--

INSERT INTO `ticket_items` (`id`, `ticket_item_name`, `ticket_discription`, `createdAt`, `updatedAt`) VALUES
(1, 'Keyboard', 'Checking keyboard or 15 mins to change keyboard', '2022-12-13', '2022-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messegers`
--

CREATE TABLE `ticket_messegers` (
  `id` int(11) NOT NULL,
  `ticket_from_user` int(11) NOT NULL,
  `ticket_to_user` int(11) NOT NULL,
  `ticket_message` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_rating`
--

CREATE TABLE `ticket_rating` (
  `id` int(11) NOT NULL,
  `rating_ticket_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating_user_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_rating`
--

INSERT INTO `ticket_rating` (`id`, `rating_ticket_id`, `rating_user_rate`) VALUES
(20, '69', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_role`
--

CREATE TABLE `ticket_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_role`
--

INSERT INTO `ticket_role` (`id`, `role_name`, `role_status`) VALUES
(5, 'Super Admin', 1),
(6, 'manager', 2),
(7, 'User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE `ticket_status` (
  `ticket_status_id` int(11) NOT NULL,
  `ticket_status_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`ticket_status_id`, `ticket_status_name`, `status`) VALUES
(1, 'In Progress', 1),
(2, 'Close', 1),
(3, 'New', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_suggestions`
--

CREATE TABLE `ticket_suggestions` (
  `id` int(11) NOT NULL,
  `suggestions_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `suggestions_description` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `createdAt` datetime NOT NULL,
  `suggestions_status` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_suggestions`
--

INSERT INTO `ticket_suggestions` (`id`, `suggestions_name`, `suggestions_description`, `createdAt`, `suggestions_status`) VALUES
(1, 'Keyboard', 'Keyboard to change 10 mins to 15 mins ', '2022-12-19 08:50:17', '1'),
(2, 'Mouse', 'Mouse to change 10 mins to 15 mins', '2023-01-09 07:03:25', '1'),
(3, 'sa', 'asa', '0000-00-00 00:00:00', '1'),
(4, 'Earphones', 'Earphones to change 10 mins to 15 mins', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_treeview_items`
--

CREATE TABLE `ticket_treeview_items` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `parent_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_treeview_items`
--

INSERT INTO `ticket_treeview_items` (`id`, `name`, `text`, `parent_id`) VALUES
(1, 'task1', 'Ticket Incident Masterfile Report ', '0'),
(2, 'task2', 'Ticket Incident Per status', '0'),
(3, 'task3', 'Ticket Incident Per Users', '0'),
(4, 'task4', 'task2title4', '3'),
(5, 'task5', 'task1title4', '3'),
(6, 'task5', 'task2title5', '5'),
(7, 'task42', 'desc', '2'),
(8, 'task45', 'desc', '2'),
(9, 'task56', 'Masterfile', '1'),
(10, 'task87', 'desc', '5'),
(11, 'task66', 'desc', '3'),
(12, 'task4', 'Ticket Incident per Department', '1'),
(13, 'task23\r\n', 'Masterfile', '12');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_user`
--

CREATE TABLE `ticket_user` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `ticket_users` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_fn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_ln` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_employee_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_user_department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_deal_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_comp_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_dob` date NOT NULL,
  `ticket_user_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_user_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticket_createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `u_id`, `ticket_users`, `ticket_fn`, `ticket_ln`, `ticket_employee_id`, `ticket_email`, `ticket_password`, `ticket_status`, `ticket_user_department`, `ticket_deal_name`, `ticket_comp_name`, `ticket_position`, `ticket_mobile`, `ticket_dob`, `ticket_user_url`, `ticket_user_role`, `ticket_createdAt`) VALUES
(69, 2314, '', 'ALBERTO', 'FLORES', '60512', 'Aflores@autohubgroup.com', '35757c244bb22c3a9f40435772adcb10', '1', '15', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'WEB DEVELOPER', '09618191459', '0000-00-00', 'ibro.png', '2', '2022-02-01'),
(70, 1295, '', 'CLARENCE', 'ANDAYA', '60418', 'candaya@autohubgroup.com', '098f6bcd4621d373cade4e832627b4f6', '1', '15', '', '', '', '', '0000-00-00', 'ibro.png', '1', '0000-00-00'),
(71, 2233, '', 'Michael', 'Balibrea', '60514', 'mbalibrea@autohubgroup.com', 'efd8b781b9b1046f5ae5918e028bc60d', '1', '15', '', '', '', '', '0000-00-00', 'ibro.png', '1', '0000-00-00'),
(112, 517, '', 'MA. DANICA', 'MAGTANGOB', '60410', 'dmagtangob@autohubgroup.com', '1a51cd5cdd173c04dbdaa0c5fc5b168e', '1', '15', 'AUTOHUB GROUP INC', 'TRIUMPH MOTORCYCLES PHILIPPINES, INC.', 'Database Assistant', '09176331398', '0000-00-00', 'ibro.png', '1', '2022-12-02'),
(124, 2888, '', 'Christil', 'Almazan', '3638283', 'almazan@autohub.com', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '0', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'Workshop Supervisor', '09125735445', '0000-00-00', 'ibro.png', '1', '2023-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

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
-- Indexes for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket-category`
--
ALTER TABLE `ticket-category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_activity_logs`
--
ALTER TABLE `ticket_activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_assignee`
--
ALTER TABLE `ticket_assignee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_chat`
--
ALTER TABLE `ticket_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
