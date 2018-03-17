/*
MySQL Data Transfer
Source Host: localhost
Source Database: monster
Target Host: localhost
Target Database: monster
Date: 2018/3/17 �U�� 01:45:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `content1` varchar(500) DEFAULT NULL,
  `content2` varchar(500) DEFAULT NULL,
  `content3` varchar(500) DEFAULT NULL,
  `content4` varchar(500) DEFAULT NULL,
  `content5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for device
-- ----------------------------
DROP TABLE IF EXISTS `device`;
CREATE TABLE `device` (
  `device_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for item_info
-- ----------------------------
DROP TABLE IF EXISTS `item_info`;
CREATE TABLE `item_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` longtext,
  `creat_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for member_list
-- ----------------------------
DROP TABLE IF EXISTS `member_list`;
CREATE TABLE `member_list` (
  `id` varchar(99) NOT NULL DEFAULT '',
  `password` varchar(99) DEFAULT NULL,
  `name` varchar(99) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `company` varchar(99) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for name
-- ----------------------------
DROP TABLE IF EXISTS `name`;
CREATE TABLE `name` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `Openness` int(1) NOT NULL,
  `Conscientiousness` int(1) NOT NULL,
  `Extraversion` int(1) NOT NULL,
  `Agreeableness` int(1) NOT NULL,
  `Neuroticism` int(1) NOT NULL,
  `content` varchar(30) DEFAULT NULL,
  `mantra` varchar(100) DEFAULT NULL,
  `introduction` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `content` VALUES ('1', '巧比', 'Aloha', 'Aloha，你是不是要來跟我玩', 'Aloha，你好', '嗨，今天要來玩點甚麼呢', '吼，都沒人理我');
INSERT INTO `content` VALUES ('2', '菲比', 'Ho，Lala', 'Hoal，你是不是要來跟我玩', 'Hola，你好', '嗨，今天要來玩點甚麼呢', '阿，有點無聊呢');
INSERT INTO `content` VALUES ('3', '樂比', 'Biliba，那是甚麼', 'Biliba，你是不是要來跟我玩', 'Biliba，你好', '嗨，喲，今天，要來，玩點，甚麼呢', '星期一，猴子穿新衣');
INSERT INTO `name` VALUES ('1', '巧比', '活潑外向', '5', '5', '5', '5', '3', 'sys-edit_A.php', '壓呼!、理我理我', '呵呵呵!我叫巧比!理我理我!你喜歡畫畫嗎?我很會畫畫耶!我們一起去畫圖吧!呀呼!我最喜歡有人陪我了!一起玩比較好玩。走吧走吧!呀呼!');
INSERT INTO `name` VALUES ('2', '菲比', '乖巧內向\r\n', '3', '3', '3', '3', '3', 'sys-edit_B.php', '溜溜、拉拉拉', '哈摟!小朋友你好!我是菲比!我平常最喜歡唱歌了!拉拉拉!而且我還很會照顧人喔! 我們一定可以變成好朋友拉拉拉!');
INSERT INTO `name` VALUES ('3', '聰比', '調皮搗蛋\r\n', '3', '3', '5', '5', '3', 'sys-edit_C.php', '烏拉拉', '嗚拉拉!你好，我的，名字叫聰比，你知道，為什麼，太陽總是，黃色的嗎? 為什麼，海洋的水，都不會不見啊? 烏拉拉，你也不知道喔?那我們，一起來解開，這些問題吧!');
INSERT INTO `project` VALUES ('1', 'test', 'teset');
INSERT INTO `project` VALUES ('2', 'rr', 'rr');
INSERT INTO `project` VALUES ('3', 'rrrrr', 'rrrrrr');
INSERT INTO `project` VALUES ('4', 'fadsfsa', 'sdfsadf');
INSERT INTO `project` VALUES ('5', 'fsadfasd', 'asdfsadf');
INSERT INTO `project` VALUES ('6', 'sfdgsd', 'sfdgsdfg');
INSERT INTO `project` VALUES ('7', 'asdfdsaf', 'asdfasdf');
