-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2018 a las 18:37:43
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Jesus ', 'Piña', 'Garcia'),
(2, 'Marcos Gerardo', 'De la Cruz', 'Orozco'),
(3, 'Rafael Alejandro', 'Crespo', 'Ozuna'),
(4, 'José Miguel ', 'Peréz', 'Gonzalez'),
(5, 'Miguel Angel ', 'Nuño ', 'Aguila'),
(6, 'María Fernanda', 'Gonzalez', 'Lonzano'),
(7, 'Mónica Daniela ', 'Gómez', 'Gómez'),
(8, 'Salma Katherine', 'Martínez', 'Hernández'),
(9, 'Grecia Isabel', 'Lasso', 'López'),
(10, 'Leonardo Antonio', 'Martínez', 'Ortega'),
(11, 'Diego Arturo', 'Hernández', 'Elias'),
(12, 'Francisco Daniel', 'Castellanos ', 'Miranda'),
(13, 'Alan Ricardo', 'López', 'Jauregui');

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

--
-- Volcado de datos para la tabla `cursa`
--

INSERT INTO `cursa` (`IdCursa`, `IdAlumno`, `IdMateria`, `Calificacion`) VALUES
(1, 4, 3, 70),
(2, 7, 5, 90),
(3, 6, 3, 99),
(4, 8, 2, 90),
(5, 1, 5, 85),
(6, 2, 3, 83),
(7, 5, 2, 86),
(8, 3, 5, 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `IdLogin` int(11) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`IdLogin`, `User`, `Password`) VALUES
(1, 'Piña', 'piña'),
(2, 'Trapos', 'trapos'),
(3, 'Jose Miguel', 'josemiguel'),
(4, 'Alan', 'alan'),
(5, 'Alex', 'alex'),
(6, 'Daniel', 'daniel'),
(7, 'Miguel', 'miguel'),
(8, 'Dogo', 'dogo'),
(9, 'Grecia', 'grecia'),
(10, 'Leonardo', 'leonardo'),
(11, 'Fer', 'fer'),
(12, 'Mony', 'mony'),
(13, 'Kate', 'kate');

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
(1, 'Matemáticas'),
(2, 'Inglés'),
(3, 'Programación Avanzada'),
(4, 'Sistemas Embebidos'),
(5, 'Sistemas Distribuidos');

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
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
  MODIFY `IdCursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `IdMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
  ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`IdAlumno`) REFERENCES `alumno` (`IdAlumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`IdMateria`) REFERENCES `materia` (`IdMateria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
