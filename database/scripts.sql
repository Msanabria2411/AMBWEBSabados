CREATE TABLE `cafeteria_db`.`usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre_completo` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `usuario` VARCHAR(50) NOT NULL,
    `telefono` VARCHAR(10) NOT NULL,
    `password` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;