/*
Navicat MySQL Data Transfer

Source Server         : 小王同学
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp3.2

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-19 15:04:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for msg
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `create_at` int(255) NOT NULL,
  `update_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('1', '张三', '你的牌打的也忒好了', '0', '0');
INSERT INTO `msg` VALUES ('2', '李四', '快点啊我等的花都谢了', '0', '0');
INSERT INTO `msg` VALUES ('3', '卢本伟', '给阿姨倒一杯卡布奇诺', '0', '0');
INSERT INTO `msg` VALUES ('4', '卢本伟牛逼', '你是GG还是MM', '1531731169', '1531731169');
INSERT INTO `msg` VALUES ('5', '卢本伟', '不要走决战到天亮', '1531731222', '1531731222');
INSERT INTO `msg` VALUES ('6', '孙悟空', '远去的古人还在说着玉碎瓦全', '0', '0');
INSERT INTO `msg` VALUES ('7', '沙悟净', '流沙河是我家', '0', '0');
INSERT INTO `msg` VALUES ('8', '沙悟净', '流沙河是我家', '0', '0');
INSERT INTO `msg` VALUES ('9', '猪八戒', '高老庄是我家', '0', '0');
INSERT INTO `msg` VALUES ('10', '唐僧', '国家抗震等级是8级', '1531835404', '0');
INSERT INTO `msg` VALUES ('11', '蜘蛛精', '我要吃唐僧肉', '1531835563', '0');
INSERT INTO `msg` VALUES ('12', '蜘蛛精', '我要吃唐僧肉', '1531835674', '0');
INSERT INTO `msg` VALUES ('13', '蜘蛛精', '我要吃唐僧肉3', '1531835686', '0');
INSERT INTO `msg` VALUES ('14', '蝎子精', '我也想吃唐僧肉', '1531835909', '0');
INSERT INTO `msg` VALUES ('15', '王老板', '最后一次测试', '1531836060', '0');
INSERT INTO `msg` VALUES ('16', '王', '倒数第N此测试\r\n', '1531836132', '0');
INSERT INTO `msg` VALUES ('17', '王', '倒数第N此测试\r\n', '1531836263', '0');
INSERT INTO `msg` VALUES ('18', '王', '真的真的最后一次\r\n', '1531836282', '0');

-- ----------------------------
-- Table structure for t1
-- ----------------------------
DROP TABLE IF EXISTS `t1`;
CREATE TABLE `t1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t1
-- ----------------------------
INSERT INTO `t1` VALUES ('1', '张三', '10');
INSERT INTO `t1` VALUES ('2', '李四', '11');
INSERT INTO `t1` VALUES ('3', '王五', '12');
