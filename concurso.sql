-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 22:33:39
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concurso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doge`
--

CREATE TABLE `doge` (
  `id` int(11) NOT NULL,
  `inscripcionFecha` date DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `raza` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nombreDueño` varchar(255) DEFAULT NULL,
  `concursosAnteriores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doge`
--

INSERT INTO `doge` (`id`, `inscripcionFecha`, `nombre`, `raza`, `sexo`, `edad`, `nombreDueño`, `concursosAnteriores`) VALUES
(2, '2022-06-24', 'Brandom', 'poodle', 'masculino', 2, 'Alex', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doge`
--
ALTER TABLE `doge`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doge`
--
ALTER TABLE `doge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
