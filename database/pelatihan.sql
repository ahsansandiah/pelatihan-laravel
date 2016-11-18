-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 08:38 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Aku rydy', 'Pecahkan saja gelas itu biar ramai  dryrdsekalian', 'Anda rydy', '2016-10-10 17:00:00', '2016-11-07 06:06:09'),
(2, 'Artikel Kedua', 'In the example above, Eloquent will try to match the post_id from the Comment model to an id on the Post model. Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with _id. However, if the foreign key on the Comment model is not post_id, you may pass a custom key name as the second argument to.', 'Rahend', '2016-11-11 06:13:10', '2016-11-11 06:13:10'),
(4, 'tyfhgh', 'cgfcgf', 'vgcgfcf', '2016-11-11 06:48:56', '2016-11-11 06:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comment_title` varchar(100) NOT NULL,
  `comment_content` text NOT NULL,
  `article_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `comment_title`, `comment_content`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'paijo', 'amazing bro', 'sangat bermanfaat sekali artikelnya', 1, '2016-11-10 06:44:21', '2016-11-10 06:44:21'),
(2, 'paijem', 'beautiful', 'Wihh sangat agus eu', 1, '2016-11-10 06:54:23', '2016-11-10 06:54:23'),
(3, 'mijem', 'indah', 'artikel ini sangat menakjubkan', 2, '2016-11-11 06:13:58', '2016-11-11 06:13:58'),
(4, 'Test', 'test', 'testest', 2, '2016-11-18 06:04:33', '2016-11-18 06:04:33'),
(5, 'testest', 'fdsf', 'dsfdsf', 2, '2016-11-18 06:23:06', '2016-11-18 06:23:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
