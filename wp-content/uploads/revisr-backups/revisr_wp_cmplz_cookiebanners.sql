
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
DROP TABLE IF EXISTS `wp_cmplz_cookiebanners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_cmplz_cookiebanners` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `banner_version` int(11) NOT NULL,
  `default` int(11) NOT NULL,
  `archived` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dismiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `save_preferences` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_preferences` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_functional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_all` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_stats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_prefs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_optin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `readmore_optin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_categories` int(11) NOT NULL,
  `tagmanager_categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_categories_optinstats` int(11) NOT NULL,
  `hide_revoke` int(11) NOT NULL,
  `soft_cookiewall` int(11) NOT NULL,
  `dismiss_on_scroll` int(11) NOT NULL,
  `dismiss_on_timeout` int(11) NOT NULL,
  `dismiss_timeout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept_informational` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_optout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `readmore_optout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readmore_optout_dnsmpi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readmore_privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popup_background_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popup_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_background_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `border_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use_custom_cookie_css` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_css` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_css_amp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `statistics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_cmplz_cookiebanners` WRITE;
/*!40000 ALTER TABLE `wp_cmplz_cookiebanners` DISABLE KEYS */;
INSERT INTO `wp_cmplz_cookiebanners` VALUES (1,3,1,0,'','bottom','edgeless','Settings','Functional only','Save preferences','View preferences','Functional cookies','Marketing','Statistics','Preferences','All cookies','We use cookies to optimize our website and our service.','Read more',0,'',0,0,0,0,0,'10','Accept','We use cookies to optimize our website and our service.','Cookie Policy','Do Not Sell My Personal Information','Privacy statement','#29b6f6','#fff','#fff','#29b6f6','#fff','','','','a:0:{}');
/*!40000 ALTER TABLE `wp_cmplz_cookiebanners` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

