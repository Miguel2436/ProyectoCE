-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2018 a las 22:13:37
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
(49, 'José', 'Gómez', 'Pérez'),
(84, 'Faty', 'Gonzalez', 'Lozano'),
(86, 'ghgh', 'yghjDF', 'FGsdfg'),
(87, 'Funciona', 'por ', 'favor'),
(88, 'Mony', 'Gomez', 'Gomez'),
(91, 'Kate', 'Martinez', 'Hernandez'),
(92, 'grgf', 'hghg', 'hhgh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `IdCarrera` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`IdCarrera`, `Nombre`) VALUES
(1, 'Cultura coreana'),
(2, 'Desarrollo software');

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
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `IdLog` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `User` int(11) NOT NULL,
  `Query` text NOT NULL,
  `IPaddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`IdLog`, `Date`, `User`, `Query`, `IPaddress`) VALUES
(8, '2018-04-20 07:45:25', 11, 'DELETE FROM alumno where IdAlumno =67', ''),
(9, '2018-04-20 07:46:27', 4, 'DELETE FROM alumno where IdAlumno =47', ''),
(10, '2018-04-20 07:51:05', 4, 'DELETE FROM cursa where IdCursa =28', ''),
(11, '2018-04-20 14:04:19', 4, 'DELETE FROM alumno where IdAlumno =56', ''),
(12, '2018-04-20 07:06:06', 4, 'DELETE FROM alumno where IdAlumno =59', ''),
(13, '2018-04-20 07:27:13', 4, 'DELETE FROM alumno where IdAlumno =62', ''),
(14, '2018-04-20 07:29:17', 4, 'DELETE FROM alumno where IdAlumno =48', '::1'),
(15, '2018-04-20 07:33:49', 4, 'DELETE FROM alumno where IdAlumno =73', '::1'),
(16, '2018-04-20 07:39:47', 4, 'DELETE FROM alumno where IdAlumno =29', '::1'),
(17, '2018-04-20 08:04:05', 4, 'DELETE FROM alumno where IdAlumno =32', '::1'),
(18, '2018-04-20 08:05:03', 4, 'DELETE FROM alumno where IdAlumno =26', '::1'),
(19, '2018-04-20 08:07:10', 4, 'DELETE FROM alumno where IdAlumno =30', '::1'),
(20, '2018-04-20 08:14:55', 4, 'DELETE FROM alumno where IdAlumno =31', '::1'),
(21, '2018-04-20 08:19:29', 7, 'DELETE FROM alumno where IdAlumno =85', '10.10.1.60'),
(22, '2018-04-20 08:19:56', 7, 'DELETE FROM alumno where IdAlumno =74', '10.10.1.60'),
(23, '2018-04-20 08:20:00', 7, 'DELETE FROM alumno where IdAlumno =75', '10.10.1.60'),
(24, '2018-04-20 08:20:52', 7, 'DELETE FROM alumno where IdAlumno =76', '10.10.1.60'),
(25, '2018-04-20 08:20:56', 7, 'DELETE FROM alumno where IdAlumno =77', '10.10.1.60'),
(26, '2018-04-20 08:21:00', 7, 'DELETE FROM alumno where IdAlumno =78', '10.10.1.60'),
(27, '2018-04-20 08:21:03', 7, 'DELETE FROM alumno where IdAlumno =33', '10.10.1.60'),
(28, '2018-04-25 08:28:08', 11, 'SELECT * FROM alumno', '::1'),
(29, '2018-04-25 08:28:28', 11, 'SELECT * FROM alumno', '::1'),
(30, '2018-04-25 08:28:28', 11, 'INSERT INTO alumno(nombre,apellido_p,apellido_m) values(Funciona,por ,favor);', '::1'),
(31, '2018-04-25 08:28:37', 11, 'SELECT * FROM alumno', '::1'),
(32, '2018-04-25 08:28:37', 11, 'INSERT INTO alumno(nombre,apellido_p,apellido_m) values(Funciona,por ,favor);', '::1'),
(33, '2018-04-25 08:52:59', 11, 'SELECT * FROM alumno', '::1'),
(35, '2018-04-25 08:56:30', 3, 'SELECT * FROM alumno', '::1'),
(36, '2018-04-25 08:56:30', 3, 'SELECT * FROM materia', '::1'),
(37, '2018-04-25 08:56:36', 3, 'SELECT * FROM alumno', '::1'),
(38, '2018-04-25 08:57:33', 3, 'SELECT * FROM alumno', '::1'),
(41, '2018-04-26 09:41:13', 11, 'SELECT * FROM alumno', '192.168.84.95'),
(42, '2018-04-26 09:41:13', 11, 'SELECT * FROM materia', '192.168.84.95'),
(43, '2018-04-26 09:41:16', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(44, '2018-04-26 09:41:16', 14, 'SELECT * FROM materia', '192.168.84.77'),
(45, '2018-04-26 09:41:19', 11, 'DELETE FROM alumno where IdAlumno =89', '192.168.84.95'),
(46, '2018-04-26 09:41:20', 11, 'SELECT * FROM alumno', '192.168.84.95'),
(47, '2018-04-26 09:41:20', 11, 'SELECT * FROM materia', '192.168.84.95'),
(48, '2018-04-26 09:41:23', 11, 'DELETE FROM alumno where IdAlumno =90', '192.168.84.95'),
(49, '2018-04-26 09:41:23', 11, 'SELECT * FROM alumno', '192.168.84.95'),
(50, '2018-04-26 09:41:23', 11, 'SELECT * FROM materia', '192.168.84.95'),
(51, '2018-04-26 09:41:28', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(52, '2018-04-26 09:41:28', 14, 'SELECT * FROM materia', '192.168.84.77'),
(53, '2018-04-26 09:41:38', 11, 'SELECT * FROM materia', '192.168.84.95'),
(54, '2018-04-26 09:42:01', 11, 'SELECT * FROM materia', '192.168.84.95'),
(55, '2018-04-26 09:42:13', 11, 'SELECT * FROM materia', '192.168.84.95'),
(56, '2018-04-26 09:43:02', 12, 'SELECT * FROM alumno', '192.168.84.141'),
(57, '2018-04-26 09:43:02', 12, 'SELECT * FROM materia', '192.168.84.141'),
(58, '2018-04-26 09:44:47', 11, 'SELECT * FROM materia', '192.168.84.95'),
(59, '2018-04-26 09:44:53', 3, 'SELECT * FROM materia', '192.168.84.200'),
(60, '2018-04-26 09:44:59', 3, 'SELECT * FROM materia', '192.168.84.200'),
(61, '2018-04-26 09:45:24', 14, 'SELECT * FROM materia', '192.168.84.77'),
(62, '2018-04-26 09:47:28', 3, 'SELECT * FROM materia', '192.168.84.200'),
(63, '2018-04-26 09:47:31', 3, 'SELECT * FROM materia', '192.168.84.200'),
(64, '2018-04-26 09:47:34', 3, 'SELECT * FROM materia', '192.168.84.200'),
(65, '2018-04-26 09:47:36', 3, 'SELECT * FROM materia', '192.168.84.200'),
(66, '2018-04-26 09:53:01', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(67, '2018-04-26 09:53:36', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(68, '2018-04-26 09:54:03', 14, 'SELECT * FROM materia', '192.168.84.77'),
(69, '2018-04-26 09:54:38', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(70, '2018-04-26 09:55:07', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(71, '2018-04-26 09:55:07', 14, 'INSERT INTO alumno(nombre,apellido_p,apellido_m) values(Kate,Martinez,Hernandez);', '192.168.84.77'),
(72, '2018-04-26 09:55:09', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(73, '2018-04-26 09:55:20', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(74, '2018-04-26 09:55:20', 14, 'SELECT * FROM materia', '192.168.84.77'),
(75, '2018-04-26 09:59:21', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(76, '2018-04-26 10:18:40', 14, 'SELECT * FROM alumno', '192.168.84.77'),
(77, '2018-04-26 10:18:40', 14, 'INSERT INTO alumno(nombre,apellido_p,apellido_m) values(grgf,hghg,hhgh);', '192.168.84.77'),
(78, '2018-04-26 10:18:42', 14, 'SELECT * FROM alumno', '192.168.84.77');

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
(3, 'Jose Miguel', 'josemiguel', 863140005),
(4, 'Alan', 'alan', 558071664),
(5, 'Alex', 'alex', 1728570346),
(6, 'Daniel', 'daniel', NULL),
(7, 'Miguel', 'miguel', 715304909),
(8, 'Dogo', 'dogo', 381451262),
(9, 'Grecia', 'grecia', 1477833330),
(10, 'Leonardo', 'leonardo', 266118018),
(11, 'Fer', 'fer', 1470343621),
(12, 'Mony', 'mony', 53530752),
(13, 'Kate', 'kate', 516427773),
(14, 'Faty', 'faty', 934394577);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `IdMateria` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`IdMateria`, `Nombre`, `Carrera`) VALUES
(1, 'K-Pop', 1),
(2, 'BTS', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`IdCarrera`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD PRIMARY KEY (`IdCursa`),
  ADD KEY `IdAlumno` (`IdAlumno`),
  ADD KEY `IdMateria` (`IdMateria`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`IdLog`),
  ADD KEY `User` (`User`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`IdMateria`),
  ADD KEY `Carrera` (`Carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `IdCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
  MODIFY `IdCursa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `IdLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `IdMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`IdAlumno`) REFERENCES `alumno` (`IdAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`IdMateria`) REFERENCES `materia` (`IdMateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`User`) REFERENCES `login` (`IdLogin`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`Carrera`) REFERENCES `carrera` (`IdCarrera`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
