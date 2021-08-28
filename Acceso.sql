-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-05-2019 a las 13:28:40
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
-- Estructura de tabla para la tabla `Acceso`
--

CREATE TABLE `Acceso` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Autorización` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Acceso`
--

INSERT INTO `Acceso` (`ID`, `Nombre`, `Apellidos`, `Usuario`, `Contraseña`, `Email`, `Autorización`) VALUES
(1, 'Daniel', 'Orovio Fernández', 'Daniel', '262031397020fd8df478ec13b4b096c5', 'asdajdhjha@gmail.com', ''),
(2, 'Fernando', 'Rodriguez García', 'Fernando', '827ccb0eea8a706c4c34a16891f84e7b', 'sdadasd@gmail.com', 'Si'),
(18, 'Arturo', 'Rodriguez Lopez', 'Arturo', '827ccb0eea8a706c4c34a16891f84e7b', 'Arturo@gmail.com', ''),
(19, 'afsd', 'asf', 'asf', '7b064dad507c266a161ffc73c53dcdc5', 'fas@gmail.com', ''),
(20, 'Jaime', 'Gómez', 'jim', '5e027396789a18c37aeda616e3d7991b', 'jaime@gmail.com', 'No'),
(46, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(47, 'ad', 'ad', 'ad', '523af537946b79c4f8369ed39ba78605', 'ad@gmail.com', ''),
(48, 'a', 'ad', 'ad', '523af537946b79c4f8369ed39ba78605', 'ad@gmail.com', ''),
(49, 'da', 'ad', 'ad', '5ca2aa845c8cd5ace6b016841f100d82', 'ad@gmail.com', ''),
(50, 'ma', 'ad', 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'miau@gmail.com', ''),
(51, 'ad', 'ad', 'ad', '523af537946b79c4f8369ed39ba78605', 'ad@gmail.com', ''),
(52, 'sda', 'da', 'ad', '523af537946b79c4f8369ed39ba78605', 'ad@gmail.com', ''),
(53, 'da', 'ad', 'ad', '523af537946b79c4f8369ed39ba78605', 'ad@gmail.com', ''),
(54, 'da', 'dada', 'adad', '44d9dbb60b6c2c24922cd62d249412f9', 'ad@gmail.com', ''),
(55, 'ad', 'asd', 'ads', '5f039b4ef0058a1d652f13d612375a5b', 'dsada@gmail.com', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Acceso`
--
ALTER TABLE `Acceso`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Acceso`
--
ALTER TABLE `Acceso`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
