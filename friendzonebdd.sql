-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 juin 2019 à 15:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `friendzonebdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

DROP TABLE IF EXISTS `actualités`;
CREATE TABLE IF NOT EXISTS `actualités` (
  `IdActualité` int(15) NOT NULL AUTO_INCREMENT,
  `TexteActu` varchar(255) NOT NULL,
  `LienActualité` int(60) NOT NULL,
  PRIMARY KEY (`IdActualité`),
  KEY `LienActualité` (`LienActualité`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `IdAmi` int(15) NOT NULL AUTO_INCREMENT,
  `NomAmi` varchar(40) NOT NULL,
  `PrénomAmi` varchar(40) NOT NULL,
  `TypeAmi` int(15) NOT NULL,
  PRIMARY KEY (`IdAmi`),
  KEY `TypeAmi` (`TypeAmi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `catégorieami`
--

DROP TABLE IF EXISTS `catégorieami`;
CREATE TABLE IF NOT EXISTS `catégorieami` (
  `TypeAmi` int(15) NOT NULL,
  `DésignationAmi` varchar(50) NOT NULL,
  PRIMARY KEY (`TypeAmi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `IdConversation` int(15) NOT NULL AUTO_INCREMENT,
  `TexteConv` varchar(255) NOT NULL,
  `IdUtilisateur` int(15) NOT NULL,
  PRIMARY KEY (`IdConversation`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int(15) NOT NULL AUTO_INCREMENT,
  `NomUtilisateur` varchar(30) NOT NULL,
  `PrénomUtilisateur` varchar(30) NOT NULL,
  `MotDePasseUtilisateur` varchar(500) CHARACTER SET utf8 NOT NULL,
  `AdresseMailUtilisateur` varchar(50) NOT NULL,
  `VilleUtilisateur` varchar(50) NOT NULL,
  `IdAmi` int(15) DEFAULT NULL,
  `IdConversation` int(15) DEFAULT NULL,
  PRIMARY KEY (`IdUtilisateur`),
  KEY `IdAmi` (`IdAmi`,`IdConversation`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `NomUtilisateur`, `PrénomUtilisateur`, `MotDePasseUtilisateur`, `AdresseMailUtilisateur`, `VilleUtilisateur`, `IdAmi`, `IdConversation`) VALUES
(1, 'La Police', 'Morice', 'MoriceLaPoliceEnForce', 'moricelapolice@gmail.com', 'Maurice', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
