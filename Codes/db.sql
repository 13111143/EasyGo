-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2014-07-05 10:50:28
-- 服务器版本： 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `guide`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_id` char(30) NOT NULL DEFAULT '',
  `admin_pw` char(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pw`) VALUES
('root', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `all_class`
--

CREATE TABLE `all_class` (
  `site_class` char(30) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `all_class`
--

INSERT INTO `all_class` (`site_class`) VALUES
('搜索'),
('视频'),
('购物'),
('新闻'),
('电影');

-- --------------------------------------------------------

--
-- 表的结构 `all_sites`
--

CREATE TABLE `all_sites` (
  `site_class` char(30) NOT NULL DEFAULT '',
  `site_name` char(25) DEFAULT NULL,
  `site_url` char(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `all_sites`
--

INSERT INTO `all_sites` (`site_class`, `site_name`, `site_url`) VALUES
('购物', '聚美优品', 'http://bj.jumei.com'),
('购物', '天猫', 'http://www.tmall.com'),
('购物', '亚马逊', 'http://www.amazon.cn'),
('购物', '苏宁易购', 'http://www.suning.com'),
('购物', '唯品会', 'http://shop.vipshop.com'),
('购物', '凡客诚品', 'http://www.vancl.com'),
('购物', '淘宝', 'http://www.taobao.com'),
('购物', '京东商城', 'http://www.jd.com'),
('视频', '风行网', 'http://www.funshion.com'),
('视频', 'PPTV', 'http://www.pptv.com'),
('视频', '腾讯视频', 'http://v.qq.com'),
('视频', '迅雷看看', 'http://www.kankan.com'),
('视频', '爱奇艺', 'http://www.iqiyi.com'),
('视频', '中国电影网', 'http://www.m1905.com/movi'),
('视频', '土豆网', 'http://www.tudou.com'),
('视频', '优酷网', 'http://www.youku.com'),
('电影', '风行网', 'http://www.funshion.com'),
('电影', 'PPTV', 'http://www.pptv.com'),
('电影', '腾讯视频', 'http://v.qq.com'),
('电影', '迅雷看看', 'http://www.kankan.com'),
('电影', '爱奇艺', 'http://www.iqiyi.com'),
('电影', '中国电影网', 'http://www.m1905.com/movi'),
('电影', '土豆网', 'http://www.tudou.com'),
('电影', '优酷网', 'http://www.youku.com'),
('新闻', '中国新闻网', 'http://www.chinanews.com'),
('新闻', '人民网', 'http://www.people.com.cn'),
('新闻', '新华网', 'http://www.xinhuanet.com'),
('新闻', '腾讯新闻', 'http://news.qq.com'),
('新闻', '凤凰网', 'http://www.ifeng.com'),
('新闻', '网易新闻', 'http://www.163.com'),
('新闻', '谷歌新闻', 'http://www.sohu.com'),
('新闻', '新浪新闻', 'http://www.sina.com.cn'),
('搜索', '360搜索', 'http://www.so.com'),
('搜索', '雅虎', 'http://cn.yahoo.com'),
('搜索', '有道', 'http://www.youdao.com'),
('搜索', '爱问', 'http://iask.sina.com.cn'),
('搜索', '搜狗', 'http://www.sogou.com'),
('搜索', '搜搜', 'http://www.soso.com'),
('搜索', '谷歌', 'http://www.google.com'),
('搜索', '百度', 'http://www.baidu.com'),
('php学习', '新浪微博', 'blog.sina.com.cn'),
('php学习', '博客园', 'www.cnblogs.com'),
('php学习', 'PHP100网', 'www.php100.com'),
('php学习', 'PHP100论坛', 'bbs.php100.com'),
('php学习', 'PHP学习之家', 'www.444p.com'),
('php学习', 'PHP学习网', 'bmzz.com.cn'),
('php学习', 'viphper', 'www.viphper.com'),
('php学习', 'PHP人人小站', 'zhan.renren.com'),
('游戏', '8', 'http://games.qq.com'),
('游戏', '7', 'http://xiaoyouxi.360.cn'),
('游戏', '6', 'http://www.ali213.net'),
('游戏', '5', 'http://games.sina.com.cn'),
('游戏', '4', 'http://www.2144.cn'),
('游戏', '3', 'http://www.17173.com'),
('游戏', '2', 'http://aszt.43999.com'),
('游戏', '1', 'http://phb.sogou.com');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_name` char(50) NOT NULL DEFAULT '',
  `user_pw` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_name`, `user_pw`) VALUES
('clerk', '123'),
('hhj', '123456'),
('tangpin', '123456'),
('test', 'test'),
('wt', '123456'),
('yangting', '123456'),
('gq', '123'),
('lala', 'lala'),
('小贱贱', 'a123456'),
('lee', 'jianqiao'),
('hello', 'hello'),
('1', '1'),
('Summer', 'a123456'),
('123123a', '123'),
('asd', '123');

-- --------------------------------------------------------

--
-- 表的结构 `user_sites`
--

CREATE TABLE `user_sites` (
  `user_name` char(25) NOT NULL DEFAULT '',
  `site_name` varchar(255) NOT NULL DEFAULT '',
  `site_url` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_sites`
--

INSERT INTO `user_sites` (`user_name`, `site_name`, `site_url`) VALUES
('lee', '中国新闻网', 'http://www.chinanews.com'),
('hhj', 'PPTV', 'http://www.pptv.com'),
('lee', '人民网', 'http://www.people.com.cn'),
('wt', '优酷网', 'http://www.youku.com'),
('wt', '土豆网', 'http://www.tudou.com'),
('wt', '雅虎', 'http://cn.yahoo.com'),
('gq', '风行网', 'http://www.funshion.com'),
('小贱贱', '360搜索', 'http://www.so.com'),
('小贱贱', 'PPTV', 'http://www.pptv.com'),
('小贱贱', '腾讯视频', 'http://v.qq.com'),
('123123a', 'PPTV', 'http://www.pptv.com');
