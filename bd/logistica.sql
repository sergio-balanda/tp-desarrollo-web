CREATE DATABASE IF NOT EXISTS logistica;
use logistica;


--
-- usuario
--
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` enum('chofer','admin','supervisor','mecanico') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'chofer',
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `num_doc` int(11) NOT NULL,
  `tipo_doc` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  primary key(idUsuario)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `usuario` (`idUsuario`, `nombre`, `rol`, `password`, `num_doc`, `tipo_doc`, `fecha_nacimiento`) VALUES
(1, 'Juan Gonzalez', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'dni', NULL),
(2, 'Pepe Lopez', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'dni', '1992-06-06'),
(3, 'Paula Ramirez', 'supervisor', '84eb13cfed01764d9c401219faa56d53', 2, 'dni', NULL),
(9, 'Lucas', 'mecanico', 'c4ca4238a0b923820dcc509a6f75849b', 666, 'libreta', NULL),
(8, 'Martin Diaz', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'libreta', NULL),
(6, 'Luis Ruiz', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'dni', '2017-08-01'),
(7, 'Roberto', 'chofer', '1', 1, 'dni', NULL),
(10, 'Alberto', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'd', '2000-07-07'),
(13, 'Marcela', 'supervisor', '81dc9bdb52d04dc20036dbd8313ed055', 31733, 'dni', '2000-02-02');

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE `vehiculo` (
  `idVehiculo` int NOT NULL AUTO_INCREMENT,
  `tipo_vehiculo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `patente` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `nro_chasis` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nro_motor` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `km` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `anio` date NOT NULL,
  primary key(idVehiculo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- vehiculo
--

INSERT INTO `vehiculo` (`idVehiculo`, `tipo_vehiculo`, `patente`, `nro_chasis`, `marca`, `modelo`, `nro_motor`,`km`,`anio`) VALUES
						(1, "camion", 'M123xxA', '81dc9bdb52d04dc', 'Scania', '1634', '113545','24.000 Km','2012-09-01'),
                        (2, "acoplado", 'ABM372', '81dcM372', 'Astivia', '1634', '113545','24.000 Km','2015-09-01'),
                        (3, "camion", 'AB372CD', '1HD1BRY195Y0808', 'Mercedes-Benz', '1518', '113545','45.000 Km','2000-09-01'),
                        (4, "camion", 'M123xxA', '81dc9bdb52d04dc', 'Ford', 'Cargo 1517', '113545','24.000 Km','2007-09-01');

--
-- mantenimiento
--
                        
DROP TABLE IF EXISTS `mantenimiento`;                        
CREATE TABLE `mantenimiento` (
  `idMantenimiento` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int NOT NULL,
  `idVehiculo` int NOT NULL,
  `tipo_vehiculo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `repuestos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `km_unidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `externo` BOOLEAN NOT NULL,
  `ext_descripcion` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `costo` DECIMAL(12,2) NOT NULL,
  primary key(idMantenimiento),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
  FOREIGN KEY (idVehiculo) REFERENCES vehiculo(idVehiculo),
  FOREIGN KEY (tipo_vehiculo) REFERENCES vehiculo(tipo_vehiculo)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



INSERT INTO `mantenimiento` 
	(`idMantenimiento`,`idUsuario`,`idVehiculo`, `tipo_vehiculo`, `fecha_entrada`, `fecha_salida`, `repuestos`, `km_unidad`, `externo`,`costo`) 
    VALUES
	(1, 9, 1, "camion-A", '2017-01-15', '2017-07-15', 'muchos...', '24.000 Km', FALSE,10000.00),
    (2, 9, 1, "camion-A", '2017-08-11', '2017-08-15', 'muchos...', '24.000 Km', FALSE,1000.00);
INSERT INTO `mantenimiento` 
	(`idMantenimiento`,`idUsuario`,`idVehiculo`, `tipo_vehiculo`, `fecha_entrada`, `fecha_salida`, `repuestos`, `km_unidad`, `externo`,`ext_descripcion`,`costo`) 
    VALUES
    (3, 9, 2, "acoplado-B", '2016-04-15', '2016-07-15', 'muchos...', '26.000 Km', FALSE,'descripcion...',80000.00);

                       