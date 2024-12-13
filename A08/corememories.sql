-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 07:13 AM
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
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'art1.jpg', 'Since my family has always been into music, I was taught how to sing at an early age. I often practiced on a karaoke machine.', NULL),
(2, 1, 'art2.jpg', 'I enjoy drawing in various mediums, including both traditional and digital art.', NULL),
(3, 1, 'art3.jpg', 'I love to dance. I discovered my passion for it through participating in school events and activities. I can perform hip-hop, ballroom, and folk dances.', NULL),
(4, 2, 'family1.jpg', 'When I was a kid, I used to take in stray cats I found on the road or sidewalks. My grandmother would often complain when I brought home too many animals. Now that I\'m an adult, we have many dogs at home.', NULL),
(5, 2, 'family2.jpg', 'The one in the blue shirt is my sister, Zaphira. Back then, it was just the two of us in the house, so I was always the one taking care of her. Over time, as it went from just me, my mother, and her, our little family grew, and now we have two brothers.', NULL),
(6, 2, 'family3.jpg', 'My family has played a significant role in shaping who I am today. They mean everything to me.', NULL),
(7, 3, 'friends1.jpg', 'These are my friends from my high school days. Although we don\'t see each other much anymore since I live in Batangas and they are in Cabuyao but we still keep in touch.\r\n', NULL),
(8, 3, 'friends2.jpg', 'This is my college friend group. They made every school day fun and filled with laughter. They also helped me with my studies whenever I struggled to understand the lessons.\r\n', NULL),
(9, 3, 'friends3.jpg', 'These are my friends from elementary school in Cabuyao. They made my childhood fun and memorable.\n', NULL),
(10, 4, 'hobby1.jpg', 'Since I didn’t have gadgets as a kid, I became a bookworm. I would read anything I could find in the house. My mother loved comics, and that\'s when I started enjoying them too. ', NULL),
(11, 4, 'hobby2.jpg', 'At some point in my life, I became addicted to gaming. When my mother returned home from abroad, she brought me a PSP, and I would immerse myself in it every weekend.\r\n', NULL),
(12, 4, 'hobby3.png', 'It started with a makeup set that my mother gave me when I was in 3rd year of high school. Ever since then, I have loved doing makeup.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Art Island', 'Explore my creative passions through music, art, and dance', 'A collection of my artistic passions, including singing, drawing, and dancing, all influenced by my childhood and school experiences.\n\n', '#94FF79', '', NULL),
(2, 'Family Island', 'Discover the heart of my family and the bond that shaped me.', 'The foundation of my values, filled with memories of taking care of my sister and adopting stray animals, all tied to the growth of our little family.\n\n', '#FFA179', '', NULL),
(3, 'Friendship Island', 'Meet the friends who’ve made my journey unforgettable.', 'A reflection of the friendships that have shaped my life, from childhood to college, each group bringing joy and valuable memories.\n\n', '#79D7FF', '', NULL),
(4, 'Hobby Island', 'Join me in my world of books, gaming, and makeup artistry.', 'A showcase of my love for books, gaming, movies, and makeup, with roots in childhood and evolving passions as an adult.\n\n', '#E479FF', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
