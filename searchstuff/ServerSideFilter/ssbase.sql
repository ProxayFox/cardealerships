-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 01:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'Mother Teresa', 'teresa@gmail.com', '0423156651', '2018-10-18 00:00:00', '2018-10-18 00:00:00', '1'),
(2, 'Mark Zuckerberg', 'mark@gmail.com', '0513245765', '2018-10-09 00:00:00', '2018-10-18 00:00:00', '0'),
(3, 'Martin Luther King', 'martin@gmail.com', '0303245987', '2018-10-01 00:00:00', '2018-10-29 00:00:00', '1'),
(4, 'Winston Churchill', 'winston@gmail.com', '0404567123', '2018-09-01 00:00:00', '2018-10-18 00:00:00', '0'),
(5, 'Bill Gates', 'bill@gmail.com', '0103789654', '2018-08-01 00:00:00', '2018-10-27 00:00:00', '0'),
(6, 'Donald Trump', 'donald@gmail.com', '0567142678', '2018-07-04 00:00:00', '2018-10-25 00:00:00', '1'),
(7, 'Thomas Edison', 'thomas@gmail.com', '0403567326', '2018-07-10 00:00:00', '2018-10-21 00:00:00', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
