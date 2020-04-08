
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
DROP TABLE IF EXISTS `wp_gmp_markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_gmp_markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `description` text DEFAULT NULL,
  `coord_x` varchar(30) NOT NULL,
  `coord_y` varchar(30) NOT NULL,
  `icon` int(11) DEFAULT NULL,
  `map_id` int(11) DEFAULT NULL,
  `marker_group_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `animation` int(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `params` text NOT NULL,
  `sort_order` smallint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) DEFAULT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `hash` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_gmp_markers` WRITE;
/*!40000 ALTER TABLE `wp_gmp_markers` DISABLE KEYS */;
INSERT INTO `wp_gmp_markers` VALUES (1,'Dyfi Wildlife Centre','<p>Tap to find out the history <a href=\"GMP_SITE_URL?page_id=65\">HERE</a></p>','52.568','-3.913',41,1,1,'Cors Dyfi, 8SR, A487, Machynlleth SY20 8SR, UK',NULL,'2020-03-12 15:17:53','a:4:{s:15:\"marker_link_src\";s:82:\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/index.php/history-of-dyfi-wildlife/\";s:16:\"show_description\";s:1:\"1\";s:23:\"marker_list_def_img_url\";s:0:\"\";s:17:\"clasterer_exclude\";s:1:\"1\";}',1,NULL,NULL,NULL,NULL),(2,'Ynys Hir','','52.54471','-3.94553',41,1,1,'',NULL,'2020-03-26 12:46:51','a:4:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"description_mouse_hover\";s:1:\"1\";s:23:\"description_mouse_leave\";s:1:\"1\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',2,NULL,NULL,NULL,NULL),(3,'Ynyslas','[table id=centres filter=\"Ynyslas\" hide_columns=1,2,4 /]\r\n[table id=centres filter=\"Ynyslas\" hide_columns=1,2,3 hide_rows=1 /]','52.51231','-4.05242',41,1,1,'',NULL,'2020-03-26 12:54:32','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',3,NULL,NULL,NULL,NULL),(4,'Birds','[table id=Cat filter=\"Birds\" hide_columns=1,3 /]\r\n\r\n[table id=Cat filter=\"Birds\" hide_columns=1,2 hide_rows=1 /]','52.567','-3.918',49,1,2,'Dyfi Osprey Project, Machynlleth SY20 8SR, UK',NULL,'2020-03-26 13:45:53','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',4,NULL,NULL,NULL,NULL),(5,'Pine Timber from Pews','[table id=history filter=\"Corris\" hide_columns=1,3,4 /]\r\n[table id=history filter=\"Corris\" hide_columns=1,2,4 /]\r\n[table id=history filter=\"Corris\" hide_columns=1,2,3 hide_rows=1 /]\r\n\r\n','52.653861','-3.8398249',39,2,0,'Corris, Machynlleth SY20, UK',NULL,'2020-03-30 10:53:07','a:3:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";s:17:\"clasterer_exclude\";s:1:\"1\";}',1,NULL,NULL,NULL,NULL),(6,'Rutland Water','[table id=centres filter=\"Rutland Water\" hide_columns=1,2,4 /]\r\n[table id=centres filter=\"Rutland Water\" hide_columns=1,2,3 hide_rows=1 /]','52.6548995','-0.6272811',41,1,1,'Rutland Water, Oakham LE15, UK',NULL,'2020-04-01 08:44:09','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',5,NULL,NULL,NULL,NULL),(7,'Loch of the Lowes','','56.5666667','-3.55',41,1,1,'Loch of Lowes, Dunkeld PH8 0HY, UK',NULL,'2020-04-01 08:45:24','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',6,NULL,NULL,NULL,NULL),(8,'Foulshaw Moss','','54.2467049','-2.8323084',41,1,1,'Cumbria Wildlife Trust Head Office, Cumbria Wildlife Trust Plumgarths, Crook Rd, Kendal LA8 8LX, UK',NULL,'2020-04-01 08:46:46','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',7,NULL,NULL,NULL,NULL),(9,'Aberfoyle','','56.1786724','-4.3846028',41,1,1,'Aberfoyle, Stirling FK8, UK',NULL,'2020-04-01 08:47:28','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',8,NULL,NULL,NULL,NULL),(10,'Glaslyn','[table id=centres filter=\"Glaslyn\" hide_columns=1,2,4 /]\r\n[table id=centres filter=\"Glaslyn\" hide_columns=1,2,3 hide_rows=1 /]','53.0699344','-4.0676853',41,1,1,'Glaslyn, Caernarfon LL55, UK',NULL,'2020-04-01 08:48:06','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',9,NULL,NULL,NULL,NULL),(11,'Recycling','','52.5680055','-3.9133666',39,2,0,'Dyfi Osprey Project, Machynlleth SY20 8SR, UK',NULL,'2020-04-03 08:25:35','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',2,NULL,NULL,NULL,NULL),(12,'Copper clock face 1970','[table id=history filter=\"Machynlleth\" hide_columns=1,3,4 /]\r\n[table id=history filter=\"Machynlleth\" hide_columns=1,2,4 /]\r\n[table id=history filter=\"Machynlleth\" hide_columns=1,2,3 hide_rows=1 /]\r\n\r\n','52.590273','-3.853485',39,2,0,'Machynlleth SY20, UK',NULL,'2020-04-03 08:31:12','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',3,NULL,NULL,NULL,NULL),(13,'Slate','','53.1180329','-4.127549',39,2,0,'Llanberis, Caernarfon LL55, UK',NULL,'2020-04-03 08:32:49','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',4,NULL,NULL,NULL,NULL),(14,'Slate','[table id=history filter=\"Bethesda\" hide_columns=1,3,4 /]\r\n[table id=history filter=\"Bethesda\" hide_columns=1,2,4 /]\r\n[table id=history filter=\"Bethesda\" hide_columns=1,2,3 hide_rows=1 /]\r\n\r\n','53.1675992','-4.0656124',39,2,0,'Penrhyn Quarry, Bethesda, Bangor LL57 4YG, UK',NULL,'2020-04-03 08:33:45','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',5,NULL,NULL,NULL,NULL),(15,'Plants','','52.568','-3.921',51,1,0,'',NULL,'2020-04-08 11:29:59','a:2:{s:15:\"marker_link_src\";s:0:\"\";s:23:\"marker_list_def_img_url\";s:0:\"\";}',10,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `wp_gmp_markers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

