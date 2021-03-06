-- MySQL Script generated by MySQL Workbench
-- Sat Dec  8 12:22:04 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema IA
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema IA
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `IA` DEFAULT CHARACTER SET utf8 ;
USE `IA` ;

-- -----------------------------------------------------
-- Table `IA`.`bebidas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`bebidas` (
  `idbebidas` INT NOT NULL,
  `nome` VARCHAR(60) NULL,
  `valor` DECIMAL(30) NULL,
  `Tipo` INT NULL,
  PRIMARY KEY (`idbebidas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`entradas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`entradas` (
  `identradas` INT NOT NULL,
  `nome` VARCHAR(60) NULL,
  `valor` DECIMAL(30) NULL,
  PRIMARY KEY (`identradas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`refeicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`refeicoes` (
  `idrefeicoes` INT NOT NULL,
  `nome` VARCHAR(60) NULL,
  `valor` DECIMAL(30) NULL,
  PRIMARY KEY (`idrefeicoes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`sobremesas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`sobremesas` (
  `idsobremesas` INT NOT NULL,
  `nome` VARCHAR(60) NULL,
  `valor` DECIMAL(30) NULL,
  PRIMARY KEY (`idsobremesas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`mesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`mesa` (
  `idmesa` INT NOT NULL,
  PRIMARY KEY (`idmesa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`pedidos` (
  `idpedidos` INT NOT NULL,
  `qtde` INT NULL,
  `mesa_idmesa` INT NOT NULL,
  `bebidas_idbebidas` INT NULL,
  `entradas_identradas` INT NULL,
  `refeicoes_idrefeicoes` INT NULL,
  `sobremesas_idsobremesas` INT NULL,
  PRIMARY KEY (`idpedidos`),
  INDEX `fk_pedidos_mesa1_idx` (`mesa_idmesa` ASC),
  INDEX `fk_pedidos_bebidas1_idx` (`bebidas_idbebidas` ASC),
  INDEX `fk_pedidos_entradas1_idx` (`entradas_identradas` ASC),
  INDEX `fk_pedidos_refeicoes1_idx` (`refeicoes_idrefeicoes` ASC),
  INDEX `fk_pedidos_sobremesas1_idx` (`sobremesas_idsobremesas` ASC),
  CONSTRAINT `fk_pedidos_mesa1`
    FOREIGN KEY (`mesa_idmesa`)
    REFERENCES `IA`.`mesa` (`idmesa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_bebidas1`
    FOREIGN KEY (`bebidas_idbebidas`)
    REFERENCES `IA`.`bebidas` (`idbebidas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_entradas1`
    FOREIGN KEY (`entradas_identradas`)
    REFERENCES `IA`.`entradas` (`identradas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_refeicoes1`
    FOREIGN KEY (`refeicoes_idrefeicoes`)
    REFERENCES `IA`.`refeicoes` (`idrefeicoes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_sobremesas1`
    FOREIGN KEY (`sobremesas_idsobremesas`)
    REFERENCES `IA`.`sobremesas` (`idsobremesas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IA`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IA`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `mesa_idmesa` INT NULL,
  `email` VARCHAR(60) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  INDEX `fk_cliente_mesa1_idx` (`mesa_idmesa` ASC),
  CONSTRAINT `fk_cliente_mesa1`
    FOREIGN KEY (`mesa_idmesa`)
    REFERENCES `IA`.`mesa` (`idmesa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
