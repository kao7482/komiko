-- phpMyAdmin SQL Dump
-- version 4.0.10.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-10-15 13:39:01
-- 服务器版本: 5.1.73
-- PHP 版本: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `300_comic`
--

-- --------------------------------------------------------

--
-- 表的结构 `comic_chapter`
--

CREATE TABLE IF NOT EXISTS `comic_chapter` (
  `id` tinyint(7) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `infoid` tinyint(6) NOT NULL,
  `subject` varchar(16) NOT NULL,
  `kind` tinyint(2) NOT NULL,
  `translator` varchar(16) NOT NULL,
  `hit` int(11) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) CHARACTER SET ucs2 NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_chap_kind`
--

CREATE TABLE IF NOT EXISTS `comic_chap_kind` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `subject` varchar(16) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) CHARACTER SET ucs2 NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_comment`
--

CREATE TABLE IF NOT EXISTS `comic_comment` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `infoid` tinyint(7) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_hit_month_2015`
--

CREATE TABLE IF NOT EXISTS `comic_hit_month_2015` (
  `cid` tinyint(10) NOT NULL,
  `hit` tinyint(5) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `comic_info`
--

CREATE TABLE IF NOT EXISTS `comic_info` (
  `id` tinyint(6) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `kind` tinyint(4) NOT NULL,
  `tag` text NOT NULL,
  `source` varchar(128) NOT NULL,
  `subject_cn` varchar(32) NOT NULL,
  `subject_tw` varchar(32) NOT NULL,
  `subject_jp` varchar(32) NOT NULL,
  `subject_en` varchar(64) NOT NULL,
  `author` varchar(32) NOT NULL,
  `translator` varchar(32) NOT NULL,
  `date` varchar(64) NOT NULL,
  `cover` text NOT NULL,
  `introduction` text CHARACTER SET ucs2 NOT NULL,
  `hit` int(11) NOT NULL,
  `ghit` int(11) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_pic`
--

CREATE TABLE IF NOT EXISTS `comic_pic` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` tinyint(7) NOT NULL,
  `position` tinyint(3) NOT NULL,
  `url` text NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_shoav_hot`
--

CREATE TABLE IF NOT EXISTS `comic_shoav_hot` (
  `id` tinyint(7) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `infoid` tinyint(7) NOT NULL,
  `position` tinyint(7) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) CHARACTER SET ucs2 NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `comic_skind`
--

CREATE TABLE IF NOT EXISTS `comic_skind` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `typeid` tinyint(2) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `comic_skind`
--

