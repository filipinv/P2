-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cineworld
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinho` (
  `sessionID` varchar(300) NOT NULL,
  `codigoCliente` int(11) NOT NULL,
  `codigoProduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorUnitario` decimal(6,2) NOT NULL,
  `valorTotal` decimal(7,2) NOT NULL,
  PRIMARY KEY (`sessionID`,`codigoCliente`,`codigoProduto`),
  KEY `codigoCliente` (`codigoCliente`),
  KEY `codigoProduto` (`codigoProduto`),
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`codigoCliente`) REFERENCES `cliente` (`codigo`) ON DELETE CASCADE,
  CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`codigoProduto`) REFERENCES `produto` (`codigo`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

LOCK TABLES `carrinho` WRITE;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `un_email_const` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `descritivo` varchar(1000) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (11,'Duro de Matar','Título do produto: Duro de Matar | Diretor: John McTiernan | Formato: DVD | Resolução: Widescreen | Discos: 1 | Sinopse: O policial de Nova York John McClane está visitando sua família no Natal. Ele participa de uma confraternização de fim de ano na sede da empresa japonesa em que a esposa trabalha. A festa é interrompida por terroristas que invadem o edifício de luxo. McClane não demora a perceber que não há ninguém para salvá-los, a não ser ele próprio.',24.99,1,'../../../assets/images/products/filmes/11.jpg'),(12,'Piratas Do Caribe - A Maldição Do Pérola Negra','Título do produto: Piratas Do Caribe - A Maldição Do Pérola Negra | Diretor: Gore Verbinski | Formato: DVD | Resolução: DVD | Discos: 1 | Marca: Disney | Sinopse: O pirata Jack Sparrow tem seu navio saqueado e roubado pelo capitão Barbossa e sua tripulação. Com o navio de Sparrow, Barbossa invade a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar sua embarcação, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direção a misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldição que os assola.',89.99,1,'../../../assets/images/products/filmes/12.jpg'),(13,'Harry Potter e o Prisioneiro de Askaban','Título do produto: Harry Potter e o Prisioneiro de Askaban | Diretor: Alfonso Cuarón | Formato: DVD | Discos: 2 | Sinopse: O terceiro ano de Harry Potter em Hogwarts começa mal quando ele descobre que o assassino Sirius Black escapou da prisão de Azkaban e está empenhado em matá-lo. Enquanto o gato de Hermione atormenta o rato doente de Ron, dementadores são enviados para proteger a escola de Sirius Black. Um professor misterioso ajuda Harry a aprender a se defender.',35.00,1,'../../../assets/images/products/filmes/13.jpg'),(21,'It - A Coisa','Título do produto: It - A Coisa | Autor: Stephen King | Idioma: Português | Editora: Suma | Formato: Papel | Marca: Suma | Modelo: 9788560280940',119.99,2,'../../../assets/images/products/livros/21.jpg'),(22,'A Culpa é das Estrelas','Título do produto: A Culpa é das Estrelas | Autor: John Green | Idioma: Português | Editora: Intrinseca | Formato: Papel | Marca: Intrinseca | Modelo: 9788580572261',29.45,2,'../../../assets/images/products/livros/22.jpg'),(23,'Harry Potter e o Cálice de Fogo','Título do produto: Harry Potter e o Cálice de Fogo | Autor: J.K. Rowling | Idioma: Português | Editora: Rocco | Formato: Papel | Marca: Rocco | Modelo: 9788532512529',53.90,2,'../../../assets/images/products/livros/23.jpg'),(31,'Supernatural (15 temporada)','Título do produto: Supernatural (15 temporada) | Autor: Robert Singer | Temporadas: 1 | Formato: MKV | Sinopse: A épica jornada dos irmãos Winchester finalmente chega ao fim na última temporada de Supernatural. Sam (Jared Padalecki) e Dean (Jensen Ackles) lutaram com demônios e anjos, criaturas místicas e monstros, numa aparentemente inacabável batalha para salvar o mundo. Mas agora, eles terão que enfrentar o próprio Deus (Rob Benedict).',34.80,3,'../../../assets/images/products/séries/31.jpg'),(32,'Game of Thrones (8 temporada)','Título do produto: Game of Thrones (8 temporada) | Diretor: David Benioff, D.B. Weiss, David Nutter e Miguel Sapochnik | Temporadas: 1 | Formato: DVD | Marca: HBO | Sinopse: Jon segue para o castelo onde tenta matar o dragão de gelo, mas os mortos seguem invadindo tudo. Jaime, Brienne, Podrick, Clegane e Sam estão encurralados pelo exército. As pessoas que se esconderam nas criptas (Varys, Tyrion, Sansa, Missandei) estão tentando sobreviver aos mortos que levantaram lá também.',64.99,3,'../../../assets/images/products/séries/32.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-13 18:31:09
