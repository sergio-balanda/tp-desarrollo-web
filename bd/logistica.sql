-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2017 a las 21:40:58
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `idMantenimiento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `tipo_vehiculo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `repuestos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `km_unidad` int(11) NOT NULL,
  `externo` enum('si','no') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'no',
  `ext_descripcion` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `costo` decimal(12,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`idMantenimiento`, `idUsuario`, `idVehiculo`, `tipo_vehiculo`, `fecha_entrada`, `fecha_salida`, `repuestos`, `km_unidad`, `externo`, `ext_descripcion`, `costo`) VALUES
(1, 9, 1, 'camion-A', '2017-01-15', '2017-07-15', 'muchos...', 2900, 'no', NULL, '10000.00'),
(2, 9, 1, 'camion-A', '2017-08-11', '2017-08-15', 'muchos...', 3080, 'no', NULL, '1000.00'),
(3, 11, 4, 'camion', '2017-07-10', '2017-07-15', 'muchos...', 18000, 'no', NULL, '8000.00'),
(4, 11, 6, 'camion', '2016-04-15', '2016-07-15', 'muchos...', 20050, 'si', 'descripcion...', '50000.00'),
(5, 9, 2, 'acoplado-B', '2016-04-15', '2016-07-15', 'muchos...', 24000, 'si', 'descripcion...', '80000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` enum('chofer','admin','supervisor','mecanico') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'chofer',
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `num_doc` int(11) NOT NULL,
  `tipo_doc` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `rol`, `password`, `num_doc`, `tipo_doc`, `fecha_nacimiento`) VALUES
(1, 'Juan Gonzalez', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'dni', NULL),
(2, 'Pepe Lopez', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'dni', '1992-06-06'),
(3, 'Paula Ramirez', 'supervisor', '84eb13cfed01764d9c401219faa56d53', 2, 'dni', NULL),
(9, 'Lucas Silva', 'mecanico', 'c4ca4238a0b923820dcc509a6f75849b', 666, 'libreta', NULL),
(8, 'Martin Diaz', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'libreta', NULL),
(6, 'Luis Ruiz', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'dni', '2017-08-01'),
(7, 'Roberto', 'chofer', '1', 1, 'dni', NULL),
(10, 'Alberto López', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'd', '2000-07-07'),
(11, 'Jorge Gómez', 'mecanico', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'dni', '1980-07-07'),
(13, 'Marcela Rodríguez ', 'supervisor', '81dc9bdb52d04dc20036dbd8313ed055', 31733, 'dni', '2000-02-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `tipo_vehiculo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `patente` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `nro_chasis` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nro_motor` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `km` int(11) NOT NULL,
  `anio` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `tipo_vehiculo`, `patente`, `nro_chasis`, `marca`, `modelo`, `nro_motor`, `km`, `anio`) VALUES
(1, 'camion', 'M123xxA', '81dc9bdb52d04dc', 'Scania', '1634', '113545', 2900, '2012-09-01'),
(2, 'acoplado', 'ABM372', '81dcM372', 'Astivia', '1634', '113545', 24000, '2015-09-01'),
(3, 'camion', 'AB372CD', '1HD1BRY195Y0808', 'Mercedes-Benz', '1518', '113545', 45, '2000-09-01'),
(4, 'camion', 'AB372CD', '1HD1BRY195Y0808', 'Mercedes-Benz', '1710', '213545', 45000, '2000-09-01'),
(5, 'acoplado', 'LAB0372', '21BRz195Y0808', 'NORTRUCKS', '2508', '333545', 4000, '2017-01-01'),
(6, 'camion', 'A372BCD', '8AD3CN6AP4G0032', 'Iveco', 'Daily', '153545', 20050, '2016-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `idViaje` int(11) NOT NULL,
  `fecha_partida` datetime NOT NULL,
  `fecha_llegada` datetime NOT NULL,
  `titulo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`idViaje`, `fecha_partida`, `fecha_llegada`, `titulo`) VALUES
(1, '2017-09-24 00:00:00', '2017-09-30 00:00:00', ''),
(2, '2017-10-01 00:00:00', '2017-09-02 00:00:00', ''),
(3, '2017-09-24 00:00:00', '2017-09-30 00:00:00', ''),
(4, '2017-10-01 00:00:00', '2017-09-02 00:00:00', ''),
(5, '2017-09-23 09:00:00', '2017-09-23 12:00:00', 'viaje A'),
(6, '2017-09-23 16:00:00', '2017-09-23 16:28:00', 'viaje B'),
(7, '2017-09-23 09:00:00', '2017-09-23 12:00:00', 'viaje A'),
(8, '2017-09-23 16:00:00', '2017-09-23 16:28:00', 'viaje B');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`idMantenimiento`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVehiculo` (`idVehiculo`),
  ADD KEY `tipo_vehiculo` (`tipo_vehiculo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`idViaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `idMantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `idViaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
