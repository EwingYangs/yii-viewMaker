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
  `decr` varchar(255) NOT NULL DEFAULT '' COMMENT '简介',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `test` */

insert  into `test`(`id`,`username`,`tel`,`age`,`hobby`,`decr`,`sex`) values (1,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0),(2,'小明','1325455544',24,'篮球，唱歌','c++',0),(3,'小红','1325455544',25,'篮球，唱歌','java',1),(4,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0),(5,'小明','1325455544',24,'篮球，唱歌','c++',0),(6,'小红','1325455544',25,'篮球，唱歌','java',1),(7,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0),(8,'小明','1325455544',24,'篮球，唱歌','c++',0),(9,'小红','1325455544',25,'篮球，唱歌','java',1),(10,'嘉颖','1332222111',23,'篮球，足球','php开发程序员',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
