-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2022 a las 23:54:10
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdocencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `document` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `name`, `document`, `password`, `state`) VALUES
(1, 'JARLEY SALDARRIAGA', '1017268076', '1017268076', 1),
(2, 'KATERINE HENAO TORO', '1128428773', '1128428773', 1),
(4, 'ANYELA VANESSA GÒMEZ BUILES', '1128427304', '1128427304', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_docente`
--

CREATE TABLE `calificacion_docente` (
  `id` int(11) NOT NULL,
  `docente` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `student` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `result_conocimiento` int(60) NOT NULL,
  `result_actitud` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `document` varchar(20) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `type_vinc` varchar(40) NOT NULL,
  `type_servi` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type_prog` int(11) NOT NULL,
  `observation` varchar(300) NOT NULL,
  `calification` tinyint(1) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `institucion_asociada` int(200) NOT NULL,
  `tiene_estudiantes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `name`, `document`, `state`, `type_vinc`, `type_servi`, `phone`, `email`, `type_prog`, `observation`, `calification`, `foto`, `institucion_asociada`, `tiene_estudiantes`) VALUES
(2, 'CLARA PATRICIA TABORDA CARO', '43499479', 1, 'EXTERNO IES', 3, '3137245663', 'clarapatriciatc@hotmail.com; clarataborda@gmail.com', 1, 'SEMIOLOGÍA', 0, '../uploads/especialistas/fotos/', 4, 'SI'),
(3, 'YUDY LORENA GIRALDO ALFONSO', '24339622', 1, 'EXTERNO IES', 11, '3148913120', 'yudygiraldo@gmail.com; yudy.7418125924@ucaldas.edu.co', 1, '', 0, '../uploads/especialistas/fotos/FOTO.png', 4, 'SI'),
(4, 'POMPILIO DE JESÚS GUTIERREZ PEÑUELA', '72123553', 1, 'VINCULADO HMFS', 9, '3004041486', 'pompiliogutierrezp@yahoo.es', 1, '', 1, '../uploads/especialistas/fotos/', 4, 'SI'),
(5, 'JORGE EPALZA SOLANO', '79794236', 1, 'AGREMIACIÓN/PROENSALUD', 3, '3017908550', 'joepso21.je@gmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(6, 'ALEXANDER EFRÉN PETRO PLAZA', '78028744', 1, 'AGREMIACIÓN/PROSALUD', 9, '3015019410', 'alepetrop@yahoo.es', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(7, 'JOSÉ DE JESÚS CONSUEGRA SOLANO', '72021350', 1, 'AGREMIACIÓN/THAUS', 2, '3008056874', 'consuegrajose67@gmail.com', 1, '', 1, '../uploads/especialistas/fotos/Foto - 72021350.png', 9, 'SI'),
(8, 'LUZ ESTELA GARCÍA ISAAC', '26028012', 1, 'AGREMIACIÓN/THAUS', 2, '3158676877', 'Luzg0805@hotmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(9, 'RAMIRO GARCIA BERDUGO', '73119131', 1, 'AGREMIACIÓN/THAUS', 2, '3216444894', 'ragabe.1@hotmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(10, 'LUIS DANIEL ALDANA ACERO', '19429458', 1, 'VINCULADO HMFS', 4, '3015494447', 'daniel.aldana3@gmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(11, 'GLORIA STELLA RESTREPO LOPEZ', '42979000', 1, 'VINCULADO HMFS', 4, '3128320635', '', 1, '', 1, '../uploads/especialistas/fotos/', 9, 'SI'),
(12, 'DIANA YULIETH OBREGON HENAO', '1128266021', 1, 'EXTERNO IES', 1, '3147437724', 'dianaobregon87@hotmail.com', 11, '', 0, '../uploads/especialistas/fotos/FOTO - 1128266021.png', 1, 'SI'),
(13, 'LUISA FERNANDA ESPINAL ZAPATA', '1020438415', 1, 'EXTERNO IES', 3, '3218607838', 'luferes.2014@gmail.com', 2, '', 0, '../uploads/especialistas/fotos/FOTO-1020438415.png', 1, 'SI'),
(14, 'CLAUDIA KARINA PALOMINO JIMÉNEZ', '43455260', 1, 'AGREMIACIÓN/PROENSALUD', 3, '3006715967', 'clapalo2008@hotmail.com; ', 2, '', 0, '../uploads/especialistas/fotos/FOTO-43455260.png', 11, 'SI'),
(15, 'LINA MARÍA FRANCO OCHOA', '1152445160', 1, 'EXTERNO IES', 3, '3218743913', 'linitafranco9@hotmail.com', 2, '', 0, '../uploads/especialistas/fotos/FOTO-1152445160.png', 11, 'SI'),
(16, 'ANDRES FELIPE RESTREPO RAMÍREZ', '1035229453', 1, 'AGREMIACIÓN/PROSALUD', 1, '3226140243', 'andresf1193@hotmail.es', 1, 'SEMIOLOGÍA', 1, '../uploads/especialistas/fotos/FOTO-1035229453.png', 11, 'SI'),
(17, 'INGRID ESPERANZA TAMAYO GONZÁLEZ', '60397676', 1, 'EXTERNO IES', 20, '3014783565', 'ingridesperanzatamayogonzalez@fumc.edu.co', 8, '', 0, '../uploads/especialistas/fotos/FOTO-60397676.png', 5, 'SI'),
(18, 'MARÍA FERNANDA RIBERO RODRÍGUEZ', '43454747', 1, 'EXTERNO IES', 20, '3014064493', 'mariafernandariberorodriguez@fumc.edu.co', 8, '', 0, '../uploads/especialistas/fotos/FOTO-43454747.png', 5, 'SI'),
(19, 'JUAN FERNANDO CASTRILLÓN ESTRADA', '98603773', 1, 'EXTERNO IES', 2, '3108435432', 'jufernando77@hotmail.com', 2, '', 0, '../uploads/especialistas/fotos/', 4, 'SI'),
(20, 'JUAN ESTEBAN LÓPEZ CARDONA', '1039455066', 1, 'EXTERNO IES', 3, '3006846430', 'ps.juanesteban@gmail.com', 3, '', 0, '../uploads/especialistas/fotos/FOTO-1039455066.png', 5, 'SI'),
(21, 'NELSON RAMIRO GÓMEZ GÓMEZ', '98524989', 1, 'AGREMIACIÓN/THAUS', 1, '3104312516', 'nelson981@gmail.com', 1, '', 1, '../uploads/especialistas/fotos/FOTO-98524989.png', 0, 'NO'),
(22, 'RICHARD ESTEBAN USTA GLORIA', '78716522', 1, 'AGREMIACIÓN/PROENSALUD', 3, '3157173489', 'riustaglo@hotmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 0, 'NO'),
(23, 'EDGAR JOSÉ DE MOYA RUA', '72315183', 1, 'AGREMIACIÓN/PROENSALUD', 3, '3017488137', 'edgardemoya08@hotmail.com', 1, '', 1, '../uploads/especialistas/fotos/FOTO-72315183.jpg', 0, 'NO'),
(24, 'KEVING JAVIER UMAÑA CASTELLÓN', '1140841027', 1, 'AGREMIACIÓN/PROENSALUD', 3, '3106774912', 'kevingumana05@gmail.com', 1, '', 1, '../uploads/especialistas/fotos/', 0, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentosestudiantes`
--

CREATE TABLE `documentosestudiantes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `type_document` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentosestudiantes`
--

INSERT INTO `documentosestudiantes` (`id`, `id_user`, `file`, `type_document`) VALUES
(1, 1, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1020484868.pdf', 'anticuerpos'),
(2, 1, '../uploads/estudiantes/arl/ARL-1020484868.pdf', 'arl'),
(3, 1, '../uploads/estudiantes/documentos/DI-1020484868.pdf', 'documento'),
(4, 1, '../uploads/estudiantes/eps/EPS-1020484868.pdf', 'eps'),
(5, 1, '../uploads/estudiantes/hojadevida/HV-1020484868.pdf', 'hojadevida'),
(6, 1, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1020484868.pdf', 'certificado'),
(7, 1, '../uploads/estudiantes/vacunas/VACUNAS-1020484868.pdf', 'vacunas'),
(8, 2, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017224863.pdf', 'anticuerpos'),
(9, 2, '../uploads/estudiantes/arl/ARL-1017224863.pdf', 'arl'),
(10, 2, '../uploads/estudiantes/documentos/DI-1017224863.pdf', 'documento'),
(11, 2, '../uploads/estudiantes/eps/EPS-1017224863.pdf', 'eps'),
(12, 2, '../uploads/estudiantes/hojadevida/HV-1017224863.pdf', 'hojadevida'),
(13, 2, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017224863.pdf', 'certificado'),
(14, 2, '../uploads/estudiantes/vacunas/VACUNAS-1017224863.pdf', 'vacunas'),
(15, 3, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152214533.pdf', 'anticuerpos'),
(16, 3, '../uploads/estudiantes/arl/ARL-1152214533.pdf', 'arl'),
(17, 3, '../uploads/estudiantes/documentos/DI-1152214533.pdf', 'documento'),
(18, 3, '../uploads/estudiantes/eps/EPS-1152214533.pdf', 'eps'),
(19, 3, '../uploads/estudiantes/hojadevida/HV-1152214533.pdf', 'hojadevida'),
(20, 3, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152214533.pdf', 'certificado'),
(21, 3, '../uploads/estudiantes/vacunas/VACUNAS-1152214533.pdf', 'vacunas'),
(22, 4, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037642721.pdf', 'anticuerpos'),
(23, 4, '../uploads/estudiantes/arl/ARL-1037642721.pdf', 'arl'),
(24, 4, '../uploads/estudiantes/documentos/DI-1037642721.pdf', 'documento'),
(25, 4, '../uploads/estudiantes/hojadevida/HV-1037642721.pdf', 'hojadevida'),
(26, 4, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037642721.pdf', 'certificado'),
(27, 4, '../uploads/estudiantes/vacunas/VACUNAS-1037642721.pdf', 'vacunas'),
(28, 5, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017198669.pdf', 'anticuerpos'),
(29, 5, '../uploads/estudiantes/arl/ARL-1017198669.pdf', 'arl'),
(30, 5, '../uploads/estudiantes/documentos/DI-1017198669.pdf', 'documento'),
(31, 5, '../uploads/estudiantes/hojadevida/HV-1017198669.pdf', 'hojadevida'),
(32, 5, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017198669.pdf', 'certificado'),
(33, 5, '../uploads/estudiantes/vacunas/VACUNAS-1017198669.pdf', 'vacunas'),
(34, 6, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152710244.pdf', 'anticuerpos'),
(35, 6, '../uploads/estudiantes/arl/ARL-1152710244.pdf', 'arl'),
(36, 6, '../uploads/estudiantes/documentos/DI-1152710244.pdf', 'documento'),
(37, 6, '../uploads/estudiantes/eps/EPS-1152710244.pdf', 'eps'),
(38, 6, '../uploads/estudiantes/hojadevida/HV-1152710244.pdf', 'hojadevida'),
(39, 6, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152710244.pdf', 'certificado'),
(40, 6, '../uploads/estudiantes/vacunas/VACUNAS-1152710244.pdf', 'vacunas'),
(41, 7, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-28559544.pdf', 'anticuerpos'),
(42, 7, '../uploads/estudiantes/arl/ARL-28559544.pdf', 'arl'),
(43, 7, '../uploads/estudiantes/documentos/DI-28559544.pdf', 'documento'),
(49, 8, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152222357.pdf', 'anticuerpos'),
(50, 8, '../uploads/estudiantes/arl/ARL-1152222357.pdf', 'arl'),
(51, 8, '../uploads/estudiantes/documentos/DI-1152222357.pdf', 'documento'),
(52, 8, '../uploads/estudiantes/eps/EPS-1152222357.pdf', 'eps'),
(53, 8, '../uploads/estudiantes/hojadevida/HV-1152222357.pdf', 'hojadevida'),
(54, 8, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152222357.pdf', 'certificado'),
(55, 9, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017262956.pdf', 'anticuerpos'),
(56, 9, '../uploads/estudiantes/arl/ARL-1017262956.pdf', 'arl'),
(57, 9, '../uploads/estudiantes/documentos/DI-1017262956.pdf', 'documento'),
(58, 9, '../uploads/estudiantes/eps/EPS-1017262956.pdf', 'eps'),
(59, 9, '../uploads/estudiantes/hojadevida/HV-1017262956.pdf', 'hojadevida'),
(60, 9, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017262956.pdf', 'certificado'),
(61, 9, '../uploads/estudiantes/vacunas/VACUNAS-1017262956.pdf', 'vacunas'),
(62, 10, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1077470602.pdf', 'anticuerpos'),
(63, 10, '../uploads/estudiantes/arl/ARL-1077470602.pdf', 'arl'),
(64, 10, '../uploads/estudiantes/documentos/DI-1077470602.pdf', 'documento'),
(65, 10, '../uploads/estudiantes/eps/EPS-1077470602.pdf', 'eps'),
(66, 10, '../uploads/estudiantes/hojadevida/HV-1077470602.pdf', 'hojadevida'),
(67, 10, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1077470602.pdf', 'certificado'),
(68, 10, '../uploads/estudiantes/vacunas/VACUNAS-1077470602.pdf', 'vacunas'),
(69, 11, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152457302.pdf', 'anticuerpos'),
(70, 11, '../uploads/estudiantes/arl/ARL-1152457302.pdf', 'arl'),
(71, 11, '../uploads/estudiantes/documentos/DI-1152457302.pdf', 'documento'),
(72, 11, '../uploads/estudiantes/eps/EPS-1152457302.pdf', 'eps'),
(73, 11, '../uploads/estudiantes/hojadevida/HV-1152457302.pdf', 'hojadevida'),
(74, 11, '../uploads/estudiantes/certificados/INDUCCION VIRTUAL-1152457302.pdf', 'certificado'),
(75, 11, '../uploads/estudiantes/vacunas/VACUNAS-1152457302.pdf', 'vacunas'),
(76, 12, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1077479608.pdf', 'anticuerpos'),
(77, 12, '../uploads/estudiantes/arl/ARL-1077479608.pdf', 'arl'),
(78, 12, '../uploads/estudiantes/documentos/DI-1077479608.pdf', 'documento'),
(79, 12, '../uploads/estudiantes/eps/EPS-1077479608.pdf', 'eps'),
(80, 12, '../uploads/estudiantes/hojadevida/HV-1077479608.pdf', 'hojadevida'),
(81, 12, '../uploads/estudiantes/certificados/INDUCCION VIRTUAL-1077479608.pdf', 'certificado'),
(82, 12, '../uploads/estudiantes/vacunas/VACUNAS-1077479608.pdf', 'vacunas'),
(83, 13, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152218176.pdf', 'anticuerpos'),
(84, 13, '../uploads/estudiantes/arl/ARL-1152218176.pdf', 'arl'),
(85, 13, '../uploads/estudiantes/documentos/DI-1152218176.pdf', 'documento'),
(86, 13, '../uploads/estudiantes/eps/EPS-VENCIDA.pdf', 'eps'),
(87, 13, '../uploads/estudiantes/hojadevida/HV-1152218176.pdf', 'hojadevida'),
(88, 13, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152218176.pdf', 'certificado'),
(89, 13, '../uploads/estudiantes/vacunas/VACUNAS-1152218176.pdf', 'vacunas'),
(90, 14, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1020470720.pdf', 'anticuerpos'),
(91, 14, '../uploads/estudiantes/arl/ARL-1020470720.pdf', 'arl'),
(92, 14, '../uploads/estudiantes/documentos/DI-1020470720.pdf', 'documento'),
(93, 14, '../uploads/estudiantes/eps/EPS-1020470720.pdf', 'eps'),
(94, 14, '../uploads/estudiantes/hojadevida/HV-1020470720.pdf', 'hojadevida'),
(95, 14, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1020470720.pdf', 'certificado'),
(96, 14, '../uploads/estudiantes/vacunas/VACUNAS-1020470720.pdf', 'vacunas'),
(97, 15, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037593540.pdf', 'anticuerpos'),
(98, 15, '../uploads/estudiantes/eps/EPS-1037593540.pdf', 'eps'),
(99, 15, '../uploads/estudiantes/vacunas/VACUNAS-1037593540.pdf', 'vacunas'),
(100, 15, '../uploads/estudiantes/hojadevida/HV-1037593540.pdf', 'hojadevida'),
(101, 15, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037593540.pdf', 'certificado'),
(102, 15, '../uploads/estudiantes/arl/ARL-1037593540.pdf', 'arl'),
(103, 16, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017250081.pdf', 'anticuerpos'),
(104, 16, '../uploads/estudiantes/documentos/DI-1017250081.pdf', 'documento'),
(110, 17, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017256962.pdf', 'anticuerpos'),
(111, 17, '../uploads/estudiantes/arl/ARL-1017256962.pdf', 'arl'),
(112, 17, '../uploads/estudiantes/documentos/DI-1017256962.pdf', 'documento'),
(113, 17, '../uploads/estudiantes/eps/EPS-1017256962.pdf', 'eps'),
(114, 17, '../uploads/estudiantes/hojadevida/HV-1017256962.pdf', 'hojadevida'),
(115, 17, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017256962.pdf', 'certificado'),
(116, 17, '../uploads/estudiantes/vacunas/VACUNAS-1017256962.pdf', 'vacunas'),
(117, 18, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1020489927.pdf', 'anticuerpos'),
(118, 18, '../uploads/estudiantes/arl/ARL-1020489927.pdf', 'arl'),
(119, 18, '../uploads/estudiantes/documentos/DI-1020489927.pdf', 'documento'),
(120, 18, '../uploads/estudiantes/eps/EPS-1020489927.pdf', 'eps'),
(121, 18, '../uploads/estudiantes/hojadevida/HV-1020489927.pdf', 'hojadevida'),
(122, 18, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1020489927.pdf', 'certificado'),
(123, 18, '../uploads/estudiantes/vacunas/VACUNAS-1020489927.pdf', 'vacunas'),
(124, 19, '../uploads/estudiantes/arl/ARL-1037649861.pdf', 'arl'),
(125, 19, '../uploads/estudiantes/documentos/DI-1037649861.pdf', 'documento'),
(126, 19, '../uploads/estudiantes/eps/EPS-1037649861.pdf', 'eps'),
(127, 19, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037649861.pdf', 'certificado'),
(128, 19, '../uploads/estudiantes/vacunas/VACUNAS-1037649861.pdf', 'vacunas'),
(129, 20, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152443144.pdf', 'anticuerpos'),
(130, 20, '../uploads/estudiantes/arl/ARL-1152443144.pdf', 'arl'),
(131, 20, '../uploads/estudiantes/documentos/DI-1152443144.pdf', 'documento'),
(132, 20, '../uploads/estudiantes/eps/EPS-1152443144.pdf', 'eps'),
(133, 20, '../uploads/estudiantes/hojadevida/HV-1152443144.pdf', 'hojadevida'),
(134, 20, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL.pdf', 'certificado'),
(135, 20, '../uploads/estudiantes/vacunas/VACUNAS-1152443144.pdf', 'vacunas'),
(136, 21, '../uploads/estudiantes/arl/ARL-1036954925.pdf', 'arl'),
(137, 21, '../uploads/estudiantes/documentos/DI-1036954925.pdf', 'documento'),
(138, 21, '../uploads/estudiantes/eps/EPS-1036954925.pdf', 'eps'),
(139, 21, '../uploads/estudiantes/hojadevida/HV-1036954925.pdf', 'hojadevida'),
(140, 21, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1036954925.pdf', 'certificado'),
(141, 21, '../uploads/estudiantes/vacunas/VACUNAS-1036954925.pdf', 'vacunas'),
(142, 21, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1036954925.pdf', 'adicional'),
(143, 22, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017241099.pdf', 'anticuerpos'),
(144, 22, '../uploads/estudiantes/arl/ARL-1017241099.pdf', 'arl'),
(145, 22, '../uploads/estudiantes/documentos/DI-1017241099.pdf', 'documento'),
(146, 22, '../uploads/estudiantes/eps/EPS-1017241099.pdf', 'eps'),
(147, 22, '../uploads/estudiantes/hojadevida/HV-1017241099.pdf', 'hojadevida'),
(148, 22, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017241099.pdf', 'certificado'),
(149, 22, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1017241099.pdf', 'adicional'),
(150, 22, '../uploads/estudiantes/vacunas/VACUNA COVID-1017241099.pdf', 'vacunas'),
(151, 22, '../uploads/estudiantes/vacunas/VACUNAS-1017241099.pdf', 'vacunas'),
(152, 24, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1152459242.pdf', 'anticuerpos'),
(153, 24, '../uploads/estudiantes/documentos/DI-1152459242.pdf', 'documento'),
(154, 24, '../uploads/estudiantes/eps/EPS-1152459242.pdf', 'eps'),
(155, 24, '../uploads/estudiantes/hojadevida/HV-1152459242.pdf', 'hojadevida'),
(156, 24, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152459242.pdf', 'certificado'),
(157, 24, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1152459242.pdf', 'adicional'),
(158, 24, '../uploads/estudiantes/poliza/PÓLIZA RC-1152459242.pdf', 'poliza'),
(159, 24, '../uploads/estudiantes/vacunas/VACUNA COVID-1152459242.pdf', 'vacunas'),
(160, 24, '../uploads/estudiantes/vacunas/VACUNAS-1152459242.pdf', 'vacunas'),
(161, 25, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1038807478.pdf', 'anticuerpos'),
(162, 25, '../uploads/estudiantes/arl/ARL-1038807478.pdf', 'arl'),
(163, 25, '../uploads/estudiantes/documentos/DI-1038807478.pdf', 'documento'),
(164, 25, '../uploads/estudiantes/eps/EPS-1038807478.pdf', 'eps'),
(165, 25, '../uploads/estudiantes/hojadevida/HV-1038807478.pdf', 'hojadevida'),
(166, 25, '../uploads/estudiantes/certificados/INUDCCIÓN VIRTUAL-1038807478.pdf', 'certificado'),
(167, 25, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1038807478.pdf', 'adicional'),
(168, 25, '../uploads/estudiantes/vacunas/VACUNA COVID-1038807478.pdf', 'vacunas'),
(169, 25, '../uploads/estudiantes/vacunas/VACUNAS-1038807478.pdf', 'vacunas'),
(170, 26, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017262035.pdf', 'anticuerpos'),
(171, 26, '../uploads/estudiantes/arl/ARL-1017262035.pdf', 'arl'),
(172, 26, '../uploads/estudiantes/documentos/DI-1017262035.pdf', 'documento'),
(173, 26, '../uploads/estudiantes/eps/EPS-1017262035.pdf', 'eps'),
(174, 26, '../uploads/estudiantes/hojadevida/HV-1017262035.pdf', 'hojadevida'),
(175, 26, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017262035.pdf', 'certificado'),
(176, 26, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1017262035.pdf', 'adicional'),
(177, 26, '../uploads/estudiantes/vacunas/VACUNA COVID-1017262035.pdf', 'vacunas'),
(178, 26, '../uploads/estudiantes/vacunas/VACUNAS-1017262035.pdf', 'vacunas'),
(179, 27, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1126964876.pdf', 'anticuerpos'),
(180, 27, '../uploads/estudiantes/arl/ARL-1126964876.pdf', 'arl'),
(181, 27, '../uploads/estudiantes/documentos/DI-1126964876.pdf', 'documento'),
(182, 27, '../uploads/estudiantes/eps/EPS-1126964876.pdf', 'eps'),
(183, 27, '../uploads/estudiantes/hojadevida/HV-1126964876.pdf', 'hojadevida'),
(184, 27, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1126964876.pdf', 'certificado'),
(185, 27, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1126964876.pdf', 'adicional'),
(186, 27, '../uploads/estudiantes/vacunas/VACUNA COVID-1126964876.pdf', 'vacunas'),
(187, 27, '../uploads/estudiantes/vacunas/VACUNAS-1126964876.pdf', 'vacunas'),
(188, 28, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1049648986.pdf', 'anticuerpos'),
(189, 28, '../uploads/estudiantes/arl/ARL-1049648986.pdf', 'arl'),
(190, 28, '../uploads/estudiantes/documentos/DI-1049648986.pdf', 'documento'),
(191, 28, '../uploads/estudiantes/eps/EPS-1049648986.pdf', 'eps'),
(192, 28, '../uploads/estudiantes/hojadevida/HV-1049648986.pdf', 'hojadevida'),
(193, 28, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1049648986.pdf', 'certificado'),
(194, 28, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1049648986.pdf', 'adicional'),
(195, 28, '../uploads/estudiantes/vacunas/VACUNAS-1049648986.pdf', 'vacunas'),
(196, 29, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017240451.pdf', 'anticuerpos'),
(197, 29, '../uploads/estudiantes/arl/ARL-1017240451.pdf', 'arl'),
(198, 29, '../uploads/estudiantes/documentos/DI-1017240451.pdf', 'documento'),
(199, 29, '../uploads/estudiantes/eps/EPS-1017240451.pdf', 'eps'),
(200, 29, '../uploads/estudiantes/hojadevida/HV-1017240451.pdf', 'hojadevida'),
(201, 29, '../uploads/estudiantes/certificados/INDUCCION VIRTUAL-1017240451.pdf', 'certificado'),
(202, 29, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1017240451.pdf', 'adicional'),
(203, 29, '../uploads/estudiantes/vacunas/VACUNAS-1017240451.pdf', 'vacunas'),
(204, 30, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1032471332.pdf', 'anticuerpos'),
(205, 30, '../uploads/estudiantes/arl/ARL-1032471332.pdf', 'arl'),
(206, 30, '../uploads/estudiantes/documentos/DI-1032471332.pdf', 'documento'),
(207, 30, '../uploads/estudiantes/eps/EPS-1032471332.pdf', 'eps'),
(208, 30, '../uploads/estudiantes/hojadevida/HV-1032471332.pdf', 'hojadevida'),
(209, 30, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1032471332.pdf', 'certificado'),
(210, 30, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1032471332.pdf', 'adicional'),
(211, 30, '../uploads/estudiantes/vacunas/VACUNA COVID-1032471332.pdf', 'vacunas'),
(212, 30, '../uploads/estudiantes/vacunas/VACUNAS-1032471332.pdf', 'vacunas'),
(213, 32, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1214742571.pdf', 'anticuerpos'),
(214, 32, '../uploads/estudiantes/arl/ARL-1214742571.pdf', 'arl'),
(215, 32, '../uploads/estudiantes/documentos/DI-1214742571.pdf', 'documento'),
(216, 32, '../uploads/estudiantes/eps/EPS-1214742571.pdf', 'eps'),
(217, 32, '../uploads/estudiantes/hojadevida/HV-1214742571.pdf', 'hojadevida'),
(218, 32, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1214742571.pdf', 'certificado'),
(219, 32, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1214742571.pdf', 'adicional'),
(220, 32, '../uploads/estudiantes/vacunas/VACUNAS-1214742571.pdf', 'vacunas'),
(221, 33, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1214742571.pdf', 'anticuerpos'),
(222, 33, '../uploads/estudiantes/arl/ARL-1214742571.pdf', 'arl'),
(223, 33, '../uploads/estudiantes/documentos/DI-1214742571.pdf', 'documento'),
(224, 33, '../uploads/estudiantes/eps/EPS-1214742571.pdf', 'eps'),
(225, 33, '../uploads/estudiantes/hojadevida/HV-1214742571.pdf', 'hojadevida'),
(226, 33, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1214742571.pdf', 'certificado'),
(227, 33, '../uploads/estudiantes/vacunas/VACUNAS-1214742571.pdf', 'vacunas'),
(228, 33, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1061771341.pdf', 'adicional'),
(229, 34, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152464663.pdf', 'anticuerpos'),
(230, 34, '../uploads/estudiantes/arl/ARL-1152464663.pdf', 'arl'),
(231, 34, '../uploads/estudiantes/documentos/DI-1152464663.pdf', 'documento'),
(232, 34, '../uploads/estudiantes/eps/EPS-1152464663.pdf', 'eps'),
(233, 34, '../uploads/estudiantes/hojadevida/HV-1152464663.pdf', 'hojadevida'),
(234, 34, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152464663.pdf', 'certificado'),
(235, 34, '../uploads/estudiantes/vacunas/VACUNAS-1152464663.pdf', 'vacunas'),
(236, 34, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1152464663.pdf', 'adicional'),
(237, 35, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1037636838.pdf', 'anticuerpos'),
(238, 35, '../uploads/estudiantes/arl/ARL-1037636838.pdf', 'arl'),
(239, 35, '../uploads/estudiantes/documentos/DI-1037636838.pdf', 'documento'),
(240, 35, '../uploads/estudiantes/eps/EPS-1037636838.pdf', 'eps'),
(241, 35, '../uploads/estudiantes/hojadevida/HV-1037636838.pdf', 'hojadevida'),
(242, 35, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037636838.pdf', 'certificado'),
(243, 35, '../uploads/estudiantes/adicional/PEDAGÓGICO PAMELA-1037636838.pdf', 'adicional'),
(244, 35, '../uploads/estudiantes/vacunas/VACUNAS-1037636838.pdf', 'vacunas'),
(245, 36, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152450008.pdf', 'anticuerpos'),
(246, 36, '../uploads/estudiantes/arl/ARL-1152450008.pdf', 'arl'),
(247, 36, '../uploads/estudiantes/documentos/DI-1152450008.pdf', 'documento'),
(248, 36, '../uploads/estudiantes/eps/EPS-1152450008.pdf', 'eps'),
(249, 36, '../uploads/estudiantes/hojadevida/HV-1152450008.pdf', 'hojadevida'),
(250, 36, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152450008.pdf', 'certificado'),
(251, 36, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1152450008.pdf', 'adicional'),
(252, 36, '../uploads/estudiantes/vacunas/VACUNA COVID-1152450008.pdf', 'vacunas'),
(253, 36, '../uploads/estudiantes/vacunas/VACUNAS-1152450008.pdf', 'vacunas'),
(254, 37, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037658449.pdf', 'anticuerpos'),
(255, 37, '../uploads/estudiantes/arl/ARL-1037658449.pdf', 'arl'),
(256, 37, '../uploads/estudiantes/documentos/DI-1037658449.pdf', 'documento'),
(257, 37, '../uploads/estudiantes/eps/EPS-1037658449.pdf', 'eps'),
(258, 37, '../uploads/estudiantes/hojadevida/HV-1037658449.pdf', 'hojadevida'),
(259, 37, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037658449.pdf', 'certificado'),
(260, 37, '../uploads/estudiantes/vacunas/VACUNAS-1037658449.pdf', 'vacunas'),
(261, 38, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152223530.pdf', 'anticuerpos'),
(262, 38, '../uploads/estudiantes/arl/ARL-1152223530.pdf', 'arl'),
(263, 38, '../uploads/estudiantes/documentos/DI-1152223530.pdf', 'documento'),
(264, 38, '../uploads/estudiantes/eps/EPS-1152223530.pdf', 'eps'),
(265, 38, '../uploads/estudiantes/hojadevida/HV 1152223530.pdf', 'hojadevida'),
(266, 38, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152223530.pdf', 'certificado'),
(267, 38, '../uploads/estudiantes/vacunas/VACUNAS-1152223530.pdf', 'vacunas'),
(268, 38, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1152223530.pdf', 'adicional'),
(269, 39, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037658949.pdf', 'anticuerpos'),
(270, 39, '../uploads/estudiantes/arl/ARL-1037658949.pdf', 'arl'),
(271, 39, '../uploads/estudiantes/documentos/DI-1037658949.pdf', 'documento'),
(272, 39, '../uploads/estudiantes/eps/EPS-1037658949.pdf', 'eps'),
(273, 39, '../uploads/estudiantes/hojadevida/HV-1037658949.pdf', 'hojadevida'),
(274, 39, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037658949.pdf', 'certificado'),
(275, 39, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1037658949.pdf', 'adicional'),
(276, 39, '../uploads/estudiantes/vacunas/VACUNAS-1037658949.pdf', 'vacunas'),
(277, 41, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1233342235.pdf', 'anticuerpos'),
(278, 41, '../uploads/estudiantes/arl/ARL-1233342235.pdf', 'arl'),
(279, 41, '../uploads/estudiantes/documentos/DI-1233342235.pdf', 'documento'),
(280, 41, '../uploads/estudiantes/eps/EPS 1233342235.pdf', 'eps'),
(281, 41, '../uploads/estudiantes/hojadevida/HV-1233342235.pdf', 'hojadevida'),
(284, 41, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1233342235.pdf', 'certificado'),
(285, 41, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1233342235.pdf', 'adicional'),
(286, 41, '../uploads/estudiantes/vacunas/VACUNAS-1233342235.pdf', 'vacunas'),
(287, 42, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1110578322.pdf', 'anticuerpos'),
(288, 42, '../uploads/estudiantes/arl/ARL-1110578322.pdf', 'arl'),
(289, 42, '../uploads/estudiantes/documentos/DI-1110578322.pdf', 'documento'),
(290, 42, '../uploads/estudiantes/eps/EPS-1110578322.pdf', 'eps'),
(291, 42, '../uploads/estudiantes/hojadevida/HV-1110578322.pdf', 'hojadevida'),
(292, 42, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1110578322.pdf', 'certificado'),
(293, 42, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1110578322.pdf', 'adicional'),
(294, 42, '../uploads/estudiantes/vacunas/VACUNAS-1110578322.pdf', 'vacunas'),
(295, 43, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1037646983.pdf', 'anticuerpos'),
(296, 43, '../uploads/estudiantes/arl/ARL-1037646983.pdf', 'arl'),
(297, 43, '../uploads/estudiantes/documentos/DI-1037646983.pdf', 'documento'),
(298, 43, '../uploads/estudiantes/eps/EPS-1037646983.pdf', 'eps'),
(299, 43, '../uploads/estudiantes/hojadevida/HV-1037646983.pdf', 'hojadevida'),
(300, 43, '../uploads/estudiantes/certificados/INDUCCION VIRTUAL-1037646983.pdf', 'certificado'),
(301, 43, '../uploads/estudiantes/vacunas/VACUNAS-1037646983.pdf', 'vacunas'),
(302, 44, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017270709.pdf', 'anticuerpos'),
(303, 44, '../uploads/estudiantes/arl/ARL-1017270709.pdf', 'arl'),
(304, 44, '../uploads/estudiantes/documentos/DI-1017270709.pdf', 'documento'),
(305, 44, '../uploads/estudiantes/hojadevida/HV-1017270709.pdf', 'hojadevida'),
(306, 44, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017270709.pdf', 'certificado'),
(307, 44, '../uploads/estudiantes/adicional/PACTO PEDAGOICO-1017270709.pdf', 'adicional'),
(308, 44, '../uploads/estudiantes/vacunas/VACUNAS-1017270709.pdf', 'vacunas'),
(309, 45, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1039458715.pdf', 'anticuerpos'),
(310, 45, '../uploads/estudiantes/arl/ARL-1039458715.pdf', 'arl'),
(311, 45, '../uploads/estudiantes/documentos/DI-1039458715.pdf', 'documento'),
(312, 45, '../uploads/estudiantes/hojadevida/HV-1039458715.pdf', 'hojadevida'),
(313, 45, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1039458715.pdf', 'certificado'),
(314, 45, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1039458715.pdf', 'adicional'),
(315, 45, '../uploads/estudiantes/vacunas/VACUNAS-1039458715.pdf', 'vacunas'),
(317, 46, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1042772132.pdf', 'anticuerpos'),
(318, 46, '../uploads/estudiantes/arl/ARL-1042772132.pdf', 'arl'),
(319, 46, '../uploads/estudiantes/documentos/DI-1042772132.pdf', 'documento'),
(320, 46, '../uploads/estudiantes/eps/EPS-1042772132.pdf', 'eps'),
(321, 46, '../uploads/estudiantes/hojadevida/HV-1042772132.pdf', 'hojadevida'),
(322, 46, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1042772132.pdf', 'certificado'),
(323, 46, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1042772132.pdf', 'adicional'),
(324, 46, '../uploads/estudiantes/vacunas/VACUNAS-1042772132.pdf', 'vacunas'),
(326, 47, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017265064.pdf', 'anticuerpos'),
(327, 47, '../uploads/estudiantes/arl/ARL-1017265064.pdf', 'arl'),
(328, 47, '../uploads/estudiantes/documentos/CC-1017265064.pdf', 'documento'),
(329, 47, '../uploads/estudiantes/eps/EPS-1017265064.pdf', 'eps'),
(330, 47, '../uploads/estudiantes/hojadevida/HV-1017265064.pdf', 'hojadevida'),
(331, 47, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017265064.pdf', 'certificado'),
(333, 47, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017265064.pdf', 'adicional'),
(334, 47, '../uploads/estudiantes/vacunas/VACUNAS COVID-1017265064.pdf', 'vacunas'),
(335, 47, '../uploads/estudiantes/vacunas/VACUNAS-1017265064.pdf', 'vacunas'),
(336, 48, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152205373.pdf', 'anticuerpos'),
(337, 48, '../uploads/estudiantes/arl/ARL-1152205373.pdf', 'arl'),
(338, 48, '../uploads/estudiantes/documentos/DI-1152205373.pdf', 'documento'),
(339, 48, '../uploads/estudiantes/eps/EPS-1152205373.pdf', 'eps'),
(340, 48, '../uploads/estudiantes/hojadevida/HV-1152205373.pdf', 'hojadevida'),
(341, 48, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152205373.pdf', 'certificado'),
(342, 48, '../uploads/estudiantes/vacunas/VACUNAS-1152205373.pdf', 'vacunas'),
(343, 48, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152205373.pdf', 'adicional'),
(344, 48, '../uploads/estudiantes/vacunas/VACUNA COVID-1152205373.pdf', 'vacunas'),
(345, 49, '../uploads/estudiantes/anticuerpos/ANTICUERPOS  HB Y VARICELA-1037651900.pdf', 'anticuerpos'),
(346, 49, '../uploads/estudiantes/arl/ARL-1037651900.pdf', 'arl'),
(347, 49, '../uploads/estudiantes/documentos/DI-1037651900.pdf', 'documento'),
(348, 49, '../uploads/estudiantes/eps/EPS-1037651900.pdf', 'eps'),
(349, 49, '../uploads/estudiantes/hojadevida/HV-1037651900.pdf', 'hojadevida'),
(350, 49, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037651900.pdf', 'certificado'),
(351, 49, '../uploads/estudiantes/vacunas/VACUNAS-1037651900.pdf', 'vacunas'),
(352, 50, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1020480285.pdf', 'anticuerpos'),
(353, 50, '../uploads/estudiantes/arl/ARL-1020480285.pdf', 'arl'),
(354, 50, '../uploads/estudiantes/documentos/DI-1020480285.pdf', 'documento'),
(355, 50, '../uploads/estudiantes/eps/EPS-1020480285.pdf', 'eps'),
(356, 50, '../uploads/estudiantes/hojadevida/HV-1020480285.pdf', 'hojadevida'),
(357, 50, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1020480285.pdf', 'certificado'),
(358, 50, '../uploads/estudiantes/vacunas/VACUNAS-1020480285.pdf', 'vacunas'),
(359, 51, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HEPATITIS B-1037648538.pdf', 'anticuerpos'),
(360, 51, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1037648538.pdf', 'anticuerpos'),
(361, 51, '../uploads/estudiantes/documentos/DI-1037648538.pdf', 'documento'),
(362, 51, '../uploads/estudiantes/eps/EPS-1037648538.pdf', 'eps'),
(363, 51, '../uploads/estudiantes/hojadevida/HV-1037648538.pdf', 'hojadevida'),
(364, 51, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037648538.pdf', 'certificado'),
(365, 51, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1037648538.pdf', 'adicional'),
(366, 51, '../uploads/estudiantes/vacunas/VACUNA COVID-1037648538.pdf', 'vacunas'),
(367, 51, '../uploads/estudiantes/vacunas/VACUNAS-1037648538.pdf', 'vacunas'),
(368, 52, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1000659784.pdf', 'anticuerpos'),
(369, 52, '../uploads/estudiantes/arl/ARL-1000659784.pdf', 'arl'),
(370, 52, '../uploads/estudiantes/documentos/DI-1000659784.pdf', 'documento'),
(371, 52, '../uploads/estudiantes/eps/EPS-1000659784.pdf', 'eps'),
(372, 52, '../uploads/estudiantes/hojadevida/HV-1000659784.pdf', 'hojadevida'),
(373, 52, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1000659784.pdf', 'certificado'),
(374, 52, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1000659784.pdf', 'adicional'),
(375, 52, '../uploads/estudiantes/vacunas/VACUNAS-1000659784.pdf', 'vacunas'),
(376, 16, '../uploads/estudiantes/arl/ARL-1017250081.pdf', 'arl'),
(377, 16, '../uploads/estudiantes/eps/EPS-1017250081.pdf', 'eps'),
(378, 16, '../uploads/estudiantes/hojadevida/HV-1017250081.pdf', 'hojadevida'),
(379, 16, '../uploads/estudiantes/vacunas/VACUNAS-1017250081.pdf', 'vacunas'),
(380, 16, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017250081.pdf', 'certificado'),
(381, 53, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1152451059.pdf', 'anticuerpos'),
(382, 53, '../uploads/estudiantes/arl/ARL-1152451059.pdf', 'arl'),
(383, 53, '../uploads/estudiantes/documentos/DI-1152451059.pdf', 'documento'),
(384, 53, '../uploads/estudiantes/hojadevida/HV-1152451059.pdf', 'hojadevida'),
(385, 53, '../uploads/estudiantes/vacunas/VACUNAS-1152451059.pdf', 'vacunas'),
(386, 54, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037658448.pdf', 'anticuerpos'),
(387, 54, '../uploads/estudiantes/arl/ARL-1037658448.pdf', 'arl'),
(388, 54, '../uploads/estudiantes/documentos/DI-1037658448.pdf', 'documento'),
(389, 54, '../uploads/estudiantes/eps/EPS-1037658448.pdf', 'eps'),
(390, 54, '../uploads/estudiantes/hojadevida/HV-1037658448.pdf', 'hojadevida'),
(391, 54, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037658448.pdf', 'certificado'),
(392, 54, '../uploads/estudiantes/adicional/PACTO PEDAOGICO-1037658448.pdf', 'adicional'),
(393, 54, '../uploads/estudiantes/vacunas/VACUNAS-1037658448.pdf', 'vacunas'),
(394, 55, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1077459343.pdf', 'anticuerpos'),
(395, 55, '../uploads/estudiantes/documentos/DI-1077459343.pdf', 'documento'),
(396, 55, '../uploads/estudiantes/eps/EPS-1077459343.pdf', 'eps'),
(397, 55, '../uploads/estudiantes/hojadevida/HV-1077459343.pdf', 'hojadevida'),
(398, 55, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1077459343.pdf', 'certificado'),
(399, 55, '../uploads/estudiantes/vacunas/VACUNAS-1077459343.pdf', 'vacunas'),
(400, 55, '../uploads/estudiantes/vacunas/VACUNA COVID-1077459343.jpeg', 'vacunas'),
(401, 56, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1026159892.pdf', 'anticuerpos'),
(402, 56, '../uploads/estudiantes/arl/ARL-1026159892.pdf', 'arl'),
(403, 56, '../uploads/estudiantes/documentos/DI-1026159892.pdf', 'documento'),
(404, 56, '../uploads/estudiantes/eps/EPS-1026159892.pdf', 'eps'),
(405, 56, '../uploads/estudiantes/hojadevida/HV-1026159892.pdf', 'hojadevida'),
(406, 56, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1026159892.pdf', 'certificado'),
(407, 56, '../uploads/estudiantes/vacunas/VACUNA COVID-1026159892.pdf', 'vacunas'),
(408, 56, '../uploads/estudiantes/vacunas/VACUNAS-1026159892.pdf', 'vacunas'),
(409, 57, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-501362.pdf', 'anticuerpos'),
(410, 57, '../uploads/estudiantes/arl/ARL-501362.pdf', 'arl'),
(411, 57, '../uploads/estudiantes/documentos/DI-501362.pdf', 'documento'),
(412, 57, '../uploads/estudiantes/eps/EPS-501362.pdf', 'eps'),
(413, 57, '../uploads/estudiantes/hojadevida/HV-501362.pdf', 'hojadevida'),
(414, 57, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-501362.pdf', 'certificado'),
(415, 57, '../uploads/estudiantes/vacunas/VACUNA COVID-501362.pdf', 'vacunas'),
(416, 57, '../uploads/estudiantes/vacunas/VACUNAS-501362.pdf', 'vacunas'),
(417, 58, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1090446986.pdf', 'anticuerpos'),
(418, 58, '../uploads/estudiantes/hojadevida/HV-1090446986.pdf', 'hojadevida'),
(419, 58, '../uploads/estudiantes/vacunas/VACUNAS COVID-1090446986.pdf', 'vacunas'),
(420, 58, '../uploads/estudiantes/vacunas/VACUNAS-1090446986.pdf', 'vacunas'),
(421, 59, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1038417076.pdf', 'anticuerpos'),
(422, 59, '../uploads/estudiantes/arl/ARL-1038417076.pdf', 'arl'),
(423, 59, '../uploads/estudiantes/documentos/DI-1038417076.pdf', 'documento'),
(424, 59, '../uploads/estudiantes/hojadevida/HV-1038417076.pdf', 'hojadevida'),
(425, 59, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1038417076.pdf', 'certificado'),
(426, 59, '../uploads/estudiantes/vacunas/VACUNAS-1038417076.pdf', 'vacunas'),
(427, 60, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017247627.pdf', 'anticuerpos'),
(428, 60, '../uploads/estudiantes/arl/ARL-1017247627.pdf', 'arl'),
(429, 60, '../uploads/estudiantes/documentos/DI-1017247627.pdf', 'documento'),
(430, 60, '../uploads/estudiantes/hojadevida/HV-1017247627.pdf', 'hojadevida'),
(431, 60, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017247627.pdf', 'certificado'),
(432, 60, '../uploads/estudiantes/vacunas/VACUNAS-1017247627.pdf', 'vacunas'),
(433, 61, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1039469537.pdf', 'anticuerpos'),
(434, 61, '../uploads/estudiantes/arl/ARL-1039469537.pdf', 'arl'),
(435, 61, '../uploads/estudiantes/hojadevida/HV-1039469537.pdf', 'hojadevida'),
(436, 61, '../uploads/estudiantes/documentos/ID-1039469537.pdf', 'documento'),
(437, 61, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1039469537.pdf', 'certificado'),
(438, 61, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1039469537.pdf', 'adicional'),
(439, 61, '../uploads/estudiantes/vacunas/VACUNAS-1039469537.pdf', 'vacunas'),
(440, 62, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1036678281.pdf', 'anticuerpos'),
(441, 62, '../uploads/estudiantes/arl/ARL-1036678281.pdf', 'arl'),
(442, 62, '../uploads/estudiantes/documentos/DI-1036678281.pdf', 'documento'),
(443, 62, '../uploads/estudiantes/hojadevida/HV-1036678281.pdf', 'hojadevida'),
(444, 62, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1036678281.pdf', 'certificado'),
(445, 62, '../uploads/estudiantes/vacunas/VACUNAS COVID-1036678281.pdf', 'vacunas'),
(446, 62, '../uploads/estudiantes/vacunas/VACUNAS-1036678281.pdf', 'vacunas'),
(447, 63, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1020449607.pdf', 'anticuerpos'),
(448, 63, '../uploads/estudiantes/arl/ARL-1020449607.pdf', 'arl'),
(449, 63, '../uploads/estudiantes/documentos/DI-1020449607.pdf', 'documento'),
(450, 63, '../uploads/estudiantes/eps/EPS-1020449607.pdf', 'eps'),
(451, 63, '../uploads/estudiantes/hojadevida/HV-1020449607.pdf', 'hojadevida'),
(452, 63, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1020449607.pdf', 'certificado'),
(453, 63, '../uploads/estudiantes/vacunas/VACUNAS-1020449607.pdf', 'vacunas'),
(454, 64, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1017249303.pdf', 'anticuerpos'),
(455, 64, '../uploads/estudiantes/documentos/DI-1017249303.pdf', 'documento'),
(456, 64, '../uploads/estudiantes/eps/EPS-1017249304.pdf', 'eps'),
(457, 64, '../uploads/estudiantes/hojadevida/HV-1017249303.pdf', 'hojadevida'),
(458, 64, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017249304.pdf', 'certificado'),
(459, 64, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017249304.pdf', 'adicional'),
(460, 64, '../uploads/estudiantes/vacunas/VACUNAS-1017249303.pdf', 'vacunas'),
(461, 65, '../uploads/estudiantes/arl/ARL-1037658577.pdf', 'arl'),
(462, 65, '../uploads/estudiantes/documentos/DI-1037658577.pdf', 'documento'),
(463, 65, '../uploads/estudiantes/eps/EPS-1037658577.pdf', 'eps'),
(464, 65, '../uploads/estudiantes/hojadevida/HV-1037658577.pdf', 'hojadevida'),
(465, 65, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037658577.pdf', 'certificado'),
(466, 65, '../uploads/estudiantes/vacunas/VACUNAS-1037658577.pdf', 'vacunas'),
(467, 66, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1035437600.pdf', 'anticuerpos'),
(468, 66, '../uploads/estudiantes/arl/ARL-1035437600.pdf', 'arl'),
(469, 66, '../uploads/estudiantes/documentos/DI-1035437600.pdf', 'documento'),
(470, 66, '../uploads/estudiantes/eps/EPS-1035437600.pdf', 'eps'),
(471, 66, '../uploads/estudiantes/hojadevida/HV-1035437600.pdf', 'hojadevida'),
(472, 66, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1035437600.pdf', 'certificado'),
(473, 66, '../uploads/estudiantes/vacunas/VACUNA COVID-1035437600.pdf', 'vacunas'),
(474, 66, '../uploads/estudiantes/vacunas/VACUNAS-1035437600.pdf', 'vacunas'),
(475, 67, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1017219045.pdf', 'anticuerpos'),
(476, 67, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1017219045.pdf', 'anticuerpos'),
(477, 67, '../uploads/estudiantes/arl/ARL-1017219045.pdf', 'arl'),
(478, 67, '../uploads/estudiantes/documentos/DI-1017219045.pdf', 'documento'),
(479, 67, '../uploads/estudiantes/eps/EPS-1017219045.pdf', 'eps'),
(480, 67, '../uploads/estudiantes/hojadevida/HV-1017219045.pdf', 'hojadevida'),
(481, 67, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017219045.pdf', 'certificado'),
(482, 67, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017219043.pdf', 'adicional'),
(483, 67, '../uploads/estudiantes/vacunas/VACUNAS-1017219045.pdf', 'vacunas'),
(484, 68, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1017224931.pdf', 'anticuerpos'),
(485, 68, '../uploads/estudiantes/arl/ARL-1017224931.pdf', 'arl'),
(486, 68, '../uploads/estudiantes/documentos/DI-1017224931.pdf', 'documento'),
(487, 68, '../uploads/estudiantes/eps/EPS-1017224931.pdf', 'eps'),
(488, 68, '../uploads/estudiantes/hojadevida/HV-1017224931.pdf', 'hojadevida'),
(489, 68, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017224931.pdf', 'certificado'),
(490, 68, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017224931.pdf', 'adicional'),
(491, 68, '../uploads/estudiantes/vacunas/VACUNAS-1017224931.pdf', 'vacunas'),
(492, 69, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1152462391.pdf', 'anticuerpos'),
(493, 69, '../uploads/estudiantes/arl/ARL-1152462391.pdf', 'arl'),
(494, 69, '../uploads/estudiantes/documentos/DI-1152462391.pdf', 'documento'),
(495, 69, '../uploads/estudiantes/eps/EPS-1152462391.pdf', 'eps'),
(496, 69, '../uploads/estudiantes/hojadevida/HV-1152462391.pdf', 'hojadevida'),
(497, 69, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152462391.pdf', 'certificado'),
(498, 69, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152462391.pdf', 'adicional'),
(499, 69, '../uploads/estudiantes/vacunas/VACUNAS-1152462391.pdf', 'vacunas'),
(500, 70, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1065837023.pdf', 'anticuerpos'),
(501, 70, '../uploads/estudiantes/arl/ARL-1065837023.pdf', 'arl'),
(502, 70, '../uploads/estudiantes/documentos/DI-1065837023.pdf', 'documento'),
(503, 70, '../uploads/estudiantes/eps/EPS-1065837023.pdf', 'eps'),
(504, 70, '../uploads/estudiantes/hojadevida/HV-1065837023.pdf', 'hojadevida'),
(505, 70, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1065837023.pdf', 'certificado'),
(506, 70, '../uploads/estudiantes/vacunas/VACUNAS-1065837023.pdf', 'vacunas'),
(507, 71, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA Y HB-1017261790.pdf', 'anticuerpos'),
(508, 71, '../uploads/estudiantes/arl/ARL-1017261790.pdf', 'arl'),
(509, 71, '../uploads/estudiantes/documentos/DI-1017261790.pdf', 'documento'),
(510, 71, '../uploads/estudiantes/eps/EPS-1017261790.pdf', 'eps'),
(511, 71, '../uploads/estudiantes/hojadevida/HV-1017261790.pdf', 'hojadevida'),
(512, 71, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017261790.pdf', 'certificado'),
(513, 71, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017261790.pdf', 'adicional'),
(514, 71, '../uploads/estudiantes/vacunas/VACUNAS-1017261790.pdf', 'vacunas'),
(515, 72, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1086223976.pdf', 'anticuerpos'),
(516, 72, '../uploads/estudiantes/arl/ARL-1086223976.pdf', 'arl'),
(517, 72, '../uploads/estudiantes/documentos/DI-1086223976.pdf', 'documento'),
(518, 72, '../uploads/estudiantes/eps/EPS-1086223976.pdf', 'eps'),
(519, 72, '../uploads/estudiantes/hojadevida/HV-1086223976.pdf', 'hojadevida'),
(520, 72, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1086223976.pdf', 'certificado'),
(521, 72, '../uploads/estudiantes/vacunas/VACUNAS-1086223976.pdf', 'vacunas'),
(522, 73, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1234988957.pdf', 'anticuerpos'),
(523, 73, '../uploads/estudiantes/arl/ARL-1234988957.pdf', 'arl'),
(524, 73, '../uploads/estudiantes/documentos/DI-1234988957.pdf', 'documento'),
(525, 73, '../uploads/estudiantes/eps/EPS-1234988957.pdf', 'eps'),
(526, 73, '../uploads/estudiantes/hojadevida/HV-1234988957.pdf', 'hojadevida'),
(527, 73, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1234988957.pdf', 'certificado'),
(528, 73, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1234988957.pdf', 'adicional'),
(529, 73, '../uploads/estudiantes/vacunas/VACUNAS-1234988957.pdf', 'vacunas'),
(530, 74, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1036685440.pdf', 'anticuerpos'),
(531, 74, '../uploads/estudiantes/arl/ARL-1036685440.pdf', 'arl'),
(532, 74, '../uploads/estudiantes/documentos/DI-1036685440.pdf', 'documento'),
(533, 74, '../uploads/estudiantes/eps/EPS-1036685440.pdf', 'eps'),
(534, 74, '../uploads/estudiantes/hojadevida/HV-1036685440.pdf', 'hojadevida'),
(535, 74, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1036685440.pdf', 'certificado'),
(536, 74, '../uploads/estudiantes/vacunas/VACUNAS-1036685440.pdf', 'vacunas'),
(537, 7, '../uploads/estudiantes/eps/EPS-28559544.pdf', 'eps'),
(538, 7, '../uploads/estudiantes/hojadevida/HV-28559544.pdf', 'hojadevida'),
(539, 7, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-28559544.pdf', 'certificado'),
(540, 7, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-28559544.pdf', 'adicional'),
(541, 7, '../uploads/estudiantes/vacunas/VACUNAS-28559544.pdf', 'vacunas'),
(542, 75, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1152460240.pdf', 'anticuerpos'),
(543, 75, '../uploads/estudiantes/arl/ARL-1152460240.pdf', 'arl'),
(544, 75, '../uploads/estudiantes/documentos/DI-1152460240.pdf', 'documento'),
(545, 75, '../uploads/estudiantes/eps/EPS-1152460240.pdf', 'eps'),
(546, 75, '../uploads/estudiantes/hojadevida/HV-1152460240.pdf', 'hojadevida'),
(547, 75, '../uploads/estudiantes/hojadevida/HV-1152460240.pdf', 'hojadevida'),
(548, 75, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152460240.pdf', 'certificado'),
(549, 75, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152460240.pdf', 'adicional'),
(550, 75, '../uploads/estudiantes/vacunas/VACUNAS-1152460240.pdf', 'vacunas'),
(551, 76, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1085334246.pdf', 'anticuerpos'),
(552, 76, '../uploads/estudiantes/arl/ARL-1085334246.pdf', 'arl'),
(553, 76, '../uploads/estudiantes/documentos/DI-1085334246.pdf', 'documento'),
(554, 76, '../uploads/estudiantes/eps/EPS-1085334246.pdf', 'eps'),
(555, 76, '../uploads/estudiantes/hojadevida/HV-1085334246.pdf', 'hojadevida'),
(556, 76, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1085334246.pdf', 'certificado'),
(557, 76, '../uploads/estudiantes/vacunas/VACUNACION COVID-1085334246.pdf', 'vacunas'),
(558, 76, '../uploads/estudiantes/vacunas/VACUNAS-1085334246.pdf', 'vacunas'),
(559, 77, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE HB-1007872669.pdf', 'anticuerpos'),
(560, 77, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE VARICELA-1007872669.pdf', 'anticuerpos'),
(561, 77, '../uploads/estudiantes/documentos/DI-1007872669.pdf', 'documento'),
(562, 77, '../uploads/estudiantes/eps/EPS-1007872669.pdf', 'eps'),
(563, 77, '../uploads/estudiantes/hojadevida/HV-1007872669.pdf', 'hojadevida'),
(564, 77, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1007872669.pdf', 'certificado'),
(565, 77, '../uploads/estudiantes/vacunas/VACUNAS COVID-1007872669.pdf', 'vacunas'),
(566, 77, '../uploads/estudiantes/vacunas/VACUNAS-1007872669.pdf', 'vacunas'),
(567, 78, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152436231.pdf', 'anticuerpos'),
(568, 78, '../uploads/estudiantes/arl/ARL-1152436231.pdf', 'arl'),
(569, 78, '../uploads/estudiantes/documentos/DI-1152436231.pdf', 'documento'),
(570, 78, '../uploads/estudiantes/eps/EPS-1152436231.pdf', 'eps'),
(571, 78, '../uploads/estudiantes/hojadevida/HV-1152436231.pdf', 'hojadevida'),
(572, 78, '../uploads/estudiantes/vacunas/VACUNAS-1152436231.pdf', 'vacunas'),
(573, 79, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152470033.pdf', 'anticuerpos'),
(574, 79, '../uploads/estudiantes/arl/ARL-1152470033.pdf', 'arl'),
(575, 79, '../uploads/estudiantes/documentos/DI-1152470033.pdf', 'documento'),
(576, 79, '../uploads/estudiantes/eps/EPS-1152470033.pdf', 'eps'),
(577, 79, '../uploads/estudiantes/hojadevida/HV-1152470033.pdf', 'hojadevida'),
(578, 79, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152470033.pdf', 'certificado'),
(579, 79, '../uploads/estudiantes/vacunas/VACUNA COVID-1152470033.pdf', 'vacunas'),
(580, 79, '../uploads/estudiantes/vacunas/VACUNAS-1152470033.pdf', 'vacunas'),
(581, 80, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1066741407.pdf', 'anticuerpos'),
(582, 80, '../uploads/estudiantes/documentos/DI-1066741407.pdf', 'documento'),
(583, 80, '../uploads/estudiantes/eps/EPS-1066741407.pdf', 'eps'),
(584, 80, '../uploads/estudiantes/hojadevida/HV-1066741407.pdf', 'hojadevida'),
(585, 80, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1066741407.pdf', 'adicional'),
(586, 80, '../uploads/estudiantes/vacunas/VACUNAS-1066741407.pdf', 'vacunas'),
(587, 81, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1059712674.pdf', 'anticuerpos'),
(588, 81, '../uploads/estudiantes/documentos/DI-1059712674.pdf', 'documento'),
(589, 81, '../uploads/estudiantes/eps/EPS-1059712674.pdf', 'eps'),
(590, 81, '../uploads/estudiantes/hojadevida/HV-1059712674.pdf', 'hojadevida'),
(591, 81, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1059712674.pdf', 'certificado'),
(592, 81, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1059712674.pdf', 'adicional'),
(593, 81, '../uploads/estudiantes/vacunas/VACUNA COVID-1059712674.pdf', 'vacunas'),
(594, 81, '../uploads/estudiantes/vacunas/VACUNAS-1059712674.pdf', 'vacunas'),
(595, 82, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1037655049.pdf', 'anticuerpos'),
(596, 82, '../uploads/estudiantes/arl/ARL-1037655049.pdf', 'arl'),
(597, 82, '../uploads/estudiantes/documentos/DI-1037655049.pdf', 'documento'),
(598, 82, '../uploads/estudiantes/eps/EPS-1037655049.pdf', 'eps'),
(599, 82, '../uploads/estudiantes/hojadevida/HV-1037655049.pdf', 'hojadevida'),
(600, 82, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037655049.pdf', 'certificado'),
(601, 82, '../uploads/estudiantes/vacunas/VACUNA COVID-1037655049.pdf', 'vacunas'),
(602, 82, '../uploads/estudiantes/vacunas/VACUNAS-1037655049.pdf', 'vacunas'),
(603, 83, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1005322218.pdf', 'anticuerpos'),
(604, 83, '../uploads/estudiantes/arl/ARL-1005322218.pdf', 'arl'),
(605, 83, '../uploads/estudiantes/documentos/DI-1005322218.pdf', 'documento'),
(607, 83, '../uploads/estudiantes/hojadevida/HV-1005322218.pdf', 'hojadevida'),
(608, 83, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1005322218.pdf', 'certificado'),
(609, 83, '../uploads/estudiantes/vacunas/VACUNAS COVID-1005322218.pdf', 'vacunas'),
(610, 83, '../uploads/estudiantes/vacunas/VACUNAS-1005322218.pdf', 'vacunas'),
(611, 84, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1077471761.pdf', 'anticuerpos'),
(612, 84, '../uploads/estudiantes/documentos/DI-1077471761.pdf', 'documento'),
(613, 84, '../uploads/estudiantes/arl/ARL-1077471761.pdf', 'arl'),
(615, 84, '../uploads/estudiantes/eps/EPS-1077471761.pdf', 'eps'),
(616, 84, '../uploads/estudiantes/hojadevida/HV-1077471761.pdf', 'hojadevida'),
(617, 84, '../uploads/estudiantes/vacunas/VACUNA COVID-1077471761.pdf', 'vacunas'),
(618, 84, '../uploads/estudiantes/vacunas/VACUNAS-1077471761.pdf', 'vacunas'),
(619, 85, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1039470850.pdf', 'anticuerpos'),
(620, 85, '../uploads/estudiantes/arl/ARL-1039470850.pdf', 'arl'),
(621, 85, '../uploads/estudiantes/documentos/DI-1039470850.pdf', 'documento'),
(622, 85, '../uploads/estudiantes/eps/EPS-1039470850.pdf', 'eps'),
(623, 85, '../uploads/estudiantes/hojadevida/HV-1039470850.pdf', 'hojadevida'),
(624, 85, '../uploads/estudiantes/vacunas/VACUNA COVID-1039470850.pdf', 'vacunas'),
(625, 85, '../uploads/estudiantes/vacunas/VACUNAS-1039470850.pdf', 'vacunas'),
(626, 85, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1039470850.pdf', 'adicional'),
(627, 83, '../uploads/estudiantes/eps/EPS-1005322218.pdf', 'eps'),
(628, 21, '../uploads/estudiantes/eps/EPS-1036954925.pdf', 'eps'),
(629, 86, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-9774304.pdf', 'anticuerpos'),
(630, 86, '../uploads/estudiantes/documentos/DI-9774304.pdf', 'documento'),
(631, 86, '../uploads/estudiantes/eps/EPS-9774304.pdf', 'eps'),
(632, 86, '../uploads/estudiantes/hojadevida/HV-9774304.pdf', 'hojadevida'),
(633, 86, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-9774304.pdf', 'certificado'),
(634, 86, '../uploads/estudiantes/vacunas/VACUNA COVID-9774304.pdf', 'vacunas'),
(635, 86, '../uploads/estudiantes/vacunas/VACUNAS-9774304.pdf', 'vacunas'),
(636, 88, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1067881542.pdf', 'anticuerpos'),
(637, 88, '../uploads/estudiantes/documentos/DI-1067881542.pdf', 'documento'),
(638, 88, '../uploads/estudiantes/eps/EPS-1067881542.pdf', 'eps'),
(639, 88, '../uploads/estudiantes/hojadevida/HV-1067881542.pdf', 'hojadevida'),
(640, 88, '../uploads/estudiantes/vacunas/VACUNAS-1067881542.pdf', 'vacunas'),
(641, 89, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE HB-1152214238.pdf', 'anticuerpos'),
(642, 89, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE VARICELA-1152214238.pdf', 'anticuerpos'),
(643, 89, '../uploads/estudiantes/documentos/DI-1152214238.pdf', 'documento'),
(644, 89, '../uploads/estudiantes/eps/EPS-1152214238.pdf', 'eps'),
(645, 89, '../uploads/estudiantes/hojadevida/HV-1152214238.pdf', 'hojadevida');
INSERT INTO `documentosestudiantes` (`id`, `id_user`, `file`, `type_document`) VALUES
(646, 89, '../uploads/estudiantes/vacunas/VACUNA COVID-1152214238.pdf', 'vacunas'),
(647, 89, '../uploads/estudiantes/vacunas/VACUNAS-1152214238.pdf', 'vacunas'),
(648, 90, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE HB Y VARICELA-1028005084.pdf', 'anticuerpos'),
(649, 90, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE VARICELA-1028005084.pdf', 'anticuerpos'),
(650, 90, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1028005084.pdf', 'anticuerpos'),
(651, 90, '../uploads/estudiantes/documentos/DI-1028005084.pdf', 'documento'),
(652, 90, '../uploads/estudiantes/eps/EPS-1028005084.pdf', 'eps'),
(653, 90, '../uploads/estudiantes/hojadevida/HV-1028005084.pdf', 'hojadevida'),
(654, 90, '../uploads/estudiantes/vacunas/VACUNA COVID-1028005084.pdf', 'vacunas'),
(655, 90, '../uploads/estudiantes/vacunas/VACUNAS-1028005084.pdf', 'vacunas'),
(656, 91, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE HB-1116801448.pdf', 'anticuerpos'),
(657, 91, '../uploads/estudiantes/anticuerpos/ANTICURPOS DE VARICELA-1116801448.pdf', 'anticuerpos'),
(658, 91, '../uploads/estudiantes/documentos/DI-1116801448.pdf', 'documento'),
(659, 91, '../uploads/estudiantes/eps/EPS-1116801448.pdf', 'eps'),
(660, 91, '../uploads/estudiantes/hojadevida/HV-1116801448.pdf', 'hojadevida'),
(661, 91, '../uploads/estudiantes/vacunas/VACUNA COVID-1116801448.pdf', 'vacunas'),
(662, 91, '../uploads/estudiantes/vacunas/VACUNA-1116801448.pdf', 'vacunas'),
(663, 91, '../uploads/estudiantes/vacunas/VACUNAS-1116801448.pdf', 'vacunas'),
(664, 92, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HEPATITIS B-1143995272.pdf', 'anticuerpos'),
(665, 92, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1143995272.pdf', 'anticuerpos'),
(666, 92, '../uploads/estudiantes/documentos/DI-1143995272.pdf', 'documento'),
(667, 92, '../uploads/estudiantes/eps/EPS-1143995272.pdf', 'eps'),
(668, 92, '../uploads/estudiantes/hojadevida/HV-1143995272.pdf', 'hojadevida'),
(669, 92, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1143995272.pdf', 'certificado'),
(670, 92, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1143995272.docx', 'adicional'),
(671, 92, '../uploads/estudiantes/vacunas/VACUNA COVID-1143995272.pdf', 'vacunas'),
(672, 92, '../uploads/estudiantes/vacunas/VACUNAS-1143995272.pdf', 'vacunas'),
(673, 93, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1017268700.pdf', 'anticuerpos'),
(674, 93, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1017268700.pdf', 'anticuerpos'),
(675, 93, '../uploads/estudiantes/documentos/DI-1017268700.pdf', 'documento'),
(676, 93, '../uploads/estudiantes/eps/EPS-1017268700.pdf', 'eps'),
(677, 93, '../uploads/estudiantes/hojadevida/HV-1017268700.pdf', 'hojadevida'),
(678, 93, '../uploads/estudiantes/vacunas/VACUNAS-1017268700.pdf', 'vacunas'),
(679, 94, '../uploads/estudiantes/anticuerpos/ANTICUERPO DE HB-1077462479.pdf', 'anticuerpos'),
(680, 94, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1077462479.pdf', 'anticuerpos'),
(681, 94, '../uploads/estudiantes/documentos/DI-1077462479.pdf', 'documento'),
(682, 94, '../uploads/estudiantes/eps/EPS-1077462479.pdf', 'eps'),
(683, 94, '../uploads/estudiantes/hojadevida/HV-1077462479.pdf', 'hojadevida'),
(684, 94, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017462479.pdf', 'adicional'),
(685, 94, '../uploads/estudiantes/vacunas/VACUNA COVID-1077462479.pdf', 'vacunas'),
(686, 94, '../uploads/estudiantes/vacunas/VACUNAS-1077462479.pdf', 'vacunas'),
(687, 95, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE HB-1017240663.pdf', 'anticuerpos'),
(688, 95, '../uploads/estudiantes/anticuerpos/ANTICUERPOS DE VARICELA-1017240663.pdf', 'anticuerpos'),
(689, 95, '../uploads/estudiantes/documentos/DI-1017240663.pdf', 'documento'),
(690, 95, '../uploads/estudiantes/eps/EPS-1017240663.pdf', 'eps'),
(691, 95, '../uploads/estudiantes/hojadevida/HV-1017240663.pdf', 'hojadevida'),
(692, 95, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1017240663.pdf', 'certificado'),
(693, 95, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1017240663.pdf', 'adicional'),
(694, 95, '../uploads/estudiantes/vacunas/VACUNA COVID-1017240663.pdf', 'vacunas'),
(695, 95, '../uploads/estudiantes/vacunas/VACUNAS-1017240663.pdf', 'vacunas'),
(696, 96, '../uploads/estudiantes/anticuerpos/ANTICUERPO HB-1040047481.pdf', 'anticuerpos'),
(697, 96, '../uploads/estudiantes/anticuerpos/ANTICUERPO VARICELA-1040047481.pdf', 'anticuerpos'),
(698, 96, '../uploads/estudiantes/documentos/DI-1040047481.pdf', 'documento'),
(699, 96, '../uploads/estudiantes/eps/EPS-1063622424.pdf', 'eps'),
(700, 96, '../uploads/estudiantes/hojadevida/HV-1040047481.pdf', 'hojadevida'),
(701, 96, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1040047481.pdf', 'certificado'),
(702, 96, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1040047481.pdf', 'adicional'),
(703, 96, '../uploads/estudiantes/vacunas/VACUNA COVID-1040047481.pdf', 'vacunas'),
(704, 96, '../uploads/estudiantes/vacunas/VACUNAS-1040047481.pdf', 'vacunas'),
(705, 97, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1088734182.pdf', 'anticuerpos'),
(706, 97, '../uploads/estudiantes/arl/ARL-1088734182.pdf', 'arl'),
(707, 97, '../uploads/estudiantes/documentos/DI-1088734182.pdf', 'documento'),
(708, 97, '../uploads/estudiantes/eps/EPS ADDRES-1088734182.pdf', 'eps'),
(709, 97, '../uploads/estudiantes/hojadevida/HV-1088734182.pdf', 'hojadevida'),
(710, 97, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1088734182.pdf', 'certificado'),
(711, 97, '../uploads/estudiantes/vacunas/VACUNAS.-1088734182.pdf', 'vacunas'),
(712, 97, '../uploads/estudiantes/vacunas/VACUNAS-1088734182.pdf', 'vacunas'),
(713, 98, '../uploads/estudiantes/anticuerpos/Anticuerpos Hepatitis B-1061789013.pdf', 'anticuerpos'),
(714, 98, '../uploads/estudiantes/anticuerpos/Anticuerpos varicela-1061789013.pdf', 'anticuerpos'),
(715, 98, '../uploads/estudiantes/arl/ARL-1061789013.pdf', 'arl'),
(716, 98, '../uploads/estudiantes/documentos/DI-1061789013.pdf', 'documento'),
(717, 98, '../uploads/estudiantes/eps/EPS-1061789013.pdf', 'eps'),
(718, 98, '../uploads/estudiantes/hojadevida/HV-1061789013.pdf', 'hojadevida'),
(719, 98, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1061789013.pdf', 'certificado'),
(720, 98, '../uploads/estudiantes/vacunas/VACUNAS-1061789013.pdf', 'vacunas'),
(721, 99, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1061796498.pdf', 'anticuerpos'),
(722, 99, '../uploads/estudiantes/arl/ARL-1061796498.pdf', 'arl'),
(723, 99, '../uploads/estudiantes/documentos/DI-1061796498.pdf', 'documento'),
(724, 99, '../uploads/estudiantes/eps/EPS-1061796498.pdf', 'eps'),
(725, 99, '../uploads/estudiantes/hojadevida/HV-1061796498.pdf', 'hojadevida'),
(726, 99, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1061796498.pdf', 'certificado'),
(727, 99, '../uploads/estudiantes/vacunas/VACUNA COVID-1061796498.pdf', 'vacunas'),
(728, 99, '../uploads/estudiantes/vacunas/VACUNAS-1061796498.pdf', 'vacunas'),
(729, 100, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HETITIS B-1214739735.pdf', 'anticuerpos'),
(730, 100, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1214739735.pdf', 'anticuerpos'),
(731, 100, '../uploads/estudiantes/arl/ARL-1214739735.pdf', 'arl'),
(732, 100, '../uploads/estudiantes/documentos/DI-1214739735.pdf', 'documento'),
(733, 100, '../uploads/estudiantes/eps/EPS-1214739735.pdf', 'eps'),
(734, 100, '../uploads/estudiantes/hojadevida/HV-1214739735.pdf', 'hojadevida'),
(735, 100, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1214739735.pdf', 'certificado'),
(736, 100, '../uploads/estudiantes/vacunas/VACUNAS-1214739735.pdf', 'vacunas'),
(737, 101, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152216780.pdf', 'anticuerpos'),
(738, 101, '../uploads/estudiantes/arl/ARL-1152216780.pdf', 'arl'),
(739, 101, '../uploads/estudiantes/documentos/DI-1152216780.pdf', 'documento'),
(740, 101, '../uploads/estudiantes/eps/EPS-1152216780.pdf', 'eps'),
(741, 101, '../uploads/estudiantes/hojadevida/HV-1152216780.pdf', 'hojadevida'),
(742, 101, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152216780.pdf', 'certificado'),
(743, 101, '../uploads/estudiantes/vacunas/VACUNAS-1152216780.pdf', 'vacunas'),
(744, 102, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152715485.pdf', 'anticuerpos'),
(745, 102, '../uploads/estudiantes/arl/ARL-1152715485.pdf', 'arl'),
(746, 102, '../uploads/estudiantes/documentos/DI-1152715485.pdf', 'documento'),
(747, 102, '../uploads/estudiantes/eps/EPS-1152715485.pdf', 'eps'),
(748, 102, '../uploads/estudiantes/hojadevida/HV-1152715485.pdf', 'hojadevida'),
(749, 102, '../uploads/estudiantes/vacunas/VACUNAS-1152715485.pdf', 'vacunas'),
(750, 103, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1035442276.pdf', 'anticuerpos'),
(751, 103, '../uploads/estudiantes/arl/ARL-1035442276.pdf', 'arl'),
(752, 103, '../uploads/estudiantes/documentos/DI-1035442276.pdf', 'documento'),
(753, 103, '../uploads/estudiantes/eps/EPS-1035442276.pdf', 'eps'),
(754, 103, '../uploads/estudiantes/hojadevida/HV-1035442276.pdf', 'hojadevida'),
(755, 103, '../uploads/estudiantes/vacunas/VACUNAS-1035442276.pdf', 'vacunas'),
(756, 104, '../uploads/estudiantes/anticuerpos/ANTICUERPOS EPATITIS B-1152459589.pdf', 'anticuerpos'),
(757, 104, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1152459589.pdf', 'anticuerpos'),
(758, 104, '../uploads/estudiantes/arl/ARL-1152459589.pdf', 'arl'),
(759, 104, '../uploads/estudiantes/documentos/DI-1152459589.pdf', 'documento'),
(761, 104, '../uploads/estudiantes/hojadevida/HV-1152459589.pdf', 'hojadevida'),
(762, 104, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152459589.pdf', 'certificado'),
(763, 104, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152459589.pdf', 'adicional'),
(764, 104, '../uploads/estudiantes/vacunas/VACUNAS-1152459589.pdf', 'vacunas'),
(765, 105, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1036965835.pdf', 'anticuerpos'),
(766, 105, '../uploads/estudiantes/arl/ARL-1036965835.pdf', 'arl'),
(767, 105, '../uploads/estudiantes/documentos/DI-1036965835.pdf', 'documento'),
(768, 105, '../uploads/estudiantes/eps/EPS-1036965835.pdf', 'eps'),
(769, 105, '../uploads/estudiantes/hojadevida/HV-1036965835.pdf', 'hojadevida'),
(770, 105, '../uploads/estudiantes/certificados/INDUCCION VIRTUAL-1036965835.pdf', 'certificado'),
(771, 105, '../uploads/estudiantes/adicional/PACTO PEDAOGICO-1036965835.pdf', 'adicional'),
(772, 105, '../uploads/estudiantes/vacunas/VACUNA COVID-1036965835.pdf', 'vacunas'),
(773, 105, '../uploads/estudiantes/vacunas/VACUNAS.-1036965835.pdf', 'vacunas'),
(774, 105, '../uploads/estudiantes/vacunas/VACUNAS-1036965835.pdf', 'vacunas'),
(775, 106, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1037660331.pdf', 'anticuerpos'),
(776, 106, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1037660331.pdf', 'anticuerpos'),
(777, 106, '../uploads/estudiantes/arl/ARL-1037660331.pdf', 'arl'),
(778, 106, '../uploads/estudiantes/documentos/DI-1037660331.pdf', 'documento'),
(779, 106, '../uploads/estudiantes/eps/EPS-103766031.pdf', 'eps'),
(780, 106, '../uploads/estudiantes/hojadevida/HV-1037660331.pdf', 'hojadevida'),
(781, 106, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037660331.pdf', 'certificado'),
(782, 106, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1037660331.pdf', 'adicional'),
(783, 106, '../uploads/estudiantes/vacunas/VACUNAS-1037660331.pdf', 'vacunas'),
(784, 107, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1037649045.pdf', 'anticuerpos'),
(785, 107, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1037649045.pdf', 'anticuerpos'),
(786, 107, '../uploads/estudiantes/arl/ARL-1037649045.pdf', 'arl'),
(787, 107, '../uploads/estudiantes/documentos/DI-1037649045.pdf', 'documento'),
(788, 107, '../uploads/estudiantes/eps/EPS-1037649045.pdf', 'eps'),
(789, 107, '../uploads/estudiantes/hojadevida/HV-1037649045.pdf', 'hojadevida'),
(790, 107, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1037649045.pdf', 'certificado'),
(791, 107, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1037649045.pdf', 'adicional'),
(792, 107, '../uploads/estudiantes/vacunas/VACUNAS-1037649045.pdf', 'vacunas'),
(793, 108, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1152458120.pdf', 'anticuerpos'),
(794, 108, '../uploads/estudiantes/anticuerpos/ANTICUERPOS VARICELA-1152458120.pdf', 'anticuerpos'),
(795, 108, '../uploads/estudiantes/arl/ARL-1152458120.pdf', 'arl'),
(796, 108, '../uploads/estudiantes/documentos/DI-1152458120.pdf', 'documento'),
(797, 108, '../uploads/estudiantes/eps/EPS-1152458120.pdf', 'eps'),
(798, 108, '../uploads/estudiantes/hojadevida/HV-1152458120.pdf', 'hojadevida'),
(799, 108, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152458120.pdf', 'certificado'),
(800, 108, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152458120.pdf', 'adicional'),
(801, 108, '../uploads/estudiantes/vacunas/VACUNAS-1152458120.pdf', 'vacunas'),
(802, 104, '../uploads/estudiantes/eps/EPS-1152459589.pdf', 'eps'),
(803, 109, '../uploads/estudiantes/adicional/ANEXO TECNICO-1152223345.pdf', 'adicional'),
(804, 109, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1152223345.pdf', 'anticuerpos'),
(805, 109, '../uploads/estudiantes/arl/ARL-1152223345.pdf', 'arl'),
(806, 109, '../uploads/estudiantes/documentos/DI-1152223345.pdf', 'documento'),
(807, 109, '../uploads/estudiantes/eps/EPS-1152223345.pdf', 'eps'),
(808, 109, '../uploads/estudiantes/hojadevida/HV-1152223345.pdf', 'hojadevida'),
(809, 109, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1152223345.pdf', 'certificado'),
(810, 109, '../uploads/estudiantes/adicional/PACTO PEDAGOGICO-1152223395.pdf', 'adicional'),
(811, 109, '../uploads/estudiantes/vacunas/VACUNAS-1152223345.pdf', 'vacunas'),
(812, 110, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1098812655.pdf', 'anticuerpos'),
(813, 110, '../uploads/estudiantes/arl/ARL-1098812655.pdf', 'arl'),
(814, 110, '../uploads/estudiantes/documentos/DI-1098812655.pdf', 'documento'),
(815, 110, '../uploads/estudiantes/eps/EPS-1098812655.pdf', 'eps'),
(816, 110, '../uploads/estudiantes/hojadevida/HV-1098812655.pdf', 'hojadevida'),
(817, 110, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1098812655.pdf', 'certificado'),
(818, 110, '../uploads/estudiantes/adicional/PACTO PEDAGÓGICO-1098812655.pdf', 'adicional'),
(819, 110, '../uploads/estudiantes/vacunas/VACUNA VARICELA-1098812655.pdf', 'vacunas'),
(820, 110, '../uploads/estudiantes/vacunas/VACUNAS-1098812655.pdf', 'vacunas'),
(821, 111, '../uploads/estudiantes/arl/ARL-1004996992.pdf', 'arl'),
(822, 111, '../uploads/estudiantes/documentos/DI-1004996992.pdf', 'documento'),
(823, 111, '../uploads/estudiantes/eps/EPS-1004996992.pdf', 'eps'),
(824, 111, '../uploads/estudiantes/hojadevida/HV-1004996992.pdf', 'hojadevida'),
(825, 111, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1004996992.pdf', 'certificado'),
(826, 111, '../uploads/estudiantes/vacunas/VACUNAS-1004996992.pdf', 'vacunas'),
(827, 112, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1000405304.pdf', 'anticuerpos'),
(828, 112, '../uploads/estudiantes/arl/ARL-1000405304.pdf', 'arl'),
(829, 112, '../uploads/estudiantes/documentos/DI-1000405304.pdf', 'documento'),
(830, 112, '../uploads/estudiantes/eps/EPS-1000405304.pdf', 'eps'),
(831, 112, '../uploads/estudiantes/hojadevida/HV-1000405304.pdf', 'hojadevida'),
(832, 112, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1000405304.pdf', 'certificado'),
(833, 112, '../uploads/estudiantes/vacunas/VACUNAS-1000405304.pdf', 'vacunas'),
(834, 113, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1010090732.pdf', 'anticuerpos'),
(835, 113, '../uploads/estudiantes/arl/ARL-1010090732.pdf', 'arl'),
(836, 113, '../uploads/estudiantes/documentos/DI-1010090732.pdf', 'documento'),
(837, 113, '../uploads/estudiantes/eps/EPS-1010090732.pdf', 'eps'),
(838, 113, '../uploads/estudiantes/hojadevida/HV-1010090732.pdf', 'hojadevida'),
(839, 113, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1010090732.pdf', 'certificado'),
(840, 113, '../uploads/estudiantes/vacunas/VACUNAS-1010090732.pdf', 'vacunas'),
(841, 114, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB Y VARICELA-1000539388.pdf', 'anticuerpos'),
(842, 114, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1000539388.pdf', 'anticuerpos'),
(843, 114, '../uploads/estudiantes/arl/ARL-1000539388.pdf', 'arl'),
(844, 114, '../uploads/estudiantes/documentos/DI-1000539388.pdf', 'documento'),
(845, 114, '../uploads/estudiantes/eps/EPS-1000539388.pdf', 'eps'),
(847, 114, '../uploads/estudiantes/hojadevida/HV-1000539388.pdf', 'hojadevida'),
(848, 114, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1000539388.pdf', 'certificado'),
(849, 114, '../uploads/estudiantes/vacunas/VACUNAS-1000539388.pdf', 'vacunas'),
(850, 115, '../uploads/estudiantes/arl/ALR-1000399870.pdf', 'arl'),
(851, 115, '../uploads/estudiantes/anticuerpos/ANTICUERPOS HB-1000399870.pdf', 'anticuerpos'),
(852, 115, '../uploads/estudiantes/anticuerpos/ANTICUERPOS-1000399870.pdf', 'anticuerpos'),
(853, 115, '../uploads/estudiantes/documentos/DI-1000399870.pdf', 'documento'),
(854, 115, '../uploads/estudiantes/eps/EPS-1000399870.pdf', 'eps'),
(855, 115, '../uploads/estudiantes/hojadevida/HV-1000399870.pdf', 'hojadevida'),
(856, 115, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1000399870.pdf', 'certificado'),
(857, 115, '../uploads/estudiantes/vacunas/VACUNA-1000399870.pdf', 'vacunas'),
(858, 115, '../uploads/estudiantes/vacunas/VACUNAS-1000399870.pdf', 'vacunas'),
(859, 116, '../uploads/estudiantes/arl/ARL-1044507762.pdf', 'arl'),
(860, 116, '../uploads/estudiantes/documentos/DI-1044507762.pdf', 'documento'),
(861, 116, '../uploads/estudiantes/hojadevida/HV-1044507762.pdf', 'hojadevida'),
(862, 116, '../uploads/estudiantes/certificados/INDUCCIÓN VIRTUAL-1044507762.pdf', 'certificado'),
(863, 116, '../uploads/estudiantes/vacunas/VACUNAS-1044507762.pdf', 'vacunas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_docentes`
--

CREATE TABLE `documentos_docentes` (
  `id` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `file` varchar(60) NOT NULL,
  `type_file` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_instituciones`
--

CREATE TABLE `documentos_instituciones` (
  `id` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documentos_instituciones`
--

INSERT INTO `documentos_instituciones` (`id`, `id_institucion`, `file`, `type_file`) VALUES
(1, 3, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.UNIMINUTO.pdf', 'convenio'),
(2, 3, '../uploads/instituciones/convenios/CONVENIO DE PRÁCTICA - HMFS.UNIMINUTO.pdf', 'convenio'),
(3, 1, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.CENSA.pdf', 'convenio'),
(4, 2, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.UNAC.pdf', 'convenio'),
(5, 4, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.CUR.pdf', 'convenio'),
(6, 5, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.FUMC.pdf', 'convenio'),
(7, 7, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.IUMAFIS.pdf', 'convenio'),
(8, 9, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.UCC.pdf', 'convenio'),
(9, 10, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.UDEA.pdf', 'convenio'),
(10, 11, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.UPB.pdf', 'convenio'),
(11, 12, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.FUSM.pdf', 'convenio'),
(12, 8, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.SENA.pdf', 'convenio'),
(13, 13, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.ICCT.pdf', 'convenio'),
(14, 16, '../uploads/instituciones/convenios/CONVENIO DS - HMFS.EDESA.pdf', 'convenio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `name_seminars` varchar(1000) NOT NULL,
  `num_question` varchar(500) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `acronym` varchar(10) NOT NULL,
  `agreement` varchar(40) NOT NULL,
  `finish_agreement` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `direction` varchar(50) NOT NULL,
  `programs` varchar(150) NOT NULL,
  `campus` varchar(30) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1,
  `logo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`id`, `name`, `acronym`, `agreement`, `finish_agreement`, `phone`, `nit`, `direction`, `programs`, `campus`, `state`, `logo`) VALUES
(0, 'NINGUNA', 'N/A', '', '', '', '', '', '', '', 1, NULL),
(1, 'CENTRO DE SISTEMAS DE ANTIOQUIA S.A.S.', 'CENSA S.A.', '2021-01-20', '2031-01-20', '4445556', '811030714-0', 'Calle 51 N° 43-83 la Playa', 'AUXILIAR EN ENFERMERIA, AUXILIAR EN SALUD ORAL, AUXILIAR EN SERVICIOS FARMACEUTICOS.', 'Medellín', 1, '../uploads/instituciones/logo/LOGO CENSA.png'),
(2, 'CORPORACION UNIVERSITARIA ADVENTISTA', 'UNAC', '2017-02-01', '2027-02-01', '604 4805590', '860403751-3', 'CARRERA 84 N° 33AA-01', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO UNAC.png'),
(3, 'CORPORACION UNIVERSITARIA MINUTO DE DIOS', 'UNIMINUTO', '2017-11-07', '2027-11-07', '4669200', '800116217-2', 'Carrera 45 N° 22D - 25 - KM 0 AUTOPISTA MEDELLÍN-B', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'BELLO - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO UNIMINUTO.png'),
(4, 'CORPORACION UNIVERSITARIA REMINGTON', 'CUR', '2021-04-24', '2031-04-23', '604 3221000', '811005425', 'CALLE 51 No.51-27 ED. REMINGTON TORRE 1', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOCO CUR.png'),
(5, 'FUNDACIÓN UNIVERSITARIA MARIA CANO', 'FUMC', '2021-02-04', '2031-02-04', '604 4025500 ', '800036781-1', 'CALLE 56 No. 41-90', 'PSICOLOGÍA, FISIOTERAPIA', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO FUMC.png'),
(6, 'INSTITUTO TECNOLÓGICO METROPOLITANO', 'ITM', '2021-00-00', '0000-00-00', '4589876', '9875465466-F', '', '', '', 1, '../uploads/instituciones/logo/LOGO ITM.png'),
(7, 'INSTITUCIÓN UNIVERSITARIA MARCO FIDEL SUÁREZ', 'IUMAFIS', '2021-06-29', '2031-06-29', '604 4601505', '890985856-3', 'CALLE 48 N° 50-30', 'ENFERMERÍA PROFESIONAL, TÉCNICO LABORAL EN AUXILIAR EN ENFERMERÍA', 'BELLO - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO IUMAFIS.png'),
(8, 'SERVICIO NACIONAL DE APRENDIZAJE', 'SENA', '2021-08-06', '2031-08-06', '604 5760000', '899999034-1', 'CALLE 51 N° 57-70 TORRE SUR PISO 9', 'PROGRAMAS ACADÉMICOS DEL ÁREA DE LA SALUD', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO SENA.png'),
(9, 'UNIVERSIDAD COOPERATIVA DE COLOMBIA', 'UCC', '2021-04-27', '2031-04-27', '604 6050065', '860029924-7', 'CALLE 50ª N° 41 – 70 BLOQUE 2', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO UCC.png'),
(10, 'UNIVERSIDAD DE ANTIOQUIA', 'UDEA', '2013-10-02', '2023-10-02', '604 2196000', '890980040-8', 'CALLE 67 N°53-108', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO UDEA.png'),
(11, 'UNIVERSIDAD PONTIFICIA BOLIVARIANA', 'UPB', '2020-10-07', '2030-10-07', '604 4488388', '890902922-6', 'CIRCULAR 1ª 70-01 BARRIO LAURELES', 'PREGRADO Y POSGRADO DEL ÁREA DE LA SALUD.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO UPB.png'),
(12, 'FUNDACIÓN UNIVERSITARIA SAN MARTÍN', 'FUSM', '2021-07-19', '2031-07-19', '604 2880053', '860503634-9', 'CALLE 75 SUR 34-50 LA DOCTORA', 'MEDICINA', 'SABANETA - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO FUSM.png'),
(13, 'INSTITUTO COLOMBIANO EN CAPACITACIÓN TÉCNICA', 'ICCT', '2014-03-10', '2024-03-10', '604 2395580', '811015368-2', 'CALLE 54 # 43 97', 'TECNICO LABORAL AUXILIAR EN ENFERMERIA, TECNICO LABORAL AUXILIAR EN SERVICIOS FARMACEUTICOS, TECNICO LABORAL AUXILIAR ADMINISTRATIVO EN SALUD', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO ICCT.png'),
(16, 'CENTRO DE ESTUDIOS EN SALUD', 'EDESA S.A.', '2021-11-22', '2031-11-22', '604 3229979', '811006423-1', 'CARRERA 46 N° 40-55', 'TÉCNICO LABORAL AUXILIAR ADMINISTRATIVO EN SALUD, TÉCNICO LABORAL AUXILIAR EN ENFERMERÍA, TÉCNICO LABORAL AUXILIAR EN SERVICIOS FARMACÉUTICOS.', 'MEDELLIN - ANTIOQUIA', 1, '../uploads/instituciones/logo/LOGO EDESA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones_contacto`
--

CREATE TABLE `instituciones_contacto` (
  `id` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(80) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instituciones_contacto`
--

INSERT INTO `instituciones_contacto` (`id`, `id_institucion`, `name`, `position`, `phone`, `email`) VALUES
(1, 3, 'GLORIA ISABEL PALACIO ALZATE', 'PROFESIONAL DOCENCIA SERVICIO', '3218422477', 'gloria.palacio@uniminuto.edu'),
(2, 1, 'SANDRA MILENA OCAMPO CASTAÑEDA', 'COORDINACIÓN PRÁCTICAS SALUD', '3004390936', 'coorpracticassalud@censa.edu.co'),
(3, 2, 'ESTHER LUCÍA GUERRA SERNA', 'COORDINADORA DE PRÁCTICAS Y PROYECCIÓN SOCIAL APH', '3007858735', 'practicasaph@unac.edu.co'),
(4, 2, 'OLGA LILIANA MEJÍA ARANGO', 'DECANA DE LA FACULTAD DE CIENCIAS DE LA SALUD', '3137211142', 'fcs@unac.edu.co'),
(5, 4, 'DIANA MARITZA GARCÍA GUTIERREZ', 'JEFE DE PRÁCTICAS CLÍNICAS FACULTAD DE CIENCIAS DE LA SALUD', '3117406695', 'docencia.servicio@uniremington.edu.co'),
(6, 4, 'MARGARITA MARÍA CORRALES RODRÍGUEZ', 'COORDINADORA DE PRÁCTICAS DE ENFERMERÍA', '3122959693', 'docencia.servicio@uniremington.edu.co'),
(7, 5, 'SONIA MAGDALENA WELSH PAZ', 'DIRECTORA CENTRO DE PRÁCTICAS', '3154399007', 'sonia.welsh@fumc.edu.co'),
(8, 5, 'NATALIA GÓMEZ CARDONA', 'COORDINACIÓN DE PRÁCTICAS PSICOLOGÍA', '3015773655', 'coorpsicologia@fumc.edu.co'),
(9, 5, 'ROSA NARDELA PÉREZ GARCÍA', 'DOCENTE COORDINADOR DE PRÁCTICAS FISIOTERAPIA', '3128977913', 'rosa.perez@fumc.edu.co'),
(10, 7, 'CAROLINA GARCÍA MONTOYA', 'COORDINADORA DEL CENTRO DE PRÁCTICAS', '3146411869', 'practicas.empresariales@iumafis.edu.co'),
(11, 7, 'YEIMY YESENIA GRANADOS PEMBERTTY', 'COORDINADORA CIENCIAS DE LA SALUD', '3013159685', 'coordisalud@iumafis.edu.co'),
(12, 9, 'ANDREA SÁNCHEZ OCHOA', 'COORDINADORA DOCENCIA SERVICIO', '3148543254', 'andrea.sanchezoc@ucc.edu.co'),
(13, 9, 'ANA MARÍA JARAMILLO CARO', 'DECANA NACIONAL DE MEDICINA', '3113240255', 'ana.jaramilloc@ucc.edu.co'),
(14, 9, 'SANDRA MILENA VÁSQUEZ ARBOLEDA', 'SECRETARIA DECANATURA - FACULTAD DE MEDICINA', '3014974751', 'sandra.vasqueza@ucc.edu.co'),
(15, 10, 'AGUEDA LUCIA VALENCIA DEOSSA', 'COORDINADORA RELACIONES INTERINSTITUCIONALES.', '3006132844', 'docenciaserviciomedicina@udea.edu.co'),
(16, 10, 'CARLOS ANDRÉS RUIZ GALEANO', 'COORDINADOR DE INTERNADO', '604 2196088', 'internadomedicina@udea.edu.co'),
(17, 9, 'LAURA PÉREZ ARANGO', 'COORDINADORA DE INTERNADO', '3217484677', 'laura.perezar@campusucc.edu.co'),
(18, 9, 'SANDRA PATRICIA LLANO GARCÍA', 'AUXILIAR DOCENCIA SERVICIO', '3206107225', 'sandra.llano@ucc.edu.co'),
(19, 11, 'INÉS MILENA DAVID DÍAZ', 'COORDINADORA DE CONVENIOS', '3017176253', 'ines.david@upb.edu.co'),
(20, 11, 'ALEJANDRA ÁLVAREZ DIAZGRANADOS', 'COORDINADORA DE INTERNADO', '3108250757', 'alejandra.alvarezdi@upb.edu.co'),
(21, 11, 'GLORIA MARICELA DUQUE GONZÁLEZ', 'AUXILIAR ACADÉMICO ADMINISTRATIVA', '3004707469', 'maricela.duque@upb.edu.co'),
(22, 11, 'ADRIANA PATRICIA DÍAZ DÍAZ', 'COORDINADORA DE PRÁCTICAS ENFERMERÍA', '3137718129', 'adrianap.diaz@upb.edu.co'),
(23, 11, 'CRUZ ELENA VERGARA MEDINA', 'COORDINADORA DE PRÁCTICAS PSICOLOGÍA', '3146871315', 'cruz.vergara@upb.edu.co'),
(24, 12, 'FERNANADO LEÓM TOBÓN LONDOÑO', 'COORDINADOR PRÁCTICAS CLÍNICAS', '3007875314', 'practicasclinicas@sanmartin.edu.co'),
(25, 12, 'ELIANA BERNAL', 'SECRETARIA DEPARTAMENTO DE PRÁCTICAS', '3117181080', 'auxiliarpracticas@sanmartin.edu.co'),
(26, 13, 'MARIA EUGENIA GARCÍA PALACIO', 'COORDINADORA DE PRÁCTICA', '3005374284', 'pra.icctcaracas@cedeco.edu.co'),
(27, 8, 'MONICA PATRICIA CASTRO ROJAS', 'LÍDER ETAPA PRODUCTIVA PROGRAMA DE ENFERMERÍA', '3206622840', 'mcrojas@sena.edu.co'),
(28, 8, 'AMILCAR ANDRÉS SALOM GONZÁLEZ', 'COORDINADOR DE PRÁCTICAS', '3014562642', 'asalomg@sena.edu.co'),
(29, 8, 'LUIS GUILLERMO ARBOLEDA NOREÑA', 'LÍDER DE CONVENIOS Y FORMACIÓN COMPLEMENTARIA', '6045760000. Extensión: 42024', 'larboledano@sena.edu.co'),
(30, 16, 'CARLOS MARIO CATAÑO MUÑOZ', 'DIRECTOR DE PROYECTOS', '3127350630', 'registro.proyectos@edesa.edu.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `program` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `programs_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `programs_name`) VALUES
(1, 'MEDICINA'),
(2, 'ENFERMERÍA'),
(3, 'PSICOLOGÍA'),
(4, 'TRABAJO SOCIAL'),
(5, 'ADMINISTRATIVO EN SALUD'),
(6, 'SERVICIO FARMACÉUTICO'),
(7, 'SALUD PÚBLICA'),
(8, 'FISIOTERAPIA'),
(9, 'INGENIERÍA BIOMÉDICA'),
(10, 'ATENCION PREHOSPITALARIA'),
(11, 'AUXILIAR DE ENFEMERÍA'),
(12, 'INSTRUMENTACIÓN QUIRÚRGICA'),
(13, 'NUTRICIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `admission_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `id_program` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `type_teacher` varchar(30) NOT NULL,
  `observation` varchar(300) NOT NULL,
  `anulated` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `id_user`, `admission_date`, `finish_date`, `id_program`, `id_service`, `teacher`, `type_teacher`, `observation`, `anulated`) VALUES
(1, 1, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(2, 2, '2022-01-31', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(3, 3, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(4, 4, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(5, 5, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(6, 6, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(7, 7, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(8, 8, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(9, 9, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(10, 10, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(11, 11, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(12, 12, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(13, 13, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(14, 14, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(15, 15, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(16, 16, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(17, 17, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(18, 18, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(19, 19, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(20, 20, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(21, 21, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(22, 22, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(23, 24, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(24, 25, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(25, 26, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(26, 27, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(27, 28, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(28, 29, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(29, 30, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(30, 32, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(31, 33, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(32, 34, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(33, 35, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(34, 36, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(35, 36, '2022-01-03', '2022-01-31', 1, 3, 'N/A', 'N/A', 'N/A', 1),
(36, 37, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(37, 38, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(38, 39, '2022-01-03', '2022-01-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(39, 41, '2022-01-03', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(40, 42, '2022-01-03', '2022-01-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(41, 43, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(42, 15, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(43, 44, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(44, 45, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(45, 46, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(46, 14, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(47, 47, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(48, 48, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(49, 49, '2022-03-01', '2022-03-31', 1, 4, 'N/A', 'N/A', 'N/A', 0),
(50, 50, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(51, 51, '2022-03-01', '2022-03-01', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(52, 52, '2022-03-01', '0000-00-00', 1, 1, 'N/A', 'N/A', 'N/A', 1),
(53, 52, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(54, 16, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(55, 53, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(56, 54, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(57, 55, '2022-02-01', '2022-02-28', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(58, 56, '2022-02-01', '2022-02-28', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(59, 57, '2022-02-01', '2022-02-28', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(60, 58, '2022-02-01', '2022-02-28', 1, 7, 'N/A', 'N/A', 'N/A', 0),
(61, 59, '2022-02-01', '2022-02-28', 1, 7, 'N/A', 'N/A', 'N/A', 0),
(62, 60, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(63, 61, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(64, 62, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(65, 63, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(66, 64, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(67, 65, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(68, 66, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(69, 67, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(70, 68, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(71, 69, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(72, 70, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(73, 71, '2022-03-01', '2022-01-31', 1, 9, 'N/A', 'N/A', 'N/A', 1),
(74, 72, '2022-03-01', '2022-03-31', 1, 6, 'N/A', 'N/A', 'N/A', 0),
(75, 74, '2022-03-01', '2022-01-31', 1, 7, 'N/A', 'N/A', 'N/A', 1),
(76, 7, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(77, 75, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(78, 76, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(79, 77, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(80, 78, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(81, 55, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(82, 43, '2022-03-01', '2022-03-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(83, 71, '2022-03-01', '2022-03-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(84, 73, '2022-03-01', '2022-03-31', 1, 7, 'N/A', 'N/A', 'N/A', 0),
(85, 74, '2022-03-01', '2022-03-31', 1, 7, 'N/A', 'N/A', 'N/A', 0),
(86, 79, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 1),
(87, 80, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 1),
(88, 80, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(89, 79, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(90, 81, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(91, 82, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(92, 83, '2022-02-01', '2022-02-28', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(93, 84, '2022-02-01', '2022-02-28', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(94, 85, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(95, 83, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(96, 21, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(97, 86, '2022-02-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(98, 88, '2022-02-01', '2022-03-31', 1, 4, 'N/A', 'N/A', 'N/A', 0),
(99, 89, '2022-03-01', '2022-03-31', 1, 9, 'N/A', 'N/A', 'N/A', 0),
(100, 90, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(101, 91, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(102, 92, '0222-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(103, 93, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(104, 94, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(105, 95, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(106, 96, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(107, 97, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(108, 98, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(109, 99, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(110, 100, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(111, 101, '2022-02-01', '2022-02-28', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(112, 102, '2022-02-01', '2022-03-06', 12, 9, 'N/A', 'N/A', 'N/A', 0),
(113, 103, '2022-02-01', '2022-02-28', 12, 9, 'N/A', 'N/A', 'N/A', 0),
(114, 104, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(115, 105, '2022-02-01', '2022-02-28', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(116, 106, '2022-02-01', '2022-02-28', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(117, 108, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(118, 107, '2022-03-01', '2022-03-31', 1, 3, 'N/A', 'N/A', 'N/A', 0),
(119, 104, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(120, 109, '2022-03-01', '2022-03-31', 1, 2, 'N/A', 'N/A', 'N/A', 0),
(121, 110, '2022-03-01', '2022-03-31', 1, 1, 'N/A', 'N/A', 'N/A', 0),
(122, 111, '2022-03-07', '2022-04-02', 1, 4, 'GLORIA STELLA RESTREPO LOPEZ', 'N/A', 'N/A', 0),
(123, 112, '2022-03-07', '2022-04-02', 1, 4, 'GLORIA STELLA RESTREPO LOPEZ', 'N/A', 'N/A', 0),
(124, 113, '2022-03-07', '2022-04-02', 1, 4, 'GLORIA STELLA RESTREPO LOPEZ', 'N/A', 'N/A', 0),
(125, 114, '2022-03-07', '2022-04-02', 1, 4, 'GLORIA STELLA RESTREPO LOPEZ', 'N/A', 'N/A', 0),
(126, 115, '2022-03-07', '2022-04-02', 1, 4, 'N/A', 'N/A', 'N/A', 0),
(127, 116, '2022-03-07', '2022-04-02', 1, 4, 'GLORIA STELLA RESTREPO LOPEZ', 'N/A', 'N/A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `student` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `result` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `finish` tinyint(1) NOT NULL DEFAULT 1,
  `month` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seminario`
--

CREATE TABLE `seminario` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_service` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `services_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `services_name`) VALUES
(1, 'URGENCIAS'),
(2, 'PEDIATRÍA'),
(3, 'MEDICINA INTERNA'),
(4, 'GINECOLOGÍA'),
(6, 'CENTRO REGULADOR'),
(7, 'TOXICOLOGÍA'),
(9, 'CIRUGÍA'),
(10, 'EXPERIENCIA DE USUARIO'),
(11, 'URGENCIAS PEDIÁTRICAS'),
(12, 'PSICOLOGÍA'),
(13, 'FACTURACIÓN'),
(14, 'ARCHIVO'),
(15, 'GESTIÓN HUMANA'),
(16, 'FARMACIA'),
(17, 'JURÍDICA'),
(18, 'NUTRICION'),
(19, 'INGENIERÍA BIOMÉDICA'),
(20, 'UCI'),
(21, 'SEGURIDAD DEL PACIENTE'),
(22, 'LABORATORIO'),
(23, 'SEGURIDAD Y SALUD EN EL TRABAJO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `document` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type_user` int(11) NOT NULL DEFAULT 2,
  `state` tinyint(1) DEFAULT 1,
  `phone` varchar(20) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `position` varchar(40) NOT NULL,
  `formation` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `anexo` varchar(10) NOT NULL DEFAULT 'SI',
  `photo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `document`, `password`, `type_user`, `state`, `phone`, `id_institucion`, `position`, `formation`, `email`, `anexo`, `photo`) VALUES
(1, 'XIOMARA MOSQUERA TORRES', '1020484868', '1020484868', 2, 0, '3216946243', 9, 'INTERNO', 'PREGRADO', 'XIOMARAMOSQUERAT@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1020484868.png'),
(2, 'CRISTIAN CAMILO TAVERA LINCE', '1017224863', '1017224863', 2, 0, '3122420952', 9, 'INTERNO', 'PREGRADO', 'CHRISTIAN.TAVERAL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO..png'),
(3, 'ESTEBAN MAURICIO REYES PIZARRO', '1152214533', '1152214533', 2, 0, '3146671699', 9, 'INTERNO', 'PREGRADO', 'ESTEBAN.REYESP@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152214533.jpg'),
(4, 'JOHN EDISSON SALAZAR MONTES', '1037642721', '1037642721', 2, 0, '3015377770', 9, 'INTERNO', 'PREGRADO', 'JOHN.SALAZARM@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037642721.jpg'),
(5, 'SARA VANESSA LONDOÑO BETANCUR', '1017198669', '1017198669', 2, 0, '3006761359', 9, 'INTERNO', 'PREGRADO', 'SARABETANCUR-14@HOTMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1017198669.png'),
(6, 'VALENTINA PÉREZ LÓPEZ', '1152710244', '1152710244', 2, 0, '3155657694', 9, 'INTERNO', 'PREGRADO', 'VALENTINAPEREZLOPEZ@OUTLOOK.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152710244.png'),
(7, 'MARÍA CRISTINA JARAMILLO ACEVEDO', '28559544', '28559544', 2, 1, '3176717492', 9, 'INTERNO', 'PREGRADO', 'MARIA.JARAMILLOA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-28559544.jpg'),
(8, 'MELISSA MELGUIZO RAMIREZ', '1152222357', '1152222357', 2, 0, '3174375358', 9, 'INTERNO', 'PREGRADO', 'MELISSA.MELGUIZOR@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152222357.png'),
(9, 'ANDRÉS GILBERTO GIRALDO ECHEVERRI', '1017262956', '1017262956', 2, 0, '3103909854', 9, 'INTERNO', 'PREGRADO', 'ANDRéS.RUIZC@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017262956.png'),
(10, 'ANNY KATERINE CORDOBA MOSQUERA', '1077470602', '1077470602', 2, 0, '3106723738', 9, 'INTERNO', 'PREGRADO', 'ANNY.CORDOBAM@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1077470602.jpg'),
(11, 'CATALINA GÓMEZ BEDOYA', '1152457302', '1152457302', 2, 0, '3058233592', 9, 'INTERNO', 'PREGRADO', 'CATALINA.GóMEZT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152457302.jpg'),
(12, 'MAIRA ALEJANDRA CORDOBA BECERRA', '1077479608', '1077479608', 2, 0, '3167791900', 9, 'INTERNO', 'PREGRADO', 'MAIRA.RUIZC@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1077479608.jpg'),
(13, 'MATEO BEDOYA ATERHORTUA', '1152218176', '1152218176', 2, 0, '3016622752', 9, 'INTERNO', 'PREGRADO', 'MATEO.BEDOYAT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152218176.png'),
(14, 'ANDREA JARAMILLO GUISAO', '1020470720', '1020470720', 2, 0, '3157380100', 9, 'INTERNO', 'PREGRADO', 'ANDREA.JARAMILLOT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1020470720.jpg'),
(15, 'JULIETH ALEXANDRA ISAZA VARGAS', '1037593540', '1037593540', 2, 0, '3137889794', 9, 'INTERNO', 'PREGRADO', 'JULIETH.ISAZA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037593540.png'),
(16, 'MAIRA ALEJANDRA FLÓREZ ALZATE', '1017250081', '1017250081', 2, 1, '3012022020', 9, 'INTERNO', 'PREGRADO', 'MAIRA.FLOREZA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017250081.jpg'),
(17, 'LAURA ALEJANDRA RUÍZ CASTAÑO', '1017256962', '1017256962', 2, 0, '3003036626', 9, 'INTERNO', 'PREGRADO', 'LAURA.RUIZC@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017250081.jpg'),
(18, 'SEBASTIAN VÁSQUEZ QUINTERO', '1020489927', '1020489927', 2, 0, '3508394908', 9, 'INTERNO', 'PREGRADO', 'SEBASTIAN.VASQUEQ@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1020489927.jpg'),
(19, 'VALENTINA MELO LONDOÑO', '1037649861', '1037649861', 2, 0, '3016753424', 9, 'INTERNO', 'PREGRADO', 'VALENTINA.MELOT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037649861.jpg'),
(20, 'DANIELA ZAPATA FRANCO', '1152443144', '1152443144', 2, 0, '3178954768', 9, 'INTERNO', 'PREGRADO', 'DANIELA.ZAPATAT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152443144.jpg'),
(21, 'CAMILO ANDRES BARROS CORONADO', '1036954925', '1036954925', 2, 1, '3017171518', 4, 'INTERNO', 'PREGRADO', 'CA_MILO_01@HOTMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1036954925.png'),
(22, 'DANIELA CARDENAS PÉREZ', '1017241099', '1017241099', 2, 0, '3054043875', 4, 'INTERNO', 'PREGRADO', 'DANIELA.CARDENAS.1099@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017241099.PNG'),
(23, 'JUAN JOSÉ ORTEGA RODRÍGUEZ', '1004577485', '1004577485', 2, 0, '3113626449', 4, 'INTERNO', 'PREGRADO', 'JUAN.ORTEGA.7485@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1004579480.png'),
(24, 'DANIELA PATIÑO MOLINA', '1152459242', '1152459242', 2, 0, '3104087036', 4, 'INTERNO', 'PREGRADO', 'DANIELA.PATIñO.4242@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152459242.PNG'),
(25, 'JALETH YULIANA MENA CASTAÑO', '1038807478', '1038807478', 2, 0, '3023116835', 4, 'INTERNO', 'PREGRADO', 'JALETH.MENA.4478@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152459242.PNG'),
(26, 'MAIRA VALENTINA LOPERA OVIEDO', '1017262035', '1017262035', 2, 0, '3004639184', 4, 'INTERNO', 'PREGRADO', 'MARíA.LOPERA.4035@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017262035.png'),
(27, 'MARTHA CONSUELO ZAPATA GÓMEZ', '1126964876', '1126964876', 2, 0, '3016286059', 4, 'INTERNO', 'PREGRADO', 'MARTHA.ZAPATA.4876@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1126964876.png'),
(28, 'ANGIE CAROLINA ANDRADE ALMANZA', '1049648986', '1049648986', 2, 0, '3163116156', 4, 'INTERNO', 'PREGRADO', 'ANGIE.ANDRADE.8986@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1049648986.png'),
(29, 'CAROLINA DÍAZ BENT', '1017240451', '1017240451', 2, 0, '3183719546', 4, 'INTERNO', 'PREGRADO', 'CAROLINA.DíAZ.4451@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017240451.png'),
(30, 'SEBASTIAN ROSARIO CASTRO', '1032471332', '1032471332', 2, 0, '3115731854', 4, 'INTERNO', 'PREGRADO', 'SEBASTIAN.ROSARIO.4332@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1032471332.png'),
(31, 'XIMENA LOPEZ RODRIGUEZ', '1003068048', '1003068048', 2, 0, '3053790784', 4, 'ESTUDIANTE', 'PREGRADO', 'XIMENA.LOPEZ.8048@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1003068048.png'),
(32, 'DANIELA MELISSA MEJÍA MUENTES', '1214742571', '1214742571', 2, 0, '3108259456', 10, 'INTERNO', 'PREGRADO', 'DMELISSA.MEJIA@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1214742571.png'),
(33, 'DEIVY ANDERSON CHAVEZ MONTOYA', '1061771341', '1061771341', 2, 0, '3015144437', 10, 'INTERNO', 'PREGRADO', 'DEIVY.CHAVES@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1214742571.png'),
(34, 'MELISSA MARÍA CARVAJAL PAREJA', '1152464663', '1152464663', 2, 0, '3138868385', 10, 'INTERNO', 'PREGRADO', 'MELISSA.CARVAJAL@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152464663.png'),
(35, 'PAMELA OROZCO RESTREPO', '1037636838', '1037636838', 2, 0, '3113670376', 10, 'INTERNO', 'PREGRADO', 'PAMELA.OROZCO@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037636838.png'),
(36, 'SUSANA BUSTAMANTE VÁSQUEZ', '1152450008', '1152450008', 2, 0, '3116306216', 11, 'INTERNO', 'PREGRADO', 'SUSANA.BUSTAMANTE@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152450008.png'),
(37, 'MANUEL ALEJANDRO CHICA GUÍTERREZ', '1037658449', '1037658449', 2, 0, '3173748249', 11, 'INTERNO', 'PREGRADO', 'MANUEL.CHICA@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/foto-1037658449.PNG'),
(38, 'ESTEFANY VARGAS LADINO', '1152223530', '1152223530', 2, 0, '3128905108', 11, 'INTERNO', 'PREGRADO', 'ESTEFANY.VARGASL@UPB.EDU.CO ', 'SI', '../uploads/estudiantes/fotos/FOTO-1152223530.PNG'),
(39, 'LAURA JOHANA RODRÍGUEZ AREVALO', '1037658949', '1037658949', 2, 0, '3108985316', 11, 'INTERNO', 'PREGRADO', 'LAURA.RODRIGUEZA@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037658949.PNG'),
(41, 'NORIS DANIELA NIEVES CALLE', '1233342235', '1233342235', 2, 0, '3043288277', 11, 'INTERNO', 'PREGRADO', 'NORIS.NIEVES@UPB.EDU.CO ', 'SI', '../uploads/estudiantes/fotos/FOTO-1233342235.PNG'),
(42, 'KAMILA GERALDINNE VARON RINCON', '1110578322', '1110578322', 2, 0, '3137125477', 11, 'INTERNO', 'PREGRADO', 'KAMILA.VARON@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1110578322.PNG'),
(43, 'FRANCISCO JOSÉ NAVARRO ECHAVARRIA', '1037646983', '1037646983', 2, 1, '3006083362', 9, 'INTERNO', 'PREGRADO', 'FRANCISCO.NAVARROE@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037646983.PNG'),
(44, 'PAULA ALEJANDRA DE LEÓN VALDES', '1017270709', '1017270709', 2, 0, '3146945503', 9, 'INTERNO', 'PREGRADO', 'PAULA.DELEON@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017270709.PNG'),
(45, 'SHARON BEDOYA VELEZ', '1039458715', '1039458715', 2, 0, '3003518425', 9, 'INTERNO', 'PREGRADO', 'SHARON.BEDOYAV@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1039458715.PNG'),
(46, 'YIGENI CARDENAS MAZO', '1042772132', '1042772132', 2, 0, '3128442629', 9, 'INTERNO', 'PREGRADO', 'YIGENI.CARDENASM@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1042772132.PNG'),
(47, 'CAMILA ANDREA CUELLAR NARVÁEZ', '1017265064', '1017265064', 2, 0, '3016863629', 9, 'INTERNO', 'PREGRADO', 'CAMILA.CUELLARN@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017265064.PNG'),
(48, 'JONATHAN GONZÁLEZ LÓPEZ', '1152205373', '1152205373', 2, 0, '3152939546', 9, 'INTERNO', 'PREGRADO', 'JONATHAN.GONZALEZL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152205373.PNG'),
(49, 'NICOLL DANIELA QUEVEDO', '1037651900', '1037651900', 2, 1, '3104609094', 9, 'INTERNO', 'PREGRADO', 'NICOLL.QUEVEDOL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037651900.PNG'),
(50, 'MARIA ALEIDY CASTAÑEDA MENDEZ', '1020480285', '1020480285', 2, 1, '3184428451', 9, 'INTERNO', 'PREGRADO', 'MARIA.CASTANEDAME@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1020480285.PNG'),
(51, 'MARIANA ARENAS SIERRA', '1037648538', '1037648538', 2, 1, '3052289030', 4, 'INTERNO', 'PREGRADO', 'MARIANAARENAS96@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1037648538.PNG'),
(52, 'MATEO ALEJANDRO RUIZ FLOREZ', '1000659784', '1000659784', 2, 1, '3013985773', 10, 'INTERNO', 'PREGRADO', ' MATEO.RUIZF@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1000659784.PNG'),
(53, 'MARÍA PAULA RODRÍGUEZ RESTREPO', '1152451059', '1152451059', 2, 0, '3235707698', 9, 'INTERNO', 'PREGRADO', 'MARIA.RODIGUEZRE@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152451059.PNG'),
(54, 'MARBELUZ GUTIERREZ SOLANO', '1037658448', '1037658448', 2, 0, '3209199788', 9, 'INTERNO', 'PREGRADO', 'MARBELUZ.GUTIERREZS@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037658448.PNG'),
(55, 'CARMEN GISELT SÁNCHEZ AGUDELO', '1077459343', '1077459343', 2, 1, '3147707226', 9, 'INTERNO', 'PREGRADO', 'CARMEN.SANCHEZA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037658448.PNG'),
(56, 'JHANER DUVAN CARVAJAL ZULUAGA', '1026159892', '1026159892', 2, 0, '3504347859', 9, 'INTERNO', 'PREGRADO', 'JHANER.CARVAJALZ@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1026159892.PNG'),
(57, 'KEVIN ERNESTO BAENA CASTRO', '501362', '501362', 2, 0, '3005219112', 9, 'INTERNO', 'PREGRADO', 'KEVIN.BAENAC@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-501362.PNG'),
(58, 'JESSICA EDELMIRA LOBO LOZADA', '1090446986', '1090446986', 2, 0, '3214748689', 9, 'INTERNO', 'PREGRADO', 'JESSICA.LOBO@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1090446986.PNG'),
(59, 'MAURICIO JOSÉ MORALES PALENCIA', '1038417076', '1038417076', 2, 0, '3118839276', 9, 'INTERNO', 'PREGRADO', 'MMORALESPALENCIA97@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1038417076.PNG'),
(60, 'MARÍA VALENTINA SARMIENTO LOMBANA', '1017247627', '1017247627', 2, 0, '3106489441', 9, 'INTERNO', 'PREGRADO', 'MARIA.SARMIENTOL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017247627.PNG'),
(61, 'ALANIS ALJURI ORTÍZ', '1039469537', '1039469537', 2, 0, '3212480281', 9, 'INTERNO', 'PREGRADO', 'ALANIS.ALJURI@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1039469537.PNG'),
(62, 'ALEJANDRA ARIAS MOLINARES', '1036678281', '1036678281', 2, 0, '3024380646', 9, 'INTERNO', 'PREGRADO', 'ALEJANDRA.ARIASM@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1036678281.PNG'),
(63, 'MARIO RIOS MAZO', '1020449607', '1020449607', 2, 1, '3178224669', 9, 'INTERNO', 'PREGRADO', 'MARIO.RIOSM@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1020449607.PNG'),
(64, 'DANIEL ESTEBAN RODRIGUEZ HERRERA', '1017249304', '1017249304', 2, 1, '3122510368', 9, 'INTERNO', 'PREGRADO', 'DANIEL.RODRIGUEZHE@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017249304.PNG'),
(65, 'MARIA DE LOS ANGELES SALDARRIAGA ARCILA', '1037658577', '1037658577', 2, 1, '3046297062', 9, 'INTERNO', 'PREGRADO', 'MARIA.SALDARRIAGAAR@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037658577.PNG'),
(66, 'RUBEN DARIO RESTREPO CARDONA', '1035437600', '1035437600', 2, 1, '3113640626', 9, 'INTERNO', 'PREGRADO', 'RUBEN.RESTREPOC@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1035437600.PNG'),
(67, 'ANDERSON GALLEGO LEÓN', '1017219045', '1017219045', 2, 1, '3206904779', 9, 'INTERNO', 'PREGRADO', 'ANDERSON.GALLEGOL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017219045.PNG'),
(68, 'CAMILA ANDREA TORRES SANTAMARIA ', '1017224931', '1017224931', 2, 1, '3212586585', 9, 'INTERNO', 'PREGRADO', 'CAMILA.TORRESSA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017224931.PNG'),
(69, 'DANIEL ALEJANDRO VILLOTA BOHÓRQUEZ', '1152462391', '1152462391', 2, 1, '3012220828', 9, 'INTERNO', 'PREGRADO', 'DANIEL.VILLOTAB@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152462391.PNG'),
(70, 'LAURA ANGELICA LATORRE VEGA', '1065837023', '1065837023', 2, 1, '3127957759', 9, 'INTERNO', 'PREGRADO', 'LAURA.LATORREV@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1065837023.PNG'),
(71, 'JULIANA SANMARTIN SERNA', '1017261790', '1017261790', 2, 1, '3017069098', 9, 'INTERNO', 'PREGRADO', 'JULIANA.SANMARTINS@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017261790.PNG'),
(72, 'DAVID ALEJANDRO URBINA MENESES', '1086223976', '1086223976', 2, 1, '6046050055', 9, 'INTERNO', 'PREGRADO', 'DAVID.URBINA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1086223976.PNG'),
(73, 'LUISA FERNANDA SUÁREZ TABORDA', '1234988957', '1234988957', 2, 1, '3205812396', 9, 'INTERNO', 'PREGRADO', 'LUISA.SUAREZT@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1234988957.PNG'),
(74, 'RAFAEL SANTIAGO VELÁSQUEZ RESTREPO', '1036685440', '1036685440', 2, 1, '3167080040', 9, 'INTERNO', 'PREGRADO', 'RAFAEL.VELASQUEZR@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1234988957.PNG'),
(75, 'JUAN CAMILO CARDONA RODRÍGUEZ', '1152460240', '1152460240', 2, 1, '3106166330', 9, 'INTERNO', 'PREGRADO', 'JUAN.CARDONAR@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152460240.PNG'),
(76, 'SANTIAGO IZQUIERDO LEMOS', '1085334246', '1085334246', 2, 1, '3112019803', 9, 'INTERNO', 'PREGRADO', 'SANTIAGO.IZQUIERDOL@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1085334246.PNG'),
(77, 'ISABELA ORTEGA ARROYO', '1007872669', '1007872669', 2, 0, '3008411694', 4, 'INTERNO', 'PREGRADO', 'ISABELLAORTEGA408@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1085334246.PNG'),
(78, 'NATALIA ANDREA SANCHEZ MAZO', '1152436231', '1152436231', 2, 0, '3004907909', 4, 'INTERNO', 'PREGRADO', 'NATALIA.SANCHEZ.6231@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152436231.PNG'),
(79, 'LAURA MACIAS ARENAS', '1152470033', '1152470033', 2, 0, '3104493245', 4, 'INTERNO', 'PREGRADO', 'LAURAMACIAS.09@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1152470033.PNG'),
(80, 'LAURA VANESSA HERAZO ARGUMEDO', '1066741407', '1066741407', 2, 0, '3016438615', 4, 'INTERNO', 'PREGRADO', 'LAURA.HERAZO.1407@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1066741407.PNG'),
(81, 'MANUELA LOPEZ PIEDRAHITA', '1059712674', '1059712674', 2, 0, '3113761720', 4, 'INTERNO', 'PREGRADO', 'MANUELA.LOPEZ.2674@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1059712674.PNG'),
(82, 'YESENIA CORREA PINILLOS', '1037655049', '1037655049', 2, 0, '3054331710', 4, 'INTERNO', 'PREGRADO', 'YESENIA.COPI@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1037655049.PNG'),
(83, 'ANDRES FELIPE BARON CASTAÑO', '1005322218', '1005322218', 2, 1, '3042703681', 4, 'INTERNO', 'PREGRADO', 'FELIPEBARON2001@HOTMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1005322218.PNG'),
(84, 'OMAR YESID RESTREPO ASPRILLA', '1077471761', '1077471761', 2, 0, '3234677008', 4, 'INTERNO', 'PREGRADO', 'OMAR.RESTREPO.1761@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1005322218.PNG'),
(85, 'NATALIA ARANGO VELEZ', '1039470850', '1039470850', 2, 0, '3196757323', 4, 'INTERNO', 'PREGRADO', 'NATAAVELEZ@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1039470850.PNG'),
(86, 'DAVIAN ALEJANDRO PALACIOS SILVA', '9774304', '9774304', 2, 1, '3106043366', 4, 'RESIDENTE', 'POSTGRADO', 'PALACIOS.DAVIAN@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-9774304.PNG'),
(88, 'CARLOS ALBERTO TAMAYO HURTADO', '1067881542', '1067881542', 2, 1, '3217517040', 4, 'RESIDENTE', 'POSTGRADO', 'CARLOSTAMAYOH@HOTMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1067881542.PNG'),
(89, 'MARIA CAMILA ROBLEDO ESPINAL', '1152214238', '1152214238', 2, 1, '3015810455', 4, 'INTERNO', 'PREGRADO', 'MARIA.ROBLEDO.4238@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152214238.PNG'),
(90, 'JOHAN SEBASTIAN BARRIENTOS CUARTAS', '1028005084', '1028005084', 2, 1, '3217172787', 4, 'INTERNO', 'PREGRADO', 'JOHANSEBC@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1028005084.PNG'),
(91, 'JUAN SEBASTIÁN SIERRA CEDEÑO', '1116801448', '1116801448', 2, 1, '3502463763', 4, 'INTERNO', 'PREGRADO', 'JUSESICE_95@HOTMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1116801448.PNG'),
(92, 'KEVIN JOSE RODRIGUEZ SANCHEZ', '1143995272', '1143995272', 2, 1, '3226276037', 4, 'INTERNO', 'PREGRADO', 'KEVINJ-RODRIGUEZS@UNILIBRE.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1143995272.PNG'),
(93, 'MARIANA ZAPATA CANO', '1017268700', '1017268700', 2, 1, '3128036970', 4, 'INTERNO', 'PREGRADO', 'MARIANA.ZAPATA.8700@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017268700.PNG'),
(94, 'ZURY YAREILA HINESTROZA ARROYO', '1077462479', '1077462479', 2, 1, '3128254426', 4, 'INTERNO', 'PREGRADO', 'ZURYARROYO03@GMAIL.COM', 'SI', '../uploads/estudiantes/fotos/FOTO-1017268700.PNG'),
(95, 'PAMELA RAMIREZ GIL', '1017240663', '1017240663', 2, 1, '3106008543', 4, 'INTERNO', 'PREGRADO', 'PAMELA.RAMIREZ.0663@MIREMINGTON.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1017240663.PNG'),
(96, 'LAURA CRISTINA BOTERO PATIÑO', '1040047481', '1040047481', 2, 1, '3113292476', 4, 'INTERNO', 'PREGRADO', 'LAUBOTERO17@HOTMAIL.ES', 'SI', '../uploads/estudiantes/fotos/FOTO-1040047481.PNG'),
(97, 'DANIELA FERNANDA BASTIDAS VILLOTA', '1088734182', '1088734182', 2, 0, '3146418335', 10, 'INTERNO', 'PREGRADO', 'DANIELA.BASTIDAS@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1088734182.PNG'),
(98, 'ANGIE VANESSA MARTÍNEZ AGREDO', '1061789013', '1061789013', 2, 0, '3185312737', 10, 'INTERNO', 'PREGRADO', 'ANGIE.MAMBUSCAY@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1061789013.PNG'),
(99, 'ARTURO ALEJANDRO HURTADO BALLESTEROS', '1061796498', '1061796498', 2, 0, '3164445722', 10, 'INTERNO', 'PREGRADO', 'ARTURO.HURTADO@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1061796498.PNG'),
(100, 'MARÍA ALEJANDRA MARTÍNEZ PEÑA', '1214739735', '1214739735', 2, 0, '3004949350', 10, 'INTERNO', 'PREGRADO', 'MARIA.MARTINEZP@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1214739735.PNG'),
(101, 'ALEJANDRA QUINCHÍA HENAO', '1152216780', '1152216780', 2, 0, '3003138461', 10, 'INTERNO', 'PREGRADO', 'ALEJANDRA.QUINCHIAH@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152216780.PNG'),
(102, 'JUAN DAVID NIÑO AGUDELO', '1152715485', '1152715485', 2, 0, '3157678694', 10, 'INTERNO', 'PREGRADO', 'JDAVID.NINO@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152715485.PNG'),
(103, 'JUAN PABLO MENESES RESTREPO', '1035442276', '1035442276', 2, 0, '3197909531', 10, 'ESTUDIANTE', 'PREGRADO', 'PABLO.MENESES1@UDEA.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1035442276.PNG'),
(104, 'ANDRÉS ALFONSO CANCHILA ESPINOZA', '1152459589', '1152459589', 2, 1, '3007021170', 11, 'INTERNO', 'PREGRADO', 'ANDRES.CANCHILA@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152459589.PNG'),
(105, 'DONNELLY GÓMEZ ALANA', '1036965835', '1036965835', 2, 0, '3015474723', 11, 'INTERNO', 'PREGRADO', 'ALANA.DONNELLY@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1036965835.PNG'),
(106, 'MARÍA CAMILA GUERRA CORREA', '1037660331', '1037660331', 2, 0, '3114029841', 11, 'INTERNO', 'PREGRADO', 'MARIAC.GUERRA@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037660331.PNG'),
(107, 'MARÍA JOSÉ CORTES GAVIRIA', '1037649045', '1037649045', 2, 1, '3218512742', 11, 'INTERNO', 'PREGRADO', 'MARIA.CORTESG@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1037649045.PNG'),
(108, 'DAVID MUÑOZ LOPERA', '1152458120', '1152458120', 2, 1, '3012422695', 11, 'INTERNO', 'PREGRADO', 'DAVID.MUNOZL@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152458120.PNG'),
(109, 'MARTIN ALONSO BARREIRO GARCÍA', '1152223345', '1152223345', 2, 1, '3013720128', 11, 'INTERNO', 'PREGRADO', ' MARTIN.BARREIRO@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1152223345.PNG'),
(110, 'MARGGY STEPHANIA SAENZ GÓMEZ', '1098812655', '1098812655', 2, 1, '3168661311', 11, 'INTERNO', 'PREGRADO', 'MARGGY.SAENZ@UPB.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1098812655.PNG'),
(111, 'FREDDY ARLEY RINCON URIBE', '1004996992', '1037649642', 2, 1, '3163435820', 9, 'ESTUDIANTE', 'PREGRADO', 'FREDDY.RINCON@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1004996992.PNG'),
(112, 'JOHAN CAMILO HIGUITA BARRERA', '1000405304', '1000405304', 2, 1, '3004657969', 9, 'ESTUDIANTE', 'PREGRADO', 'JOHAN.HIGUITAB@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1000405304.PNG'),
(113, 'JOHANNA ANDREA REYES GARCIA', '1010090732', '1010090732', 2, 1, '3127590353', 9, 'ESTUDIANTE', 'PREGRADO', 'JOHANNA.REYESGA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1000405304.PNG'),
(114, 'DIANA CAROLINA CIFUENTES SOSSA', '1000539388', '1000539388', 2, 1, '3116698046', 9, 'ESTUDIANTE', 'PREGRADO', 'DIANA.CIFUENTESS@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1000539388.PNG'),
(115, 'LISBETH SUSANA VERA DAVID', '1000399870', '1000399870', 2, 1, '3206316913', 9, 'ESTUDIANTE', 'PREGRADO', 'LISBETH.VERA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1000399870.PNG'),
(116, 'NATALIA  RICO ALZATE', '1044507762', '1044507762', 2, 1, '3225934313', 9, 'ESTUDIANTE', 'PREGRADO', 'NATALIA.RICOA@CAMPUSUCC.EDU.CO', 'SI', '../uploads/estudiantes/fotos/FOTO-1044507762.PNG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion_docente`
--
ALTER TABLE `calificacion_docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_teacher` (`type_servi`),
  ADD KEY `type_prog` (`type_prog`);

--
-- Indices de la tabla `documentosestudiantes`
--
ALTER TABLE `documentosestudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `documentos_docentes`
--
ALTER TABLE `documentos_docentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `documentos_instituciones`
--
ALTER TABLE `documentos_instituciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instituciones_contacto`
--
ALTER TABLE `instituciones_contacto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seminar` (`id_seminar`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_program` (`id_program`),
  ADD KEY `id_service` (`id_service`),
  ADD KEY `teacher` (`teacher`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seminario`
--
ALTER TABLE `seminario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_service` (`id_service`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion_docente`
--
ALTER TABLE `calificacion_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `documentosestudiantes`
--
ALTER TABLE `documentosestudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=864;

--
-- AUTO_INCREMENT de la tabla `documentos_docentes`
--
ALTER TABLE `documentos_docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_instituciones`
--
ALTER TABLE `documentos_instituciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `instituciones_contacto`
--
ALTER TABLE `instituciones_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seminario`
--
ALTER TABLE `seminario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_2` FOREIGN KEY (`type_servi`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `docentes_ibfk_3` FOREIGN KEY (`type_prog`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `documentosestudiantes`
--
ALTER TABLE `documentosestudiantes`
  ADD CONSTRAINT `documentosestudiantes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `documentos_docentes`
--
ALTER TABLE `documentos_docentes`
  ADD CONSTRAINT `documentos_docentes_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id`);

--
-- Filtros para la tabla `documentos_instituciones`
--
ALTER TABLE `documentos_instituciones`
  ADD CONSTRAINT `documentos_instituciones_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id`);

--
-- Filtros para la tabla `instituciones_contacto`
--
ALTER TABLE `instituciones_contacto`
  ADD CONSTRAINT `instituciones_contacto_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminario` (`id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `registro_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `seminario`
--
ALTER TABLE `seminario`
  ADD CONSTRAINT `seminario_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
