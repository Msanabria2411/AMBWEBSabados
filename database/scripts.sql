CREATE TABLE `cafeteria_db`.`usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre_completo` VARCHAR(50) ,
    `email` VARCHAR(50) ,
    `usuario` VARCHAR(50) ,
    `telefono` VARCHAR(10) ,
    `password` VARCHAR(200) ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
CREATE TABLE `cafeteria_db`.`menu` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) ,
    `descripcion` VARCHAR(100) ,
    `precio` int(6) ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
CREATE TABLE `cafeteria_db`.`eventos` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) ,
    `descripcion` VARCHAR(100) ,
    `fecha` DATE,
    `hora` TIME,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;
CREATE TABLE carrito_de_compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    producto VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);ENGINE = InnoDB;
CREATE TABLE facturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    monto DECIMAL(10, 2) NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);ENGINE = InnoDB;