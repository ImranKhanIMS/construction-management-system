-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 05:14 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(100) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `idcard` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `housenumber` varchar(1000) NOT NULL,
  `occupation` varchar(1000) NOT NULL,
  `totalpayment` int(255) NOT NULL,
  `recivepayment` int(255) NOT NULL,
  `remainingpayment` int(255) NOT NULL,
  `image` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `number`, `name`, `idcard`, `contact`, `housenumber`, `occupation`, `totalpayment`, `recivepayment`, `remainingpayment`, `image`) VALUES
(1, '1', 'Imran', '365464564546534', '5645465455', '2', 'website developer', 10000, 1500, 8500, '20200322_110511.jpg'),
(2, '2', 'Mudassir', '1234567891011', '4445654', '2', 'Youtuber', 5000, 2350, 2650, '1.jpeg'),
(3, '3', 'Imran Khan', '365464564546534', '5645465455', '2', 'website developer', 2147478647, 10000, 0, '3.jpg'),
(4, '3', 'Khan', '1234567891011', '4445654', '1', 'Youtuber', 4100, 1500, 0, '4.jpg'),
(5, '1', 'Imran', '365464564546534', '5645465455', '1', 'website developer', 3000, 1200, 1800, '20200322_110511.jpg'),
(6, '2', 'Mudassir', '1234567891011', '4445654', '1', 'Youtuber', 4100, 1500, 0, '1.jpeg'),
(7, '1', 'Imran', '365464564546534', '5645465455', '3', 'website developer', 2147478647, 10000, 0, '20200322_110511.jpg'),
(8, '2', 'Mudassir', '1234567891011', '4445654', '3', 'Youtuber', 4100, 1500, 0, '1.jpeg'),
(9, '3', 'Khan Jan', '365464564546534', '5645465455', '3', 'website developer', 2147478647, 10000, 0, '3.jpg'),
(10, '1', 'Imran Khan', '365464564546534', '5645465455', '4', 'website developer', 2147478647, 10000, 0, '3.jpg'),
(11, '10', 'Khan Shoda Khan', '65685465456', '5465454', '4', 'Fazool Wakh Zaya kawonke', 25000, 5000, 0, 'images (17).jpeg'),
(12, '11', 'Khan Shoda Khan', '65685465456', '5465454', '4', 'Fazool Wakh Zaya kawonke', 25000, 5500, 19500, 'images (20).jpeg'),
(13, ' is Worked at Sold House : 5', 'Jawad', '545646168545', '5456445', '5', 'Tarkan', 30000, 10000, 20000, 'download.jpeg'),
(14, ' is Worked at Sold House : 5', 'Sajad', '4698789484994', '654466555', '5', 'Gilkar', 40000, 10000, 30000, 'images (25).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(100) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `number`, `location`, `image`, `date`) VALUES
(1, '1', 'Mari', '1.jpg', '01 01 2021'),
(2, '2', 'United State', '2.jpg', '10 10 3010'),
(3, '3', 'London', 'wxp (29).jpg', '12 12 3012'),
(4, '4', 'Garbarh', 'wxp (29).jpg', '34');

-- --------------------------------------------------------

--
-- Table structure for table `sellhouses`
--

CREATE TABLE `sellhouses` (
  `id` int(100) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `date` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `soldamount` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `earning` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellhouses`
--

INSERT INTO `sellhouses` (`id`, `number`, `location`, `date`, `image`, `soldamount`, `total`, `earning`) VALUES
(2, '6', 'United State', '10 10 3010', '2.jpg', 150000, 105000, 45000),
(3, '5', 'Mari', '01 01 2021', '1.jpg', 500000, 105000, 395000);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(100) NOT NULL,
  `number` varchar(1000) NOT NULL,
  `stocknumber` varchar(1000) NOT NULL,
  `housenumber` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `totalpayment` int(255) NOT NULL,
  `paidpayment` int(255) NOT NULL,
  `remainingpayment` int(255) NOT NULL,
  `image` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `number`, `stocknumber`, `housenumber`, `name`, `address`, `contact`, `totalpayment`, `paidpayment`, `remainingpayment`, `image`) VALUES
(1, '1', '1', '1', 'Imran', 'Gari Mustajab', '445', 1000, 700, 300, '3D-158.jpg'),
(2, '2', '2', '1', 'Khan', 'Gari Tajak', '445251565', 1010, 200, 0, '2.jpg'),
(3, '1', '2', '2', 'Imran', 'Gari Mustajab', '445', 1010, 200, 0, '3D-158.jpg'),
(4, '1', '1', '3', 'Imran', 'Gari Mustajab', '445', 1010, 200, 0, '2.jpg'),
(5, '1', '1', '4', 'Gul Khan', 'nishta', '6455465', 5000, 4500, 5000, 'images (19).jpeg'),
(6, '1', '1', '4', 'Gul Khan', 'nishta', '6455465', 5000, 4000, 1000, 'images (18).jpeg'),
(7, ' is Provide Stock For Sold House : 5', 'semant', '5', 'Ahmad', 'Gari Mustajab', '645446455645', 20000, 20000, 0, 'images (6).jpeg'),
(8, ' is Provide Stock For Sold House : 5', 'sand', '5', 'Awais', 'Gari Mustajab', '645446455645', 15000, 15000, 0, 'images (5).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Imran Khan', 'admin@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellhouses`
--
ALTER TABLE `sellhouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sellhouses`
--
ALTER TABLE `sellhouses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
