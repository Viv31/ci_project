-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 05:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

CREATE TABLE `daily_report` (
  `id` int(11) NOT NULL,
  `project_name` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Todaysdate` date NOT NULL,
  `work_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`id`, `project_name`, `assigned_to`, `status`, `Todaysdate`, `work_description`) VALUES
(1, 3, 1, 'complete', '2020-04-16', 'completed following section \r\nadd new user \r\nuser login \r\nadmin login');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  `assigned_to` varchar(100) NOT NULL,
  `project_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_details`, `assigned_to`, `project_status`) VALUES
(1, 'New Project', 'Content of project', 'vaibhav', 'new'),
(2, 'CI ', 'Ci project', 'vaibhav', 'new'),
(3, 'PHP Project', 'this is a project for php developers to work in php ', 'sumit', 'new'),
(4, 'Wordpress Project', 'This is a dynamic wordpress site for developer', 'vaibhav', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `project_manger`
--

CREATE TABLE `project_manger` (
  `id` int(11) NOT NULL,
  `manager_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `manger_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_manger`
--

INSERT INTO `project_manger` (`id`, `manager_name`, `email`, `manger_password`) VALUES
(1, 'Jhon Doe', 'jhon@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `project_subtask`
--

CREATE TABLE `project_subtask` (
  `id` int(11) NOT NULL,
  `subtask_description` varchar(500) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `project_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_subtask`
--

INSERT INTO `project_subtask` (`id`, `subtask_description`, `assigned_to`, `project_name`) VALUES
(1, 'details of Project goes here', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `member_name`, `member_email`, `member_password`) VALUES
(1, 'Raj', 'raj@gmail.com', '1234'),
(2, 'Jhone Carter', 'jhoncarter@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_report`
--
ALTER TABLE `daily_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_manger`
--
ALTER TABLE `project_manger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_subtask`
--
ALTER TABLE `project_subtask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_report`
--
ALTER TABLE `daily_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_manger`
--
ALTER TABLE `project_manger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_subtask`
--
ALTER TABLE `project_subtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
