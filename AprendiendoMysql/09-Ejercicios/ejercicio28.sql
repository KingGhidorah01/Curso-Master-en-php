/*
28. Mostrar todos los vendedores y el numero de cliente.
se debe mostrar tengan o no cliente.
*/

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;


