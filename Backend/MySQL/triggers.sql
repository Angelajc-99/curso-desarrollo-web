    -- Active: 1673602447684@@127.0.0.1@3306@academia


-- Creamos una tabla para auditar los cambios en los datos de la tabla "usuarios"
CREATE TABLE audit(  
    id_audit INT PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_user INT,
    old_user VARCHAR(50),
    new_user VARCHAR(50)
);

ADD CONSTRAINT fk_audit
Foreign Key (id_user) REFERENCES usuarios(id);

-- El delimitador es el caracter que completa una sentencia (por ejemplo ';')
DELIMITER $$
-- Cambiamos el delimitador con el fin de que el trigger se ejecute como un solo bloque

-- Creamos un TRIGGER que almacenará los datos viejos cuando hay una modificación
CREATE TRIGGER after_usuarios_update
AFTER UPDATE
ON usuarios FOR EACH ROW
BEGIN
    -- sin el delimitador esta sentencia se ejecutaría al momento
    INSERT INTO audit (id_user,old_user,new_user)
    VALUES(old.id,old.user,new.user);
END$$

-- Una vez hemos terminado de crear los triggers, restauramos el delimitador
DELIMITER ;

SHOW TRIGGERS;

drop TRIGGER after_usuarios_update;

UPDATE usuarios SET user='pepe' WHERE user='pepito';

ALTER TABLE audit ADD COLUMN query_type VARCHAR(28) DEFAULT'AFTER_UPDATE';

DELIMITER $$

--Este TRIGGER guarda los datos de las filas borradas
CREATE TRIGGER before_usuarios_delete
BEFORE DELETE 
ON usuarios FOR EACH ROW
BEGIN
    INSERT INTO audit (id_user,old_user,query_type)
    VALUES(old.id,old.user,'BEFORE_DELETE');

END $$

DELIMITER ;

drop TRIGGER before_usuarios_delete;
ALTER TABLE audit DROP FOREIGN key fk_audit;
DELETE FROM usuarios WHERE id=3;

-- DROP TABLE IF EXISTS audit; 
-- --se a creado una tabla para auditar los cambios que se realicen enla tabla usuarios 
-- CREATE TABLE IF NOT EXISTS audit (    
--     id_audt INT PRIMARY KEY AUTO_INCREMENT COMMENT 'primary key',    
--     create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    
--     id_user INT,    
--     old_user VARCHAR(50),    
--     new_user VARCHAR(50),   
--     old_email VARCHAR(50),    
--     new_email VARCHAR(50),    
--     old_usertype VARCHAR(20),    
--     new_usertype VARCHAR(20),    
--     query_type VARCHAR(20) 
--     DEFAULT 'after_update' );   
--     -- PARA EL BEFORE ELIMINAMOS LA FK DE LA TABLA AUDIT --CREAMOS UNA NUEVA COLUMNA CON EL TIPO TIGGER QUE ESTAMOS USANDO   --EJEM 
--     AFTER UPDATE  DELIMITER $$ -- el DELIMITER es el caracter qu completa una sentencia, se cambia con el fin de que el TRIGGER se ejecute en un solo bloque 
--     CREATE TRIGGER if NOT EXISTS after_usuario_update AFTER UPDATE 
--     --GUARDA UN CAMBIO QUE SE A REALIZADO CON LOS DATOS ANTIGUOS Y NUEVOS ON  usuarios 
--     FOR EACH ROW  BEGIN    INSERT INTO audit (id_user,old_user,new_user,old_email);