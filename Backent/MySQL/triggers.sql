DROP TABLE IF EXISTS audit; 
--se a creado una tabla para auditar los cambios que se realicen enla tabla usuarios 
CREATE TABLE IF NOT EXISTS audit (    
    id_audt INT PRIMARY KEY AUTO_INCREMENT COMMENT 'primary key',    
    create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,    
    id_user INT,    
    old_user VARCHAR(50),    
    new_user VARCHAR(50),   
    old_email VARCHAR(50),    
    new_email VARCHAR(50),    
    old_usertype VARCHAR(20),    
    new_usertype VARCHAR(20),    
    query_type VARCHAR(20) 
    DEFAULT 'after_update' );   
    -- PARA EL BEFORE ELIMINAMOS LA FK DE LA TABLA AUDIT --CREAMOS UNA NUEVA COLUMNA CON EL TIPO TIGGER QUE ESTAMOS USANDO   --EJEM 
    AFTER UPDATE  DELIMITER $$ -- el DELIMITER es el caracter qu completa una sentencia, se cambia con el fin de que el TRIGGER se ejecute en un solo bloque 
    CREATE TRIGGER if NOT EXISTS after_usuario_update AFTER UPDATE 
    --GUARDA UN CAMBIO QUE SE A REALIZADO CON LOS DATOS ANTIGUOS Y NUEVOS ON  usuarios 
    FOR EACH ROW  BEGIN    INSERT INTO audit (id_user,old_user,new_user,old_email);