-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 19:07:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4
CREATE DATABASE  librosoftv02test;
use librosoftv02test;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librosoftv02test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(4) NOT NULL,
  `nombre_autor` varchar(45) NOT NULL,
  `apellido_autor` varchar(45) NOT NULL,
  `fecha_nacimiento_autor` date DEFAULT NULL,
  `nacionalidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre_autor`, `apellido_autor`, `fecha_nacimiento_autor`, `nacionalidad`) VALUES
(23, 'james', 'patrick', '1967-09-12', 'americano'),
(24, 'Juan', 'Perales', '1986-06-30', 'Chileno'),
(25, 'Paulo', 'Da Silva', '1988-08-10', 'Brazileño'),
(26, 'Ramon', 'Vera Cruz', '1957-01-14', 'Mexicano'),
(27, 'Domingo', 'Albornoz', '1967-11-29', 'Peruano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(3) NOT NULL,
  `nombre_ciudad` varchar(45) NOT NULL,
  `id_regionTC` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre_ciudad`, `id_regionTC`) VALUES
(1, 'Victoria', 3),
(4, 'Puerto Montt', 3),
(6, 'Santiago', 6),
(7, 'Coquimbo', 13),
(8, 'Copiapo', 12),
(10, 'Antofagasta', 11),
(11, 'Iquique', 10);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ciudadregion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ciudadregion` (
`id_ciudad` int(3)
,`nombre_ciudad` varchar(45)
,`id_region` int(2)
,`nombre_region` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `Comentario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `Comentario`) VALUES
(4, ''),
(5, ''),
(6, ''),
(7, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` int(3) NOT NULL,
  `nombre_editorial` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nombre_editorial`) VALUES
(6, 'EDITORIAL BIBLIOTECA AMERICANA S.A. '),
(7, 'EDITORIAL CENTRO GRAFICO LIMITADA '),
(8, 'OCHO LIBROS EDITORIAL LTDA -'),
(9, 'EDITORIAL ANTUCO '),
(11, 'EDITORIAL DE TERROR'),
(12, 'EDITORIAL DE LENGUAJE'),
(13, 'EDITORIAL DEM CIENCIA FICCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_prestamo`
--

CREATE TABLE `estado_prestamo` (
  `id_estado_prestamo` int(2) NOT NULL,
  `nombre_estado_prestamo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_prestamo`
--

INSERT INTO `estado_prestamo` (`id_estado_prestamo`, `nombre_estado_prestamo`) VALUES
(0, 'En espera respuesta petición'),
(1, 'Petición Aceptada'),
(2, 'Petición Rechazada'),
(3, 'Petición Cancelada'),
(10, 'Disponible para prestamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(3) NOT NULL,
  `nombre_genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre_genero`) VALUES
(4, 'ficcion'),
(5, 'Terror'),
(6, 'Suspenso'),
(7, 'Drama'),
(8, 'Artes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(5) NOT NULL,
  `titulo_libro` varchar(45) NOT NULL,
  `fecha_lanzamiento_libro` date DEFAULT NULL,
  `num_paginas_libro` int(4) DEFAULT NULL,
  `descripcion_libro` varchar(500) DEFAULT NULL,
  `id_autorTL` int(4) NOT NULL,
  `id_generoTL` int(3) NOT NULL,
  `id_editorialTL` int(3) NOT NULL,
  `rut_usuarioTL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `titulo_libro`, `fecha_lanzamiento_libro`, `num_paginas_libro`, `descripcion_libro`, `id_autorTL`, `id_generoTL`, `id_editorialTL`, `rut_usuarioTL`) VALUES
(3, 'Hola', '2019-06-12', 15, '45gfdd', 24, 5, 13, '18320291-K'),
(4, 'lost', '1989-02-04', 800, 'perdidos en el infierno', 25, 4, 13, '11780127-6'),
(5, 'la Llorona', '2013-07-05', 250, 'Una Historia Jamas Contada', 27, 6, 8, '7354737-7'),
(6, 'lsañkjsalkj', '2166-02-22', 2115, 'sdfasd', 26, 5, 7, '7354737-7');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `librospersonales`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `librospersonales` (
`rut_usuario` varchar(10)
,`nombres_usuario` varchar(45)
,`ap_paterno_usuario` varchar(45)
,`ap_paterno_materno` varchar(45)
,`id_libro` int(5)
,`titulo_libro` varchar(45)
,`fecha_lanzamiento_libro` date
,`num_paginas_libro` int(4)
,`id_autor` int(4)
,`nombre_autor` varchar(45)
,`apellido_autor` varchar(45)
,`id_genero` int(3)
,`nombre_genero` varchar(45)
,`id_editorial` int(3)
,`nombre_editorial` varchar(45)
,`descripcion_libro` varchar(500)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(5) NOT NULL,
  `id_estado_prestamoTP` int(2) NOT NULL,
  `rut_usuario_prestador` varchar(10) NOT NULL,
  `rut_usuario_prestatario` varchar(10) NOT NULL,
  `id_libroTP` int(5) NOT NULL,
  `id_pto_intercambioTP` int(4) NOT NULL,
  `dias_prestamo` int(2) DEFAULT NULL,
  `fecha_inicio_prestamo` date DEFAULT NULL,
  `fecha_termino_prestamo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_estado_prestamoTP`, `rut_usuario_prestador`, `rut_usuario_prestatario`, `id_libroTP`, `id_pto_intercambioTP`, `dias_prestamo`, `fecha_inicio_prestamo`, `fecha_termino_prestamo`) VALUES
(3, 3, '18320291-K', '7354737-7', 3, 1, 7, '0000-00-00', '0000-00-00'),
(4, 1, '11780127-6', '7354737-7', 4, 1, 23, '0000-00-00', '0000-00-00'),
(5, 2, '7354737-7', '11780127-6', 5, 1, 8, '0000-00-00', '0000-00-00'),
(6, 0, '7354737-7', '11780127-6', 6, 1, 7, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ptos_intercambio`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `ptos_intercambio` (
`id_pto_intercambio` int(4)
,`nombre_pto_intercambio` varchar(45)
,`direccion_pto_intercambio` varchar(45)
,`nombre_ciudad` varchar(45)
,`nombre_region` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto_intercambio`
--

CREATE TABLE `punto_intercambio` (
  `id_pto_intercambio` int(4) NOT NULL,
  `nombre_pto_intercambio` varchar(45) NOT NULL,
  `direccion_pto_intercambio` varchar(45) NOT NULL,
  `id_ciudadTPI` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `punto_intercambio`
--

INSERT INTO `punto_intercambio` (`id_pto_intercambio`, 
`nombre_pto_intercambio`, `direccion_pto_intercambio`, `id_ciudadTPI`) VALUES
(1, 'Biblioteca Municipal', 'Ramirez 234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_region` int(2) NOT NULL,
  `nombre_region` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `nombre_region`) VALUES
(3, 'Los Lagoas'),
(6, 'centro norte'),
(9, 'Araucania'),
(10, 'Tarapacá '),
(11, 'Antofagasta'),
(12, 'Atacama'),
(13, 'Coquimbo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(1) NOT NULL,
  `nombre_tipo_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre_tipo_usuario`) VALUES
(0, 'Administrador Sistema'),
(1, 'Admin Punto Intercambio'),
(2, 'Usuario Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut_usuario` varchar(10) NOT NULL,
  `nombres_usuario` varchar(45) NOT NULL,
  `ap_paterno_usuario` varchar(45) NOT NULL,
  `ap_paterno_materno` varchar(45) NOT NULL,
  `fecha_nacimiento_usuario` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `clave_usuario` varchar(8) NOT NULL,
  `telefono_usuario` int(12) DEFAULT NULL,
  `fecha_ingreso_usuario` date DEFAULT NULL,
  `id_tipo_usuarioTU` int(1) NOT NULL,
  `id_ciudadTU` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut_usuario`, `nombres_usuario`, `ap_paterno_usuario`, `ap_paterno_materno`, `fecha_nacimiento_usuario`, `email`, `clave_usuario`, `telefono_usuario`, `fecha_ingreso_usuario`, `id_tipo_usuarioTU`, `id_ciudadTU`) VALUES
('11780127-6', 'ruben', 'arriagada', 'diaz', '1963-12-01', 'ruben@gmail.com', '12345', 78256278, '2019-06-29', 2, 8),
('1614615-3', 'a', 'a', 'a', '2019-07-23', 'a', '12345', 123, '2019-07-01', 2, 8),
('18320291-K', 'Cristian Andrés', 'Riquelme', 'Riquelme', '2019-06-18', 'riquelme_92@live.cl', '12345', 2147483647, '2019-06-28', 2, 1),
('18700577-9', 'jose guillermo', 'Parra ', 'Quijada', '1994-10-23', 'jose_parra_quijada@hotmail.com', 'Josejose', 945519695, '2019-06-27', 0, 1),
('7354737-7', 'Esteban vdsvdsv', 'Catrilao', 'Pichun', '1993-12-10', 'Ecp', '123456', 2147483647, '2019-06-27', 2, 4),
('16412041-4', 'ruben', 'arriagada', 'diaz', '1963-12-01', 'ruben@gmail.com', '12345', 78256278, '2019-06-29', 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_admin_pto_intercambio`
--

CREATE TABLE `usuario_admin_pto_intercambio` (
  `id_usu_admin_pto_inter` int(4) NOT NULL,
  `id_pto_intercambioTAPI` int(4) NOT NULL,
  `rut_usuarioTAPI` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistadatospersonales`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistadatospersonales` (
`rut_usuario` varchar(10)
,`nombres_usuario` varchar(45)
,`ap_paterno_usuario` varchar(45)
,`ap_paterno_materno` varchar(45)
,`fecha_nacimiento_usuario` date
,`email` varchar(45)
,`clave_usuario` varchar(8)
,`telefono_usuario` int(12)
,`fecha_ingreso_usuario` date
,`nombre_tipo_usuario` varchar(30)
,`nombre_ciudad` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistaprestamos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistaprestamos` (
`id_prestamo` int(5)
,`Rut_prestador` varchar(10)
,`Nombre_prestador` varchar(45)
,`Apellido_prestador` varchar(45)
,`Rut_prestatario` varchar(10)
,`titulo_libro` varchar(45)
,`id_pto_intercambio` int(4)
,`nombre_pto_intercambio` varchar(45)
,`direccion_pto_intercambio` varchar(45)
,`dias_prestamo` int(2)
,`fecha_inicio_prestamo` date
,`fecha_termino_prestamo` date
,`nombre_estado_prestamo` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistaprestamosprestatario`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vistaprestamosprestatario` (
`id_prestamo` int(5)
,`Rut_prestatario` varchar(10)
,`Nombre_prestatario` varchar(45)
,`Apellido_prestatario` varchar(45)
,`Rut_prestador` varchar(10)
,`titulo_libro` varchar(45)
,`id_pto_intercambio` int(4)
,`nombre_pto_intercambio` varchar(45)
,`direccion_pto_intercambio` varchar(45)
,`dias_prestamo` int(2)
,`fecha_inicio_prestamo` date
,`fecha_termino_prestamo` date
,`nombre_estado_prestamo` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usu_admin_pto_intercambio`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usu_admin_pto_intercambio` (
`rut_usuario` varchar(10)
,`nombres_usuario` varchar(45)
,`ap_paterno_usuario` varchar(45)
,`ap_paterno_materno` varchar(45)
,`fecha_nacimiento_usuario` date
,`email` varchar(45)
,`clave_usuario` varchar(8)
,`telefono_usuario` int(12)
,`fecha_ingreso_usuario` date
,`id_tipo_usuarioTU` int(1)
,`id_ciudadTU` int(3)
,`id_pto_intercambio` int(4)
,`nombre_pto_intercambio` varchar(45)
,`direccion_pto_intercambio` varchar(45)
,`id_ciudadTPI` int(3)
,`id_ciudad` int(3)
,`nombre_ciudad` varchar(45)
,`id_usu_admin_pto_inter` int(4)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `ciudadregion`
--
DROP TABLE IF EXISTS `ciudadregion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ciudadregion`  AS  select `ciudad`.`id_ciudad` AS `id_ciudad`,`ciudad`.`nombre_ciudad` AS `nombre_ciudad`,`region`.`id_region` AS `id_region`,`region`.`nombre_region` AS `nombre_region` from (`ciudad` join `region`) where (`ciudad`.`id_regionTC` = `region`.`id_region`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `librospersonales`
--
DROP TABLE IF EXISTS `librospersonales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `librospersonales`  AS  select `usuario`.`rut_usuario` AS `rut_usuario`,`usuario`.`nombres_usuario` AS `nombres_usuario`,`usuario`.`ap_paterno_usuario` AS `ap_paterno_usuario`,`usuario`.`ap_paterno_materno` AS `ap_paterno_materno`,`libro`.`id_libro` AS `id_libro`,`libro`.`titulo_libro` AS `titulo_libro`,`libro`.`fecha_lanzamiento_libro` AS `fecha_lanzamiento_libro`,`libro`.`num_paginas_libro` AS `num_paginas_libro`,`autor`.`id_autor` AS `id_autor`,`autor`.`nombre_autor` AS `nombre_autor`,`autor`.`apellido_autor` AS `apellido_autor`,`genero`.`id_genero` AS `id_genero`,`genero`.`nombre_genero` AS `nombre_genero`,`editorial`.`id_editorial` AS `id_editorial`,`editorial`.`nombre_editorial` AS `nombre_editorial`,`libro`.`descripcion_libro` AS `descripcion_libro` from ((((`usuario` join `libro`) join `autor`) join `genero`) join `editorial`) where ((`usuario`.`rut_usuario` = `libro`.`rut_usuarioTL`) and (`libro`.`id_autorTL` = `autor`.`id_autor`) and (`libro`.`id_generoTL` = `genero`.`id_genero`) and (`libro`.`id_editorialTL` = `editorial`.`id_editorial`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `ptos_intercambio`
--
DROP TABLE IF EXISTS `ptos_intercambio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ptos_intercambio`  AS  select `punto_intercambio`.`id_pto_intercambio` AS `id_pto_intercambio`,`punto_intercambio`.`nombre_pto_intercambio` AS `nombre_pto_intercambio`,`punto_intercambio`.`direccion_pto_intercambio` AS `direccion_pto_intercambio`,`ciudad`.`nombre_ciudad` AS `nombre_ciudad`,`region`.`nombre_region` AS `nombre_region` from ((`punto_intercambio` join `ciudad`) join `region`) where ((`punto_intercambio`.`id_ciudadTPI` = `ciudad`.`id_ciudad`) and (`ciudad`.`id_regionTC` = `region`.`id_region`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistadatospersonales`
--
DROP TABLE IF EXISTS `vistadatospersonales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistadatospersonales`  AS  select `usuario`.`rut_usuario` AS `rut_usuario`,`usuario`.`nombres_usuario` AS `nombres_usuario`,`usuario`.`ap_paterno_usuario` AS `ap_paterno_usuario`,`usuario`.`ap_paterno_materno` AS `ap_paterno_materno`,`usuario`.`fecha_nacimiento_usuario` AS `fecha_nacimiento_usuario`,`usuario`.`email` AS `email`,`usuario`.`clave_usuario` AS `clave_usuario`,`usuario`.`telefono_usuario` AS `telefono_usuario`,`usuario`.`fecha_ingreso_usuario` AS `fecha_ingreso_usuario`,`tipo_usuario`.`nombre_tipo_usuario` AS `nombre_tipo_usuario`,`ciudad`.`nombre_ciudad` AS `nombre_ciudad` from ((`usuario` join `tipo_usuario`) join `ciudad`) where ((`usuario`.`id_tipo_usuarioTU` = `tipo_usuario`.`id_tipo_usuario`) and (`usuario`.`id_ciudadTU` = `ciudad`.`id_ciudad`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistaprestamos`
--
DROP TABLE IF EXISTS `vistaprestamos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistaprestamos`  AS  select `prestamo`.`id_prestamo` AS `id_prestamo`,`prestamo`.`rut_usuario_prestador` AS `Rut_prestador`,`usuario`.`nombres_usuario` AS `Nombre_prestador`,`usuario`.`ap_paterno_usuario` AS `Apellido_prestador`,`prestamo`.`rut_usuario_prestatario` AS `Rut_prestatario`,`libro`.`titulo_libro` AS `titulo_libro`,`punto_intercambio`.`id_pto_intercambio` AS `id_pto_intercambio`,`punto_intercambio`.`nombre_pto_intercambio` AS `nombre_pto_intercambio`,`punto_intercambio`.`direccion_pto_intercambio` AS `direccion_pto_intercambio`,`prestamo`.`dias_prestamo` AS `dias_prestamo`,`prestamo`.`fecha_inicio_prestamo` AS `fecha_inicio_prestamo`,`prestamo`.`fecha_termino_prestamo` AS `fecha_termino_prestamo`,`estado_prestamo`.`nombre_estado_prestamo` AS `nombre_estado_prestamo` from ((((`prestamo` join `usuario`) join `punto_intercambio`) join `libro`) join `estado_prestamo`) where ((`usuario`.`rut_usuario` = `prestamo`.`rut_usuario_prestador`) and (`libro`.`id_libro` = `prestamo`.`id_libroTP`) and (`punto_intercambio`.`id_pto_intercambio` = `prestamo`.`id_pto_intercambioTP`) and (`prestamo`.`id_estado_prestamoTP` = `estado_prestamo`.`id_estado_prestamo`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistaprestamosprestatario`
--
DROP TABLE IF EXISTS `vistaprestamosprestatario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistaprestamosprestatario`  AS  select `prestamo`.`id_prestamo` AS `id_prestamo`,`prestamo`.`rut_usuario_prestatario` AS `Rut_prestatario`,`usuario`.`nombres_usuario` AS `Nombre_prestatario`,`usuario`.`ap_paterno_usuario` AS `Apellido_prestatario`,`prestamo`.`rut_usuario_prestador` AS `Rut_prestador`,`libro`.`titulo_libro` AS `titulo_libro`,`punto_intercambio`.`id_pto_intercambio` AS `id_pto_intercambio`,`punto_intercambio`.`nombre_pto_intercambio` AS `nombre_pto_intercambio`,`punto_intercambio`.`direccion_pto_intercambio` AS `direccion_pto_intercambio`,`prestamo`.`dias_prestamo` AS `dias_prestamo`,`prestamo`.`fecha_inicio_prestamo` AS `fecha_inicio_prestamo`,`prestamo`.`fecha_termino_prestamo` AS `fecha_termino_prestamo`,`estado_prestamo`.`nombre_estado_prestamo` AS `nombre_estado_prestamo` from ((((`prestamo` join `usuario`) join `punto_intercambio`) join `libro`) join `estado_prestamo`) where ((`usuario`.`rut_usuario` = `prestamo`.`rut_usuario_prestatario`) and (`libro`.`id_libro` = `prestamo`.`id_libroTP`) and (`punto_intercambio`.`id_pto_intercambio` = `prestamo`.`id_pto_intercambioTP`) and (`prestamo`.`id_estado_prestamoTP` = `estado_prestamo`.`id_estado_prestamo`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usu_admin_pto_intercambio`
--
DROP TABLE IF EXISTS `vista_usu_admin_pto_intercambio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usu_admin_pto_intercambio`  AS  select `usuario`.`rut_usuario` AS `rut_usuario`,`usuario`.`nombres_usuario` AS `nombres_usuario`,`usuario`.`ap_paterno_usuario` AS `ap_paterno_usuario`,`usuario`.`ap_paterno_materno` AS `ap_paterno_materno`,`usuario`.`fecha_nacimiento_usuario` AS `fecha_nacimiento_usuario`,`usuario`.`email` AS `email`,`usuario`.`clave_usuario` AS `clave_usuario`,`usuario`.`telefono_usuario` AS `telefono_usuario`,`usuario`.`fecha_ingreso_usuario` AS `fecha_ingreso_usuario`,`usuario`.`id_tipo_usuarioTU` AS `id_tipo_usuarioTU`,`usuario`.`id_ciudadTU` AS `id_ciudadTU`,`punto_intercambio`.`id_pto_intercambio` AS `id_pto_intercambio`,`punto_intercambio`.`nombre_pto_intercambio` AS `nombre_pto_intercambio`,`punto_intercambio`.`direccion_pto_intercambio` AS `direccion_pto_intercambio`,`punto_intercambio`.`id_ciudadTPI` AS `id_ciudadTPI`,`ciudad`.`id_ciudad` AS `id_ciudad`,`ciudad`.`nombre_ciudad` AS `nombre_ciudad`,`usuario_admin_pto_intercambio`.`id_usu_admin_pto_inter` AS `id_usu_admin_pto_inter` from (((`usuario` join `usuario_admin_pto_intercambio`) join `punto_intercambio`) join `ciudad`) where ((`usuario`.`rut_usuario` = `usuario_admin_pto_intercambio`.`rut_usuarioTAPI`) and (`usuario_admin_pto_intercambio`.`id_pto_intercambioTAPI` = `punto_intercambio`.`id_pto_intercambio`) and (`punto_intercambio`.`id_ciudadTPI` = `ciudad`.`id_ciudad`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_regionTC` (`id_regionTC`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `estado_prestamo`
--
ALTER TABLE `estado_prestamo`
  ADD PRIMARY KEY (`id_estado_prestamo`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_autorTL` (`id_autorTL`),
  ADD KEY `id_generoTL` (`id_generoTL`),
  ADD KEY `id_editorialTL` (`id_editorialTL`),
  ADD KEY `rut_usuarioTL` (`rut_usuarioTL`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `prestamo_ibfk_1` (`id_estado_prestamoTP`),
  ADD KEY `prestamo_ibfk_2` (`rut_usuario_prestador`),
  ADD KEY `prestamo_ibfk_3` (`rut_usuario_prestatario`),
  ADD KEY `prestamo_ibfk_4` (`id_libroTP`),
  ADD KEY `prestamo_ibfk_5` (`id_pto_intercambioTP`);

--
-- Indices de la tabla `punto_intercambio`
--
ALTER TABLE `punto_intercambio`
  ADD PRIMARY KEY (`id_pto_intercambio`),
  ADD KEY `id_ciudadTPI` (`id_ciudadTPI`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut_usuario`),
  ADD KEY `id_tipo_usuarioTU` (`id_tipo_usuarioTU`),
  ADD KEY `id_ciudadTU` (`id_ciudadTU`);

--
-- Indices de la tabla `usuario_admin_pto_intercambio`
--
ALTER TABLE `usuario_admin_pto_intercambio`
  ADD PRIMARY KEY (`id_usu_admin_pto_inter`),
  ADD KEY `id_pto_intercambioTAPI` (`id_pto_intercambioTAPI`),
  ADD KEY `rut_usuarioTAPI` (`rut_usuarioTAPI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `punto_intercambio`
--
ALTER TABLE `punto_intercambio`
  MODIFY `id_pto_intercambio` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_regionTC`) REFERENCES `region` (`id_region`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_autorTL`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_generoTL`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`id_editorialTL`) REFERENCES `editorial` (`id_editorial`),
  ADD CONSTRAINT `libro_ibfk_4` FOREIGN KEY (`rut_usuarioTL`) REFERENCES `usuario` (`rut_usuario`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_estado_prestamoTP`) REFERENCES `estado_prestamo` (`id_estado_prestamo`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`rut_usuario_prestador`) REFERENCES `usuario` (`rut_usuario`),
  ADD CONSTRAINT `prestamo_ibfk_3` FOREIGN KEY (`rut_usuario_prestatario`) REFERENCES `usuario` (`rut_usuario`),
  ADD CONSTRAINT `prestamo_ibfk_4` FOREIGN KEY (`id_libroTP`) REFERENCES `libro` (`id_libro`),
  ADD CONSTRAINT `prestamo_ibfk_5` FOREIGN KEY (`id_pto_intercambioTP`) REFERENCES `punto_intercambio` (`id_pto_intercambio`);

--
-- Filtros para la tabla `punto_intercambio`
--
ALTER TABLE `punto_intercambio`
  ADD CONSTRAINT `punto_intercambio_ibfk_1` FOREIGN KEY (`id_ciudadTPI`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuarioTU`) REFERENCES `tipo_usuario` (`id_tipo_usuario`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_ciudadTU`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `usuario_admin_pto_intercambio`
--
ALTER TABLE `usuario_admin_pto_intercambio`
  ADD CONSTRAINT `usuario_admin_pto_intercambio_ibfk_1` FOREIGN KEY (`id_pto_intercambioTAPI`) REFERENCES `punto_intercambio` (`id_pto_intercambio`),
  ADD CONSTRAINT `usuario_admin_pto_intercambio_ibfk_2` FOREIGN KEY (`rut_usuarioTAPI`) REFERENCES `usuario` (`rut_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
