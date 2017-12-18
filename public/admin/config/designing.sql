-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 11:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `designing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Laptops'),
(2, 'Mobile phones'),
(3, 'Game Consoles'),
(4, 'Game Accesories');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Memory` varchar(100) NOT NULL,
  `Ram` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `Display` varchar(100) NOT NULL,
  `Font_camera` varchar(100) NOT NULL,
  `Back_camera` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user`, `label`, `title`, `header`, `body`) VALUES
(1, 1, 'Home', 'Home page', 'Welcome to our site,Emirates shop center', 'dsvadsfkjgvadsvbdnksdfsdfgfdgdggdgbdfjvbxcjbxzhvsdfvfdnstrttoyigiusffhgvsacdsjcdsnvekvnjdbvdjvbsdfugericmvteirigoeruofhsyeagfedfvsergitrth'),
(2, 1, 'About us', 'About us', 'This is about us page', 'ffhjsfbhshrjgbhshjfbsdhfvbasdjhvbhsdbhvbcbxcvbsdghbdghsdbjfsfhfdsbbvhsdbhgbhsdhfdhfhsdhffh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(250) NOT NULL,
  `category` int(11) NOT NULL,
  `memory` varchar(100) DEFAULT NULL,
  `Ram` varchar(100) DEFAULT NULL,
  `processor` varchar(250) DEFAULT NULL,
  `Display` varchar(100) DEFAULT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `category`, `memory`, `Ram`, `processor`, `Display`, `images`) VALUES
(1, 'Tecno CX', 246, 320000, 2, '16GB', '2GB', 'MediaTek MT6582 Chipset', '5.5 inches', 'tecno c9.jpg'),
(2, 'Itel S11', 200, 180000, 2, '8GB', '1GB', '1.3GHz Quad-core peocessor', '5.0 inches', 'itel s11.jpg'),
(3, 'Macbook pro 2015', 150, 1700000, 1, '250 GB', '16GB', 'Intel core i7 NVDIA GEFORCE', '15inches', 'Apple1.jpg'),
(4, 'Macbook Air 2013', 20, 1500000, 1, '500GB', '8GB', 'Intel core i5 7th Generation', '14 inches', 'Apple2.jpg'),
(5, 'Hp chromebook 3', 198, 850000, 1, '500GB', '4GB', 'intel celeron 6th Gen', '15 inch', 'bigsize1.png'),
(6, 'Dell Inspiron n3', 300, 730000, 1, '1TB', '8GB', 'intel core i3 7th Gen', '15 inch HD', 'laptop4.jpg'),
(7, 'Macbook Air pro 2017', 25, 2000000, 1, '256GB', '16GB', 'intel core i5 ', '14 inches', 'Apple3.jpg'),
(8, 'samsung S8', 147, 1200000, 2, '64GB', '4GB', 'Android 7.0 (Nougat)', '5.8 inches', 'smart2.jpg'),
(9, 'Ps4 Slim White', 75, 750000, 3, '500GB', '8GB', '1.6GHZ 8-octa core AMD Radeon', '', 'ps4white.jpg'),
(10, 'Fifa 17 Ps4', 150, 150000, 4, '', '', '', '', 'fifa17.jpg'),
(11, 'The Beast 530', 7, 2500000, 1, '2TB', '16GB', 'intel core i7 NVDIA GEFORCE', '15 inch HD', 'laptop3.jpg'),
(13, 'Ps4 Slim Black', 100, 750000, 3, '500GB', '16GB', '', '', 'ps4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `name`, `quantity`, `price`, `payment_method`) VALUES
(1, 'Macbook pro 2015', '1', '1700000', 'M-pesa'),
(2, 'Iphone 8', '2', '4000000', 'Tigo pesa'),
(3, 'Hp chromebook 3', '1', '850000', 'Tigo pesa'),
(4, 'Dell Inspiron n3', '1', '730000', 'Visa'),
(5, 'Tecno C9', '2', '640000', 'Paypall'),
(6, 'Macbook Air pro 2017', '1', '2000000', 'M-pesa'),
(7, 'Tecno C9', '10', '3200000', 'Tigo pesa'),
(8, 'samsung S8', '2', '2400000', 'M-pesa'),
(9, 'samsung S8', '2', '2400000', 'M-pesa'),
(10, 'samsung S8', '1', '1200000', 'Visa'),
(11, 'Tecno C9', '4', '1280000', 'Paypall'),
(12, 'The Beast 530', '3', '7500000', 'Paypall'),
(13, 'Hp chromebook 3', '2', '1700000', 'Visa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `phone`, `email`, `password`, `status`) VALUES
(1, 'Machaba', 'Ezekiel', '0788787970', 'machaba@gmail.com', 'db42c6bd40b50c5c0ac830263b98a0e041dcfa23', 1),
(2, 'John ', 'Saimora', '0788787979', 'saimorajr@gmail.com', '845e30a4544bdfa117a77b2f7cd0b281a27089e9', 1),
(3, 'Paul', 'Manoni', '0789678900', '01paulmanoni@gmail.com', '4d834b7ef3ec3604215fb4e50fd551a2233a3ca8', 1),
(4, 'Loveness ', 'Sam', '0765567896', 'loveness@yahoo.com', 'e824b921365eb6687f90d2d04da1b95d1468febe', 1),
(5, 'Godfrey ', 'Machaba', '0755282726', 'godfreymachaba17@gmail.com', 'ad933258431ca62df5615e9ef1c2c6faf61e4020', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
