-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 27 Mai 2014 à 15:47
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
  `nom_artiste` varchar(25) NOT NULL,
  `date_ajout_artiste` datetime DEFAULT NULL,
  `image_artiste` varchar(25) DEFAULT NULL,
  `bio_artiste` text,
  `ID_genre` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`ID`, `nom_artiste`, `date_ajout_artiste`, `image_artiste`, `bio_artiste`, `ID_genre`) VALUES
(1, 'test', '2014-05-23 21:01:50', NULL, NULL, 0),
(2, 'testsfd', '2014-05-23 21:18:58', NULL, NULL, 0),
(3, 'test1', '2014-05-23 22:40:00', NULL, 'tgdsqgd', 0),
(4, 'fds', '2014-05-24 01:48:11', NULL, 'gsd', 0),
(5, 'testgenre', '2014-05-24 01:55:46', NULL, 'ferq', 4),
(6, 'testpop1', '2014-05-24 02:07:08', NULL, 'bds', 1),
(7, 'testpop2', '2014-05-24 02:07:17', NULL, 'bdw', 1),
(8, 'dgs', '2014-05-24 02:33:17', NULL, 'bxcfdb', 9);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_forum`
--

CREATE TABLE IF NOT EXISTS `categorie_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_forum` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie_forum`
--

