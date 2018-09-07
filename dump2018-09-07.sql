CREATE DATABASE  IF NOT EXISTS `banco_de_noticias` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `banco_de_noticias`;
-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: banco_de_noticias
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(92) NOT NULL,
  `slug` varchar(92) NOT NULL,
  `descricao` varchar(128) NOT NULL,
  `conteudo` text NOT NULL,
  `palavraschave` varchar(92) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (2,'Google marca evento misterioso para o prÃ³ximo mÃªs','Google marca evento misterioso para o prÃ³ximo mÃªs','A Google estÃ¡ preparando um evento misterioso para o dia 09 de outubro. No convite, maiores detalhes nÃ£o sÃ£o revelados.','Na semana passada, adiantamos o seguinte: â€œao que tudo indica, o novo top de linha da Google, o Pixel 3, vai dar as caras apenas no dia 9 de outubro, cinco dias apenas apÃ³s o que muita gente jÃ¡ esperava. Segundo o Bloomberg, alÃ©m do evento acontecer no dia 9 de outubro, ele vai ser sediado na cidade de Nova York, diferentemente das outras geraÃ§Ãµes que foram dadas Ã  luz em SÃ£o Francisco, muito mais perto da matriz da empresaâ€.\r\n\r\nAlÃ©m do Pixel 3, outros produtos da Google devem ser anunciados nesse mesmo evento.','google','2018-09-07'),(3,'Instagram faz guia para pais ensinarem filhos sobre privacidade','Instagram faz guia para pais ensinarem filhos sobre privacidade','O Instagram estÃ¡ divulgando um novo guia para pais ajudarem seus filhos no que toca privacidade e seguranÃ§a em redes sociais.',' Por lÃ¡, os tutores encontrarÃ£o desde dicas sobre como usar as ferramentas atÃ© como lidar com as conversas realizadas via app.\r\n\r\nâ€œNo Guia para Pais, nos concentramos em trÃªs coisas: como gerenciar a privacidade, as interaÃ§Ãµes e o tempo no Instagram. IncluÃ­mos os fundamentos de nosso aplicativo e uma descriÃ§Ã£o de nossas ferramentas, alÃ©m de um guia de discussÃ£o sobre como os pais e responsÃ¡veis podem ter uma conversa aberta com os adolescentes sobre o Instagramâ€, disse a rede social. â€œAs perguntas de discussÃ£o foram desenvolvidas em colaboraÃ§Ã£o com a especialista em educaÃ§Ã£o e mÃ­dia social, Ana Homayoun, MA, PPS, e projetadas para ajudar os pais e responsÃ¡veis a aprender mais sobre como os adolescentes estÃ£o usando o Instagram e para garantir que eles estejam usando o aplicativo de forma positivaâ€.','instagram','2018-09-07');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'banco_de_noticias'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-07 14:53:55
