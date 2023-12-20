-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2023 a las 13:04:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes_t3_examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntosderecogida`
--

CREATE TABLE `puntosderecogida` (
  `Id` int(11) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `ocupadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntosderecogida`
--

INSERT INTO `puntosderecogida` (`Id`, `localidad`, `direccion`, `capacidad`, `ocupadas`) VALUES
(18, 'Gijon', 'Calle Corrida, Gijon', 14, 14),
(19, 'Oviedo', 'Calle Melquiades Alvarez, Oviedo', 15, 1),
(20, 'Aviles', 'Plaza de Espana, Aviles', 6, 5),
(21, 'Gijon', 'Avenida de la Costa, Gijon', 11, 5),
(22, 'Oviedo', 'Calle Independencia, Oviedo', 7, 6),
(23, 'Aviles', 'Avenida de Alemania, Aviles', 20, 4),
(24, 'Gijon', 'Plaza Mayor, Gijon', 18, 16),
(25, 'Oviedo', 'Plaza de la Escandalera, Oviedo', 5, 5),
(26, 'Aviles', 'Calle de La Fruta, Aviles', 17, 0),
(27, 'Gijon', 'Calle Los Moros, Gijon', 10, 1),
(28, 'Oviedo', 'Calle Fruela, Oviedo', 5, 3),
(29, 'Aviles', 'Calle de Rivero, Aviles', 10, 7),
(30, 'Gijon', 'Calle Instituto, Gijon', 10, 9),
(31, 'Oviedo', 'Calle Uria, Oviedo', 9, 6),
(32, 'Aviles', 'Calle de La Camara, Aviles', 5, 5),
(33, 'Gijon', 'camino aaa', 23, 4),
(34, 'Oviedo', 'eepa', 233, 34),
(35, 'Aviles', 'ccco', 325, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `puntosderecogida`
--
ALTER TABLE `puntosderecogida`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `puntosderecogida`
--
ALTER TABLE `puntosderecogida`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
