/*
MySQL Data Transfer
Source Host: localhost
Source Database: test
Target Host: localhost
Target Database: test
Date: 2018/3/17 �U�� 01:45:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for talk
-- ----------------------------
DROP TABLE IF EXISTS `talk`;
CREATE TABLE `talk` (
  `id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cid` varchar(20) DEFAULT NULL,
  `tts` varchar(700) CHARACTER SET utf8 DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `talk` VALUES ('1-5-1', 'normal', 'Aloha');
INSERT INTO `talk` VALUES ('1-5-2', 'delight', 'Aloha，你是不是要來跟我玩');
INSERT INTO `talk` VALUES ('1-5-3', 'delight', 'Aloha，你好');
INSERT INTO `talk` VALUES ('1-5-4', 'happiness', '嗨，今天要來玩點甚麼呢');
INSERT INTO `talk` VALUES ('1-5-5', 'anger', '吼，都沒人理我');
INSERT INTO `talk` VALUES ('2-5-1', 'happiness', 'Ho，Lala');
INSERT INTO `talk` VALUES ('2-5-2', 'delight', 'Hoal，你是不是要來跟我玩');
INSERT INTO `talk` VALUES ('2-5-3', 'delight', 'Hola，你好');
INSERT INTO `talk` VALUES ('2-5-4', 'happiness', '嗨，今天要來玩點甚麼呢');
INSERT INTO `talk` VALUES ('2-5-5', 'sorrow', '阿，有點無聊呢');
INSERT INTO `talk` VALUES ('3-5-1', 'delight', 'Biliba，那是甚麼');
INSERT INTO `talk` VALUES ('3-5-2', 'delight', 'Biliba，你是不是要來跟我玩');
INSERT INTO `talk` VALUES ('3-5-3', 'delight', 'Biliba，你好');
INSERT INTO `talk` VALUES ('3-5-4', 'happiness', '嗨，喲，今天，要來，玩點，甚麼呢');
INSERT INTO `talk` VALUES ('3-5-5', 'happiness', '星期一，猴子穿新衣');
