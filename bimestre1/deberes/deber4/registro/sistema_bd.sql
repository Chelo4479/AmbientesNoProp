-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-10-2015 a las 12:03:08
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `password2` varchar(120) NOT NULL,
  `sexo` char(3) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  UNIQUE KEY `correo` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `email`, `password`, `password2`, `sexo`, `dia`, `mes`, `anio`) VALUES
('danilo', 'daza', 'daz@gmail.com', '333', '333', 'h', 17, 4, 1973),
('jonhy', 'correa', 'jo@gmail.com', '12', '12', 'h', 16, 2, 1975),
('juan', 'herrera', 'juan@gmail.com', '1234', '1234', 'h', 9, 10, 1987),
('maria', 'perez', 'm@gmail.com', '147', '8d5e957f297893487bd98fa830fa6413', 'm', 16, 3, 1961),
('marcelo', 'prado', 'marcelo@gmail.com', '123', '202cb962ac59075b964b07152d234b70', 'h', 15, 2, 1976);
