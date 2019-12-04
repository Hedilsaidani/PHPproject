-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Décembre 2019 à 21:03
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `foodordering`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `descr` varchar(10000) COLLATE utf8_bin NOT NULL,
  `prix` double(10,5) NOT NULL,
  `fichier` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`pid`, `nom`, `descr`, `prix`, `fichier`) VALUES
(8, 'couscous bl allouch', 'FFILET DE DORADE', 400.00000, 'AAAACCCCCRRRRRRR'),
(9, 'Lasagne', 'Citron,Caviar d''aubergine,Sauce blanche,Fromage', 400.00000, 'AAAACCCCCRRRRRRR'),
(10, 'crepes sucresÃ©', 'Citron,Caviar d''aubergine,Sauce blanche,Fromage', 400.00000, '21258520');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
