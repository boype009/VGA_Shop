-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 11:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `sas_login`
--

CREATE TABLE `sas_login` (
  `login_id` int(12) UNSIGNED NOT NULL,
  `login_username` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `login_status` enum('0','100','500') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sas_login`
--

INSERT INTO `sas_login` (`login_id`, `login_username`, `login_password`, `login_email`, `login_status`) VALUES
(1, 'uiop333', '0d9a0606524fb2f9c7563d2b4c2b798fb0a739d02ee7c3872d23369098f1e605', 'ssss@ssss.com', '0'),
(6, 'boype009', '0d9a0606524fb2f9c7563d2b4c2b798fb0a739d02ee7c3872d23369098f1e605', 'xignosthesteal@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sas_login`
--
ALTER TABLE `sas_login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sas_login`
--
ALTER TABLE `sas_login`
  MODIFY `login_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
