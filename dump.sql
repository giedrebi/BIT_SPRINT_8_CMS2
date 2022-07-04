CREATE DATABASE  IF NOT EXISTS `cms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cms`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cms
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'2022-06-30','Lemony prawn  courgetti tagliatelle','Heat the oil in a frying pan and fry the courgetti for 4-5 mins, then stir through the garlic and chilli.  Cook the tagliatelle following pack instructions. Drain, reserving some of the cooking water. Add the prawns to the courgette mixture, and cook for 2 mins until pink. Toss through the tagliatelle, the lemon zest and juice, parsley, some seasoning and a splash of the reserved cooking water. Divide between bowls and serve.','<h4>Lemony prawn & courgetti tagliatelle</h4></br>\r\n<img src=\"https://images.immediate.co.uk/production/volatile/sites/30/2018/05/CourgettePrawnPasta-b44d874.jpg?resize=960,872?quality=90&webp=true&resize=375,341\" alt=\"Lemony prawn & courgetti tagliatelle\" width=\"500\"/></br></br>\r\n<h6>Ingredients:</h6>\r\n<p>2 tbsp olive oil</p>\r\n<p>2 courgetti (about 500g), trimmed and coarsely grated</p>\r\n<p>1 large garlic clove , finely grated</p>\r\n<p>1 small red chilli , finely chopped</p>\r\n<p>180g tagliatelle</p>\r\n<p>150g raw king prawns , peeled and deveined</p>\r\n<p>1 lemon , zested and juiced</p>\r\n<p>½ small bunch of parsley , finely chopped</p> </br>\r\n<h6>STEP 1</h6>\r\n<p>Heat the oil in a frying pan and fry the courgetti for 4-5 mins, then stir through the garlic and chilli.</p>\r\n<h6>STEP 2</h6>\r\n<p>Cook the tagliatelle following pack instructions. Drain, reserving some of the cooking water.</p>\r\n<h6>STEP 3</h6>\r\n<p>Add the prawns to the courgette mixture, and cook for 2 mins until pink. Toss through the tagliatelle, the lemon zest and juice, parsley, some seasoning and a splash of the reserved cooking water. Divide between bowls and serve.</p>');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-04 21:13:13
