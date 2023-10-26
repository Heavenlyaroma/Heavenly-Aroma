-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2023 at 04:07 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essential oil`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Last name` varchar(255) NOT NULL,
  `Company name` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email address` varchar(255) NOT NULL,
  `Full address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Additional` int NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `Last name`, `Company name`, `Contact`, `Email address`, `Full address`, `Additional`, `created`) VALUES
(6, 'anja', 'nirina', 'heavenly', ' 09876', '', '', 0, '2023-10-25 19:10:39'),
(7, 'bob', 'mike', 'total', ' 545454', 'anja@gmail.com', 'alasora', 12345, '2023-10-25 19:20:11'),
(8, 'bob', 'mike', 'total', ' 545454', 'anja@gmail.com', 'alasora', 12345, '2023-10-25 19:21:37'),
(9, 'bob', 'mike', 'total', ' 545454', 'anja@gmail.com', 'alasora', 12345, '2023-10-25 19:21:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
