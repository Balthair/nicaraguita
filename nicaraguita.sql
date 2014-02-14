/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : nicaraguita

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-02-14 17:29:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `permalink` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('12', 'Nacionales', 'nacionales', '8');
INSERT INTO `categorias` VALUES ('13', 'Internacionales', 'internacionales', '0');
INSERT INTO `categorias` VALUES ('14', 'Circuitos', 'circuitos', '8');
INSERT INTO `categorias` VALUES ('16', 'Boletos', 'boletos', '8');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `seccion_id` int(11) NOT NULL,
  `extension` char(5) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=809 DEFAULT CHARSET=utf8 COMMENT='seccion1 - contenidos2 - noticias3 - proyectosseccion_idEs e';

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('803', 'package', '8', 'jpg');
INSERT INTO `images` VALUES ('804', 'package', '8', 'jpg');
INSERT INTO `images` VALUES ('805', 'package', '8', 'jpg');
INSERT INTO `images` VALUES ('806', 'package', '1', 'jpg');
INSERT INTO `images` VALUES ('808', 'categorias', '16', 'jpg');

-- ----------------------------
-- Table structure for packages
-- ----------------------------
DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `permalink` varchar(50) NOT NULL,
  `recomendado` tinyint(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of packages
-- ----------------------------
INSERT INTO `packages` VALUES ('1', 'San Juan del Sur', '12', '<p>El que una vez fue un tranquilo y pintoresco pueblo de pescadores, es ahora uno de los destinos tur&iacute;sticos m&aacute;s visitados por turistas nacionales y extranjeros. La ciudad de San Juan del Sur lo tiene pr&aacute;cticamente todo: hoteles, restaurantes, bares, clubs, escuelas de idioma, oficina postal, un parque central, un mercado municipal, un puerto, una estaci&oacute;n de polic&iacute;a y la famosa bah&iacute;a que le da su nombre. Sus fiestas se dan en honor a San Juan Bautista y la Vigen del Carmen, el 24 de Junio y 16 de Julio respectivamente.</p>\r\n<p>Esta es la parada obligatoria de viajeros que buscan practicar el surf y relajarse en playas casi v&iacute;rgenes. M&aacute;s de una docena de &eacute;stas se encuentran a lo largo del municipio, entre ellas las m&aacute;s famosas: Marsella, Maderas, Majagual, Remanso, El Coco, Las Salinas, El Astillero y El Yankee. En algunas se pueden encontrar hoteles, casas particulares o comunidades que ofrecen opciones de alojamiento.</p>\r\n<p>Menci&oacute;n especial requieren dos de las playas del Sur: el Refugio de Vida Silvestre Playa La Flor, donde todos los a&ntilde;os se puede apreciar como espect&aacute;culo natural las arribadas de millares de tortugas paslamas que llegan a desovar, y posteriormente el nacimiento de los tortuguillos. Y playa El Ostional, pueblo de pescadores, donde se pueden realizar actividades de turismo rural comunitario en el campo y el mar.</p>\r\n<p>La infraestructura de la ciudad de San Juan del Sur ha cambiado mucho en los &uacute;ltimos a&ntilde;os. Hoy en d&iacute;a, es mayor el n&uacute;mero de extranjeros que la visita y decide comprar una propiedad para convertirla en casa particular (muchas de ellas mansiones) o en un hotel. Asimismo, gracias al nivel de desarrollo tur&iacute;stico del sitio, la alcald&iacute;a municipal ha realizado reformas en &aacute;reas p&uacute;blicas del centro urbano, tales como el malec&oacute;n y el parque municipal.</p>\r\n<p>Un punto que vale la pena visitar cuando se est&aacute; en la ciudad es la estatua del Jes&uacute;s de la Misericordia, ubicado en la cima del cerro m&aacute;s alto de la bah&iacute;a y construido en 2008. Desde all&iacute; se tiene una hermosa vista panor&aacute;mica de San Juan del Sur y sus alrededores. Adem&aacute;s, en la base de la escultura se encuentra un mirador y una peque&ntilde;a capilla en donde se describe el proceso de construcci&oacute;n de la estatua.</p>\r\n<p><strong>Semana Santa y Festival de la Pitahaya</strong></p>\r\n<p>Semana Santa es una de las &eacute;pocas de mayor afluencia tur&iacute;stica en el lugar. Durante este per&iacute;odo, centenares de turistas nacionales y extranjeros - especialmente j&oacute;venes - visitan la ciudad por las m&uacute;ltiples fiestas que se organizan tanto en la bah&iacute;a como en las playas vecinas. Asimismo, el 31 de Diciembre es una buena fecha para visitar San Juan del Sur, puesto que tambi&eacute;n se realizan fiestas de fin de a&ntilde;o.</p>\r\n<p>Otra &eacute;poca de bastante movimiento se da para el Festival de la Pitahaya. Esta es una iniciativa de un grupo de extranjeros que residen en el municipio, quienes idearon la actividad para celebrar la diversidad cultural, la m&uacute;sica y la sostenibilidad. Artistas nacionales e internacionales, primordialmente de la escena joven, se presentan durante el evento. Tambi&eacute;n se realizan competencias de surf, juegos, talleres art&iacute;sticos, y otras actividades de entretenimiento.</p>', '250', '', '0', '0');
INSERT INTO `packages` VALUES ('2', 'Punta Teonoste', '12', '<p>Punta Teonoste es un hotel de playa en el que se trata de armonizar la comodidad con el medio ambiente. Hay varios &aacute;rboles frondosos en el amplio terreno, ubicado frente a una playa despoblada en la que se puede observar arena blanca, oscura y rosada.</p>\r\n<p>El local ofrece peque&ntilde;as caba&ntilde;as de dos plantas, todas poseen sala, abanico, ba&ntilde;o privado y una peque&ntilde;a refrigeradora. &Eacute;stas tienen un concepto r&uacute;stico que se combina con la comodidad. Adem&aacute;s, el local ofrece una piscina, un spa y un gimnasio.</p>\r\n<p>El restaurante del hotel ofrece un variado men&uacute;, con especialidad en pescados y mariscos extra&iacute;dos del lugar. Tambi&eacute;n se ofrece alquiler de bicicletas, caballos y tablas de surf. Todos los precios incluyen: cocktail de bienvenida, acceso a Internet inal&aacute;mbrico, bicicletas, tablas de surf y boggy, paseo a caballo, juegos de mesa, tratamiento con ozono en el spa, entre otros.</p>\r\n<p>Tanto la playa como el terreno son frecuentados por animales silvestres como pelicanos, querques, urracas, conejos, iguanas, garrobos y ardillas. Se pueden realizar caminatas hacia las playas vecinas o conocer la isla rocosa frente a esta playa, accesible durante la marea baja por un estrecho de piedra.</p>\r\n<p>Para reservaciones o informaci&oacute;n comunicarse a: Hotel Los Robles, Managua, Tel. 267-3008, Fax: 270-1074.</p>\r\n<p>Los precios var&iacute;an seg&uacute;n temporada, favor contactar al hotel para m&aacute;s detalle.</p>', '45', '', '0', '0');
INSERT INTO `packages` VALUES ('3', 'Montelimar', '12', '<p>Es una de las playas m&aacute;s exclusivas de Centroam&eacute;rica, por albergar al primer resort de alta calidad en el pa&iacute;s. La playa de arena fina est&aacute; sembrada de numerosas palmeras, y se ha convertido en un icono de la belleza del Pac&iacute;fico. S&oacute;lo a traves del hotel se puede ingresar a ella por tierra.</p>\r\n<p>El dictador Anastasio Somoza la eligi&oacute; para contruir ah&iacute; su mansi&oacute;n de veraneo a la orilla del mar, que hoy es el casino del resort.</p>\r\n<p>Es ideal para la pr&aacute;ctica del windsurf, tomar el sol.</p>\r\n<p>En &eacute;sta se encuentra el primer resort de Nicaragua, siendo la &uacute;nica opci&oacute;n para pasar la noche aqu&iacute;. Este hotel cuenta con infraestructura bastante completa.</p>', '120', '', '0', '0');
INSERT INTO `packages` VALUES ('7', 'Marina Puesta del Sol', '12', '<p>El Resort Marina Puesta del Sol comprende 600 hect&aacute;reas en la playa de Aserradores. El hotel ofrece a sus hu&eacute;spedes y viajeros de la Marina una experiencia &uacute;nica con acceso a kil&oacute;metros de canales serenos y manglares. Tambi&eacute;n, es posible realizar varias actividades, incluyendo nadar, navegar y pescar en las aguas tibias del Pac&iacute;fico, explorar a caballo las colinas aleda&ntilde;as, jugar al tennis y nadar en las piscinas del hotel.</p>\r\n<p>Marina Puesta del Sol brinda todas las comodidades de un resort de lujo con 20 c&oacute;modas suites. Todas &eacute;stas equipadas con aire acondicionado, ba&ntilde;os lujosos, TV por cable y con todo lo necesario para tener una estad&iacute;a confortable. El lugar tambi&eacute;n cuenta con un restaurante, bar y spa. En fin, un lugar magnifico para aquellos que aman la naturaleza con la calidad de un servicio personalizado y una variedad de comodidades.</p>\r\n<p>Pronto ser&aacute;n construidos dos m&oacute;dulos de condo-hotel con 64 suites frente al mar. Para m&aacute;s informaci&oacute;n, visitar el sitio web (ver informaci&oacute;n de contacto). Marina Puesta del Sol tambi&eacute;n pertenece al grupo&nbsp;<a href=\"http://www.sbhotelsnicaragua.com/\">Small Boutique Hotels</a>&nbsp;de Nicaragua.</p>', '215', '', '0', '0');
INSERT INTO `packages` VALUES ('8', 'Isla de Ometepe', '12', '<p>En el lago de Nicaragua, llamado por los conquistadores espa&ntilde;oles &ldquo;el mar de agua dulce&rdquo; por su inmensidad, sobresale la isla de Ometepe cuyo nombre en n&aacute;huatl significa &ldquo;dos cerros&rdquo;. La isla de 276 kil&oacute;metros cuadrados alberga a dos majestuosos volcanes unidos por un corto istmo, y es actualmente uno de los destinos naturales preferido por turistas nacionales y extranjeros por su ambiente hospitalario y pasivo, sus hermosos paisajes, sus dos volcanes, la riqueza arqueol&oacute;gica, sus tranquilas playas y sus numerosas reservas naturales y bosques donde puede apreciarse una importante biodiversidad.</p>\r\n<p>Desde siempre, la isla ha representado un destino paradis&iacute;aco. En tiempos precolombinos, seg&uacute;n relatos obtenidos por historiadores, tribus ind&iacute;genas se desplazaron del norte hasta Centroam&eacute;rica en b&uacute;squeda de un para&iacute;so vislumbrado por sus sacerdotes: una tierra formada por dos cerros, y en sus andares lo encontraron. La isla de Ometepe se convirti&oacute; entonces en un santuario habitado por una mezcla de diversas tribus y culturas, lo cual es revelado por la enorme cantidad de petroglifos, cer&aacute;mica y estatuaria que pueden apreciarse en toda la zona.</p>\r\n<p>La isla es habitada por personas amables y sonrientes enamoradas de su tierra, dedicadas sobre todo a la pesca y la producci&oacute;n agr&iacute;cola de gran calidad que provee el f&eacute;rtil suelo isle&ntilde;o. Actualmente, los ometepinos han comenzado a dedicarse a la atenci&oacute;n de turistas y numerosos locales de servicios han sido instalados en la isla, con la disposici&oacute;n de acoger a los visitantes del mundo entero que deseen visitar este para&iacute;so.</p>', '250', '', '0', '8');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `role` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'bonillaN905', '20efb3d655d56b984c050ee8402228e2cdd7a9cc', 'admin', '2013-06-27 18:44:05', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES ('7', 'Gershell', '211233fc50646f31952f85efaad88b9627d5b5cf', 'admin', '2013-07-12 19:02:08', '0000-00-00 00:00:00');
INSERT INTO `users` VALUES ('8', 'admin', '4d0d9e1b707f706cc864924a85954180a44c1bbd', 'admin', '2014-02-13 00:00:00', '2014-02-13 00:00:00');
