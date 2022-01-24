-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2022 at 09:30 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SISIII2022_89201023`
--

-- --------------------------------------------------------

--
-- Table structure for table `Ad`
--

CREATE TABLE `Ad` (
  `id` int(11) NOT NULL,
  `title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `instrument` enum('guitar','piano','drums','ukulele','voice') COLLATE utf8_unicode_ci NOT NULL,
  `skill` enum('beginner','medium','advanced','pro') COLLATE utf8_unicode_ci NOT NULL,
  `date_of_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `genre` enum('rock','pop','folk','rap','country') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Ad`
--

INSERT INTO `Ad` (`id`, `title`, `owner_id`, `description`, `location`, `date`, `instrument`, `skill`, `date_of_posting`, `genre`) VALUES
(48, 'Konj', 16, 'Jebiga opis', 'Koper', '2022-01-12 10:13:00', 'ukulele', 'pro', '2022-01-14 19:30:56', 'rock'),
(62, 'Trebam pjevaca', 21, 'Trebam pjevaca sa iskustvom da malo svirqmo i napravimo neki koncert ovih dana.', 'Koper', '2022-01-23 19:00:00', 'voice', 'advanced', '2022-01-22 14:05:07', 'rock'),
(64, 'kasnflj', 4, 'kjfnk', 'adfsdg', '2021-12-16 15:19:00', 'guitar', 'medium', '2022-01-22 15:19:30', 'pop'),
(65, 'khsabf', 4, 'kfj', 'kjnf', '2022-01-08 15:19:00', 'guitar', 'advanced', '2022-01-22 15:19:46', 'pop'),
(66, 'asfdd', 4, 'afds', 'afs', '2022-01-21 15:19:00', 'piano', 'beginner', '2022-01-22 15:20:00', 'pop'),
(67, 'asfdd', 4, 'dfaasf', 'adgf', '2022-01-19 17:57:00', 'piano', 'medium', '2022-01-22 17:57:11', 'pop'),
(68, 'asfaf', 4, 'asfasf', 'asfa', '2022-01-12 17:57:00', 'piano', 'medium', '2022-01-22 17:57:57', 'folk');

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Comment`
--

INSERT INTO `Comment` (`id`, `date`, `user_id`, `text`, `ad_id`) VALUES
(177, '2022-01-22 18:17:04', 4, 'jeee', 48),
(178, '2022-01-22 18:17:46', 4, 'fasas', 48),
(179, '2022-01-22 18:18:56', 4, 'asdf', 48),
(180, '2022-01-22 18:19:18', 4, 'asfasfasf', 48),
(181, '2022-01-22 18:19:33', 4, 'afsas', 48),
(182, '2022-01-22 18:19:55', 4, 'fasas', 48),
(183, '2022-01-22 18:20:07', 4, 'asfasfasf', 48),
(184, '2022-01-22 18:20:25', 4, 'df', 48),
(185, '2022-01-22 18:21:17', 4, 'ssa', 48),
(186, '2022-01-22 18:21:41', 4, 'asfasfasf', 48),
(187, '2022-01-22 18:22:16', 4, 'zxc', 48),
(188, '2022-01-22 18:22:30', 4, 'zxv', 48),
(189, '2022-01-22 18:22:55', 4, 'sfa', 48),
(190, '2022-01-22 18:23:11', 4, 'asfasfasf', 48),
(191, '2022-01-22 18:23:27', 4, 'asdf', 48);

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `id` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`id`, `from`, `to`, `date`, `text`) VALUES
(1, 16, 17, '2022-01-16 16:33:27', 'CAO\r\n'),
(145, 4, 4, '2022-01-16 19:29:01', 'v'),
(162, 4, 4, '2022-01-17 20:05:54', 'kako'),
(173, 21, 21, '2022-01-22 14:05:36', 'fqskvdgs'),
(174, 21, 21, '2022-01-22 14:05:36', 'fqskvdgs'),
(175, 21, 21, '2022-01-22 14:05:37', 'asghfvakd'),
(176, 21, 21, '2022-01-22 14:05:38', 'ghdasdvsf'),
(187, 4, 4, '2022-01-23 15:56:36', 'Sjjaja'),
(188, 4, 21, '2022-01-23 15:58:39', 'Tjtk'),
(189, 4, 16, '2022-01-23 17:29:20', 'ahsbdfj');

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE `Rating` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stars` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`id`, `date`, `stars`, `from`, `to`) VALUES
(36, '2022-01-17 20:46:18', 4, 4, 4),
(46, '2022-01-22 14:06:18', 5, 21, 4),
(47, '2022-01-23 17:29:14', 5, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `type` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `name`, `surname`, `password`, `username`, `email`) VALUES
(4, 'Bole', 'Sinik', '123', 'bole', '123@gmail.com'),
(16, 'Bodgan', 'Sinik', 'farmabole', 'bogdansinik2001', 'bogdansinik2001@gmail.com'),
(17, 'Nikola', 'Neki Nikola', '123', 'nidzo', '123345554@gmail.com'),
(18, '213123', 'fdgf', '12345', '12345', 'n@as.a'),
(19, 'Dunja', 'Kostic', '123', 'dunjica', 'n@b.b'),
(21, 'Miloje', 'Vacic', '123', 'misza', 'mv@m.c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Ad`
--
ALTER TABLE `Ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`owner_id`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from` (`from`),
  ADD KEY `to` (`to`);

--
-- Indexes for table `Rating`
--
ALTER TABLE `Rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`from`),
  ADD KEY `to` (`to`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ad`
--
ALTER TABLE `Ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;
--
-- AUTO_INCREMENT for table `Rating`
--
ALTER TABLE `Rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Ad`
--
ALTER TABLE `Ad`
  ADD CONSTRAINT `Ad_ibfk_3` FOREIGN KEY (`owner_id`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`ad_id`) REFERENCES `Ad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`from`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Message_ibfk_2` FOREIGN KEY (`to`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Rating`
--
ALTER TABLE `Rating`
  ADD CONSTRAINT `Rating_ibfk_1` FOREIGN KEY (`from`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Rating_ibfk_2` FOREIGN KEY (`to`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Role`
--
ALTER TABLE `Role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
