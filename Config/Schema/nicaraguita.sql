

DROP TABLE IF EXISTS `nicaraguita`.`categorias`;
DROP TABLE IF EXISTS `nicaraguita`.`packages`;
DROP TABLE IF EXISTS `nicaraguita`.`users`;


CREATE TABLE `nicaraguita`.`categorias` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`permalink` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=MyISAM;

CREATE TABLE `nicaraguita`.`packages` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`categoria_id` int(11) NOT NULL,
	`descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`precio` float NOT NULL,
	`permalink` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`recomendado` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=InnoDB;

CREATE TABLE `nicaraguita`.`users` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=MyISAM;

