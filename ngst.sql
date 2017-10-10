-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 04 月 04 日 05:30
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ngst`
--

-- --------------------------------------------------------

--
-- 表的结构 `ngst_auth`
--

CREATE TABLE IF NOT EXISTS `ngst_auth` (
  `auth_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '名称',
  `auth_pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `auth_c` varchar(32) DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(3) NOT NULL DEFAULT '0' COMMENT '等级。0父级，1子级',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=70 ;

--
-- 转存表中的数据 `ngst_auth`
--

INSERT INTO `ngst_auth` (`auth_id`, `auth_name`, `auth_pid`, `auth_c`, `auth_a`, `auth_path`, `auth_level`) VALUES
(12, '系统管理', 0, '', '', '12', 0),
(41, '管理员', 12, 'System', 'lst', '12-41', 1),
(42, '角色管理', 12, 'Role', 'lst', '12-42', 1),
(43, '权限管理', 12, 'Auth', 'lst', '12-43', 1),
(44, '用户管理', 0, '', '', '44', 0),
(46, '用户列表', 44, 'User', 'lst', '44-46', 1),
(54, '首页', 0, '', '', '54', 0),
(55, '南工简介', 54, 'Intro', 'lst', '54-55', 1),
(56, '资源共享', 54, 'Resoult', 'lst', '54-56', 1),
(57, '社团成员', 54, 'Member', 'lst', '54-57', 1),
(58, '项目管理', 0, '', '', '58', 0),
(59, '项目进度', 58, 'Project', 'lst', '58-59', 1),
(61, '项目组成员', 58, 'Charge', 'lst', '58-61', 1),
(62, '高级管理', 0, '', '', '62', 0),
(64, '年级段管理', 62, 'Rank', 'lst', '62-64', 1),
(65, '社团相册', 62, 'Picture', 'lst', '62-65', 1),
(66, '公告管理', 62, 'News', 'lst', '62-66', 1),
(67, '链接资源', 62, 'Link', 'lst', '62-67', 1),
(69, '留言管理', 62, 'Note', 'lst', '62-69', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ngst_charge`
--

CREATE TABLE IF NOT EXISTS `ngst_charge` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `pro_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '项目编号',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '项目组成员',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '电子邮件',
  PRIMARY KEY (`id`),
  KEY `FK_ID` (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='项目负责人信息' AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `ngst_charge`
--

INSERT INTO `ngst_charge` (`id`, `pro_id`, `name`, `email`) VALUES
(22, 1, '张芳', '1669863232@qq.com'),
(21, 1, '宋延辉', '1035332816@qq.com'),
(20, 1, '季丹凤', '1368709425@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_link`
--

CREATE TABLE IF NOT EXISTS `ngst_link` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '资源名称',
  `addr` varchar(255) DEFAULT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='各种链接资源' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `ngst_link`
--

INSERT INTO `ngst_link` (`id`, `name`, `addr`) VALUES
(1, '14级梁平--CSDN', 'http://blog.csdn.net/fly_lucas/article/details/53406452'),
(2, '14级申承峰--博客园', 'http://www.cnblogs.com/scf141592/'),
(3, '15级陈兴生--新浪', 'http://blog.sina.com.cn/u/5854601588'),
(4, '13级郭迁迁--CSDN', 'http://blog.csdn.net/guoqianqian5812?viewmode=contents'),
(5, '15级张杰--CSDN', 'http://blog.csdn.net/qq_34160679');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_manager`
--

CREATE TABLE IF NOT EXISTS `ngst_manager` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `role_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '角色,0为管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='管理员表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ngst_manager`
--

INSERT INTO `ngst_manager` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'root', 'af7d9a5f955d02f68780cc45db1eb818', 0),
(2, 'jhq', 'ebf4d0bf00150f763146e0567530a063', 102);

-- --------------------------------------------------------

--
-- 表的结构 `ngst_member`
--

CREATE TABLE IF NOT EXISTS `ngst_member` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '成员编号',
  `class` varchar(50) NOT NULL DEFAULT '13级' COMMENT '成员的年级',
  `name` varchar(42) NOT NULL DEFAULT '' COMMENT '成员姓名',
  `sno` bigint(15) NOT NULL DEFAULT '0' COMMENT '学号',
  `sex` char(1) NOT NULL DEFAULT '' COMMENT '性别',
  `direct` varchar(60) NOT NULL DEFAULT '' COMMENT '专业方向',
  `mobile` bigint(15) NOT NULL DEFAULT '0' COMMENT '联系方式',
  `company` varchar(120) NOT NULL DEFAULT '在校' COMMENT '所在公司',
  `filetrace` varchar(255) DEFAULT NULL COMMENT '相册名称',
  `filedate` date DEFAULT NULL COMMENT '上传日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='社团成员信息' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ngst_member`
