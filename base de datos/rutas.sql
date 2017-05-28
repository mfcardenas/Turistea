-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2017 a las 12:11:38
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

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
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Mapa` varchar(20) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Punto_partida` varchar(30) NOT NULL,
  `Punto_destino` varchar(30) NOT NULL,
  `Parrafo1` text NOT NULL,
  `Foto1` varchar(30) NOT NULL,
  `Parrafo2` text NOT NULL,
  `Foto2` varchar(30) NOT NULL,
  `Parrafo3` text NOT NULL,
  `Foto3` varchar(30) NOT NULL,
  `Parrafo4` text NOT NULL,
  `Foto4` varchar(30) NOT NULL,
  `Parrafo5` text NOT NULL,
  `Foto5` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`ID`, `Nombre`, `Descripcion`, `Mapa`, `Duracion`, `Punto_partida`, `Punto_destino`, `Parrafo1`, `Foto1`, `Parrafo2`, `Foto2`, `Parrafo3`, `Foto3`, `Parrafo4`, `Foto4`, `Parrafo5`, `Foto5`) VALUES
(1, 'Ruta de los deportistas', 'Con esta ruta podréis disfrutar del ámbito deportivo madrileño así como de una tarde de compras para los más aficionados.', 'rutaDeportistas.png', 8, 'Plaza de Castilla', 'Calle Orense', 'Bueno ruteros para esta ruta comenzaremos en Plaza de Castilla donde podremos ver las Torres Kio muy importantes en nuestra ciudad.', 'plazaCastilla.jpg', 'A continuación, bajaremos toda la Castellana hasta llegar al estadio Santiago Bernabeu, donde haremos un tour por el estadio donde podremos visitar los vestuarios y la colección de copas del Real Madrid entre otros. Por ello, es imprescindible que el día que vayamos a hacer esta ruta, no haya partido del Real del Madrid en el Santiago Bernabeu, ya que el tour no se realiza durante esas horas.', 'bernabeu.jpg', 'Tras la visita, es ¡hora de comer! Uno de los sitios más recomendados se situa en la calle Raimundo Fernández Villaverde número 44, llamado La Imperial, donde hacen unos boquerones adobados riquísimos. Otra opción, es a lo largo de la castellana pasado el Santiago Bernabeu, llamado Complejo Azca, donde hay una larga lista de restaurantes para comer, desde italianos como el Ginos hasta restaurantes de comida rápida como el Burguer King.\r\n', 'orense.jpg', 'La tarde la dedicaremos visitar Nuevos Ministerios y la Calle Orense. La plaza de Nuevos Ministerios esta respleta de puestecitos artesanales encantadores, donde poder comprar algún regalo a un familiar o pareja. Por si no nos hemos cansado de compras, la calle Orense esta llena de tiendas, pero esta vez de marcas famosas como Zara o Mango. De entre medias, también podemos tomar algún café o tentenpie a lo largo de esta calle en sitios como Rodilla o el Starbucks.', 'nuevosmin3.jpg', '', ''),
(2, 'Un día por los Jardines del Retiro', 'En esta ruta comenzaremos desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.', 'rutaRetiro.png', 11, 'Plaza de Sol', 'Museo Reina Sofía', 'Buenos días ruteros para la ruta de hoy comenzaceros desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.\r\n\r\nComenzaremos recorriendo la calle de Alcalá, pasando por el metro de Sevilla hasta alcanzar la Plaza de Cibeles. Esta plaza es uno de los principales símbolos madrileños, la cual representa una importante cultura en nuestra ciudad.', 'cibeles.jpg', 'Continuaremos por la misma calle hasta llegar a la Puerta de Alcalá, otro gran símbolo de Madrid. Aquí, se encuentra la entrada al parque del Retiro.', 'alcala.jpg', 'Este parque es uno de los más grandes de nuestra ciudad donde podrás visitar monumentos como el de Alfonso XII o el Palacio de Velazquez, además de poder pasar un gran día de piknik con la familia y amigos. Y sin olvidarnos de la posibilidad de alquilar una barca para dar una vuelta por el estanque del Retiro.', 'retiro.jpg', 'Para por la tarde, nos espera una visita al Reina Sofía. Para llegar simplemente tendremos que recorrer la calle de Alfonso XII hasta llegar a Atocha. En la calle Ronda de Atocha se encuentra el aclamado Museo Nacional de Arte Reina Sofía, donde podremos disfrutar de un arte clásico y a la vez contemporáneo.', 'reinaSofia.jpg', '', ''),
(3, 'Una Ruta Por Las Calles Del Centro De Madrid', 'En esta apasionada ruta tendremos que madrugar para recorrer el centro de Madrid donde conoceremos y visitaremos maravillosos monumentos y sitios de interés.\r\n\r\n', 'rutaCentro.png', 10, 'Plaza de Sol', 'Museo del Prado', '¡¡Hola ruteros!! Para esta ruta nos pondremos las botas de andar para recorrer las calles madrileñas del centro.\r\n\r\nComenzaremos en la famosa Plaza de Sol, donde podremos ver el kilómetro 1 (donde comienzan todas las carreteras madrileñas). A partir de allí, bajaremos toda la calle Arenal donde podemos vistar muchas tiendas y comprar algún que otro recuerdo. Al final de esta calle llegaremos a Plaza España donde se situa el gran Teatro Real, teatro de pera de Madrid, considerado uno de los más importantes de España y Europa, y es uno de los monumentos más emblemáticos de la ciudad.', 'sol.png', 'Tras su visita, es hora de un descanso, por ello nos dirijiremos callejeando hasta llegar a Callao. Desde allí bajaremos hacia la calle Postigo de San Martín donde encontraremos una de las mejores chocolaterias de Madrid, La Chocolatería Valor. Aquí podremos tomar un chocolate caliente con churros que viene bien en los días de invierno.', 'callao.jpg', 'Una vez recargadas las pilas volveremos a Callao para poder alcanzar la calle Gran Vía, una de las calles más famosas de Madríd, por no decir la que más. En esta larga calle se sitian una larga lista de tiendas en las que poder comprar, como: Primark, Berska, Pull & Bear... y sin olvidarnos de un monton de restaurantes en los que podemos comer. Para los apasionados de la comida asiática cerca de Gran Vía, en la calle Hortaleza, se encuentra un restaurante muy conocido entre los apasionados del sushi llamado Miss Sushi Hortaleza (¡¡Recordar!! Deberemos recorrer la Gran Vía en dir. Banco de España).', 'gvia2.jpg', 'Al final de esta calle alcanzaremos la Plaza de Cibeles, muy conocida entre los madrileños (sobre todo los madridistas).', 'cibeles2.jpg', 'Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!\r\n\r\nRecorreremos finalmente el Paseo del Prado para llegar al Museo del Prado, uno de los museos más importantes de la ciudad.', 'museoDelPrado.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
