-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2019 a las 22:18:46
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `fechanaci` date NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `sexo` char(1) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellidos`, `fechanaci`, `direccion`, `email`, `sexo`, `mensaje`) VALUES
(3, 'franshis lhomans', 'rojas chore', '1995-02-02', 'tumbes tumbes', 'franshisrojas@gmail.com', 'H', 'suscribete a mi canal'),
(5, 'franshi lhomansss', 'rojas chore', '2019-06-06', 'las chicas', 'franshis_chore@hotmail.com', 'H', 'holaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'franshis lhomans', 'Rojas Chore', '2019-06-06', 'tumbes', 'franshis_chore@hotmail.com', 'H', 'HOLA BIENVENIDOS A MI CANAL\r\n\r\nNO OLVIDEN SUSCRIBIRSE PARA SEGUIR\r\nCOMPARTIENDO VIDEOS Y DARLE LIKE A MI VIDEOS '),
(7, 'franshis lhomans', 'Rojas Chore', '2019-06-06', 'tumbes', 'franshis_chore@hotmail.com', 'H', 'HOLA BIENVENIDOS A MI CANAL\r\n\r\nNO OLVIDEN SUSCRIBIRSE PARA SEGUIR\r\nCOMPARTIENDO VIDEOS Y DARLE LIKE A MI VIDEOS '),
(8, 'JOSHEP ', 'ALBURQUEQUE BARCO', '2019-06-06', 'PUYANGO TUMBES', 'JOSHEP@HOTMAIL.COM', 'H', 'NO OLVIDES SUSCRIBIRTE Y COMPARTIR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
