
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
DROP TABLE IF EXISTS `wp_gmp_marker_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_gmp_marker_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `params` text DEFAULT NULL,
  `parent` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` smallint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_gmp_marker_groups` WRITE;
/*!40000 ALTER TABLE `wp_gmp_marker_groups` DISABLE KEYS */;
INSERT INTO `wp_gmp_marker_groups` VALUES (1,'Wildlife Centres',NULL,'a:4:{s:8:\"bg_color\";s:7:\"#8224e3\";s:12:\"claster_icon\";s:106:\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-content/plugins/google-maps-easy/modules/gmap/img/m1.png\";s:18:\"claster_icon_width\";s:2:\"53\";s:19:\"claster_icon_height\";s:2:\"52\";}',0,1),(2,'Birds',NULL,'a:4:{s:8:\"bg_color\";s:7:\"#eeee22\";s:12:\"claster_icon\";s:106:\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-content/plugins/google-maps-easy/modules/gmap/img/m1.png\";s:18:\"claster_icon_width\";s:2:\"53\";s:19:\"claster_icon_height\";s:2:\"52\";}',3,2),(3,'Wildlife',NULL,'a:4:{s:8:\"bg_color\";s:7:\"#E4E4E4\";s:12:\"claster_icon\";s:106:\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-content/plugins/google-maps-easy/modules/gmap/img/m1.png\";s:18:\"claster_icon_width\";s:2:\"53\";s:19:\"claster_icon_height\";s:2:\"52\";}',0,3);
/*!40000 ALTER TABLE `wp_gmp_marker_groups` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

