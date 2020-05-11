-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla ventas_online.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.categorias: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(1, 'Leche'),
	(2, 'Arroz'),
	(3, 'Maizena'),
	(4, 'Café soluble'),
	(5, 'Frijol'),
	(6, 'Sopa'),
	(7, 'Huevos'),
	(8, 'Consomate'),
	(9, 'Harina de trigo');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla ventas_online.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `id_categoria_producto` int(20) DEFAULT NULL,
  `imagen_producto` longblob,
  `id_usuarios` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_productos_categorias` (`id_categoria_producto`),
  KEY `FK_productos_usuarios` (`id_usuarios`),
  CONSTRAINT `FK_productos_categorias` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categorias` (`id`),
  CONSTRAINT `FK_productos_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=341 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.productos: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `id_categoria_producto`, `imagen_producto`, `id_usuarios`, `estado`) VALUES
	(1, 'Leche', '1 galón', '6417', 4, _binary 0x31, 1, 'activo'),
	(2, 'Arroz', '1 kilo', '14901', 8, _binary 0x31, 2, 'activo'),
	(3, 'Maizena', '7 sobres', '26576', 4, _binary 0x31, 3, 'activo'),
	(4, 'Café soluble', '200 grms.', '33992', 4, _binary 0x31, 4, 'activo'),
	(5, 'Frijol', '2 kilos', '27819', 5, _binary 0x31, 5, 'activo'),
	(6, 'Sopa', '7 sobres', '12493', 7, _binary 0x31, 6, 'activo'),
	(7, 'Huevos', '2 docenas', '5755', 7, _binary 0x31, 7, 'activo'),
	(8, 'Consomate', '8 cubos', '32848', 7, _binary 0x31, 8, 'activo'),
	(9, 'Harina de trigo', '4 kilos', '28771', 3, _binary 0x31, 9, 'activo'),
	(10, 'Azúcar', '2 kilos', '13127', 6, _binary 0x31, 10, 'activo'),
	(11, 'Aceite', '3 litros', '6362', 5, _binary 0x31, 11, 'activo'),
	(12, 'Manteca vegetal', '1 kilo', '7954', 1, _binary 0x31, 12, 'activo'),
	(13, 'Papa blanca', '1 kilo', '29741', 6, _binary 0x31, 13, 'activo'),
	(14, 'Jitomate', '3 kilos', '37688', 8, _binary 0x31, 14, 'activo'),
	(15, 'Pierna y muslo de pollo', '2 kilos', '9275', 7, _binary 0x31, 15, 'activo'),
	(16, 'Royal', '125 grms.', '5803', 2, _binary 0x31, 16, 'activo'),
	(17, 'Chiles', '1 lata', '21339', 7, _binary 0x31, 17, 'activo'),
	(18, 'Chile verde', '1 kilo', '42393', 2, _binary 0x31, 18, 'activo'),
	(19, 'Cebollas', '1 kilo', '7308', 3, _binary 0x31, 19, 'activo'),
	(20, 'Detergente', '1 kilo', '15793', 3, _binary 0x31, 20, 'activo'),
	(21, 'Jabón de baño', '1 pieza', '39874', 1, _binary 0x31, 21, 'activo'),
	(22, 'Papel de baño', '1 pieza', '34611', 5, _binary 0x31, 22, 'activo'),
	(23, 'Cloro', '1 litro', '21183', 1, _binary 0x31, 23, 'activo'),
	(24, 'Pan de caja', '1 pieza', '14262', 2, _binary 0x31, 24, 'activo'),
	(25, 'Sal', '20 grms.', '26885', 5, _binary 0x31, 25, 'activo'),
	(26, 'Shampoo', '1/2 litro', '10137', 4, _binary 0x31, 26, 'activo'),
	(27, 'Soda', '4 botellas 2 ltrs.', '41326', 6, _binary 0x31, 27, 'activo'),
	(28, 'Naranjas', '2 kilos', '20097', 2, _binary 0x31, 28, 'activo'),
	(29, 'Plátanos', '2 kilos', '35309', 8, _binary 0x31, 29, 'activo'),
	(30, 'Limones', '1/2 kilo', '43004', 4, _binary 0x31, 30, 'activo'),
	(31, 'Tortillas de maíz', '14 kilos', '36578', 4, _binary 0x31, 31, 'activo'),
	(32, 'Pinol', '1/2 litro', '22870', 8, _binary 0x31, 32, 'activo'),
	(33, 'Jamón', '1 kilo', '32482', 8, _binary 0x31, 33, 'activo'),
	(34, 'Carne molida', '1 kilo', '9865', 6, _binary 0x31, 34, 'activo'),
	(35, 'Carne de carnero', '1 kilo', '13479', 1, _binary 0x31, 35, 'activo'),
	(36, 'Filete mojarra', '1 kilo', '41902', 5, _binary 0x31, 36, 'activo'),
	(37, 'Cereal', '1/2 kilo', '48067', 2, _binary 0x31, 37, 'activo'),
	(38, 'Manzanas', '1 kilo', '33863', 3, _binary 0x31, 38, 'activo'),
	(39, 'Lechuga', '2 piezas', '31831', 7, _binary 0x31, 39, 'activo'),
	(40, 'Aguacate', '1 kilo', '31604', 3, _binary 0x31, 40, 'activo'),
	(41, 'Zanahorias', '1 kilo', '41752', 4, _binary 0x31, 41, 'activo'),
	(42, 'Queso blanco', '1/2 kilo', '48282', 1, _binary 0x31, 42, 'activo'),
	(43, 'Galletas Marías', '1 paquete', '8354', 1, _binary 0x31, 43, 'activo'),
	(44, 'Leche', '1 galón', '19214', 1, _binary 0x31, 44, 'activo'),
	(45, 'Papa', '1 kilo', '39744', 1, _binary 0x31, 45, 'activo'),
	(46, 'Huevos', '1 docena', '13960', 3, _binary 0x31, 46, 'activo'),
	(47, 'Jabón líquido p/trastes', '1', '32886', 7, _binary 0x31, 47, 'activo'),
	
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla ventas_online.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.usuarios: ~49 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `celular`, `whatsapp`, `direccion`, `ciudad`) VALUES
	(1, 'Susana', 'Odriozola', 'odriozola87@email.com', 'M', '635-217-732', '912-257-984', 'Plaza Conmutativo Maduro 265, 6º', 'Las Torres de Cotillas'),
	(2, 'Manuel', 'Vaquero', 'vaquero82@correo.com', 'H', '651-401-190', '912-155-711', 'Calle la Distribución 8, 4º 2ª', 'Ceuta'),
	(3, 'Yolanda', 'Criado', 'y.criado@email.com', 'M', '620-079-374', '930-783-536', 'Calle Conserva 25, 5º', 'Madrid'),
	(4, 'Sara', 'Gallego', 'sara.gallego@email.es', 'M', '665-684-364', '917-590-036', 'Plaza Distribución 159, 2', 'Madrid'),
	(5, 'Ana María', 'Mateos', 'anamateos@email.com', 'M', '689-736-686', '912-836-536', 'Plaza Aposición 7, 2º 3ª', 'Madrid'),
	(6, 'Javier', 'Sánchez', 'javiersanchez80@email.es', 'H', '695-068-947', '981-649-429', 'Avenida Laceramiento Inquebrantable 213, 3º 5ª', 'Vigo'),
	(7, 'Santiago', 'González', 'gonzalez42@correo.net', 'H', '630-936-289', '958-811-765', 'Calle Bípedo Menguante 198, 2º', 'Las Torres de Cotillas'),
	(8, 'Isabel', 'Pico', 'pico53@email.com', 'M', '600-818-834', '916-300-811', 'Paseo Comezón Estricto 111, 6º 2ª', 'Badalona'),
	(9, 'Encarnación', 'Salgado', 'encsalgado@correo.es', 'M', '695-757-221', '987-862-102', 'Avenida de  Recibimiento 126, 3º 6ª', 'Almería'),
	(10, 'Alejandro', 'Hernández', 'hernandez20@mail.net', 'H', '618-917-809', '957-247-679', 'Plaza Aforo 269, 4º 6ª', 'Alcalá de Henares'),
	(11, 'José Manuel', 'Martínez', 'jos.martinez@email.com', 'H', '603-254-094', '968-460-472', 'Paseo Nobiliario Ansioso 290, 5', 'Torrejón de Ardoz'),
	(12, 'José Luis', 'Rodríguez', 'josrodriguez@correo.com', 'H', '639-173-603', '919-629-774', 'Avenida del Aforo 177, 2º', 'Madrid'),
	(13, 'Antonio', 'Lucena', 'antonio.lucena@correo.net', 'H', '699-932-303', '938-121-801', 'Plaza Inverso Ansioso 34, 3', 'Sagunto'),
	(14, 'Antonio', 'Castilla', 'castilla56@mail.com', 'H', '646-373-063', '968-742-095', 'Calle Buscador 160, 5º', 'Collado Villalba'),
	(15, 'Isabel', 'Marín', 'marin11@correo.net', 'M', '609-527-756', '969-096-803', 'Avenida  Crecimiento Menguante 251, 5', 'Gijón'),
	(16, 'María', 'Iglesias', 'miglesias@email.es', 'M', '626-578-709', '917-165-038', 'Paseo Bisectriz Brillante 1, 2º 2ª', 'Badajoz'),
	(17, 'Francisca', 'Pastor', 'fpastor60@email.net', 'M', '617-020-587', '922-006-163', 'Paseo Descendiente 137, 4º 4ª', 'Lepe'),
	(18, 'José', 'Pérez', 'jperez@email.com', 'H', '670-908-787', '943-009-200', 'Calle el Dilúbrido Sabio 217, 1', 'Aranjuez'),
	(19, 'Miguel', 'Peláez', 'migpelaez@correo.es', 'H', '663-967-361', '964-631-257', 'Avenida  Omnisciente Suculento 93, 4º', 'Guadalajara'),
	(20, 'José', 'Bocanegra', 'jbocanegra@mail.es', 'H', '613-709-346', '957-675-971', 'Avenida del Hipónimo Inquebrantable 78, 4º 5ª', 'Cáceres'),
	(21, 'María Isabel', 'Gil', 'mgil@email.es', 'M', '661-679-542', '939-256-862', 'Paseo  Pretensión Amorosa 127 bis, 4º', 'Onteniente'),
	(22, 'Juan', 'Palacio', 'juapalacio@mail.es', 'H', '664-802-183', '981-116-849', 'Calle de  Ambición Caliente 283, 4º 4ª', 'Hospitalet de Llobregat'),
	(23, 'Alejandro', 'Casas', 'alejandrocasas@email.es', 'H', '662-551-948', '981-014-702', 'Calle el Óvulo Joven 81, 1º 4ª', 'Granada'),
	(24, 'Iván', 'Rosales', 'irosales@email.net', 'H', '634-720-446', '972-719-924', 'Plaza del Disociamiento Ordenado 258, 3', 'Sevilla'),
	(25, 'María Isabel', 'Casas', 'mar.casas@email.es', 'M', '693-591-626', '959-359-332', 'Paseo el Reconocimiento Ansioso 63, 1', 'Santurce'),
	(26, 'María Isabel', 'Martin', 'martin97@correo.es', 'M', '663-495-183', '976-264-045', 'Avenida de  Advocación Fácil 271, 3º', 'San Cristóbal de la Laguna'),
	(27, 'Rosa', 'Ramírez', 'rosramirez@email.com', 'M', '659-719-914', '938-803-970', 'Paseo la Improvisación Respetuosa 24, 2', 'Barcelona'),
	(28, 'Rafaela', 'Pan', 'rafaelapan@mail.es', 'M', '665-507-778', '961-521-974', 'Paseo de  Nervadura Inteligente 138, 4', 'Pineda de Mar'),
	(29, 'Laura', 'Pérez', 'lauperez@correo.net', 'M', '672-894-514', '913-246-714', 'Calle de  Frugívoro 75, 2º', 'Gerona'),
	(30, 'María', 'Pacheco', 'm.pacheco@email.net', 'M', '625-368-708', '930-882-071', 'Avenida de  Pacífico 182, 2º', 'Córdoba'),
	(31, 'María Luisa', 'Caparros', 'maricaparros@mail.com', 'M', '690-020-405', '966-356-667', 'Plaza  Enseñanza Aburrida 154, 3º 3ª', 'Langreo'),
	(32, 'Carmen', 'Puig', 'cpuig@email.com', 'M', '626-365-758', '913-744-259', 'Avenida de  Perspicaz Culto 240, 4º', 'Castellón de la Plana'),
	(33, 'Isabel', 'Jorge', 'ijorge@email.es', 'M', '623-535-593', '965-524-734', 'Calle  Recesión Rápida 4, 3º', 'Sevilla'),
	(34, 'Josefina', 'Ramírez', 'j.ramirez@email.net', 'M', '663-355-135', '972-893-493', 'Plaza Citoplasma Malo 75, 1º 5ª', 'Córdoba'),
	(35, 'Juan', 'Ramírez', 'juanramirez@correo.net', 'H', '678-808-044', '968-326-758', 'Paseo Débil Abstracto 103, 3º 1ª', 'Gijón'),
	(36, 'Antonio', 'Plata', 'aplata88@mail.es', 'H', '658-649-293', '972-979-593', 'Plaza de  Bípedo 158, 6º 3ª', 'Torremolinos'),
	(37, 'María Pino', 'Ortega', 'ortega17@mail.es', 'M', '623-485-576', '913-406-776', 'Avenida Licencia 247, 5º', 'Santurce'),
	(38, 'Susana', 'Arrabal', 'susanaarrabal@correo.net', 'M', '666-380-360', '943-095-623', 'Plaza la Idiosincrasia 54, 5º 2ª', 'Logroño'),
	(39, 'Ignacio', 'Guzmán', 'iguzman@email.com', 'H', '611-241-000', '913-339-169', 'Paseo Azteca 257, 1º 4ª', 'Alacuás'),
	(40, 'Francisco José', 'Meléndez', 'franciscojosemelendez91@mail.es', 'H', '689-648-404', '977-812-032', 'Plaza Bibliografía 164, 1º 2ª', 'Collado Villalba'),
	(41, 'José', 'Vico', 'jvico58@mail.com', 'H', '648-146-069', '981-161-350', 'Plaza Convalescencia Ansiosa 271, 6º 3ª', 'Onda'),
	(42, 'Rosa María', 'Gómez', 'rosamariagomez@email.com', 'M', '648-062-430', '910-579-681', 'Plaza Barbarismo 89, 1º 6ª', 'Mieres'),
	(43, 'José', 'García', 'josegarcia@correo.net', 'H', '676-318-295', '962-217-979', 'Avenida de  Adhesivo 40, 3º', 'Valencia'),
	(44, 'Irene', 'Fonseca', 'irefonseca@mail.es', 'M', '695-007-443', '976-303-848', 'Calle de  Bisílabo Culto 165, 2º 3ª', 'Jerez de la Frontera'),
	(45, 'Isabel', 'Torres', 'torres87@email.net', 'M', '601-011-417', '913-293-231', 'Paseo  Adjudicación Culta 205, 3', 'Villena'),
	(46, 'José', 'Porras', 'jose.porras@correo.com', 'H', '613-729-898', '986-579-919', 'Paseo  Bicóncavo Marrón 47, 2º', 'Valencia'),
	(47, 'José Luis', 'Sánchez', 'jossanchez@email.com', 'H', '690-994-619', '969-920-960', 'Calle Adivinanza 300 bis, 6º', 'Madrid'),
	(48, 'Camilo', 'Rodriguez', 'andrescamilocr482@gmail.com', '94f263f5c21c5ac3150672363fc70c79', '3136997711', '3136997711', 'Barrio la Esmeralda', 'Mocoa, Ptyo'),
	(49, 'Camilo', 'Rodriguez', 'andrescamilocr482@gmail.com', '94f263f5c21c5ac3150672363fc70c79', '3136997711', '3136997711', 'Barrio la Esmeralda', 'Mocoa, Ptyo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
