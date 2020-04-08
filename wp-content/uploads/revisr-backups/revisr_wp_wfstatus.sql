
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
DROP TABLE IF EXISTS `wp_wfstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_wfstatus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ctime` double(17,6) unsigned NOT NULL,
  `level` tinyint(3) unsigned NOT NULL,
  `type` char(5) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `k1` (`ctime`),
  KEY `k2` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=229 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_wfstatus` WRITE;
/*!40000 ALTER TABLE `wp_wfstatus` DISABLE KEYS */;
INSERT INTO `wp_wfstatus` VALUES (1,1585162050.727078,10,'info','SUM_PREP:Preparing a new scan.'),(2,1585162051.064520,1,'info','Initiating quick scan'),(3,1585162051.305207,10,'info','SUM_START:Checking Web Application Firewall status'),(4,1585162051.457806,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(5,1585162051.579846,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(6,1585162051.909723,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(7,1585162051.996396,1,'info','-------------------'),(8,1585162052.126322,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 18 MB'),(9,1585162052.160572,1,'info','Quick Scan Complete. Scanned in 1 second.'),(10,1585162052.234971,10,'info','SUM_FINAL:Scan complete. You have 4 new issues to fix. See below.'),(11,1585248456.301722,10,'info','SUM_PREP:Preparing a new scan.'),(12,1585248456.368054,1,'info','Initiating quick scan'),(13,1585248456.413910,10,'info','SUM_START:Checking Web Application Firewall status'),(14,1585248456.434669,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(15,1585248456.560236,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(16,1585248456.864336,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(17,1585248456.922693,1,'info','-------------------'),(18,1585248457.012747,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 20 MB'),(19,1585248457.058469,1,'info','Quick Scan Complete. Scanned in 1 second.'),(20,1585248457.103543,10,'info','SUM_FINAL:Scan complete. You have 3 new issues to fix. See below.'),(21,1585299758.942443,1,'info','Scheduled Wordfence scan starting at Friday 27th of March 2020 09:02:38 AM'),(22,1585299761.374185,10,'info','SUM_PREP:Preparing a new scan.'),(23,1585299761.465890,1,'info','Contacting Wordfence to initiate scan'),(24,1585299763.007680,10,'info','SUM_PAIDONLY:Check if your site is being Spamvertized is for paid members only'),(25,1585299765.281019,10,'info','SUM_PAIDONLY:Checking if your IP is generating spam is for paid members only'),(26,1585299767.396444,10,'info','SUM_PAIDONLY:Checking if your site is on a domain blacklist is for paid members only'),(27,1585299769.616502,10,'info','SUM_START:Checking for the most secure way to get IPs'),(28,1585299770.000850,10,'info','SUM_ENDSKIPPED:Checking for the most secure way to get IPs'),(29,1585299770.514669,10,'info','SUM_START:Scanning to check available disk space'),(30,1585299770.667160,2,'info','Total disk space: 5.81 TB -- Free disk space: 1.24 TB'),(31,1585299770.712293,2,'info','The disk has 1296756.41 MB available'),(32,1585299770.786233,10,'info','SUM_ENDOK:Scanning to check available disk space'),(33,1585299771.130588,10,'info','SUM_START:Checking Web Application Firewall status'),(34,1585299771.208852,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(35,1585299771.560271,10,'info','SUM_START:Checking for future GeoIP support'),(36,1585299771.658122,10,'info','SUM_ENDOK:Checking for future GeoIP support'),(37,1585299771.829037,10,'info','SUM_START:Checking for paths skipped due to scan settings'),(38,1585299771.938631,10,'info','SUM_ENDBAD:Checking for paths skipped due to scan settings'),(39,1585299772.308292,2,'info','Getting plugin list from WordPress'),(40,1585299772.664960,2,'info','Found 14 plugins'),(41,1585299772.793065,2,'info','Getting theme list from WordPress'),(42,1585299772.849078,2,'info','Found 4 themes'),(43,1585299775.298800,10,'info','SUM_START:Fetching core, theme and plugin file signatures from Wordfence'),(44,1585299776.883472,10,'info','SUM_ENDSUCCESS:Fetching core, theme and plugin file signatures from Wordfence'),(45,1585299777.088686,10,'info','SUM_START:Fetching list of known malware files from Wordfence'),(46,1585299778.564432,10,'info','SUM_ENDSUCCESS:Fetching list of known malware files from Wordfence'),(47,1585299778.767485,10,'info','SUM_START:Fetching list of known core files from Wordfence'),(48,1585299780.663910,10,'info','SUM_ENDSUCCESS:Fetching list of known core files from Wordfence'),(49,1585299780.869794,10,'info','SUM_START:Comparing core WordPress files against originals in repository'),(50,1585299781.056367,10,'info','SUM_DISABLED:Skipping theme scan'),(51,1585299781.144262,10,'info','SUM_DISABLED:Skipping plugin scan'),(52,1585299781.250169,10,'info','SUM_START:Scanning for known malware files'),(53,1585299781.352356,10,'info','SUM_START:Scanning for unknown files in wp-admin and wp-includes'),(54,1585299784.069536,2,'info','500 files indexed'),(55,1585299784.293189,2,'info','1000 files indexed'),(56,1585299784.513678,2,'info','1500 files indexed'),(57,1585299784.980753,2,'info','2000 files indexed'),(58,1585299785.234909,2,'info','2500 files indexed'),(59,1585299785.469766,2,'info','3000 files indexed'),(60,1585299785.687675,2,'info','3500 files indexed'),(61,1585299785.939256,2,'info','4000 files indexed'),(62,1585299786.111815,2,'info','4500 files indexed'),(63,1585299786.275699,2,'info','5000 files indexed'),(64,1585299786.470302,2,'info','5500 files indexed'),(65,1585299786.706534,2,'info','5948 files indexed'),(66,1585299803.987390,2,'info','Analyzed 100 files containing 1.45 MB of data so far'),(67,1585299819.457774,2,'info','Analyzed 200 files containing 2.49 MB of data so far'),(68,1585299836.452071,2,'info','Analyzed 300 files containing 3.83 MB of data so far'),(69,1585299853.886020,2,'info','Analyzed 400 files containing 6.27 MB of data so far'),(70,1585299872.943100,2,'info','Analyzed 500 files containing 7.07 MB of data so far'),(71,1585299891.612871,2,'info','Analyzed 600 files containing 8.2 MB of data so far'),(72,1585299913.149870,2,'info','Analyzed 700 files containing 13.11 MB of data so far'),(73,1585299945.386882,2,'info','Analyzed 800 files containing 13.83 MB of data so far'),(74,1585299976.990143,2,'info','Analyzed 900 files containing 13.95 MB of data so far'),(75,1585299998.878551,2,'info','Analyzed 1000 files containing 16.04 MB of data so far'),(76,1585300017.109180,2,'info','Analyzed 1100 files containing 18.27 MB of data so far'),(77,1585300035.155033,2,'info','Analyzed 1200 files containing 18.69 MB of data so far'),(78,1585300052.333891,2,'info','Analyzed 1300 files containing 22.03 MB of data so far'),(79,1585300073.804708,2,'info','Analyzed 1400 files containing 25.3 MB of data so far'),(80,1585300090.983831,2,'info','Analyzed 1500 files containing 26.17 MB of data so far'),(81,1585300109.691249,2,'info','Analyzed 1600 files containing 32.79 MB of data so far'),(82,1585300128.260538,2,'info','Analyzed 1700 files containing 39.07 MB of data so far'),(83,1585300148.746094,2,'info','Analyzed 1800 files containing 39.48 MB of data so far'),(84,1585300166.354523,2,'info','Analyzed 1900 files containing 40.14 MB of data so far'),(85,1585300185.791106,2,'info','Analyzed 2000 files containing 41.08 MB of data so far'),(86,1585300215.664361,2,'info','Analyzed 2100 files containing 43.4 MB of data so far'),(87,1585300248.990540,2,'info','Analyzed 2200 files containing 45.47 MB of data so far'),(88,1585300276.497475,2,'info','Analyzed 2300 files containing 45.65 MB of data so far'),(89,1585300294.438810,2,'info','Analyzed 2400 files containing 46.73 MB of data so far'),(90,1585300312.697797,2,'info','Analyzed 2500 files containing 47.91 MB of data so far'),(91,1585300329.937126,2,'info','Analyzed 2600 files containing 51.59 MB of data so far'),(92,1585300352.399088,2,'info','Analyzed 2700 files containing 52.03 MB of data so far'),(93,1585300370.607050,2,'info','Analyzed 2800 files containing 52.51 MB of data so far'),(94,1585300388.581259,2,'info','Analyzed 2900 files containing 53.54 MB of data so far'),(95,1585300406.718457,2,'info','Analyzed 3000 files containing 54.19 MB of data so far'),(96,1585300424.596384,2,'info','Analyzed 3100 files containing 55.02 MB of data so far'),(97,1585300441.083234,2,'info','Analyzed 3200 files containing 56.7 MB of data so far'),(98,1585300457.266057,2,'info','Analyzed 3300 files containing 61.77 MB of data so far'),(99,1585300475.872712,2,'info','Analyzed 3400 files containing 64.05 MB of data so far'),(100,1585300493.548454,2,'info','Analyzed 3500 files containing 64.78 MB of data so far'),(101,1585300514.260461,2,'info','Analyzed 3600 files containing 66.1 MB of data so far'),(102,1585300549.242195,2,'info','Analyzed 3700 files containing 66.67 MB of data so far'),(103,1585300578.224490,2,'info','Analyzed 3800 files containing 69.36 MB of data so far'),(104,1585300597.702664,2,'info','Analyzed 3900 files containing 73.19 MB of data so far'),(105,1585300615.516443,2,'info','Analyzed 4000 files containing 75.58 MB of data so far'),(106,1585300635.670833,2,'info','Analyzed 4100 files containing 81.16 MB of data so far'),(107,1585300653.385866,2,'info','Analyzed 4200 files containing 83.47 MB of data so far'),(108,1585300672.704844,2,'info','Analyzed 4300 files containing 85.45 MB of data so far'),(109,1585300689.988731,2,'info','Analyzed 4400 files containing 87.12 MB of data so far'),(110,1585300709.879842,2,'info','Analyzed 4500 files containing 88.09 MB of data so far'),(111,1585300729.182959,2,'info','Analyzed 4600 files containing 89.47 MB of data so far'),(112,1585300747.036145,2,'info','Analyzed 4700 files containing 92.04 MB of data so far'),(113,1585300764.617148,2,'info','Analyzed 4800 files containing 93.65 MB of data so far'),(114,1585300785.262100,2,'info','Analyzed 4900 files containing 96.82 MB of data so far'),(115,1585300807.335888,2,'info','Analyzed 5000 files containing 97.59 MB of data so far'),(116,1585300828.892828,2,'info','Analyzed 5100 files containing 99.95 MB of data so far'),(117,1585300850.822291,2,'info','Analyzed 5200 files containing 102.47 MB of data so far'),(118,1585300883.268955,2,'info','Analyzed 5300 files containing 103.78 MB of data so far'),(119,1585300902.106530,2,'info','Analyzed 5400 files containing 111.47 MB of data so far'),(120,1585300921.832333,2,'info','Analyzed 5500 files containing 116.01 MB of data so far'),(121,1585300939.505075,2,'info','Analyzed 5600 files containing 118.2 MB of data so far'),(122,1585300956.251319,2,'info','Analyzed 5700 files containing 121.05 MB of data so far'),(123,1585300975.467040,2,'info','Analyzed 5800 files containing 123.9 MB of data so far'),(124,1585300995.065418,2,'info','Analyzed 5900 files containing 125.21 MB of data so far'),(125,1585301004.572838,2,'info','Analyzed 5948 files containing 126.05 MB of data.'),(126,1585301004.611739,10,'info','SUM_ENDOK:Comparing core WordPress files against originals in repository'),(127,1585301004.818418,10,'info','SUM_ENDOK:Scanning for unknown files in wp-admin and wp-includes'),(128,1585301004.960304,10,'info','SUM_ENDOK:Scanning for known malware files'),(129,1585301005.229843,10,'info','SUM_START:Check for publicly accessible configuration files, backup files and logs'),(130,1585301005.359230,10,'info','SUM_ENDOK:Check for publicly accessible configuration files, backup files and logs'),(131,1585301005.540087,10,'info','SUM_START:Scanning file contents for infections and vulnerabilities'),(132,1585301005.596202,10,'info','SUM_START:Scanning file contents for URLs on a domain blacklist'),(133,1585301007.827090,2,'info','Starting scan of file contents'),(134,1585301009.019638,2,'info','Scanned contents of 6 additional files at 5.47 per second'),(135,1585301010.260383,2,'info','Scanned contents of 13 additional files at 5.56 per second'),(136,1585301011.305115,2,'info','Scanned contents of 17 additional files at 5.03 per second'),(137,1585301011.409279,2,'info','Scanned contents of 18 additional files at 5.16 per second'),(138,1585301011.459868,2,'info','Asking Wordfence to check URLs against malware list.'),(139,1585301011.492834,2,'info','Checking 48 host keys against Wordfence scanning servers.'),(140,1585301012.185073,2,'info','Done host key check.'),(141,1585301012.907204,2,'info','Done file contents scan'),(142,1585301012.929823,10,'info','SUM_ENDOK:Scanning file contents for infections and vulnerabilities'),(143,1585301013.022881,10,'info','SUM_ENDOK:Scanning file contents for URLs on a domain blacklist'),(144,1585301013.409604,10,'info','SUM_START:Scanning for publicly accessible quarantined files'),(145,1585301013.659960,10,'info','SUM_ENDOK:Scanning for publicly accessible quarantined files'),(146,1585301013.988990,10,'info','SUM_START:Scanning posts for URLs on a domain blacklist'),(147,1585301014.636232,2,'info','Examining URLs found in posts we scanned for dangerous websites'),(148,1585301014.669274,2,'info','Done examining URLs'),(149,1585301015.135645,10,'info','SUM_ENDOK:Scanning posts for URLs on a domain blacklist'),(150,1585301015.560812,10,'info','SUM_START:Scanning comments for URLs on a domain blacklist'),(151,1585301016.754507,10,'info','SUM_ENDOK:Scanning comments for URLs on a domain blacklist'),(152,1585301016.976981,10,'info','SUM_START:Scanning for weak passwords'),(153,1585301017.195075,2,'info','Starting password strength check on 1 users.'),(154,1585301017.790369,10,'info','SUM_ENDOK:Scanning for weak passwords'),(155,1585301018.328547,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(156,1585301029.466260,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(157,1585301029.746542,10,'info','SUM_START:Scanning for admin users not created through WordPress'),(158,1585301030.011396,10,'info','SUM_ENDOK:Scanning for admin users not created through WordPress'),(159,1585301030.556246,10,'info','SUM_START:Scanning for suspicious site options'),(160,1585301031.724141,2,'info','Examining URLs found in the options we scanned for dangerous websites'),(161,1585301031.741606,2,'info','Done examining URLs'),(162,1585301032.823161,10,'info','SUM_ENDOK:Scanning for suspicious site options'),(163,1585301032.938956,1,'info','-------------------'),(164,1585301033.020515,2,'info','Wordfence used 16 MB of memory for scan. Server peak memory usage was: 34 MB'),(165,1585301033.076635,1,'info','Scan Complete. Scanned 5948 files, 14 plugins, 4 themes, 4 posts, 0 comments and 29 URLs in 21 minutes 11 seconds.'),(166,1585301033.100910,10,'info','SUM_FINAL:Scan complete. You have 4 new issues to fix. See below.'),(167,1585387799.208258,10,'info','SUM_PREP:Preparing a new scan.'),(168,1585387799.426227,1,'info','Initiating quick scan'),(169,1585387799.592041,10,'info','SUM_START:Checking Web Application Firewall status'),(170,1585387799.644358,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(171,1585387799.774041,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(172,1585387800.434014,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(173,1585387800.538569,1,'info','-------------------'),(174,1585387800.611047,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 18 MB'),(175,1585387800.651130,1,'info','Quick Scan Complete. Scanned in 1 second.'),(176,1585387800.689766,10,'info','SUM_FINAL:Scan complete. You have 2 new issues to fix. See below.'),(177,1585431556.750225,10,'info','SUM_PREP:Preparing a new scan.'),(178,1585431556.796092,1,'info','Initiating quick scan'),(179,1585431556.844739,10,'info','SUM_START:Checking Web Application Firewall status'),(180,1585431556.865327,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(181,1585431556.993440,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(182,1585431557.423402,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(183,1585431557.479101,1,'info','-------------------'),(184,1585431557.574842,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 18 MB'),(185,1585431557.640371,1,'info','Quick Scan Complete. Scanned in 1 second.'),(186,1585431557.688141,10,'info','SUM_FINAL:Scan complete. You have 2 new issues to fix. See below.'),(187,1585558811.235268,1,'info','Scheduled Wordfence scan starting at Monday 30th of March 2020 10:00:11 AM'),(188,1585558812.350077,10,'info','SUM_PREP:Preparing a new scan.'),(189,1585558812.437604,1,'info','Initiating quick scan'),(190,1585558812.495854,10,'info','SUM_START:Checking Web Application Firewall status'),(191,1585558812.513572,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(192,1585558812.581761,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(193,1585558812.896854,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(194,1585558813.146912,1,'info','-------------------'),(195,1585558813.289153,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 18 MB'),(196,1585558813.513890,1,'info','Quick Scan Complete. Scanned in 1 second.'),(197,1585558813.918116,10,'info','SUM_FINAL:Scan complete. You have 2 new issues to fix. See below.'),(198,1585558814.353305,1,'error','Scan Engine Error: There is already a scan running.'),(199,1585638912.252580,10,'info','SUM_PREP:Preparing a new scan.'),(200,1585638912.566651,1,'info','Initiating quick scan'),(201,1585638912.892619,10,'info','SUM_START:Checking Web Application Firewall status'),(202,1585638913.166343,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(203,1585638913.420175,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(204,1585638913.825175,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(205,1585638913.931203,1,'info','-------------------'),(206,1585638913.992263,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 20 MB'),(207,1585638914.015207,1,'info','Quick Scan Complete. Scanned in 2 seconds.'),(208,1585638914.038071,10,'info','SUM_FINAL:Scan complete. You have 2 new issues to fix. See below.'),(209,1585686513.416458,10,'info','SUM_PREP:Preparing a new scan.'),(210,1585686513.509626,1,'info','Initiating quick scan'),(211,1585686513.589805,10,'info','SUM_START:Checking Web Application Firewall status'),(212,1585686513.611938,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(213,1585686513.712952,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(214,1585686514.755521,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(215,1585686514.817422,1,'info','-------------------'),(216,1585686514.886931,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 22 MB'),(217,1585686514.908487,1,'info','Quick Scan Complete. Scanned in 1 second.'),(218,1585686514.931287,10,'info','SUM_FINAL:Scan complete. You have 4 new issues to fix. See below.'),(219,1585743624.123776,10,'info','SUM_PREP:Preparing a new scan.'),(220,1585743624.392363,1,'info','Initiating quick scan'),(221,1585743624.527159,10,'info','SUM_START:Checking Web Application Firewall status'),(222,1585743624.599015,10,'info','SUM_ENDOK:Checking Web Application Firewall status'),(223,1585743625.267249,10,'info','SUM_START:Scanning for old themes, plugins and core files'),(224,1585743625.550865,10,'info','SUM_ENDBAD:Scanning for old themes, plugins and core files'),(225,1585743625.729999,1,'info','-------------------'),(226,1585743625.879252,2,'info','Wordfence used 0 B of memory for scan. Server peak memory usage was: 20 MB'),(227,1585743625.933985,1,'info','Quick Scan Complete. Scanned in 1 second.'),(228,1585743626.065615,10,'info','SUM_FINAL:Scan complete. You have 2 new issues to fix. See below.');
/*!40000 ALTER TABLE `wp_wfstatus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

