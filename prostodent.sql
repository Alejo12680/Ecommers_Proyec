-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 07:17:16
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
-- Base de datos: `prostodent`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'estetica_dental'),
(2, 'instrumento _dental'),
(3, 'químico_dental'),
(4, 'protesis_dentales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `nombre_pedido` varchar(50) NOT NULL,
  `precio_pedido` decimal(20,3) NOT NULL,
  `cantidad_pedido` int(100) NOT NULL,
  `total_pedido` decimal(20,3) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `nombre_pedido`, `precio_pedido`, `cantidad_pedido`, `total_pedido`, `id_usuario`) VALUES
(1, 'Cepillo Dental Carbon Activado', '50.900', 1, '50.900', 2),
(2, 'Esterilizador de Cepillos UV', '81.900', 2, '163.800', 2),
(3, 'Silicona Dental', '59.900', 2, '119.800', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `img_producto` varchar(50) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `precio_producto` decimal(20,3) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `img_producto`, `nombre_producto`, `precio_producto`, `id_categoria`) VALUES
(1, 'est_producto-1', 'Esterilizador de Cepillos UV', '81.900', 1),
(2, 'est_producto-2', 'Cepillo Dental Carbon Activado', '50.900', 1),
(3, 'est_producto-3', 'Cepillo Dental 360° para Niños', '7.900', 1),
(4, 'est_producto-4', 'Cepillo Dental Balene Doble', '20.900', 1),
(5, 'est_producto-5', 'Cepillo Dental Ultra', '10.900', 1),
(6, 'est_producto-6', 'Cepillo Dental Niño', '9.900', 1),
(7, 'est_producto-7', 'Cepillo Dental Eléctrico', '39.900', 1),
(8, 'est_producto-8', 'Dispensador de Crema Dental', '19.900', 1),
(9, 'est_producto-9', 'Ceda Interdental', '8.900', 1),
(10, 'instru_producto-1', 'Turbina Dental', '32.900', 2),
(11, 'instru_producto-2', 'Kit Dental', '50.900', 2),
(12, 'instru_producto-3', 'Depositor Dental', '160.900', 2),
(13, 'instru_producto-4', 'Kit de Resina Dental', '60.900', 2),
(14, 'instru_producto-5', 'Adhesivo Dental', '19.900', 2),
(15, 'instru_producto-6', 'Postes de Fibra de Vidrio', '108.900', 2),
(16, 'instru_producto-7', 'Pulidor Dental', '44.900', 2),
(17, 'instru_producto-8', 'Molinillo de Hueso', '120.900', 2),
(18, 'instru_producto-9', 'Blanqueador Dental', '38.900', 2),
(19, 'quimi_producto-1', 'Silicona Dental', '59.900', 3),
(20, 'quimi_producto-2', 'Crema Dental', '10.900', 3),
(21, 'quimi_producto-3', 'Resina Dental', '60.900', 3),
(22, 'quimi_producto-4', 'Capsula de Fluor', '20.900', 3),
(23, 'quimi_producto-5', 'Micro Aplicadores', '19.900', 3),
(24, 'quimi_producto-6', 'Vaseline Dental', '58.900', 3),
(25, 'quimi_producto-7', 'Limpiador Dental', '49.900', 3),
(26, 'quimi_producto-8', 'Masilla Dental', '25.900', 3),
(27, 'quimi_producto-9', 'Material Temporization Dental', '96.900', 3),
(28, 'protes_producto-1', 'Sellador Dental', '61.900', 4),
(29, 'protes_producto-2', 'Impresora Dental', '93.900', 4),
(30, 'protes_producto-3', 'Prótesis Dentales', '33.900', 4),
(31, 'protes_producto-4', 'Prótesis de Oro', '98.900', 4),
(32, 'protes_producto-5', 'Prótesis de Plata', '79.900', 4),
(33, 'protes_producto-6', 'Prótesis de Diamante', '190.900', 4),
(34, 'protes_producto-7', 'Dentadura Postiza', '70.900', 4),
(35, 'protes_producto-8', 'Molde Dental', '32.900', 4),
(36, 'protes_producto-9', 'Implantes Dentales', '69.900', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_user` varchar(100) NOT NULL,
  `apellido_user` varchar(200) NOT NULL,
  `documento_user` varchar(20) NOT NULL,
  `ciudad_user` varchar(100) NOT NULL,
  `telefono_user` varchar(20) NOT NULL,
  `correo_user` varchar(100) NOT NULL,
  `contrasena_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_user`, `apellido_user`, `documento_user`, `ciudad_user`, `telefono_user`, `correo_user`, `contrasena_user`) VALUES
(2, 'Fabio Alejandro', 'Ramirez Saavedra ', '1010193284', 'Barranquilla', '3209608273', 'alejo152725@gmail.com', '12345'),
(5, 'yuli andra ', 'leguizamon huertas', '1234568451', 'Bucaramanga', '3057559858', 'horuz2000@hotmail.com', 'abcde');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_usuario_pedido` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `fk_categoria_producto` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_usuario_pedido` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
