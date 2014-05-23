SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Role` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Role` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Role` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`membre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`membre` ;

CREATE TABLE IF NOT EXISTS `mydb`.`membre` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(25) NULL,
  `name` VARCHAR(25) NULL,
  `prenom` VARCHAR(25) NULL,
  `adresse_email` VARCHAR(255) NOT NULL,
  `mot_de_passe` VARCHAR(255) NOT NULL,
  `date_de_naissance` DATE NULL,
  `adresse` VARCHAR(40) NULL,
  `sexe` INT NULL,
  `bio` TEXT NULL,
  `date_d'inscription` DATE NULL,
  `nombre_de_message` INT NULL,
  `etat_conexion` INT NOT NULL,
  `Role_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_membre_Role1_idx` (`Role_ID` ASC),
  CONSTRAINT `fk_membre_Role1`
    FOREIGN KEY (`Role_ID`)
    REFERENCES `mydb`.`Role` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`artiste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`artiste` ;

CREATE TABLE IF NOT EXISTS `mydb`.`artiste` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(25) NOT NULL,
  `date_de_creation` DATE NULL,
  `image` VARCHAR(25) NULL,
  `bio` TEXT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`salle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`salle` ;

CREATE TABLE IF NOT EXISTS `mydb`.`salle` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom_de_la_salle` VARCHAR(255) NOT NULL,
  `adresse` VARCHAR(40) NULL,
  `description` TEXT NULL,
  `image` VARCHAR(25) NULL,
  `nombre_de_place` INT NOT NULL,
  `numero_de_telephone` INT NULL,
  `membre_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_salle_membre1_idx` (`membre_ID` ASC),
  CONSTRAINT `fk_salle_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`concert`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`concert` ;

CREATE TABLE IF NOT EXISTS `mydb`.`concert` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `date` DATE NULL,
  `heure` TIME NULL,
  `salle_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_concert_salle1_idx` (`salle_ID` ASC),
  CONSTRAINT `fk_concert_salle1`
    FOREIGN KEY (`salle_ID`)
    REFERENCES `mydb`.`salle` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`commentaire`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`commentaire` ;

CREATE TABLE IF NOT EXISTS `mydb`.`commentaire` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(25) NOT NULL,
  `contenu` TEXT NULL,
  `date_de_creation` DATETIME NULL,
  `membre_ID` INT NOT NULL,
  `artiste_ID` INT NOT NULL,
  `concert_ID` INT NOT NULL,
  `salle_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_message_membre1_idx` (`membre_ID` ASC),
  INDEX `fk_message_artiste1_idx` (`artiste_ID` ASC),
  INDEX `fk_message_concert1_idx` (`concert_ID` ASC),
  INDEX `fk_message_salle1_idx` (`salle_ID` ASC),
  CONSTRAINT `fk_message_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_concert1`
    FOREIGN KEY (`concert_ID`)
    REFERENCES `mydb`.`concert` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_salle1`
    FOREIGN KEY (`salle_ID`)
    REFERENCES `mydb`.`salle` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`categorie_forum`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`categorie_forum` ;

CREATE TABLE IF NOT EXISTS `mydb`.`categorie_forum` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `categorie` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sous_categorie_forum`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`sous_categorie_forum` ;

CREATE TABLE IF NOT EXISTS `mydb`.`sous_categorie_forum` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `sous_categorie_forum` VARCHAR(45) NULL,
  `categorie_forum_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_sous_categorie_forum_categorie_forum1_idx` (`categorie_forum_ID` ASC),
  CONSTRAINT `fk_sous_categorie_forum_categorie_forum1`
    FOREIGN KEY (`categorie_forum_ID`)
    REFERENCES `mydb`.`categorie_forum` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`topic`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`topic` ;

CREATE TABLE IF NOT EXISTS `mydb`.`topic` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `titre` TEXT NOT NULL,
  `nbr_message` INT NULL,
  `date` DATETIME NULL,
  `sous_categorie_forum_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_topic_sous_categorie_forum1_idx` (`sous_categorie_forum_ID` ASC),
  CONSTRAINT `fk_topic_sous_categorie_forum1`
    FOREIGN KEY (`sous_categorie_forum_ID`)
    REFERENCES `mydb`.`sous_categorie_forum` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`genre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`genre` ;

CREATE TABLE IF NOT EXISTS `mydb`.`genre` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `genre` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`ID`));


-- -----------------------------------------------------
-- Table `mydb`.`photo_profil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`photo_profil` ;

