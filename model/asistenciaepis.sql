-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2022 a las 02:12:34
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
-- Base de datos: `asistenciaepis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `codigo` varchar(5) CHARACTER SET latin1 NOT NULL,
  `nombres` varchar(100) CHARACTER SET latin1 NOT NULL,
  `dui` varchar(10) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(125) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(8) CHARACTER SET latin1 NOT NULL,
  `puesto` varchar(25) CHARACTER SET latin1 NOT NULL,
  `estado` int(1) NOT NULL,
  `tipo` int(1) NOT NULL,
  `contrasenia` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `disponible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombres`, `dui`, `direccion`, `telefono`, `puesto`, `estado`, `tipo`, `contrasenia`, `disponible`) VALUES
('ADMIN', 'Super acceso', '12345678', 'xxx', '87654321', 'Master edition', 1, 1, 'd033e22ae348aeb5660fc2140aec35850c4da997', 0);
INSERT INTO 'estudiantes' VALUES ('2019141031', 'Richar Quispe Quincho', '71582051', 'xxxxxxxx', '98563214', 'Estudiante', 1, 1, '2019141031', 1), 
('2019141032', 'Juan Edison Ramos Ñahui', '76254263', 'xxxxxxxx', '98563252', 'Estudiante', 1, 1, '2019141032', 1), 
('2019141040', 'Micky Sanchez Navarro', '71254632', 'xxxxxxxx', '71254632', 'Estudiante', 1, 1, '2019141040', 1)

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `hora_e_sem` time DEFAULT NULL,
  `hora_s_sem` time DEFAULT NULL,
  `hora_e_fd` time DEFAULT NULL,
  `hora_s_fd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `hora_e_sem`, `hora_s_sem`, `hora_e_fd`, `hora_s_fd`) VALUES
(1, '07:00:00', '17:00:00', '08:08:00', '18:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL COMMENT 'codigo empleado',
  `fecha` date NOT NULL,
  `hora_e` time DEFAULT NULL,
  `hora_s` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
