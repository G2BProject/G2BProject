-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 09 Mai 2014 à 10:09
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `date_de_creation` date DEFAULT NULL,
  `image` varchar(25) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_forum`
--

CREATE TABLE IF NOT EXISTS `categorie_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) NOT NULL,
  `contenu` text,
  `date_de_creation` datetime DEFAULT NULL,
  `membre_ID` int(11) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  `concert_ID` int(11) NOT NULL,
  `salle_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_message_membre1_idx` (`membre_ID`),
  KEY `fk_message_artiste1_idx` (`artiste_ID`),
  KEY `fk_message_concert1_idx` (`concert_ID`),
  KEY `fk_message_salle1_idx` (`salle_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_du_concert` varchar(255) NOT NULL,
  `date_du_concert` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `salle_ID` int(11) DEFAULT NULL,
  `date_ajout_concert` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_concert_salle1_idx` (`salle_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`ID`, `nom_du_concert`, `date_du_concert`, `heure`, `salle_ID`, `date_ajout_concert`) VALUES
(7, 'eda', '2014-03-19', '18:00:00', NULL, NULL),
(8, 'dezbulfj', '2014-03-19', '16:00:00', NULL, '2014-05-09 12:05:10');

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `membre_ID` int(11) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_follow_membre_idx` (`membre_ID`),
  KEY `fk_follow_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse_email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `adresse` varchar(40) DEFAULT NULL,
  `sexe` int(11) DEFAULT NULL,
  `bio` text,
  `date_inscription` datetime DEFAULT NULL,
  `nombre_de_message` int(11) DEFAULT NULL,
  `etat_connexion` int(11) NOT NULL,
  `Role_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_membre_Role1_idx` (`Role_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`ID`, `pseudo`, `name`, `prenom`, `adresse_email`, `mot_de_passe`, `date_de_naissance`, `adresse`, `sexe`, `bio`, `date_inscription`, `nombre_de_message`, `etat_connexion`, `Role_ID`) VALUES
(1, 'dez', 'frefre', 'f"f', 'dea@gmail.com', '21505a43dfaab63d6113926e757498ce24651d44', '1962-09-17', 'fzerf', 1, NULL, '2014-05-09 11:51:10', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre_has_artiste`
--

CREATE TABLE IF NOT EXISTS `membre_has_artiste` (
  `membre_ID` int(11) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  KEY `fk_membre_has_artiste_membre1_idx` (`membre_ID`),
  KEY `fk_membre_has_artiste_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message_forum`
--

CREATE TABLE IF NOT EXISTS `message_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) DEFAULT NULL,
  `contenu` text,
  `date_de_creation` datetime DEFAULT NULL,
  `topic_ID` int(11) NOT NULL,
  `membre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_message_forum_topic1_idx` (`topic_ID`),
  KEY `fk_message_forum_membre1_idx` (`membre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message_prive`
--

CREATE TABLE IF NOT EXISTS `message_prive` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `message` text,
  `membre_ID` int(11) NOT NULL,
  `membre_ID1` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_message_prive_membre1_idx` (`membre_ID`),
  KEY `fk_message_prive_membre2_idx` (`membre_ID1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `lien` varchar(45) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_musique_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `membre_ID` int(11) NOT NULL,
  `concert_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_participation_membre1_idx` (`membre_ID`),
  KEY `fk_participation_concert1_idx` (`concert_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `photo_artiste`
--

CREATE TABLE IF NOT EXISTS `photo_artiste` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `lien` varchar(45) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_photo_artiste_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `photo_de_concert`
--

CREATE TABLE IF NOT EXISTS `photo_de_concert` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `lien` varchar(45) NOT NULL,
  `membre_ID` int(11) NOT NULL,
  `concert_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_photo_de_concert_membre1_idx` (`membre_ID`),
  KEY `fk_photo_de_concert_concert1_idx` (`concert_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `photo_profil`
--

CREATE TABLE IF NOT EXISTS `photo_profil` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `lien` varchar(45) NOT NULL,
  `membre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_photo_membre1_idx` (`membre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `représentation`
--

CREATE TABLE IF NOT EXISTS `représentation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `concert_ID` int(11) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_représentation_concert1_idx` (`concert_ID`),
  KEY `fk_représentation_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_de_la_salle` varchar(255) NOT NULL,
  `adresse` varchar(40) DEFAULT NULL,
  `description` text,
  `image` varchar(25) DEFAULT NULL,
  `nombre_de_place` int(11) NOT NULL,
  `numero_de_telephone` int(11) DEFAULT NULL,
  `membre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_salle_membre1_idx` (`membre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie_forum`
--

CREATE TABLE IF NOT EXISTS `sous_categorie_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sous_categorie_forum` varchar(45) DEFAULT NULL,
  `categorie_forum_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_sous_categorie_forum_categorie_forum1_idx` (`categorie_forum_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `statistique`
--

CREATE TABLE IF NOT EXISTS `statistique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nbr_visiteurs` int(11) DEFAULT NULL,
  `nbr_conectés` varchar(45) DEFAULT NULL,
  `nbr_visite` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `style_des_groupes`
--

CREATE TABLE IF NOT EXISTS `style_des_groupes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `artiste_ID` int(11) NOT NULL,
  `genre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_style_des_groupes_artiste1_idx` (`artiste_ID`),
  KEY `fk_style_des_groupes_genre1_idx` (`genre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `nbr_message` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `sous_categorie_forum_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_topic_sous_categorie_forum1_idx` (`sous_categorie_forum_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_message_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_concert1` FOREIGN KEY (`concert_ID`) REFERENCES `concert` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_salle1` FOREIGN KEY (`salle_ID`) REFERENCES `salle` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `fk_concert_salle1` FOREIGN KEY (`salle_ID`) REFERENCES `salle` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `fk_follow_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_follow_membre` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `membre_has_artiste`
--
ALTER TABLE `membre_has_artiste`
  ADD CONSTRAINT `fk_membre_has_artiste_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_membre_has_artiste_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message_forum`
--
ALTER TABLE `message_forum`
  ADD CONSTRAINT `fk_message_forum_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_forum_topic1` FOREIGN KEY (`topic_ID`) REFERENCES `topic` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message_prive`
--
ALTER TABLE `message_prive`
  ADD CONSTRAINT `fk_message_prive_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_prive_membre2` FOREIGN KEY (`membre_ID1`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `musique`
--
ALTER TABLE `musique`
  ADD CONSTRAINT `fk_musique_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk_participation_concert1` FOREIGN KEY (`concert_ID`) REFERENCES `concert` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participation_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo_artiste`
--
ALTER TABLE `photo_artiste`
  ADD CONSTRAINT `fk_photo_artiste_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo_de_concert`
--
ALTER TABLE `photo_de_concert`
  ADD CONSTRAINT `fk_photo_de_concert_concert1` FOREIGN KEY (`concert_ID`) REFERENCES `concert` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_photo_de_concert_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `photo_profil`
--
ALTER TABLE `photo_profil`
  ADD CONSTRAINT `fk_photo_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `représentation`
--
ALTER TABLE `représentation`
  ADD CONSTRAINT `fk_représentation_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_représentation_concert1` FOREIGN KEY (`concert_ID`) REFERENCES `concert` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `fk_salle_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sous_categorie_forum`
--
ALTER TABLE `sous_categorie_forum`
  ADD CONSTRAINT `fk_sous_categorie_forum_categorie_forum1` FOREIGN KEY (`categorie_forum_ID`) REFERENCES `categorie_forum` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `style_des_groupes`
--
ALTER TABLE `style_des_groupes`
  ADD CONSTRAINT `fk_style_des_groupes_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_style_des_groupes_genre1` FOREIGN KEY (`genre_ID`) REFERENCES `genre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `fk_topic_sous_categorie_forum1` FOREIGN KEY (`sous_categorie_forum_ID`) REFERENCES `sous_categorie_forum` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
