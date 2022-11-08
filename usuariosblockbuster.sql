-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 02:14:26
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuariosblockbuster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosblockbuster`
--

CREATE TABLE `usuariosblockbuster` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `tipo_producto` varchar(100) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `domicilio` varchar(200) NOT NULL,
  `fecha_rentacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosblockbuster`
--

INSERT INTO `usuariosblockbuster` (`id`, `nombre_producto`, `tipo_producto`, `nombre_cliente`, `domicilio`, `fecha_rentacompra`) VALUES
(1, '', 'Pelicula', 'Brad Buttowski', 'asd', '0456-03-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariosblockbuster`
--
ALTER TABLE `usuariosblockbuster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariosblockbuster`
--
ALTER TABLE `usuariosblockbuster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
