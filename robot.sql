-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: localhost    Database: robotRomanov
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `fio` varchar(20) DEFAULT NULL,
  `b_d` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mob_phone` varchar(20) DEFAULT NULL,
  `home_phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_child_group` (`id_group`),
  CONSTRAINT `FK_child_group` FOREIGN KEY (`id_group`) REFERENCES `group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child`
--

LOCK TABLES `child` WRITE;
/*!40000 ALTER TABLE `child` DISABLE KEYS */;
INSERT INTO `child` VALUES (3,2,'Иванов Иванчик','2018-02-28','йуйц','8978','7896'),(6,1,'2','2018-02-03','231','12312','12'),(9,2,'qweqweeeee','0312-12-31','qweqe','wqeqwe','qweqweq');
/*!40000 ALTER TABLE `child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `count_people` int(11) DEFAULT '0',
  `id_lector` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `FK_group_lector` (`id_lector`),
  CONSTRAINT `FK_group_lector` FOREIGN KEY (`id_lector`) REFERENCES `lector` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,'Группа А',1,1),(2,'Группа 58',5,2),(3,'aweqweq',0,1);
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `label_translete`
--

DROP TABLE IF EXISTS `label_translete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `label_translete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ru` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `label_translete`
--

LOCK TABLES `label_translete` WRITE;
/*!40000 ALTER TABLE `label_translete` DISABLE KEYS */;
INSERT INTO `label_translete` VALUES (1,'fio','ФИО'),(2,'b_d','День рождение'),(3,'address','Домашний адрес'),(4,'mob_phone','Мобильный телефон'),(5,'home_phone','Домашний телефон'),(6,'name','Название'),(7,'count_people','Кол-во человек'),(8,'date_priem','Дата приёма'),(9,'number_delo','Номер дела'),(10,'who_is','Кем является'),(11,'phone','Телефон'),(12,'work','Информация по работе'),(13,'price','Цена'),(14,'perioud','Период'),(15,'is_recommend','\"Рекомендуем\"'),(16,'id_group','Группа'),(17,'id_lector','Лектор'),(18,'id_child','Ребёнок');
/*!40000 ALTER TABLE `label_translete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `landing_future`
--

DROP TABLE IF EXISTS `landing_future`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landing_future` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='максимум 6';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landing_future`
--

LOCK TABLES `landing_future` WRITE;
/*!40000 ALTER TABLE `landing_future` DISABLE KEYS */;
INSERT INTO `landing_future` VALUES (1,'FULLY RESPOSIVE','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-window'),(2,'RETINA READY','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-eye'),(3,'STYLISH DESIGN','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-paint-brush'),(4,'CLEAN CODE','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-file'),(5,'EASY TO CUSTOMIZE','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-layers'),(6,'FREE OF CHARGE','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.','icon-gift');
/*!40000 ALTER TABLE `landing_future` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lector`
--

DROP TABLE IF EXISTS `lector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(50) DEFAULT NULL,
  `b_d` date DEFAULT NULL,
  `date_priem` date DEFAULT NULL,
  `number_delo` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fio` (`fio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lector`
--

LOCK TABLES `lector` WRITE;
/*!40000 ALTER TABLE `lector` DISABLE KEYS */;
INSERT INTO `lector` VALUES (1,'Иванов Иван Иванович',NULL,'2018-02-08',NULL),(2,'Романов Влад Владимирович','2018-02-01','2018-02-09',1);
/*!40000 ALTER TABLE `lector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(20) DEFAULT NULL,
  `id_child` int(11) DEFAULT NULL,
  `who_is` varchar(20) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `work` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_parent_child` (`id_child`),
  CONSTRAINT `FK_parent_child` FOREIGN KEY (`id_child`) REFERENCES `child` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
INSERT INTO `parent` VALUES (2,'Иванова Мария',3,'Мать','ул. Кирова д.10','51586','Гос. Дума'),(3,'Татьяна Горбушина',3,'Сестра','ГГПИ','887486879','89419849');
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raspisanie`
--

DROP TABLE IF EXISTS `raspisanie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raspisanie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `price` varchar(20) DEFAULT NULL,
  `perioud` varchar(20) DEFAULT 'Ð’ Ð¼ÐµÑÑÑ†',
  `id_lector` int(11) NOT NULL,
  `is_recommend` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_raspisanie_group` (`id_group`),
  KEY `FK_raspisanie_lector` (`id_lector`),
  CONSTRAINT `FK_raspisanie_group` FOREIGN KEY (`id_group`) REFERENCES `group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_raspisanie_lector` FOREIGN KEY (`id_lector`) REFERENCES `lector` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raspisanie`
--

LOCK TABLES `raspisanie` WRITE;
/*!40000 ALTER TABLE `raspisanie` DISABLE KEYS */;
INSERT INTO `raspisanie` VALUES (2,1,'150',NULL,2,1),(3,2,'250','12',2,0),(4,3,'350','12',1,0);
/*!40000 ALTER TABLE `raspisanie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `login` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`login`),
  UNIQUE KEY `user_login_uindex` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-16 13:17:49
