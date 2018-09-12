CREATE DATABASE  IF NOT EXISTS `banco_de_noticias` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `banco_de_noticias`;
-- MySQL dump 10.13  Distrib 5.6.41, for Linux (x86_64)
--
-- Host: localhost    Database: banco_de_noticias
-- ------------------------------------------------------
-- Server version	5.6.41

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
-- Table structure for table `Andybf_noticias`
--

DROP TABLE IF EXISTS `Andybf_noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Andybf_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(92) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `descricao` varchar(192) NOT NULL,
  `conteudo` text NOT NULL,
  `palavraschave` varchar(128) NOT NULL,
  `data` date DEFAULT NULL,
  `imagem` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Andybf_noticias`
--

LOCK TABLES `Andybf_noticias` WRITE;
/*!40000 ALTER TABLE `Andybf_noticias` DISABLE KEYS */;
INSERT INTO `Andybf_noticias` VALUES (3,'2018 jÃ¡ registrou 150 milhÃµes de ataques de fraude em smartphones','../../noticias/2018-ja-registrou-150-milhoes-de-ataques-de-fraude-em-smartphones.php','Um relatÃ³rio da ThreatMetrix afirma que foram registrados cerca de 150 milhÃµes de ataques de fraude nos primeiros seis meses de 2018.','No <b>infogrÃ¡fico abaixo</b>, vocÃª tambÃ©m pode checar com que as empresas de seguranÃ§a conseguiram detectar e prevenir 361 milhÃµes de tentativas de ataques. A ThreatMetrix indicou que mais de um terÃ§o dos ataques de fraude jÃ¡ mira especificamente smartphones e tablets.Os bots tambÃ©m sÃ£o uma nova ameaÃ§a atualmente, com 2,6 bilhÃµes de ataques contabilizados nos primeiros seis meses do anoOutros dados da pesquisa indicam que os ataques mobile cresceram 24% globalmente se comparados ao mesmo perÃ­odo em 2017; se falarmos sobre os Estados Unidos, se nÃºmero sobe para 44%.Os bots tambÃ©m sÃ£o uma nova ameaÃ§a atualmente, com 2,6 bilhÃµes de ataques contabilizados nos primeiros seis meses do ano, um aumento de 60% quando comparado com 2017.Abaixo, vocÃª acompanha o infogrÃ¡fico com os detalhes. Para receber as Ãºltimas notÃ­cias sobre seguranÃ§a e algumas dicas sobre como se proteger nesse cenÃ¡rio, acompanhe a nossa pÃ¡gina dedicada sobre o assunto.','smartphones,ataques','2018-09-12','https://img.ibxk.com.br//2018/09/12/12121310363035-t1200x480.jpg');
/*!40000 ALTER TABLE `Andybf_noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-12 15:59:52
