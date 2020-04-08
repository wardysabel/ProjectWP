
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
DROP TABLE IF EXISTS `wp_frm_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_frm_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_form_id` int(11) DEFAULT 0,
  `logged_in` tinyint(1) DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `is_template` tinyint(1) DEFAULT 0,
  `default_template` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `form_key` (`form_key`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_frm_forms` WRITE;
/*!40000 ALTER TABLE `wp_frm_forms` DISABLE KEYS */;
INSERT INTO `wp_frm_forms` VALUES (1,'contact-form','Contact Us','We would like to hear from you. Please send us a message by filling out the form below and we will get back with you shortly.',0,0,0,0,0,'published','a:13:{s:12:\"custom_style\";i:1;s:12:\"submit_value\";s:6:\"Submit\";s:14:\"success_action\";s:7:\"message\";s:11:\"success_msg\";s:54:\"Your responses were successfully submitted. Thank you!\";s:9:\"show_form\";i:0;s:7:\"akismet\";s:0:\"\";s:7:\"no_save\";i:0;s:9:\"ajax_load\";i:0;s:11:\"js_validate\";i:0;s:10:\"form_class\";s:0:\"\";s:11:\"before_html\";s:224:\"<legend class=\"frm_screen_reader\">[form_name]</legend>\n[if form_name]<h3 class=\"frm_form_title\">[form_name]</h3>[/if form_name]\n[if form_description]<div class=\"frm_description\">[form_description]</div>[/if form_description]\";s:10:\"after_html\";s:0:\"\";s:11:\"submit_html\";s:394:\"<div class=\"frm_submit\">\n[if back_button]<button type=\"submit\" name=\"frm_prev_page\" formnovalidate=\"formnovalidate\" class=\"frm_prev_page\" [back_hook]>[back_label]</button>[/if back_button]\n<button class=\"frm_button_submit\" type=\"submit\"  [button_action]>[button_label]</button>\n[if save_draft]<a href=\"#\" tabindex=\"0\" class=\"frm_save_draft\" [draft_hook]>[draft_label]</a>[/if save_draft]\n</div>\";}','2020-03-30 10:32:10'),(2,'input','Input','',0,0,0,0,0,'published','a:13:{s:12:\"submit_value\";s:6:\"Submit\";s:14:\"success_action\";s:7:\"message\";s:11:\"success_msg\";s:54:\"Your responses were successfully submitted. Thank you!\";s:9:\"show_form\";i:0;s:7:\"akismet\";s:0:\"\";s:7:\"no_save\";i:0;s:9:\"ajax_load\";i:0;s:11:\"js_validate\";i:0;s:10:\"form_class\";s:0:\"\";s:12:\"custom_style\";i:1;s:11:\"before_html\";s:224:\"<legend class=\"frm_screen_reader\">[form_name]</legend>\n[if form_name]<h3 class=\"frm_form_title\">[form_name]</h3>[/if form_name]\n[if form_description]<div class=\"frm_description\">[form_description]</div>[/if form_description]\";s:10:\"after_html\";s:0:\"\";s:11:\"submit_html\";s:394:\"<div class=\"frm_submit\">\n[if back_button]<button type=\"submit\" name=\"frm_prev_page\" formnovalidate=\"formnovalidate\" class=\"frm_prev_page\" [back_hook]>[back_label]</button>[/if back_button]\n<button class=\"frm_button_submit\" type=\"submit\"  [button_action]>[button_label]</button>\n[if save_draft]<a href=\"#\" tabindex=\"0\" class=\"frm_save_draft\" [draft_hook]>[draft_label]</a>[/if save_draft]\n</div>\";}','2020-03-30 10:32:52');
/*!40000 ALTER TABLE `wp_frm_forms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

