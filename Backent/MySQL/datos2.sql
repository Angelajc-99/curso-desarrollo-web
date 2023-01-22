ALTER TABLE empleados
ADD CONSTRAINT pk_empleados
PRIMARY KEY (dni);

ALTER TABLE historial_salarial
ADD CONSTRAINT pk_historial_salarial
PRIMARY KEY (empleado_dni, salario, fecha_comienzo);

ALTER TABLE historial_laboral
ADD CONSTRAINT pk_historial_laboral
PRIMARY KEY (empleado_dni, trabajo_cod, fecha_inicio);

ALTER TABLE departamentos
ADD CONSTRAINT pk_departamentos
PRIMARY KEY (departamento_cod);

ALTER TABLE estudios
ADD CONSTRAINT pk_departamentos
PRIMARY KEY (departamento_cod);

ALTER TABLE universidades
ADD constraint pk_universidades
PRIMARY KEY (uni_cod);

ALTER TABLE trabajos
ADD CONSTRAINT pk_trabajos
PRIMARY KEY (trabajo_cod);

