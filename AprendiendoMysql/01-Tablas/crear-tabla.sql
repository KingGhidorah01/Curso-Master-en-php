/*
int(n° caracteres)
integer
varchar
char
float
date  time   timestamp

//String mas grnades
TEXT 65535
MEDIUMTEXT 16 millones
LONGTEXT 4 billones

//Enteros mas grandes
Mediumint
bigint

*/

/*
Crear Tabla
*/

CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'Hola que tal',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
