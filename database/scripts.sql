CREATE TABLE `cafeteria_db`.`usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre_completo` VARCHAR(50) ,
    `email` VARCHAR(50) ,
    `usuario` VARCHAR(50) ,
    `telefono` VARCHAR(10) ,
    `password` VARCHAR(200) ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;