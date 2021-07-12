-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 12:09 PM
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
-- Table structure for table `proadd`
--

CREATE TABLE `proadd` (
  `proadd_id` int(11) NOT NULL,
  `proadd_name` varchar(100) NOT NULL,
  `proadd_quantity` varchar(100) NOT NULL,
  `proadd_size` varchar(100) NOT NULL,
  `proadd_color` varchar(100) NOT NULL,
  `proadd_squa` varchar(100) NOT NULL,
  `proadd_price` varchar(11) NOT NULL,
  `proadd_desc` varchar(500) NOT NULL,
  `proadd_front_img` varchar(100) NOT NULL,
  `proadd_side_img` varchar(100) NOT NULL,
  `proadd_back_img` varchar(100) NOT NULL,
  `status` bigint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proadd`
--

INSERT INTO `proadd` (`proadd_id`, `proadd_name`, `proadd_quantity`, `proadd_size`, `proadd_color`, `proadd_squa`, `proadd_price`, `proadd_desc`, `proadd_front_img`, `proadd_side_img`, `proadd_back_img`, `status`, `created_date`) VALUES
(2, 'New Apple iPhone 12 (64GB)', '8', '64GB', 'Black', 'A2RE5', '80,000', 'Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording', 'pro front6611.jpeg', 'pro side2200.jpeg', 'pro back8189.jpeg', 1, '2121-07-05 00:00:00'),
(3, 'Vivo V20 Pro 5G Sunset Melody, 8GB RAM, 128GB Storage', '7dsgv df', '32GB', 'Sunset Melody', 'PO87GD', '12,000', '', 'pro front6834.jpeg', 'pro side5767.jpeg', 'pro back1880.jpeg', 1, '2121-07-05 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proadd`
--
ALTER TABLE `proadd`
  ADD PRIMARY KEY (`proadd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proadd`
--
ALTER TABLE `proadd`
  MODIFY `proadd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
