-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 12 mars 2022 à 16:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `like4hits`
--

-- --------------------------------------------------------

--
-- Structure de la table `basepoints`
--

DROP TABLE IF EXISTS `basepoints`;
CREATE TABLE IF NOT EXISTS `basepoints` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cpc` bigint(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `basepoints`
--

INSERT INTO `basepoints` (`email`, `username`, `cpc`) VALUES
('aymen199719@hotmail.fr', 'dark', 50);

-- --------------------------------------------------------

--
-- Structure de la table `fb_likes`
--

DROP TABLE IF EXISTS `fb_likes`;
CREATE TABLE IF NOT EXISTS `fb_likes` (
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `totalclicks` int(11) NOT NULL,
  `dailyclicks` int(11) NOT NULL,
  `cpc` bigint(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fb_likes`
--

INSERT INTO `fb_likes` (`email`, `username`, `title`, `url`, `totalclicks`, `dailyclicks`, `cpc`) VALUES
('a.y@z', 'azer', 'aze', 'https://www.facebook.com/nqnbtc', 50, 40, 2),
('ahmed2020@gmail.com', 'ahmed', 'ahmed', 'https://www.facebook.com/mrRayyanGaming', 50, 30, 10),
('aymen199719@hotmail.fr', 'darko', 'darks', 'https://www.facebook.com/EminemStore', 50, 40, 1),
('dark@yahoo.fr', ' mohamed', 'test 10', 'https://www.facebook.com/CristianoRonaldo.SP', 50, 25, 1),
('mohamed@hotmail.com', ' mohamed', 'exchange website', 'https://www.facebook.com/nftwaz', 50, 10, 1),
('mohamed@yahoo.com', ' mohamed', 'website exchange', 'https://www.facebook.com/nftwaz', 200, 100, 10),
('test500@hotmail.fr', ' mohamed', 'cristiano ronaldo', 'https://www.facebook.com/itsmebokul/', 25, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'anapn', 'anapn@hotmail.fr', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(1, 'dark', 'aymen199719@hotmail.fr', 'f2681684f82b59a1af4d014de7348442d33fd012f0b62fe88ff0ff12258888c3'),
(5, 'aymen', 'az2020@hotmail.com', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0'),
(6, 'mohamed', 'mohamed@hotmail.com', '9af15b336e6a9619928537df30b2e6a2376569fcf9d7e773eccede65606529a0'),
(3, 'h', 'ssss2020@hotmail.fr', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'),
(2, 'testing', 'test@hotmail.fr', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
