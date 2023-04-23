-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2023 a las 11:49:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dss-inv-aplicada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Salario` double(100,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombres`, `Apellidos`, `Edad`, `Salario`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Antonio', 'Santana Torres', 45, 777.66, NULL, NULL),
(2, 'Maria Jose', 'Flores Castillos', 38, 453.25, NULL, NULL),
(3, 'Miguel Alexander', 'Santos Campos', 25, 303.66, '2023-04-13 13:39:07', '2023-04-13 13:39:07'),
(5, 'Miguel Alexander', 'Santos Campos', 25, 303.66, '2023-04-13 14:54:40', '2023-04-13 14:54:40'),
(6, 'Nombres Modificados PUT', 'Apellidos Modificados PUT', 13, 101.01, '2023-04-13 14:56:24', '2023-04-13 15:47:17'),
(7, 'Nombres Modificados PATCH', 'Apellidos Modificados PATCH', 13, 101.01, '2023-04-13 14:58:58', '2023-04-13 15:47:31'),
(8, 'Miguel Alexander', 'Santos Campos', 25, 303.66, '2023-04-13 15:04:07', '2023-04-13 15:04:07'),
(9, 'Miguel Alexander', 'Santos Campos', 25, 303.66, '2023-04-13 15:08:17', '2023-04-13 15:08:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
