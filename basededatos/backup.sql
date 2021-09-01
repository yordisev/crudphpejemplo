-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `test`;

-- Volcando estructura para tabla test.db_afiliados
CREATE TABLE IF NOT EXISTS `db_afiliados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(50) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `pnombre` varchar(50) DEFAULT NULL,
  `snombre` varchar(50) DEFAULT NULL,
  `papellido` varchar(50) DEFAULT NULL,
  `sapellido` varchar(50) DEFAULT NULL,
  `fechan` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `tsangre` varchar(50) DEFAULT NULL,
  `estadoc` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fechar` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documento_numero` (`documento`,`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla test.db_afiliados: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `db_afiliados` DISABLE KEYS */;
INSERT INTO `db_afiliados` (`id`, `documento`, `numero`, `pnombre`, `snombre`, `papellido`, `sapellido`, `fechan`, `sexo`, `tsangre`, `estadoc`, `telefono`, `correo`, `ciudad`, `barrio`, `direccion`, `fechar`) VALUES
	(1, 'CC', 2147483647, 'ANDRES', 'DAVID', 'AGUILAR', 'REALES', '2020-05-03', 'FEMENINO', 'O+', 'SOLTERO', 345348543, 'ajdals@aygyu.com', 'BARRANQUILLA', 'VILLA ADELA', '823ysac', '0000-00-00'),
	(2, 'CC', 10283388, 'AVIS', 'RAFAEL', 'BARRIOS', 'RAMOS', '2020-05-03', 'MASCULINO', 'O+', 'CASADO', 345348543, 'ajdals@aygyu.com', 'BARRANQUILLA', 'LA CENTRAL', 'cll 5 # 32-43', '0000-00-00'),
	(3, 'TI', 19249926, 'YORDIS', 'ANDRES', 'ESCORCIA', 'VASQUEZ', '2020-05-03', 'MASCULINO', 'MASCULINO', 'SOLTERO', 64686299, 'yescor@redes.com', 'BARRANQUILLA', 'ciudadela', 'askslak', '0000-00-00'),
	(4, 'CC', 12232454, 'DAYANA', 'DANIELA', 'REALES', 'PEREZ', '1999-02-18', 'FEMENINO', 'FEMENINO', 'CASADO', 2147483647, 'manuela@redes.com', 'CARTAGENA', 'candela', 'calle 45 # 34-65', '0000-00-00'),
	(5, 'CC', 104372662, 'MANUELA2', 'DANIELA2', 'REALES2', 'PEREZ2', '2000-02-18', 'FEMENINO', 'MASCULINO', 'SOLTERO', 93409230, 'manuela2@redes.com', 'BOGOTA', 'salud', 'calle 43 # 34-22', '0000-00-00'),
	(6, 'CC', 105830384, 'DANIELA', 'ANDREA', 'CASSIANI', 'ORTIZ', '1991-04-05', 'FEMENINO', 'FEMENINO', 'UNION LIBRE', 2147483647, 'daniela@redes.com', 'BARRANQUILLA', 'catanga', 'calle 76 # 31-12', '0000-00-00'),
	(7, 'CC', 10342765, 'DANIEL', 'ENRIQUE', 'CARDONA', 'SANCHEZ', '1995-11-02', 'MASCULINO', 'MASCULINO', 'SOLTERO', 2147483647, 'daniel08@redes.com', 'BOGOTA', 'la luz', 'calle 92 # 65-12', '0000-00-00'),
	(8, 'CC', 102834466, 'CARDONA', 'DANIEL', 'SALAZAR', 'OSPINO', '1994-03-17', 'MASCULINO', 'MASCULINO', 'CASADO', 2147483647, 'cardona@redes.com', 'CARTAGENA', 'carrizal', 'calle 32 # 32-1', '0000-00-00'),
	(9, 'TI', 288646753, 'LUIS', 'ANDRES', 'SARA', 'OSPINO', '2000-01-22', 'MASCULINO', 'MASCULINO', 'UNION LIBRE', 2147483647, 'cardona@redes.com', 'BOGOTA', 'VALLE', 'calle 32 # 32-14', '0000-00-00'),
	(11, 'CC', 212121, 'MORELA', 'ISABELL', 'ESCORCIA', 'MARTINES', '1999-09-09', 'FEMENINO', 'MASCULINO', 'SOLTERO', 2147483647, 'morellaa@REDES.COM', 'BOGOTA', 'CANDELARIA', 'CALLE 22-33', '0000-00-00'),
	(44, 'TI', 123456789, 'NENA', 'ANA', 'CASTRO', 'HERNANDEZ', '2000-07-23', 'FEMENINO', 'FEMENINO', 'SOLTERO', 2147483647, 'NENA@REDES.COM', 'BARRANQUILLA', 'LA PAZ', 'CALLE 54-65', '0000-00-00'),
	(50, 'CC', 878787878, 'JOSE', 'LUIS', 'YEPES', 'ROMERO', '1999-09-09', 'MASCULINO', 'FEMENINO', 'SOLTERO', 2147483647, 'jose@redes.com', 'BARRANQUILLA', 'viñate', 'calle 54 con carrera 15', '0000-00-00'),
	(52, 'CC', 1045307221, 'ARNOLITO', 'ANDRES', 'ORTIZ', 'BATISTA', '1992-03-24', 'MASCULINO', 'FEMENINO', 'SOLTERO', 31372552, 'ALRMO@REDES.COM', 'BARRANQUILLA', 'LA PAZ', 'CRA 5 # 24-43', NULL),
	(53, 'TI', 1028366236, 'morela', 'isabel', 'escorcia', 'vasquez', '1990-01-20', 'FEMENINO', 'FEMENINO', 'CASADO', 2147483647, 'more@redes.com', 'CARTAGENA', 'olaya', 'cra 4 # 24-34', NULL);
