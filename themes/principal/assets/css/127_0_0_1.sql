-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2015 a las 06:29:14
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `ACT_CORREL` int(10) unsigned NOT NULL,
  `CON_CORREL` int(10) unsigned NOT NULL,
  `ACT_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ACT_FICTICIO` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `action`
--

INSERT INTO `action` (`ACT_CORREL`, `CON_CORREL`, `ACT_NOMBRE`, `ACT_FICTICIO`) VALUES
(2, 1, 'create', 'Agregar Persona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_proyecto`
--

CREATE TABLE IF NOT EXISTS `antecedentes_proyecto` (
  `A_PRO_CORREL` int(10) unsigned NOT NULL,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `A_PRO_TITULO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `A_PRO_DESCRIPCION` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `BAS_CORREL` int(10) unsigned NOT NULL,
  `BAS_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `BAS_DESCRIPCION` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CAR_CORREL` int(10) unsigned NOT NULL,
  `CAT_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `COM_CORREL` int(10) unsigned NOT NULL,
  `REG_CORREL` int(10) unsigned NOT NULL,
  `COM_NOMBRE` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controller`
--

CREATE TABLE IF NOT EXISTS `controller` (
  `CON_CORREL` int(10) unsigned NOT NULL,
  `CON_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `CON_FICTICIO` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `controller`
--

INSERT INTO `controller` (`CON_CORREL`, `CON_NOMBRE`, `CON_FICTICIO`) VALUES
(1, 'persona', 'Control de Usuarios'),
(2, 'role', 'Control de Roles'),
(3, 'empresa', 'Control de Empresas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `DEP_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `DEP_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `DEP_DESCRIPCION` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `DET_CORREL` int(10) unsigned NOT NULL,
  `PROP_CORREL` int(10) unsigned NOT NULL,
  `INF_CORREL` int(10) unsigned NOT NULL,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `DET_NOTA` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `DOC_CORREL` int(10) unsigned NOT NULL,
  `PROP_CORREL` int(10) unsigned NOT NULL,
  `DOC_ANTERIOR` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp_has_bas`
--

CREATE TABLE IF NOT EXISTS `emp_has_bas` (
  `BAS_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp_has_rol`
--

CREATE TABLE IF NOT EXISTS `emp_has_rol` (
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `ROL_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `COM_CORREL` int(10) unsigned DEFAULT NULL,
  `EMP_RUT` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_RSOCIAL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_FANTASIA` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_PREFIJO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_GIRO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_INC` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_TELEFONO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_CELULAR` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_WEB` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_EMAIL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_TWEETER` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_FACEBOOK` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_SKYPE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_ESTADO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_propuesta`
--

CREATE TABLE IF NOT EXISTS `est_propuesta` (
  `E_PRO_CORREL` int(10) unsigned NOT NULL,
  `E_PRO_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_proyecto`
--

CREATE TABLE IF NOT EXISTS `est_proyecto` (
  `E_PRO_CORREL` int(10) unsigned NOT NULL,
  `E_PRO_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evalua`
--

CREATE TABLE IF NOT EXISTS `evalua` (
  `BAS_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_documentos`
--

CREATE TABLE IF NOT EXISTS `f_documentos` (
  `F_DOC_CORREL` int(10) unsigned NOT NULL,
  `FOR_CORREL` int(10) unsigned NOT NULL,
  `F_DOC_ANTERIOR` int(10) unsigned NOT NULL,
  `F_DOC_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `F_DOC_RUTA` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `F_DOC_FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `for_has_base`
--

CREATE TABLE IF NOT EXISTS `for_has_base` (
  `BAS_CORREL` int(10) unsigned NOT NULL,
  `FOR_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `FOR_CORREL` int(10) unsigned NOT NULL,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `FOR_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FOR_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `FOR_PONDERACION` decimal(6,2) DEFAULT NULL,
  `FOR_DETALLE` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe_ejecutivo`
--

CREATE TABLE IF NOT EXISTS `informe_ejecutivo` (
  `INF_CORREL` int(10) unsigned NOT NULL,
  `INF_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INF_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `INF_FINICIO` date DEFAULT NULL,
  `INF_FTERMINO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_propuesta`
--

CREATE TABLE IF NOT EXISTS `item_propuesta` (
  `I_PRO_CORREL` int(10) unsigned NOT NULL,
  `ITE_CORREL` int(10) unsigned NOT NULL,
  `PROP_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `I_PRO_PUNTAJE` decimal(6,2) DEFAULT NULL,
  `I_PRO_CONTENIDO` text COLLATE utf8_spanish_ci,
  `ITE_ESTADO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_documento`
--

CREATE TABLE IF NOT EXISTS `p_documento` (
  `P_DOC_CORREL` int(10) unsigned NOT NULL,
  `I_PRO_CORREL` int(10) unsigned NOT NULL,
  `P_COC_ANTERIOR` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `PER_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned DEFAULT NULL,
  `COM_CORREL` int(10) unsigned NOT NULL,
  `PER_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_PATERNO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_MATERNO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_CARGO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_TIPO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_NIVEL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_EMAIL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_RUT` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_estrategico`
--

CREATE TABLE IF NOT EXISTS `plan_estrategico` (
  `P_EST_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `P_EST_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `P_EST_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `P_EST_FINICIO` date DEFAULT NULL,
  `P_EST_FTERMINO` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE IF NOT EXISTS `propuesta` (
  `PROP_CORREL` int(10) unsigned NOT NULL,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `E_PRO_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `PER_PER_CORREL` int(10) unsigned NOT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_REVISADO` date DEFAULT NULL,
  `FECHA_TERMINO` date DEFAULT NULL,
  `PRO_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL,
  `P_EST_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `TIP_CORREL` int(10) unsigned NOT NULL,
  `E_PRO_CORREL` int(10) unsigned NOT NULL,
  `A_PRO_CORREL` int(10) unsigned NOT NULL,
  `PRO_FINICIO` date DEFAULT NULL,
  `PRO_FTERMINO` date DEFAULT NULL,
  `PRO_FREVISADA` date DEFAULT NULL,
  `PRO_FVERIFICADA` date DEFAULT NULL,
  `PRO_FDESCARTADO` date DEFAULT NULL,
  `PRO_TAMANO` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_PRIORIDAD` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_COMPLEJIDAD` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rechazo_propuesta`
--

CREATE TABLE IF NOT EXISTS `rechazo_propuesta` (
  `REZ_CORREL` int(10) unsigned NOT NULL,
  `PROP_CORREL` int(10) unsigned NOT NULL,
  `REZ_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `REZ_ESTADO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `REZ_FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REG_CORREL` int(10) unsigned NOT NULL,
  `REG_NOMBRE` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `REG_SIMBOLO` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_has_action`
--

CREATE TABLE IF NOT EXISTS `rol_has_action` (
  `ROL_CORREL` int(10) unsigned NOT NULL,
  `ACT_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ROL_CORREL` int(10) unsigned NOT NULL,
  `ROL_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`ROL_CORREL`, `ROL_NOMBRE`) VALUES
(1, 'SuperAdministrador'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `TIP_CORREL` int(10) unsigned NOT NULL,
  `CAR_CORREL` int(10) unsigned NOT NULL,
  `TIP_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_has_act`
--

CREATE TABLE IF NOT EXISTS `usu_has_act` (
  `ACT_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `TIPO` char(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_has_rol`
--

CREATE TABLE IF NOT EXISTS `usu_has_rol` (
  `ROL_CORREL` int(10) unsigned NOT NULL,
  `PER_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `PER_CORREL` int(10) unsigned NOT NULL,
  `USU_ESTADO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `USU_PASSWORD` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `USU_CREATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `USU_MODIFIED` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`ACT_CORREL`),
  ADD KEY `FK_RELATIONSHIP_21` (`CON_CORREL`);

--
-- Indices de la tabla `antecedentes_proyecto`
--
ALTER TABLE `antecedentes_proyecto`
  ADD PRIMARY KEY (`A_PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_10` (`PRO_CORREL`);

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`BAS_CORREL`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CAR_CORREL`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`COM_CORREL`),
  ADD KEY `FK_RELATIONSHIP_28` (`REG_CORREL`);

--
-- Indices de la tabla `controller`
--
ALTER TABLE `controller`
  ADD PRIMARY KEY (`CON_CORREL`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`DEP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_9` (`EMP_CORREL`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`DET_CORREL`),
  ADD KEY `FK_RELATIONSHIP_51` (`PROP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_52` (`INF_CORREL`),
  ADD KEY `FK_RELATIONSHIP_53` (`PRO_CORREL`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`DOC_CORREL`),
  ADD KEY `FK_RELATIONSHIP_27` (`PROP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_45` (`DOC_ANTERIOR`);

--
-- Indices de la tabla `emp_has_bas`
--
ALTER TABLE `emp_has_bas`
  ADD PRIMARY KEY (`BAS_CORREL`,`EMP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_58` (`EMP_CORREL`);

--
-- Indices de la tabla `emp_has_rol`
--
ALTER TABLE `emp_has_rol`
  ADD PRIMARY KEY (`EMP_CORREL`,`ROL_CORREL`),
  ADD KEY `FK_RELATIONSHIP_40` (`ROL_CORREL`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`EMP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_29` (`COM_CORREL`);

--
-- Indices de la tabla `est_propuesta`
--
ALTER TABLE `est_propuesta`
  ADD PRIMARY KEY (`E_PRO_CORREL`);

--
-- Indices de la tabla `est_proyecto`
--
ALTER TABLE `est_proyecto`
  ADD PRIMARY KEY (`E_PRO_CORREL`);

--
-- Indices de la tabla `evalua`
--
ALTER TABLE `evalua`
  ADD PRIMARY KEY (`BAS_CORREL`,`PER_CORREL`),
  ADD KEY `FK_RELATIONSHIP_32` (`PER_CORREL`);

--
-- Indices de la tabla `f_documentos`
--
ALTER TABLE `f_documentos`
  ADD PRIMARY KEY (`F_DOC_CORREL`),
  ADD KEY `FK_RELATIONSHIP_43` (`FOR_CORREL`),
  ADD KEY `FK_RELATIONSHIP_44` (`F_DOC_ANTERIOR`);

--
-- Indices de la tabla `for_has_base`
--
ALTER TABLE `for_has_base`
  ADD PRIMARY KEY (`BAS_CORREL`,`FOR_CORREL`),
  ADD KEY `FK_EMP_HAS_BAS` (`FOR_CORREL`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`FOR_CORREL`),
  ADD KEY `FK_RELATIONSHIP_2` (`PRO_CORREL`);

--
-- Indices de la tabla `informe_ejecutivo`
--
ALTER TABLE `informe_ejecutivo`
  ADD PRIMARY KEY (`INF_CORREL`);

--
-- Indices de la tabla `item_propuesta`
--
ALTER TABLE `item_propuesta`
  ADD PRIMARY KEY (`I_PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_26` (`PROP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_30` (`PER_CORREL`);

--
-- Indices de la tabla `p_documento`
--
ALTER TABLE `p_documento`
  ADD PRIMARY KEY (`P_DOC_CORREL`),
  ADD KEY `FK_EVALUA` (`I_PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_46` (`P_COC_ANTERIOR`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`PER_CORREL`),
  ADD KEY `FK_RELATIONSHIP_49` (`COM_CORREL`),
  ADD KEY `FK_RELATIONSHIP_6` (`EMP_CORREL`);

--
-- Indices de la tabla `plan_estrategico`
--
ALTER TABLE `plan_estrategico`
  ADD PRIMARY KEY (`P_EST_CORREL`),
  ADD KEY `FK_RELATIONSHIP_11` (`EMP_CORREL`);

--
-- Indices de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD PRIMARY KEY (`PROP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_24` (`PER_CORREL`),
  ADD KEY `FK_RELATIONSHIP_42` (`E_PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_5` (`PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_50` (`EMP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_54` (`PER_PER_CORREL`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_1` (`EMP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_12` (`P_EST_CORREL`),
  ADD KEY `FK_RELATIONSHIP_13` (`PER_CORREL`),
  ADD KEY `FK_RELATIONSHIP_34` (`TIP_CORREL`),
  ADD KEY `FK_EMP_HAS_ROL` (`E_PRO_CORREL`),
  ADD KEY `FK_RELATIONSHIP_47` (`A_PRO_CORREL`);

--
-- Indices de la tabla `rechazo_propuesta`
--
ALTER TABLE `rechazo_propuesta`
  ADD PRIMARY KEY (`REZ_CORREL`),
  ADD KEY `FK_RELATIONSHIP_48` (`PROP_CORREL`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`REG_CORREL`);

--
-- Indices de la tabla `rol_has_action`
--
ALTER TABLE `rol_has_action`
  ADD PRIMARY KEY (`ROL_CORREL`,`ACT_CORREL`),
  ADD KEY `FK_RELATIONSHIP_19` (`ACT_CORREL`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ROL_CORREL`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`TIP_CORREL`),
  ADD KEY `FK_RELATIONSHIP_35` (`CAR_CORREL`);

--
-- Indices de la tabla `usu_has_act`
--
ALTER TABLE `usu_has_act`
  ADD PRIMARY KEY (`ACT_CORREL`),
  ADD KEY `FK_RELATIONSHIP_38` (`PER_CORREL`);

--
-- Indices de la tabla `usu_has_rol`
--
ALTER TABLE `usu_has_rol`
  ADD PRIMARY KEY (`ROL_CORREL`),
  ADD KEY `FK_RELATIONSHIP_37` (`PER_CORREL`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`PER_CORREL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `action`
--
ALTER TABLE `action`
  MODIFY `ACT_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `antecedentes_proyecto`
--
ALTER TABLE `antecedentes_proyecto`
  MODIFY `A_PRO_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
  MODIFY `BAS_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CAR_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `COM_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `controller`
--
ALTER TABLE `controller`
  MODIFY `CON_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `DEP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `DET_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `DOC_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `EMP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `est_propuesta`
--
ALTER TABLE `est_propuesta`
  MODIFY `E_PRO_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `f_documentos`
--
ALTER TABLE `f_documentos`
  MODIFY `F_DOC_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `FOR_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `item_propuesta`
--
ALTER TABLE `item_propuesta`
  MODIFY `I_PRO_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `p_documento`
--
ALTER TABLE `p_documento`
  MODIFY `P_DOC_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `PER_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `plan_estrategico`
--
ALTER TABLE `plan_estrategico`
  MODIFY `P_EST_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  MODIFY `PROP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `PRO_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rechazo_propuesta`
--
ALTER TABLE `rechazo_propuesta`
  MODIFY `REZ_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `REG_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `ROL_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `TIP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`CON_CORREL`) REFERENCES `controller` (`CON_CORREL`);

--
-- Filtros para la tabla `antecedentes_proyecto`
--
ALTER TABLE `antecedentes_proyecto`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`REG_CORREL`) REFERENCES `region` (`REG_CORREL`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `FK_RELATIONSHIP_51` FOREIGN KEY (`PROP_CORREL`) REFERENCES `propuesta` (`PROP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_52` FOREIGN KEY (`INF_CORREL`) REFERENCES `informe_ejecutivo` (`INF_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_53` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`PROP_CORREL`) REFERENCES `propuesta` (`PROP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_45` FOREIGN KEY (`DOC_ANTERIOR`) REFERENCES `documento` (`DOC_CORREL`);

--
-- Filtros para la tabla `emp_has_bas`
--
ALTER TABLE `emp_has_bas`
  ADD CONSTRAINT `FK_RELATIONSHIP_58` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_59` FOREIGN KEY (`BAS_CORREL`) REFERENCES `base` (`BAS_CORREL`);

--
-- Filtros para la tabla `emp_has_rol`
--
ALTER TABLE `emp_has_rol`
  ADD CONSTRAINT `FK_RELATIONSHIP_40` FOREIGN KEY (`ROL_CORREL`) REFERENCES `role` (`ROL_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_41` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`COM_CORREL`) REFERENCES `comuna` (`COM_CORREL`);

--
-- Filtros para la tabla `evalua`
--
ALTER TABLE `evalua`
  ADD CONSTRAINT `FK_RELATIONSHIP_32` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_33` FOREIGN KEY (`BAS_CORREL`) REFERENCES `base` (`BAS_CORREL`);

--
-- Filtros para la tabla `f_documentos`
--
ALTER TABLE `f_documentos`
  ADD CONSTRAINT `FK_RELATIONSHIP_43` FOREIGN KEY (`FOR_CORREL`) REFERENCES `formulario` (`FOR_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_44` FOREIGN KEY (`F_DOC_ANTERIOR`) REFERENCES `f_documentos` (`F_DOC_CORREL`);

--
-- Filtros para la tabla `for_has_base`
--
ALTER TABLE `for_has_base`
  ADD CONSTRAINT `FK_EMP_HAS_BAS` FOREIGN KEY (`FOR_CORREL`) REFERENCES `formulario` (`FOR_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_57` FOREIGN KEY (`BAS_CORREL`) REFERENCES `base` (`BAS_CORREL`);

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`);

--
-- Filtros para la tabla `item_propuesta`
--
ALTER TABLE `item_propuesta`
  ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`PROP_CORREL`) REFERENCES `propuesta` (`PROP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`);

--
-- Filtros para la tabla `p_documento`
--
ALTER TABLE `p_documento`
  ADD CONSTRAINT `FK_EVALUA` FOREIGN KEY (`I_PRO_CORREL`) REFERENCES `item_propuesta` (`I_PRO_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_46` FOREIGN KEY (`P_COC_ANTERIOR`) REFERENCES `p_documento` (`P_DOC_CORREL`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_RELATIONSHIP_49` FOREIGN KEY (`COM_CORREL`) REFERENCES `comuna` (`COM_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `plan_estrategico`
--
ALTER TABLE `plan_estrategico`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_42` FOREIGN KEY (`E_PRO_CORREL`) REFERENCES `est_propuesta` (`E_PRO_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_50` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_54` FOREIGN KEY (`PER_PER_CORREL`) REFERENCES `persona` (`PER_CORREL`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `FK_EMP_HAS_ROL` FOREIGN KEY (`E_PRO_CORREL`) REFERENCES `est_proyecto` (`E_PRO_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`P_EST_CORREL`) REFERENCES `plan_estrategico` (`P_EST_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_34` FOREIGN KEY (`TIP_CORREL`) REFERENCES `tipo` (`TIP_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_47` FOREIGN KEY (`A_PRO_CORREL`) REFERENCES `antecedentes_proyecto` (`A_PRO_CORREL`);

--
-- Filtros para la tabla `rechazo_propuesta`
--
ALTER TABLE `rechazo_propuesta`
  ADD CONSTRAINT `FK_RELATIONSHIP_48` FOREIGN KEY (`PROP_CORREL`) REFERENCES `propuesta` (`PROP_CORREL`);

--
-- Filtros para la tabla `rol_has_action`
--
ALTER TABLE `rol_has_action`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ACT_CORREL`) REFERENCES `action` (`ACT_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ROL_CORREL`) REFERENCES `role` (`ROL_CORREL`);

--
-- Filtros para la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `FK_RELATIONSHIP_35` FOREIGN KEY (`CAR_CORREL`) REFERENCES `categoria` (`CAR_CORREL`);

--
-- Filtros para la tabla `usu_has_act`
--
ALTER TABLE `usu_has_act`
  ADD CONSTRAINT `FK_RELATIONSHIP_22` FOREIGN KEY (`ACT_CORREL`) REFERENCES `action` (`ACT_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_38` FOREIGN KEY (`PER_CORREL`) REFERENCES `usuario` (`PER_CORREL`);

--
-- Filtros para la tabla `usu_has_rol`
--
ALTER TABLE `usu_has_rol`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ROL_CORREL`) REFERENCES `role` (`ROL_CORREL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_37` FOREIGN KEY (`PER_CORREL`) REFERENCES `usuario` (`PER_CORREL`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_RELATIONSHIP_36` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
