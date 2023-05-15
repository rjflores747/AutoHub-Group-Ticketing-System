-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220719.04fabfdc7e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 07:34 AM
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
-- Database: `syofdjax_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `salary` int NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `position`, `office`, `age`, `salary`, `photo`) VALUES
(1, 'Tiger Wood', 'Accountant', 'Tokyo', 36, 5689, '01.jpg'),
(2, 'Mark Oto Ednalan', 'Chief Executive Officer (CEO)', 'London', 56, 5648, '02.jpg'),
(3, 'Jacob thompson', 'Junior Technical Author', 'San Francisco', 23, 5689, '03.jpg'),
(4, 'cylde Ednalan', 'Software Engineer', 'Olongapo', 23, 54654, '04.jpg'),
(5, 'Angelica Ramos', 'Software Engineer', 'San Francisco', 26, 5465, '05.jpg'),
(6, 'Airi Satou', 'Integration Specialist', 'New York', 53, 56465, '06.jpg'),
(8, 'Tiger Nixon', 'Software Engineer', 'London', 45, 456, '07.jpg'),
(9, 'Airi Satou', 'Pre-Sales Support', 'New York', 25, 4568, '08.jpg'),
(10, 'Angelica Ramos', 'Sales Assistant', 'New York', 45, 456, '09.jpg'),
(11, 'Ashton updated', 'Senior Javascript Developer', 'Olongapo', 45, 54565, '01.jpg'),
(12, 'Bradley Greer', 'Regional Director', 'San Francisco', 27, 5485, '02.jpg'),
(13, 'Brenden Wagner', 'Javascript Developer', 'San Francisco', 38, 65468, '03.jpg'),
(14, 'Brielle Williamson', 'Personnel Lead', 'Olongapo', 56, 354685, '04.jpg'),
(15, 'Bruno Nash', 'Customer Support', 'New York', 36, 65465, '05.jpg'),
(16, 'cairocoders', 'Sales Assistant', 'Sydney', 45, 56465, '06.jpg'),
(17, 'Zorita Serrano', 'Support Engineer', 'San Francisco', 38, 6548, '07.jpg'),
(18, 'Zenaida Frank', 'Chief Operating Officer (COO)', 'San Francisco', 39, 545, '08.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int NOT NULL,
  `country_name` text NOT NULL,
  `country_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`, `country_description`) VALUES
(1, 'keyboard', 'Keyboard change 10 mins to 15 mins'),
(2, 'Mouse', ''),
(3, 'Afghanistan', ''),
(4, 'Antigua and Barbuda', ''),
(5, 'Anguilla', ''),
(6, 'Albania', ''),
(7, 'Armenia', ''),
(8, 'Angola', ''),
(9, 'Antarctica', ''),
(10, 'Argentina', ''),
(11, 'American Samoa', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_activity_logs`
--

