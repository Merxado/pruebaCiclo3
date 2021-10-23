CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `documento` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `grupo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `codigo`, `documento`, `nombre`, `carrera`, `grupo`, `telefono`, `email`, `condicion`) VALUES
(1, '12345671', '75111111', 'José Luis Montalvo Sandoval', 'Desarrollo de Software', 'Av. Saenz Peña - Lambayeque - Chiclayo', '922222222', '', 1),
(2, '12345672', '76222222', 'Yassira Castillo', 'Enfermeria Técnica', 'Av. Chiclayo 123 -  Chiclayo', '9711111111', '', 1),

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `numero_trabajador` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `documento` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `profesion` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cargo` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `login` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `numero_trabajador`, `documento`, `nombre`, `profesion`, `cargo`, `direccion`, `telefono`, `email`, `login`, `clave`) VALUES
(1, '123562', '78945612', 'Liliana Arcila', NULL, 'Administrador', 'Chiclayo', '921803285', NULL, 'admin', 'admin');



CREATE TABLE `profesor` (
  `idestudiante` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `documento` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla ´profesor`
--

INSERT INTO `estudiante` (`idestudiante`, `codigo`, `documento`, `nombre`, `carrera`, `direccion`, `telefono`, `email`, `condicion`) VALUES
(1, '12345671', '75111111', 'José Luis Montalvo Sandoval', 'Desarrollo de Software', 'Av. Saenz Peña - Lambayeque - Chiclayo', '922222222', '', 1),