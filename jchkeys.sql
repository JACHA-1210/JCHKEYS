-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2023 a las 04:17:57
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
-- Base de datos: `jchkeys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `CP` int(6) NOT NULL,
  `Cuidad` varchar(20) NOT NULL,
  `Numero de Teléfono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id_cliente`, `Nombre`, `Apellidos`, `Correo`, `Contraseña`, `Pais`, `Direccion`, `CP`, `Cuidad`, `Numero de Teléfono`) VALUES
(1, 'Jose', 'Chero', 'asdasdads@gmail.com', 'asdasd', '', '', 0, '', 0),
(2, 'Jose', 'chero', 'asdad@gmail.com', 'asdas', '', '', 0, '', 0),
(3, 'Jose', 'Chero', 'asdasdads@gmail.com', 'asdasd', '', '', 0, '', 0),
(4, 'Jose', 'Chero', 'asdasdads@gmail.com', 'asdasd', '', '', 0, '', 0),
(5, 'Jose', 'Chero', 'asdasdads@gmail.com', 'asdasd', '', '', 0, '', 0),
(7, 'Victro', 'treboles', 'vt12@gmail.com', '123123', '', '', 0, '', 0),
(8, 'Victro', 'treboles', 'vt12@gmail.com', '123123', '', '', 0, '', 0),
(9, 'asdasd', 'asdasda', 'asdadssd@gmail.com', 'asdasdasd', '', '', 0, '', 0),
(10, 'laura', 'dominguez', 'asdasd@gmail.com', 'asdasdasdad', '', '', 0, '', 0),
(11, 'Diaren', 'Jonchupa', 'diarenjon@gmail.com', 'chupa', '', '', 0, '', 0),
(12, 'xef1', 'garcias', 'x.garcias@gmail.com', '12345', '', '', 0, '', 0),
(13, 'asda', 'asda', 'jose@gmail.com', 'asda', '', '', 0, '', 0),
(14, 'asda', 'asda', 'jose@gmail.com', 'asda', '', '', 0, '', 0),
(15, 'asdasd', 'asdasd', 'asd@gmail.com', 'asdasd', '', '', 0, '', 0),
(16, 'asdasd', 'asdasd@gmail.com', 'asdasd@gmail.com', 'asdasd', '', '', 0, '', 0),
(17, 'asda', 'asda', 'asd@gmail.com', 'asda', '', '', 0, '', 0),
(18, 'asda', 'asda', 'jose@gmail.com', 'asdasd', '', '', 0, '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
