SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `makingmusic` DEFAULT CHARACTER SET utf8 ;
USE `makingmusic` ;

-- -----------------------------------------------------
-- Table `makingmusic`.`genres`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`genres` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(70) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`cities`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`cities` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `hostname` VARCHAR(254) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `city_id` INT(11) NOT NULL ,
  `username` VARCHAR(254) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `screenname` VARCHAR(45) NOT NULL ,
  `address` VARCHAR(250) NOT NULL ,
  `phone` VARCHAR(15) NOT NULL ,
  `contact_preference` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `index644` (`username` ASC) ,
  UNIQUE INDEX `index645` (`password` ASC) ,
  UNIQUE INDEX `index646` (`screenname` ASC) ,
  INDEX `index647` (`city_id` ASC) ,
  CONSTRAINT `constraint665`
    FOREIGN KEY (`city_id` )
    REFERENCES `makingmusic`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`artists`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`artists` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  `groupname` VARCHAR(100) NOT NULL ,
  `website` VARCHAR(254) NULL DEFAULT NULL ,
  `facebook` VARCHAR(254) NULL DEFAULT NULL ,
  `description` LONGTEXT NULL DEFAULT NULL ,
  `previous_venues` LONGTEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index616` (`user_id` ASC) ,
  CONSTRAINT `constraint651`
    FOREIGN KEY (`user_id` )
    REFERENCES `makingmusic`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`artist_genres`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`artist_genres` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `genre_id` INT(11) NOT NULL ,
  `artist_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index610` (`artist_id` ASC) ,
  INDEX `index611` (`genre_id` ASC) ,
  CONSTRAINT `constraint648`
    FOREIGN KEY (`genre_id` )
    REFERENCES `makingmusic`.`genres` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint649`
    FOREIGN KEY (`artist_id` )
    REFERENCES `makingmusic`.`artists` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`timeslots`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`timeslots` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`artist_timeslots`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`artist_timeslots` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `timeslot_id` INT(11) NOT NULL ,
  `artist_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index613` (`timeslot_id` ASC) ,
  INDEX `index614` (`artist_id` ASC) ,
  INDEX `timeslots_idx` (`artist_id` ASC) ,
  CONSTRAINT `constraint650`
    FOREIGN KEY (`timeslot_id` )
    REFERENCES `makingmusic`.`timeslots` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `timeslots`
    FOREIGN KEY (`artist_id` )
    REFERENCES `makingmusic`.`artists` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`city_admins`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`city_admins` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NOT NULL ,
  `city_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index619` (`city_id` ASC) ,
  INDEX `index620` (`user_id` ASC) ,
  INDEX `cities_idx` (`city_id` ASC) ,
  CONSTRAINT `constraint652`
    FOREIGN KEY (`user_id` )
    REFERENCES `makingmusic`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cities`
    FOREIGN KEY (`city_id` )
    REFERENCES `makingmusic`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`city_extdata`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`city_extdata` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `city_id` INT(11) NOT NULL ,
  `key` VARCHAR(45) NULL DEFAULT NULL ,
  `val` LONGTEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `index622` (`city_id` ASC, `key` ASC) ,
  INDEX `index623` (`city_id` ASC) ,
  CONSTRAINT `constraint653`
    FOREIGN KEY (`city_id` )
    REFERENCES `makingmusic`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`districts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`districts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `city_id` INT(11) NOT NULL ,
  `name` VARCHAR(254) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index625` (`city_id` ASC) ,
  CONSTRAINT `constraint654`
    FOREIGN KEY (`city_id` )
    REFERENCES `makingmusic`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`neighborhoods`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`neighborhoods` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `district_id` INT(11) NOT NULL ,
  `name` VARCHAR(254) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index638` (`district_id` ASC) ,
  CONSTRAINT `constraint662`
    FOREIGN KEY (`district_id` )
    REFERENCES `makingmusic`.`districts` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`locations`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`locations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `city_id` INT(11) NOT NULL ,
  `admin_user_id` INT(11) NOT NULL ,
  `neighborhood_id` INT(11) NOT NULL ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `address` VARCHAR(250) NOT NULL ,
  `contact_name` VARCHAR(45) NULL DEFAULT NULL ,
  `contact_phone` VARCHAR(45) NULL DEFAULT NULL ,
  `website` VARCHAR(45) NULL DEFAULT NULL ,
  `promoting` TINYINT(1) NULL DEFAULT NULL ,
  `rain_accommodations` TINYINT(1) NOT NULL ,
  `rain_description` LONGTEXT NOT NULL ,
  `electricity` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index634` (`city_id` ASC) ,
  INDEX `index635` (`admin_user_id` ASC) ,
  INDEX `index636` (`neighborhood_id` ASC) ,
  CONSTRAINT `constraint659`
    FOREIGN KEY (`city_id` )
    REFERENCES `makingmusic`.`cities` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint660`
    FOREIGN KEY (`admin_user_id` )
    REFERENCES `makingmusic`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint661`
    FOREIGN KEY (`neighborhood_id` )
    REFERENCES `makingmusic`.`neighborhoods` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`location_genres`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`location_genres` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `genre_id` INT(11) NOT NULL ,
  `location_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index628` (`genre_id` ASC) ,
  INDEX `index629` (`location_id` ASC) ,
  CONSTRAINT `constraint655`
    FOREIGN KEY (`genre_id` )
    REFERENCES `makingmusic`.`genres` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint656`
    FOREIGN KEY (`location_id` )
    REFERENCES `makingmusic`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`location_timeslots`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`location_timeslots` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `location_id` INT(11) NOT NULL ,
  `timeslot_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index631` (`location_id` ASC) ,
  INDEX `index632` (`timeslot_id` ASC) ,
  CONSTRAINT `constraint657`
    FOREIGN KEY (`location_id` )
    REFERENCES `makingmusic`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint658`
    FOREIGN KEY (`timeslot_id` )
    REFERENCES `makingmusic`.`timeslots` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `makingmusic`.`performances`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `makingmusic`.`performances` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `location_id` INT(11) NOT NULL ,
  `artist_id` INT(11) NOT NULL ,
  `timeslot_id` INT(11) NOT NULL ,
  `location_confirmed` TINYINT(1) NULL DEFAULT NULL ,
  `artist_confirmed` TINYINT(1) NULL DEFAULT NULL ,
  `city_confirmed` TINYINT(1) NULL DEFAULT NULL ,
  `description` LONGTEXT NULL DEFAULT NULL ,
  `location_notes` LONGTEXT NOT NULL ,
  `artist_notes` LONGTEXT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `index640` (`location_id` ASC) ,
  INDEX `index641` (`artist_id` ASC) ,
  INDEX `fk_performances_timeslots1_idx` (`timeslot_id` ASC) ,
  CONSTRAINT `constraint663`
    FOREIGN KEY (`location_id` )
    REFERENCES `makingmusic`.`locations` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `constraint664`
    FOREIGN KEY (`artist_id` )
    REFERENCES `makingmusic`.`artists` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_performances_timeslots1`
    FOREIGN KEY (`timeslot_id` )
    REFERENCES `makingmusic`.`timeslots` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
