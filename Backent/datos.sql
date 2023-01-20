CREATE TABLE espectaculos (
    cod_espectaculo VARCHAR(8) NOT NULL,
    nombre VARCHAR(80) NOT NULL,
    tipo VARCHAR(80) NOT NULL,
    fecha_inicial DATE,
    fecha_final DATE,
    interprete VARCHAR(80) NOT NULL,
    cod_recinto VARCHAR(80)
)

CREATE TABLE precios_espectaculos (
    cod_espectaculo VARCHAR(8) NOT NULL,
    cod_recinto VARCHAR(8) NOT NULL,
    zona VARCHAR(80) NOT NULL,
    precio DECIMAL NOT NULL
);

CREATE TABLE recintos (
    cod_recinto VARCHAR(8) NOT NULL,
    nombre VARCHAR(80) NOT NULL,
    direccion VARCHAR(80) NOT NULL,
    ciudad VARCHAR(80) NOT NULL,
    telefono VARCHAR(80),
    horario VARCHAR(80) NOT NULL
);

CREATE TABLE zonas_recintos (
    cod_recinto VARCHAR(8) NOT NULL,
    zona VARCHAR(80) NOT NULL,
    capacidad INTEGER NOT NULL
);

CREATE TABLE asientos (
    cod_recinto VARCHAR(8) NOT NULL,
    zona VARCHAR(80) NOT NULL,
    fila INTEGER NOT NULL,
    numero INTEGER NOT NULL
);

CREATE TABLE representaciones (
    cod_espectaculo varchar(8) NOT NULL,
    fecha 
    hora DATE


)
