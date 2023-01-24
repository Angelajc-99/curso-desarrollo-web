CREATE TABLE user(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    create_time DATETIME COMMENT 'Create Time',
    usuario VARCHAR(50),
    correo VARCHAR(50),
    contrasena VARCHAR(50)    

) COMMENT ''