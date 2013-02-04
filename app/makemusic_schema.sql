CREATE TABLE IF NOT EXISTS `cities` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NOT NULL,
	`hostname` VARCHAR(254) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `genres` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(70) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `timeslots` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NOT NULL,
	`description` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`city_id` INT(11) NOT NULL,
	`username` VARCHAR(254) NOT NULL,
	`password` VARCHAR(45) NOT NULL,
	`screenname` VARCHAR(45) NOT NULL,
	`address` VARCHAR(250) NOT NULL,
	`phone` VARCHAR(15) NOT NULL,
	`contact_preference` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `index644` (`username`),
	UNIQUE INDEX `index645` (`password`),
	UNIQUE INDEX `index646` (`screenname`),
	INDEX `index647` (`city_id`),
	CONSTRAINT `constraint665` FOREIGN KEY `index665` (`city_id`) REFERENCES `cities`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `artists` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`user_id` INT(11) DEFAULT NULL,
	`groupname` VARCHAR(45) NOT NULL,
	`website` VARCHAR(100),
	`facebook` VARCHAR(45),
	`description` LONGTEXT,
	`previous_venues` LONGTEXT,
	PRIMARY KEY (`id`),
	INDEX `index616` (`user_id`),
	CONSTRAINT `constraint651` FOREIGN KEY `index651` (`user_id`) REFERENCES `users`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `artist_genres` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`genre_id` INT(11) NOT NULL,
	`artist_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index610` (`artist_id`),
	INDEX `index611` (`genre_id`),
	CONSTRAINT `constraint648` FOREIGN KEY `index648` (`genre_id`) REFERENCES `genres`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint649` FOREIGN KEY `index649` (`artist_id`) REFERENCES `artists`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `artist_timeslots` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`timeslot_id` INT(11) NOT NULL,
	`artist_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index613` (`timeslot_id`),
	INDEX `index614` (`artist_id`),
	CONSTRAINT `constraint650` FOREIGN KEY `index650` (`timeslot_id`) REFERENCES `timeslots`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `city_admins` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`users_id` INT(11) NOT NULL,
	`cities_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index619` (`cities_id`),
	INDEX `index620` (`users_id`),
	CONSTRAINT `constraint652` FOREIGN KEY `index652` (`users_id`) REFERENCES `users`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `city_extdata` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`city_id` INT(11) NOT NULL,
	`key` VARCHAR(45) DEFAULT NULL,
	`val` LONGTEXT,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `index622` (`city_id`, `key`),
	INDEX `index623` (`city_id`),
	CONSTRAINT `constraint653` FOREIGN KEY `index653` (`city_id`) REFERENCES `cities`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `districts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`city_id` INT(11) NOT NULL,
	`name` VARCHAR(254) DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `index625` (`city_id`),
	CONSTRAINT `constraint654` FOREIGN KEY `index654` (`city_id`) REFERENCES `cities`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `neighborhoods` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`district_id` INT(11) NOT NULL,
	`name` VARCHAR(254) DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `index638` (`district_id`),
	CONSTRAINT `constraint662` FOREIGN KEY `index662` (`district_id`) REFERENCES `districts`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `locations` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`city_id` INT(11) NOT NULL,
	`admin_user_id` INT(11) NOT NULL,
	`neighborhood_id` INT(11) NOT NULL,
	`name` VARCHAR(45) DEFAULT NULL,
	`address` VARCHAR(250) NOT NULL,
	`contact_name` VARCHAR(45),
	`contact_phone` VARCHAR(45),
	`website` VARCHAR(45),
	`promoting` TINYINT(1),
	`rain_accommodations` TINYINT(1) NOT NULL,
	`rain_description` LONGTEXT NOT NULL,
	`electricity` TINYINT(1) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index634` (`city_id`),
	INDEX `index635` (`admin_user_id`),
	INDEX `index636` (`neighborhood_id`),
	CONSTRAINT `constraint659` FOREIGN KEY `index659` (`city_id`) REFERENCES `cities`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint660` FOREIGN KEY `index660` (`admin_user_id`) REFERENCES `users`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint661` FOREIGN KEY `index661` (`neighborhood_id`) REFERENCES `neighborhoods`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `location_genres` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`genre_id` INT(11) NOT NULL,
	`location_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index628` (`genre_id`),
	INDEX `index629` (`location_id`),
	CONSTRAINT `constraint655` FOREIGN KEY `index655` (`genre_id`) REFERENCES `genres`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint656` FOREIGN KEY `index656` (`location_id`) REFERENCES `locations`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `location_timeslots` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`location_id` INT(11) NOT NULL,
	`timeslot_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index631` (`location_id`),
	INDEX `index632` (`timeslot_id`),
	CONSTRAINT `constraint657` FOREIGN KEY `index657` (`location_id`) REFERENCES `locations`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint658` FOREIGN KEY `index658` (`timeslot_id`) REFERENCES `timeslots`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `performances` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`locations_id` INT(11) NOT NULL,
	`artists_id` INT(11) NOT NULL,
	`location_confirmed` TINYINT(1) DEFAULT NULL,
	`artist_confirmed` TINYINT(1) DEFAULT NULL,
	`city_confirmed` TINYINT(1) DEFAULT NULL,
	`description` LONGTEXT,
	`location_notes` LONGTEXT NOT NULL,
	`artist_notes` LONGTEXT NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index640` (`locations_id`),
	INDEX `index641` (`artists_id`),
	CONSTRAINT `constraint663` FOREIGN KEY `index663` (`locations_id`) REFERENCES `locations`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint664` FOREIGN KEY `index664` (`artists_id`) REFERENCES `artists`(`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