CREATE TABLE `ticket_activity_logs` (
  `id` int NOT NULL,
  `ticket_activity_uid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_activity_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_activity_created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_activity_logs`
--

INSERT INTO `ticket_activity_logs` (`id`, `ticket_activity_uid`, `ticket_activity_name`, `ticket_activity_created_on`) VALUES
(282, '2314', 'View User ', '2022-08-04 10:42:48'),
(283, '2314', 'View User ', '2022-08-04 10:43:01'),
(284, '11', 'You have successfully add new ticket', '2022-08-04 10:44:19'),
(285, '11', 'You have successfully add new ticket', '2022-08-04 10:44:21'),
(286, '11', 'You have successfully add new ticket', '2022-08-04 10:44:24'),
(287, '11', 'You have successfully add new ticket', '2022-08-04 10:44:25'),
(288, '11', 'You have successfully add new ticket', '2022-08-04 10:44:25'),
(289, '11', 'You have successfully add new ticket', '2022-08-04 10:44:25'),
(290, '11', 'You have successfully add new ticket', '2022-08-04 10:44:25'),
(291, '11', 'You have successfully add new ticket', '2022-08-04 10:44:25'),
(292, '2314', 'You have successfully logged out', '2022-08-04 10:44:29'),
(293, '69', 'You have successfully add new ticket', '2022-08-04 10:46:09'),
(294, '69', 'You have successfully add new ticket', '2022-08-04 10:46:11'),
(295, '69', 'You have successfully add new ticket', '2022-08-04 10:46:13'),
(296, '69', 'You have successfully add new ticket', '2022-08-04 10:46:13'),
(297, '69', 'You have successfully add new ticket', '2022-08-04 10:46:13'),
(298, '69', 'You have successfully add new ticket', '2022-08-04 10:46:14'),
(299, '69', 'You have successfully add new ticket', '2022-08-04 10:46:14'),
(300, '69', 'You have successfully add new ticket', '2022-08-04 10:46:14'),
(301, '69', 'You have successfully add new ticket', '2022-08-04 10:46:17'),
(302, '69', 'You have successfully add new ticket', '2022-08-04 10:46:17'),
(303, '69', 'You have successfully add new ticket', '2022-08-04 10:46:17'),
(304, '69', 'You have successfully add new ticket', '2022-08-04 10:46:17'),
(305, '69', 'You have successfully add new ticket', '2022-08-04 10:46:17'),
(306, '69', 'You have successfully add new ticket', '2022-08-04 10:46:20'),
(307, '69', 'You have successfully add new ticket', '2022-08-04 10:46:21'),
(308, '69', 'You have successfully add new ticket', '2022-08-04 10:46:21'),
(309, '69', 'You have successfully add new ticket', '2022-08-04 10:46:59'),
(310, '69', 'You have successfully add new ticket', '2022-08-04 10:52:06'),
(311, '', 'You have successfully logged out', '2022-08-04 10:56:43'),
(312, '69', 'You have successfully add new ticket', '2022-08-04 10:58:37'),
(313, '69', 'You have successfully add new ticket', '2022-08-04 10:59:21'),
(314, '2314', 'View User ', '2022-08-04 10:59:36'),
(315, '2314', 'View User ', '2022-08-04 11:00:45'),
(316, '2314', 'View User ', '2022-08-04 12:48:47'),
(317, '2314', 'View User ', '2022-08-04 13:26:50'),
(318, '1295', 'View User ', '2022-08-04 13:32:26'),
(319, '1295', 'View User ', '2022-08-04 13:32:52'),
(320, '2233', 'View User ', '2022-08-04 13:52:22'),
(321, '2233', 'View User ', '2022-08-04 13:52:34'),
(322, '2233', 'View User ', '2022-08-04 13:52:37'),
(323, '2233', 'You have successfully logged out', '2022-08-04 13:53:08'),
(324, '2233', 'View User ', '2022-08-04 13:53:35'),
(325, '1295', 'You have successfully logged out', '2022-08-04 14:15:10'),
(326, '2314', 'You have successfully logged out', '2022-08-04 14:25:03'),
(327, '2314', 'View User ', '2022-08-04 14:25:18'),
(328, '2233', 'Updating the Ticket Incident', '2022-08-04 14:26:29'),
(329, '2314', 'You have successfully logged out', '2022-08-04 14:26:42'),
(330, '1295', 'You have successfully logged out', '2022-08-04 14:27:51'),
(331, '1295', 'View User ', '2022-08-04 14:39:35'),
(332, '1295', 'View User ', '2022-08-04 14:48:23'),
(333, '1295', 'Updating the Ticket Incident', '2022-08-04 14:48:33'),
(334, '1295', 'Updating the Ticket Incident', '2022-08-04 14:48:47'),
(335, '1295', 'Updating the Ticket Incident', '2022-08-04 14:49:43'),
(336, '1295', 'View User ', '2022-08-04 14:49:53'),
(337, '1295', 'Updating the Ticket Incident', '2022-08-04 14:50:13'),
(338, '1295', 'View User ', '2022-08-04 14:50:25'),
(339, '1295', 'View User ', '2022-08-04 14:51:04'),
(340, '1295', 'View User ', '2022-08-04 14:57:01'),
(341, '1295', 'View User ', '2022-08-04 14:59:38'),
(342, '2233', 'Updating the Ticket Incident', '2022-08-04 15:00:07'),
(343, '2233', 'Updating the Ticket Incident', '2022-08-04 15:00:24'),
(344, '2233', 'View User ', '2022-08-04 15:09:36'),
(345, '2233', 'View User ', '2022-08-04 15:51:51'),
(346, '2233', 'You have successfully updated', '2022-08-04 15:52:05'),
(347, '2233', 'You have successfully updated', '2022-08-04 15:54:48'),
(348, '2233', 'You have successfully rating', '2022-08-04 15:54:57'),
(349, '2233', 'You have successfully updated', '2022-08-04 15:59:50'),
(350, '2314', 'View User ', '2022-08-04 16:01:33'),
(351, '2314', 'View User ', '2022-08-04 16:02:14'),
(352, '2314', 'You have successfully rating', '2022-08-04 16:02:47'),
(353, '2314', 'You have successfully rating', '2022-08-04 16:03:08'),
(354, '2314', 'You have successfully rating', '2022-08-04 16:21:29'),
(355, '2314', 'You have successfully rating', '2022-08-04 16:22:44'),
(356, '2314', 'You have successfully rating', '2022-08-04 16:24:09'),
(357, '2314', 'View User ', '2022-08-04 16:24:17'),
(358, '2314', 'You have successfully rating', '2022-08-04 16:24:44'),
(359, '2314', 'You have successfully logged out', '2022-08-04 16:43:50'),
(360, '2314', 'View User ', '2022-08-04 16:44:11'),
(361, '2314', 'You have successfully logged out', '2022-08-06 07:46:42'),
(362, '2314', 'View User ', '2022-08-08 09:14:07'),
(363, '2314', 'View User ', '2022-08-08 09:14:10'),
(364, '2314', 'View User ', '2022-08-08 09:18:57'),
(365, '2314', 'View User ', '2022-08-08 09:19:00'),
(366, '2314', 'You have successfully logged out', '2022-08-08 10:08:13'),
(367, '2314', 'View User ', '2022-08-08 10:12:49'),
(368, '2314', 'View User ', '2022-08-08 10:18:03'),
(369, '2314', 'View User ', '2022-08-08 10:18:06'),
(370, '2314', 'View User ', '2022-08-08 10:19:05'),
(371, '2314', 'View User ', '2022-08-08 10:20:16'),
(372, '2314', 'View User ', '2022-08-08 10:34:52'),
(373, '2314', 'View User ', '2022-08-08 10:34:55'),
(374, '2314', 'View User ', '2022-08-08 10:36:48'),
(375, '2314', 'View User ', '2022-08-08 10:45:15'),
(376, '2314', 'View User ', '2022-08-08 10:53:09'),
(377, '2314', 'View User ', '2022-08-08 11:01:22'),
(378, '2314', 'View User ', '2022-08-08 11:01:25'),
(379, '2314', 'View User ', '2022-08-08 11:01:27'),
(380, '2314', 'View User ', '2022-08-08 11:01:30'),
(381, '2314', 'View User ', '2022-08-08 11:21:06'),
(382, '2314', 'View User ', '2022-08-08 11:21:18'),
(383, '69', 'You have successfully add new ticket', '2022-08-08 11:27:39'),
(384, '69', 'You have successfully add new ticket', '2022-08-08 11:29:25'),
(385, '69', 'You have successfully add new ticket', '2022-08-08 11:29:29'),
(386, '69', 'You have successfully add new ticket', '2022-08-08 11:29:50'),
(387, '2314', 'View User ', '2022-08-08 11:30:14'),
(388, '2314', 'View User ', '2022-08-08 11:30:25'),
(389, '2314', 'View User ', '2022-08-08 13:16:43'),
(390, '2314', 'View User ', '2022-08-08 13:17:02'),
(391, '2314', 'View User ', '2022-08-08 13:17:28'),
(392, '2314', 'View User ', '2022-08-08 13:17:29'),
(393, '2314', 'View User ', '2022-08-08 13:17:29'),
(394, '2314', 'View User ', '2022-08-08 13:17:32'),
(395, '2314', 'View User ', '2022-08-08 13:17:34'),
(396, '2314', 'View User ', '2022-08-08 13:18:29'),
(397, '2314', 'You have successfully rating', '2022-08-08 13:35:05'),
(398, '1295', 'View User ', '2022-08-08 13:40:30'),
(399, '2314', 'You have successfully rating', '2022-08-08 13:47:01'),
(400, '2314', 'You have successfully rating', '2022-08-08 13:47:04'),
(401, '2314', 'You have successfully rating', '2022-08-08 13:47:12'),
(402, '2314', 'View User ', '2022-08-08 13:47:46'),
(403, '2314', 'You have successfully rating', '2022-08-08 13:47:59'),
(404, '2314', 'You have successfully rating', '2022-08-08 13:52:27'),
(405, '2314', 'You have successfully rating', '2022-08-08 13:53:02'),
(406, '2314', 'You have successfully rating', '2022-08-08 13:53:04'),
(407, '2314', 'You have successfully rating', '2022-08-08 13:55:54'),
(408, '2314', 'You have successfully rating', '2022-08-08 13:58:13'),
(409, '2314', 'You have successfully rating', '2022-08-08 13:58:15'),
(410, '2314', 'View User ', '2022-08-08 13:58:33'),
(411, '2314', 'View User ', '2022-08-08 14:05:34'),
(412, '2314', 'View User ', '2022-08-08 14:05:37'),
(413, '2314', 'You have successfully rating', '2022-08-08 14:05:42'),
(414, '2314', 'You have successfully rating', '2022-08-08 14:05:46'),
(415, '2314', 'View User ', '2022-08-08 14:55:46'),
(416, '2314', 'View User ', '2022-08-08 15:42:51'),
(417, '2314', 'You have successfully rating', '2022-08-08 15:43:12'),
(418, '2314', 'View User ', '2022-08-08 15:43:17'),
(419, '2314', 'View User ', '2022-08-08 15:54:45'),
(420, '2314', 'View User ', '2022-12-03 09:35:39'),
(421, '2314', 'You have successfully logged out', '2022-12-03 09:38:02'),
(422, '2314', 'View User ', '2022-12-09 09:58:57'),
(423, '69', 'You have successfully add new ticket', '2022-12-09 15:55:12'),
(424, '2314', 'View User ', '2022-12-16 08:38:41'),
(425, '2314', 'View User ', '2022-12-19 10:40:24'),
(426, '2314', 'View User ', '2022-12-19 10:40:41'),
(427, '2314', 'View User ', '2022-12-19 13:54:14'),
(428, '2314', 'View User ', '2022-12-19 14:06:16'),
(429, '69', 'You have successfully add new ticket', '2022-12-21 14:26:03'),
(430, '69', 'You have successfully add new ticket', '2022-12-21 14:26:35'),
(431, '69', 'You have successfully add new ticket', '2022-12-21 14:27:26'),
(432, '2314', 'View User ', '2022-12-28 15:12:29'),
(433, '69', 'You have successfully add new ticket', '2022-12-28 15:17:53'),
(434, '69', 'You have successfully add new ticket', '2022-12-28 15:18:42'),
(435, '2314', 'View User ', '2022-12-28 15:31:03'),
(436, '2314', 'You have successfully logged out', '2022-12-28 15:41:24'),
(437, '69', 'You have successfully add new ticket', '2022-12-28 15:44:24'),
(438, '2314', 'View User ', '2022-12-28 15:51:55'),
(439, '2314', 'View User ', '2022-12-28 15:54:08'),
(440, '2314', 'View User ', '2022-12-28 15:54:24'),
(441, '2314', 'View User ', '2022-12-28 16:04:58'),
(442, '2314', 'View User ', '2022-12-28 16:05:21'),
(443, '2314', 'View User ', '2022-12-28 16:05:43'),
(444, '2314', 'View User ', '2022-12-28 16:05:50'),
(445, '2314', 'View User ', '2022-12-28 16:06:01'),
(446, '2314', 'View User ', '2022-12-28 16:06:21'),
(447, '2314', 'You have successfully logged out', '2022-12-28 16:06:27'),
(448, '2314', 'View User ', '2022-12-28 16:06:47'),
(449, '2314', 'View User ', '2022-12-28 16:13:16'),
(450, '2314', 'View User ', '2022-12-28 16:14:38'),
(451, '2314', 'View User ', '2022-12-28 16:16:54'),
(452, '2314', 'View User ', '2022-12-28 16:19:00'),
(453, '2314', 'View User ', '2022-12-28 16:19:21'),
(454, '2314', 'View User ', '2022-12-28 16:20:20'),
(455, '2314', 'View User ', '2022-12-28 16:27:03'),
(456, '2314', 'View User ', '2022-12-28 16:27:57'),
(457, '2314', 'You have successfully logged out', '2022-12-28 16:30:01'),
(458, '2314', 'View User ', '2022-12-28 16:32:17'),
(459, '2314', 'You have successfully logged out', '2022-12-29 08:19:34'),
(460, '69', 'You have successfully add new ticket', '2022-12-29 08:21:04'),
(461, '69', 'You have successfully add new ticket', '2022-12-29 08:21:44'),
(462, '2314', 'You have successfully logged out', '2022-12-29 08:39:03'),
(463, '69', 'You have successfully add new ticket', '2023-01-09 09:25:54'),
(464, '69', 'You have successfully add new ticket', '2023-01-09 10:01:25'),
(465, '2314', 'View User ', '2023-01-09 10:03:12'),
(466, '1295', 'View User ', '2023-01-09 10:17:38'),
(467, '2314', 'View User ', '2023-01-09 10:57:12'),
(468, '69', 'You have successfully add new ticket', '2023-01-09 10:57:58'),
(469, '69', 'You have successfully add new ticket', '2023-01-09 10:58:54'),
(470, '1295', 'You have successfully logged out', '2023-01-09 11:00:04'),
(471, '1295', 'View User ', '2023-01-09 11:00:43'),
(472, '1295', 'You have successfully logged out', '2023-01-09 11:00:50'),
(473, '1295', 'View User ', '2023-01-09 11:01:24'),
(474, '1295', 'Updating the Ticket Incident', '2023-01-09 11:01:57'),
(475, '1295', 'You have successfully updated', '2023-01-09 11:02:37'),
(476, '1295', 'You have successfully updated', '2023-01-09 11:05:43'),
(477, '1295', 'You have successfully updated', '2023-01-09 11:05:48'),
(478, '1295', 'You have successfully updated', '2023-01-09 11:06:04'),
(479, '1295', 'You have successfully updated', '2023-01-09 11:10:00'),
(480, '1295', 'You have successfully updated', '2023-01-09 11:10:12'),
(481, '2314', 'View User ', '2023-01-09 11:24:19'),
(482, '1295', 'Updating the Ticket Incident', '2023-01-09 13:24:15'),
(483, '2314', 'View User ', '2023-01-09 13:45:02'),
(484, '2314', 'View User ', '2023-01-09 13:45:15'),
(485, '2314', 'View User ', '2023-01-09 13:50:50'),
(486, '69', 'You have successfully add new ticket', '2023-01-09 14:36:10'),
(487, '2314', 'View User ', '2023-01-09 14:41:51'),
(488, '1295', 'You have successfully updated', '2023-01-09 15:41:15'),
(489, '2314', 'View User ', '2023-01-09 15:42:26'),
(490, '2314', 'View User ', '2023-01-09 15:43:11'),
(491, '2314', 'View User ', '2023-01-09 15:43:30'),
(492, '1295', 'View User ', '2023-01-09 15:51:28'),
(493, '1295', 'View User ', '2023-01-09 15:51:33'),
(494, '1295', 'Updating the Ticket Incident', '2023-01-09 15:51:50'),
(495, '1295', 'View User ', '2023-01-09 15:57:37'),
(496, '1295', 'Updating the Ticket Incident', '2023-01-09 15:58:15'),
(497, '1295', 'Updating the Ticket Incident', '2023-01-09 15:58:56'),
(498, '1295', 'Updating the Ticket Incident', '2023-01-09 16:01:21'),
(499, '1295', 'View User ', '2023-01-10 08:35:47'),
(500, '1295', 'View User ', '2023-01-10 08:42:04'),
(501, '1295', 'View User ', '2023-01-10 08:48:31'),
(502, '1295', 'View User ', '2023-01-10 08:53:35'),
(503, '1295', 'View User ', '2023-01-10 09:01:22'),
(504, '1295', 'Updating the Ticket Incident', '2023-01-10 09:01:34'),
(505, '1295', 'Updating the Ticket Incident', '2023-01-10 09:01:56'),
(506, '1295', 'Updating the Ticket Incident', '2023-01-10 09:03:01'),
(507, '1295', 'Updating the Ticket Incident', '2023-01-10 09:21:14'),
(508, '1295', 'Updating the Ticket Incident', '2023-01-10 09:23:59'),
(509, '1295', 'Updating the Ticket Incident', '2023-01-10 09:24:04'),
(510, '1295', 'Updating the Ticket Incident', '2023-01-10 09:25:08'),
(511, '1295', 'View User ', '2023-01-10 13:16:59'),
(512, '2314', 'View User ', '2023-01-10 14:58:03'),
(513, '2314', 'View User ', '2023-01-10 15:59:59'),
(514, '517', 'You have successfully logged out', '2023-01-11 14:38:11'),
(515, '517', 'View User ', '2023-01-11 14:41:57'),
(516, '517', 'View User ', '2023-01-11 14:42:11'),
(517, '517', 'View User ', '2023-01-11 14:59:57'),
(518, '2314', 'View User ', '2023-01-11 15:00:37'),
(519, '517', 'View User ', '2023-01-11 15:01:05'),
(520, '517', 'You have successfully logged out', '2023-01-11 15:01:45'),
(521, '517', 'View User ', '2023-01-11 15:01:59'),
(522, '517', 'View User ', '2023-01-11 15:02:35'),
(523, '517', 'View User ', '2023-01-11 15:03:04'),
(524, '517', 'View User ', '2023-01-11 15:03:13'),
(525, '517', 'View User ', '2023-01-11 15:10:01'),
(526, '517', 'View User ', '2023-01-11 15:11:30'),
(527, '517', 'View User ', '2023-01-11 15:11:40'),
(528, '2314', 'View User ', '2023-01-11 15:13:57'),
(529, '2314', 'View User ', '2023-01-11 15:14:52'),
(530, '2314', 'View User ', '2023-01-11 15:15:01'),
(531, '112', 'You have successfully add new ticket', '2023-01-11 15:19:28'),
(532, '2314', 'View User ', '2023-01-11 15:20:49'),
(533, '1295', 'View User ', '2023-01-11 15:26:47'),
(534, '1295', 'Updating the Ticket Incident', '2023-01-11 15:27:03'),
(535, '517', 'View User ', '2023-01-11 15:27:32'),
(536, '2314', 'View User ', '2023-01-11 15:39:54'),
(537, '69', 'You have successfully add new ticket', '2023-01-11 15:40:14'),
(538, '2314', 'View User ', '2023-01-18 09:01:20'),
(539, '2314', 'View User ', '2023-01-18 10:03:12'),
(540, '2314', 'View User ', '2023-01-18 10:31:08'),
(541, '2314', 'You have successfully logged out', '2023-01-18 10:31:12'),
(542, '2314', 'View User ', '2023-01-19 09:58:05'),
(543, '2314', 'View User ', '2023-01-19 14:35:44'),
(544, '2314', 'View User ', '2023-01-20 09:12:11'),
(545, '2314', 'View User ', '2023-01-20 09:48:42'),
(546, '2314', 'You have successfully updated', '2023-01-23 09:58:40'),
(547, '2314', 'You have successfully rating', '2023-01-23 09:58:48'),
(548, '2314', 'You have successfully updated', '2023-01-23 10:35:47'),
(549, '2314', 'You have successfully updated', '2023-01-23 10:58:46'),
(550, '2314', 'You have successfully updated', '2023-01-23 10:59:27'),
(551, '2314', 'You have successfully updated', '2023-01-23 10:59:43'),
(552, '2314', 'You have successfully updated', '2023-01-23 11:00:57'),
(553, '2314', 'You have successfully updated', '2023-01-23 11:12:53'),
(554, '2314', 'You have successfully updated', '2023-01-23 11:13:57'),
(555, '2314', 'You have successfully updated', '2023-01-23 11:14:40'),
(556, '2314', 'You have successfully updated', '2023-01-23 11:22:34'),
(557, '2314', 'View User ', '2023-01-23 11:23:40'),
(558, '2314', 'View User ', '2023-01-23 16:57:49'),
(559, '2314', 'View User ', '2023-01-23 16:58:01'),
(560, '2314', 'You have successfully updated', '2023-01-24 09:49:59'),
(561, '2314', 'You have successfully updated', '2023-01-24 13:13:32'),
(562, '2314', 'You have successfully updated', '2023-01-24 13:14:17'),
(563, '2314', 'You have successfully updated', '2023-01-24 13:19:50'),
(564, '2314', 'You have successfully updated', '2023-01-24 13:24:14'),
(565, '2314', 'You have successfully updated', '2023-01-24 13:27:18'),
(566, '2314', 'You have successfully updated', '2023-01-24 13:27:26'),
(567, '2314', 'You have successfully updated', '2023-01-24 15:45:49'),
(568, '2314', 'You have successfully updated', '2023-01-24 15:57:20'),
(569, '2314', 'You have successfully updated', '2023-01-24 15:58:09'),
(570, '2314', 'You have successfully updated', '2023-01-24 15:58:42'),
(571, '2314', 'You have successfully updated', '2023-01-24 16:00:25'),
(572, '2314', 'You have successfully updated', '2023-01-24 16:01:51'),
(573, '2314', 'You have successfully updated', '2023-01-24 16:05:40'),
(574, '2314', 'You have successfully updated', '2023-01-24 16:07:16'),
(575, '2314', 'You have successfully updated', '2023-01-24 16:07:19'),
(576, '2314', 'You have successfully updated', '2023-01-24 16:15:53'),
(577, '2314', 'You have successfully updated', '2023-01-24 16:16:14'),
(578, '2314', 'You have successfully updated', '2023-01-24 16:18:24'),
(579, '2314', 'You have successfully updated', '2023-01-24 16:23:15'),
(580, '2314', 'You have successfully updated', '2023-01-24 16:23:39'),
(581, '2314', 'You have successfully updated', '2023-01-24 16:29:22'),
(582, '2314', 'You have successfully updated', '2023-01-24 16:51:16'),
(583, '2314', 'You have successfully updated', '2023-01-24 16:51:30'),
(584, '2314', 'You have successfully updated', '2023-01-24 16:52:06'),
(585, '2314', 'You have successfully updated', '2023-01-24 16:57:42'),
(586, '2314', 'You have successfully updated', '2023-01-26 16:44:59'),
(587, '2314', 'You have successfully updated', '2023-01-27 10:36:29'),
(588, '2314', 'You have successfully updated', '2023-01-27 10:41:49'),
(589, '2314', 'You have successfully updated', '2023-01-27 13:18:27'),
(590, '2314', 'You have successfully updated', '2023-01-27 13:18:41'),
(591, '2314', 'You have successfully updated', '2023-01-27 14:42:24'),
(592, '2314', 'You have successfully updated', '2023-01-30 13:16:48'),
(593, '2314', 'You have successfully updated', '2023-01-30 13:18:28'),
(594, '2314', 'You have successfully updated', '2023-01-30 13:19:18'),
(595, '2314', 'View User ', '2023-01-30 14:54:04'),
(596, '2314', 'You have successfully logged out', '2023-01-30 16:01:04'),
(597, '2314', 'View User ', '2023-01-30 16:01:36'),
(598, '2314', 'View User ', '2023-01-30 16:04:18'),
(599, '2314', 'You have successfully updated', '2023-01-30 16:04:37'),
(600, '2314', 'You have successfully logged out', '2023-01-31 09:07:56'),
(601, '2888', 'View User ', '2023-01-31 09:26:40'),
(602, '2888', 'View User ', '2023-01-31 09:28:16'),
(603, '124', 'You have successfully add new ticket', '2023-01-31 09:32:55'),
(604, '2888', 'View User ', '2023-01-31 09:37:15'),
(605, '2888', 'View User ', '2023-01-31 09:37:34'),
(606, '2888', 'View User ', '2023-01-31 09:39:21'),
(607, '2888', 'View User ', '2023-01-31 09:39:24'),
(608, '2888', 'View User ', '2023-01-31 09:41:16'),
(609, '2888', 'View User ', '2023-01-31 09:41:27'),
(610, '2888', 'View User ', '2023-01-31 09:47:01'),
(611, '2888', 'View User ', '2023-01-31 09:55:49'),
(612, '2888', 'You have successfully logged out', '2023-01-31 09:55:54'),
(613, '2314', 'View User ', '2023-01-31 09:56:31'),
(614, '2314', 'View User ', '2023-01-31 09:57:50'),
(615, '2314', 'View User ', '2023-01-31 10:06:05'),
(616, '2314', 'View User ', '2023-01-31 10:06:32'),
(617, '2314', 'View User ', '2023-01-31 10:08:18'),
(618, '2314', 'View User ', '2023-01-31 10:10:20'),
(619, '2314', 'View User ', '2023-01-31 10:41:55'),
(620, '2314', 'You have successfully logged out', '2023-01-31 10:42:00'),
(621, '2314', 'You have successfully logged out', '2023-01-31 10:42:26'),
(622, '2314', 'View User ', '2023-01-31 11:19:20'),
(623, '2888', 'You have successfully logged out', '2023-01-31 14:26:29'),
(624, '2888', 'View User ', '2023-01-31 14:29:21'),
(625, '124', 'You have successfully add new ticket', '2023-01-31 14:32:24'),
(626, '2888', 'You have successfully updated', '2023-01-31 14:32:45'),
(627, '2888', 'Updating the Ticket Incident', '2023-01-31 14:33:15'),
(628, '124', 'You have successfully add new ticket', '2023-01-31 14:49:02'),
(629, '2888', 'You have successfully updated', '2023-01-31 14:49:12'),
(630, '2888', 'View User ', '2023-01-31 14:56:02'),
(631, '2888', 'View User ', '2023-01-31 15:11:20'),
(632, '2888', 'You have successfully logged out', '2023-01-31 15:11:33'),
(633, '2314', 'Updating the Ticket Incident', '2023-01-31 15:26:51'),
(634, '2314', 'Updating the Ticket Incident', '2023-01-31 15:27:20'),
(635, '2314', 'Updating the Ticket Incident', '2023-01-31 15:28:22'),
(636, '2314', 'Updating the Ticket Incident', '2023-01-31 15:29:15'),
(637, '2314', 'Updating the Ticket Incident', '2023-01-31 15:29:51'),
(638, '2314', 'Updating the Ticket Incident', '2023-01-31 15:30:19'),
(639, '2314', 'Updating the Ticket Incident', '2023-01-31 15:30:37'),
(640, '2314', 'Updating the Ticket Incident', '2023-01-31 15:31:16'),
(641, '2314', 'Updating the Ticket Incident', '2023-01-31 15:31:56'),
(642, '2314', 'Updating the Ticket Incident', '2023-01-31 15:32:09'),
(643, '2314', 'Updating the Ticket Incident', '2023-01-31 15:32:19'),
(644, '2314', 'Updating the Ticket Incident', '2023-01-31 15:33:34'),
(645, '2314', 'Updating the Ticket Incident', '2023-01-31 15:34:13'),
(646, '2314', 'Updating the Ticket Incident', '2023-01-31 15:34:22'),
(647, '2314', 'Updating the Ticket Incident', '2023-01-31 15:34:31'),
(648, '2314', 'Updating the Ticket Incident', '2023-01-31 15:35:06'),
(649, '2314', 'Updating the Ticket Incident', '2023-01-31 15:35:15'),
(650, '2314', 'Updating the Ticket Incident', '2023-01-31 15:36:01'),
(651, '2314', 'Updating the Ticket Incident', '2023-01-31 15:36:42'),
(652, '2314', 'Updating the Ticket Incident', '2023-01-31 15:36:48'),
(653, '2314', 'Updating the Ticket Role', '2023-01-31 15:38:25'),
(654, '2314', 'Updating the Ticket Role', '2023-01-31 15:38:51'),
(655, '2314', 'Updating the Ticket Role', '2023-01-31 15:39:45'),
(656, '2314', 'Updating the Ticket Role', '2023-01-31 15:42:27'),
(657, '2314', 'Updating the Ticket Role', '2023-01-31 15:42:44'),
(658, '2314', 'Updating the Ticket Role', '2023-01-31 15:46:57'),
(659, '2314', 'Updating the Ticket Role', '2023-01-31 15:47:05'),
(660, '124', 'You have successfully add new ticket', '2023-02-01 08:45:35'),
(661, '2888', 'View User ', '2023-02-01 08:50:15'),
(662, '2888', 'View User ', '2023-02-01 08:55:01'),
(663, '2888', 'Updating the Ticket Incident', '2023-02-01 08:55:33'),
(664, '2314', 'Updating the Ticket Role', '2023-02-01 13:12:41'),
(665, '2314', 'Updating the Ticket Role', '2023-02-01 13:13:31'),
(666, '2314', 'View User ', '2023-02-01 13:29:54'),
(667, '2314', 'Updating the Ticket Role', '2023-02-01 13:35:34'),
(668, '2314', 'Updating the Ticket Role', '2023-02-01 13:36:00'),
(669, '2314', 'Updating the Ticket Role', '2023-02-01 13:38:05'),
(670, '2314', 'Updating the Ticket Role', '2023-02-01 13:42:57'),
(671, '2314', 'Updating the Ticket Role', '2023-02-01 13:43:05'),
(672, '2314', 'Updating the Ticket Role', '2023-02-01 13:43:54'),
(673, '2314', 'View User ', '2023-02-01 13:46:31'),
(674, '2314', 'View User ', '2023-02-01 13:46:52'),
(675, '2314', 'View User ', '2023-02-01 13:46:57'),
(676, '2314', 'Updating the Ticket Incident', '2023-02-01 14:34:03'),
(677, '2314', 'Updating the Ticket Incident', '2023-02-01 14:34:34'),
(678, '2314', 'Updating the Ticket Role', '2023-02-01 14:51:04'),
(679, '2314', 'Updating the Ticket Role', '2023-02-01 14:56:29'),
(680, '2314', 'Updating the Ticket Role', '2023-02-01 15:01:56'),
(681, '2314', 'Updating the Ticket Role', '2023-02-01 15:11:52'),
(682, '2314', 'Updating the Ticket Role', '2023-02-01 15:12:13'),
(683, '2314', 'Updating the Ticket Role', '2023-02-01 15:12:25'),
(684, '2314', 'Updating the Ticket Role', '2023-02-01 15:13:10'),
(685, '2314', 'Updating the Ticket Role', '2023-02-01 15:14:00'),
(686, '2314', 'Updating the Ticket Role', '2023-02-01 15:14:07'),
(687, '2314', 'Updating the Ticket Role', '2023-02-01 15:14:12'),
(688, '2314', 'Updating the Ticket Role', '2023-02-01 15:14:56'),
(689, '2314', 'Updating the Ticket Role', '2023-02-01 15:15:15'),
(690, '2314', 'View User ', '2023-02-01 15:47:35'),
(691, '2314', 'View User ', '2023-02-02 08:46:42'),
(692, '2314', 'View User ', '2023-02-02 08:58:29'),
(693, '2314', 'Updating the Ticket Role', '2023-02-02 11:09:24'),
(694, '517', 'You have successfully logged out', '2023-02-02 11:10:32'),
(695, '517', 'You have successfully logged out', '2023-02-02 11:10:50'),
(696, '2314', 'Updating the Ticket Role', '2023-02-02 11:11:50'),
(697, '2314', 'Updating the Ticket Role', '2023-02-02 11:11:56'),
(698, '517', 'You have successfully logged out', '2023-02-02 11:12:30'),
(699, '2314', 'View User ', '2023-02-02 13:39:16'),
(700, '2314', 'View User ', '2023-02-06 09:09:43'),
(701, '2314', 'View User ', '2023-02-06 09:10:32'),
(702, '2314', 'View User ', '2023-02-06 09:10:42'),
(703, '2314', 'View User ', '2023-02-06 09:11:02'),
(704, '2314', 'View User ', '2023-02-06 09:50:16'),
(705, '2314', 'You have successfully logged out', '2023-02-06 10:12:52'),
(706, '2314', 'You have successfully logged out', '2023-02-06 11:21:49'),
(707, '2314', 'You have successfully logged out', '2023-02-06 11:27:09'),
(708, '2314', 'You have successfully logged out', '2023-02-06 11:32:42'),
(709, '2314', 'You have successfully logged out', '2023-02-06 11:57:35'),
(710, '2314', 'You have successfully logged out', '2023-02-06 11:58:18'),
(711, '517', 'You have successfully logged out', '2023-02-06 13:07:26'),
(712, '2314', 'You have successfully logged out', '2023-02-06 13:24:25'),
(713, '517', 'You have successfully logged out', '2023-02-06 13:25:34'),
(714, '517', 'View User ', '2023-02-07 09:13:36'),
(715, '2888', 'View User ', '2023-02-09 15:33:28'),
(716, '2314', 'View User ', '2023-02-09 22:34:25'),
(717, '517', 'View User ', '2023-02-11 08:48:29'),
(718, '517', 'View User ', '2023-02-11 08:51:37'),
(719, '2314', 'You have successfully logged out', '2023-02-13 10:01:46'),
(720, '2314', 'You have successfully logged out', '2023-02-13 10:06:24'),
(721, '69', 'You have successfully add new ticket', '2023-02-15 08:33:01'),
(722, '2314', 'You have successfully logged out', '2023-02-16 13:23:06'),
(723, '69', 'You have successfully add new ticket', '2023-02-16 13:38:02'),
(724, '69', 'You have successfully add new ticket', '2023-02-16 14:05:07'),
(725, '69', 'You have successfully add new ticket', '2023-02-16 14:05:25'),
(726, '2314', 'View User ', '2023-02-17 09:17:49'),
(727, '2314', 'You have successfully logged out', '2023-02-17 11:41:12'),
(728, '2314', 'View User ', '2023-02-17 14:56:47'),
(729, '2314', 'View User ', '2023-02-22 08:47:38'),
(730, '2314', 'View User ', '2023-02-22 08:47:54'),
(731, '2314', 'View User ', '2023-02-22 16:08:48'),
(732, '69', 'You have successfully add new ticket', '2023-02-23 10:37:29'),
(733, '2314', 'View User ', '2023-02-23 13:12:36'),
(734, '2314', 'View User ', '2023-02-28 11:00:54'),
(735, '2314', 'View User ', '2023-02-28 11:32:38'),
(736, '2314', 'You have successfully logged out', '2023-02-28 13:22:10'),
(737, '2314', 'View User ', '2023-02-28 13:23:13'),
(738, '2314', 'You have successfully logged out', '2023-03-03 08:59:32'),
(739, '2314', 'View User ', '2023-03-03 09:00:02'),
(740, '2314', 'View User ', '2023-03-04 10:17:05'),
(741, '2314', 'View User ', '2023-03-04 10:35:14'),
(742, '2314', 'View User ', '2023-03-04 10:35:18'),
(743, '2314', 'View User ', '2023-03-04 10:36:16'),
(744, '2314', 'View User ', '2023-03-04 10:37:32'),
(745, '2314', 'View User ', '2023-03-04 10:38:08'),
(746, '2314', 'View User ', '2023-03-04 10:38:22'),
(747, '2314', 'View User ', '2023-03-04 10:38:40'),
(748, '2314', 'View User ', '2023-03-04 10:38:46'),
(749, '2314', 'View User ', '2023-03-04 10:38:55'),
(750, '2314', 'View User ', '2023-03-04 10:39:02'),
(751, '2314', 'View User ', '2023-03-04 11:09:10'),
(752, '2314', 'View User ', '2023-03-04 11:09:16'),
(753, '2314', 'View User ', '2023-03-04 11:09:22'),
(754, '2314', 'View User ', '2023-03-04 15:30:34'),
(755, '2314', 'View User ', '2023-03-06 09:26:44'),
(756, '2314', 'View User ', '2023-03-07 09:09:05'),
(757, '2314', 'View User ', '2023-03-07 09:12:51'),
(758, '2314', 'View User ', '2023-03-07 10:26:14'),
(759, '2314', 'View User ', '2023-03-07 10:26:24'),
(760, '2314', 'View User ', '2023-03-08 09:14:06'),
(761, '16', 'You have successfully add new ticket', '2023-03-14 11:34:55'),
(762, '16', 'You have successfully add new ticket', '2023-03-14 11:36:38'),
(763, '16', 'You have successfully add new ticket', '2023-03-14 13:32:19'),
(764, '2314', 'View User ', '2023-03-14 13:33:04'),
(765, '2314', 'You have successfully logged out', '2023-03-16 13:33:31'),
(766, '2314', 'You have successfully logged out', '2023-03-16 13:40:56'),
(767, '2314', 'You have successfully logged out', '2023-03-16 15:23:14'),
(768, '', 'You have successfully logged out', '2023-03-16 15:23:19'),
(769, '69', 'You have successfully add new ticket', '2023-03-16 15:56:52'),
(770, '69', 'You have successfully add new ticket', '2023-03-16 16:39:43'),
(771, '69', 'You have successfully add new ticket', '2023-03-16 16:46:11'),
(772, '69', 'You have successfully add new ticket', '2023-03-16 16:57:34'),
(773, '69', 'You have successfully add new ticket', '2023-03-17 08:16:32'),
(774, '69', 'You have successfully add new ticket', '2023-03-17 08:33:05'),
(775, '69', 'You have successfully add new ticket', '2023-03-17 08:59:41'),
(776, '69', 'You have successfully add new ticket', '2023-03-17 09:03:14'),
(777, '69', 'You have successfully add new ticket', '2023-03-17 09:19:18'),
(778, '69', 'You have successfully add new ticket', '2023-03-17 09:22:28'),
(779, '69', 'You have successfully add new ticket', '2023-03-17 09:44:47'),
(780, '69', 'You have successfully add new ticket', '2023-03-17 09:45:10'),
(781, '69', 'You have successfully add new ticket', '2023-03-17 09:46:48'),
(782, '69', 'You have successfully add new ticket', '2023-03-17 09:47:59'),
(783, '69', 'You have successfully add new ticket', '2023-03-17 09:48:18'),
(784, '69', 'You have successfully add new ticket', '2023-03-17 09:56:41'),
(785, '69', 'You have successfully add new ticket', '2023-03-17 10:03:24'),
(786, '69', 'You have successfully add new ticket', '2023-03-17 10:04:17'),
(787, '69', 'You have successfully add new ticket', '2023-03-17 10:04:58'),
(788, '69', 'You have successfully add new ticket', '2023-03-17 10:07:22'),
(789, '69', 'You have successfully add new ticket', '2023-03-17 10:07:53'),
(790, '69', 'You have successfully add new ticket', '2023-03-17 10:08:31'),
(791, '69', 'You have successfully add new ticket', '2023-03-17 10:11:15'),
(792, '69', 'You have successfully add new ticket', '2023-03-17 10:36:58'),
(793, '69', 'You have successfully add new ticket', '2023-03-17 10:49:06'),
(794, '2314', 'You have successfully updated', '2023-03-17 10:59:29'),
(795, '69', 'You have successfully add new ticket', '2023-03-17 10:59:29'),
(796, '69', 'You have successfully add new ticket', '2023-03-17 11:01:10'),
(797, '69', 'You have successfully add new ticket', '2023-03-17 11:01:52'),
(798, '69', 'You have successfully add new ticket', '2023-03-17 11:03:28'),
(799, '69', 'You have successfully add new ticket', '2023-03-17 11:10:38'),
(800, '69', 'You have successfully add new ticket', '2023-03-17 11:11:00'),
(801, '69', 'You have successfully add new ticket', '2023-03-17 11:43:08'),
(802, '69', 'You have successfully add new ticket', '2023-03-17 11:44:13'),
(803, '69', 'You have successfully add new ticket', '2023-03-17 11:58:15'),
(804, '69', 'You have successfully add new ticket', '2023-03-17 11:59:06'),
(805, '69', 'You have successfully add new ticket', '2023-03-17 12:05:55'),
(806, '69', 'You have successfully add new ticket', '2023-03-20 09:43:55'),
(807, '69', 'You have successfully add new ticket', '2023-03-24 08:34:31'),
(808, '69', 'You have successfully add new ticket', '2023-03-24 09:29:30'),
(809, '69', 'You have successfully add new ticket', '2023-03-24 09:32:03'),
(810, '69', 'You have successfully add new ticket', '2023-03-24 09:51:41'),
(811, '69', 'You have successfully add new ticket', '2023-03-24 09:52:06'),
(812, '69', 'You have successfully add new ticket', '2023-03-24 09:54:11'),
(813, '69', 'You have successfully add new ticket', '2023-03-24 09:54:37'),
(814, '69', 'You have successfully add new ticket', '2023-03-24 09:54:43'),
(815, '69', 'You have successfully add new ticket', '2023-03-24 10:05:03'),
(816, '69', 'You have successfully add new ticket', '2023-03-24 10:55:35'),
(817, '69', 'You have successfully add new ticket', '2023-03-24 10:58:47'),
(818, '69', 'You have successfully add new ticket', '2023-03-24 11:11:04'),
(819, '69', 'You have successfully add new ticket', '2023-03-24 11:12:18'),
(820, '69', 'You have successfully add new ticket', '2023-03-28 08:20:02'),
(821, '69', 'You have successfully add new ticket', '2023-03-28 08:32:35'),
(822, '69', 'You have successfully add new ticket', '2023-03-28 10:22:20'),
(823, '69', 'You have successfully add new ticket', '2023-03-28 10:22:34'),
(824, '69', 'You have successfully add new ticket', '2023-03-28 10:23:38'),
(825, '69', 'You have successfully add new ticket', '2023-03-28 10:28:41'),
(826, '69', 'You have successfully add new ticket', '2023-03-28 10:34:32'),
(827, '69', 'You have successfully add new ticket', '2023-03-28 10:54:59'),
(828, '69', 'You have successfully add new ticket', '2023-03-28 11:08:36'),
(829, '69', 'You have successfully add new ticket', '2023-03-29 08:42:51'),
(830, '69', 'You have successfully add new ticket', '2023-03-29 08:43:15'),
(831, '69', 'You have successfully add new ticket', '2023-03-29 08:44:04'),
(832, '69', 'You have successfully add new ticket', '2023-03-29 08:57:06'),
(833, '69', 'You have successfully add new ticket', '2023-03-29 08:59:15'),
(834, '69', 'You have successfully add new ticket', '2023-03-29 09:00:59'),
(835, '69', 'You have successfully add new ticket', '2023-03-29 09:01:36'),
(836, '69', 'You have successfully add new ticket', '2023-03-29 09:02:40'),
(837, '69', 'You have successfully add new ticket', '2023-03-29 09:11:43'),
(838, '69', 'You have successfully add new ticket', '2023-03-29 09:16:58'),
(839, '69', 'You have successfully add new ticket', '2023-03-29 10:41:58'),
(840, '69', 'You have successfully add new ticket', '2023-03-29 11:26:13'),
(841, '69', 'You have successfully add new ticket', '2023-03-29 11:39:22'),
(842, '69', 'You have successfully add new ticket', '2023-03-29 11:44:23'),
(843, '69', 'You have successfully add new ticket', '2023-03-30 08:13:17'),
(844, '2314', 'You have successfully logged out', '2023-03-31 08:21:30'),
(845, '2314', 'You have successfully logged out', '2023-03-31 08:59:11'),
(846, '2314', 'You have successfully logged out', '2023-03-31 10:23:29'),
(847, '2314', 'You have successfully logged out', '2023-03-31 15:30:32'),
(848, '2314', 'You have successfully logged out', '2023-04-01 08:14:04'),
(849, '2314', 'Updating the Ticket Incident', '2023-04-11 11:10:16'),
(850, '2314', 'Updating the Ticket Incident', '2023-04-11 13:45:26'),
(851, '2314', 'Updating the Ticket Incident', '2023-04-11 13:46:42'),
(852, '2314', 'Updating the Ticket Incident', '2023-04-11 13:46:59'),
(853, '2314', 'Updating the Ticket Incident', '2023-04-11 13:47:30'),
(854, '2314', 'Updating the Ticket Incident', '2023-04-11 13:47:55'),
(855, '2314', 'Updating the Ticket Incident', '2023-04-11 13:48:09'),
(856, '2314', 'Updating the Ticket Incident', '2023-04-11 13:48:51'),
(857, '2314', 'Updating the Ticket Incident', '2023-04-11 13:49:02'),
(858, '2314', 'Updating the Ticket Incident', '2023-04-11 14:28:20'),
(859, '2314', 'Updating the Ticket Incident', '2023-04-12 08:11:07'),
(860, '2314', 'Updating the Ticket Incident', '2023-04-12 08:11:20'),
(861, '2314', 'Updating the Ticket Incident', '2023-04-12 08:12:17'),
(862, '2314', 'Updating the Ticket Incident', '2023-04-12 08:13:00'),
(863, '2314', 'Updating the Ticket Incident', '2023-04-12 08:13:48'),
(864, '2314', 'Updating the Ticket Incident', '2023-04-12 08:14:32'),
(865, '2314', 'Updating the Ticket Incident', '2023-04-12 11:24:52'),
(866, '2314', 'Updating the Ticket Incident', '2023-04-12 11:25:23'),
(867, '2314', 'Updating the Ticket Incident', '2023-04-12 11:25:39'),
(868, '2314', 'Updating the Ticket Incident', '2023-04-12 11:26:09'),
(869, '2314', 'Updating the Ticket Incident', '2023-04-12 11:28:32'),
(870, '2314', 'Updating the Ticket Incident', '2023-04-12 11:28:45'),
(871, '2314', 'Updating the Ticket Incident', '2023-04-12 11:29:22'),
(872, '', 'You have successfully logged out', '2023-04-12 16:46:09'),
(873, '2314', 'Updating the Ticket Incident', '2023-04-12 16:50:26'),
(874, '2314', 'Updating the Ticket Incident', '2023-04-13 08:44:17'),
(875, '2314', 'Updating the Ticket Incident', '2023-04-13 08:44:49'),
(876, '2314', 'Updating the Ticket Incident', '2023-04-13 13:41:59'),
(877, '2314', 'Updating the Ticket Incident', '2023-04-14 08:21:37'),
(878, '2888', 'You have successfully updated', '2023-04-14 13:57:33'),
(879, '2888', 'You have successfully updated', '2023-04-14 13:58:11'),
(880, '2888', 'You have successfully updated', '2023-04-14 14:02:33'),
(881, '517', 'Updating the Ticket Incident', '2023-04-15 09:58:36'),
(882, '517', 'Updating the Ticket Incident', '2023-04-15 10:00:46'),
(883, '517', 'Updating the Ticket Incident', '2023-04-15 10:01:20'),
(884, '517', 'Updating the Ticket Incident', '2023-04-15 10:01:57'),
(885, '517', 'Updating the Ticket Incident', '2023-04-15 10:02:10'),
(886, '517', 'Updating the Ticket Incident', '2023-04-15 10:03:10'),
(887, '517', 'Updating the Ticket Incident', '2023-04-15 10:15:46'),
(888, '517', 'Updating the Ticket Incident', '2023-04-15 10:28:14'),
(889, '517', 'Updating the Ticket Incident', '2023-04-15 10:28:38'),
(890, '517', 'Updating the Ticket Incident', '2023-04-15 10:28:50'),
(891, '517', 'Updating the Ticket Incident', '2023-04-15 10:36:00'),
(892, '517', 'Updating the Ticket Incident', '2023-04-15 10:51:22'),
(893, '517', 'Updating the Ticket Role', '2023-04-15 10:58:32'),
(894, '2314', 'Updating the Ticket Incident', '2023-04-15 13:18:57'),
(895, '2314', 'Updating the Ticket Incident', '2023-04-15 13:40:02'),
(896, '2314', 'Updating the Ticket Incident', '2023-04-15 13:40:07'),
(897, '2314', 'Updating the Ticket Role', '2023-04-15 14:33:20'),
(898, '2314', 'Updating the Ticket Role', '2023-04-15 14:34:02'),
(899, '2314', 'Updating the Ticket Role', '2023-04-15 14:34:55'),
(900, '2314', 'Updating the Ticket Role', '2023-04-15 14:46:26'),
(901, '2314', 'Updating the Ticket Role', '2023-04-15 15:12:10'),
(902, '2314', 'Updating the Ticket Role', '2023-04-15 15:12:19'),
(903, '2314', 'Updating the Ticket Role', '2023-04-15 15:13:33'),
(904, '2314', 'Updating the Ticket Role', '2023-04-15 15:13:38'),
(905, '2314', 'Updating the Ticket Role', '2023-04-15 15:14:12'),
(906, '2314', 'Updating the Ticket Role', '2023-04-15 15:30:00'),
(907, '2314', 'Updating the Ticket Role', '2023-04-15 15:30:05'),
(908, '2314', 'Updating the Ticket Role', '2023-04-15 15:30:11'),
(909, '2314', 'Updating the Ticket Role', '2023-04-15 15:35:52'),
(910, '2314', 'Updating the Ticket Role', '2023-04-15 15:37:03'),
(911, '2314', 'Updating the Ticket Role', '2023-04-15 15:37:12'),
(912, '517', 'Updating the Ticket Incident', '2023-04-15 16:38:58'),
(913, '517', 'You have successfully updated', '2023-04-15 16:39:26'),
(914, '2314', 'Updating the Ticket Role', '2023-04-17 08:39:33'),
(915, '2314', 'Updating the Ticket Role', '2023-04-17 08:48:36'),
(916, '2314', 'You have successfully updated', '2023-04-17 15:54:58'),
(917, '2314', 'You have successfully updated', '2023-04-17 15:55:47'),
(918, '2314', 'You have successfully rating', '2023-04-17 15:55:50'),
(919, '517', 'You have successfully logged out', '2023-04-18 08:45:43'),
(920, '517', 'You have successfully logged out', '2023-04-18 09:01:09'),
(921, '', 'You have successfully logged out', '2023-04-18 10:03:50'),
(922, '', 'You have successfully logged out', '2023-04-18 11:10:35'),
(923, '517', 'You have successfully logged out', '2023-04-18 11:10:43'),
(924, '517', 'You have successfully logged out', '2023-04-18 11:10:48'),
(925, '2314', 'Updating the Ticket Role', '2023-04-18 11:14:32'),
(926, '517', 'You have successfully logged out', '2023-04-18 14:28:20'),
(927, '3099', 'You have successfully logged out', '2023-04-18 14:30:30'),
(928, '517', 'You have successfully logged out', '2023-04-18 14:32:18'),
(929, '3099', 'Updating the Ticket Incident', '2023-04-18 15:27:33'),
(930, '3099', 'Updating the Ticket Incident', '2023-04-18 15:49:06'),
(931, '3099', 'Updating the Ticket Incident', '2023-04-18 16:09:27'),
(932, '3099', 'Updating the Ticket Incident', '2023-04-18 16:10:32'),
(933, '3099', 'You have successfully logged out', '2023-04-18 16:25:41'),
(934, '517', 'Updating the Ticket Incident', '2023-04-18 16:33:24'),
(935, '517', 'You have successfully updated', '2023-04-18 16:44:55'),
(936, '517', 'You have successfully updated', '2023-04-18 16:45:06'),
(937, '517', 'Updating the Ticket Role', '2023-04-18 16:48:00'),
(938, '517', 'Updating the Ticket Incident', '2023-04-18 16:57:29'),
(939, '517', 'Updating the Ticket Incident', '2023-04-18 17:01:47'),
(940, '2314', 'You have successfully updated', '2023-04-19 09:24:15'),
(941, '2314', 'You have successfully updated', '2023-04-19 09:29:30'),
(942, '2314', 'You have successfully updated', '2023-04-19 10:34:51'),
(943, '2314', 'You have successfully updated', '2023-04-19 13:18:46'),
(944, '517', 'You have successfully logged out', '2023-04-20 08:46:50'),
(945, '517', 'Updating the Ticket Incident', '2023-04-20 09:11:45'),
(946, '517', 'Updating the Ticket Incident', '2023-04-20 09:12:43'),
(947, '517', 'Updating the Ticket Incident', '2023-04-20 09:13:21'),
(948, '517', 'You have successfully updated', '2023-04-20 09:18:49'),
(949, '517', 'You have successfully updated', '2023-04-20 09:19:01'),
(950, '517', 'You have successfully logged out', '2023-04-20 09:20:21'),
(951, '3099', 'Updating the Ticket Incident', '2023-04-20 09:49:17'),
(952, '3099', 'Updating the Ticket Incident', '2023-04-20 09:53:55'),
(953, '3099', 'Updating the Ticket Incident', '2023-04-20 09:54:43'),
(954, '3099', 'You have successfully updated', '2023-04-20 09:57:55'),
(955, '3099', 'Updating the Ticket Incident', '2023-04-20 09:59:54'),
(956, '3099', 'You have successfully updated', '2023-04-20 10:00:19'),
(957, '3099', 'Updating the Ticket Incident', '2023-04-20 10:14:04'),
(958, '3099', 'You have successfully logged out', '2023-04-20 10:21:07'),
(959, '2314', 'Updating the Ticket Role', '2023-04-20 10:23:14'),
(960, '2314', 'You have successfully logged out', '2023-04-20 10:23:21'),
(961, '517', 'Updating the Ticket Incident', '2023-04-20 10:30:23'),
(962, '517', 'Updating the Ticket Incident', '2023-04-20 10:31:28'),
(963, '517', 'Updating the Ticket Incident', '2023-04-20 10:32:57'),
(964, '517', 'Updating the Ticket Incident', '2023-04-20 10:35:30'),
(965, '2314', 'Updating the Ticket Role', '2023-04-20 15:19:53'),
(966, '2314', 'You have successfully updated', '2023-04-22 14:05:01'),
(967, '2314', 'You have successfully updated', '2023-04-22 14:05:01'),
(968, '2314', 'You have successfully updated', '2023-04-22 14:05:06'),
(969, '2314', 'You have successfully updated', '2023-04-22 14:05:06'),
(970, '2314', 'You have successfully updated', '2023-04-22 14:41:24'),
(971, '2314', 'You have successfully updated', '2023-04-24 08:46:36'),
(972, '2314', 'You have successfully updated', '2023-04-24 09:01:20'),
(973, '2314', 'You have successfully updated', '2023-04-24 09:12:12'),
(974, '2314', 'You have successfully updated', '2023-04-24 09:12:23'),
(975, '2314', 'You have successfully updated', '2023-04-24 09:13:11'),
(976, '2314', 'You have successfully logged out', '2023-04-24 09:14:26'),
(977, '2314', 'You have successfully updated', '2023-04-24 09:22:03'),
(978, '2314', 'You have successfully updated', '2023-04-24 09:25:05'),
(979, '2314', 'You have successfully updated', '2023-04-24 09:26:35'),
(980, '2314', 'You have successfully updated', '2023-04-24 09:58:41'),
(981, '2314', 'You have successfully updated', '2023-04-24 10:17:07'),
(982, '2314', 'You have successfully updated', '2023-04-24 10:21:07'),
(983, '2314', 'You have successfully updated', '2023-04-24 13:45:05'),
(984, '2314', 'Updating the Ticket Incident', '2023-04-24 16:00:58'),
(985, '2314', 'Updating the Ticket Incident', '2023-04-24 16:01:06'),
(986, '60512', 'Updating the Ticket Incident', '2023-04-24 16:06:11'),
(987, '60512', 'Updating the Ticket Incident', '2023-04-24 16:34:51'),
(988, '60512', 'Updating the Ticket Incident', '2023-04-24 16:37:09'),
(989, '60512', 'Updating the Ticket Incident', '2023-04-24 16:37:32'),
(990, '2314', 'You have successfully logged out', '2023-04-24 16:38:14'),
(991, '2314', 'You have successfully updated', '2023-04-25 08:12:03'),
(992, '2314', 'You have successfully updated', '2023-04-25 14:18:10'),
(993, '2314', 'You have successfully updated', '2023-04-25 16:38:32'),
(994, '2314', 'You have successfully updated', '2023-04-25 16:38:39'),
(995, '2314', 'You have successfully updated', '2023-04-26 08:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignee`
--

CREATE TABLE `ticket_assignee` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `ticket_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `createAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_assignment`
--

CREATE TABLE `ticket_assignment` (
  `id` int NOT NULL,
  `ticket_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_assign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'employee assign in the ticket',
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
  `ticket_message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_chat`
--

INSERT INTO `ticket_chat` (`id`, `ticket_id`, `ticket_user_id`, `ticket_date_time`, `ticket_message`, `ticket_status`) VALUES
(64, 154, 69, '2022-08-08 13:35:06', '', 1),
(65, 154, 70, '2022-08-08 13:40:43', 'hello masta', 1),
(66, 158, 69, '2022-12-09 15:56:57', 'sample', 1),
(67, 164, 69, '2022-12-28 15:45:10', 'hi', 1),
(68, 156, 69, '2022-12-28 16:28:04', 'hi', 1),
(69, 168, 69, '2023-01-09 10:02:50', 'asa', 1),
(70, 170, 70, '2023-01-09 11:02:47', 'hi', 1),
(71, 170, 70, '2023-01-09 11:05:53', 'hi', 1),
(72, 170, 69, '2023-01-09 11:06:00', 'hello', 1),
(73, 172, 69, '2023-01-11 15:20:58', 'hi', 1),
(74, 172, 112, '2023-01-11 15:21:47', 'Can you help me to my concern please?', 1),
(75, 174, 124, '2023-01-31 09:34:08', 'Hi', 1),
(76, 174, 69, '2023-01-31 10:06:26', 'sample', 1),
(77, 177, 124, '2023-02-01 08:45:56', 'Hi', 1),
(78, 201, 69, '2023-03-17 09:58:17', '', 1),
(79, 316, 69, '2023-04-01 11:30:37', 'testing', 1),
(80, 365, 124, '2023-04-12 16:48:50', 'df', 1),
(81, 365, 69, '2023-04-12 16:49:20', 'test', 1),
(82, 370, 124, '2023-04-14 13:57:38', 'thywrt', 1),
(83, 374, 112, '2023-04-15 16:31:55', 'hi', 1),
(84, 374, 112, '2023-04-15 16:31:59', 'test', 1),
(85, 376, 69, '2023-04-17 15:55:07', 'hi sir', 1),
(86, 379, 228, '2023-04-18 14:36:48', 'ASDFGHJKL;', 1),
(87, 379, 228, '2023-04-18 14:36:50', 'DFGHASDF', 1),
(88, 383, 69, '2023-04-19 13:20:35', 'testing ', 1),
(89, 386, 228, '2023-04-20 10:03:39', 'Hi Support, can you help me ', 1),
(90, 386, 69, '2023-04-20 10:03:55', 'hello po', 1),
(91, 202, 69, '2023-04-20 10:14:56', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_deparment`
--

CREATE TABLE `ticket_deparment` (
  `id` int NOT NULL,
  `ticket_dept_source_id` int DEFAULT NULL,
  `ticket_dept_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_dept_tnd` datetime NOT NULL,
  `ticket_dept_uid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_deparment`
--

INSERT INTO `ticket_deparment` (`id`, `ticket_dept_source_id`, `ticket_dept_name`, `ticket_dept_tnd`, `ticket_dept_uid`) VALUES
(35, 15, 'APP. DEV & DATABASE', '2022-08-04 10:44:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_department_assig`
--

CREATE TABLE `ticket_department_assig` (
  `id` int NOT NULL,
  `ticket_dept_assign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_dept_assign_uid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_files`
--

CREATE TABLE `ticket_files` (
  `id` int NOT NULL,
  `ticket_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_files`
--

INSERT INTO `ticket_files` (`id`, `ticket_number`, `path`, `createAt`) VALUES
(1, '', 'abas.png', '0000-00-00 00:00:00'),
(2, '', 'abas.png', '0000-00-00 00:00:00'),
(3, '', 'ekram.jpg', '0000-00-00 00:00:00'),
(4, '', 'ekram.jpg', '2023-01-24 00:00:00'),
(5, '157', 'abas.png', '2023-01-24 00:00:00'),
(6, '157', 'abas.png', '2023-01-24 00:00:00'),
(7, '157', 'abas.png', '2023-01-24 00:00:00'),
(8, '157', 'abas.png', '2023-01-24 00:00:00'),
(9, '157', 'abas.png', '2023-01-24 00:00:00'),
(10, '157', 'abas.png', '2023-01-24 00:00:00'),
(11, '157', 'ahg.png', '2023-01-24 00:00:00'),
(12, '156', '', '2023-01-24 16:57:42'),
(13, '159', 'Array', '2023-01-26 16:44:59'),
(14, '159', 'Array', '2023-01-27 10:36:29'),
(15, '159', 'Array', '2023-01-27 13:18:41'),
(16, '159', 'Array', '2023-01-27 14:42:24'),
(17, '159', 'Array', '2023-01-30 13:16:48'),
(18, '159', '1675055909.', '2023-01-30 13:18:28'),
(19, '159', '1675055958.png', '2023-01-30 13:19:18'),
(20, '173', '1675065878.png', '2023-01-30 16:04:37'),
(21, '', '1679021970.', '2023-03-17 10:59:29'),
(22, '202', '1681807496.', '2023-04-18 16:44:55'),
(23, '202', '1681807506.', '2023-04-18 16:45:06'),
(24, '377', '1681867455.png', '2023-04-19 09:24:15'),
(25, '377', '1681867771.png', '2023-04-19 09:29:30'),
(26, '382', '1681871692.png', '2023-04-19 10:34:51'),
(27, '383', '1681881526.png', '2023-04-19 13:18:46'),
(28, '386', '1681955875.jpg', '2023-04-20 09:57:55'),
(29, '386', '1681956020.', '2023-04-20 10:00:19'),
(30, '389', '1682145685.jpg', '2023-04-22 14:41:25'),
(31, '389', '1682297196.jpg', '2023-04-24 08:46:36'),
(32, '389', '1682298081.jpg', '2023-04-24 09:01:20'),
(33, '389', '1682299645.', '2023-04-24 09:12:13'),
(34, '389', '1682299656.jpg', '2023-04-24 09:12:24'),
(35, '389', '1682299704.jpg', '2023-04-24 09:13:12'),
(36, '389', '', '2023-04-24 09:22:03'),
(37, '389', '340464928_1294790784440698_3368558519464795281_n.jpg', '2023-04-24 09:25:05'),
(38, '389', '340464928_1294790784440698_3368558519464795281_n.jpg', '2023-04-24 09:26:36'),
(39, '389', 'List_of_Brand_Report (46).csv', '2023-04-24 09:58:41'),
(40, '389', '1682144304 (1).jpg', '2023-04-24 10:17:07'),
(41, '390', '1682298258.jpg', '2023-04-24 10:21:07'),
(42, '390', '1682144304 (1).jpg', '2023-04-24 13:45:05'),
(43, '393', '340464928_1294790784440698_3368558519464795281_n (1).jpg', '2023-04-25 08:12:03'),
(44, '393', '', '2023-04-25 14:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_incident`
--

CREATE TABLE `ticket_incident` (
  `id` int NOT NULL,
  `ticket_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `u_id` int NOT NULL,
  `ticket_caller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_subcategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_config_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_short_discrip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_discription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_filedownload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_contact_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_imapact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_urgent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_priority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_assign_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_assign_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ticket_department_id` int DEFAULT NULL,
  `ticket_timeofdate` datetime NOT NULL,
  `ticket_timeofdate_end` datetime DEFAULT NULL,
  `ticket_sla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_incident`
--

INSERT INTO `ticket_incident` (`id`, `ticket_number`, `u_id`, `ticket_caller`, `ticket_category`, `ticket_subcategory`, `ticket_service`, `ticket_config_item`, `ticket_short_discrip`, `ticket_discription`, `ticket_filedownload`, `ticket_contact_type`, `ticket_status`, `ticket_imapact`, `ticket_urgent`, `ticket_priority`, `ticket_assign_group`, `ticket_assign_to`, `ticket_department_id`, `ticket_timeofdate`, `ticket_timeofdate_end`, `ticket_sla`) VALUES
(174, 'ATK_14220_174', 124, 'ChristilAlmazan', '1', '', '', '', 'Keyboard', 'Not working', '', '', '3', '', '', '', '', '----- NONE DEPARMENT -----', 1, '2023-01-31 09:32:55', '0000-00-00 00:00:00', NULL),
(175, 'ATK_92449_175', 124, 'ChristilAlmazan', '1', '', '', '', 'Mouse', 'not working', '', '', '1', '', '', '', '', '----- NONE DEPARMENT -----', 1, '2023-01-31 14:32:24', '2023-01-31 14:32:45', NULL),
(183, 'ATK_62489_183', 16, 'ALBERTOFLORES', '', '', '', '', 'sample', 'test', '', '', '3', '', '', '', '', NULL, 2, '2023-03-14 11:34:55', '0000-00-00 00:00:00', NULL),
(184, 'ATK_49477_184', 16, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '3', '', '', '', '', NULL, 1, '2023-03-14 11:36:38', '0000-00-00 00:00:00', NULL),
(185, 'ATK_14864_185', 16, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sample1:32', '', '', '3', '', '', '', '', NULL, 4, '2023-03-14 13:32:19', '0000-00-00 00:00:00', NULL),
(195, 'ATK_29312_195', 69, 'ALBERTOFLORES', '3', 'testing12', 'testing12', 'testing12', 'sa', 'testing', '', 'testing12', '2', 'testing12', 'testing12', 'testing12', '', '69', 15, '2023-03-17 09:22:28', '2023-04-19 08:49:54', NULL),
(197, 'ATK_67337_197', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '1', '', '', '', '', '', 1, '2023-03-17 09:45:10', '2023-04-20 14:28:53', NULL),
(199, 'ATK_87065_199', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', 0, '2023-03-17 09:47:59', '2023-04-20 14:50:29', NULL),
(200, 'ATK_97151_200', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-03-17 09:48:18', '0000-00-00 00:00:00', NULL),
(201, 'ATK_14946_201', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-03-17 09:56:41', '0000-00-00 00:00:00', NULL),
(206, 'ATK_58009_206', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing', '', '', '3', '', '', '', '', '', 42, '2023-03-17 10:07:53', '0000-00-00 00:00:00', NULL),
(207, 'ATK_59634_207', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing', '', '', '3', '', '', '', '', '', 42, '2023-03-17 10:08:31', '0000-00-00 00:00:00', NULL),
(208, 'ATK_13170_208', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'asa', '', '', '3', '', '', '', '', '', 3, '2023-03-17 10:11:15', '0000-00-00 00:00:00', NULL),
(209, 'ATK_12943_209', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', '', 42, '2023-03-17 10:36:58', '0000-00-00 00:00:00', NULL),
(210, 'ATK_16241_210', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '3', '', '', '', '', '', 42, '2023-03-17 10:49:06', '0000-00-00 00:00:00', NULL),
(211, 'ATK_16298_211', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-03-17 10:59:29', '0000-00-00 00:00:00', NULL),
(212, 'ATK_34483_212', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', '', 1, '2023-03-17 11:01:10', '0000-00-00 00:00:00', NULL),
(213, 'ATK_53967_213', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', '', 1, '2023-03-17 11:01:52', '0000-00-00 00:00:00', NULL),
(214, 'ATK_82472_214', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', '', 1, '2023-03-17 11:03:28', '0000-00-00 00:00:00', NULL),
(215, 'ATK_40587_215', 69, 'ALBERTOFLORES', '', '', '', '', 'as', '2', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:10:38', '0000-00-00 00:00:00', NULL),
(216, 'ATK_88297_216', 69, 'ALBERTOFLORES', '', '', '', '', 'as', '2', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:11:00', '0000-00-00 00:00:00', NULL),
(217, 'ATK_42036_217', 69, 'ALBERTOFLORES', '', '', '', '', 'sa1143', '42', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:43:08', '0000-00-00 00:00:00', NULL),
(218, 'ATK_6806_218', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:44:13', '0000-00-00 00:00:00', NULL),
(219, 'ATK_92676_219', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:58:15', '0000-00-00 00:00:00', NULL),
(220, 'ATK_6070_220', 69, 'ALBERTOFLORES', '', '', '', '', 'as', '3', '', '', '3', '', '', '', '', '', 0, '2023-03-17 11:59:06', '0000-00-00 00:00:00', NULL),
(221, 'ATK_45478_221', 69, 'ALBERTOFLORES', '', '', '', '', 'as', '2', '', '', '3', '', '', '', '', '', 0, '2023-03-17 12:05:54', '0000-00-00 00:00:00', NULL),
(222, 'ATK_78240_222', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', '15', '', '', '3', '', '', '', '', '', 0, '2023-03-20 09:43:55', '0000-00-00 00:00:00', NULL),
(223, 'ATK_84723_223', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', '42', '', '', '3', '', '', '', '', '', 0, '2023-03-24 08:34:31', '0000-00-00 00:00:00', NULL),
(224, 'ATK_20668_224', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', '2', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:29:30', '0000-00-00 00:00:00', NULL),
(225, 'ATK_8156_225', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', '15', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:32:03', '0000-00-00 00:00:00', NULL),
(226, 'ATK_56294_226', 69, 'ALBERTOFLORES', '', '', '', '', 'test', '42', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:51:41', '0000-00-00 00:00:00', NULL),
(227, 'ATK_16128_227', 69, 'ALBERTOFLORES', '', '', '', '', 'test', '42', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:52:06', '0000-00-00 00:00:00', NULL),
(228, 'ATK_83317_228', 69, 'ALBERTOFLORES', '', '', '', '', '954', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:54:11', '0000-00-00 00:00:00', NULL),
(229, 'ATK_25843_229', 69, 'ALBERTOFLORES', '', '', '', '', '954', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:54:37', '0000-00-00 00:00:00', NULL),
(230, 'ATK_31924_230', 69, 'ALBERTOFLORES', '', '', '', '', '954', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 09:54:43', '0000-00-00 00:00:00', NULL),
(231, 'ATK_87455_231', 69, 'ALBERTOFLORES', '', '', '', '', '1004', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:05:03', '0000-00-00 00:00:00', NULL),
(232, 'ATK_60983_232', 69, 'ALBERTOFLORES', '', '', '', '', '1008\r\n', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:08:24', '0000-00-00 00:00:00', NULL),
(233, 'ATK_27174_233', 69, 'ALBERTOFLORES', '', '', '', '', '1008\r\n', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:23:22', '0000-00-00 00:00:00', NULL),
(234, 'ATK_22664_234', 69, 'ALBERTOFLORES', '', '', '', '', '1008\r\n1023\r\n', '', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:23:35', '0000-00-00 00:00:00', NULL),
(235, 'ATK_6715_235', 69, 'ALBERTOFLORES', '', '', '', '', '1055', '15', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:55:25', '0000-00-00 00:00:00', NULL),
(236, 'ATK_77847_236', 69, 'ALBERTOFLORES', '', '', '', '', '1055', '15', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:55:35', '0000-00-00 00:00:00', NULL),
(237, 'ATK_17616_237', 69, 'ALBERTOFLORES', '', '', '', '', 'testing 58', '2', '', '', '3', '', '', '', '', '', 0, '2023-03-24 10:58:47', '0000-00-00 00:00:00', NULL),
(238, 'ATK_50529_238', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'test1111\n', '', '', '3', '', '', '', '', NULL, 42, '2023-03-24 11:11:04', '0000-00-00 00:00:00', NULL),
(239, 'ATK_52127_239', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetst12\n', '', '', '3', '', '', '', '', NULL, 42, '2023-03-24 11:12:18', '0000-00-00 00:00:00', NULL),
(240, 'ATK_79729_240', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'testing 819', '', '', '3', '', '', '', '', NULL, 15, '2023-03-28 08:20:02', '0000-00-00 00:00:00', NULL),
(241, 'ATK_58963_241', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'testing', '', '', '3', '', '', '', '', NULL, 2, '2023-03-28 08:32:35', '0000-00-00 00:00:00', NULL),
(242, 'ATK_49641_242', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing 22', '', '', '3', '', '', '', '', NULL, 3, '2023-03-28 10:22:20', '0000-00-00 00:00:00', NULL),
(243, 'ATK_99741_243', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', '1022', '', '', '3', '', '', '', '', NULL, 3, '2023-03-28 10:22:34', '0000-00-00 00:00:00', NULL),
(244, 'ATK_59875_244', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 1023', '', '', '3', '', '', '', '', NULL, 15, '2023-03-28 10:23:38', '0000-00-00 00:00:00', NULL),
(245, 'ATK_72809_245', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 1028', '', '', '3', '', '', '', '', NULL, 15, '2023-03-28 10:28:41', '0000-00-00 00:00:00', NULL),
(246, 'ATK_73582_246', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '3', '', '', '', '', NULL, 15, '2023-03-28 10:34:32', '0000-00-00 00:00:00', NULL),
(247, 'ATK_61682_247', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '3', '', '', '', '', NULL, 15, '2023-03-28 10:54:59', '0000-00-00 00:00:00', NULL),
(248, 'ATK_12758_248', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testkg 1108', '', '', '3', '', '', '', '', NULL, 42, '2023-03-28 11:08:36', '0000-00-00 00:00:00', NULL),
(249, 'ATK_29756_249', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'sa', '', '', '3', '', '', '', '', NULL, 3, '2023-03-29 08:42:51', '0000-00-00 00:00:00', NULL),
(250, 'ATK_49110_250', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 08:43:15', '0000-00-00 00:00:00', NULL),
(251, 'ATK_60048_251', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'sa', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 08:44:04', '0000-00-00 00:00:00', NULL),
(252, 'ATK_38978_252', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 08:57:06', '0000-00-00 00:00:00', NULL),
(253, 'ATK_88106_253', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testin', '', '', '3', '', '', '', '', NULL, 2, '2023-03-29 08:59:15', '0000-00-00 00:00:00', NULL),
(254, 'ATK_94789_254', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:00:59', '0000-00-00 00:00:00', NULL),
(255, 'ATK_59880_255', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:01:36', '0000-00-00 00:00:00', NULL),
(256, 'ATK_85132_256', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:02:40', '0000-00-00 00:00:00', NULL),
(257, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:04:08', '0000-00-00 00:00:00', NULL),
(258, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:09:02', '0000-00-00 00:00:00', NULL),
(259, 'ATK_84797_259', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:11:43', '0000-00-00 00:00:00', NULL),
(260, 'ATK_97321_260', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 09:16:58', '0000-00-00 00:00:00', NULL),
(261, 'ATK_780_261', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', NULL, 42, '2023-03-29 10:41:58', '0000-00-00 00:00:00', NULL),
(262, 'ATK_34247_262', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', NULL, 0, '2023-03-29 11:26:13', '0000-00-00 00:00:00', NULL),
(263, 'ATK_58519_263', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'asa', '', '', '3', '', '', '', '', NULL, 15, '2023-03-29 11:39:22', '0000-00-00 00:00:00', NULL),
(264, 'ATK_51441_264', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'sa', '', '', '3', '', '', '', '', NULL, 42, '2023-03-29 11:44:23', '0000-00-00 00:00:00', NULL),
(265, 'ATK_4045_265', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 42, '2023-03-30 08:13:17', '0000-00-00 00:00:00', NULL),
(266, 'ATK_90190_266', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', '', '', '', '2', '', '', '', '', '', 2, '2023-03-30 10:35:25', '0000-00-00 00:00:00', NULL),
(267, 'ATK_3636_267', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '2', '', '', '', '', '', 15, '2023-03-30 10:36:29', '0000-00-00 00:00:00', NULL),
(268, 'ATK_22775_268', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '2', '', '', '', '', '', 15, '2023-03-30 10:37:08', '0000-00-00 00:00:00', NULL),
(269, 'ATK_61508_269', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '2', '', '', '', '', '', 15, '2023-03-30 13:12:59', '0000-00-00 00:00:00', NULL),
(270, 'ATK_28317_270', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '2', '', '', '', '', '', 15, '2023-03-30 13:13:10', '0000-00-00 00:00:00', NULL),
(271, 'ATK_19904_271', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing114\r\n', '', '', '3', '', '', '', '', '', 2, '2023-03-30 13:14:49', '0000-00-00 00:00:00', NULL),
(272, 'ATK_94335_272', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing118\r\n\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-30 13:18:10', '0000-00-00 00:00:00', NULL),
(273, 'ATK_12487_273', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing118\r\n\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-30 13:18:27', '0000-00-00 00:00:00', NULL),
(274, 'ATK_98552_274', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 118', '', '', '3', '', '', '', '', '', 15, '2023-03-30 13:18:56', '0000-00-00 00:00:00', NULL),
(275, 'ATK_68696_275', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing125pm\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-30 13:25:54', '0000-00-00 00:00:00', NULL),
(276, 'ATK_71687_276', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsting207', '', '', '3', '', '', '', '', '', 15, '2023-03-30 14:07:52', '0000-00-00 00:00:00', NULL),
(277, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsting207', '', '', '3', '', '', '', '', '', 15, '2023-03-30 14:16:08', '0000-00-00 00:00:00', NULL),
(278, 'ATK_89677_278', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'testing', '', '', '3', '', '', '', '', '', 42, '2023-03-30 14:29:46', '0000-00-00 00:00:00', NULL),
(279, 'ATK_9709_279', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-30 15:17:28', '0000-00-00 00:00:00', NULL),
(280, 'ATK_46561_280', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-30 15:54:40', '0000-00-00 00:00:00', NULL),
(281, 'ATK_90353_281', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-03-30 15:55:10', '0000-00-00 00:00:00', NULL),
(282, 'ATK_43201_282', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-03-30 15:55:35', '0000-00-00 00:00:00', NULL),
(283, 'ATK_28545_283', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing', '', '', '3', '', '', '', '', '', 15, '2023-03-30 15:56:20', '0000-00-00 00:00:00', NULL),
(284, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing', '', '', '3', '', '', '', '', '', 15, '2023-03-30 16:02:40', '0000-00-00 00:00:00', NULL),
(285, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing', '', '', '3', '', '', '', '', '', 42, '2023-03-30 16:02:51', '0000-00-00 00:00:00', NULL),
(286, 'ATK_65424_286', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing407', '', '', '3', '', '', '', '', '', 15, '2023-03-30 16:08:01', '0000-00-00 00:00:00', NULL),
(287, 'ATK_34452_287', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'tetsing407', '', '', '3', '', '', '', '', '', 15, '2023-03-30 16:32:42', '0000-00-00 00:00:00', NULL),
(288, 'ATK_45306_288', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-03-31 08:25:00', '0000-00-00 00:00:00', NULL),
(289, 'ATK_79079_289', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-31 09:05:09', '0000-00-00 00:00:00', NULL),
(290, 'ATK_59470_290', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing\r\n', '', '', '3', '', '', '', '', '', 15, '2023-03-31 09:45:33', '0000-00-00 00:00:00', NULL),
(291, 'ATK_28700_291', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing\r\n', '', '', '3', '', '', '', '', '', 15, '2023-04-01 08:23:28', '0000-00-00 00:00:00', NULL),
(292, 'ATK_86825_292', 69, 'ALBERTOFLORES', '', '', '', '', ' Not Found', 'testing\r\n', '', '', '3', '', '', '', '', '', 2, '2023-04-01 09:02:47', '0000-00-00 00:00:00', NULL),
(293, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 42, '2023-04-01 09:23:36', '0000-00-00 00:00:00', NULL),
(294, '69', 0, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 10:46:52', '0000-00-00 00:00:00', NULL),
(295, '69', 0, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing ', '', '', '3', '', '', '', '', '', 3, '2023-04-01 10:46:52', '0000-00-00 00:00:00', NULL),
(296, '69', 0, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing ', '', '', '3', '', '', '', '', '', 3, '2023-04-01 10:47:02', '0000-00-00 00:00:00', NULL),
(297, '69', 0, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 10:47:11', '0000-00-00 00:00:00', NULL),
(298, '69', 0, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing ', '', '', '3', '', '', '', '', '', 5, '2023-04-01 10:47:11', '0000-00-00 00:00:00', NULL),
(299, '', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:02:43', '0000-00-00 00:00:00', NULL),
(300, '', 69, 'ALBERTOFLORES', '', '', '', '', 'test', 'tets', '', '', '3', '', '', '', '', '', 15, '2023-04-01 11:02:44', '0000-00-00 00:00:00', NULL),
(301, '', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:03:42', '0000-00-00 00:00:00', NULL),
(302, '', 69, 'ALBERTOFLORES', '', '', '', '', 'test', 'test', '', '', '3', '', '', '', '', '', 42, '2023-04-01 11:03:42', '0000-00-00 00:00:00', NULL),
(303, '', 69, 'ALBERTOFLORES', '', '', '', '', 'test', 'test', '', '', '3', '', '', '', '', '', 42, '2023-04-01 11:04:02', '0000-00-00 00:00:00', NULL),
(304, '', 69, 'ALBERTOFLORES', '', '', '', '', 'test', 'test', '', '', '3', '', '', '', '', '', 42, '2023-04-01 11:04:21', '0000-00-00 00:00:00', NULL),
(305, '', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:04:35', '0000-00-00 00:00:00', NULL),
(306, '', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-04-01 11:04:36', '0000-00-00 00:00:00', NULL),
(307, 'ATK-0000307', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-04-01 11:13:57', '0000-00-00 00:00:00', NULL),
(308, 'ATK-0000308', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:14:11', '0000-00-00 00:00:00', NULL),
(309, 'ATK-0000309', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 15, '2023-04-01 11:14:11', '0000-00-00 00:00:00', NULL),
(310, 'ATK-0000310', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:15:16', '0000-00-00 00:00:00', NULL),
(311, 'ATK-0000311', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:16:40', '0000-00-00 00:00:00', NULL),
(312, 'ATK-0000312', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-01 11:16:59', '0000-00-00 00:00:00', NULL),
(313, '', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', '', '', '', '3', '', '', '', '', '', 3, '2023-04-01 11:24:23', '0000-00-00 00:00:00', NULL),
(314, 'ATK-0000314', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 15, '2023-04-01 11:25:49', '0000-00-00 00:00:00', NULL),
(315, 'ATK-0000315', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 42, '2023-04-01 11:28:20', '0000-00-00 00:00:00', NULL),
(316, 'ATK-0000316', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-04-01 11:30:20', '0000-00-00 00:00:00', NULL),
(317, 'ATK-0000317', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testin', '', '', '3', '', '', '', '', '', 15, '2023-04-01 13:30:34', '0000-00-00 00:00:00', NULL),
(318, 'ATK-0000318', 69, 'alberto flores.\"', '', '', '', '', 'keyboard', 'test', '', '', '3', '', '', '', '', '', 5, '2023-04-01 13:41:23', '0000-00-00 00:00:00', NULL),
(319, 'ATK-0000318', 69, 'alberto flores', '', '', '', '', 'keyboard', 'test142', '', '', '3', '', '', '', '', '', 15, '2023-04-01 13:42:12', '0000-00-00 00:00:00', NULL),
(320, 'ATK-0000318', 69, 'alberto flores', '', '', '', '', 'keyboard', 'test142', '', '', '3', '', '', '', '', '', 15, '2023-04-01 13:43:17', '0000-00-00 00:00:00', NULL),
(321, 'ATK-0000321', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testin', '', '', '3', '', '', '', '', '', 5, '2023-04-01 13:53:03', '0000-00-00 00:00:00', NULL),
(322, 'ATK-0000001', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 201', '', '', '3', '', '', '', '', '', 15, '2023-04-01 14:09:41', '0000-00-00 00:00:00', NULL),
(323, 'ATK-0000001', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 201', '', '', '3', '', '', '', '', '', 15, '2023-04-01 14:17:16', '0000-00-00 00:00:00', NULL),
(324, 'ATK-0000001', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 201', '', '', '3', '', '', '', '', '', 15, '2023-04-01 14:17:57', '0000-00-00 00:00:00', NULL),
(325, 'ATK-0000001', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing 218', '', '', '3', '', '', '', '', '', 15, '2023-04-01 14:18:50', NULL, NULL),
(326, 'ATK-0000326', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testin230', '', '', '3', '', '', '', '', NULL, 4, '2023-04-01 14:30:58', NULL, NULL),
(327, 'ATK-0000327', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testin257', '', '', '3', '', '', '', '', NULL, 3, '2023-04-01 14:57:31', NULL, NULL),
(328, 'ATK-0000308', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing39', '', '', '3', '', '', '', '', NULL, 15, '2023-04-01 15:24:39', NULL, NULL),
(329, 'ATK-0000329', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-04-01 15:34:05', NULL, NULL),
(330, 'ATK-0000329', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 2, '2023-04-01 15:34:26', NULL, NULL),
(331, 'ATK-0000331', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'testing', '', '', '3', '', '', '', '', '', 15, '2023-04-01 15:42:13', NULL, NULL),
(332, 'ATK-0000332', 69, 'ALBERTOFLORES', '', '', '', '', 'Mouse', 'testing', '', '', '3', '', '', '', '', '', 4, '2023-04-04 08:43:07', NULL, NULL),
(333, 'ATK-0000333', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 11:27:29', NULL, NULL),
(334, 'ATK-0000334', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 11:28:57', NULL, NULL),
(335, 'ATK-0000335', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 11:29:57', NULL, NULL),
(336, 'ATK-0000336', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 4, '2023-04-04 11:50:47', NULL, NULL),
(337, 'ATK-0000337', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 13:07:10', NULL, NULL),
(338, 'ATK-0000338', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 13:10:35', NULL, NULL),
(339, 'ATK-0000339', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 3, '2023-04-04 13:10:59', NULL, NULL),
(340, 'ATK-0000340', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 13:13:49', NULL, NULL),
(341, 'ATK-0000341', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 13:23:52', NULL, NULL),
(342, 'ATK-0000342', 69, 'ALBERTOFLORES', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', 0, '2023-04-04 13:24:03', NULL, NULL),
(343, 'ATK-0000343', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'as', '', '', '3', '', '', '', '', '', 42, '2023-04-04 13:27:00', NULL, NULL),
(344, 'ATK-0000344', 69, 'ALBERTOFLORES', '', '', '', '', 'sa', 'sa', '', '', '3', '', '', '', '', '', 1, '2023-04-04 13:29:18', NULL, NULL),
(345, 'ATK-0000345', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'testing', '', '', '3', '', '', '', '', NULL, 42, '2023-04-05 13:04:17', NULL, NULL),
(346, 'ATK-0000346', 69, 'ALBERT FLORES', '', '', '', '', 'TEST', 'TEST', '', '', '3', '', '', '', '', NULL, 15, '2023-04-05 16:48:33', NULL, NULL),
(347, 'ATK-0000347', 69, 'ALBERTOFLORES', '', '', '', '', 'Test', 'testing', '', '', '3', '', '', '', '', '', 3, '2023-04-11 09:58:17', '0000-00-00 00:00:00', NULL),
(348, 'ATK-0000348', 69, 'ALBERTOFLORES', '', '', '', '', 'Test', 'testing finals', '', '', '3', '', '', '', '', '', 15, '2023-04-11 10:08:39', NULL, NULL),
(349, 'ATK-0000349', 69, 'ALBERTOFLORES', '', '', '', '', 'Test', 'testing finals', '', '', '3', '', '', '', '', '', 15, '2023-04-11 10:09:03', NULL, NULL),
(350, 'ATK-0000350', 69, 'ALBERTOFLORES', '', '', '', '', 'Test', 'testing', '', '', '3', '', '', '', '', '', 15, '2023-04-11 10:48:53', NULL, NULL),
(351, 'ATK-0000351', 69, 'ALBERTOFLORES', '', '', '', '', 'Keyboard', 'test', '', '', '3', '', '', '', '', '', 10, '2023-04-11 11:34:08', NULL, NULL),
(352, 'ATK-0000001', 69, 'ALBERTOFLORES', '', '', '', '', 'Test', 'testing 1144', '', '', '3', '', '', '', '', '', 3, '2023-04-11 11:46:10', NULL, NULL),
(353, '123', 123, 'albert flores	', '', '', '', '', 'test', 'testing', '', '', '3', '', '', '', '', NULL, 14, '2023-04-11 14:52:14', NULL, NULL),
(354, 'ATK-0000354', 0, '', '', '', '', '', '', '', '', '', '3', '', '', '', '', NULL, 0, '2023-04-11 23:21:08', NULL, NULL),
(355, 'ATK-0000355', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-04-11 23:21:50', NULL, NULL),
(356, 'ATK-0000356', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-04-12 08:09:16', NULL, NULL),
(357, 'ATK-0000357', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing', '', '', '3', '', '', '', '', NULL, 15, '2023-04-12 08:11:07', NULL, NULL),
(358, 'ATK-0000358', 69, 'ALBERTOFLORES', '', '', '', '', 'KEYBOARD', 'testing', '', '', '3', '', '', '', '', NULL, 8, '2023-04-12 08:11:20', NULL, NULL),
(359, 'ATK-0000359', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing', '', '', '3', '', '', '', '', NULL, 8, '2023-04-12 08:12:17', NULL, NULL),
(360, 'ATK-0000360', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing 812', '', '', '3', '', '', '', '', NULL, 6, '2023-04-12 08:13:00', NULL, NULL),
(361, 'ATK-0000361', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'sample 8113', '', '', '3', '', '', '', '', NULL, 10, '2023-04-12 08:13:48', NULL, NULL),
(362, 'ATK-0000362', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing finals', '', '', '3', '', '', '', '', NULL, 7, '2023-04-12 08:14:32', NULL, NULL),
(363, 'ATK-0000169', 69, 'ALBERTOFLORES', '', '', '', '', 'Test22', 'testing', '', '', '2', '', '', '', '', '', 3, '2023-04-12 09:40:09', '0000-00-00 00:00:00', NULL),
(364, 'ATK-0000364', 69, 'ALBERTOFLORES', '----- NONE CATEGORY -----', '', '', '', 'testing', 'sample', '', '', '3', '', '', '', '', '69', 15, '2023-04-19 08:42:19', '2023-04-25 10:50:42', NULL),
(365, 'ATK-0000365', 69, 'ALBERTOFLORES', '', '', '', '', 'testing 1124', 'test', '', '', '2', '', '', '', '', '', 42, '2023-04-20 16:36:36', '2023-04-25 10:16:26', NULL),
(366, 'ATK-0000366', 69, 'ALBERTOFLORES', '', '', '', '', 'suggestions_description', 'testing', '', '', '3', '', '', '', '', '', 7, '2023-04-20 16:37:14', NULL, NULL),
(367, 'ATK-0000367', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', 'testing', '', '', '3', '', '', '', '', '', 5, '2023-04-20 16:39:15', NULL, NULL),
(368, 'ATK-0000368', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', 'testing', '', '', '3', '', '', '', '', '', 6, '2023-04-22 08:31:25', NULL, NULL),
(369, 'ATK-0000369', 69, 'ALBERTOFLORES', '', '', '', '', 'testing', 'testing', '', '', '3', '', '', '', '', '', 15, '2023-04-26 09:03:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_items`
--

CREATE TABLE `ticket_items` (
  `id` int NOT NULL,
  `ticket_item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_discription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_items`
--

INSERT INTO `ticket_items` (`id`, `ticket_item_name`, `ticket_discription`, `createdAt`, `updatedAt`) VALUES
(1, 'Keyboard', 'Checking keyboard or 15 mins to change keyboard', '2022-12-13 02:36:45', '2022-12-13 02:36:45');

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

-- --------------------------------------------------------

--
-- Table structure for table `ticket_messegers`
--

CREATE TABLE `ticket_messegers` (
  `id` int NOT NULL,
  `ticket_from_user` int NOT NULL,
  `ticket_to_user` int NOT NULL,
  `ticket_message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_permission`
--

CREATE TABLE `ticket_permission` (
  `id` int NOT NULL,
  `permission_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `permission_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_rating`
--

CREATE TABLE `ticket_rating` (
  `id` int NOT NULL,
  `rating_ticket_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rating_user_rate` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_rating`
--

INSERT INTO `ticket_rating` (`id`, `rating_ticket_id`, `rating_user_rate`) VALUES
(20, '69', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_role`
--

CREATE TABLE `ticket_role` (
  `id` int NOT NULL,
  `role_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_role`
--

INSERT INTO `ticket_role` (`id`, `role_name`, `role_status`) VALUES
(5, 'Super Admin', 1),
(6, 'manager', 2),
(7, 'User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_role_permission`
--

CREATE TABLE `ticket_role_permission` (
  `id` int NOT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `permission_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE `ticket_status` (
  `ticket_status_id` int NOT NULL,
  `ticket_status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL,
  `createdAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`ticket_status_id`, `ticket_status_name`, `status`, `createdAt`) VALUES
(1, 'In Progress', 1, '2023-04-04'),
(2, 'Closed', 1, '2023-04-04'),
(3, 'New', 1, '2023-04-04'),
(7, 'Pending', 1, '2023-04-12');

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

-- --------------------------------------------------------

--
-- Table structure for table `ticket_suggestions`
--

CREATE TABLE `ticket_suggestions` (
  `id` int NOT NULL,
  `suggestions_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `suggestions_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `suggestions_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_suggestions`
--

INSERT INTO `ticket_suggestions` (`id`, `suggestions_name`, `suggestions_description`, `createdAt`, `suggestions_status`) VALUES
(1, '', '', '2022-12-19 08:50:17', ''),
(4, '', '', '0000-00-00 00:00:00', ''),
(5, '', '', '0000-00-00 00:00:00', ''),
(16, 'Online PRF', 'Request to reset dept head', '2023-04-15 09:58:36', '1'),
(17, 'Online PRF', 'Request a new expense category', '2023-04-15 10:00:46', '1'),
(18, 'Online Clearance', 'Request a clearance deletion', '2023-04-15 10:01:20', '1'),
(19, 'LTO Update System', 'Dont know how to re-send the sms to client', '2023-04-15 10:01:57', '1'),
(21, 'Online PRF', 'Change of approver', '2023-04-20 09:11:45', '1'),
(22, 'Online PRF', 'Change of approver', '2023-04-20 09:12:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_treeview_items`
--

CREATE TABLE `ticket_treeview_items` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `u_id` int DEFAULT NULL,
  `ticket_users` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ticket_fn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_ln` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_employee_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_user_department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_deal_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_comp_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ticket_dob` date DEFAULT NULL,
  `ticket_user_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_user_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ticket_createdAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `u_id`, `ticket_users`, `ticket_fn`, `ticket_ln`, `ticket_employee_id`, `ticket_email`, `ticket_password`, `ticket_status`, `ticket_user_department`, `ticket_deal_name`, `ticket_comp_name`, `ticket_position`, `ticket_mobile`, `ticket_dob`, `ticket_user_url`, `ticket_user_role`, `ticket_createdAt`) VALUES
(69, 2314, '', 'ALBERTO', 'FLORES', '60512', 'Aflores@autohubgroup.com', '35757c244bb22c3a9f40435772adcb10', '1', '15', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'WEB DEVELOPER', '09618191459', '0000-00-00', 'ibro.png', '1', '2022-02-01'),
(70, 1295, '', 'CLARENCE', 'ANDAYA', '60418', 'candaya@autohubgroup.com', '098f6bcd4621d373cade4e832627b4f6', '0', '15', '', '', '', '', '0000-00-00', 'ibro.png', '3', '0000-00-00'),
(71, 2233, '', 'Michael', 'Balibrea', '60514', 'mbalibrea@autohubgroup.com', 'efd8b781b9b1046f5ae5918e028bc60d', '0', '15', '', '', '', '', '0000-00-00', 'ibro.png', '1', '0000-00-00'),
(112, 517, '', 'Danica', 'Magtangob', '60410', 'dmagtangob@autohubgroup.com', '1a51cd5cdd173c04dbdaa0c5fc5b168e', '1', '15', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'System Analyst', '09176331398', '0000-00-00', 'ibro.png', '1', '2022-12-02'),
(124, 2888, '', 'Christil', 'Almazan', '3638283', 'almazan@autohub.com', 'cc03e747a6afbbcbf8be7668acfebee5', '1', '0', 'AUTOHUB GROUP INC', 'Autohub Group of Companies Inc.', 'Workshop Supervisor', '09125735445', '0000-00-00', 'ibro.png', '1', '2023-01-31'),
(228, 3099, NULL, 'Liezle', 'Mangada', 'C024', 'lmangada@autohubgroup.com', '70c19f4a097cc8c1e5e37621ab11711c', '1', '15', 'AUTOHUB GROUP INC', 'Autohub Institute of Technology Inc.', 'Project Coordinator', '09558969135', NULL, 'ibro.png', '3', '2023-04-15');

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
-- Indexes for table `ticket_files`
--
ALTER TABLE `ticket_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_incident_idx1` (`ticket_department_id`) INVISIBLE;

--
-- Indexes for table `ticket_items`
--
ALTER TABLE `ticket_items`
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
-- Indexes for table `ticket_suggestions`
--
ALTER TABLE `ticket_suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_treeview_items`
--
ALTER TABLE `ticket_treeview_items`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `ticket_activity_logs`
--
ALTER TABLE `ticket_activity_logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=996;

--
-- AUTO_INCREMENT for table `ticket_assignee`
--
ALTER TABLE `ticket_assignee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_chat`
--
ALTER TABLE `ticket_chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `ticket_deparment`
--
ALTER TABLE `ticket_deparment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `ticket_department_assig`
--
ALTER TABLE `ticket_department_assig`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_files`
--
ALTER TABLE `ticket_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ticket_incident`
--
ALTER TABLE `ticket_incident`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=370;

--
-- AUTO_INCREMENT for table `ticket_items`
--
ALTER TABLE `ticket_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ticket_role`
--
ALTER TABLE `ticket_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ticket_role_permission`
--
ALTER TABLE `ticket_role_permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
  MODIFY `ticket_status_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket_status_level`
--
ALTER TABLE `ticket_status_level`
  MODIFY `status_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_sub_menu`
--
ALTER TABLE `ticket_sub_menu`
  MODIFY `submenu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket_suggestions`
--
ALTER TABLE `ticket_suggestions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ticket_treeview_items`
--
ALTER TABLE `ticket_treeview_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ticket_user`
--
ALTER TABLE `ticket_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

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
