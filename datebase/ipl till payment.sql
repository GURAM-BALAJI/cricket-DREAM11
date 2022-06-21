-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:20 PM
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
  `cricket_session_view` tinyint(1) NOT NULL,
  `message_view` tinyint(1) NOT NULL,
  `lottery_view` tinyint(1) NOT NULL,
  `lottery_create` tinyint(1) NOT NULL,
  `lottery_edit` tinyint(1) NOT NULL,
  `lottery_del` tinyint(1) NOT NULL,
  `lottery_special` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` date NOT NULL DEFAULT current_timestamp(),
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cricket_session_create` tinyint(1) NOT NULL,
  `cricket_session_edit` tinyint(1) NOT NULL,
  `cricket_session_del` tinyint(1) NOT NULL,
  `cricket_session_special` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `cricket_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_bet_added_date` varchar(200) NOT NULL
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
  `cricket_match_bet_rate` float NOT NULL,
  `cricket_match_bet_bet_amount` float NOT NULL,
  `cricket_match_bet_win_amount` float NOT NULL,
  `cricket_match_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_match_bet_added_date` varchar(200) NOT NULL
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
  `cricket_overs_bet_rate` float NOT NULL,
  `cricket_overs_bet_bet_amount` float NOT NULL,
  `cricket_overs_bet_win_amount` float NOT NULL,
  `cricket_overs_bet_score` float NOT NULL,
  `cricket_overs_bet_yes_no` tinyint(1) NOT NULL,
  `cricket_overs_bet_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_overs_bet_added_date` varchar(200) NOT NULL
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
-- Table structure for table `cricket_session`
--

CREATE TABLE `cricket_session` (
  `cricket_session_id` bigint(20) NOT NULL,
  `cricket_session_cricket_id` bigint(20) NOT NULL,
  `cricket_session_team_id` bigint(20) NOT NULL,
  `cricket_session_till_overs` float NOT NULL,
  `cricket_session_session` int(11) NOT NULL,
  `cricket_session_score` varchar(2000) NOT NULL,
  `cricket_session_yes_ratio` varchar(2000) NOT NULL,
  `cricket_session_no_ratio` varchar(2000) NOT NULL,
  `cricket_session_status` tinyint(1) NOT NULL,
  `cricket_session_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cricket_session_bet`
--

CREATE TABLE `cricket_session_bet` (
  `cricket_session_bet_id` bigint(20) NOT NULL,
  `cricket_session_bet_user_id` bigint(20) NOT NULL,
  `cricket_session_bet_cricket_session_id` bigint(20) NOT NULL,
  `cricket_session_bet_session_no` float NOT NULL,
  `cricket_session_bet_till_overs` float NOT NULL,
  `cricket_session_bet_rate` float NOT NULL,
  `cricket_session_bet_bet_amount` float NOT NULL,
  `cricket_session_bet_win_amount` float NOT NULL,
  `cricket_session_bet_score` float NOT NULL,
  `cricket_session_bet_yes_no` tinyint(1) NOT NULL,
  `cricket_session_bet_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_session_bet_added_date` varchar(200) NOT NULL
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
  `cricket_target_bet_win_amount` bigint(20) NOT NULL,
  `cricket_target_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_target_bet_added_date` varchar(200) NOT NULL
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
  `cricket_toss_bet_rate` float NOT NULL,
  `cricket_toss_bet_bet_amount` float NOT NULL,
  `cricket_toss_bet_win_amount` float NOT NULL,
  `cricket_toss_bet_win` set('0','1','2','3') NOT NULL DEFAULT '0',
  `cricket_toss_bet_added_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lottery`
--

CREATE TABLE `lottery` (
  `lottery_id` bigint(20) NOT NULL,
  `lottery_amount` bigint(20) NOT NULL,
  `lottery_win` varchar(2000) NOT NULL,
  `lottery_color` varchar(500) NOT NULL,
  `lottery_lock` tinyint(1) NOT NULL,
  `lottery_date` date NOT NULL,
  `lottery_time` time NOT NULL,
  `lottery_suspend` tinyint(1) NOT NULL,
  `lottery_active` tinyint(1) NOT NULL,
  `lottery_delete` tinyint(1) NOT NULL,
  `lottery_added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `lottery_updated_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lottery_bet`
--

CREATE TABLE `lottery_bet` (
  `lottery_bet_id` bigint(20) NOT NULL,
  `lottery_bet_lottery_id` bigint(20) NOT NULL,
  `lottery_bet_user_id` bigint(20) NOT NULL,
  `lottery_bet_lottery_amount` bigint(20) NOT NULL,
  `lottery_bet_win_amount` int(11) NOT NULL,
  `lottery_bet_lottery_win` int(2) NOT NULL,
  `lottery_bet_scrach` tinyint(1) NOT NULL,
  `lottery_bet_added_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(20) NOT NULL,
  `message` varchar(5000) NOT NULL
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
  `referal_by` bigint(20) NOT NULL,
  `want_to_deposit` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `withdraw_id` bigint(20) NOT NULL,
  `withdraw_user_id` bigint(20) NOT NULL,
  `withdraw_amount` bigint(20) NOT NULL,
  `withdraw_request_date` varchar(200) NOT NULL,
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
-- Indexes for table `cricket_session`
--
ALTER TABLE `cricket_session`
  ADD PRIMARY KEY (`cricket_session_id`);

--
-- Indexes for table `cricket_session_bet`
--
ALTER TABLE `cricket_session_bet`
  ADD PRIMARY KEY (`cricket_session_bet_id`);

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
-- Indexes for table `lottery`
--
ALTER TABLE `lottery`
  ADD PRIMARY KEY (`lottery_id`);

--
-- Indexes for table `lottery_bet`
--
ALTER TABLE `lottery_bet`
  ADD PRIMARY KEY (`lottery_bet_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

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
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `cricket_session`
--
ALTER TABLE `cricket_session`
  MODIFY `cricket_session_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cricket_session_bet`
--
ALTER TABLE `cricket_session_bet`
  MODIFY `cricket_session_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `lottery`
--
ALTER TABLE `lottery`
  MODIFY `lottery_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lottery_bet`
--
ALTER TABLE `lottery_bet`
  MODIFY `lottery_bet_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(20) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `withdraw_id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
