-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2023 a las 02:28:46
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soderia2.0`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDARTICULO` int(11) NOT NULL,
  `NOMBREARTICULO` char(30) DEFAULT NULL,
  `PRECIOARTICULO` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`IDARTICULO`, `NOMBREARTICULO`, `PRECIOARTICULO`) VALUES
(1, 'AguaX20', 1000),
(2, 'AguaX12', 500),
(3, 'Soda', 200),
(4, 'Dispenser', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriapersona`
--

CREATE TABLE `categoriapersona` (
  `IDCATEGORIAPERSONA` int(11) NOT NULL,
  `TIPOPERSONA` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoriapersona`
--

INSERT INTO `categoriapersona` (`IDCATEGORIAPERSONA`, `TIPOPERSONA`) VALUES
(6, 'Administrador'),
(7, 'Vendedor'),
(8, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `IDDETALLEFACTURA` int(11) NOT NULL,
  `IDFACTURA` int(11) NOT NULL,
  `IDARTICULO` int(11) DEFAULT NULL,
  `PRECIOARTICULODETALLE` decimal(8,0) DEFAULT NULL,
  `CANTIDADARTICULO` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`IDDETALLEFACTURA`, `IDFACTURA`, `IDARTICULO`, `PRECIOARTICULODETALLE`, `CANTIDADARTICULO`) VALUES
(1, 1, 1, 36000, 36),
(2, 1, 2, 500, 1),
(3, 1, 3, 7200, 36),
(4, 1, 4, 2000, 1),
(5, 2, 1, 1000, 1),
(6, 2, 2, 2000, 4),
(7, 2, 3, 800, 4),
(8, 2, 4, 0, 0),
(9, 3, 1, 5000, 5),
(10, 3, 2, 3500, 7),
(11, 3, 3, 1600, 8),
(12, 3, 4, 0, 0),
(13, 4, 1, 36000, 36),
(14, 4, 2, 3000, 6),
(15, 4, 3, 3600, 18),
(16, 4, 4, 2000, 1),
(17, 5, 1, 36000, 36),
(18, 5, 2, 3000, 6),
(19, 5, 3, 3600, 18),
(20, 5, 4, 2000, 1),
(21, 6, 1, 35000, 35),
(22, 6, 2, 3000, 6),
(23, 6, 3, 400, 2),
(24, 6, 4, 2000, 1),
(25, 7, 1, 36000, 36),
(26, 7, 2, 2500, 5),
(27, 7, 3, 600, 3),
(28, 7, 4, 2000, 1),
(29, 8, 1, 34000, 34),
(30, 8, 2, 1000, 2),
(31, 8, 3, 200, 1),
(32, 8, 4, 2000, 1),
(33, 9, 1, 1000, 1),
(34, 9, 2, 500, 1),
(35, 9, 3, 200, 1),
(36, 9, 4, 2000, 1),
(37, 10, 1, 1000, 1),
(38, 10, 2, 500, 1),
(39, 10, 3, 200, 1),
(40, 10, 4, 2000, 1),
(41, 11, 1, 1000, 1),
(42, 11, 2, 500, 1),
(43, 11, 3, 200, 1),
(44, 11, 4, 2000, 1),
(45, 12, 1, 1000, 1),
(46, 12, 2, 1000, 2),
(47, 12, 3, 600, 3),
(48, 12, 4, 2000, 1),
(49, 13, 1, 2000, 2),
(50, 13, 2, 1500, 3),
(51, 13, 3, 800, 4),
(52, 13, 4, 10000, 5),
(53, 14, 1, 3000, 3),
(54, 14, 2, 500, 1),
(55, 14, 3, 400, 2),
(56, 14, 4, 8000, 4),
(57, 15, 1, 1000, 1),
(58, 15, 2, 500, 1),
(59, 15, 3, 200, 1),
(60, 15, 4, 2000, 1),
(61, 16, 1, 2000, 2),
(62, 16, 2, 1000, 2),
(63, 16, 3, 400, 2),
(64, 16, 4, 4000, 2),
(65, 17, 1, 36000, 36),
(66, 17, 2, 3000, 6),
(67, 17, 3, 3600, 18),
(68, 17, 4, 2000, 1),
(69, 18, 1, 36000, 36),
(70, 18, 2, 3000, 6),
(71, 18, 3, 69000, 345),
(72, 18, 4, 2000, 1),
(73, 19, 1, 36000, 36),
(74, 19, 2, 3000, 6),
(75, 19, 3, 200, 1),
(76, 19, 4, 2000, 1),
(77, 20, 1, 36000, 36),
(78, 20, 2, 3000, 6),
(79, 20, 3, 1200, 6),
(80, 20, 4, 2000, 1),
(81, 21, 1, 12000, 12),
(82, 21, 2, 500, 1),
(83, 21, 3, 200, 1),
(84, 21, 4, 2000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepagofactura`
--

CREATE TABLE `detallepagofactura` (
  `IDDETALLEPAGO` int(11) NOT NULL,
  `IDPAGOFACTURA` int(11) DEFAULT NULL,
  `IDARTICULO` int(11) DEFAULT NULL,
  `CANTIDADARTICULOPAGO` int(11) DEFAULT NULL,
  `PRECIOARTICULOPAGO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallepagofactura`
--

INSERT INTO `detallepagofactura` (`IDDETALLEPAGO`, `IDPAGOFACTURA`, `IDARTICULO`, `CANTIDADARTICULOPAGO`, `PRECIOARTICULOPAGO`) VALUES
(1, 2, 1, 6, 6000),
(2, 2, 2, 3, 1500),
(3, 2, 3, 1, 200),
(4, 2, 4, 0, 0),
(5, 3, 1, 6, 6000),
(6, 3, 2, 3, 1500),
(7, 3, 3, 1, 200),
(8, 3, 4, 0, 0),
(9, 4, 1, 6, 6000),
(10, 4, 2, 3, 1500),
(11, 4, 3, 10, 2000),
(12, 4, 4, 1, 2000),
(13, 5, 1, 6, 6000),
(14, 5, 2, 3, 1500),
(15, 5, 3, 10, 2000),
(16, 5, 4, 0, 0),
(17, 6, 1, 10, 10000),
(18, 6, 2, 3, 1500),
(19, 6, 3, 14, 2800),
(20, 6, 4, 0, 0),
(21, 7, 1, 4, 4000),
(22, 7, 2, 5, 2500),
(23, 7, 3, 2, 400),
(24, 7, 4, 1, 2000),
(25, 8, 1, 6, 6000),
(26, 8, 2, 1, 500),
(27, 8, 3, 1, 200),
(28, 8, 4, 1, 2000),
(29, 9, 1, 23, 23000),
(30, 9, 2, 45, 22500),
(31, 9, 3, 5, 1000),
(32, 9, 4, 5, 10000),
(33, 10, 1, 6, 6000),
(34, 10, 2, 6, 3000),
(35, 10, 3, 1, 200),
(36, 10, 4, 1, 2000),
(37, 11, 1, 5, 5000),
(38, 11, 2, 5, 2500),
(39, 11, 3, 5, 1000),
(40, 11, 4, 1, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dineroefectivo`
--

CREATE TABLE `dineroefectivo` (
  `ID_DINEROEFECTIVO` int(11) NOT NULL,
  `CANTIDADDINERO` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `NUMFACTURA` int(11) NOT NULL,
  `IDFACTURA` int(11) NOT NULL,
  `IDPERSONA` int(11) DEFAULT NULL,
  `IDPAGOFACTURA` int(11) DEFAULT NULL,
  `ID_DINEROEFECTIVO` int(11) DEFAULT NULL,
  `FECHAFACTURA` date DEFAULT NULL,
  `TIPOCOMPRA_VENTA` decimal(8,0) DEFAULT NULL,
  `TOTALFACTURA` decimal(8,0) DEFAULT NULL,
  `CLIENTEFACTURA` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`NUMFACTURA`, `IDFACTURA`, `IDPERSONA`, `IDPAGOFACTURA`, `ID_DINEROEFECTIVO`, `FECHAFACTURA`, `TIPOCOMPRA_VENTA`, `TOTALFACTURA`, `CLIENTEFACTURA`) VALUES
(0, 1, 3, 2, NULL, '0000-00-00', NULL, 45700, NULL),
(0, 2, 2, NULL, NULL, '0000-00-00', NULL, 3800, NULL),
(0, 3, 3, 7, NULL, '0000-00-00', NULL, 10100, NULL),
(0, 4, 2, 3, NULL, '0000-00-00', NULL, 44600, NULL),
(0, 5, 2, 4, NULL, '0000-00-00', NULL, 44600, NULL),
(0, 6, 2, 5, NULL, '0000-00-00', NULL, 40400, NULL),
(0, 7, 2, 6, NULL, '0000-00-00', NULL, 41100, NULL),
(0, 8, 2, NULL, NULL, '0000-00-00', NULL, 37200, NULL),
(0, 9, 2, NULL, NULL, '0000-00-00', NULL, 3700, NULL),
(0, 10, 3, NULL, NULL, '0000-00-00', NULL, 3700, NULL),
(0, 11, 3, NULL, NULL, '0000-00-00', NULL, 3700, NULL),
(0, 12, 2, NULL, NULL, '0000-00-00', NULL, 4600, NULL),
(0, 13, 2, NULL, NULL, '0000-00-00', NULL, 14300, NULL),
(0, 14, 2, NULL, NULL, '0000-00-00', NULL, 11900, NULL),
(0, 15, 2, NULL, NULL, '0000-00-00', NULL, 3700, NULL),
(0, 16, 2, NULL, NULL, '2023-08-15', NULL, 7400, NULL),
(0, 17, 4, 8, NULL, '2023-08-17', NULL, 44600, NULL),
(0, 18, 2, 9, NULL, '2023-08-17', NULL, 110000, NULL),
(0, 19, 2, 10, NULL, '2023-08-23', NULL, 41200, NULL),
(0, 20, 3, 11, NULL, '2023-08-24', NULL, 42200, NULL),
(0, 21, 2, NULL, NULL, '2023-08-24', NULL, 14700, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagofactura`
--

CREATE TABLE `pagofactura` (
  `IDPAGOFACTURA` int(11) NOT NULL,
  `IDPERSONA` int(11) DEFAULT NULL,
  `IDFACTURA` int(11) DEFAULT NULL,
  `ID_DINEROEFECTIVO` int(11) DEFAULT NULL,
  `FECHAPAGOFACTURA` date DEFAULT NULL,
  `TOTALPAGOFACTURA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagofactura`
--

INSERT INTO `pagofactura` (`IDPAGOFACTURA`, `IDPERSONA`, `IDFACTURA`, `ID_DINEROEFECTIVO`, `FECHAPAGOFACTURA`, `TOTALPAGOFACTURA`) VALUES
(1, 3, 1, NULL, NULL, 19200),
(2, 3, 1, NULL, NULL, 17700),
(3, 2, 4, NULL, NULL, 37700),
(4, 2, 5, NULL, NULL, 21500),
(5, 2, 6, NULL, NULL, 39500),
(6, 2, 7, NULL, NULL, 34300),
(7, 3, 3, NULL, NULL, 14354),
(8, 4, 17, NULL, NULL, 18700),
(9, 2, 18, NULL, NULL, 66500),
(10, 2, 19, NULL, NULL, 31200),
(11, 3, 20, NULL, NULL, 20500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `IDPERSONA` int(11) NOT NULL,
  `IDCATEGORIAPERSONA` int(11) DEFAULT NULL,
  `NOMBREPERSONA` varchar(20) DEFAULT NULL,
  `CUILPERSONA` int(11) DEFAULT NULL,
  `DOMICILIOPERSONA` varchar(60) DEFAULT NULL,
  `TELEFONOPERSONA` int(11) DEFAULT NULL,
  `USUARIOPERSONA` varchar(256) DEFAULT NULL,
  `CONTRASENAPERSONA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IDPERSONA`, `IDCATEGORIAPERSONA`, `NOMBREPERSONA`, `CUILPERSONA`, `DOMICILIOPERSONA`, `TELEFONOPERSONA`, `USUARIOPERSONA`, `CONTRASENAPERSONA`) VALUES
(2, 6, 'Fabian', NULL, NULL, NULL, NULL, NULL),
(3, 7, 'Emilio', NULL, NULL, NULL, NULL, NULL),
(4, 7, 'Vane ', 12345, 'San Lorenzo', 2147483647, 'hola', ''),
(10, 7, 'mauricio', 0, '', 0, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDARTICULO`);

--
-- Indices de la tabla `categoriapersona`
--
ALTER TABLE `categoriapersona`
  ADD PRIMARY KEY (`IDCATEGORIAPERSONA`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`IDDETALLEFACTURA`),
  ADD KEY `FK_DETALLEFACTURA_ARTICULO` (`IDARTICULO`),
  ADD KEY `FK_FACTURA_DETALLEFACTURA` (`IDFACTURA`);

--
-- Indices de la tabla `detallepagofactura`
--
ALTER TABLE `detallepagofactura`
  ADD PRIMARY KEY (`IDDETALLEPAGO`),
  ADD KEY `FK_RELATIONSHIP_11` (`IDARTICULO`),
  ADD KEY `FK_RELATIONSHIP_9` (`IDPAGOFACTURA`);

--
-- Indices de la tabla `dineroefectivo`
--
ALTER TABLE `dineroefectivo`
  ADD PRIMARY KEY (`ID_DINEROEFECTIVO`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`IDFACTURA`),
  ADD KEY `FK_PERSONA_FACTURA` (`IDPERSONA`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_DINEROEFECTIVO`),
  ADD KEY `FK_RELATIONSHIP_14` (`IDPAGOFACTURA`);

--
-- Indices de la tabla `pagofactura`
--
ALTER TABLE `pagofactura`
  ADD PRIMARY KEY (`IDPAGOFACTURA`),
  ADD KEY `FK_RELATIONSHIP_10` (`IDFACTURA`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_DINEROEFECTIVO`),
  ADD KEY `FK_RELATIONSHIP_8` (`IDPERSONA`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IDPERSONA`),
  ADD KEY `FK_PERSONA_CATEGORIA` (`IDCATEGORIAPERSONA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `IDARTICULO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categoriapersona`
--
ALTER TABLE `categoriapersona`
  MODIFY `IDCATEGORIAPERSONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `IDDETALLEFACTURA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `detallepagofactura`
--
ALTER TABLE `detallepagofactura`
  MODIFY `IDDETALLEPAGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `IDPERSONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `FK_DETALLEFACTURA_ARTICULO` FOREIGN KEY (`IDARTICULO`) REFERENCES `articulo` (`IDARTICULO`),
  ADD CONSTRAINT `FK_FACTURA_DETALLEFACTURA` FOREIGN KEY (`IDFACTURA`) REFERENCES `factura` (`IDFACTURA`);

--
-- Filtros para la tabla `detallepagofactura`
--
ALTER TABLE `detallepagofactura`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`IDARTICULO`) REFERENCES `articulo` (`IDARTICULO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`IDPAGOFACTURA`) REFERENCES `pagofactura` (`IDPAGOFACTURA`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_PERSONA_FACTURA` FOREIGN KEY (`IDPERSONA`) REFERENCES `persona` (`IDPERSONA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_DINEROEFECTIVO`) REFERENCES `dineroefectivo` (`ID_DINEROEFECTIVO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`IDPAGOFACTURA`) REFERENCES `pagofactura` (`IDPAGOFACTURA`);

--
-- Filtros para la tabla `pagofactura`
--
ALTER TABLE `pagofactura`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`IDFACTURA`) REFERENCES `factura` (`IDFACTURA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_DINEROEFECTIVO`) REFERENCES `dineroefectivo` (`ID_DINEROEFECTIVO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`IDPERSONA`) REFERENCES `persona` (`IDPERSONA`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_PERSONA_CATEGORIA` FOREIGN KEY (`IDCATEGORIAPERSONA`) REFERENCES `categoriapersona` (`IDCATEGORIAPERSONA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
