-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 25 jan. 2023 à 12:23
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

DROP TABLE IF EXISTS `commentary`;
CREATE TABLE IF NOT EXISTS `commentary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `verify` varchar(5) NOT NULL DEFAULT 'false',
  `comment` varchar(5) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commentary`
--

INSERT INTO `commentary` (`id`, `name_user`, `email_user`, `text`, `created_at`, `verify`, `comment`) VALUES
(3, 'jean pierre bonson', 'jean-pierre@gmail.com', 'wow très bon site!!!!!!', '2023-01-24', 'true', 'true'),
(2, 'leaf', 'evadebart51@gmail.com', 'test commentaire : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas luctus libero at varius. Vestibulum in turpis nec erat pretium volutpat. Vivamus tincidunt libero eu enim commodo, eget tempus risus viverra. Nulla risus nibh, pell', '2023-01-23', 'true', 'true'),
(5, 'eezfqcsze', 'fkfff@gmail.com', 'ezfegrt', '2023-01-24', 'true', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imgGalerie` varchar(255) NOT NULL,
  `imgGrand` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `siteUrl` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `nom`, `imgGalerie`, `imgGrand`, `siteUrl`, `category`) VALUES
(2, 'freshlyRestaurant', 'menus-desktop.png', 'menus-desktop.jpg', 'index.php?url=freshlyRestaurant', 'a'),
(3, 'ArchiDesign', 'home-desktop.png', 'home-desktop.png', 'index.php?url=archiDesign', 'a'),
(4, 'newYorkCity', 'maquette.png', 'maquette.png', 'index.php?url=newYorkDesign', 'a'),
(5, 'carte Reborn', 'carte.png', 'carte.png', '', 'e'),
(6, 'maquette sportPassion', 'proposition-1.png', 'home-desktop.png', '', 'c');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `password`) VALUES
(3, 'leaf', 'evadebart51@gmail.com', '$2y$10$WnHxAh77rGwDJyuIpVqO.eczqzl/S7HOuV94S34AsvPeqV4sw3CEa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
