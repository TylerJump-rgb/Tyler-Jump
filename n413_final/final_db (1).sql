-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 03:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_responses`
--

CREATE TABLE `form_responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_responses`
--

INSERT INTO `form_responses` (`id`, `name`, `email`, `comment`, `timestamp`) VALUES
(4, 'help', 'help@help', 'theres a problem here', '2021-03-30 22:35:33'),
(7, 'Tyler J Jump', 'testtestse@test', 'test', '2021-04-18 18:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `item`, `description`, `image`) VALUES
(1, 'Cholula', 'A chili based hot sauce that is manufactured in Chapala, Jalisco, Mexico. Some ingredients include arbol peppers and spices. With a perfect blend of tangy and spicy, Cholula lands on the 500-1000 Scoville scale', '.\\images\\Cholula.jpg'),
(2, 'Tabasco', 'One of the most widely used hot sauces in the world, Tabasco is made from tabasco peppers, vinegar, and salt. Tabasco is produced in southern Louisiana, with the primary peppers cultivated in South America', '.\\images\\Tabasco.jpg'),
(3, 'Daves Insanity', 'Very few can handle this perfectly balanced mix of pure pepper extract and spices. The hot sauce has been banned from the National Fiery Food Show, standing tall at a whopping 180,000 Scoville units!', '.\\images\\Daves_insanity.jpg'),
(4, 'Tapatío', 'Made in Vernon California, this spicy delight is mostly popular in the United States, it includes ingredients of water, red peppers, acetic acid, and other spices.', '.\\images\\Tapatio.jpg'),
(5, 'Sriracha', 'Although some would say this hot sauce is more of an acquired taste (as it does contain vinegar), many believe this is the end-all-be-all addition to eggs and mac n cheese. Contains chili sauce and chili pepper paste with other spices.', '.\\images\\Sriracha.jpg'),
(6, 'Texas Pete', 'Texas Pete is a Louisiana-style hot sauce in the United States developed and manufactured by the TW Garner Food Company in Winston-Salem, North Carolina. The brand has 6, 12, and 24 ounce bottles with bright red sauce, flip top, and white and yellow label featuring the name in red and \"Texas Pete,\" a red cowboy. ', '.\\images\\Texas_Pete.jpg'),
(7, 'Franks RedHot', 'Frank\'s RedHot\'s recipe dates to 1896 to the Frank Tea and Spice Company in Cincinnati, Ohio. Frank\'s RedHot is the primary ingredient in many Buffalo Wing recipes, but was probably not used in the original 1964 Anchor Bar recipe.', '.\\images\\Franks_RedHot.jpg'),
(8, 'DA BOMB', 'The Hot Sauce that everyone loves to hate - it\'s Da\'Bomb! Da\'Bomb comes in four levels of pain: Ghost Pepper at 22,800 Scovilles, Beyond Insanity at 135,600 Scovilles, Ground Zero at 321,900 Scovilles, and The Final Answer at a killer 1.5 million Scovilles! They\'re explosive!', '.\\images\\DA_BOMB.jpg'),
(9, 'Valentina', 'Valentina is a brand of \"pourable\" hot sauce manufactured by Salsa Tamazula, a company based in Guadalajara, Mexico. It is typically sold in 12.5-ounce and large glass bottles, with a flip-top cap permanently attached to the bottle. The cap does not unscrew.', '.\\images\\Valentina.jpg'),
(10, 'Crystal Hot Sauce', 'Crystal Hot Sauce is a brand of Louisiana-style hot sauce produced by family-owned Baumer Foods since 1923. 3 million US gallons of Crystal Hot Sauce are shipped per year to 75 countries. The sauce is reddish orange with a medium heat and a milder, brighter flavor than Tabasco sauce.', '.\\images\\Crystal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user` int(10) NOT NULL,
  `item` int(10) NOT NULL,
  `rating` int(1) NOT NULL,
  `approve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user`, `item`, `rating`, `approve`) VALUES
(55, 9, 2, 1, 1),
(56, 10, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(2, 'jump', 'jump@jump.com', 'jump', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_hash`
--

CREATE TABLE `users_hash` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_hash`
--

INSERT INTO `users_hash` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'groot', 'groot@groot.com', '$2y$10$eek.8Mzts5CxR1c60skUGOQDARY6QueM8SiV.mXOQaOZtkQv3lKj2', 0),
(2, 'guardians', 'guardians@galaxy.com', '$2y$10$jluPRVWAJImQyzrO2D44N.Ryb5TC4D7qd6f21u/Y7gIfjm0v5o8pq', 0),
(3, '1', 'hello@hello.com', '123', 0),
(6, 'tylerjump', 'tyler@tyler1.com', '$2y$10$3jhCHXXeBz/lbaEar4j69.E.LP4uqkwGkW7KIpx1NdV3QJDmF8pCa', 0),
(7, 'tylerjump92', 'tjjump@iu.edu', '$2y$10$unerfUkiutlqXcL2skj7huBRlDbq.IE4xb3XXqvU1GtYiq2nZ6YPO', 1),
(8, 'bootypigg', 'bootypigg@gmail.com', '$2y$10$9HAE3FPFCqt2DCwy1sZhFuY.RbHnnepby2t55OHDBu3vmbck04pp2', 0),
(9, 'john', 'john@john.com', '$2y$10$cWribcHrZfQ5HK6XUoNf6enU1DoQplZENYqDd0FZlTZLLPdrKF4R6', 0),
(10, 'johnjohn', 'john@john1.com', '$2y$10$BUETIuy/mS/AHW3VlLqU2uJOskOkdF4FLYlVFtW4kjQ7tGVEweev6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_responses`
--
ALTER TABLE `form_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_hash`
--
ALTER TABLE `users_hash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_responses`
--
ALTER TABLE `form_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_hash`
--
ALTER TABLE `users_hash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
