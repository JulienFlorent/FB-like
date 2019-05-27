-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 mai 2019 à 08:45
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
-- Base de données :  `bdd-facebook-esi`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

DROP TABLE IF EXISTS `actualités`;
CREATE TABLE IF NOT EXISTS `actualités` (
  `IdActualité` int(15) NOT NULL,
  `TexteActu` varchar(255) NOT NULL,
  `LienActualité` int(60) NOT NULL,
  PRIMARY KEY (`IdActualité`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `IdAmi` int(15) NOT NULL,
  `NomAmi` varchar(40) NOT NULL,
  `PrénomAmi` varchar(40) NOT NULL,
  `TypeAmi` int(15) NOT NULL,
  PRIMARY KEY (`IdAmi`)
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
  `IdConversation` int(15) NOT NULL,
  `TexteConv` varchar(255) NOT NULL,
  `IdUtilisateur` int(15) NOT NULL,
  PRIMARY KEY (`IdConversation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int(15) NOT NULL,
  `NomUtilisateur` varchar(30) NOT NULL,
  `PrénomUtilisateur` varchar(30) NOT NULL,
  `VilleUtilisateur` int(11) NOT NULL,
  `IdAmi` int(15) NOT NULL,
  `IdConversation` int(15) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
