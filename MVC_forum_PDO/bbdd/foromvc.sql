-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2017 a las 16:28:30
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foromvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idMensaje` int(11) NOT NULL,
  `nick` varchar(10) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `destinatario` varchar(30) NOT NULL,
  `publico` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idMensaje`, `nick`, `fecha`, `texto`, `destinatario`, `publico`) VALUES
(29, 'davidenco', '29.06.17 a las 4:21', 'Buenas!', '', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` varchar(50) NOT NULL,
  `pass` int(10) NOT NULL,
  `nick` varchar(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fechaAlta` varchar(20) NOT NULL,
  `fechaUltimaConexion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `pass`, `nick`, `nombre`, `apellidos`, `fechaAlta`, `fechaUltimaConexion`) VALUES
('carmen@gmail.com', 9999, 'carmencita', 'carmen', 'Gomez', 'fechaAlta', ''),
('darky@gmail.com', 5555, 'ruben', 'ruben', 'fernandez', '04.06.17', ''),
('daviceta@gmail.com', 123456, 'davidenco', 'David', 'Gomez', 'fechaAlta', ''),
('enjuto@gmail.com', 7777, 'enju', 'enjuto', 'mojamuto', '', ''),
('farruquito@gmail.com', 333333, 'farru', 'nano', 'gomez', '30.05.17', ''),
('pepe@gmail.com', 123456, 'pepito', 'pepe', 'perez', 'fechaAlta', ''),
('perico@gmail.com', 99999, 'peri', 'perico', 'palotes', '', ''),
('probando@gmail', 369, 'pdo', 'pdo', 'lopez', '05.06.17', ''),
('PRUEBA', 0, 'PRUEBA', 'PRUEBA', 'PRUEBA', 'fechaAlta', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
