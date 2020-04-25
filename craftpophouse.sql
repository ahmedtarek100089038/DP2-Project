/* Database Name: craftpophouse.sql */
/* Host: 127.0.0.1 */

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `role`, `admin_img`) VALUES
(1, 'LEE JIA JUN', '101210855@students.swinburne.edu.my', '12345678', 'Admin', '333583.png'),
(2, 'JASON GOH WEI TING', '101210787@students.swinburne.edu.my', '12345678', 'Admin', '813054.png');

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `total_amt` float NOT NULL,
  `total_qty` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `orders` (`order_id`, `customer`, `shipping_id`, `status`, `total_amt`, `total_qty`, `payment_type`, `created_date`, `modified_date`) VALUES
(01, 'ahmed', 0, 0, 0, 0, '', '2018-01-15 12:30:48', '2018-01-15 12:30:48'),
(02, 'shweli', 0, 0, 0, 0, '', '2018-01-18 11:38:51', '2018-01-18 11:38:51');

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `product` (`id`, `product_name`, `categories`, `sub_cat`, `brand`, `supplier`, `description`, `price`, `cover`, `qty`, `created_date`, `modified_date`) VALUES
(10, 'item1', '13', '14', '1', '5', '', '49.22', 'sweater5.PNG', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'item2', '13', '12', '1', '5', '', '42.99', 'sweater.PNG', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `shipping_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shipping` (`shipping_id`, `full_name`, `email`, `store_id`, `phone`, `status`, `shipping_type`, `street_address`, `country`, `state`, `city`, `zipcode`, `created_date`, `modified_date`, `shipping_time`) VALUES
(1, 'John', 'john12@gmail.com', 0, '0198000000', 'register', 'home', 'no(241),aung thiri street,DAWBON TOWNSHIP', 'MYANMAR', 'YANGON', 'YANGON', 12312, '2020-02-09 15:50:11', '0000-00-00 00:00:00', '2020-02-09 15:50:11');

