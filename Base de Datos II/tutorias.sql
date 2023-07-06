-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2023 a las 17:05:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `Ci` varchar(8) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Ci` int(8) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `TipoTutoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(23) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `Cedula` int(8) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Area` int(45) DEFAULT NULL,
  `MateriasHora` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `id` int(23) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tipo` varchar(45) DEFAULT NULL,
  `alumno_id` int(8) NOT NULL,
  `profesorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`Ci`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Ci`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`Cedula`),
  ADD UNIQUE KEY `Area` (`Area`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumno_id` (`alumno_id`,`profesorId`),
  ADD KEY `profesorId` (`profesorId`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id`) REFERENCES `docente` (`Area`);

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `tutoria_ibfk_1` FOREIGN KEY (`profesorId`) REFERENCES `docente` (`Cedula`),
  ADD CONSTRAINT `tutoria_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`Ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
