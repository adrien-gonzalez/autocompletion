-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 16 mars 2020 à 11:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autocompletion`
--
CREATE DATABASE IF NOT EXISTS `autocompletion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `autocompletion`;

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_pok` varchar(25) NOT NULL,
  `type1_pok` varchar(255) NOT NULL,
  `type2_pok` varchar(255) NOT NULL,
  `HP` varchar(5) NOT NULL,
  `Attaque` varchar(5) NOT NULL,
  `Défense` varchar(5) NOT NULL,
  `Sp. Attaque` varchar(5) NOT NULL,
  `Sp. Défense` varchar(5) NOT NULL,
  `Vitesse` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_pok` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pokemon`
--

INSERT DELAYED INTO `pokemon` (`id`, `nom_pok`, `type1_pok`, `type2_pok`, `HP`, `Attaque`, `Défense`, `Sp. Attaque`, `Sp. Défense`, `Vitesse`) VALUES
(1, 'Bulbizarre', 'Herbre', 'Poison', '45', '49', '49', '65', '65', '45'),
(2, 'Herbizarre', 'Herbe', 'Poison', '60', '62', '63', '80', '80', '60'),
(3, 'Florizarre', 'Herbe', 'Poison', '80', '82', '83', '100', '100', '80'),
(4, 'Salameche', 'Feu', '', '39', '52', '43', '60', '50', '65'),
(5, 'Reptincel', 'Feu', '', '58', '64', '58', '80', '65', '80'),
(6, 'Dracaufeu', 'Feu', 'Vol', '78', '84', '78', '109', '85', '100'),
(7, 'Carapuce', 'Eau', '', '44', '48', '65', '50', '64', '43'),
(8, 'Carabaffe', 'Eau', '', '59', '63', '80', '65', '80', '58'),
(9, 'Tortank', 'Eau', '', '79', '83', '100', '85', '105', '78'),
(10, 'Chenipan', 'Insecte', '', '45', '30', '35', '20', '20', '45'),
(11, 'Chrysacier', 'Insecte', '', '50', '20', '55', '25', '25', '30'),
(12, 'Papilusion', 'Insecte', 'Vol', '60', '45', '50', '90', '80', '70'),
(13, 'Aspicot', 'Insecte', 'Poison', '40', '35', '30', '20', '20', '50'),
(14, 'Coconfort', 'Insecte', 'Poison', '45', '25', '50', '25', '25', '35'),
(15, 'Dardargnan', 'Insecte', 'Poison', '65', '90', '40', '45', '80', '75'),
(16, 'Roucool', 'Normal', 'Vol', '40', '45', '40', '35', '35', '56'),
(17, 'Roucoups', 'Normal', 'Vol', '63', '60', '55', '50', '50', '71'),
(18, 'Roucarnage', 'Normal', 'Vol', '83', '80', '75', '70', '70', '101'),
(19, 'Rattata', 'Normal', '', '30', '56', '35', '25', '35', '72'),
(20, 'Rattatac', 'Normal', '', '55', '81', '60', '50', '70', '97'),
(21, 'Piafabec', 'Normal', 'Vol', '40', '60', '30', '31', '31', '70'),
(22, 'Rapasdepic', 'Normal', 'Vol', '65', '90', '65', '61', '61', '100'),
(23, 'Abo', 'Poison', '', '35', '60', '44', '40', '54', '55'),
(24, 'Arbok', 'Poison', '', '60', '95', '69', '65', '79', '80'),
(25, 'Pikachu', 'Electrik', '', '35', '55', '40', '50', '50', '90'),
(26, 'Raichu', 'Electrik', '', '60', '90', '55', '90', '80', '110'),
(51, 'Triopikeur', 'Sol', '', '35', '100', '50', '50', '70', '120'),
(50, 'Taupiqueur', 'Sol', '', '10', '55', '25', '35', '45', '95'),
(27, 'Sabelette', 'Sol', '', '50', '75', '85', '20', '30', '40'),
(28, 'Sablaireau', 'Sol', '', '75', '100', '110', '45', '55', '65'),
(29, 'Nidoran (femelle)', 'Poison', '', '55', '47', '52', '40', '40', '41'),
(30, 'Nidorina', 'Poison', '', '70', '62', '67', '55', '55', '56'),
(31, 'Nidoqueen', 'Poison', 'Sol', '90', '92', '87', '75', '85', '76'),
(32, 'Nidoran (mâle)', 'Poison', '', '46', '57', '40', '40', '40', '50'),
(33, 'Nidorino', 'Poison', '', '61', '72', '57', '55', '55', '65'),
(34, 'Nidoking', 'Poison', 'Sol', '81', '102', '77', '85', '75', '85'),
(35, 'Mélofée', 'Fée ', '', '70', '45', '48', '60', '65', '35'),
(36, 'Mélodelfe', 'Fée', '', '95', '70', '73', '95', '90', '60'),
(37, 'Goupix', 'Feu', '', '38', '41', '40', '50', '65', '65'),
(38, 'Feunard', 'Feu', '', '73', '76', '75', '81', '100', '100'),
(39, 'Rondoudou', 'Fée', 'Normal', '115', '45', '20', '45', '25', '20'),
(40, 'Grodoudou', 'Fée', 'Normal', '140', '70', '45', '85', '50', '45'),
(41, 'Nosferapti', 'Poison', 'Vol', '40', '45', '35', '30', '40', '55'),
(42, 'Nosferalto', 'Poison', 'Vol', '75', '80', '70', '65', '75', '90'),
(43, 'Mystherbe', 'Herbe', 'Poison', '45', '50', '55', '75', '65', '30'),
(44, 'Ortide', 'Herbe', 'Poison', '60', '65', '70', '85', '75', '40'),
(45, 'Rafflesia', 'Herbe', 'Poison', '75', '80', '85', '110', '90', '50'),
(46, 'Paras', 'Insecte', 'Poison', '35', '70', '55', '45', '55', '25'),
(47, 'Parasect', 'Insecte', 'Poison', '60', '95', '80', '60', '80', '30'),
(48, 'Mimitoss', 'Insecte', 'Poison', '60', '55', '50', '40', '55', '45'),
(49, 'Aéromite', 'Insecte', 'Poison', '70', '65', '60', '90', '75', '90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
