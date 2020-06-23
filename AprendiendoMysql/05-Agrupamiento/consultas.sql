# Consultas de agrupamiento #
SELECT COUNT(titulo) AS 'N° de entradas ',categoria_id FROM entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiones #
SELECT COUNT(titulo) AS 'N° de entradas ',categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*
AVG         Sacar media
COUNT       Contar numero de elementos
Max         Valor maximo del grupo
Min         Valor minimo del grupo
Sum         Sumar todo el contenido deñ grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma id', titulo FROM entradas;



