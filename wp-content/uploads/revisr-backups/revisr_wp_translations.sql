
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
DROP TABLE IF EXISTS `wp_translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_translations` (
  `original` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `lang` char(5) COLLATE utf8mb4_bin NOT NULL,
  `translated` mediumtext COLLATE utf8mb4_bin DEFAULT NULL,
  `translated_by` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL,
  `source` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `original` (`original`(6),`lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_translations` WRITE;
/*!40000 ALTER TABLE `wp_translations` DISABLE KEYS */;
INSERT INTO `wp_translations` VALUES ('table id=wildlife filter=','cy','tabl id = hidlo bywyd gwyllt =','1',1,'2020-04-07 17:38:00'),('birds','cy','adar','1',1,'2020-04-07 17:38:00'),('hide_columns=6','cy','hide_columns = 6','1',1,'2020-04-07 17:38:00'),('sample table','cy','tabl sampl','1',1,'2020-04-07 17:38:00'),('Name of Centre','cy','Enw\'r Ganolfan','1',1,'2020-04-07 17:38:02'),('Required','cy','Angenrheidiol','1',1,'2020-04-07 17:38:02'),('Input centre name here','cy','enw\'r ganolfan Mewnbwn yma','1',1,'2020-04-07 17:38:02'),('About the Centre','cy','Am y Ganolfan','1',1,'2020-04-07 17:38:02'),('Input any details about the centre here','cy','Mewnbwn unrhyw manylu am y ganolfan yma','1',1,'2020-04-07 17:38:02'),('Website of Centre','cy','Gwefan y Ganolfan','1',1,'2020-04-07 17:38:02'),('Input URL for website here','cy','URL mewnbwn ar gyfer y wefan yma','1',1,'2020-04-07 17:38:02'),('Name','cy','enw','1',1,'2020-04-07 17:38:02'),('Submit','cy','Cyflwyno','1',1,'2020-04-07 17:38:02'),('Add New Wildlife Centres','cy','Ychwanegu Canolfannau Bywyd Gwyllt Newydd','1',1,'2020-04-07 17:38:02'),('ultimatemember_password','cy','ultimatemember_password','1',1,'2020-04-07 17:38:04'),('Password Reset','cy','Ailosod cyfrinair','1',1,'2020-04-07 17:38:04'),('ultimatemember_account','cy','ultimatemember_account','1',1,'2020-04-07 17:38:06'),('Account','cy','cyfrif','1',1,'2020-04-07 17:38:06'),('Logout','cy','Allgofnodi','1',1,'2020-04-07 17:38:08'),('Members','cy','Aelodau','1',1,'2020-04-07 17:38:10'),('You are already registered','cy','Ydych eisoes wedi cofrestru','1',1,'2020-04-07 17:38:12'),('Register','cy','cofrestr','1',1,'2020-04-07 17:38:12'),('ydw','cy','ydw','1',1,'2020-04-07 17:38:29'),('Your account','cy','eich cyfrif','1',1,'2020-04-07 17:38:29'),('Login','cy','Mewngofnodi','1',1,'2020-04-07 17:38:29'),('Upload a cover photo','cy','Llwytho llun clawr','1',1,'2020-04-07 17:38:31'),('Cancel','cy','Diddymu','1',1,'2020-04-07 17:38:31'),('Change your cover photo','cy','Newid eich llun clawr','1',1,'2020-04-07 17:38:31'),('Upload','cy','Llwytho','1',1,'2020-04-07 17:38:31'),('Apply','cy','Gwneud cais','1',1,'2020-04-07 17:38:31'),('Edit Profile','cy','Golygu Proffil','1',1,'2020-04-07 17:38:31'),('My Account','cy','Fy nghyfrif','1',1,'2020-04-07 17:38:31'),('This user account status is Approved','cy','Mae\'r statws cyfrif defnyddiwr yn cael ei Cymeradwy','1',1,'2020-04-07 17:38:31'),('Your profile is looking a little empty','cy','Mae eich proffil yn edrych ychydig yn wag','1',1,'2020-04-07 17:38:31'),('Why not','cy','Pam ddim','1',1,'2020-04-07 17:38:31'),('add','cy','ychwanegwch','1',1,'2020-04-07 17:38:31'),('some information','cy','rhywfaint o wybodaeth','1',1,'2020-04-07 17:38:31'),('User','cy','defnyddiwr','1',1,'2020-04-07 17:38:31'),('add more','cy','ychwanegu mwy o','1',1,'2020-04-07 17:38:33'),('crmperks-forms id=1','cy','crmperks-ffurflenni id = 1','1',1,'2020-04-07 17:38:33'),('Add New Wildlife','cy','Ychwanegu Bywyd Gwyllt Newydd','1',1,'2020-04-07 17:38:33'),('Osprey','cy','Osprey','1',1,'2020-04-07 17:38:35'),('hide_columns=','cy','hide_columns =','1',1,'2020-04-07 17:38:35'),('hide_rows=','cy','hide_rows =','1',1,'2020-04-07 17:38:35'),('back','cy','yn ôl','1',1,'2020-04-07 17:38:35'),('back to wildlife map','cy','yn ôl i\'r map bywyd gwyllt','1',1,'2020-04-07 17:38:37'),('History of Dyfi Wildlife','cy','Hanes Bywyd Gwyllt Dyfi','1',1,'2020-04-07 17:38:37'),('table id=wildlife automatic_url_conversion=true filter=','cy','tabl id = automatic_url_conversion bywyd gwyllt = gwir = hidlo','1',1,'2020-04-07 17:38:54'),('hide_columns=6,8','cy','hide_columns = 6,8','1',1,'2020-04-07 17:38:54'),('back to map','cy','yn ôl i\'r map','1',1,'2020-04-07 17:38:54'),('back to wildlife','cy','yn ôl i fywyd gwyllt','1',1,'2020-04-07 17:38:54'),('Birds','cy','adar','1',1,'2020-04-07 17:38:54'),('table id=Cat','cy','tabl id = Cat','1',1,'2020-04-07 17:38:56'),('Wildlife','cy','Bywyd Gwyllt','1',1,'2020-04-07 17:38:56'),('Map','cy','Map','1',1,'2020-04-07 17:38:58'),('Phone','cy','ffôn','1',1,'2020-04-07 17:41:06'),('Skip to content','cy','Neidio i\'r cynnwys','86.128.227.11',1,'2020-04-07 17:44:20'),('Menus','cy','bwydlenni','86.128.227.11',1,'2020-04-07 17:44:20'),('Dyfi Wildlife Centre','cy','Dyfi Canolfan Bywyd Gwyllt','86.128.227.11',1,'2020-04-07 17:44:20'),('Montgomeryshire Wildlife Trust','cy','Ymddiriedolaeth Bywyd Gwyllt Sir Drefaldwyn','86.128.227.11',1,'2020-04-07 17:44:20'),('Translation','cy','cyfieithu','86.128.227.11',1,'2020-04-07 17:44:20'),('Edit Translation','cy','golygu cyfieithu','86.128.227.11',1,'2020-04-07 17:44:20'),('©','cy','©','86.128.227.11',1,'2020-04-07 17:44:20'),('Proudly powered by WordPress','cy','phweru gan WordPress','86.128.227.11',1,'2020-04-07 17:44:20'),('Admin Dashboard','cy','admin Dashboard','1',1,'2020-04-07 17:45:09'),('Add New Centre','cy','Ychwanegu Canolfan Newydd','1',1,'2020-04-07 17:45:09'),('Edit','cy','golygu','1',1,'2020-04-07 17:45:09'),('WordPress.org','cy','WordPress.org','1',1,'2020-04-07 17:45:09'),('Sylw i gael eu cymedroli','cy','Sylw i gael eu cymedroli','1',1,'2020-04-07 17:45:09'),('Everest Forms','cy','Ffurflenni Everest','1',1,'2020-04-07 17:45:09'),('Google Map','cy','Google Map','1',1,'2020-04-07 17:45:09');
/*!40000 ALTER TABLE `wp_translations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

