/*
Navicat MySQL Data Transfer

Source Server         : bing
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : myplatform

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2021-04-25 10:28:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '类型：1-超级管理员；2-普通管理员',
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '111', null, null);
INSERT INTO `admin` VALUES ('2147483647', '剩下的表剩下的表', null, '127', null);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `img` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL COMMENT '分类id',
  `user_id` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '欢迎平台成立', null, null, null, '1', '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('2', 'success', '<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p><p>kjkl&nbsp;</p><p><img src=\"./admin/uploads/1605575194校徽(1).png\" style=\"max-width:100%;\"><br></p>', '1605575179coin.png', '2', null, '2020-11-17 09:06:22');
INSERT INTO `news` VALUES ('3', '你好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-12 14:46:00');
INSERT INTO `news` VALUES ('4', '你好111', '<p>hello</p>', 'user1.jpg', '2', null, '2020-11-13 14:46:00');
INSERT INTO `news` VALUES ('5', '大家好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-14 14:46:00');
INSERT INTO `news` VALUES ('6', '我很好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-15 14:46:00');
INSERT INTO `news` VALUES ('7', 'very好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-16 14:46:00');
INSERT INTO `news` VALUES ('8', '欢迎平台成立', null, null, '3', '1', '2020-11-17 14:46:00');
INSERT INTO `news` VALUES ('9', '欢迎平台成立', null, null, '3', '1', '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('10', 'success', '<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p><p>kjkl&nbsp;</p><p><img src=\"./admin/uploads/1605575194校徽(1).png\" style=\"max-width:100%;\"><br></p>', '1605575179coin.png', '2', null, '2020-11-18 09:06:22');
INSERT INTO `news` VALUES ('11', '你好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-19 14:46:00');
INSERT INTO `news` VALUES ('12', '你好111', '<p>hello</p>', 'user1.jpg', '2', null, '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('13', '大家好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('14', '我很好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('15', 'very好', '<p>hello</p>', 'user1.jpg', '1', null, '2020-11-11 14:46:00');
INSERT INTO `news` VALUES ('16', '地方', '<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p><p>范德萨<img src=\"./admin/uploads/1606190404兵哥学编程.jpg\" style=\"max-width: 100%;\"></p>', '1606190374android.jpg', '1', null, '2020-11-24 00:00:00');
INSERT INTO `news` VALUES ('17', '2', '<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p><p><img src=\"./admin/uploads/1606705241兵哥学编程.jpg\" style=\"max-width:100%;\"><br></p>', '20201215\\59880283a0cc8c58a7badda6f76c9bb7.png', '2', null, '2020-11-25 00:00:00');
INSERT INTO `news` VALUES ('18', '2', '<p>欢迎使用 <b>wangEditor</b> 富文本编辑器</p><p><img src=\"./admin/uploads/1606706987token讲解.png\" style=\"max-width:100%;\"><br></p><p><img src=\"http://localhost:80/phpworkspace/HRSystem/base/demo/teach/admin/uploads/1606707426安信工.jpg\" style=\"max-width:100%;\"><br></p>', '', '2', null, '2020-11-17 00:00:00');

-- ----------------------------
-- Table structure for news_type
-- ----------------------------
DROP TABLE IF EXISTS `news_type`;
CREATE TABLE `news_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `state` tinyint(3) unsigned DEFAULT '1' COMMENT '状态：1-开通；2-关闭',
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_type
-- ----------------------------
INSERT INTO `news_type` VALUES ('1', '平台时讯', '1', '1605172258');
INSERT INTO `news_type` VALUES ('2', '创业经验', '1', '1605172258');
INSERT INTO `news_type` VALUES ('3', '优质加盟', '1', '1605172258');
INSERT INTO `news_type` VALUES ('4', '团队协作', '1', '1605172258');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `icon` varchar(64) DEFAULT NULL,
  `type` tinyint(3) DEFAULT NULL COMMENT '分类：1-学生；2-老师；3-白领',
  `age` smallint(3) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'test', '111', '小明', '20201215\\52d914ae399b1ebabe75eda1297efd89.jpg', '1', '32', '2020-10-30', '1609205458');
INSERT INTO `user` VALUES ('2', 'web', '111', '大兵', 'user2.jpg', '2', '22', '2020-09-29', '1609205458');
INSERT INTO `user` VALUES ('3', 'worker', '111', '张伟', 'user3.jpg', '3', '36', '2020-10-26', '1609205458');
INSERT INTO `user` VALUES ('5', null, null, '张伟', null, '3', '36', null, '1608434831');
INSERT INTO `user` VALUES ('6', null, null, '小明', null, '1', '32', null, '1608434831');
INSERT INTO `user` VALUES ('7', null, null, '张伟', null, '3', '36', null, '1608434831');
INSERT INTO `user` VALUES ('8', null, null, '张伟', null, '3', '36', null, '1609117198');
INSERT INTO `user` VALUES ('9', null, null, '接口', '20201215\\52d914ae399b1ebabe75eda1297efd89.jpg', '1', '32', '2020-12-15', '1609117198');
INSERT INTO `user` VALUES ('10', null, null, '规范的', '20201215\\59880283a0cc8c58a7badda6f76c9bb7.png', '1', '32', '2020-12-15', '1608607588');
INSERT INTO `user` VALUES ('11', null, null, '方式', '', '2', '32', '2020-12-15', '1609030760');
INSERT INTO `user` VALUES ('12', null, null, '发生的', '', '1', '21', '2021-04-14', '1618397041');
