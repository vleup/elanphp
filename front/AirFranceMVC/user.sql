-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour user
CREATE DATABASE IF NOT EXISTS `user` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `user`;

-- Listage de la structure de la table user. client
CREATE TABLE IF NOT EXISTS `client` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `roles` json DEFAULT NULL,
  `registerdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table user.client : ~1 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id_user`, `username`, `email`, `password`, `roles`, `registerdate`) VALUES
	(6, 'test', 'test@test.test', '$argon2i$v=19$m=1024,t=2,p=2$RUllcnNGbDNINTc1SmMuWQ$Gn57kxHCWFAp5TYJyNUEglnm5s76D3DOKqJrhrZS4NI', NULL, '2020-05-11 15:35:09');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
