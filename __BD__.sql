-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2015 a las 19:45:05
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventariomini`
--
CREATE DATABASE IF NOT EXISTS `inventariomini` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `inventariomini`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`),
  KEY `nombre_categoria_2` (`nombre_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_categoria`) VALUES
(12, 'bebidas'),
(7, 'camisas extra largas'),
(4, 'cemento'),
(10, 'frutas'),
(5, 'nueva'),
(11, 'recarga'),
(6, 'servicio'),
(0, 'sin categoria'),
(8, 'software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
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
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `cod_compa` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProveedor` (`idProveedor`),
  KEY `idU` (`idU`),
  KEY `tipo_cuenta` (`tipo_cuenta`),
  KEY `idU_2` (`idU`),
  KEY `tipo_cuenta_2` (`tipo_cuenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `idProveedor`, `idU`, `fecha`, `afecta`, `monto`, `tipo`, `descripcion`, `nro_fac`, `nro_control`, `tipo_cuenta`, `status`, `cod_compa`) VALUES
(4, 9, 3, '2015-10-29', '11-2015', '3450', '', 'Aperitivo', '123450', '123450', '3030', 'A', ''),
(5, 10, 3, '2015-10-29', '11-2015', '3850', '', 'Regalo', '1212', '1212', '3030', 'A', ''),
(6, 7, 3, '2015-10-10', '10-2015', '5000', '', '5 bidones de Agua', '3030', '3030', '3030', 'A', ''),
(7, 10, 3, '2015-10-16', '10-2015', '1500', '', 'compartir de trabajadores', '2014', '00-0002014', '5050', 'A', ''),
(8, 7, 3, '2015-10-30', '11-2015', '2500', '', 'Agua potable', '3434', '00-003434', '123123', 'A', ''),
(9, 4, 3, '2015-10-31', '10-2015', '1500', '', '1 caja de clavos', '12451', '12451', '5050', 'A', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE IF NOT EXISTS `cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `naturaleza` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `usuario` (`usuario`),
  KEY `usuario_2` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `codigo`, `nombre`, `naturaleza`, `status`, `usuario`) VALUES
(5, '10010', 'Gastos Administrativos', 'D', 'A', 'mari'),
(6, '2020', 'Nomina', 'D', 'A', 'mari'),
(7, '3030', 'Caja chica', 'H', 'A', 'mari'),
(8, '123123', 'gastos de servicios', 'D', 'A', 'mari'),
(9, '1414', 'gastos de oficina', 'D', 'A', 'mari'),
(10, '5050', 'Gastos Generales', 'D', 'A', 'mari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `codigo`, `razon`, `rif`, `direccion`, `usuario`, `status`) VALUES
(7, '001', 'Company, C.A.', 'J-40190154-8', 'Maracay estado Aragua', 'mari', ''),
(8, '100', 'K-TUX', 'J-40190154-9', 'Maracay Edo. Aragua', 'mari', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `categoria`, `compra`, `venta`, `exento`, `status`, `cantidad`) VALUES
(1, 'frut011', 'melocoton', '10', '435.30', '525.10', 0, 'A', 20),
(3, 'frut015', 'Patilla criolla', '10', '400.00', '561.22', 0, 'A', 20),
(4, 'frut010', 'aguacate', '10', '105.50', '150.22', 0, 'A', 300),
(5, 'frut001', 'mango', '10', '100.00', '120.00', 0, 'A', 100),
(6, 'frut005', 'melon', '10', '100.00', '140', 0, 'A', 5),
(7, 'frut003', 'guallaba', '10', '390', '420', 0, 'A', 20),
(8, 'frut002', 'Patilla Grande', '10', '400.00', '561.23', 0, 'A', 20),
(9, 'frut012', 'mandarina', '10', '40.00', '52.25', 0, 'A', 70),
(10, '501', 'tamarindo ok', '5', '10.00', '15.00', 0, 'A', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `razon`, `rif`, `direccion`, `telefono`, `status`, `codigo`, `fecha`) VALUES
(2, 'inversiones', 'J-40190154-9', 'dirección de muestra, calle la cuadradita', '0243-2713131', 'A', '010001', '0000-00-00'),
(3, 'interiores y fachadas c.a.', 'J-12345678-9', 'Maracay Edo Aragua', '0243-2713140', 'A', '123132', '0000-00-00'),
(4, 'ferreteria El Martillo', 'j404040401', 'el valle, santa rita, maracay estado aragua', '', 'A', '3010', '0000-00-00'),
(5, 'nuevo proveedor c.a.', 'J-123001003-2', 'a', '', 'A', '1', '2015-10-12'),
(6, 'otro mas', 'J-123001003-9', 'aragua', '', 'A', '124124', '2015-10-29'),
(7, 'agua pura c.a.', 'J-123001003-0', 'maracay', '', 'A', '12', '2015-10-29'),
(8, 'comidas c.a.', 'J-123001003-8', 'maracay', '', 'A', '4040', '2015-10-29'),
(9, 'calletas Dulces', 'J-123001003-1', 'Maracay', '', 'A', '2020', '2015-10-29'),
(10, 'galletitas c.a.', 'J-123001003-3', 'maracay', '', 'A', '7471', '2015-10-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre_completo`, `tipo`) VALUES
(1, 'julio899', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Julio Vinachi', 'A'),
(3, 'mari', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Maricarmen Ochoa', 'C');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idU`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`tipo_cuenta`) REFERENCES `cuentas` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `enlace_a_usuarios` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
