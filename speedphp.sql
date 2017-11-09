/*
Navicat MySQL Data Transfer

Source Server         : 127
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : speedphp

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-11-09 17:21:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `contents` varchar(200) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `dig` int(11) DEFAULT '0',
  `createtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES ('1', '标题', '留言', '学习', '2', '1510133787');
INSERT INTO `guestbook` VALUES ('2', '第二条', '第二条留言内容', '小明', '2', '1510134202');
INSERT INTO `guestbook` VALUES ('3', '留言二', '内容二', '小一', '0', '1510198673');
INSERT INTO `guestbook` VALUES ('4', '留言三', '内容三', '小二', '0', '1510198706');
INSERT INTO `guestbook` VALUES ('5', '雪落的日子', '北方的飘雪，不均匀的分布在深秋和整个冬季，还有初春，覆盖三个季节的雪，把秋日的凉与冬天的寒，冬日的冷与春天的暖交织在一起，共同鸣响的是季节的变奏。就在这秋天的末尾，这冬日的漫漫征程，还有春天苦苦的挣扎中，我们几乎不能没有雪的飘落，雪落雪融，冷暖交替的是入木三分的寒意逾深的袭来。雪融雪落，暖阳照在大地，出神入化的描绘着春天的样子。', '文学者', '0', '1459324994');
INSERT INTO `guestbook` VALUES ('6', '面朝阳光', '人间有味是清欢，我深爱这北方的飘雪的淡淡的味道，深秋，似水芳菲尽，云梦柳寒烟。那落雪的枝头，那被白雪点缀的分外鲜艳的花瓣，都在述说着花落成伤，雪落成景的季节故事。面朝阳光，晶莹剔透，五光十色繁星闪烁，雪如天使翩翩起舞；面朝天际，落雪如沐，却有飞瀑直下，雪如水幕一泻千里。仰望夜空，星光下的落雪如花，花与星光交织成天女散花的美景。', '面朝阳光', '0', '1459325007');
INSERT INTO `guestbook` VALUES ('7', '漫长的日子', '漫长的日子，唯有落雪的声音，需要静心聆听，原为无声来，我却听歌行。走在雪影下，静静的感受落雪的声音，簌簌的、细细的都在心里响起，有一种天籁之音从天而降。这就是落雪的意境，一种上帝赐予的雪世界的美妙音乐。', '漫长的日子', '0', '1459325021');
INSERT INTO `guestbook` VALUES ('8', '雪落的世界', '置身雪落的世界，我们似乎也宁静了许多，心的世界需要雪的融入，雪的世界需要我们更加细心的聆听。凡尘的燥扰，人世的喧嚣，都让这落雪的日子格外的亲切，我们的心向往着一种纯净的，无忧无虑的，静静的世界，而雪落的世界正是迎合了我们的祈盼。', '我们', '0', '1459325038');
INSERT INTO `guestbook` VALUES ('9', '我是标题', '我是内容', '我是jake', '4', '1459238353');
INSERT INTO `guestbook` VALUES ('10', '英文诗词', 'How to maintain customer interest in a company \r\nIt is very important for all companies to maintain current customers.As we know,customer is the god.The key point is to keep and improve quality of goo', 'jake', '0', '1459324781');
INSERT INTO `guestbook` VALUES ('11', '英文内容', 'attention to what customers need and interests.Keep pace with the fashion.And aslo have good services.the company tries to attract new customers by ads.', 'jake', '0', '1459324944');
SET FOREIGN_KEY_CHECKS=1;