/*!40000 ALTER TABLE `db_afiliados` ENABLE KEYS */;

-- Volcando estructura para tabla test.db_historial
CREATE TABLE IF NOT EXISTS `db_historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diacita` date DEFAULT NULL,
  `horacita` varchar(50) DEFAULT NULL,
  `especialidad` varchar(50) DEFAULT NULL,
  `especialista` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `pnombre` varchar(50) DEFAULT NULL,
  `papellido` varchar(50) DEFAULT NULL,
  `sapellido` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `asuntocita` varchar(50) DEFAULT NULL,
  `estadocita` varchar(50) DEFAULT NULL,
  `fechacomentario` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla test.db_historial: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `db_historial` DISABLE KEYS */;
INSERT INTO `db_historial` (`id`, `diacita`, `horacita`, `especialidad`, `especialista`, `numero`, `pnombre`, `papellido`, `sapellido`, `usuario`, `asuntocita`, `estadocita`, `fechacomentario`) VALUES
	(2, '2020-06-03', '14:49', 'GINECOLOGIA', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'REALES', 'yordis', 'test de cita medica', 'ATENDIDO', '2020-05-29'),
	(3, '2020-06-03', '14:53', 'GINECOLOGIA', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'REALES', 'yordis', 'test de cita medica nueva', 'AUSENTE', '2020-05-29'),
	(4, '2020-06-03', '16:50', 'DERMATOLOGO', 'YORDIS ESCORCIA', '10283388', 'AVIS', 'BARRIOS', 'RAMOS', 'yordis', 'cita para dermatologia', 'POR ATENDER', '2020-05-29'),
	(5, '2020-06-03', '18:39', 'GINECOLOGIA', 'DAIRO BARRIOS', '105830384', 'DANIELA', 'CASSIANI', 'ORTIZ', 'yordis', 'cita medica', 'POR ATENDER', '2020-05-29'),
	(6, '2020-06-03', '17:39', 'DERMATOLOGO', 'DAIRO BARRIOS', '878787878', 'JOSE', 'YEPES', 'ROMERO', 'yordis', 'otra cita', 'POR ATENDER', '2020-05-29'),
	(7, '2020-06-03', '16:16', 'GINECOLOGIA', 'YORDIS ESCORCIA', '12232454', 'DAYANA', 'REALES', 'PEREZ', 'yordis', 'cita previa', 'ATENDIDO', '2020-05-29'),
	(8, '2020-06-03', '13:46', 'DERMATOLOGO', 'DAIRO BARRIOS', '102834466', 'CARDONA', 'SALAZAR', 'OSPINO', 'yordis.escorcia', 'CITA MEDICA', 'ATENDIDO', '2020-05-30'),
	(9, '2020-06-03', '15:46', 'GINECOLOGIA', 'DAIRO BARRIOS', '10283388', 'AVIS', 'BARRIOS', 'RAMOS', 'yordis.escorcia', 'OTRA CITA MEDICA', 'POR ATENDER', '2020-05-30'),
	(10, '2020-06-03', '15:50', 'GINECOLOGIA', 'YORDIS ESCORCIA', '104372662', 'MANUELA2', 'REALES2', 'PEREZ2', 'yordis.escorcia', 'CITA MDICA', 'POR ATENDER', '2020-05-30'),
	(11, '2020-06-03', '17:53', 'DERMATOLOGO', 'YORDIS ESCORCIA', '212121', 'MORELA', 'ESCORCIA', 'MARTINES', 'yordis.escorcia', 'OTRA CITA MEDICA', 'POR ATENDER', '2020-05-30'),
	(12, '2020-06-03', '16:52', 'GINECOLOGIA', 'DAIRO BARRIOS', '123456789', 'NENA', 'CASTRO', 'HERNANDEZ', 'yordis.escorcia', 'CITA MEDICA', 'POR ATENDER', '2020-05-30'),
	(13, '2020-06-03', '15:18', 'DERMATOLOGO', 'YORDIS ESCORCIA', '2147483647', 'ANDRES', 'AGUILAR', 'REALES', 'yordis', 'tttttttt', 'POR ATENDER', '2020-06-03');
