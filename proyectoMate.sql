-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2016 at 05:17 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proyectoMate`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `estadoCivil` varchar(15) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `cantHijos` int(2) DEFAULT NULL,
  `fACargo` int(3) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `nro` varchar(5) DEFAULT NULL,
  `piso` varchar(5) DEFAULT NULL,
  `dpto` varchar(5) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `barrioPartido` varchar(50) DEFAULT NULL,
  `cp` varchar(8) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefonoAlternativo` varchar(20) DEFAULT NULL,
  `nombreTelAlternativo` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tiutloAcademico` varchar(100) DEFAULT NULL,
  `anioEgresoAca` int(4) DEFAULT NULL,
  `escuela` varchar(100) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `otrosEstudios` varchar(100) DEFAULT NULL,
  `insitutcion` varchar(100) DEFAULT NULL,
  `anioEgresoInsti` int(4) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `horarioHabitual` varchar(10) DEFAULT NULL,
  `obraSocial` tinyint(1) DEFAULT NULL,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `direcNormalizada` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aspirantes`
--

CREATE TABLE IF NOT EXISTS `aspirantes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `estadoCivil` varchar(15) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `cantHijos` int(2) DEFAULT NULL,
  `fACargo` int(3) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `nro` varchar(5) DEFAULT NULL,
  `piso` varchar(5) DEFAULT NULL,
  `dpto` varchar(5) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `barrioPartido` varchar(50) DEFAULT NULL,
  `cp` varchar(8) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefonoAlternativo` varchar(20) DEFAULT NULL,
  `nombreTelAlternativo` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tiutloAcademico` varchar(100) DEFAULT NULL,
  `anioEgresoAca` int(4) DEFAULT NULL,
  `escuela` varchar(100) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `otrosEstudios` varchar(100) DEFAULT NULL,
  `insitutcion` varchar(100) DEFAULT NULL,
  `anioEgresoInsti` int(4) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `horarioHabitual` varchar(10) DEFAULT NULL,
  `obraSocial` tinyint(1) DEFAULT NULL,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `direcNormalizada` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aspirantes`
--

INSERT INTO `aspirantes` (`id`, `apellido`, `nombre`, `dni`, `estadoCivil`, `fechaNacimiento`, `lugar`, `cantHijos`, `fACargo`, `domicilio`, `nro`, `piso`, `dpto`, `localidad`, `barrioPartido`, `cp`, `telefono`, `telefonoAlternativo`, `nombreTelAlternativo`, `email`, `tiutloAcademico`, `anioEgresoAca`, `escuela`, `distrito`, `otrosEstudios`, `insitutcion`, `anioEgresoInsti`, `trabaja`, `actividad`, `horarioHabitual`, `obraSocial`, `latitud`, `longitud`, `direcNormalizada`) VALUES
(1, 'Sanchez', 'Juan', '35800453', 'Soltero', '0000-00-00', 'Morón', 0, 0, 'Pedro Lacoste', '385', '-', 'B', 'Merlo', 'Merlo', '1722', '0111559142845', '02204863303', 'Padre', 'jenriquesanchez@hotmail.com.ar', 'Bachiller HUSOC', 2008, 'E.M.N. 9', 'Merlo', 'Programadro Básico', 'E.M.N. 9', 2008, 1, 'Analista QA', '9 a 18 hs.', 0, NULL, NULL, NULL),
(2, 'Sanchez', 'Juan', '35800453', 'Soltero', '0000-00-00', 'Morón', 0, 0, 'Pedro Lacoste', '385', '-', 'B', 'Merlo', 'Merlo', '1722', '0111559142845', '02204863303', 'Padre', 'jenriquesanchez@hotmail.com.ar', 'Bachiller HUSOC', 2008, 'E.M.N. 9', 'Merlo', 'Programadro Básico', 'E.M.N. 9', 2008, 1, 'Analista QA', '9 a 18 hs.', 0, NULL, NULL, NULL),
(3, 'Sanchez', 'Juan', '35800453', 'Soltero', '0000-00-00', 'Morón', 0, 0, 'Pedro Lacoste', '385', '-', 'B', 'Merlo', 'Merlo', '1722', '0111559142845', '02204863303', 'Padre', 'jenriquesanchez@hotmail.com.ar', 'Bachiller HUSOC', 2008, 'E.M.N. 9', 'Merlo', 'Programadro Básico', 'E.M.N. 9', 2008, 1, 'Analista QA', '9 a 18 hs.', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preinscripciones`
--

CREATE TABLE IF NOT EXISTS `preinscripciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `estadoCivil` varchar(15) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `cantHijos` int(2) DEFAULT NULL,
  `fACargo` int(3) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `nro` varchar(5) DEFAULT NULL,
  `piso` varchar(5) DEFAULT NULL,
  `dpto` varchar(5) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `barrioPartido` varchar(50) DEFAULT NULL,
  `cp` varchar(8) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefonoAlternativo` varchar(20) DEFAULT NULL,
  `nombreTelAlternativo` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tiutloAcademico` varchar(100) DEFAULT NULL,
  `anioEgresoAca` int(4) DEFAULT NULL,
  `escuela` varchar(100) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `otrosEstudios` varchar(100) DEFAULT NULL,
  `insitutcion` varchar(100) DEFAULT NULL,
  `anioEgresoInsti` int(4) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `horarioHabitual` varchar(10) DEFAULT NULL,
  `obraSocial` tinyint(1) DEFAULT NULL,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `direcNormalizada` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `apellido`, `nombre`, `dni`, `estadoCivil`, `fNacimiento`, `lugarNacimiento`, `cantHijos`, `FamACargo`, `domicilio`, `numDomcilio`, `pisoDomicilio`, `dptoDomicilio`, `localidad`, `partidp`, `codigoPostal`, `tel`, `telAlternativo`, `perteneceA`, `email`, `titulo`, `anioEgreso`, `escuela`, `distrito`, `otrosEstudios`, `institucion`, `otrosEgresos`, `trabaja`, `actividad`, `horarioHabitual`, `obraSocial`, `latitud`, `longitud`, `direccionNormalizada`, `estado`, `password`, `id_rol`) VALUES
(1, 'Vega', 'Luis', 33667241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15486532, NULL, NULL, 'asd@asd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, 'Sanchez', 'Juan', 35800453, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
