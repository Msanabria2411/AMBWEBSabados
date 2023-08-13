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
INSERT INTO menu (nombre, descripcion, precio)
VALUES 
    ('Bruschetta', 'Pan tostado con tomate y albahaca.', 3500),
    ('Carpaccio de salmón', 'Láminas de salmón crudo con limón y aceite de oliva.', 3500),
    ('Ensalada de quinoa', 'Ensalada de quinoa con aguacate y cilantro.', 3500),
    ('Arancini', 'Bolitas de arroz rellenas de ragú y mozzarella.', 3500),
    ('Prosciutto e Melone', 'Lonchas de jamón prosciutto con melón.', 3500),
    ('Crostini con tapenade', 'Rebanadas de pan con aceitunas y anchoas.', 3500),
    ('Espresso', 'Café concentrado con agua caliente.', 3500),
    ('Latte', 'Bebida de café con espresso y leche caliente.', 3500),
    ('Té de hierbas', 'Infusión de hierbas naturales.', 3500),
    ('Aperol Spritz', 'Cóctel refrescante con Aperol y vino espumoso.', 3500),
    ('Limoncello', 'Licor de limón dulce y fuerte.', 3500),
    ('Granita', 'Bebida helada granulada con sabores naturales.', 3500),
    ('Risotto de champiñones', 'Arroz arborio con champiñones y queso parmesano.', 3500),
    ('Pechuga de pollo a la parrilla', 'Pechuga de pollo con salsa de mostaza y miel.', 3500),
    ('Lasagna de vegetales', 'Capas de pasta con vegetales y salsa de tomate.', 3500),
    ('Saltimbocca alla Romana', 'Lonchas de ternera con salvia y jamón prosciutto.', 3500),
    ('Pizza Margherita', 'Masa de pizza con salsa de tomate y mozzarella.', 3500),
    ('Osso Buco alla Milanese', 'Rodajas de ternera cocidas a fuego lento con verduras.', 3500),
    ('Tiramisú casero', 'Postre con bizcochos empapados en café y mascarpone.', 3500),
    ('Brownie de chocolate', 'Brownies de chocolate con helado de vainilla.', 3500),
    ('Cheesecake de frutos rojos', 'Pastel de queso con frutos rojos y jarabe.', 3500),
    ('Cannoli', 'Tubos de masa frita rellenos de ricota y chocolate.', 3500),
    ('Panna Cotta', 'Postre de crema dulce con salsa de frutos rojos.', 3500),
    ('Tarta de ricota y limón', 'Tarta de queso de ricota con limón.', 3500);