--

INSERT INTO `ngst_member` (`id`, `class`, `name`, `sno`, `sex`, `direct`, `mobile`, `company`, `filetrace`, `filedate`) VALUES
(1, '14级', '季会勤', 1415925622, '女', '云计算2班', 15236095272, '在校', 'Member/2017-04-04/58e320b3e93d6.jpg', '2017-04-04');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_news`
--

CREATE TABLE IF NOT EXISTS `ngst_news` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) DEFAULT NULL COMMENT '发布人',
  `title` varchar(120) DEFAULT NULL COMMENT '公告标题',
  `content` text COMMENT '发布内容',
  `date` date DEFAULT NULL COMMENT '发布日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='社团公告' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ngst_news`
--

INSERT INTO `ngst_news` (`id`, `name`, `title`, `content`, `date`) VALUES
(1, '陈兴生', '关于2017南工社团招生', '这是一个测试的公告内容。南工电脑网社团拥有12多年历史.我们社团紧跟时代的步伐.社团分成两大方向：移动和云计算.移动方向有：嵌入式、Android、IOS等,云计算方向有Hadoop、Openstack、Hbase、虚拟化技术等.当然社团成员也可以搞他们感兴趣的东西,例如：PHP、C++、HTML5、UI、PS等多元化发展.', '2017-04-03');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_note`
--

CREATE TABLE IF NOT EXISTS `ngst_note` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL DEFAULT '' COMMENT '留言者',
  `text` text NOT NULL COMMENT '留言内容',
  `date` datetime DEFAULT NULL COMMENT '留言日期',
  PRIMARY KEY (`id`),
  KEY `FK_user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ngst_note`
--

INSERT INTO `ngst_note` (`id`, `user`, `text`, `date`) VALUES
(1, 'jhq', '我要上墙。。。', '2017-04-04 13:26:04');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_picture`
--

CREATE TABLE IF NOT EXISTS `ngst_picture` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `file_small_pic` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `file_big_pic` varchar(255) DEFAULT NULL COMMENT '原图',
  `filedesc` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='社团相册' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `ngst_picture`
--

