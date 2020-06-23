/*
5. Listar todos los vendedores y mostrar sus nombres y al lado, mostrar los días que esta registrado en el concesionario
*/

SELECT nombre, DATEDIFF(CURDATE(), fecha_alta) AS 'DIAS' FROM vendedores;




