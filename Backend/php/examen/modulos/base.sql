-- Active: 1676449761135@@127.0.0.1@3306@base

CREATE TABLE usuarios (
    Id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    email VARCHAR(50) UNIQUE,
    contraseña VARCHAR (50),
    dni VARCHAR(20) UNIQUE,
    mac_orden VARCHAR(20) NOT NULL,
    biometria VARCHAR(20),
    user_type VARCHAR(20),
    usuario VARCHAR(50) UNIQUE,
    contrasena VARCHAR (50), 
    status VARCHAR(50)
);