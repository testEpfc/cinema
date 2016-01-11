-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Janvier 2016 à 07:36
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cinema`
--
CREATE DATABASE IF NOT EXISTS `cinema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cinema`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'index primaire',
  `titre` varchar(100) COLLATE utf8_bin NOT NULL COMMENT 'titre du film',
  `annee` int(11) NOT NULL COMMENT 'année du film',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `annee`) VALUES
(1, 'Le tout nouveau testament', 2015),
(2, 'Mustang', 2015),
(3, 'La soupe au chou', 1985),
(4, 'Casablanca', 1948),
(5, 'qdsfqdsf', 1338),
(8, 'qdsfqdsfTITRE', 1338),
(9, 'sdfqsdf', 1335),
(10, '§((è§!', 1338),
(11, 'taztet', 133338);

-- --------------------------------------------------------

--
-- Structure de la table `loginfo`
--

CREATE TABLE IF NOT EXISTS `loginfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` text COLLATE utf8_bin NOT NULL COMMENT 'pseudo',
  `password` text COLLATE utf8_bin NOT NULL COMMENT 'mot de passe',
  `email` text COLLATE utf8_bin NOT NULL COMMENT 'email',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Contenu de la table `loginfo`
--

INSERT INTO `loginfo` (`id`, `nickname`, `password`, `email`) VALUES
(1, 'toto', '****', 'sdfqd@qdsf.com'),
(2, 'testusername', 'pass**word', 'qsdfqsdf@qsdfqsdf.com'),
(3, 'g', 'gf', 'gfd@qdsf'),
(4, 'g', 'gf', 'gfd@qdsf'),
(5, 'qdsmfkjl', 'qmdkljf', 'qsdf@qmdkljf.com'),
(6, 'qsdfqdsf', 'PASWOOOOORD', 'add@dqsf.be'),
(7, '', '', ''),
(8, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
