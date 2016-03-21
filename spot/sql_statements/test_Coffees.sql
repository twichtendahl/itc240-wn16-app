-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `test_Coffees`;
CREATE TABLE `test_Coffees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Origin` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `test_Coffees` (`id`, `Name`, `Origin`, `Description`, `Price`) VALUES
(1,	'Blue Mountain',	'Jamaica',	'Exquisite low-acid coffee',	21.00),
(2,	'Chiapas',	'Mexico',	'Robust and complex medium-roast coffee',	18.00),
(3,	'Antigua',	'Guatemala',	'Smooth and chocolaty medium-roast coffee',	17.55),
(4,	'Tarrazu',	'Costa Rica',	'Aromatic and Spicy coffee with delicate fruit notes',	24.50),
(5,	'Tres Rios',	'Costa Rica',	'Bold, semi-sweet coffee with a silky body',	19.00),
(6,	'Finca Mogola',	'Honduras',	'Complex medium-roast coffee with notes of cardamom and fig',	18.50),
(7,	'Tacuba',	'El Salvador',	'Chocolatey coffee with a velvet body',	20.50),
(8,	'Ciudad Barrios',	'El Salvador',	'Floral aroma with notes of currant and baked apple',	17.50),
(9,	'Narino',	'Colombia',	'Exquisite mild coffee with light body and strong chocolate finish',	17.00),
(10,	'Antioquia',	'Colombia',	'Low acid medium-roast coffee with an aroma of rose and cinnamon',	17.00),
(11,	'Minas Gerais',	'Brazil',	'Syrupy sweet dark-roast',	15.00),
(12,	'Santos',	'Brazil',	'Complex espresso roast with notes of hazelnut and cloves',	15.50),
(13,	'Mt Kilimanjaro',	'Tanzania',	'Crisp and bright coffee with notes of grapefruit and currant',	18.50),
(14,	'Mt Kenya AA',	'Kenya',	'Vibrant, bold medium-roast coffee with notes of pepper and red wine',	22.55),
(15,	'Nyanza',	'Kenya',	'High, fine acidy coffee with a superb black cherry finish',	21.00),
(16,	'Harrar',	'Ethiopia',	'Superb, complex medium-roast with a blackberry-jam finish',	19.50),
(17,	'Yirgacheffe',	'Ethiopia',	'Rich, sweetly-aromatic medium-roast coffee with a toasted-coconut bouquet',	23.00),
(18,	'Sidamo',	'Ethiopia',	'Subtle, rich medium roast with notes of blueberry and allspice',	20.50),
(19,	'Sulawesi',	'Indonesia',	'Powerful dark-roast with caramel and sweet-spice finish',	17.50),
(20,	'Kona',	'Hawaii',	'Delicate medium-roast with milk chocolate finish and velvet body',	25.50);

-- 2016-03-21 09:34:15
