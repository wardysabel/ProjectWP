
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
DROP TABLE IF EXISTS `wp_evf_entrymeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_evf_entrymeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` bigint(20) unsigned NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`meta_id`),
  KEY `entry_id` (`entry_id`),
  KEY `meta_key` (`meta_key`(32))
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_evf_entrymeta` WRITE;
/*!40000 ALTER TABLE `wp_evf_entrymeta` DISABLE KEYS */;
INSERT INTO `wp_evf_entrymeta` VALUES (1,1,'website_url_9492','https://cdn.pixabay.com/photo/2019/10/20/14/49/animal-4563886_960_720.jpg'),(2,1,'paragraph_text_9667','Red Breasted'),(3,1,'dropdown_3916','Birds'),(4,1,'single_line_text_5188','Robin'),(5,1,'paragraph_text_9357','________'),(6,2,'website_url_9492','https://cdn.pixabay.com/photo/2019/10/20/14/49/animal-4563886_960_720.jpg'),(7,2,'single_line_text_5188','Robin'),(8,2,'paragraph_text_9667','Red Breasted'),(9,2,'dropdown_3916','Birds'),(10,2,'paragraph_text_9357','________'),(11,3,'website_url_9492','https://cdn.pixabay.com/photo/2019/10/20/14/49/animal-4563886_960_720.jpg'),(12,3,'single_line_text_5188','Robin'),(13,3,'dropdown_3916','Birds'),(14,4,'website_url_9492','https://cdn.pixabay.com/photo/2019/10/20/14/49/animal-4563886_960_720.jpg'),(15,4,'single_line_text_5188','Robin'),(16,4,'dropdown_3916','Birds'),(17,5,'website_url_9492','https://www.montwt.co.uk/sites/default/files/styles/node_hero_lap/public/2017-12/CommonLizardjonhawkinsSurreyHillsPhotography.jpg?h=3561ba34&itok=0dGS5AYS'),(18,5,'single_line_text_5188','Common Lizard'),(19,5,'dropdown_3916','Reptiles');
/*!40000 ALTER TABLE `wp_evf_entrymeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

