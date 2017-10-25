/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.11-log : Database - cheat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cheat` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `cheat`;

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `tel` varchar(50) NOT NULL DEFAULT '' COMMENT '电话号码',
  `age` tinyint(4) NOT NULL DEFAULT '0' COMMENT '年龄',
  `hobby` varchar(255) NOT NULL DEFAULT '' COMMENT '爱好',
  `decr` text NOT NULL COMMENT '简介',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别',
  `area` varchar(255) NOT NULL DEFAULT '' COMMENT '地区',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `test` */

insert  into `test`(`id`,`username`,`tel`,`age`,`hobby`,`decr`,`sex`,`area`,`logo`) values (1,'嘉颖','1332222111',23,'篮球，足球','php开发程序员<div>111</div>',0,'广东',''),(2,'小明','1325455544',24,'篮球，唱歌','c++',0,'广东',''),(3,'小红','1325455544',25,'篮球，唱歌','java',1,'广东',''),(4,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0,'广东',''),(5,'小明','1325455544',24,'篮球，唱歌','c++',0,'江苏',''),(6,'小红','1325455544',25,'篮球，唱歌','java',1,'江苏',''),(7,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0,'江苏',''),(8,'小明','1325455544',24,'篮球，唱歌','c++',0,'江苏',''),(9,'小红','1325455544',25,'篮球，唱歌','java',1,'北京',''),(10,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0,'北京',''),(14,'小黄','13251005451',18,'篮球','1024',0,'广东','uploads/59f03527245df.jpg'),(20,'Ewing','13250150526',15,'php','php开发',0,'广东','uploads/59f02f736d156.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