INSERT INTO `ngst_picture` (`id`, `file_small_pic`, `file_big_pic`, `filedesc`) VALUES
(2, 'Picture/2017-04-03/thumb_0_58e2132237db1.jpg', 'Picture/2017-04-03/58e2132237db1.jpg', '1'),
(3, 'Picture/2017-04-03/thumb_0_58e213360ba55.jpg', 'Picture/2017-04-03/58e213360ba55.jpg', '2'),
(4, 'Picture/2017-04-03/thumb_0_58e21341e9b39.jpg', 'Picture/2017-04-03/58e21341e9b39.jpg', '3'),
(5, 'Picture/2017-04-03/thumb_0_58e2134f43c27.jpg', 'Picture/2017-04-03/58e2134f43c27.jpg', '4'),
(6, 'Picture/2017-04-03/thumb_0_58e2135a6e72f.jpg', 'Picture/2017-04-03/58e2135a6e72f.jpg', '5'),
(7, 'Picture/2017-04-03/thumb_0_58e21366d53df.jpg', 'Picture/2017-04-03/58e21366d53df.jpg', '6'),
(8, 'Picture/2017-04-03/thumb_0_58e213729ca04.jpg', 'Picture/2017-04-03/58e213729ca04.jpg', '7'),
(9, 'Picture/2017-04-03/thumb_0_58e2137e4eec9.jpg', 'Picture/2017-04-03/58e2137e4eec9.jpg', '8'),
(10, 'Picture/2017-04-03/thumb_0_58e219f16655c.jpg', 'Picture/2017-04-03/58e219f16655c.jpg', '9'),
(12, 'Picture/2017-04-03/thumb_0_58e21a5d4bc74.jpg', 'Picture/2017-04-03/58e21a5d4bc74.jpg', '10');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_project`
--

CREATE TABLE IF NOT EXISTS `ngst_project` (
  `pro_id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '项目编号',
  `pro_user` varchar(255) DEFAULT NULL,
  `pro_name` varchar(120) NOT NULL DEFAULT '' COMMENT '项目名称',
  `pro_desc` text NOT NULL COMMENT '项目描述',
  `pro_people` varchar(100) NOT NULL DEFAULT '' COMMENT '项目负责人姓名',
  `pro_starttime` date NOT NULL DEFAULT '0000-00-00' COMMENT '项目开始时间',
  `pro_endtime` date NOT NULL DEFAULT '0000-00-00' COMMENT '项目结束时间',
  `pro_email` varchar(120) NOT NULL DEFAULT '' COMMENT '负责人邮箱',
  `pro_plan` tinyint(3) DEFAULT '0' COMMENT '项目进度',
  `pro_remark` text COMMENT '项目备注',
  `pro_admit` varchar(255) DEFAULT '0' COMMENT '是否批准',
  PRIMARY KEY (`pro_id`),
  KEY `FK_username` (`pro_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='项目信息' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ngst_project`
--

INSERT INTO `ngst_project` (`pro_id`, `pro_user`, `pro_name`, `pro_desc`, `pro_people`, `pro_starttime`, `pro_endtime`, `pro_email`, `pro_plan`, `pro_remark`, `pro_admit`) VALUES
(1, 'jhq', '南工社团网站', '本项目主要适用于社团内部人员的使用。', '季会勤', '2017-04-01', '2017-04-05', '2551044074@qq.com', 80, '南工社团网站主要功能是项目管理、社团人员的录入、社团资源的链接等等。。', '1');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_rank`
--

CREATE TABLE IF NOT EXISTS `ngst_rank` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) NOT NULL DEFAULT '' COMMENT '年级段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='社团年级段' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `ngst_rank`
--

INSERT INTO `ngst_rank` (`id`, `class`) VALUES
(1, '14级'),
(3, '15级'),
(4, '16级');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_resoult`
--

CREATE TABLE IF NOT EXISTS `ngst_resoult` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '资源编号',
  `filename` varchar(120) NOT NULL DEFAULT '' COMMENT '资源的名称',
  `fileuploader` varchar(255) NOT NULL DEFAULT '' COMMENT '上传者',
  `filedate` date DEFAULT '0000-00-00' COMMENT '上传的日期',
  `filetrace` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员上传资源' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ngst_resoult`
--

INSERT INTO `ngst_resoult` (`id`, `filename`, `fileuploader`, `filedate`, `filetrace`) VALUES
(1, '南工简介', '季会勤', '2017-04-04', 'Resoult/2017-04-04/58e31ce64984a.zip');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_role`
--

CREATE TABLE IF NOT EXISTS `ngst_role` (
  `role_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '控制器-操作方法',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=103 ;

--
-- 转存表中的数据 `ngst_role`
--

INSERT INTO `ngst_role` (`role_id`, `role_name`, `role_auth_ids`, `role_auth_ac`) VALUES
(100, '副社长1', '44,46', 'User-lst'),
(101, '副社长2', '54,55,56,57', 'Intro-lst,Resoult-lst,Member-lst'),
(102, '学习委员', '58,59,61', 'Project-lst,Charge-lst');

-- --------------------------------------------------------

--
-- 表的结构 `ngst_user`
--

CREATE TABLE IF NOT EXISTS `ngst_user` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(210) NOT NULL DEFAULT '' COMMENT '密码',
  `sno` bigint(15) NOT NULL DEFAULT '0' COMMENT '学号',
  `email` varchar(120) NOT NULL DEFAULT '' COMMENT '邮箱',
  `token` varchar(50) DEFAULT '' COMMENT '账号激活码',
  `token_exptime` int(10) DEFAULT '0' COMMENT '激活码有效期',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态，0未激活1激活',
  `regtime` int(10) DEFAULT '0' COMMENT '注册时间',
  PRIMARY KEY (`id`,`username`),
  KEY `FK_member` (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户注册信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `ngst_user`
--

INSERT INTO `ngst_user` (`id`, `username`, `password`, `sno`, `email`, `token`, `token_exptime`, `status`, `regtime`) VALUES
(1, 'jhq', 'e10adc3949ba59abbe56e057f20f883e', 1415925622, '2551044074@qq.com', '09693e08d8153038b629ede5a7761dc4', 1491367685, 1, 1491281285),
(2, 'qin', 'e10adc3949ba59abbe56e057f20f883e', 1415925622, '2551044074@qq.com', '1a03e407eaededac8194988c2000ee83', 1491370013, 1, 1491283613);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
