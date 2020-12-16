-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2020 at 08:18 PM
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
  `material` text NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `material`, `quantity`) VALUES
(12, 'Mountain Wave Night Light', 15.99, '2020-11-09 01:08:44', '2020-11-09 01:08:44', 'Gray', 'gray_mountainwave_main.jpg', 'gray_mountainwave_1.jpg,gray_mountainwave_2.jpg', 'gray_mountainwave_main.jpg', 'The flaky shape of the lamp represents the stacked mountains, and the horizontal and vertical arrangement creates a sense of space. Light is emitted from the inside of the lamp body, and the weakened light meets the needs of users for night actions.\r\n', 'Cement, Iron, Optical Fiber, Resin', 15),
(19, 'Arch Flower Pot', 12.99, '2020-11-09 01:14:44', '2020-11-09 01:14:44', 'Hui', 'hui_arch_main.jpg', 'hui_arch_1.jpg,hui_arch_2.jpg', 'hui_arch_main.jpg', 'Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.\r\n', 'Cement, Iron Wire, Wood\r\n', 20),
(20, 'Archway Flower Pot', 12.99, '2020-11-09 01:09:44', '2020-11-09 01:09:44', 'Hui', 'hui_archway_main.jpg', 'hui_archway_1.jpg,hui_archway_2.jpg', 'hui_archway_main.jpg', 'Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.\r\n\r\n', 'Cement, Iron Wire, Wood', 20),
(21, 'Gatehouse Flower Pot', 12.99, '2020-11-09 01:07:44', '2020-11-09 01:07:44', 'Hui', 'hui_gatehouse_main.jpg', 'hui_gatehouse_1.jpg,hui_gatehouse_2.jpg', 'hui_gatehouse_main.jpg', 'Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.\r\n', 'Cement, Iron Wire, Wood', 20),
(22, 'Hall Flower Pot', 12.99, '2020-11-09 01:05:44', '2020-11-09 01:05:44', 'Hui', 'hui_hall_main.jpg', 'hui_hall_1.jpg,hui_hall_2.jpg', 'hui_hall_main.jpg', 'Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.\r\n', 'Cement, Iron Wire, Wood', 20),
(23, 'Narrow Desk Lamp', 12.99, '2020-11-09 01:06:44', '2020-11-09 01:06:44', 'Hui', 'hui_lamp_main.jpg', 'hui_lamp_1.jpg,hui_lamp_2.jpg', 'hui_lamp_main.jpg', 'Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.\r\n', 'Cement, Iron Wire, Wood', 20),
(24, 'Circular Wall Lamp', 15.99, '2020-11-09 01:10:44', '2020-11-09 01:10:44', 'Gray', 'gray_circular_main.jpg', 'gray_circular_1.jpg,gray_circular_2.jpg', 'gray_circular_main.jpg', 'The circular wall lamp is inspired by the painting of Peach Blossom Spring, and uses a circular iron frame to create the effect of a painting. When not in use, it is a landscape painting on the wall. When used, the light undergoes refraction to create a sparkling effect.', 'Cement, Iron, Optical Fiber, Resin', 15),
(25, 'Cloud Lamp', 15.99, '2020-11-09 01:04:44', '2020-11-09 01:04:44', 'Gray', 'gray_cloud_main.jpg', 'gray_cloud_1.jpg,gray_cloud_2.jpg', 'gray_cloud_main.jpg', 'The cirrus cloud shape of the lantern comes from Tengyun in the painting, which expresses the meaning of peace and good fortune, and is very elegant and beautiful.\r\n', 'Cement, Iron, Optical Fiber, Resin\r\n', 15),
(26, 'Desktop Night Light', 15.99, '2020-11-09 01:15:44', '2020-11-09 01:15:44', 'Gray', 'gray_desktop_main.jpg', 'gray_desktop_1.jpg,gray_desktop_2.jpg', 'gray_desktop_main.jpg', 'The flaky shape of the lamp represents the stacked mountains, and the horizontal and vertical arrangement creates a sense of space. Light is emitted from the inside of the lamp body, and the weakened light meets the needs of users for night actions.\r\n', 'Cement, Iron, Optical Fiber, Resin', 15),
(27, 'Peak Lamp', 15.99, '2020-11-09 01:01:44', '2020-11-09 01:01:44', 'Gray', 'gray_peaklamp_main.jpg', 'gray_peaklamp_1.jpg,gray_peaklamp_2.jpg', 'gray_peaklamp_main.jpg', 'The hand lamp is inspired by the melting of snow in the snow-capped mountains. When the snow melts, it flows down the mountain and merges into the stream. The shape of the top of the mountain, combined with the lamp body, fits the space structure of the scene.\r\n', 'Cement, Iron, Optical Fiber, Resin\r\n', 15),
(28, 'Fan-shaped Wall Lamp', 15.99, '2020-11-09 01:13:44', '2020-11-09 01:13:44', 'Gray', 'gray_fan_main.jpg', 'gray_fan_1.jpg,gray_fan_2.jpg', 'gray_fan_main.jpg', 'The design of the wall lamp is derived from the cascading mountains and the flowing water in the painting. In terms of materials, optical fibers are added to the cement, so that the opaque cement can reflect a little bit of starlight.\r\n', 'Cement, Iron, Optical Fiber, Resin\r\n', 15),
(30, 'Freedom Clock', 8.99, '2020-11-09 01:02:44', '2020-11-09 01:02:44', 'Angle', 'angle_freedom_main.jpg', 'angle_freedom_1.jpg,angle_freedom_2.jpg', 'angle_freedom_main.jpg', 'This part is in a reversible form, that is, the side angle can be freely changed, and the front side has a concave-convex design, which echoes the uneven engraving characteristics of the print.\r\nThe back of the board is recessed inward, and support is added to the lower part, which can be used to stick post-it notes and hold pens. This detail makes the product have the function of reminding things and give people a warm feeling.\r\n', 'Wood, Metal, Plexiglass\r\n', 8),
(31, 'U-shaped Stand Clock', 8.99, '2020-11-09 01:11:44', '2020-11-09 01:11:44', 'Angle', 'angle_standclock_main.jpg', 'angle_standclock_1.jpg,angle_standclock_2.jpg', 'angle_standclock_main.jpg', 'Through the deformation of U, the straight line is mainline, the arc part is turned into a horizontal line, which is convenient to lay flat, and the bevel is added to the turning part to reflect the sense of line.\r\nU-shaped Book Stand?The \"U\"-shaped design can make full use of the space in the middle to place books, making people think of reading while checking the time.\r\n', 'Wood, Metal, Plexiglass\r\n', 8),
(32, 'Triangle Clock', 8.99, '2020-11-09 01:12:44', '2020-11-09 01:12:44', 'Angle', 'angle_triangle_main.jpg', 'angle_triangle_1.jpg,angle_triangle_2.jpg', 'angle_triangle_main.jpg', 'The side of the product is deformed by a right-angled triangle, and the design of notches and dislocations is added to make the whole more in line with the characteristics of different visual effects of the prints from different angles.\r\nMisplaced Gap: The side is changed into a staggered design to increase the space, and the right-angle space can be used to hold other objects, which realizes the time reminder function and also adds the storage function.\r\n', 'Wood, Metal, Plexiglass\r\n', 8);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
