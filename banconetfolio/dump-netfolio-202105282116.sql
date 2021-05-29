-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: netfolio
-- ------------------------------------------------------
-- Server version	5.5.5-10.5.9-MariaDB

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
-- Table structure for table `artes`
--

DROP TABLE IF EXISTS `artes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `arquivo` varchar(100) NOT NULL,
  `datahora` datetime NOT NULL DEFAULT current_timestamp(),
  `idUsuario` int(11) DEFAULT NULL,
  `visualizacoes` int(11) NOT NULL DEFAULT 0,
  `gostei` int(11) NOT NULL DEFAULT 0,
  `comentarios` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `artes_FK` (`idUsuario`),
  CONSTRAINT `artes_FK` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artes`
--

LOCK TABLES `artes` WRITE;
/*!40000 ALTER TABLE `artes` DISABLE KEYS */;
INSERT INTO `artes` VALUES (10,'Luiza Bolos','Arte para Luiza Bolos divulgação no facebook\r\nPietro Lallo','/artes/f636f7a9e97b4984c9c8e7a70366d185.jpg','2021-05-28 19:06:45',5,1,0,0),(14,'Folhas de Outono','Lindas folhas marcando um novo ciclo.','/artes/8cf93628fbc1a67a363958be0624fb62.jpg','2021-05-28 19:18:31',3,4,1,0),(17,'WALL-E','Fan Art Wall-e disney','/artes/5d7028c23e8f126e5dd5dc42d15ed010.jpg','2021-05-28 19:49:10',5,0,0,0),(18,'Pirâmide','Projeto pirâmide logo para marca.\r\nPietro Lallo','/artes/a0dbeb0640fe2dd114e70e2156ba7226.jpg','2021-05-28 19:52:27',5,0,0,0),(19,'EVE','Personagem EVE de WALL-E Disney\r\npietrolallo','/artes/fe7e998e5143376cd8dfd7c2a2284b4a.jpg','2021-05-28 19:53:15',5,0,0,0),(20,'Patolé ','Fan art comida da animação Zootopia Disney','/artes/89e953b218755843ebf85b50f1388284.jpg','2021-05-28 19:54:11',5,0,0,0),(21,'Thank You SOPHIE!','Arte cover para SOPHIE R.I.P 2021','/artes/c1c17dd2f9e647ab6d5c962cd5e31265.jpg','2021-05-28 19:56:54',5,0,0,0),(22,'Personagem Fictício ','Personagem de Pietro Lallo','/artes/058d1c11a57effb740fb706b91437e6d.jpg','2021-05-28 19:58:31',5,0,0,0),(23,'Projeto CEEJA','Para divulgação de projetos no CEEJA Marília','/artes/8ece36ba234a71290b4474915ec12571.jpg','2021-05-28 19:59:14',5,0,0,0),(24,'Limão','Hoje eu visitei um pé de limões!','/artes/f66d1be8c362fbd7c02987ec091281d4.jpg','2021-05-28 20:44:52',3,1,0,0),(25,'Girassol','Girando sempre para a luz do sol!','/artes/0e63bccb23428ebd59cbac6e1b2ba30b.jpg','2021-05-28 20:46:54',3,10,1,0),(26,'Irmã','Doce e amargo amor de irmãs!','/artes/cc52e6190e436ce67576156fa4bb5671.jpg','2021-05-28 20:48:10',3,1,0,0),(27,'Cogumelos','Onde as fadas mais gentis habitam!','/artes/3bcd86bdd285105366e791dbedf7f838.jpg','2021-05-28 20:49:00',3,1,0,0),(28,'Gata Preta ','Em um tempo escuro, condenada ao pecado, hoje um espetáculo. ','/artes/072dd45555c896e8528f4998531019a7.jpg','2021-05-28 20:51:16',3,1,0,0);
/*!40000 ALTER TABLE `artes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` varchar(50) NOT NULL,
  `idarte` varchar(50) NOT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  `datahora` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (5,'5','14','Nossa Amiga que lindo!','2021-05-28 20:00:14'),(6,'5','13','AMEI!','2021-05-28 20:01:03'),(7,'5','12','UAU incrível!','2021-05-28 20:01:39'),(8,'5','16','Essa está perfeita','2021-05-28 20:02:06'),(9,'5','15','Nossa olha só essas nuvens ','2021-05-28 20:02:30'),(10,'5','25','Que flor bonita!','2021-05-28 21:10:57');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `bio` varchar(400) DEFAULT NULL,
  `fotousu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'teste','teste@teste.com','123456',NULL,'/fotoperfil/$hash.jpg'),(2,'teste2','teste@teste2.com','789456',NULL,'/fotoperfil/$hash.jpg'),(3,'Mislene Souza','mislenesousa731@gmail.com','7777777','Amor pela natureza e fotografia nas horas vagas.','/fotoperfil/d7eae392f846af1b4eedde44575a0546.jpg'),(4,'eu','eu@teste.com','111111',NULL,'/fotoperfil/$hash.jpg'),(5,'Pietro Lallo','pietropnl02@gmail.com','123456','Artista certificado por domestika.org | pietropnl02@gmail.com | artstation.com/eaipie','/fotoperfil/e2b9a3d5adb897ad34992a45d6d8b423.jpg'),(6,'TEste 1','teste1@gmail.com','123456',NULL,'/fotoperfil/$hash.jpg'),(7,'Teste Sete','teste7@gmail.com','123456',NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'netfolio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-28 21:16:28
