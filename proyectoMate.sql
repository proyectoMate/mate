-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2016 a las 21:47:33
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=104 ;

--
-- Volcado de datos para la tabla `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'fotografia', 'clientes', 'id', '', '', '_', ''),
(2, 'fotografia', 'clientes', 'apellido', '', '', '_', ''),
(3, 'fotografia', 'clientes', 'nombre', '', '', '_', ''),
(4, 'fotografia', 'clientes', 'dni', '', '', '_', ''),
(5, 'fotografia', 'clientes', 'domicilio', '', '', '_', ''),
(6, 'fotografia', 'clientes', 'localidad', '', '', '_', ''),
(7, 'fotografia', 'clientes', 'telefono', '', '', '_', ''),
(8, 'fotografia', 'clientes', 'email', '', '', '_', ''),
(9, 'fotografia', 'colegios', 'id', '', '', '_', ''),
(10, 'fotografia', 'colegios', 'nombre', '', '', '_', ''),
(11, 'fotografia', 'colegios', 'domicilio', '', '', '_', ''),
(12, 'fotografia', 'colegios', 'localidad', '', '', '_', ''),
(13, 'fotografia', 'colegios', 'telefono', '', '', '_', ''),
(14, 'api', 'direcciones', 'domi', '', '', '_', ''),
(15, 'api', 'direcciones', 'titular', '', '', '_', ''),
(16, 'api', 'direcciones', 'domicilio', '', '', '_', ''),
(17, 'api', 'direcciones', 'cp', '', '', '_', ''),
(18, 'api', 'direcciones', 'lo', '', '', '_', ''),
(19, 'api', 'direcciones', 'localidad', '', '', '_', ''),
(21, 'api', 'direcciones', 'latitud', '', '', '_', ''),
(22, 'api', 'direcciones', 'longitud', '', '', '_', ''),
(23, 'api', 'direcciones', 'direcNormalizada', '', '', '_', ''),
(24, 'api', 'direcciones', 'dominio', '', '', '_', ''),
(25, 'salguero', 'clientes', 'id', '', '', '_', ''),
(26, 'salguero', 'clientes', 'rsocial', '', '', '_', ''),
(27, 'salguero', 'clientes', 'apellido', '', '', '_', ''),
(28, 'salguero', 'clientes', 'nombre', '', '', '_', ''),
(29, 'salguero', 'clientes', 'cuit', '', '', '_', ''),
(30, 'salguero', 'clientes', 'correo1', '', '', '_', ''),
(31, 'salguero', 'clientes', 'correo2', '', '', '_', ''),
(32, 'salguero', 'clientes', 'sitioweb', '', '', '_', ''),
(33, 'salguero', 'clientes', 'direccion', '', '', '_', ''),
(34, 'salguero', 'clientes', 'localidad', '', '', '_', ''),
(35, 'salguero', 'clientes', 'codpostal', '', '', '_', ''),
(36, 'salguero', 'clientes', 'partido', '', '', '_', ''),
(37, 'salguero', 'clientes', 'provincai', '', '', '_', ''),
(38, 'salguero', 'clientes', 'provincia', '', '', '_', ''),
(39, 'salguero', 'clientes', 'dni', '', '', '_', ''),
(40, 'salguero', 'clientes', 'estado', '', '', '_', ''),
(41, 'salguero', 'clientes', 'tel1', '', '', '_', ''),
(42, 'salguero', 'clientes', 'tel2', '', '', '_', ''),
(43, 'salguero', 'productos', 'codigo', '', '', '_', ''),
(44, 'api', 'marcas', 'id', '', '', '_', ''),
(45, 'api', 'marcas', 'nombre', '', '', '_', ''),
(71, 'proyectoMate2', 'perfiles', 'perfil', '', '', '_', ''),
(70, 'proyectoMate2', 'perfiles', 'id', '', '', '_', ''),
(53, 'inseguridad', 'dependencias', 'id', '', '', '_', ''),
(54, 'inseguridad', 'dependencias', 'dependencia', '', '', '_', ''),
(55, 'inseguridad', 'dependencias', 'localidad', '', '', '_', ''),
(56, 'inseguridad', 'dependencias', 'partido', '', '', '_', ''),
(57, 'inseguridad', 'dependencias', 'direccion', '', '', '_', ''),
(58, 'inseguridad', 'dependencias', 'tel1', '', '', '_', ''),
(59, 'inseguridad', 'dependencias', 'tel2', '', '', '_', ''),
(60, 'inseguridad', 'partidos', 'cp', '', '', '_', ''),
(61, 'inseguridad', 'partidos', 'partido', '', '', '_', ''),
(62, 'inseguridad', 'localidades', 'id', '', '', '_', ''),
(63, 'inseguridad', 'localidades', 'cabecera', '', '', '_', ''),
(64, 'inseguridad', 'localidades', 'id_partido', '', '', '_', ''),
(65, 'inseguridad', 'localidades', 'localidad', '', '', '_', ''),
(66, 'inseguridad', 'localidades', 'cp', '', '', '_', ''),
(67, 'inseguridad', 'tipos_denuncias', 'id', '', '', '_', ''),
(68, 'inseguridad', 'tipos_denuncias', 'descripcion', '', '', '_', ''),
(69, 'inseguridad', 'tipos_denuncias', 'esatdo', '', '', '_', ''),
(72, 'proyectoMate2', 'perfiles', 'nombre', '', '', '_', ''),
(73, 'proyectoMate2', 'perfiles', 'descripciÃ³n', '', '', '_', ''),
(74, 'proyectoMate2', 'perfiles', 'descripcion', '', '', '_', ''),
(75, 'proyectoMate2', 'perfiles', 'estado', '', '', '_', ''),
(76, 'proyectoMate2', 'menus', 'id', '', '', '_', ''),
(77, 'proyectoMate2', 'menus', 'nombreMenu', '', '', '_', ''),
(78, 'proyectoMate2', 'menus', 'linkMenu', '', '', '_', ''),
(79, 'proyectoMate2', 'menus', 'descMenu', '', '', '_', ''),
(80, 'proyectoMate2', 'subMenus', 'id', '', '', '_', ''),
(81, 'proyectoMate2', 'subMenus', 'idMenu', '', '', '_', ''),
(82, 'proyectoMate2', 'subMenus', 'nombreSubMenu', '', '', '_', ''),
(83, 'proyectoMate2', 'subMenus', 'linkSubMenu', '', '', '_', ''),
(84, 'proyectoMate2', 'subMenus', 'descSubMenu', '', '', '_', ''),
(85, 'proyectoMate2', 'usuariosPerfiles', 'id', '', '', '_', ''),
(86, 'proyectoMate2', 'usuariosPerfiles', 'id_usuario', '', '', '_', ''),
(87, 'proyectoMate2', 'usuariosPerfiles', 'id_perfil', '', '', '_', ''),
(88, 'proyectoMate', 'localidadPartidoCp', 'partido', '', '', '_', ''),
(89, 'proyectoMate', 'localidadPartidoCp', 'cod_partido', '', '', '_', ''),
(90, 'proyectoMate', 'localidadPartidoCp', 'localidad', '', '', '_', ''),
(91, 'proyectoMate', 'subMenus', 'id', '', '', '_', ''),
(92, 'proyectoMate', 'subMenus', 'idMenu', '', '', '_', ''),
(93, 'proyectoMate', 'subMenus', 'nombreSubMenu', '', '', '_', ''),
(94, 'proyectoMate', 'subMenus', 'linkSubMenu', '', '', '_', ''),
(95, 'proyectoMate', 'subMenus', 'descSubmenu', '', '', '_', ''),
(96, 'proyectoMate', 'perfilesMenu', 'idPerfil', '', '', '_', ''),
(97, 'proyectoMate', 'perfilesMenu', 'idMenu', '', '', '_', ''),
(98, 'proyectoMate', 'carreras', 'nombre', '', '', '_', ''),
(99, 'proyectoMate', 'carreras', 'resolucion', '', '', '_', ''),
(100, 'proyectoMate', 'usuarios', 'idInstituto', '', '', '_', ''),
(101, 'proyectoMate', 'usuarios', 'idCarreras', '', '', '_', ''),
(102, 'proyectoMate', 'usuarios', 'idTurno', '', '', '_', ''),
(103, 'proyectoMate', 'usuarios', 'anio', '', '', '_', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

--
-- Volcado de datos para la tabla `pma_designer_coords`
--

INSERT INTO `pma_designer_coords` (`db_name`, `table_name`, `x`, `y`, `v`, `h`) VALUES
('salguero', 'categoria', 29, 26, 1, 1),
('salguero', 'clientes', 236, 43, 1, 1),
('salguero', 'config_mail', 73, 395, 1, 1),
('salguero', 'img_prod', 545, 221, 1, 1),
('salguero', 'img_slider', 522, 397, 1, 1),
('salguero', 'productos', 744, 216, 1, 1),
('salguero', 'sub_categoria', 497, 43, 1, 1),
('salguero', 'usuarios', 46, 166, 1, 1),
('proyectoMate2', 'escuelas', 576, 305, 1, 1),
('proyectoMate2', 'estadoCiviles', 120, 176, 1, 1),
('proyectoMate2', 'estados', 132, 21, 1, 1),
('proyectoMate2', 'horariosHabituales', 445, 91, 1, 1),
('proyectoMate2', 'instituciones', 503, 195, 1, 1),
('proyectoMate2', 'localidadPartidoCp', 282, 406, 1, 1),
('proyectoMate2', 'roles', 65, 398, 1, 1),
('proyectoMate2', 'titulos', 137, 297, 1, 1),
('proyectoMate2', 'usuarios', 813, 30, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '[{"db":"proyectoMate","table":"usuarios"},{"db":"proyectoMate","table":"localidadPartidoCp"},{"db":"proyectoMate","table":"institutos"},{"db":"proyectoMate","table":"instituciones"},{"db":"proyectoMate","table":"usuariosPerfiles"},{"db":"proyectoMate","table":"menus"},{"db":"proyectoMate","table":"perfilesMenu"},{"db":"proyectoMate","table":"carreras"},{"db":"proyectoMate","table":"perfiles"},{"db":"proyectoMate","table":"roles"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma_table_uiprefs`
--

INSERT INTO `pma_table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'api', 'direcciones', '{"sorted_col":"`direcciones`.`latitud` DESC"}', '2016-05-25 21:34:55'),
('root', 'proyectoMate', 'perfiles', '{"sorted_col":"`perfiles`.`id` ASC"}', '2016-06-05 16:51:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-06-09 00:27:08', '{"lang":"es"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;