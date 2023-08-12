CREATE DATABASE Perfumeria_Janet;

USE Perfumeria_Janet;

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE
    IF NOT EXISTS `categoria` (
        `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_categoria` varchar(250) NOT NULL,
        `img_catg` varchar(250) DEFAULT NULL,
        `estado_categoria` int(11) DEFAULT NULL,
        PRIMARY KEY (`id_categoria`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 5 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `categoria`

--

INSERT INTO
    `categoria` (
        `id_categoria`,
        `nombre_categoria`,
        `img_catg`,
        `estado_categoria`
    )
VALUES (1, 'Maquillaje', NULL, NULL), (2, 'Perfume', NULL, NULL), (
        3,
        'Cuidado Personal',
        NULL,
        NULL
    ), (4, 'Ropa', NULL, NULL);

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `color`

--

DROP TABLE IF EXISTS `color`;

CREATE TABLE
    IF NOT EXISTS `color` (
        `id_color` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_color` varchar(250) NOT NULL,
        PRIMARY KEY (`id_color`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 7 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `color`

--

INSERT INTO
    `color` (`id_color`, `nombre_color`)
VALUES (1, 'Blanco'), (2, 'Negro'), (3, 'Dorado'), (4, 'Rojo'), (5, 'Azul'), (6, 'Celeste');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `comprobante`

--

DROP TABLE IF EXISTS `comprobante`;

CREATE TABLE
    IF NOT EXISTS `comprobante` (
        `codigo_comprobante` char(6) NOT NULL,
        `fecha_comprobante` datetime NOT NULL,
        `total_pagar` decimal(10, 2) NOT NULL,
        `id_usu` int(11) NOT NULL,
        `id_TipoPago` int(11) NOT NULL,
        `id_tipo_compb` int(11) NOT NULL,
        PRIMARY KEY (`codigo_comprobante`),
        KEY `id_usu` (`id_usu`),
        KEY `id_TipoPago` (`id_TipoPago`),
        KEY `id_tipo_compb` (`id_tipo_compb`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `comprobante`

--

INSERT INTO
    `comprobante` (
        `codigo_comprobante`,
        `fecha_comprobante`,
        `total_pagar`,
        `id_usu`,
        `id_TipoPago`,
        `id_tipo_compb`
    )
VALUES (
        '235789',
        '2023-04-02 00:00:00',
        '25.00',
        1,
        2,
        2
    ), (
        '498216',
        '2023-02-03 00:00:00',
        '25.00',
        2,
        2,
        2
    ), (
        '762310',
        '2023-03-12 00:00:00',
        '28.00',
        3,
        2,
        2
    ), (
        '109845',
        '2023-04-17 00:00:00',
        '32.00',
        4,
        3,
        2
    ), (
        '876543',
        '2023-02-16 00:00:00',
        '25.00',
        5,
        2,
        2
    ), (
        '321987',
        '2023-03-14 00:00:00',
        '28.00',
        6,
        2,
        1
    ), (
        '504820',
        '2023-05-13 00:00:00',
        '44.00',
        7,
        3,
        1
    ), (
        '679123',
        '2023-01-12 00:00:00',
        '25.00',
        8,
        2,
        1
    ), (
        '450678',
        '2023-02-10 00:00:00',
        '100.00',
        9,
        2,
        1
    );

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `detalle_comprobante`

--

DROP TABLE IF EXISTS `detalle_comprobante`;

CREATE TABLE
    IF NOT EXISTS `detalle_comprobante` (
        `cantidad_dc` int(11) NOT NULL,
        `subtotal_dc` decimal(10, 2) NOT NULL,
        `id_producto` int(11) NOT NULL,
        `codigo_comprobante` char(6) NOT NULL,
        KEY `id_producto` (`id_producto`),
        KEY `codigo_comprobante` (`codigo_comprobante`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `detalle_comprobante`

--

INSERT INTO
    `detalle_comprobante` (
        `cantidad_dc`,
        `subtotal_dc`,
        `id_producto`,
        `codigo_comprobante`
    )
VALUES (1, '25.00', 1, '1'), (1, '25.00', 2, '2'), (1, '28.00', 3, '3'), (1, '32.00', 4, '4'), (1, '25.00', 5, '5'), (1, '28.00', 6, '6'), (1, '44.00', 7, '7'), (1, '25.00', 8, '8'), (1, '10.00', 9, '9');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `detalle_orden`

--

DROP TABLE IF EXISTS `detalle_orden`;

CREATE TABLE
    IF NOT EXISTS `detalle_orden` (
        `id_orden` int(11) NOT NULL,
        `cantidad` int(11) NOT NULL,
        `subtotal` decimal(10, 2) NOT NULL,
        `id_producto` int(11) NOT NULL,
        KEY `id_orden` (`id_orden`),
        KEY `id_producto` (`id_producto`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `detalle_orden`

--

INSERT INTO
    `detalle_orden` (
        `id_orden`,
        `cantidad`,
        `subtotal`,
        `id_producto`
    )
VALUES (1, 1, '25.00', 1), (2, 1, '25.00', 2), (3, 1, '28.00', 3), (4, 1, '32.00', 4), (5, 1, '25.00', 5), (6, 1, '28.00', 6), (7, 1, '44.00', 7), (8, 1, '25.00', 8), (9, 1, '100.00', 9);

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `estado_orden`

--

DROP TABLE IF EXISTS `estado_orden`;

CREATE TABLE
    IF NOT EXISTS `estado_orden` (
        `codigo_estado` int(11) NOT NULL AUTO_INCREMENT,
        `descripcion` varchar(250) NOT NULL,
        PRIMARY KEY (`codigo_estado`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `estado_orden`

--

INSERT INTO
    `estado_orden` (
        `codigo_estado`,
        `descripcion`
    )
VALUES (1, 'Por Pagar'), (2, 'Pagado');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `estado_producto`

--

DROP TABLE IF EXISTS `estado_producto`;

CREATE TABLE
    IF NOT EXISTS `estado_producto` (
        `codigo_estado` int(11) NOT NULL AUTO_INCREMENT,
        `descripcion` varchar(250) NOT NULL,
        PRIMARY KEY (`codigo_estado`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 6 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `estado_producto`

--

INSERT INTO
    `estado_producto` (
        `codigo_estado`,
        `descripcion`
    )
VALUES (1, 'Oferta'), (2, 'Bueno'), (3, 'Deteriorado'), (4, 'Caducado'), (5, 'Inactivo');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `imagen`

--

DROP TABLE IF EXISTS `imagen`;

CREATE TABLE
    IF NOT EXISTS `imagen` (
        `id_img` int(11) NOT NULL AUTO_INCREMENT,
        `ruta_img` varchar(250) NOT NULL,
        `uso` varchar(250) NOT NULL,
        PRIMARY KEY (`id_img`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `marca`

--

DROP TABLE IF EXISTS `marca`;

CREATE TABLE
    IF NOT EXISTS `marca` (
        `id_marca` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_marca` varchar(250) NOT NULL,
        `img_marca` varchar(250) DEFAULT NULL,
        `estado_marca` int(11) DEFAULT NULL,
        PRIMARY KEY (`id_marca`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 9 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `marca`

--

INSERT INTO
    `marca` (
        `id_marca`,
        `nombre_marca`,
        `img_marca`,
        `estado_marca`
    )
VALUES (1, 'CYZONE', NULL, NULL), (2, 'AVON', NULL, NULL), (3, 'ESIKA', NULL, NULL), (4, 'LBEL', NULL, NULL), (5, 'Channel', NULL, NULL), (6, 'Tobaco', NULL, NULL), (7, 'Versace', NULL, NULL), (8, 'Paco Rabanne', NULL, NULL);

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `orden`

--

DROP TABLE IF EXISTS `orden`;

CREATE TABLE
    IF NOT EXISTS `orden` (
        `id_orden` int(11) NOT NULL AUTO_INCREMENT,
        `fecha_orden` datetime NOT NULL,
        `total_pagar` decimal(10, 2) NOT NULL,
        `id_usu` int(11) NOT NULL,
        `codigo_estado` int(11) NOT NULL,
        PRIMARY KEY (`id_orden`),
        KEY `id_usu` (`id_usu`),
        KEY `codigo_estado` (`codigo_estado`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 10 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `orden`

--

INSERT INTO
    `orden` (
        `id_orden`,
        `fecha_orden`,
        `total_pagar`,
        `id_usu`,
        `codigo_estado`
    )
VALUES (
        1,
        '2022-04-02 00:00:00',
        '25.00',
        1,
        2
    ), (
        2,
        '2023-02-03 00:00:00',
        '25.00',
        2,
        2
    ), (
        3,
        '2023-03-12 00:00:00',
        '28.00',
        3,
        2
    ), (
        4,
        '2022-04-17 00:00:00',
        '32.00',
        4,
        2
    ), (
        5,
        '2023-02-16 00:00:00',
        '25.00',
        5,
        2
    ), (
        6,
        '2023-03-14 00:00:00',
        '28.00',
        6,
        2
    ), (
        7,
        '2022-05-13 00:00:00',
        '44.00',
        7,
        2
    ), (
        8,
        '2023-01-12 00:00:00',
        '25.00',
        8,
        2
    ), (
        9,
        '2023-02-10 00:00:00',
        '100.00',
        9,
        2
    );

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `producto`

--

DROP TABLE IF EXISTS `producto`;

CREATE TABLE
    IF NOT EXISTS `producto` (
        `id_producto` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_producto` varchar(250) NOT NULL,
        `precio_producto` decimal(10, 2) NOT NULL,
        `stock` int(11) NOT NULL,
        `img_principal` varchar(250) NOT NULL,
        `img_uno` varchar(250) NOT NULL,
        `img_dos` varchar(250) NOT NULL,
        `codigo_estado` int(11) NOT NULL,
        `id_marca` int(11) NOT NULL,
        `id_categoria` int(11) NOT NULL,
        `precio_oferta` decimal(10, 2) DEFAULT NULL,
        `fecha_caducidad` date DEFAULT NULL,
        `id_talla` int(11) DEFAULT NULL,
        `id_color` int(11) DEFAULT NULL,
        `descripcion` text DEFAULT NULL,
        PRIMARY KEY (`id_producto`),
        KEY `codigo_estado` (`codigo_estado`),
        KEY `id_marca` (`id_marca`),
        KEY `id_talla` (`id_talla`),
        KEY `id_color` (`id_color`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 14 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `producto`

--

INSERT INTO
    `producto` (
        `id_producto`,
        `nombre_producto`,
        `precio_producto`,
        `stock`,
        `img_principal`,
        `img_uno`,
        `img_dos`,
        `codigo_estado`,
        `id_marca`,
        `id_categoria`,
        `precio_oferta`,
        `fecha_caducidad`,
        `id_talla`,
        `id_color`,
        `descripcion`
    )
VALUES (
        13,
        'Desodorante roll on',
        '12.00',
        20,
        '/Tienda_Web/img/Productos/Cuidado Personal/desodorante_rollon_1.webp',
        '/Tienda_Web/img/Productos/Cuidado Personal/desodorante_rollon_2.webp',
        '/Tienda_Web/img/Productos/Cuidado Personal/desodorante_rollon_3.webp',
        2,
        4,
        3,
        NULL,
        '2025-10-12',
        NULL,
        NULL,
        'Desodorante par mujer'
    ), (
        12,
        'Crema para manos y uÃ±as',
        '25.00',
        10,
        '/Tienda_Web/img/Productos/Cuidado Personal/crema_manos_u_1.webp',
        '/Tienda_Web/img/Productos/Cuidado Personal/crema_manos_u_2.webp',
        '/Tienda_Web/img/Productos/Cuidado Personal/crema_manos_u_3.webp',
        2,
        3,
        3,
        NULL,
        '2024-12-12',
        NULL,
        NULL,
        'Crema para manos para mujeres '
    );

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `talla`

--

DROP TABLE IF EXISTS `talla`;

CREATE TABLE
    IF NOT EXISTS `talla` (
        `id_talla` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_talla` varchar(250) NOT NULL,
        PRIMARY KEY (`id_talla`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 6 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `talla`

--

INSERT INTO
    `talla` (`id_talla`, `nombre_talla`)
VALUES (1, 'S'), (2, 'M'), (3, 'L'), (4, 'XL'), (5, 'XXL');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `tipo_comprobante`

--

DROP TABLE IF EXISTS `tipo_comprobante`;

CREATE TABLE
    IF NOT EXISTS `tipo_comprobante` (
        `id_tipo_compb` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_tip_compb` varchar(250) NOT NULL,
        PRIMARY KEY (`id_tipo_compb`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `tipo_comprobante`

--

INSERT INTO
    `tipo_comprobante` (
        `id_tipo_compb`,
        `nombre_tip_compb`
    )
VALUES (1, 'Boleta Electronica'), (2, 'Factura Electronica');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `tipo_pago`

--

DROP TABLE IF EXISTS `tipo_pago`;

CREATE TABLE
    IF NOT EXISTS `tipo_pago` (
        `id_tipoPago` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_tipoPago` varchar(250) NOT NULL,
        PRIMARY KEY (`id_tipoPago`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 6 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `tipo_pago`

--

INSERT INTO
    `tipo_pago` (
        `id_tipoPago`,
        `nombre_tipoPago`
    )
VALUES (1, 'Contado'), (2, 'Tarjeta Visa-Credito'), (3, 'Tarjeta Visa-Debito'), (4, 'Tarjeta Mastercard'), (5, 'Paypal');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `tipo_usuario`

--

DROP TABLE IF EXISTS `tipo_usuario`;

CREATE TABLE
    IF NOT EXISTS `tipo_usuario` (
        `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
        `nombre_tipo_usuario` varchar(250) NOT NULL,
        PRIMARY KEY (`id_tipo_usuario`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `tipo_usuario`

--

INSERT INTO
    `tipo_usuario` (
        `id_tipo_usuario`,
        `nombre_tipo_usuario`
    )
VALUES (1, 'Cliente'), (2, 'Administrador');

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `ubigeo`

--

DROP TABLE IF EXISTS `ubigeo`;

CREATE TABLE
    IF NOT EXISTS `ubigeo` (
        `id_ubigeo` char(6) NOT NULL,
        `Departamento` varchar(250) NOT NULL,
        `Provincia` varchar(250) NOT NULL,
        `Distrito` varchar(250) NOT NULL,
        PRIMARY KEY (`id_ubigeo`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `ubigeo`

--

INSERT INTO
    `ubigeo` (
        `id_ubigeo`,
        `Departamento`,
        `Provincia`,
        `Distrito`
    )
VALUES (
        '150801',
        'LIMA',
        'HUAURA',
        'HUACHO'
    ), (
        '150802',
        'LIMA',
        'HUAURA',
        'AMBAR'
    ), (
        '150803',
        'LIMA',
        'HUAURA',
        'CALETA DE CARQUIN'
    ), (
        '150804',
        'LIMA',
        'HUAURA',
        'CHECRAS'
    ), (
        '150805',
        'LIMA',
        'HUAURA',
        'HUALMAY'
    ), (
        '150806',
        'LIMA',
        'HUAURA',
        'HUAURA'
    );

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `usuario`

--

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE
    IF NOT EXISTS `usuario` (
        `id_usu` int(11) NOT NULL AUTO_INCREMENT,
        `user_usu` varchar(250) NOT NULL,
        `password` varchar(250) NOT NULL,
        `nombres_usu` varchar(250) NOT NULL,
        `apellidos_usu` varchar(250) NOT NULL,
        `dni_usu` char(8) NOT NULL,
        `telefono_usu` char(9) NOT NULL,
        `correo_usu` varchar(250) NOT NULL,
        `direccion` varchar(250) NOT NULL,
        `id_ubigeo` char(6) NOT NULL,
        `id_tipo_usuario` int(11) NOT NULL,
        `ruc` char(11) DEFAULT NULL,
        `estado_usu` int(11) DEFAULT NULL,
        PRIMARY KEY (`id_usu`),
        KEY `id_ubigeo` (`id_ubigeo`),
        KEY `id_tipo_usuario` (`id_tipo_usuario`)
    ) ENGINE = MyISAM AUTO_INCREMENT = 11 DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--

-- Volcado de datos para la tabla `usuario`

--

INSERT INTO
    `usuario` (
        `id_usu`,
        `user_usu`,
        `password`,
        `nombres_usu`,
        `apellidos_usu`,
        `dni_usu`,
        `telefono_usu`,
        `correo_usu`,
        `direccion`,
        `id_ubigeo`,
        `id_tipo_usuario`,
        `ruc`,
        `estado_usu`
    )
VALUES (
        1,
        'usu1',
        '1234',
        'Juan',
        'Gabriel ',
        '19548724',
        '945351212',
        'juan.gab@gmail.com',
        'Jr Lima 1123',
        '150806',
        1,
        '20567489234',
        NULL
    ), (
        2,
        'usu2',
        '1234',
        'Gustavo',
        ' Carreño ',
        '19548713',
        '945351254',
        'Gustavo.car@gmail.com',
        'Jr Lima 1111',
        '150802',
        1,
        '10987654321',
        NULL
    ), (
        3,
        'usu3',
        '1234',
        'Arturo',
        'Lora',
        '79548722',
        '945351214',
        'Arturo.lor@gmail.com',
        'Jr Lima 1342',
        '150803',
        1,
        '40891235678',
        NULL
    ), (
        4,
        'usu4',
        '1234',
        'Marius',
        'Ballester',
        '19548725',
        '945351216',
        'Marius.b@gmail.com',
        'Jr Primavera 1356',
        '150806',
        1,
        '50236789104',
        NULL
    ), (
        5,
        'usu5',
        '1234',
        'Francisco',
        'Rios',
        '19548727',
        '945351218',
        'Francisco.ri@gmail.com',
        'Jr Never 4643',
        '150801',
        1,
        '30987124568',
        NULL
    ), (
        6,
        'usu6',
        '1234',
        'Juan',
        'Ballester',
        '79548723',
        '945351215',
        'juan.bal@gmail.com',
        'Jr Pascal 1356',
        '150804',
        1,
        NULL,
        NULL
    ), (
        7,
        'usu7',
        '1234',
        'Gustavo',
        'Herrero',
        '19548726',
        '945351217',
        'Gustavo.ad@gmail.com',
        'Jr Primavera 4321',
        '150802',
        1,
        NULL,
        NULL
    ), (
        8,
        'usu8',
        '1234',
        'Christian',
        'Serna',
        '19548728',
        '945351219',
        'Cristian.Ser@gmail.com',
        'Jr Vidal 5341',
        '150802',
        1,
        NULL,
        NULL
    ), (
        9,
        'usu9',
        '1234',
        'Thiago',
        'Soler',
        '19548729',
        '945351220',
        'Thiago.Sol@gmail.com',
        'Jr renacimiento 5342',
        '150805',
        1,
        NULL,
        NULL
    ), (
        10,
        'usu10',
        '1234',
        'Juan',
        'Solar ',
        '19548724',
        '945351212',
        'juan.Sr@gmail.com',
        'Jr Lima 1123',
        '150806',
        2,
        NULL,
        NULL
    );