INSERT INTO `comic_skind` (`id`, `status`, `typeid`, `subject`, `create_user`, `create_time`, `modify_user`, `modify_time`) VALUES
(1, 0, 0, '33333333ooo', 'yun82010', '2015-09-16 15:23:17', 'yun82010', '2015-09-16 17:06:39'),
(6, 0, 13, 'ddddddddd', 'yun82010', '2015-09-16 16:07:01', '', '0000-00-00 00:00:00'),
(7, 0, 14, 'rrrrrrrrrrrooo', 'yun82010', '2015-09-16 16:07:01', 'yun82010', '2015-09-16 17:16:16'),
(8, 0, 10, 'yyyyyyyyooo', 'yun82010', '2015-09-16 16:07:42', 'yun82010', '2015-09-16 17:16:16'),
(9, 0, 0, 'tttttooo', 'yun82010', '2015-09-16 17:07:37', 'yun82010', '2015-09-16 17:16:16'),
(10, 0, 0, 'pppppppppppp', 'yun82010', '2015-09-16 17:16:16', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `comic_tag`
--

CREATE TABLE IF NOT EXISTS `comic_tag` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(2) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `comic_tag`
--

INSERT INTO `comic_tag` (`id`, `status`, `subject`, `create_user`, `create_time`, `modify_user`, `modify_time`) VALUES
(3, 0, 'yyyyyuuu', 'yun82010', '2015-09-17 14:14:13', 'yun82010', '2015-09-17 14:45:40'),
(7, 0, 'jjjjjjj', 'yun82010', '2015-09-17 14:45:40', '', '0000-00-00 00:00:00'),
(8, 0, 'mmmmmmmm', 'yun82010', '2015-09-17 14:45:40', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `comic_type`
--

CREATE TABLE IF NOT EXISTS `comic_type` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `comic_type`
--

INSERT INTO `comic_type` (`id`, `status`, `subject`, `create_user`, `create_time`, `modify_user`, `modify_time`) VALUES
(1, 0, '123eeee', 'yun82010', '2015-09-11 13:51:38', 'yun82010', '2015-09-11 16:35:09'),
(2, 1, '1111', 'yun82010', '2015-09-11 13:55:18', '', '0000-00-00 00:00:00'),
(14, 0, 'oooooooppp', 'yun82010', '2015-09-11 17:15:12', 'yun82010', '2015-09-16 14:41:05'),
(6, 1, 'ssssooooooo', 'yun82010', '2015-09-11 14:53:22', 'yun82010', '2015-09-11 17:11:32'),
(7, 1, 'wwwwwwww', 'yun82010', '2015-09-11 14:59:06', 'yun82010', '2015-09-11 16:42:06'),
(8, 0, 'eeeeeee', 'yun82010', '2015-09-11 14:59:28', '', '0000-00-00 00:00:00'),
(9, 0, 'qqqqqqqqq', 'yun82010', '2015-09-11 14:59:28', '', '0000-00-00 00:00:00'),
(10, 1, 'tttttttt', 'yun82010', '2015-09-11 14:59:28', 'yun82010', '2015-09-16 17:17:32'),
(13, 0, 'ggggggggggg', 'yun82010', '2015-09-11 17:11:32', '', '0000-00-00 00:00:00'),
(12, 0, '456', 'yun82010', '2015-09-11 16:43:23', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `member_blacklist`
--

CREATE TABLE IF NOT EXISTS `member_blacklist` (
  `uid` tinyint(8) unsigned NOT NULL,
  `operate` tinyint(2) NOT NULL,
  `cause` varchar(32) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `member_group`
--

CREATE TABLE IF NOT EXISTS `member_group` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(3) NOT NULL,
  `kind` varchar(10) NOT NULL,
  `title` varchar(32) NOT NULL,
  `purview` tinytext NOT NULL COMMENT '紀錄功能名稱',
  `creditslower` int(11) NOT NULL COMMENT '積分門檻低',
  `creditshigher` int(11) NOT NULL COMMENT '積分門檻高',
  `star` tinyint(4) NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `member_group`
--

INSERT INTO `member_group` (`id`, `status`, `kind`, `title`, `purview`, `creditslower`, `creditshigher`, `star`, `create_user`, `create_time`, `modify_user`, `modify_time`) VALUES
(1, 0, 'web', '初級會員', '', 0, 100, 0, 'server', '2015-08-06 00:00:00', '', '0000-00-00 00:00:00'),
(2, 0, 'custom', 'rrrrrrrrrrrr88888', '', 0, 0, 0, 'yun82010', '2015-10-02 14:53:06', 'yun82010', '2015-10-02 16:36:36'),
(4, 0, 'web', '中級會員', '', 100, 1000, 0, 'yun82010', '2015-10-13 11:02:04', '', '0000-00-00 00:00:00'),
(8, 0, 'sys', '系統管理員', '', 0, 0, 0, 'yun82010', '2015-10-13 13:26:53', '', '0000-00-00 00:00:00'),
(7, 0, 'custom', '7777777777778', '', 0, 0, 0, 'yun82010', '2015-10-13 13:22:30', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `member_info`
--

CREATE TABLE IF NOT EXISTS `member_info` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mgroupid` smallint(6) unsigned NOT NULL,
  `sgroupid` smallint(6) unsigned NOT NULL,
  `experience1` int(10) NOT NULL,
  `experience2` int(10) NOT NULL,
  `experience3` int(10) NOT NULL,
  `introduction` text NOT NULL,
  `log_ip` varchar(32) NOT NULL,
  `log_time` datetime NOT NULL,
  `last_log_ip` varchar(32) NOT NULL,
  `last_log_time` datetime NOT NULL,
  `create_user` varchar(15) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(15) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=232793 ;

--
-- 转存表中的数据 `member_info`
--

INSERT INTO `member_info` (`uid`, `username`, `password`, `email`, `mgroupid`, `sgroupid`, `experience1`, `experience2`, `experience3`, `introduction`, `log_ip`, `log_time`, `last_log_ip`, `last_log_time`, `create_user`, `create_time`, `modify_user`, `modify_time`) VALUES
(131747, 'yun82010', '66cd04423bcbdbab7bbc0dd02461cbd5', 'yunfish0302@hotmail.com', 0, 1, 0, 0, 0, '', '220.135.173.229', '2015-10-14 10:43:27', '220.135.173.229', '2015-10-13 14:46:01', 'webServer', '2015-08-04 10:59:23', '', '0000-00-00 00:00:00'),
(232792, 'testyun3', '', '', 0, 1, 0, 0, 0, '', '220.135.173.229', '2015-09-30 15:59:14', '220.135.173.229', '2015-09-30 15:59:14', 'webServer', '2015-08-05 14:28:47', 'yun82010', '2015-10-13 13:27:22'),
(1586, 'Atari', '', '', 0, 1, 0, 0, 0, '', '101.81.66.133', '2015-10-15 12:46:06', '', '0000-00-00 00:00:00', 'webServer', '2015-10-15 12:46:06', '', '0000-00-00 00:00:00'),
(21804, '', '', '', 0, 1, 0, 0, 0, '', '211.72.118.118', '2015-10-15 13:01:00', '', '0000-00-00 00:00:00', 'webServer', '2015-10-15 13:01:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `member_record`
--

CREATE TABLE IF NOT EXISTS `member_record` (
  `uid` tinyint(8) unsigned NOT NULL,
  `favorite` text NOT NULL,
  `works_chap` text NOT NULL,
  `works_info` text NOT NULL,
  `create_user` varchar(32) NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_user` varchar(32) NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
