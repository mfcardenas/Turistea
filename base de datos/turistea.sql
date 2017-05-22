-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2017 a las 12:41:20
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
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
`Id` int(11) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Imagen` varchar(30) NOT NULL,
  `Lugar` varchar(30) NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Anecdota` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`Id`, `Titulo`, `Imagen`, `Lugar`, `Autor`, `Anecdota`) VALUES
(1, 'Navidad nocturna madrileña', 'experiencia1.jpg', 'Plaza de Sol', '', 'Ha sido la mejor Navidad de mi vida, qué decoración, qué estupendo!! Os recomiendo ir si o si! Y MIRAD QUE FOTAZA!!!!'),
(2, 'Anochecer en Debod', 'experiencia2.jpg', 'Templo de Debod', '', 'Creo que es una de las cosas más bonitas que he visto en mi vida, estoy encantadísimo, deseando volver. Si tenéis que elegir a donde ir porque va a anochecer, no dudéis e ir al templo de Debod.. LA PUESTA DE SOL ES LO MEJOR!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastronomia`
--

CREATE TABLE IF NOT EXISTS `gastronomia` (
  `Nombre` varchar(30) NOT NULL,
  `Imagen` varchar(20) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Horario` text NOT NULL,
  `Llegada` text NOT NULL,
  `Plato estrella` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE IF NOT EXISTS `lugares` (
`id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Tipo` enum('Teatro','Museo','Cine','Parque') NOT NULL,
  `Imagen` varchar(20) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Horario` text NOT NULL,
  `Llegada` text NOT NULL,
  `Precio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `Nombre`, `Tipo`, `Imagen`, `Direccion`, `Telefono`, `Horario`, `Llegada`, `Precio`) VALUES
(1, 'Nombre', 'Teatro', 'C:/Users/Paloma/Desk', 'Calle, Numero Localidad, Provincia PaÃ­s', 916666666, 'L 10:00:00 10:00:00 M 10:00:00 10:00:00 X 10:00:00 10:00:00 J 10:00:00 10:00:00 V 10:00:00 10:00:00 S 10:00:00 10:00:00 D 10:00:00 10:00:00', 'CÃ³mo llegar', 'Precio entradas'),
(2, 'Teatro nuevo', 'Teatro', 'C:/Users/Paloma/Desk', 'hola hola hola hola hola hola', 2147483647, 'L 10:00:00 10:00:00 M 10:00:00 10:00:00 X 10:00:00 10:00:00 J 10:00:00 10:00:00 V 10:00:00 10:00:00 S 10:00:00 10:00:00 D 10:00:00 10:00:00', 'llegar', 'precio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `Titulo` varchar(25) NOT NULL,
`ID` int(11) NOT NULL,
  `Subtitulo` varchar(25) NOT NULL,
  `Resumen` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fuente` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Imagen` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Titulo`, `ID`, `Subtitulo`, `Resumen`, `Descripcion`, `Fuente`, `Fecha`, `Imagen`) VALUES
('Prueba 1', 1, 'este es un subtitulo', 'holaaaaaaaaaaaaaaaaaaa :D', 'esto es la descripcion de la noticia assssssssssssss   ssssssssssssssss   sssssssssssssssssssssssaa     sssssssssss ssssssssssss ssssssss aaaaaaaa aaaa', 'url cualquiera', '2017-04-06 18:00:00', '../turistea/imgNoticias/alcala.jpg'),
('dsd', 2, 'dsd d', 'sd sdd', 'sd sd', 'sss ', '2017-05-17 19:43:10', '../Turiste/imgNoticias/p.jpg'),
('prueba 2', 3, '1', '1', '234', '1', '2017-05-18 10:24:28', '../Turiste/imgNoticias/o.jpg'),
('prueba 2', 4, '1', '1', '234', '1', '2017-05-18 20:09:50', '../Turiste/imgNoticias/ALBARICOQUE-buena.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `Nombre` varchar(60) NOT NULL,
  `Mapa` varchar(30) NOT NULL,
  `Duracion` int(5) NOT NULL,
  `Punto_partida` varchar(30) NOT NULL,
  `Punto_destino` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  `Parrafo1` text NOT NULL,
  `Foto1` varchar(30) NOT NULL,
  `Parrafo2` text,
  `Foto2` varchar(30) NOT NULL,
  `Parrafo3` text NOT NULL,
  `Foto3` varchar(30) NOT NULL,
  `Parrafo4` text NOT NULL,
  `Foto4` varchar(30) NOT NULL,
  `Parrafo5` text NOT NULL,
  `Foto5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`Nombre`, `Mapa`, `Duracion`, `Punto_partida`, `Punto_destino`, `Descripcion`, `Parrafo1`, `Foto1`, `Parrafo2`, `Foto2`, `Parrafo3`, `Foto3`, `Parrafo4`, `Foto4`, `Parrafo5`, `Foto5`) VALUES
(' Una Ruta Por Las Calles Del Centro De Madrid', 'rutaCentro.png', 10, 'Plaza de Sol', 'Museo del Prado', 'En esta apasionada ruta tendremos que madrugar para recorrer el centro de Madrid donde conoceremos y visitaremos maravillosos monumentos y sitios de interés.', '¡¡Hola ruteros!! Para esta ruta nos pondremos las botas de andar para recorrer las calles madrileñas del centro.\r\n\r\nComenzaremos en la famosa Plaza de Sol, donde podremos ver el kilómetro 1 (donde comienzan todas las carreteras madrileñas). A partir de allí, bajaremos toda la calle Arenal donde podemos vistar muchas tiendas y comprar algún que otro recuerdo. Al final de esta calle llegaremos a Plaza España donde se situa el gran Teatro Real, teatro de pera de Madrid, considerado uno de los más importantes de España y Europa, y es uno de los monumentos más emblemáticos de la ciudad.', 'sol.png', 'Tras su visita, es hora de un descanso, por ello nos dirijiremos callejeando hasta llegar a Callao. Desde allí bajaremos hacia la calle Postigo de San Martín donde encontraremos una de las mejores chocolaterias de Madrid, La Chocolatería Valor. Aquí podremos tomar un chocolate caliente con churros que viene bien en los días de invierno.', 'callao.jpg', 'Una vez recargadas las pilas volveremos a Callao para poder alcanzar la calle Gran Vía, una de las calles más famosas de Madríd, por no decir la que más. En esta larga calle se sitian una larga lista de tiendas en las que poder comprar, como: Primark, Berska, Pull & Bear... y sin olvidarnos de un monton de restaurantes en los que podemos comer. Para los apasionados de la comida asiática cerca de Gran Vía, en la calle Hortaleza, se encuentra un restaurante muy conocido entre los apasionados del sushi llamado Miss Sushi Hortaleza (¡¡Recordar!! Deberemos recorrer la Gran Vía en dir. Banco de España).', 'gvia2.jpg', 'Al final de esta calle alcanzaremos la Plaza de Cibeles, muy conocida entre los madrileños (sobre todo los madridistas).', 'cibeles2.jpg', 'Para concluir decir que esta ruta, pese a ser intensa, esta nos lleganará de cultura madrileña de todos los tipos, donde podremos difrutar de los sitios más importantes de Madrid y sin olvidarnos de que podremos comprar algún que otro regalito!!\r\n\r\nRecorreremos finalmente el Paseo del Prado para llegar al Museo del Prado, uno de los museos más importantes de la ciudad.\r\n\r\n', 'museodelPrado.jpg'),
('Ruta de los Deportistas', 'rutaDeportistas.png', 8, 'Plaza de Castilla', 'Calle Orense', 'Con esta ruta podréis disfrutar del ámbito deportivo madrileño asi como de una tarde de compras para los más aficionados.', 'Bueno ruteros para esta ruta comenzaremos en Plaza Castilla donde podremos ver las Torres Kio, muy importantes en nuestra ciudad.', 'plazaCastilla.jpg', 'A continuación, bajaremos toda la Castellana hasta llegar al estadio Santiago Bernabeu, donde haremos un tour por el estadio donde podremos visitar los vestuarios y la colección de copas del Real Madrid entre otros. Por ello, es imprescindible que el día que vayamos a hacer esta ruta, no haya partido del Real del Madrid en el Santiago Bernabeu, ya que el tour no se realiza durante esas horas.', 'bernabeu.jpg', 'Tras la visita, es ¡hora de comer! Uno de los sitios más recomendados se situa en la calle Raimundo Fernández Villaverde número 44, llamado La Imperial, donde hacen unos boquerones adobados riquísimos. Otra opción, es a lo largo de la castellana pasado el Santiago Bernabeu, llamado Complejo Azca, donde hay una larga lista de restaurantes para comer, desde italianos como el Ginos hasta restaurantes de comida rápida como el Burguer King.\r\n\r\nLa tarde la dedicaremos visitar Nuevos Ministerios y la Calle Orense. La plaza de Nuevos Ministerios esta respleta de puestecitos artesanales encantadores, donde poder comprar algún regalo a un familiar o pareja. Por si no nos hemos cansado de compras, la calle Orense esta llena de tiendas, pero esta vez de marcas famosas como Zara o Mango. De entre medias, también podemos tomar algún café o tentenpie a lo largo de esta calle en sitios como Rodilla o el Starbucks.', 'nuevosmin3.jpg', 'Espero que os guste esta recomendación de ruta, donde podréis visitar el famoso Santiago Bernabeu, uno de los lugares culturales más importantes de Madrid.\r\n\r\n', '', '', ''),
('Un día por los Jardines del Re', 'rutaRetiro.png', 11, 'Plaza de Sol', 'Museo Reina Sofía', 'En esta ruta comenzaremos desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.', 'Buenos días ruteros para la ruta de hoy comenzaceros desde la Plaza de Sol, icono único de Madrid, para embarcarnos en una larga ruta hacia los jardines del Retiro.\r\n\r\nComenzaremos recorriendo la calle de Alcalá, pasando por el metro de Sevilla hasta alcanzar la Plaza de Cibeles. Esta plaza es uno de los principales símbolos madrileños, la cual representa una importante cultura en nuestra ciudad.', 'cibeles.jpg', 'Continuaremos por la misma calle hasta llegar a la Puerta de Alcalá, otro gran símbolo de Madrid. Aquí, se encuentra la entrada al parque del Retiro.', 'alcala.jpg', 'Este parque es uno de los más grandes de nuestra ciudad donde podrás visitar monumentos como el de Alfonso XII o el Palacio de Velazquez, además de poder pasar un gran día de piknik con la familia y amigos. Y sin olvidarnos de la posibilidad de alquilar una barca para dar una vuelta por el estanque del Retiro.', 'retiro.jpg', 'Para por la tarde, nos espera una visita al Reina Sofía. Para llegar simplemente tendremos que recorrer la calle de Alfonso XII hasta llegar a Atocha. En la calle Ronda de Atocha se encuentra el aclamado Museo Nacional de Arte Reina Sofía, donde podremos disfrutar de un arte clásico y a la vez contemporáneo.', 'reinaSofia.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE IF NOT EXISTS `tienda` (
  `Nombre` varchar(100) NOT NULL,
  `Imagen` varchar(70) NOT NULL,
  `Precio` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`Nombre`, `Imagen`, `Precio`) VALUES
('Balón Adidas Real Madrid Con Lineas', 'img/balon1.jpg', '19.95'),
('Balón Baloncesto Adidas Morado', 'img/balon2.jpg', '29.95'),
('Balón Real Madrid Azul', 'img/balon3.jpg', '19.95'),
('Balón Real Madrid Capitano 2016', 'img/balon4.jpg', '24.95'),
('Camiseta 2ª Equipación Bale Real Madrid', 'img/camiseta1.jpg', '80.00'),
('Camiseta Baloncesto Real Madrid 2016/2017', 'img/camiseta2.jpg', '50.00'),
('Camiseta Básica Atlético De Madrid', 'img/camiseta3.jpg', '80.00'),
('Camiseta Básica Mujer Real Madrid', 'img/camiseta4.jpg', '35.00'),
('Camiseta Básica Real Madrid Fútbol', 'img/camiseta5.jpg', '40.00'),
('Camiseta Blanca "I Love Madrid"', 'img/camiseta6.jpg', '25.00'),
('Camiseta Cristiano Ronaldo Real Madrid', 'img/camiseta7.jpg', '90.00'),
('Camiseta Marcelo Real Madrid', 'img/camiseta8.jpg', '90.00'),
('Camiseta Morada Mujer Real Madrid', 'img/camiseta9.jpg', '35.00'),
('Camiseta Morada Real Madrid', 'img/camiseta10.jpg', '40.00'),
('Estatua Cibeles', 'img/estatua1.jpg', '22.00'),
('Estatuilla "El Oso Y El Madroño"', 'img/estatua2.jpg', '15.00'),
('Figurita De La Puerta De Alcalá', 'img/figura1.jpg', '18.00'),
('Imán Nevera Madrid', 'img/iman1.jpg', '8.00'),
('Imán Nevera Neptuno', 'img/iman2.jpg', '7.00'),
('Imán Nevera Palacio Real', 'img/iman3.jpg', '7.00'),
('Llavero Puerta De Alcalá', 'img/llavero1.php', '4.00'),
('Pantalón Baloncesto Real Madrid 2016/2017', 'img/pantalon1.jpg', '40.00'),
('Plato De Cerámica Con Relieve', 'img/plato1.jpg', '20.00'),
('Polo Azul Real Madrid', 'img/polo1.jpg', '50.00'),
('Polo Básico Real Madrid', 'img/polo2.jpg', '50.00'),
('Polo Manga Larga Real Madrid', 'img/polo3.jpg', '65.00'),
('Taza "I Love Madrid"', 'img/taza1.jpg', '14.00'),
('Taza Con Letras De Madrid', 'img/taza2.jpg', '14.00'),
('Taza Con Relieve', 'img/taza3.jpg', '14.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nombre` varchar(30) NOT NULL,
  `Id_usuario` varchar(25) NOT NULL,
  `Contrasenia` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Tipo` enum('admin','normal') NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Id_usuario`, `Contrasenia`, `Email`, `Tipo`) VALUES
('Andrea', 'AndreaM', '123', 'andrea@gmail.com', 'normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `Nombre` varchar(30) NOT NULL,
  `Imagen` varchar(70) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`Nombre`, `Imagen`, `Descripcion`) VALUES
('Catedral de La Almudena', 'img/laAlmudena.jpg', 'La Santa Iglesia Catedral de Santa María la Real de la Almudena, conocida simplemente como Catedral de la Almudena es un templo catedralicio de culto católico, dedicado a la Virgen María bajo la advocación de la Almudena.\r\n\r\nLa catedral está ubicada en el centro histórico de Madrid, según recientes excavaciones sobre el lugar que ocupó la Judería de Madrid . La fachada principal se encuentra frente al Palacio Real. La fachada del crucero mira hacia la calle de Bailén y el acceso a la cripta se realiza por la cuesta de la Vega, al final de la calle Mayor. A diferencia de la mayoría de templos cristianos, de orientación este-oeste, la catedral tiene una orientación norte-sur, fruto de su concepción como parte integrante del conjunto del Palacio Real.\r\n\r\nLa catedral es el principal templo de la Archidiócesis de Madrid, sede del arzobispo y del capítulo metropolitano.'),
('Círculo De Bellas Artes', 'img/circuloBellasArtes.jpg', 'El Círculo de Bellas Artes (CBA) es una entidad cultural privada sin ánimo de lucro localizada en la calle Alcalá, nº 42, 28014 Madrid, España, fundada en 1880. Desde 1921 está declarado “Centro de Protección de las Bellas Artes y de Utilidad Pública”. Es un centro multidisciplinar, en él se desarrollan actividades que abarcan desde las artes plásticas hasta la literatura pasando por la ciencia, la filosofía, el cine o las artes escénicas.'),
('Ermita de San Antonio', 'img/ermitaSanAntonio.jpg', 'La ermita de San Antonio de la Florida (conocida también como Real Ermita de San Antonio de la Florida), se encuentra situada en la plaza del mismo nombre, y se considera como la única superviviente de las tres ermitas dedicadas a san Antonio de Padua que hubo a las afueras de Madrid (esta de la Florida, Alemanes y Retiro). Se ubica en el distrito de Moncloa-Aravaca y es la tercera ermita construida en las cercanías. Fue catalogada como monumento histórico-artístico en el año 1905. La denominación de la ermita, debería ser desde comienzos del siglo XX, en plural, es decir: las Ermitas de San Antonio. Son dos ermitas similares que desde 1929 se han especializado en dos vertientes: una de ellas ofrece al público las decoraciones murales obra de Francisco de Goya (siendo además museo y panteón del pintor), mientras que la otra está habilitada sólo para el culto religioso.'),
('Gran Vía', 'img/granVia.jpg', 'La Gran Vía es una de las principales calles de Madrid (España). Comienza en la calle de Alcalá y termina en la plaza de España. Es un importante hito en la ciudad desde su construcción a principios de siglo XX visto desde el punto de vista comercial, turístico y de ocio. En este último aspecto es famosa por sus cines, si bien en los últimos años algunos de ellos han cerrado y otros se han reconvertido con gran éxito al teatro musical, por lo que el tramo comprendido entre la plaza de Callao y la de España se conoce como el Broadway madrileño. El tramo comprendido entre la red de San Luis y la plaza de Callao alberga en la actualidad numerosas tiendas de cadenas internacionales de moda.'),
('Jardínes de Sabatini', 'img/jardinesDeSabatini.jpg', 'Los jardines de Sabatini se encuentran situados frente a la fachada norte del Palacio Real de Madrid (España), entre la calle de Bailén y la cuesta de San Vicente. Ocupan una extensión de 2,54 hectáreas.'),
('Las ventas', 'img/ventas.jpg', 'La Plaza de Toros de Las Ventas es la mayor plaza de toros de España y con 23.798 espectadore la tercera con más aforo del mundo, tras las de México y Valencia (Venezuela). También es la segunda más grande en cuanto al diámetro de su ruedo tras la plaza de Ronda.Está situada en Madrid, en el barrio de La Guindalera en el distrito de Salamanca, y suele estar considerada por profesionales, aficionados y críticos como la más importante del mundo, seguida de La Maestranza de Sevilla'),
('Mercado de San Miguel', 'img/mercadoSanMiguel.jpg', 'El Mercado de San Miguel, ubicado en la plaza del mismo nombre, junto a la Plaza Mayor de Madrid (España), es un mercado de titularidad privada cuya característica más remarcable es que conserva su estructura original de hierro de principios del siglo XX Tiene dos plantas y una superficie de 1.200 metros cuadrados.'),
('Monasterio del Escorial', 'img/monasterioEscorial.jpg', 'El Monasterio de San Lorenzo de El Escorial es un complejo que incluye un palacio real, una basílica, un panteón, una biblioteca y un monasterio. Se encuentra en la localidad de San Lorenzo de El Escorial, en la Comunidad de Madrid, España, y fue construido entre 1563 y 1584.\r\n\r\nEl palacio fue residencia de la Familia Real Española, la basílica es lugar de sepultura de los reyes de España y el monasterio –fundado por monjes de la Orden de San Jerónimo– está ocupado actualmente por frailes de la Orden de San Agustín. Es una de las más singulares arquitecturas renacentistas de España y de Europa. Situado en San Lorenzo de El Escorial, ocupa una superficie de 33.327 m², sobre la ladera meridional del monte Abantos, a 1028 m de altitud, en la Sierra de Guadarrama. Está gestionado por Patrimonio Nacional.'),
('Palacio Real', 'img/palacioReal.jpg', 'El Palacio Real de Madrid es la residencia oficial del rey de España; no obstante, los actuales reyes no habitan en él, sino en el Palacio de la Zarzuela, por lo que es utilizado para ceremonias de Estado y actos solemnes. Con una extensión de 135 000 m² y 3418 habitaciones (en superficie, casi el doble que el Palacio de Buckingham o el Palacio de Versalles), es el palacio real más grande de Europa Occidental, y uno de los más grandes del mundo. Alberga un valioso patrimonio histórico-artístico, destacando el conjunto de instrumentos musicales conocido como los Stradivarius Palatinos, y colecciones muy relevantes de otras disciplinas como pintura, escultura y tapicería. Las salas de Estado y las colecciones artísticas están abiertas a las visitas siempre que no haya actos oficiales\r\n\r\nEs conocido también como Palacio de Oriente, a pesar de estar situado en la parte más occidental de Madrid, debido a su ubicación en la Plaza de Oriente, llamada así al estar situada al este del palacio. A eje con el palacio, y enfrentado, se encuentra al otro extremo de la plaza el Teatro Real.'),
('Parque Europa', 'img/parqueEuropa.jpg', 'El Parque Europa es un parque municipal de la ciudad de Torrejón de Ardoz en la Comunidad de Madrid (España), inaugurado en septiembre de 2010 Se trata de la mejora y ampliación del antiguo parque del arroyo Ardoz.\r\n\r\nEl parque cuenta con 190.000 metros cuadrados de zonas verdes, realizado con un completo programa de paisajismo a base de especies naturales y monumentos asociados a los distintos países que constituyen la Unión Europea, incluidos monumentos históricos de España.'),
('Plaza de Santa Ana', 'img/plazaDeSantaAna.jpg', 'La plaza de Santa Ana (también conocida antiguamente por plaza del Príncipe Alfonso)es una plaza urbana ubicada en el centro de Madrid. Esta plaza, que ha cambiado en diversas ocasiones a lo largo de su historia, se encuentra en el denominado Barrio de las Letras.'),
('Puerta de Alcalá', 'img/puertaDeAlcala.jpg', 'La Puerta de Alcalá es una de las cinco antiguas puertas reales que daban acceso a la ciudad de Madrid (España)\r\n\r\nSe encuentra situada en el centro de la rotonda de la Plaza de la Independencia. En el cruce de las calles de Alcalá, Alfonso XII, Serrano y Salustiano Olózaga, junto a las puertas del Retiro: Puerta de España, Puerta de la Independencia (entrada principal a los jardines del Retiro) y Puerta de Hernani'),
('Puerta de Europa', 'img/puertaDeEuropa.jpg', 'Las dos torres que conforman la llamada Puerta de Europa, también conocidas como Torres KIO (debido a que fueron promovidas por la empresa kuwaití KIO, Kuwait Investments Office) son dos torres inclinadas la una hacia la otra, 15° respecto a la vertical, con una altura de 114 m y 26 plantas. La Puerta de Europa son las segundas torres gemelas más altas de España, tras las Torres de Santa Cruz en Santa Cruz de Tenerife, con 120 metros sin contar los pararrayos. Están situadas en la Plaza de Castilla de Madrid (España), entre el centro financiero de AZCA y las Cuatro Torres Business Area.'),
('Puerta del Sol', 'img/puertaDelSol.jpg', 'La Puerta del Sol es una plaza de Madrid. Aquí se encuentra desde 1950 el denominado Kilómetro Cero de las carreteras radiales españolas. El edificio más antiguo de la Puerta del Sol es la Casa de Correos y en ella destaca el reloj de torre que fue construido y donado en el siglo XIX por José Rodríguez de Losada, y cuyas campanadas de las 12 de la noche del 31 de diciembre marcan la tradicional toma de las doce uvas a la gran mayoría de los españoles. Dichas campanadas se empezaron a televisar el 31 de diciembre de 1962 en La 1 de TVE, a partir de ese año no se ha dejado de retransmitir por diversos canales de televisión de España. La Puerta del Sol es un lugar de cita, un lugar de paso entre diversas partes de Madrid. Es visita turística obligada de aquellos que se acercan a Madrid.\r\n\r\n'),
('Templo de Debod', 'img/temploDebod.jpg', 'El Templo de Debod es un edificio del antiguo Egipto localizado actualmente en Madrid (España). Está situado al oeste de la Plaza de España, junto al Paseo del Pintor Rosales (Parque del Oeste), en un alto donde se encontraba el Cuartel de la Montaña (en el que se produjo un sangriento episodio de la Guerra Civil Española). Al ser trasladado a España, se situó de manera que conservase aproximadamente la misma orientación que en su lugar de origen, de este a oeste.\r\n\r\nEl Templo de Debod fue un regalo de Egipto a España en 1968 en compensación por la ayuda española tras el llamamiento internacional realizado por la Unesco para salvar los templos de Nubia, principalmente el de Abu Simbel, en peligro de desaparición debido a la construcción de la presa de Asuán. Egipto donó cuatro de los templos salvados a distintas naciones colaboradoras');

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
 ADD PRIMARY KEY (`Nombre`);

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
 ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
 ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Id_usuario`), ADD UNIQUE KEY `E-mail` (`Email`);

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
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
