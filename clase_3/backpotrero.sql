-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-10-2021 a las 14:00:07
-- Versión del servidor: 8.0.26
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `backpotrero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `stock` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `dni`, `email`, `password`) VALUES
('Muriel', 'Bressan', 41991641, 'murielvbressan@gmail.com', '$2y$10$exFaztnn3HGfPK9J1mj1Yee7NHtanKkIWu.xcZywkjL2nxJZZzfsG'),
('Muriel', 'Bressan', 41991642, 'murielvbressan@gmail.com', '$2y$10$VbKWuB1.MmclEgN1vrALBeOGKJxxo9Mh8o9x303CNOkIBy25Bdm5i'),
('Gizmo', 'Obi Wan', 1, 'helloimgizmo@gmail.com', '$2y$10$iuqf61X5QyTGd1/gBbAnhOdtGMfQpbvPbh36HsoCRmK5qRkB4kSfq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
