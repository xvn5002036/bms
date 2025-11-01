/*
MySQL Data Transfer
Source Host: localhost
Source Database: odinms
Target Host: localhost
Target Database: odinms
Date: 2008/8/21 ¤U¤È 10:24:32
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for w_shopcartlist
-- ----------------------------
DROP TABLE IF EXISTS `w_shopcartlist`;
CREATE TABLE `w_shopcartlist` (
  `onlyid` int(10) NOT NULL auto_increment,
  `userid` int(10) NOT NULL,
  `buyitemid` int(10) NOT NULL,
  `size` int(10) NOT NULL default '1',
  `time` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`onlyid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
