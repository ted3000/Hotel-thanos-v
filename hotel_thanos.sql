-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2019 a las 01:59:10
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel thanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE `adicionales` (
  `COD_ADICIONAL` int(11) NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `COD_CLIENTE` int(11) NOT NULL,
  `COD_RESERVA` int(11) NOT NULL,
  `DNI` text NOT NULL,
  `APELLIDO` int(30) NOT NULL,
  `NOMBRE` int(30) NOT NULL,
  `SEXO` text,
  `FECHA_ING` date NOT NULL,
  `FECHA_SAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacthanos`
--

CREATE TABLE `contacthanos` (
  `Nombres` text NOT NULL,
  `Email` text NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `COD_BOLETA` int(11) NOT NULL,
  `COD_ADICIONAL` int(11) NOT NULL,
  `COD_HABITACION` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `PRECIO UNITARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `COD_HABITACION` int(11) NOT NULL,
  `COD_THABITACION` int(11) NOT NULL,
  `NRO_HABITACION` int(11) NOT NULL,
  `PISO` int(11) NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `COD_BOLETA` int(11) NOT NULL,
  `COD_CLIENTE` int(11) NOT NULL,
  `COD_RESERVA` int(11) NOT NULL,
  `COD_PERSONAL` int(11) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `COD_PERSONAL` int(11) NOT NULL,
  `COD_TEMPLEADO` int(11) NOT NULL,
  `APELLIDOS` text NOT NULL,
  `NOMBRE` text NOT NULL,
  `DNI` text NOT NULL,
  `TELEFONO` int(9) NOT NULL,
  `DIRECCION` text NOT NULL,
  `Turno` text NOT NULL,
  `Fecha de Nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD PRIMARY KEY (`COD_ADICIONAL`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`COD_CLIENTE`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`COD_HABITACION`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`COD_BOLETA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  MODIFY `COD_ADICIONAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `COD_CLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `COD_HABITACION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `COD_BOLETA` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
