# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre a columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# Modificar columna sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(50) not null;

# Añadir columna a tabla #
ALTER TABLE usuarios_renom ADD website varchar(100) not null;

# Añadir restricción a columna #
ALTER TABLE usuarios_renom ADD  CONSTRAINT uq_email UNIQUE(email);

# Borrar columna #
ALTER TABLE usuarios_renom DROP website;
