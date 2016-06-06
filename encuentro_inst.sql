-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 05-06-2016 a las 20:50:29
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `encuentro_inst`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `datos`
-- 

CREATE TABLE `datos` (
  `Nombre` varchar(50) character set utf8 collate utf8_spanish_ci default NULL,
  `Apellido` varchar(50) character set utf8 collate utf8_spanish_ci default NULL,
  `Instituto` varchar(50) character set utf8 collate utf8_spanish_ci default NULL,
  `Cargo_inst` varchar(50) character set utf8 collate utf8_spanish_ci default NULL,
  `Mail` varchar(50) character set utf8 collate utf8_spanish_ci default NULL,
  `Telefono` int(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `datos`
-- 

INSERT INTO `datos` VALUES ('florencia', 'gerea', 'isft 177', 'alumna', 'flormariaa22@gmail.com', 220482857);
