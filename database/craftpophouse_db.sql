-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftpophouse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_slug`) VALUES
(1, 'Clothing', 'clothing'),
(2, 'Jewellery', 'jewellery'),
(3, 'Soft Toys', 'soft-toys'),
(4, 'Handmade Items', 'handmade-items'),
(5, 'Room Decor', 'room-decor'),
(6, 'Vintage Goods', 'vintage-goods');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_info`
--

INSERT INTO `email_info` (`email_id`, `email`) VALUES
(3, 'admin@gmail.com'),
(4, 'puneethreddy951@gmail.com'),
(5, 'puneethreddy@gmail.com');

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
  `p_status` varchar(20) NOT NULL,
  `s_process` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `s_process`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed', 'Pending'),
(2, 1, 3, 1, '9L434523M7706801A', 'Completed', 'Pending'),
(3, 1, 3, 1, '8L434523M7706801B', 'Completed', 'Accepted'),
(4, 1, 4, 2, '7L434523M7706801A', 'Completed', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, 'Lee Jia Jun', 'leejiajun@gmail.com', '019899932819', 'excellent', 'Very user friendly website. ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`, `product_status`) VALUES
(1, 1, 1, 'Pink Checkered Skirt', 50, 100, 'Pink Checkered Skirt', 'clothing1.jpg', 'pink, checkered, skirt', 'Pending'),
(2, 1, 1, 'Womens Purple Dress', 70, 100, 'Womens Purple Dress', 'clothing2.jpg', 'womens, purple, dress', 'Pending'),
(3, 1, 1, 'Mens Patterned White Tee', 55, 100, 'Tradisional Patterned White Tee', 'clothing3.jpg', 'mens, white, patterned, tee', 'Pending'),
(4, 1, 1, 'Mens Mismatched Flannel', 125, 100, 'New blue & red design', 'clothing4.jpg', 'mens, mismatched, flannel', 'Pending'),
(5, 1, 1, 'Mens Figured Cotton Shirt', 79, 100, 'Small Red Couple Figured Cotton Shirt', 'clothing5.jpg', 'mens, red, cotton, shirt', 'Pending'),
(6, 1, 1, 'Short Sleeves Fringed Shirt', 99, 100, 'Tradition Tribal Design', 'clothing6.jpg', 'short, sleeves, fringed, shirt', 'Pending'),
(7, 1, 1, 'Black & White Striped Dress', 99, 100, 'Black & White officer wear', 'clothing7.jpg', 'black, white, officer, wear', 'Pending'),
(8, 1, 1, 'Polka Dotted Red Dress', 79, 100, 'Modern Polka Dotted Dress', 'clothing8.png', 'modern, polka, dotted, dress', 'Pending'),
(9, 2, 1, 'Indian Handmade Jewellery', 12, 100, 'Green Orange Jewellery', 'jewellery1.jpg', 'green, indian, orange, handmade, jewellery', 'Pending'),
(10, 2, 1, 'Indian Handmade Jewellery', 12, 100, 'Light Green Fuchsia Pink', 'jewellery2.jpg', 'indian, handmade, jewellery', 'Pending'),
(11, 2, 1, 'Handmade 925 Sterling Silver', 149, 100, 'Oval shaped with \"X\" design', 'jewellery3.jpg', 'oval, shaped, with, x', 'Pending'),
(12, 2, 1, 'Handmade 925 Sterling Silver', 129, 100, 'Heart shaped design', 'jewellery4.jpg', 'heart, shaped, design', 'Pending'),
(13, 2, 1, 'Tassel Beaded Bracelet', 99, 100, 'Jet Black Design', 'jewellery5.jpg', 'jet, black, design', 'Pending'),
(14, 2, 1, 'Vintage Silver Necklace', 179, 100, 'Sherlock Holmes Design', 'jewellery6.jpg', 'sherlock, holmes, design', 'Pending'),
(15, 2, 1, 'Beaded Cuffs Jewellery', 39, 100, 'Diamond Necklaces with gift', 'jewellery7.jpg', 'diamond, necklace, with, gift', 'Pending'),
(16, 2, 1, 'Tagua Nut Necklaces', 129, 100, 'Special Designed Necklaces', 'jewellery7.jpg', 'special, designed, necklaces', 'Pending'),
(17, 3, 1, 'Lion Soft Toy', 25, 100, 'Lion', 'softtoy1.jpg', 'lion, soft, toy', 'Pending'),
(18, 3, 1, 'Monster Inc Toy', 35, 100, 'Mile Wazowski', 'softtoy2.jpg', 'monster, inc, toy, mike, wazowski', 'Pending'),
(19, 3, 1, 'Stuffed Koala Bear', 75, 100, 'Feels like Australia', 'softtoy3.jpg', 'feels, like, australia, koala, bear', 'Pending'),
(20, 3, 1, 'Kitty Cat', 30, 100, 'Stuffed Pink Cute Cat', 'softtoy4.jpg', 'stuffed, pink, cute, cat', 'Pending'),
(21, 3, 1, 'Stithch and Angel Set', 99, 100, 'Cute Stuffed Soft Toy Set', 'softtoy5.jpg', 'stitch, angel, set', 'Pending'),
(22, 3, 1, 'Stuffed Penguin', 39, 100, 'Cute Little Penguin', 'softtoy6.jpg', 'cute, little, penguins', 'Pending'),
(23, 3, 1, 'Pokemon Soft Toy', 27, 100, 'Pikachu', 'softtoy7.jpg', 'pokemon, soft, toy, pikachu', 'Pending'),
(24, 3, 1, 'Handmade Fox Toy', 79, 100, 'Limited Edition', 'softtoy8.jpg', 'handmade, fox, toy', 'Pending'),
(25, 4, 1, 'Handmade Rattan Basket', 50, 100, 'Different colours to choose from', 'handmade1.jpg', 'handmade, rattan, basket', 'Pending'),
(26, 4, 1, 'Handmade Crayon Bookmark', 15, 100, 'Made by young children from age 7 - 10', 'handmade2.jpg', 'handmade, crayon, bookmark', 'Pending'),
(27, 4, 1, 'Handmade Patterned Basket', 75, 100, 'Beautiful coloured mosaic design', 'handmade3.jpg', 'handmade, patterned, basket', 'Pending'),
(28, 4, 1, 'Handmade cup holder', 25, 100, 'Knitted special sunflower design', 'handmade4.jpg', 'handmade, cup, holder', 'Pending'),
(29, 4, 1, 'Handmade Animal Figurine', 89, 100, 'Wood-Crafted Animal Figurine', 'handmade5.jpg', 'handmade, wood, animal, figurine', 'Pending'),
(30, 4, 1, 'Handmade Wooden Plates', 15, 100, 'Minimal hand carved nature designs', 'handmade6.jpg', 'minimal, hand, carved, nature, design', 'Pending'),
(31, 4, 1, 'Handmade Cylindrical Basket', 39, 100, 'Long strap design for shoulder carrying', 'handmade7.jpg', 'handmade, cylindrical, basket', 'Pending'),
(32, 4, 1, 'Handmade Spherical Gift Box', 25, 100, 'Coloured Romantic GIft Box for loved ones', 'handmade8.jpg', 'handmade, spherical, gift, card', 'Pending'),
(33, 5, 1, 'Feather Crafts', 20, 100, 'Home Decoration Feather', 'decor1.jpg', 'home, decoration, feather, crafts', 'Pending'),
(34, 5, 1, 'Wine bottle craft', 40, 100, 'Wine bottle craft decoration', 'decor2.jpg', 'wine, bottle, craft', 'Pending'),
(35, 5, 1, 'Tulle Roll', 10, 100, 'Tulle Roll 25Yard', 'decor3.jpg', 'Tulle, Roll, 25Yard', 'Pending'),
(36, 5, 1, 'LED Decoration', 54, 100, 'Homemade LED Decoration', 'decor4.jpg', 'Homemade LED Decoration', 'Pending'),
(37, 5, 1, 'Vase and Jar Set Decor', 25, 100, 'Home Decoration Vase & Jar Set', 'decor5.jpg', 'home, decoration, vase, jar', 'Pending'),
(38, 5, 1, 'Flower Ceiling Decor', 30, 100, 'Handmade flower design decor', 'decor6.jpg', 'flower, ceiling, decor', 'Pending'),
(39, 5, 1, 'Wooden Designed Vase', 10, 100, 'Authentic Nature Home Decor', 'decor7.jpg', 'authentic, nature, home, decor', 'Pending'),
(40, 5, 1, 'Hanging Transparent Vase', 60, 100, 'Colourful polka dots outer layer design', 'decor8.jpg', 'colourful, polka, dots, outer, layer, design', 'Pending'),
(41, 6, 1, 'Vintage Camera', 499, 100, 'Vintage Camera from 1955', 'vintage1.jpg', 'vintage, camera, 1955', 'Pending'),
(42, 6, 1, 'Vintage Watch', 780, 100, 'Vintage Watch from 1942', 'vintage2.jpg', 'vintage, watch, 1942', 'Pending'),
(43, 6, 1, 'CD Player', 450, 100, 'CD player from 1966', 'vintage3.jpg', 'cd, player, 1966', 'Pending'),
(44, 6, 1, 'Gramophone', 199, 100, 'Gramophone from 1945', 'vintage4.jpg', 'gramophone, 1945', 'Pending'),
(45, 6, 1, 'Vintage Lamp', 99, 100, 'Lamp from year 1978', 'vintage5.jpg', 'lamp, year, 1978', 'Pending'),
(46, 6, 1, 'Gramophone', 780, 100, 'Gramiphone 1955 Vintage', 'vintage6.jpg', 'vintage, gramophone, 1955', 'Pending'),
(47, 6, 1, 'Vivitar Camera', 450, 100, 'Camera from year 1977', 'vintage7.png', 'vivitar, camera, 1977', 'Pending'),
(48, 6, 1, 'Golden Wheel', 99, 100, 'Golden wheel collection', 'vintage8.jpg', 'golden, wheel, collection', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `rating_system`
--

CREATE TABLE `rating_system` (
  `rating_id` int(10) NOT NULL,
  `rateindex` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_system`
--

INSERT INTO `rating_system` (`rating_id`, `rateindex`) VALUES
(1, 3),
(2, 4),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Nice Product !', 'Lee Jia Jun', '2020-05-30 13:36:41');

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
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `photo`) VALUES
(4, 'Lee', 'Jia Jun', 'leejiajun@gmail.com', '$2y$10$qRu.zIWqgAq96ucOCjjR/Oxu50jLxsgpuZF9OmLIC8NuQhW/ovGf2', '0190000000', 'Swinburne Sarawak, 93000, Kuching, Sarawak', '');

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_cat_id` (`cat_id`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indexes for table `rating_system`
--
ALTER TABLE `rating_system`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `rating_system`
--
ALTER TABLE `rating_system`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
