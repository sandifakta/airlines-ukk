-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 07:00 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickeristictrav`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm_user`
--

CREATE TABLE `confirm_user` (
  `id` int(11) NOT NULL,
  `gambar_bukti` blob NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm_user`
--

INSERT INTO `confirm_user` (`id`, `gambar_bukti`, `status`) VALUES
(7, 0x62616c692e6a7067, 'Belum Dikonfirmasi'),
(9, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(10, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(11, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(12, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(13, 0x62756b7469207472616e736665722e6a7067, 'Belum Dikonfirmasi'),
(14, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(15, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(16, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(17, 0x62756b7469207472616e736665722e6a7067, 'Belum Dikonfirmasi'),
(18, 0x62756b7469207472616e736665722e6a7067, 'Dikonfirmasi'),
(19, 0x62756b7469207472616e736665722e6a7067, 'Belum Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `reservation_code` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `gender`, `reservation_code`) VALUES
(1, 'ghuyub', 'abc', '08999', 'l', 0),
(2, 'dafa', 'pwt', '09808', 'l', 0),
(3, 'ga', 'ga', '0203', 'l', 0),
(4, 'b', 'b', '1212', 'l', 0),
(5, '', '', '', 'l', 0),
(6, '', '', '', 'l', 0),
(7, 'ghuyub', 'dfdhfdj', '121212', 'l', 273053010),
(8, 'aaaq', 'aaq', '1212', 'l', 766374966),
(9, 'dafa', 'pwt', '1212', 'l', 394090474),
(10, 'dafa', 'pwt', '1212', 'l', 463949135),
(11, 'dafa', 'pwt', '1212', 'l', 404192956),
(12, 'dafa', 'pwt', '1212', 'l', 389808289),
(13, 'qq', 'qq', '121', 'l', 839074204),
(14, 'rr', 'rr', '121', 'l', 966243507),
(15, 'qw', 'qw', '12', 'l', 38182519),
(16, 'fff', 'dsd', '123121', 'l', 590685420),
(17, 'ghuyub raditya pamun', 'pwt', '09891', 'l', 46493022),
(18, 'ghuyub raditya pamun', 'purwokerto', '0812121212133', 'l', 462666430),
(19, 'juli', 'bandung', '08822382323283', 'p', 441732579),
(20, 'aggak', 'ass', '059504000', 'l', 316753684),
(21, 'ffff', 'adsd', '11212', 'l', 666625729),
(22, 'ghuyub', 'karang asri', '086666', 'l', 327591083),
(23, 'andi', 'raya', '12333', 'l', 161892173),
(24, 'rar', 'wq', '1222', 'l', 181490266),
(25, 'aa', 'dac', '123', 'l', 848701604),
(26, 'zz', 'aa', '12', 'l', 808097516),
(27, 'gg', 'dd', '33', 'l', 285680324),
(28, 'er', 'ee', '33', 'p', 109478166);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `reservation_code` int(200) NOT NULL,
  `reservation_at` date NOT NULL,
  `reservation_date` date NOT NULL,
  `customerid` int(255) NOT NULL,
  `seat_code` int(40) NOT NULL,
  `ruteid` int(255) NOT NULL,
  `depart_at` time NOT NULL,
  `price` varchar(15) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_at`, `reservation_date`, `customerid`, `seat_code`, `ruteid`, `depart_at`, `price`, `userid`) VALUES
(33, 11111, '2018-02-28', '2018-02-27', 0, 17, 0, '14:24:42', '120000', 3),
(37, 590685420, '2018-02-02', '2018-02-27', 1, 3, 45, '07:00:00', '123000', 16),
(41, 441732579, '2018-02-02', '2018-02-27', 19, 2, 35, '08:00:00', '12200', 19),
(42, 316753684, '2018-02-03', '2018-02-28', 20, 1, 45, '00:00:00', '500000', 20),
(43, 666625729, '2018-02-02', '2018-02-27', 21, 4, 25, '00:00:00', '110000', 21),
(44, 327591083, '0000-00-00', '0000-00-00', 22, 1, 33, '00:00:00', '', 22),
(45, 161892173, '0000-00-00', '0000-00-00', 23, 2, 25, '00:00:00', '', 23),
(46, 181490266, '0000-00-00', '0000-00-00', 24, 2, 45, '00:00:00', '', 24),
(47, 848701604, '0000-00-00', '0000-00-00', 25, 1, 25, '00:00:00', '', 25),
(48, 808097516, '0000-00-00', '0000-00-00', 26, 20, 25, '00:00:00', '', 26),
(49, 285680324, '2018-02-02', '2018-02-15', 27, 2, 33, '10:00:00', '', 27),
(50, 109478166, '2018-02-02', '2018-02-26', 28, 3, 33, '12:12:00', '', 28);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(255) NOT NULL,
  `depart_at` date NOT NULL,
  `rute_from` varchar(15) NOT NULL,
  `rute_to` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `transportationid` varchar(255) NOT NULL,
  `lokasi_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportationid`, `lokasi_gambar`) VALUES
