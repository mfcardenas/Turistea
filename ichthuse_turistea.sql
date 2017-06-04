-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2017 a las 23:37:10
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ichthuse_turistea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Lugar` varchar(30) NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Anecdota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`Id`, `Titulo`, `Imagen`, `Lugar`, `Autor`, `Anecdota`) VALUES
(1, 'Navidad nocturna madrileña', 'imgGaleria/experiencia1.jpg', 'Plaza de Sol', '', 'Ha sido la mejor Navidad de mi vida, qué decoración, qué estupendo!! Os recomiendo ir si o si! Y MIRAD QUE FOTAZA!!!!'),
(2, 'Anochecer en Debod', 'imgGaleria/experiencia2.jpg', 'Templo de Debod', '', 'Creo que es una de las cosas más bonitas que he visto en mi vida, estoy encantadísimo, deseando volver. Si tenéis que elegir a donde ir porque va a anochecer, no dudéis e ir al templo de Debod.. LA PUESTA DE SOL ES LO MEJOR!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastronomia`
--

CREATE TABLE `gastronomia` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Horario` text,
  `Llegada` text,
  `Plato estrella` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gastronomia`
--

INSERT INTO `gastronomia` (`Id`, `Nombre`, `Imagen`, `Direccion`, `Telefono`, `Horario`, `Llegada`, `Plato estrella`) VALUES
(1, 'Bar Lambuzo', 'imgGastro/lmabuzo.jpg', 'Calle de las Conchas, 9', 913552786, 'L 16:00:00 22:00:00 M 16:00:00 22:00:00 X 16:00:00 22:00:00 J 16:00:00 22:00:00 V 16:00:00 24:00:00 S 12:00:00 24:00:00 D 12:00:00 22:30:00 ', 'Metro: Metro La Rambla (Línea 7)\r\nCercanías: Coslada (Líneas C2 o C7)', 'Espuma de Yogurt '),
(2, 'El Mandil', 'imgGastro/elMandil.jpg', 'Calle Colon, 5', 915316255, 'L 08:00:00 12:30:00 M 08:00:00 12:30:00 X 08:00:00 12:30:00 J 08:00:00 13:30:00 V 08:00:00 14:30:00 S 11:00:00 14:30:00 D 11:00:00 12:30:00 ', 'Metro: Metro La Rambla (Línea 7)\r\nCercanías: Coslada (Líneas C2 o C7)', 'Calamares con cebolla confitada'),
(3, 'Montes de Galicia', 'imgGastro/losMontesDeGalicia.jpg', 'Calle Azcona, 46', 913552786, 'Desayunos 09:00:00 12:00:00 Cocina abierta 13:30:00 16:30:00 Barra Bar 09:00:00 02:30:00 Cocktail Bar 13:00:00 02:30:00', 'Metro: Metro Diego de León (Línea 6)', 'Cocochas de merluza a la romana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Tipo` enum('Teatro','Museo','Cine','Parque') NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Horario` text NOT NULL,
  `Llegada` text NOT NULL,
  `Precio` text NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `Nombre`, `Tipo`, `Imagen`, `Direccion`, `Telefono`, `Horario`, `Llegada`, `Precio`, `Descripcion`) VALUES
