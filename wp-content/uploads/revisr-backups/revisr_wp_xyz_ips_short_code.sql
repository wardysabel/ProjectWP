
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
DROP TABLE IF EXISTS `wp_xyz_ips_short_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_xyz_ips_short_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `short_code` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_xyz_ips_short_code` WRITE;
/*!40000 ALTER TABLE `wp_xyz_ips_short_code` DISABLE KEYS */;
INSERT INTO `wp_xyz_ips_short_code` VALUES (1,'date','<?php\r\necho date(\"I jS \\of F Y h:i:s A\");\r\n?>','[xyz-ips snippet=\"date\"]',1),(2,'table','<table border=\"1\">\r\n  <tr>\r\n    <th>URL</th>\r\n    <th>Name</th>\r\n    <th>Cat</th>\r\n    <th>Brief Description</th>\r\n    <th>Full Desc</th>\r\n  </tr>\r\n<?php\r\n    global $wpdb;\r\n    $result = $wpdb->get_results ( \"SELECT * FROM wp_evf_entrymeta WHERE entry_id=4\" );\r\n    foreach ( $result as $print )   { \r\n?>\r\n<td><?php echo $print->meta_value;?></td>\r\n        <?php  } \r\n  ?>\r\n<tr>\r\n</tr>\r\n<?php\r\n    global $wpdb;\r\n    $result = $wpdb->get_results ( \"SELECT * FROM wp_evf_entrymeta WHERE entry_id=5\" );\r\n    foreach ( $result as $print )   {\r\n    ?>\r\n\r\n    <td><?php echo $print->meta_value;?></td>\r\n\r\n        <?php }\r\n  ?>','[xyz-ips snippet=\"table\"]',1);
/*!40000 ALTER TABLE `wp_xyz_ips_short_code` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

