-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2013 a las 18:55:49
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `venado2.0`
--
CREATE DATABASE `venado2.0` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `venado2.0`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `presio` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `presio`, `descripcion`) VALUES
(1, '2', 3, 'Ola k ase?'),
(3, '1212', 1212, 'dfvfdv'),
(4, '121', 1212, 'dfvfdv'),
(5, 'qwdqw', 1212, 'dfvfdv'),
(6, '1212', 1212, 'dfvfdv'),
(7, '121', 1212, 'dfvfdv'),
(8, 'qwdqw', 1212, 'dfvfdv'),
(9, '1212', 1212, 'dfvfdv'),
(10, '121', 1212, 'dfvfdv'),
(11, 'qwdqw', 1212, 'dfvfdv'),
(12, '1212', 1212, 'dfvfdv'),
(13, '121', 1212, 'dfvfdv'),
(14, 'qwdqw', 1212, 'dfvfdv'),
(15, '1212', 1212, 'dfvfdv'),
(16, '121', 1212, 'dfvfdv'),
(17, 'qwdqw', 1212, 'dfvfdv'),
(18, '1212', 1212, 'dfvfdv'),
(19, '121', 1212, 'dfvfdv'),
(20, 'qwdqw', 1212, 'dfvfdv'),
(21, '1212', 1212, 'dfvfdv'),
(22, '121', 1212, 'dfvfdv'),
(23, 'qwdqw', 1212, 'dfvfdv'),
(24, '1212', 1212, 'dfvfdv'),
(25, '121', 1212, 'dfvfdv'),
(26, 'qwdqw', 1212, 'dfvfdv'),
(27, '1212', 1212, 'dfvfdv'),
(28, '121', 1212, 'dfvfdv'),
(29, 'qwdqw', 1212, 'dfvfdv'),
(30, '1212', 1212, 'dfvfdv'),
(31, '121', 1212, 'dfvfdv'),
(32, 'qwdqw', 1212, 'dfvfdv'),
(33, 'cercerc', 0, 'ercerc'),
(34, 'ercercer', 0, 'recrecre'),
(35, 'crecrecre', 0, 'crecrecre'),
(36, 'crecrecre', 0, 'crecercer'),
(37, 'ercrecrec', 0, 'crecercre'),
(38, 'recrec', 0, 'crecerece'),
(50, 'coca', 100, 'promocion'),
(51, '', 0, ''),
(52, 'Latas', 0, 'Sepa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `nombre_empresa` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfc` varchar(25) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre_empresa`, `id`, `rfc`, `nombre_contacto`) VALUES
('fwefwefwe', 1, 'vgferf432', 'f3refwc332r4'),
('', 2, '1', ''),
('', 3, '2', ''),
('', 4, 'isisisiisuiu', 'Tu nombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`, `descripcion`) VALUES
(1, 'images/productos/google-talk-250x250.png', 'logo_google_talk'),
(2, 'images/productos/IPCom.png', 'IPCom_Logo'),
(3, 'images/productos/SQL-Developer-icon.png', 'Logo_SQLDeveloper'),
(4, 'images/productos/iReport.png', 'logo_ireport'),
(5, 'images/productos/SQL-Developer-icon.png', 'Logo_SQLDeveloper2'),
(6, 'images/productos/gokuvsbardock.gif', 'goku'),
(7, 'images/productos/gokuvsbardock.gif', 'goku'),
(8, 'images/productos/coca_cola.jpg', 'Mi coca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportista`
--

CREATE TABLE IF NOT EXISTS `transportista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `transportista`
--

INSERT INTO `transportista` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'gtgg', 'ycjcct', 'gvkvyuvyv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'lego', 'lego'),
(2, 'vikoz', 'wayne'),
(3, 'jorge', 'jorge'),
(4, 'rafa', 'rafa'),
(5, 'sandy', 'sandy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(15) NOT NULL,
  `clave` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `telefono`, `clave`, `nombre`, `direccion`) VALUES
(7, '5635632563', 1234, 'lego', 'dfhdfjhjdfhjfdhjhfd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
