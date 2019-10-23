#renombrar una tabla#
alter table usuarios RENAME TO usuarios_renombre;
#Cambiar nombre de una columna#
ALTER TABLE usuarios_renombre CHANGE apellidos apellido varchar(100) null;
#modif columna sin cambiar nombre#
ALTER TABLE usuarios_renombre MODIFY apellido char(50) not null;
#añadir columna#
ALTER TABLE usuarios_renombre ADD website varchar(150) null;
#añadir restriccion a columna#
ALTER TABLE usuarios_renombre ADD CONSTRAINT uq_email UNIQUE(email);
#borrar una columna#
ALTER TABLE usuarios_renombre DROP website;