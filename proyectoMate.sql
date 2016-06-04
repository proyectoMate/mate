-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2016 a las 03:57:01
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectoMate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dni` int(10) DEFAULT NULL,
  `estadoCivil` int(50) DEFAULT NULL,
  `fNacimiento` date DEFAULT NULL,
  `lugarNacimiento` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantHijos` int(3) DEFAULT NULL,
  `FamACargo` int(3) DEFAULT NULL,
  `domicilio` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numDomcilio` int(5) DEFAULT NULL,
  `pisoDomicilio` int(5) DEFAULT NULL,
  `dptoDomicilio` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `localidad` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `partidp` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigoPostal` int(5) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `telAlternativo` int(20) DEFAULT NULL,
  `perteneceA` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anioEgreso` int(4) DEFAULT NULL,
  `escuela` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `distrito` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `otrosEstudios` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `institucion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `otrosEgresos` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `trabaja` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horarioHabitual` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obraSocial` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `latitud` int(11) DEFAULT NULL,
  `longitud` int(11) DEFAULT NULL,
  `direccionNormalizada` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rol` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `apellido`, `nombre`, `dni`, `estadoCivil`, `fNacimiento`, `lugarNacimiento`, `cantHijos`, `FamACargo`, `domicilio`, `numDomcilio`, `pisoDomicilio`, `dptoDomicilio`, `localidad`, `partidp`, `codigoPostal`, `tel`, `telAlternativo`, `perteneceA`, `email`, `titulo`, `anioEgreso`, `escuela`, `distrito`, `otrosEstudios`, `institucion`, `otrosEgresos`, `trabaja`, `actividad`, `horarioHabitual`, `obraSocial`, `latitud`, `longitud`, `direccionNormalizada`, `estado`, `password`, `id_rol`) VALUES
(1, 'Vega', 'Luis', 33667241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15486532, NULL, NULL, 'asd@asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
