-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 06:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_homie`
--

-- --------------------------------------------------------

--
-- Table structure for table `indoor_data`
--

CREATE TABLE `indoor_data` (
  `id` int(11) NOT NULL,
  `event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `outdoor_data`
--

CREATE TABLE `outdoor_data` (
  `id` int(11) NOT NULL,
  `event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `temperature` varchar(10) NOT NULL,
  `humidity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adminuser` varchar(255) DEFAULT 'yes',
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `adminuser`, `password`, `created_at`) VALUES
(1, 'Stefanos missin', 'admin@stefanosmissin.com', 'yes', '$2y$10$uOKzRUo6IhNXBP9A7bEUmu7Z1ZhsBNxMx/A9XK4IbeHQdQnLS7s.S', '2018-08-07 17:30:35'),
(2, 'Christina Parra', 'xristinaparra1995@gmail.com', 'no', '$2y$10$2ZgDSTpTQRMzZKBatahiX.qNDfVa3QucGgjvN5jXN5tanwmrQ0mxa', '2018-08-07 17:31:16'),
(3, 'Test', 'test@test.com', 'yes', '$2y$10$Di1rapB31grlkbGDbgUsDetqahkwPAHxQSnUzzjUJZLjbzBeB.W9e', '2018-08-07 17:48:58'),
(4, 'Kimon Missin', 'kimon@missin.com', 'yes', '$2y$10$UZuW2FosBAc1dYieZf2n9eHU0zFHT3s2AM3gOqLMQ5XiMfZGVQe2y', '2018-08-08 16:12:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indoor_data`
--
ALTER TABLE `indoor_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outdoor_data`
--
ALTER TABLE `outdoor_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indoor_data`
--
ALTER TABLE `indoor_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outdoor_data`
--
ALTER TABLE `outdoor_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
