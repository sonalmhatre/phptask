-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 07:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_img`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sonal', 'sonal@razrcorp.com', '', '$2y$10$DRW4xZmodJ.Iw8wYpFWnaOd2F0dmDsTEoKs1WwC6OPqu.Ah8TVnIa', '2024-01-12 18:30:00', '2024-01-12 18:30:00'),
(8, 'dummy_area', 'prajwal@razrcorp.com', '../uploads/1699276595_tmpphp8yenhk.png', '$2y$10$2fp/XHoSCsgndRT.llXpcOq8kQ7HRrLtZM6fUvsKhoO.cggihfD.C', '2024-01-14 12:12:58', '2024-01-14 12:12:58'),
(9, 'working hours', 'sam@gmail.com', '../uploads/4.sm.webp', '$2y$10$IGUFl/4oW.DzU.euf8iG1ug5D5pIk6zovSq29BCjPv5cZ/omLeImu', '2024-01-14 12:35:38', '2024-01-14 12:35:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
