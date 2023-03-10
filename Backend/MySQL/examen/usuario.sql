CREATE TABLE usuario (
    usuario VARCHAR(50) UNIQUE,
    contrasena VARCHAR (50) 
);

ALTER TABLE usuario ADD Column id int AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE  ADD Column usertype VARCHAR(5) DEFAULT 'usuario';

SELECT usuario,contrasena FROM `usuario`;

ALTER TABLE user
ADD CONSTRAINT pk_usuario PRIMARY KEY (correo);

SELECT usuario,contrasena FROM `usuario`;
PRIMARY KEY

SELECT usuario,contrasena FROM `usuario`;

SELECT id_audit,create_time,id_usuario,old_usuario,new_usuario FROM audit;

SELECT usuario,contrasena FROM `usuario`;


CREATE TABLE usuario(  
    id_audit INT PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_user INT,
    old_user VARCHAR(50),
    new_user VARCHAR(50)
);

ALTER TABLE `usuario` 
	CHANGE `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci UNIQUE NOT NULL ;
