-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2015 a las 15:01:50
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.11

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

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`),
  KEY `nombre_categoria_2` (`nombre_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Truncar tablas antes de insertar `categorias`
--

TRUNCATE TABLE `categorias`;
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

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idProveedor` int(10) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `productos` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fac` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProveedor` (`idProveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Truncar tablas antes de insertar `compras`
--

TRUNCATE TABLE `compras`;
--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `idProveedor`, `fecha`, `monto`, `tipo`, `productos`, `nro_fac`) VALUES
(3, 2, '2015-06-25 02:06:20', '2000', 'G', '{"motivo":"Gastos"}', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

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
-- Truncar tablas antes de insertar `productos`
--

TRUNCATE TABLE `productos`;
--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `categoria`, `compra`, `venta`, `exento`, `status`, `cantidad`) VALUES
(1, 'frut011', 'melocoton', '10', '435.30', '525.10', 0, 'A', 20),
(3, 'frut002', 'Patilla Grande', '10', '400.00', '561.25', 0, 'A', 20),
(4, 'frut010', 'aguacate', '10', '105.50', '150.22', 0, 'A', 300),
(5, 'frut001', 'mango', '10', '100.00', '120.00', 0, 'A', 100),
(6, 'frut005', 'melon', '10', '100.00', '140', 0, 'A', 5),
(7, 'frut003', 'guallaba', '10', '390', '420', 0, 'A', 20),
(8, '201', 'Nombre de Dominio BI-Anual', '6', '15000.5', '17450.34', 0, 'A', 50),
(9, 'frut012', 'mandarina', '10', '40.00', '52.25', 0, 'A', 70),
(10, '501', 'tamarindo', '5', '10.00', '15.00', 0, 'A', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Truncar tablas antes de insertar `proveedores`
--

TRUNCATE TABLE `proveedores`;
--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `razon`, `rif`, `direccion`, `telefono`, `status`, `codigo`, `fecha`) VALUES
(2, 'inversiones', 'J-40190154-9', 'direccion', '0243-2713131', 'A', '010001', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre_completo`, `tipo`) VALUES
(1, 'julio899', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Julio Vinachi', 'A');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;