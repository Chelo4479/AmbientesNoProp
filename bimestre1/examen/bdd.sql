-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2015 a las 20:38:44
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroc`
--

CREATE TABLE IF NOT EXISTS `registroc` (
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `peso` int(10) NOT NULL,
  `genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registroc`
--

INSERT INTO `registroc` (`nombre`, `apellidos`, `edad`, `peso`, `genero`) VALUES
('m', 'm', '0', 40, 'hombre'),
('marcelo', 'prado', '0', 40, 'hombre'),
('marcelo', 'prado', 'menos de  20', 40, 'hombre'),
('', '', '', 0, ''),
('marcelo2', 'prado', 'menos de  20', 40, 'hombre'),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('marcelo24', 'prado', 'menos de  20', 40, 'hombre'),
('marcelo248', 'prado', 'menos de  20', 40, 'hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrou`
--

CREATE TABLE IF NOT EXISTS `registrou` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
