CREATE DATABASE Perfumeria_Janet;

USE Perfumeria_Janet;

CREATE TABLE
    tipo_usuario(
        id_tipo_usuario INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_tipo_usuario VARCHAR(250) NOT NULL
    );

CREATE TABLE
    ubigeo(
        id_ubigeo CHAR(6) PRIMARY KEY,
        Departamento VARCHAR(250) NOT NULL,
        Provincia VARCHAR(250) NOT NULL,
        Distrito VARCHAR(250) NOT NULL
    );

CREATE TABLE usuario(
    id_usu INTEGER AUTO_INCREMENT PRIMARY KEY,
	user_usu VARCHAR(250) NOT NULL,
	contrase�a VARCHAR(250) NOT NULL,
    nombres_usu VARCHAR(250) NOT NULL,
    apellidos_usu VARCHAR(250) NOT NULL,
    dni_usu CHAR(8) NOT NULL,
    telefono_usu CHAR(9) NOT NULL,
    correo_usu VARCHAR(250) NOT NULL,
	direccion VARCHAR(250) NOT NULL,
    id_ubigeo CHAR(6) NOT NULL,
	id_tipo_usuario INTEGER NOT NULL,
	ruc CHAR(11)  NULL,
    FOREIGN KEY(id_ubigeo) REFERENCES ubigeo(id_ubigeo),
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id_tipo_usuario)
);

CREATE TABLE
    tipo_pago(
        id_tipoPago INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_tipoPago VARCHAR(250) NOT NULL
    );

CREATE TABLE
    tipo_comprobante(
        id_tipo_compb INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_tip_compb VARCHAR(250) NOT NULL
    );

CREATE TABLE
    comprobante(
        codigo_comprobante CHAR(6) PRIMARY KEY,
        fecha_comprobante datetime NOT NULL,
        total_pagar DECIMAL(10, 2) NOT NULL,
        id_usu INTEGER NOT NULL,
        id_TipoPago INTEGER NOT NULL,
        id_tipo_compb INTEGER NOT NULL,
        FOREIGN KEY(id_usu) REFERENCES usuario(id_usu),
        FOREIGN KEY(id_TipoPago) REFERENCES tipo_pago(id_tipoPago),
        FOREIGN KEY(id_tipo_compb) REFERENCES tipo_comprobante(id_tipo_compb)
    );

CREATE TABLE
    categoria(
        id_categoria INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_categoria VARCHAR(250) NOT NULL,
        img_catg VARCHAR(250) NULL
    );

CREATE TABLE
    marca(
        id_marca INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_marca VARCHAR(250) NOT NULL,
        img_marca VARCHAR(250) NULL
    );

CREATE TABLE
    estado_producto(
        codigo_estado INTEGER AUTO_INCREMENT PRIMARY KEY,
        descripcion varchar(250) NOT NULL
    );

CREATE TABLE
    talla(
        id_talla INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_talla varchar(250) NOT NULL
    );

CREATE TABLE
    color(
        id_color INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_color varchar(250) NOT NULL
    );

CREATE TABLE
    producto(
        id_producto INTEGER AUTO_INCREMENT PRIMARY KEY,
        nombre_producto varchar(250) NOT NULL,
        precio_producto decimal(10, 2) NOT NULL,
        stock INTEGER NOT NULL,
        img_principal varchar(250) NOT NULL,
        img_uno varchar(250) NOT NULL,
        img_dos varchar(250) NOT NULL,
        codigo_estado INTEGER NOT NULL,
        id_marca INTEGER NOT NULL,
        id_categoria INTEGER NOT NULL,
        precio_oferta decimal(10, 2) NULL,
        fecha_caducidad date NULL,
        id_talla INTEGER NULL,
        id_color INTEGER NULL,
        FOREIGN KEY (codigo_estado) REFERENCES estado_producto(codigo_estado),
        FOREIGN KEY (id_marca) REFERENCES marca(id_marca),
        FOREIGN KEY (id_talla) REFERENCES talla(id_talla),
        FOREIGN KEY (id_color) REFERENCES color(id_color)
    );

CREATE TABLE
    detalle_comprobante(
        cantidad_dc INTEGER NOT NULL,
        subtotal_dc DECIMAL(10, 2) NOT NULL,
        id_producto INTEGER NOT NULL,
        codigo_comprobante CHAR(6) NOT NULL,
        FOREIGN KEY (id_producto) REFERENCES producto(id_producto),
        FOREIGN KEY (codigo_comprobante) REFERENCES comprobante(codigo_comprobante)
    );

