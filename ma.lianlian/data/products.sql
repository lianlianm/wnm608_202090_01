-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2020 at 04:37 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lian19_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(2, 'Flowerpot2', 12.99, '2020-11-09 01:14:44', '2020-11-09 01:14:44', 'hui', 'hui_flowerpot2_main.jpg', 'hui_flowerpot2_1.jpg,hui_flowerpot2_2.jpg,hui_flowerpot2_3.jpg', 'hui_flowerpot2_main.jpg', 'Huizhou architectural elements.', 20),
(3, 'Flowerpot3', 12.99, '2020-11-09 01:09:44', '2020-11-09 01:09:44', 'hui', 'hui_flowerpot3_main.jpg', 'hui_flowerpot3_1.jpg,hui_flowerpot3_2.jpg,hui_flowerpot3_3.jpg', 'hui_flowerpot3_main.jpg', 'Huizhou architectural elements.', 20),
(4, 'Flowerpot4', 12.99, '2020-11-09 01:07:44', '2020-11-09 01:07:44', 'hui', 'hui_flowerpot4_main.jpg', 'hui_flowerpot4_1.jpg,hui_flowerpot4_2.jpg,hui_flowerpot4_3.jpg', 'hui_flowerpot4_main.jpg', 'Huizhou architectural elements.', 20),
(5, 'Lamp', 12.99, '2020-11-09 01:05:44', '2020-11-09 01:05:44', 'hui', 'hui_lamp_main.jpg', 'hui_lamp_1.jpg,hui_lamp_2.jpg,hui_lamp_3.jpg', 'hui_lamp_main.jpg', 'Huizhou architectural elements.', 20),
(6, 'Pen Container', 12.99, '2020-11-09 01:06:44', '2020-11-09 01:06:44', 'hui', 'hui_pencontainer_main.jpg', 'hui_pencontainer_1.jpg,hui_pencontainer_2.jpg,hui_pencontainerp_3.jpg', 'hui_pencontainer_main.jpg', 'Huizhou architectural elements.', 20),
(7, 'Circle Mountain', 15.99, '2020-11-09 01:10:44', '2020-11-09 01:10:44', 'gray', 'gray_circlemountain_main.jpg', 'gray_circlemountain_1.jpg,gray_circlemountain_2.jpg,gray_circlemountain_3.jpg', 'gray_circlemountain_main.jpg', 'Chinese landscape painting.', 15),
(8, 'Mountains', 15.99, '2020-11-09 01:04:44', '2020-11-09 01:04:44', 'gray', 'gray_mountains_main.jpg', 'gray_mountains_1.jpg,gray_mountains_2.jpg,gray_mountains_3.jpg', 'gray_mountains_main.jpg', 'Chinese landscape painting.', 15),
(9, 'Cloud Lamp', 15.99, '2020-11-09 01:15:44', '2020-11-09 01:15:44', 'gray', 'gray_cloudlamp_main.jpg', 'gray_cloudlamp_1.jpg,gray_cloudlamp_2.jpg,gray_cloudlamp_3.jpg', 'gray_cloudlamp_main.jpg', 'Chinese landscape painting.', 15),
(10, 'Peak Lamp', 15.99, '2020-11-09 01:01:44', '2020-11-09 01:01:44', 'gray', 'gray_peaklamp_main.jpg', 'gray_peaklamp_1.jpg,gray_peaklamp_2.jpg,gray_peaklamp_3.jpg', 'gray_peaklamp_main.jpg', 'Chinese landscape painting.', 15),
(11, 'Outline', 15.99, '2020-11-09 01:13:44', '2020-11-09 01:13:44', 'gray', 'gray_outline_main.jpg', 'gray_outline_1.jpg,gray_outline_2.jpg,gray_outline_3.jpg', 'gray_outline_main.jpg', 'Chinese landscape painting.', 15),
(12, 'Mountain Wave', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray_mountainwave_main.jpg', 'gray_mountainwave_1.jpg,gray_mountainwave_2.jpg,gray_mountainwave_3.jpg', 'gray_mountainwave_main.jpg', 'Chinese landscape painting.', 15),
(13, 'Accompanying', 8.99, '2020-11-09 01:02:44', '2020-11-09 01:02:44', 'angle', 'angle_accompanying_main.jpg', 'angle_accompanying_1.jpg,angle_accompanying_2.jpg,angle_accompanying_3.jpg', 'angle_accompanying_main.jpg', 'Huizhou print art elements.', 8),
(14, 'Meet', 8.99, '2020-11-09 01:11:44', '2020-11-09 01:11:44', 'angle', 'angle_meet_main.jpg', 'angle_meet_1.jpg,angle_meet_2.jpg,angle_meet_3.jpg', 'angle/meet_main.jpg', 'Huizhou print art elements.', 8),
(15, 'Warm', 8.99, '2020-11-09 01:12:44', '2020-11-09 01:12:44', 'angle', 'angle_warm_main.jpg', 'angle_warm_1.jpg,angle_warm_2.jpg,angle_warm_3.jpg', 'angle_warm_main.jpg', 'Huizhou print art elements.', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