(3, 'Teatro Lara', 'Teatro', 'imgLugares/teatroLara.jpg', 'Calle Corredera Baja de San Pablo, 15 Madrid, Madrid España', 915239027, 'L 18:30 22:00 M 17:00 23:55 X 17:00 23:55 J 17:00 23:55 V 17:00 23:55 S 17:00 23:55 D 17:00 23:55', 'Metro: Las paradas mÃ¡s cercanas son Callao (lÃ­neas 3 y 5) y Tribunal (lÃ­neas 1 y 10)\r\nBus: 1, 22, 44, 46, 74, 75, 133, 147, 148\r\nEn coche: Si decides probar suerte y aparcar en la calle, recordamos que es zona verde. Los parkings mÃ¡s cercanos estÃ¡n en:\r\n- C/Tudescos s/n\r\n- Garaje Luna en la C/Pizarro nÂº7\r\n- Garaje Pizarro en la C/Pizarro nÂº16\r\n- Saba: Plaza de los Mostenses, s/n\r\n\r\n', 'El precio depende de la funciÃ³n. Desde 12,00 â‚¬', 'El teatro Lara es un vetusto teatro a la italiana construido en 1879 en el número 15 de la Corredera Baja de San Pablo del madrileño Barrio de Maravillas, en el entorno de lo que desde el último tercio del siglo XX se conoce como zona Malasaña.'),
(4, 'Teatro Nuevo AlcalÃ¡', 'Teatro', 'imgLugares/teatroNuevoAlcala.jpg', 'Calle de Jorge Juan, 62 Madrid, Madrid EspaÃ±a', 914353403, 'L 10:00 10:00 M 18:00 20:30 X 18:00 20:30 J 18:00 20:30 V 17:00 22:00 S 17:00 22:00 D 16:30 18:00', 'Metro: Parada PrÃ­ncipe de Vergara (lÃ­neas 2, 4 y 9)\r\nBus: 29, 5, 15, 152, 146 y C2', 'El precio depende de la funciÃ³n', 'El Nuevo Teatro Alcalá es una sala de teatro de la ciudad española de Madrid, ubicada en la calle Jorge Juan, número 62. Originalmente se llamó Coliseo Pardiñas y después Alcalá-Palace. '),
(5, 'Teatro EspaÃ±ol', 'Teatro', 'imgLugares/teatroEspanol.jpg', 'Plaza Santa Ana. Calle PrÃ­ncipe, 25 Madrid, Madri', 913896335, 'L 10:00:00 10:00:00 M 10:00:00 10:00:00 X 10:00:00 10:00:00 J 10:00:00 10:00:00 V 10:00:00 10:00:00 S 10:00:00 10:00:00 D 10:00:00 10:00:00', 'Metro: AntÃ³n MartÃ­n (lÃ­nea 1), Sevilla (lÃ­nea 2) y Sol (lÃ­neas 1, 2 y 3)', 'Depende de la funciÃ³n.', 'El Teatro Español, llamado hasta 1849 Teatro del Príncipe, es un teatro público de Madrid, perteneciente al ayuntamiento de la capital. '),
(6, 'Teatro Marquina', 'Teatro', 'imgLugares/teatroMarquina.jpg', 'Calle Prim, 11 Madrid, Madrid EspaÃ±a', 915323186, 'L 10:00:00 10:00:00 M 12:30 19:00 X 11:30 23:55 J 11:30 23:55 V 11:30 23:55 S 12:30 23:55 D 12:30 23:55', 'Metro: Banco de EspaÃ±a (lÃ­nea 2) o Chueca (lÃ­nea 5)\r\nCercanÃ­as: Recoletos\r\nCoche: Los parkings mÃ¡s cercanos estÃ¡n en Augusto Figueroa 32 y en Plaza del Rey (calle de las Infantas, 31)', 'Depende de la funciÃ³n.', 'El teatro Marquina es una sala de teatro situada en el barrio de Justicia en el distrito Centro en Madrid, España. Se levanta sobre un solar que el dramaturgo Eduardo Marquina legó al Montepío de Autores, de ahí que se diera su nombre al mismo.'),
(7, 'Teatro Coliseum', 'Teatro', 'imgLugares/teatroColiseum.jpg', 'Calle Gran VÃ­a, 78 Madrid, Madrid EspaÃ±a', 915323186, 'L 13:00 20:30 M 13:00 20:30 X 13:00 20:30 J 13:00 20:30 V 13:00 22:00 S 13:00 22:00 D 13:00 18:00', 'Metro: Plaza de EspaÃ±a (lÃ­nea 2)\r\nBus: 1, 2, 44, 46, 74, 75\r\nCoche: Parking en Plaza de EspaÃ±a', 'Depende de la funciÃ³n', 'Obras musicales nacionales y extranjeras en amplia sala clásica de tres alturas con palcos y butacas rojas.'),
(8, 'Museo del Prado', 'Museo', 'imgLugares/museoDelPrado.jpg', 'Paseo Prado, s/n Madrid, Madrid EspaÃ±a', 913302800, 'L 10:00:00 20:00 M 10:00:00 20:00 X 10:00:00 20:00 J 10:00:00 20:00 V 10:00:00 20:00 S 10:00:00 20:00 D 10:00:00 19:00', 'Metro: Banco de EspaÃ±a (lÃ­nea 2)', 'Entrada General: 15â‚¬\r\nEntrada Reducida para mayores de 65 aÃ±os, miembros de familias numerosas y carnet joven: 7,50â‚¬\r\nEntrada Gratuita para menores de 18 aÃ±os, parados, estudiantes hasta 25 aÃ±os, personas con discapacidad: 0â‚¬\r\nEntrada General + ejemplar de â€˜GuÃ­a del Pradoâ€™: 24â‚¬\r\n\r\nPublicaciÃ³n oficial del Museo, con mÃ¡s de 400 imÃ¡genes\r\n\r\nEntrada General 2 Visitas: 22â‚¬\r\n\r\nDos visitas al Museo del Prado con un precio reducido, en dÃ­as diferentes durante un aÃ±o\r\n\r\nEntrada Visita de 9 a 10H: 50â‚¬\r\n\r\nVisita el museo antes de su apertura al pÃºblico\r\n\r\nAbono \"Paseo del Arte\": 28â‚¬\r\n\r\nPermite una visita al Museo del Prado, al Museo Thyssen Bornemisza y al Museo Reina SofÃ­a en un aÃ±o desde su emisiÃ³n, con un 20% de descuento en el precio de las entradas\r\n\r\n*La entrada al Museo incluye acceso a la ColecciÃ³n permanente y a las exposiciones temporales del dÃ­a de la visita.\r\n\r\n**Para cualquier entrada (que no sea la general) se deberÃ¡ presentar un tÃ­tulo oficial que verifique la tarifa', 'El Museo Nacional del Prado, en Madrid, España, es uno de los más importantes del mundo, así como uno de los más visitados.'),
(9, 'Museo Thyssen', 'Museo', 'imgLugares/museoThyssen.jpg', 'Palacio de Villahermosa Madrid, Madrid EspaÃ±a', 913302800, 'L 12:00 16:00 M 10:00 19:00 X 10:00:00 19:00 J 10:00:00 19:00 V 10:00:00 19:00 S 10:00:00 19:00 D 10:00:00 19:00', 'Metro: Banco de EspaÃ±a (LÃ­nea 2)\r\nBuses lÃ­neas: 1, 2 5, 9, 10 14, 15, 20, 27, 34, 37, 41, 51, 52, 53, 74, 146, 150\r\nTren: EstaciÃ³n de Atocha, EstaciÃ³n de Recoletos', 'Entrada General: 12â‚¬\r\nEntrada Reducida: 7â‚¬ (pensionistas, miembros de familias numerosas, ciudadanos con discapacidad superior al 33%)\r\nEntrada Gratis para menores de 12 aÃ±os acompaÃ±ados de adutos y ciudadanos en situaciÃ³n de desempleo\r\n*Para cualquier entrada (que no sea la general) se deberÃ¡ presentar un tÃ­tulo oficial que verifique la tarifa', 'El Museo Thyssen – Bornemisza se nutre de la antigua colección de los Barones Thyssen que pasó a manos del patrimonio del estado. Nos encontramos pinturas que van desde los primitivos flamencos o italianos hasta el siglo XX, destacando retratos del Renacimiento, Impresionismo, Expresionismo y de los grandes movimientos culturales del siglo XX.\r\n\r\nEl Museo Thyssen cuenta con una colección permanente y exposiciones temporales'),
(10, 'Museo Reina SofÃ­a', 'Museo', 'imgLugares/museoReinaSofia.jpg', 'Calle Santa Isabel, 52 Madrid, Madrid EspaÃ±a', 917741000, 'L 10:00:00 21:00 M 10:00:00 10:00:00 X 10:00:00 21:00 J 10:00:00 21:00 V 10:00:00 21:00 S 10:00:00 21:00 D 10:00:00 14:30', 'Metro: Atocha (Linea 1)\r\nCercanÃ­as: Atocha-RENFE\r\nAparcamiento de bicicletas: En la entrada de la Plaza Nouvel y a ambos lados del edificio Sabatini\r\nAparcamiento para coches: EstaciÃ³n de Atocha Plaza Emperador Carlos V s/n.', 'Entrada General: 12â‚¬\r\nEntrada Reducida: 7â‚¬ (pensionistas, miembros de familias numerosas, ciudadanos con discapacidad superior al 33%)\r\nEntrada Gratis para menores de 12 aÃ±os acompaÃ±ados de adutos y ciudadanos en situaciÃ³n de desempleo\r\n*Para cualquier entrada (que no sea la general) se deberÃ¡ presentar un tÃ­tulo oficial que verifique la tarifa\r\n\r\n**La entrada para exposiciones temporales tendrÃ¡ un coste de 4â‚¬.', 'El Museo Nacional Centro de Arte Reina Sofía es un museo español de arte del siglo XX y contemporáneo, con sede en Madrid. Su nombre se abrevia habitualmente como Museo Reina Sofía.'),
(11, 'Museo ArqueolÃ³gico Nacional', 'Museo', 'imgLugares/museoArqueologicoMadrid.jpg', 'Calle de Serrano, 13 Madrid, Madrid EspaÃ±a', 915777912, 'L 10:00:00 10:00:00 M 09:30 20:00 X 09:30 20:00 J 09:30 20:00 V 09:30 20:00 S 09:30 20:00 D 09:30 15:00', ' Autobuses\r\n          1, 9, 19, 51 y 74, con parada delante del Museo\r\n          5, 14, 27, 45 y 150, con parada en el Paseo Recoletos\r\n          21 y 53, con parada en la Plaza de ColÃ³n\r\n          2, 15, 20, 28, 52 y 146, con parada en la Plaza de la Independencia\r\n\r\nMetro\r\n          LÃ­nea 4: EstaciÃ³n Serrano\r\n          LÃ­nea 2: EstaciÃ³n Retiro\r\n\r\n Tren de cercanÃ­as\r\n          EstaciÃ³n de Recoletos (Paseo de Recoletos, Pares, esquina C/Villanueva)\r\n          LÃ­neas C-1,C-2, C-7,C-8, y C-10 de CercanÃ­as Madrid\r\n\r\nAparcamientos pÃºblicos         \r\n           Plaza de ColÃ³n. Jardines del Descubrimiento\r\n           Plazas reservadas para personas con discapacidad\r\n           Serranopark â€“ Aparcamiento 3, en la calle Jorge Juan y la Plaza de\r\n           la Independencia\r\n           24 Plazas reservadas para personas con discapacidad\r\n  \r\nCarril bici en la calle de Serrano', '- Entrada general: 3 â‚¬\r\n- Entrada reducida: 1,50 â‚¬ \r\n- Grupos de mÃ¡s de 8 personas, previa solicitud \r\n- Voluntariado cultural, previa acreditaciÃ³n\r\n- Entrada gratuita:\r\n         SÃ¡bados desde las 14:00 horas y domingos por la maÃ±ana\r\n         18 de mayo, DÃ­a Internacional de los Museos\r\n         12 de octubre, Fiesta Nacional de EspaÃ±a\r\n         16 de noviembre, DÃ­a del Patrimonio Mundial\r\n         6 de diciembre, DÃ­a de la ConstituciÃ³n EspaÃ±ola', 'El Museo Arqueológico Nacional es un museo español instalado en el Palacio de Biblioteca y Museos Nacionales de Madrid, un edificio del siglo XIX, iniciado por el arquitecto Francisco Jareño y Alarcón y finalizado por Antonio Ruiz de Salces, que comparte con la Biblioteca Nacional2 y que se ubica en la calle Serrano, junto a la plaza de Colón.\r\n\r\nEs el principal museo español dedicado a la arqueología. Su colección se basa en piezas de la Península Ibérica, desde la Prehistoria hasta la Edad Moderna. No obstante, también tiene diferentes colecciones procedentes de fuera de España, en especial de la Antigua Grecia, tanto de la metropolitana como, sobre todo, de la Magna Grecia, y, en menor medida, del Antiguo Egipto, además de «un número reducido de piezas» de Oriente Próximo.'),
(12, 'Museo Sorolla', 'Museo', 'imgLugares/museoSorolla.jpg', 'Paseo del General MartÃ­nez Campos, 37 Madrid, Mad', 913101584, 'L 09:30 20:00 M 09:30 20:00 X 09:30 20:00 J 09:30 20:00 V 09:30 20:00 S 09:30 20:00 D 10:00:00 15:00', 'AutobÃºs:\r\n   - LÃ­neas 5, 7, 14, 16, 27, 40, 45, 61, 147 y 150\r\n\r\nMetro:\r\n   - Iglesia (LÃ­nea 1)\r\n   - RubÃ©n DarÃ­o (LÃ­nea 5)\r\n   - Gregorio MaraÃ±Ã³n (LÃ­neas 7 y 10)\r\n\r\nAparcamientos pÃºblicos\r\n   - Zurbano, 68\r\n   - General MartÃ­nez Campos, 42 duplicado', '- Entrada General: 3 â‚¬\r\n- Entrada Reducida: 1,50 â‚¬ (para grupos constituidos por 8 o mÃ¡s miembros (con reserva previaEnlace externo, se abre en ventana nuevaLink externo) y voluntarios culturales.\r\n- Entrada gratuita:\r\n   SÃ¡bados (a partir de las 14:00) y domingos\r\n   Los siguientes dÃ­as: 18 de mayo, 12 de octubre, 16 de noviembre y 6 de diciembre.\r\n\r\n', 'La Casa Museo de Joaquín Sorolla se encuentra en la ciudad de Madrid, en el Paseo del General Martínez Campos, 37.'),
(13, 'Museo del Romanticismo', 'Museo', 'imgLugares/museoDelRomanticismo.jpg', 'Calle de San Mateo, 13 Madrid, Madrid EspaÃ±a', 914481045, 'L 09:30 20:30 M 09:30 20:30 X 09:30 20:30 J 09:30 20:30 V 09:30 20:30 S 09:30 20:30 D 10:00:00 15:00', 'Metro\r\n   - Alonso MartÃ­nez, lÃ­neas 4, 5 y 10.\r\n   - Tribunal, lÃ­neas 1 y 10.\r\n\r\nAutobÃºs\r\n   - LÃ­neas 3, 37, 40 y 149.\r\n\r\nCercanÃ­as RENFE\r\n   - Recoletos, lÃ­neas C2, C7, C8 y C10.\r\n\r\nParking pÃºblico\r\n   - Calle BarcelÃ³, nÃºmero 2.\r\n\r\nBicimad\r\n   - Estaciones 6, 7 y 8\r\n\r\nAparcabicis\r\n   - C/ BarcelÃ³ 2 y 7', '- Entrada general: 3 â‚¬\r\n- Entrada reducida: 1,50 â‚¬\r\n     Grupos de mÃ¡s de 8 personas, con previa solicitud\r\n     Voluntariado cultural de otros museos, con previa acreditaciÃ³n\r\n     Usuarios de la Red EspaÃ±ola de Albergues Juveniles, con previa acreditaciÃ³n\r\n     Titulares de billetes Renfe (Alta Velocidad o Larga Distancia)\r\n- Entrada gratuita:\r\n     SÃ¡bados a partir de las 14:00 horas\r\n     Domingos y otros festivos como:\r\n             - 18 de mayo (DÃ­a Internacional de los Museos)\r\n             - 12 de octubre (Fiesta Nacional de EspaÃ±a)\r\n             - 16 de noviembre (DÃ­a del Patrimonio Mundial)\r\n             - 6 de diciembre (DÃ­a de la ConstituciÃ³n EspaÃ±ola)', 'El Museo del Romanticismo es un museo español, de titularidad estatal, situado en Madrid. Conserva una importante colección de objetos históricos y artísticos centrada en la vida cotidiana y las costumbres del siglo XIX, con especial atención a la corriente estética del Romanticismo.\r\n\r\nEn un primer momento el museo fue conocido con el nombre de Museo Romántico, pero tras la reforma que concluyó en 2009 se adoptó el nombre actual. La sede se encuentra en la calle de San Mateo, en el barrio de Justicia (distrito Centro), ocupando el antiguo palacio del marqués de Matallana, edificio de trazas clasicistas de Manuel Rodríguez García, quien se encargó de su construcción en 1776.'),
(14, 'Zoo de Madrid', 'Parque', 'imgLugares/zoo.jpg', 'Casa de campo, s/n Madrid, Madrid España', 917741000, 'L 10:00:00 10:00:00 M 12:00:00 20:30:00 X 12:00:00 20:30:00 J 12:00:00 20:30:00 V 12:00:00 20:30:00 S 12:00:00 20:30:00 D 12:00:00 20:30:00', 'Coche: \r\n   Estamos en la A-5/N-V salida 5A. \r\n						Metro: \r\n   Casa de Campo (Líneas 5 y 10)\r\n	    					Autobús: \r\n   Línea 33', 'Entrada General Adulto (8-64 años): 26,45€			 				Entrada Reducida (3-7 años y mayores de 65): 19,95€\r\nEntrada Familia Numerosa general: 19,95€ \r\nEntrada Familia Numersoa reducida: 18,45€\r\nEntrada persona con discapacidad + acompañanante gratis: 18,45€\r\nMenores de 3 años(acompañados por un adulto): GRATIS\r\n					 *Para cualquier entrada (que no sea la general) se deberá presentar un título oficial que verifique la tarifa ', 'El Zoo Aquarium de Madrid es un zoológico de Madrid que se encuentra en la Casa de Campo, gran parque forestal de la ciudad de Madrid. El parque pertenece a Parques Reunidos.'),
(15, 'Faunia', 'Parque', 'imgLugares/faunia.jpg', 'Av de las Comunidades, 28 VicÃ¡lvaro, Madrid EspaÃ', 0, 'L 10:30 20:00 M 10:30 20:00 X 10:30 20:00 J 10:30 20:00 V 10:30 20:00 S 10:30 20:00 D 10:30 20:00', 'Coche:\r\n	AutovÃ­a A3 direcciÃ³n Valencia, salida 6 (Valdebernardo)\r\n	AutovÃ­a M 40 direcciÃ³n Norte (salida 13)\r\n	AutovÃ­a M 40 direcciÃ³n Sur (salida 12)\r\n	AutovÃ­a M 23 prolongaciÃ³n de Oâ€™Donnell, salida VicÃ¡lvaro\r\n\r\nMetro: \r\n	Metro Valdebernardo (LÃ­nea 9)\r\n\r\nCercanÃ­as: \r\n	VicÃ¡lvaro (LÃ­nea C2)\r\n\r\nAutobÃºs: \r\n	LÃ­nea 71 de la EMT', 'Entrada General Adulto (8-64 aÃ±os): 23,30â‚¬\r\nEntrada Infantil (3-7 aÃ±os): 18,90â‚¬\r\nEntrada Senior (Mayores de 65 aÃ±os): 18,90â‚¬\r\nEntrada persona con discapacidad + acompaÃ±anante gratis: 18,90â‚¬\r\nEntrada Familia Numerosa Adulto: 13,70â‚¬\r\nEntrada Familia Numerosa Infantil: 9,40â‚¬\r\nMenores de 3 aÃ±os: GRATIS\r\n\r\n*Para cualquier entrada (que no sea la general) se deberÃ¡ presentar un tÃ­tulo oficial que verifique la tarifa', 'Faunia es un jardín botánico y parque zoológico, de unas 14 ha de extensión ubicado en Madrid. Está organizado en áreas que representan diferentes ecosistemas como la jungla, los polos o bosque africano. Es propiedad de Parques Reunidos, SA. '),
(16, 'Aquopolis Villanueva', 'Parque', 'imgLugares/aquopolisVillanueva.jpg', 'Avenida de la Dehesa, s/n Villanueva de la CaÃ±ada', 0, 'L 12:00 20:00 M 12:00 20:00 X 12:00 20:00 J 12:00 20:00 V 12:00 20:00 S 12:00 20:00 D 12:00 20:00', 'Coche:\r\n	M-600: Une San Lorenzo de El Escorial con Brunete.\r\n	M-501: Une M-40 y M-50 con Brunete a la M-600 Brunete el Escorial.\r\n	M-503: Une Villanueva de la CaÃ±ada con la M-50/ Majadahonda\r\n								\r\nAutobÃºs: \r\n	LÃ­nea 627: MADRID â€“ BRUNETE. Salidas desde el Intercambiador de Transportes de Moncloa (Metro Moncloa), cada 10 minutos aprox. A partir de las 07:00 hs. En dÃ­as laborables pasan por la U. Alfonso X y por la U. Camilo JosÃ© Cela.\r\n	LÃ­nea 581: MADRID (PRÃ­NCIPE PÃ­O: INTERCAMBIADOR, DÃ¡rsena 5 Planta -1 (nivel azul)) â€“ QUIJORNA. Salidas desde el Paseo de la Florida (Metro PrÃ­ncipe PÃ­o) cada 40 minutos aprox en verano cada hora.', 'Entrada General Adulto (+140cm de altura): 25,95â‚¬\r\nEntrada Infantil (De 90 a 140cm de altura): 20,95â‚¬\r\nEntrada Senior (Mayores de 65 aÃ±os): 18,95â‚¬\r\nEntrada persona con discapacidad: 18,95â‚¬\r\nEntrada Menos de 90 cm: GRATIS\r\n						\r\n*Para cualquier entrada (que no sea la general) se deberÃ¡ presentar un tÃ­tulo oficial que verifique la tarifa', 'El Aquopolis es parque acuático con un montón de atracciones donde te lo pasarás genial. Es propiedad de Parques Reunidos, SA'),
(17, 'Parque Warner Madrid', 'Parque', 'imgLugares/warner.jpg', 'Carretera A-4, salida 22 Madrid, Madrid EspaÃ±a', 0, 'L 11:30 20:00 M 11:30 20:00 X 11:30 20:00 J 11:30 20:00 V 11:30 20:00 S 11:30 23:55 D 11:30 22:00', 'Coche: \r\n   Carretera A-4, salida 22 y sigue las seÃ±alizaciones.\r\n\r\nRenfe + bus:\r\n   Parada Pinto (lÃ­nea C-3) y allÃ­ se coja el autobÃºs 413 de \"La Veloz\"\r\n\r\nBus:\r\n   LÃ­nea 412 de \"La Veloz\" (se coge en el intercambiador de Villaverde Bajo).\r\n   Bus en MÃ©ndez Ãlvaro (el billete para este bus se compara en la pÃ¡gina de la Warner)\r\n\r\n', 'Entrada individual (+140cm): 39,90 â‚¬\r\nEntrada Junior (+100cm): 29,90 â‚¬\r\nEntrada Senior (mayores de 60 aÃ±os): 29,90 â‚¬\r\nEntrada Individual con documento de Familia Numerosa: 29,90 â‚¬\r\nEntrada Junio con documento de Familia Numerosa: 25,90 â‚¬\r\nEntrada Persona con discapacidad (igual o +33%): 25,90 â‚¬\r\nNiÃ±os (menosres de 100cm): GRATIS\r\n\r\n*La entrada para personas con discapacidad incluye un acompaÃ±ante gratis y acceso rÃ¡pido a las atracciones. SerÃ¡ necesario presentar un documento acreditativo de la discapacidad (33% o superior)', 'El Parque Warner Madrid es un parque temático ubicado en la localidad de San Martín de la Vega, en la Comunidad de Madrid, España. Posee la segunda torre de caída libre más alta del mundo y 42 atracciones.'),
(18, 'Parque de Atracciones', 'Parque', 'imgLugares/parqueDeAtracciones.jpg', 'Casa de Campo, s/n Madrid, Madrid EspaÃ±a', 0, 'L 12:00 22:00 M 12:00 22:00 X 12:00 22:00 J 12:00 22:00 V 12:00 22:00 S 12:00 23:55 D 12:00 22:00', 'Coche:\r\n   Entrada directa por la N-V (carretera de Extremadura). Salida Parque de Atracciones.\r\n   M-30 direcciÃ³n Badajoz. Salida Parque de Atracciones / Casa de Campo\r\n\r\nMetro\r\n   EstaciÃ³n BatÃ¡n (lÃ­nea 10)\r\n\r\nAutobÃºs\r\n   LÃ­nea 33: PrÃ­ncipe PÃ­o - Casa de Campo\r\n   LÃ­nea 65: Plaza Jacinto Benavente - Colonia Gran CapitÃ¡n\r\n', 'Entrada General (mÃ¡s de 140cm): 31,90â‚¬\r\nEntrada Reducida (Entre 100 y 140cm): 24,90â‚¬\r\nEntrada Senior(+60 aÃ±os): 19,20â‚¬\r\nEntrada Persona con discapacidad (mÃ­nimo 33%)*: 19,60â‚¬\r\nEntrada Familia numerosa General: 27,15â‚¬\r\nEntrada Familia numersoa Reducida: 21,20â‚¬\r\nEntrada para menores de un metro: GRATIS\r\nEntrada para mayores de 65 aÃ±os acompaÃ±ados**: GRATIS\r\n\r\n*Personas con discapacidad: Personas con un 33% o mÃ¡s de discapacidad tiene una entrada especial a 19,60â‚¬ y ademÃ¡s un acompaÃ±ante entra gratis. Tanto la persona con discapacidad como el acompaÃ±ante podrÃ¡n entrar a las atracciones por el acceso rÃ¡pido.\r\n**Mayores de 65: tendrÃ¡n entrada gratis siempre que vayan acompaÃ±adas por una persona con entrada de pago o Pase Anual', 'El Parque de Atracciones de Madrid es un parque de atracciones de Madrid, en la zona de Batán de la Casa de Campo. Cuenta con dos puertas de entrada: la principal y la de la zona infantil.'),
(28, 'Cinesa Méndez Álvaro', 'Cine', 'imgLugares/cineMendezAlvaro.jpg', 'Calle Acanto, 2, Madrid, Madrid España', 0, 'L 12:00 23:59 M 12:00 23:59 X 12:00 23:59 J 12:00 23:59 V 12:00 23:59 S 12:00 23:59 D 12:00 23:59', 'No definido', 'Depende de la película, los horarios también pueden cambiar', 'Películas de estreno en cadena de cines multisala con proyectores digitales y cantina con bebida y palomitas.'),
(29, 'Cine Renoir Retiro', 'Cine', 'imgLugares/cineRenoir.jpg', 'Calle de Narváez, 42, Madrid, Madrid España', 915, 'L 12:00 23:59 M 12:00 23:59 X 12:00 23:59 J 12:00 23:59 V 12:00 23:59 S 12:00 23:59 D 12:00 23:59', 'No definido', 'Depende de la película', 'Últimos estrenos en versión original en un cine de toda la vida que ofrece la opción de alquilar sus salas.'),
(30, 'Cine Acteón', 'Cine', 'imgLugares/cineActeon.jpg', 'Calle Montera, 31, Madrid, Madrid España', 915, 'L 12:00 23:59 M 12:00 23:59 X 12:00 23:59 J 12:00 23:59 V 12:00 23:59 S 12:00 23:59 D 12:00 23:59', 'No definido', 'Depende de la película', 'No definida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Titulo` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `Subtitulo` varchar(50) NOT NULL,
  `Resumen` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fuente` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Imagen` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Titulo`, `ID`, `Subtitulo`, `Resumen`, `Descripcion`, `Fuente`, `Fecha`, `Imagen`) VALUES
('prueba 2', 3, '1', '1', '234', '1', '2017-05-18 10:24:28', 'imgNoticias/o.jpg'),
('prueba 2', 4, '1', '1', '234', '1', '2017-05-18 20:09:50', 'imgNoticias/ALBARICOQUE-buena.jpg'),
('Titulo', 13, 'Subtitulo', 'Resumen', 'Descripción', 'Fuente', '2017-06-03 18:00:05', 'imgNoticias/descarga.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Mapa` varchar(100) NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Punto_partida` varchar(30) NOT NULL,
  `Punto_destino` varchar(30) NOT NULL,
  `Parrafo1` text NOT NULL,
  `Foto1` varchar(100) NOT NULL,
  `Parrafo2` text NOT NULL,
  `Foto2` varchar(100) NOT NULL,
  `Parrafo3` text NOT NULL,
  `Foto3` varchar(100) NOT NULL,
  `Parrafo4` text NOT NULL,
  `Foto4` varchar(100) NOT NULL,
  `Parrafo5` text NOT NULL,
  `Foto5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`ID`, `Nombre`, `Descripcion`, `Mapa`, `Duracion`, `Punto_partida`, `Punto_destino`, `Parrafo1`, `Foto1`, `Parrafo2`, `Foto2`, `Parrafo3`, `Foto3`, `Parrafo4`, `Foto4`, `Parrafo5`, `Foto5`) VALUES
