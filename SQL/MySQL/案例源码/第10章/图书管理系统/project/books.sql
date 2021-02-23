-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-01-03 18:46:09
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `info_books`
--

CREATE TABLE `info_books` (
  `id` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `uploadtime` datetime NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 NOT NULL,
  `total` int(50) DEFAULT NULL,
  `leave_number` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `info_books`
--

INSERT INTO `info_books` (`id`, `name`, `price`, `uploadtime`, `type`, `total`, `leave_number`) VALUES
(42, 'PHP从入门到精通', '88.00', '2018-12-25 08:01:20', 'PHP编程', 10000, 10000),
(43, 'HTML5从入门到精通', '49.00', '2018-12-25 08:04:06', 'Web网页', 5000, 5000),
(44, 'JAVA从入门到精通', '98.00', '2018-12-25 08:04:56', 'JAVA编程', 15000, 15000),
(45, 'MySQL', '68.00', '2018-12-25 08:08:21', '数据库', 10000, 10000),
(46, 'Bootstrap', '59.00', '2018-12-25 08:08:41', '前端框架', 3000, 3000),
(47, 'vue.js从入门到精通', '78.00', '2018-12-25 08:09:33', '前端框架', 3000, 3000),
(48, 'PHP项目实战', '98.00', '2018-12-25 08:12:52', 'PHP编程', 5000, 5000),
(49, 'HTML5项目实战', '99.00', '2018-12-25 08:14:42', '前端开发', 10000, 10000),
(50, 'C语言从入门到精通', '79.00', '2018-12-25 08:15:57', 'C语言编程', 10000, 10000),
(51, 'C#从入门到精通', '89.00', '2018-12-25 08:16:38', 'C#编程', 5000, 5000),
(52, 'C++从入门到精通', '66.00', '2018-12-26 07:55:25', 'C++编程', 3000, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_books`
--
ALTER TABLE `info_books`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `info_books`
--
ALTER TABLE `info_books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
