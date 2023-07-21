-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 02:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `chickenout`
--

CREATE TABLE `chickenout` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `price_per_kilo` decimal(10,2) NOT NULL,
  `total_kilo` decimal(10,2) NOT NULL,
  `total_chickens` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chickenout`
--

INSERT INTO `chickenout` (`id`, `date`, `price_per_kilo`, `total_kilo`, `total_chickens`, `total_price`) VALUES
(1, '2023-07-19', '12.00', '23.00', 34, '276.00'),
(2, '2023-07-19', '12.00', '23.00', 34, '276.00'),
(3, '2023-07-20', '100.00', '2.00', 3, '200.00'),
(4, '2023-07-29', '100.00', '23.00', 34, '2300.00'),
(5, '2023-08-05', '12.00', '23.00', 34, '276.00'),
(6, '2023-07-29', '23.00', '32.00', 11, '736.00'),
(7, '0000-00-00', '0.00', '0.00', 0, '0.00'),
(8, '0000-00-00', '0.00', '0.00', 0, '0.00'),
(9, '2023-07-06', '12.00', '343.00', 12, '4116.00'),
(10, '2023-07-21', '12.00', '12.00', 12, '144.00'),
(11, '2023-07-21', '12.00', '13.00', 12, '156.00');

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE `chickens` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trays` int(11) DEFAULT NULL,
  `total_chick` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`id`, `date`, `price`, `quantity`, `trays`, `total_chick`, `total_price`) VALUES
(16, '2023-07-20', '100.00', 12, 2, 24, '200.00'),
(17, '2023-07-29', '1000.00', 5, 4, 20, '4000.00'),
(18, '2023-08-05', '1222.00', 12, 3, 36, '3666.00'),
(19, '2023-07-20', '1500.00', 200, 2, 400, '3000.00'),
(20, '2023-07-19', '2000.00', 100, 3, 300, '6000.00'),
(21, '2023-09-21', '122.00', 122, 11, 1342, '1342.00'),
(22, '2023-07-21', '100.00', 2, 2, 4, '200.00'),
(23, '2023-07-21', '12.00', 23, 23, 529, '276.00'),
(24, '2023-07-01', '1.00', 1, 1, 1, '1.00'),
(25, '2023-07-01', '1.00', 1, 1, 1, '1.00'),
(26, '0000-00-00', '0.00', 0, 0, 0, '0.00'),
(27, '0000-00-00', '0.00', 0, 0, 0, '0.00'),
(28, '2023-08-01', '2.00', 2, 2, 4, '4.00'),
(29, '2023-07-29', '1000.00', 1000, 5, 5000, '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `chicken_stocks`
--

CREATE TABLE `chicken_stocks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `chicken_pen` varchar(50) NOT NULL,
  `no_of_pen` int(11) NOT NULL,
  `total_chicken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chicken_stocks`
--

INSERT INTO `chicken_stocks` (`id`, `date`, `chicken_pen`, `no_of_pen`, `total_chicken`) VALUES
(1, '2023-07-21', '12', 21, 252),
(2, '2023-07-21', '12', 34, 408),
(3, '2023-07-21', '100', 32, 3200),
(4, '2023-07-21', '122', 122, 14884),
(5, '2023-07-21', '100', 2, 200),
(6, '2023-07-29', '50', 1, 50),
(7, '2023-07-29', '12', 23, 276);

-- --------------------------------------------------------

--
-- Table structure for table `feeds_stocks`
--

CREATE TABLE `feeds_stocks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `sack_kilo` decimal(10,2) NOT NULL,
  `no_of_sacks` int(11) NOT NULL,
  `total_kilo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feeds_stocks`
--

INSERT INTO `feeds_stocks` (`id`, `date`, `sack_kilo`, `no_of_sacks`, `total_kilo`) VALUES
(1, '2023-07-20', '100.00', 12, '1200.00'),
(2, '2023-07-21', '200.00', 2, '400.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `role`, `posting_date`) VALUES
(27, 'admin', 'admin', 'admin@g.com', 'admin123', '0938905086', 'admin', '2022-12-02 00:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `vitamins_stocks`
--

CREATE TABLE `vitamins_stocks` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `vitamins_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vitamins_stocks`
--

INSERT INTO `vitamins_stocks` (`id`, `date`, `vitamins_name`, `quantity`, `expiration_date`) VALUES
(3, '2023-07-22', 'Acid', 13, '2023-08-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chickenout`
--
ALTER TABLE `chickenout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chickens`
--
ALTER TABLE `chickens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chicken_stocks`
--
ALTER TABLE `chicken_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds_stocks`
--
ALTER TABLE `feeds_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamins_stocks`
--
ALTER TABLE `vitamins_stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chickenout`
--
ALTER TABLE `chickenout`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chickens`
--
ALTER TABLE `chickens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `chicken_stocks`
--
ALTER TABLE `chicken_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feeds_stocks`
--
ALTER TABLE `feeds_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vitamins_stocks`
--
ALTER TABLE `vitamins_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