(1, 'Ruta de los deportistas', 'Con esta ruta podréis disfrutar del ámbito deportivo madrileño así como de una tarde de compras para los más aficionados.', 'imgRutas/rutaDeportistas.png', 8, 'Plaza de Castilla', 'Calle Orense', 'Bueno ruteros para esta ruta comenzaremos en Plaza de Castilla donde podremos ver las Torres Kio muy importantes en nuestra ciudad.', 'imgRutas/plazaCastilla.jpg', 'A continuación, bajaremos toda la Castellana hasta llegar al estadio Santiago Bernabeu, donde haremos un tour por el estadio donde podremos visitar los vestuarios y la colección de copas del Real Madrid entre otros. Por ello, es imprescindible que el día que vayamos a hacer esta ruta, no haya partido del Real del Madrid en el Santiago Bernabeu, ya que el tour no se realiza durante esas horas.', 'imgRutas/bernabeu.jpg', 'Tras la visita, es ¡hora de comer! Uno de los sitios más recomendados se situa en la calle Raimundo Fernández Villaverde número 44, llamado La Imperial, donde hacen unos boquerones adobados riquísimos. Otra opción, es a lo largo de la castellana pasado el Santiago Bernabeu, llamado Complejo Azca, donde hay una larga lista de restaurantes para comer, desde italianos como el Ginos hasta restaurantes de comida rápida como el Burguer King.\r\n', 'imgRutas/orense.jpg', 'La tarde la dedicaremos visitar Nuevos Ministerios y la Calle Orense. La plaza de Nuevos Ministerios esta respleta de puestecitos artesanales encantadores, donde poder comprar algún regalo a un familiar o pareja. Por si no nos hemos cansado de compras, la calle Orense esta llena de tiendas, pero esta vez de marcas famosas como Zara o Mango. De entre medias, también podemos tomar algún café o tentenpie a lo largo de esta calle en sitios como Rodilla o el Starbucks.', 'imgRutas/nuevosmin3.jpg', '', ''),
(2, 'Un día por los Jardines del Retiro', 'En esta ruta comenzaremos desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.', 'imgRutas/rutaRetiro.png', 11, 'Plaza de Sol', 'Museo Reina Sofía', 'Buenos días ruteros para la ruta de hoy comenzaceros desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.\r\n\r\nComenzaremos recorriendo la calle de Alcalá, pasando por el metro de Sevilla hasta alcanzar la Plaza de Cibeles. Esta plaza es uno de los principales símbolos madrileños, la cual representa una importante cultura en nuestra ciudad.', 'imgRutas/cibeles.jpg', 'Continuaremos por la misma calle hasta llegar a la Puerta de Alcalá, otro gran símbolo de Madrid. Aquí, se encuentra la entrada al parque del Retiro.', 'imgRutas/alcala.jpg', 'Este parque es uno de los más grandes de nuestra ciudad donde podrás visitar monumentos como el de Alfonso XII o el Palacio de Velazquez, además de poder pasar un gran día de piknik con la familia y amigos. Y sin olvidarnos de la posibilidad de alquilar una barca para dar una vuelta por el estanque del Retiro.', 'imgRutas/retiro.jpg', 'Para por la tarde, nos espera una visita al Reina Sofía. Para llegar simplemente tendremos que recorrer la calle de Alfonso XII hasta llegar a Atocha. En la calle Ronda de Atocha se encuentra el aclamado Museo Nacional de Arte Reina Sofía, donde podremos disfrutar de un arte clásico y a la vez contemporáneo.', 'imgRutas/reinaSofia.jpg', '', ''),
(3, 'Una Ruta Por Las Calles Del Centro De Madrid', 'En esta apasionada ruta tendremos que madrugar para recorrer el centro de Madrid donde conoceremos y visitaremos maravillosos monumentos y sitios de interés.\r\n\r\n', 'imgRutas/rutaCentro.png', 10, 'Plaza de Sol', 'Museo del Prado', '¡¡Hola ruteros!! Para esta ruta nos pondremos las botas de andar para recorrer las calles madrileñas del centro.\r\n\r\nComenzaremos en la famosa Plaza de Sol, donde podremos ver el kilómetro 1 (donde comienzan todas las carreteras madrileñas). A partir de allí, bajaremos toda la calle Arenal donde podemos vistar muchas tiendas y comprar algún que otro recuerdo. Al final de esta calle llegaremos a Plaza España donde se situa el gran Teatro Real, teatro de pera de Madrid, considerado uno de los más importantes de España y Europa, y es uno de los monumentos más emblemáticos de la ciudad.', 'imgRutas/sol.png', 'Tras su visita, es hora de un descanso, por ello nos dirijiremos callejeando hasta llegar a Callao. Desde allí bajaremos hacia la calle Postigo de San Martín donde encontraremos una de las mejores chocolaterias de Madrid, La Chocolatería Valor. Aquí podremos tomar un chocolate caliente con churros que viene bien en los días de invierno.', 'imgRutas/callao.jpg', 'Una vez recargadas las pilas volveremos a Callao para poder alcanzar la calle Gran Vía, una de las calles más famosas de Madríd, por no decir la que más. En esta larga calle se sitian una larga lista de tiendas en las que poder comprar, como: Primark, Berska, Pull & Bear... y sin olvidarnos de un monton de restaurantes en los que podemos comer. Para los apasionados de la comida asiática cerca de Gran Vía, en la calle Hortaleza, se encuentra un restaurante muy conocido entre los apasionados del sushi llamado Miss Sushi Hortaleza (¡¡Recordar!! Deberemos recorrer la Gran Vía en dir. Banco de España).', 'imgRutas/gvia2.jpg', 'Al final de esta calle alcanzaremos la Plaza de Cibeles, muy conocida entre los madrileños (sobre todo los madridistas).', 'imgRutas/cibeles2.jpg', 'Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!\r\n\r\nRecorreremos finalmente el Paseo del Prado para llegar al Museo del Prado, uno de los museos más importantes de la ciudad.', 'imgRutas/museoDelPrado.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `Nombre` varchar(100) NOT NULL,
  `Imagen` varchar(70) NOT NULL,
  `Precio` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`Nombre`, `Imagen`, `Precio`) VALUES
