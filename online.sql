-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 06:57 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `uniquename` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `uniquename`, `description`) VALUES
(1, 'arpan', 'arpan', ''),
(2, 'bnmbmbn', 'bnmbmbn', ''),
(3, 'mbnmbnm', 'mbnmbnm', ''),
(4, 'bnmnbmb', 'bnmnbmb', 'bnmbnm'),
(5, 'zxzx', 'zxzx', 'zxzx'),
(6, 'jhkjh', 'jhkjh', 'jhgjhg'),
(7, 'asdasdas', 'asdasdas', 'sasdsd'),
(8, 'asa', 'asa', 'asa'),
(9, 'm,m', 'm,m', 'm,m,'),
(10, 'asasa', 'asasa', 'aasas'),
(11, 'sds', 'sds', 'sdsd'),
(12, 'asaasas', 'asaasas', 'aaaaaaa'),
(13, 'fdfdf', 'fdfdf', 'gffh'),
(14, 'gf', 'gf', 'fdhg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat` int(11) NOT NULL,
  `posts` text NOT NULL,
  `bywhom` text NOT NULL,
  `subject` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `cat`, `posts`, `bywhom`, `subject`) VALUES
(1, '2015-03-25 01:19:19', 1, 'asdasdasd', 'vivek', 5),
(2, '2015-03-25 01:21:10', 1, 'fsdfsdf', 'vivek', 5),
(3, '2015-03-25 01:22:04', 4, 'op[op[o', 'vivek', 4),
(4, '2015-03-25 01:36:42', 1, 'hhjjjh', 'vivek', 1),
(5, '2015-03-25 01:39:16', 1, 'dfdf', 'vivek', 1),
(6, '2015-03-25 01:45:38', 2, 'ada', 'vivek', 9),
(7, '2015-03-25 01:48:43', 2, 'ssdsd', 'vivek', 9),
(8, '2015-03-25 01:59:43', 1, 'dfdf', 'vivek', 2),
(9, '2015-03-25 02:01:07', 1, 'dfdf', 'vivek', 2),
(10, '2015-03-25 02:01:15', 1, 'czzxzxzxz', 'vivek', 2),
(11, '2015-03-25 02:05:35', 2, 'adad', 'vivek', 9),
(12, '2015-03-25 02:05:37', 2, 'asasa', 'vivek', 9),
(13, '2015-03-25 02:05:40', 2, 'asasasaas', 'vivek', 9),
(14, '2015-03-25 02:05:45', 2, 'cvfd', 'vivek', 9),
(15, '2015-03-25 05:44:09', 1, 'asdasdad', 'vivek', 1),
(16, '2015-03-25 05:44:14', 1, 'zfvdxf', 'vivek', 1),
(17, '2015-03-25 05:44:16', 1, 'zxczxczxc', 'vivek', 1),
(18, '2015-03-25 06:13:18', 1, 'ghjhg', 'vivek', 0),
(19, '2015-03-25 06:13:22', 1, 'lkkjlkj', 'vivek', 0),
(20, '2015-03-25 06:13:24', 1, '.kjmk.m', 'vivek', 0),
(21, '2015-03-25 06:13:29', 1, 'jm,nm', 'vivek', 0),
(22, '2015-03-25 06:13:33', 1, 'hhbjmn', 'vivek', 0),
(23, '2015-03-25 13:14:47', 1, 'asasa', 'arpan', 0),
(24, '2015-03-25 13:40:54', 6, 'sdsd', 'arpan', 0),
(25, '2015-03-25 13:40:56', 6, 'sdsd', 'arpan', 0),
(26, '2015-03-25 13:40:57', 6, 'sdsd', 'arpan', 0),
(27, '2015-03-25 13:41:26', 6, 'asasasas', 'arpan', 0),
(28, '2015-03-25 13:41:28', 6, 'asasa', 'arpan', 0),
(29, '2015-03-25 13:41:32', 6, 'gdfghf', 'arpan', 0),
(30, '2015-03-25 13:43:22', 1, 'kjnbjkn', 'arpan', 1),
(31, '2015-03-25 13:59:22', 1, 'sfd', 'vivek', 1),
(32, '2015-03-25 13:59:24', 1, 'sdfsd', 'vivek', 1),
(33, '2015-03-25 13:59:25', 1, 'sdfsdf', 'vivek', 1),
(34, '2015-03-25 14:14:14', 1, 'sdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdfaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'vivek', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `branch` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `jointime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `branch`, `username`, `jointime`) VALUES
(1, 'arpan', 'chandrashekhar', 'arpannitk@gmail.com', 97184718, 'password', 'civil', 'arpan', '2015-03-24 22:34:03'),
(2, 'jaggera', 'ssadasd', 'dsfasfasfdsa', 8197181, 'password2', 'civil', 'vivek', '2015-03-24 22:34:03'),
(3, 'weqq', 'wqeqweq', 'wqeqweqw', 12213, '7694f4a66316e53c8cdd9d9954bd611d', '', 'vivekq', '2015-03-25 15:40:08'),
(4, 'wqeqwe', 'wqeqwe', 'qweqw', 0, 'q', '', 'vivek1', '2015-03-25 15:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat` int(8) NOT NULL,
  `by` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `subject`, `date`, `cat`, `by`) VALUES
(1, 'sfdfdd', '2015-03-25 01:42:38', 1, 2),
(2, 'dgdgfgfg', '2015-03-25 01:42:45', 1, 2),
(9, 'gfgfg', '2015-03-25 01:40:41', 2, 2),
(10, 'asas', '2015-03-25 01:59:23', 1, 2),
(11, 'asas', '2015-03-25 02:04:11', 2, 2),
(12, 'fjhfgh', '2015-03-25 06:13:15', 1, 2),
(13, 'asas', '2015-03-25 13:14:46', 1, 1),
(14, 'sds', '2015-03-25 13:40:53', 6, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
