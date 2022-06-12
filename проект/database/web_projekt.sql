-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 10:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2
=======
-- Хост: 127.0.0.1
-- Време на генериране: 11 юни 2022 в 21:44
-- Версия на сървъра: 10.4.22-MariaDB
-- Версия на PHP: 8.1.2
>>>>>>> 09d4cf97d82e2d992b7237cda48a4b21145a5ef0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subs_name` varchar(255) NOT NULL,
  `subs_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`id`, `name`, `location`, `subs_name`, `subs_location`) VALUES
(1, 'The Three Billy Goats Gruff', 'videos/The Three Billy Goats Gruff.mp4', 'The Three Billy Goats Gruff.vtt', '../subtitles/The Three Billy Goats Gruff.vtt'),
(2, 'Bedtime for Gus', 'videos/Bedtime for Gus.mp4', 'Bedtime-For-Gus.vtt', '../subtitles/Bedtime-For-Gus.vtt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
