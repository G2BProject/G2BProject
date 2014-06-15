-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2014 at 04:10 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `actu`
--

CREATE TABLE IF NOT EXISTS `actu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `actu`
--

INSERT INTO `actu` (`ID`, `texte`, `photo`) VALUES
(1, 'Test d''une news sur le site', 'ressources/image/actu/actu.png');

-- --------------------------------------------------------

--
-- Table structure for table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_artiste` varchar(25) NOT NULL,
  `date_ajout_artiste` datetime DEFAULT NULL,
  `image_artiste` varchar(255) DEFAULT NULL,
  `bio_artiste` text,
  `ID_genre` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `artiste`
--

INSERT INTO `artiste` (`ID`, `nom_artiste`, `date_ajout_artiste`, `image_artiste`, `bio_artiste`, `ID_genre`) VALUES
(2, 'testsfd', '2014-05-23 21:18:58', NULL, NULL, 0),
(3, 'test1', '2014-05-23 22:40:00', NULL, 'tgdsqgd', 0),
(4, 'fds', '2014-05-24 01:48:11', NULL, 'gsd', 0),
(5, 'testgenre', '2014-05-24 01:55:46', NULL, 'ferq', 4),
(6, 'testpop1', '2014-05-24 02:07:08', NULL, 'bds', 1),
(7, 'testpop2', '2014-05-24 02:07:17', NULL, 'bdw', 1),
(8, 'dgs', '2014-05-24 02:33:17', NULL, 'bxcfdb', 9),
(10, 'testimage', '2014-06-13 10:20:34', 'ressources/avatars/artistes/administrateur1/testimage.png', 'c''est un test avec image', 6);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_forum`
--

CREATE TABLE IF NOT EXISTS `categorie_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_forum` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categorie_forum`
--

INSERT INTO `categorie_forum` (`ID`, `categorie_forum`) VALUES
(1, 'Aide,Bugs du Site'),
(2, 'Avis et suggestions'),
(3, 'Groupes/Artistes'),
(4, 'Concerts');

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE IF NOT EXISTS `concert` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_du_concert` varchar(255) NOT NULL,
  `image_concert` varchar(255) DEFAULT NULL,
  `date_du_concert` date DEFAULT NULL,
  `heure_du_concert` time DEFAULT NULL,
  `salle_ID` int(11) DEFAULT NULL,
  `date_ajout_concert` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_concert_salle1_idx` (`salle_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`ID`, `nom_du_concert`, `image_concert`, `date_du_concert`, `heure_du_concert`, `salle_ID`, `date_ajout_concert`) VALUES
(7, 'eda', NULL, '2014-03-19', '18:00:00', NULL, NULL),
(8, 'dezbulfj', NULL, '2014-03-19', '16:00:00', NULL, '2014-05-09 12:05:10'),
(9, 'testacsalle', NULL, '2014-01-01', '00:00:00', 3, '2014-06-05 10:35:22'),
(10, 'testimage', 'ressources/avatars/concerts/administrateur1/testimage.png', '2014-01-01', '00:00:00', 3, '2014-06-13 10:52:54'),
(11, 'test de con', 'ressources/avatars/defaultPicture.jpg', '2014-01-01', '00:00:00', 10, '2014-06-14 19:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `coup_de_coeur`
--

CREATE TABLE IF NOT EXISTS `coup_de_coeur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_artiste1` int(11) DEFAULT NULL,
  `ID_artiste2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coup_de_coeur`
--

INSERT INTO `coup_de_coeur` (`ID`, `ID_artiste1`, `ID_artiste2`) VALUES
(1, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `genre`
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
-- Table structure for table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `nom_membre` varchar(25) DEFAULT NULL,
  `prenom_membre` varchar(255) DEFAULT NULL,
  `adresse_email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `image_membre` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`ID`, `pseudo`, `nom_membre`, `prenom_membre`, `adresse_email`, `mot_de_passe`, `image_membre`, `date_de_naissance`, `adresse_membre`, `departement`, `sexe`, `bio_membre`, `date_inscription`, `nombre_de_message`, `etat_connexion`, `Role_ID`, `etat_compte`, `cle_validation`) VALUES
