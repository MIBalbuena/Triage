-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2022 a las 18:43:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_triage`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_genero`
--

CREATE TABLE `cat_genero` (
  `nid_genero` int(11) NOT NULL,
  `cdesc_genero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_genero`
--

INSERT INTO `cat_genero` (`nid_genero`, `cdesc_genero`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Otro'),
(4, 'No Especif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_roles`
--

CREATE TABLE `cat_roles` (
  `nid_rol` int(11) NOT NULL,
  `cdesc_rol` varchar(30) DEFAULT NULL,
  `bvigente` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_roles`
--

INSERT INTO `cat_roles` (`nid_rol`, `cdesc_rol`, `bvigente`) VALUES
(1, 'Administrador', b'1'),
(2, 'Medico', b'1'),
(3, 'Recepcion', b'1'),
(4, 'Callcenter', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_sangre`
--

CREATE TABLE `cat_sangre` (
  `nid_tipo_sangre` int(11) NOT NULL,
  `cdesc_tipo_sangre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_sangre`
--

INSERT INTO `cat_sangre` (`nid_tipo_sangre`, `cdesc_tipo_sangre`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-'),
(9, 'No Especif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_sexo`
--

CREATE TABLE `cat_sexo` (
  `nid_sexo` int(11) NOT NULL,
  `cdesc_sexo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_sexo`
--

INSERT INTO `cat_sexo` (`nid_sexo`, `cdesc_sexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'No Especif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_triage`
--

CREATE TABLE `cat_triage` (
  `nid_triage` int(11) NOT NULL,
  `cdesc_triage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_triage`
--

INSERT INTO `cat_triage` (`nid_triage`, `cdesc_triage`) VALUES
(1, 'Reanimación'),
(2, 'Emergencia'),
(3, 'Urgencia'),
(4, 'Prioritario'),
(5, 'No Urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estatus_paciente`
--

CREATE TABLE `tbl_estatus_paciente` (
  `nid_estatus_paciente` int(11) NOT NULL,
  `nid_paciente` int(11) DEFAULT NULL,
  `ctension_arterial_estatus` varchar(10) DEFAULT NULL,
  `noxigenacion_estatus` int(11) DEFAULT NULL,
  `ntemperatura_estatus` decimal(10,0) DEFAULT NULL,
  `npeso_estatus` decimal(10,0) DEFAULT NULL,
  `ntalla_estatus` decimal(10,0) DEFAULT NULL,
  `nid_triage` int(11) DEFAULT NULL,
  `neva_estatus` int(11) DEFAULT NULL,
  `nglasgow_estatus` int(11) DEFAULT NULL,
  `bpidentificado_estatus` int(11) DEFAULT NULL,
  `cingreso_estatus` text DEFAULT NULL,
  `cnotas_estatus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estatus_paciente`
--

INSERT INTO `tbl_estatus_paciente` (`nid_estatus_paciente`, `nid_paciente`, `ctension_arterial_estatus`, `noxigenacion_estatus`, `ntemperatura_estatus`, `npeso_estatus`, `ntalla_estatus`, `nid_triage`, `neva_estatus`, `nglasgow_estatus`, `bpidentificado_estatus`, `cingreso_estatus`, `cnotas_estatus`) VALUES
(1, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

CREATE TABLE `tbl_pacientes` (
  `nid_paciente` int(11) NOT NULL,
  `cnombre_paciente` varchar(100) DEFAULT NULL,
  `capellidop_paciente` varchar(60) DEFAULT NULL,
  `capellidom_paciente` varchar(60) DEFAULT NULL,
  `nnss_paciente` int(11) DEFAULT NULL,
  `crfc_paciente` varchar(15) DEFAULT NULL,
  `nid_sexo` int(11) DEFAULT NULL,
  `nid_genero` int(11) DEFAULT NULL,
  `dnacimiento_paciente` date DEFAULT NULL,
  `nid_tipo_sangre` int(11) DEFAULT NULL,
  `calergias_paciente` text DEFAULT NULL,
  `cpcronicos_paciente` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_pacientes`
--

INSERT INTO `tbl_pacientes` (`nid_paciente`, `cnombre_paciente`, `capellidop_paciente`, `capellidom_paciente`, `nnss_paciente`, `crfc_paciente`, `nid_sexo`, `nid_genero`, `dnacimiento_paciente`, `nid_tipo_sangre`, `calergias_paciente`, `cpcronicos_paciente`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 3, 4, NULL, 9, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, 3, 4, NULL, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `nid_usuario` int(11) NOT NULL,
  `cnombre_usuario` varchar(100) DEFAULT NULL,
  `capellidop_usuario` varchar(60) DEFAULT NULL,
  `capellidom_usuario` varchar(60) DEFAULT NULL,
  `cmote_usuario` varchar(30) DEFAULT NULL,
  `ccontrasena_usuario` varchar(300) DEFAULT NULL,
  `nid_rol` int(11) DEFAULT NULL,
  `bvigente_usuario` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`nid_usuario`, `cnombre_usuario`, `capellidop_usuario`, `capellidom_usuario`, `cmote_usuario`, `ccontrasena_usuario`, `nid_rol`, `bvigente_usuario`) VALUES
(1, 'Oscar', 'Flores', 'Flores', 'o', 'c20ad4d76fe97759aa27a0c99bff6710', 1, b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_genero`
--
ALTER TABLE `cat_genero`
  ADD PRIMARY KEY (`nid_genero`);

--
-- Indices de la tabla `cat_roles`
--
ALTER TABLE `cat_roles`
  ADD PRIMARY KEY (`nid_rol`);

--
-- Indices de la tabla `cat_sangre`
--
ALTER TABLE `cat_sangre`
  ADD PRIMARY KEY (`nid_tipo_sangre`);

--
-- Indices de la tabla `cat_sexo`
--
ALTER TABLE `cat_sexo`
  ADD PRIMARY KEY (`nid_sexo`);

--
-- Indices de la tabla `cat_triage`
--
ALTER TABLE `cat_triage`
  ADD PRIMARY KEY (`nid_triage`);

--
-- Indices de la tabla `tbl_estatus_paciente`
--
ALTER TABLE `tbl_estatus_paciente`
  ADD PRIMARY KEY (`nid_estatus_paciente`),
  ADD KEY `idtriage` (`nid_triage`);

--
-- Indices de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD PRIMARY KEY (`nid_paciente`),
  ADD KEY `idsexo` (`nid_sexo`),
  ADD KEY `idgenero` (`nid_genero`),
  ADD KEY `idsangre` (`nid_tipo_sangre`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`nid_usuario`),
  ADD KEY `idrol` (`nid_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_genero`
--
ALTER TABLE `cat_genero`
  MODIFY `nid_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cat_roles`
--
ALTER TABLE `cat_roles`
  MODIFY `nid_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cat_sangre`
--
ALTER TABLE `cat_sangre`
  MODIFY `nid_tipo_sangre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cat_sexo`
--
ALTER TABLE `cat_sexo`
  MODIFY `nid_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cat_triage`
--
ALTER TABLE `cat_triage`
  MODIFY `nid_triage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_estatus_paciente`
--
ALTER TABLE `tbl_estatus_paciente`
  MODIFY `nid_estatus_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  MODIFY `nid_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `nid_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_estatus_paciente`
--
ALTER TABLE `tbl_estatus_paciente`
  ADD CONSTRAINT `idtriage` FOREIGN KEY (`nid_triage`) REFERENCES `cat_triage` (`nid_triage`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD CONSTRAINT `idgenero` FOREIGN KEY (`nid_genero`) REFERENCES `cat_genero` (`nid_genero`) ON DELETE CASCADE,
  ADD CONSTRAINT `idsangre` FOREIGN KEY (`nid_tipo_sangre`) REFERENCES `cat_sangre` (`nid_tipo_sangre`) ON DELETE CASCADE,
  ADD CONSTRAINT `idsexo` FOREIGN KEY (`nid_sexo`) REFERENCES `cat_sexo` (`nid_sexo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `idrol` FOREIGN KEY (`nid_rol`) REFERENCES `cat_roles` (`nid_rol`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
