-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 01:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_img` varchar(55) DEFAULT NULL,
  `admin_address` varchar(50) DEFAULT NULL,
  `admin_contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_img`, `admin_address`, `admin_contact`) VALUES
(4, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'images(6).jpg', 'dhaka', '01458693250');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(5, 'Daily Bazar'),
(6, 'Fish Mart'),
(7, 'riverfish'),
(8, 'Sea Fish BD'),
(9, 'Shwapno'),
(10, 'chefcart'),
(11, 'chaldal'),
(12, 'Meena Bazar'),
(13, 'Unimart Online');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `Quantity`) VALUES
(16, '::1', 0),
(18, '::1', 0),
(20, '::1', 0),
(23, '::1', 0),
(32, '::1', 0),
(40, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(20, 'রুই মাছ'),
(21, 'ইলিশ মাছ'),
(22, 'চিতল মাছ'),
(23, 'শিং মাছ'),
(24, 'টুনা মাছ'),
(25, 'কই মাছ'),
(26, 'বাইম মাছ'),
(27, 'মলা মাছ'),
(28, 'ট্যাংরা মাছ'),
(29, 'রূপচাঁদা মাছ'),
(30, 'পাঙ্গাশ মাছ'),
(31, 'গল্দা চিংড়ি'),
(32, 'ছোট চিংড়ি'),
(33, 'সেলমন মাছ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`, `price`) VALUES
(30, 'রুই মাছ', 'Fresh Rui Fish', 'Fresh Rui Fish', 20, 8, 'rui1.jpg', 'rui2.jpg', 'rui3.jpg', '', '2024-06-05 07:28:32', 'true', '400'),
(31, 'ইলিশ মাছ', 'Fresh Ilish Fish', 'Fresh Ilish Fish', 21, 7, 'ilish3.jpg', 'ilish2.jpg', 'ilish2.jpg', '', '2024-06-05 07:36:13', 'true', '1200'),
(32, 'চিতল মাছ', 'Fresh Chital Fish', 'Fresh Chital Fish', 22, 6, 'chital2.jpg', 'chital3.jpg', 'chital2.jpg', '', '2024-06-05 07:38:56', 'true', '800'),
(33, 'শিং মাছ', 'Fresh Shing Fish', 'Fresh Shing Fish', 23, 10, 'shing2.jpg', 'shing3.jpg', 'shing2.jpg', '', '2024-06-05 07:41:05', 'true', '500'),
(34, 'টুনা মাছ', 'Fresh Tuna Fish', 'Fresh Tuna Fish', 24, 8, 'tuna2.jpg', 'tuna3.jpg', 'tuna2.jpg', '', '2024-06-05 07:43:11', 'true', '1300'),
(35, 'কই মাছ', 'Fresh Koi Fish', 'Fresh Koi Fish', 25, 5, 'koi2.jpg', 'koi3.jpg', 'koi2.jpg', '', '2024-06-05 07:46:07', 'true', '500'),
(36, 'বাইম মাছ', 'Fresh Baim fish', 'Fresh Baim fish', 26, 9, 'baim2.jpg', 'baim3.jpg', 'baim2.jpg', '', '2024-06-05 07:48:07', 'true', '800'),
(37, 'মলা মাছ', 'Fresh Mola Fish', 'Fresh Mola Fish', 27, 10, 'mola2.jpg', 'mola3.jpg', 'mola2.jpg', '', '2024-06-05 07:49:38', 'true', '700'),
(38, 'ট্যাংরা মাছ', 'Fresh Tengra Fish', 'Fresh Tengra Fish', 28, 12, 'tengra2.jpg', 'tengra3.jpg', 'tengra2.jpg', '', '2024-06-05 07:53:22', 'true', '600'),
(39, 'রূপচাঁদা মাছ', 'Fresh Rupchada Fish', 'Fresh Rupchada Fish', 29, 10, 'rupchada2.jpg', 'rupchada3.jpg', 'rupchada2.jpg', '', '2024-06-05 07:56:31', 'true', '1300'),
(40, 'পাঙ্গাশ মাছ', 'Fresh Pangas Fish', 'Fresh Pangas Fish', 30, 13, 'pangas2.jpg', 'pangas3.jpg', 'pangas2.jpg', '', '2024-06-05 07:58:34', 'true', '500'),
(41, 'গল্দা চিংড়ি', 'Fresh Golda Chingri Fish', 'Fresh Golda Chingri Fish', 31, 9, 'chingri2.jpg', 'chingri3.jpg', 'chingri2.jpg', '', '2024-06-05 08:01:31', 'true', '1500'),
(42, 'ছোট চিংড়ি', 'Fresh Kucho Chingri Fish', 'Fresh Kucho Chingri Fish', 32, 6, 'choto chingri2.jpg', 'choto chingri3.jpg', 'choto chingri2.jpg', '', '2024-06-05 08:04:22', 'true', '800');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'id', 'id@gmail.com', '$2y$10$uPwtO/HvKJBe6oSBDbUbBOcYOo2L/uyQPE/GXKO9HrOx0I.fmtUKa', 'pop.png', '::1', 'dhaka', '1234556678909'),
(2, 'm', 'm@gmail.com', '$2y$10$2.W8gu3cGdjBNOxAnPwksur4kBCSYZsXaWAApBMtZpvu.0hnbxMje', 'about.jpg', '::1', 'dhaka', '01719900384'),
(3, 'user', 'user@gmail.com', '$2y$10$Yu9B4IHU9QP6vcgL7hx.3O3vVJIlAXxFWVyqIhjUrM4L6Scu3apm2', 'images(3).jpg', '::1', 'dhaka', '01741258963'),
(5, 'id2', 'id2@gmail.com', '$2y$10$B5xTLGITNwCMY/3ZXqPji.3s29S8IKXIf9wBlUulchRXJWTqVQApm', 'images(1).jpg', '::1', 'dfdfd', '01563256971'),
(6, 'new', 'new@gmail.com', '$2y$10$9ckbaB6UzBIRh8LzQkWWPOS.8jX9isI7VMo5YM14pYfMSOhAKb99u', 'Baim_fish.webp', '::1', 'dfdf', '012563695841'),
(7, 'jhon', 'jhon@gmail.com', '$2y$10$rKvJb8n9Afun4ZlzApvOq.VQHp.4Y1bbUCu0AIZiTndkCZb2iaXSq', 'Chingri_fish.jpg', '::1', 'dfdd', '01253698544');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
