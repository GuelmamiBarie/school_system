-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 09 Novembre 2020 à 18:35
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base_univ`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `Psd_Ad` text NOT NULL,
  `MoP_Ad` text NOT NULL,
  `Nom_Ad` text NOT NULL,
  `Prn_Ad` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`Psd_Ad`, `MoP_Ad`, `Nom_Ad`, `Prn_Ad`) VALUES
('Barie', 'Barie12345', 'Guelmami', 'Abdelbarie Ahmed '),
('', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `Nom_Et` text NOT NULL,
  `Pre_Et` text NOT NULL,
  `Email_Et` text NOT NULL,
  `Age_Et` int(11) NOT NULL,
  `Sex_Et` text NOT NULL,
  `Wil_Et` text NOT NULL,
  `Adr_Et` text NOT NULL,
  `AcS_Et` text NOT NULL,
  `Pho_Et` blob NOT NULL,
  `AnE_Et` text NOT NULL,
  `MoP_Et` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`Nom_Et`, `Pre_Et`, `Email_Et`, `Age_Et`, `Sex_Et`, `Wil_Et`, `Adr_Et`, `AcS_Et`, `Pho_Et`, `AnE_Et`, `MoP_Et`) VALUES
('Test', 'Test', 'Test', 19, 'Test', 'test', 'test', 'test', '', 'test', '1-8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