(5, 'testrole2', 'fsq', 'fseqzgferd', 'fqesz@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', 'vsfdwvsfd', NULL, 1, NULL, '2014-05-24 03:17:00', NULL, 0, 2, 0, '92c94b690a345083c3c9ec6d7df1e417ecdd7c34'),
(6, 'prop', 'fsq', 'gsdregdhh', 'prop@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', 'n,f,nhyngdf', NULL, 1, NULL, '2014-05-24 03:57:40', NULL, 0, 3, 0, 'edc311f0470ffa4f48eec6133485ed725724187e'),
(7, 'mem', 'gsgtdde', 'HGDHDH', 'mem@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', ',hjgfdsc', NULL, 1, NULL, '2014-05-24 03:58:21', NULL, 0, 1, 0, '7c6f16c8564de39fb8e335b5cdff236f5409e148'),
(8, 'testdep', 'test', 'tretsd', 'testdep@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', 'hfsdhbrdtht', 75, 1, NULL, '2014-05-27 16:14:22', NULL, 0, 1, 0, 'f564717f68611fc6743ebd90a6cd78a3fcc3f57a'),
(9, 'administrateur', 'admin', 'admin', 'admin@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', 'vgfsdv', 0, 1, NULL, '2014-06-03 16:30:41', NULL, 0, 1, 0, 'bde32cebe2eec78215ae01c8aa0e87702e8b7a12'),
(11, 'administrateur1', 'admin', 'admin', 'admin1@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', 'vgfsdv', 75, 1, NULL, '2014-06-03 16:35:09', NULL, 0, 4, 0, 'b2dbc0e2ed9dbb4b56bf4b4af2c63bc791b99868'),
(12, 'test2', '', '', 'prop@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', '', '1924-01-01', '', 0, NULL, NULL, '2014-06-03 18:19:02', NULL, 0, 1, 0, '289d111d27e34f32dd5d0b3c01c0f0dfa16a2434'),
(13, 'julcity', 'Bosselut', 'Julian', 'julcity77@hotmail.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', 'ressources/avatars/membres/julcity/julcity.jpg', '1924-01-01', 'dfg 14', 75, 1, NULL, '2014-06-06 10:13:39', NULL, 0, 1, 0, '08fa86922756c4ad32b344853d02f0583fe62995'),
(14, 'testeur', 'julcity', 'test', 'new@gmail.com', '2ede1726e584959557b4b2306f7bc479c93a52bf', 'ressources/avatars/membres/testeur/testeur.jpg', '1924-01-01', 'new adresse', 75, 1, 'new bio!', '2014-06-14 19:00:39', NULL, 0, 1, 0, '38823f3a1640c2816a9f419dbb1725b58e33f396'),
(15, 'testconcerto', 'sfdq', 'qsdf', 'testconcerto@live.fr', '2ede1726e584959557b4b2306f7bc479c93a52bf', 'ressources/avatars/defaultPicture.jpg', '1924-01-01', 'qdsfdgh', 75, 1, NULL, '2014-06-14 19:45:14', NULL, 0, 3, 0, 'e498ebf557c300aa891482753f0b3fcd14969343');

-- --------------------------------------------------------

--
-- Table structure for table `message_admin`
--

CREATE TABLE IF NOT EXISTS `message_admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_admin`
--

