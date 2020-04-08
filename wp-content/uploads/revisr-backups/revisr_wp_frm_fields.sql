
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
DROP TABLE IF EXISTS `wp_frm_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_frm_fields` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `field_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_order` int(11) DEFAULT 0,
  `required` int(1) DEFAULT NULL,
  `field_options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_key` (`field_key`),
  KEY `form_id` (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_frm_fields` WRITE;
/*!40000 ALTER TABLE `wp_frm_fields` DISABLE KEYS */;
INSERT INTO `wp_frm_fields` VALUES (1,'qh4icy','Name','First','text','','',1,1,'a:16:{s:4:\"size\";s:0:\"\";s:3:\"max\";s:0:\"\";s:5:\"label\";s:0:\"\";s:5:\"blank\";s:0:\"\";s:18:\"required_indicator\";s:1:\"*\";s:7:\"invalid\";s:0:\"\";s:14:\"separate_value\";i:0;s:14:\"clear_on_focus\";i:0;s:7:\"classes\";s:18:\"frm_first frm_half\";s:11:\"custom_html\";s:482:\"<div id=\"frm_field_[id]_container\" class=\"frm_form_field form-field [required_class][error_class]\">\n    <label for=\"field_[key]\" id=\"field_[key]_label\" class=\"frm_primary_label\">[field_name]\n        <span class=\"frm_required\">[required_label]</span>\n    </label>\n    [input]\n    [if description]<div class=\"frm_description\" id=\"frm_desc_field_[key]\">[description]</div>[/if description]\n    [if error]<div class=\"frm_error\" id=\"frm_error_field_[key]\">[error]</div>[/if error]\n</div>\";s:6:\"minnum\";i:1;s:6:\"maxnum\";i:10;s:4:\"step\";i:1;s:6:\"format\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:10:\"in_section\";i:0;}',1,'2020-03-30 10:32:10'),(2,'ocfup1','Last','Last','text','','',2,1,'a:16:{s:4:\"size\";s:0:\"\";s:3:\"max\";s:0:\"\";s:5:\"label\";s:6:\"hidden\";s:5:\"blank\";s:0:\"\";s:18:\"required_indicator\";s:1:\"*\";s:7:\"invalid\";s:0:\"\";s:14:\"separate_value\";i:0;s:14:\"clear_on_focus\";i:0;s:7:\"classes\";s:8:\"frm_half\";s:11:\"custom_html\";s:482:\"<div id=\"frm_field_[id]_container\" class=\"frm_form_field form-field [required_class][error_class]\">\n    <label for=\"field_[key]\" id=\"field_[key]_label\" class=\"frm_primary_label\">[field_name]\n        <span class=\"frm_required\">[required_label]</span>\n    </label>\n    [input]\n    [if description]<div class=\"frm_description\" id=\"frm_desc_field_[key]\">[description]</div>[/if description]\n    [if error]<div class=\"frm_error\" id=\"frm_error_field_[key]\">[error]</div>[/if error]\n</div>\";s:6:\"minnum\";i:1;s:6:\"maxnum\";i:10;s:4:\"step\";i:1;s:6:\"format\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:10:\"in_section\";i:0;}',1,'2020-03-30 10:32:10'),(3,'29yf4d','Email','','email','','',3,1,'a:16:{s:4:\"size\";s:0:\"\";s:3:\"max\";s:0:\"\";s:5:\"label\";s:0:\"\";s:5:\"blank\";s:0:\"\";s:18:\"required_indicator\";s:1:\"*\";s:7:\"invalid\";s:34:\"Please enter a valid email address\";s:14:\"separate_value\";i:0;s:14:\"clear_on_focus\";i:0;s:7:\"classes\";s:8:\"frm_full\";s:11:\"custom_html\";s:482:\"<div id=\"frm_field_[id]_container\" class=\"frm_form_field form-field [required_class][error_class]\">\n    <label for=\"field_[key]\" id=\"field_[key]_label\" class=\"frm_primary_label\">[field_name]\n        <span class=\"frm_required\">[required_label]</span>\n    </label>\n    [input]\n    [if description]<div class=\"frm_description\" id=\"frm_desc_field_[key]\">[description]</div>[/if description]\n    [if error]<div class=\"frm_error\" id=\"frm_error_field_[key]\">[error]</div>[/if error]\n</div>\";s:6:\"minnum\";i:1;s:6:\"maxnum\";i:10;s:4:\"step\";i:1;s:6:\"format\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:10:\"in_section\";i:0;}',1,'2020-03-30 10:32:11'),(4,'e6lis6','Subject','','text','','',5,1,'a:16:{s:4:\"size\";s:0:\"\";s:3:\"max\";s:0:\"\";s:5:\"label\";s:0:\"\";s:5:\"blank\";s:0:\"\";s:18:\"required_indicator\";s:1:\"*\";s:7:\"invalid\";s:0:\"\";s:14:\"separate_value\";i:0;s:14:\"clear_on_focus\";i:0;s:7:\"classes\";s:8:\"frm_full\";s:11:\"custom_html\";s:482:\"<div id=\"frm_field_[id]_container\" class=\"frm_form_field form-field [required_class][error_class]\">\n    <label for=\"field_[key]\" id=\"field_[key]_label\" class=\"frm_primary_label\">[field_name]\n        <span class=\"frm_required\">[required_label]</span>\n    </label>\n    [input]\n    [if description]<div class=\"frm_description\" id=\"frm_desc_field_[key]\">[description]</div>[/if description]\n    [if error]<div class=\"frm_error\" id=\"frm_error_field_[key]\">[error]</div>[/if error]\n</div>\";s:6:\"minnum\";i:1;s:6:\"maxnum\";i:10;s:4:\"step\";i:1;s:6:\"format\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:10:\"in_section\";i:0;}',1,'2020-03-30 10:32:11'),(5,'9jv0r1','Message','','textarea','','',6,1,'a:16:{s:4:\"size\";s:0:\"\";s:3:\"max\";s:1:\"5\";s:5:\"label\";s:0:\"\";s:5:\"blank\";s:0:\"\";s:18:\"required_indicator\";s:1:\"*\";s:7:\"invalid\";s:0:\"\";s:14:\"separate_value\";i:0;s:14:\"clear_on_focus\";i:0;s:7:\"classes\";s:8:\"frm_full\";s:11:\"custom_html\";s:482:\"<div id=\"frm_field_[id]_container\" class=\"frm_form_field form-field [required_class][error_class]\">\n    <label for=\"field_[key]\" id=\"field_[key]_label\" class=\"frm_primary_label\">[field_name]\n        <span class=\"frm_required\">[required_label]</span>\n    </label>\n    [input]\n    [if description]<div class=\"frm_description\" id=\"frm_desc_field_[key]\">[description]</div>[/if description]\n    [if error]<div class=\"frm_error\" id=\"frm_error_field_[key]\">[error]</div>[/if error]\n</div>\";s:6:\"minnum\";i:1;s:6:\"maxnum\";i:10;s:4:\"step\";i:1;s:6:\"format\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:10:\"in_section\";i:0;}',1,'2020-03-30 10:32:11');
/*!40000 ALTER TABLE `wp_frm_fields` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

