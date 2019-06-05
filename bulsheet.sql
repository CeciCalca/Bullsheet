-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: bullsheet
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `califications_web`
--

DROP TABLE IF EXISTS `califications_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `califications_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `argument_1` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_5` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_califications_user_id_idx` (`user_id`),
  CONSTRAINT `fk_news_califications_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `califications_web`
--

LOCK TABLES `califications_web` WRITE;
/*!40000 ALTER TABLE `califications_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `califications_web` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `califications_wp`
--

DROP TABLE IF EXISTS `califications_wp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `califications_wp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `argument_1` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `argument_5` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_califications_wp_user_id_idx` (`user_id`),
  CONSTRAINT `fk_califications_wp_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `califications_wp`
--

LOCK TABLES `califications_wp` WRITE;
/*!40000 ALTER TABLE `califications_wp` DISABLE KEYS */;
/*!40000 ALTER TABLE `califications_wp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_news`
--

DROP TABLE IF EXISTS `new_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `new_news` (
  `id` int(11) NOT NULL,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volanta` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copete` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuentes` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `photo_file` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_credit` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_detail` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_news_califications_web_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_news`
--

LOCK TABLES `new_news` WRITE;
/*!40000 ALTER TABLE `new_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `new_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_news_califications_web`
--

DROP TABLE IF EXISTS `new_news_califications_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `new_news_califications_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_news_id` int(11) DEFAULT NULL,
  `califications_web_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_new_news_califications_web_new_news_id_idx` (`new_news_id`),
  KEY `fk_new_news_califications_web_califications_web_id_idx` (`califications_web_id`),
  CONSTRAINT `fk_new_news_califications_web_califications_web_id` FOREIGN KEY (`califications_web_id`) REFERENCES `califications_web` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_new_news_califications_web_new_news_id` FOREIGN KEY (`new_news_id`) REFERENCES `new_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_news_califications_web`
--

LOCK TABLES `new_news_califications_web` WRITE;
/*!40000 ALTER TABLE `new_news_califications_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `new_news_califications_web` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'base'),(2,'admin');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  `avatar` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_country_id_idx` (`country_id`),
  KEY `fk_users_state_id_idx` (`state_id`),
  KEY `fk_users_province_id_idx` (`province_id`),
  KEY `fk_users_profile_id_idx` (`profile_id`),
  CONSTRAINT `fk_users_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_province_id` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Cecilia',NULL,'csc@csc.com','$2y$10$qpGNIfTakSJAKA/vGNKqPOHmXNPRZ1mNa3pWPDwsjAehRTjiImOVK',NULL,NULL,NULL,NULL,1,'5cf828424f364.jpg'),(3,'Maxu',NULL,'maxu@gmail.com','$2y$10$Fned8YvvGmaF6ykxJ7HipONFQuFJeI4vaY/6qkfyYe9vx18AtcSH6',NULL,NULL,NULL,NULL,1,'5cf8304530874.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_new_news`
--

DROP TABLE IF EXISTS `users_new_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users_new_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `new_news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_new_news_user_id_idx` (`user_id`),
  KEY `fk_user_new_news_new_news_id_idx` (`new_news_id`),
  CONSTRAINT `fk_user_new_news_new_news_id` FOREIGN KEY (`new_news_id`) REFERENCES `new_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_new_news_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_new_news`
--

LOCK TABLES `users_new_news` WRITE;
/*!40000 ALTER TABLE `users_new_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_new_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_web_news`
--

DROP TABLE IF EXISTS `users_web_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users_web_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `web_news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_web_news_user_id_idx` (`user_id`),
  KEY `fk_users_web_news_web_news_id_idx` (`web_news_id`),
  CONSTRAINT `fk_users_web_news_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_web_news_web_news_id` FOREIGN KEY (`web_news_id`) REFERENCES `web_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_web_news`
--

LOCK TABLES `users_web_news` WRITE;
/*!40000 ALTER TABLE `users_web_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_web_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_wp_news`
--

DROP TABLE IF EXISTS `users_wp_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users_wp_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `wp_news_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_wp_id_user_id_idx` (`user_id`),
  KEY `fk_users_wp_wp_news_id_idx` (`wp_news_id`),
  CONSTRAINT `fk_users_wp_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_wp_wp_news_id` FOREIGN KEY (`wp_news_id`) REFERENCES `wp_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_wp_news`
--

LOCK TABLES `users_wp_news` WRITE;
/*!40000 ALTER TABLE `users_wp_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_wp_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_news`
--

DROP TABLE IF EXISTS `web_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `web_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_news_calification_web_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_news`
--

LOCK TABLES `web_news` WRITE;
/*!40000 ALTER TABLE `web_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_news_califications_web`
--

DROP TABLE IF EXISTS `web_news_califications_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `web_news_califications_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_news_id` int(11) DEFAULT NULL,
  `califications_web_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_web_news_califications_web_web_news_id_idx` (`web_news_id`),
  KEY `web_news_califications_web_calification_web_id_idx` (`califications_web_id`),
  CONSTRAINT `fk_web_news_califications_web_web_news_id` FOREIGN KEY (`web_news_id`) REFERENCES `web_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `web_news_califications_web_calification_web_id` FOREIGN KEY (`califications_web_id`) REFERENCES `califications_web` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_news_califications_web`
--

LOCK TABLES `web_news_califications_web` WRITE;
/*!40000 ALTER TABLE `web_news_califications_web` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_news_califications_web` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_news`
--

DROP TABLE IF EXISTS `wp_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wp_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `file` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wp_news_califications_wp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_news`
--

LOCK TABLES `wp_news` WRITE;
/*!40000 ALTER TABLE `wp_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_news_califications_wp`
--

DROP TABLE IF EXISTS `wp_news_califications_wp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wp_news_califications_wp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wp_news_id` int(11) DEFAULT NULL,
  `califications_wp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wp_news_califications_wp-wp_news_id_idx` (`wp_news_id`),
  KEY `fk_wp_news_califications_wp_califications_news_idx` (`califications_wp_id`),
  CONSTRAINT `fk_wp_news_califications_wp-wp_news_id` FOREIGN KEY (`wp_news_id`) REFERENCES `wp_news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wp_news_califications_wp_califications_news_id` FOREIGN KEY (`califications_wp_id`) REFERENCES `califications_web` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_news_califications_wp`
--

LOCK TABLES `wp_news_califications_wp` WRITE;
/*!40000 ALTER TABLE `wp_news_califications_wp` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_news_califications_wp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-05 18:13:58
