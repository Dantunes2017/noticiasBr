-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: noticiasbr
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

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
  `titulo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'Jesus cozinha, Flamengo troca de prato','Marcos Braz deu a pista na madrugada de domingo ao postar imagem de Geraldo Vandré, autor de \"Pra não dizer que não falei das flores\", mas apagou a publicação pouco depois. Em que pese a hesitação, a mensagem sobre o novo técnico do Flamengo estava dada.\r\n\r\nNas últimas duas semanas, o Flamengo falou - e muito - do treinador que fez florescer a segunda geração mais vitoriosa do clube, mas como Jorge Jesus não podia ir embora - pelo menos agora -, Braz e Spindel, então, fizeram acontecer. Paulo Sousa, com contrato de dois anos assinado, será o novo comandante rubro-negro.','img-teste.png','2021-12-27',1),(2,'Flamengo acerta venda de lateral-direito João Lucas','Depois de fazer bom papel no último Campeonato Brasileiro, o lateral-direito João Lucas seguirá no Cuiabá na próxima temporada. Na última semana, Flamengo e o clube do Mato Grosso acertaram os últimos detalhes, assinaram os documentos e concluíram a venda. O ge não teve acesso aos valores da negociação e nem ao tempo de contrato que João assinará com o Cuiabá.','id2.png','2021-12-27',1),(3,'Contratações do Flamengo para 2022','Vice-campeão brasileiro e da Libertadores, o Flamengo prioriza a contratação de um treinador antes de partir em busca de reforços para tentar voltar às grandes conquistas em 2022. Mudanças estruturais também podem acontecer no clube. ','id3.png','2021-12-27',1),(4,'Estilo ofensivo e despedidas polêmicas marcam carreira de Paulo Sousa','Paulo Sousa assumiu a seleção da Polônia em janeiro. Pouco menos de um ano depois, o novo técnico do Flamengo vai embora sem deixar saudade. A eliminação na primeira fase da Eurocopa é o principal motivo de insatisfação dos poloneses. ','id4.png','2021-12-27',1),(5,'Paulo Sousa assumirá multa com a Polônia','Apesar do incômodo gerado na Polônia com o comunicado de que deixaria a seleção rumo ao Flamengo, Paulo Sousa não terá grandes problemas para chegar à Gávea. Ele assumirá a multa com os poloneses e já começará a debater o planejamento do Fla 2022 em reunião no próximo dia 29, ainda em Portugal.','id5.png','2021-12-27',1),(6,'Comissão técnica de Paulo Sousa no Flamengo terá seis integrantes; veja nomes','O português Paulo Sousa será o próximo técnico do Flamengo. Com dois anos de contrato, ele levará para o Ninho do Urubu uma comissão formada por seis integrantes, entre portugueses e espanhóis. ','id6.png','2021-12-27',1),(7,'Assessora diz que Lewandowski está \"chocado e surpreso\" com Paulo Sousa por saída rumo ao Flamengo','O acerto de Paulo Sousa com o Flamengo caiu como uma bomba na Polônia. Capitão da seleção local, o atacante Lewandowski ficou chocado e surpreso com a decisão do português de rescindir com a Federação Polonesa de Futebol (PZPN, sigla na língua local) para assumir o clube brasileiro. ','id7.png','2021-12-27',1),(8,'VP de marketing do Flamengo revela planos para 2022 e meta de renovação com a Adidas ','No orçamento para 2022, o Flamengo prevê conseguir R$ 292 milhões em marketing e publicidade, a segunda maior fonte de receita recorrente do clube. Em entrevista ao ge, o vice-presidente de comunicação e marketing, Gustavo Oliveira, revelou os planos para a próxima temporada, que incluem renovação com a Adidas (atualmente R$ 40 milhões anuais). ','id8.png','2021-12-27',1),(9,'Copa do Brasil conhece datas e modelo de disputa em 2022; final será em outubro','A corrida pelo título da Copa do Brasil 2022 ganhou oficialmente data no calendário de 2022. A CBF divulgou o regulamento da competição, que começará nos dias 23 e 24 de fevereiro, datas reservadas pela entidade para a realização de parte dos jogos da 1ª fase. O grande campeão será conhecido no dia 19 de outubro, quando será realizado o confronto de volta da final. Os brasileiros que disputarão a Libertadores entram em ação na Copa do Brasil a partir da 3ª fase.','id9.png','2021-12-27',1),(20,'Teste','testando os textos! Inclusive aqueles que possuem acentuação como Jacaré, pé, furacão e paralelepípedos!','img-teste.png','2022-01-11',1),(21,'Teste 4','fazendo um texto de teste 2! carregando!','img-teste.png','2022-01-13',1);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousu`
--

DROP TABLE IF EXISTS `tipousu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousu`
--

LOCK TABLES `tipousu` WRITE;
/*!40000 ALTER TABLE `tipousu` DISABLE KEYS */;
INSERT INTO `tipousu` VALUES (1,'administrador'),(2,'colaborador'),(3,'usuario');
/*!40000 ALTER TABLE `tipousu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tel` int(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `usuariotipo` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuariotipo` (`usuariotipo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usuariotipo`) REFERENCES `tipousu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Daniel','Cruz','daniel@email.com',999999999,'827ccb0eea8a706c4c34a16891f84e7b',1,'ativo'),(2,'Antonio','Sankhya','antonio@sankhya.com',999999999,'827ccb0eea8a706c4c34a16891f84e7b',2,'ativo'),(3,'Fernando','Gaspar','fernando@email.com',999999999,'827ccb0eea8a706c4c34a16891f84e7b',3,'ativo'),(4,'Andrey','Rocha','andrey@email.com',999999999,'827ccb0eea8a706c4c34a16891f84e7b',1,'ativo'),(5,'Letícia','Castro','leticia@email.com',999999999,'827ccb0eea8a706c4c34a16891f84e7b',2,'ativo'),(6,'Larissa','Fagundes','larissa@email.com',99999999,'827ccb0eea8a706c4c34a16891f84e7b',3,'ativo'),(7,'Larissa','Cruz','larissa@email.com',99999999,'',3,'ativo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-19 18:08:02
