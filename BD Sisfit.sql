-- MySQL Script generated by MySQL Workbench
-- 11/20/16 10:08:48
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sisfit
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sisfit
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sisfit` DEFAULT CHARACTER SET latin1 ;
USE `sisfit` ;

-- -----------------------------------------------------
-- Table `sisfit`.`atividades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`atividades` (
  `id` INT(11) NOT NULL,
  `atividade` VARCHAR(45) NOT NULL,
  `valor` FLOAT NOT NULL,
  `atvtemp` VARCHAR(3) NOT NULL,
  `dtini` DATE NOT NULL,
  `dtfim` DATE NOT NULL,
  `duracao_aula` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`avaliacao` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `n_aluno` VARCHAR(255) NULL DEFAULT NULL,
  `obj_atividade` VARCHAR(255) NULL DEFAULT NULL,
  `atv_atual` VARCHAR(255) NULL DEFAULT NULL,
  `tipo_med` VARCHAR(255) NULL DEFAULT NULL,
  `tipo_cirg` VARCHAR(255) NULL DEFAULT NULL,
  `tipo_doenca` VARCHAR(255) NULL DEFAULT NULL,
  `obs_aval` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`debito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`debito` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `valor` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `outrocampo` VARCHAR(255) NOT NULL,
  `outrocampo2` VARCHAR(255) NOT NULL,
  `outrocampo3` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`empresa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `razao` VARCHAR(45) NOT NULL,
  `nome_fantasia` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(1) NOT NULL,
  `cpf_cnpj` VARCHAR(14) NOT NULL,
  `insc_estadual` VARCHAR(45) NOT NULL,
  `insc_municipal` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(9) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `municipio` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(9) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`endereco` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(255) NOT NULL,
  `numero` VARCHAR(255) NOT NULL,
  `cep` VARCHAR(255) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `bairro` VARCHAR(255) NOT NULL,
  `estado` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`fornecedor` (
  `id` INT(11) NOT NULL,
  `razao` VARCHAR(45) NOT NULL,
  `nome_fantasia` VARCHAR(45) NOT NULL,
  `cpf_cnpj` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(15) NULL DEFAULT NULL,
  `tipo` VARCHAR(3) NOT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `endereco` VARCHAR(45) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `municipio` VARCHAR(45) NULL DEFAULT NULL,
  `numero` VARCHAR(45) NULL DEFAULT NULL,
  `cep` VARCHAR(9) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`funcionario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NOT NULL,
  `nascimento` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `matricula` VARCHAR(255) NOT NULL,
  `estadocivil` VARCHAR(255) NOT NULL,
  `nacionalidade` VARCHAR(255) NOT NULL,
  `naturalidade` VARCHAR(255) NOT NULL,
  `ufnaturalidade` VARCHAR(255) NOT NULL,
  `admissao` VARCHAR(255) NOT NULL,
  `saida` VARCHAR(255) NOT NULL,
  `sexo` VARCHAR(255) NOT NULL,
  `deficiente` VARCHAR(255) NOT NULL,
  `obsdeficiente` VARCHAR(255) NOT NULL,
  `nomepai` VARCHAR(255) NOT NULL,
  `nomemae` VARCHAR(250) NOT NULL,
  `apelido` VARCHAR(250) NOT NULL,
  `funcao` VARCHAR(255) NOT NULL,
  `numcarteira` VARCHAR(50) NOT NULL,
  `seriecarteira` VARCHAR(250) NOT NULL,
  `uf_naturalidade` VARCHAR(20) NOT NULL,
  `turnotrab` VARCHAR(255) NOT NULL,
  `tipotrab` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`nome_plano`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`nome_plano` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_plano` VARCHAR(255) NOT NULL,
  `atividades_plano` VARCHAR(255) NOT NULL,
  `observacoes_plano` VARCHAR(255) NOT NULL,
  `tipo_plano` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`personal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `estadocivil` VARCHAR(255) NOT NULL,
  `nacionalidade` VARCHAR(255) NOT NULL,
  `naturalidade` VARCHAR(255) NOT NULL,
  `uf_naturalidade` VARCHAR(255) NOT NULL,
  `dt_nascimento` VARCHAR(255) NOT NULL,
  `sexo` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `horario` VARCHAR(255) NOT NULL,
  `dt_cadastro` VARCHAR(255) NOT NULL,
  `endereco` VARCHAR(250) NOT NULL,
  `numero` VARCHAR(250) NOT NULL,
  `bairro` VARCHAR(255) NOT NULL,
  `cep` VARCHAR(50) NOT NULL,
  `orgao_emissor` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`planos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`planos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_plano` VARCHAR(255) NULL DEFAULT NULL,
  `atividades_plano` VARCHAR(255) NULL DEFAULT NULL,
  `tipo_plano` VARCHAR(255) NULL DEFAULT NULL,
  `duracao_plano` VARCHAR(255) NULL DEFAULT NULL,
  `numero_aula` VARCHAR(255) NULL DEFAULT NULL,
  `vl_matricula` VARCHAR(255) NULL DEFAULT NULL,
  `vl_mensal` VARCHAR(255) NULL DEFAULT NULL,
  `data_cadastro` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`produtos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `des` VARCHAR(255) NOT NULL,
  `vcusto` VARCHAR(255) NOT NULL,
  `vvenda` VARCHAR(255) NOT NULL,
  `umedida` VARCHAR(255) NOT NULL,
  `qproduto` VARCHAR(255) NOT NULL,
  `grupo` VARCHAR(255) NOT NULL,
  `tipo` VARCHAR(255) NOT NULL,
  `garantia` VARCHAR(255) NOT NULL,
  `tempgarantia` VARCHAR(255) NOT NULL,
  `periodo` VARCHAR(255) NOT NULL,
  `dtcompra` DATE NOT NULL,
  `fornecedor` VARCHAR(6) NOT NULL,
  `bloqueado` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`tb_aluno` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(255) NOT NULL,
  `rg` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(255) NOT NULL,
  `matricula` VARCHAR(255) NOT NULL,
  `est_civil` VARCHAR(255) NOT NULL,
  `nacionalidade` VARCHAR(255) NOT NULL,
  `naturalidade` VARCHAR(255) NOT NULL,
  `uf_natur` VARCHAR(255) NOT NULL,
  `dt_nasc` VARCHAR(255) NOT NULL,
  `sexo` VARCHAR(255) NOT NULL,
  `deficiente` VARCHAR(255) NOT NULL,
  `obs_def` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `plano` VARCHAR(255) NOT NULL,
  `bolsa` VARCHAR(255) NOT NULL,
  `tipo_bolsa` VARCHAR(255) NOT NULL,
  `h_treino` VARCHAR(255) NOT NULL,
  `dt_cadastro` VARCHAR(50) NOT NULL,
  `rua` VARCHAR(50) NOT NULL,
  `numero` VARCHAR(6) NOT NULL,
  `bairro` VARCHAR(50) NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `orgao_emissor` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sisfit`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sisfit`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(255) NOT NULL,
  `nome` VARCHAR(255) NULL DEFAULT NULL,
  `senha` VARCHAR(255) NULL DEFAULT NULL,
  `contrasenha` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `bloqueado` VARCHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;