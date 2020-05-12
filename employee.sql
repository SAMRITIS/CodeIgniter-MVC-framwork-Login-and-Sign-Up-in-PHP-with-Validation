-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 09:27 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ram`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `email`, `mobile`) VALUES
('ram', 'ram@gmail.com', '9876543210'),
('m', 'm@m.cpm', '0987654321'),
('SAURABH', 'saurabhsinghggu@gmail.com', '8602507821'),
('saurabh', 'saurabhsinghggu@gmail.com', '8602507821'),
('sam', 'saurabhsinghggu@gmail.com', '9876543210'),
('sam', 'saurabhsinghggu@gmail.com', '9876543210'),
('sam', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210'),
('n', 'saurabhsinghggu@gmail.com', '9876543210');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
