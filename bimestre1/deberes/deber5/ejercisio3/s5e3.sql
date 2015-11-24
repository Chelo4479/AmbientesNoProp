-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2015 a las 14:24:06
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `s5e3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `provincias` varchar(30) NOT NULL,
  `cantones` varchar(30) NOT NULL,
  `parroquias` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `datos`
--

INSERT INTO `datos` (`provincias`, `cantones`, `parroquias`) VALUES
('Seleccione...', 'Seleccione...', 'Seleccione...'),
('provincias', 'cantones', 'parroquias'),
('provincias', 'Seleccione...', 'Seleccione...'),
('provincias', 'Seleccione...', 'Seleccione...'),
('provincias', 'cantones', 'parroquias');
