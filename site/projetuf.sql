-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 24 mai 2020 à 14:35
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetuf`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `login`, `mdp`) VALUES
(1, 'jeff', 'besos', 'an.difuria@gmail.com', 'anthony.difuria', '1265874256985421'),
(2, 'Lafont', 'Henri', 'h.lafont@gmail.com', 'h.lafont', 'h.lafont'),
(3, 'Danielssss', 'Jackie', 'j.daniels@gmail.com', 'j.daniels', '123456789'),
(14, 'DI FURIA', 'Anthony', 'an.difuria@gmail.com', 'anthony.difuria', '123456789'),
(15, 'LEBLANC', 'Marie', 'm.leblanc@gmail.com', 'm.leblanc', '123456789'),
(16, 'DI FURIA', 'Anthony', 'an.difuria@gmail.com', 'anthony.difuria', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_emission` varchar(30) DEFAULT NULL,
  `paye` varchar(3) NOT NULL,
  `date_paiement` varchar(30) DEFAULT NULL,
  `prix` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id`, `date_emission`, `paye`, `date_paiement`, `prix`) VALUES
(1, '18/05/2020', 'O', '28/05/2020', '120 €'),
(2, '28/05/2020', 'O', '28/05/2020', '200 €'),
(3, '18/05/2020', 'N', '', '120 €'),
(4, '18/05/2020', 'O', '28/05/2020', '200 €');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `description` varchar(100) NOT NULL,
  `prix` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `stock`, `commentaire`) VALUES
(1, 'Airpods', 'Airpods', '120', 20, 'Apple'),
(2, 'PC Gamer', 'PC Gamer', '1300', 10, 'Aorus'),
(3, 'Airpods', 'Airpods', '120', 20, 'Apple'),
(4, 'PC Gamer', 'PC Gamer', '1300', 10, 'Aorus'),
(5, 'Airpods', 'Airpods', '120', 20, 'Apple'),
(6, 'Airpods', 'Airpods', '120', 20, 'Apple');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
