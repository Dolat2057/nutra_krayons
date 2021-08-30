-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 03:26 PM
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
-- Database: `nutra_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `ORDER_ID` varchar(233) NOT NULL,
  `payment_status` varchar(500) NOT NULL,
  `CUST_ID` varchar(255) NOT NULL,
  `INDUSTRY_TYPE_ID` varchar(211) NOT NULL,
  `CHANNEL_ID` varchar(211) NOT NULL,
  `TXN_AMOUNT` varchar(211) NOT NULL,
  `CALLBACK_URL` varchar(211) NOT NULL,
  `email` varchar(123) NOT NULL,
  `first_name` varchar(123) NOT NULL,
  `last_name` varchar(123) NOT NULL,
  `address` varchar(123) NOT NULL,
  `apartment` varchar(123) NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product_id` int(233) NOT NULL,
  `product_name` varchar(233) NOT NULL,
  `product_image` varchar(233) NOT NULL,
  `price` varchar(233) NOT NULL,
  `order_date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_slider`
--

CREATE TABLE `product_slider` (
  `id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `big-image1` varchar(255) NOT NULL,
  `small-image1` varchar(255) NOT NULL,
  `big-image2` varchar(255) NOT NULL,
  `small-image2` varchar(255) NOT NULL,
  `big-image3` varchar(255) NOT NULL,
  `small-image3` varchar(255) NOT NULL,
  `big-image4` varchar(255) NOT NULL,
  `small-image4` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `small_description` varchar(255) NOT NULL,
  `big_description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `shipping_method` varchar(255) NOT NULL,
  `reviews` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_slider`
--

INSERT INTO `product_slider` (`id`, `product_id`, `product_type`, `image`, `big-image1`, `small-image1`, `big-image2`, `small-image2`, `big-image3`, `small-image3`, `big-image4`, `small-image4`, `title`, `small_description`, `big_description`, `price`, `button`, `shipping_method`, `reviews`) VALUES
(1, '1000', 'Haircare', '/assests/images/product-images/slider-2.1.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT1', 'WE OFFER THE BEST PRODUCT', 'dolat', 12000, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(2, '2000', 'Haircare', '/assests/images/product-images/slider-2.2.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT12', 'WE OFFER THE BEST PRODUCT12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 122Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 13000, 'VIEW DETAILS', 'COD,ONLINE payment21', '*****21'),
(3, '3000', 'Haircare', '/assests/images/product-images/slider-2.3.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTq', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 1400, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(4, '4000', 'Weightloss', '/assests/images/product-images/slider-2.4.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT34', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 15024, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(5, '5000', 'Weightloss', '/assests/images/product-images/slider-2.5.jpg', '/assests/images/product-images/big-image1.jpg', '/assests/images/product-images/small-image1.jpg', '/assests/images/product-images/big-image2.jpg', '/assests/images/product-images/small-image2.jpg', '/assests/images/product-images/big-image2.jpg', '/assests/images/product-images/small-image2.jpg', '/assests/images/product-images/big-image1.jpg', '/assests/images/product-images/small-image1.jpg', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 160, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(6, '6000', 'Weightloss', '/assests/images/product-images/slider-2.6.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 170, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(7, '7000', 'Womenwellness', '/assests/images/product-images/slider-2.7.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 180, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(8, '8000', 'Womenwellness', '/assests/images/product-images/slider-2.8.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTre', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 190, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(9, '9000', 'Womenwellness', '/assests/images/product-images/slider-2.9.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 200, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(10, '10000', 'Sexualwellness', '/assests/images/product-images/slider-2.10.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 21087, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(11, '11000', 'Sexualwellness', '/assests/images/product-images/slider-2.11.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 220, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(12, '12000', 'Sexualwellness', '/assests/images/product-images/slider-2.12.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTr', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 230, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(13, '13000', 'Immunitybooster', '/assests/images/product-images/slider-2.13.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTe', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 240, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(14, '14000', 'Immunitybooster', '/assests/images/product-images/slider-2.14.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTw', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 250, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(15, '15000', 'Immunitybooster', '/assests/images/product-images/slider-2.15.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTq', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 260, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(16, '16000', 'Weightloss', '/assests/images/product-images/slider-2.4.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT34', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 15024, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(17, '17000', 'Weightloss', '/assests/images/product-images/slider-2.5.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 160, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(18, '18000', 'Weightloss', '/assests/images/product-images/slider-2.6.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 170, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(19, '19000', 'Haircare', '/assests/images/product-images/slider-2.1.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT1', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 12000, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(20, '20000', 'Haircare', '/assests/images/product-images/slider-2.2.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT12', 'WE OFFER THE BEST PRODUCT12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 122Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 13000, 'VIEW DETAILS', 'COD,ONLINE payment21', '*****21'),
(21, '21000', 'Haircare', '/assests/images/product-images/slider-2.3.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCTq', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 1400, 'VIEW DETAILS', 'COD,ONLINE payment', '*****'),
(22, '22000', 'Haircare', '/assests/images/product-images/slider-2.1.jpg', '', '', '', '', '', '', '', '', 'KETO PRODUCT1', 'WE OFFER THE BEST PRODUCT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown.', 12000, 'VIEW DETAILS', 'COD,ONLINE payment', '*****');

-- --------------------------------------------------------

--
-- Table structure for table `subs_email`
--

CREATE TABLE `subs_email` (
  `subs_id` int(252) NOT NULL,
  `subsemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_registration`
--

CREATE TABLE `users_registration` (
  `id` int(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_registration`
--

INSERT INTO `users_registration` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'dolat', 'rathore', 'dolatrathore18@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_slider`
--
ALTER TABLE `product_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subs_email`
--
ALTER TABLE `subs_email`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `users_registration`
--
ALTER TABLE `users_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_slider`
--
ALTER TABLE `product_slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subs_email`
--
ALTER TABLE `subs_email`
  MODIFY `subs_id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_registration`
--
ALTER TABLE `users_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
