create database reascende
use reascende 

CREATE TABLE `reascende`.`cadastrar` (
  `idcadastrar` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100),
  `sobrenome` VARCHAR(100),
  `email` VARCHAR(45),
  `confirmasenha` VARCHAR(45),
  PRIMARY KEY (`idcadastrar`));
  
  CREATE TABLE `reascende`.`cadastroempresa` (
  `idcadastro_empresa` INT NOT NULL AUTO_INCREMENT,
  `nome_empresa` VARCHAR(100),
  `nome_contato` VARCHAR(100),
  `cnpj` INT(30),
  `email` VARCHAR(45),
  `senha` VARCHAR(45),
  PRIMARY KEY (`idcadastro_empresa`));
  
  CREATE TABLE `reascende`.`dados_pessoais` (
  `iddados_pessoais` INT NOT NULL AUTO_INCREMENT,
  `rg` INT,
  `cpf` INT,
  `data_nascimento` DATE,
  `cidade` VARCHAR(45),
  `uf` VARCHAR(45),
  `nacionalidade` VARCHAR(45),
  `genero` VARCHAR(30),
  `telefone` VARCHAR(30),
  `telefone2` VARCHAR (30),
  PRIMARY KEY (`iddados_pessoais`));
  
  CREATE TABLE `reascende`.`conhecimentos_gerais` (
  `idconhecimentos_gerais` INT NOT NULL AUTO_INCREMENT,
  `basico_internet` VARCHAR(45),
  `curriculo` VARCHAR(45),
  `gmail_outlook` VARCHAR(45),
  `desenvolvimento_pessoal` VARCHAR(45),
  `pacote_office` VARCHAR(45),
  `soft_skils` VARCHAR(45),
  PRIMARY KEY (`idconhecimentos_gerais`));
  
  CREATE TABLE `reascende`.`endereco` (
  `idendereco` INT NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(45),
  `cidade` VARCHAR (50),
  `numero` DECIMAL(10),
  `pessoasmesmacasa` VARCHAR(10),
  `rendafamiliar` VARCHAR (50),
  `escolaridade` VARCHAR(45),
  `etnia` VARCHAR(45),
  `ciente` VARCHAR(45) NULL,
  PRIMARY KEY (`idendereco`));