CREATE TABLE
    estado_orden(
        codigo_estado INTEGER AUTO_INCREMENT PRIMARY KEY,
        descripcion varchar(250) NOT NULL
    );

CREATE TABLE
    orden(
        id_orden INTEGER AUTO_INCREMENT PRIMARY KEY,
        fecha_orden DATETIME NOT NULL,
        total_pagar DECIMAL(10, 2) NOT NULL,
        id_usu INTEGER NOT NULL,
        codigo_estado INTEGER NOT NULL,
        FOREIGN KEY (id_usu) REFERENCES usuario(id_usu),
        FOREIGN KEY (codigo_estado) REFERENCES estado_orden(codigo_estado)
    );

CREATE TABLE
    DETALLE_ORDEN(
        id_orden INTEGER NOT NULL,
        cantidad INTEGER NOT NULL,
        subtotal DECIMAL(10, 2) NOT NULL,
        id_producto INTEGER NOT NULL,
        FOREIGN KEY (id_orden) REFERENCES orden(id_orden),
        FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
    );

CREATE TABLE
    IMAGEN(
        id_img INTEGER AUTO_INCREMENT PRIMARY KEY,
        ruta_img VARCHAR(250) NOT NULL,
        uso VARCHAR(250) NOT NULL
    );

INSERT INTO tipo_usuario VALUES(null,'Cliente');

INSERT INTO tipo_usuario VALUES(null,'Administrador');

INSERT INTO ubigeo VALUES('150801','LIMA','HUAURA','HUACHO');

INSERT INTO ubigeo VALUES('150802','LIMA','HUAURA','AMBAR');

INSERT INTO ubigeo
VALUES
(
        '150803',
        'LIMA',
        'HUAURA',
        'CALETA DE CARQUIN'
    );

INSERT INTO ubigeo VALUES('150804','LIMA','HUAURA','CHECRAS');

INSERT INTO ubigeo VALUES('150805','LIMA','HUAURA','HUALMAY');

INSERT INTO ubigeo VALUES('150806','LIMA','HUAURA','HUAURA');

INSERT INTO usuario
VALUES
(
        null,
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
    );

INSERT INTO usuario
VALUES
(
        null,
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
    );

INSERT INTO usuario
VALUES
(
        null,
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
    );

INSERT INTO usuario
VALUES
(
        null,
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
    );

INSERT INTO usuario
VALUES
(
        null,
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
    );

INSERT INTO usuario
VALUES
(
        null,
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
        null
    );

INSERT INTO usuario
VALUES
(
        null,
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
        null
    );

INSERT INTO usuario
VALUES
(
        null,
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
        null
    );

INSERT INTO usuario
VALUES
(
        null,
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
        null
    );

INSERT INTO usuario
VALUES
(
        null,
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
        null
    );

INSERT INTO tipo_pago VALUES(null,'Contado');

INSERT INTO tipo_pago VALUES(null,'Tarjeta Visa-Credito');

INSERT INTO tipo_pago VALUES(null,'Tarjeta Visa-Debito');

INSERT INTO tipo_pago VALUES(null,'Tarjeta Mastercard');

INSERT INTO tipo_pago VALUES(null,'Paypal');

INSERT INTO tipo_comprobante VALUES(null,'Boleta Electronica');

INSERT INTO tipo_comprobante VALUES(null,'Factura Electronica');

INSERT INTO comprobante VALUES('235789','2023-04-02',25.00,1,2,2);

INSERT INTO comprobante VALUES('498216','2023-02-03',25.00,2,2,2);

INSERT INTO comprobante VALUES('762310','2023-03-12',28.00,3,2,2);

INSERT INTO comprobante VALUES('109845','2023-04-17',32.00,4,3,2);

INSERT INTO comprobante VALUES('876543','2023-02-16',25.00,5,2,2);

INSERT INTO comprobante VALUES('321987','2023-03-14',28.00,6,2,1);

INSERT INTO comprobante VALUES('504820','2023-05-13',44.00,7,3,1);

INSERT INTO comprobante VALUES('679123','2023-01-12',25.00,8,2,1);

INSERT INTO comprobante VALUES('450678','2023-02-10',100.00,9,2,1);

INSERT INTO categoria VALUES(null,'Maquillaje',null);

INSERT INTO categoria VALUES(null,'Perfume',null);

INSERT INTO categoria VALUES(null,'Cuidado Personal',null);

INSERT INTO categoria VALUES(null,'Joyeria',null);

INSERT INTO marca VALUES(null,'CYZONE',null);

INSERT INTO marca VALUES(null,'AVON',null);

INSERT INTO marca VALUES(null,'ESIKA',null);

