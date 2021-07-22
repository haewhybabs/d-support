-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 08:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d-support`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `task` text NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `username`, `email`, `task`, `date_time`) VALUES
(2, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-01 23:47:25'),
(3, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-02 15:21:08'),
(4, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-02 16:20:11'),
(5, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-07-02 16:48:00'),
(6, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-02 16:50:54'),
(7, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-02 16:53:34'),
(8, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-10 19:59:16'),
(9, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-07-10 19:59:52'),
(10, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-07-10 20:00:06'),
(11, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-07-12 15:47:35'),
(12, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-07-12 15:48:00'),
(13, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-07-12 15:48:17'),
(14, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-11 18:36:15'),
(15, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-18 12:18:18'),
(16, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-18 18:32:40'),
(17, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-18 18:33:58'),
(18, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-19 09:54:16'),
(19, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-19 09:59:42'),
(20, 'KD Balogun', 'phlgmatic123@gmail.com', 'Logged Out', '2019-09-19 12:16:35'),
(21, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-20 10:01:01'),
(22, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-20 10:12:16'),
(23, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-22 09:54:31'),
(24, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-22 09:55:03'),
(25, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-23 07:51:24'),
(26, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-24 14:41:29'),
(27, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-09-24 15:45:52'),
(28, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-09-24 15:46:09'),
(29, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-09-24 15:46:17'),
(30, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-25 12:39:29'),
(31, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-25 12:43:17'),
(32, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-09-25 12:45:45'),
(33, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-09-25 12:45:57'),
(34, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-09-25 12:46:09'),
(35, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-09-25 12:48:26'),
(36, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-25 12:49:09'),
(37, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-25 12:49:46'),
(38, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-09-25 12:52:07'),
(39, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-09-25 12:53:00'),
(40, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-09-25 12:53:06'),
(41, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-10-11 15:38:56'),
(42, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-10-25 09:48:33'),
(43, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-11-07 13:48:59'),
(44, 'haewhydev', 'babalolaisaac@gmail.com', 'Logged Out', '2019-11-07 13:53:13'),
(45, 'AyobamiBabs', 'haewhydev@gmail.com', 'Logged Out', '2019-11-07 13:54:36'),
(46, 'haewhydev', 'babalolaisaac@gmail.com', 'Performed Head Test Diagnosis', '2019-11-11 07:15:06'),
(47, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 07:15:55'),
(48, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 07:16:15'),
(49, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 07:49:06'),
(50, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 08:14:28'),
(51, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 08:25:06'),
(52, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 08:37:26'),
(53, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 08:52:08'),
(54, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 08:53:07'),
(55, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 09:02:51'),
(56, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 09:07:15'),
(57, 'haewhydev', 'babalolaisaac@gmail.com', 'A new test is Performed', '2019-11-11 09:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_exception_requirement`
--

