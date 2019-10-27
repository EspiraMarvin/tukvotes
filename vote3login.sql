-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 01:02 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote3login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_pass`, `created_at`) VALUES
(5, '@admin1', '$2y$10$9QF8AaxayuVGUFMajJc7se.jBAr2XUdVj7Y/CDLc4YD9E7DfrNbbG', '2018-04-05 17:01:55'),
(6, '@admin!', '$2y$10$PhW5SAYqTDrDAkheE3vg/uDZzSjXIkezalBuOfsFXfIRaHNrU5Swe', '2018-04-06 18:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `user_id` int(11) NOT NULL,
  `userimg_url` varchar(80) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_admno` varchar(60) NOT NULL,
  `user_course` varchar(100) NOT NULL,
  `user_position` varchar(70) NOT NULL,
  `user_manifesto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`user_id`, `userimg_url`, `user_firstname`, `user_lastname`, `user_admno`, `user_course`, `user_position`, `user_manifesto`, `created_at`) VALUES
(30, '218674.jpg', '21', 'Savage', '1', 'Btech Information Technology', 'chairperson', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 14:52:40'),
(31, '462331.jpg', 'Kendrick', 'Lamar', '2', 'Btech Business and Information Technology', 'chairperson', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 15:13:33'),
(32, '224611.jpg', 'Quavo', 'Marshall', '3', 'Btech Civil Engineering', 'deputy chairperson', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 15:15:00'),
(33, '496963.jpg', 'Offset', 'Kendrall', '4', 'Btech Beauty and Fashion', 'deputy chairperson', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 15:35:02'),
(34, '243463.jpg', 'Kodak', 'Black', '5', 'Btech Music ', 'secretary general', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 15:36:32'),
(37, '757295.jpg', 'Takeoff', 'Khari', '6', 'Btech Business Management', 'secretary general', ' Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.', '2018-04-19 16:19:32'),
(38, '940418.jpg', 'Dua', 'Lipa', '7', 'Btech Beauty and Fashion', 'finance secretary', ' Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 16:20:37'),
(40, '593777.jpg', 'Bryson', 'Tiller', '9', 'Btech Design', 'academic secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 19:35:04'),
(41, '334781.jpg', 'Lil ', 'Uzi', '10', 'Btech Real Estate', 'academic secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 19:36:34'),
(42, '920016.jpeg', 'Tori', 'Kelly', '11', 'Btech Acturial Science', 'gender affairs secretary', ' Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 19:53:55'),
(43, '190811.jpg', 'Lil ', 'Pump', '12', 'Btech Bcom', 'gender affairs secretary', ' Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 19:59:08'),
(44, '832755.jpg', 'Drake', 'Graham', '13', 'Btech Medical Laboratory', 'special needs secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 20:06:06'),
(45, '44443.png', 'Lil', 'Dicky', '14', 'Btech Biotechnology', 'special needs secretary', ' Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 20:12:20'),
(47, '395510.jpg', 'Kevin', 'Spacey', '15', 'Btech Public Administration', 'constitutional affairs secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom. \r\n', '2018-04-19 23:05:27'),
(48, '915893.png', 'Raymond', 'Reddington', '16', 'Btech Biochemistry', 'constitutional affairs secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom. \r\n', '2018-04-19 23:07:00'),
(49, '77668.jpg', 'Sasha', 'Banks', '8', 'Btech Commerce', 'finance secretary', 'Let us come together in this fight against poor leadership and understand the truth that sets us free. This truth is none other than the ability to communicate our desires in freedom.\r\n', '2018-04-19 23:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_admno` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_admno`, `user_pass`, `created_at`) VALUES
(1, 'kiremz', 'kiremz', 'kiremz', '$2y$10$cyEmm9p5sL3WEGsNYQ2oCemgg4mlsU25BBWXEhsRKFo3yN2Wn6MW2', '2018-03-28 20:27:32'),
(2, 'marvin', 'espira', 'scii/01972/2015', '$2y$10$U2c2cuJRkFle9RiTZBDOEu0soDnZK/XI5WwdfjhQHwJZ1ygvFJjaC', '2018-03-28 20:27:32'),
(3, 'rehema', 'jillo', 'rehema', '$2y$10$6j7UeSvYjWrGj0tkoKOH4eVRPZf0y2yNRu3AFTMqo0y18F.A8goaW', '2018-03-28 20:27:32'),
(4, 'espira', 'espira', 'espira', '$2y$10$WwMrMsNjJLALMH/KNPCdbOXCBi0Y4J7qsz01oCyITBkLvRhgwwmLq', '2018-03-28 20:27:32'),
(5, 'first', 'last', 'admno', '$2y$10$e/L6DigInzPR4b1n75I0C.qBvNmjmMTJh9QT6crMHW7c9GX/w.LXe', '2018-03-28 20:27:32'),
(6, 'marvin', 'marvin', 'marvin', '$2y$10$uFvpZUJIurWH0LMtF6rAcuHmXJdqMmFG00ri.zkJnGG8QAHjfhAR6', '2018-03-28 20:27:32'),
(7, 'marvis', 'marvis', 'marvis', '$2y$10$rjANaEjWif4SEXzE5jn6g.tCFiDtAgGRQftk/IiPGZ5sEvU1HU4Di', '2018-03-28 20:27:32'),
(8, 'ceecee', 'waringa', 'ceecee', '$2y$10$Z2EEKApUt6qjjx0z7o2gNejn5kV1zs9eJFzI1ooYBB.hjpIwLiZWu', '2018-04-09 13:01:45'),
(9, 'Njeri', 'Macharia', 'Njeri', '$2y$10$l4y/b35wdG3CBWP1r7Q0nuyfg9bIfS2UU0BkJDUjQrwR.0grHv1J6', '2018-04-10 10:49:31'),
(10, 'Mimmo', 'Wairimu', 'universityofnairobi', '$2y$10$erc4k24NiGPiAVL0ijBp4eX/qXqqqaK/Rjg0bMjLeBBhH8MHqEsi6', '2018-04-18 22:47:15'),
(11, 'Logan', 'Imbuka', '112/00890', '$2y$10$hKKJ0O5oue3ykS4YVo9b7.QrZvYMXWpMilsoWUOQLFNql7Au.fiju', '2018-05-09 16:51:29'),
(12, 'D', 'D', 'scii/00/2015', '$2y$10$y7aYJFOTNg0lGuP7GO/CveB33gsaC24pV2s87J1uRkhx4CqO9z7I6', '2019-04-13 12:41:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_admno` (`user_admno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
