-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-05-2015 a las 20:17:13
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `InventarioMini`
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
