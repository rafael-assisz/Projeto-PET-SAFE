CREATE SCHEMA `petsafe` ;

use petsafe;

-- 															TABELA DOS ANIMAIS PERDIDOS
CREATE TABLE `petsafe`.`animaisPerdidos` (
  `idanimalP` INT NOT NULL AUTO_INCREMENT,
  `dataP` date NOT NULL,
  `localP` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `nomeDono` VARCHAR(30) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`idanimalP`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

select * from animaisPerdidos;

-- 															TABELA DOS ANIMAIS ACHADOS

CREATE TABLE `petsafe`.`animaisAchados` (
  `idanimalA` INT NOT NULL AUTO_INCREMENT,
  `localA` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `dataA` date NOT NULL,
  PRIMARY KEY (`idanimalA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

select * from animaisAchados;

-- 															TABELA DOS ANIMAIS PARA DOAÇÃO

CREATE TABLE `petsafe`.`animaisDoacao` (
  `idanimalD` INT NOT NULL AUTO_INCREMENT,
  `dataNascimento` date NOT NULL,
  
  PRIMARY KEY (`idanimalD`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

select * from animaisDoacao;

-- 															TABELA DO USUÁRIO

CREATE TABLE `petsafe`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) CHARACTER SET 'utf8' NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,
  `endereco` VARCHAR(40) CHARACTER SET 'utf8' NOT NULL,
  `estado` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL,
  `cidade` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL,
  `cep` VARCHAR(12) CHARACTER SET 'utf8' NOT NULL,
  `bairro` VARCHAR(30) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

select * from usuarios;

-- 															TABELA ? ?
