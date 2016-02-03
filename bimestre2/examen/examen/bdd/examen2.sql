-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2016 a las 13:12:07
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id_carrera`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre`) VALUES
(1, 'Análisis de Sistemas Informáticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(256) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombres`, `apellidos`, `email`, `contrasena`) VALUES
(1, 'Andrés David', 'Pérez Andrade', 'andrés.perez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Juan José', 'Flores Espejo', 'juan.flores@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'marcelo', 'prado', 'chelo2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'juan', 'perez', 'juan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'luis', 'angulo', 'chelo2@hotmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(11, 'lucas', 'viglia', 'lu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'nicole', 'hidalgo', 'niko@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'elvia', 'pata', 'el@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_x_materia`
--

CREATE TABLE IF NOT EXISTS `estudiante_x_materia` (
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  UNIQUE KEY `id` (`id_estudiante`,`id_materia`),
  KEY `id_materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `estudiante_x_materia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `profesor` varchar(80) NOT NULL,
  PRIMARY KEY (`id_materia`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `id_nivel` (`id_nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcar la base de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`, `id_nivel`, `profesor`) VALUES
(1, 'INFORMÁTICA BÁSICA', 1, 'Andrés Durán'),
(2, 'PROGRAMACIÓN ESTRUCTURADA', 1, 'Iván Grijalva'),
(3, 'MATEMÁTICAS DISCRETAS', 1, 'Iván Grijalva'),
(4, 'CÁLCULO DIFERENCIAL E INTEGRAL', 1, 'Santiago Guerra'),
(5, 'PROGRAMACION ORIENTADA A OBJETOS', 2, 'Ivonne Maldonado'),
(6, 'SISTEMAS OPERATIVOS I', 2, 'Edwin Salvador'),
(7, 'ARQUITECTURA COMPUTADORES II', 2, 'Edwin Salvador'),
(8, 'ESTADÍSTICA', 2, 'Stefanie Vásquez'),
(9, 'CONTABILIDAD GENERAL', 2, 'Esthela Moscoso'),
(10, 'PROGRAMACIÓN AVANZADA', 3, 'Iván Grijalva'),
(11, 'SISTEMAS OPERATIVOS II', 3, 'Ivonne Maldonado'),
(12, 'ALGORITMOS FUNDAMENTALES', 3, 'Eddie Yánez'),
(13, 'CONTABILIDAD DE COSTOS', 3, 'Esthela Moscoso'),
(14, 'ECOLOGÍA Y MEDIO AMBIENTE', 3, 'Gloria Erazo'),
(15, 'TÉCNICAS DE ANÁLISIS Y DISEÑO DE SISTEMAS INFORMÁTICOS', 4, 'Ivonne Maldonado'),
(25, 'REDES DE COMPUTADORES I', 4, 'Cesar Gallardo'),
(26, 'INVESTIGACIÓN DE OPERACIONES', 4, 'Luis Ponce'),
(27, 'ARQUITECTURA WEB', 4, 'Andrés Durán'),
(28, 'BASE DE DATOS MULTIDIMENSIONALES', 5, 'Iván Grijalva'),
(29, 'DESARROLLO DE SISTEMAS DE INFORMACION', 5, 'Luis Almeida'),
(30, 'REDES DE COMPUTADORES II', 5, 'Cesar Gallardo'),
(31, 'ADMINISTRACION DE REDES TCP/IP', 5, 'Cesar Gallardo'),
(32, 'AMBIENTES NO PROPIETARIOS', 5, 'Edwin Salvador'),
(33, 'ARQUITECTURA ORIENTADA A SERVICIOS', 6, 'Ivonne Maldonado'),
(34, 'SEGURIDAD EN REDES', 6, 'Cesar Gallardo'),
(35, 'REDES DE AREA LOCAL INALAMBRICA', 6, 'Cesar Gallardo'),
(36, 'SERVICIOS SOBRE REDES', 6, 'Cesar Gallardo'),
(37, 'APLICACIONES DISTRIBUIDAS', 6, 'Edwin Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  PRIMARY KEY (`id_nivel`),
  UNIQUE KEY `numero` (`numero`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `id_carrera` (`id_carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `numero`, `nombre`, `id_carrera`) VALUES
(1, 1, 'Primero', 1),
(2, 2, 'Segundo', 1),
(3, 3, 'Tercero', 1),
(4, 4, 'Cuarto', 1),
(5, 5, 'Quinto', 1),
(6, 6, 'Sexto', 1);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `estudiante_x_materia`
--
ALTER TABLE `estudiante_x_materia`
  ADD CONSTRAINT `id_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  ADD CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `id_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

--
-- Filtros para la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD CONSTRAINT `id_carrera` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);
