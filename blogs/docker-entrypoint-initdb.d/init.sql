SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `blogs` ;

CREATE DATABASE `blogs` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `blogs` ;

-- -----------------------------------------------------
-- Table `blogs`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`articles` (
  `article_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`article_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogs`.`tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`tags` (
  `tag_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`tag_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogs`.`blogs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`blogs` (
  `blog_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `subtitle` VARCHAR(255) NULL,
  `summary` VARCHAR(255) NULL,
  `cover_image_filename` VARCHAR(255) NULL,
  `posted_date` DATETIME NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`blog_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogs`.`blog_images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`blog_images` (
  `blog_image_id` INT NOT NULL AUTO_INCREMENT,
  `blog_id` INT NULL,
  `filename` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`blog_image_id`),
  INDEX `fk_blog_images1_idx` (`blog_id` ASC))
ENGINE = InnoDB
KEY_BLOCK_SIZE = 4;


-- -----------------------------------------------------
-- Table `blogs`.`blog_tags`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`blog_tags` (
  `blog_id` INT NOT NULL,
  `tag_id` INT NULL,
  PRIMARY KEY (`blog_id`),
  INDEX `fk_tags1_idx` (`tag_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `blogs`.`blog_articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blogs`.`blog_articles` (
  `blog_id` INT NOT NULL,
  `article_id` INT NULL,
  PRIMARY KEY (`blog_id`),
  INDEX `fk_articles1_idx` (`article_id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
