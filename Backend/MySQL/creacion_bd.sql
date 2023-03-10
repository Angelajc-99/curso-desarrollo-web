-- Crear una bd llamada 'tienda' y comenzar a usarla
CREATE DATABASE if not exists tienda;
USE tienda;
-- Crear una tabla 'productos'
-- CREATE DATABASE productos;
-- USE productos;
-- clave primaria: codigo con tres caracteres
-- nombre
-- precio con dos decimales
-- fechaalta de tipo fecha
CREATE Table productos (
    codigo VARCHAR(3),
    nombre VARCHAR(45),
    precio INT,
    fecha_alta DATE
);

-- Corregimos/añadimos restricciones a la tabla:
ALTER TABLE productos
-- RENAME COLUMN fecha_alta TO fechaalta;
MODIFY COLUMN fecha_alta DATETIME DEFAULT CURRENT_TIMESTAMP,
MODIFY COLUMN precio Decimal(6,2),
ADD CONSTRAINT pk_productos PRIMARY KEY (codigo);

-- Insertar datos en la tabla
INSERT INTO productos (codigo, nombre, precio) VALUES ('a01', 'Afilador', 2.50);
INSERT INTO productos (codigo, nombre, precio) VALUES ('s01', 'Silla mod. ZAZ', 20);
INSERT INTO productos (codigo, nombre, precio) VALUES ('s02', 'Silla mod. XAX', 25);
-- Comprobamos que los datos se hayan introducido correctamente
SELECT * FROM tienda.productos;

-- Añadir una nueva columna con la categoría de los productos
ALTER Table productos ADD COLUMN categoria VARCHAR(15);

-- Ahora mismo todas las categorias tienen valor NULL. Vamos a corregir esto añadiendo un valor a todos los productos
update productos SET categoria = 'herramienta' WHERE categoria IS NULL; 

-- mODIFICAMOS LA CATEGORIA DE LAS SILLAS A UN TÉRMINO CORRECTO
UPDATE productos SET categoria = 'silla' WHERE codigo LIKE 's__';
UPDATE productos SET categoria = 'silla' WHERE  LEFT ('nombre, 5') = 'silla';

-- Ejercicios de repaso: 
-- Datos de producto 'Afilador'
select * from productos WHERE nombre = 'Afilador';
-- Productos cuyo nombre empieza por S
select * FROM productos WHERE nombre LIKE 'S%';
-- nombre y precio de los productos con un valor superior a 22
select nombre, precio from productos WHERE precio > 22;
-- Precio medio de las sillas
SELECT AVG(precio) FROM productos WHERE categoria = 'silla'; 
    -- SELECT AVG(precio) FROM productos WHERE nombre LIKE 'silla%'; 
    -- SELECT AVG(precio) FROM productos WHERE codigo LIKE 's%'; 
    -- lista de categorías sin duplicados
    SELECT DISTINCT(categoria) FROM productos;
    -- cantidad de productos por categoría
    SELECT COUNT(*), categoria FROM productos
        GROUP BY categoria;
    -- Productos cuyo valor es inferior a la media del precio de las sillas (sub-query)
    SELECT nombre, precio FROM productos 
        WHERE precio < (SELECT AVG(precio) FROM productos WHERE categoria = 'silla');




