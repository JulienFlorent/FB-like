-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 27 mai 2019 à 11:42
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

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

CREATE TABLE `actualités` (
  `IdActualité` int(15) NOT NULL,
  `TexteActu` varchar(255) NOT NULL,
  `LienActualité` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `IdAmi` int(15) NOT NULL,
  `NomAmi` varchar(40) NOT NULL,
  `PrénomAmi` varchar(40) NOT NULL,
  `TypeAmi` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `catégorieami`
--

CREATE TABLE `catégorieami` (
  `TypeAmi` int(15) NOT NULL,
  `DésignationAmi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

CREATE TABLE `conversation` (
  `IdConversation` int(15) NOT NULL,
  `TexteConv` varchar(255) NOT NULL,
  `IdUtilisateur` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `IdUtilisateur` int(15) NOT NULL,
  `NomUtilisateur` varchar(30) NOT NULL,
  `PrénomUtilisateur` varchar(30) NOT NULL,
  `AdresseMailUtilisateur` varchar(50) NOT NULL,
  `VilleUtilisateur` varchar(50) NOT NULL,
  `IdAmi` int(15) NOT NULL,
  `IdConversation` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `NomUtilisateur`, `PrénomUtilisateur`, `AdresseMailUtilisateur`, `VilleUtilisateur`, `IdAmi`, `IdConversation`) VALUES
(0, 'La Poice', 'Morice', 'moricelapolice@gmail.com', 'Mauroce', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualités`
--
ALTER TABLE `actualités`
  ADD PRIMARY KEY (`IdActualité`);

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`IdAmi`);

--
-- Index pour la table `catégorieami`
--
ALTER TABLE `catégorieami`
  ADD PRIMARY KEY (`TypeAmi`);

--
-- Index pour la table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`IdConversation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`IdUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