CREATE TABLE `diagnosis_exception_requirement` (
  `id` int(30) NOT NULL,
  `possible_diagnosis_id` int(40) NOT NULL,
  `diagnosis_question_id` int(40) NOT NULL,
  `expected_outcome` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis_exception_requirement`
--

INSERT INTO `diagnosis_exception_requirement` (`id`, `possible_diagnosis_id`, `diagnosis_question_id`, `expected_outcome`) VALUES
(1, 7, 16, 27),
(2, 1, 8, 24),
(3, 3, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_questions`
--

CREATE TABLE `diagnosis_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `label` varchar(30) DEFAULT NULL,
  `allow_option` int(11) NOT NULL DEFAULT 1,
  `createdTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis_questions`
--

INSERT INTO `diagnosis_questions` (`id`, `question`, `label`, `allow_option`, `createdTime`) VALUES
(1, 'Where is your pain worst ?', 'Worst Pain', 1, '2019-09-11 17:18:47'),
(2, 'What Movements make your pain worse', 'Movement pain worse', 1, '2019-09-11 17:22:43'),
(3, 'What movements relieve your pain ?', 'Movement Relieve Pain', 1, '2019-09-11 17:29:56'),
(4, 'How does the pain start?', 'How pain starts', 1, '2019-09-11 17:32:19'),
(5, 'What is the duration of the pain ?', 'Pain duration', 1, '2019-09-11 17:34:51'),
(6, 'Does the pain increase with coughing, freezing, deep breathing or laughing ?', 'How pain Increase', 1, '2019-09-11 17:37:03'),
(7, 'Do you have difficulty in urination ?', 'Urination difficulty', 1, '2019-09-11 17:38:09'),
(8, 'What is your age ?', 'Age', 1, '2019-09-20 09:44:16'),
(9, 'Sex', NULL, 1, '2019-09-20 09:45:20'),
(10, 'Short history of the complaint', NULL, 0, '2019-09-20 09:46:24'),
(11, 'On a scale of of 0-10, 0 being no pain at all and 10 being the worst pain you ever felt, please rate your pain', NULL, 0, '2019-09-20 09:50:30'),
(12, 'For this particular condition, what is the worst pain you have felt?', NULL, 0, '2019-09-20 09:53:23'),
(13, 'For this particular condition, what is the least pain you have felt?', NULL, 0, '2019-09-20 10:44:36'),
(14, 'For this particular condition, what is the average typical pain you feel', NULL, 0, '2019-09-20 10:46:02'),
(15, 'Do you feel any form of muscle weakness', NULL, 0, '2019-09-20 10:53:50'),
(16, 'How can you describe your pain', 'Pain description', 1, '2019-09-20 11:36:38'),
(17, 'On a scale of of 0-5, 0 being no weakness at all and 5 being the worst weakness you ever had, please rate your muscle weakness', NULL, 0, '2019-09-20 11:42:07'),
(18, 'Do you feel numbness in any form? If yes, where ?', NULL, 0, '2019-09-20 11:43:20'),
(19, 'On a scale of of 0-10, 0 being no numbness at all and 10 being the worst numbness you ever felt, please rate your numbness', NULL, 0, '2019-10-11 15:51:25'),
(20, 'Does the pain occasionally move back from the source with movements ? If yes, describe the movement', NULL, 0, '2019-10-11 15:57:18'),
(21, 'Does the pain occasionally move back to the source with movements ? If yes, describe the movements', NULL, 0, '2019-10-11 15:59:43'),
(23, 'Does the pain wake you up at night ?', NULL, 1, '2019-10-11 16:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_question_outcome`
--

CREATE TABLE `diagnosis_question_outcome` (
  `id` int(40) NOT NULL,
  `diagnosis_question_id` int(40) NOT NULL,
  `outcome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis_question_outcome`
--

INSERT INTO `diagnosis_question_outcome` (`id`, `diagnosis_question_id`, `outcome`) VALUES
(1, 1, 'Back-Buttocks'),
(2, 1, 'Leg/Thigh'),
(3, 1, 'Back'),
(4, 2, 'Bending Backwards/Rotating around your belly'),
(5, 2, 'Bending Forward'),
(6, 2, 'Walking/Bending backwards'),
(7, 2, 'Standing'),
(8, 3, 'Bending Forward'),
(9, 3, 'Bending Backwards'),
(10, 3, 'Sitting'),
(11, 4, 'Sudden'),
(12, 4, 'Gradual'),
(13, 4, 'With walking'),
(14, 4, 'Proceeding on a gradual, subtle way'),
(15, 5, 'Days to weeks(sudden)'),
(16, 5, 'Days to months(sudden or slow)'),
(17, 5, 'Weeks to Months'),
(18, 6, 'True'),
(19, 6, 'False'),
(20, 7, 'True'),
(21, 7, 'False'),
(22, 8, '18-40 years'),
(23, 8, '41-60 years'),
(24, 8, '65 and above'),
(25, 9, 'Male'),
(26, 9, 'Female'),
(27, 16, 'constant non-remitting'),
(28, 16, 'dull and deep'),
(29, 16, 'stabbing'),
(30, 16, 'aching'),
(31, 16, 'none of the above'),
(32, 23, 'Yes'),
(33, 23, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_question_result`
--

CREATE TABLE `diagnosis_question_result` (
  `id` int(11) NOT NULL,
  `question_summary_id` int(11) NOT NULL,
  `possible_diagnosis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis_question_result`
--

INSERT INTO `diagnosis_question_result` (`id`, `question_summary_id`, `possible_diagnosis_id`) VALUES
(1, 1, 7),
(2, 1, 3),
(3, 2, 7),
(4, 2, 1),
(5, 3, 7),
(6, 3, 1),
(7, 4, 7),
(8, 4, 1),
(9, 4, 3),
(10, 5, 7),
(11, 5, 1),
(12, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis_requirement`
--

CREATE TABLE `diagnosis_requirement` (
  `id` int(30) NOT NULL,
  `possible_diagnosis_id` int(20) NOT NULL,
  `diagnosis_question_id` int(20) NOT NULL,
  `expected_outcome` int(11) NOT NULL,
  `alternative_id` int(11) DEFAULT NULL,
  `alternative_outcome` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis_requirement`
--

INSERT INTO `diagnosis_requirement` (`id`, `possible_diagnosis_id`, `diagnosis_question_id`, `expected_outcome`, `alternative_id`, `alternative_outcome`) VALUES
(1, 1, 1, 1, NULL, NULL),
(3, 1, 2, 4, 3, 8),
(4, 1, 4, 11, 5, 15),
(5, 2, 1, 1, NULL, NULL),
(6, 2, 2, 5, 3, 9),
(7, 2, 4, 12, 5, 16),
(8, 3, 1, 2, NULL, NULL),
(9, 3, 2, 6, 3, 10),
(10, 3, 4, 13, NULL, NULL),
(11, 4, 1, 2, NULL, NULL),
(12, 4, 2, 5, 3, 9),
(13, 4, 4, 12, 5, 17);

-- --------------------------------------------------------

--
-- Table structure for table `head_test_tbl`
--

CREATE TABLE `head_test_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `head_test_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `head_test_tbl`
--

INSERT INTO `head_test_tbl` (`id`, `head_test_name`, `created_at`, `updated_at`) VALUES
(1, 'SLR', NULL, NULL),
(2, 'Spring Test', NULL, NULL),
(3, 'Femoral Nerve Tension', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2019_05_28_173026_create_users_table', 1),
(16, '2019_06_29_234454_create_head_test_tbl', 1),
(17, '2019_06_29_234521_create_sub_test_tbl', 1),
(18, '2019_06_29_234744_create_test_flow_tbl', 1),
(19, '2019_06_29_234813_create_patient_test_summary', 1),
(20, '2019_06_29_234828_create_patient_test_detail', 1),
(21, '2019_06_30_214634_create_patient_diagnosis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient_diagnosis`
--

CREATE TABLE `patient_diagnosis` (
  `id` int(20) UNSIGNED NOT NULL,
  `pqt_summary_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `appointment_time` datetime DEFAULT NULL,
  `taken_diagnosis_questions` int(11) NOT NULL COMMENT '	1:Yes , 0:NO	',
  `diagnosis_status` int(11) NOT NULL DEFAULT 0 COMMENT '1:Concluded , 2:Initiated, 0:Not Started',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_diagnosis`
--

INSERT INTO `patient_diagnosis` (`id`, `pqt_summary_id`, `user_id`, `appointment_time`, `taken_diagnosis_questions`, `diagnosis_status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, 1, 2, '2019-09-22 21:32:39', NULL),
(2, 2, 4, NULL, 1, 1, '2019-09-25 12:43:01', NULL),
(3, 3, 4, NULL, 1, 1, '2019-09-25 12:51:59', NULL),
(4, 4, 6, NULL, 1, 2, '2019-10-11 16:05:35', NULL),
(5, 5, 4, NULL, 1, 2, '2019-11-07 13:54:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_diagnosis_question_response`
--

CREATE TABLE `patient_diagnosis_question_response` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `response` text DEFAULT NULL,
  `pqt_summary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_diagnosis_question_response`
--

INSERT INTO `patient_diagnosis_question_response` (`id`, `question_id`, `response`, `pqt_summary_id`) VALUES
(1, 10, 'dfads', 1),
(2, 11, 'afdsfa', 1),
(3, 12, 'adsfad', 1),
(4, 13, 'adfad', 1),
(5, 14, 'dfadsf', 1),
(6, 15, 'afsdfa', 1),
(7, 17, 'dsafsd', 1),
(8, 18, 'asdfa', 1),
(9, 10, NULL, 2),
(10, 11, '5', 2),
(11, 12, NULL, 2),
(12, 13, NULL, 2),
(13, 14, NULL, 2),
(14, 15, 'No', 2),
(15, 17, '5', 2),
(16, 18, '3', 2),
(17, 10, NULL, 3),
(18, 11, NULL, 3),
(19, 12, NULL, 3),
(20, 13, NULL, 3),
(21, 14, NULL, 3),
(22, 15, NULL, 3),
(23, 17, NULL, 3),
(24, 18, NULL, 3),
(25, 10, 'vcvgfd', 4),
(26, 11, NULL, 4),
(27, 12, NULL, 4),
(28, 13, NULL, 4),
(29, 14, NULL, 4),
(30, 15, NULL, 4),
(31, 17, NULL, 4),
(32, 18, NULL, 4),
(33, 19, NULL, 4),
(34, 20, NULL, 4),
(35, 21, NULL, 4),
(36, 10, NULL, 5),
(37, 11, NULL, 5),
(38, 12, NULL, 5),
(39, 13, NULL, 5),
(40, 14, NULL, 5),
(41, 15, NULL, 5),
(42, 17, NULL, 5),
(43, 18, NULL, 5),
(44, 19, NULL, 5),
(45, 20, NULL, 5),
(46, 21, NULL, 5),
(47, 10, 'xdfsd', 6),
(48, 11, NULL, 6),
(49, 12, NULL, 6),
(50, 13, NULL, 6),
(51, 14, NULL, 6),
(52, 15, NULL, 6),
(53, 17, NULL, 6),
(54, 18, NULL, 6),
(55, 19, NULL, 6),
(56, 20, NULL, 6),
(57, 21, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `patient_question_test_detail`
--

CREATE TABLE `patient_question_test_detail` (
  `id` int(11) NOT NULL,
  `pqt_summary_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `userOption` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_question_test_detail`
--

INSERT INTO `patient_question_test_detail` (`id`, `pqt_summary_id`, `question_id`, `userOption`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 5),
(3, 1, 3, 8),
(4, 1, 4, 13),
(5, 1, 5, 17),
(6, 1, 6, 19),
(7, 1, 7, 20),
(8, 1, 8, 23),
(9, 1, 9, 25),
(10, 1, 16, 27),
(11, 2, 1, 1),
(12, 2, 2, 5),
(13, 2, 3, 8),
(14, 2, 4, 11),
(15, 2, 5, 16),
(16, 2, 6, 19),
(17, 2, 7, 21),
(18, 2, 8, 24),
(19, 2, 9, 25),
(20, 2, 16, 27),
(21, 3, 1, 1),
(22, 3, 2, 5),
(23, 3, 3, 8),
(24, 3, 4, 11),
(25, 3, 5, 16),
(26, 3, 6, 19),
(27, 3, 7, 21),
(28, 3, 8, 24),
(29, 3, 9, 26),
(30, 3, 16, 27),
(31, 4, 1, 1),
(32, 4, 2, 5),
(33, 4, 3, 8),
(34, 4, 4, 12),
(35, 4, 5, 15),
(36, 4, 6, 18),
(37, 4, 7, 20),
(38, 4, 8, 24),
(39, 4, 9, 25),
(40, 4, 16, 27),
(41, 4, 23, 32),
(42, 5, 1, 1),
(43, 5, 2, 6),
(44, 5, 3, 8),
(45, 5, 4, 13),
(46, 5, 5, 15),
(47, 5, 6, 18),
(48, 5, 7, 20),
(49, 5, 8, 24),
(50, 5, 9, 25),
(51, 5, 16, 27),
(52, 5, 23, 33),
(53, 6, 1, 1),
(54, 6, 2, 5),
(55, 6, 3, 8),
(56, 6, 4, 12),
(57, 6, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `patient_question_test_summary`
--

CREATE TABLE `patient_question_test_summary` (
  `id` int(40) NOT NULL,
  `patient_id` int(40) UNSIGNED NOT NULL,
  `diagnosis_completed` int(10) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_question_test_summary`
--

INSERT INTO `patient_question_test_summary` (`id`, `patient_id`, `diagnosis_completed`, `created_date`) VALUES
(1, 4, 1, '2019-09-22 22:32:38'),
(2, 4, 1, '2019-09-25 13:42:59'),
(3, 4, 1, '2019-09-25 13:51:58'),
(4, 6, 1, '2019-10-11 17:05:34'),
(5, 4, 1, '2019-11-07 14:54:22'),
(6, 4, 1, '2020-02-05 09:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `patient_test_detail`
--

CREATE TABLE `patient_test_detail` (
  `detail_id` int(10) UNSIGNED NOT NULL,
  `summary_id` int(10) UNSIGNED NOT NULL,
  `sub_test_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_test_detail`
--

INSERT INTO `patient_test_detail` (`detail_id`, `summary_id`, `sub_test_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2019-09-24 15:45:51', NULL),
(2, 1, 4, 1, '2019-09-24 15:46:09', NULL),
(3, 1, 5, 0, '2019-09-24 15:46:17', NULL),
(4, 2, 2, 1, '2019-09-25 12:45:45', NULL),
(5, 2, 10, 0, '2019-09-25 12:45:56', NULL),
(6, 2, 14, 1, '2019-09-25 12:46:09', NULL),
(7, 2, 17, 1, '2019-09-25 12:46:17', NULL),
(8, 3, 3, 1, '2019-09-25 12:53:00', NULL),
(9, 3, 18, 1, '2019-09-25 12:53:05', NULL),
(10, 3, 21, 0, '2019-09-25 12:53:16', NULL),
(11, 3, 21, 0, '2019-09-25 12:53:18', NULL),
(12, 4, 1, 1, '2019-11-07 13:48:59', NULL),
(13, 5, 2, 1, '2019-11-11 07:15:04', NULL),
(14, 5, 10, 0, '2019-11-11 07:15:55', NULL),
(15, 5, 14, 0, '2019-11-11 07:16:15', NULL),
(23, 5, 1, 0, '2019-11-11 09:07:15', NULL),
(24, 5, 3, 1, '2019-11-11 09:08:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_test_summary`
--

CREATE TABLE `patient_test_summary` (
  `summary_id` int(10) UNSIGNED NOT NULL,
  `stage` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `therapist_id` int(20) NOT NULL,
  `diagnosis_id` int(20) UNSIGNED NOT NULL,
  `head_test_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_test_summary`
--

INSERT INTO `patient_test_summary` (`summary_id`, `stage`, `user_id`, `therapist_id`, `diagnosis_id`, `head_test_id`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 1, 1, 1, '2019-09-24 15:45:51', NULL),
(2, 4, 4, 1, 2, 2, '2019-09-25 12:45:45', NULL),
(3, 3, 4, 1, 3, 3, '2019-09-25 12:53:00', NULL),
(4, 1, 6, 1, 4, 1, '2019-11-07 13:48:59', NULL),
(5, 1, 4, 1, 5, 2, '2019-11-11 07:15:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `possible_diagnosis`
--

CREATE TABLE `possible_diagnosis` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `possible_diagnosis`
--

INSERT INTO `possible_diagnosis` (`id`, `name`) VALUES
(1, 'Facet Joint Dysfunction'),
(2, 'Lumbar Disc Degeneration'),
(3, 'Cauda Equina Syndrome'),
(4, 'Sciatica'),
(5, 'Spondylolysis/Spondyolythesis'),
(7, 'Cancer'),
(8, 'Bone Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `sub_test_tbl`
--

CREATE TABLE `sub_test_tbl` (
  `sub_test_id` int(10) UNSIGNED NOT NULL,
  `sub_test_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_test_id` int(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_test_tbl`
--

INSERT INTO `sub_test_tbl` (`sub_test_id`, `sub_test_name`, `detail`, `image`, `head_test_id`, `created_at`, `updated_at`) VALUES
(1, 'SLR', '', 'SLR_test.JPG', 1, NULL, NULL),
(2, 'Spring Test', '<p>\r\n\r\n</p><p><b>Test Positioning:</b><br><br></p><blockquote><p></p><ul><li>Subject is prone</li><li>Examiner stands with thumbs or hypothenar eminence over the spinous process of a lumbar vertebrae</li></ul><p></p></blockquote><p><br><b>Action:</b><br><br></p><ul><li>Apply a downward “springing” force through the spinous process of each vertebrae to assess anterior-posterior motion</li></ul><br><b>Positive Finding:</b><br><br><ul><li>Increases or decreases in motion at one vertebrae compared to another (hypermobility or hypomobility)</li></ul><p></p>\r\n\r\n<br><p></p>', 'spring_test.JPG', 2, NULL, NULL),
(3, 'Femoral Nerve Test', '', 'femoral_nerve.JPG', 3, NULL, NULL),
(4, 'Sciatic Nerve Tension Test', '<p>\r\n\r\n<b></b></p><ul><ul><li><p><b></b></p></li></ul></ul>\r\n\r\n<b><ul><ul><li><p>Test position:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Patient supine; examiner’s one hand grasps the heel while other grasps the thigh</p></li></ul></ul></ul><b><ul><ul><li><p>Action:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Hip and knee flexed to 900</p></li><li><p>Knee is then extended as far as possible with the examiner palpating the tibial portion of the sciatic nerve as it passes behind popliteal space</p></li></ul></ul></ul><b><ul><ul><li><p>Positive finding:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Tenderness and reproduction of sciatica symptoms</p></li></ul></ul></ul><b><ul><ul><br><p></p></ul></ul></b><b><ul><ul><p></p></ul></ul></b><p></p>', 'sciatic_nerve_tension_test.JPG', 1, NULL, NULL),
(5, 'Bowstring Test', '<p>\r\n\r\n<b></b></p><ul><ul><li><p><b>Test position:</b></p></li><p></p></ul></ul><ul><ul><ul><li><p>Patient supine</p></li></ul></ul></ul><b><ul><ul><p></p><li><p>Action:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Examiner performs a passive straight leg raise on involved side</p></li><li><p>If subjects reports radiating pain, examiner flexes the subject’s knee to approximately 200 in attempt to reduce pain</p></li><li><p>Pressure is applied to popliteal area to reproduce radicular pain</p></li></ul></ul></ul><b><ul><ul><li><p>Positive finding:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Painful radicular reproduction with popliteal compression</p></li><ul><li><p>Indicates sciatic nerve tension</p></li></ul></ul></ul></ul><b><ul><ul><ul><br><p></p></ul></ul></ul></b><p></p>', '', 1, NULL, NULL),
(6, 'Well SLR Test', '<p>\r\n\r\n<b></b></p><ul><ul><ul><li><p><b>Test Position:</b></p></li><p></p></ul></ul></ul><ul><ul><ul><ul><li><p>Patient supine, examiner standing at unaffected side; one hand grasps under the heel while other is placed on anterior thigh to stabilize the leg in extension</p></li></ul><ul><li><p><b>Action:</b></p></li><ul><li><p>Examiner raises the leg by flexing the hip until discomfort is reported (knee kept in full extension) </p></li></ul><li><p><b>Positive Finding:</b><b></b></p></li><ul><li><p>Pain is experienced on the side opposite that being raised</p></li></ul><p><br></p></ul><p><b></b></p><ul></ul>\r\n\r\n<br><p></p></ul></ul></ul><b><ul><ul><ul><br><p></p></ul></ul></ul></b><p></p>', '', 1, NULL, NULL),
(7, 'Lumbar Disc Degeneration (Final Diagnosis)', '', '', 1, NULL, NULL),
(8, 'Sciatica (Final Diagnosis)', '', '', 1, NULL, NULL),
(9, 'Lumbar Disc Degeneration (Final Diagnosis)', '', '', 1, NULL, NULL),
(10, 'Single Leg Stance Test', '', 'single_leg_stance.JPG', 1, NULL, NULL),
(11, 'Spondylolysis/Spondylolisthesis (Final Diagnosis)', '', '', 1, NULL, NULL),
(12, '...(Spring Test)', '', '', 1, NULL, NULL),
(13, 'Single Leg Stance Test', '', 'single_leg_stance.JPG', 2, NULL, NULL),
(14, 'Quadrant Test', '<p>\r\n\r\n<b></b></p><ul><ul><ul><li><p><b>Test Position:</b></p></li><p></p></ul></ul></ul><ul><ul><ul><ul><li><p>Patient standing with feet shoulder width apart</p></li><li><p>Examiner stands behind the patient, grasping the patient’s shoulders</p></li></ul></ul></ul></ul><b><ul><ul><ul><p></p><li><p>Action:</p></li><p></p></ul></ul></ul></b><ul><ul><ul><ul><li><p>Patient extends the spine as far as possible, than sidebends and rotates to affected side</p></li><li><p>Examiner provides overpressure through the shoulders, supporting the patient as needed</p></li></ul></ul></ul></ul><b><ul><ul><ul><p></p></ul></ul></ul></b>\r\n\r\n<br><p></p>', 'quadrant_test.JPG', 2, NULL, NULL),
(15, 'Spondylolysis/Spondylolisthesis', '<p>\r\n\r\n<b></b></p><ul><ul><li><p><b>Test position:</b></p></li><p></p></ul></ul><ul><ul><ul><li><p>Patient standing with body weight evenly distributed between the 2 feet;  examiner stands behind pt.</p></li></ul></ul></ul><b><ul><ul><li><p>Action:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Patient lifts one leg, then places the trunk in hyperextension; examiner may assist</p></li></ul></ul></ul><b><ul><ul><p></p><li><p>Positive test:</p></li><p></p></ul></ul></b><ul><ul><ul><li><p>Pain in lumbar spine or SI area</p></li></ul></ul></ul><b><ul><ul><p></p></ul></ul></b><p></p>', '', 2, NULL, NULL),
(16, '...SLR', '', '', 2, NULL, NULL),
(17, 'Facet Joint Dysfunction', '', '', 2, NULL, NULL),
(18, 'Milgram Test', '<p>\r\n\r\n<b></b></p><ul><ul><ul><li><p><b>Test Position:</b></p></li><p></p></ul></ul></ul><ul><ul><ul><ul><li><p>Patient supine, examiner at feet of the patient</p></li></ul></ul></ul></ul><b><ul><ul><ul><li><p>Action:</p></li><p></p></ul></ul></ul></b><ul><ul><ul><ul><li><p>Patient performs a bilateral straight leg raise to the height of 2 to 6 inches and is asked to hold the position for 30 seconds</p></li></ul></ul></ul></ul><b><ul><ul><ul><li><p>Positive Finding:</p></li><p></p></ul></ul></ul></b><ul><ul><ul><ul><li><p>Patient unable to hold position, cannot lift the leg, or has pain with test</p></li></ul></ul></ul></ul><b><ul><ul><ul><br><p></p></ul></ul></ul></b><p></p>', '', 3, NULL, NULL),
(19, '...SLR Test', '', '', 3, NULL, NULL),
(20, 'Cauda Equina Syndrome (Final Diagnosis)', '', '', 3, NULL, NULL),
(21, 'Lumbar Disc Degeneration (Final Diagnosis)', '', '', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_flow_tbl`
--

CREATE TABLE `test_flow_tbl` (
  `flow_id` int(10) UNSIGNED NOT NULL,
  `sub_test_id` int(10) UNSIGNED NOT NULL,
  `stage` int(11) NOT NULL,
  `sub_test_depending_id` int(11) UNSIGNED DEFAULT NULL,
  `previous_status` tinyint(2) DEFAULT NULL COMMENT '1:Postive, 0:Negative',
  `final_diagnosis` tinyint(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_flow_tbl`
--

INSERT INTO `test_flow_tbl` (`flow_id`, `sub_test_id`, `stage`, `sub_test_depending_id`, `previous_status`, `final_diagnosis`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, 0, NULL, NULL),
(2, 3, 1, 1, 0, 0, NULL, NULL),
(3, 3, 1, 2, 0, 0, NULL, NULL),
(4, 4, 2, 1, 1, 0, NULL, NULL),
(5, 5, 3, 4, 1, 0, NULL, NULL),
(6, 6, 3, 4, 0, 0, NULL, NULL),
(7, 7, 4, 5, 0, 1, NULL, NULL),
(8, 8, 4, 5, 1, 1, NULL, NULL),
(9, 9, 4, 6, 1, 1, NULL, NULL),
(10, 10, 4, 6, 0, 0, NULL, NULL),
(11, 11, 5, 10, 1, 1, NULL, NULL),
(12, 12, 5, 10, 0, 0, NULL, NULL),
(13, 10, 2, 2, 1, 0, NULL, NULL),
(14, 15, 3, 10, 1, 1, NULL, NULL),
(15, 14, 3, 10, 0, 0, NULL, NULL),
(16, 17, 4, 14, 1, 1, NULL, NULL),
(17, 16, 4, 14, 0, 0, NULL, NULL),
(18, 18, 2, 3, 1, 0, NULL, NULL),
(19, 19, 2, 3, 0, 0, NULL, NULL),
(20, 21, 3, 18, 1, 1, NULL, NULL),
(21, 20, 3, 18, 0, 1, NULL, NULL),
(22, 2, 1, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_ID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_ID`, `created_at`, `updated_at`) VALUES
(1, 'haewhydev', 'babalolaisaac@gmail.com', '$2y$10$wKI4bF1eB9o2j7LjjHxm0.nRf3ett5c/YHJwNB0GyKIxLZr7gbnh6', '1', NULL, '2020-01-26 16:08:38'),
(2, 'Dr Gambo', 'ipgambo@gmail.com', '$2y$10$3LtSOOpek.mJbg8QUYUVheyd/8tSwrZNI7e520PLUiMRtUKt6N./u', '3', NULL, NULL),
(3, 'Dr Mbada', 'doziembada@yahoo.com', '$2y$10$3LtSOOpek.mJbg8QUYUVheyd/8tSwrZNI7e520PLUiMRtUKt6N./u', '3', NULL, NULL),
(4, 'AyobamiBabs', 'haewhydev@gmail.com', '$2y$10$3LtSOOpek.mJbg8QUYUVheyd/8tSwrZNI7e520PLUiMRtUKt6N./u', '3', NULL, NULL),
(5, 'Israel Adetuwo', 'israeladetuwo@yahoo.com', '$2y$10$rBPPq4qZoSRllAXYlTfFt.eDz.rlMkGadd3MPbFznPCSOWlygmMPu', '3', NULL, NULL),
(6, 'JollyBabs', 'jollybabs@gmail.com', '$2y$10$3LtSOOpek.mJbg8QUYUVheyd/8tSwrZNI7e520PLUiMRtUKt6N./u', '2', NULL, NULL),
(7, 'tellback', 'tellback@gmail.com', 'password', '3', NULL, NULL),
(8, 'KD Balogun', 'phlgmatic123@gmail.com', '$2y$10$kI68Xpr18vc1GHdjuIVBeOuWLHA5fe1YQ4U6.MDiXjyx61uOedvRa', '3', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis_exception_requirement`
--
ALTER TABLE `diagnosis_exception_requirement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosis_question_id` (`diagnosis_question_id`),
  ADD KEY `possible_diagnosis_id` (`possible_diagnosis_id`),
  ADD KEY `expected_outcome` (`expected_outcome`);

--
-- Indexes for table `diagnosis_questions`
--
ALTER TABLE `diagnosis_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis_question_outcome`
--
ALTER TABLE `diagnosis_question_outcome`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosis_question_id` (`diagnosis_question_id`);

--
-- Indexes for table `diagnosis_question_result`
--
ALTER TABLE `diagnosis_question_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `possible_diagnosis_id` (`possible_diagnosis_id`),
  ADD KEY `question_summary_id` (`question_summary_id`);

--
-- Indexes for table `diagnosis_requirement`
--
ALTER TABLE `diagnosis_requirement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `possible_diagnosis_id` (`possible_diagnosis_id`),
  ADD KEY `diagnosis_question_id` (`diagnosis_question_id`),
  ADD KEY `expected_outcome` (`expected_outcome`),
  ADD KEY `alternative_id` (`alternative_id`),
  ADD KEY `alternative_outcome` (`alternative_outcome`);

--
-- Indexes for table `head_test_tbl`
--
ALTER TABLE `head_test_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_diagnosis_user_id_foreign` (`user_id`),
  ADD KEY `pqt_summary_id` (`pqt_summary_id`);

--
-- Indexes for table `patient_diagnosis_question_response`
--
ALTER TABLE `patient_diagnosis_question_response`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pqt_summary_id` (`pqt_summary_id`),
  ADD KEY `patient_diagnosis_question_response_ibfk_1` (`question_id`);

--
-- Indexes for table `patient_question_test_detail`
--
ALTER TABLE `patient_question_test_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pqt_summary_id` (`pqt_summary_id`),
  ADD KEY `patient_outcome` (`userOption`),
  ADD KEY `diagnosis_question_id` (`question_id`);

--
-- Indexes for table `patient_question_test_summary`
--
ALTER TABLE `patient_question_test_summary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_test_detail`
--
ALTER TABLE `patient_test_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `patient_test_detail_summary_id_foreign` (`summary_id`),
  ADD KEY `patient_test_detail_sub_test_id_foreign` (`sub_test_id`);

--
-- Indexes for table `patient_test_summary`
--
ALTER TABLE `patient_test_summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `patient_test_summary_user_id_foreign` (`user_id`),
  ADD KEY `patient_test_summary_head_test_id_foreign` (`head_test_id`),
  ADD KEY `diagnosis_id` (`diagnosis_id`);

--
-- Indexes for table `possible_diagnosis`
--
ALTER TABLE `possible_diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_test_tbl`
--
ALTER TABLE `sub_test_tbl`
  ADD PRIMARY KEY (`sub_test_id`),
  ADD KEY `head_test_id` (`head_test_id`);

--
-- Indexes for table `test_flow_tbl`
--
ALTER TABLE `test_flow_tbl`
  ADD PRIMARY KEY (`flow_id`),
  ADD KEY `test_flow_tbl_sub_test_id_foreign` (`sub_test_id`),
  ADD KEY `sub_test_depending_id` (`sub_test_depending_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `diagnosis_exception_requirement`
--
ALTER TABLE `diagnosis_exception_requirement`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `diagnosis_questions`
--
ALTER TABLE `diagnosis_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `diagnosis_question_outcome`
--
ALTER TABLE `diagnosis_question_outcome`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `diagnosis_question_result`
--
ALTER TABLE `diagnosis_question_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diagnosis_requirement`
--
ALTER TABLE `diagnosis_requirement`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `head_test_tbl`
--
ALTER TABLE `head_test_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_diagnosis_question_response`
--
ALTER TABLE `patient_diagnosis_question_response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `patient_question_test_detail`
--
ALTER TABLE `patient_question_test_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `patient_question_test_summary`
--
ALTER TABLE `patient_question_test_summary`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_test_detail`
--
ALTER TABLE `patient_test_detail`
  MODIFY `detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient_test_summary`
--
ALTER TABLE `patient_test_summary`
  MODIFY `summary_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `possible_diagnosis`
--
ALTER TABLE `possible_diagnosis`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_test_tbl`
--
ALTER TABLE `sub_test_tbl`
  MODIFY `sub_test_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `test_flow_tbl`
--
ALTER TABLE `test_flow_tbl`
  MODIFY `flow_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosis_exception_requirement`
--
ALTER TABLE `diagnosis_exception_requirement`
  ADD CONSTRAINT `diagnosis_exception_requirement_ibfk_1` FOREIGN KEY (`diagnosis_question_id`) REFERENCES `diagnosis_questions` (`id`),
  ADD CONSTRAINT `diagnosis_exception_requirement_ibfk_2` FOREIGN KEY (`possible_diagnosis_id`) REFERENCES `possible_diagnosis` (`id`),
  ADD CONSTRAINT `diagnosis_exception_requirement_ibfk_3` FOREIGN KEY (`expected_outcome`) REFERENCES `diagnosis_question_outcome` (`id`);

--
-- Constraints for table `diagnosis_question_outcome`
--
ALTER TABLE `diagnosis_question_outcome`
  ADD CONSTRAINT `diagnosis_question_outcome_ibfk_1` FOREIGN KEY (`diagnosis_question_id`) REFERENCES `diagnosis_questions` (`id`);

--
-- Constraints for table `diagnosis_question_result`
--
ALTER TABLE `diagnosis_question_result`
  ADD CONSTRAINT `diagnosis_question_result_ibfk_1` FOREIGN KEY (`possible_diagnosis_id`) REFERENCES `possible_diagnosis` (`id`),
  ADD CONSTRAINT `diagnosis_question_result_ibfk_2` FOREIGN KEY (`question_summary_id`) REFERENCES `patient_question_test_summary` (`id`);

--
-- Constraints for table `diagnosis_requirement`
--
ALTER TABLE `diagnosis_requirement`
  ADD CONSTRAINT `diagnosis_requirement_ibfk_1` FOREIGN KEY (`possible_diagnosis_id`) REFERENCES `possible_diagnosis` (`id`),
  ADD CONSTRAINT `diagnosis_requirement_ibfk_2` FOREIGN KEY (`diagnosis_question_id`) REFERENCES `diagnosis_questions` (`id`),
  ADD CONSTRAINT `diagnosis_requirement_ibfk_3` FOREIGN KEY (`expected_outcome`) REFERENCES `diagnosis_question_outcome` (`id`),
  ADD CONSTRAINT `diagnosis_requirement_ibfk_4` FOREIGN KEY (`alternative_id`) REFERENCES `diagnosis_questions` (`id`),
  ADD CONSTRAINT `diagnosis_requirement_ibfk_5` FOREIGN KEY (`alternative_outcome`) REFERENCES `diagnosis_question_outcome` (`id`);

--
-- Constraints for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  ADD CONSTRAINT `patient_diagnosis_ibfk_1` FOREIGN KEY (`pqt_summary_id`) REFERENCES `patient_question_test_summary` (`id`),
  ADD CONSTRAINT `patient_diagnosis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `patient_diagnosis_question_response`
--
ALTER TABLE `patient_diagnosis_question_response`
  ADD CONSTRAINT `patient_diagnosis_question_response_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `diagnosis_questions` (`id`),
  ADD CONSTRAINT `patient_diagnosis_question_response_ibfk_2` FOREIGN KEY (`pqt_summary_id`) REFERENCES `patient_question_test_summary` (`id`);

--
-- Constraints for table `patient_question_test_detail`
--
ALTER TABLE `patient_question_test_detail`
  ADD CONSTRAINT `patient_question_test_detail_ibfk_1` FOREIGN KEY (`pqt_summary_id`) REFERENCES `patient_question_test_summary` (`id`),
  ADD CONSTRAINT `patient_question_test_detail_ibfk_2` FOREIGN KEY (`userOption`) REFERENCES `diagnosis_question_outcome` (`id`),
  ADD CONSTRAINT `patient_question_test_detail_ibfk_3` FOREIGN KEY (`question_id`) REFERENCES `diagnosis_questions` (`id`);

--
-- Constraints for table `patient_question_test_summary`
--
ALTER TABLE `patient_question_test_summary`
  ADD CONSTRAINT `patient_question_test_summary_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `patient_test_detail`
--
ALTER TABLE `patient_test_detail`
  ADD CONSTRAINT `patient_test_detail_sub_test_id_foreign` FOREIGN KEY (`sub_test_id`) REFERENCES `sub_test_tbl` (`sub_test_id`),
  ADD CONSTRAINT `patient_test_detail_summary_id_foreign` FOREIGN KEY (`summary_id`) REFERENCES `patient_test_summary` (`summary_id`);

--
-- Constraints for table `patient_test_summary`
--
ALTER TABLE `patient_test_summary`
  ADD CONSTRAINT `diagnosis_id` FOREIGN KEY (`diagnosis_id`) REFERENCES `patient_diagnosis` (`id`),
  ADD CONSTRAINT `patient_test_summary_head_test_id_foreign` FOREIGN KEY (`head_test_id`) REFERENCES `head_test_tbl` (`id`),
  ADD CONSTRAINT `patient_test_summary_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sub_test_tbl`
--
ALTER TABLE `sub_test_tbl`
  ADD CONSTRAINT `head_test_id` FOREIGN KEY (`head_test_id`) REFERENCES `head_test_tbl` (`id`);

--
-- Constraints for table `test_flow_tbl`
--
ALTER TABLE `test_flow_tbl`
  ADD CONSTRAINT `sub_test_depending_id` FOREIGN KEY (`sub_test_depending_id`) REFERENCES `sub_test_tbl` (`sub_test_id`),
  ADD CONSTRAINT `test_flow_tbl_sub_test_id_foreign` FOREIGN KEY (`sub_test_id`) REFERENCES `sub_test_tbl` (`sub_test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
