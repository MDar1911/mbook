-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 05 月 27 日 22:55
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `thinkphp`
--
CREATE DATABASE IF NOT EXISTS `thinkphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thinkphp`;

-- --------------------------------------------------------

--
-- 表的结构 `think_data`
--

CREATE TABLE IF NOT EXISTS `think_data` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_data`
--

INSERT INTO `think_data` (`data`) VALUES
('thinkphp'),
('php'),
('framework');

-- --------------------------------------------------------

--
-- 表的结构 `think_form`
--

CREATE TABLE IF NOT EXISTS `think_form` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_form`
--

INSERT INTO `think_form` ( `title`, `content`, `create_time`) VALUES
('a', 'bbb', 1430953509),
('222222222222', '22222222222222222', 1432767264),
('3333333333', 'ccccccccccccccccc', 1432767282);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `type` int(11) unsigned NOT NULL,
  `status` int(11) unsigned NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` ( `name`, `account`,  `type`, `status`, `score`) VALUES
('zhangsan', 'aaa', 1, 1, 61),
('lisi', 'bbb', 2, 2, 62),
('wangwu', 'ccc', 3, 1, 53),
('xiaohong', 'ddd', 4, 1, 74);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;