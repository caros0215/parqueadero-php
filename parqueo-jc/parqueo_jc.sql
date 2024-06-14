-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2024 a las 00:52:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueo_jc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonados`
--

CREATE TABLE `abonados` (
  `id_cliente` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `placa_vehiculo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `tipo_documento` enum('DNI','Pasaporte','Cedula de Extranjeria') NOT NULL,
  `numero_documento` varchar(255) NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text NOT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_suscripciones_pagos`
--

CREATE TABLE `clientes_suscripciones_pagos` (
  `id_registro` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `numero_documento` varchar(255) NOT NULL,
  `tipo_documento` enum('DNI','Pasaporte','Cédula de Extranjería') NOT NULL,
  `placa_vehiculo` varchar(255) NOT NULL,
  `nombre_plan` varchar(255) NOT NULL,
  `monto_plan` decimal(10,2) NOT NULL,
  `duracion_plan` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `dia_pago` enum('SABADO','DOMINGO') NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `pago_actual` decimal(10,2) DEFAULT NULL,
  `estado` enum('ACTIVO','INACTIVO','VENCIDO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `ID_VEHICULO` int(11) NOT NULL,
  `PLACA` varchar(20) NOT NULL,
  `ID_CLASE_VEHICULO` int(11) NOT NULL,
  `FECHA_ENTRADA` date NOT NULL,
  `HORA_ENTRADA` time NOT NULL,
  `HORA_SALIDA` time NOT NULL,
  `LAVADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `id_negocio` int(11) NOT NULL,
  `nombre_negocio` varchar(255) NOT NULL,
  `propietario_negocio` varchar(255) NOT NULL,
  `direccion_negocio` varchar(255) NOT NULL,
  `id_fiscal_o_telefono` varchar(255) NOT NULL,
  `moneda` varchar(255) NOT NULL,
  `tolerancia_cobro` int(11) NOT NULL,
  `impuestos_incluidos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `ID_CLASE_VEHICULO` int(11) NOT NULL,
  `NOMBRE_CLASE` varchar(50) NOT NULL,
  `PRECIO_POR_HORA` decimal(10,2) NOT NULL,
  `PRECIO_POR_DIA` decimal(10,2) NOT NULL,
  `PRECIO_POR_LAVADO` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `foto` text NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/191.jpg', 1, '2024-05-20 17:31:31', '2024-05-20 22:31:31'),
(57, 'Juan Fernando Urrego', 'juan', '$2a$07$asxx54ahjppf45sd87a5auwRi.z6UsW7kVIpm0CUEuCpmsvT2sG6O', 'Vendedor', 'vistas/img/usuarios/juan/461.jpg', 1, '2018-02-06 16:58:50', '2018-02-07 02:58:50'),
(58, 'Julio Gómez', 'julio', '$2a$07$asxx54ahjppf45sd87a5auQhldmFjGsrgUipGlmQgDAcqevQZSAAC', 'Especial', 'vistas/img/usuarios/julio/100.png', 1, '2018-02-06 17:09:22', '2018-02-07 03:09:22'),
(59, 'Ana Gonzalez', 'ana', '$2a$07$asxx54ahjppf45sd87a5auLd2AxYsA/2BbmGKNk2kMChC3oj7V0Ca', 'Vendedor', 'vistas/img/usuarios/ana/260.png', 1, '2017-12-26 19:21:40', '2017-12-27 05:21:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonados`
--
ALTER TABLE `abonados`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `clientes_suscripciones_pagos`
--
ALTER TABLE `clientes_suscripciones_pagos`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`ID_VEHICULO`),
  ADD UNIQUE KEY `PLACA` (`PLACA`),
  ADD KEY `ID_CLASE_VEHICULO` (`ID_CLASE_VEHICULO`);

--
-- Indices de la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD PRIMARY KEY (`id_negocio`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`ID_CLASE_VEHICULO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonados`
--
ALTER TABLE `abonados`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes_suscripciones_pagos`
--
ALTER TABLE `clientes_suscripciones_pagos`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `ID_VEHICULO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `negocios`
--
ALTER TABLE `negocios`
  MODIFY `id_negocio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `ID_CLASE_VEHICULO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`ID_CLASE_VEHICULO`) REFERENCES `tarifas` (`ID_CLASE_VEHICULO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
