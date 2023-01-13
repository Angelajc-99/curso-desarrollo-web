-- 1.- Obtener los datos completos de los empleados.
select *from empleados;

-- 2.- Obtener los datos completos de los departamentos. 
select * from departamentos;

--  3.- Obtener los datos de los empleados con cargo ‘Secretaria’.
select *
from empleados
WHERE lower(cargoE)='secretaria';

-- 4.- Obtener el nombre y salario de los empleados.
select nomEmp, salEmp from empleados;

-- 5.- Obtener los datos de los empleados vendedores, ordenado por nombre.
select * from empleados ORDER BY nomEmp;

-- 6.- Listar el nombre de los departamentos.
select * from departamentos;

-- 7.- Obtener el nombre y cargo de todos los empleados, ordenado por salario.
select nomEmp, cargoE from empleados ORDER BY salEmp;
 
 -- 8.- Listar los salarios y comisiones de los empleados del departamento 2000, ordenado por comisión.
 select E.salEmp, E.comisionE from empleados E
 JOIN departamentos D ON E.codDepto = D.codDepto
 WHERE E.codDepto = 2000
 ORDER BY E.comisionE;
 
 -- 9.- Listar todas las comisiones.
 select comisionE from empleados;
 
 -- 10.- Obtener el valor total a pagar que resulta de sumar a los empleados del departamento 3000 una bonificación de 500.000, en orden alfabético del empleado.
 select nomEmp, salEmp, (salEmp+500000) as 'Pago Estimado'
from empleados 
where codDepto = '3000'
order by nomEmp;

-- 11.- Obtener la lista de los empleados que ganan una comisión superior a su sueldo.
select * from empleados 
WHERE  comisionE > salEmp;

-- 12.- Listar los empleados cuya comisión es menor o igual que el 30% de su sueldo.
select * from empleados 
WHERE comisionE <= (salEmp * 0.3);

-- 13.- Elabore un listado donde para cada fila, figure ‘Nombre’ y ‘Cargo’ antes del valor respectivo para cada empleado.
 select nomEmp Nombre, cargoE Cargo from empleados; 
 
 -- 14.- Hallar el salario y la comisión de aquellos empleados cuyo número de documento de identidad es superior al ‘19.709.802’.
 select nDIEmp, salEmp, comisionE from empleados 
 WHERE nDIEmp > '19709802';
 
 -- 15.- Muestra los empleados cuyo nombre empiece entre las letras J y Z (rango). Liste estos empleados y su cargo por orden alfabético.
 select nomEmp, cargoE from empleados 
 WHERE nomEmp Between 'J' AND 'Z'; 
 -- lower(nomemp) > 'j' and lower(nomemp) < 'z'
-- order by nomemp;

-- 16.- Listar el salario, la comisión, el salario total (salario + comisión), documento de identidad del empleado y nombre, 
     -- de aquellos empleados que tienen comisión superior a 1.000.000, ordenar el informe por el número del documento de identidad.
select salEmp, comisionE, (salEmp + comisionE) as 'Salario total', nDIEmp, nomEmp FROM empleados
WHERE comisionE > 1000000 
ORDER BY nDIEmp ASC;

-- 17.- Obtener un listado similar al anterior, pero de aquellos empleados que NO tienen comisión
SELECT nomEmp, comisionE from empleados
WHERE nomEmp BETWEEN 'J' AND 'Z' 
AND comisionE = 0;

-- 18.- Hallar los empleados cuyo nombre no contiene la cadena «MA»
select nomEmp from empleados
WHERE upper(nomEmp) NOT LIKE '%MA%';

--  19.- Obtener los nombres de los departamentos que no sean “Ventas” ni “Investigación” NI ‘MANTENIMIENTO’.
SELECT nombreDpto as 'Nombre de Departamento' from departamentos
where lower(nombreDpto) NOT IN ('ventas','investigación','mantenimiento');





 
 
 