SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `csgo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `csgo` ;

-- -----------------------------------------------------
-- Table `csgo`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `csgo`.`user` (
    `id` INT NOT NULL AUTO_INCREMENT, 
    `username` VARCHAR(24) NOT NULL,
    `password` VARCHAR(16) NOT NULL,
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
    PRIMARY KEY (`id`) )
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
