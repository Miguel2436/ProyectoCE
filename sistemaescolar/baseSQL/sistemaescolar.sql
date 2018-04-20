-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2018 a las 05:32:38
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaescolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `IdAlumno` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido_P` varchar(50) NOT NULL,
  `Apellido_M` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IdAlumno`, `Nombre`, `Apellido_P`, `Apellido_M`) VALUES
(26, 'ergw4ergt', 'yjhv', 'jyj'),
(29, 'ergw4ergt', 'yjhv', 'jyj'),
(30, 'ergw4ergt', 'yjhv', 'jyj'),
(31, 'ergw4ergt', 'yjhv', 'jyj'),
(32, 'ergw4ergt', 'yjhv', 'jyj'),
(33, 'ergw4ergt', 'yjhv', 'jyj'),
(45, '\";drop table alumno;', '', ''),
(47, '12', '16', '22'),
(48, '', '', ''),
(49, 'José', 'Gómez', 'Pérez'),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', ''),
(62, '', '', ''),
(63, '\'', '', ''),
(64, 'a', 'a', 'a'),
(65, '', '', ''),
(66, '', '', ''),
(67, '.l{l0lkl.@', 'fgjkhj-+--+-+', 'sdfghj'),
(71, '0', '0', '0'),
(72, '\"', '\"', '\"'),
(73, 'Maria Guadalupe', 'khbk', 'khk'),
(74, 'Maria Guadalupe', 'khbk', 'khk'),
(75, 'Maria Guadalupe', 'khbk', 'khk'),
(76, 'Maria Guadalupe', 'khbk', 'khk'),
(77, 'Maria Guadalupe', 'khbk', 'khk'),
(78, 'Maria Guadalupe', 'khbk', 'khk'),
(79, 'Maria Guadalupe', 'khbk', 'khk'),
(80, 'Maria Guadalupe', 'khbk', 'khk'),
(81, 'Maria Guadalupe', 'khbk', 'khk'),
(82, 'Maria Guadalupe', 'khbk', 'khk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

CREATE TABLE `cursa` (
  `IdCursa` int(11) NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `IdMateria` int(11) NOT NULL,
  `Calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `IdLogin` int(11) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`IdLogin`, `User`, `Password`, `sid`) VALUES
(1, 'Piña', 'piña', 1055566784),
(2, 'Trapos', 'trapos', 1845898728),
(3, 'Jose Miguel', 'josemiguel', 1835522511),
(4, 'Alan', 'alan', 1750536566),
(5, 'Alex', 'alex', 1728570346),
(6, 'Daniel', 'daniel', NULL),
(7, 'Miguel', 'miguel', 1157193779),
(8, 'Dogo', 'dogo', 381451262),
(9, 'Grecia', 'grecia', 1630594394),
(10, 'Leonardo', 'leonardo', 266118018),
(11, 'Fer', 'fer', 2121974100),
(12, 'Mony', 'mony', 238428856),
(13, 'Kate', 'kate', 516427773);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `IdMateria` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`IdMateria`, `Nombre`) VALUES
(10, 'Rabano'),
(11, 'Cursi'),
(12, 'programación'),
(13, 'Costal'),
(14, 'El rubius'),
(15, 'WestleManÃ­a'),
(23, 'Mate V'),
(24, 'Mate VI'),
(25, 'Programación'),
(26, 'camión'),
(27, 'SexologÃ­a 2'),
(28, 'Hola'),
(29, 'Hola'),
(30, 'Hola'),
(31, 'Trapos'),
(33, 'programacion'),
(34, 'holamundo'),
(35, 'Trapos'),
(36, '\");drop table materia;'),
(37, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`IdCursa`),
  ADD KEY `IdAlumno` (`IdAlumno`),
  ADD KEY `IdMateria` (`IdMateria`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`IdMateria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
  MODIFY `IdCursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `IdMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`IdAlumno`) REFERENCES `alumno` (`IdAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`IdMateria`) REFERENCES `materia` (`IdMateria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
