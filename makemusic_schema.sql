CREATE TABLE IF NOT EXISTS `artist_genres` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`genre_id` INT(11) NOT NULL,
	`artist_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index569` (`artist_id`),
	INDEX `index570` (`genre_id`),
	CONSTRAINT `constraint571` FOREIGN KEY `index571` (`genre_id`) REFERENCES `genres`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint572` FOREIGN KEY `index572` (`artist_id`) REFERENCES `artists`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `artist_timeslots` (
	`id` INT(11) NOT NULL,
	`timeslot_id` INT(11) NOT NULL,
	`artist_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index600` (`timeslot_id`),
	INDEX `index601` (`artist_id`),
	CONSTRAINT `constraint602` FOREIGN KEY `index602` (`timeslot_id`) REFERENCES `timeslots`(),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `artists` (
	,
	`user_id` INT(11) DEFAULT NULL,
	`groupname` VARCHAR(45) NOT NULL,
	`website` VARCHAR(100),
	`facebook` VARCHAR(45),
	`description` LONGTEXT,
	`previous_venues` LONGTEXT,
	PRIMARY KEY (``),
	INDEX `index552` (`user_id`),
	CONSTRAINT `constraint553` FOREIGN KEY `index553` (`user_id`) REFERENCES `users`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `cities` (
	,
	`name` VARCHAR(45) DEFAULT NULL,
	`hostname` VARCHAR(254) DEFAULT NULL,
	PRIMARY KEY (``)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `city_admins` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`users_id` INT(11) NOT NULL,
	`cities_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index556` (`cities_id`),
	INDEX `index557` (`users_id`),
	CONSTRAINT `constraint558` FOREIGN KEY `index558` (`users_id`) REFERENCES `users`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint559` FOREIGN KEY `index559` (`cities_id`) REFERENCES `cities`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `city_extdata` (
	`id` INT(11) NOT NULL,
	`city_id` INT(11) NOT NULL,
	`key` VARCHAR(45) DEFAULT NULL,
	`val` LONGTEXT,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `index561` (`city_id`, `key`),
	INDEX `index562` (`city_id`),
	CONSTRAINT `constraint563` FOREIGN KEY `index563` (`city_id`) REFERENCES `cities`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `districts` (
	,
	`city_id` INT(11) NOT NULL,
	`name` VARCHAR(254) DEFAULT NULL,
	PRIMARY KEY (``),
	INDEX `index565` (`city_id`),
	CONSTRAINT `constraint566` FOREIGN KEY `index566` (`city_id`) REFERENCES `cities`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `genres` (
	,
	`name` VARCHAR(70) DEFAULT NULL,
	PRIMARY KEY (``)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `location_genres` (
	`id` INT(11) NOT NULL,
	`genre_id` INT(11) NOT NULL,
	`location_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index595` (`genre_id`),
	INDEX `index596` (`location_id`),
	CONSTRAINT `constraint597` FOREIGN KEY `index597` (`genre_id`) REFERENCES `genres`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint598` FOREIGN KEY `index598` (`location_id`) REFERENCES `locations`()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `locations` (
	,
	`city_id` INT(11) NOT NULL,
	`admin_user_id` INT(11) NOT NULL,
	`neighborhood_id` INT(11) NOT NULL,
	`name` VARCHAR(45) DEFAULT NULL,
	`address` VARCHAR(250) NOT NULL,
	`contact_name` VARCHAR(45),
	`contact_phone` VARCHAR(45),
	`website` VARCHAR(45),
	`promoting` TINYINT(),
	`rain_accommodations` TINYINT(1) NOT NULL,
	`rain_description` LONGTEXT NOT NULL,
	`electricity` INT(11) NOT NULL AUTO_INCREMENT,
	`Field c2254` INT() NOT NULL,
	PRIMARY KEY (``),
	INDEX `index574` (`city_id`),
	INDEX `index575` (`admin_user_id`),
	INDEX `index576` (`neighborhood_id`),
	CONSTRAINT `constraint577` FOREIGN KEY `index577` (`city_id`) REFERENCES `cities`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint578` FOREIGN KEY `index578` (`admin_user_id`) REFERENCES `users`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint579` FOREIGN KEY `index579` (`neighborhood_id`) REFERENCES `neighborhoods`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `neighborhoods` (
	,
	`district_id` INT(11) NOT NULL,
	`name` VARCHAR(254) DEFAULT NULL,
	PRIMARY KEY (``),
	INDEX `index581` (`district_id`),
	CONSTRAINT `constraint582` FOREIGN KEY `index582` (`district_id`) REFERENCES `districts`() ON UPDATE NO ACTION ON DELETE NO ACTION
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
	INDEX `index584` (`locations_id`),
	INDEX `index585` (`artists_id`),
	CONSTRAINT `constraint586` FOREIGN KEY `index586` (`locations_id`) REFERENCES `locations`() ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT `constraint587` FOREIGN KEY `index587` (`artists_id`) REFERENCES `artists`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `location_timeslots` (
	`id` INT(11) NOT NULL,
	`location_id` INT(11) NOT NULL,
	`timeslot_id` INT(11) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `index605` (`location_id`),
	INDEX `index606` (`timeslot_id`),
	CONSTRAINT `constraint607` FOREIGN KEY `index607` (`location_id`) REFERENCES `locations`(),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `timeslots` (
	,
	`name` VARCHAR(45) NOT NULL,
	`description` VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
	,
	`city_id` INT(11) NOT NULL,
	`username` VARCHAR(254) NOT NULL,
	`password` VARCHAR(45) NOT NULL,
	`screenname` VARCHAR(45) NOT NULL,
	`address` VARCHAR(250) NOT NULL,
	`phone` VARCHAR(15) NOT NULL,
	`contact_preference` INT(11) NOT NULL,
	PRIMARY KEY (``),
	UNIQUE INDEX `index589` (`username`),
	UNIQUE INDEX `index590` (`password`),
	UNIQUE INDEX `index591` (`screenname`),
	INDEX `index592` (`city_id`),
	CONSTRAINT `constraint593` FOREIGN KEY `index593` (`city_id`) REFERENCES `cities`() ON UPDATE NO ACTION ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

