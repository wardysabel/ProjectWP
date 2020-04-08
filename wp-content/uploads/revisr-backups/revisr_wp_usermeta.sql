
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
DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','ydw'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','true'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp_capabilities','a:7:{s:13:\"administrator\";b:1;s:14:\"frm_view_forms\";b:1;s:14:\"frm_edit_forms\";b:1;s:16:\"frm_delete_forms\";b:1;s:19:\"frm_change_settings\";b:1;s:16:\"frm_view_entries\";b:1;s:18:\"frm_delete_entries\";b:1;}'),(13,1,'wp_user_level','10'),(14,1,'dismissed_wp_pointers','tp09_edit_drag_drop_sort,lingotek-professional-translation,lingotek-translation,wpsl_signup_pointer,theme_editor_notice,plugin_editor_notice'),(15,1,'show_welcome_panel','1'),(17,1,'wp_user-settings','libraryContent=browse&uploader=1&editor=html&hidetb=0&mfold=o'),(18,1,'wp_user-settings-time','1586175590'),(19,1,'wp_dashboard_quick_press_last_post_id','286'),(20,1,'community-events-location','a:1:{s:2:\"ip\";s:12:\"86.128.227.0\";}'),(21,1,'wp_tablepress_user_options','{\"user_options_db_version\":40,\"admin_menu_parent_page\":\"index.php\",\"message_first_visit\":false}'),(22,1,'managetablepress_listcolumnshidden','a:1:{i:0;s:22:\"table_last_modified_by\";}'),(23,1,'closedpostboxes_tablepress_edit','a:0:{}'),(24,1,'metaboxhidden_tablepress_edit','a:0:{}'),(25,1,'pll_dismissed_notices','a:1:{i:0;s:8:\"lingotek\";}'),(26,1,'pll_lang_per_page','2'),(27,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:15:\"title-attribute\";i:2;s:11:\"css-classes\";i:3;s:3:\"xfn\";i:4;s:11:\"description\";}'),(28,1,'metaboxhidden_nav-menus','a:2:{i:0;s:19:\"pll_lang_switch_box\";i:1;s:12:\"add-post_tag\";}'),(29,1,'closedpostboxes_post','a:0:{}'),(30,1,'metaboxhidden_post','a:0:{}'),(31,1,'closedpostboxes_dashboard','a:1:{i:0;s:17:\"dashboard_primary\";}'),(32,1,'metaboxhidden_dashboard','a:0:{}'),(33,1,'nav_menu_recently_edited','10'),(36,1,'wfls-last-login','1585734506'),(37,1,'wpsl_disable_key_warning','true'),(39,1,'closedpostboxes_wpsl_stores','a:0:{}'),(40,1,'metaboxhidden_wpsl_stores','a:0:{}'),(41,1,'supsystic-tables-tutorial_was_showed','1'),(65,1,'_pum_dismissed_alerts','a:0:{}'),(66,1,'frm_reviewed','a:3:{s:4:\"time\";i:1585564350;s:9:\"dismissed\";b:0;s:5:\"asked\";i:0;}'),(67,1,'closedpostboxes_popupbuilder','a:0:{}'),(68,1,'metaboxhidden_popupbuilder','a:1:{i:0;s:7:\"slugdiv\";}'),(77,1,'maxbuttons_review_notice','1586346522'),(80,1,'account_status','approved'),(81,1,'um_member_directory_data','a:5:{s:14:\"account_status\";s:8:\"approved\";s:15:\"hide_in_members\";b:0;s:13:\"profile_photo\";b:0;s:11:\"cover_photo\";b:0;s:8:\"verified\";b:0;}'),(82,1,'um_user_profile_url_slug_user_login','ydw'),(83,1,'um_account_secure_fields','a:4:{s:7:\"general\";a:3:{i:0;s:10:\"user_login\";i:1;s:10:\"user_email\";i:2;s:20:\"single_user_password\";}s:8:\"password\";a:1:{i:0;s:13:\"user_password\";}s:7:\"privacy\";a:1:{i:0;s:15:\"profile_privacy\";}s:6:\"delete\";a:1:{i:0;s:20:\"single_user_password\";}}'),(85,1,'_um_last_login','1586287371'),(86,1,'meta-box-order_tablepress_edit','a:3:{s:6:\"normal\";s:161:\"tablepress_edit-table-information,tablepress_edit-table-data,tablepress_edit-table-manipulation,tablepress_edit-table-options,tablepress_edit-datatables-features\";s:10:\"additional\";s:0:\"\";s:4:\"side\";s:0:\"\";}'),(114,3,'um_member_directory_data','a:5:{s:14:\"account_status\";s:8:\"approved\";s:15:\"hide_in_members\";b:0;s:13:\"profile_photo\";b:0;s:11:\"cover_photo\";b:0;s:8:\"verified\";b:0;}'),(143,4,'um_member_directory_data','a:5:{s:14:\"account_status\";s:8:\"approved\";s:15:\"hide_in_members\";b:0;s:13:\"profile_photo\";b:0;s:11:\"cover_photo\";b:0;s:8:\"verified\";b:0;}'),(144,5,'nickname','ward101'),(145,5,'first_name','ys'),(146,5,'last_name','ward'),(147,5,'description',''),(148,5,'rich_editing','true'),(149,5,'syntax_highlighting','true'),(150,5,'comment_shortcuts','false'),(151,5,'admin_color','fresh'),(152,5,'use_ssl','0'),(153,5,'show_admin_bar_front','true'),(154,5,'locale',''),(155,5,'wp_capabilities','a:1:{s:6:\"editor\";b:1;}'),(156,5,'wp_user_level','7'),(157,5,'synced_gravatar_hashed_id','9d85e287cd324262fe02cd8a04f87895'),(158,5,'um_member_directory_data','a:5:{s:14:\"account_status\";s:8:\"approved\";s:15:\"hide_in_members\";b:0;s:13:\"profile_photo\";b:0;s:11:\"cover_photo\";b:0;s:8:\"verified\";b:0;}'),(159,5,'submitted','a:9:{s:7:\"form_id\";s:3:\"273\";s:9:\"timestamp\";s:10:\"1586164269\";s:10:\"um_request\";s:0:\"\";s:8:\"_wpnonce\";s:10:\"bd4f68264c\";s:16:\"_wp_http_referer\";s:36:\"/ydw/dyfiwildlifecentre/?page_id=279\";s:10:\"user_login\";s:7:\"ward101\";s:10:\"first_name\";s:2:\"ys\";s:9:\"last_name\";s:4:\"ward\";s:10:\"user_email\";s:22:\"ysabelward@yahoo.co.uk\";}'),(160,5,'form_id','273'),(161,5,'timestamp','1586164269'),(162,5,'um_request',''),(163,5,'_wpnonce','bd4f68264c'),(164,5,'_wp_http_referer','/ydw/dyfiwildlifecentre/?page_id=279'),(166,5,'um_user_profile_url_slug_user_login','ward101'),(168,5,'full_name','ward101'),(170,1,'default_password_nag',''),(171,1,'session_tokens','a:1:{s:64:\"a3e526747e93370aea7901393a16b1973f3af40b54224d0c4319c2154fafca28\";a:4:{s:10:\"expiration\";i:1586451741;s:2:\"ip\";s:15:\"144.124.255.240\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36\";s:5:\"login\";i:1586278941;}}'),(172,1,'managetoplevel_page_{vxcf_leads}columnshidden','a:5:{i:0;s:19:\"vf_1-vxvx-vxbrowser\";i:1;s:15:\"vf_1-vxvx-vxurl\";i:2;s:18:\"vf_1-vxvx-vxscreen\";i:3;s:19:\"vf_1-vxvx-vxupdated\";i:4;s:14:\"vf_1-vxvx-vxxx\";}'),(173,1,'itsec_user_activity_last_seen','1586268563'),(174,1,'itsec-settings-view','grid'),(175,1,'closedpostboxes_page','a:0:{}'),(176,1,'metaboxhidden_page','a:0:{}'),(177,1,'meta-box-order_page','a:3:{s:8:\"advanced\";s:21:\"transposh_setlanguage\";s:4:\"side\";s:21:\"transposh_postpublish\";s:6:\"normal\";s:0:\"\";}'),(178,5,'account_status','approved'),(180,5,'_um_last_login','1586346884'),(182,1,'closedpostboxes_ultimate-member_page_um_roles','a:0:{}'),(183,1,'metaboxhidden_ultimate-member_page_um_roles','a:0:{}'),(184,5,'wp_dashboard_quick_press_last_post_id','381'),(185,5,'community-events-location','a:1:{s:2:\"ip\";s:12:\"86.128.227.0\";}'),(186,5,'dismissed_wp_pointers','tp09_edit_drag_drop_sort'),(187,5,'managetablepress_listcolumnshidden','a:1:{i:0;s:22:\"table_last_modified_by\";}'),(188,5,'session_tokens','a:1:{s:64:\"5d8b47b18038c7976ebeca65bdb9ae4fe5ebf57ef31309c49818c31f014433b8\";a:4:{s:10:\"expiration\";i:1586516084;s:2:\"ip\";s:13:\"86.128.227.11\";s:2:\"ua\";s:78:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0\";s:5:\"login\";i:1586343284;}}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

