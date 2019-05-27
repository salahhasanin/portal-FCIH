-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2018 at 12:05 AM
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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_code` int(3) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_hour`, `prerequisite_course`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 111, 'English-1', NULL, 'no', 5, NULL, NULL),
(5, 112, 'English-2', NULL, 'English-1', 5, '2018-03-10 20:30:46', '2018-03-10 20:30:46'),
(6, 313, 'Human Rights', NULL, 'no', 5, '2018-03-10 20:48:55', '2018-03-10 20:48:55'),
(7, 323, 'Fundamentals of Accounting', NULL, 'no', 5, '2018-03-10 20:50:49', '2018-03-10 20:50:49'),
(8, 331, 'Communication & Negotiation Skills', NULL, 'no', 5, '2018-03-10 20:51:42', '2018-03-10 20:51:42'),
(9, 211, 'Introduction to cs', NULL, 'no', 1, '2018-03-27 12:17:41', '2018-03-27 12:17:41');

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
(20181010, 'Abdelrahman mohammed', '2018-02-27', 'abaradah@gmail.com', '$2y$10$LqEmL3KV9o9ops.84Su2xuBRIMMvSD4yTqkGvjpLqlSPKlDtGK./K', 'el gizaaaaa', 'male', 1112481686, 19000, '2018-02-28', '2018-02-27 15:47:34', '2018-02-27 15:47:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_course`
--

INSERT INTO `doctor_course` (`id`, `course_id`, `doctor_id`) VALUES
(7, 1, 20181010),
(8, 2, 20181010);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_rating`
--

INSERT INTO `doctor_rating` (`id`, `doctor_ID`, `student_ID`, `rate`) VALUES
(1, 20181010, 20161818, 3),
(2, 20191919, 20161818, 5),
(4, 20161815, 20161818, 3),
(5, 20181010, 20161821, 1);

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
(11334233, 'instructor', '2018-03-04', 'inst@yahoo.com', '$2y$10$8JsRaXGsvjDe0EefOMr0x.HMp1wW8htOYrURiJjbcYTb2QF16YZp2', '51 nasr city', 'male', 1112481686, 6000, '2018-03-04', '2018-03-04 21:38:05', '2018-03-04 21:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `level1_for_level_1`
--

DROP TABLE IF EXISTS `level1_for_level_1`;
CREATE TABLE IF NOT EXISTS `level1_for_level_1` (
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
-- Dumping data for table `level1_for_level_1`
--

INSERT INTO `level1_for_level_1` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', 'English-2', 'English-2', 'Human Rights', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', 'English-1', 'English-1', 'English-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tusday', 'Human Rights', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Wensday', NULL, NULL, 'Fundamentals of Accounting', 'Fundamentals of Accounting', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Thursday', 'Communication & Negotiation Skills', 'Communication & Negotiation Skills', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level3_for_level_3`
--

DROP TABLE IF EXISTS `level3_for_level_3`;
CREATE TABLE IF NOT EXISTS `level3_for_level_3` (
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
-- Dumping data for table `level3_for_level_3`
--

INSERT INTO `level3_for_level_3` (`id`, `Days`, `AM_8`, `AM_9`, `AM_10`, `AM_11`, `AM_12`, `PM_1`, `PM_2`, `PM_3`, `PM_4`, `PM_5`, `PM_6`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Monday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tusday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Wensday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Thursday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  PRIMARY KEY (`new_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_date`, `new_title`, `new_content`) VALUES
(1, '2018-03-04', 'first News', 'my name is salah '),
(2, '2018-03-07', 'second News', 'my name is salah hasanin said '),
(3, '2018-01-30', 'third news', 'dddddddddddddd'),
(4, '2018-03-04', 'new news', 'helllllllo'),
(5, '2018-03-10', 'New activity', 'nfjsnfjnsfonsefek'),
(6, '2018-03-27', 'New Session', 'forRegister you have tyo go to the student union');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_name` (`course_name`),
  KEY `course_id` (`course_name`),
  KEY `doctor_id` (`doc_id`),
  KEY `inst_id` (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opened_courses`
--

INSERT INTO `opened_courses` (`id`, `course_name`, `doc_id`, `inst_id`, `level_no`, `semester`, `created_at`, `updated_at`) VALUES
(75, 'Fundamentals of Accounting', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34'),
(74, 'English-2', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34'),
(73, 'English-1', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34'),
(72, 'Communication & Negotiation Skills', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34'),
(76, 'Human Rights', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34'),
(77, 'Introduction to cs', 20181010, 11334233, 1, 1, '2018-03-27 16:21:34', '2018-03-27 16:21:34');

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
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentgrade`
--

INSERT INTO `studentgrade` (`id`, `stu_id`, `name`, `Attendance`, `non_Attendance`, `Quize`, `ass`, `medtirm`, `project`, `course_id`, `pro`) VALUES
(63, 20161818, 'ahmed mohammed', 3, 1, 3, 3, 15, 8, 1, NULL),
(64, 20161819, 'mohammed', 3, 1, 6, 6, 15, 8, 1, NULL),
(65, 10203040, 'bogyyyy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 20161820, 'mohamed ismael', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 201111, 'regerg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 123454, 'gdrgerge', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 20161816, 'abdelrahman baradah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 10102028, 'boguuuu', 3, 1, 3, 3, 15, 8, 1, NULL),
(71, 20161833, 'abdelrahman baradah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(20161821, 'Student', '2018-03-28', 'student@yahoo.com', '$2y$10$DsDLLd06Dc2iC/6Wz4U96.cLS90Z6YZ//1/30Mf4k4O6xOo0hFczS', '51 blah', 'male', 1112481686, 0, 0, '2018-03-28', 'no', 0, '2018-03-28 13:49:37', '2018-03-28 13:49:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `courses_id`, `student_id`, `created_at`, `updated_at`) VALUES
(46, 7, 20161821, '2018-03-30 12:43:11', '2018-03-30 12:43:11'),
(47, 5, 20161821, '2018-03-30 12:43:11', '2018-03-30 12:43:11'),
(48, 8, 20161821, '2018-03-30 12:43:11', '2018-03-30 12:43:11'),
(49, 6, 20161821, '2018-03-30 12:43:11', '2018-03-30 12:43:11'),
(50, 9, 20161821, '2018-03-30 12:43:11', '2018-03-30 12:43:11'),
(51, 7, 20161821, '2018-03-30 12:44:43', '2018-03-30 12:44:43'),
(52, 5, 20161821, '2018-03-30 12:44:43', '2018-03-30 12:44:43'),
(53, 8, 20161821, '2018-03-30 12:44:43', '2018-03-30 12:44:43'),
(54, 6, 20161821, '2018-03-30 12:44:43', '2018-03-30 12:44:43'),
(55, 9, 20161821, '2018-03-30 12:44:43', '2018-03-30 12:44:43'),
(56, 7, 20161821, '2018-03-30 12:45:15', '2018-03-30 12:45:15'),
(57, 5, 20161821, '2018-03-30 12:45:15', '2018-03-30 12:45:15'),
(58, 8, 20161821, '2018-03-30 12:45:15', '2018-03-30 12:45:15'),
(59, 6, 20161821, '2018-03-30 12:45:15', '2018-03-30 12:45:15'),
(60, 9, 20161821, '2018-03-30 12:45:15', '2018-03-30 12:45:15'),
(61, 7, 20161821, '2018-03-30 12:57:49', '2018-03-30 12:57:49'),
(62, 1, 20161821, '2018-03-30 12:57:50', '2018-03-30 12:57:50');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_doctor`
--

INSERT INTO `student_doctor` (`id`, `doctorID`, `studentID`) VALUES
(1, 20181010, 20161818),
(2, 20191919, 20161818),
(3, 20191919, 20161819),
(4, 20191919, 10102028),
(5, 20191919, 20161833),
(6, 20191919, 10102028),
(7, 20191919, 201111),
(8, 20161815, 20161818);

-- --------------------------------------------------------

--
-- Table structure for table `student_final_grades`
--

DROP TABLE IF EXISTS `student_final_grades`;
CREATE TABLE IF NOT EXISTS `student_final_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stu_id` (`stu_id`),
  KEY `course_id` (`course_code`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_final_grades`
--

INSERT INTO `student_final_grades` (`id`, `stu_id`, `course_code`, `grade`, `created_at`, `updated_at`) VALUES
(13, 10102028, 111, 69, '2018-03-26 21:00:25', '2018-03-26 21:00:25'),
(14, 20161821, 111, 40, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
(9, 20161821, 'Student', 'English-2', 4);

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
(50005000, 'Said abdo', '2018-02-27', 'said@yahoo.com', '$2y$10$3rjiNlrtVrSPatuHMhAzp.qFsFAQKjQZQOcT6e15/X1eq/kjk11NO', 'gizaaaaaaaaa', 'male', 1112481686, 5000, '2018-02-27', 'student affairs', '2018-02-27 19:00:25', '2018-02-27 19:00:25');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stu_levels`
--

INSERT INTO `stu_levels` (`id`, `stu_id`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 20161833, 2, '2018-03-09 11:29:18', '2018-03-09 11:29:18'),
(2, 10102028, 1, NULL, NULL),
(3, 20161816, 3, NULL, NULL),
(4, 20161818, 1, NULL, NULL),
(5, 20161821, 1, '2018-03-28 13:49:37', '2018-03-28 13:49:37');

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
(10102020, 'abdelrahman', '$2y$10$9dQ8mCsVt6vxhBueNkevGey3ol2DkzvyrzLgJvgOiphmUc9lP2IsG', 'admin', 'eX78ymGuGxzKd9R0n1fhhUV3l5GLEA9Bgs4DetxydPLAEst0OF6FGlP0g0j5', '2018-02-25 15:14:43', '2018-02-25 15:14:43'),
(20181010, 'Abdelrahman mohammed', '$2y$10$48hgc9RsDA0DVZBlJknrGuX6TZgqwbhE2bWoKD0gr6RqzVq0f464u', 'doctor', NULL, '2018-02-27 15:47:34', '2018-02-27 15:47:34'),
(10203040, 'bogyyyy', '$2y$10$6MnS32WgGsXwXc1fngWgXeB8zRpryrwfPpGiihwdzCOo2cpow0ZdO', 'student', NULL, '2018-02-27 18:54:14', '2018-02-27 18:54:14'),
(50005000, 'Said abdo', '$2y$10$sEbIbYpZqLuyQ8wqaWK9iOI9aiNsRCyz1ItqbNrYIsxwmMVsCad4O', 'stuff', 'LwohfuFuhFFOkrPPZVuz5gTgeMiKg7QaaKBtv6U5yMpVXfJMJR1s7B5neQ7H', '2018-02-27 19:00:25', '2018-02-27 19:00:25'),
(20161820, 'mohamed ismael', '$2y$10$w6V5Tn5i77.GPMrM0WVLyOs.1GzEtrCVXY.5eic/AMCv7Ovuubf3W', 'student', NULL, '2018-02-27 20:59:09', '2018-02-27 20:59:09'),
(11334233, 'instructor', '$2y$10$jcghEaiy3tQsN1d7fhoJ7exBvWtQNjaOahHKZM.yQOm4brdysB1GC', 'instructor', NULL, '2018-03-04 21:38:05', '2018-03-04 21:38:05'),
(20161816, 'abdelrahman baradah', '$2y$10$4y5KK7pYNyfOGt7.Fg2gaOoeb.ccTzLGOGcrt0IW0Yu5BCyQbxSXm', 'student', NULL, '2018-03-08 12:18:22', '2018-03-08 12:18:22'),
(10102028, 'boguuuu', '$2y$10$HuvSFoCg1Kz1YVBecDt2HutU3tFZ5wkDULhtkJrE.BWUDEQkeeUxS', 'student', NULL, '2018-03-08 12:21:44', '2018-03-08 12:21:44'),
(20161833, 'abdelrahman baradah', '$2y$10$AwJ.Zjmzbg3NCg1a55Gsxu3ttTH2cUs05CbRLmyjhWV44IqID4K/m', 'student', NULL, '2018-03-09 11:29:18', '2018-03-09 11:29:18'),
(20161821, 'Student', '$2y$10$/eHLsb79z8ZT2qthXf1nPungVd6XeXOSWPgF/7xk2GI/jXQpRBBXW', 'student', 'vpEosvXQnnnpy9kTsyezJ14NXNWy2qOuEIx1CyhPd53sxQMIa49OYuXrLEaU', '2018-03-28 13:49:37', '2018-03-28 13:49:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
