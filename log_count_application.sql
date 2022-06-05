/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.36 : Database - log_count_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`log_count_application` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `log_count_application`;

/*Table structure for table `doctrine_migration_versions` */

DROP TABLE IF EXISTS `doctrine_migration_versions`;

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `doctrine_migration_versions` */

insert  into `doctrine_migration_versions`(`version`,`executed_at`,`execution_time`) values ('DoctrineMigrations\\Version20220530094128','2022-05-30 09:44:01',125),('DoctrineMigrations\\Version20220530114843','2022-05-30 11:49:04',444);

/*Table structure for table `log_file_offset` */

DROP TABLE IF EXISTS `log_file_offset`;

CREATE TABLE `log_file_offset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `line_no` bigint(20) NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `log_file_offset` */

insert  into `log_file_offset`(`id`,`line_no`,`update_at`) values (1,0,'2022-05-30 17:19:27');

/*Table structure for table `service_log` */

DROP TABLE IF EXISTS `service_log`;

CREATE TABLE `service_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_time` datetime NOT NULL,
  `request_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `response_code` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `service_log` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
