CREATE DATABASE Perfumeria_Janet;

USE Perfumeria_Janet;

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE
    `categoria` (
        `id_categoria` int(11) NOT NULL,
        `nombre_categoria` varchar(250) NOT NULL,
        `img_catg` varchar(250) DEFAULT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `categoria` (
        `id_categoria`,
        `nombre_categoria`,
        `img_catg`
    )
VALUES (1, 'Maquillaje', NULL), (2, 'Perfume', NULL), (3, 'Cuidado Personal', NULL), (4, 'Joyeria', NULL);

DROP TABLE IF EXISTS `color`;

CREATE TABLE
    `color` (
        `id_color` int(11) NOT NULL,
        `nombre_color` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `color` (`id_color`, `nombre_color`)
VALUES (1, 'Blanco'), (2, 'Negro'), (3, 'Dorado'), (4, 'Rojo'), (5, 'Azul'), (6, 'Celeste');

DROP TABLE IF EXISTS `comprobante`;

CREATE TABLE
    `comprobante` (
        `codigo_comprobante` char(6) NOT NULL,
        `fecha_comprobante` datetime NOT NULL,
        `total_pagar` decimal(10, 2) NOT NULL,
        `id_usu` int(11) NOT NULL,
        `id_TipoPago` int(11) NOT NULL,
        `id_tipo_compb` int(11) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

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

DROP TABLE IF EXISTS `detalle_comprobante`;

CREATE TABLE
    `detalle_comprobante` (
        `cantidad_dc` int(11) NOT NULL,
        `subtotal_dc` decimal(10, 2) NOT NULL,
        `id_producto` int(11) NOT NULL,
        `codigo_comprobante` char(6) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `detalle_comprobante` (
        `cantidad_dc`,
        `subtotal_dc`,
        `id_producto`,
        `codigo_comprobante`
    )
VALUES (1, '25.00', 1, '1'), (1, '25.00', 2, '2'), (1, '28.00', 3, '3'), (1, '32.00', 4, '4'), (1, '25.00', 5, '5'), (1, '28.00', 6, '6'), (1, '44.00', 7, '7'), (1, '25.00', 8, '8'), (1, '10.00', 9, '9');

DROP TABLE IF EXISTS `detalle_orden`;

CREATE TABLE
    `detalle_orden` (
        `id_orden` int(11) NOT NULL,
        `cantidad` int(11) NOT NULL,
        `subtotal` decimal(10, 2) NOT NULL,
        `id_producto` int(11) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `detalle_orden` (
        `id_orden`,
        `cantidad`,
        `subtotal`,
        `id_producto`
    )
VALUES (1, 1, '25.00', 1), (2, 1, '25.00', 2), (3, 1, '28.00', 3), (4, 1, '32.00', 4), (5, 1, '25.00', 5), (6, 1, '28.00', 6), (7, 1, '44.00', 7), (8, 1, '25.00', 8), (9, 1, '100.00', 9);

DROP TABLE IF EXISTS `estado_orden`;

CREATE TABLE
    `estado_orden` (
        `codigo_estado` int(11) NOT NULL,
        `descripcion` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `estado_orden` (
        `codigo_estado`,
        `descripcion`
    )
VALUES (1, 'Por Pagar'), (2, 'Pagado');

DROP TABLE IF EXISTS `estado_producto`;

CREATE TABLE
    `estado_producto` (
        `codigo_estado` int(11) NOT NULL,
        `descripcion` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `estado_producto` (
        `codigo_estado`,
        `descripcion`
    )
VALUES (1, 'Oferta'), (2, 'Bueno'), (3, 'Deteriorado'), (4, 'Caducado');

DROP TABLE IF EXISTS `imagen`;

CREATE TABLE
    `imagen` (
        `id_img` int(11) NOT NULL,
        `ruta_img` varchar(250) NOT NULL,
        `uso` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

DROP TABLE IF EXISTS `marca`;

CREATE TABLE
    `marca` (
        `id_marca` int(11) NOT NULL,
        `nombre_marca` varchar(250) NOT NULL,
        `img_marca` varchar(250) DEFAULT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `marca` (
        `id_marca`,
        `nombre_marca`,
        `img_marca`
    )
VALUES (1, 'CYZONE', NULL), (2, 'AVON', NULL), (3, 'ESIKA', NULL), (4, 'LBEL', NULL), (5, 'Channel', NULL), (6, 'Tobaco', NULL), (7, 'Versace', NULL), (8, 'Paco Rabanne', NULL);

DROP TABLE IF EXISTS `orden`;

CREATE TABLE
    `orden` (
        `id_orden` int(11) NOT NULL,
        `fecha_orden` datetime NOT NULL,
        `total_pagar` decimal(10, 2) NOT NULL,
        `id_usu` int(11) NOT NULL,
        `codigo_estado` int(11) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

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

DROP TABLE IF EXISTS `producto`;

CREATE TABLE
    `producto` (
        `id_producto` int(11) NOT NULL,
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
        `descripcion` text DEFAULT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

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
        1,
        'Labial satinado',
        '25.00',
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        1,
        1,
        NULL,
        NULL,
        NULL,
        1,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. '
    ), (
        2,
        'Labial Colorfix',
        '25.00',
        12,
        'imgpr',
        'img1',
        'img2',
        2,
        1,
        1,
        NULL,
        NULL,
        NULL,
        2,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. '
    ), (
        3,
        'Corrector facial',
        '28.00',
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        2,
        1,
        NULL,
        NULL,
        NULL,
        NULL,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. '
    ), (
        4,
        'Perfume Kalos',
        '32.00',
        13,
        './img/Productos/PerfH_Kalos1.webp',
        './img/Productos/PerfH_Kalos2.webp',
        './img/Productos/PerfH_Kalos3.webp',
        2,
        5,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Lorem ipsuasdas m dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. '
    ), (
        5,
        'Perfume Kalos Tech',
        '25.00',
        10,
        './img/Productos/PerfH_KalosTech1.webp',
        './img/Productos/PerfH_KalosTech2.webp',
        './img/Productos/PerfH_KalosTech3.webp',
        2,
        6,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Perfume para el pto de moises olor a flores para el marico'
    ), (
        6,
        'Perfume Magnat',
        '28.00',
        10,
        './img/Productos/PerfH_Magnat1.webp',
        './img/Productos/PerfH_Magnat2.webp',
        './img/Productos/PerfH_Magnat3.webp',
        2,
        1,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. '
    ), (
        7,
        'Perfume Pulso',
        '44.00',
        11,
        './img/Productos/PerfH_PulsoAbsolute1.webp',
        './img/Productos/PerfH_PulsoAbsolute2.webp',
        './img/Productos/PerfH_PulsoAbsolute3.webp',
        2,
        7,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus. \n'
    ), (
        8,
        'Perfume Paco Rabanne',
        '25.00',
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        8,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Nestor pisado '
    ), (
        9,
        'Perfume Rayo-Macuin',
        '100.00',
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        2,
        2,
        NULL,
        NULL,
        NULL,
        NULL,
        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente repellendus in pariatur voluptate vero error praesentium saepe? Rem deserunt non sint recusandae, aliquam cumque ea veniam tempora voluptates fugiat minus.  asdasdas'
    );

DROP TABLE IF EXISTS `talla`;

CREATE TABLE
    `talla` (
        `id_talla` int(11) NOT NULL,
        `nombre_talla` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `talla` (`id_talla`, `nombre_talla`)
VALUES (1, 'S'), (2, 'M'), (3, 'L'), (4, 'XL'), (5, 'XXL');

DROP TABLE IF EXISTS `tipo_comprobante`;

CREATE TABLE
    `tipo_comprobante` (
        `id_tipo_compb` int(11) NOT NULL,
        `nombre_tip_compb` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `tipo_comprobante` (
        `id_tipo_compb`,
        `nombre_tip_compb`
    )
VALUES (1, 'Boleta Electronica'), (2, 'Factura Electronica');

DROP TABLE IF EXISTS `tipo_pago`;

CREATE TABLE
    `tipo_pago` (
        `id_tipoPago` int(11) NOT NULL,
        `nombre_tipoPago` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `tipo_pago` (
        `id_tipoPago`,
        `nombre_tipoPago`
    )
VALUES (1, 'Contado'), (2, 'Tarjeta Visa-Credito'), (3, 'Tarjeta Visa-Debito'), (4, 'Tarjeta Mastercard'), (5, 'Paypal');

DROP TABLE IF EXISTS `tipo_usuario`;

CREATE TABLE
    `tipo_usuario` (
        `id_tipo_usuario` int(11) NOT NULL,
        `nombre_tipo_usuario` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

INSERT INTO
    `tipo_usuario` (
        `id_tipo_usuario`,
        `nombre_tipo_usuario`
    )
VALUES (1, 'Cliente'), (2, 'Administrador');

DROP TABLE IF EXISTS `ubigeo`;

CREATE TABLE
    `ubigeo` (
        `id_ubigeo` char(6) NOT NULL,
        `Departamento` varchar(250) NOT NULL,
        `Provincia` varchar(250) NOT NULL,
        `Distrito` varchar(250) NOT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

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

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE
    `usuario` (
        `id_usu` int(11) NOT NULL,
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
        `ruc` char(11) DEFAULT NULL
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

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
        `ruc`
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
        '20567489234'
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
        '10987654321'
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
        '40891235678'
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
        '50236789104'
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
        '30987124568'
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
        NULL
    );

ALTER TABLE `categoria` ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `color` ADD PRIMARY KEY (`id_color`);

ALTER TABLE `comprobante`
ADD
    PRIMARY KEY (`codigo_comprobante`),
ADD KEY `id_usu` (`id_usu`),
ADD
    KEY `id_TipoPago` (`id_TipoPago`),
ADD
    KEY `id_tipo_compb` (`id_tipo_compb`);

ALTER TABLE
    `detalle_comprobante`
ADD
    KEY `id_producto` (`id_producto`),
ADD
    KEY `codigo_comprobante` (`codigo_comprobante`);

ALTER TABLE `detalle_orden`
ADD
    KEY `id_orden` (`id_orden`),
ADD
    KEY `id_producto` (`id_producto`);

ALTER TABLE `estado_orden` ADD PRIMARY KEY (`codigo_estado`);

ALTER TABLE `estado_producto` ADD PRIMARY KEY (`codigo_estado`);

ALTER TABLE `imagen` ADD PRIMARY KEY (`id_img`);

ALTER TABLE `marca` ADD PRIMARY KEY (`id_marca`);

ALTER TABLE `orden`
ADD PRIMARY KEY (`id_orden`),
ADD KEY `id_usu` (`id_usu`),
ADD
    KEY `codigo_estado` (`codigo_estado`);

ALTER TABLE `producto`
ADD
    PRIMARY KEY (`id_producto`),
ADD
    KEY `codigo_estado` (`codigo_estado`),
ADD
    KEY `id_marca` (`id_marca`),
ADD
    KEY `id_talla` (`id_talla`),
ADD KEY `id_color` (`id_color`);

ALTER TABLE `talla` ADD PRIMARY KEY (`id_talla`);

ALTER TABLE `tipo_comprobante` ADD PRIMARY KEY (`id_tipo_compb`);

ALTER TABLE `tipo_pago` ADD PRIMARY KEY (`id_tipoPago`);

ALTER TABLE `tipo_usuario` ADD PRIMARY KEY (`id_tipo_usuario`);

ALTER TABLE `ubigeo` ADD PRIMARY KEY (`id_ubigeo`);

ALTER TABLE `usuario`
ADD PRIMARY KEY (`id_usu`),
ADD
    KEY `id_ubigeo` (`id_ubigeo`),
ADD
    KEY `id_tipo_usuario` (`id_tipo_usuario`);

ALTER TABLE
    `categoria` MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

ALTER TABLE
    `color` MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

ALTER TABLE
    `estado_orden` MODIFY `codigo_estado` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE
    `estado_producto` MODIFY `codigo_estado` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

ALTER TABLE
    `imagen` MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE
    `marca` MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9;

ALTER TABLE
    `orden` MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;

ALTER TABLE
    `producto` MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;

ALTER TABLE
    `talla` MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

ALTER TABLE
    `tipo_comprobante` MODIFY `id_tipo_compb` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE
    `tipo_pago` MODIFY `id_tipoPago` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

ALTER TABLE
    `tipo_usuario` MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

ALTER TABLE
    `usuario` MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 11;