-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2016 at 03:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfakeblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `timestamp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` text COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`timestamp`, `user_id`, `title`, `post`, `img_src`, `blog_id`) VALUES
('1469906750', '950125604411240', 'SORT TEST no.2', 'pangalawang post after 20mis \r\nLorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis', 'IMG20160408115701.jpg', '042979939836127'),
('1469907048', '950125604411240', 'SORT TEST no.3', 'img test', 'IMG20160408115701.jpg', '186877316794326'),
('1469907748', '313027415107860', 'MAS POGI AKO', 'Mas pogi ako kesa sa kuya ko', 'IMG_20150920_104745.jpg', '378661601751845'),
('1469905503', '950125604411240', 'SORT TEST no.1', 'UNANG POST\r\nLorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis', '2.jpg', '630215901566381');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_bday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `user_email`, `user_password`, `user_fname`, `user_lname`, `user_bday`, `user_gender`) VALUES
('313027415107860', 'joshua', 'joshuapalaca24@gmail.com', '$2a$10$rPWKG11bMiDuao1AUboOseeEM.twDEMtEEbrS/pHyOFfE1VteYDFC', 'Joshua', 'Palaca', 'August-24-2001', 1),
('950125604411240', 'peggypenny06', 'jimuelpalaca06@gmail.com', '$2a$10$mufshMJF35P/k45ncGn3s.QaTmypKSLxg6ejyTBWVOwToqmKI5xzy', 'jimuel', 'palaca', 'March-02-1997', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
