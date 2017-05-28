-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2017 a las 01:59:06
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turistea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastronomia`
--

CREATE TABLE IF NOT EXISTS `gastronomia` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Horario` text,
  `Llegada` text,
  `Plato estrella` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastronomia`
--

INSERT INTO `gastronomia` (`Id`, `Nombre`, `Imagen`, `Direccion`, `Telefono`, `Horario`, `Llegada`, `Plato estrella`) VALUES
(1, 'Bar Lambuzo', 'C:\\Users\\Angel\\Desktop\\AW\\xampp\\htdocs\\Turistea\\imgGastro\\lmabuzo.jpg', 'Calle de las Conchas, 9', 913552786, 'L 16:00:00 22:00:00 M 16:00:00 22:00:00 X 16:00:00 22:00:00 J 16:00:00 22:00:00 V 16:00:00 24:00:00 S 12:00:00 24:00:00 D 12:00:00 22:30:00 ', 'Metro: Metro La Rambla (Línea 7)\r\nCercanías: Coslada (Líneas C2 o C7)', 'Espuma de Yogurt '),
(2, 'El Mandil', 'C:\\Users\\Angel\\Desktop\\AW\\xampp\\htdocs\\Turistea\\imgGastro\\elMandil.jpg', 'Calle Colon, 5', 915316255, 'L 08:00:00 12:30:00 M 08:00:00 12:30:00 X 08:00:00 12:30:00 J 08:00:00 13:30:00 V 08:00:00 14:30:00 S 11:00:00 14:30:00 D 11:00:00 12:30:00 ', 'Metro: Metro La Rambla (Línea 7)\r\nCercanías: Coslada (Líneas C2 o C7)', 'Calamares con cebolla confitada'),
(3, 'Montes de Galicia', 'C:\\Users\\Angel\\Desktop\\AW\\xampp\\htdocs\\Turistea\\imgGastro\\losMontesDeGalicia.jpg', 'Calle Azcona, 46', 913552786, 'Desayunos 09:00:00 12:00:00 Cocina abierta 13:30:00 16:30:00 Barra Bar 09:00:00 02:30:00 Cocktail Bar 13:00:00 02:30:00', 'Metro: Metro Diego de León (Línea 6)', 'Cocochas de merluza a la romana');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastronomia`
--
ALTER TABLE `gastronomia`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastronomia`
--
ALTER TABLE `gastronomia`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
