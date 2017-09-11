create database logistica;
use logistica;

CREATE TABLE IF NOT EXISTS `logistica`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `tipo_doc` VARCHAR(45) NULL,
  `num_doc` VARCHAR(8) NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `fecha_nacimiento` VARCHAR(45) NULL,
  `rol` SMALLINT(4) NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;

alter table usuario modify column num_doc varchar(8);

insert into usuario values ( 1 , 'DNI' , '28642247' , 'Nicolás Sierra' , '1981-01-03' , 1 , 'nico123' );