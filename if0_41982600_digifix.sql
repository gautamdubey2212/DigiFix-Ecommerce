-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.infinityfree.com
-- Generation Time: May 30, 2026 at 04:16 AM
-- Server version: 11.4.11-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_41982600_digifix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`) VALUES
();

-- --------------------------------------------------------

--
-- Table structure for table `checkout_orders`
--

CREATE TABLE `checkout_orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `street_address` text DEFAULT NULL,
  `flat_no` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_custom_id` varchar(255) DEFAULT NULL,
  `payment_screenshot` text DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_orders`
--

INSERT INTO `checkout_orders` (`id`, `full_name`, `email`, `phone`, `country`, `state`, `city`, `street_address`, `flat_no`, `notes`, `created_at`, `order_custom_id`, `payment_screenshot`, `payment_status`) VALUES
(1, 'Nidhi Mishra', 'nidhi@gmail.com', '6386416861', 'India', 'Maharashtra', 'Mumbai', 'Ritu fame, RituParadise', '504', 'Quick', '2026-05-19 10:55:14', NULL, NULL, NULL),
(2, 'Uttam Tiwari', 'uttam@gmail.com', '6386416861', 'America', 'Thane', 'Mumbai', 'Ritu paradise phase 1', '702', 'i want a quick Delivery ASAP!!!!!!!', '2026-05-19 13:32:36', NULL, NULL, NULL),
(3, 'Uttam Tiwari', 'uttam@gmail.com', '6386416861', 'America', 'Thane', 'Mumbai', 'Ritu paradise phase 1', '702', 'i want a quick Delivery ASAP!!!!!!!', '2026-05-19 13:34:49', NULL, NULL, NULL),
(4, 'Uttam Tiwari', 'uttam@gmail.com', '6386416861', 'America', 'Thane', 'Mumbai', 'Ritu paradise phase 1', '702', 'i want a quick Delivery ASAP!!!!!!!', '2026-05-19 13:37:32', NULL, NULL, NULL),
(5, 'Santosh Dubey', 'jumohydro@gmail.com', '9565885999', 'India', 'Maharashtra', 'Mumbai', 'Ritu paradise phase 1, Ritu Fame, Near Gcc club, Mira Road E- 401107', '504', 'Please make it faster and one more thing any can i get? 24*7 assistance?', '2026-05-20 09:09:39', NULL, NULL, NULL),
(6, 'Uttam tiwari', 'shanutiwari2904@gmail.com', '9565885999', 'India', 'Maharashtra', 'Mumbai', 'Ritu paradise phase 1, Ritu Fame, Near Gcc club, Mira Road E- 401107', '702', 'ASAP!!!!', '2026-05-20 14:50:08', NULL, NULL, NULL),
(7, 'Shanu Tiwari', 'shanutiwari2904@gmail.com', '8711651658', 'India', 'Maharashtra', 'Vadodara', 'Ritu paradise phase 1', '504', 'ljbojb', '2026-05-21 15:20:07', NULL, NULL, NULL),
(8, 'Shanu Tiwari', 'uttamtiwariup50@gmail.com', '6386465392', 'India', 'Uttar Pradesh', 'Mumbai', '502 ritu fame ', '502', '', '2026-05-21 15:35:53', NULL, NULL, NULL),
(9, 'Itachi uchiha ', 'itachi@gmail.com', '9565885999', 'Japan', 'Meghalaya', 'Coimbatore', 'Leaf village', '504', 'Genjutsu', '2026-05-23 06:37:33', NULL, NULL, NULL),
(10, 'Hashirama Hokage', 'hashirama@gmail.com', '9224834028', 'Japan', 'Manipur', 'Jaipur', 'Leaf village kanoha', '22', 'ASAP!!!!!', '2026-05-23 06:41:53', NULL, NULL, NULL),
(11, 'Utkarsh Tiwari', 'uttkarsh@gmail.com', '8828771598', 'India', 'Madhya Pradesh', 'Mysore', 'Leaf village', '522', 'ASAP!!!!!!', '2026-05-23 06:53:04', NULL, NULL, NULL),
(12, 'Shanu Tiwari', 'uttamtiwariup50@gmail.com', '6386465392', 'Australia', 'Gujarat', 'New Delhi', '502 ritu fame ', '502', '', '2026-05-23 07:03:38', NULL, NULL, NULL),
(13, 'Harshal Ajit Vernekar', 'hvernekar9@gmail.com', '08104842621', 'India', 'Maharashtra', 'Mumbai', 'saifee park', '1', '', '2026-05-23 08:04:03', NULL, NULL, NULL),
(14, 'Rahul Yadav', 'rahul123@gmail.com', '8982981273', 'India', 'Maharashtra', 'Thane', '709-B, Queens Park Near QMHS', '709-B', '', '2026-05-23 09:05:29', NULL, NULL, NULL),
(15, 'Santosh Dubey', 'jumbohydro@gmail.com', '9565885999', 'India', 'Madhya Pradesh', 'Vadodara', 'Ritu fame, RituParadise', '504', 'ASAP!!!!', '2026-05-24 16:01:59', NULL, NULL, NULL),
(16, 'Usha Upadhyaya', 'usha@gmail.com', '9224834028', 'India', 'Maharashtra', 'Mumbai', 'Deepak Hospital', '504', 'ASAP!!!!', '2026-05-28 09:51:50', 'DIGIFIX-556464', 'uploads/1779961910_Cement grout.png', 'Rejected'),
(17, 'Lakshya Ashok Shetty', 'lakshyashetty2403@gmail.com', '09867123027', 'India', 'Maharashtra', 'Thane', 'Sec-9 /302/Miroad (East) thane- 401017', '302/C-68', '', '2026-05-28 10:39:07', 'DIGIFIX-333056', 'uploads/1779964748_WhatsApp Image 2026-05-28 at 4.08.41 PM.jpeg', 'Paid'),
(18, 'Gautam Dubey', 'gautamdubey221203@gmail.com', '6386416861', 'India', 'Gujarat', 'Mysore', 'Rindkd', 'Jejd', 'Jejdjdj', '2026-05-28 13:30:51', 'DIGIFIX-190659', 'uploads/1779975053_7bd188f4-b00f-4dbe-9482-7a9fbabc11ce.jpeg', 'Pending Verification'),
(19, 'Shanu Tiwari', 'uttamtiwariup50@gmail.com', '6386465392', 'India', 'Maharashtra', 'Mumbai', '502 ritu fame ', '502', '', '2026-05-28 14:57:20', 'DIGIFIX-180673', 'uploads/1779980240_45480.jpg', 'Rejected'),
(20, 'Harsh joshi', 'sugarcandy2311@gmail.com', '8169095025', 'India', 'Maharashtra', 'Mumbai', 'Ritu paradise phase -1 ', '202 ', 'ASAP!!!!', '2026-05-28 16:09:27', 'DIGIFIX-157156', 'uploads/1779984567_ef82c39f-af74-4e89-af78-b9443f652626.jpeg', 'Paid'),
(21, 'Harshal sdac', 'harshal@gmail.com', '6386416861', 'India', 'Haryana', 'Chennai', 'Jejdjd', 'Eidjjdd', 'Sndhdj', '2026-05-29 05:23:07', 'DIGIFIX-591445', 'uploads/1780032188_7bd188f4-b00f-4dbe-9482-7a9fbabc11ce.jpeg', 'Rejected'),
(22, 'Shanu Tiwari', 'shanutiwari2904@gmail.com', '11511515151', 'India', 'Maharashtra', 'Lucknow', 'Leaf village kanoha', '702', 'akjbhkaflklkwfnouadh', '2026-05-30 06:29:33', 'DIGIFIX-267458', 'uploads/1780122573_delicious-burger-with-fresh-ingredients.jpg', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, '', '', '', '', '2026-05-19 13:45:09'),
(2, 'Gautam Dubey', 'gautamdubey@gmail.com', 'Order related queries!!!', 'dlnjsndkjf dslf ', '2026-05-19 13:45:48'),
(3, 'Santosh Dubey', 'jumbohydro@gmail.com', 'Order related queries!!!', '1. I placed my order but did not receive confirmation.\r\n2. My order status is still showing processing.\r\n3. I want to track my order delivery.\r\n4. I entered the wrong delivery address.\r\n5. Can I change my phone number after ordering?\r\n6. I want to cancel my order.\r\n7. My payment was deducted but order not confirmed.\r\n8. I received a damaged product.\r\n9. I got the wrong item in my order.\r\n10. The delivery is delayed.\r\n11. I want to return my product.\r\n12. Refund status for my cancelled order.\r\n13. I received only part of my order.\r\n14. My order is missing accessories/items.\r\n15. I want to exchange my product.\r\n16. The product image and actual product are different.\r\n17. I need invoice/bill for my order.\r\n18. My order shows delivered but I did not receive it.\r\n19. I want to update delivery instructions.\r\n20. Can I reorder the same product again?\r\n21. My coupon code was not applied.\r\n22. I want priority delivery for my order.\r\n23. The product is not working properly.\r\n24. I accidentally placed duplicate orders.\r\n25. I want to know estimated delivery time.\r\n26. My package arrived opened/tampered.\r\n27. I need support regarding bulk order purchase.\r\n28. Can I schedule delivery for another date?\r\n29. I want to speak with customer support about my order.\r\n30. I need help with order-related issues urgently.', '2026-05-20 09:37:00'),
(4, 'Gautam Dubey', 'shanutiwari2904@gmail.com', 'Order related queries!!!', 'ASAP!!!', '2026-05-21 15:24:12'),
(5, 'Uttam ', 'uttamtiwariup50@gmail.com', 'Regarding product ', 'I want to know more about product ', '2026-05-21 15:34:29'),
(6, 'Gojo Satoru', 'gojo@gmail.com', 'Order related queries!!!', 'THank you for the support!!!!!!!!!!!!!!!!!!', '2026-05-25 11:20:51'),
(7, 'Gojo Satoru', 'gojo@gmail.com', 'Order related queries!!!', 'THank you for the support!!!!!!!!!!!!!!!!!!', '2026-05-25 11:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `address`) VALUES
(1, 'Rahul', 'Mumbai'),
(3, 'Sumit', 'Rajasthan'),
(1, 'Rahul', 'Mumbai'),
(3, 'Sumit', 'Rajasthan'),
(1, 'Rahul', 'Mumbai'),
(3, 'Sumit', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `ItemName` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `ItemName`, `Description`, `Price`, `Category`, `Image`) VALUES
(1, 'Passta', 'Most Recommended dish', 399, 'Main Course', ''),
(2, 'Paneer', 'This restaurant provides really delicious paneer', 599, 'Main course', 'Tawa-Paneer-Masala-Recipe-500x500.jpg'),
(3, 'Rasgulla', 'One of my favourite Desser', 300, 'Dessert', 'side-angle-shot-soft-creamy-260nw-2647750081.webp'),
(4, 'Burger', 'I wanted to eat Burger from this outlet from a lon', 399, 'Fast food', 'delicious-burger-with-fresh-ingredients.jpg'),
(1, 'Passta', 'Most Recommended dish', 399, 'Main Course', ''),
(2, 'Paneer', 'This restaurant provides really delicious paneer', 599, 'Main course', 'Tawa-Paneer-Masala-Recipe-500x500.jpg'),
(3, 'Rasgulla', 'One of my favourite Desser', 300, 'Dessert', 'side-angle-shot-soft-creamy-260nw-2647750081.webp'),
(4, 'Burger', 'I wanted to eat Burger from this outlet from a lon', 399, 'Fast food', 'delicious-burger-with-fresh-ingredients.jpg'),
(1, 'Passta', 'Most Recommended dish', 399, 'Main Course', ''),
(2, 'Paneer', 'This restaurant provides really delicious paneer', 599, 'Main course', 'Tawa-Paneer-Masala-Recipe-500x500.jpg'),
(3, 'Rasgulla', 'One of my favourite Desser', 300, 'Dessert', 'side-angle-shot-soft-creamy-260nw-2647750081.webp'),
(4, 'Burger', 'I wanted to eat Burger from this outlet from a lon', 399, 'Fast food', 'delicious-burger-with-fresh-ingredients.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `total_amount` varchar(100) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `product_price`, `product_image`, `quantity`, `created_at`) VALUES
(1, 5, 'DigiFix Security Shield', '24999', 'SC.png', 1, '2026-05-20 09:09:39'),
(2, 6, 'DigiFix Business App', '19999', 'BI.png', 3, '2026-05-20 14:50:08'),
(3, 7, 'DigiFix Business App', '19999', 'BI.png', 3, '2026-05-21 15:20:07'),
(4, 8, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-21 15:35:53'),
(5, 9, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-23 06:37:33'),
(6, 10, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-23 06:41:53'),
(7, 10, 'DigiFix Security Shield', '24999', 'SC.png', 1, '2026-05-23 06:41:53'),
(8, 11, 'DigiFix Security Shield', '24999', 'SC.png', 2, '2026-05-23 06:53:04'),
(9, 12, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-23 07:03:38'),
(10, 13, 'DigiFix IoT Security', '18999', 'IOT.png', 1, '2026-05-23 08:04:03'),
(11, 14, 'DigiFix Security Shield', '24999', 'SC.png', 1, '2026-05-23 09:05:29'),
(12, 15, 'DigiFix Cloud Manager', '12999', 'CM.png', 1, '2026-05-24 16:01:59'),
(13, 15, 'DigiFix Security Shield', '24999', 'SC.png', 1, '2026-05-24 16:01:59'),
(14, 16, 'DigiFix Cloud Manager', '12999', 'CM.png', 2, '2026-05-28 09:51:50'),
(15, 17, 'DigiFix Cloud Manager', '12999', 'CM.png', 1, '2026-05-28 10:39:07'),
(16, 17, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-28 10:39:07'),
(17, 18, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-28 13:30:51'),
(18, 19, 'DigiFix Business App', '19999', 'BI.png', 1, '2026-05-28 14:57:20'),
(19, 20, 'DigiFix Cloud Manager', '12999', 'CM.png', 1, '2026-05-28 16:09:27'),
(20, 21, 'DigiFix Security Shield', '24999', 'SC.png', 1, '2026-05-29 05:23:07'),
(21, 22, 'DigiFix Cloud Manager', '12999', 'CM.png', 1, '2026-05-30 06:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `car` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `address`, `car`) VALUES
(1, 'Agastya Dubey', 'Bov', 'creta'),
(3, 'Adwik Dubey', 'Bov', 'creta'),
(4, 'Santosh Dubey', 'Bov', 'creta'),
(5, 'Nidhi Dubey', 'Bov', 'creta'),
(1, 'Agastya Dubey', 'Bov', 'creta'),
(3, 'Adwik Dubey', 'Bov', 'creta'),
(4, 'Santosh Dubey', 'Bov', 'creta'),
(5, 'Nidhi Dubey', 'Bov', 'creta'),
(1, 'Agastya Dubey', 'Bov', 'creta'),
(3, 'Adwik Dubey', 'Bov', 'creta'),
(4, 'Santosh Dubey', 'Bov', 'creta'),
(5, 'Nidhi Dubey', 'Bov', 'creta');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_image`, `product_description`, `created_at`) VALUES
(1, 'DigiFix IOT', '17,999', 'IOT.png', 'IOT', '2026-05-19 14:29:48'),
(4, 'Security SC', '29,999', 'SC.png', 'It is a security related product\r\n', '2026-05-20 08:38:05'),
(5, 'CM', '14,999', 'CM.png', 'It is a very good product!!!', '2026-05-20 08:38:50'),
(6, 'CM', '44,999', 'CM.png', 'It is a very good product!!!', '2026-05-20 08:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `password`) VALUES
(1, 'Gautam Dubey', 'shanutiwari2904@gmail.com', '$2y$10$9xCeS8RsOcMiEClRP6ekEOGHLhL4tTSbxLY94p/r6YQm/Tp7d.bhm'),
(2, 'Uttam Tiwari', 'gautamdubey221203@gmail.com', '$2y$10$HnqhMqFZTKzlZunwgKZJUOb.UpBZPyEVeVOGn9kr39xdexGAztUX.'),
(3, 'Agastya Dubey', 'agastya@gmail.com', '$2y$10$d9GbKkfP79/Xgrvagq.wMupcsUUPydF8aN7c14.Cu2PALAxzXxPpe'),
(4, 'Agastya Dubey', 'Agasytya@gmail.com', '$2y$10$KZz18MPT.iudegDefYLyQ.EexCcEdbHFgbRblaa5deOJMcC55zUGy'),
(5, 'Itachi', 'itachi@gmail.com', '$2y$10$Lz2QH38W0.ah/qWhwllCR.AwGqEIb1sk/h41diwHme1hCqd7kwya.'),
(6, 'Kirti', 'k@gmail.com', '$2y$10$fI09p22g8CbdxnIp2lZTZetgnOYlUGGkmH5b5OxtZ4Ads0/ONw4O2'),
(7, 'Nidhi Mishra', 'nidhi@gmail.com', '$2y$10$hsn/iXwD5tx40Vd6.yUPUedldT6R8clOz2rFcPoQHBJj8cCykVG4a'),
(8, 'Rishika Pathak', 'rishika@gmail.com', '$2y$10$kZ3MS3YVSBQtMOvpXD5ojOVov056YohvkuWU1LMkFDiWBxaDR3zcG'),
(9, 'Shanu Tiwari', 'shanu@gmail.com', '$2y$10$kvRdkZgBqI0sP7ftgv6rBehRNl/NXKQx9oXWCUjPvfz7lqQg3gLui'),
(10, 'Uttam', 'uttamtiwariup50@gmail.com', '$2y$10$ekAHvIy9cKArrFQhbNf00uqfB9eCikZSS1fSS8kS4HnvJNR7ewSGO'),
(11, 'God dubey', 'God@gmail.com', '$2y$10$F6KE70ywFhrfSLyMBjk00.LWSVLBo6mEjlrKkVpiq2O4XLzEYpG.u'),
(12, 'Popo', 'popo@gmail.com', '$2y$10$MmLBGXE3uATmiMqxKjK.o.UpgURHCQZIgVezZl7ZxZMpeZSd/y8mW'),
(13, 'Rishika Pathak', 'rishikapathak2503@gmail.com', '$2y$10$heN4B9peCvKBSpTXCnK6f.w/Za.D/QSQHL4Oi4ecLPs3C04yasHbK'),
(14, 'Gurpreet', 'joshigurpreetkaur@gmail.com', '$2y$10$xD4yh36fsD5khhZ2.eIMU.u2RRPrm.uJfDR4UmGLJ915XlrI8RVJ2'),
(15, 'Parth Dubey', 'parth@gmail.com', '$2y$10$cFbQCVugN9mT6dbLhG0Nnej4vGSWUlJPpqXGN4ONVjxOPSiqHqk9G'),
(16, 'Rai', 'raishreyansh417@gmail.com', '$2y$10$DZcSwXHignkE3qWuS9NKPuLqBFsbjJdW6KnoRrw5GWPQ6V83zDQWe'),
(17, 'Harshal Ajit Vernekar', 'hvernekar9@gmail.com', '$2y$10$F/dxhM89Z4fB8AlOxOcv8OND9M/u.RiXHwCcBcbu0qzLDMUKP7ehi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `goal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_orders`
--
ALTER TABLE `checkout_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout_orders`
--
ALTER TABLE `checkout_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
