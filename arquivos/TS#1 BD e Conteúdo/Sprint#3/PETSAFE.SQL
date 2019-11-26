-- CRIAÇÃO  DO BANCO :

CREATE SCHEMA `petsafe` ;

use petsafe;


-- CRIAÇÃO DAS TABELAS:
CREATE TABLE `petsafe`.`animaisPerdidos` (
  `id_animalP` INT NOT NULL AUTO_INCREMENT,
  `dataP` date NOT NULL,
  `localP` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `nomeDono` VARCHAR(30) CHARACTER SET 'utf8' NOT NULL,
  PRIMARY KEY (`id_animalP`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE `petsafe`.`animaisDoacao` (
  `id_animalD` INT NOT NULL AUTO_INCREMENT,
  `dataNascimento` date NOT NULL,
  `castrado` VARCHAR (40) NOT NULL,
  `vacinado` VARCHAR (20) NOT NULL,
  
  PRIMARY KEY (`id_animalD`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE `petsafe`.`animaisAchados` (
  `id_animalA` INT NOT NULL AUTO_INCREMENT,
  `localA` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `dataA` date NOT NULL,
  PRIMARY KEY (`id_animalA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE `petsafe`.`login` (
  `id_login` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `senha` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `tipo` INT NOT NULL,
  PRIMARY KEY (`id_login`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE `petsafe`.`usuarios` (
  `id_usuarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) CHARACTER SET 'utf8' NOT NULL,
  `dataNascimento` date NOT NULL,
  `numeroCasa` VARCHAR (10) CHARACTER SET 'utf8' NOT NULL,
  `rg` VARCHAR (15) CHARACTER SET 'utf8' NOT NULL,
  `telefone` VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,
  `endereco` VARCHAR(40) CHARACTER SET 'utf8' NOT NULL,
  `estado` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL,
  `cidade` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL,
  `cep` VARCHAR(12) CHARACTER SET 'utf8' NOT NULL,
  `bairro` VARCHAR(30) CHARACTER SET 'utf8' NOT NULL,
  `id_login` INT NOT NULL,
  PRIMARY KEY (`id_usuarios`),
  FOREIGN KEY (`id_login`)
  REFERENCES `petsafe`.`login`(`id_login`))
  
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE `petsafe`.`animal` (
  `id_animal` INT NOT NULL AUTO_INCREMENT,
  `especie` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL,
  `raca` VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,  
  `porte` VARCHAR (15) CHARACTER SET 'utf8' NOT NULL,
  `pelagem` VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,
  `idade` VARCHAR(15) CHARACTER SET 'utf8' NOT NULL,
  `indole` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL,
  `sexo` VARCHAR(10) CHARACTER SET 'utf8' NOT NULL,
  `foto` VARCHAR(128) CHARACTER SET 'utf8' NOT NULL,
  `descricao` VARCHAR(256) CHARACTER SET 'utf8' NOT NULL,
  `id_usuarios` INT NOT NULL,
  `id_animalP` INT NOT NULL,
  `id_animalD` INT NOT NULL,
  `id_animalA` INT NOT NULL,
  `id_login` INT NOT NULL,
  PRIMARY KEY (`id_animal`),
  FOREIGN KEY (`id_usuarios`)
  REFERENCES `petsafe`.`usuarios`(`id_usuarios`),
  FOREIGN KEY (`id_animalP`)
  REFERENCES `petsafe`.`animaisPerdidos`(`id_animalP`),
  FOREIGN KEY (`id_animalD`)
  REFERENCES `petsafe`.`animaisDoacao`(`id_animalD`),
  FOREIGN KEY (`id_animalA`)
  REFERENCES `petsafe`.`animaisAchados`(`id_animalA`),
  FOREIGN KEY (`id_login`)
  REFERENCES `petsafe`.`login`(`id_login`))
  
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;




