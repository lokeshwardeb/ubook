-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 07:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` varchar(255) NOT NULL,
  `comment_user_id` varchar(255) NOT NULL,
  `comment_user_name` varchar(255) NOT NULL,
  `comment_text` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_user_id`, `comment_user_name`, `comment_text`, `datetime`) VALUES
(82, '4', '6', 'Jai baba loknath', 'The more comment', '2023-10-21 13:17:45'),
(83, '4', '6', 'Jai baba loknath', 'k', '2023-10-21 13:20:02'),
(84, '36', '6', 'Jai baba loknath', 'Hi', '2023-10-21 13:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `connects`
--

CREATE TABLE `connects` (
  `connect_id` int(11) NOT NULL,
  `connect_requested_id` varchar(255) NOT NULL,
  `connect_recived_id` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `like_post_id` varchar(255) NOT NULL,
  `like_user_id` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `like_post_id`, `like_user_id`, `datetime`) VALUES
(1, '36', '', '2023-10-20 23:47:28'),
(2, '36', '', '2023-10-20 23:48:16'),
(19, '38', '6', '2023-10-21 00:37:57'),
(20, '39', '6', '2023-10-21 00:38:01'),
(23, '41', '6', '2023-10-21 01:06:33'),
(24, '42', '6', '2023-10-21 01:06:45'),
(36, '43', '6', '2023-10-21 09:00:58'),
(51, '36', '6', '2023-11-17 01:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_user_id` varchar(255) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `post_text` varchar(255) NOT NULL,
  `post_media` varchar(255) NOT NULL,
  `post_media_type` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_user_id`, `posted_by`, `post_text`, `post_media`, `post_media_type`, `datetime`) VALUES
(36, '6', 'Jai baba loknath', 't', '', '', '2023-10-13 20:13:44'),
(37, '6', 'Jai baba loknath', '', 'post_6_920386_robotics_club (3).jpeg', 'jpeg', '2023-10-13 20:54:13'),
(38, '6', 'Jai baba loknath', 'This is the first dynamic post', 'post_6_260449_robotics club main.png', 'png', '2023-10-13 20:55:22'),
(39, '6', 'Jai baba loknath', '', 'post_6_214419_robotics_club.jpeg', 'jpeg', '2023-10-13 22:18:43'),
(40, '6', 'Jai baba loknath', '', 'post_6_959659_1578687877540-PROGR_WARM_UP_(3).png', 'png', '2023-10-13 23:29:24'),
(41, '6', 'Jai baba loknath', '', 'post_6_892076_robotics club main.png', 'png', '2023-10-13 23:45:58'),
(42, '6', 'Jai baba loknath', 'Pani', 'post_6_665504_download (1).jpg', 'jpg', '2023-10-13 23:48:55'),
(43, '6', 'Jai baba loknath', 'HI', 'post_6_598961_download.jpg', 'jpg', '2023-10-20 11:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone_no` varchar(255) NOT NULL,
  `user_submitted_status_emai/phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_department` varchar(255) NOT NULL,
  `other_role` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone_no`, `user_submitted_status_emai/phone`, `password`, `user_role`, `user_department`, `other_role`, `datetime`) VALUES
(1, 'f', 'd@d.c', '', 'email', 'd', 'student', 'CSE', '', '2023-10-11 00:55:41'),
(2, 'Mahadeb', 'mahadeb@mahadeb.com', 'email', '12', 'Student', 'Computer Science and Engineering ( CSE )', '', '', '2023-10-11 01:05:43'),
(3, 'Shiv', 'shiv@shiv.com', 'email', '12', 'Student', 'Computer Science and Engineering ( CSE )', '', '', '2023-10-11 01:06:43'),
(4, 'Lokeshwar Deb', '', '01779548241', 'phone_no', '12', 'Student', 'Computer Science and Engineering ( CSE )', '', '2023-10-11 01:13:00'),
(5, 'Lokeshwar Deb', 'lokeshwardeb93@gmail.com', '', 'email', 'gf', 'Student', 'Computer Science and Engineering ( CSE )', '', '2023-10-11 01:15:19'),
(6, 'Jai baba loknath', 'l@l.l', '', 'email', '$2y$10$ArOExRu4xm/vvlHJEQMCROXVfLaH7Z8ERcOp.5mxEuoxjKvC3WY.2', 'Student', 'Computer Science and Engineering ( CSE )', '', '2023-10-11 18:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `users_bio_info`
--

CREATE TABLE `users_bio_info` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_university` varchar(255) NOT NULL,
  `user_passion` varchar(255) NOT NULL,
  `user_profile_img` varchar(255) NOT NULL,
  `user_banner_img` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users_bio_info`
--

INSERT INTO `users_bio_info` (`id`, `user_id`, `user_university`, `user_passion`, `user_profile_img`, `user_banner_img`, `datetime`) VALUES
(1, '6', 'd', 'd', '', '', '2023-11-17 00:08:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`connect_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_bio_info`
--
ALTER TABLE `users_bio_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `connects`
--
ALTER TABLE `connects`
  MODIFY `connect_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_bio_info`
--
ALTER TABLE `users_bio_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
