-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 23:47:50
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `srl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nombre`, `apellidos`, `correo`, `usuario`, `clave`, `telefono`) VALUES
('Jeanmely', 'Rojas Gomez', 'Jeanmely17@outlook.es', 'Jean', '123412', 2147483647),
('Jeanmely', 'Rojas Gomez', 'Jean17@outlook.es', 'Karmin', '123456', 2147483647),
('Anny MarÃ­a', 'Santana Cirineo', 'Anny@gmail.com', 'Anny', '123457', 2147483647),
('Maria Luisa', 'Perez Rodriguez', 'Maria13@hotmail.com', 'Nani', '102863', 809763424),
('Camila', 'Rojas Nunez', 'Camila06@hotmail.com', 'Camila', '06101718', 783724873),
('Marcos', 'Jorge Baez', 'Makho25@gmail.com', 'Makaco', 'turealchapichapi25', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
