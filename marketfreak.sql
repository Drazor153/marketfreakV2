-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2022 a las 03:45:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marketfreak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`email`, `nombre`, `password`) VALUES
('admin@marketfreak.cl', 'Super Mod', 'd0630163e27c19ee62e6d3163f629b9ff8b5d9c54a64062233551152c6cb02a6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `id_carro` int(11) NOT NULL,
  `email_usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `precio_total` int(11) NOT NULL DEFAULT 0,
  `fecha_pago` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `carro`
--

INSERT INTO `carro` (`id_carro`, `email_usuario`, `precio_total`, `fecha_pago`) VALUES
(3, 'fabian@correo.cl', 90000, 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_producto`
--

CREATE TABLE `linea_producto` (
  `id_linea` int(11) NOT NULL,
  `id_carro` int(11) NOT NULL,
  `codigo_producto` varchar(10) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_linea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `linea_producto`
--

INSERT INTO `linea_producto` (`id_linea`, `id_carro`, `codigo_producto`, `cantidad`, `precio_linea`) VALUES
(2, 3, 'ZD001', 1, 30000),
(3, 3, 'ZD001', 1, 30000),
(4, 3, 'ZD001', 1, 30000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `precio`, `imagen`, `descripcion`, `stock`) VALUES
('ZD001', 'Figura Link TLOZ', 30000, 'asdqew.jpg', 'Figura de Link pertenciente a la franquicia The Legend of Zelda', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(25) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(45) COLLATE utf8_bin NOT NULL,
  `rut` varchar(10) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `nombre`, `apellido`, `telefono`, `direccion`, `rut`, `password`, `saldo`) VALUES
('fabian@correo.cl', 'Fabian', 'Justo', '12345', 'lobos 123', '123456789', 'f85059833014b99ca026f220a6504d30029dd9f6b2f127e4960c29209e5a62f7', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id_carro`),
  ADD KEY `carro_ibfk_1` (`email_usuario`);

--
-- Indices de la tabla `linea_producto`
--
ALTER TABLE `linea_producto`
  ADD PRIMARY KEY (`id_linea`),
  ADD KEY `linea_producto_ibfk_1` (`id_carro`),
  ADD KEY `linea_producto_ibfk_2` (`codigo_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carro`
--
ALTER TABLE `carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `linea_producto`
--
ALTER TABLE `linea_producto`
  MODIFY `id_linea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`email_usuario`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `linea_producto`
--
ALTER TABLE `linea_producto`
  ADD CONSTRAINT `linea_producto_ibfk_1` FOREIGN KEY (`id_carro`) REFERENCES `carro` (`id_carro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linea_producto_ibfk_2` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
