/*
MySQL Data Transfer
Source Host: localhost
Source Database: odinms
Target Host: localhost
Target Database: odinms
Date: 2008/8/21 ¤U¤È 10:24:43
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for wormphp_clientdb
-- ----------------------------
DROP TABLE IF EXISTS `wormphp_clientdb`;
CREATE TABLE `wormphp_clientdb` (
  `id` int(11) NOT NULL auto_increment,
  `W_username` varchar(12) character set big5 NOT NULL,
  `W_user512pass` varchar(512) character set big5 NOT NULL,
  `W_ban` int(1) NOT NULL default '0',
  `W_CreateTime` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  `W_Vip` int(1) NOT NULL default '0',
  `W_Money` int(10) NOT NULL default '0',
  `W_Consumption` int(10) NOT NULL default '0',
  `W_userEmail` varchar(255) character set big5 NOT NULL,
  `W_userQQ` int(11) NOT NULL,
  `W_PassKeyWT` varchar(20) character set big5 NOT NULL,
  `W_PassKeyDA` varchar(20) character set big5 NOT NULL,
  `W_BuyCodes` varchar(10000) character set big5 default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `wormphp_clientdb` VALUES ('1', 'abrcdf102', 'Worm', '0', '2008-08-17 23:09:25', '0', '0', '0', 'abrcdf1023@yahoo.com.tw', '123456789', '????', '????', null);
INSERT INTO `wormphp_clientdb` VALUES ('2', '741852963', 'Worm', '0', '2008-08-19 22:34:30', '0', '0', '0', '123456@123456', '0', '?w?w?w?w', '?w?w?w?w', null);
INSERT INTO `wormphp_clientdb` VALUES ('3', 'iwhgiuegh', 'Worm', '0', '2008-08-19 22:35:19', '0', '0', '0', '123456@123456', '0', '?w?w?w?w', '?w?w?w?w', null);
