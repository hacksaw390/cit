-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 04:59 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `email`, `phone`, `password`, `dob`, `gender`, `skill`, `position`, `role`, `about`, `register_date`) VALUES
(1, 'shamim dewan', 'ahamad', 'shamimdewan', 'shamimdewan343@gmail.com', 2147483647, 'aaa', '30/07/2019', 'Male', 'HTML, PHP', 'Medium', '1', 'a', '2019-07-30 08:01:21'),
(2, 'shamim', 'dewan', 'shamimdewan390', 'moskhara390@gmail.com', 2147483647, 'caa2adc0137fc1f1ada1cc1811be70fc', '10/07/2019', 'Male', 'Java', 'Expart', '3', '										aaa									', '2019-07-30 08:01:58'),
(5, 'shamim dewan', 'ahamad', 'shamimdewan', 'shamimsdfgdgdewan343@gmail.com', 1928976747, 'caa2adc0137fc1f1ada1cc1811be70fc', '21/07/2019', 'Female', 'HTML', 'Medium', '1', '				sdfds															', '2019-08-01 09:23:14'),
(6, 'shamim dewan', 'ahamad', 'shamimdewan', 'shamidsfsdfsdmdewan343@gmail.com', 2147483647, '6e35f8a4380b5fbadc37de56f374bf56', '15/07/1996', 'Female', 'CSS', 'Expart', '1', '', '2019-08-02 02:34:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
