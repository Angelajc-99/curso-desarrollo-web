
CREATE TABLE audit(  
    id_audit int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    fecha_modif TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_usuario INT,
    old_usuario VARCHAR(15),
    new_usuario VARCHAR(15),
    old_correo VARCHAR(45),
    new_correo VARCHAR(45),
    old_usertype VARCHAR(5),
    new_usertype VARCHAR(5),
    tipo_trigger VARCHAR(20) DEFAULT 'AFTER_UPDATE'
);

DELIMITER $$
CREATE TRIGGER after_user_update
AFTER UPDATE
ON user FOR EACH ROW
BEGIN
    INSERT INTO audit(id_usuario,old_usuario,new_usuario,old_correo,new_correo,old_usertype,new_usertype)
    VALUES(old.id,old.usuario,new.usuario,old.correo,new.correo,old.usertype,new.usertype);
END $$

CREATE TRIGGER before_user_delete
BEFORE DELETE
ON user FOR EACH ROW
BEGIN
    INSERT INTO audit(id_usuario,old_usuario,old_correo,old_usertype,tipo_trigger)
    VALUES(old.id,old.usuario,old.correo,old.usertype,'BEFORE_DELETE');

END $$

DELIMITER ;

SHOW TRIGGERS;

DROP TRIGGER IF EXISTS after_user_update;
DROP TRIGGER IF EXISTS before_user_delete;

DROP TABLE IF EXISTS audito;

