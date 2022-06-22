-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 21-06-2022 a las 23:38:12
=======
<<<<<<< HEAD
-- Tiempo de generación: 21-06-2022 a las 23:38:12
=======
-- Tiempo de generación: 07-06-2022 a las 19:49:21
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
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
-- Base de datos: `ventas_suscripcion`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` text NOT NULL,
  `ruta_categoria` text NOT NULL,
  `descripcion_categoria` text NOT NULL,
  `icono_categoria` text NOT NULL,
  `color_cayegoria` text NOT NULL,
  `fecha_categoria` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `ruta_categoria`, `descripcion_categoria`, `icono_categoria`, `color_cayegoria`, `fecha_categoria`) VALUES
(1, 'Cuerpo Activo', 'cuerpo-activo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse egestas nunc nunc, eu ultricies tellus fringilla et. Sed tristique ipsum aliquam erat pharetra tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris consectetur massa nisl, sed pulvinar ante sollicitudin ut.', 'fas fa-heart', 'purple', '2022-06-21 20:37:39'),
(2, 'Mente Sana', 'mente-sana', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia.', 'fas fa-puzzle-piece', 'info', '2022-06-21 20:37:39'),
(3, 'Espíritu Libre', 'espiritu-libre', 'Fusce non nibh diam. Praesent vestibulum semper auctor. Vivamus id ligula nulla. Quisque imperdiet sodales pulvinar. Integer eget aliquet odio, convallis ultrices sapien.', 'fas fa-wind', 'primary', '2022-06-21 20:37:39');

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
=======
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
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
(1, 'admin', 'Administrador', 'info@info.cl', '$2a$07$asxx54ahjppf45sd87a5auoHZieF1WP3IvqLF4L7zYOP6FW6t7xwS', 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'info@info.cl', NULL, NULL, NULL, NULL, NULL, '2022-05-31 16:34:49'),
(2, 'usuario', 'Francisco', 'fespinoza@servione.cl', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'bf4fd435ae68e9d14d45d82f0cd62327', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 13:01:53'),
<<<<<<< HEAD
(3, 'usuario', 'Diego', 'diego@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, 'I-7L1BNK5H2NN9', 1, '2022-07-20', 1, 'a9c033f9b68a989437c64ca2bd228c5e', 'vistas/img/usuarios/3/268.jpg', 'diego-3', 'academy-of-life', 'sb-47bcke17018321@personal.example.com', 'Chile', 'CL', '+56 9 6325 8741', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"250\" height=\"61\"><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 32 18 c 0.09 0.03 4.21 0.87 5 2 c 1.71 2.47 3 7.2 4 11 c 2.36 8.97 5.83 22.23 6 27 c 0.03 0.88 -4.15 1.71 -5 1 c -2.17 -1.8 -7 -11 -7 -11\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 4 2 c 0.67 0 25.27 -0.48 38 0 c 5.07 0.19 9.98 1.07 15 2 c 4.1 0.76 8.29 1.59 12 3 c 3.09 1.18 6.37 3.03 9 5 c 2.53 1.89 5.1 4.53 7 7 c 1.28 1.67 2.73 4.02 3 6 c 0.64 4.73 0.94 11.49 0 16 c -0.55 2.66 -3.06 5.74 -5 8 c -1.9 2.21 -7 6 -7 6\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 100 20 c 0.05 0.04 2.41 1.17 3 2 c 0.89 1.24 1.84 3.35 2 5 c 0.47 4.9 0.46 10.99 0 16 c -0.18 1.98 -1.64 4.05 -2 6 l 0 5\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 97 8 l 1 1\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 122 24 c 0.02 0.24 0.27 9.45 1 14 c 0.59 3.7 1.35 9.35 3 11 c 1.16 1.16 5.56 0.51 8 0 c 3.56 -0.75 11 -4 11 -4\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 124 26 c 0.18 0 6.8 0.44 10 0 c 3.96 -0.54 8.34 -1.78 12 -3 c 1.07 -0.36 3 -2 3 -2\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 122 12 c 0.26 0 9.92 0.33 15 0 c 10.54 -0.69 31 -3 31 -3\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 171 10 c -0.31 0.24 -13.26 9.06 -18 14 c -2.32 2.42 -4.01 6.82 -5 10 c -0.53 1.71 -0.52 4.32 0 6 c 0.69 2.25 2.24 5.83 4 7 c 2.49 1.66 7.27 2.22 11 3 c 2.64 0.56 5.29 0.89 8 1 c 5.37 0.22 10.84 0.26 16 0 c 1.33 -0.07 3.36 -0.25 4 -1 c 0.98 -1.14 1.67 -4.04 2 -6 c 0.31 -1.86 0.37 -4.33 0 -6 c -0.22 -1 -1.2 -2.2 -2 -3 c -1.1 -1.1 -2.68 -2.56 -4 -3 c -1.32 -0.44 -3.35 -0.18 -5 0 c -4.35 0.48 -8.94 0.8 -13 2 c -4.7 1.39 -9.58 3.57 -14 6 c -5.88 3.22 -17.44 11.12 -17 11 c 1.27 -0.34 54 -21 54 -21\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 190 21 c 0.12 0.18 4.52 7.07 7 10 c 1.02 1.2 2.6 2.3 4 3 c 1.78 0.89 4.05 1.64 6 2 c 1.55 0.28 3.68 0.44 5 0 c 1.32 -0.44 3.58 -1.84 4 -3 c 0.67 -1.85 0.18 -5.33 0 -8 c -0.16 -2.36 -0.3 -4.89 -1 -7 c -0.89 -2.67 -2.51 -5.45 -4 -8 c -0.83 -1.43 -1.87 -3.03 -3 -4 c -1.01 -0.87 -2.65 -1.82 -4 -2 c -5.74 -0.75 -16.21 -2.61 -19 -1 c -1.76 1.02 -0.68 8.23 0 12 c 1.25 6.85 3.69 14.07 6 21 c 1.04 3.12 2.34 6.29 4 9 c 1.92 3.14 4.59 6.35 7 9 c 0.76 0.84 1.96 1.69 3 2 c 2.03 0.61 4.64 0.82 7 1 c 2 0.15 4.18 0.33 6 0 c 1.63 -0.3 3.65 -1.06 5 -2 c 1.77 -1.24 3.64 -3.25 5 -5 c 0.86 -1.11 1.71 -2.7 2 -4 c 0.32 -1.46 0.25 -3.41 0 -5 c -0.4 -2.63 -0.91 -5.67 -2 -8 c -1.44 -3.05 -3.76 -6.39 -6 -9 c -1.62 -1.89 -3.86 -4.1 -6 -5 c -3.66 -1.54 -8.94 -2.57 -13 -3 c -1.85 -0.2 -4.24 0.3 -6 1 c -2.98 1.19 -6.76 2.91 -9 5 c -2.35 2.19 -4.79 6.17 -6 9 c -0.56 1.31 -0.65 3.92 0 5 c 1.01 1.69 3.92 4.75 6 5 c 7.2 0.87 18.32 0.16 27 -1 c 6 -0.8 12.25 -2.84 18 -5 c 4.81 -1.81 14.56 -6.89 14 -7 c -1.04 -0.21 -19.22 2 -29 4 c -40.38 8.24 -85.89 20.69 -118 26 c -2.74 0.45 -9.77 -4.8 -9 -5 c 8.35 -2.17 72.51 -15.05 109 -21 c 8.55 -1.39 26.45 -1.15 26 -1 c -1.03 0.34 -38.5 8.16 -59 12 c -18.3 3.43 -34.5 5.95 -53 9 c -15.33 2.53 -29.1 5.3 -44 7 c -8.7 0.99 -24.58 1.71 -26 1 c -0.79 -0.39 7.7 -6.16 12 -8 c 16.22 -6.95 33.7 -12 51 -19 c 13.23 -5.35 24.82 -11.86 38 -17 c 14.71 -5.74 42.41 -14.39 44 -15 c 0.17 -0.07 -3.39 -0.31 -5 0 c -60.85 11.53 -168.96 32.65 -185 36 l 3 2\"/></svg>', '2022-06-20', '2022-06-01 16:30:58'),
(4, 'usuario', 'Jose', 'jose@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:21'),
(5, 'usuario', 'Agustin', 'agustin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'e5916fa5b1b85e94dcbeef1c7be70132', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:56'),
(6, 'usuario', 'Carolina', 'carolina@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, '38ad84cbc67a6e587e34df5df5bdb41c', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:38:11'),
(7, 'usuario', 'Marcia', 'marcia@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, 'I-D14X7AVX2GXF', 1, '2022-07-20', 1, '0bb2856c9b52ff282c1ba90c94f9f061', 'vistas/img/usuarios/7/762.jpg', 'marcia-7', 'academy-of-life', 'sb-47bcke17018321@personal.example.com', 'Chile', 'CL', '+56 9 8745 6321', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"267\" height=\"77\"><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 23 72 c 0.02 -0.12 1.36 -4.84 1 -7 c -1.82 -10.95 -5.75 -23.1 -8 -35 c -1.13 -6 -1.58 -11.9 -2 -18 c -0.26 -3.71 -0.19 -11.27 0 -11 c 0.33 0.46 3.58 11.76 5 18 c 3.03 13.29 5.52 25.6 8 39 c 0.94 5.09 0.52 11.66 2 15 c 0.66 1.48 5.63 3.89 6 3 c 1.79 -4.33 4.37 -21.4 6 -32 c 0.35 -2.28 -0.12 -7.23 0 -7 c 0.41 0.81 4.79 15.63 8 23 c 2.42 5.56 7.87 16.66 9 16 c 1.43 -0.84 2.61 -15.23 3 -23 c 0.62 -12.4 -0.21 -37.61 0 -37 c 0.35 1 7.2 56.06 8 60 c 0.09 0.44 2.59 -3.96 3 -6 c 1.16 -5.81 1.03 -12.61 2 -19 c 0.73 -4.79 2.39 -9.27 3 -14 c 0.73 -5.62 0.54 -17.62 1 -17 c 1.03 1.39 8.09 24.18 13 36 c 2.47 5.94 8.06 15.87 9 17 c 0.25 0.3 0.96 -3.33 1 -5 c 0.29 -11.15 0.26 -22.48 0 -34 c -0.08 -3.4 -1.06 -10.17 -1 -10 c 0.09 0.27 1.7 10.64 3 16 c 1.41 5.83 3.09 11.27 5 17 c 1.5 4.51 3.06 8.9 5 13 c 1 2.12 3.57 6.43 4 6 c 0.72 -0.72 1.7 -7.98 2 -12 c 0.37 -4.96 0.5 -10.01 0 -15 c -1.18 -11.76 -5 -34.38 -5 -35 c 0 -0.5 2.74 18.78 5 28 c 1.76 7.18 4.25 14.23 7 21 c 1.56 3.83 4.1 10.49 6 11 c 1.73 0.46 7.52 -4.29 9 -7 c 1.98 -3.63 2.65 -9.99 3 -15 c 0.64 -9.16 -0.61 -23.91 0 -28 c 0.09 -0.6 2.92 0.34 4 1 c 4.52 2.76 9.08 6.92 14 10 c 5.89 3.68 11.82 7.46 18 10 c 6.56 2.69 14.02 4.89 21 6 c 7.36 1.17 15.53 1.5 23 1 c 7.25 -0.48 15.1 -1.86 22 -4 c 6.77 -2.09 20.36 -8.88 20 -9 c -0.4 -0.13 -15.02 5.7 -23 8 c -16.93 4.87 -33.3 11.83 -50 13 c -62.07 4.36 -188.64 4.02 -192 4 c -0.57 0 21.28 -3.88 32 -5 c 5.3 -0.55 11.16 -1.05 16 0 c 6.8 1.47 20.77 6.98 21 8 c 0.19 0.86 -13.05 -0.08 -19 1 c -4.65 0.84 -13.75 4.94 -14 5 c -0.11 0.03 3.9 -2.47 6 -3 c 21.22 -5.31 43.19 -10.4 66 -15 c 18.12 -3.65 34.61 -6.19 53 -9 c 15.53 -2.38 29.89 -4.22 45 -6 c 2 -0.24 6.11 0 6 0 l -24 0\"/></svg>', '2022-06-20', '2022-06-01 16:40:30'),
(8, 'usuario', 'caro', 'ccontrerasfono@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 0, NULL, NULL, NULL, 1, '93b5b3bf91175dc45886e7c8a12bf3ae', 'vistas/img/usuarios/8/761.jpg', NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 21:32:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `titulo_video` text NOT NULL,
  `descripcion_video` text NOT NULL,
  `medios_video` text NOT NULL,
  `imagen_video` text NOT NULL,
  `vista_gratuita` int(11) NOT NULL,
  `fecha_video` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_video`, `id_cat`, `titulo_video`, `descripcion_video`, `medios_video`, `imagen_video`, `vista_gratuita`, `fecha_video`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/01-video.mp4', 'vistas/img/cuerpo-activo/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/02-video.mp4', 'vistas/img/cuerpo-activo/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(3, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/03-video.mp4', 'vistas/img/cuerpo-activo/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(4, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/04-video.mp4', 'vistas/img/cuerpo-activo/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/05-video.mp4', 'vistas/img/cuerpo-activo/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(6, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/06-video.mp4', 'vistas/img/cuerpo-activo/06-imagen.jpg', 0, '2022-06-21 20:51:18'),
(7, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/01-video.mp4', 'vistas/img/mente-sana/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(8, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/02-video.mp4', 'vistas/img/mente-sana/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(9, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/03-video.mp4', 'vistas/img/mente-sana/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(10, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/04-video.mp4', 'vistas/img/mente-sana/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(11, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/05-video.mp4', 'vistas/img/mente-sana/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(12, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/06-video.mp4', 'vistas/img/mente-sana/06-imagen.jpg', 0, '2022-06-21 20:51:18'),
(13, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/01-video.mp4', 'vistas/img/espiritu-libre/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(14, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/02-video.mp4', 'vistas/img/espiritu-libre/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(15, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/03-video.mp4', 'vistas/img/espiritu-libre/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(16, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/04-video.mp4', 'vistas/img/espiritu-libre/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(17, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/05-video.mp4', 'vistas/img/espiritu-libre/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(18, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/06-video.mp4', 'vistas/img/espiritu-libre/06-imagen.jpg', 0, '2022-06-21 20:51:18');
=======
<<<<<<< HEAD
(3, 'usuario', 'Diego', 'diego@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, 'I-7L1BNK5H2NN9', 1, '2022-07-20', 1, 'a9c033f9b68a989437c64ca2bd228c5e', 'vistas/img/usuarios/3/268.jpg', 'diego-3', 'academy-of-life', 'sb-47bcke17018321@personal.example.com', 'Chile', 'CL', '+56 9 6325 8741', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"250\" height=\"61\"><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 32 18 c 0.09 0.03 4.21 0.87 5 2 c 1.71 2.47 3 7.2 4 11 c 2.36 8.97 5.83 22.23 6 27 c 0.03 0.88 -4.15 1.71 -5 1 c -2.17 -1.8 -7 -11 -7 -11\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 4 2 c 0.67 0 25.27 -0.48 38 0 c 5.07 0.19 9.98 1.07 15 2 c 4.1 0.76 8.29 1.59 12 3 c 3.09 1.18 6.37 3.03 9 5 c 2.53 1.89 5.1 4.53 7 7 c 1.28 1.67 2.73 4.02 3 6 c 0.64 4.73 0.94 11.49 0 16 c -0.55 2.66 -3.06 5.74 -5 8 c -1.9 2.21 -7 6 -7 6\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 100 20 c 0.05 0.04 2.41 1.17 3 2 c 0.89 1.24 1.84 3.35 2 5 c 0.47 4.9 0.46 10.99 0 16 c -0.18 1.98 -1.64 4.05 -2 6 l 0 5\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 97 8 l 1 1\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 122 24 c 0.02 0.24 0.27 9.45 1 14 c 0.59 3.7 1.35 9.35 3 11 c 1.16 1.16 5.56 0.51 8 0 c 3.56 -0.75 11 -4 11 -4\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 124 26 c 0.18 0 6.8 0.44 10 0 c 3.96 -0.54 8.34 -1.78 12 -3 c 1.07 -0.36 3 -2 3 -2\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 122 12 c 0.26 0 9.92 0.33 15 0 c 10.54 -0.69 31 -3 31 -3\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 171 10 c -0.31 0.24 -13.26 9.06 -18 14 c -2.32 2.42 -4.01 6.82 -5 10 c -0.53 1.71 -0.52 4.32 0 6 c 0.69 2.25 2.24 5.83 4 7 c 2.49 1.66 7.27 2.22 11 3 c 2.64 0.56 5.29 0.89 8 1 c 5.37 0.22 10.84 0.26 16 0 c 1.33 -0.07 3.36 -0.25 4 -1 c 0.98 -1.14 1.67 -4.04 2 -6 c 0.31 -1.86 0.37 -4.33 0 -6 c -0.22 -1 -1.2 -2.2 -2 -3 c -1.1 -1.1 -2.68 -2.56 -4 -3 c -1.32 -0.44 -3.35 -0.18 -5 0 c -4.35 0.48 -8.94 0.8 -13 2 c -4.7 1.39 -9.58 3.57 -14 6 c -5.88 3.22 -17.44 11.12 -17 11 c 1.27 -0.34 54 -21 54 -21\"/><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 190 21 c 0.12 0.18 4.52 7.07 7 10 c 1.02 1.2 2.6 2.3 4 3 c 1.78 0.89 4.05 1.64 6 2 c 1.55 0.28 3.68 0.44 5 0 c 1.32 -0.44 3.58 -1.84 4 -3 c 0.67 -1.85 0.18 -5.33 0 -8 c -0.16 -2.36 -0.3 -4.89 -1 -7 c -0.89 -2.67 -2.51 -5.45 -4 -8 c -0.83 -1.43 -1.87 -3.03 -3 -4 c -1.01 -0.87 -2.65 -1.82 -4 -2 c -5.74 -0.75 -16.21 -2.61 -19 -1 c -1.76 1.02 -0.68 8.23 0 12 c 1.25 6.85 3.69 14.07 6 21 c 1.04 3.12 2.34 6.29 4 9 c 1.92 3.14 4.59 6.35 7 9 c 0.76 0.84 1.96 1.69 3 2 c 2.03 0.61 4.64 0.82 7 1 c 2 0.15 4.18 0.33 6 0 c 1.63 -0.3 3.65 -1.06 5 -2 c 1.77 -1.24 3.64 -3.25 5 -5 c 0.86 -1.11 1.71 -2.7 2 -4 c 0.32 -1.46 0.25 -3.41 0 -5 c -0.4 -2.63 -0.91 -5.67 -2 -8 c -1.44 -3.05 -3.76 -6.39 -6 -9 c -1.62 -1.89 -3.86 -4.1 -6 -5 c -3.66 -1.54 -8.94 -2.57 -13 -3 c -1.85 -0.2 -4.24 0.3 -6 1 c -2.98 1.19 -6.76 2.91 -9 5 c -2.35 2.19 -4.79 6.17 -6 9 c -0.56 1.31 -0.65 3.92 0 5 c 1.01 1.69 3.92 4.75 6 5 c 7.2 0.87 18.32 0.16 27 -1 c 6 -0.8 12.25 -2.84 18 -5 c 4.81 -1.81 14.56 -6.89 14 -7 c -1.04 -0.21 -19.22 2 -29 4 c -40.38 8.24 -85.89 20.69 -118 26 c -2.74 0.45 -9.77 -4.8 -9 -5 c 8.35 -2.17 72.51 -15.05 109 -21 c 8.55 -1.39 26.45 -1.15 26 -1 c -1.03 0.34 -38.5 8.16 -59 12 c -18.3 3.43 -34.5 5.95 -53 9 c -15.33 2.53 -29.1 5.3 -44 7 c -8.7 0.99 -24.58 1.71 -26 1 c -0.79 -0.39 7.7 -6.16 12 -8 c 16.22 -6.95 33.7 -12 51 -19 c 13.23 -5.35 24.82 -11.86 38 -17 c 14.71 -5.74 42.41 -14.39 44 -15 c 0.17 -0.07 -3.39 -0.31 -5 0 c -60.85 11.53 -168.96 32.65 -185 36 l 3 2\"/></svg>', '2022-06-20', '2022-06-01 16:30:58'),
(4, 'usuario', 'Jose', 'jose@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:21'),
(5, 'usuario', 'Agustin', 'agustin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'e5916fa5b1b85e94dcbeef1c7be70132', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:56'),
(6, 'usuario', 'Carolina', 'carolina@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, '38ad84cbc67a6e587e34df5df5bdb41c', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:38:11'),
(7, 'usuario', 'Marcia', 'marcia@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 1, 'I-D14X7AVX2GXF', 1, '2022-07-20', 1, '0bb2856c9b52ff282c1ba90c94f9f061', 'vistas/img/usuarios/7/762.jpg', 'marcia-7', 'academy-of-life', 'sb-47bcke17018321@personal.example.com', 'Chile', 'CL', '+56 9 8745 6321', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"267\" height=\"77\"><path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1\" stroke=\"#333\" fill=\"none\" d=\"M 23 72 c 0.02 -0.12 1.36 -4.84 1 -7 c -1.82 -10.95 -5.75 -23.1 -8 -35 c -1.13 -6 -1.58 -11.9 -2 -18 c -0.26 -3.71 -0.19 -11.27 0 -11 c 0.33 0.46 3.58 11.76 5 18 c 3.03 13.29 5.52 25.6 8 39 c 0.94 5.09 0.52 11.66 2 15 c 0.66 1.48 5.63 3.89 6 3 c 1.79 -4.33 4.37 -21.4 6 -32 c 0.35 -2.28 -0.12 -7.23 0 -7 c 0.41 0.81 4.79 15.63 8 23 c 2.42 5.56 7.87 16.66 9 16 c 1.43 -0.84 2.61 -15.23 3 -23 c 0.62 -12.4 -0.21 -37.61 0 -37 c 0.35 1 7.2 56.06 8 60 c 0.09 0.44 2.59 -3.96 3 -6 c 1.16 -5.81 1.03 -12.61 2 -19 c 0.73 -4.79 2.39 -9.27 3 -14 c 0.73 -5.62 0.54 -17.62 1 -17 c 1.03 1.39 8.09 24.18 13 36 c 2.47 5.94 8.06 15.87 9 17 c 0.25 0.3 0.96 -3.33 1 -5 c 0.29 -11.15 0.26 -22.48 0 -34 c -0.08 -3.4 -1.06 -10.17 -1 -10 c 0.09 0.27 1.7 10.64 3 16 c 1.41 5.83 3.09 11.27 5 17 c 1.5 4.51 3.06 8.9 5 13 c 1 2.12 3.57 6.43 4 6 c 0.72 -0.72 1.7 -7.98 2 -12 c 0.37 -4.96 0.5 -10.01 0 -15 c -1.18 -11.76 -5 -34.38 -5 -35 c 0 -0.5 2.74 18.78 5 28 c 1.76 7.18 4.25 14.23 7 21 c 1.56 3.83 4.1 10.49 6 11 c 1.73 0.46 7.52 -4.29 9 -7 c 1.98 -3.63 2.65 -9.99 3 -15 c 0.64 -9.16 -0.61 -23.91 0 -28 c 0.09 -0.6 2.92 0.34 4 1 c 4.52 2.76 9.08 6.92 14 10 c 5.89 3.68 11.82 7.46 18 10 c 6.56 2.69 14.02 4.89 21 6 c 7.36 1.17 15.53 1.5 23 1 c 7.25 -0.48 15.1 -1.86 22 -4 c 6.77 -2.09 20.36 -8.88 20 -9 c -0.4 -0.13 -15.02 5.7 -23 8 c -16.93 4.87 -33.3 11.83 -50 13 c -62.07 4.36 -188.64 4.02 -192 4 c -0.57 0 21.28 -3.88 32 -5 c 5.3 -0.55 11.16 -1.05 16 0 c 6.8 1.47 20.77 6.98 21 8 c 0.19 0.86 -13.05 -0.08 -19 1 c -4.65 0.84 -13.75 4.94 -14 5 c -0.11 0.03 3.9 -2.47 6 -3 c 21.22 -5.31 43.19 -10.4 66 -15 c 18.12 -3.65 34.61 -6.19 53 -9 c 15.53 -2.38 29.89 -4.22 45 -6 c 2 -0.24 6.11 0 6 0 l -24 0\"/></svg>', '2022-06-20', '2022-06-01 16:40:30'),
(8, 'usuario', 'caro', 'ccontrerasfono@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', 0, NULL, NULL, NULL, 1, '93b5b3bf91175dc45886e7c8a12bf3ae', 'vistas/img/usuarios/8/761.jpg', NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-21 21:32:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `titulo_video` text NOT NULL,
  `descripcion_video` text NOT NULL,
  `medios_video` text NOT NULL,
  `imagen_video` text NOT NULL,
  `vista_gratuita` int(11) NOT NULL,
  `fecha_video` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_video`, `id_cat`, `titulo_video`, `descripcion_video`, `medios_video`, `imagen_video`, `vista_gratuita`, `fecha_video`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/01-video.mp4', 'vistas/img/cuerpo-activo/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/02-video.mp4', 'vistas/img/cuerpo-activo/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(3, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/03-video.mp4', 'vistas/img/cuerpo-activo/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(4, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/04-video.mp4', 'vistas/img/cuerpo-activo/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/05-video.mp4', 'vistas/img/cuerpo-activo/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(6, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/cuerpo-activo/06-video.mp4', 'vistas/img/cuerpo-activo/06-imagen.jpg', 0, '2022-06-21 20:51:18'),
(7, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/01-video.mp4', 'vistas/img/mente-sana/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(8, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/02-video.mp4', 'vistas/img/mente-sana/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(9, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/03-video.mp4', 'vistas/img/mente-sana/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(10, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/04-video.mp4', 'vistas/img/mente-sana/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(11, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/05-video.mp4', 'vistas/img/mente-sana/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(12, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/mente-sana/06-video.mp4', 'vistas/img/mente-sana/06-imagen.jpg', 0, '2022-06-21 20:51:18'),
(13, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/01-video.mp4', 'vistas/img/espiritu-libre/01-imagen.jpg', 1, '2022-06-21 20:48:56'),
(14, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/02-video.mp4', 'vistas/img/espiritu-libre/02-imagen.jpg', 1, '2022-06-21 20:48:56'),
(15, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/03-video.mp4', 'vistas/img/espiritu-libre/03-imagen.jpg', 1, '2022-06-21 20:48:56'),
(16, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/04-video.mp4', 'vistas/img/espiritu-libre/04-imagen.jpg', 0, '2022-06-21 20:51:13'),
(17, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/05-video.mp4', 'vistas/img/espiritu-libre/05-imagen.jpg', 0, '2022-06-21 20:51:16'),
(18, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Sed lobortis lacus ac metus condimentum dapibus. Aliquam porta neque vitae felis laoreet, vitae auctor orci lobortis. Vivamus pharetra tellus facilisis diam rhoncus scelerisque. Ut placerat vehicula lacinia. In vitae mi tellus. Fusce sollicitudin accumsan rhoncus.', 'vistas/videos/espiritu-libre/06-video.mp4', 'vistas/img/espiritu-libre/06-imagen.jpg', 0, '2022-06-21 20:51:18');
=======
(3, 'usuario', 'Diego', 'diego@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:30:58'),
(4, 'usuario', 'Jose', 'jose@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'a9c033f9b68a989437c64ca2bd228c5e', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:21'),
(5, 'usuario', 'Agustin', 'agustin@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, 'e5916fa5b1b85e94dcbeef1c7be70132', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:35:56'),
(6, 'usuario', 'Carolina', 'carolina@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 0, '38ad84cbc67a6e587e34df5df5bdb41c', NULL, NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:38:11'),
(7, 'usuario', 'Marcia', 'marcia@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 0, NULL, NULL, NULL, 1, '0bb2856c9b52ff282c1ba90c94f9f061', 'vistas/img/usuarios/7/268.jpg', NULL, 'academy-of-life', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:40:30');
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e

--
-- Índices para tablas volcadas
--

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
<<<<<<< HEAD
=======
=======
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
<<<<<<< HEAD
=======
=======
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- AUTO_INCREMENT de las tablas volcadas
--

--
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
<<<<<<< HEAD
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
=======
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
=======
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120
>>>>>>> 9133070067fea7f568686fba3bb211463addd42e
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
