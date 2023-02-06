# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.10.2-MariaDB-1:10.10.2+maria~ubu2204)
# Database: jp-mtg-cards
# Generation Time: 2023-02-06 12:25:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cards`;

CREATE TABLE `cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `type_line` varchar(100) NOT NULL DEFAULT '',
  `mana` varchar(100) NOT NULL DEFAULT '',
  `rarity` enum('Common','Uncommon','Rare','Mythic rare') NOT NULL DEFAULT 'Common',
  `img_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;

INSERT INTO `cards` (`id`, `name`, `type_line`, `mana`, `rarity`, `img_url`)
VALUES
	(1,'Lathril, Blade of the Elves','Legendary Creature - Elf Noble','Golgari: Forest / Swamp','Mythic rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=508147&type=card'),
	(2,'Kalain, Reclusive Painter','Legendary Creature - Human Elf Bard','Rakdos: Swamp / Mountain','Rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=574451&type=card'),
	(3,'Zacama, Primal Calamity','Legendary Creature - Elder Dinosaur','Naya: Forest / Mountain / Plane','Mythic rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=439836&type=card'),
	(4,'Goldspan Dragon','Creature - Dragon','Mountain / Incolor','Mythic rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=590123&type=card'),
	(5,'Hellkite Tyrant','Creature - Dragon','Mountain / Incolor','Mythic rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=519207&type=card'),
	(6,'Bonehoard','Artifact - Equipment','Incolor','Rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=554229&type=card'),
	(7,'Hurricane','Sorcery','Forest / Incolor','Rare','https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=129885&type=card');

/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
