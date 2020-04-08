
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
DROP TABLE IF EXISTS `wp_maxbuttonsv3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_maxbuttonsv3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'publish',
  `cache` text DEFAULT NULL,
  `basic` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `dimension` text DEFAULT NULL,
  `border` text DEFAULT NULL,
  `gradient` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `container` text DEFAULT NULL,
  `advanced` text DEFAULT NULL,
  `responsive` text DEFAULT NULL,
  `meta` text DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_maxbuttonsv3` WRITE;
/*!40000 ALTER TABLE `wp_maxbuttonsv3` DISABLE KEYS */;
INSERT INTO `wp_maxbuttonsv3` VALUES (1,'Link to birds','publish',NULL,'{\"name\":\"Link to birds\",\"status\":\"publish\",\"description\":\"\",\"url\":\"\\/index.php\\/wildlife\\/birds\\/\",\"link_title\":\"\",\"new_window\":0,\"nofollow\":0}','{\"text_color\":\"#000000\",\"text_shadow_color\":\"#505ac7\",\"gradient_start_color\":\"#ffffff\",\"gradient_end_color\":\"#505ac7\",\"border_color\":\"#000000\",\"box_shadow_color\":\"#333333\",\"text_color_hover\":\"#000000\",\"text_shadow_color_hover\":\"#333333\",\"gradient_start_color_hover\":\"#afafaf\",\"gradient_end_color_hover\":\"#ffffff\",\"border_color_hover\":\"#000000\",\"box_shadow_color_hover\":\"#333333\",\"icon_color\":\"#ffffff\",\"icon_color_hover\":\"#2b469e\"}','{\"button_width\":160,\"button_height\":50}','{\"radius_top_left\":4,\"radius_top_right\":4,\"radius_bottom_left\":4,\"radius_bottom_right\":4,\"border_style\":\"solid\",\"border_width\":2,\"box_shadow_offset_left\":0,\"box_shadow_offset_top\":0,\"box_shadow_width\":2,\"box_shadow_spread\":0}','{\"gradient_stop\":\"45\",\"gradient_start_opacity\":\"100\",\"gradient_end_opacity\":\"100\",\"gradient_start_opacity_hover\":\"100\",\"gradient_end_opacity_hover\":\"100\",\"use_gradient\":\"0\"}','{\"text\":\"More\",\"font\":\"Tahoma\",\"font_size\":15,\"text_align\":\"center\",\"font_style\":\"normal\",\"font_weight\":\"normal\",\"text_shadow_offset_left\":0,\"text_shadow_offset_top\":0,\"text_shadow_width\":0,\"padding_top\":18,\"padding_right\":0,\"padding_bottom\":0,\"padding_left\":0}','{\"container_enabled\":\"0\",\"container_center_div_wrap\":\"0\",\"container_width\":0,\"container_margin_top\":0,\"container_margin_right\":0,\"container_margin_bottom\":0,\"container_margin_left\":0,\"container_alignment\":\"\"}','{\"important_css\":\"0\",\"custom_rel\":\"\",\"extra_classes\":\"\",\"external_css\":\"0\"}','{\"media_query\":[],\"auto_responsive\":0}','{\"created\":1585741965,\"modified\":1585741965,\"user_created\":\"ydw\",\"user_modified\":\"ydw\",\"created_source\":\"editor\",\"user_edited\":\"true\",\"in_collections\":[],\"is_virtual\":\"\"}','2020-04-01 12:18:13','2020-04-01 10:52:45');
/*!40000 ALTER TABLE `wp_maxbuttonsv3` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

