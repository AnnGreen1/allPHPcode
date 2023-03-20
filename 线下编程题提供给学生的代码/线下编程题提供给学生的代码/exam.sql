/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : exam

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 10/12/2021 09:34:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for todo
-- ----------------------------
DROP TABLE IF EXISTS `todo`;
CREATE TABLE `todo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '唯一标识',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '待办事项内容',
  `is_complate` tinyint(1) NULL DEFAULT NULL COMMENT '是否完成 0：未完成 1：已完成',
  `create_time` datetime(0) NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of todo
-- ----------------------------
INSERT INTO `todo` VALUES (3, '明天下午还有课哦', 1, '2021-12-09 11:00:02');
INSERT INTO `todo` VALUES (5, '已完成了吗？', 1, '2021-12-09 11:31:58');
INSERT INTO `todo` VALUES (7, '嗯', 1, '2021-12-09 12:54:33');
INSERT INTO `todo` VALUES (9, '今天我们考试', 0, '2021-12-09 16:19:16');
INSERT INTO `todo` VALUES (10, '祝愿大家都能取得一个好成绩', 0, '2021-12-09 16:27:07');

SET FOREIGN_KEY_CHECKS = 1;
