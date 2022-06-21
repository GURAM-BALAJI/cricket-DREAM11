-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 02:23 PM
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
(21, 'balaji@admin.com', '$2y$10$9Qxgcs9UQddgjgRslhUiN.zMUhJIwxLCWltijQJ.C5HSeqUOr0i0a', 'balaji', 'guram', 9611174320, '', 1, '', '2021-03-02', 0, '2021-03-29', 0, 1, '2021-04-08 07:37:50', 4),
(22, 'balaji1@admin.com', '$2y$10$9Qxgcs9UQddgjgRslhUiN.zMUhJIwxLCWltijQJ.C5HSeqUOr0i0a', 'aaaa', 'bbbb', 9632587425, '', 1, '', '2021-03-29', 0, '2021-03-29', 450, 1, '2021-04-08 08:10:45', 4),
(39, 'sportselon@gmail.com', '$2y$10$4.iB/BeqE7Kyg0wO5RzXM.Nspa3I9c1x9a6MnwN3xiJ.WWgUqYe12', 'guram', '', 9632587425, '', 1, '0', '0000-00-00', 0, '2021-04-08', 0, 0, '2021-04-08 12:20:47', 0);

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
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket`
--
ALTER TABLE `cricket`
  MODIFY `cricket_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_bet`
--
ALTER TABLE `cricket_bet`
  MODIFY `cricket_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_match`
--
ALTER TABLE `cricket_match`
  MODIFY `cricket_match_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_match_bet`
--
ALTER TABLE `cricket_match_bet`
  MODIFY `cricket_match_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_overs`
--
ALTER TABLE `cricket_overs`
  MODIFY `cricket_overs_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_overs_bet`
--
ALTER TABLE `cricket_overs_bet`
  MODIFY `cricket_overs_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_score`
--
ALTER TABLE `cricket_score`
  MODIFY `cricket_score_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_target_bet`
--
ALTER TABLE `cricket_target_bet`
  MODIFY `cricket_target_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_toss`
--
ALTER TABLE `cricket_toss`
  MODIFY `cricket_toss_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_toss_bet`
--
ALTER TABLE `cricket_toss_bet`
  MODIFY `cricket_toss_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
