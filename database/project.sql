-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 05:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `P_CatId` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`P_CatId`, `Name`, `Status`, `CreatedDate`) VALUES
(1, 'Men', 1, '2021-07-04 20:33:36'),
(2, 'Women', 1, '2021-07-04 20:34:18'),
(3, 'Mobile', 1, '2021-07-04 20:34:30'),
(4, 'Electronics', 1, '2021-07-04 20:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_ID` int(100) NOT NULL,
  `P_CatId` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` bigint(200) NOT NULL,
  `SQA_Number` bigint(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Front_image` varchar(100) NOT NULL,
  `Side_image` varchar(100) NOT NULL,
  `Back_image` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_ID`, `P_CatId`, `Name`, `Price`, `SQA_Number`, `Quantity`, `Size`, `Color`, `Front_image`, `Side_image`, `Back_image`, `Description`, `Status`, `CreatedDate`) VALUES
(5, 1, 't-shirt', 250, 855331772237, 2, 'XL', 'pink', 'photo96.png', 'pic170.png', 'garlley156.png', 'hello stranger', 1, '2121-06-26 00:00:00.000000'),
(7, 1, 'PA Maxima Max Pro X2 Smartwatch', 3499, 0, 10, '', 'black', 'photo205.png', 'pic42.png', 'garlley339.png', 'With an inbuilt health tracker, up to 11 sports modes, and IP68-rated water and dust resistance, the PA Maxima Max Pro X2 smartwatch can be your ideal workout companion. Featuring a high-resolution 3.', 1, '2121-07-03 00:00:00.000000'),
(8, 1, 'Life Like ZL2 Heart Rate Blood Pressure Waterproof Smartwatch', 2499, 0, 8, '', 'Black', 'photo213.png', 'pic385.png', 'garlley398.png', '', 1, '2121-07-04 00:00:00.000000'),
(9, 1, 'Life Like ZL2 Heart Rate Blood Pressure Waterproof Smartwatch', 2499, 0, 8, '', 'Black', 'photo91.png', 'pic310.png', 'garlley347.png', '', 1, '2121-07-04 00:00:00.000000'),
(10, 2, 'Self Design Banarasi Silk Blend, Cotton Blend Saree', 620, 0, 11, '', 'Pink', 'photo450.png', 'pic205.png', 'garlley29.png', '20% off on 1st txn with Amex Network Cards issued by ICICI Bank,IndusInd Bank,SBI Cards and Mobikwik', 1, '2121-07-04 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Name`, `Email`, `Password`, `Mobile`, `Photo`, `Status`, `CreatedDate`) VALUES
(1, 'Jatin Chauhan', 'chauhan07072001@gmail.com', 'b9b12745b6703023012a40c28f6ece0a', 8076390340, 'photo286.png', 1, '2121-07-03 00:00:00.000000'),
(2, 'Monu ', 'monu@gmail.com', '12793ea96d6f3660c3b06f4de4497768', 885496627, 'photo80.png', 1, '2121-07-03 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`P_CatId`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `P_CatId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `Product_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
