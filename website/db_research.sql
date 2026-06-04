-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2026 at 10:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_research`
--

-- --------------------------------------------------------

--
-- Table structure for table `alerlnotif_table`
--

CREATE TABLE `alerlnotif_table` (
  `Alert_notif_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `alert_id` int(20) NOT NULL,
  `send_at` text NOT NULL,
  `body` text NOT NULL,
  `Notification_channel` enum('Email','SMS','','') NOT NULL,
  `Send_to` text NOT NULL,
  `Read_status` enum('UnRead','Read','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alerlnotif_table`
--

INSERT INTO `alerlnotif_table` (`Alert_notif_id`, `user_id`, `alert_id`, `send_at`, `body`, `Notification_channel`, `Send_to`, `Read_status`) VALUES
(2, 2, 1, '2026-05-24 15:30:00', 'Heavy flooding detected in Tabuc Suba', 'Email', 'Joen5diamante@gmail.com', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `alert_table`
--

CREATE TABLE `alert_table` (
  `Alert_id` int(20) NOT NULL,
  `record_id` int(20) NOT NULL,
  `message` text NOT NULL,
  `alert_level` enum('Medium Risk','High Risk','','') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alert_table`
--

INSERT INTO `alert_table` (`Alert_id`, `record_id`, `message`, `alert_level`, `created_at`) VALUES
(1, 1, 'Heavy flooding detected in Tabuc Suba', 'High Risk', '2026-05-24 14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `historical_table`
--

CREATE TABLE `historical_table` (
  `history_id` int(20) NOT NULL,
  `record_id` int(20) NOT NULL,
  `record_at` datetime NOT NULL,
  `Risk_level` enum('Normal Risk','Medium  Risk','High  Risk','') NOT NULL,
  `created_at` datetime NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historical_table`
--

INSERT INTO `historical_table` (`history_id`, `record_id`, `record_at`, `Risk_level`, `created_at`, `notes`) VALUES
(1, 1, '2026-05-24 14:30:00', 'High  Risk', '2026-05-24 14:30:00', 'Heavy flooding detected in Tabuc Suba');

-- --------------------------------------------------------

--
-- Table structure for table `images_table`
--

CREATE TABLE `images_table` (
  `images_id` int(20) NOT NULL,
  `images_name` text NOT NULL,
  `image_path` text NOT NULL,
  `datetime_created` datetime NOT NULL,
  `datetime_captured` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images_table`
--

INSERT INTO `images_table` (`images_id`, `images_name`, `image_path`, `datetime_created`, `datetime_captured`) VALUES
(1, 'tabuc_suba1.png', 'D:3rd year\research_system\research-5_05_2026 - original - rework - with databaseimgs', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tabuc_suba2.png', 'D:3rd year\research_system\research-5_05_2026 - original - rework - with databaseimgs', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaction_table`
--

CREATE TABLE `loaction_table` (
  `location_id` int(20) NOT NULL,
  `loaction_name` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `upload_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaction_table`
--

INSERT INTO `loaction_table` (`location_id`, `loaction_name`, `address`, `description`, `created_at`, `upload_at`) VALUES
(1, 'Tabuc Suba', 'Tabuc Suba, Jaro, Iloilo City', 'Prone to Floods', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `record_table`
--

CREATE TABLE `record_table` (
  `record_id` int(20) NOT NULL,
  `sensor_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `location_id` int(20) NOT NULL,
  `record_at` datetime NOT NULL DEFAULT current_timestamp(),
  `risk_level` enum('Normal Risk','Medium Risk','High Risk','') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record_table`
--

INSERT INTO `record_table` (`record_id`, `sensor_id`, `user_id`, `location_id`, `record_at`, `risk_level`, `created_at`, `description`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', 'High Risk', '2026-05-24 12:19:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sensor_table`
--

CREATE TABLE `sensor_table` (
  `sensor_id` int(20) NOT NULL,
  `sensor_name` text NOT NULL,
  `active_status` enum('Offline','Online','','') NOT NULL,
  `date_installation` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upload_at` datetime NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensor_table`
--

INSERT INTO `sensor_table` (`sensor_id`, `sensor_name`, `active_status`, `date_installation`, `created_at`, `upload_at`, `content`) VALUES
(1, 'Camera 1', 'Offline', '2026-05-24', '2026-05-24 12:03:34', '2026-05-24 12:03:34', 'Monitoring flood conditions in Tabuc Suba');

-- --------------------------------------------------------

--
-- Table structure for table `threshold_table`
--

CREATE TABLE `threshold_table` (
  `threshhold_id` int(20) NOT NULL,
  `sensor_id` int(20) NOT NULL,
  `Risk_level` enum('Normal Risk','Medium Risk','High Risk','') NOT NULL,
  `upload_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threshold_table`
--

INSERT INTO `threshold_table` (`threshhold_id`, `sensor_id`, `Risk_level`, `upload_at`, `created_at`) VALUES
(1, 1, 'High Risk', '2026-05-24 12:07:17', '2026-05-24 12:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(20) NOT NULL,
  `Fullname` text NOT NULL,
  `phone_num` varchar(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `account_status` enum('enable','disable','','') NOT NULL,
  `role` enum('staff','admin','','') NOT NULL,
  `barangay` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `Fullname`, `phone_num`, `email`, `password`, `account_status`, `role`, `barangay`, `created_at`, `update_at`) VALUES
(1, 'Arvin Dideles', '09034164432', 'arvin_dideles@gmail.com', 'arvin123', 'enable', 'admin', 'tabuc suba', '2026-05-24 11:17:02', '0000-00-00 00:00:00'),
(2, 'Joen Dogoldogol', '099032562132', 'joen5diamante@gmail.com', 'joen123', 'enable', 'admin', 'Cubay', '2026-05-24 12:31:32', '2026-05-24 12:31:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerlnotif_table`
--
ALTER TABLE `alerlnotif_table`
  ADD PRIMARY KEY (`Alert_notif_id`),
  ADD KEY `alert_id` (`alert_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `alert_table`
--
ALTER TABLE `alert_table`
  ADD PRIMARY KEY (`Alert_id`),
  ADD KEY `record_id` (`record_id`);

--
-- Indexes for table `historical_table`
--
ALTER TABLE `historical_table`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `record_id` (`record_id`);

--
-- Indexes for table `images_table`
--
ALTER TABLE `images_table`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `loaction_table`
--
ALTER TABLE `loaction_table`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `record_table`
--
ALTER TABLE `record_table`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `sensor_id` (`sensor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sensor_table`
--
ALTER TABLE `sensor_table`
  ADD PRIMARY KEY (`sensor_id`);

--
-- Indexes for table `threshold_table`
--
ALTER TABLE `threshold_table`
  ADD PRIMARY KEY (`threshhold_id`),
  ADD KEY `sensor_id` (`sensor_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerlnotif_table`
--
ALTER TABLE `alerlnotif_table`
  MODIFY `Alert_notif_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alert_table`
--
ALTER TABLE `alert_table`
  MODIFY `Alert_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `historical_table`
--
ALTER TABLE `historical_table`
  MODIFY `history_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images_table`
--
ALTER TABLE `images_table`
  MODIFY `images_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaction_table`
--
ALTER TABLE `loaction_table`
  MODIFY `location_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `record_table`
--
ALTER TABLE `record_table`
  MODIFY `record_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sensor_table`
--
ALTER TABLE `sensor_table`
  MODIFY `sensor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `threshold_table`
--
ALTER TABLE `threshold_table`
  MODIFY `threshhold_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alerlnotif_table`
--
ALTER TABLE `alerlnotif_table`
  ADD CONSTRAINT `alerlnotif_table_ibfk_1` FOREIGN KEY (`alert_id`) REFERENCES `alert_table` (`Alert_id`),
  ADD CONSTRAINT `alerlnotif_table_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `alert_table`
--
ALTER TABLE `alert_table`
  ADD CONSTRAINT `alert_table_ibfk_1` FOREIGN KEY (`record_id`) REFERENCES `record_table` (`record_id`);

--
-- Constraints for table `historical_table`
--
ALTER TABLE `historical_table`
  ADD CONSTRAINT `historical_table_ibfk_1` FOREIGN KEY (`record_id`) REFERENCES `record_table` (`record_id`);

--
-- Constraints for table `record_table`
--
ALTER TABLE `record_table`
  ADD CONSTRAINT `record_table_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `loaction_table` (`location_id`),
  ADD CONSTRAINT `record_table_ibfk_2` FOREIGN KEY (`sensor_id`) REFERENCES `sensor_table` (`sensor_id`),
  ADD CONSTRAINT `record_table_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `threshold_table`
--
ALTER TABLE `threshold_table`
  ADD CONSTRAINT `threshold_table_ibfk_1` FOREIGN KEY (`sensor_id`) REFERENCES `sensor_table` (`sensor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
