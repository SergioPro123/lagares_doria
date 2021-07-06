-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 02:06:42
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lagares_doria`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crearUsuario` (IN `nombre` VARCHAR(50), IN `apellido` VARCHAR(50), IN `cedula` VARCHAR(10), IN `celular` VARCHAR(11), IN `email` VARCHAR(100), IN `password_variable` VARCHAR(30))  BEGIN

	INSERT INTO	
    	datos_personales(datos_personales.nombre,
                        datos_personales.apellido,
                        datos_personales.cedula,
                        datos_personales.celular,
                        datos_personales.email,
                        datos_personales.password)
    VALUES(nombre,apellido,cedula,celular,email,password_variable);
SELECT LAST_INSERT_ID();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `email_VARIABLE` VARCHAR(100), IN `password_VARIABLE` VARCHAR(30))  BEGIN
  SELECT 
  	datos_personales.nombre,
    datos_personales.apellido,
    datos_personales.cedula,
    datos_personales.celular,
    datos_personales.pathImage,
    datos_personales.email
  FROM datos_personales
  WHERE
  	datos_personales.email =email_VARIABLE
    	AND 
    datos_personales.password = password_VARIABLE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_datos_personales` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `pathImage` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id_datos_personales`, `nombre`, `apellido`, `cedula`, `celular`, `pathImage`, `email`, `password`) VALUES
(1, 'jhonatan alejandro', 'lagares valencia', '1234567890', '3143143142', '', 'elcachon@gmail.com', '1234'),
(4, 'El Doria', 'pro', '518187', '151518', '', 'elbrother@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_datos_personales`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_datos_personales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
