
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `wp_ums_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_ums_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(64) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `type_id` smallint(3) NOT NULL DEFAULT 0,
  `params` text DEFAULT NULL,
  `has_tab` tinyint(1) NOT NULL DEFAULT 0,
  `label` varchar(128) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ex_plug_dir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_ums_modules` WRITE;
/*!40000 ALTER TABLE `wp_ums_modules` DISABLE KEYS */;
INSERT INTO `wp_ums_modules` VALUES (1,'adminmenu',1,1,'',0,'Admin Menu','',NULL),(2,'options',1,1,'',1,'Options','',NULL),(3,'user',1,1,'',1,'Users','',NULL),(4,'templates',1,1,'',1,'Templates for Plugin','',NULL),(5,'maps',1,1,'',1,'maps','maps',NULL),(6,'marker',1,1,'',0,'Markers','Maps Markers',NULL),(7,'marker_groups',1,1,'',0,'Marker Gropus','Marker Groups',NULL),(8,'supsystic_promo',1,1,'',0,'Promo','Promo',NULL),(9,'icons',1,1,'',1,'Marker Icons','Marker Icons',NULL),(10,'mail',1,1,'',1,'mail','mail',NULL),(11,'csv',1,1,'',0,'csv','csv',NULL),(12,'maps_widget',1,1,'',0,'maps_widget','maps_widget',NULL);
/*!40000 ALTER TABLE `wp_ums_modules` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

