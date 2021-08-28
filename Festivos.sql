-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-05-2019 a las 13:37:02
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `CursoPHP`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Festivos`
--

CREATE TABLE `Festivos` (
  `ID` int(11) NOT NULL,
  `Día` int(2) UNSIGNED ZEROFILL NOT NULL,
  `Mes` int(2) UNSIGNED ZEROFILL NOT NULL,
  `Año` year(4) NOT NULL,
  `Desde_las` time NOT NULL,
  `Hasta_las` time NOT NULL,
  `Campaña` varchar(100) NOT NULL,
  `Descripción` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Festivos`
--

INSERT INTO `Festivos` (`ID`, `Día`, `Mes`, `Año`, `Desde_las`, `Hasta_las`, `Campaña`, `Descripción`) VALUES
(1, 10, 04, 2019, '18:00:00', '23:59:59', 'Madrid', 'Nacimiento de Jaimee'),
(3, 03, 04, 2019, '00:00:01', '23:59:59', 'Nacional', 'Puente de Mayo :D'),
(4, 04, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', ''),
(30, 04, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'dasda'),
(31, 04, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'dasda'),
(32, 11, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'das'),
(33, 04, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'dasda'),
(34, 04, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'dasda'),
(35, 03, 05, 2019, '00:00:00', '00:00:00', 'Barcelona', 'dasda'),
(36, 02, 05, 2019, '18:00:00', '19:00:00', 'Barcelona', 'ASD'),
(37, 03, 05, 2019, '00:00:00', '23:59:59', 'Madrid', 'dsad'),
(39, 08, 06, 2019, '00:00:00', '00:00:00', 'Nacional', 'da'),
(40, 02, 05, 2019, '00:00:00', '00:00:00', 'Madrid', 'dasda'),
(41, 08, 05, 2019, '00:00:00', '00:00:00', 'Nacional', 'dada'),
(42, 10, 05, 2019, '00:00:00', '00:00:00', 'Madrid', 'dasda'),
(43, 02, 05, 2019, '00:00:01', '00:00:00', 'Sevilla', 'ad'),
(44, 01, 05, 2019, '00:00:00', '00:00:00', 'Madrid', 'Fin del Grado Superior');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Festivos`
--
ALTER TABLE `Festivos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Festivos`
--
ALTER TABLE `Festivos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
