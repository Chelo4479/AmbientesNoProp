-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-01-2016 a las 14:54:11
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `nombre` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefono` int(13) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `vpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `email`, `telefono`, `direccion`, `usuario`, `password`, `vpassword`) VALUES
('marcelo', 'chelo@gmail.com', 1234567899, 'las casas', 'chelo2', '12345678', '12345678'),
('juan', 'juan@gmail.com', 123456789, 'calderon', 'juan3', '999999999', '999999999'),
('carlos', 'carlos@gmail.com', 123456789, 'carcelen', 'carlos5', '12345678', '12345678'),
('mishell', 'mishu@gmail.com', 123456789, 'carapungo', 'michu4', '123456789', '123456789');
