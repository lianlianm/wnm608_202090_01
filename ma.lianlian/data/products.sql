-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2020 at 01:22 AM
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
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
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

INSERT INTO `products` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(1, 'Flowerpot1', '', 12.99, '2020-11-09 01:03:04', '2020-11-09 01:03:04', 'hui', 'hui/flowerpot1_main.jpg', 'hui/flowerpot1_1.jpg,hui/flowerpot1_2.jpg,hui/flowerpot1_3.jpg', 'hui/flowerpot1_thumb.jpg', 'Huizhou architectural elements.', 20),
(2, 'Flowerpot2', '', 12.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'hui', 'hui/flowerpot2_mian.jpg', 'hui/flowerpot2_1.jpg,hui/flowerpot2_2.jpg,hui/flowerpot2_3.jpg', 'hui/flowerpot2_thumb.jpg', 'Huizhou architectural elements.', 20),
(3, 'Flowerpot3', '', 12.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'hui', 'hui/flowerpot3_mian.jpg', 'hui/flowerpot3_1.jpg,hui/flowerpot3_2.jpg,hui/flowerpot3_3.jpg', 'hui/flowerpot3_thumb.jpg', 'Huizhou architectural elements.', 20),
(4, 'Flowerpot4', '', 12.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'hui', 'hui/flowerpot4_mian.jpg', 'hui/flowerpot4_1.jpg,hui/flowerpot4_2.jpg,hui/flowerpot4_3.jpg', 'hui/flowerpot4_thumb.jpg', 'Huizhou architectural elements.', 20),
(5, 'Lamp', '', 12.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'hui', 'hui/lamp_mian.jpg', 'hui/lamp_1.jpg,hui/lamp_2.jpg,hui/lamp_3.jpg', 'hui/lamp_thumb.jpg', 'Huizhou architectural elements.', 20),
(6, 'Pen Container', '', 12.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'hui', 'hui/pencontainer_mian.jpg', 'hui/pencontainer_1.jpg,hui/pencontainer_2.jpg,hui/pencontainerp_3.jpg', 'hui/pencontainer_thumb.jpg', 'Huizhou architectural elements.', 20),
(7, 'Circle Mountain', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/circlemountain_mian.jpg', 'gray/circlemountain_1.jpg,gray/circlemountain_2.jpg,gray/circlemountain_3.jpg', 'gray/circlemountain_thumb.jpg', 'Chinese landscape painting.', 15),
(8, 'Mountains', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/mountains_mian.jpg', 'gray/mountains_1.jpg,gray/mountains_2.jpg,gray/mountains_3.jpg', 'gray/mountains_thumb.jpg', 'Chinese landscape painting.', 15),
(9, 'Cloud Lamp', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/cloudlamp_mian.jpg', 'gray/cloudlamp_1.jpg,gray/cloudlamp_2.jpg,gray/cloudlamp_3.jpg', 'gray/cloudlamp_thumb.jpg', 'Chinese landscape painting.', 15),
(10, 'Peak Lamp', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/peaklamp_mian.jpg', 'gray/peaklamp_1.jpg,gray/peaklamp_2.jpg,gray/peaklamp_3.jpg', 'gray/peaklamp_thumb.jpg', 'Chinese landscape painting.', 15),
(11, 'Outline', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/outline_mian.jpg', 'gray/outline_1.jpg,gray/outline_2.jpg,gray/outline_3.jpg', 'gray/outline_thumb.jpg', 'Chinese landscape painting.', 15),
(12, 'Mountain Wave', '', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'gray', 'gray/mountainwave_mian.jpg', 'gray/mountainwave_1.jpg,gray/mountainwave_2.jpg,gray/mountainwave_3.jpg', 'gray/mountainwave_thumb.jpg', 'Chinese landscape painting.', 15),
(13, 'Accompanying', '', 8.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'angle', 'angle/accompanying_mian.jpg', 'angle/accompanying_1.jpg,angle/accompanying_2.jpg,angle/accompanying_3.jpg', 'angle/accompanying_thumb.jpg', 'Huizhou print art elements.', 8),
(14, 'Meet', '', 8.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'angle', 'angle/meet_mian.jpg', 'angle/meet_1.jpg,angle/meet_2.jpg,angle/meet_3.jpg', 'angle/meet_thumb.jpg', 'Huizhou print art elements.', 8),
(15, 'Warm', '', 8.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'angle', 'angle/warm_mian.jpg', 'angle/warm_1.jpg,angle/warm_2.jpg,angle/warm_3.jpg', 'angle/warm_thumb.jpg', 'Huizhou print art elements.', 8);

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
