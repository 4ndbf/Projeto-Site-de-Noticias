CREATE DATABASE  IF NOT EXISTS `banco_de_noticias` /*!40100 DEFAULT CHARACTER SET utf8 */;
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
  `slug` varchar(128) NOT NULL,
  `descricao` varchar(192) NOT NULL,
  `conteudo` text NOT NULL,
  `palavraschave` varchar(128) NOT NULL,
  `data` date DEFAULT NULL,
  `imagem` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'Anote na agenda: Microsoft anuncia conferÃªncia para 2 de outubro','../../noticias/anote-na-agenda-microsoft-anuncia-conferencia-para-2-de-outubro.php','A Microsoft perdeu tempo depois que a Apple anunciou um evento para o dia 12 de setembro.','A empresa norte-americana comeÃ§ou a enviar convites para uma conferÃªncia no dia 2 de outubro, em Nova York, que deve ser focada em hardwares. O jornalista Raymond Wong, do site Mashable, publicou a ilustraÃ§Ã£o nas redes sociais.<br>Ã‰ bem possÃ­vel que a Microsoft atualize o hardware de aparelhos da linha Surface durante o evento, ainda mais depois do anÃºncio recente de novos processadores Intel para dispositivos portÃ¡teis. SÃ³ que o slogan \"Um momento do seu tempo\" deixou muita gente especulando: serÃ¡ apenas uma frase educada pedindo atenÃ§Ã£o ou veremos algo relacionado a smartwatches ou smartbands? Nem precisa dizer que o Surface Phone, que estÃ¡ nos sonhos dos fÃ£s hÃ¡ anos, tambÃ©m deve novamente ficar de fora.','microsoft','2018-09-09','https://img.ibxk.com.br//2018/09/07/07162052316006-t1200x480.jpg'),(2,'Toshiba lanÃ§a TV 4K HDR com apenas 2,5 mm de espessura','../../noticias/toshiba-lanca-tv-4k-hdr-com-apenas-2,5-mm-de-espessura.php','A Toshiba anunciou o modelo mais fino de TV que jÃ¡ criaram atÃ© hoje. A Wall Art TV foi revelada na IFA 2018, que estÃ¡ ocorrendo em Berlim, na Alemanha.','A Wall Art TV tem tecnologia 4K HDR, prometendo excepcional qualidade de imagem, com cores e contrastes surpreendentes. Quando a TV nÃ£o estÃ¡ em uso, vocÃª pode aproveitÃ¡-la como parte da decoraÃ§Ã£o do ambiente, tipo um quadro.\r\n<br>\r\nPara criar uma TV tÃ£o fina, a Toshiba resolveu \"retirar\" partes que deixam a tela mais espessa. Sendo assim, o Ã¡udio da TV sai por uma caixa de som ligada Ã  tela por um discreto cabo.\r\n<br>\r\nAlÃ©m da Wall Art TV, foi lanÃ§ado um modelo de 65\", quase sem bordas: apenas 4 milÃ­metros. Ela inclui a tecnologia Toshiba \"Micro Dimming\", que processa o conteÃºdo em tempo real, analisando cada quadro gerado e ajustando a claridade das figuras, para uma imagem mais realista. Conta tambÃ©m com o Dolby Vision, que promete imagem de cinema na sua casa.','toshiba,televisã£o','2018-09-09','https://img.ibxk.com.br///2018/09/01/01184746914020-t1200x480.jpg');
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

-- Dump completed on 2018-09-08 22:55:48
