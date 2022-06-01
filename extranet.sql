-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 mai 2022 à 23:34
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `extranet`
--

-- --------------------------------------------------------

--
-- Structure de la table `notepad`
--

DROP TABLE IF EXISTS `notepad`;
CREATE TABLE IF NOT EXISTS `notepad` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notepad`
--

INSERT INTO `notepad` (`id`, `id_user`, `pseudo`, `message`) VALUES
(4, 1, 'ivareor', 'test'),
(3, 1, 'ivareor', 'test'),
(5, 1, 'ivareor', 'test'),
(6, 1, 'ivareor', 'test'),
(9, 2, 'administrateur', 'test'),
(10, 2, 'administrateur', 'Je suis admin');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone_port` varchar(25) NOT NULL,
  `etat` int(255) NOT NULL DEFAULT '0',
  `code_validation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `identifiant`, `mot_de_passe`, `nom`, `prenom`, `mail`, `telephone_port`, `etat`, `code_validation`) VALUES
(1, 'ivareor', '$2y$10$qPJoDe0BlZLZ1jNSxjZymuPrwj3qdFQCXL4z4fPMTIGFKCDKG4bOO', 'Mutschler', 'Sacha', 'natetsachadu59@gmail.com', '0761922896', 0, 'Kc0IC2itFiTtjKSIj8avyJ84QQRe0S'),
(2, 'administrateur', '$2y$10$z/spAUB0ukyyUyv09ruhZO3Q8I4EDs/RUCvswSBi4fWGlaHW..0ge', 'Mutschler', 'Sacha', 'sachamutschler@gmail.com', '0761922896', 0, 'gz70xkoNgvfotBRfMYNzIng99aRoQ6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
