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

-- Volcando estructura para tabla ventas_online.categorias_productos
CREATE TABLE IF NOT EXISTS `categorias_productos` (
  `id` int(20) NOT NULL,
  `nombre_cat_producto` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.categorias_productos: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias_productos` DISABLE KEYS */;
INSERT INTO `categorias_productos` (`id`, `nombre_cat_producto`) VALUES
	(1, 'Accesorios para Vehículos'),
	(2, 'Agro'),
	(3, 'Alimentos y Bebidas'),
	(4, 'Animales y Mascotas'),
	(5, 'Antigüedades y Colecciones'),
	(6, 'Arte, Papelería y Mercería'),
	(7, 'Bebés'),
	(8, 'Belleza y Cuidado Personal'),
	(9, 'Boletas para Espectáculos'),
	(10, 'Cámaras y Accesorios'),
	(11, 'Celulares y Teléfonos'),
	(12, 'Computación'),
	(13, 'Consolas y Videojuegos'),
	(14, 'Deportes y Fitness'),
	(15, 'Electrodomésticos'),
	(16, 'Electrónica, Audio y Video'),
	(17, 'Herramientas y Construcción'),
	(18, 'Hogar y Muebles'),
	(19, 'Industrias y Oficinas'),
	(20, 'Instrumentos Musicales'),
	(21, 'Juegos y Juguetes'),
	(22, 'Libros, Revistas y Comics'),
	(23, 'Música, Películas y Series'),
	(24, 'Recuerdos, Piñatería y Fiestas'),
	(25, 'Relojes y Joyas'),
	(26, 'Ropa y Accesorios'),
	(27, 'Salud y Equipamiento Médico'),
	(28, 'Otras categorías');
/*!40000 ALTER TABLE `categorias_productos` ENABLE KEYS */;

-- Volcando estructura para tabla ventas_online.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `descripcion_producto` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `id_categoria_producto` int(20) DEFAULT NULL,
  `imagen_producto` longblob,
  `id_usuarios` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_productos_categorias` (`id_categoria_producto`),
  KEY `FK_productos_usuarios` (`id_usuarios`),
  CONSTRAINT `FK_productos_categorias` FOREIGN KEY (`id_categoria_producto`) REFERENCES `subcategoria` (`id`),
  CONSTRAINT `FK_usuarios_productos` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.productos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla ventas_online.subcategoria
CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  `nombre_sub_categoria` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_categoria_prod` (`id_categoria`),
  CONSTRAINT `id_categoria_prod` FOREIGN KEY (`id_categoria`) REFERENCES `categorias_productos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.subcategoria: ~350 rows (aproximadamente)
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` (`id`, `id_categoria`, `nombre_sub_categoria`) VALUES
	(1, 1, 'Acc. para Motos y Cuatrimotos'),
	(2, 1, 'Acc. y Repuestos Náuticos'),
	(3, 1, 'Acc. y Repuestos para Camiones'),
	(4, 1, 'Audio para Vehículos'),
	(5, 1, 'GNV'),
	(6, 1, 'Herramientas'),
	(7, 1, 'Limpieza de Vehículos'),
	(8, 1, 'Llantas'),
	(9, 1, 'Navegadores GPS para Vehículos'),
	(10, 1, 'Performance'),
	(11, 1, 'Repuestos Carros y Camionetas'),
	(12, 1, 'Repuestos de Maquinaria Pesada'),
	(13, 1, 'Repuestos Motos y Cuatrimotos'),
	(14, 1, 'Rines'),
	(15, 1, 'Seguridad Vehicular'),
	(16, 1, 'Service Programado'),
	(17, 1, 'Tuning'),
	(18, 1, 'Otros'),
	(19, 2, 'Alimentación y Suplementos'),
	(20, 2, 'Animales'),
	(21, 2, 'Generadores de Energía'),
	(22, 2, 'Insumos Agrícolas'),
	(23, 2, 'Insumos Ganaderos'),
	(24, 2, 'Máquinas y Herramientas'),
	(25, 2, 'Repuestos de Maquinaria Pesada'),
	(26, 2, 'Otros'),
	(27, 3, 'Bebidas'),
	(28, 3, 'Comestibles'),
	(29, 3, 'Comida Preparada y Catering'),
	(30, 3, 'Frescos'),
	(31, 3, 'Otros'),
	(32, 4, 'Aves'),
	(33, 4, 'Caballos'),
	(34, 4, 'Conejos'),
	(35, 4, 'Gatos'),
	(36, 4, 'Insectos'),
	(37, 4, 'Peces'),
	(38, 4, 'Perros'),
	(39, 4, 'Reptiles y Anfibios'),
	(40, 4, 'Roedores'),
	(41, 4, 'Otros'),
	(42, 5, 'Antigüedades'),
	(43, 5, 'Billetes y Monedas'),
	(44, 5, 'Coleccionables de Deportes'),
	(45, 5, 'Esculturas'),
	(46, 5, 'Filatelia'),
	(47, 5, 'Militaría y Afines'),
	(48, 5, 'Posters'),
	(49, 5, 'Otros'),
	(50, 6, 'Arte'),
	(51, 6, 'Espejos Mosaicos'),
	(52, 6, 'Insumos para Hacer Velas'),
	(53, 6, 'Mercería'),
	(54, 6, 'Moldes para Jabones'),
	(55, 6, 'Papelería'),
	(56, 6, 'Piezas para Llaveros'),
	(57, 6, 'Otros'),
	(58, 7, 'Artículos de Bebés para Baños'),
	(59, 7, 'Artículos de Maternidad'),
	(60, 7, 'Caminadores y Correpasillos'),
	(61, 7, 'Chupetes y Mordedores'),
	(62, 7, 'Comida para Bebés'),
	(63, 7, 'Corrales para Bebé'),
	(64, 7, 'Cuarto del Bebé'),
	(65, 7, 'Higiene y Cuidado del Bebé'),
	(66, 7, 'Juegos y Juguetes para Bebés'),
	(67, 7, 'Lactancia y Alimentación'),
	(68, 7, 'Paseo del Bebé'),
	(69, 7, 'Ropa para Bebés'),
	(70, 7, 'Salud del Bebé'),
	(71, 7, 'Seguridad para Bebés'),
	(72, 7, 'Otros'),
	(73, 8, 'Artículos de Peluquería'),
	(74, 8, 'Barbería'),
	(75, 8, 'Cuidado de la Piel'),
	(76, 8, 'Cuidado del Cabello'),
	(77, 8, 'Depilación'),
	(78, 8, 'Electrodomésticos de Belleza'),
	(79, 8, 'Farmacia'),
	(80, 8, 'Higiene Personal'),
	(81, 8, 'Manicure y Pedicure'),
	(82, 8, 'Maquillaje'),
	(83, 8, 'Perfumes y Fragancias'),
	(84, 8, 'Splash Corporal'),
	(85, 8, 'Tratamientos de Belleza'),
	(86, 8, 'Otros'),
	(87, 9, 'Conciertos'),
	(88, 9, 'Eventos Deportivos'),
	(89, 9, 'Eventos Finalizados'),
	(90, 9, 'Exposiciones'),
	(91, 9, 'Teatro'),
	(92, 9, 'Otras Boletas'),
	(93, 10, 'Accesorios para Cámaras'),
	(94, 10, 'Álbumes y Portarretratos'),
	(95, 10, 'Cables'),
	(96, 10, 'Cámaras'),
	(97, 10, 'Cámaras de Video y Deportivas'),
	(98, 10, 'Drones y Accesorios'),
	(99, 10, 'Instrumentos Ópticos'),
	(100, 10, 'Lentes y Filtros'),
	(101, 10, 'Repuestos para Cámaras'),
	(102, 10, 'Revelado y Laboratorio'),
	(103, 10, 'Otros'),
	(104, 11, 'Accesorios para Celulares'),
	(105, 11, 'Celulares y Smartphones'),
	(106, 11, 'Gafas de Realidad Virtual'),
	(107, 11, 'Radios y Handies'),
	(108, 11, 'Repuestos de Celulares'),
	(109, 11, 'Smartwatches y Accesorios'),
	(110, 11, 'Tarificadores y Cabinas'),
	(111, 11, 'Telefonía Fija e Inalámbrica'),
	(112, 11, 'Telefonía IP'),
	(113, 11, 'Otros'),
	(114, 12, 'Accesorios de Antiestática'),
	(115, 12, 'Almacenamiento'),
	(116, 12, 'Cables y Hubs USB'),
	(117, 12, 'Cámaras Web y Audio para PC'),
	(118, 12, 'Componentes de PC'),
	(119, 12, 'Conectividad y Redes'),
	(120, 12, 'Estabilizadores y UPS'),
	(121, 12, 'Impresión'),
	(122, 12, 'Lectores y Scanners'),
	(123, 12, 'Limpieza y Cuidado de PCs'),
	(124, 12, 'Monitores y Accesorios'),
	(125, 12, 'Mouses, Teclados y Controles'),
	(126, 12, 'Palms, Agendas y Accesorios'),
	(127, 12, 'PC de Escritorio'),
	(128, 12, 'Porta CDs, Cajas y Sobres'),
	(129, 12, 'Portátiles y Accesorios'),
	(130, 12, 'Software'),
	(131, 12, 'Tablets y Accesorios'),
	(132, 12, 'Video Beams y Pantallas'),
	(133, 12, 'Otros'),
	(134, 13, 'Accesorios para Consolas'),
	(135, 13, 'Consolas'),
	(136, 13, 'Pinballs y Máquinas de Juego'),
	(137, 13, 'Repuestos para Consolas'),
	(138, 13, 'Videojuegos'),
	(139, 13, 'Otros'),
	(140, 14, 'Bádminton'),
	(141, 14, 'Baloncesto'),
	(142, 14, 'Balonmano'),
	(143, 14, 'Boxeo y Artes Marciales'),
	(144, 14, 'Buceo'),
	(145, 14, 'Camping, Caza y Pesca'),
	(146, 14, 'Canoas, Kayaks e Inflables'),
	(147, 14, 'Ciclismo'),
	(148, 14, 'Equitación y Polo'),
	(149, 14, 'Esgrima'),
	(150, 14, 'Esqui y Snowboard'),
	(151, 14, 'Fitness y Musculación'),
	(152, 14, 'Fútbol'),
	(153, 14, 'Fútbol Americano'),
	(154, 14, 'Golf'),
	(155, 14, 'Hockey'),
	(156, 14, 'Juegos de Salón'),
	(157, 14, 'Kitesurf'),
	(158, 14, 'Monopatines y Scooters'),
	(159, 14, 'Montañismo y Trekking'),
	(160, 14, 'Natación'),
	(161, 14, 'Paintball'),
	(162, 14, 'Parapente'),
	(163, 14, 'Patín, Gimnasia y Danza'),
	(164, 14, 'Pulsómetros y Cronómetros'),
	(165, 14, 'Ropa Deportiva'),
	(166, 14, 'Rugby'),
	(167, 14, 'Skateboard y Sandboard'),
	(168, 14, 'Slackline'),
	(169, 14, 'Softball y Beisbol'),
	(170, 14, 'Suplementos y Shakers'),
	(171, 14, 'Surf y Bodyboard'),
	(172, 14, 'Tenis'),
	(173, 14, 'Tenis, Padel y Squash'),
	(174, 14, 'Tiro Deportivo'),
	(175, 14, 'Voleibol'),
	(176, 14, 'Wakeboard y Esqui Acuático'),
	(177, 14, 'Windsurf'),
	(178, 14, 'Yoga y Pilates'),
	(179, 14, 'Otros'),
	(180, 15, 'Artefactos de Cuidado Personal'),
	(181, 15, 'Climatización'),
	(182, 15, 'Cocción'),
	(183, 15, 'Dispensadores y Purificadores'),
	(184, 15, 'Lavado'),
	(185, 15, 'Pequeños Electrodomésticos'),
	(186, 15, 'Refrigeración'),
	(187, 15, 'Repuestos y Accesorios'),
	(188, 15, 'Otros'),
	(189, 16, 'Accesorios Audio y Video'),
	(190, 16, 'Accesorios para TV'),
	(191, 16, 'Audio'),
	(192, 16, 'Cables'),
	(193, 16, 'Componentes Electrónicos'),
	(194, 16, 'Controles Remotos'),
	(195, 16, 'Convertidores a Smart TV'),
	(196, 16, 'Drones y Accesorios'),
	(197, 16, 'Fundas y Bolsos'),
	(198, 16, 'Pilas y Cargadores'),
	(199, 16, 'Repuestos TV'),
	(200, 16, 'Televisores'),
	(201, 16, 'Video'),
	(202, 16, 'Video Beams y Pantallas'),
	(203, 16, 'Otros'),
	(204, 17, 'Aberturas, Puertas y Ventanas'),
	(205, 17, 'Baños y Sanitarios'),
	(206, 17, 'Construcción'),
	(207, 17, 'Electricidad'),
	(208, 17, 'Herramientas'),
	(209, 17, 'Mobiliario para Cocinas'),
	(210, 17, 'Pinturería'),
	(211, 17, 'Pisos y Recubrimientos'),
	(212, 17, 'Plomería'),
	(213, 17, 'Otros'),
	(214, 18, 'Adornos y Decoración del Hogar'),
	(215, 18, 'Baños'),
	(216, 18, 'Cocina'),
	(217, 18, 'Colchones y Sommiers'),
	(218, 18, 'Cortinas y Accesorios'),
	(219, 18, 'Cuidado del Hogar y Lavandería'),
	(220, 18, 'Iluminación para el Hogar'),
	(221, 18, 'Jardines y Exteriores'),
	(222, 18, 'Muebles para el Hogar'),
	(223, 18, 'Organización para el Hogar'),
	(224, 18, 'Seguridad para el Hogar'),
	(225, 18, 'Textiles de Hogar y Decoración'),
	(226, 18, 'Otros'),
	(227, 19, 'Arquitectura y Diseño'),
	(228, 19, 'Embalajes'),
	(229, 19, 'Equipamiento Comercial'),
	(230, 19, 'Equipamiento para Industrias'),
	(231, 19, 'Equipamiento para Oficinas'),
	(232, 19, 'Industria Gastronómica'),
	(233, 19, 'Industria Gráfica e Impresión'),
	(234, 19, 'Industria Textil'),
	(235, 19, 'Material de Promoción'),
	(236, 19, 'Seguridad para Industrias'),
	(237, 19, 'Uniformes'),
	(238, 19, 'Otros'),
	(239, 20, 'Baterías y Percusión'),
	(240, 20, 'Equipos de DJ y Accesorios'),
	(241, 20, 'Estudio de Grabación'),
	(242, 20, 'Instrumentos de Cuerdas'),
	(243, 20, 'Instrumentos de Viento'),
	(244, 20, 'Metrónomos'),
	(245, 20, 'Micrófonos y Amplificadores'),
	(246, 20, 'Parlantes'),
	(247, 20, 'Partituras y Letras'),
	(248, 20, 'Pedales y Accesorios'),
	(249, 20, 'Teclados y Pianos'),
	(250, 20, 'Otros'),
	(251, 21, 'Armas y Lanzadores de Juguetes'),
	(252, 21, 'Bloques y Construcción'),
	(253, 21, 'Casas y Carpas para Niños'),
	(254, 21, 'Dibujo, Pintura y Manualidades'),
	(255, 21, 'Electrónicos para Niños'),
	(256, 21, 'Figuritas, Álbumes y Cromos'),
	(257, 21, 'Hobbies'),
	(258, 21, 'Instrumentos Musicales'),
	(259, 21, 'Juegos de Agua y Playa'),
	(260, 21, 'Juegos de Mesa y Cartas'),
	(261, 21, 'Juegos de Parque y Aire Libre'),
	(262, 21, 'Juegos de Salón'),
	(263, 21, 'Juguetes Antiestrés e Ingenio'),
	(264, 21, 'Juguetes de Bromas'),
	(265, 21, 'Juguetes de Oficios'),
	(266, 21, 'Juguetes para Bebés'),
	(267, 21, 'Mesas y Sillas para Niños'),
	(268, 21, 'Muñecos y Muñecas'),
	(269, 21, 'Patines y Patinetas'),
	(270, 21, 'Pelotas y Animales Saltarines'),
	(271, 21, 'Peluches'),
	(272, 21, 'Piscinas y Castillos'),
	(273, 21, 'Títeres y Marionetas'),
	(274, 21, 'Vehículos de Juguete'),
	(275, 21, 'Vehículos Montables para Niños'),
	(276, 21, 'Otros'),
	(277, 22, 'Catálogos'),
	(278, 22, 'Comics'),
	(279, 22, 'Libros'),
	(280, 22, 'Manga'),
	(281, 22, 'Revistas'),
	(282, 22, 'Otros'),
	(283, 23, 'Música'),
	(284, 23, 'Películas'),
	(285, 23, 'Series de TV'),
	(286, 23, 'Otros'),
	(287, 24, 'Artículos para Fiestas'),
	(288, 24, 'Decoración para Fiestas'),
	(289, 24, 'Desechables para Fiestas'),
	(290, 24, 'Disfraces'),
	(291, 24, 'Espuma, Serpentina y Confeti'),
	(292, 24, 'Kits Imprimibles para Fiestas'),
	(293, 24, 'Props para Photo Booths'),
	(294, 24, 'Recuerdos'),
	(295, 24, 'Tarjetas de Invitación'),
	(296, 24, 'Otros'),
	(297, 25, 'Exhibidores y Joyeros'),
	(298, 25, 'Insumos para Joyeria'),
	(299, 25, 'Joyería'),
	(300, 25, 'Piedras Preciosas'),
	(301, 25, 'Piercings'),
	(302, 25, 'Plumas de Lujo'),
	(303, 25, 'Pulsómetros y Cronómetros'),
	(304, 25, 'Relojes'),
	(305, 25, 'Repuestos para Relojes'),
	(306, 25, 'Smartwatches'),
	(307, 25, 'Otros'),
	(308, 26, 'Accesorios de Moda'),
	(309, 26, 'Bermudas y Pantalonetas'),
	(310, 26, 'Blusas'),
	(311, 26, 'Buzos'),
	(312, 26, 'Calzado'),
	(313, 26, 'Camisas'),
	(314, 26, 'Camisetas'),
	(315, 26, 'Chaquetas y Abrigos'),
	(316, 26, 'Enterizos'),
	(317, 26, 'Equipaje, Bolsos y Carteras'),
	(318, 26, 'Faldas'),
	(319, 26, 'Leggings'),
	(320, 26, 'Pantalones y Jeans'),
	(321, 26, 'Ropa de Danza y Patinaje'),
	(322, 26, 'Ropa Deportiva'),
	(323, 26, 'Ropa Interior y de Dormir'),
	(324, 26, 'Ropa para Bebés'),
	(325, 26, 'Ropa por Mayor'),
	(326, 26, 'Sacos, Suéteres y Chalecos'),
	(327, 26, 'Trajes'),
	(328, 26, 'Uniformes y Ropa de Trabajo'),
	(329, 26, 'Vestidos'),
	(330, 26, 'Vestidos de Baño'),
	(331, 26, 'Otros'),
	(332, 27, 'Cuidado de la Salud'),
	(333, 27, 'Equipamiento Médico'),
	(334, 27, 'Masajes'),
	(335, 27, 'Movilidad'),
	(336, 27, 'Ortopedia'),
	(337, 27, 'Suplementos Alimenticios'),
	(338, 27, 'Terapias Alternativas'),
	(339, 27, 'Otros'),
	(340, 28, 'Adultos'),
	(341, 28, 'Cigarrillos y Afines'),
	(342, 28, 'Coberturas Extendidas'),
	(343, 28, 'Criptomonedas'),
	(344, 28, 'Esoterismo'),
	(345, 28, 'Giftcards'),
	(346, 28, 'Insumos para Tatuajes'),
	(347, 28, 'Kits de Criminalística'),
	(348, 28, 'Licencias para Taxis'),
	(349, 28, 'Mangas de Viento'),
	(350, 28, 'Otros');
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;

-- Volcando estructura para tabla ventas_online.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `apellido_usuario` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ventas_online.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre_usuario`, `apellido_usuario`, `email`, `password`, `celular`, `whatsapp`, `ciudad`, `direccion`) VALUES
	(1, 'Camilo', 'Rodriguez', 'andrescamilocr482@gmail.com', '94f263f5c21c5ac3150672363fc70c79', '3136997711', '3136997711', 'Mocoa, Ptyo', 'Barrio la Esmeralda');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