INSERT INTO `message_admin` (`ID`, `nom`, `email`, `objet`, `message`, `date`) VALUES
(1, 'nom', 'email', 'objet', 'message', '2014-06-15 17:56:07'),
(2, 'nom2', 'email2', 'objet2', 'message du test deux pour tester une liste de message au admin', '2014-06-15 17:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `message_forum`
--

CREATE TABLE IF NOT EXISTS `message_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre_message` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `contenu_message` text CHARACTER SET utf8,
  `date_ajout_message` datetime DEFAULT NULL,
  `topic_ID` int(11) NOT NULL,
  `membre_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message_forum`
--

INSERT INTO `message_forum` (`ID`, `titre_message`, `contenu_message`, `date_ajout_message`, `topic_ID`, `membre_ID`) VALUES
(4, 'test de message', 'lollqdfqff erzqsgfsegv', '2014-06-15 17:26:11', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `recherche`
--

CREATE TABLE IF NOT EXISTS `recherche` (
  `mot_cle` varchar(255) NOT NULL,
  `date_recherche` datetime NOT NULL,
  `type_recherche` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recherche`
--

INSERT INTO `recherche` (`mot_cle`, `date_recherche`, `type_recherche`) VALUES
('reg', '2014-05-23 11:42:21', 1),
('fds', '2014-05-23 20:25:51', 1),
('test', '2014-05-23 22:40:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `representation`
--

CREATE TABLE IF NOT EXISTS `representation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `concert_ID` int(11) NOT NULL,
  `artiste_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_représentation_concert1_idx` (`concert_ID`),
  KEY `fk_représentation_artiste1_idx` (`artiste_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `representation`
--

INSERT INTO `representation` (`ID`, `concert_ID`, `artiste_ID`) VALUES
(1, 10, 10),
(2, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `Role`) VALUES
(1, 'membre'),
(2, 'artiste'),
(3, 'proprietaire');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom_de_la_salle` varchar(255) NOT NULL,
  `adresse_salle` varchar(40) DEFAULT NULL,
  `departement` int(11) DEFAULT NULL,
  `description_salle` text,
  `image_salle` varchar(255) DEFAULT NULL,
  `nombre_de_place` int(11) DEFAULT NULL,
  `numero_de_telephone` int(11) DEFAULT NULL,
  `membre_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_salle_membre1_idx` (`membre_ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`ID`, `nom_de_la_salle`, `adresse_salle`, `departement`, `description_salle`, `image_salle`, `nombre_de_place`, `numero_de_telephone`, `membre_ID`) VALUES
(3, 'testsalle', 'testsalle adresse 52 rue', 75, 'belle salle de testsalle', 'fresfgre', 120, 1234567890, NULL),
(4, 'hbbdrtbt', 'mlsfdm,lvd,mvdsm,', NULL, ',mlfdmfds', NULL, 123, 2147483647, NULL),
(5, 'testsalledep', 'bvbfd', 75, 'dqsf', NULL, 345, 86543, NULL),
(6, 'test ajout salle', 'gferziofzeoij', 75, 'geroinrseovn', 'ressources/avatars/salles', 2134324654, 43256, NULL),
(7, 'testajoutsalle', 'gferziofzeoij', 75, 'geroinrseovn', 'ressources/avatars/salles', 2134324654, 43256, NULL),
(8, 'testajoutsalle', 'gferziofzeoij', 75, 'geroinrseovn', 'ressources/avatars/salles', 2134324654, 43256, NULL),
(9, 'testacimage', 'fqsgersq', 75, 'rfezhgreg', 'ressources/avatars/salles/administrateur1/testacimage.png', 1234, 12435, NULL),
(10, 'loltest', 'qsghf', 75, 'qsdfmgjh', 'ressources/avatars/salleDefault.jpg', 12345, 1325, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sous_categorie_forum`
--

CREATE TABLE IF NOT EXISTS `sous_categorie_forum` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sous_categorie_forum` varchar(45) DEFAULT NULL,
  `categorie_forum_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_sous_categorie_forum_categorie_forum1_idx` (`categorie_forum_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sous_categorie_forum`
--

INSERT INTO `sous_categorie_forum` (`ID`, `sous_categorie_forum`, `categorie_forum_ID`) VALUES
(1, 'lol', 1),
(2, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `statistique`
--

CREATE TABLE IF NOT EXISTS `statistique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_inscrit` int(11) DEFAULT NULL,
  `nombre_visite` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `statistique`
--

INSERT INTO `statistique` (`ID`, `nombre_inscrit`, `nombre_visite`) VALUES
(1, 0, 35);

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE IF NOT EXISTS `top` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_artiste1` int(11) DEFAULT NULL,
  `ID_artiste2` int(11) DEFAULT NULL,
  `ID_artiste3` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`ID`, `ID_artiste1`, `ID_artiste2`, `ID_artiste3`) VALUES
(1, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `topic???`
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
-- Constraints for dumped tables
--

--
-- Constraints for table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `fk_concert_salle1` FOREIGN KEY (`salle_ID`) REFERENCES `salle` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `representation`
--
ALTER TABLE `representation`
  ADD CONSTRAINT `fk_représentation_artiste1` FOREIGN KEY (`artiste_ID`) REFERENCES `artiste` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_représentation_concert1` FOREIGN KEY (`concert_ID`) REFERENCES `concert` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `fk_salle_membre1` FOREIGN KEY (`membre_ID`) REFERENCES `membre` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sous_categorie_forum`
--
ALTER TABLE `sous_categorie_forum`
  ADD CONSTRAINT `fk_sous_categorie_forum_categorie_forum1` FOREIGN KEY (`categorie_forum_ID`) REFERENCES `categorie_forum` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `topic???`
--
ALTER TABLE `topic???`
  ADD CONSTRAINT `fk_topic_sous_categorie_forum1` FOREIGN KEY (`sous_categorie_forum_ID`) REFERENCES `sous_categorie_forum` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