INSERT INTO `categorie_forum` (`ID`, `categorie_forum`) VALUES
(1, 'Aide,Bugs du Site'),
(2, 'Avis et suggestions'),
(3, 'Groupes/Artistes'),
(4, 'Concerts');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre_commentaire` varchar(25) NOT NULL,
  `contenu_commentaire` text,
  `date_ajout_commentaire` datetime DEFAULT NULL,
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
  `heure_du_concert` time DEFAULT NULL,
  `salle_ID` int(11) DEFAULT NULL,
  `date_ajout_concert` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_concert_salle1_idx` (`salle_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `concert`
--

INSERT INTO `concert` (`ID`, `nom_du_concert`, `date_du_concert`, `heure_du_concert`, `salle_ID`, `date_ajout_concert`) VALUES
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`ID`, `genre`) VALUES
(1, 'pop'),
(2, 'classique'),
(3, 'worldMusic'),
(4, 'metal'),
(5, 'reggae'),
(6, 'variete'),
(7, 'alternatif'),
(8, 'electro'),
(9, 'rb'),
(10, 'jazz'),
(11, 'rap'),
(12, 'rock');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `nom_membre` varchar(25) DEFAULT NULL,
  `prenom_membre` varchar(255) DEFAULT NULL,
  `adresse_email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `adresse_membre` varchar(40) DEFAULT NULL,
  `departement` int(11) DEFAULT NULL,
  `sexe` int(11) DEFAULT NULL,
  `bio_membre` text,
  `date_inscription` datetime DEFAULT NULL,
  `nombre_de_message` int(11) DEFAULT NULL,
  `etat_connexion` int(11) NOT NULL,
  `Role_ID` int(11) NOT NULL,
  `etat_compte` int(2) NOT NULL DEFAULT '0',
  `cle_validation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_membre_Role1_idx` (`Role_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`ID`, `pseudo`, `nom_membre`, `prenom_membre`, `adresse_email`, `mot_de_passe`, `date_de_naissance`, `adresse_membre`, `departement`, `sexe`, `bio_membre`, `date_inscription`, `nombre_de_message`, `etat_connexion`, `Role_ID`, `etat_compte`, `cle_validation`) VALUES
(3, 'Test', 'Nom', 'Prenom', 'test@gmail.com', '37a668a7ae9501af42255f27d26449b309770222', '1924-01-01', 'Adresse', NULL, 1, NULL, '2014-05-15 10:06:12', NULL, 0, 1, 0, 'f86e32610480c1d722a4dc20247dc7f327bc9594'),
(4, 'vbdsv', 'jfsdFSDGF', 'FSDGSDE', 'dssdb@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '1924-01-01', 'xwvdxwsv', NULL, 1, NULL, '2014-05-23 22:08:02', NULL, 0, 1, 0, 'b8f790610a98f4fd015b3d19aa60464799e6d625'),
(5, 'testrole2', 'fsq', 'fseqzgferd', 'fqesz@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '1924-01-01', 'vsfdwvsfd', NULL, 1, NULL, '2014-05-24 03:17:00', NULL, 0, 2, 0, '92c94b690a345083c3c9ec6d7df1e417ecdd7c34'),
(6, 'prop', 'fsq', 'gsdregdhh', 'prop@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '1924-01-01', 'n,f,nhyngdf', NULL, 1, NULL, '2014-05-24 03:57:40', NULL, 0, 3, 0, 'edc311f0470ffa4f48eec6133485ed725724187e'),
(7, 'mem', 'gsgtdde', 'HGDHDH', 'mem@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '1924-01-01', ',hjgfdsc', NULL, 1, NULL, '2014-05-24 03:58:21', NULL, 0, 1, 0, '7c6f16c8564de39fb8e335b5cdff236f5409e148'),
(8, 'testdep', 'test', 'tretsd', 'testdep@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '1924-01-01', 'hfsdhbrdtht', 75, 1, NULL, '2014-05-27 16:14:22', NULL, 0, 1, 0, 'f564717f68611fc6743ebd90a6cd78a3fcc3f57a');

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
  `titre_message` varchar(25) DEFAULT NULL,
  `contenu_message` text,
  `date_ajout_message` datetime DEFAULT NULL,
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
  `titre_mp` varchar(45) DEFAULT NULL,
  `message_prive` text,
  `ID_expéditeur` int(11) NOT NULL,
  `ID_destinataire` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_message_prive_membre1_idx` (`ID_expéditeur`),
  KEY `fk_message_prive_membre2_idx` (`ID_destinataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE IF NOT EXISTS `musique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre_musique` varchar(45) NOT NULL,
  `lien_musique` varchar(45) NOT NULL,
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
  `photo_artiste` varchar(25) NOT NULL,
  `lien_photo_artiste` varchar(45) NOT NULL,
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
  `photo_concert` varchar(25) NOT NULL,
  `lien_photo_concert` varchar(45) NOT NULL,
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
  `photo_profil` varchar(25) NOT NULL,
  `lien_photo_profil` varchar(45) NOT NULL,
  `membre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_photo_membre1_idx` (`membre_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE IF NOT EXISTS `recherche` (
  `mot_cle` varchar(255) NOT NULL,
  `date_recherche` datetime NOT NULL,
  `type_recherche` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `recherche`
--

INSERT INTO `recherche` (`mot_cle`, `date_recherche`, `type_recherche`) VALUES
('reg', '2014-05-23 11:42:21', 1),
('fds', '2014-05-23 20:25:51', 1),
('test', '2014-05-23 22:40:06', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`ID`, `Role`) VALUES
(1, 'membre'),
(2, 'artiste'),
(3, 'proprietaire');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_de_la_salle` varchar(255) NOT NULL,
  `adresse_salle` varchar(40) DEFAULT NULL,
  `departement` int(11) DEFAULT NULL,
  `description_salle` text,
  `image_salle` varchar(25) DEFAULT NULL,
  `nombre_de_place` int(11) DEFAULT NULL,
  `numero_de_telephone` int(11) DEFAULT NULL,
  `membre_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_salle_membre1_idx` (`membre_ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`ID`, `nom_de_la_salle`, `adresse_salle`, `departement`, `description_salle`, `image_salle`, `nombre_de_place`, `numero_de_telephone`, `membre_ID`) VALUES
(2, 'testsalle', 'tgsqer', NULL, 'frseger', NULL, 12, 12354, NULL),
(3, 'testsalle', 'testsalle adresse 52 rue', NULL, 'belle salle de testsalle', 'fresfgre', 120, 1234567890, NULL),
(4, 'hbbdrtbt', 'mlsfdm,lvd,mvdsm,', NULL, ',mlfdmfds', NULL, 123, 2147483647, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Structure de la table `statistique`
--

CREATE TABLE IF NOT EXISTS `statistique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_visiteurs` int(11) DEFAULT NULL,
  `nombre_connectés` int(11) DEFAULT NULL,
  `nombre_visite` int(11) DEFAULT NULL,
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
-- Structure de la table `topic???`
--

CREATE TABLE IF NOT EXISTS `topic???` (
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
  ADD CONSTRAINT `fk_message_forum_topic1` FOREIGN KEY (`topic_ID`) REFERENCES `topic???` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message_prive`
--
ALTER TABLE `message_prive`
  ADD CONSTRAINT `fk_message_prive_membre1` FOREIGN KEY (`ID_expéditeur`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_prive_membre2` FOREIGN KEY (`ID_destinataire`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Contraintes pour la table `topic???`
--
ALTER TABLE `topic???`
  ADD CONSTRAINT `fk_topic_sous_categorie_forum1` FOREIGN KEY (`sous_categorie_forum_ID`) REFERENCES `sous_categorie_forum` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
