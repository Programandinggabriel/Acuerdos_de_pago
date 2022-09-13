-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-09-2022 a las 01:23:39
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_acuerdos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuerddel`
--

CREATE TABLE `acuerddel` (
  `idacuerdo` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id de acuerdo eliminado',
  `numobligacion` bigint(20) NOT NULL COMMENT 'numero de obligacion por la cual se realiza acuerdo',
  `idcliente` varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id de cliente que realiza el acuerdo',
  `fechaacuerdo` date NOT NULL COMMENT 'fecha en la cual se realiza el acuerdo de pago',
  `fechapago` date NOT NULL COMMENT 'fecha en la cual tendra que pagar',
  `valor` int(11) NOT NULL COMMENT 'valor por el cual se realiza el acuerdo',
  `cuotas` tinyint(2) NOT NULL COMMENT 'numero de cuotas a diferir el pago',
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'modalidad, de contado o a cuotascontado o cuotas',
  `comentarios` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'comentarios de el acuerdo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `acuerddel`
--

INSERT INTO `acuerddel` (`idacuerdo`, `numobligacion`, `idcliente`, `fechaacuerdo`, `fechapago`, `valor`, `cuotas`, `tipo`, `comentarios`) VALUES
('1', 990909090, '10001116533', '2022-08-18', '2022-08-25', 54165161, 2, 'CUOTAS', 'edite este acuerdo                '),
('20', 990909090, '10001116533', '2022-08-18', '2022-08-20', 8000000, 1, 'CONTADO', 'ACUERD O1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuerdos`
--

