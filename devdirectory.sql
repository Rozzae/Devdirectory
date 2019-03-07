-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 03:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devdirectory`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `profile_pics` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fullname`, `email`, `password`, `profile_pics`) VALUES
(3, 'Uchechukwu Opurum', 'ucheop@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(4, 'Chibuikem Eze', 'chibyke@gmail.com', 'adc5e79a002be7643e5fa0a60f112914', ''),
(5, 'Chizaram Eze', 'chizzy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(6, 'Otobo Henry', 'henry@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(7, 'Mangro Ebine', 'man@gmail.com', '24dc2b5d421e7f6eda94ba6188e6fbc4', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `time_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations_list`
--

CREATE TABLE `locations_list` (
  `id` int(11) NOT NULL,
  `location` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations_list`
--

INSERT INTO `locations_list` (`id`, `location`) VALUES
(1, 'Abuja, Nigeria'),
(2, 'Edo State, Nigeria'),
(3, 'Lagos State, Nigeria'),
(4, 'Edo State, Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message` varchar(225) NOT NULL,
  `seen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_tokens`
--

CREATE TABLE `password_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_tokens`
--

INSERT INTO `password_tokens` (`id`, `token`, `user_id`, `user_type`) VALUES
(1, 'f15c85f140d83bc689b102f8159e5989', 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `images` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `portfolio` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles_list`
--

CREATE TABLE `roles_list` (
  `id` int(11) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill`) VALUES
(1, 1, 'HTML'),
(2, 1, 'Node.js'),
(3, 1, 'Django'),
(4, 1, 'Python'),
(6, 1, 'CSS'),
(7, 3, 'JavaScript'),
(8, 1, 'PhotoShop'),
(9, 9, 'Python'),
(10, 10, 'Python'),
(11, 10, 'Graphics Design'),
(12, 1, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `skills_list`
--

CREATE TABLE `skills_list` (
  `id` int(11) NOT NULL,
  `skill` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills_list`
--

INSERT INTO `skills_list` (`id`, `skill`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'PhotoShop'),
(5, 'Graphics Design'),
(6, 'PHP'),
(7, 'Python'),
(8, 'Django'),
(9, 'Node.js');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `profile_pics` varchar(225) NOT NULL,
  `skill` varchar(225) NOT NULL,
  `experience` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `bio` varchar(225) NOT NULL,
  `online` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `firstname`, `lastname`, `email`, `password`, `profile_pics`, `skill`, `experience`, `location`, `role`, `bio`, `online`) VALUES
(1, 'developer', 'Uchechukwu', 'Eze', 'uchechukwueze70@gmail.com', 'adc5e79a002be7643e5fa0a60f112914', 'profilepics/blockchain.png', '1', 'intermidate', '', '', '', 0),
(2, 'designer', 'Uchechukwu', 'Eze', 'uchechukwueze71@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', 0),
(3, 'developer', 'Ibenye', 'Gabriel', 'gabe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'profilepics/download (1).png', '1', '', '', '', '', 0),
(4, 'developer', 'Bien', 'Moses', 'moses@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', 0),
(5, 'developer', 'Daniel', 'Igboeli', 'dan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', 0),
(6, 'developer', 'Chidera', 'Enyi', 'dera@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', 0),
(7, 'designer', 'Ehrabo', 'Favour', 'favour@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'profilepics/download (3).png', '', '', '', '', '', 0),
(8, 'designer', 'Honda', 'Victor', 'vic@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'profilepics/10882256_.jpg', '', '', '', '', '', 0),
(9, 'developer', 'Zainab', 'Peace', 'peace@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'profilepics/Chib Sch 20170915_225715.jpg', '1', 'intermidate', '', '', '', 0),
(10, 'designer', 'david', 'david-west', 'drizzyclassic.ddw@gmail.com', '1a34772ac9b457db464a9e51ff2e2158', '', '1', 'pro', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations_list`
--
ALTER TABLE `locations_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_tokens`
--
ALTER TABLE `password_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_list`
--
ALTER TABLE `roles_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_list`
--
ALTER TABLE `skills_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locations_list`
--
ALTER TABLE `locations_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `password_tokens`
--
ALTER TABLE `password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles_list`
--
ALTER TABLE `roles_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `skills_list`
--
ALTER TABLE `skills_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
