CREATE TABLE   (
    cod_espectaculo VARCHAR(8) NOT NULL,
    nombre VARCHAR(80) NOT NULL,
    tipo VARCHAR(80) NOT NULL,
    fecha_inicial DATE,
    fecha_final DATE,
    interprete VARCHAR(80) NOT NULL,
    cod_recinto VARCHAR(80)
)

CREATE TABLE  (
    cod_espectaculo VARCHAR(8) NOT NULL,
    cod_recinto VARCHAR(8) NOT NULL,
    zona VARCHAR(80) NOT NULL,
    precio DECIMAL NOT NULL
);
