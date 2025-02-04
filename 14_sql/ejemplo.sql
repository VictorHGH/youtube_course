CREATE TABLE ejemplo.`contactos` (
  `id` int NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `direccion` varchar(256) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `familia` boolean NOT NULL,
  primary key(id),
  index(nombre),
  index(apellidos),
  fulltext(direccion)
);

INSERT INTO ejemplo.`contactos` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `correo`, `fecha_nacimiento`, `familia`) VALUES
(1, 'Pamela', 'Arana Flores', 'Calle falsa 123', '5582004034', 'pamela@gmail.com', '1904-12-16', 0),
(2, 'Iris', 'Godoy', 'Calle falsa 456', '5530459258', 'iris@hotmail.com', '1992-02-12', 1),
(3, 'Irma', 'Flores Fuentes', 'Calle falsa 3493', '5530483713', 'irma@outlook.com', '1990-03-11', 0),
(4, 'Joel', 'Cordova', 'Calle falsa 3013', '5539294956', 'joel@gmail.com', '1996-01-01', 1),
(5, 'Zolia', 'Flores Peche', 'Calle falsa 3345', '5530130460', 'zolia@outlook.com', '1991-02-03', 0);
