create table usuarios (
    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(255) null,
    email varchar(100) not null,
    password varchar(255) not null,
    constraint pk_usuarios PRIMARY key(id)
);




/*
not null
null
default 'xxx'
*/

