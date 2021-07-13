-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_pic` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `type`, `user_email`, `user_password`, `user_mobile`, `user_pic`, `status`, `created_date`) VALUES
(8, 'ayushi tyagi', 'admin', 'ayushityagi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 7217826732, 'pro1909.jpeg', 1, '2021-06-29 00:00:00'),
(9, 'ayushi', 'admin', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 8802267324, 'pro6591.jpeg', 1, '2121-06-29 00:00:00'),
(10, 'gopu', 'admin', 'gopu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 7298326722, 'pro5361.jpeg', 1, '2121-06-29 00:00:00'),
(11, 'goputyagi', 'admin', 'goputyagi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9953328764, 'pro8687.jpeg', 1, '2121-06-29 00:00:00'),
(12, 'damru', 'user', 'damru@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 8802287320, 'pro3670.jpeg', 1, '2121-06-30 00:00:00'),
(14, 'Golu', 'user', 'golu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9983328765, 'pro9160.jpeg', 1, '2121-06-30 00:00:00'),
(15, 'poga', 'user', 'pogo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9868543254, 'pro5705.jpeg', 1, '2121-07-04 00:00:00'),
(37, 'sana', 'admin', 'sana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 7869874567, 'pro6322.jpeg', 1, '2121-07-13 00:00:00'),
(38, 'tannu', 'admin', 'tannu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9867875764, 'pro9179.jpeg', 1, '2121-07-13 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
