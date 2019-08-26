-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 août 2019 à 12:14
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `real`
--

DROP TABLE IF EXISTS `real`;
CREATE TABLE IF NOT EXISTS `real` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `picture` text NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `real`
--

INSERT INTO `real` (`id`, `name`, `picture`, `description`, `details`, `link`) VALUES
(1, 'Snake', 'snake.jpg', 'Jeu du serpent', '<li>- Animation en Javascript</li>\r\n<li>- Développement POO</li>\r\n', 'pages/snake.html'),
(2, 'Les clés de mon déclic', 'declic.jpg', 'Réalisation d\'un site vitrine', '<li>- Élaboration du design du site.</li>\r\n<li>- Intégration du contenu.</li>\r\n<li>- Développement pour dynamiser le site.</li>\r\n<li>- Travail de référencement pour donner de la visibilité.</li>', 'https://clesdemondeclic.com/'),
(3, 'Portfolio', 'folio.jpg', 'Réalisation de mon portfolio ', '<li>- Élaboration du design du site.</li>\r\n<li>- Intégration du contenu.</li>\r\n<li>- Développement pour dynamiser le site.</li>\r\n<li>- Mise en place d\'une base de données.</li>\r\n<li>- Versionning via GitHub</li>', 'https://gcharmasson.com/'),
(4, 'Retourn\'AMAP', 'amap.jpg', 'Réalisation d\'un site vitrine pour l \'association Retourn\'AMAP', '<li>- Architecture faites en Symfony</li>\r\n<li>- Élaboration du design du site</li>\r\n<li>- Contenu administrable</li>\r\n<li>- Mise en place d\'une base de données</li>\r\n<li>- Dynamisation du site avec jQuery, CSS et Sass</li>\r\n<li>- Versionning via GitHub</li>', 'https://retournamap.com/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
