-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2024 at 12:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripease`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_star` int DEFAULT NULL,
  `hotel_detail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_days` int DEFAULT NULL,
  `hotel_persons` int DEFAULT NULL,
  `hotel_pic` int DEFAULT NULL,
  `hotel_price` int NOT NULL DEFAULT '0',
  `hotel_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_approve` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `hotel_name`, `hotel_star`, `hotel_detail`, `hotel_city`, `hotel_days`, `hotel_persons`, `hotel_pic`, `hotel_price`, `hotel_number`, `hotel_approve`) VALUES
(1, 'Hotel 1', 5, 'ABCD', 'Murree', 2, 2, NULL, 7999, '03220677203', 1),
(2, 'Hotel 1', 5, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat', 'Lahore', 2, 2, NULL, 8900, '03048616865', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `hd_id` int NOT NULL,
  `hd_hotel_id` int NOT NULL,
  `hd_name` varchar(255) DEFAULT NULL,
  `hd_price` int DEFAULT '0',
  `hd_beds` int DEFAULT NULL,
  `hd_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hd_id`, `hd_hotel_id`, `hd_name`, `hd_price`, `hd_beds`, `hd_pic`) VALUES
(1, 1, 'Standard Single', 150, 2, 'a.jpg'),
(2, 1, 'Standard Double', 220, 2, 'b.jpg'),
(3, 1, 'Premium Single', 180, 2, 'c.jpg'),
(4, 1, 'Premium Double', 300, 2, 'd.jpg'),
(5, 1, 'Economy Single', 120, 2, 'e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_users`
--

CREATE TABLE `hotel_users` (
  `hu_id` int NOT NULL,
  `hu_hotel_id` int DEFAULT NULL,
  `hu_name` varchar(255) DEFAULT NULL,
  `hu_username` varchar(255) DEFAULT NULL,
  `hu_password` varchar(255) DEFAULT NULL,
  `hu_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_paragraph` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_card_pic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_card_star` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_child` int NOT NULL DEFAULT '0',
  `location_slider_pic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_parent` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `location_paragraph`, `location_card_pic`, `location_card_star`, `location_child`, `location_slider_pic`, `location_parent`) VALUES
(1, 'Punjab', 'Punjabi culture is one of the richest and most vibrant cultures in the world, originating from the Indian state of Punjab.', 'punjab.jpg', '5', 1, 'punjab.jpg', 'Pakistan'),
(2, 'Sindh', 'Sindhi culture is a rich and vibrant heritage of the Sindhi people, originating from the Sindh region in Pakistan.', 'sindth.jpg', '5', 1, NULL, 'Pakistan'),
(3, 'Balochistan', 'Balochistan is known for its long coastal belt which extends from Karachi through Sonmiani, Ormara, Kalmat, Gwadar, Jiwani and all the way up to Iran.', 'balochistan.jpg', '5', 1, NULL, 'Pakistan'),
(4, 'Kashmir', 'Kashmiris are well adept at knitting and making Pashmina shawls, silk carpets, rugs, kurtas, and pottery. Saffron, too, is grown in Kashmir.', 'kashmir.jpg', '5', 1, NULL, 'Pakistan'),
(5, 'Khyber Pakhtunkhwa', 'Khyber Pakhtunkhwa is the land of hospitality, mesmerizing landscapes, wide culture, astonishing history, legendary conquerors, and the hub of tourism.', 'kpk.jpg', '5', 1, NULL, 'Pakistan'),
(12, 'Lahore', 'Lahore is a major centre of Qawwali music. The city also hosts much of Pakistan\'s tourist industry, with major attractions including the Walled City, the famous Badshahi and Wazir Khan mosques, as well as several Sikh and Sufi shrines.', 'lahore.jpg', '5', 0, NULL, 'Punjab'),
(13, 'Murree', 'Murree is a popular hill station located in the Rawalpindi District of Punjab, near the Pir Panjal Range of the Himalayas. It is known as the “Queen of Mountains” due to its scenic beauty and pleasant weather.\r\n', 'murree.jpg', '5', 0, NULL, 'Punjab'),
(14, 'Islamabad', 'Islamabad is known for its parks and forests, including the Margalla Hills National Park and the Shakarparian. It is home to several landmarks, including the country\'s flagship Faisal Mosque, which is the world\'s fifth-largest mosque.', 'islamabad.jpg', '5', 0, NULL, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `restorant`
--

CREATE TABLE `restorant` (
  `rest_id` int NOT NULL,
  `rest_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rest_city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rest_detail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rest_star` int DEFAULT NULL,
  `rest_pic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rest_approve` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restorant`
--

INSERT INTO `restorant` (`rest_id`, `rest_name`, `rest_city`, `rest_detail`, `rest_star`, `rest_pic`, `rest_approve`) VALUES
(1, 'Restorant 1', 'Murree', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat', 5, NULL, 1),
(2, 'Restorant 1', 'Lahore', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat', 5, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restorant_user`
--

CREATE TABLE `restorant_user` (
  `ru_id` int NOT NULL,
  `ru_rest_id` int DEFAULT NULL,
  `ru_name` varchar(255) DEFAULT NULL,
  `ru_username` varchar(255) DEFAULT NULL,
  `ru_password` varchar(255) DEFAULT NULL,
  `ru_status` varchar(255) DEFAULT NULL,
  `ru_approve` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `test_id` int NOT NULL,
  `test_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `test_review` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `test_city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `test_star` int DEFAULT '0',
  `test_pic` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `test_approve` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`test_id`, `test_name`, `test_review`, `test_city`, `test_star`, `test_pic`, `test_approve`) VALUES
(1, 'Malik Zubair', 'We had an amazing time exploring the city with your expert guides! The tour was well-organized, informative, and fun. Can\'t wait to come back!', 'Lahore', 5, 'T1.png', 1),
(2, 'Shoaib Ashgar', 'Your team made our vacation truly unforgettable! From stunning scenery to delicious local cuisine, every moment was pure bliss. Thank you for the memories!', 'Multan', 5, 'T2.png', 1),
(3, 'Rustagar Ahmad', 'We were blown away by the breathtaking views and exceptional service! Your attention to detail and passion for travel shine through in everything you do!', 'Karachi', 5, 'T3.png', 1),
(4, 'Umair Illyas', 'It was a very nice tour, they planned everything perfectly, and we had a great stay in Pakistan! Thank you so much, I totally recommend the visit!', 'Peshawar', 5, 'T4.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`hd_id`);

--
-- Indexes for table `hotel_users`
--
ALTER TABLE `hotel_users`
  ADD PRIMARY KEY (`hu_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `restorant`
--
ALTER TABLE `restorant`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `restorant_user`
--
ALTER TABLE `restorant_user`
  ADD PRIMARY KEY (`ru_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
  MODIFY `hd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel_users`
--
ALTER TABLE `hotel_users`
  MODIFY `hu_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `restorant`
--
ALTER TABLE `restorant`
  MODIFY `rest_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restorant_user`
--
ALTER TABLE `restorant_user`
  MODIFY `ru_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `test_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
