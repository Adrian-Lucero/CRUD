-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2023 a las 01:41:30
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
-- Base de datos: `micafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cafe`
--

CREATE TABLE `cafe` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `Tamaño` varchar(20) DEFAULT '0',
  `date_registro` date DEFAULT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cafe`
--

INSERT INTO `cafe` (`id`, `nombre`, `precio`, `Tamaño`, `date_registro`, `estado`) VALUES
(1, 'Expreso', 70, 'Chico', '2023-04-26', 'disponible'),
(2, 'Expreso', 100, 'Mediano', '2023-04-26', 'disponible'),
(3, 'Americano', 75.9, 'Chico', '2023-04-26', 'disponible'),
(4, 'Americano', 105.9, 'Mediano', '2023-04-26', 'disponible');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
