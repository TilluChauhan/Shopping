-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 05:31 PM
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
  `pro_cate_id` int(11) NOT NULL,
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

INSERT INTO `proadd` (`proadd_id`, `proadd_name`, `pro_cate_id`, `proadd_quantity`, `proadd_size`, `proadd_color`, `proadd_squa`, `proadd_price`, `proadd_desc`, `proadd_front_img`, `proadd_side_img`, `proadd_back_img`, `status`, `created_date`) VALUES
(2, 'New Apple iPhone 12 (64GB)', 1, '8', '64GB', 'Black', 'A2RE5', '80,000', 'Advanced dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Deep Fusion, Smart HDR 3, 4K Dolby Vision HDR recording', 'pro front6611.jpeg', 'pro side2200.jpeg', 'pro back8189.jpeg', 1, '2121-07-05 00:00:00'),
(3, 'Vivo V20 Pro 5G Sunset Melody, 8GB RAM, 128GB Storage', 1, '7dsgv df', '32GB', 'Sunset Melody', 'PO87GD', '12,000', '', 'pro front6834.jpeg', 'pro side5767.jpeg', 'pro back1880.jpeg', 1, '2121-07-05 00:00:00'),
(13, 'ManHood 100 Percent Cotton Grey Solids T-Shirt', 3, '5', 'XL', 'Grey', 'W2REE5', '269', 'The product may vary from the images due to various reasons like monitor setting or photographic lighting sources or handiwork & craftmanship', 'pro front7121.jpeg', 'pro side7671.jpeg', 'pro back8467.jpeg', 1, '2121-07-13 00:00:00'),
(14, 'SIDKRT 100 Percent Cotton Navy Self Design T-Shirt', 3, '3', 'm', 'Navy', 'RE46D5', '309', 'The product may vary from the images due to various reasons like monitor setting or photographic lighting sources or handiwork & craftmanship.', 'pro front4435.jpeg', 'pro side5175.jpeg', 'pro back1188.jpeg', 1, '2121-07-13 00:00:00'),
(15, 'AUSK 100 Percent Cotton Multi Color Block T-Shirt', 3, '4', 'XL', 'Multi', 'DR45T56', '379', 'The product may vary from the images due to various reasons like monitor setting or photographic lighting.', 'pro front4214.jpeg', 'pro side8662.jpeg', 'pro back4840.jpeg', 1, '2121-07-13 00:00:00'),
(16, 'GESPO 100 Percent Cotton Mustard Color Block T-Shirt', 3, '2', 'L', 'Mustard', 'AW32DE', '399', 'Trustpay: 100% Payment Protection. Return or Replacement is applicable for 7 days after delivery', 'pro front6045.jpeg', 'pro side7554.jpeg', 'pro back4881.jpeg', 1, '2121-07-13 00:00:00'),
(19, 'GENEALO Crepe Green A- line Dress', 4, '1', 'M', 'White', 'SE32FR', '599', 'GENEALO Present This Trendy Sensational Women Dresses ,solid A-line dress With shrug has shoulder straps.', 'pro front2171.jpeg', 'pro side5722.', 'pro back9682.', 1, '2121-07-13 00:00:00'),
(20, 'DODO & MOA Polyester Black Bodycon Dress', 4, '3', 'M', 'Black', 'PY5DG8', '499', 'GENEALO Present This Trendy Sensational Women Dresses ,solid A-line dress With shrug has shoulder straps.', 'pro front6973.jpeg', 'pro side3989.jpeg', 'pro back1560.jpeg', 1, '2121-07-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pro_category`
--

CREATE TABLE `pro_category` (
  `pro_cate_id` int(11) NOT NULL,
  `pro_cate_name` varchar(200) NOT NULL,
  `status` bigint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_category`
--

INSERT INTO `pro_category` (`pro_cate_id`, `pro_cate_name`, `status`, `created_date`) VALUES
(1, 'mobile', 1, '2121-07-09 00:00:00'),
(2, 'Electronic', 1, '2121-07-09 00:00:00'),
(3, 'mens', 1, '2121-07-13 00:00:00'),
(4, 'womens', 1, '2121-07-13 00:00:00');

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
(39, 'ayushi', 'admin', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 7842989928, 'pro8319.jpeg', 1, '2121-07-14 00:00:00'),
(40, 'gopu', 'user', 'gopu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9986726798, 'pro2504.jpeg', 1, '2121-07-14 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proadd`
--
ALTER TABLE `proadd`
  ADD PRIMARY KEY (`proadd_id`);

--
-- Indexes for table `pro_category`
--
ALTER TABLE `pro_category`
  ADD PRIMARY KEY (`pro_cate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proadd`
--
ALTER TABLE `proadd`
  MODIFY `proadd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pro_category`
--
ALTER TABLE `pro_category`
  MODIFY `pro_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
