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
(2, 'Simon', 'simon@gmail.com', '1234567890abcd', '0'),
(3, 'Jason', 'jason@gmail.com', '1234567890abcd', '0');

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
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


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
(2, 1, 3, 1, '9L434523M7706801A', 'Completed'),
(3, 1, 3, 1, '8L434523M7706801B', 'Completed'),
(4, 1, 4, 2, '7L434523M7706801A', 'Completed');

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
(3, 1, 1, 'Mens Patterned White Tee', 55, 100, 'Tradisional Patterned White Tee', 'clothing3.jpg', 'mens, white, patterned, tee'),
(4, 1, 1, 'Mens Mismatched Flannel', 125, 100, 'New blue & red design', 'clothing4.jpg', 'mens, mismatched, flannel'),
(5, 1, 1, 'Mens Figured Cotton Shirt', 79, 100, 'Small Red Couple Figured Cotton Shirt', 'clothing5.jpg', 'mens, red, cotton, shirt'),
(6, 1, 1, 'Short Sleeves Fringed Shirt', 99, 100, 'Tradition Tribal Design', 'clothing6.jpg', 'short, sleeves, fringed, shirt'),
(7, 1, 1, 'Black & White Striped Dress', 99, 100, 'Black & White officer wear', 'clothing7.jpg', 'black, white, officer, wear'),
(8, 1, 1, 'Polka Dotted Red Dress', 79, 100, 'Modern Polka Dotted Dress', 'clothing8.jpg', 'modern, polka, dotted, dress'),
(9, 2, 1, 'Indian Handmade Jewellery', 12, 100, 'Green Orange Jewellery', 'jewellery1.jpg', 'green, indian, orange, handmade, jewellery'),
(10, 2, 1, 'Indian Handmade Jewellery', 12, 100, 'Light Green Fuchsia Pink', 'jewellery2.jpg', 'indian, handmade, jewellery'),
(11, 2, 1, 'Handmade 925 Sterling Silver', 149, 100, 'Oval shaped with "X" design', 'jewellery3.jpg', 'oval, shaped, with, x'),
(12, 2, 1, 'Handmade 925 Sterling Silver', 129, 100, 'Heart shaped design', 'jewellery4.jpg', 'heart, shaped, design'),
(13, 2, 1, 'Tassel Beaded Bracelet', 99, 100, 'Jet Black Design', 'jewellery5.jpg', 'jet, black, design'),
(14, 2, 1, 'Vintage Silver Necklace', 179, 100, 'Sherlock Holmes Design', 'jewellery6.jpg', 'sherlock, holmes, design'),
(15, 2, 1, 'Beaded Cuffs Jewellery', 39, 100, 'Diamond Necklaces with gift', 'jewellery7.jpg', 'diamond, necklace, with, gift'),
(16, 2, 1, 'Tagua Nut Necklaces', 129, 100, 'Special Designed Necklaces', 'jewellery7.jpg', 'special, designed, necklaces'),
(17, 3, 1, 'Lion Soft Toy', 25, 100, 'Lion', 'softtoy1.jpg', 'lion, soft, toy'),
(18, 3, 1, 'Monster Inc Toy', 35, 100, 'Mile Wazowski', 'softtoy2.jpg', 'monster, inc, toy, mike, wazowski'),
(19, 3, 1, 'Stuffed Koala Bear', 75, 100, 'Feels like Australia', 'softtoy3.jpg', 'feels, like, australia, koala, bear'),
(20, 3, 1, 'Kitty Cat', 30, 100, 'Stuffed Pink Cute Cat', 'softtoy4.jpg', 'stuffed, pink, cute, cat'),
(21, 3, 1, 'Stithch and Angel Set', 99, 100, 'Cute Stuffed Soft Toy Set', 'softtoy5.jpg', 'stitch, angel, set'),
(22, 3, 1, 'Stuffed Penguin', 39, 100, 'Cute Little Penguin', 'softtoy6.jpg', 'cute, little, penguins'),
(23, 3, 1, 'Pokemon Soft Toy', 27, 100, 'Pikachu', 'softtoy7.jpg', 'pokemon, soft, toy, pikachu'),
(24, 3, 1, 'Handmade Fox Toy', 79, 100, 'Limited Edition', 'softtoy8.jpg', 'handmade, fox, toy'),
(25, 4, 1, 'Handmade Rattan Basket', 50, 100, 'Different colours to choose from', 'handmade1.jpg', 'handmade, rattan, basket'),
(26, 4, 1, 'Handmade Crayon Bookmark', 15, 100, 'Made by young children from age 7 - 10', 'handmade2.jpg', 'handmade, crayon, bookmark'),
(27, 4, 1, 'Handmade Patterned Basket', 75, 100, 'Beautiful coloured mosaic design', 'handmade3.jpg', 'handmade, patterned, basket'),
(28, 4, 1, 'Handmade cup holder', 25, 100, 'Knitted special sunflower design', 'handmade4.jpg', 'handmade, cup, holder'),
(29, 4, 1, 'Handmade Animal Figurine', 89, 100, 'Wood-Crafted Animal Figurine', 'handmade5.jpg', 'handmade, wood, animal, figurine'),
(30, 4, 1, 'Handmade Wooden Plates', 15, 100, 'Minimal hand carved nature designs', 'handmade6.jpg', 'minimal, hand, carved, nature, design'),
(31, 4, 1, 'Handmade Cylindrical Basket', 39, 100, 'Long strap design for shoulder carrying', 'handmade7.jpg', 'handmade, cylindrical, basket'),
(32, 4, 1, 'Handmade Spherical Gift Box', 25, 100, 'Coloured Romantic GIft Box for loved ones', 'handmade8.jpg', 'handmade, spherical, gift, card'),
(33, 5, 1, 'Feather Crafts', 20, 100, 'Home Decoration Feather', 'decor1.jpg', 'home, decoration, feather, crafts'),
(34, 5, 1, 'Wine bottle craft', 40, 100, 'Wine bottle craft decoration', 'decor2.jpg', 'wine, bottle, craft'),
(35, 5, 1, 'Tulle Roll', 10, 100, 'Tulle Roll 25Yard', 'decor3.jpg', 'Tulle, Roll, 25Yard'),
(36, 5, 1, 'LED Decoration', 54, 100, 'Homemade LED Decoration', 'decor4.jpg', 'Homemade LED Decoration'),
(37, 5, 1, 'Vase and Jar Set Decor', 25, 100, 'Home Decoration Vase & Jar Set', 'decor5.jpg', 'home, decoration, vase, jar'),
(38, 5, 1, 'Flower Ceiling Decor', 30, 100, 'Handmade flower design decor', 'decor6.jpg', 'flower, ceiling, decor'),
(39, 5, 1, 'Wooden Designed Vase', 10, 100, 'Authentic Nature Home Decor', 'decor7.jpg', 'authentic, nature, home, decor'),
(40, 5, 1, 'Hanging Transparent Vase', 60, 100, 'Colourful polka dots outer layer design', 'decor8.jpg', 'colourful, polka, dots, outer, layer, design'),
(41, 6, 1, 'Vintage Camera', 499, 100, 'Vintage Camera from 1955', 'vintage1.jpg', 'vintage, camera, 1955'),
(42, 6, 1, 'Vintage Watch', 780, 100, 'Vintage Watch from 1942', 'vintage2.jpg', 'vintage, watch, 1942'),
(43, 6, 1, 'CD Player', 450, 100, 'CD player from 1966', 'vintage3.jpg', 'cd, player, 1966'),
(44, 6, 1, 'Gramophone', 199, 100, 'Gramophone from 1945', 'vintage4.jpg', 'gramophone, 1945'),
(45, 6, 1, 'Vintage Lamp', 99, 100, 'Lamp from year 1978', 'vintage5.jpg', 'lamp, year, 1978'),
(46, 6, 1, 'Gramophone', 780, 100, 'Gramiphone 1955 Vintage', 'vintage6.jpg', 'vintage, gramophone, 1955'),
(47, 6, 1, 'Vivitar Camera', 450, 100, 'Camera from year 1977', 'vintage7.jpg', 'vivitar, camera, 1977'),
(48, 6, 1, 'Golden Wheel', 99, 100, 'Golden wheel collection', 'vintage8.jpg', 'golden, wheel, collection');

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
(12, 'puneeth', 'Reddy', 'puneethreddy951@gmail.com', 'puneeth', '9448121558', '123456789', 'sdcjns,djc'),
(15, 'hemu', 'ajhgdg', 'puneethreddy951@gmail.com', '346778', '536487276', ',mdnbca', 'asdmhmhvbv'),
(16, 'venky', 'vs', 'venkey@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(19, 'abhishek', 'bs', 'abhishekbs@gmail.com', 'asdcsdcc', '9871236534', 'bangalore', 'hassan'),
(21, 'prajval', 'mcta', 'prajvalmcta@gmail.com', '1234545662', '202-555-01', 'bangalore', 'kumbalagodu'),
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(23, 'hemanth', 'reddy', 'hemanth@gmail.com', 'Puneeth@123', '9876543234', 'Bangalore', 'Kumbalagodu'),
(24, 'newuser', 'user', 'newuser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu'),
(25, 'otheruser', 'user', 'otheruser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu');

--
-- Triggers `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info_backup`
--

CREATE TABLE `user_info_backup` (
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
-- Dumping data for table `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(12, 'puneeth', 'Reddy', 'puneethreddy951@gmail.com', '123456789', '9448121558', '123456789', 'sdcjns,djc'),
(14, 'hemanthu', 'reddy', 'hemanthreddy951@gmail.com', '123456788', '6526436723', 's,dc wfjvnvn', 'b efhfhvvbr'),
(15, 'hemu', 'ajhgdg', 'keeru@gmail.com', '346778', '536487276', ',mdnbca', 'asdmhmhvbv'),
(16, 'venky', 'vs', 'venkey@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(19, 'abhishek', 'bs', 'abhishekbs@gmail.com', 'asdcsdcc', '9871236534', 'bangalore', 'hassan'),
(20, 'pramod', 'vh', 'pramod@gmail.com', '124335353', '9767645653', 'ksbdfcdf', 'sjrgrevgsib'),
(21, 'prajval', 'mcta', 'prajvalmcta@gmail.com', '1234545662', '202-555-01', 'bangalore', 'kumbalagodu'),
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(23, 'hemanth', 'reddy', 'hemanth@gmail.com', 'Puneeth@123', '9876543234', 'Bangalore', 'Kumbalagodu'),
(24, 'newuser', 'user', 'newuser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu'),
(25, 'otheruser', 'user', 'otheruser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `seller`
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
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--
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
