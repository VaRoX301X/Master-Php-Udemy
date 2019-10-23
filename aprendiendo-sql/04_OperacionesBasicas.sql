#INSERTAR NUEVOS REGISTROS#
INSERT INTO usuarios VALUES (null, 'alvaro', 'recalde', 'e@e.e', '123456', '2019-10-22');
INSERT INTO usuarios VALUES (null, 'sergio', 'sanz', 's@e.e', '123456', '2019-10-22');
INSERT INTO usuarios VALUES (null, 'rodrigo', 'lallana', 'l@e.e', '123456', '2019-10-22');

#INSERT AVANZADO#
INSERT INTO usuarios(email,password) VALUES('em@e.e','123456');

#SELECT SIMPLE#

#OPERADORES ARITMETICAS#
SELECT id, email, (7*id) as 'OPERACION' FROM usuarios ORDER BY id ASC;

#FUNCIONES MATEMATICAS#
PI();
RAND();
ROUND(7.91,2);
SQRT();
#FUNCIONES PARA TEXTOS#
UPPER(nombre);
LOWER(nombre);
CONCAT(nombre, '',apellidos);
TRIM();
#OPERACIONES CON FECHAS#
CURDATE(); --> CURRENT DATE
DATEDIFF(fecha1, fecha2) --> DIAS DE DIFERENCIA
DAYNAME(fecha) -- dia de la fecha
DAYMONTH();
DAYYEAR();
DAYOFWEEK();
YEAR();
DAY();
CURTIME() -- HORA ACTUAL
DATE_FORMAT(fecha, '%d-%m-%Y');

#FUNCNIONES GENERALES#
STRCMP(str1, str2) -- compara strings
IFNULL(xxx, 'Este campo está vacio');