CREATE TABLE `acuerdos` (
  `idacuerdo` varchar(7) COLLATE utf8_unicode_ci NOT NULL COMMENT 'identifica acuerdo de pago',
  `numobligacion` bigint(20) NOT NULL COMMENT 'numero de obligacion por la cual se realiza acuerdo',
  `idcliente` varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'id de cliente que realiza el acuerdo',
  `fechaacuerdo` date NOT NULL COMMENT 'fecha en la cual se realiza el acuerdo de pago',
  `fechapago` date NOT NULL COMMENT 'fecha en la cual tendra que pagar',
  `valor` int(11) NOT NULL COMMENT 'valor por el cual se realiza el acuerdo',
  `cuotas` tinyint(2) NOT NULL COMMENT 'numero de cuotas a diferir el pago',
  `tipo` varchar(10) COLLATE utf8_unicode_ci GENERATED ALWAYS AS (if((`cuotas` = 1),'CONTADO','CUOTAS')) VIRTUAL COMMENT 'modalidad, de contado o a cuotas',
  `comentarios` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'comentarios de el acuerdo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `acuerdos`
--

INSERT INTO `acuerdos` (`idacuerdo`, `numobligacion`, `idcliente`, `fechaacuerdo`, `fechapago`, `valor`, `cuotas`, `comentarios`) VALUES
('21', 990909090, '10001116533', '2022-08-18', '2022-08-20', 150000, 1, 'boton actualizar 45454'),
('22', 990909090, '10001116533', '2022-08-18', '2022-08-20', 90000000, 1, 'ACUERD O3'),
('23', 990909090, '10001116533', '2022-08-18', '2022-08-20', 70000000, 1, 'ACUERD O3'),
('24', 990909090, '10001116533', '2022-08-18', '2022-08-20', 900000000, 5, 'ACUERD O3'),
('25', 990909090, '10001116533', '2022-08-18', '2022-08-20', 9000000, 3, 'ACUERD O5'),
('30', 285284854514, '200', '2022-08-20', '2022-08-27', 500000, 2, 'klmkmlko'),
('39', 285284854514, '200', '2022-08-20', '2022-08-25', 50000, 2, 'comenzamos a hacer el boton de cuotas'),
('41', 990909090, '100', '2022-08-22', '2022-08-26', 900000, 2, 'hol'),
('42', 285284854514, '200', '2022-08-22', '2022-08-31', 8000000, 2, 'dsdsad'),
('43', 848484148, '200', '2022-08-24', '2022-08-24', 4000000, 5, 'gagagag'),
('44', 848484148, '200', '2022-08-30', '2022-08-30', 40000000, 6, 'cambios de hoy'),
('ACU5359', 848484148, '200', '2022-09-03', '2022-09-27', 8000000, 4, ''),
('ACU7962', 285284854514, '200', '2022-09-03', '2022-09-21', 5000000, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuerdpag`
--

CREATE TABLE `acuerdpag` (
  `idpago` int(11) NOT NULL COMMENT 'indentificador de pago'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `idasesor` int(11) NOT NULL COMMENT 'numero documento de el asesor',
  `nomcompleto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'nombre completo de el asesor',
  `fechanacimiento` date DEFAULT NULL COMMENT 'fecha de nacimiento del asesor',
  `edad` int(11) NOT NULL COMMENT 'edad de el asesor',
  `correoasesor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'correo empresarial de el asesor',
  `direccionvivienda` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'direccion de vivienda de el asesor',
  `estrato` smallint(1) DEFAULT NULL COMMENT 'estrato social de el asesor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`idasesor`, `nomcompleto`, `fechanacimiento`, `edad`, `correoasesor`, `direccionvivienda`, `estrato`) VALUES
(2334443, 'pruebas pruebas', '2022-07-20', 0, 'correo@gmail.com', 'diagonal 45 ', 5),
(5000555, 'pruebas pruebas', '2022-05-11', 0, 'pruebas@pruebas.com', 'Editada', 5),
(1001116533, 'gabriel gaitan', '2022-05-22', 0, 'sad@as.com', 'cambiada', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infclient`
--

CREATE TABLE `infclient` (
  `numobligacion` bigint(20) NOT NULL COMMENT 'numero de obligación a pagar de cliente',
  `idcliente` varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'numero de identificacion de cliente con deuda',
  `nombrecliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nombre de el cliente',
  `edad` int(100) NOT NULL COMMENT 'edad de el cliente',
  `ciudadresidencia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ciudad de donde reside el cliente',
  `numcelular` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'numero de celular de cliente',
  `correocliente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'correo de cliente ',
  `saldocapital` int(11) NOT NULL COMMENT 'el 50% de este valor, sera el min a cobrar',
  `saltototal` int(11) NOT NULL COMMENT 'este valor será el mayor a cobrar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `infclient`
--

INSERT INTO `infclient` (`numobligacion`, `idcliente`, `nombrecliente`, `edad`, `ciudadresidencia`, `numcelular`, `correocliente`, `saldocapital`, `saltototal`) VALUES
(64354345, '100', 'gabriel gaitan', 3, 'bogota', '3104518752', 'gabrielgaitanrendon@gmail.com', 9000000, 100000000),
(87080470, '200', 'fsadsad', 44, 'iuhihiuh', '651650160', 'gabrielgaitanrendon@gmail.com', 500000, 100000000),
(848484148, '200', 'fsadsad', 44, 'iuhihiuh', '651650160', 'gabrielgaitanrendon@gmail.com', 700000, 100000000),
(990909090, '100', 'gabriel gaitan', 30, 'bogota', '3104518752', 'gabrielgaitanrendon@gmail.com', 750000, 100000000),
(9000009990, '100', 'gabriel gaitan', 3, 'bogota', '3104518752', 'gabrielgaitanrendon@gmail.com', 90000000, 100000000),
(285284854514, '200', 'fsadsad', 44, 'iuhihiuh', '651650160', 'gabrielgaitanrendon@gmail.com', 800000, 100000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acuerddel`
--
ALTER TABLE `acuerddel`
  ADD PRIMARY KEY (`idacuerdo`);

--
-- Indices de la tabla `acuerdos`
--
ALTER TABLE `acuerdos`
  ADD PRIMARY KEY (`idacuerdo`);

--
-- Indices de la tabla `acuerdpag`
--
ALTER TABLE `acuerdpag`
  ADD PRIMARY KEY (`idpago`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`idasesor`);

--
-- Indices de la tabla `infclient`
--
ALTER TABLE `infclient`
  ADD PRIMARY KEY (`numobligacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acuerdpag`
--
ALTER TABLE `acuerdpag`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT COMMENT 'indentificador de pago';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
