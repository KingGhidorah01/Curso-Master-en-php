 /*
 Vistas:
 Consulta almacenada en la base de datos que se utiliza como una tabla virtual y no almacena datos, si no que
 utiliza asociasiones y los datos originales de las tablas, de forma que siemrpe se mantiene actualizada.
  */



CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;




