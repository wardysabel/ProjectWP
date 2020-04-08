
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
DROP TABLE IF EXISTS `wp_evf_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_evf_entries` (
  `entry_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_device` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `referer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fields` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `starred` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`entry_id`),
  KEY `form_id` (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_evf_entries` WRITE;
/*!40000 ALTER TABLE `wp_evf_entries` DISABLE KEYS */;
INSERT INTO `wp_evf_entries` VALUES (1,163,1,'Google Chrome/Windows','144.124.255.76','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/index.php/insert-new-data/','{\"omKLzPUvIH-4\":{\"name\":\"Insert URL to photo\",\"value\":\"https:\\/\\/cdn.pixabay.com\\/photo\\/2019\\/10\\/20\\/14\\/49\\/animal-4563886_960_720.jpg\",\"id\":\"omKLzPUvIH-4\",\"type\":\"url\",\"meta_key\":\"website_url_9492\"},\"DOhbKyb9v2-6\":{\"name\":\"Brief Description\",\"value\":\"Red Breasted\",\"id\":\"DOhbKyb9v2-6\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9667\"},\"hicc7gzKc2-5\":{\"name\":\"Select Category\",\"value\":\"Birds\",\"value_raw\":\"Birds\",\"id\":\"hicc7gzKc2-5\",\"type\":\"select\",\"meta_key\":\"dropdown_3916\"},\"IXSm4TEjVB-3\":{\"name\":\"Name\",\"value\":\"Robin\",\"id\":\"IXSm4TEjVB-3\",\"type\":\"text\",\"meta_key\":\"single_line_text_5188\"},\"SuG8gO9Mbt-7\":{\"name\":\"Full Description\",\"value\":\"________\",\"id\":\"SuG8gO9Mbt-7\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9357\"}}','trash',0,0,'2020-03-30 12:26:49'),(2,163,1,'Google Chrome/Windows','144.124.255.76','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/index.php/insert-new-data/','{\"omKLzPUvIH-4\":{\"name\":\"Insert URL to photo\",\"value\":\"https:\\/\\/cdn.pixabay.com\\/photo\\/2019\\/10\\/20\\/14\\/49\\/animal-4563886_960_720.jpg\",\"id\":\"omKLzPUvIH-4\",\"type\":\"url\",\"meta_key\":\"website_url_9492\"},\"IXSm4TEjVB-3\":{\"name\":\"Name\",\"value\":\"Robin\",\"id\":\"IXSm4TEjVB-3\",\"type\":\"text\",\"meta_key\":\"single_line_text_5188\"},\"DOhbKyb9v2-6\":{\"name\":\"Brief Description\",\"value\":\"Red Breasted\",\"id\":\"DOhbKyb9v2-6\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9667\"},\"hicc7gzKc2-5\":{\"name\":\"Select Category\",\"value\":\"Birds\",\"value_raw\":\"Birds\",\"id\":\"hicc7gzKc2-5\",\"type\":\"select\",\"meta_key\":\"dropdown_3916\"},\"SuG8gO9Mbt-7\":{\"name\":\"Full Description\",\"value\":\"________\",\"id\":\"SuG8gO9Mbt-7\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9357\"}}','trash',0,0,'2020-03-30 12:39:34'),(3,163,1,'Google Chrome/Windows','144.124.255.76','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/index.php/insert-new-data/','{\"omKLzPUvIH-4\":{\"name\":\"Insert URL to photo\",\"value\":\"https:\\/\\/cdn.pixabay.com\\/photo\\/2019\\/10\\/20\\/14\\/49\\/animal-4563886_960_720.jpg\",\"id\":\"omKLzPUvIH-4\",\"type\":\"url\",\"meta_key\":\"website_url_9492\"},\"IXSm4TEjVB-3\":{\"name\":\"Name\",\"value\":\"Robin\",\"id\":\"IXSm4TEjVB-3\",\"type\":\"text\",\"meta_key\":\"single_line_text_5188\"},\"DOhbKyb9v2-6\":{\"name\":\"Brief Description\",\"value\":\"\",\"id\":\"DOhbKyb9v2-6\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9667\"},\"hicc7gzKc2-5\":{\"name\":\"Select Category\",\"value\":\"Birds\",\"value_raw\":\"Birds\",\"id\":\"hicc7gzKc2-5\",\"type\":\"select\",\"meta_key\":\"dropdown_3916\"},\"SuG8gO9Mbt-7\":{\"name\":\"Full Description\",\"value\":\"\",\"id\":\"SuG8gO9Mbt-7\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9357\"}}','trash',0,0,'2020-03-30 12:40:11'),(4,163,1,'Google Chrome/Windows','144.124.255.76','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/index.php/insert-new-data/','{\"omKLzPUvIH-4\":{\"name\":\"Insert URL to photo\",\"value\":\"https:\\/\\/cdn.pixabay.com\\/photo\\/2019\\/10\\/20\\/14\\/49\\/animal-4563886_960_720.jpg\",\"id\":\"omKLzPUvIH-4\",\"type\":\"url\",\"meta_key\":\"website_url_9492\"},\"IXSm4TEjVB-3\":{\"name\":\"Name\",\"value\":\"Robin\",\"id\":\"IXSm4TEjVB-3\",\"type\":\"text\",\"meta_key\":\"single_line_text_5188\"},\"DOhbKyb9v2-6\":{\"name\":\"Brief Description\",\"value\":\"\",\"id\":\"DOhbKyb9v2-6\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9667\"},\"hicc7gzKc2-5\":{\"name\":\"Select Category\",\"value\":\"Birds\",\"value_raw\":\"Birds\",\"id\":\"hicc7gzKc2-5\",\"type\":\"select\",\"meta_key\":\"dropdown_3916\"},\"SuG8gO9Mbt-7\":{\"name\":\"Full Description\",\"value\":\"\",\"id\":\"SuG8gO9Mbt-7\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9357\"}}','publish',0,0,'2020-03-30 12:45:28'),(5,163,5,'Mozilla Firefox/Windows','86.128.227.11','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/?page_id=158','{\"omKLzPUvIH-4\":{\"name\":\"Insert URL to photo\",\"value\":\"https:\\/\\/www.montwt.co.uk\\/sites\\/default\\/files\\/styles\\/node_hero_lap\\/public\\/2017-12\\/CommonLizardjonhawkinsSurreyHillsPhotography.jpg?h=3561ba34&itok=0dGS5AYS\",\"id\":\"omKLzPUvIH-4\",\"type\":\"url\",\"meta_key\":\"website_url_9492\"},\"IXSm4TEjVB-3\":{\"name\":\"Name\",\"value\":\"Common Lizard\",\"id\":\"IXSm4TEjVB-3\",\"type\":\"text\",\"meta_key\":\"single_line_text_5188\"},\"DOhbKyb9v2-6\":{\"name\":\"Brief Description\",\"value\":\"\",\"id\":\"DOhbKyb9v2-6\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9667\"},\"hicc7gzKc2-5\":{\"name\":\"Select Category\",\"value\":\"Reptiles\",\"value_raw\":\"Reptiles\",\"id\":\"hicc7gzKc2-5\",\"type\":\"select\",\"meta_key\":\"dropdown_3916\"},\"SuG8gO9Mbt-7\":{\"name\":\"Full Description\",\"value\":\"\",\"id\":\"SuG8gO9Mbt-7\",\"type\":\"textarea\",\"meta_key\":\"paragraph_text_9357\"}}','publish',0,0,'2020-04-08 11:03:11');
/*!40000 ALTER TABLE `wp_evf_entries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