(23, '2018-02-28', 'Jakarta', 'Bandung', '250000', '33', 'http://localhost/booktravel/assets/images/bandung.jpg'),
(24, '2018-02-28', 'jakarta', 'purwokerto', '120000', '33', 'http://localhost/booktravel/assets/images/purwokerto.jpg'),
(25, '2018-02-28', 'jakarta', 'yogyakarta', '500000', '33', 'http://localhost/booktravel/assets/images/yogyakarta.jpg'),
(33, '2018-02-28', 'bali', 'makasar', '300000', '1', 'http://localhost/booktravel/assets/images/makasar.jpg'),
(35, '2018-02-28', 'jakarta', 'bali', '120000', '1', 'http://localhost/booktravel/assets/images/bali.jpg'),
(36, '2018-02-28', 'bali', 'jakarta', '120000', '33', 'http://localhost/booktravel/assets/images/jakarta.jpg'),
(41, '2018-02-28', 'makasar', 'yogyakarta', '140000', '1', 'http://localhost/booktravel/assets/images/yogyakarta.jpg'),
(43, '2018-02-28', 'makasar', 'yogyakarta', '133000', '33', 'http://localhost/booktravel/assets/images/yogyakarta.jpg'),
(44, '2018-02-27', 'solo', 'jakarta', '200000', '1', ''),
(45, '2018-02-28', 'jakarta', 'yogyakarta', '200000', '1', 'http://localhost/booktravel/assets/images/yogyakarta.jpg'),
(48, '2018-02-28', 'purwokerto', 'cilacap', '500000', '33', '');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(255) NOT NULL,
  `description` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`id`, `description`) VALUES
(1, 'ekonomi'),
(2, 'first class');

-- --------------------------------------------------------

--
-- Table structure for table `trasportation`
--

CREATE TABLE `trasportation` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(10) NOT NULL,
  `seat_qty` varchar(15) NOT NULL,
  `transportation_typed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trasportation`
--

INSERT INTO `trasportation` (`id`, `code`, `description`, `seat_qty`, `transportation_typed`) VALUES
(1, 'Lion JT-564', 'Lion Air', '99', '1'),
(33, 'Batik Air -\n JS3E', 'malaysiair', '99', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `fullname`, `level`) VALUES
(1, 'ghuyub', 'adfasd@gmail.com', '4f23fd678f3e53beccfc73dc7d8b0efd', 'aditgg', 'admin'),
(128, 'ra', 'ra@gmial.com', 'cdf6b37f50728ed655037ac8edfa658d', 'ra', 'user'),
(129, 'rohmet', 'rohmet@gmail.com', 'cf81a9e580806e4fb055116ef5c07a3b', 'rohmet', 'user'),
(134, 'hammam', 'hammam@gmail.com', '843f2da5f92e4f333b71f59518c09eae', 'hammam', 'user'),
(135, 'rafi', 'rafi@gmail.com', '139c4e89cdbedaf144d05ca54a12a57b', 'rafi', 'user'),
(138, 'fahmi', 'fahmi@gmail.com', 'f11d50d63d3891a44c332e46d6d7d561', 'fahmi nb', 'user'),
(139, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin doang', 'admin'),
(140, 'amel', 'amel@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'amel', 'user'),
(142, 'helmi', 'helmi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'helmi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm_user`
--
ALTER TABLE `confirm_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trasportation`
--
ALTER TABLE `trasportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm_user`
--
ALTER TABLE `confirm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
