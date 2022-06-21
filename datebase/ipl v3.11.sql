-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 08:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
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
  `withdraw_view` tinyint(1) NOT NULL,
  `withdraw_edit` tinyint(1) NOT NULL,
  `withdraw_del` tinyint(1) NOT NULL,
  `cricket_overs_view` tinyint(1) NOT NULL,
  `cricket_overs_create` tinyint(1) NOT NULL,
  `cricket_overs_edit` tinyint(1) NOT NULL,
  `cricket_overs_del` tinyint(1) NOT NULL,
  `cricket_overs_special` tinyint(1) NOT NULL,
  `cricket_target_view` tinyint(1) NOT NULL,
  `cricket_target_special` tinyint(1) NOT NULL,
  `cricket_match_view` tinyint(1) NOT NULL,
  `cricket_match_create` tinyint(1) NOT NULL,
  `cricket_match_edit` tinyint(1) NOT NULL,
  `cricket_match_del` tinyint(1) NOT NULL,
  `cricket_match_special` tinyint(1) NOT NULL,
  `cricket_toss_view` tinyint(1) NOT NULL,
  `cricket_toss_create` tinyint(1) NOT NULL,
  `cricket_toss_edit` tinyint(1) NOT NULL,
  `cricket_toss_del` tinyint(1) NOT NULL,
  `cricket_toss_special` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` date NOT NULL DEFAULT current_timestamp(),
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_photo`, `admin_dob`, `admin_status`, `users_view`, `users_create`, `users_edit`, `users_del`, `admin_view`, `admin_create`, `admin_edit`, `admin_del`, `cricket_view`, `cricket_create`, `cricket_edit`, `cricket_del`, `teams_view`, `teams_create`, `teams_edit`, `teams_del`, `category_view`, `category_create`, `category_edit`, `category_del`, `cricket_score_view`, `cricket_score_create`, `cricket_score_edit`, `cricket_score_del`, `users_special`, `admin_special`, `cricket_special`, `contact_view`, `contact_edit`, `withdraw_view`, `withdraw_edit`, `withdraw_del`, `cricket_overs_view`, `cricket_overs_create`, `cricket_overs_edit`, `cricket_overs_del`, `cricket_overs_special`, `cricket_target_view`, `cricket_target_special`, `cricket_match_view`, `cricket_match_create`, `cricket_match_edit`, `cricket_match_del`, `cricket_match_special`, `cricket_toss_view`, `cricket_toss_create`, `cricket_toss_edit`, `cricket_toss_del`, `cricket_toss_special`, `admin_delete`, `admin_added_date`, `admin_updated_date`) VALUES
(1, 'admin@admin.com', '$2y$10$k.hbtkYnr4HMzIsCbOGE.e9UhR/KsfoHmB1AyaOp6fARkvzylNDOq', 'Elon', 96969696, 'alan turing.jpg', '2020-11-10', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2021-01-04', '2021-04-07 19:33:48'),
(4, 'honnurswamy@123', '$2y$10$R119FhizTGB6RYfN97i4ye41ZDjQOqp3vI/890sT2IHlTeO49VIA6', 'Swamu', 9980783927, '', '1992-03-02', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2021-03-02', '2021-03-03 06:31:06'),
(5, '369@gmail.com', '$2y$10$U6HXw0X4Bi7FMsLQJnReY.W6Z.183UljoXOSTPMUBTlLzWN0ojOvC', 'Swamy', 999000246, '', '1993-03-03', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2021-03-03', '2021-03-03 06:34:09');

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
(4, 'lottry', 'lottry icon', 1, '2021-04-07 18:54:49', '2021-04-07 18:55:40');

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

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_country`, `contact_subject`, `contact_view`) VALUES
(9, 'balaji', 'balaji@gmail.com', '123456789', 'india', 'sdfertgyu', 1),
(10, 'vinay', 'vinay100@gmail.com', '748596415', 'india', 'sdfertgyu', 0);

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
  `starting_four` int(11) NOT NULL,
  `starting_six` int(11) NOT NULL,
  `cricket_date` date NOT NULL,
  `cricket_time` time NOT NULL,
  `cricket_active` tinyint(1) NOT NULL,
  `cricket_delete` tinyint(1) NOT NULL,
  `cricket_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cricket_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_target_suspended` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`cricket_id`, `cricket_name`, `cricket_category`, `cricket_team1_id`, `cricket_team1_player1_four`, `cricket_team1_player1_six`, `cricket_team1_player1_delete`, `cricket_team1_player2_four`, `cricket_team1_player2_six`, `cricket_team1_player2_delete`, `cricket_team1_player3_four`, `cricket_team1_player3_six`, `cricket_team1_player3_delete`, `cricket_team1_player4_four`, `cricket_team1_player4_six`, `cricket_team1_player4_delete`, `cricket_team1_player5_four`, `cricket_team1_player5_six`, `cricket_team1_player5_delete`, `cricket_team1_player6_four`, `cricket_team1_player6_six`, `cricket_team1_player6_delete`, `cricket_team1_player7_four`, `cricket_team1_player7_six`, `cricket_team1_player7_delete`, `cricket_team1_player8_four`, `cricket_team1_player8_six`, `cricket_team1_player8_delete`, `cricket_team1_player9_four`, `cricket_team1_player9_six`, `cricket_team1_player9_delete`, `cricket_team1_player10_four`, `cricket_team1_player10_six`, `cricket_team1_player10_delete`, `cricket_team1_player11_four`, `cricket_team1_player11_six`, `cricket_team1_player11_delete`, `cricket_team1_player12_four`, `cricket_team1_player12_six`, `cricket_team1_player12_delete`, `cricket_team2_id`, `cricket_team2_player1_four`, `cricket_team2_player1_six`, `cricket_team2_player1_delete`, `cricket_team2_player2_four`, `cricket_team2_player2_six`, `cricket_team2_player2_delete`, `cricket_team2_player3_four`, `cricket_team2_player3_six`, `cricket_team2_player3_delete`, `cricket_team2_player4_four`, `cricket_team2_player4_six`, `cricket_team2_player4_delete`, `cricket_team2_player5_four`, `cricket_team2_player5_six`, `cricket_team2_player5_delete`, `cricket_team2_player6_four`, `cricket_team2_player6_six`, `cricket_team2_player6_delete`, `cricket_team2_player7_four`, `cricket_team2_player7_six`, `cricket_team2_player7_delete`, `cricket_team2_player8_four`, `cricket_team2_player8_six`, `cricket_team2_player8_delete`, `cricket_team2_player9_four`, `cricket_team2_player9_six`, `cricket_team2_player9_delete`, `cricket_team2_player10_four`, `cricket_team2_player10_six`, `cricket_team2_player10_delete`, `cricket_team2_player11_four`, `cricket_team2_player11_six`, `cricket_team2_player11_delete`, `cricket_team2_player12_four`, `cricket_team2_player12_six`, `cricket_team2_player12_delete`, `starting_four`, `starting_six`, `cricket_date`, `cricket_time`, `cricket_active`, `cricket_delete`, `cricket_added_date`, `cricket_updated_date`, `cricket_target_suspended`) VALUES
(24, 'balaji Vs kiran', 1, 23, 1, 2, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3, '2021-04-08', '02:39:00', 1, 0, '2021-04-07 19:07:12', '2021-04-08 16:13:33', 1);

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
  `cricket_bet_placed_amount` float NOT NULL,
  `cricket_bet_win_amount` float NOT NULL,
  `cricket_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_bet_added_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cricket_bet_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_bet`
--

INSERT INTO `cricket_bet` (`cricket_bet_id`, `cricket_bet_users_id`, `cricket_bet_cricket_id`, `cricket_bet_team_id`, `cricket_bet_player_id`, `cricket_bet_four`, `cricket_bet_six`, `cricket_bet_placed_amount`, `cricket_bet_win_amount`, `cricket_bet_win`, `cricket_bet_added_date`, `cricket_bet_updated_date`) VALUES
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
(132, 20, 22, 22, 6, 2, 1, 100, 200, '2', '2021-03-28 13:57:33', '2021-03-28 15:10:54'),
(133, 22, 4, 4, 10, 2, 0, 100, 300, '2', '2021-03-29 17:01:23', '2021-03-29 17:07:56'),
(134, 22, 4, 4, 10, 0, 1, 50, 125, '2', '2021-03-29 17:05:15', '2021-03-29 17:08:18'),
(135, 22, 4, 4, 10, 2, 2, 50, 300, '1', '2021-03-29 17:05:39', '2021-03-29 17:09:38'),
(136, 22, 4, 5, 5, 0, 0, 50, 50, '1', '2021-03-29 17:16:13', '2021-03-29 17:17:52'),
(137, 22, 4, 5, 6, 2, 0, 10, 18, '1', '2021-03-29 17:34:07', '2021-03-29 17:59:28'),
(138, 22, 4, 4, 12, 2, 0, 0, 0, '1', '2021-03-29 17:34:23', '2021-03-29 19:05:16'),
(139, 22, 4, 4, 12, 2, 0, 0, 0, '1', '2021-03-29 17:34:28', '2021-03-29 19:05:16'),
(140, 22, 4, 5, 6, 2, 0, 0, 0, '1', '2021-03-29 17:34:37', '2021-03-29 17:59:29'),
(141, 22, 4, 5, 6, 2, 0, 0, 0, '1', '2021-03-29 17:35:10', '2021-03-29 17:59:29'),
(142, 22, 4, 4, 12, 2, 0, 0, 0, '1', '2021-03-29 17:35:13', '2021-03-29 19:05:16'),
(143, 22, 4, 5, 6, 0, 0, 40, 40, '1', '2021-03-29 17:45:16', '2021-03-29 17:59:29'),
(144, 22, 4, 5, 6, 0, 0, 50, 50, '1', '2021-03-29 17:46:47', '2021-03-29 17:59:29'),
(145, 22, 4, 5, 6, 0, 0, 20, 20, '1', '2021-03-29 17:47:55', '2021-03-29 17:59:29'),
(146, 22, 4, 5, 6, 0, 0, 10, 10, '1', '2021-03-29 17:48:11', '2021-03-29 17:59:29'),
(147, 22, 4, 5, 6, 0, 0, 10, 10, '1', '2021-03-29 17:50:34', '2021-03-29 17:59:29'),
(148, 22, 4, 5, 9, 2, 1, 100, 440, '2', '2021-03-29 18:10:18', '2021-03-29 18:20:47'),
(149, 21, 4, 5, 9, 2, 1, 100, 440, '2', '2021-03-29 18:11:04', '2021-03-29 18:20:47'),
(150, 21, 4, 5, 9, 2, 0, 100, 300, '2', '2021-03-29 18:11:20', '2021-03-29 18:18:50'),
(151, 22, 4, 5, 10, 2, 0, 100, 300, '2', '2021-03-29 18:24:18', '2021-03-29 18:36:32'),
(152, 22, 4, 5, 11, 2, 1, 100, 460, '2', '2021-03-29 18:25:12', '2021-03-29 18:50:34'),
(153, 21, 4, 5, 10, 2, 0, 150, 450, '2', '2021-03-29 18:27:17', '2021-03-29 18:36:32'),
(154, 21, 4, 5, 11, 2, 0, 100, 300, '2', '2021-03-29 18:28:44', '2021-03-29 18:33:43'),
(155, 21, 24, 23, 3, 3, 4, 100, 100, '0', '2021-04-08 16:05:44', '2021-04-08 16:05:44'),
(156, 21, 24, 23, 5, 3, 0, 50, 50, '0', '2021-04-08 16:07:07', '2021-04-08 16:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_match`
--

CREATE TABLE `cricket_match` (
  `cricket_match_id` bigint(20) NOT NULL,
  `cricket_match_cricket_id` bigint(20) NOT NULL,
  `cricket_match_team1_id` bigint(20) NOT NULL,
  `cricket_match_team2_id` bigint(20) NOT NULL,
  `cricket_match_team1_ratio` float NOT NULL,
  `cricket_match_team2_ratio` float NOT NULL,
  `cricket_match_suspended` tinyint(1) NOT NULL,
  `cricket_match_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_match_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cricket_match_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_match`
--

INSERT INTO `cricket_match` (`cricket_match_id`, `cricket_match_cricket_id`, `cricket_match_team1_id`, `cricket_match_team2_id`, `cricket_match_team1_ratio`, `cricket_match_team2_ratio`, `cricket_match_suspended`, `cricket_match_update_date`, `cricket_match_added_date`, `cricket_match_delete`) VALUES
(6, 24, 23, 24, 2.52, 3.25, 1, '2021-04-08 21:20:31', '2021-04-08 00:54:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cricket_match_bet`
--

CREATE TABLE `cricket_match_bet` (
  `cricket_match_bet_id` bigint(20) NOT NULL,
  `cricket_match_bet_user_id` bigint(20) NOT NULL,
  `cricket_match_bet_cricket_id` bigint(20) NOT NULL,
  `cricket_match_bet_team_id` bigint(20) NOT NULL,
  `cricket_match_bet_bet_amount` float NOT NULL,
  `cricket_match_bet_win_amount` float NOT NULL,
  `cricket_match_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_match_bet_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_match_bet_added_dae` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_match_bet`
--

INSERT INTO `cricket_match_bet` (`cricket_match_bet_id`, `cricket_match_bet_user_id`, `cricket_match_bet_cricket_id`, `cricket_match_bet_team_id`, `cricket_match_bet_bet_amount`, `cricket_match_bet_win_amount`, `cricket_match_bet_win`, `cricket_match_bet_update_date`, `cricket_match_bet_added_dae`) VALUES
(6, 21, 24, 23, 100, 252, '0', '2021-04-08 10:51:18', '2021-04-08 10:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_overs`
--

CREATE TABLE `cricket_overs` (
  `cricket_overs_id` bigint(20) NOT NULL,
  `cricket_overs_cricket_id` bigint(20) NOT NULL,
  `cricket_overs_team_id` bigint(20) NOT NULL,
  `cricket_overs_overs` int(11) NOT NULL,
  `cricket_overs_completed_overs` int(11) NOT NULL DEFAULT -1,
  `cricket_overs_score` varchar(2000) NOT NULL,
  `cricket_overs_yes_ratio` varchar(2000) NOT NULL,
  `cricket_overs_no_ratio` varchar(2000) NOT NULL,
  `cricket_overs_status` tinyint(1) NOT NULL,
  `cricket_overs_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_overs`
--

INSERT INTO `cricket_overs` (`cricket_overs_id`, `cricket_overs_cricket_id`, `cricket_overs_team_id`, `cricket_overs_overs`, `cricket_overs_completed_overs`, `cricket_overs_score`, `cricket_overs_yes_ratio`, `cricket_overs_no_ratio`, `cricket_overs_status`, `cricket_overs_delete`) VALUES
(3, 24, 23, 1, 0, '1.5', '2.5', '1.3', 1, 1),
(4, 24, 23, 5, 2, '5,10,15,20,25', '2.2,2.3,2.4,2.5,2.6', '1.2,1.3,1.4,1.5,1.6', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cricket_overs_bet`
--

CREATE TABLE `cricket_overs_bet` (
  `cricket_overs_bet_id` bigint(20) NOT NULL,
  `cricket_overs_bet_user_id` bigint(20) NOT NULL,
  `cricket_overs_bet_cricket_overs_id` bigint(20) NOT NULL,
  `cricket_overs_bet_overs_no` int(11) NOT NULL,
  `cricket_overs_bet_bet_amount` float NOT NULL,
  `cricket_overs_bet_win_amount` float NOT NULL,
  `cricket_overs_bet_score` float NOT NULL,
  `cricket_overs_bet_yes_no` tinyint(1) NOT NULL,
  `cricket_overs_bet_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_overs_bet_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_overs_bet_added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_overs_bet`
--

INSERT INTO `cricket_overs_bet` (`cricket_overs_bet_id`, `cricket_overs_bet_user_id`, `cricket_overs_bet_cricket_overs_id`, `cricket_overs_bet_overs_no`, `cricket_overs_bet_bet_amount`, `cricket_overs_bet_win_amount`, `cricket_overs_bet_score`, `cricket_overs_bet_yes_no`, `cricket_overs_bet_bet_win`, `cricket_overs_bet_update_date`, `cricket_overs_bet_added_date`) VALUES
(9, 21, 4, 1, 10, 22, 5, 0, '1', '2021-04-08 22:41:16', '2021-04-08 22:38:49'),
(10, 21, 4, 1, 10, 22, 5, 0, '1', '2021-04-08 22:41:16', '2021-04-08 22:39:39'),
(11, 21, 4, 2, 10, 23, 10, 0, '1', '2021-04-08 22:42:01', '2021-04-08 22:40:35'),
(12, 21, 4, 4, 10, 15, 20, 1, '0', '2021-04-08 22:42:35', '2021-04-08 22:42:35'),
(13, 21, 4, 5, 50, 80, 25, 1, '0', '2021-04-08 22:42:54', '2021-04-08 22:42:54');

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
(369, 24, 23, 3, 'p3', 1, 1),
(370, 24, 23, 4, 'p4', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cricket_target_bet`
--

CREATE TABLE `cricket_target_bet` (
  `cricket_target_bet_id` bigint(20) NOT NULL,
  `cricket_target_bet_user_id` bigint(20) NOT NULL,
  `cricket_target_bet_cricket_id` bigint(20) NOT NULL,
  `cricket_target_bet_target` bigint(20) NOT NULL,
  `cricket_target_bet_bet_amount` float NOT NULL,
  `cricket_target_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_target_bet_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_target_bet_added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_target_bet`
--

INSERT INTO `cricket_target_bet` (`cricket_target_bet_id`, `cricket_target_bet_user_id`, `cricket_target_bet_cricket_id`, `cricket_target_bet_target`, `cricket_target_bet_bet_amount`, `cricket_target_bet_win`, `cricket_target_bet_update_date`, `cricket_target_bet_added_date`) VALUES
(10, 21, 24, 160, 10, '2', '2021-04-08 21:44:23', '2021-04-08 11:13:09'),
(11, 21, 24, 16, 10, '1', '2021-04-08 21:44:23', '2021-04-08 21:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_toss`
--

CREATE TABLE `cricket_toss` (
  `cricket_toss_id` bigint(20) NOT NULL,
  `cricket_toss_cricket_id` bigint(20) NOT NULL,
  `cricket_toss_team1_id` bigint(20) NOT NULL,
  `cricket_toss_team2_id` bigint(20) NOT NULL,
  `cricket_toss_team1_ratio` float NOT NULL,
  `cricket_toss_team2_ratio` float NOT NULL,
  `cricket_toss_suspended` tinyint(1) NOT NULL,
  `cricket_toss_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_toss_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cricket_toss_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_toss`
--

INSERT INTO `cricket_toss` (`cricket_toss_id`, `cricket_toss_cricket_id`, `cricket_toss_team1_id`, `cricket_toss_team2_id`, `cricket_toss_team1_ratio`, `cricket_toss_team2_ratio`, `cricket_toss_suspended`, `cricket_toss_update_date`, `cricket_toss_added_date`, `cricket_toss_delete`) VALUES
(2, 24, 23, 24, 1, 3.52, 1, '2021-04-08 21:21:06', '2021-04-08 00:59:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cricket_toss_bet`
--

CREATE TABLE `cricket_toss_bet` (
  `cricket_toss_bet_id` bigint(20) NOT NULL,
  `cricket_toss_bet_user_id` bigint(20) NOT NULL,
  `cricket_toss_bet_cricket_id` bigint(20) NOT NULL,
  `cricket_toss_bet_team_id` bigint(20) NOT NULL,
  `cricket_toss_bet_bet_amount` float NOT NULL,
  `cricket_toss_bet_win_amount` float NOT NULL,
  `cricket_toss_bet_win` set('0','1','2') NOT NULL DEFAULT '0',
  `cricket_toss_bet_update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_toss_bet_added_dae` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_toss_bet`
--

INSERT INTO `cricket_toss_bet` (`cricket_toss_bet_id`, `cricket_toss_bet_user_id`, `cricket_toss_bet_cricket_id`, `cricket_toss_bet_team_id`, `cricket_toss_bet_bet_amount`, `cricket_toss_bet_win_amount`, `cricket_toss_bet_win`, `cricket_toss_bet_update_date`, `cricket_toss_bet_added_dae`) VALUES
(7, 21, 24, 24, 40, 140.8, '0', '2021-04-08 10:51:44', '2021-04-08 10:51:44'),
(8, 21, 24, 23, 50, 50, '0', '2021-04-08 21:20:59', '2021-04-08 21:20:59');

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
(23, 1, 'indian womens', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 0, '2021-04-07 18:52:08', '2021-04-07 18:52:08'),
(24, 1, 'India ', 'shafali', 'smriti ', 'Harleen', 'rodriguezimran bahadhur', 'richa gosh', 'deepti sharma', 'Arundati reddy', 'Simran bahadhur ', 'Radha yadav', 'rajeshwari', 'Ayushi', 'vfhgcutvj', 0, '2021-04-07 18:52:45', '2021-04-07 18:56:51');

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
(66, 23, '0', '1000', 'login', '2021-04-08 00:18:12', 1),
(67, 8, 'BY YOUR SELF', '45', 'add amount', '2021-04-08 00:20:36', 1),
(68, 8, 'BY YOUR SELF', '-5', 'add amount', '2021-04-08 00:20:46', 1);

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
  `user_code` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_delete` tinyint(1) NOT NULL,
  `user_added_date` date NOT NULL DEFAULT current_timestamp(),
  `user_amount` float NOT NULL,
  `updated_by_id` bigint(20) NOT NULL,
  `user_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `referal_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `first_name`, `last_name`, `user_phone`, `user_photo`, `user_status`, `user_code`, `user_dob`, `user_delete`, `user_added_date`, `user_amount`, `updated_by_id`, `user_updated_date`, `referal_by`) VALUES
(21, 'balaji@admin.com', '$2y$10$9Qxgcs9UQddgjgRslhUiN.zMUhJIwxLCWltijQJ.C5HSeqUOr0i0a', 'balaji', 'guram', 9611174320, '', 1, '', '2021-03-02', 0, '2021-03-29', 300, 1, '2021-04-08 17:12:53', 4),
(22, 'balaji1@admin.com', '$2y$10$9Qxgcs9UQddgjgRslhUiN.zMUhJIwxLCWltijQJ.C5HSeqUOr0i0a', 'aaaa', 'bbbb', 9632587425, '', 1, '', '2021-03-29', 0, '2021-03-29', 450, 1, '2021-04-08 08:10:45', 4),
(40, 'admin@admin.com', '$2y$10$ZbNqrkKGWMDK9coTJ1MLvul4linSMy.jRl89yvNiCycREaN1CkSmi', 'guram', '', 9632587425, '', 0, '121806', '0000-00-00', 0, '2021-04-08', 0, 0, '2021-04-08 15:05:52', 0),
(41, 'admin1@admin.com', '$2y$10$ldta3sQx8gTR9/Yq9Qy8aeLRp.9DwxyPxW6K/fzdkRMWHlC4ejNoe', 'guram', '', 9632587425, '', 0, '990396', '0000-00-00', 0, '2021-04-08', 0, 0, '2021-04-08 15:06:39', 0),
(47, 'sportselon@gmail.com', '$2y$10$42vJPQXvQ/b1lJ10YjCC1OgBSdiI5WPaULeFHOOfSHHFJO1rpHGIO', 'elon', '', 741852963, '', 1, '0', '0000-00-00', 0, '2021-04-08', 0, 0, '2021-04-08 18:10:01', 0);

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
(5, 21, 200, '2021-04-07 19:03:29', '2021-04-07 19:04:22', 1, '1'),
(6, 25, 100, '2021-04-07 19:03:46', '2021-04-07 19:04:56', 2, '1');

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
-- Indexes for table `cricket_match`
--
ALTER TABLE `cricket_match`
  ADD PRIMARY KEY (`cricket_match_id`);

--
-- Indexes for table `cricket_match_bet`
--
ALTER TABLE `cricket_match_bet`
  ADD PRIMARY KEY (`cricket_match_bet_id`);

--
-- Indexes for table `cricket_overs`
--
ALTER TABLE `cricket_overs`
  ADD PRIMARY KEY (`cricket_overs_id`);

--
-- Indexes for table `cricket_overs_bet`
--
ALTER TABLE `cricket_overs_bet`
  ADD PRIMARY KEY (`cricket_overs_bet_id`);

--
-- Indexes for table `cricket_score`
--
ALTER TABLE `cricket_score`
  ADD PRIMARY KEY (`cricket_score_id`);

--
-- Indexes for table `cricket_target_bet`
--
ALTER TABLE `cricket_target_bet`
  ADD PRIMARY KEY (`cricket_target_bet_id`);

--
-- Indexes for table `cricket_toss`
--
ALTER TABLE `cricket_toss`
  ADD PRIMARY KEY (`cricket_toss_id`);

--
-- Indexes for table `cricket_toss_bet`
--
ALTER TABLE `cricket_toss_bet`
  ADD PRIMARY KEY (`cricket_toss_bet_id`);

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
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cricket`
--
ALTER TABLE `cricket`
  MODIFY `cricket_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cricket_bet`
--
ALTER TABLE `cricket_bet`
  MODIFY `cricket_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `cricket_match`
--
ALTER TABLE `cricket_match`
  MODIFY `cricket_match_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cricket_match_bet`
--
ALTER TABLE `cricket_match_bet`
  MODIFY `cricket_match_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cricket_overs`
--
ALTER TABLE `cricket_overs`
  MODIFY `cricket_overs_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cricket_overs_bet`
--
ALTER TABLE `cricket_overs_bet`
  MODIFY `cricket_overs_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cricket_score`
--
ALTER TABLE `cricket_score`
  MODIFY `cricket_score_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT for table `cricket_target_bet`
--
ALTER TABLE `cricket_target_bet`
  MODIFY `cricket_target_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cricket_toss`
--
ALTER TABLE `cricket_toss`
  MODIFY `cricket_toss_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cricket_toss_bet`
--
ALTER TABLE `cricket_toss_bet`
  MODIFY `cricket_toss_bet_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
