-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tallerphp
CREATE DATABASE IF NOT EXISTS `tallerphp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tallerphp`;

-- Volcando estructura para tabla tallerphp.notas
CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL,
  `nombreE` varchar(50) NOT NULL DEFAULT '',
  `correoE` varchar(50) NOT NULL DEFAULT '',
  `nota1` varchar(50) NOT NULL DEFAULT '',
  `nota2` varchar(50) NOT NULL DEFAULT '',
  `nota3` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_notas_usuario` FOREIGN KEY (`id`) REFERENCES `usuario` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla tallerphp.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla tallerphp.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT '',
  `correo` varchar(50) DEFAULT '',
  `contrasena` varchar(50) DEFAULT '',
  `rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FK_usuario_roles` (`rol`),
  CONSTRAINT `FK_usuario_roles` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