('Balón Real Madrid Azul', 'imgTienda/balon3.jpg', '19.95'),
('Balón Real Madrid Capitano 2016', 'imgTienda/balon4.jpg', '24.95'),
('Camiseta 2ª Equipación Bale Real Madrid', 'imgTienda/camiseta1.jpg', '80.00'),
('Camiseta Baloncesto Real Madrid 2016/2017', 'imgTienda/camiseta2.jpg', '50.00'),
('Camiseta Básica Atlético De Madrid', 'imgTienda/camiseta3.jpg', '80.00'),
('Camiseta Básica Mujer Real Madrid', 'imgTienda/camiseta4.jpg', '35.00'),
('Camiseta Básica Real Madrid Fútbol', 'imgTienda/camiseta5.jpg', '40.00'),
('Camiseta Blanca \"I Love Madrid\"', 'imgTienda/camiseta6.jpg', '25.00'),
('Camiseta Cristiano Ronaldo Real Madrid', 'imgTienda/camiseta7.jpg', '90.00'),
('Camiseta Marcelo Real Madrid', 'imgTienda/camiseta8.jpg', '90.00'),
('Camiseta Morada Mujer Real Madrid', 'imgTienda/camiseta9.jpg', '35.00'),
('Camiseta Morada Real Madrid', 'imgTienda/camiseta10.jpg', '40.00'),
('Estatua Cibeles', 'imgTienda/estatua1.jpg', '22.00'),
('Estatuilla \"El Oso Y El Madroño\"', 'imgTienda/estatua2.jpg', '15.00'),
('Figurita De La Puerta De Alcalá', 'imgTienda/figura1.jpg', '18.00'),
('Imán Nevera Madrid', 'imgTienda/iman1.jpg', '8.00'),
('Imán Nevera Neptuno', 'imgTienda/iman2.jpg', '7.00'),
('Imán Nevera Palacio Real', 'imgTienda/iman3.jpg', '7.00'),
('Pantalón Baloncesto Real Madrid 2016/2017', 'imgTienda/pantalon1.jpg', '40.00'),
('Polo Azul Real Madrid', 'imgTienda/polo1.jpg', '50.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(30) NOT NULL,
  `Id_usuario` varchar(25) NOT NULL,
  `Contrasenia` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tipo` enum('admin','normal') NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Id_usuario`, `Contrasenia`, `Email`, `Tipo`) VALUES
