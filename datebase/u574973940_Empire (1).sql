-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2021 at 01:20 PM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u574973940_Empire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `admin_email` varchar(1100) NOT NULL,
  `admin_password` varchar(2000) NOT NULL,
  `admin_name` varchar(1100) NOT NULL,
  `admin_phone` bigint(50) NOT NULL,
  `admin_photo` varchar(5000) NOT NULL,
  `admin_dob` date NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `users_view` tinyint(1) NOT NULL,
  `users_create` tinyint(1) NOT NULL,
  `users_edit` tinyint(1) NOT NULL,
  `users_del` tinyint(1) NOT NULL,
  `admin_view` tinyint(1) NOT NULL,
  `admin_create` tinyint(1) NOT NULL,
  `admin_edit` tinyint(1) NOT NULL,
  `admin_del` tinyint(1) NOT NULL,
  `cricket_view` tinyint(1) NOT NULL,
  `cricket_create` tinyint(1) NOT NULL,
  `cricket_edit` tinyint(1) NOT NULL,
  `cricket_del` tinyint(1) NOT NULL,
  `teams_view` tinyint(1) NOT NULL,
  `teams_create` tinyint(1) NOT NULL,
  `teams_edit` tinyint(1) NOT NULL,
  `teams_del` tinyint(1) NOT NULL,
  `category_view` tinyint(1) NOT NULL,
  `category_create` tinyint(1) NOT NULL,
  `category_edit` tinyint(1) NOT NULL,
  `category_del` tinyint(1) NOT NULL,
  `cricket_score_view` tinyint(1) NOT NULL,
  `cricket_score_create` tinyint(1) NOT NULL,
  `cricket_score_edit` tinyint(1) NOT NULL,
  `cricket_score_del` tinyint(1) NOT NULL,
  `users_special` tinyint(1) NOT NULL,
  `admin_special` tinyint(1) NOT NULL,
  `cricket_special` tinyint(1) NOT NULL,
  `contact_view` tinyint(1) NOT NULL,
  `contact_edit` tinyint(1) NOT NULL,
  `contact_del` tinyint(1) NOT NULL,
  `withdraw_view` tinyint(1) NOT NULL,
  `withdraw_edit` tinyint(1) NOT NULL,
  `withdraw_del` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` date NOT NULL DEFAULT current_timestamp(),
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_photo`, `admin_dob`, `admin_status`, `users_view`, `users_create`, `users_edit`, `users_del`, `admin_view`, `admin_create`, `admin_edit`, `admin_del`, `cricket_view`, `cricket_create`, `cricket_edit`, `cricket_del`, `teams_view`, `teams_create`, `teams_edit`, `teams_del`, `category_view`, `category_create`, `category_edit`, `category_del`, `cricket_score_view`, `cricket_score_create`, `cricket_score_edit`, `cricket_score_del`, `users_special`, `admin_special`, `cricket_special`, `contact_view`, `contact_edit`, `contact_del`, `withdraw_view`, `withdraw_edit`, `withdraw_del`, `admin_delete`, `admin_added_date`, `admin_updated_date`) VALUES
(1, 'admin@admin.com', '$2y$10$k.hbtkYnr4HMzIsCbOGE.e9UhR/KsfoHmB1AyaOp6fARkvzylNDOq', 'Elon', 96969696, 'alan turing.jpg', '2020-11-10', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2021-01-04', '2021-03-26 13:44:41'),
(4, 'honnurswamy@123', '$2y$10$R119FhizTGB6RYfN97i4ye41ZDjQOqp3vI/890sT2IHlTeO49VIA6', 'Swamu', 9980783927, '', '1992-03-02', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2021-03-02', '2021-03-03 06:31:06'),
(5, '369@gmail.com', '$2y$10$U6HXw0X4Bi7FMsLQJnReY.W6Z.183UljoXOSTPMUBTlLzWN0ojOvC', 'Swamy', 999000246, '', '1993-03-03', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2021-03-03', '2021-03-03 06:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(1000) NOT NULL,
  `category_icon` varchar(2000) NOT NULL,
  `category_delete` tinyint(1) NOT NULL,
  `category_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_icon`, `category_delete`, `category_added_date`, `category_updated_date`) VALUES
(1, 'Cricket', 'sports_cricket', 0, '2021-01-07 12:48:52', '2021-02-02 06:54:57'),
(2, 'Hockey', 'sports_hockey', 1, '2021-01-07 12:48:52', '2021-02-15 19:25:13'),
(3, 'Lottry', 'price_change', 1, '2021-01-13 04:51:09', '2021-02-15 19:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(20) NOT NULL,
  `contact_name` varchar(2000) NOT NULL,
  `contact_email` varchar(2000) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `contact_country` varchar(200) NOT NULL,
  `contact_subject` varchar(20000) NOT NULL,
  `contact_view` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE `cricket` (
  `cricket_id` bigint(20) NOT NULL,
  `cricket_name` varchar(2000) NOT NULL,
  `cricket_category` bigint(20) NOT NULL,
  `cricket_team1_id` bigint(20) NOT NULL,
  `cricket_team1_player1_four` float NOT NULL,
  `cricket_team1_player1_six` float NOT NULL,
  `cricket_team1_player1_delete` tinyint(1) NOT NULL,
  `cricket_team1_player2_four` float NOT NULL,
  `cricket_team1_player2_six` float NOT NULL,
  `cricket_team1_player2_delete` tinyint(1) NOT NULL,
  `cricket_team1_player3_four` float NOT NULL,
  `cricket_team1_player3_six` float NOT NULL,
  `cricket_team1_player3_delete` tinyint(1) NOT NULL,
  `cricket_team1_player4_four` float NOT NULL,
  `cricket_team1_player4_six` float NOT NULL,
  `cricket_team1_player4_delete` tinyint(1) NOT NULL,
  `cricket_team1_player5_four` float NOT NULL,
  `cricket_team1_player5_six` float NOT NULL,
  `cricket_team1_player5_delete` tinyint(1) NOT NULL,
  `cricket_team1_player6_four` float NOT NULL,
  `cricket_team1_player6_six` float NOT NULL,
  `cricket_team1_player6_delete` tinyint(1) NOT NULL,
  `cricket_team1_player7_four` float NOT NULL,
  `cricket_team1_player7_six` float NOT NULL,
  `cricket_team1_player7_delete` tinyint(1) NOT NULL,
  `cricket_team1_player8_four` float NOT NULL,
  `cricket_team1_player8_six` float NOT NULL,
  `cricket_team1_player8_delete` tinyint(1) NOT NULL,
  `cricket_team1_player9_four` float NOT NULL,
  `cricket_team1_player9_six` float NOT NULL,
  `cricket_team1_player9_delete` tinyint(1) NOT NULL,
  `cricket_team1_player10_four` float NOT NULL,
  `cricket_team1_player10_six` float NOT NULL,
  `cricket_team1_player10_delete` tinyint(1) NOT NULL,
  `cricket_team1_player11_four` float NOT NULL,
  `cricket_team1_player11_six` float NOT NULL,
  `cricket_team1_player11_delete` tinyint(1) NOT NULL,
  `cricket_team1_player12_four` float NOT NULL,
  `cricket_team1_player12_six` float NOT NULL,
  `cricket_team1_player12_delete` tinyint(1) NOT NULL,
  `cricket_team2_id` bigint(20) NOT NULL,
  `cricket_team2_player1_four` float NOT NULL,
  `cricket_team2_player1_six` float NOT NULL,
  `cricket_team2_player1_delete` tinyint(1) NOT NULL,
  `cricket_team2_player2_four` float NOT NULL,
  `cricket_team2_player2_six` float NOT NULL,
  `cricket_team2_player2_delete` tinyint(1) NOT NULL,
  `cricket_team2_player3_four` float NOT NULL,
  `cricket_team2_player3_six` float NOT NULL,
  `cricket_team2_player3_delete` tinyint(1) NOT NULL,
  `cricket_team2_player4_four` float NOT NULL,
  `cricket_team2_player4_six` float NOT NULL,
  `cricket_team2_player4_delete` tinyint(1) NOT NULL,
  `cricket_team2_player5_four` float NOT NULL,
  `cricket_team2_player5_six` float NOT NULL,
  `cricket_team2_player5_delete` tinyint(1) NOT NULL,
  `cricket_team2_player6_four` float NOT NULL,
  `cricket_team2_player6_six` float NOT NULL,
  `cricket_team2_player6_delete` tinyint(1) NOT NULL,
  `cricket_team2_player7_four` float NOT NULL,
  `cricket_team2_player7_six` float NOT NULL,
  `cricket_team2_player7_delete` tinyint(1) NOT NULL,
  `cricket_team2_player8_four` float NOT NULL,
  `cricket_team2_player8_six` float NOT NULL,
  `cricket_team2_player8_delete` tinyint(1) NOT NULL,
  `cricket_team2_player9_four` float NOT NULL,
  `cricket_team2_player9_six` float NOT NULL,
  `cricket_team2_player9_delete` tinyint(1) NOT NULL,
  `cricket_team2_player10_four` float NOT NULL,
  `cricket_team2_player10_six` float NOT NULL,
  `cricket_team2_player10_delete` tinyint(1) NOT NULL,
  `cricket_team2_player11_four` float NOT NULL,
  `cricket_team2_player11_six` float NOT NULL,
  `cricket_team2_player11_delete` tinyint(1) NOT NULL,
  `cricket_team2_player12_four` float NOT NULL,
  `cricket_team2_player12_six` float NOT NULL,
  `cricket_team2_player12_delete` tinyint(1) NOT NULL,
  `cricket_date` date NOT NULL,
  `cricket_time` time NOT NULL,
  `cricket_active` tinyint(1) NOT NULL,
  `cricket_delete` tinyint(1) NOT NULL,
  `cricket_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cricket_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`cricket_id`, `cricket_name`, `cricket_category`, `cricket_team1_id`, `cricket_team1_player1_four`, `cricket_team1_player1_six`, `cricket_team1_player1_delete`, `cricket_team1_player2_four`, `cricket_team1_player2_six`, `cricket_team1_player2_delete`, `cricket_team1_player3_four`, `cricket_team1_player3_six`, `cricket_team1_player3_delete`, `cricket_team1_player4_four`, `cricket_team1_player4_six`, `cricket_team1_player4_delete`, `cricket_team1_player5_four`, `cricket_team1_player5_six`, `cricket_team1_player5_delete`, `cricket_team1_player6_four`, `cricket_team1_player6_six`, `cricket_team1_player6_delete`, `cricket_team1_player7_four`, `cricket_team1_player7_six`, `cricket_team1_player7_delete`, `cricket_team1_player8_four`, `cricket_team1_player8_six`, `cricket_team1_player8_delete`, `cricket_team1_player9_four`, `cricket_team1_player9_six`, `cricket_team1_player9_delete`, `cricket_team1_player10_four`, `cricket_team1_player10_six`, `cricket_team1_player10_delete`, `cricket_team1_player11_four`, `cricket_team1_player11_six`, `cricket_team1_player11_delete`, `cricket_team1_player12_four`, `cricket_team1_player12_six`, `cricket_team1_player12_delete`, `cricket_team2_id`, `cricket_team2_player1_four`, `cricket_team2_player1_six`, `cricket_team2_player1_delete`, `cricket_team2_player2_four`, `cricket_team2_player2_six`, `cricket_team2_player2_delete`, `cricket_team2_player3_four`, `cricket_team2_player3_six`, `cricket_team2_player3_delete`, `cricket_team2_player4_four`, `cricket_team2_player4_six`, `cricket_team2_player4_delete`, `cricket_team2_player5_four`, `cricket_team2_player5_six`, `cricket_team2_player5_delete`, `cricket_team2_player6_four`, `cricket_team2_player6_six`, `cricket_team2_player6_delete`, `cricket_team2_player7_four`, `cricket_team2_player7_six`, `cricket_team2_player7_delete`, `cricket_team2_player8_four`, `cricket_team2_player8_six`, `cricket_team2_player8_delete`, `cricket_team2_player9_four`, `cricket_team2_player9_six`, `cricket_team2_player9_delete`, `cricket_team2_player10_four`, `cricket_team2_player10_six`, `cricket_team2_player10_delete`, `cricket_team2_player11_four`, `cricket_team2_player11_six`, `cricket_team2_player11_delete`, `cricket_team2_player12_four`, `cricket_team2_player12_six`, `cricket_team2_player12_delete`, `cricket_date`, `cricket_time`, `cricket_active`, `cricket_delete`, `cricket_added_date`, `cricket_updated_date`) VALUES
(1, 'Royal Challengers Bangalore VS Mumbai Indians', 1, 1, 0.1, 2, 1, 3, 4, 1, 5, 6, 1, 7, 8, 1, 9, 10, 1, 11, 12, 1, 0.2, 0.4, 0, 15, 16, 0, 41, 42, 0, 43, 44, 0, 45, 46, 0, 47, 48.1, 0, 2, 17, 18, 0, 19, 20, 1, 21, 22, 1, 23, 24, 1, 25, 26, 1, 27, 28, 0, 29, 30, 0, 31, 32, 0, 33, 34.1, 0, 35, 36, 0, 37, 38, 0, 39, 40.2, 0, '0000-00-00', '00:00:00', 0, 1, '2021-01-07 12:50:31', '2021-03-03 01:20:52'),
(2, 'RCB VS KKR', 1, 1, 0.1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.2, 0.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', '00:00:00', 0, 1, '2021-01-08 09:34:30', '2021-03-03 01:20:56'),
(3, 'Balaji vs balaji1', 1, 2, 0.1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-02-23', '22:01:00', 0, 1, '2021-02-27 18:13:18', '2021-03-03 01:21:00'),
(4, 'New Zealand women\'s Vs England womens', 1, 4, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.3, 0.5, 1, 0.2, 0.3, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.4, 0.5, 1, 0.4, 0.6, 1, 1, 1.5, 0, 1, 1.4, 1, 0, 0, 0, 5, 0.2, 0.5, 1, 0.2, 0.3, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 0, 0.4, 0.6, 0, 0.4, 0.6, 1, 0.3, 0.4, 0, 1, 1.4, 0, 1, 1.3, 0, 1, 1.6, 0, 0, 0, 0, '2021-03-03', '07:30:00', 1, 1, '2021-03-03 01:33:26', '2021-03-04 04:34:45'),
(5, 'AUSTRALIA VS NEWZEALAND', 1, 6, 0.2, 0.2, 1, 0.3, 0.3, 1, 0.2, 0.3, 1, 0.3, 0.3, 1, 0.3, 0.5, 1, 0.3, 0.3, 1, 0.4, 0.4, 1, 0.5, 1, 1, 1, 2, 0, 2, 3, 1, 2, 3, 1, 0, 0, 0, 7, 0.2, 0.2, 1, 0.3, 0.2, 1, 0.3, 0.3, 1, 0.3, 0.3, 1, 0.3, 0.4, 1, 0.5, 0.5, 1, 0.3, 0, 1, 0.3, 0.3, 1, 0.5, 0.5, 1, 1, 1, 1, 2, 1, 1, 0, 0, 0, '2021-03-03', '11:30:00', 0, 1, '2021-03-03 03:52:29', '2021-03-04 04:34:49'),
(6, 'Raval sporting Vs khairan( ECS T10)', 1, 8, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.2, 0.4, 1, 0.3, 0.4, 1, 0.4, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.5, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 1, 9, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 1, 1.4, 1, 1, 1.5, 1, 1, 1.5, 1, 0, 0, 0, '2021-03-04', '01:00:00', 0, 1, '2021-03-04 04:34:25', '2021-03-05 06:34:55'),
(7, 'Australia vs Newzealand', 1, 7, 0.2, 0.2, 0, 0.2, 0.2, 1, 0.3, 0.3, 1, 0.2, 0.2, 1, 0.3, 0.3, 1, 0.5, 1, 0, 0.5, 1, 0, 0.5, 1, 0, 1, 1.5, 0, 1, 2, 0, 1, 2, 0, 0, 0, 0, 6, 0.2, 0.2, 0, 0.3, 0.3, 0, 0.3, 0.3, 0, 0.5, 0.5, 0, 0.3, 0.3, 0, 0.3, 0.3, 0, 0.5, 0.6, 0, 0.5, 1, 0, 1, 1.5, 0, 1, 2, 0, 1, 2, 0, 0, 0, 0, '2021-03-05', '11:30:00', 0, 1, '2021-03-04 17:09:20', '2021-03-07 14:13:30'),
(8, 'New Zealand women\'s  Vs   England womens', 1, 4, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.5, 0.6, 1, 1, 1.3, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 0, 5, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.4, 0, 1, 1.4, 0, 1, 1.3, 0, 1, 1.5, 0, 0, 0, 0, '2021-03-05', '07:30:00', 0, 1, '2021-03-05 01:55:35', '2021-03-11 11:35:24'),
(9, 'Westindies vs srilanka', 1, 10, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.4, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.5, 1, 1, 1.3, 0, 1, 1.5, 0, 1, 1.4, 0, 0, 0, 0, 11, 0.3, 0.2, 1, 0.3, 0.3, 1, 0.3, 0.5, 1, 0.3, 0.3, 1, 0.4, 0.6, 0, 0.5, 0.3, 0, 0.5, 0.5, 1, 1, 2, 1, 1, 1.5, 0, 2, 1, 0, 1, 1.5, 0, 0, 0, 0, '2021-03-12', '19:00:00', 1, 1, '2021-03-07 14:25:07', '2021-03-11 11:58:44'),
(10, 'England legends vs South Africa legends', 1, 12, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.4, 0.6, 0, 0.3, 0.5, 1, 0.3, 0.4, 0, 0.3, 0.5, 0, 1, 1.3, 0, 1, 1.5, 0, 1, 1.4, 1, 0.2, 0.2, 1, 13, 0.3, 0.2, 0, 0.3, 0.5, 0, 0.3, 0.3, 0, 0.3, 0.3, 0, 0.4, 0.6, 0, 0.5, 0.3, 0, 0.3, 2, 0, 1, 1, 0, 1, 0.3, 0, 1, 1, 0, 0.5, 1, 0, 0.2, 0.2, 0, '2021-03-11', '19:00:00', 1, 1, '2021-03-11 11:38:04', '2021-03-13 09:04:13'),
(11, 'INDIA VS ENGLAND', 1, 14, 0.2, 0.2, 0, 0.2, 0.2, 0, 0.2, 0.2, 0, 0.2, 0.2, 0, 0.3, 0.2, 0, 1, 1.5, 0, 1, 1.5, 0, 0.3, 0.5, 0, 0.5, 1, 0, 1, 2, 0, 0.5, 1, 0, 0, 0, 0, 15, 0.2, 0.2, 0, 0.2, 0.2, 0, 0.2, 0.2, 0, 0.3, 0.2, 0, 0.3, 0.3, 0, 0.3, 0.2, 0, 0.5, 0.5, 0, 1, 1.5, 0, 0.5, 0.6, 0, 0.7, 1, 0, 0.4, 0.5, 0, 0, 0, 0, '2021-03-12', '19:00:00', 1, 1, '2021-03-12 07:47:48', '2021-03-13 09:04:20'),
(12, 'INDIA LEGEND VS SOUTH AFRICA LEGEND', 1, 13, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.3, 0.2, 1, 1, 1.5, 0, 0.3, 0.4, 1, 1, 1.5, 0, 0.5, 1, 0, 1, 2, 0, 0.5, 1, 0, 1, 1.5, 0, 16, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.4, 0.5, 0, 0.3, 0.4, 1, 0.5, 0.8, 1, 0.3, 0.2, 1, 0.5, 0.5, 0, 0.4, 0.5, 0, 0.5, 0.6, 1, 0.7, 1, 0, 1, 1.5, 0, 0, 0, 0, '2021-03-13', '19:00:00', 1, 1, '2021-03-13 09:09:39', '2021-03-14 11:40:46'),
(13, 'INDIA VS ENGLAND', 1, 14, 0.2, 0.3, 1, 0.3, 0.3, 1, 0.2, 0.4, 1, 0.2, 0.4, 1, 0.4, 0.2, 1, 0.5, 0.8, 1, 0.6, 1, 1, 0.3, 0.5, 1, 1, 1.3, 1, 1, 2, 1, 1, 1.4, 1, 0, 0, 0, 15, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.2, 1, 0.5, 0.7, 1, 1, 1.5, 1, 0.5, 1, 1, 1, 1.5, 1, 2, 1, 1, 0, 0, 0, '2021-03-14', '19:30:00', 0, 1, '2021-03-13 12:07:08', '2021-03-16 09:23:38'),
(14, 'India Vs England(T20 )', 1, 14, 0.4, 0.6, 1, 0.3, 0.4, 1, 0.2, 0.4, 1, 0.3, 0.5, 1, 0.4, 0.3, 1, 0.5, 0.8, 1, 0.6, 1, 1, 0.3, 0.5, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 0, 15, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.4, 1, 0.5, 0.8, 1, 1, 1.5, 1, 1, 1.3, 1, 0, 0, 0, '2021-03-16', '07:00:00', 0, 1, '2021-03-16 09:23:31', '2021-03-17 10:58:13'),
(15, 'INDIA LEGENDS VS WEST INDIES LEGENDS', 1, 16, 0.2, 0.2, 1, 0.2, 0.4, 1, 0.3, 0.5, 1, 0.3, 0.2, 1, 0.3, 0.5, 1, 0.3, 0.2, 1, 0.5, 0.7, 1, 0.5, 1, 1, 1, 1.3, 1, 1, 1.3, 1, 1, 1.4, 1, 0, 0, 0, 17, 0.2, 0.2, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.3, 0.4, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.5, 0.6, 1, 1, 1.5, 1, 1, 1.4, 1, 1, 1.5, 1, 1, 1.5, 1, 0, 0, 0, '2021-03-17', '19:00:00', 0, 1, '2021-03-17 10:58:04', '2021-03-18 13:27:41'),
(16, 'INDIA VS ENGLAND (T20)', 1, 14, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.5, 0.7, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 0, 15, 0.3, 0.5, 1, 0.2, 0.4, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.5, 0.8, 1, 1, 1.1, 1, 1, 1.2, 1, 1, 1.5, 1, 1, 1.3, 1, 0, 0, 0, '2021-03-18', '19:00:00', 0, 1, '2021-03-18 12:56:17', '2021-03-19 13:12:49'),
(17, 'SOUTH AFRICA LEGENDS VS SRI LANKA LEGENDS (SEMI FINAL 2)', 1, 13, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.5, 0.4, 1, 0.5, 0.6, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 1, 1.5, 0, 18, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.4, 0.6, 1, 0.4, 0.6, 1, 0.4, 0.6, 1, 0.6, 0.7, 1, 1, 1.5, 1, 1, 1.5, 1, 1, 1.3, 1, 0, 0, 0, '2021-03-19', '19:00:00', 0, 1, '2021-03-19 12:24:11', '2021-03-20 13:16:18'),
(18, 'INDIA VS ENGLAND (T20)', 1, 14, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.5, 1, 1, 1.3, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 0, 15, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.4, 0.5, 1, 0.4, 0.6, 1, 1, 1.1, 1, 1, 1.5, 1, 1, 1.5, 1, 1, 1.3, 1, 0, 0, 0, '2021-03-20', '19:00:00', 1, 1, '2021-03-20 13:16:13', '2021-03-21 12:03:04'),
(19, 'India legends vs Srilanka legends', 1, 16, 0.2, 0.2, 1, 0.2, 0.4, 1, 0.3, 0.5, 1, 0.2, 0.2, 1, 0.5, 0.8, 1, 0.3, 0.2, 1, 0.5, 1, 1, 0.5, 1, 1, 1, 1.3, 1, 1, 2, 1, 1, 2, 1, 0, 0, 0, 18, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.2, 0.2, 1, 0.3, 0.5, 1, 0.5, 0.8, 1, 0.3, 0.5, 1, 0.5, 0.7, 1, 0.4, 0.8, 1, 0.5, 0.8, 1, 1, 1.5, 1, 1, 1.5, 1, 0, 0, 0, '2021-03-21', '19:00:00', 0, 1, '2021-03-21 12:02:40', '2021-03-23 13:32:00'),
(20, 'indian womens  vs south africa womens', 1, 19, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.3, 0.6, 1, 0.4, 0.5, 1, 0.4, 0.6, 1, 0.3, 0.5, 1, 0.3, 0.4, 1, 0.5, 0.7, 1, 1, 1.3, 1, 1, 1.5, 1, 1, 1.4, 1, 0, 0, 1, 20, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.5, 1, 0.3, 0.6, 1, 0.3, 0.6, 1, 0.3, 0.7, 1, 0.3, 0.7, 1, 1, 1.6, 1, 1, 1.5, 1, 1, 1.3, 1, 0, 0, 1, '2021-03-23', '19:00:00', 1, 1, '2021-03-23 13:31:13', '2021-03-26 06:50:22'),
(21, 'INDIA VS ENGLAND(50 overs) ', 1, 21, 0.1, 0.3, 1, 0.1, 0.3, 1, 0.1, 0.3, 1, 0.1, 0.3, 1, 0.2, 0.2, 1, 0.2, 0.4, 1, 0.2, 0.4, 1, 0.3, 0.5, 1, 0.5, 1, 1, 0.5, 1, 1, 0.6, 1, 1, 0, 0, 1, 22, 0.1, 0.3, 1, 0.1, 0.3, 1, 0.1, 0.3, 1, 0.2, 0.3, 1, 0.2, 0.3, 1, 0.2, 0.5, 1, 0.2, 0.4, 1, 0.2, 0.3, 1, 0.3, 0.5, 1, 0.6, 1, 1, 0.4, 1.3, 1, 0, 0, 1, '2021-03-26', '13:30:00', 1, 1, '2021-03-26 06:47:21', '2021-03-28 12:09:20'),
(22, 'INDIA VS ENGLAND (50overs)', 1, 21, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 22, 0.2, 0.3, 1, 0.2, 0.3, 1, 0.2, 0.3, 1, 0.2, 0.3, 1, 0.2, 0.3, 1, 0.3, 0.4, 1, 0.2, 0.3, 1, 0.4, 0.5, 1, 0.3, 0.4, 1, 0.4, 0.5, 1, 0.3, 0.5, 1, 0, 0, 0, '2021-03-28', '01:30:00', 0, 0, '2021-03-28 12:07:34', '2021-03-28 17:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_bet`
--

CREATE TABLE `cricket_bet` (
  `cricket_bet_id` bigint(20) NOT NULL,
  `cricket_bet_users_id` bigint(20) NOT NULL,
  `cricket_bet_cricket_id` bigint(20) NOT NULL,
  `cricket_bet_team_id` bigint(20) NOT NULL,
  `cricket_bet_player_id` bigint(20) NOT NULL,
  `cricket_bet_four` bigint(20) NOT NULL,
  `cricket_bet_six` bigint(20) NOT NULL,
  `cricket_bet_placed_amount` bigint(20) NOT NULL,
  `cricket_bet_win_amount` bigint(20) NOT NULL,
  `cricket_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_bet_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cricket_bet_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_bet`
--

INSERT INTO `cricket_bet` (`cricket_bet_id`, `cricket_bet_users_id`, `cricket_bet_cricket_id`, `cricket_bet_team_id`, `cricket_bet_player_id`, `cricket_bet_four`, `cricket_bet_six`, `cricket_bet_placed_amount`, `cricket_bet_win_amount`, `cricket_bet_win`, `cricket_bet_added_date`, `cricket_bet_updated_date`) VALUES
(5, 4, 1, 1, 6, 1, 3, 1000, 2000, '2', '2021-01-07 12:42:30', '2021-01-10 17:36:01'),
(6, 4, 1, 1, 6, 3, 3, 100, 250, '0', '2021-01-08 11:09:54', '2021-01-12 11:33:55'),
(7, 4, 1, 2, 5, 2, 2, 10, 25, '1', '2021-01-08 11:10:22', '2021-01-10 17:42:19'),
(21, 4, 1, 1, 7, 2, 0, 1000, 1400, '0', '2021-02-15 17:41:55', '2021-02-15 17:41:55'),
(23, 4, 1, 1, 7, 2, 0, 500, 700, '0', '2021-02-15 17:57:13', '2021-02-15 17:57:13'),
(24, 4, 1, 1, 7, 10, 10, 500, 3500, '0', '2021-02-15 17:58:44', '2021-02-15 17:58:44'),
(25, 4, 1, 1, 7, 2, 0, 200, 280, '0', '2021-02-27 19:13:03', '2021-02-27 19:13:03'),
(26, 6, 1, 1, 7, 2, 0, 10, 14, '0', '2021-03-02 12:17:51', '2021-03-02 12:17:51'),
(27, 8, 4, 4, 3, 2, 0, 20, 32, '1', '2021-03-03 02:46:48', '2021-03-03 03:15:45'),
(28, 8, 4, 4, 4, 2, 1, 20, 42, '1', '2021-03-03 02:48:43', '2021-03-03 03:15:49'),
(29, 6, 5, 6, 1, 2, 0, 0, 0, '2', '2021-03-03 06:36:54', '2021-03-03 08:26:23'),
(30, 6, 5, 7, 4, 2, 1, 10, 19, '2', '2021-03-03 06:37:30', '2021-03-03 07:27:36'),
(31, 6, 5, 6, 1, 2, 0, 10, 14, '2', '2021-03-03 06:37:48', '2021-03-03 08:26:23'),
(32, 12, 5, 7, 9, 2, 0, 10, 20, '1', '2021-03-03 06:56:30', '2021-03-03 07:31:36'),
(33, 6, 5, 7, 5, 2, 0, 20, 32, '1', '2021-03-03 07:11:53', '2021-03-03 07:30:54'),
(34, 8, 6, 9, 12, 2, 0, 0, 0, '0', '2021-03-04 17:20:08', '2021-03-04 17:20:08'),
(35, 6, 8, 5, 2, 2, 1, 30, 63, '1', '2021-03-05 01:57:53', '2021-03-05 06:54:47'),
(36, 6, 8, 5, 1, 2, 2, 0, 0, '1', '2021-03-05 01:58:01', '2021-03-05 08:29:50'),
(37, 6, 8, 5, 1, 2, 1, 30, 63, '1', '2021-03-05 01:58:12', '2021-03-05 08:29:50'),
(38, 6, 8, 5, 9, 2, 0, 30, 90, '0', '2021-03-05 01:58:20', '2021-03-05 01:58:20'),
(39, 6, 8, 4, 3, 2, 0, 30, 48, '1', '2021-03-05 01:58:28', '2021-03-05 03:01:52'),
(40, 6, 8, 4, 1, 2, 0, 10, 16, '1', '2021-03-05 01:58:34', '2021-03-05 02:54:13'),
(41, 6, 8, 4, 5, 2, 1, 10, 21, '1', '2021-03-05 01:59:09', '2021-03-05 02:53:32'),
(42, 6, 8, 4, 6, 0, 1, 10, 15, '1', '2021-03-05 02:00:03', '2021-03-05 02:14:03'),
(43, 6, 8, 4, 8, 2, 0, 10, 30, '2', '2021-03-05 02:00:42', '2021-03-05 03:18:27'),
(44, 8, 7, 7, 4, 0, 2, 20, 28, '1', '2021-03-05 06:30:47', '2021-03-05 06:44:32'),
(45, 8, 7, 7, 7, 2, 1, 10, 30, '0', '2021-03-05 06:45:42', '2021-03-05 06:45:42'),
(46, 8, 7, 7, 6, 2, 0, 10, 20, '0', '2021-03-05 06:46:49', '2021-03-05 06:46:49'),
(47, 8, 8, 5, 5, 2, 0, 10, 16, '2', '2021-03-07 17:35:09', '2021-03-07 17:37:40'),
(48, 8, 8, 5, 5, 2, 0, 10, 16, '2', '2021-03-07 17:35:09', '2021-03-07 17:37:40'),
(49, 8, 8, 5, 7, 2, 0, 10, 16, '2', '2021-03-07 17:36:13', '2021-03-07 17:38:19'),
(50, 8, 8, 5, 6, 2, 2, 10, 26, '2', '2021-03-07 17:39:18', '2021-03-07 17:39:51'),
(51, 8, 9, 11, 1, 2, 0, 20, 32, '1', '2021-03-07 21:41:07', '2021-03-07 22:09:00'),
(52, 8, 9, 11, 2, 2, 0, 20, 32, '1', '2021-03-07 21:41:18', '2021-03-07 22:24:31'),
(53, 8, 9, 11, 4, 2, 0, 10, 16, '2', '2021-03-07 21:54:53', '2021-03-07 22:55:45'),
(54, 8, 9, 11, 3, 2, 0, 10, 16, '1', '2021-03-07 21:55:07', '2021-03-07 22:38:48'),
(55, 8, 9, 11, 6, 2, 0, 10, 20, '0', '2021-03-07 21:55:15', '2021-03-07 21:55:15'),
(56, 6, 9, 10, 2, 2, 2, 20, 48, '1', '2021-03-07 22:06:15', '2021-03-08 00:55:42'),
(57, 6, 9, 10, 7, 2, 3, 20, 56, '1', '2021-03-07 22:06:27', '2021-03-08 00:26:03'),
(58, 6, 9, 11, 4, 2, 0, 20, 32, '2', '2021-03-07 22:08:28', '2021-03-07 22:55:45'),
(59, 6, 9, 11, 7, 2, 0, 20, 40, '1', '2021-03-07 22:09:46', '2021-03-07 22:14:22'),
(60, 8, 9, 11, 5, 2, 0, 10, 18, '0', '2021-03-07 22:36:57', '2021-03-07 22:36:57'),
(61, 8, 9, 11, 6, 2, 1, 20, 46, '0', '2021-03-07 22:37:10', '2021-03-07 22:37:10'),
(62, 8, 9, 11, 8, 2, 0, 10, 30, '2', '2021-03-07 22:37:20', '2021-03-07 23:12:10'),
(63, 8, 10, 12, 1, 2, 0, 20, 28, '1', '2021-03-11 13:26:37', '2021-03-11 13:36:45'),
(64, 8, 10, 12, 2, 2, 0, 20, 28, '2', '2021-03-11 13:26:46', '2021-03-11 13:35:56'),
(65, 8, 10, 12, 3, 2, 0, 20, 28, '2', '2021-03-11 13:26:59', '2021-03-11 13:58:43'),
(66, 8, 10, 12, 12, 2, 0, 20, 28, '1', '2021-03-11 13:27:20', '2021-03-11 13:55:30'),
(67, 8, 10, 12, 4, 2, 0, 20, 28, '1', '2021-03-11 13:27:27', '2021-03-11 14:21:48'),
(68, 15, 10, 12, 1, 2, 0, 10, 14, '1', '2021-03-11 13:28:12', '2021-03-11 13:36:45'),
(69, 15, 10, 12, 2, 2, 0, 10, 14, '2', '2021-03-11 13:28:20', '2021-03-11 13:35:56'),
(70, 15, 10, 12, 3, 2, 0, 10, 14, '2', '2021-03-11 13:28:27', '2021-03-11 13:58:43'),
(71, 15, 10, 12, 12, 2, 0, 20, 28, '1', '2021-03-11 13:28:34', '2021-03-11 13:55:30'),
(72, 8, 10, 12, 5, 2, 0, 20, 36, '0', '2021-03-11 14:07:52', '2021-03-11 14:07:52'),
(73, 8, 10, 12, 5, 2, 0, 10, 18, '0', '2021-03-11 14:08:43', '2021-03-11 14:08:43'),
(74, 8, 10, 12, 6, 2, 0, 10, 16, '0', '2021-03-11 14:08:51', '2021-03-11 14:08:51'),
(75, 8, 10, 12, 8, 2, 0, 10, 16, '0', '2021-03-11 14:09:07', '2021-03-11 14:09:07'),
(76, 8, 10, 12, 7, 2, 0, 10, 16, '0', '2021-03-11 14:09:17', '2021-03-11 14:09:17'),
(77, 8, 11, 14, 2, 2, 0, 20, 28, '0', '2021-03-12 13:30:25', '2021-03-12 13:30:25'),
(78, 8, 11, 14, 4, 2, 0, 20, 28, '0', '2021-03-12 13:30:34', '2021-03-12 13:30:34'),
(79, 8, 11, 14, 3, 2, 0, 10, 14, '0', '2021-03-12 13:30:42', '2021-03-12 13:30:42'),
(80, 8, 11, 14, 5, 0, 2, 20, 28, '0', '2021-03-12 13:30:57', '2021-03-12 13:30:57'),
(81, 8, 12, 16, 1, 2, 1, 10, 16, '1', '2021-03-13 13:23:26', '2021-03-13 13:43:01'),
(82, 8, 12, 16, 2, 3, 0, 30, 48, '2', '2021-03-13 13:23:40', '2021-03-13 13:43:26'),
(83, 8, 12, 16, 4, 2, 0, 10, 16, '2', '2021-03-13 13:45:09', '2021-03-13 15:32:05'),
(84, 8, 12, 16, 6, 2, 1, 10, 18, '2', '2021-03-13 13:45:21', '2021-03-13 14:51:39'),
(85, 8, 12, 16, 7, 2, 0, 10, 20, '0', '2021-03-13 13:45:35', '2021-03-13 13:45:35'),
(86, 8, 12, 13, 3, 3, 1, 10, 18, '1', '2021-03-13 15:33:57', '2021-03-13 16:39:41'),
(87, 8, 12, 13, 4, 2, 0, 10, 14, '2', '2021-03-13 15:34:06', '2021-03-13 16:39:29'),
(88, 8, 12, 13, 2, 2, 0, 10, 14, '1', '2021-03-13 15:34:16', '2021-03-13 16:40:42'),
(89, 8, 12, 13, 1, 2, 2, 10, 18, '1', '2021-03-13 15:34:35', '2021-03-13 16:41:13'),
(90, 8, 12, 13, 2, 5, 0, 10, 20, '1', '2021-03-13 15:34:57', '2021-03-13 16:40:42'),
(91, 15, 13, 14, 4, 4, 0, 28, 50, '1', '2021-03-14 07:22:04', '2021-03-14 15:45:29'),
(92, 16, 14, 14, 2, 2, 0, 50, 80, '1', '2021-03-16 13:33:58', '2021-03-16 13:57:17'),
(93, 6, 14, 14, 1, 2, 0, 30, 54, '1', '2021-03-16 13:57:01', '2021-03-16 14:45:53'),
(94, 17, 15, 16, 1, 2, 0, 20, 28, '2', '2021-03-17 12:37:35', '2021-03-17 13:32:46'),
(95, 18, 15, 16, 7, 2, 0, 10, 20, '1', '2021-03-17 14:31:10', '2021-03-17 15:18:50'),
(96, 18, 15, 16, 6, 0, 1, 0, 0, '2', '2021-03-17 14:33:23', '2021-03-17 14:43:54'),
(97, 18, 15, 16, 6, 0, 1, 0, 0, '2', '2021-03-17 14:45:04', '2021-03-17 14:51:28'),
(98, 18, 15, 16, 7, 0, 1, 0, 0, '1', '2021-03-17 14:51:40', '2021-03-17 15:18:50'),
(99, 18, 15, 16, 7, 2, 0, 0, 0, '1', '2021-03-17 14:52:30', '2021-03-17 15:18:50'),
(100, 17, 15, 16, 9, 2, 1, 0, 0, '1', '2021-03-17 14:53:37', '2021-03-17 15:18:43'),
(101, 17, 15, 16, 8, 2, 0, 30, 60, '1', '2021-03-17 14:54:09', '2021-03-17 15:18:47'),
(102, 17, 15, 17, 2, 2, 0, 10, 16, '1', '2021-03-17 15:45:52', '2021-03-17 17:30:43'),
(103, 17, 16, 14, 6, 0, 1, 0, 0, '2', '2021-03-18 15:14:26', '2021-03-18 15:14:59'),
(104, 17, 16, 14, 8, 2, 0, 10, 20, '1', '2021-03-18 15:20:18', '2021-03-18 15:33:29'),
(105, 17, 16, 15, 2, 2, 0, 0, 0, '1', '2021-03-18 15:32:35', '2021-03-18 15:58:21'),
(106, 17, 16, 15, 1, 2, 1, 20, 42, '2', '2021-03-18 15:32:47', '2021-03-18 16:18:24'),
(107, 17, 16, 15, 5, 2, 0, 20, 32, '1', '2021-03-18 16:21:20', '2021-03-18 17:18:30'),
(108, 17, 16, 15, 5, 2, 0, 10, 16, '1', '2021-03-18 16:33:22', '2021-03-18 17:18:30'),
(109, 17, 17, 13, 3, 2, 1, 10, 22, '1', '2021-03-19 13:37:17', '2021-03-19 14:14:04'),
(110, 17, 18, 14, 4, 2, 1, 10, 21, '2', '2021-03-20 14:06:24', '2021-03-20 14:34:36'),
(111, 17, 18, 14, 5, 2, 1, 10, 21, '1', '2021-03-20 14:56:40', '2021-03-20 15:44:12'),
(112, 17, 18, 15, 4, 2, 1, 10, 21, '1', '2021-03-20 15:53:39', '2021-03-20 16:49:48'),
(113, 8, 21, 21, 3, 2, 0, 10, 12, '2', '2021-03-26 08:02:41', '2021-03-26 08:44:13'),
(114, 8, 21, 21, 3, 4, 0, 40, 56, '1', '2021-03-26 08:02:59', '2021-03-26 10:35:56'),
(115, 8, 21, 21, 5, 0, 1, 15, 18, '2', '2021-03-26 08:03:20', '2021-03-26 11:34:49'),
(116, 8, 21, 22, 3, 2, 0, 10, 14, '2', '2021-03-26 12:39:02', '2021-03-26 14:48:02'),
(117, 8, 21, 22, 5, 2, 1, 10, 17, '1', '2021-03-26 12:39:12', '2021-03-26 15:27:33'),
(118, 8, 21, 22, 9, 3, 0, 10, 19, '1', '2021-03-26 12:39:25', '2021-03-26 15:57:41'),
(119, 20, 21, 22, 9, 2, 0, 0, 0, '1', '2021-03-26 13:28:00', '2021-03-26 15:57:41'),
(120, 20, 21, 22, 9, 2, 0, 200, 320, '1', '2021-03-26 13:31:09', '2021-03-26 15:57:41'),
(121, 17, 21, 22, 9, 2, 1, 10, 21, '1', '2021-03-26 13:54:59', '2021-03-26 15:57:41'),
(122, 20, 22, 22, 1, 2, 0, 200, 280, '2', '2021-03-28 12:10:57', '2021-03-28 12:21:19'),
(123, 20, 22, 22, 2, 2, 0, 200, 280, '1', '2021-03-28 12:15:06', '2021-03-28 12:35:03'),
(124, 20, 22, 22, 3, 2, 0, 100, 140, '2', '2021-03-28 12:15:25', '2021-03-28 12:34:56'),
(125, 8, 22, 22, 2, 2, 0, 10, 14, '1', '2021-03-28 12:16:30', '2021-03-28 12:35:03'),
(126, 20, 22, 22, 4, 2, 0, 200, 280, '2', '2021-03-28 12:24:23', '2021-03-28 13:11:18'),
(127, 20, 22, 22, 5, 2, 0, 200, 280, '2', '2021-03-28 12:36:14', '2021-03-28 13:39:08'),
(128, 20, 22, 22, 5, 2, 2, 200, 400, '1', '2021-03-28 13:15:24', '2021-03-28 13:42:18'),
(129, 20, 22, 22, 7, 2, 0, 100, 140, '2', '2021-03-28 13:18:50', '2021-03-28 13:56:29'),
(130, 20, 22, 22, 8, 2, 0, 200, 360, '2', '2021-03-28 13:40:43', '2021-03-28 14:57:45'),
(131, 20, 22, 22, 8, 2, 1, 100, 230, '2', '2021-03-28 13:57:18', '2021-03-28 14:57:45'),
(132, 20, 22, 22, 6, 2, 1, 100, 200, '2', '2021-03-28 13:57:33', '2021-03-28 15:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_score`
--

CREATE TABLE `cricket_score` (
  `cricket_score_id` bigint(20) NOT NULL,
  `cricket_score_cricket_id` bigint(20) NOT NULL,
  `cricket_score_team_id` bigint(20) NOT NULL,
  `cricket_score_player_id` bigint(20) NOT NULL,
  `cricket_score_player_name` varchar(1000) NOT NULL,
  `cricket_score_player_four` int(11) NOT NULL,
  `cricket_score_player_six` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_score`
--

INSERT INTO `cricket_score` (`cricket_score_id`, `cricket_score_cricket_id`, `cricket_score_team_id`, `cricket_score_player_id`, `cricket_score_player_name`, `cricket_score_player_four`, `cricket_score_player_six`) VALUES
(32, 4, 5, 7, 'N scvier', 3, 0),
(34, 4, 5, 1, 'A jones', 1, 0),
(90, 7, 7, 2, 'FINCH', 0, 0),
(93, 7, 7, 5, 'STOINIS', 0, 0),
(118, 10, 12, 3, 'M Maddy', 2, 0),
(121, 10, 12, 6, 'K Ali', 0, 0),
(146, 13, 14, 3, 'Virat kohli', 5, 3),
(147, 13, 14, 1, 'Shreyas iyer', 0, 0),
(148, 13, 14, 8, 'Rishab pant', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` bigint(20) NOT NULL,
  `team_category_id` bigint(20) NOT NULL,
  `team_name` varchar(20000) NOT NULL,
  `player1` varchar(2000) NOT NULL,
  `player2` varchar(2000) NOT NULL,
  `player3` varchar(2000) NOT NULL,
  `player4` varchar(2000) NOT NULL,
  `player5` varchar(2000) NOT NULL,
  `player6` varchar(2000) NOT NULL,
  `player7` varchar(2000) NOT NULL,
  `player8` varchar(2000) NOT NULL,
  `player9` varchar(2000) NOT NULL,
  `player10` varchar(2000) NOT NULL,
  `player11` varchar(2000) NOT NULL,
  `player12` varchar(2000) NOT NULL,
  `team_delete` tinyint(1) NOT NULL,
  `team_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `team_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_category_id`, `team_name`, `player1`, `player2`, `player3`, `player4`, `player5`, `player6`, `player7`, `player8`, `player9`, `player10`, `player11`, `player12`, `team_delete`, `team_added_date`, `team_updated_date`) VALUES
(1, 1, 'Royal Challengers Bangalore', 'gurram balaji', 'p2', 'p3', 'p4', 'p5', 'p6', 'Virat kohili', 'p8', 'p9', 'p10', 'p11', 'p12', 1, '2021-01-07 12:51:46', '2021-03-03 03:41:06'),
(2, 1, 'Mi', 'mi1', 'mi2', 'mi3', 'mi4', 'mi5', 'mi6', 'mi7', 'mi8', 'mi9', 'mi10', 'mi11', 'mi12', 1, '2021-01-07 12:51:46', '2021-03-07 14:12:56'),
(3, 1, 'KKR', 'cheteshwer pujara', 'k2', 'k3', 'k4', 'k5', 'k6', 'k7', 'k8', 'k9', 'k10', 'k11', 'k12', 1, '2021-01-08 09:33:17', '2021-03-03 03:41:18'),
(4, 1, 'New Zealand women', 'K martin', 'A sattreth', 'M green', 'T newton', 'A kerr', 'S devine', 'H jenson', 'B halliday', 'R mair', 'L kasperek', 'J kerr', '', 1, '2021-03-03 01:26:43', '2021-03-11 11:22:07'),
(5, 1, 'England women', 'A jones', 'D wyatt', 'T beaumont', 'H knight', 'F davis', 'S dunkley ', 'N scvier', 'S glen', 'M villiers', 'S eccelstone', 'T farrant', '', 1, '2021-03-03 01:30:07', '2021-03-11 11:22:14'),
(6, 1, 'NEWZEALAND', 'GUPTILL', 'SEIFERT', 'WILLIAMSON', 'NEESHAM', 'GLENN PHILLIPS', 'CONVEY', 'SANTNER', 'SOUTHEE', 'TRENT BOULT', 'ISHA SODHI', 'JAMIESON', '', 1, '2021-03-03 03:44:10', '2021-03-07 14:12:43'),
(7, 1, 'AUSTRALIA', 'WADE', 'FINCH', 'JOSH PHILLIPS', 'MAXWELL', 'STOINIS', 'AGAR', 'MITCHELL MARSH', 'DANIEL SAMS', 'JHEY RECHARDSON', 'KANE RECHARDSON', 'ADAM ZAMPA', '', 1, '2021-03-03 03:46:42', '2021-03-07 14:12:51'),
(8, 1, 'Raval sporting', 'K patel', 'K datta', 'G siddu', 'L singh', 'D massod', 'G maghayava', 'A das', 'D Singh 2', 'S jangra', 'M bathani', 'M rizwan', '', 1, '2021-03-04 04:25:34', '2021-03-07 14:13:53'),
(9, 1, 'Khairan', 'Q zulifikar', 'E hussain', 'M naeem', 'M Rizwan', 'M umarw', 'J asghar', 'A ahmaed', 'M ali', 'J ali', 'D abdulla', 'A wadood', '', 1, '2021-03-04 04:28:06', '2021-03-07 14:13:58'),
(10, 1, 'Westindies', 'Simmons', 'Gayle', 'Lewis', 'Pooran', 'Holder', 'DJ Brevo', 'Pollard', 'Fabian allen', 'Edwards', 'McCoy', 'Sinclair', '', 1, '2021-03-07 14:20:27', '2021-03-26 06:48:16'),
(11, 1, 'Srilanka', 'Gunathilaka', 'Nissanka', 'Matthews', 'Chandimal', 'Hasaranga', 'Thisara perera', 'Dickwella', 'Ashen Bandara', 'Sandakan', 'Chameera', 'Dhananjay', '', 1, '2021-03-07 14:22:16', '2021-03-26 06:48:21'),
(12, 1, 'ENGLAND LEGENDS', 'P Mustard', 'Pietersen', 'M Maddy', 'C Schofield', 'G Hamilton', 'K Ali', 'J Tredwell', 'C Tremlett', 'Panesar', 'RJ Sidebotton', 'JIM Trougton', 'Usman Afzal', 1, '2021-03-11 11:25:05', '2021-03-26 06:32:47'),
(13, 1, 'SOUTH AFRICA LEGENDS', 'Andrew puttick', 'Morne van', 'Alviro peterson', 'jonty rhodes', 'Zander de bruyn', 'justin kemp', 'Garnett kruger', 'Roger telemacus', 'Thandi Tshabalala', 'Monde zondeki', 'makhaya nitni', '', 1, '2021-03-11 11:31:05', '2021-03-26 06:32:53'),
(14, 1, 'India', 'Rohith kumar', 'T natarajan', 'Virat kohli', 'surya kumar yadav', 'Rishab pant', 'Hardik pandya', 'Shreyas iyer', 'Washington sundar', 'Shardul thakur', 'Bhuvaneshwar kumar', 'Chahal', '', 1, '2021-03-12 07:38:42', '2021-03-26 06:48:10'),
(15, 1, 'England', 'Jason Roy', 'Jos Buttler', 'David malan', 'Bairstow', 'Eoin morgan', 'Ben stokes', 'sam surran', 'Adil Rashid', 'Chris Jordon', 'Jofra Archer', 'Mark wood', '', 1, '2021-03-12 07:41:41', '2021-03-26 06:41:52'),
(16, 1, 'India legend', 'Sehwag', 'Tendulkar', 'M Kaif', 'Yuvraj', 'Vinay kumar', 'Yusuf patan', 'Irfan patan', 'Naman ojha', 'Gony', 'Munaf patel', 'Progyan ojha', '', 1, '2021-03-13 09:03:51', '2021-03-26 06:33:03'),
(17, 1, 'West Indies  legend', 'Dwayne smith', 'Ridley jacobs', 'Narsingh deonarine', 'Brian lara', 'William perkins', 'Kirik edwards', 'Tino best', 'Mahindra nagamootoo', 'Sulieman benn', 'Dinanth ramnarinr', 'Ryan austin', '', 1, '2021-03-17 10:54:31', '2021-03-26 06:48:25'),
(18, 1, 'Srilanka legends', 'Sanath jayasurya', 'Tilkaratne dilshan', 'Upur taranga', 'Charmare silva', 'kaushalya  weeraratne', 'Chinthaka jayasinghe', 'Russel arnold', 'Farveez maharoof', 'Nuvan kulasekara', 'Dhamika prasad', 'Ranga a herath', '', 1, '2021-03-19 12:18:07', '2021-03-26 06:48:41'),
(19, 1, 'indian womens', 'shafali verma', 'smriti mandana', 'Harleen deol', 'rodriguezimran bahadhur', 'richa gosh', 'deepti sharma', 'Arundati reddy', 'Simran bahadhur ', 'Radha yadav', 'rajeshwari', 'Ayushi', '', 0, '2021-03-23 13:27:07', '2021-03-23 13:27:07'),
(20, 1, 'south africa womens', 'lizell le', 'anne bosch', 'sune luus', 'laura', 'faye tunnich', 'lara goodal', 'nadine dee', 'sinalo jafta', 'shabnim', 'nondmiso', 'tumi', '', 0, '2021-03-23 13:28:52', '2021-03-23 13:28:52'),
(21, 1, 'India ', 'Rohit sharma', 'Shikhar dhawan', 'Virat kohli', 'KL Rahul', 'Hardik pandya', 'Krunal pandya', 'Rishab pant', 'Shardul takur', 'Bhuvaneshwar kumar', 'Kuldeep yadav', 'Prasidh krishna', '', 0, '2021-03-26 06:35:15', '2021-03-26 10:35:33'),
(22, 1, 'England', 'Jason Roy', 'Johnny bairstow', 'Ben stokes', 'David malan', 'Buttler', 'Sam curran', 'Liam livinstone', 'Moen ali', 'Adil rashid', 'Reece topley', 'Mark wood', '', 0, '2021-03-26 06:41:21', '2021-03-28 12:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` bigint(20) NOT NULL,
  `transaction_user_id` bigint(20) NOT NULL,
  `transaction_send_to` varchar(1100) NOT NULL,
  `transaction_amount` varchar(2000) NOT NULL,
  `transaction_method` varchar(2000) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `transaction_added_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_user_id`, `transaction_send_to`, `transaction_amount`, `transaction_method`, `transaction_date`, `transaction_added_by`) VALUES
(13, 4, '7418529632', '-100', 'pay friend', '2021-02-28 12:36:45', 4),
(14, 6, '7418529632', '100', 'pay friend', '2021-02-28 12:36:46', 4),
(15, 4, '9611174320', '-500', 'pay friend', '2021-02-28 12:38:59', 4),
(16, 4, '9611174320', '500', 'pay friend', '2021-02-28 12:39:00', 4),
(17, 4, '7418529632', '-300', 'pay friend', '2021-02-28 12:39:58', 4),
(18, 6, '7418529632', '300', 'pay friend', '2021-02-28 12:39:58', 4),
(19, 4, '7418529632', '-500', 'pay friend', '2021-02-28 12:42:18', 4),
(20, 6, '7418529632', '500', 'pay friend', '2021-02-28 12:42:18', 4),
(21, 4, '7418529632', '-50', 'pay friend', '2021-02-28 12:43:36', 4),
(22, 6, '7418529632', '50', 'pay friend', '2021-02-28 12:43:36', 4),
(23, 4, '7418529632', '-400', 'pay friend', '2021-02-28 12:55:44', 4),
(24, 6, '7418529632', '400', 'pay friend', '2021-02-28 12:55:45', 4),
(25, 6, '9611174320', '-1000', 'pay friend', '2021-02-28 12:57:27', 6),
(26, 4, '9611174320', '1000', 'pay friend', '2021-02-28 12:57:27', 6),
(27, 6, '9980783927', '-30', 'pay friend', '2021-03-03 06:39:05', 6),
(28, 8, '9980783927', '30', 'pay friend', '2021-03-03 06:39:05', 6),
(29, 6, '9986806786', '-40', 'pay friend', '2021-03-03 07:01:13', 6),
(30, 12, '9986806786', '40', 'pay friend', '2021-03-03 07:01:13', 6),
(31, 12, '9980783927', '-30', 'pay friend', '2021-03-03 07:02:58', 12),
(32, 8, '9980783927', '30', 'pay friend', '2021-03-03 07:02:58', 12),
(33, 6, '9980783927', '-50', 'pay friend', '2021-03-03 14:00:43', 6),
(34, 8, '9980783927', '50', 'pay friend', '2021-03-03 14:00:43', 6),
(35, 6, '9980783927', '-30', 'pay friend', '2021-03-04 00:47:08', 6),
(36, 8, '9980783927', '30', 'pay friend', '2021-03-04 00:47:08', 6),
(37, 6, '9980783927', '-30', 'pay friend', '2021-03-06 12:37:22', 6),
(38, 8, '9980783927', '30', 'pay friend', '2021-03-06 12:37:22', 6),
(39, 6, '9980783927', '-23', 'pay friend', '2021-03-07 12:46:50', 6),
(40, 8, '9980783927', '23', 'pay friend', '2021-03-07 12:46:50', 6),
(41, 6, '9980783927', '-10', 'pay friend', '2021-03-07 16:35:41', 6),
(42, 8, '9980783927', '10', 'pay friend', '2021-03-07 16:35:41', 6),
(43, 6, '9980783927', '-30', 'pay friend', '2021-03-07 18:05:24', 6),
(44, 8, '9980783927', '30', 'pay friend', '2021-03-07 18:05:24', 6),
(45, 6, '9980783927', '-30', 'pay friend', '2021-03-10 01:11:00', 6),
(46, 8, '9980783927', '30', 'pay friend', '2021-03-10 01:11:00', 6),
(47, 6, '8951327090', '-32', 'pay friend', '2021-03-18 15:32:07', 6),
(48, 17, '8951327090', '32', 'pay friend', '2021-03-18 15:32:07', 6),
(49, 9, '9980783927', '-50', 'pay friend', '2021-03-22 07:16:34', 9),
(50, 8, '9980783927', '50', 'pay friend', '2021-03-22 07:16:34', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `user_email` varchar(5000) NOT NULL,
  `user_password` varchar(5000) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_photo` varchar(2000) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_dob` date NOT NULL,
  `user_delete` tinyint(1) NOT NULL,
  `user_added_date` date NOT NULL DEFAULT current_timestamp(),
  `user_amount` bigint(20) NOT NULL,
  `updated_by_id` bigint(20) NOT NULL,
  `user_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `referal_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `first_name`, `last_name`, `user_phone`, `user_photo`, `user_status`, `user_dob`, `user_delete`, `user_added_date`, `user_amount`, `updated_by_id`, `user_updated_date`, `referal_by`) VALUES
(6, 'kiran@gmail.com', '$2y$10$o8hbSR1agoDaSQdcsxZo2.2P1aRYx3FPePmAHpDLiTjsZRD7w8Ek6', 'k', 'kiran', 9483434271, '', 1, '1994-01-04', 0, '2021-01-13', 320, 1, '2021-03-28 14:34:14', 0),
(8, 'swamy@gmail.com', '$2y$10$Ci9Y.ItMM/A5.j8fItfEE.njR0WxXZTUS0hfBSTISgn0uhyq/5YkO', 'Swamy', 'H', 9980783927, '', 1, '2000-03-02', 0, '2021-03-02', 5, 5, '2021-03-28 12:16:30', 0),
(9, 'shabir@123', '$2y$10$.e9xhQ.i3jQT5GN0y/cdweLPT26AmTCF9eJtx6N9vuCq0A.ekQBzm', 'Shabir', 'Anna', 9620037786, '', 1, '1985-03-03', 0, '2021-03-03', 100, 0, '2021-03-23 13:24:05', 0),
(10, 'akash@123', '$2y$10$kHze3V6yKRNy1okaAf4xoOYlGfZs96cA81tf4TwXyA0LhOjnXbcra', 'Akash', 'A', 9538446200, '', 1, '1990-03-03', 0, '2021-03-03', 200, 0, '2021-03-03 06:48:54', 0),
(11, 'valli@123', '$2y$10$PhsnVnNFV1ugbfJT/jTyuOnZmZo8Af/vGMaT2/XUUYyNzYigwQC8W', 'Valli', 'Bhaji', 9916278630, '', 1, '1989-03-03', 0, '2021-03-03', 200, 0, '2021-03-03 06:51:06', 0),
(12, 'moula@123', '$2y$10$zgJKAqiAdSvydn1C8QV2ouQ0tucZNjscICXgvNoNf3e0iqI0.gwDC', 'Mohammed', 'M', 9986806786, '', 1, '1988-03-03', 0, '2021-03-03', 200, 0, '2021-03-03 07:02:58', 0),
(13, 'maruti@123', '$2y$10$0kIs4dM1mP6PScLQsfcVdeCcwUerpio5eAldPvmUred4w0Q1./3uu', 'Maruti', 'Yadav', 9066619415, '', 1, '1996-04-21', 0, '2021-03-04', 200, 0, '2021-03-04 06:44:26', 0),
(14, '101@gmail.com', '$2y$10$VidQbEENwC6iFUUPm1OMJOF0omX4m1kZgxwXeUIa48aaY.nFHmtku', 'Kartjik', 'K', 0, '', 1, '1998-03-07', 0, '2021-03-07', 50, 0, '2021-03-07 17:43:30', 0),
(15, 'raja15@gmail.com', '$2y$10$tczq4IY8k.vi4K0NVFHK8O.kFUYyZS8Tm0fNcabe7WRQ9RWmVhuCm', 'Raja', 'Manikanta', 6360176105, '', 1, '1992-03-11', 0, '2021-03-11', 0, 0, '2021-03-14 07:22:04', 0),
(16, 'kumar16@gmail.com', '$2y$10$6Cka7ksOxjtfGlIB4ohDw.lEr2KKa6Rrh0IFdY8fgOsuSPjKrfNoK', 'Kumar', 'Swamy', 8494887211, '', 1, '1988-03-11', 0, '2021-03-11', 0, 0, '2021-03-16 13:33:58', 0),
(17, 'chiru@gmail.com', '$2y$10$7W7tvSmdUAGukzLtJmR/gOGzFXHPiAkMRDbse8g48OcBtfzE2sbSO', 'Chiru', 'G', 8951327090, '', 1, '2002-12-05', 0, '2021-03-17', 3, 0, '2021-03-26 13:54:59', 0),
(18, 'yerri@123', '$2y$10$FtFYQKi5XHVZ5rmabj1ZnerjvgXo5RA4e6IKYZK9JnoBt6qmtJ0tu', 'Yerri', 'G', 8722137755, '', 1, '2021-03-17', 0, '2021-03-17', 90, 1, '2021-03-17 14:31:10', 17),
(19, 'Bvinay@gmail.com', '$2y$10$EZQX3nTVuK4xWo2ESGMWUuInlF5fSUUdMzP33wL88MjIbLLTmrwbS', 'B', 'Vinay', 7676540229, '', 1, '1999-03-17', 0, '2021-03-17', 50, 0, '2021-03-26 09:10:18', 17),
(20, '000020@gmail.com', '$2y$10$iF6vRWvoiSnYIKWdV/EEMO8q.oFRs.24/M8EUYGGFFHsXQISB9v/6', 'Manju ', 'K', 8296717411, '', 1, '1998-01-29', 0, '2021-03-25', 450, 1, '2021-03-28 15:10:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_id` bigint(20) NOT NULL,
  `withdraw_user_id` bigint(20) NOT NULL,
  `withdraw_amount` bigint(20) NOT NULL,
  `withdraw_request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `withdraw_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `withdrawn` int(1) NOT NULL,
  `withdrawn_by` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`withdraw_id`, `withdraw_user_id`, `withdraw_amount`, `withdraw_request_date`, `withdraw_update_date`, `withdrawn`, `withdrawn_by`) VALUES
(1, 4, 100, '2021-02-15 19:05:10', '2021-02-15 21:06:30', 1, '1'),
(2, 4, 50, '2021-02-27 19:11:34', '2021-03-18 13:47:32', 2, '1'),
(3, 4, 300, '2021-02-27 19:12:44', '2021-03-18 13:47:37', 2, '1'),
(4, 9, 50, '2021-03-22 07:14:59', '2021-03-23 13:24:05', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cricket`
--
ALTER TABLE `cricket`
  ADD PRIMARY KEY (`cricket_id`);

--
-- Indexes for table `cricket_bet`
--
ALTER TABLE `cricket_bet`
  ADD PRIMARY KEY (`cricket_bet_id`);

--
-- Indexes for table `cricket_score`
--
ALTER TABLE `cricket_score`
  ADD PRIMARY KEY (`cricket_score_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`withdraw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cricket`
--
ALTER TABLE `cricket`
  MODIFY `cricket_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cricket_bet`
--
ALTER TABLE `cricket_bet`
  MODIFY `cricket_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `cricket_score`
--
ALTER TABLE `cricket_score`
  MODIFY `cricket_score_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
