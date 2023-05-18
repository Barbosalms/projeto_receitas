CREATE DATABASE  IF NOT EXISTS `t94` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `t94`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: t94
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `excluido` int(11) DEFAULT '0',
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Bolos',0),(2,'Doces',0),(3,'Amoras',0),(4,'Pratos Quentes',0),(5,'Sucos',0),(6,'Goiabadas',0),(7,'Docês da Vovó',0),(8,'café',1),(9,'Bolo de coisa nenhuma',1),(10,'chá',1),(11,'dasdas dasd asd asd asd 55555555555555555',1),(12,'dasdasd',1),(13,'asdasdasdas',1),(14,'dddddddddddddddd',1),(15,'dasdasd asd as fffffffffffff',1),(16,'aaaaaaaaaaaaaaaaaaa',1),(17,' asa sdasd asdasd',0);
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receitas`
--

DROP TABLE IF EXISTS `receitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receitas` (
  `id_receita` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `ingredientes` text,
  `modo_fazer` text,
  `descricao` text,
  `video` varchar(200) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `excluido` int(11) DEFAULT '0',
  PRIMARY KEY (`id_receita`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receitas`
--

LOCK TABLES `receitas` WRITE;
/*!40000 ALTER TABLE `receitas` DISABLE KEYS */;
INSERT INTO `receitas` VALUES (1,1,'BOLO DE AVEIA COM CACAU NO MICRO-ONDAS',NULL,'1 ovo\n3 colheres de iogurte natural\n2 colheres de flocos finos de aveia\n1 colher bem cheia de cacau em pó\n1 colher rasa de achocolatado em pó\n1 colher (café) de fermento\n1 colher (café) de açúcar demerara (opcional)','Em uma vasilha, com a ajuda de um fouet, misture todos os ingredientes, com exceção do fermento, começando pelo ovo e iogurte.\n\nPor fim, incorpore o fermento, misturando levemente.\n\nUnte uma vasilha com óleo de coco e despeje a mistura (pode ser até em uma caneca tipo para caldo. Tem que ser fundinha, pois o bolo cresce)\n\nLeve ao micro-ondas por cerca de 2 minutos, em potência alta.\n\nPare na metade do tempo para conferir.\n\nSe necessário mais tempo, vá colocando aos poucos para o bolo não ficar seco.',NULL,NULL,'2023-04-14',0),(2,1,'COBERTURA PARA BOLO',NULL,'3 claras\n1 kg de açúcar (aproximadamente)\n1 e 1/2 copo de água\nopcional: anilina da cor que preferir','Leve ao fogo o açúcar e a água mexendo sempre até formar um melado bem grosso. Reserve.\nBata as claras na batedeira até endurecer. Continue batendo as claras e vá despejando aos poucos o melado até formar um creme consistente.\nSe quiser pode colocar o sabor ou anilina da cor de sua preferência.',NULL,NULL,'2023-01-14',0),(3,2,'MOUSSE DE LIMÃO',NULL,'1 lata de leite condensado\n1 lata de creme de leite\n1/2 xícara de suco de limão (esse suco é puro mesmo, sem água, é só espremer o limão)','Coloque no liquidificador o creme de leite (com soro mesmo) e o leite condensado.\n\nBata um pouco e depois vá acrescentando o suco do limão, aos poucos.\n\nEle vai ficar bem consistente, leve à geladeira.',NULL,NULL,'2023-04-14',0),(4,3,'asdf asfasf asf asfasf as','','Silvio Santos Ipsum Ma tem ou não tem o celular do milhãouamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É bom ou não éam? É por sua conta e riscoamm? Você veio da caravana de ondeammm? Vem pra lá, mah você vai pra cá. Agora vai, agora vem pra láamm. Qual é a musicamm?\r\n\r\nMa você está certo dissoam? Mah você não consegue né Moisés? Você não consegueam. Ma você, topa ou não topamm. Você veio da caravana de ondeammm? Ma tem ou não tem o celular do milhãouamm? É namoro ou amizadeemm?\r\n\r\nMa você está certo dissoam? O Raul Gil é gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm! Mah ooooee vem pra cá. Vem pra cá. Você veio da caravana de ondeammm? Valendo um milhão de reaisammm. Qual é a musicamm?\r\n\r\nÉ bom ou não éam? Você veio da caravana de ondeammm? Mah ooooee vem pra cá. Vem pra cá. Um, dois três, quatro, PIM, entendeuam? Mah roda a roduamm. É dinheiro ou não éam?\r\n\r\nMa você, topa ou não topamm. Ma vale dérreaisam? Você veio da caravana de ondeammm? Estamos em ritmo de festamm. Mah roda a roduamm. O Raul Gil é gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!','Silvio Santos Ipsum Eu não queria perguntar isso publicamente, ma vou perguntar. Carla, você tem o ensino fundamentauam? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. Ma vejam só, vejam só. É bom ou não éam? É dinheiro ou não éam? Ma não existem mulher feiam, existem mulher que não conhece os produtos Jequitiamm. É namoro ou amizadeemm?\r\n\r\nVem pra lá, mah você vai pra cá. Agora vai, agora vem pra láamm. Ma vai pra lá. Ma tem ou não tem o celular do milhãouamm? O prêmio é em barras de ouro, que vale mais que dinheiroam. É bom ou não éam? É fácil ou não éam?','Silvio Santos Ipsum Ha haeeee. Hi hi. Ma vejam só, vejam só. Eu não queria perguntar isso publicamente, ma vou perguntar. Carla, você tem o ensino fundamentauam? Ma o Silvio Santos Ipsum é muitoam interesanteam. Com ele ma você vai gerar textuans ha haae. É namoro ou amizadeemm? Valendo um milhão de reaisammm. Ma tem ou não tem o celular do milhãouamm?\r\n\r\nMa o Silvio Santos Ipsum é muitoam interesanteam. Com ele ma você vai gerar textuans ha haae. É dinheiro ou não éam? Ma tem ou não tem o celular do milhãouamm? Ma você está certo dissoam? Eu não queria perguntar isso publicamente, ma vou perguntar. Carla, você tem o ensino fundamentauam? Ma você, topa ou não topamm.\r\n\r\nMa o Silvio Santos Ipsum é muitoam interesanteam. Com ele ma você vai gerar textuans ha haae. Wellintaaammmmmmmmm. Ma vejam só, vejam só. Mah ooooee vem pra cá. Vem pra cá. É namoro ou amizadeemm? Ma você, topa ou não topamm.\r\n\r\nHa hai. Bem boladoam, bem boladoam. Bem gozadoam. Ma quem quer dinheiroam? Ma não existem mulher feiam, existem mulher que não conhece os produtos Jequitiamm. Um, dois três, quatro, PIM, entendeuam? Ma vale dérreaisam? O Raul Gil é gayam! ... Maa O Ah Ae! Ih Ih! O Raul Gil é gayamm!','https://www.youtube.com/embed/fNhbe5kauQ4','2023-04-20',0),(5,5,'as asd asd asd asd as','','asd asd asd as','asd asd asd a','a dasd asd asd','https://www.youtube.com/embed/HLVLQbzsH28','2023-04-20',0),(6,6,'goiaba','','a sdad asd asd\r\nas asd\r\nasd \r\nasd \r\nasd \r\nasd','gdfdg\r\ndg\r\ndg dg\r\ndg \r\ndg \r\n','gfgd\r\ngd\r\ndgdg\r\n\r\n\r\n\r\n','https://www.youtube.com/embed/W-GCpz4I0CM','2023-04-25',0),(7,17,'RECEITA COM VIDEO BUGADO','','a dsasd a','a sdasd ','a sdad asd','https://www.youtube.com/embed/xVeGdXg-zXc','2023-04-27',0),(8,17,'asdf asfasf asf asfasf as','','a dsasd a','a sdasd ','a sdad asd','https://www.youtube.com/embed/W-GCpz4I0CM','2023-04-27',0),(9,17,'asdf asfasf asf asfasf as','20230427162054862.jpg','a dsasd a','a sdasd ','a sdad asd','https://www.youtube.com/embed/RzFtkbqqwxU','2023-04-27',0),(10,17,' nova foto','20230427144202934.png','a dsasd a','a sdasd ','a sdad asd','https://www.youtube.com/embed/RzFtkbqqwxU','2023-04-27',0),(11,3,'goiaba af afasf asf','20230427142109963.jpg',' asdasd asd ','asd ad asd','as dasd asdasd asd asd','','2023-04-27',0);
/*!40000 ALTER TABLE `receitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'teste','teste@teste.teste','123'),(2,'JOSé DA SILVA','jose@teste.teste','*0'),(3,'JOSE 2','jose1@teste.teste','*0'),(4,'JOAQUIM 4','joaquim@teste.teste','CapmJKbWcSdQE'),(5,'JOAQUIM 5','joaquim4@teste.teste','CaDmGDZuV3S9I'),(6,'MARIA 6','maria6@teste.teste','CaqUfvna7AM.Y'),(7,'MARIA 7','maria7@teste.teste','CaOAFGHpdab8A'),(8,'MARIA 8','maria8@teste.teste','CalrckN/lc0JU'),(9,'THOMAS MELO 2','thomas.cmelo@sp.senac.br','CavOsz4vC16po'),(10,'JOÃO TESTE DA SILVA','joao@teste.teste','CavOsz4vC16po');
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

-- Dump completed on 2023-05-16 14:50:22
