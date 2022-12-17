-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 jan. 2020 à 12:07
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `registration`
--

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'aminekouis@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(2, 'aaa', 'aaaaa@gmail.com', 'ed02457b5c41d964dbd2f2a609d63fe1bb7528dbe55e1abf5b52c249cd735797'),
(3, 'bb', 'bb@gmail.com', '3b64db95cb55c763391c707108489ae18b4112d783300de38e033b4c98c3deaf'),
(4, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce'),
(5, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce'),
(6, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
