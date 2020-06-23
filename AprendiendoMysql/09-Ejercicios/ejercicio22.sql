/*
22. MOstrar listado d eclientes (numero de cleinte y el nombre)
mostrar tambien el numero de vendedor y su nombre.
*/



SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor'
 FROM clientes c, vendedores v
 WHERE c.vendedor_id = v.id;