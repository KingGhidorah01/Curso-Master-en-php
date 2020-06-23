/*
Subconsulta:
- Son consultas que se ejecutan dentro de otras
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
- Jugando con las claves foraneas FK
*/

# Sacar usuarios con entradas #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de gta #
 SELECT nombre, apellidos WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Sacar todas las entradas de la categoria accion utilizando su nombre #
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT  id from categorias WHERE nombre = 'Accion');

# Mostrar las categorias con mas de 3 o mas entradas #
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

# Mostrar los usuarios que crearon una enttrada un martes #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# Mostrar el nombre de el usuarios que tenga mas entradas #
SELECT CONCAT(nombre, ' ',apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);

