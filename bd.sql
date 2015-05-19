-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-05-2015 a las 21:21:55
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `inventariomini`
-- 
CREATE DATABASE `inventariomini` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `inventariomini`;

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL auto_increment,
  `nombre_categoria` varchar(50) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nombre_categoria` (`nombre_categoria`),
  KEY `nombre_categoria_2` (`nombre_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (4, 'sin categoria');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `id` int(5) NOT NULL auto_increment,
  `codigo` varchar(25) collate utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) collate utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) collate utf8_spanish_ci NOT NULL default 'sin categoria',
  `compra` float NOT NULL,
  `venta` float NOT NULL,
  `exento` int(1) NOT NULL,
  `status` varchar(1) collate utf8_spanish_ci NOT NULL default 'A',
  `cantidad` int(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(7) NOT NULL auto_increment,
  `usuario` varchar(20) collate utf8_spanish_ci NOT NULL,
  `clave` varchar(50) collate utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) collate utf8_spanish_ci NOT NULL,
  `tipo` varchar(1) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 'julio899', '51c30cf5b566235f70673a8092853fa4b0bb60e4', 'Julio Vinachi', 'A');

-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `productos`
-- 
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`nombre_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