/*!40000 ALTER TABLE `db_historial` ENABLE KEYS */;

-- Volcando estructura para tabla test.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `kind` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla test.user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `profile_pic`, `is_active`, `kind`, `created_at`) VALUES
	(1, 'admin', 'Amner Saucedo Sosa', 'waptoing7@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'default.png', 1, 1, '2017-07-15 12:05:45'),
	(2, NULL, 'Yordis Escorcia', 'yordis', 'e09c4da72e16d11b8d29eba9fed0456c1960142d', 'default.png', 1, 1, '2020-05-02 19:39:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Volcando estructura para tabla test.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Volcando datos para la tabla test.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombres`, `apellidos`, `estado`, `fechacreacion`) VALUES
	(1, 'yordis', 'f24ecb9ca5c07c2883b3b25c32a4a4910332da66a64c8716278c09e6bedd215e488e4c8347121a54824df579653f4e0334ccb775285287c888fe291d7035a9ba', 'YORDIS', 'ESCORCIA', 'ACTIVO', '2020-05-15'),
	(10, 'yordis.escorcia', 'f24ecb9ca5c07c2883b3b25c32a4a4910332da66a64c8716278c09e6bedd215e488e4c8347121a54824df579653f4e0334ccb775285287c888fe291d7035a9ba', 'CAJACOPI', 'CAJACOPI', 'ACTIVO', '2020-05-22'),
	(12, 'diego', '0d755acbdd549d5a6c8776ca8aa0a94e303e89a0159c3d0f00844714966bdb82024d4081453079ce3f17b678498976ec167f64dbff1668fc3f41516ec01eb03a', 'DIEGO', 'BARRIO', 'ACTIVO', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
