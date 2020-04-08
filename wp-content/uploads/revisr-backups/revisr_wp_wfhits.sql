
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
DROP TABLE IF EXISTS `wp_wfhits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfhits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attackLogTime` double(17,6) unsigned NOT NULL,
  `ctime` double(17,6) unsigned NOT NULL,
  `IP` binary(16) DEFAULT NULL,
  `jsRun` tinyint(4) DEFAULT 0,
  `statusCode` int(11) NOT NULL DEFAULT 200,
  `isGoogle` tinyint(4) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  `newVisit` tinyint(3) unsigned NOT NULL,
  `URL` text DEFAULT NULL,
  `referer` text DEFAULT NULL,
  `UA` text DEFAULT NULL,
  `action` varchar(64) NOT NULL DEFAULT '',
  `actionDescription` text DEFAULT NULL,
  `actionData` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `k1` (`ctime`),
  KEY `k2` (`IP`,`ctime`),
  KEY `attackLogTime` (`attackLogTime`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_wfhits` WRITE;
/*!40000 ALTER TABLE `wp_wfhits` DISABLE KEYS */;
INSERT INTO `wp_wfhits` VALUES (1,0.000000,1585224195.366756,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,302,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(2,0.000000,1585494257.964010,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,200,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?interim-login=1&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(3,0.000000,1585496455.560421,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',1,200,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=80248efaad','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/post.php?post=8&action=edit','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','logout',NULL,NULL),(4,0.000000,1585496476.745454,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,200,0,2,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginFailValidUsername',NULL,NULL),(5,0.000000,1585496487.030478,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,302,0,2,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(6,0.000000,1585497012.497373,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',1,200,0,2,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=d428cb8a84','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/profile.php','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','logout',NULL,NULL),(7,0.000000,1585497020.021039,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,302,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(8,0.000000,1585640912.191978,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',1,200,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=f85287b3eb','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/edit.php?post_type=aoc_popup','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','logout',NULL,NULL),(9,0.000000,1585640928.388532,'\0\0\0\0\0\0\0\0\0\0ˇˇQå§V',0,302,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(10,0.000000,1585727632.146324,'\0\0\0\0\0\0\0\0\0\0ˇˇV†å»',1,200,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=84d94d1dc2','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=3c1b4f6818','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','logout',NULL,NULL),(11,0.000000,1585727641.406032,'\0\0\0\0\0\0\0\0\0\0ˇˇV†å»',0,302,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(12,0.000000,1585734495.514975,'\0\0\0\0\0\0\0\0\0\0ˇˇê|ˇL',1,200,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=1438b92499','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/admin.php?page=capsman','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','logout',NULL,NULL),(13,0.000000,1585734504.493127,'\0\0\0\0\0\0\0\0\0\0ˇˇê|ˇL',0,302,0,1,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?loggedout=true&wp_lang=en_GB','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36','loginOK',NULL,NULL),(14,0.000000,1585735077.945215,'\0\0\0\0\0\0\0\0\0\0ˇˇV†å»',0,302,0,2,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0','loginOK',NULL,NULL),(15,0.000000,1585735187.083615,'\0\0\0\0\0\0\0\0\0\0ˇˇV†å»',1,200,0,2,0,'http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-login.php?action=logout&_wpnonce=ea32e1a4e7','http://users.aber.ac.uk/ydw/dyfiwildlifecentre/wp-admin/admin.php?page=tablepress&action=edit&table_id=Cat','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0','logout',NULL,NULL);
/*!40000 ALTER TABLE `wp_wfhits` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

