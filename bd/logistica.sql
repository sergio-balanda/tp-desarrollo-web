-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2017 a las 20:25:45
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
(1, 'juan', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'dni', NULL),
(2, 'pepe', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'dni', '1992-06-06'),
(3, 'paula', 'supervisor', '84eb13cfed01764d9c401219faa56d53', 2, 'dni', NULL),
(9, 'ultimo', 'chofer', 'c4ca4238a0b923820dcc509a6f75849b', 666, 'no tiene', NULL),
(8, 'rosqueta', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'libreta', NULL),
(6, 'unsuaurio', 'admin', '202cb962ac59075b964b07152d234b70', 123, 'dni', '2017-08-01'),
(7, 'roberto', 'chofer', '1', 1, 'dni', NULL),
(10, 'fecha', 'chofer', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'd', '2000-07-07'),
(13, 'marcela', 'supervisor', '81dc9bdb52d04dc20036dbd8313ed055', 31733, 'dni', '2000-02-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
