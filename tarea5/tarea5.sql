-- MySQL dump 10.13  Distrib 5.5.24, for Win64 (x86)
--
-- Host: localhost    Database: tarea5
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `genero` enum('Accion','Drama','Ciencia Ficcion','Intriga','Misterio','Comedia') DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `puntuacion` decimal(4,2) DEFAULT NULL,
  `disponible` tinyint(1) DEFAULT NULL,
  `clasificacion` enum('G','PG','PG-13','R','NC-17') DEFAULT NULL,
  PRIMARY KEY (`id_pelicula`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,'American Hustle','Drama',167,9.79,0,'NC-17'),(2,'American Hustle 2','Drama',167,6.55,0,'NC-17'),(3,'The Wolf of Wall Street','Comedia',179,7.80,0,'NC-17'),(4,'Dallas Buyers Club','Drama',117,8.00,0,'R'),(5,'Dallas Buyers Club','Drama',117,8.00,0,'R'),(6,'American Hustle 3','Drama',167,9.79,0,'NC-17'),(7,'American Hustle 4','Drama',167,6.55,0,'NC-17'),(8,'The Wolf of Wall Street 2','Comedia',179,7.80,0,'NC-17'),(9,'Dallas Buyers Club 2','Drama',117,8.00,0,'R'),(10,'Dallas Buyers Club 2','Drama',117,8.00,0,'R');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-01  0:13:34
