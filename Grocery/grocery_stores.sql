-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 05:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery_stores`
--

-- --------------------------------------------------------

--
-- Table structure for table `clerks`
--

CREATE TABLE `clerks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerks`
--

INSERT INTO `clerks` (`id`, `name`, `username`, `password`) VALUES
(1, 'Dumga', 'Chidumgaizuzu@gmail.com', 'Salvation');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Name`, `phoneNo`, `address`) VALUES
(1, 'Timi', 8552878, '102 Phill Road'),
(2, 'Kenny', 6778882, '100 Phil Street'),
(3, 'Jenny ', 9898782, '300 Zeal'),
(4, 'Tolu', 8976732, '109 Fils'),
(5, 'Tolu', 9090889, '9 Fixin'),
(6, 'Titi', 93626131, '20 Phil'),
(7, 'TTTT', 97964509, '2003 Phillips'),
(8, 'Iyanu', 9090885, '11 Yins'),
(9, 'Willy ', 839202873, '30 Fave'),
(10, 'Titi', 89003898, '67 Rams'),
(11, 'Gin', 702803029, '44 Tool'),
(12, 'Chin', 8980037, '66 Ox street');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `Price` decimal(50,2) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `Price`, `date`) VALUES
(55, 8, 5, 10, '500.00', '2019-02-01'),
(64, 4, 3, 5, '11.00', '2019-01-02'),
(70, 1, 1, 5, '20.00', '2019-02-01'),
(77, 2, 2, 3, '7.00', '2019-03-03'),
(83, 3, 3, 2, '5.49', '2019-01-03'),
(87, 5, 4, 1, '600.00', '2019-02-01'),
(90, 6, 4, 2, '40.00', '2019-03-03'),
(94, 7, 2, 22, '3.00', '2019-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `exp_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `exp_date`) VALUES
(1, 'Phone', 'Samsung', '10.00', '2019-07-07'),
(2, 'Book', 'Notepad', '5.00', '2019-06-08'),
(3, 'Tea', 'Weightloss', '4.49', '2019-07-09'),
(4, 'Phone ', 'Nokia', '500.00', '2020-04-08'),
(5, 'Soda', 'Fanta', '10.00', '2019-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `profit_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `revenue` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`profit_id`, `supplier_id`, `order_id`, `product_id`, `date`, `revenue`) VALUES
(32, 1, 70, 1, '2019-03-03', '500.95'),
(33, 2, 77, 2, '2019-02-01', '15.00'),
(34, 3, 83, 3, '2019-01-03', '12.56'),
(35, 4, 87, 4, '2019-03-03', '650.88'),
(36, 5, 55, 5, '2019-03-03', '999.99');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `product_id`, `name`, `date`, `quantity`, `phoneNo`, `address`) VALUES
(1, 1, 'Jon', '2018-11-01', 20, 8156999, '13 Phillips'),
(2, 2, 'Snow', '2018-11-01', 20, 82222322, '11 Toms'),
(3, 3, 'Aryaa', '2019-01-01', 30, 31432190, '45 Red'),
(4, 4, 'Ana', '2019-02-02', 10, 70671324, '11 Kings Way'),
(5, 5, 'Ned', '2019-01-01', 10, 98780823, '11 Filly Street ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clerks`
--
ALTER TABLE `clerks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`profit_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clerks`
--
ALTER TABLE `clerks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `profit`
--
ALTER TABLE `profit`
  ADD CONSTRAINT `profit_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `profit_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
