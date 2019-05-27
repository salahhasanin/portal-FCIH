-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 02:28 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fcih_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonafide_certificate`
--

DROP TABLE IF EXISTS `bonafide_certificate`;
CREATE TABLE IF NOT EXISTS `bonafide_certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `destination` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonafide_certificate`
--

INSERT INTO `bonafide_certificate` (`id`, `name`, `avatar`, `destination`) VALUES
(20161821, 'Abdelrahman mohammed', '1523375228.jpg', 'to it training');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_hour` int(11) DEFAULT NULL,
  `prerequisite_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_code` (`course_code`),
  UNIQUE KEY `course_name` (`course_name`),
  KEY `courses_dept_id_foreign` (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_hour`, `prerequisite_course`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'HU111', 'English-1', 2, 'no', 5, NULL, NULL),
(5, 'HU112', 'English-2', 2, 'English-1', 5, '2018-03-10 20:30:46', '2018-03-10 20:30:46'),
(6, 'HU313', 'Human Rights', 2, 'no', 5, '2018-03-10 20:48:55', '2018-03-10 20:48:55'),
(7, 'HU323', 'Fundamentals of Accounting', 3, 'no', 5, '2018-03-10 20:50:49', '2018-03-10 20:50:49'),
(8, 'HU331', 'Communication & Negotiation Skills', 3, 'no', 5, '2018-03-10 20:51:42', '2018-03-10 20:51:42'),
(9, 'CS111', 'Introduction to cs', 3, 'no', 1, '2018-03-27 12:17:41', '2018-03-27 12:17:41'),
(29, 'CS112', 'programming-1', 3, 'Introduction to cs', 1, '2018-04-10 14:15:49', '2018-04-10 14:15:49'),
(11, 'HU332', 'Creative thinking', 3, 'no', 5, NULL, NULL),
(12, 'HU334', 'Professional ethics', 3, 'no', 5, NULL, NULL),
(13, 'HU121', 'Fundamentals of economics', 3, 'no', 5, NULL, NULL),
(14, 'IT223', 'Internet technology', 3, 'no', 3, NULL, NULL),
(15, 'CS396', 'Selected topics in software engineering', 3, 'no', 1, NULL, NULL),
(16, 'CS498', 'Project', 6, 'no', 1, NULL, NULL),
(17, 'IS211', 'Database systems 1', 3, 'no', 2, NULL, NULL),
(18, 'IS240', 'Operation research', 3, 'no', 2, NULL, NULL),
(19, 'IS312', 'Database systems 2', 3, 'Database systems 1', 2, NULL, NULL),
(20, 'IS321', 'Project management', 3, 'no', 2, NULL, NULL),
(21, 'IS333', 'Management information systems', 3, 'Fundamentals of management', 2, NULL, NULL),
(22, 'IS110', 'Introduction of informatics', 3, 'no', 2, NULL, NULL),
(23, 'HU122', 'Fundamentals of management', 3, 'no', 5, NULL, NULL),
(24, 'IS345', 'Internet application', 3, 'Internet technology', 2, NULL, NULL),
(25, 'IS351', 'Software engineering-1', 3, 'no', 2, NULL, NULL),
(26, 'IS352', 'Software engineering-2', 3, 'Software engineering-1', 2, NULL, NULL),
(27, 'IS434', 'Quality assurance of information systems and programming', 3, 'Software engineering-2', 2, NULL, NULL),
(28, 'IS453', 'Information systems development methodology', 3, 'Software engineering-2', 2, NULL, NULL),
(30, 'CS213', 'programming-2', 3, 'programming-1', 1, '2018-04-10 14:16:29', '2018-04-10 14:16:29'),
(31, 'CS316', 'algorithms', 3, 'programming-1', 1, '2018-04-10 14:17:17', '2018-04-10 14:17:17'),
(32, 'CS241', 'operating systems-1', 3, 'programming-1', 1, '2018-04-10 14:18:17', '2018-04-10 14:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `created_at`, `updated_at`) VALUES
(1, 'cs', NULL, NULL),
(2, 'is', NULL, NULL),
(3, 'it', NULL, NULL),
(4, 'swe', NULL, NULL),
(5, 'hu', NULL, NULL),
(6, 'st', NULL, NULL),
(7, 'ma', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `doc_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`doc_id`),
  UNIQUE KEY `doc_id` (`doc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `full_name`, `birthdate`, `email`, `password`, `address`, `gender`, `phone`, `salary`, `hire_date`, `created_at`, `updated_at`) VALUES
(20181010, 'Abdelrahman mohammed', '2018-02-27', 'abaradah@hotmail.com', '$2y$10$i.y3kyh98BeSu9Ib7i1Kjuu/ubKJmczbTA5xmuyzbuYujnQFvY9QS', 'el gizaaaaa', 'male', 1112481686, 19000, '2018-02-28', '2018-02-27 15:47:34', '2018-02-27 15:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_course`
--

DROP TABLE IF EXISTS `doctor_course`;
CREATE TABLE IF NOT EXISTS `doctor_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `doctor_id` (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_course`
--

INSERT INTO `doctor_course` (`id`, `course_id`, `doctor_id`) VALUES
(7, 1, 20181010),
(9, 5, 20181010);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_rating`
--

DROP TABLE IF EXISTS `doctor_rating`;
CREATE TABLE IF NOT EXISTS `doctor_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_ID` int(11) NOT NULL,
  `student_ID` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doctor_ID` (`doctor_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_rating`
--

INSERT INTO `doctor_rating` (`id`, `doctor_ID`, `student_ID`, `rate`) VALUES
(8, 20181010, 20161821, 3);

-- --------------------------------------------------------

--
-- Table structure for table `exp_course`
--

DROP TABLE IF EXISTS `exp_course`;
CREATE TABLE IF NOT EXISTS `exp_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `id_For_Student` int(11) NOT NULL,
  `expiation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_course`
--

INSERT INTO `exp_course` (`id`, `student_name`, `id_For_Student`, `expiation`) VALUES
(1, 'bogyyyy', 10203040, 'algorithm'),
(2, 'abdelrahman baradah', 20161816, 'data structure'),
(3, 'Student', 20161821, 'English 1'),
(4, 'Student', 20161821, 'English 1'),
(5, 'Student', 20161821, 'English 1'),
(6, 'Student', 20161821, 'English 1'),
(7, 'Student', 20161821, 'English 1'),
(8, 'Student', 20161821, 'English 1'),
(9, 'Student', 20161821, 'English 1');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `inst_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `instructors_inst_id_foreign` (`inst_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`inst_id`, `full_name`, `birthdate`, `email`, `password`, `address`, `gender`, `phone`, `salary`, `hire_date`, `created_at`, `updated_at`) VALUES
(11334233, 'instructor', '2018-03-04', 'inst@yahoo.com', '$2y$10$8JsRaXGsvjDe0EefOMr0x.HMp1wW8htOYrURiJjbcYTb2QF16YZp2', '51 nasr city', 'male', 1112481686, 6000, '2018-03-04', '2018-03-04 21:38:05', '2018-03-04 21:38:05'),
(20151010, 'abdelrahman mohammed', '2018-04-26', 'ashraf@yahoo.com', '$2y$10$puIQfFj7RnIbNwaBZVKOdeFCdZ6Y.JnbI4tgOlg8m/oLHpGuxeixa', 'blah', 'male', 1112481686, 1000, '2018-04-27', '2018-04-12 11:01:35', '2018-04-12 11:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `level_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_no`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2018_02_24_160903_create_doctors_table', 1),
(13, '2018_02_24_160931_create_instructors_table', 1),
(14, '2018_02_24_161004_create_students_table', 1),
(15, '2018_02_24_161024_create_stuffs_table', 1),
(16, '2018_03_07_183258_create_courses_table', 2),
(17, '2018_03_07_184120_create_departments_table', 2),
(18, '2018_03_09_130630_create_levels_table', 3),
(19, '2018_03_09_130852_create_stu_levels_table', 3),
(20, '2018_03_10_232158_create_opened_courses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `new_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_date` date NOT NULL,
  `new_title` varchar(50) NOT NULL,
  `new_content` text NOT NULL,
  `avatar` varchar(255) DEFAULT '	default.jpg',
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_date`, `new_title`, `new_content`, `avatar`) VALUES
(19, '2018-04-16', 'how to make the customer satisfy?', 'To submit for this session please go to the student union', '1523836067.jpg'),
(20, '2018-04-18', 'Technology week!', 'for submission you can go to the student union', '1523836541.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('c5c4fdb6-6d98-4ac6-bb42-b668b5eae682', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('d45860e7-bfb3-4fbb-ae1e-ecedd7495ec1', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('b0d67c9d-49fe-46ab-bf5f-9f5c00d6d19d', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('04baf960-ea05-4ac8-9c94-d1cf223fba57', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-04 07:55:11', '2018-04-02 16:09:11', '2018-04-04 07:55:11'),
('7faf91d9-08f5-4aa9-9f2a-b9e2824b79e1', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('e57b8ee6-5095-415d-928d-271d98dee34f', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('c900616c-8605-463b-90bf-0cd99e8b0ac7', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('75c807eb-d16e-4ffc-9afe-3107eb737d9f', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('80cc018f-31f4-4dc4-90e1-3eed950d3db8', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:09:11', '2018-04-02 16:09:11'),
('f4181814-7d3f-4309-a24e-8d26b3c847e0', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-02 16:09:22', '2018-04-02 16:09:11', '2018-04-02 16:09:22'),
('cecde4af-c9ec-41ee-b04a-e26ccac2cdb3', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('e5c65ee1-ceec-40d0-b798-7af8f3ae80ef', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('eb8db663-a86f-4163-871d-eb4bb6da55d7', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('291fbcf4-1965-44a1-8db5-ed6e993a5958', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-04 07:55:11', '2018-04-02 16:13:22', '2018-04-04 07:55:11'),
('e8d2f85f-1430-46f8-a0b8-c676c9996555', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('c376ecce-8703-4109-9275-ab8bcd771c5a', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('82a73be4-bafa-48bc-9ab9-337a75d11541', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('cf71714a-ecee-4caf-bf31-ca6480edf58d', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('8cd5502e-ed67-48b8-b2aa-a95e458ff73f', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-02 16:13:22', '2018-04-02 16:13:22'),
('a6345134-1162-4299-91b3-bc642b75594c', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello hiiiiiii\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-02 16:13:25', '2018-04-02 16:13:22', '2018-04-02 16:13:25'),
('4d5e7167-20ab-429d-b4bc-9e6b30273d5c', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('02c0425d-2f84-43c2-9955-efa19cccfdaf', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('75f3b730-1e7d-466a-9151-fbf3f04be1f6', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('c803727e-2c4d-406d-957a-aa079bb60612', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-04 07:55:11', '2018-04-04 07:55:00', '2018-04-04 07:55:11'),
('01d7d436-37bb-44ce-a47b-05dd355da458', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('997323c5-8ba3-4c1c-a1ef-c6ec8c7e671f', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('5d742846-bac7-42ea-b362-1e0035a05d4e', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('8129cdd3-3720-4068-910c-e39fd318cbf0', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('6cf5e2e3-654e-46cb-8d16-4934d1efae4a', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-04 07:55:00', '2018-04-04 07:55:00'),
('40633364-0c2a-4ce4-bde9-8c2f1511dd10', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-04 21:09:23', '2018-04-04 07:55:00', '2018-04-04 21:09:23'),
('d7218439-e1ae-493c-adfe-8030d953ae55', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('c940e800-46cc-49d5-ba7f-9a14d0dc45a5', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('4f7cad04-93bb-431b-bc64-78d81d5513da', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('2a4c9d60-4e0a-4dd7-98ca-df56a87b5853', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', '2018-04-04 21:09:10', '2018-04-04 21:08:49', '2018-04-04 21:09:10'),
('e513e0a6-4cbe-4a6e-80f5-8b5837a41ddb', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('f2b01c55-e0fa-4ea5-bd62-4c1b5832d3a9', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('aef78ca2-c157-4581-a3b8-fa68c75eb87d', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('44b40167-fc4d-4176-922a-f667615c6326', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('7f8d4de4-dbb6-45a1-bc10-5dcca68ffd51', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('c35c9a57-f37b-4b6f-8b76-c7dd9e467f14', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', '2018-04-04 21:09:23', '2018-04-04 21:08:49', '2018-04-04 21:09:23'),
('a4561321-ce68-405b-aac1-0ea99ebb0e42', 'App\\Notifications\\RepliedToThread', 20182018, 'App\\User', '{\"message\":\"hello people\",\"course_name\":\"English-1\",\"user\":\"Said abdo\"}', NULL, '2018-04-04 21:08:49', '2018-04-04 21:08:49'),
('94f38e7b-3117-45b3-801f-dbdcc97384e6', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('f7ffc23e-2e27-4713-9923-cdeaf38d40a4', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('22501c69-301b-4e61-b575-fe77faa712e6', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('1b63c7ab-42e7-4d4d-b90d-2166a0de5bee', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('5693783b-b1ff-4192-820a-a7c305ae08e5', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('1d57c85e-b738-42db-91e1-38e2e65b5870', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('91344db1-c4e1-4776-b1fc-c3f484e3819a', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('767c7c56-1c2b-4926-90f8-e28144cf52f4', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('532b870d-9551-44b7-80a3-efc8b725adfc', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('20d89142-2c01-4e16-a116-e8a659a6aa72', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-11 07:08:25', '2018-04-11 06:39:39', '2018-04-11 07:08:25'),
('b4e044c2-2d1f-498b-bff3-4a0bea8e4e25', 'App\\Notifications\\RepliedToThread', 20182018, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('f3a1f407-1845-48e7-bb1a-1d8644a8786b', 'App\\Notifications\\RepliedToThread', 20181818, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('d0490dc1-84c4-4350-a4d7-931c36c32afe', 'App\\Notifications\\RepliedToThread', 20181819, 'App\\User', '{\"message\":\"hello its doctor abdelrahman\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 06:39:39', '2018-04-11 06:39:39'),
('01d94728-eda3-4989-9566-efa7771b4231', 'App\\Notifications\\RepliedToThread', 10102020, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('b8ee16a3-5f2d-4754-b419-fc4d8e8c2a40', 'App\\Notifications\\RepliedToThread', 20181010, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('6b7bb6fc-758b-4304-9f38-b9ac556b3404', 'App\\Notifications\\RepliedToThread', 10203040, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('75e2b583-3adc-4b87-a71d-2437de3b4fba', 'App\\Notifications\\RepliedToThread', 50005000, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('80efe08d-8321-4734-841c-26c30735565b', 'App\\Notifications\\RepliedToThread', 20161820, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('3e6628e4-c1b5-45d1-9182-ea4a66ccb110', 'App\\Notifications\\RepliedToThread', 11334233, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('dcea3e32-2c72-4d3b-a9c0-b0aa8b5dd9c8', 'App\\Notifications\\RepliedToThread', 20161816, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('cdb1823b-20a3-4686-8a54-ab1352666aed', 'App\\Notifications\\RepliedToThread', 10102028, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('dbad8129-82da-4578-a353-9e01a54bbb8e', 'App\\Notifications\\RepliedToThread', 20161833, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('41fa4388-4b8a-4bd2-b4a9-1ba5509c8355', 'App\\Notifications\\RepliedToThread', 20161821, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', '2018-04-11 07:08:25', '2018-04-11 07:08:14', '2018-04-11 07:08:25'),
('a8d42225-8c34-4217-86d3-8e76527f3242', 'App\\Notifications\\RepliedToThread', 20182018, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('ab56a95a-e20a-42f1-92dc-d48e2199d930', 'App\\Notifications\\RepliedToThread', 20181818, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14'),
('d62a1c8d-da9c-407d-bf63-ea6859bdadc1', 'App\\Notifications\\RepliedToThread', 20181819, 'App\\User', '{\"message\":\"hello about the english 1\",\"course_name\":\"English-1\",\"user\":\"Abdelrahman mohammed\"}', NULL, '2018-04-11 07:08:14', '2018-04-11 07:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `opened_courses`
--

DROP TABLE IF EXISTS `opened_courses`;
CREATE TABLE IF NOT EXISTS `opened_courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL,
  `level_no` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `check_register` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_name` (`course_name`),
  KEY `course_id` (`course_name`),
  KEY `doctor_id` (`doc_id`),
  KEY `inst_id` (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opened_courses`
--

INSERT INTO `opened_courses` (`id`, `course_name`, `doc_id`, `inst_id`, `level_no`, `semester`, `check_register`, `created_at`, `updated_at`) VALUES
(124, 'Introduction to cs', 20181010, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(123, 'Communication & Negotiation Skills', 20181010, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(122, 'Fundamentals of Accounting', 20181010, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(121, 'Human Rights', 20181010, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(119, 'English-1', 20181010, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(120, 'English-2', 20181011, 11334233, 1, 1, 1, '2018-04-11 06:53:00', '2018-04-11 06:53:00'),
(125, 'Introduction of informatics', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(126, 'Fundamentals of management', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(127, 'Internet application', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(128, 'Software engineering-1', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(129, 'Software engineering-2', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(130, 'Quality assurance of information systems and programming', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(131, 'Information systems development methodology', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(132, 'programming-2', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(133, 'algorithms', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54'),
(134, 'operating systems-1', 20181010, 20151010, 2, 1, NULL, '2018-04-12 11:29:54', '2018-04-12 11:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `studentgrade`
--

DROP TABLE IF EXISTS `studentgrade`;
CREATE TABLE IF NOT EXISTS `studentgrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Attendance` int(11) DEFAULT NULL,
  `non_Attendance` int(11) DEFAULT NULL,
  `Quize` int(11) DEFAULT NULL,
  `ass` int(11) DEFAULT NULL,
  `medtirm` int(11) DEFAULT NULL,
  `project` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `pro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentgrade`
--

INSERT INTO `studentgrade` (`id`, `stu_id`, `name`, `Attendance`, `non_Attendance`, `Quize`, `ass`, `medtirm`, `project`, `course_id`, `pro`) VALUES
(115, 20161821, 'Student', 5, 4, 5, 5, 10, 8, 5, NULL),
(116, 20161818, 'ahmed', NULL, NULL, NULL, NULL, NULL, 4, 31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `stu_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `GPA` float NOT NULL,
  `Credit_hours` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `transcript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `full_name`, `birthdate`, `email`, `password`, `address`, `gender`, `phone`, `GPA`, `Credit_hours`, `start_date`, `transcript`, `payment`, `created_at`, `updated_at`) VALUES
(20161818, 'ahmed mohammed', '2018-02-13', 'ahmed mohammed', 'student', 'nasr city ', 'male', 1112481686, 3, 89, '2018-02-12', 'no', 1, NULL, NULL),
(20161819, ' mohammed', '2018-02-13', 'ahmed mohammed', 'student', 'nasr city ', 'male', 1112481686, 3, 89, '2018-02-12', 'no', 1, NULL, NULL),
(10203040, 'bogyyyy', '2018-02-14', 'bogy@yahoo.com', '$2y$10$.oEwe1.n8Sh0eHFrM/58ne3Z/6SLv6.enrv1KVV4OAhh9jnphD/MK', 'el gizaaa', 'male', 1154216453, 3.9, 22, '2018-02-15', '1', 1, '2018-02-27 18:54:14', '2018-02-27 18:54:14'),
(20161820, 'mohamed ismael', '2018-02-28', 'm@yahoo.com', '$2y$10$ybOuexojWGUaf6oOwTzuY./uDayP0gISNpxVCSQi6GJhFPUNsY8xO', 'el gizaaaa', 'male', 1112481685, 0, 0, '2018-02-28', 'no', 1, '2018-02-27 20:59:09', '2018-02-27 20:59:09'),
(201111, 'regerg', '2018-02-09', 'regeger', 'regergr', 'ergergeg', 'regeg', 122132312, 0, 0, '2018-02-21', '0', 1, NULL, NULL),
(123454, 'gdrgerge', '2018-02-07', 'adrgdrg', 'drgdrgdrg', 'rdgdrgdrg', 'efwef', 1112481686, 0, 0, '2018-02-28', 'no', 1, NULL, NULL),
(20161816, 'abdelrahman baradah', '2018-03-08', '10102020@yahoo.com', '$2y$10$iU0Wfy6PXD5xDMkZhEVcSurQdKD5b0x9zXZwQgKl5splWsFEAYs/y', '51 nasr city', 'male', 1112481686, 3.9, 72, '2018-03-08', '1', 1, '2018-03-08 12:18:22', '2018-03-08 12:18:22'),
(10102028, 'boguuuu', '2018-04-08', 'asf@yahoo.com', '$2y$10$DqRd8sCR4Bebx1Q/Txo7RONGv0E7hQh/f.Kv7q2CTaKf29RbNN2Km', 'dfgdfg', 'male', 1112481686, 3.9, 21, '2021-03-08', '1', 1, '2018-03-08 12:21:44', '2018-03-08 12:21:44'),
(20161833, 'abdelrahman baradah', '2018-03-09', 'a@yahoo.com', '$2y$10$wdUlVELmMqcuWWc1XFqVlOLiKxnP50lnrimTZ37ramio9Gl1fboLm', '51 nasr city', 'male', 1112481686, 0, 39, '2018-03-09', '0', 1, '2018-03-09 11:29:18', '2018-03-09 11:29:18'),
(20161821, 'Student', '2018-03-28', 'student@yahoo.com', '$2y$10$DsDLLd06Dc2iC/6Wz4U96.cLS90Z6YZ//1/30Mf4k4O6xOo0hFczS', '51 blah', 'male', 1112481686, 0, 0, '2018-03-28', 'no', 1, '2018-03-28 13:49:37', '2018-03-28 13:49:37'),
(20181818, 'Abdel', '2018-04-08', 'ashraf@yahoo.com', '$2y$10$eJcM48ilVnVMJVT7/gyXse0m9xGvDxUgUvEy7zBRM4Vl7MQMBLLY.', 'nasr city', 'male', 1112481686, 0, 0, '2018-04-10', 'no', 0, '2018-04-10 15:32:48', '2018-04-10 15:32:48'),
(20181819, 'Abdelrahman mohammed', '2018-04-09', 'bogy@yahoo.com', '$2y$10$XsVslemnj5Xvap6.eUSBYelnaGaS2AMWx/vFAshwxf0180foKMx0e', 'Giza', 'male', 1112481686, 0, 0, '2018-04-10', 'no', 0, '2018-04-10 15:37:49', '2018-04-10 15:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courses_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_id` (`courses_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `courses_id`, `student_id`, `created_at`, `updated_at`) VALUES
(14, 9, 20161821, '2018-04-12 09:40:50', '2018-04-12 09:40:50'),
(15, 8, 20161821, '2018-04-12 09:40:50', '2018-04-12 09:40:50'),
(16, 7, 20161821, '2018-04-12 09:40:50', '2018-04-12 09:40:50'),
(17, 6, 20161821, '2018-04-12 09:40:50', '2018-04-12 09:40:50'),
(18, 5, 20161821, '2018-04-12 09:40:50', '2018-04-12 09:40:50'),
(19, 31, 20161821, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_doctor`
--

DROP TABLE IF EXISTS `student_doctor`;
CREATE TABLE IF NOT EXISTS `student_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doctorID` (`doctorID`),
  KEY `studentID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_doctor`
--

INSERT INTO `student_doctor` (`id`, `doctorID`, `studentID`) VALUES
(9, 20181010, 20161821);

-- --------------------------------------------------------

--
-- Table structure for table `student_final_grades`
--

DROP TABLE IF EXISTS `student_final_grades`;
CREATE TABLE IF NOT EXISTS `student_final_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `course_code` varchar(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `check_grades` tinyint(1) DEFAULT NULL,
  `check_intial` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stu_id` (`stu_id`),
  KEY `course_id` (`course_code`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_final_grades`
--

INSERT INTO `student_final_grades` (`id`, `stu_id`, `course_code`, `grade`, `semester`, `level`, `check_grades`, `check_intial`, `created_at`, `updated_at`) VALUES
(43, 20161821, 'CS316', 54, 1, 1, NULL, NULL, '2018-04-12 20:51:46', '2018-04-12 20:51:46'),
(44, 20161821, 'HU112', 88, 1, 1, NULL, NULL, '2018-04-12 20:51:46', '2018-04-12 20:51:46'),
(45, 20161821, 'IS321', 54, 2, 1, NULL, NULL, NULL, NULL),
(46, 20161821, 'HU323', 60, 1, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_practical`
--

DROP TABLE IF EXISTS `student_practical`;
CREATE TABLE IF NOT EXISTS `student_practical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `practical` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_practical`
--

INSERT INTO `student_practical` (`id`, `stu_id`, `stu_name`, `course_name`, `practical`) VALUES
(1, 20161820, 'mohamed ismael', 'English-1', 5),
(2, 20161819, 'mohammed', 'English-1', 9),
(3, 20161821, 'Student', 'English-1', 1),
(4, 20161818, 'ahmed mohammed', 'Fundamentals of Accounting', 10),
(5, 20161821, 'Student', 'Fundamentals of Accounting', 0),
(6, 20161818, 'ahmed mohammed', 'English-2', 10),
(7, 10203040, 'bogyyyy', 'English-2', 10),
(8, 20161820, 'mohamed ismael', 'English-2', 5),
(9, 20161821, 'Student', 'English-2', 4),
(11, 20161821, 'Student', 'Introduction to cs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

DROP TABLE IF EXISTS `stuffs`;
CREATE TABLE IF NOT EXISTS `stuffs` (
  `stuff_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `work_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `stuffs_stuff_id_foreign` (`stuff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stuffs`
--

INSERT INTO `stuffs` (`stuff_id`, `full_name`, `birthdate`, `email`, `password`, `address`, `gender`, `phone`, `salary`, `hire_date`, `work_type`, `created_at`, `updated_at`) VALUES
(10102020, 'Abdelrahman', '1996-12-17', 'admin@yahoo.com', '$2y$10$9dQ8mCsVt6vxhBueNkevGey3ol2DkzvyrzLgJvgOiphmUc9lP2IsG', 'fcih', 'male', 1112481686, 50000, '2018-02-27', 'admin', NULL, NULL),
(50005000, 'Said abdo', '2018-02-27', 'said@yahoo.com', '$2y$10$3rjiNlrtVrSPatuHMhAzp.qFsFAQKjQZQOcT6e15/X1eq/kjk11NO', 'gizaaaaaaaaa', 'male', 1112481686, 5000, '2018-02-27', 'student affairs', '2018-02-27 19:00:25', '2018-02-27 19:00:25'),
(20182018, 'Abdelrahman ashraf', '2018-04-07', 'ashraf@yahoo.com', '$2y$10$Eg2J1FJhgE9eLSFJROFUB..WA8j1x1erTdjazwuof06aC2vpaTEaG', '51 blah', 'male', 1112481686, 10000, '2018-04-05', 'control', '2018-04-04 20:34:07', '2018-04-04 20:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `stu_levels`
--

DROP TABLE IF EXISTS `stu_levels`;
CREATE TABLE IF NOT EXISTS `stu_levels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stu_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stu_levels_stu_id_foreign` (`stu_id`),
  KEY `stu_levels_level_id_foreign` (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stu_levels`
--

INSERT INTO `stu_levels` (`id`, `stu_id`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 20161833, 2, '2018-03-09 11:29:18', '2018-03-09 11:29:18'),
(2, 10102028, 1, NULL, NULL),
(3, 20161816, 3, NULL, NULL),
(4, 20161818, 1, NULL, NULL),
(5, 20161821, 1, '2018-03-28 13:49:37', '2018-03-28 13:49:37'),
(6, 20161820, 4, NULL, NULL),
(7, 20181818, 1, '2018-04-10 15:32:48', '2018-04-10 15:32:48'),
(8, 20181819, 1, '2018-04-10 15:37:49', '2018-04-10 15:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `table_for_level_1`
--

DROP TABLE IF EXISTS `table_for_level_1`;
CREATE TABLE IF NOT EXISTS `table_for_level_1` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_for_level_1`
--

INSERT INTO `table_for_level_1` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', 'Introduction to cs', 'Introduction to cs', 'Introduction to cs', NULL, 'Sec. Introduction to cs', 'Sec. Introduction to cs', 'Sec. Introduction to cs', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', NULL, NULL, 'Human Rights', 'Human Rights', 'English-1', 'English-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tusday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Wensday', NULL, NULL, 'Sec. Fundamentals of Accounting', 'Sec. Fundamentals of Accounting', NULL, NULL, 'Fundamentals of Accounting', 'Fundamentals of Accounting', 'Fundamentals of Accounting', NULL, NULL, NULL, NULL),
(5, 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_for_level_2`
--

DROP TABLE IF EXISTS `table_for_level_2`;
CREATE TABLE IF NOT EXISTS `table_for_level_2` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_for_level_2`
--

INSERT INTO `table_for_level_2` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', 'Course 1', 'Course 1', 'Course 1', 'Course 2', 'Course 3', 'Course 2', 'Course 3', 'Course 3', NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', 'Course 6', 'Course 6', 'Course 4', 'Course 4', NULL, NULL, NULL, NULL, NULL, 'Course 8', 'Course 8', NULL, NULL),
(3, 'Tusday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Wensday', NULL, 'Course 4', 'Course 4', 'Course 7', 'Course 7', 'Course 9', 'Course 9', NULL, 'Course 5', 'Course 5', NULL, NULL, NULL),
(5, 'Thursday', NULL, NULL, NULL, NULL, NULL, 'Course 7', 'Course 7', 'Course 6', 'Course 6', 'Course 6', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_for_level_3`
--

DROP TABLE IF EXISTS `table_for_level_3`;
CREATE TABLE IF NOT EXISTS `table_for_level_3` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_for_level_3`
--

INSERT INTO `table_for_level_3` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', 'Management information systems', 'Management information systems', 'Management information systems', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', NULL, 'Internet application', 'Lab(Introduction to cs)', NULL, NULL, NULL, NULL, NULL, NULL, 'Lab(Human Rights)', 'Lab(Human Rights)', NULL, NULL),
(3, 'Tusday', NULL, NULL, NULL, 'Lab(English-2)', 'Lab(English-2)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Wensday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Thursday', NULL, NULL, NULL, 'Introduction to cs', 'Introduction to cs', NULL, 'English-1', 'Internet application', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_for_level_4`
--

DROP TABLE IF EXISTS `table_for_level_4`;
CREATE TABLE IF NOT EXISTS `table_for_level_4` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AM_12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PM_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_for_level_4`
--

INSERT INTO `table_for_level_4` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', 'Introduction to cs', 'Fundamentals of Accounting', 'Fundamentals of Accounting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', NULL, NULL, NULL, NULL, NULL, 'Introduction to cs', 'Human Rights', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tusday', NULL, NULL, NULL, NULL, NULL, NULL, 'Human Rights', NULL, NULL, 'Section 1', NULL, NULL, NULL),
(4, 'Wensday', NULL, NULL, NULL, NULL, 'Fundamentals of Accounting', NULL, NULL, 'Communication & Negotiation Skills', NULL, NULL, NULL, NULL, NULL),
(5, 'Thursday', NULL, NULL, NULL, 'English-2', 'Human Rights', 'Human Rights', NULL, NULL, NULL, 'Section 1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `users_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(10102020, 'abdelrahman', '$2y$10$9dQ8mCsVt6vxhBueNkevGey3ol2DkzvyrzLgJvgOiphmUc9lP2IsG', 'admin', 'gPerPh2GusmJt37bS1Skd1YsWKDxiAbzWbJ7CWpTnFqFbDKTNnFU8urmZTeY', '2018-02-25 15:14:43', '2018-02-25 15:14:43'),
(20181010, 'Abdelrahman mohammed', '$2y$10$48hgc9RsDA0DVZBlJknrGuX6TZgqwbhE2bWoKD0gr6RqzVq0f464u', 'doctor', 'tsLrwCn3YZTUZzBylJl63TNgfSsPRlj2IDZaEVX77c3vTCCMhnD62wcfg7VD', '2018-02-27 15:47:34', '2018-02-27 15:47:34'),
(10203040, 'bogyyyy', '$2y$10$6MnS32WgGsXwXc1fngWgXeB8zRpryrwfPpGiihwdzCOo2cpow0ZdO', 'student', NULL, '2018-02-27 18:54:14', '2018-02-27 18:54:14'),
(50005000, 'Said abdo', '$2y$10$sEbIbYpZqLuyQ8wqaWK9iOI9aiNsRCyz1ItqbNrYIsxwmMVsCad4O', 'stuff', 'IKO4Q47HwekSfq6Bu3dP2I5yes2wuL7dcZRUN3PHWmn7iWyCStRhr2fJ1K5e', '2018-02-27 19:00:25', '2018-02-27 19:00:25'),
(20161820, 'mohamed ismael', '$2y$10$w6V5Tn5i77.GPMrM0WVLyOs.1GzEtrCVXY.5eic/AMCv7Ovuubf3W', 'student', NULL, '2018-02-27 20:59:09', '2018-02-27 20:59:09'),
(11334233, 'instructor', '$2y$10$jcghEaiy3tQsN1d7fhoJ7exBvWtQNjaOahHKZM.yQOm4brdysB1GC', 'instructor', NULL, '2018-03-04 21:38:05', '2018-03-04 21:38:05'),
(20161816, 'abdelrahman baradah', '$2y$10$4y5KK7pYNyfOGt7.Fg2gaOoeb.ccTzLGOGcrt0IW0Yu5BCyQbxSXm', 'student', NULL, '2018-03-08 12:18:22', '2018-03-08 12:18:22'),
(10102028, 'boguuuu', '$2y$10$HuvSFoCg1Kz1YVBecDt2HutU3tFZ5wkDULhtkJrE.BWUDEQkeeUxS', 'student', NULL, '2018-03-08 12:21:44', '2018-03-08 12:21:44'),
(20161833, 'abdelrahman baradah', '$2y$10$AwJ.Zjmzbg3NCg1a55Gsxu3ttTH2cUs05CbRLmyjhWV44IqID4K/m', 'student', NULL, '2018-03-09 11:29:18', '2018-03-09 11:29:18'),
(20161821, 'Student', '$2y$10$/eHLsb79z8ZT2qthXf1nPungVd6XeXOSWPgF/7xk2GI/jXQpRBBXW', 'student', 'Ha7R2B0mSztJ27PNgRrWWKanRhzaf5nc3xnr9q2wnW0G0PiGHGQsmjLw5bnT', '2018-03-28 13:49:37', '2018-03-28 13:49:37'),
(20182018, 'Abdelrahman ashraf', '$2y$10$CJ8AUMUEPtsZEebTVM7BQ../vJJ6IpUsJOr54SNnjcjFEmHnZ5GGe', 'stuff', '9Ios9wXUYlp29YElOdremkauuiTBq9HXxDbPTV6bBw2EZ04lReKRbEm4EEdc', '2018-04-04 20:34:07', '2018-04-04 20:34:07'),
(20181818, 'Abdel', '$2y$10$3hIb97lJMJ7i28RchsGCm.Zgpr9rIvY5VAXSBhGm6jVpP9UsEoYBG', 'student', NULL, '2018-04-10 15:32:48', '2018-04-10 15:32:48'),
(20181819, 'Abdelrahman mohammed', '$2y$10$AA6HVGTomaqyFJKD83Y/.OOECZKvlUt.jqKty6Fa5UTWC61i1YRoG', 'student', NULL, '2018-04-10 15:37:49', '2018-04-10 15:37:49'),
(20151010, 'abdelrahman mohammed', '$2y$10$0QmlynhyP894tCmfIagPp.29KDOk/nCoF/NxykDf4H1keLW/pgyGi', 'instructor', 'Z98Rn9RqKR8Rm4sJ6Caa9h58cohi3aR0sOW2oGcBWdn9awKKkdgkMu279lqo', '2018-04-12 11:01:35', '2018-04-12 11:01:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