('AndreaM', 'AndreaM', '$2y$10$WAMAntwjK1Ezko1nw9rIC.xke/TXjkmJ/w0iRTQGGZsrAMxHKCKCy', 'andrea@andrea.com', 'normal'),
('David', 'David', '$2y$10$zrs4dv39uki09zII8/V.IuJcztqU57zO54jKBnIktO/AcMhBpBoPC', 'david@david.com', 'normal'),
('Gema', 'Gema', '$2y$10$PID8oRzznOLwWr3muTa5yuiFPJb4icqRvhzvErSRqFLs7Ho0tj.DS', 'gema@gema.com', 'admin'),
('paloguti', 'paloguti', '$2y$10$fxNdyidTRYosaHiXG1Ls5.rxcCEn4WWpgBt1L94yx1FUhRpZZLDhq', 'paloguti@paloma.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `Nombre` varchar(30) NOT NULL,
  `Imagen` varchar(70) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`Nombre`, `Imagen`, `Descripcion`) VALUES
('Catedral de La Almudena', 'imgVisitas/laAlmudena.jpg', 'La Santa Iglesia Catedral de Santa María la Real de la Almudena, conocida simplemente como Catedral de la Almudena es un templo catedralicio de culto católico, dedicado a la Virgen María bajo la advocación de la Almudena.\r\n\r\nLa catedral está ubicada en el centro histórico de Madrid, según recientes excavaciones sobre el lugar que ocupó la Judería de Madrid . La fachada principal se encuentra frente al Palacio Real. La fachada del crucero mira hacia la calle de Bailén y el acceso a la cripta se realiza por la cuesta de la Vega, al final de la calle Mayor. A diferencia de la mayoría de templos cristianos, de orientación este-oeste, la catedral tiene una orientación norte-sur, fruto de su concepción como parte integrante del conjunto del Palacio Real.\r\n\r\nLa catedral es el principal templo de la Archidiócesis de Madrid, sede del arzobispo y del capítulo metropolitano.'),
('Círculo De Bellas Artes', 'imgVisitas/circuloBellasArtes.jpg', 'El Círculo de Bellas Artes (CBA) es una entidad cultural privada sin ánimo de lucro localizada en la calle Alcalá, nº 42, 28014 Madrid, España, fundada en 1880. Desde 1921 está declarado “Centro de Protección de las Bellas Artes y de Utilidad Pública”. Es un centro multidisciplinar, en él se desarrollan actividades que abarcan desde las artes plásticas hasta la literatura pasando por la ciencia, la filosofía, el cine o las artes escénicas.'),
('Ermita de San Antonio', 'imgVisitas/ermitaSanAntonio.jpg', 'La ermita de San Antonio de la Florida (conocida también como Real Ermita de San Antonio de la Florida), se encuentra situada en la plaza del mismo nombre, y se considera como la única superviviente de las tres ermitas dedicadas a san Antonio de Padua que hubo a las afueras de Madrid (esta de la Florida, Alemanes y Retiro). Se ubica en el distrito de Moncloa-Aravaca y es la tercera ermita construida en las cercanías. Fue catalogada como monumento histórico-artístico en el año 1905. La denominación de la ermita, debería ser desde comienzos del siglo XX, en plural, es decir: las Ermitas de San Antonio. Son dos ermitas similares que desde 1929 se han especializado en dos vertientes: una de ellas ofrece al público las decoraciones murales obra de Francisco de Goya (siendo además museo y panteón del pintor), mientras que la otra está habilitada sólo para el culto religioso.'),
('Gran Vía', 'imgVisitas/granVia.jpg', 'La Gran Vía es una de las principales calles de Madrid (España). Comienza en la calle de Alcalá y termina en la plaza de España. Es un importante hito en la ciudad desde su construcción a principios de siglo XX visto desde el punto de vista comercial, turístico y de ocio. En este último aspecto es famosa por sus cines, si bien en los últimos años algunos de ellos han cerrado y otros se han reconvertido con gran éxito al teatro musical, por lo que el tramo comprendido entre la plaza de Callao y la de España se conoce como el Broadway madrileño. El tramo comprendido entre la red de San Luis y la plaza de Callao alberga en la actualidad numerosas tiendas de cadenas internacionales de moda.'),
('Jardínes de Sabatini', 'imgVisitas/jardinesDeSabatini.jpg', 'Los jardines de Sabatini se encuentran situados frente a la fachada norte del Palacio Real de Madrid (España), entre la calle de Bailén y la cuesta de San Vicente. Ocupan una extensión de 2,54 hectáreas.'),
('Las ventas', 'imgVisitas/ventas.jpg', 'La Plaza de Toros de Las Ventas es la mayor plaza de toros de España y con 23.798 espectadore la tercera con más aforo del mundo, tras las de México y Valencia (Venezuela). También es la segunda más grande en cuanto al diámetro de su ruedo tras la plaza de Ronda.Está situada en Madrid, en el barrio de La Guindalera en el distrito de Salamanca, y suele estar considerada por profesionales, aficionados y críticos como la más importante del mundo, seguida de La Maestranza de Sevilla'),
('Mercado de San Miguel', 'imgVisitas/mercadoSanMiguel.jpg', 'El Mercado de San Miguel, ubicado en la plaza del mismo nombre, junto a la Plaza Mayor de Madrid (España), es un mercado de titularidad privada cuya característica más remarcable es que conserva su estructura original de hierro de principios del siglo XX Tiene dos plantas y una superficie de 1.200 metros cuadrados.'),
('Monasterio del Escorial', 'imgVisitas/monasterioEscorial.jpg', 'El Monasterio de San Lorenzo de El Escorial es un complejo que incluye un palacio real, una basílica, un panteón, una biblioteca y un monasterio. Se encuentra en la localidad de San Lorenzo de El Escorial, en la Comunidad de Madrid, España, y fue construido entre 1563 y 1584.\r\n\r\nEl palacio fue residencia de la Familia Real Española, la basílica es lugar de sepultura de los reyes de España y el monasterio –fundado por monjes de la Orden de San Jerónimo– está ocupado actualmente por frailes de la Orden de San Agustín. Es una de las más singulares arquitecturas renacentistas de España y de Europa. Situado en San Lorenzo de El Escorial, ocupa una superficie de 33.327 m², sobre la ladera meridional del monte Abantos, a 1028 m de altitud, en la Sierra de Guadarrama. Está gestionado por Patrimonio Nacional.'),
('Palacio Real', 'imgVisitas/palacioReal.jpg', 'El Palacio Real de Madrid es la residencia oficial del rey de España; no obstante, los actuales reyes no habitan en él, sino en el Palacio de la Zarzuela, por lo que es utilizado para ceremonias de Estado y actos solemnes. Con una extensión de 135 000 m² y 3418 habitaciones (en superficie, casi el doble que el Palacio de Buckingham o el Palacio de Versalles), es el palacio real más grande de Europa Occidental, y uno de los más grandes del mundo. Alberga un valioso patrimonio histórico-artístico, destacando el conjunto de instrumentos musicales conocido como los Stradivarius Palatinos, y colecciones muy relevantes de otras disciplinas como pintura, escultura y tapicería. Las salas de Estado y las colecciones artísticas están abiertas a las visitas siempre que no haya actos oficiales\r\n\r\nEs conocido también como Palacio de Oriente, a pesar de estar situado en la parte más occidental de Madrid, debido a su ubicación en la Plaza de Oriente, llamada así al estar situada al este del palacio. A eje con el palacio, y enfrentado, se encuentra al otro extremo de la plaza el Teatro Real.'),
('Parque Europa', 'imgVisitas/parqueEuropa.jpg', 'El Parque Europa es un parque municipal de la ciudad de Torrejón de Ardoz en la Comunidad de Madrid (España), inaugurado en septiembre de 2010 Se trata de la mejora y ampliación del antiguo parque del arroyo Ardoz.\r\n\r\nEl parque cuenta con 190.000 metros cuadrados de zonas verdes, realizado con un completo programa de paisajismo a base de especies naturales y monumentos asociados a los distintos países que constituyen la Unión Europea, incluidos monumentos históricos de España.'),
('Plaza de Santa Ana', 'imgVisitas/plazaDeSantaAna.jpg', 'La plaza de Santa Ana (también conocida antiguamente por plaza del Príncipe Alfonso)es una plaza urbana ubicada en el centro de Madrid. Esta plaza, que ha cambiado en diversas ocasiones a lo largo de su historia, se encuentra en el denominado Barrio de las Letras.'),
('Puerta de Europa', 'imgVisitas/puertaDeEuropa.jpg', 'Las dos torres que conforman la llamada Puerta de Europa, también conocidas como Torres KIO (debido a que fueron promovidas por la empresa kuwaití KIO, Kuwait Investments Office) son dos torres inclinadas la una hacia la otra, 15° respecto a la vertical, con una altura de 114 m y 26 plantas. La Puerta de Europa son las segundas torres gemelas más altas de España, tras las Torres de Santa Cruz en Santa Cruz de Tenerife, con 120 metros sin contar los pararrayos. Están situadas en la Plaza de Castilla de Madrid (España), entre el centro financiero de AZCA y las Cuatro Torres Business Area.'),
('Puerta del Sol', 'imgVisitas/puertaDelSol.jpg', 'La Puerta del Sol es una plaza de Madrid. Aquí se encuentra desde 1950 el denominado Kilómetro Cero de las carreteras radiales españolas. El edificio más antiguo de la Puerta del Sol es la Casa de Correos y en ella destaca el reloj de torre que fue construido y donado en el siglo XIX por José Rodríguez de Losada, y cuyas campanadas de las 12 de la noche del 31 de diciembre marcan la tradicional toma de las doce uvas a la gran mayoría de los españoles. Dichas campanadas se empezaron a televisar el 31 de diciembre de 1962 en La 1 de TVE, a partir de ese año no se ha dejado de retransmitir por diversos canales de televisión de España. La Puerta del Sol es un lugar de cita, un lugar de paso entre diversas partes de Madrid. Es visita turística obligada de aquellos que se acercan a Madrid.\r\n\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `gastronomia`
--
ALTER TABLE `gastronomia`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `E-mail` (`Email`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `gastronomia`
--
ALTER TABLE `gastronomia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
