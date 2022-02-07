-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 06:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('lph68fvgqv3mai8bpj67325g4hh64om5', '::1', 1644245653, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234353635333b),
('0hliidnan2pjo3rt7su1p9mrfbbvjlj6', '::1', 1644246273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234363237333b),
('6v0m02nsp3bs2dd6tcaa2jhtt3spcql7', '::1', 1644246580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234363538303b),
('cop9j14c3fihsqm6j1pumocii5gdvuku', '::1', 1644246889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234363838393b),
('kheq3f4d8hnlqvadci79vm1i3g3oilsd', '::1', 1644247190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234373139303b),
('40tog4k8hfp3mdnp2bbeejt9td17363t', '::1', 1644247570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234373537303b),
('ak8qdlvqmp3ni9pt99qd58sogu8o8lq3', '::1', 1644248018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234383031383b),
('vbbo8qfeunmtgp8k09h6e33qvh2aj1l1', '::1', 1644248655, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234383635353b),
('9chm7funuhto5sfsi64k51ufskbcv8v9', '::1', 1644249320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343234393332303b),
('51nul6p6h7hq8sh1je0uuef03vob3v0v', '::1', 1644250216, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235303231363b),
('7s4qmnsckm32mf08ejqkav8sv4gqoet8', '::1', 1644250562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235303536323b6d73677c733a32333a2252656769737465726564205375636365737366756c6c79223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('561dl88huchu98a1oofi11eic3e24o5u', '::1', 1644251223, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235313232333b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('ec1qqt45dgn4m1nh6atc7dj7qbbn7fr0', '::1', 1644252102, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235323130323b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('surc6tpgsa8g4u8ugfgnjtht8npar7bd', '::1', 1644252413, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235323431333b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('tm631pku23ueabog6vf8f6094ca3dngu', '::1', 1644252825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235323832353b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('4a47dhs4pkc7kfb2i2d1sq7d3v3rca2s', '::1', 1644253636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235333633363b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('cgr2el9mj69srp9gv2ot0aft9suojh50', '::1', 1644254119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235343131393b),
('c7fku38jo0c6brrpgasnn0mabo3dqfls', '::1', 1644254580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235343538303b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('780rqmbno5hg4e9q1cah162sh9q1h8f5', '::1', 1644254908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235343930383b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('pbg8shvdap4sego7i15m1uci5a3qosk9', '::1', 1644255229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235353232393b757365727c613a313a7b733a373a22757365725f6964223b733a313a2231223b7d),
('7krfc539cd47nd76t5jdq64hpk8oajpj', '::1', 1644255419, 0x5f5f63695f6c6173745f726567656e65726174657c693a313634343235353233353b);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_desc` text NOT NULL,
  `post_start_dt` varchar(250) NOT NULL,
  `post_end_dt` varchar(250) NOT NULL,
  `post_img` varchar(250) NOT NULL,
  `post_status` enum('Active','Inactive') NOT NULL,
  `post_date` varchar(200) NOT NULL,
  `post_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_desc`, `post_start_dt`, `post_end_dt`, `post_img`, `post_status`, `post_date`, `post_user_id`) VALUES
(1, 'A', 'desc', '2022-02-07', '2022-02-07', 'img-grd-gal-2.jpg', 'Active', '2022-02-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_fname` varchar(200) NOT NULL,
  `user_lname` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` text NOT NULL,
  `user_dob` varchar(200) NOT NULL,
  `user_img` varchar(250) NOT NULL,
  `user_role` enum('Admin','User') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
  `user_regdt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_pass`, `user_dob`, `user_img`, `user_role`, `user_status`, `user_regdt`) VALUES
(1, 'Super', 'Admin', 'superadmin@gmail.com', '$2y$10$8LpiF9wDvh/AOmyJLU45D.oUVUO5pl1KbpL3lL/5FpUSaOrbIHqci', '15/08/1995', 'img-grd-gal-2.jpg', 'Admin', 'Active', '2022-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