CREATE TABLE IF NOT EXISTS `mydb`.`photo_profil` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(25) NOT NULL,
  `lien` VARCHAR(45) NOT NULL,
  `membre_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_photo_membre1_idx` (`membre_ID` ASC),
  CONSTRAINT `fk_photo_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`follow`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`follow` ;

CREATE TABLE IF NOT EXISTS `mydb`.`follow` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `membre_ID` INT NOT NULL,
  `artiste_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_follow_membre_idx` (`membre_ID` ASC),
  INDEX `fk_follow_artiste1_idx` (`artiste_ID` ASC),
  CONSTRAINT `fk_follow_membre`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_follow_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`style_des_groupes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`style_des_groupes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`style_des_groupes` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `artiste_ID` INT NOT NULL,
  `genre_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_style_des_groupes_artiste1_idx` (`artiste_ID` ASC),
  INDEX `fk_style_des_groupes_genre1_idx` (`genre_ID` ASC),
  CONSTRAINT `fk_style_des_groupes_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_style_des_groupes_genre1`
    FOREIGN KEY (`genre_ID`)
    REFERENCES `mydb`.`genre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`participation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`participation` ;

CREATE TABLE IF NOT EXISTS `mydb`.`participation` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `membre_ID` INT NOT NULL,
  `concert_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_participation_membre1_idx` (`membre_ID` ASC),
  INDEX `fk_participation_concert1_idx` (`concert_ID` ASC),
  CONSTRAINT `fk_participation_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_participation_concert1`
    FOREIGN KEY (`concert_ID`)
    REFERENCES `mydb`.`concert` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`représentation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`représentation` ;

CREATE TABLE IF NOT EXISTS `mydb`.`représentation` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `concert_ID` INT NOT NULL,
  `artiste_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_représentation_concert1_idx` (`concert_ID` ASC),
  INDEX `fk_représentation_artiste1_idx` (`artiste_ID` ASC),
  CONSTRAINT `fk_représentation_concert1`
    FOREIGN KEY (`concert_ID`)
    REFERENCES `mydb`.`concert` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_représentation_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`photo_artiste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`photo_artiste` ;

CREATE TABLE IF NOT EXISTS `mydb`.`photo_artiste` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(25) NOT NULL,
  `lien` VARCHAR(45) NOT NULL,
  `artiste_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_photo_artiste_artiste1_idx` (`artiste_ID` ASC),
  CONSTRAINT `fk_photo_artiste_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`photo_de_concert`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`photo_de_concert` ;

CREATE TABLE IF NOT EXISTS `mydb`.`photo_de_concert` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(25) NOT NULL,
  `lien` VARCHAR(45) NOT NULL,
  `membre_ID` INT NOT NULL,
  `concert_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_photo_de_concert_membre1_idx` (`membre_ID` ASC),
  INDEX `fk_photo_de_concert_concert1_idx` (`concert_ID` ASC),
  CONSTRAINT `fk_photo_de_concert_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_photo_de_concert_concert1`
    FOREIGN KEY (`concert_ID`)
    REFERENCES `mydb`.`concert` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `mydb`.`musique`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`musique` ;

CREATE TABLE IF NOT EXISTS `mydb`.`musique` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `lien` VARCHAR(45) NOT NULL,
  `artiste_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_musique_artiste1_idx` (`artiste_ID` ASC),
  CONSTRAINT `fk_musique_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`statistique`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`statistique` ;

CREATE TABLE IF NOT EXISTS `mydb`.`statistique` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nbr_visiteurs` INT NULL,
  `nbr_conectés` VARCHAR(45) NULL,
  `nbr_visite` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`message_prive`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`message_prive` ;

CREATE TABLE IF NOT EXISTS `mydb`.`message_prive` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NULL,
  `message` TEXT NULL,
  `membre_ID` INT NOT NULL,
  `membre_ID1` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_message_prive_membre1_idx` (`membre_ID` ASC),
  INDEX `fk_message_prive_membre2_idx` (`membre_ID1` ASC),
  CONSTRAINT `fk_message_prive_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_prive_membre2`
    FOREIGN KEY (`membre_ID1`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`message_forum`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`message_forum` ;

CREATE TABLE IF NOT EXISTS `mydb`.`message_forum` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(25) NULL,
  `contenu` TEXT NULL,
  `date_de_creation` DATETIME NULL,
  `topic_ID` INT NOT NULL,
  `membre_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_message_forum_topic1_idx` (`topic_ID` ASC),
  INDEX `fk_message_forum_membre1_idx` (`membre_ID` ASC),
  CONSTRAINT `fk_message_forum_topic1`
    FOREIGN KEY (`topic_ID`)
    REFERENCES `mydb`.`topic` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_forum_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`membre_has_artiste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`membre_has_artiste` ;

CREATE TABLE IF NOT EXISTS `mydb`.`membre_has_artiste` (
  `membre_ID` INT NOT NULL,
  `artiste_ID` INT NOT NULL,
  INDEX `fk_membre_has_artiste_membre1_idx` (`membre_ID` ASC),
  INDEX `fk_membre_has_artiste_artiste1_idx` (`artiste_ID` ASC),
  CONSTRAINT `fk_membre_has_artiste_membre1`
    FOREIGN KEY (`membre_ID`)
    REFERENCES `mydb`.`membre` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_membre_has_artiste_artiste1`
    FOREIGN KEY (`artiste_ID`)
    REFERENCES `mydb`.`artiste` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
