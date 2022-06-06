-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 19:51:22
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
-- Base de datos: `ventas-suscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `perfil` text NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `suscripcion` int(11) NOT NULL,
  `id_suscripcion` text DEFAULT NULL,
  `ciclo_pago` int(11) DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  `verificacion` int(11) NOT NULL,
  `email_encriptado` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `enlace_afiliado` text DEFAULT NULL,
  `patrocinador` text DEFAULT NULL,
  `paypal` text DEFAULT NULL,
  `pais` text DEFAULT NULL,
  `codigo_pais` text DEFAULT NULL,
  `telefono_movil` text DEFAULT NULL,
  `firma` text DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `perfil`, `nombre`, `email`, `password`, `suscripcion`, `id_suscripcion`, `ciclo_pago`, `vencimiento`, `verificacion`, `email_encriptado`, `foto`, `enlace_afiliado`, `patrocinador`, `paypal`, `pais`, `codigo_pais`, `telefono_movil`, `firma`, `fecha_contrato`, `fecha`) VALUES
(1, 'admin', 'Administrador', 'info@info.cl', '123456', 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'info@info.cl', NULL, NULL, NULL, NULL, NULL, '2022-05-31 16:34:49'),
(2, 'usuario', 'Francisco', 'fespinoza@servione.cl', '123456', 0, NULL, NULL, NULL, 0, 'bf4fd435ae68e9d14d45d82f0cd62327', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 13:01:53'),
(3, 'usuario', 'Diego', 'diego@gmail.com', '123654', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:30:58'),
(4, 'usuario', 'Jose', 'jose@gmail.com', '123654', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:21'),
(5, 'usuario', 'Agustin', 'agustin@gmail.com', '123654', 0, NULL, NULL, NULL, 0, 'e5916fa5b1b85e94dcbeef1c7be70132', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:56'),
(6, 'usuario', 'Carolina', 'carolina@gmail.com', '123654', 0, NULL, NULL, NULL, 0, '38ad84cbc67a6e587e34df5df5bdb41c', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:38:11'),
(7, 'usuario', 'Marcia', 'marcia@gmail.com', '123654', 0, NULL, NULL, NULL, 0, '0bb2856c9b52ff282c1ba90c94f9f061', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:40:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
