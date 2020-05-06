-- Database Name: craftpophouse.sql 
-- Author: Lee Jia Jun 
-- Host: 127.0.0.1 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `craftpophouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

Create TABLE `admin` (
	`id` int(11) NOT NULL,
	`name` varchar(50) NOT NULL,
	`email` varchar(100) NOT NULL,
	`password` varchar(255) NOT NULL,
	`is_active` enum('0', '1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

Create TABLE `seller` (
	`id` int(11) NOT NULL,
	`name` varchar(50) NOT NULL,
	`email` varchar(100) NOT NULL,
	`password` varchar(255) NOT NULL,
	`is_active` enum('0', '1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

Insert INTO `seller` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Lu', 'lu@gmail.com', '1234567890abc', '1'),
(2, 'Simon', 'simon@gmail.com', '1234567890abcd', '0'); 

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Craft Pop House'),
(2, 'Others');


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
	`id` int(10) NOT NULL,
	`p_id` int(10) NOT NULL,
	`ip_add` varchar(250) NOT NULL,
	`user_id` int(10) DEFAULT NULL,
	`qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
	`cat_id` int(100) NOT NULL,
	`cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Clothing'),
(2, 'Jewellery'),
(3, 'Soft Toys'),
(4, 'Handmade Items'),
(5, 'Room Decor'),
(6, 'Vintage Goods');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
	`order_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`product_id` int(11) NOT NULL,
	`qty` int(11) NOT NULL,
	`trx_id` varchar(255) NOT NULL,
	`p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 3, 1, '9L434523M7706801A', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Pink Checkered Skirt', 50, 100, 'Pink Checkered Skirt', 'clothing1.jpg', 'pink, checkered, skirt'),
(2, 1, 1, 'Womens Purple Dress', 70, 100, 'Womens Purple Dress', 'clothing2.jpg', 'womens, purple, dress'),
(3, 1, 1, 'Mens Patterned Tee', 55, 100, 'Tradisional Patterned White Tee', 'clothing3.jpg', 'mens, patterned, tee'),
(4, 1, 1, 'Mens Formal Shirt', 125, 100, 'Formal Shirt with Stars Design', 'clothing4.jpg', 'mens, formal, shirt'),
(5, 1, 1, 'Mens Cotton Shirt', 79, 100, 'Small Red Couple Figured Cotton Shirt', 'clothing5.jpg', 'mens, cotton, shirt'),
(6, 1, 1, 'Short Sleeves Fringed Shirt', 99, 100, 'Tradition Tribal Design', 'clothing6.jpg', 'short, sleeves, fringed, shirt');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
	`user_id` int(10) NOT NULL,
	`first_name` varchar(100) NOT NULL,
	`last_name` varchar(100) NOT NULL,
	`email` varchar(300) NOT NULL,
	`password` varchar(300) NOT NULL,
	`mobile` varchar(10) NOT NULL,
	`address1` varchar(300) NOT NULL,
	`address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Simon', 'Lu', 'simonlu@gmail.com', '1234567890abc', '0198008888', 'Simpang Tiga', '93300'),
(2, 'Xavier', 'Lee', 'xavierlee@gmail.com', '1234567890abcd', '0190800991', 'Simpang Tiga', '93300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
	ADD PRIMARY KEY (`id`),
	ADD UNIQUE KEY `email` (`email`);
	
--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
	ADD PRIMARY KEY (`id`),
	ADD UNIQUE KEY `email` (`email`);
	
--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);
	
--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
  
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
  
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;
