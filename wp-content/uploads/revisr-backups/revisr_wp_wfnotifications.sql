
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
DROP TABLE IF EXISTS `wp_wfnotifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfnotifications` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `new` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT 1000,
  `ctime` int(10) unsigned NOT NULL,
  `html` text NOT NULL,
  `links` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_wfnotifications` WRITE;
/*!40000 ALTER TABLE `wp_wfnotifications` DISABLE KEYS */;
INSERT INTO `wp_wfnotifications` VALUES ('site-AEAAAAA',0,'wfplugin_updates',502,1585745468,'<a href=\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/update-core.php\">An update is available for 1 theme</a>','[]'),('site-AIAAAAA',0,'wfplugin_scan',502,1586455367,'<a href=\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/admin.php?page=WordfenceScan\">1 issue found in most recent scan</a>','[]'),('site-MAAAAAA',0,'wfplugin_updates',502,1586362778,'<a href=\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/update-core.php\">Updates are available for 3 themes</a>','[]'),('site-NQAAAAA',0,'wfplugin_updates',502,1586455051,'<a href=\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/update-core.php\">An update is available for 1 plugin</a>','[]'),('site-OAAAAAA',0,'wfplugin_scan',502,1586530115,'<a href=\"http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/admin.php?page=WordfenceScan\">3 issues found in most recent scan</a>','[]'),('site-OIAAAAA',1,'wfplugin_updates',502,1588783872,'<a href=\"https://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/update-core.php\">An update is available for WordPress (v5.4.1)</a>','[]'),('site-OUAAAAA',1,'wfplugin_scan',502,1588783872,'<a href=\"https://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/admin.php?page=WordfenceScan\">1 issue found in most recent scan</a>','[]');
/*!40000 ALTER TABLE `wp_wfnotifications` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

