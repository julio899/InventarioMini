-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2015 a las 14:53:17
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
`id` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
`id` int(10) NOT NULL,
  `idProveedor` int(10) NOT NULL,
  `idU` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `productos` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `nro_fac` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `compras`
--

TRUNCATE TABLE `compras`;
--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `idProveedor`, `idU`, `fecha`, `monto`, `tipo`, `productos`, `nro_fac`, `tipo_cuenta`, `status`) VALUES
(3, 2, 0, '2015-06-25 02:06:20', '2000', 'G', '{"motivo":"Gastos"}', '', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE IF NOT EXISTS `cuentas` (
`id` int(11) NOT NULL,
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `naturaleza` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `cuentas`
--

TRUNCATE TABLE `cuentas`;
--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `codigo`, `nombre`, `naturaleza`, `status`, `usuario`) VALUES
(5, '10010', 'Gastos Administrativos', 'D', 'A', 'mari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
`id` int(10) NOT NULL,
  `codigo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `razon` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `empresas`
--

TRUNCATE TABLE `empresas`;
--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `codigo`, `razon`, `rif`, `direccion`, `usuario`) VALUES
(7, '001', 'Company, C.A.', 'J-40190154-8', 'Maracay estado Aragua', 'mari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
`id` int(5) NOT NULL,
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `compra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `venta` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `exento` int(1) NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `cantidad` int(7) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `productos`
--

TRUNCATE TABLE `productos`;
--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `categoria`, `compra`, `venta`, `exento`, `status`, `cantidad`) VALUES
(1, 'frut011', 'melocoton', '10', '435.30', '525.10', 0, 'A', 20),
(3, 'frut002', 'Patilla Grande', '10', '400.00', '561.22', 0, 'A', 20),
(4, 'frut010', 'aguacate', '10', '105.50', '150.22', 0, 'A', 300),
(5, 'frut001', 'mango', '10', '100.00', '120.00', 0, 'A', 100),
(6, 'frut005', 'melon', '10', '100.00', '140', 0, 'A', 5),
(7, 'frut003', 'guallaba', '10', '390', '420', 0, 'A', 20),
(8, 'frut002', 'Patilla Grande', '10', '400.00', '561.23', 0, 'A', 20),
(9, 'frut012', 'mandarina', '10', '40.00', '52.25', 0, 'A', 70),
(10, '501', 'tamarindo', '5', '10.00', '15.00', 0, 'A', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
`id` int(10) NOT NULL,
  `razon` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'A',
  `codigo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(7) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `nombre_completo`, `tipo`) VALUES
(1, 'julio899', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Julio Vinachi', 'A'),
(3, 'mari', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Maricarmen Ochoa', 'C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre_categoria` (`nombre_categoria`), ADD KEY `nombre_categoria_2` (`nombre_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
 ADD PRIMARY KEY (`id`), ADD KEY `idProveedor` (`idProveedor`), ADD KEY `idU` (`idU`), ADD KEY `tipo_cuenta` (`tipo_cuenta`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre` (`nombre`), ADD UNIQUE KEY `codigo` (`codigo`), ADD KEY `usuario` (`usuario`), ADD KEY `usuario_2` (`usuario`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `codigo` (`codigo`), ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
