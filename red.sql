-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2017 a las 19:08:31
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2'),
(3, 'Categoria 3'),
(4, 'Categoria 4'),
(5, 'Categoria 5'),
(6, 'Categoria 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `user_from_id` int(10) NOT NULL,
  `user_to_id` int(10) NOT NULL,
  `description` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_hour` date DEFAULT NULL,
  `check` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `user_from_id` int(10) NOT NULL,
  `user_to_id` int(10) NOT NULL,
  `description` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date_hour` date DEFAULT NULL,
  `check` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`id`, `user_from_id`, `user_to_id`, `description`, `date_hour`, `check`) VALUES
(1, 1, 0, 'Mensaje 1', '2017-03-29', 1),
(2, 2, 0, 'Mensaje 2', '2017-03-29', 1),
(3, 3, 0, 'Mensaje 3', '2017-03-29', 1),
(4, 4, 0, 'Mensaje 4', '2017-03-29', 1),
(5, 5, 0, 'Mensaje 5', '2017-03-29', 1),
(6, 6, 0, 'Mensaje 6', '2017-03-29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`id`, `name`) VALUES
(1, 'Convencionales'),
(2, 'Salidas a Hoteles'),
(3, 'Cenas y Eventos'),
(4, 'Viajes'),
(5, 'Besos'),
(6, 'Masajes'),
(7, 'Despedidas de Solteros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usercategory`
--

CREATE TABLE `usercategory` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `user` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nick` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `album` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `video` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `private_phone` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `public_phone` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sex` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8_spanish_ci DEFAULT NULL,
  `location` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `measures` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `height` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `weight` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `attention` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `schedules` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `smoking` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `price` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Estructura de tabla para la tabla `userservice`
--

CREATE TABLE `userservice` (
  `id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `price` float(4,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usercategory`
--
ALTER TABLE `usercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userservice`
--
ALTER TABLE `userservice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usercategory`
--
ALTER TABLE `usercategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `userservice`
--
ALTER TABLE `userservice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
