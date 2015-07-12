-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2015 at 07:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author_id` int(10) NOT NULL,
  `steps` text NOT NULL,
  `ingredients` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `title`, `author_id`, `steps`, `ingredients`, `time`, `pic`) VALUES
(15, 'momo', 3, 'make a sauce\r\nplace the ingredients\r\nadd water\r\nmake a dough\r\nassembly a momo\r\n', 'cabbage, tofu, mushrooms, onion, cumin powder', '30minutes', ''),
(16, 'chowmein', 3, 'break noodles in pieces\r\nheat a water\r\nadd salt and oil\r\nboil noodles', 'noodles, carrot, capsicum, oil, black pepper', '20mintues', ''),
(17, 'chicken curry', 4, 'wash chicken pieces\r\nprepare herb & spices\r\nheat oil\r\nadd chicken pieces\r\nremove heat\r\nadd garnish', 'butter, chicken, turmeric powder, gingeroot, garlic cloves', '30 minutes', ''),
(18, 'burger', 4, 'chop half of the pancetta\r\ncombine the flour\r\nheat oil \r\ndip onion rings\r\ndrain on paper towel', 'beef mince, breadcrumbs, parsley, plain flour, powder, salt', '25 minutes', ''),
(19, 'cake', 4, 'preheat the oven\r\nwhisk flour and baking soda\r\nbeat butter and brown sugar\r\nadd one eggs at a time\r\ncoat a pan with cooking spray\r\ncool on a wire rack', 'flour, soda, salt, cinnamon, cardamom, butter', '35minutes', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fname`, `lname`, `gender`, `username`, `password`, `email`, `address`) VALUES
(3, 'sangeeta', 'waiba', 'female', 'san', 'san', 'sangeeta_tamang2009@yahoo.com', 'Gongabu, New Buspark'),
(4, 'rachana', 'rajbhandari', 'female', 'rac', 'rac', 'rachanarajbhandari34@yahoo.com', 'tinkune');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
