SET FOREIGN_KEY_CHECKS=0;
alter table `accounts` add `md5pass` varchar(128) NOT NULL;
alter table `accounts` add `yahoo` varchar(255) NOT NULL;
alter table `accounts` add `hdds` int(11) NOT NULL default '0';
alter table `accounts` add `dhcs` int(11) NOT NULL default '0';
alter table `characters` add `zscs` int(11) NOT NULL default '0';
alter table `characters` add `sfvip` int(11) NOT NULL default '0';
alter table `characters` add `hd` int(11) NOT NULL default '0';
alter table `characters` add `yzcs` int(11) NOT NULL default '0';
alter table `characters` add `skill` int(11) NOT NULL default '0';
CREATE TABLE `phptitanms_jobs` (
  `id` smallint(6) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=Big5;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `phptitanms_jobs` VALUES ('500', '管理員');
INSERT INTO `phptitanms_jobs` VALUES ('510', '超級管理員');
INSERT INTO `phptitanms_jobs` VALUES ('0', '新手');
INSERT INTO `phptitanms_jobs` VALUES ('100', '劍士');
INSERT INTO `phptitanms_jobs` VALUES ('110', '狂戰士');
INSERT INTO `phptitanms_jobs` VALUES ('120', '見習騎士');
INSERT INTO `phptitanms_jobs` VALUES ('130', '槍騎兵');
INSERT INTO `phptitanms_jobs` VALUES ('111', '十字軍');
INSERT INTO `phptitanms_jobs` VALUES ('121', '騎士');
INSERT INTO `phptitanms_jobs` VALUES ('131', '龍騎士');
INSERT INTO `phptitanms_jobs` VALUES ('112', '英雄');
INSERT INTO `phptitanms_jobs` VALUES ('122', '聖騎士');
INSERT INTO `phptitanms_jobs` VALUES ('132', '黑騎士');
INSERT INTO `phptitanms_jobs` VALUES ('200', '魔法師');
INSERT INTO `phptitanms_jobs` VALUES ('210', '火毒/法師');
INSERT INTO `phptitanms_jobs` VALUES ('220', '冰雷/法師');
INSERT INTO `phptitanms_jobs` VALUES ('230', '僧侶');
INSERT INTO `phptitanms_jobs` VALUES ('211', '火毒/魔導士');
INSERT INTO `phptitanms_jobs` VALUES ('221', '冰雷/魔導士');
INSERT INTO `phptitanms_jobs` VALUES ('231', '祭司');
INSERT INTO `phptitanms_jobs` VALUES ('212', '火毒/大魔導士');
INSERT INTO `phptitanms_jobs` VALUES ('222', '冰雷/大魔導士');
INSERT INTO `phptitanms_jobs` VALUES ('300', '弓箭手');
INSERT INTO `phptitanms_jobs` VALUES ('310', '獵人');
INSERT INTO `phptitanms_jobs` VALUES ('320', '弩弓手');
INSERT INTO `phptitanms_jobs` VALUES ('311', '遊俠');
INSERT INTO `phptitanms_jobs` VALUES ('321', '狙擊手');
INSERT INTO `phptitanms_jobs` VALUES ('312', '箭神');
INSERT INTO `phptitanms_jobs` VALUES ('322', '神射手');
INSERT INTO `phptitanms_jobs` VALUES ('400', '盜賊');
INSERT INTO `phptitanms_jobs` VALUES ('410', '刺客');
INSERT INTO `phptitanms_jobs` VALUES ('420', '俠盜');
INSERT INTO `phptitanms_jobs` VALUES ('411', '暗殺者');
INSERT INTO `phptitanms_jobs` VALUES ('421', '神偷');
INSERT INTO `phptitanms_jobs` VALUES ('412', '夜使者');
INSERT INTO `phptitanms_jobs` VALUES ('422', '暗影神偷');
INSERT INTO `phptitanms_jobs` VALUES ('232', '主教');
