-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inventariomini
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `categoria_cuenta`
--

DROP TABLE IF EXISTS `categoria_cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria_cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idU` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idU` (`idU`),
  CONSTRAINT `categoria_cuenta_ibfk_1` FOREIGN KEY (`idU`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_cuenta`
--

LOCK TABLES `categoria_cuenta` WRITE;
/*!40000 ALTER TABLE `categoria_cuenta` DISABLE KEYS */;
INSERT INTO `categoria_cuenta` VALUES (1,3,'sin categoria'),(2,3,'DESEMBOLSO');
/*!40000 ALTER TABLE `categoria_cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`),
  KEY `nombre_categoria_2` (`nombre_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (12,'bebidas'),(7,'camisas extra largas'),(4,'cemento'),(10,'frutas'),(5,'nueva'),(11,'recarga'),(6,'servicio'),(0,'sin categoria'),(8,'software');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idProveedor` int(10) NOT NULL,
  `idU` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `afecta` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `monto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fac` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nro_control` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contra_cuenta` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `cod_compa` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProveedor` (`idProveedor`),
  KEY `idU` (`idU`),
  KEY `tipo_cuenta` (`tipo_cuenta`),
  KEY `idU_2` (`idU`),
  KEY `tipo_cuenta_2` (`tipo_cuenta`),
  KEY `contra_cuenta` (`contra_cuenta`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idU`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`tipo_cuenta`) REFERENCES `cuentas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `compras_ibfk_4` FOREIGN KEY (`contra_cuenta`) REFERENCES `cuentas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
INSERT INTO `compras` VALUES (10,11,3,'2015-09-07','09-2015','6249.47','','COMPRA DE MERCANCIA','17848','00-0010098','2001','1012','A','0001'),(11,11,3,'2015-09-25','09-2015','5465.61','','COMPRA DE MERCANCIA','18152','00-010402','2001','1011','A','0001'),(12,12,3,'2015-09-14','09-2015','4849.6','','COMPRADE PINTURAS','A0616852','00-0134616','2001','1010','A','0001'),(13,13,3,'2015-09-28','09-2015','18995.20','','BROCHAS','7303','00-007963','2003','1011','A','0001'),(14,14,3,'2015-09-17','09-2015','2000','','HONORARIOS CONTABLES','218','00-000218','1016','1012','A','0001'),(15,13,3,'2015-09-11','09-2015','14728','','COMPRA DE MERCANCIA','7097','0-007754','2003','1010','A','0001'),(16,10,3,'2015-11-06','11-2015','100','','APERITIVO','100','100','1016','1011','A','0001');
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL DEFAULT '1',
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `usuario` (`usuario`),
  KEY `usuario_2` (`usuario`),
  KEY `categoria` (`categoria`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cuentas_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categoria_cuenta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cuentas_ibfk_3` FOREIGN KEY (`tipo`) REFERENCES `tipo_cuenta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuentas`
--

LOCK TABLES `cuentas` WRITE;
/*!40000 ALTER TABLE `cuentas` DISABLE KEYS */;
INSERT INTO `cuentas` VALUES (7,'1012','CAJA CHICA','A','mari',2,1),(11,'1010','CAJA','A','mari',2,1),(12,'1011','BANCOS','A','mari',2,1),(14,'1013','CUENTAS POR COBRAR','A','mari',1,1),(15,'1014','MOBILIARIO Y EQUIPO','A','mari',1,1),(16,'1015','CLIENTES - DEUDORES','A','mari',1,1),(17,'1016','GASTOS GENERALES','A','mari',1,1),(18,'2001','MERCANCIA','A','mari',1,1),(19,'2002','CUENTAS POR PAGAR','A','mari',1,3),(20,'2003','MANTENIMIENTO Y REPARACION','A','mari',1,1),(21,'2004','IVA POR PAGAR','A','mari',1,3);
/*!40000 ALTER TABLE `cuentas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `usuario` (`usuario`),
  CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (7,'001','Company, C.A.','J-40190154-8','Maracay estado Aragua','mari',''),(9,'0001','REPUESTOS MOTO CARS, SAN JOSE C.A.','J-400194717','BARRIO LOURDES CALLE ALAS CASA #1, MARACAY EDO. ARAGUA','mari','');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `compra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `venta` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `exento` int(1) NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `cantidad` int(7) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'frut011','melocoton','10','435.30','525.10',0,'A',20),(3,'frut015','Patilla criolla','10','400.00','561.22',0,'A',20),(4,'frut010','aguacate','10','105.50','150.22',0,'A',300),(5,'frut001','mango','10','100.00','120.00',0,'A',100),(6,'frut005','melon','10','100.00','140',0,'A',5),(7,'frut003','guallaba','10','390','420',0,'A',20),(8,'frut002','Patilla Grande','10','400.00','561.23',0,'A',20),(9,'frut012','mandarina','10','40.00','52.25',0,'A',70),(10,'501','tamarindo ok','5','910.00','1200.00',0,'A',20),(11,'2020','recarga de tonner','0','3000','4500',0,'A',20);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `razon` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (2,'inversiones','J-40190154-9','dirección de muestra, calle la cuadradita','0243-2713131','A','010001','0000-00-00'),(3,'interiores y fachadas c.a.','J-12345678-9','Maracay Edo Aragua','0243-2713140','A','123132','0000-00-00'),(4,'ferreteria El Martillo','j404040401','el valle, santa rita, maracay estado aragua','','A','3010','0000-00-00'),(5,'nuevo proveedor c.a.','J-123001003-2','a','','A','1','2015-10-12'),(6,'otro mas','J-123001003-9','aragua','','A','124124','2015-10-29'),(7,'agua pura c.a.','J-123001003-0','maracay','','A','12','2015-10-29'),(8,'comidas c.a.','J-123001003-8','maracay','','A','4040','2015-10-29'),(9,'calletas Dulces','J-123001003-1','Maracay','','A','2020','2015-10-29'),(10,'galletitas c.a.','J-123001003-3','maracay','','A','7471','2015-10-29'),(11,'DALMO BOGIANI','V-072529380','MARACAY EDO ARAGUA','','A','3030','2015-11-03'),(12,'DISTRIBUIDORA PRIME, C.A.','J-30294311-6','MARACAY, EDO ARAGUA.','','A','3031','2015-11-03'),(13,'INVERSIONES BRUNO, C.A.','J-403468052','MARACAY EDO ARAGUA','','A','3032','2015-11-03'),(14,'MARICARMEN OCHOA','V-19277382-9','MARACAY EDO. ARAGUA','','A','3033','2015-11-03');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cuenta`
--

DROP TABLE IF EXISTS `tipo_cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `aumenta` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `disminuye` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cuenta`
--

LOCK TABLES `tipo_cuenta` WRITE;
/*!40000 ALTER TABLE `tipo_cuenta` DISABLE KEYS */;
INSERT INTO `tipo_cuenta` VALUES (1,'ACTIVO','D','H'),(2,'GANANCIA','H','D'),(3,'PASIVO','H','D'),(4,'PERDIDA','H','D');
/*!40000 ALTER TABLE `tipo_cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'julio899','51c30cf5b566235f70673a8092853fa4b0bb60e4','Julio Vinachi','A'),(3,'mari','51c30cf5b566235f70673a8092853fa4b0bb60e4','Maricarmen Ochoa','C');
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

-- Dump completed on 2016-03-03 14:09:08
