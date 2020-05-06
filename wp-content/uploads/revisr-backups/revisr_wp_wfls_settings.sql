
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
DROP TABLE IF EXISTS `wp_wfls_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfls_settings` (
  `name` varchar(191) NOT NULL DEFAULT '',
  `value` longblob DEFAULT NULL,
  `autoload` enum('no','yes') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_wfls_settings` WRITE;
/*!40000 ALTER TABLE `wp_wfls_settings` DISABLE KEYS */;
INSERT INTO `wp_wfls_settings` VALUES ('allow-xml-rpc','1','yes'),('captcha-stats','{\"counts\":[0,0,0,0,0,0,0,0,0,0,0],\"avg\":0}','yes'),('delete-deactivation','','yes'),('enable-auth-captcha','','yes'),('global-notices','[]','yes'),('ip-source','','yes'),('ip-trusted-proxies','','yes'),('last-secret-refresh','1585161987','yes'),('ntp-offset','0.60826301574707','yes'),('recaptcha-threshold','0.5','yes'),('remember-device','','yes'),('remember-device-duration','2592000','yes'),('require-2fa-grace-period-enabled','','yes'),('require-2fa.administrator','','yes'),('shared-hash-secret','f53a77aa4c877e2d630864d753bd3ad1affc548c72eda2ed5250b90e62154807','yes'),('shared-symmetric-secret','e48d9f8d5fd1c046d9b5c7eb64c4ad4958a9bd3c947678236bede0deb2d1f279','yes'),('use-ntp','','yes'),('whitelisted','','yes'),('xmlrpc-enabled','1','yes');
/*!40000 ALTER TABLE `wp_wfls_settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

