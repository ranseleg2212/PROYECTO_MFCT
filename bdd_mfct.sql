-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyecto_mfct
CREATE DATABASE IF NOT EXISTS `proyecto_mfct` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyecto_mfct`;

-- Volcando estructura para tabla proyecto_mfct.form_dos
CREATE TABLE IF NOT EXISTS `form_dos` (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `rnc` varchar(15) NOT NULL,
  `cnc_identidad` varchar(3) NOT NULL,
  `dispone` varchar(3) NOT NULL,
  `alcance` varchar(20) NOT NULL,
  `dedicacion` varchar(50) NOT NULL,
  `industria` varchar(50) NOT NULL,
  `tamano` varchar(20) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `seccion` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `operaciones` varchar(50) NOT NULL,
  `tel_principal` varchar(15) NOT NULL,
  `tel_directo` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `ext` varchar(10) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla proyecto_mfct.form_tres
CREATE TABLE IF NOT EXISTS `form_tres` (
  `id` int NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `funciones_perfil` varchar(150) NOT NULL,
  `sueldo` float NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `tipo_contacto` varchar(20) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `correo_cv` varchar(50) NOT NULL,
  `contacto_persona` varchar(25) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla proyecto_mfct.form_uno
CREATE TABLE IF NOT EXISTS `form_uno` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `graduacion` int NOT NULL,
  `institucion` varchar(30) NOT NULL,
  `curso` varchar(20) NOT NULL,
  `matricula` varchar(25) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `carrera` varchar(40) NOT NULL,
  `tecnico_basico` varchar(30) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `nacionalidad` varchar(60) NOT NULL,
  `tel_residencial` varchar(15) NOT NULL,
  `tel_movil` varchar(15) NOT NULL,
  `licencia` varchar(3) NOT NULL,
  `vh_propio` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `experiencia` varchar(25) NOT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
