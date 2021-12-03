-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema LiveChat_DB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema LiveChat_DB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `LiveChat_DB` DEFAULT CHARACTER SET utf8 ;
USE `LiveChat_DB` ;

-- -----------------------------------------------------
-- Table `LiveChat_DB`.`Chatrooms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LiveChat_DB`.`Chatrooms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `nb_users_max` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `UNIQUE_CHATROOM` (`name` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LiveChat_DB`.`Users_states`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LiveChat_DB`.`Users_states` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `UNIQUE_STATE` (`name` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LiveChat_DB`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LiveChat_DB`.`Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(60) NOT NULL,
  `lastname` VARCHAR(60) NOT NULL,
  `username` VARCHAR(25) NOT NULL,
  `email` VARCHAR(254) NOT NULL,
  `registration_date` DATE NOT NULL,
  `Chatroom_id` INT NULL,
  `Users_states_id` INT NOT NULL,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) INVISIBLE,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `UNIQUE_USER` (`username` ASC) INVISIBLE,
  INDEX `fk_Users_Chatrooms1_idx` (`Chatroom_id` ASC) VISIBLE,
  INDEX `fk_Users_Users_states1_idx` (`Users_states_id` ASC) VISIBLE,
  CONSTRAINT `fk_Users_Chatrooms1`
    FOREIGN KEY (`Chatroom_id`)
    REFERENCES `LiveChat_DB`.`Chatrooms` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Users_states1`
    FOREIGN KEY (`Users_states_id`)
    REFERENCES `LiveChat_DB`.`Users_states` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LiveChat_DB`.`Messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LiveChat_DB`.`Messages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(200) NOT NULL,
  `sending_timestamp` DATETIME NOT NULL,
  `User_id` INT NOT NULL,
  `Chatroom_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `UNIQUE_MESSAGE` (`sending_timestamp` ASC, `content` ASC) INVISIBLE,
  INDEX `fk_Messages_Users1_idx` (`User_id` ASC) VISIBLE,
  INDEX `fk_Messages_Chatrooms1_idx` (`Chatroom_id` ASC) VISIBLE,
  CONSTRAINT `fk_Messages_Users1`
    FOREIGN KEY (`User_id`)
    REFERENCES `LiveChat_DB`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Messages_Chatrooms1`
    FOREIGN KEY (`Chatroom_id`)
    REFERENCES `LiveChat_DB`.`Chatrooms` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO users_states (NAME) VALUES ("connected");
INSERT INTO users_states (NAME) VALUES ("disconnected");
