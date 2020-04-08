
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
DROP TABLE IF EXISTS `wp_ums_icons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_ums_icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `path` varchar(250) DEFAULT NULL,
  `width` mediumint(5) NOT NULL DEFAULT 0,
  `height` mediumint(5) NOT NULL DEFAULT 0,
  `is_def` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_ums_icons` WRITE;
/*!40000 ALTER TABLE `wp_ums_icons` DISABLE KEYS */;
INSERT INTO `wp_ums_icons` VALUES (1,'marker','blue,white,star,pin','bblue.png',32,44,1),(2,'marker','green,white,star,pin','bgreen.png',32,44,1),(3,'marker','purple,white,star,pin','purple.png',32,44,1),(4,'marker','blue,white,star,pin','bred.png',32,44,1),(5,'marker','blue,pin','blue.png',24,38,1),(6,'marker','gray,pin','gray.png',20,33,1),(7,'marker','green,pin','green.png',20,34,1),(8,'marker','pin,yellow','orange.png',20,33,1),(9,'marker','pin,red','red.png',20,31,1),(10,'flag','gray','flag_black.png',32,30,1),(11,'flag','blue','flag_blue.png',32,30,1),(12,'flag','green','flag_green.png',32,30,1),(13,'flag','orange','flag_orange.png',32,30,1),(14,'flag','purple','flag_purple.png',32,30,1),(15,'flag','red','flag_red.png',32,30,1),(16,'marker','pin,cycle,blue','blue_circle.png',26,36,1),(17,'marker','white,blue,pin','blue_orifice.png',26,36,1),(18,'marker','blue,pin','blue_std.png',26,36,1),(19,'pin','green,marker,cycle','green_circle.png',26,36,1),(20,'pin','green,cycle','green_orifice.png',26,36,1),(21,'pin','green','green_std.png',26,36,1),(22,'pin','orange,cycle','orange_circle.png',26,36,1),(23,'pin','orange,cycle','orange_orifice.png',26,36,1),(24,'pin','orange','orange_std.png',26,36,1),(25,'pin','purple,cycle','purple_circle.png',26,36,1),(26,'pin','purple,cycle','purple_orifice.png',26,36,1),(27,'pin','purple','purple_std.png',26,36,1),(28,'pin','red,cycle','red_circle.png',26,36,1),(29,'pin','red,cycle','red_orifice.png',26,36,1),(30,'pin','red','red_std.png',26,36,1),(31,'star','black,dark,pin','star_pin_black.png',32,41,1),(32,'star','blue,pin','star_pin_blue.png',32,41,1),(33,'star','green,pin','star_pin_green.png',32,41,1),(34,'star','orange,pin','star_pin_orange.png',32,41,1),(35,'star','purple','star_pin_purple.png',32,41,1),(36,'star','red,pin','star_pin_red.png',32,41,1),(37,'pin','gray,white,cycle','white_circlepng.png',26,36,1),(38,'pin','gray,white,cycle','white_orifice.png',26,36,1),(39,'pin','white,gray','white_std.png',26,36,1),(40,'pin','yellow,cycle','yellow_circlepng.png',26,36,1),(41,'pin','yellow,cycle','yellow_orifice.png',26,36,1),(42,'pin','yellow','yellow_std.png',26,36,1),(43,'marker','red','marker.png',20,34,1),(44,'marker','blue','marker_blue.png',22,32,1),(45,'marker','red,letter','markerA.png',20,34,1),(46,'marker','orange','marker_orange.png',20,34,1),(47,'marker','green','marker_green.png',20,34,1);
/*!40000 ALTER TABLE `wp_ums_icons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

