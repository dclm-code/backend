CREATE DATABASE  IF NOT EXISTS `dclmportaldb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dclmportaldb`;
-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: dclmportaldb
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(5) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `country_code_UNIQUE` (`country_code`),
  UNIQUE KEY `country_name_UNIQUE` (`country_name`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (7,'AGO','Angola','2019-05-29 00:00:00','2019-05-29 00:00:00'),(8,'AIA','Anguilla','2019-05-29 00:00:00','2019-05-29 00:00:00'),(9,'ATA','Antarctica','2019-05-29 00:00:00','2019-05-29 00:00:00'),(10,'ATG','Antigua and Barbuda','2019-05-29 00:00:00','2019-05-29 00:00:00'),(11,'ARG','Argentina','2019-05-29 00:00:00','2019-05-29 00:00:00'),(12,'ARM','Armenia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(13,'ABW','Aruba','2019-05-29 00:00:00','2019-05-29 00:00:00'),(14,'AUS','Australia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(15,'AUT','Austria','2019-05-29 00:00:00','2019-05-29 00:00:00'),(16,'AZE','Azerbaijan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(17,'BHS','Bahamas (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(18,'BHR','Bahrain','2019-05-29 00:00:00','2019-05-29 00:00:00'),(19,'BGD','Bangladesh','2019-05-29 00:00:00','2019-05-29 00:00:00'),(20,'BRB','Barbados','2019-05-29 00:00:00','2019-05-29 00:00:00'),(21,'BLR','Belarus','2019-05-29 00:00:00','2019-05-29 00:00:00'),(22,'BEL','Belgium','2019-05-29 00:00:00','2019-05-29 00:00:00'),(23,'BLZ','Belize','2019-05-29 00:00:00','2019-05-29 00:00:00'),(24,'BEN','Benin','2019-05-29 00:00:00','2019-05-29 00:00:00'),(25,'BMU','Bermuda','2019-05-29 00:00:00','2019-05-29 00:00:00'),(26,'BTN','Bhutan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(27,'BOL','Bolivia (Plurinational State of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(28,'BES','Bonaire, Sint Eustatius and Saba','2019-05-29 00:00:00','2019-05-29 00:00:00'),(29,'BIH','Bosnia and Herzegovina','2019-05-29 00:00:00','2019-05-29 00:00:00'),(30,'BWA','Botswana','2019-05-29 00:00:00','2019-05-29 00:00:00'),(31,'BVT','Bouvet Island','2019-05-29 00:00:00','2019-05-29 00:00:00'),(32,'BRA','Brazil','2019-05-29 00:00:00','2019-05-29 00:00:00'),(33,'IOT','British Indian Ocean Territory (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(34,'BRN','Brunei Darussalam','2019-05-29 00:00:00','2019-05-29 00:00:00'),(35,'BGR','Bulgaria','2019-05-29 00:00:00','2019-05-29 00:00:00'),(36,'BFA','Burkina Faso','2019-05-29 00:00:00','2019-05-29 00:00:00'),(37,'BDI','Burundi','2019-05-29 00:00:00','2019-05-29 00:00:00'),(38,'CPV','Cabo Verde','2019-05-29 00:00:00','2019-05-29 00:00:00'),(39,'KHM','Cambodia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(40,'CMR','Cameroon','2019-05-29 00:00:00','2019-05-29 00:00:00'),(41,'CAN','Canada','2019-05-29 00:00:00','2019-05-29 00:00:00'),(42,'CYM','Cayman Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(43,'CAF','Central African Republic (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(44,'TCD','Chad','2019-05-29 00:00:00','2019-05-29 00:00:00'),(45,'CHL','Chile','2019-05-29 00:00:00','2019-05-29 00:00:00'),(46,'CHN','China','2019-05-29 00:00:00','2019-05-29 00:00:00'),(47,'CXR','Christmas Island','2019-05-29 00:00:00','2019-05-29 00:00:00'),(48,'CCK','Cocos (Keeling) Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(49,'COL','Colombia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(50,'COM','Comoros (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(51,'COD','Congo (the Democratic Republic of the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(52,'COG','Congo (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(53,'COK','Cook Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(54,'CRI','Costa Rica','2019-05-29 00:00:00','2019-05-29 00:00:00'),(55,'CIV','Côte d\'Ivoire','2019-05-29 00:00:00','2019-05-29 00:00:00'),(56,'HRV','Croatia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(57,'CUB','Cuba','2019-05-29 00:00:00','2019-05-29 00:00:00'),(58,'CUW','Curaçao','2019-05-29 00:00:00','2019-05-29 00:00:00'),(59,'CYP','Cyprus','2019-05-29 00:00:00','2019-05-29 00:00:00'),(60,'CZE','Czechia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(61,'DNK','Denmark','2019-05-29 00:00:00','2019-05-29 00:00:00'),(62,'DJI','Djibouti','2019-05-29 00:00:00','2019-05-29 00:00:00'),(63,'DMA','Dominica','2019-05-29 00:00:00','2019-05-29 00:00:00'),(64,'DOM','Dominican Republic (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(65,'ECU','Ecuador','2019-05-29 00:00:00','2019-05-29 00:00:00'),(66,'EGY','Egypt','2019-05-29 00:00:00','2019-05-29 00:00:00'),(67,'SLV','El Salvador','2019-05-29 00:00:00','2019-05-29 00:00:00'),(68,'GNQ','Equatorial Guinea','2019-05-29 00:00:00','2019-05-29 00:00:00'),(69,'ERI','Eritrea','2019-05-29 00:00:00','2019-05-29 00:00:00'),(70,'EST','Estonia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(71,'SWZ','Eswatini','2019-05-29 00:00:00','2019-05-29 00:00:00'),(72,'ETH','Ethiopia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(73,'FLK','Falkland Islands (the) [Malvinas]','2019-05-29 00:00:00','2019-05-29 00:00:00'),(74,'FRO','Faroe Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(75,'FJI','Fiji','2019-05-29 00:00:00','2019-05-29 00:00:00'),(76,'FIN','Finland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(77,'FRA','France','2019-05-29 00:00:00','2019-05-29 00:00:00'),(78,'GUF','French Guiana','2019-05-29 00:00:00','2019-05-29 00:00:00'),(79,'PYF','French Polynesia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(80,'ATF','French Southern Territories (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(81,'GAB','Gabon','2019-05-29 00:00:00','2019-05-29 00:00:00'),(82,'GMB','Gambia (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(83,'GEO','Georgia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(84,'DEU','Germany','2019-05-29 00:00:00','2019-05-29 00:00:00'),(85,'GHA','Ghana','2019-05-29 00:00:00','2019-05-29 00:00:00'),(86,'GIB','Gibraltar','2019-05-29 00:00:00','2019-05-29 00:00:00'),(87,'GRC','Greece','2019-05-29 00:00:00','2019-05-29 00:00:00'),(88,'GRL','Greenland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(89,'GRD','Grenada','2019-05-29 00:00:00','2019-05-29 00:00:00'),(90,'GLP','Guadeloupe','2019-05-29 00:00:00','2019-05-29 00:00:00'),(91,'GUM','Guam','2019-05-29 00:00:00','2019-05-29 00:00:00'),(92,'GTM','Guatemala','2019-05-29 00:00:00','2019-05-29 00:00:00'),(93,'GGY','Guernsey','2019-05-29 00:00:00','2019-05-29 00:00:00'),(94,'GIN','Guinea','2019-05-29 00:00:00','2019-05-29 00:00:00'),(95,'GNB','Guinea-Bissau','2019-05-29 00:00:00','2019-05-29 00:00:00'),(96,'GUY','Guyana','2019-05-29 00:00:00','2019-05-29 00:00:00'),(97,'HTI','Haiti','2019-05-29 00:00:00','2019-05-29 00:00:00'),(98,'HMD','Heard Island and McDonald Islands','2019-05-29 00:00:00','2019-05-29 00:00:00'),(99,'VAT','Holy See (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(100,'HND','Honduras','2019-05-29 00:00:00','2019-05-29 00:00:00'),(101,'HKG','Hong Kong','2019-05-29 00:00:00','2019-05-29 00:00:00'),(102,'HUN','Hungary','2019-05-29 00:00:00','2019-05-29 00:00:00'),(103,'ISL','Iceland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(104,'IND','India','2019-05-29 00:00:00','2019-05-29 00:00:00'),(105,'IDN','Indonesia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(106,'IRN','Iran (Islamic Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(107,'IRQ','Iraq','2019-05-29 00:00:00','2019-05-29 00:00:00'),(108,'IRL','Ireland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(109,'IMN','Isle of Man','2019-05-29 00:00:00','2019-05-29 00:00:00'),(110,'ISR','Israel','2019-05-29 00:00:00','2019-05-29 00:00:00'),(111,'ITA','Italy','2019-05-29 00:00:00','2019-05-29 00:00:00'),(112,'JAM','Jamaica','2019-05-29 00:00:00','2019-05-29 00:00:00'),(113,'JPN','Japan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(114,'JEY','Jersey','2019-05-29 00:00:00','2019-05-29 00:00:00'),(115,'JOR','Jordan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(116,'KAZ','Kazakhstan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(117,'KEN','Kenya','2019-05-29 00:00:00','2019-05-29 00:00:00'),(118,'KIR','Kiribati','2019-05-29 00:00:00','2019-05-29 00:00:00'),(119,'PRK','Korea (the Democratic People\'s Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(120,'KOR','Korea (the Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(121,'KWT','Kuwait','2019-05-29 00:00:00','2019-05-29 00:00:00'),(122,'KGZ','Kyrgyzstan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(123,'LAO','Lao People\'s Democratic Republic (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(124,'LVA','Latvia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(125,'LBN','Lebanon','2019-05-29 00:00:00','2019-05-29 00:00:00'),(126,'LSO','Lesotho','2019-05-29 00:00:00','2019-05-29 00:00:00'),(127,'LBR','Liberia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(128,'LBY','Libya','2019-05-29 00:00:00','2019-05-29 00:00:00'),(129,'LIE','Liechtenstein','2019-05-29 00:00:00','2019-05-29 00:00:00'),(130,'LTU','Lithuania','2019-05-29 00:00:00','2019-05-29 00:00:00'),(131,'LUX','Luxembourg','2019-05-29 00:00:00','2019-05-29 00:00:00'),(132,'MAC','Macao','2019-05-29 00:00:00','2019-05-29 00:00:00'),(133,'MKD','Macedonia (the former Yugoslav Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(134,'MDG','Madagascar','2019-05-29 00:00:00','2019-05-29 00:00:00'),(135,'MWI','Malawi','2019-05-29 00:00:00','2019-05-29 00:00:00'),(136,'MYS','Malaysia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(137,'MDV','Maldives','2019-05-29 00:00:00','2019-05-29 00:00:00'),(138,'MLI','Mali','2019-05-29 00:00:00','2019-05-29 00:00:00'),(139,'MLT','Malta','2019-05-29 00:00:00','2019-05-29 00:00:00'),(140,'MHL','Marshall Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(141,'MTQ','Martinique','2019-05-29 00:00:00','2019-05-29 00:00:00'),(142,'MRT','Mauritania','2019-05-29 00:00:00','2019-05-29 00:00:00'),(143,'MUS','Mauritius','2019-05-29 00:00:00','2019-05-29 00:00:00'),(144,'MYT','Mayotte','2019-05-29 00:00:00','2019-05-29 00:00:00'),(145,'MEX','Mexico','2019-05-29 00:00:00','2019-05-29 00:00:00'),(146,'FSM','Micronesia (Federated States of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(147,'MDA','Moldova (the Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(148,'MCO','Monaco','2019-05-29 00:00:00','2019-05-29 00:00:00'),(149,'MNG','Mongolia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(150,'MNE','Montenegro','2019-05-29 00:00:00','2019-05-29 00:00:00'),(151,'MSR','Montserrat','2019-05-29 00:00:00','2019-05-29 00:00:00'),(152,'MAR','Morocco','2019-05-29 00:00:00','2019-05-29 00:00:00'),(153,'MOZ','Mozambique','2019-05-29 00:00:00','2019-05-29 00:00:00'),(154,'MMR','Myanmar','2019-05-29 00:00:00','2019-05-29 00:00:00'),(155,'NAM','Namibia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(156,'NRU','Nauru','2019-05-29 00:00:00','2019-05-29 00:00:00'),(157,'NPL','Nepal','2019-05-29 00:00:00','2019-05-29 00:00:00'),(158,'NLD','Netherlands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(159,'NCL','New Caledonia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(160,'NZL','New Zealand','2019-05-29 00:00:00','2019-05-29 00:00:00'),(161,'NIC','Nicaragua','2019-05-29 00:00:00','2019-05-29 00:00:00'),(162,'NER','Niger (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(163,'NGA','Nigeria','2019-05-29 00:00:00','2019-05-29 00:00:00'),(164,'NIU','Niue','2019-05-29 00:00:00','2019-05-29 00:00:00'),(165,'NFK','Norfolk Island','2019-05-29 00:00:00','2019-05-29 00:00:00'),(166,'MNP','Northern Mariana Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(167,'NOR','Norway','2019-05-29 00:00:00','2019-05-29 00:00:00'),(168,'OMN','Oman','2019-05-29 00:00:00','2019-05-29 00:00:00'),(169,'PAK','Pakistan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(170,'PLW','Palau','2019-05-29 00:00:00','2019-05-29 00:00:00'),(171,'PSE','Palestine, State of','2019-05-29 00:00:00','2019-05-29 00:00:00'),(172,'PAN','Panama','2019-05-29 00:00:00','2019-05-29 00:00:00'),(173,'PNG','Papua New Guinea','2019-05-29 00:00:00','2019-05-29 00:00:00'),(174,'PRY','Paraguay','2019-05-29 00:00:00','2019-05-29 00:00:00'),(175,'PER','Peru','2019-05-29 00:00:00','2019-05-29 00:00:00'),(176,'PHL','Philippines (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(177,'PCN','Pitcairn','2019-05-29 00:00:00','2019-05-29 00:00:00'),(178,'POL','Poland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(179,'PRT','Portugal','2019-05-29 00:00:00','2019-05-29 00:00:00'),(180,'PRI','Puerto Rico','2019-05-29 00:00:00','2019-05-29 00:00:00'),(181,'QAT','Qatar','2019-05-29 00:00:00','2019-05-29 00:00:00'),(182,'REU','Réunion','2019-05-29 00:00:00','2019-05-29 00:00:00'),(183,'ROU','Romania','2019-05-29 00:00:00','2019-05-29 00:00:00'),(184,'RUS','Russian Federation (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(185,'RWA','Rwanda','2019-05-29 00:00:00','2019-05-29 00:00:00'),(186,'BLM','Saint Barthélemy','2019-05-29 00:00:00','2019-05-29 00:00:00'),(187,'SHN','Saint Helena, Ascension and Tristan da Cunha','2019-05-29 00:00:00','2019-05-29 00:00:00'),(188,'KNA','Saint Kitts and Nevis','2019-05-29 00:00:00','2019-05-29 00:00:00'),(189,'LCA','Saint Lucia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(190,'MAF','Saint Martin (French part)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(191,'SPM','Saint Pierre and Miquelon','2019-05-29 00:00:00','2019-05-29 00:00:00'),(192,'VCT','Saint Vincent and the Grenadines','2019-05-29 00:00:00','2019-05-29 00:00:00'),(193,'WSM','Samoa','2019-05-29 00:00:00','2019-05-29 00:00:00'),(194,'SMR','San Marino','2019-05-29 00:00:00','2019-05-29 00:00:00'),(195,'STP','Sao Tome and Principe','2019-05-29 00:00:00','2019-05-29 00:00:00'),(196,'SAU','Saudi Arabia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(197,'SEN','Senegal','2019-05-29 00:00:00','2019-05-29 00:00:00'),(198,'SRB','Serbia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(199,'SYC','Seychelles','2019-05-29 00:00:00','2019-05-29 00:00:00'),(200,'SLE','Sierra Leone','2019-05-29 00:00:00','2019-05-29 00:00:00'),(201,'SGP','Singapore','2019-05-29 00:00:00','2019-05-29 00:00:00'),(202,'SXM','Sint Maarten (Dutch part)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(203,'SVK','Slovakia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(204,'SVN','Slovenia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(205,'SLB','Solomon Islands','2019-05-29 00:00:00','2019-05-29 00:00:00'),(206,'SOM','Somalia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(207,'ZAF','South Africa','2019-05-29 00:00:00','2019-05-29 00:00:00'),(208,'SGS','South Georgia and the South Sandwich Islands','2019-05-29 00:00:00','2019-05-29 00:00:00'),(209,'SSD','South Sudan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(210,'ESP','Spain','2019-05-29 00:00:00','2019-05-29 00:00:00'),(211,'LKA','Sri Lanka','2019-05-29 00:00:00','2019-05-29 00:00:00'),(212,'SDN','Sudan (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(213,'SUR','Suriname','2019-05-29 00:00:00','2019-05-29 00:00:00'),(214,'SJM','Svalbard and Jan Mayen','2019-05-29 00:00:00','2019-05-29 00:00:00'),(215,'SWE','Sweden','2019-05-29 00:00:00','2019-05-29 00:00:00'),(216,'CHE','Switzerland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(217,'SYR','Syrian Arab Republic','2019-05-29 00:00:00','2019-05-29 00:00:00'),(218,'TWN','Taiwan (Province of China)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(219,'TJK','Tajikistan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(220,'TZA','Tanzania, United Republic of','2019-05-29 00:00:00','2019-05-29 00:00:00'),(221,'THA','Thailand','2019-05-29 00:00:00','2019-05-29 00:00:00'),(222,'TLS','Timor-Leste','2019-05-29 00:00:00','2019-05-29 00:00:00'),(223,'TGO','Togo','2019-05-29 00:00:00','2019-05-29 00:00:00'),(224,'TKL','Tokelau','2019-05-29 00:00:00','2019-05-29 00:00:00'),(225,'TON','Tonga','2019-05-29 00:00:00','2019-05-29 00:00:00'),(226,'TTO','Trinidad and Tobago','2019-05-29 00:00:00','2019-05-29 00:00:00'),(227,'TUN','Tunisia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(228,'TUR','Turkey','2019-05-29 00:00:00','2019-05-29 00:00:00'),(229,'TKM','Turkmenistan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(230,'TCA','Turks and Caicos Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(231,'TUV','Tuvalu','2019-05-29 00:00:00','2019-05-29 00:00:00'),(232,'UGA','Uganda','2019-05-29 00:00:00','2019-05-29 00:00:00'),(233,'UKR','Ukraine','2019-05-29 00:00:00','2019-05-29 00:00:00'),(234,'ARE','United Arab Emirates (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(235,'GBR','United Kingdom of G. Britain and N. Ireland','2019-05-29 00:00:00','2019-05-29 00:00:00'),(236,'UMI','United States Minor Outlying Islands (the)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(237,'USA','United States of America','2019-05-29 00:00:00','2019-05-29 00:00:00'),(238,'URY','Uruguay','2019-05-29 00:00:00','2019-05-29 00:00:00'),(239,'UZB','Uzbekistan','2019-05-29 00:00:00','2019-05-29 00:00:00'),(240,'VUT','Vanuatu','2019-05-29 00:00:00','2019-05-29 00:00:00'),(241,'VEN','Venezuela (Bolivarian Republic of)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(242,'VNM','Viet Nam','2019-05-29 00:00:00','2019-05-29 00:00:00'),(243,'VGB','Virgin Islands (British)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(244,'VIR','Virgin Islands (U.S.)','2019-05-29 00:00:00','2019-05-29 00:00:00'),(245,'WLF','Wallis and Futuna','2019-05-29 00:00:00','2019-05-29 00:00:00'),(246,'ESH','Western Sahara','2019-05-29 00:00:00','2019-05-29 00:00:00'),(247,'YEM','Yemen','2019-05-29 00:00:00','2019-05-29 00:00:00'),(248,'ZMB','Zambia','2019-05-29 00:00:00','2019-05-29 00:00:00'),(249,'ZWE','Zimbabwe','2019-05-29 00:00:00','2019-05-29 00:00:00'),(250,'dan','gyuyyiirytui','2019-05-30 17:44:55','2019-05-31 23:58:27'),(253,'5889','Gaza','2019-05-30 17:52:01','2019-05-30 17:52:01');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_code` varchar(4) NOT NULL,
  `department_name` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `department_code_UNIQUE` (`department_code`),
  UNIQUE KEY `department_name_UNIQUE` (`department_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuels`
--

DROP TABLE IF EXISTS `fuels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `model` varchar(45) NOT NULL,
  `plate` varchar(45) NOT NULL,
  `milage` int(11) DEFAULT NULL,
  `litre` int(11) DEFAULT NULL,
  `admin` varchar(200) DEFAULT NULL,
  `audit` varchar(200) DEFAULT NULL,
  `store` varchar(200) DEFAULT NULL,
  `dispenser` varchar(45) DEFAULT NULL,
  `litre_dispensed` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuels`
--

LOCK TABLES `fuels` WRITE;
/*!40000 ALTER TABLE `fuels` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade_levels`
--

DROP TABLE IF EXISTS `grade_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade_level_code` varchar(5) NOT NULL,
  `grade_level_name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Grade_Level_id_UNIQUE` (`grade_level_code`),
  UNIQUE KEY `Grade_level_name_UNIQUE` (`grade_level_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_levels`
--

LOCK TABLES `grade_levels` WRITE;
/*!40000 ALTER TABLE `grade_levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `grade_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_lgas`
--

DROP TABLE IF EXISTS `group_lgas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_lgas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `local_govt_name` varchar(50) NOT NULL,
  `local_govt_code` varchar(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `local_govt_code_UNIQUE` (`local_govt_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_lgas`
--

LOCK TABLES `group_lgas` WRITE;
/*!40000 ALTER TABLE `group_lgas` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_lgas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leave_forms`
--

DROP TABLE IF EXISTS `leave_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leave_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `reliever` varchar(45) NOT NULL,
  `days_requested` int(11) NOT NULL,
  `balance_of_leave` int(11) DEFAULT NULL,
  `public_holiday` int(11) DEFAULT NULL,
  `hod_remark` varchar(200) DEFAULT NULL,
  `cs_remark` varchar(200) DEFAULT NULL,
  `admin_remark` varchar(200) DEFAULT NULL,
  `basics` int(11) DEFAULT NULL,
  `allowance` int(11) DEFAULT NULL,
  `period_leave_approved` varchar(45) DEFAULT NULL,
  `date_resume` varchar(50) DEFAULT NULL,
  `entitled` int(11) DEFAULT NULL,
  `cs_approved` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `hod_approved` varchar(45) DEFAULT NULL,
  `admin_approved` varchar(45) DEFAULT NULL,
  `period_leave_day_resume` int(11) DEFAULT NULL,
  `date_of_employment` datetime DEFAULT NULL,
  `period_leave_month` varchar(45) DEFAULT NULL,
  `period_leave_month_resume` varchar(45) DEFAULT NULL,
  `period_leave_day` int(11) DEFAULT NULL,
  `period_leave_year` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leave_forms`
--

LOCK TABLES `leave_forms` WRITE;
/*!40000 ALTER TABLE `leave_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `leave_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(25) NOT NULL,
  `receiver` varchar(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date_sent` datetime NOT NULL,
  `date_read` datetime DEFAULT NULL,
  `replied` char(1) NOT NULL DEFAULT '0',
  `readstate` char(1) NOT NULL DEFAULT '0',
  `deleted` char(1) NOT NULL DEFAULT '0',
  `forwarded` char(1) NOT NULL DEFAULT '0',
  `forwardedto` varchar(25) DEFAULT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification_code` varchar(6) NOT NULL,
  `qualification_name` varchar(40) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_UNIQUE` (`qualification_code`),
  UNIQUE KEY `Name_UNIQUE` (`qualification_name`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualifications`
--

LOCK TABLES `qualifications` WRITE;
/*!40000 ALTER TABLE `qualifications` DISABLE KEYS */;
INSERT INTO `qualifications` VALUES (1,'FSLC','PRIMARY SIX','2019-05-29 00:00:00','2019-05-29 00:00:00'),(2,'WASC','WEST AFRICA SENIOR SCHOOL CERTIFICATE','2019-05-29 00:00:00','2019-05-29 00:00:00'),(3,'NABTEB','TRADE SKILL CERTIFICATE','2019-05-29 00:00:00','2019-05-29 00:00:00'),(4,'FC&G','FULL CITY AND GUIDE','2019-05-29 00:00:00','2019-05-29 00:00:00'),(5,'ND','NATIONAL DIPLOMA','2019-05-29 00:00:00','2019-05-29 00:00:00'),(6,'NCE','NATIONAL CERTIFICATE OF EDUCATION','2019-05-29 00:00:00','2019-05-29 00:00:00'),(7,'HND','HIGHER NATIONAL DIPLOMA','2019-05-29 00:00:00','2019-05-29 00:00:00'),(8,'BED','BACHELOR OF EDUCATION','2019-05-29 00:00:00','2019-05-29 00:00:00'),(9,'BA','BACHELOR OF ART','2019-05-29 00:00:00','2019-05-29 00:00:00'),(10,'BTECH','BACHELOR OF TECHNOLOGY','2019-05-29 00:00:00','2019-05-29 00:00:00'),(11,'BSC','BACHELOR OF SCIENCE','2019-05-29 00:00:00','2019-05-29 00:00:00'),(12,'BENG','BACHELOR OF ENGINEERING','2019-05-29 00:00:00','2019-05-29 00:00:00'),(13,'MBBS','BACHELOR OF MEDICINE AND SURGERY','2019-05-29 00:00:00','2019-05-29 00:00:00'),(14,'LLB','BACLAURATES OF LAW','2019-05-29 00:00:00','2019-05-29 00:00:00'),(15,'MA','MASTER OF ART','2019-05-29 00:00:00','2019-05-29 00:00:00'),(16,'MSC','MASTER OF SCIENCE','2019-05-29 00:00:00','2019-05-29 00:00:00'),(17,'MPHIL','MASTER OF PHILOSOPHY','2019-05-29 00:00:00','2019-05-29 00:00:00'),(18,'PHD','DOCTOR OF PHILOSOPHY','2019-05-29 00:00:00','2019-05-29 00:00:00'),(19,'GII','GRADE II TEACHERS CERTIFICATE','2019-05-29 00:00:00','2019-05-29 00:00:00');
/*!40000 ALTER TABLE `qualifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_code` varchar(10) NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`region_name`),
  UNIQUE KEY `regions_codes_UNIQUE` (`region_code`),
  UNIQUE KEY `regions_name_UNIQUE` (`region_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_code` varchar(5) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `section_code` (`section_code`),
  UNIQUE KEY `section_name` (`section_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_code` varchar(5) NOT NULL,
  `state_name` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(25) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `middle_name` varchar(15) DEFAULT NULL,
  `surname` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `api_token` varchar(100) DEFAULT '',
  `gender` varchar(8) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `section_id` tinyint(4) NOT NULL,
  `department_id` tinyint(4) NOT NULL,
  `location_of_work_id` tinyint(4) NOT NULL,
  `location_of_origin_id` tinyint(4) NOT NULL,
  `qualification_id` tinyint(4) DEFAULT NULL,
  `date_of_employment` date NOT NULL,
  `date_of_last_promotion` date DEFAULT NULL,
  `grade_level_id` tinyint(4) NOT NULL,
  `next_of_kin_id` tinyint(4) DEFAULT '0',
  `marital_status` varchar(10) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `role` varchar(15) NOT NULL,
  `comments` tinytext,
  `status` char(1) DEFAULT '0',
  `online` char(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone_number` (`phone_number`),
  UNIQUE KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-26 16:52:56
