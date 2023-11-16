-- MySQL dump 10.13  Distrib 8.1.0, for Linux (x86_64)
--
-- Host: localhost    Database: SIGMA
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autenticacion`
--

DROP TABLE IF EXISTS `autenticacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autenticacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `habilitado` tinyint(1) NOT NULL DEFAULT '0',
  `perfil` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autenticacion`
--

LOCK TABLES `autenticacion` WRITE;
/*!40000 ALTER TABLE `autenticacion` DISABLE KEYS */;
INSERT INTO `autenticacion` VALUES (1,'fabian','123','Fabian','Baena','fabian.baena@udea.edu.co',1,0),(2,'camilo','123','Camilo','Vallejo','juan.vallejo@udea.edu.co',0,0);
/*!40000 ALTER TABLE `autenticacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autores`
--

DROP TABLE IF EXISTS `autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autores`
--

LOCK TABLES `autores` WRITE;
/*!40000 ALTER TABLE `autores` DISABLE KEYS */;
/*!40000 ALTER TABLE `autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colecciones`
--

DROP TABLE IF EXISTS `colecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colecciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `collection` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colecciones`
--

LOCK TABLES `colecciones` WRITE;
/*!40000 ALTER TABLE `colecciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `colecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenedores`
--

DROP TABLE IF EXISTS `contenedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contenedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenedores`
--

LOCK TABLES `contenedores` WRITE;
/*!40000 ALTER TABLE `contenedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `contenedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formatos`
--

DROP TABLE IF EXISTS `formatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formatos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `format` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formatos`
--

LOCK TABLES `formatos` WRITE;
/*!40000 ALTER TABLE `formatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `formatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origenes`
--

DROP TABLE IF EXISTS `origenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `origenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origenes`
--

LOCK TABLES `origenes` WRITE;
/*!40000 ALTER TABLE `origenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `origenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Consecutivo interno',
  `id_type` int NOT NULL COMMENT 'Indice de tipo de documento',
  `id_collection` int NOT NULL COMMENT 'Identificación de la colección o expediente donde se ubica',
  `IdDoc` int NOT NULL COMMENT 'Identificador del documento',
  `title` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Título del documento',
  `date` date DEFAULT NULL COMMENT 'Fecha de creación del documento',
  `place` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `author` int DEFAULT NULL COMMENT 'Id del responsable o creador de la obra',
  `author_role` int DEFAULT NULL COMMENT 'Colaboradores de la obra',
  `contributor` int DEFAULT NULL COMMENT 'Id de la persona que acompaña la obra',
  `contributor_role` int DEFAULT NULL COMMENT 'Rol de la persona que acompaña la obra',
  `subject` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Tema que identifica dentro de la colección - acervo',
  `subject_specific` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Sub clasificación',
  `sponsor` varchar(5000) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Agradecimientos',
  `id_identifier` int DEFAULT NULL COMMENT 'Elemento que contiene el documento',
  `id_format_phisical` int DEFAULT NULL COMMENT 'Corresponde al contenedor donde está inscrito el documento. Campo de selección por ejemplo: (Análogo - Digital)',
  `id_format` int DEFAULT NULL COMMENT 'Corresponde a la codificación del documento',
  `id_source` int DEFAULT NULL COMMENT 'Origen',
  `source_acquisition` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Fuentes de Adquisición',
  `position` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Encuadre de la fotografía',
  `color` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Cromia (Color/B&N)',
  `ligth` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Iluminación',
  `quality` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Resolución',
  `weight` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Tamaño del archivo',
  `extension` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Duración o dimensión del documento',
  `date_broadcast` date DEFAULT NULL COMMENT 'Fecha de publicación emisión',
  `source_broadcast` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Medio o canal de publicación emisión',
  `id_keywords` int NOT NULL COMMENT 'Palabras clave',
  `description` varchar(5000) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Descripción/Sinopsis',
  `description_alternative` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Observaciones',
  `links` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Relaciones',
  `rights` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Cesión de Derechos',
  `rights_use` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Condiciones de uso',
  `status` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `description_other` varchar(1000) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Consideraciones Técnicas',
  `documentalista` int NOT NULL COMMENT 'Documentalista',
  `date_documentalista` date NOT NULL COMMENT 'Fecha documentación',
  `location` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Ubicación física',
  `files` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL COMMENT 'Enlace al documento',
  PRIMARY KEY (`id`),
  UNIQUE KEY `IdDoc` (`IdDoc`),
  KEY `id_type` (`id_type`),
  KEY `registros_ibfk_2` (`id_collection`),
  KEY `registros_ibfk_4` (`id_format`),
  KEY `id_source` (`id_source`),
  KEY `registros_ibfk_5` (`id_identifier`),
  KEY `registros_ibfk_3` (`id_format_phisical`),
  CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `documentos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_ibfk_2` FOREIGN KEY (`id_collection`) REFERENCES `colecciones` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_ibfk_3` FOREIGN KEY (`id_format_phisical`) REFERENCES `soportes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_ibfk_4` FOREIGN KEY (`id_format`) REFERENCES `formatos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_ibfk_5` FOREIGN KEY (`id_identifier`) REFERENCES `contenedores` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_ibfk_6` FOREIGN KEY (`id_source`) REFERENCES `origenes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros_autores`
--

DROP TABLE IF EXISTS `registros_autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros_autores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_registro` int NOT NULL,
  `id_autor` int NOT NULL,
  `id_role` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro` (`id_registro`),
  KEY `id_autor` (`id_autor`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `registros_autores_ibfk_2` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_autores_ibfk_3` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `registros_autores_ibfk_4` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros_autores`
--

LOCK TABLES `registros_autores` WRITE;
/*!40000 ALTER TABLE `registros_autores` DISABLE KEYS */;
/*!40000 ALTER TABLE `registros_autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros_colaboradores`
--

DROP TABLE IF EXISTS `registros_colaboradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros_colaboradores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_registro` int NOT NULL,
  `contributor` int NOT NULL,
  `id_role` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro` (`id_registro`),
  KEY `id_autor` (`contributor`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `registros_colaboradores_ibfk_1` FOREIGN KEY (`contributor`) REFERENCES `autores` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_colaboradores_ibfk_2` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `registros_colaboradores_ibfk_3` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros_colaboradores`
--

LOCK TABLES `registros_colaboradores` WRITE;
/*!40000 ALTER TABLE `registros_colaboradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `registros_colaboradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros_kwords`
--

DROP TABLE IF EXISTS `registros_kwords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros_kwords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_registro` int NOT NULL,
  `keyword` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `registro` (`id_registro`),
  KEY `id_autor` (`keyword`),
  CONSTRAINT `registros_kwords_ibfk_1` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros_kwords`
--

LOCK TABLES `registros_kwords` WRITE;
/*!40000 ALTER TABLE `registros_kwords` DISABLE KEYS */;
/*!40000 ALTER TABLE `registros_kwords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` int NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soportes`
--

DROP TABLE IF EXISTS `soportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `soportes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `format_phisical` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `observe` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soportes`
--

LOCK TABLES `soportes` WRITE;
/*!40000 ALTER TABLE `soportes` DISABLE KEYS */;
/*!40000 ALTER TABLE `soportes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-27  4:36:43
