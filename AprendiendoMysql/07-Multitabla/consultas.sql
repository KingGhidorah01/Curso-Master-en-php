/*
Consulta multitabla
Son consultas que sirven para consultar varias tablas en una sola sentencia
*/

# Mostrar las entradas con el nombre del autor y el nombre de la categoria #
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e, usuarios u, categorias c WHERE e.usuario_id = u.id AND e.categoria_id = c.id;


# Inner Join#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM entradas e INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;


# Mostrar el nombre de las catagorias y al lado cuantas entradas tienen #
SELECT c.nombre, COUNT(e.id) FROM  categorias c, entradas e WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# Left join #
SELECT c.nombre, COUNT(e.id) FROM categorias c LEFT JOIN entradas e ON e.categoria_id = c.id GROUP  BY categoria_id;

SELECT c.nombre, COUNT(e.id) FROM entradas e RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP  BY categoria_id;


# Mostrar el email de los usuarios y a al lado cuantas entradas tienen #
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;














