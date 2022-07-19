-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-07-2022 a las 03:08:06
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
-- Estructura de tabla para la tabla `acuerdos`
--

CREATE TABLE `acuerdos` (
  `numobligacion` bigint(20) NOT NULL COMMENT 'numero de obligacion por la cual se realiza acuerdo',
  `idasesor` int(11) UNSIGNED NOT NULL COMMENT 'Id de asesor encargado de el acuerdo ',
  `idcliente` int(10) UNSIGNED NOT NULL COMMENT 'id de cliente que realiza el acuerdo',
  `valorcapital` int(11) NOT NULL COMMENT 'valor de el saldo sin descuento',
  `fechaacuerdo` date NOT NULL COMMENT 'fecha en la cual se realiza el acuerdo de pago',
  `fechapago` date NOT NULL COMMENT 'fecha en la cual tendra que pagar',
  `valor` int(11) NOT NULL COMMENT 'valor por el cual se realiza el acuerdo',
  `cuotas` tinyint(255) NOT NULL COMMENT 'numero de cuotas a diferir el pago',
  `tipo` varchar(10) COLLATE utf8_unicode_ci GENERATED ALWAYS AS (if((`cuotas` = 1),'CONTADO','CUOTAS')) VIRTUAL COMMENT 'modalidad, de contado o a cuotas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `acuerdos`
--

INSERT INTO `acuerdos` (`numobligacion`, `idasesor`, `idcliente`, `valorcapital`, `fechaacuerdo`, `fechapago`, `valor`, `cuotas`) VALUES
(318800010056468626, 0, 0, 600000, '2022-02-10', '2022-05-13', 700000, 1),
(318800010058458922, 0, 0, 488888, '2022-05-10', '2022-05-12', 78888484, 5);

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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL COMMENT 'numero de identificación de cliente',
  `nombrecliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nombre de el cliente',
  `edad` int(100) NOT NULL COMMENT 'edad de el cliente',
  `ciudadresidencia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ciudad de donde reside el cliente',
  `numcelular` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'numero de celular de cliente',
  `correocliente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'correo de cliente ',
  `numobligacion` bigint(20) NOT NULL COMMENT 'numero de obligación a pagar de cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombrecliente`, `edad`, `ciudadresidencia`, `numcelular`, `correocliente`, `numobligacion`) VALUES
(2500045, 'gabriel1', 0, 'Pereira', '3104518752', 'gabrielgaitanrendon@gmail.com', 3000303000),
(10101010, 'gabrielactualzado', 0, 'Pereira', '3104518752', 'gabrielgaitanrendon@gmail.com', 3000303000),
(222555522, 'Pruebas 3525', 0, 'ciudad prueba', '3012216779', 'gabrielgaitanrendon@gmail.com', 3099990909),
(1001116533, 'gabrielactualzado', 0, 'Pereira', '3104518752', 'gabrielgaitanrendon@gmail.com', 3000303000),
(1254245254, 'sirus', 19, 'Pereira3', '65060480', 'gabrielgaitanrendon@gmail.com', 987498798798);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acuerdos`
--
ALTER TABLE `acuerdos`
  ADD PRIMARY KEY (`numobligacion`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`idasesor`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
