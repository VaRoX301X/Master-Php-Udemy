CREATE TABLE Usuarios(
    id int(10) auto_increment not null,
    nombre varchar(50) not null,
    apellidos varchar(50) null,
    email varchar(50) not null,
    password varchar(20) not null,
    fecha date null,
    constraint pk_usuarios PRIMARY KEY(id),
    constraint uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE Entradas(
    id int(10) auto_increment not null,
    usuario_id int(10) not null,
    categoria_id int(10) not null,
    titulo varchar(100) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    constraint pk_entradas PRIMARY KEY(id),
    constraint fk_entrada_usuario FOREIGN KEY(usuario_id) references usuarios(id),
    constraint fk_entrada_categoria FOREIGN KEY(categoria_id) references categorias(id)
)ENGINE=InnoDb;

CREATE TABLE Categorias(
    id int(10) auto_increment not null,
    nombre varchar(100),
    constraint pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

/*
on delete no action
on delete update
on delete cascade
...
*/