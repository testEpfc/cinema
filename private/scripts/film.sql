-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Janvier 2016 à 22:05
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'index primaire',
  `titre` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'titre du film',
  `annee` int(11) NOT NULL COMMENT 'année du film',
  `description` text COLLATE utf8_bin NOT NULL COMMENT 'description du film',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `annee`, `description`) VALUES
(1, 'Le tout nouveau testament', 2015, ''),
(2, 'Mustang', 2015, ''),
(3, 'La soupe au chou', 1985, ''),
(4, 'Casablanca', 1948, ''),
(14, 'bonjour', 0, ''),
(15, 'bonjour', 1222, 'the des sdf qsdf qsdf qsdf qsd fqsd fqs df qsd fqs df qsdf qsdf qsdf qsdf qsd fqsd fqsd fqs dfqs df qsdf qsdf qsd fqsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
