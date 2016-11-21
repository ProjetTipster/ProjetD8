-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Novembre 2016 à 14:28
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tipster`
--

-- --------------------------------------------------------

--
-- Structure de la table `taxonomy_term_field_data`
--

CREATE TABLE `taxonomy_term_field_data` (
  `tid` int(10) UNSIGNED NOT NULL,
  `vid` varchar(32) CHARACTER SET ascii NOT NULL COMMENT 'The ID of the target entity.',
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  `name` varchar(255) NOT NULL,
  `description__value` longtext,
  `description__format` varchar(255) CHARACTER SET ascii DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `changed` int(11) DEFAULT NULL,
  `default_langcode` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='The data table for taxonomy_term entities.';

--
-- Contenu de la table `taxonomy_term_field_data`
--

INSERT INTO `taxonomy_term_field_data` (`tid`, `vid`, `langcode`, `name`, `description__value`, `description__format`, `weight`, `changed`, `default_langcode`) VALUES
(1, 'sport', 'fr', 'Football', NULL, NULL, 0, 1479228049, 1),
(2, 'sport', 'fr', 'Basketball', NULL, NULL, 1, 1479228068, 1),
(3, 'sport', 'fr', 'Hockey', NULL, NULL, 2, 1479228083, 1),
(4, 'sport', 'fr', 'Tennis', NULL, NULL, 4, 1479228279, 1),
(5, 'sport', 'fr', 'Rugby', NULL, NULL, 3, 1479228264, 1),
(8, 'competition', 'fr', 'Ligue1', NULL, NULL, 1, 1479242792, 1),
(10, 'competition', 'fr', 'Ligue 2', NULL, NULL, 0, 1479242792, 1),
(11, 'competition', 'fr', 'Football', NULL, NULL, 18, 1479243098, 1),
(12, 'competition', 'fr', 'Tennis', NULL, NULL, 14, 1479243098, 1),
(13, 'competition', 'fr', 'Basketball', NULL, NULL, 17, 1479243098, 1),
(14, 'competition', 'fr', 'Rugby', NULL, NULL, 15, 1479243098, 1),
(15, 'competition', 'fr', 'Hockey', NULL, NULL, 16, 1479243098, 1),
(16, 'competition', 'fr', 'Europe', NULL, NULL, 0, 1479242792, 1),
(17, 'competition', 'fr', 'France', NULL, NULL, 1, 1479242792, 1),
(18, 'competition', 'fr', 'NBA', NULL, NULL, 0, 1479242792, 1),
(19, 'competition', 'fr', 'Pro A', NULL, NULL, 1, 1479242818, 1),
(20, 'competition', 'fr', 'Ligue des Champions', NULL, NULL, 0, 1479242873, 1),
(21, 'competition', 'fr', 'Coupe Europa', NULL, NULL, 1, 1479242918, 1),
(22, 'competition', 'fr', 'Roland Garros', NULL, NULL, 1, 1479243047, 1),
(23, 'competition', 'fr', 'Coupe Davis', NULL, NULL, 0, 1479242990, 1),
(24, 'competition', 'fr', 'NHL', NULL, NULL, 0, 1479243047, 1),
(25, 'competition', 'fr', 'KHL', NULL, NULL, 1, 1479243047, 1),
(26, 'competition', 'fr', 'Top14', NULL, NULL, 0, 1479243098, 1),
(27, 'competition', 'fr', 'Pro D2', NULL, NULL, 1, 1479243098, 1),
(28, 'etat', 'fr', 'En attente', NULL, NULL, 0, 1479389646, 1),
(29, 'etat', 'fr', 'Gagné', NULL, NULL, 0, 1479243790, 1),
(30, 'etat', 'fr', 'Perdu', NULL, NULL, 0, 1479243798, 1),
(31, 'type', 'fr', 'Résultat', NULL, NULL, 0, 1479244923, 1),
(32, 'type', 'fr', 'Vainqueur', NULL, NULL, 1, 1479245115, 1),
(33, 'type', 'fr', 'Résultat MT', NULL, NULL, 2, 1479245115, 1),
(34, 'type', 'fr', 'Handicap', NULL, NULL, 3, 1479245115, 1),
(35, 'type', 'fr', 'Over', NULL, NULL, 4, 1479245115, 1),
(36, 'type', 'fr', 'Under', NULL, NULL, 5, 1479245115, 1),
(37, 'type', 'fr', 'Buteur', NULL, NULL, 0, 1479245209, 1),
(38, 'etat', 'fr', 'Annulé', NULL, NULL, 0, 1479482026, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `taxonomy_term_field_data`
--
ALTER TABLE `taxonomy_term_field_data`
  ADD PRIMARY KEY (`tid`,`langcode`),
  ADD KEY `taxonomy_term__id__default_langcode__langcode` (`tid`,`default_langcode`,`langcode`),
  ADD KEY `taxonomy_term_field__name` (`name`(191)),
  ADD KEY `taxonomy_term__tree` (`vid`,`weight`,`name`(191)),
  ADD KEY `taxonomy_term__vid_name` (`vid`,`name`(191));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
