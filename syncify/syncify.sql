SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `syncify` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `syncify` ;

-- -----------------------------------------------------
-- Table `syncify`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(16) NOT NULL,
    `password` VARCHAR(16) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `name` VARCHAR(45) NOT NULL,
    `nickname` VARCHAR(16) NOT NULL,
    `birthday` DATE NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC),
    UNIQUE INDEX `username_UNIQUE` (`username` ASC),
    UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `syncify`.`party`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`party` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `host_id` INT NOT NULL,
    `name` VARCHAR(16) NOT NULL,
    `PIN` INT,
    `artist` VARCHAR(45),
    `title` VARCHAR(45),
    `startAt` TIME,
    `endAt` TIME,
    `current` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `syncify`.`party_history`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`party_history` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `user_id` INT NOT NULL,
    `party_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `syncify`.`song`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`song` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `title` VARCHAR(45) NOT NULL,
    `artist` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `syncify`.`playlist`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`playlist` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `name` VARCHAR(45) NOT NULL,
    `cover_url` VARCHAR(128) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `syncify`.`playlist_history`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `syncify`.`playlist_history` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `song_id` INT NOT NULL,
    `playlist_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
