-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 11-06-2015 a las 21:02:04
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (7, 'camisas extra largas');
INSERT INTO `categorias` VALUES (4, 'cemento');
INSERT INTO `categorias` VALUES (10, 'frutas');
INSERT INTO `categorias` VALUES (5, 'nueva');
INSERT INTO `categorias` VALUES (11, 'recarga');
INSERT INTO `categorias` VALUES (6, 'servicio');
INSERT INTO `categorias` VALUES (0, 'sin categoria');
INSERT INTO `categorias` VALUES (8, 'software');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `id` int(5) NOT NULL auto_increment,
  `codigo` varchar(25) collate utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) collate utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) collate utf8_spanish_ci NOT NULL default '0',
  `compra` float NOT NULL,
  `venta` float NOT NULL,
  `exento` int(1) NOT NULL,
  `status` varchar(1) collate utf8_spanish_ci NOT NULL default 'A',
  `cantidad` int(7) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (1, '3', 'camisa LG', '0', 80, 100, 0, 'A', 0);
INSERT INTO `productos` VALUES (2, 'frut001', 'mango', '10', 100, 120, 0, 'A', 100);
INSERT INTO `productos` VALUES (3, '3030', 'zapato', '4', 4500, 5600, 0, 'A', 20);
INSERT INTO `productos` VALUES (4, '10', 'aguacate', '4', 60, 120, 0, 'A', 300);
INSERT INTO `productos` VALUES (5, '140', 'Recargas', '11', 800, 1000, 0, 'A', 800);
INSERT INTO `productos` VALUES (6, '30', 'patilla', '10', 100, 130, 0, 'A', 5);

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