INSERT INTO marca VALUES(null,'LBEL',null);

INSERT INTO marca VALUES(null,'Channel',null);

INSERT INTO marca VALUES(null,'Tobaco',null);

INSERT INTO marca VALUES(null,'Versace',null);

INSERT INTO marca VALUES(null,'Paco Rabanne',null);

INSERT INTO estado_producto VALUES(null,'Oferta');

INSERT INTO estado_producto VALUES(null,'Bueno');

INSERT INTO estado_producto VALUES(null,'Deteriorado');

INSERT INTO estado_producto VALUES(null,'Caducado');

INSERT INTO talla VALUES(null,'S');

INSERT INTO talla VALUES(null,'M');

INSERT INTO talla VALUES(null,'L');

INSERT INTO talla VALUES(null,'XL');

INSERT INTO talla VALUES(null,'XXL');

INSERT INTO color VALUES(null,'Blanco');

INSERT INTO color VALUES(null,'Negro');

INSERT INTO color VALUES(null,'Dorado');

INSERT INTO color VALUES(null,'Rojo');

INSERT INTO color VALUES(null,'Azul');

INSERT INTO color VALUES(null,'Celeste');

INSERT INTO producto
VALUES
(
        null,
        'Labial satinado',
        25.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        1,
        1,
        null,
        null,
        null,
        1
    );

INSERT INTO producto
VALUES
(
        null,
        'Labial Colorfix',
        25.00,
        12,
        'imgpr',
        'img1',
        'img2',
        2,
        1,
        1,
        null,
        null,
        null,
        2
    );

INSERT INTO producto
VALUES
(
        null,
        'Corrector facial',
        28.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        2,
        1,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume Chanel',
        32.00,
        13,
        'imgpr',
        'img1',
        'img2',
        2,
        5,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume tobacco',
        25.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        6,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume Sweet',
        28.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        1,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume Versace',
        44.00,
        11,
        'imgpr',
        'img1',
        'img2',
        2,
        7,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume Paco Rabanne',
        25.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        8,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO producto
VALUES
(
        null,
        'Perfume Rayo-Macuin',
        100.00,
        10,
        'imgpr',
        'img1',
        'img2',
        2,
        2,
        2,
        null,
        null,
        null,
        null
    );

INSERT INTO detalle_comprobante VALUES(1,25.00,1,1);

INSERT INTO detalle_comprobante VALUES(1,25.00,2,2);

INSERT INTO detalle_comprobante VALUES(1,28.00,3,3);

INSERT INTO detalle_comprobante VALUES(1,32.00,4,4);

INSERT INTO detalle_comprobante VALUES(1,25.00,5,5);

INSERT INTO detalle_comprobante VALUES(1,28.00,6,6);

INSERT INTO detalle_comprobante VALUES(1,44.00,7,7);

INSERT INTO detalle_comprobante VALUES(1,25.00,8,8);

INSERT INTO detalle_comprobante VALUES(1,10.00,9,9);

INSERT INTO estado_orden VALUES(null,'Por Pagar');

INSERT INTO estado_orden VALUES(null,'Pagado');

INSERT INTO orden VALUES(null,'2022-04-02',25.00,1,2);

INSERT INTO orden VALUES(null,'2023-02-03',25.00,2,2);

INSERT INTO orden VALUES(null,'2023-03-12',28.00,3,2);

INSERT INTO orden VALUES(null,'2022-04-17',32.00,4,2);

INSERT INTO orden VALUES(null,'2023-02-16',25.00,5,2);

INSERT INTO orden VALUES(null,'2023-03-14',28.00,6,2);

INSERT INTO orden VALUES(null,'2022-05-13',44.00,7,2);

INSERT INTO orden VALUES(null,'2023-01-12',25.00,8,2);

INSERT INTO orden VALUES(null,'2023-02-10',100.00,9,2);

INSERT INTO DETALLE_ORDEN VALUES(1,1,25.00,1);

INSERT INTO DETALLE_ORDEN VALUES(2,1,25.00,2);

INSERT INTO DETALLE_ORDEN VALUES(3,1,28.00,3);

INSERT INTO DETALLE_ORDEN VALUES(4,1,32.00,4);

INSERT INTO DETALLE_ORDEN VALUES(5,1,25.00,5);

INSERT INTO DETALLE_ORDEN VALUES(6,1,28.00,6);

INSERT INTO DETALLE_ORDEN VALUES(7,1,44.00,7);

INSERT INTO DETALLE_ORDEN VALUES(8,1,25.00,8);

INSERT INTO DETALLE_ORDEN VALUES(9,1,100.00,9);