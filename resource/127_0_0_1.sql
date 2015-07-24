-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2015 a las 01:09:26
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `action`
--

INSERT INTO `action` VALUES
(2, 1, 'create', 'Agregar Persona'),
(3, 1, 'Crear', 'Crear Usuario'),
(4, 3, 'asd', 'asd');

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
) ENGINE=InnoDB AUTO_INCREMENT=412 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` VALUES
(1, 10, 'ACHAO'),
(2, 5, 'ALGARROBO'),
(3, 13, 'ALHUE'),
(4, 8, 'ALTO BIOBIO'),
(5, 3, 'ALTO DEL CARMEN'),
(6, 1, 'ALTO HOSPICIO'),
(7, 10, 'ANCUD'),
(8, 4, 'ANDACOLLO'),
(9, 9, 'ANGOL'),
(10, 10, 'ANIHUE'),
(11, 12, 'ANTARTICA'),
(12, 2, 'ANTOFAGASTA'),
(13, 8, 'ANTUCO'),
(14, 8, 'ARAUCO'),
(15, 15, 'ARICA'),
(16, 10, 'AUCAR'),
(17, 11, 'BALMACEDA'),
(18, 10, 'BRAUMAN'),
(19, 13, 'BUIN'),
(20, 8, 'BULNES'),
(21, 10, 'BUTACHAUQUES'),
(22, 11, 'C MANCILLA'),
(23, 5, 'CABILDO'),
(24, 8, 'CABRERO'),
(25, 9, 'CAJON'),
(26, 2, 'CALAMA'),
(27, 10, 'CALBUCO'),
(28, 3, 'CALDERA'),
(29, 5, 'CALERA'),
(30, 13, 'CALERA DE TANGO'),
(31, 5, 'CALLE LARGA'),
(32, 15, 'CAMARONES'),
(33, 1, 'CAMINA'),
(34, 8, 'CAMPANARIO'),
(35, 4, 'CANELA'),
(36, 8, 'CANETE'),
(37, 9, 'CARAHUE'),
(38, 5, 'CARTAGENA'),
(39, 5, 'CASABLANCA'),
(40, 10, 'CASTRO'),
(41, 5, 'CATEMU'),
(42, 7, 'CAUQUENES'),
(43, 13, 'CERRILLOS'),
(44, 13, 'CERRO NAVIA'),
(45, 12, 'CERRO SOMBRERO'),
(46, 10, 'CHACAO'),
(47, 10, 'CHAITEN'),
(48, 10, 'CHALLAGUE'),
(49, 3, 'CHANARAL'),
(50, 7, 'CHANCO'),
(51, 10, 'CHENIAO'),
(52, 6, 'CHEPICA'),
(53, 9, 'CHERQUENCO'),
(54, 8, 'CHIGUAYANTE'),
(55, 11, 'CHILE CHICO'),
(56, 8, 'CHILLAN'),
(57, 8, 'CHILLAN VIEJO'),
(58, 6, 'CHIMBARONGO'),
(59, 9, 'CHOLCHOL'),
(60, 10, 'CHONCHI'),
(61, 2, 'CHUQUICAMATA'),
(62, 11, 'CISNES'),
(63, 8, 'COBQUECURA'),
(64, 10, 'COCHAMO'),
(65, 11, 'COCHRANE'),
(66, 6, 'CODEGUA'),
(67, 8, 'COELEMU'),
(68, 8, 'COIHUE'),
(69, 8, 'COIHUECO'),
(70, 6, 'COINCO'),
(71, 7, 'COLBUN'),
(72, 1, 'COLCHANE'),
(73, 13, 'COLINA'),
(74, 9, 'COLLIPULLI'),
(75, 6, 'COLTAUCO'),
(76, 4, 'COMBARBALA'),
(77, 8, 'CONCEPCION'),
(78, 13, 'CONCHALI'),
(79, 5, 'CONCON'),
(80, 7, 'CONSTITUCION'),
(81, 10, 'CONTAO'),
(82, 8, 'CONTULMO'),
(83, 3, 'COPIAPO'),
(84, 4, 'COQUIMBO'),
(85, 8, 'CORONEL'),
(86, 14, 'CORRAL'),
(87, 11, 'COYHAIQUE'),
(88, 9, 'CUNCO'),
(89, 9, 'CURACAUTIN'),
(90, 13, 'CURACAVI'),
(91, 10, 'CURACO DE VELEZ'),
(92, 8, 'CURANILAHUE'),
(93, 9, 'CURARREHUE'),
(94, 7, 'CUREPTO'),
(95, 7, 'CURICO'),
(96, 10, 'DALCAHUE'),
(97, 3, 'DIEGO DE ALMAGRO'),
(98, 6, 'DONIHUE'),
(99, 13, 'EL BOSQUE'),
(100, 8, 'EL CARMEN'),
(101, 13, 'EL MONTE'),
(102, 5, 'EL QUISCO'),
(103, 5, 'EL TABO'),
(104, 7, 'EMPEDRADO'),
(105, 10, 'ENTRELAGOS'),
(106, 9, 'ERCILLA'),
(107, 13, 'ESTACION CENTRAL'),
(108, 8, 'FLORIDA'),
(109, 9, 'FREIRE'),
(110, 3, 'FREIRINA'),
(111, 10, 'FRESIA'),
(112, 10, 'FRUTILLAR'),
(113, 10, 'FUTALEUFU'),
(114, 14, 'FUTRONO'),
(115, 9, 'GALVARINO'),
(116, 15, 'GENERAL LAGOS'),
(117, 9, 'GORBEA'),
(118, 6, 'GRANEROS'),
(119, 11, 'GUAITECAS'),
(120, 5, 'HIJUELAS'),
(121, 5, 'HORCON'),
(122, 10, 'HUALAIHUE'),
(123, 7, 'HUALANE'),
(124, 8, 'HUALPEN'),
(125, 8, 'HUALQUI'),
(126, 1, 'HUARA'),
(127, 3, 'HUASCO'),
(128, 13, 'HUECHURABA'),
(129, 8, 'HUEPIL'),
(130, 10, 'HUILLINCO'),
(131, 4, 'ILLAPEL'),
(132, 13, 'INDEPENDENCIA'),
(133, 1, 'IQUIQUE'),
(134, 10, 'ISLA CHAULINEC'),
(135, 13, 'ISLA DE MAIPO'),
(136, 5, 'ISLA DE PASCUA'),
(137, 10, 'ISLA QUENAC'),
(138, 5, 'JUAN FERNANDEZ'),
(139, 13, 'LA CISTERNA'),
(140, 5, 'LA CRUZ'),
(141, 6, 'LA ESTRELLA'),
(142, 13, 'LA FLORIDA'),
(143, 13, 'LA GRANJA'),
(144, 4, 'LA HIGUERA'),
(145, 5, 'LA LIGUA'),
(146, 13, 'LA PINTANA'),
(147, 13, 'LA REINA'),
(148, 4, 'LA SERENA'),
(149, 14, 'LA UNION'),
(150, 14, 'LAGO RANCO'),
(151, 11, 'LAGO VERDE'),
(152, 12, 'LAGUNA BLANCA'),
(153, 8, 'LAJA'),
(154, 13, 'LAMPA'),
(155, 14, 'LANCO'),
(156, 6, 'LAS CABRAS'),
(157, 13, 'LAS CONDES'),
(158, 10, 'LAS QUEMAS'),
(159, 10, 'LASTARRIA'),
(160, 9, 'LAUTARO'),
(161, 8, 'LEBU'),
(162, 9, 'LICANRAY'),
(163, 7, 'LICANTEN'),
(164, 5, 'LIMACHE'),
(165, 7, 'LINARES'),
(166, 8, 'LIRQUEN'),
(167, 6, 'LITUECHE'),
(168, 10, 'LIUCURA'),
(169, 5, 'LLAILLAY'),
(170, 10, 'LLANQUIHUE'),
(171, 10, 'LLIFEN'),
(172, 13, 'LO BARNECHEA'),
(173, 13, 'LO ESPEJO'),
(174, 13, 'LO PRADO'),
(175, 6, 'LOLOL'),
(176, 9, 'LONCOCHE'),
(177, 7, 'LONGAVI'),
(178, 9, 'LONQUIMAY'),
(179, 8, 'LOS ALAMOS'),
(180, 5, 'LOS ANDES'),
(181, 8, 'LOS ANGELES'),
(182, 14, 'LOS LAGOS'),
(183, 9, 'LOS LAURELES'),
(184, 10, 'LOS MUERMOS'),
(185, 9, 'LOS SAUCES'),
(186, 4, 'LOS VILOS'),
(187, 8, 'LOTA'),
(188, 9, 'LUMACO'),
(189, 6, 'MACHALI'),
(190, 13, 'MACUL'),
(191, 14, 'MAFIL'),
(192, 13, 'MAIPU'),
(193, 11, 'MALLIN GRANDE'),
(194, 6, 'MALLOA'),
(195, 6, 'MARCHIHUE'),
(196, 2, 'MARIA ELENA'),
(197, 13, 'MARIA PINTO'),
(198, 7, 'MAULE'),
(199, 10, 'MAULLIN'),
(200, 10, 'MECHUQUE'),
(201, 2, 'MEJILLONES'),
(202, 10, 'MELINKA'),
(203, 9, 'MELIPEUCO'),
(204, 13, 'MELIPILLA'),
(205, 10, 'MILLANTU'),
(206, 7, 'MOLINA'),
(207, 8, 'MONTE AGUILA'),
(208, 4, 'MONTE PATRIA'),
(209, 6, 'MOSTAZAL'),
(210, 8, 'MULCHEN'),
(211, 8, 'NACIMIENTO'),
(212, 6, 'NANCAGUA'),
(213, 12, 'NAVARINO'),
(214, 6, 'NAVIDAD'),
(215, 8, 'NEGRETE'),
(216, 10, 'NELTUME'),
(217, 8, 'NINHUE'),
(218, 8, 'NIPAS'),
(219, 8, 'NIQUEN'),
(221, 5, 'NOGALES'),
(222, 10, 'NUEVA BRAUNAU'),
(223, 9, 'NUEVA IMPERIAL'),
(224, 9, 'NUEVA TOLTEN'),
(225, 13, 'NUNOA'),
(226, 6, 'OLIVAR'),
(227, 2, 'OLLAGUE'),
(228, 5, 'OLMUE'),
(229, 10, 'OSORNO'),
(230, 4, 'OVALLE'),
(231, 13, 'P.AGUIRRE CERDA'),
(232, 13, 'PADRE HURTADO'),
(233, 9, 'PADRE LAS CASAS'),
(234, 4, 'PAIGUANO'),
(235, 14, 'PAILLACO'),
(236, 13, 'PAINE'),
(237, 10, 'PALENA'),
(238, 6, 'PALMILLA'),
(239, 14, 'PANGUIPULLI'),
(240, 5, 'PANQUEHUE'),
(241, 5, 'PAPUDO'),
(242, 6, 'PAREDONES'),
(243, 10, 'PARGUA'),
(244, 7, 'PARRAL'),
(245, 7, 'PELARCO'),
(246, 10, 'PELCHUQUIN'),
(247, 7, 'PELLUHUE'),
(248, 8, 'PEMUCO'),
(249, 5, 'PENABLANCA'),
(250, 13, 'PENAFLOR'),
(251, 13, 'PENALOLEN'),
(252, 7, 'PENCAHUE'),
(253, 8, 'PENCO'),
(254, 6, 'PERALILLO'),
(255, 9, 'PERQUENCO'),
(256, 5, 'PETORCA'),
(257, 6, 'PEUMO'),
(258, 1, 'PICA'),
(259, 6, 'PICHIDEGUA'),
(260, 6, 'PICHILEMU'),
(261, 9, 'PILLANLELBUN'),
(262, 8, 'PINTO'),
(263, 13, 'PIRQUE'),
(264, 9, 'PITRUFQUEN'),
(265, 6, 'PLACILLA'),
(266, 8, 'PORTEZUELO'),
(267, 12, 'PORVENIR'),
(268, 1, 'POZO ALMONTE'),
(269, 12, 'PRIMAVERA'),
(270, 13, 'PROVIDENCIA'),
(271, 11, 'PTO CHACABUCO'),
(272, 9, 'PTO DOMINGUEZ'),
(273, 9, 'PTO SAAVEDRA'),
(274, 5, 'PUCHUNCAVI'),
(275, 9, 'PUCON'),
(276, 13, 'PUDAHUEL'),
(277, 13, 'PUENTE ALTO'),
(278, 11, 'PUERTO AYSEN'),
(279, 10, 'PUERTO CHICO'),
(280, 11, 'PUERTO GUADAL'),
(281, 11, 'PUERTO IBANEZ'),
(282, 10, 'PUERTO MONTT'),
(283, 12, 'PUERTO NATALES'),
(284, 10, 'PUERTO OCTAY'),
(285, 11, 'PUERTO SANCHEZ'),
(286, 10, 'PUERTO VARAS'),
(287, 12, 'PUERTO WILLIAMS'),
(288, 6, 'PUMANQUE'),
(289, 4, 'PUNITAQUI'),
(290, 12, 'PUNTA ARENAS'),
(291, 10, 'PUQUELDON'),
(292, 9, 'PUREN'),
(293, 10, 'PURRANQUE'),
(294, 5, 'PUTAENDO'),
(295, 15, 'PUTRE'),
(296, 10, 'PUYEHUE'),
(297, 10, 'QUEILEN'),
(298, 10, 'QUELDON'),
(299, 10, 'QUELLON'),
(300, 10, 'QUEMCHI'),
(301, 9, 'QUEPE'),
(302, 8, 'QUILACO'),
(303, 13, 'QUILICURA'),
(304, 8, 'QUILLECO'),
(305, 8, 'QUILLON'),
(306, 5, 'QUILLOTA'),
(307, 5, 'QUILPUE'),
(308, 10, 'QUINCHAO'),
(309, 6, 'QUINTA DE TILCOCO'),
(310, 13, 'QUINTA NORMAL'),
(311, 5, 'QUINTERO'),
(312, 8, 'QUIRIHUE'),
(313, 8, 'RAMADILLAS'),
(314, 6, 'RANCAGUA'),
(315, 8, 'RANQUIL'),
(316, 7, 'RAUCO'),
(317, 8, 'RECINTO'),
(318, 13, 'RECOLETA'),
(319, 9, 'RENAICO'),
(320, 13, 'RENCA'),
(321, 6, 'RENGO'),
(322, 6, 'REQUINOA'),
(323, 7, 'RETIRO'),
(324, 10, 'REUMEN'),
(325, 5, 'RINCONADA'),
(326, 14, 'RIO BUENO'),
(327, 7, 'RIO CLARO'),
(328, 10, 'RIO FRIO'),
(329, 4, 'RIO HURTADO'),
(330, 11, 'RIO IBANEZ'),
(331, 10, 'RIO NEGRO'),
(332, 10, 'RIO PUELO'),
(333, 11, 'RIO TRANQUILO'),
(334, 12, 'RIO VERDE'),
(335, 7, 'ROMERAL'),
(336, 13, 'S.JOSE DE MAIPO'),
(337, 10, 'S.JUAN DE LA COSTA'),
(338, 7, 'SAGRADA FAMILIA'),
(339, 4, 'SALAMANCA'),
(340, 5, 'SAN ANTONIO'),
(341, 13, 'SAN BERNARDO'),
(342, 8, 'SAN CARLOS'),
(343, 7, 'SAN CLEMENTE'),
(344, 5, 'SAN ESTEBAN'),
(345, 8, 'SAN FABIAN'),
(346, 5, 'SAN FELIPE'),
(347, 6, 'SAN FERNANDO'),
(348, 12, 'SAN GREGORIO'),
(349, 8, 'SAN IGNACIO'),
(350, 7, 'SAN JAVIER'),
(351, 13, 'SAN JOAQUIN'),
(352, 14, 'SAN JOSE DE LA MARIQUINA'),
(353, 13, 'SAN MIGUEL'),
(354, 8, 'SAN NICOLAS'),
(355, 10, 'SAN PABLO'),
(356, 13, 'SAN PEDRO'),
(357, 2, 'SAN PEDRO DE ATACAMA'),
(358, 8, 'SAN PEDRO DE LA PAZ'),
(359, 7, 'SAN RAFAEL'),
(360, 13, 'SAN RAMON'),
(361, 8, 'SAN ROSENDO'),
(362, 6, 'SAN VICENTE'),
(363, 8, 'SANTA BARBARA'),
(364, 6, 'SANTA CRUZ'),
(365, 8, 'SANTA FE'),
(366, 8, 'SANTA JUANA'),
(367, 5, 'SANTA MARIA'),
(368, 13, 'SANTIAGO'),
(369, 5, 'SANTO DOMINGO'),
(370, 9, 'SELVA OSCURA'),
(371, 2, 'SIERRA GORDA'),
(372, 13, 'TALAGANTE'),
(373, 7, 'TALCA'),
(374, 8, 'TALCAHUANO'),
(375, 8, 'TALCAMAVIDA'),
(376, 2, 'TALTAL'),
(377, 9, 'TEMUCO'),
(378, 10, 'TENAUN'),
(379, 7, 'TENO'),
(380, 9, 'TEODORO SCHMIDT'),
(381, 3, 'TIERRA AMARILLA'),
(382, 13, 'TILTIL'),
(383, 12, 'TIMAUKEL'),
(384, 8, 'TIRUA'),
(385, 2, 'TOCOPILLA'),
(386, 9, 'TOLTEN'),
(387, 8, 'TOME'),
(388, 12, 'TORRES DE PAINE'),
(389, 11, 'TORTEL'),
(390, 9, 'TRAIGUEN'),
(391, 8, 'TREGUACO'),
(392, 8, 'TRUPAN'),
(393, 8, 'TUCAPEL'),
(394, 14, 'VALDIVIA'),
(395, 3, 'VALLENAR'),
(396, 5, 'VALPARAISO'),
(397, 7, 'VICHUQUEN'),
(398, 9, 'VICTORIA'),
(399, 4, 'VICUNA'),
(400, 9, 'VILCUN'),
(401, 7, 'VILLA ALEGRE'),
(402, 5, 'VILLA ALEMANA'),
(403, 11, 'VILLA OHIGGINS'),
(404, 9, 'VILLARRICA'),
(405, 5, 'VINA DEL MAR'),
(406, 13, 'VITACURA'),
(407, 10, 'VOIGUE'),
(408, 7, 'YERBAS BUENAS'),
(409, 8, 'YUMBEL'),
(410, 8, 'YUNGAY'),
(411, 5, 'ZAPALLAR');

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

INSERT INTO `controller` VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` VALUES
(1, 'TARAPACA', 'I'),
(2, 'ANTOFAGASTA', 'II'),
(3, 'ATACAMA', 'III'),
(4, 'COQUIMBO', 'IV'),
(5, 'VALPARAISO', 'V'),
(6, 'LIBERTADOR GENERAL B. OHIGGINS', 'VI'),
(7, 'MAULE', 'VII'),
(8, 'BIO-BIO', 'VIII'),
(9, 'LA ARAUCANIA', 'IX'),
(10, 'LOS LAGOS', 'X'),
(11, 'AYSEN', 'XI'),
(12, 'MAGALLANES Y ANTARTICA', 'XII'),
(13, 'METROPOLITANA DE SANTIAGO', 'RM'),
(14, 'LOS RIOS', 'XIV'),
(15, 'ARICA Y PARINACOTA', 'XV');

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

INSERT INTO `role` VALUES
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
  MODIFY `ACT_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
  MODIFY `COM_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=412;
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
  MODIFY `EMP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
  MODIFY `REG_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
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
