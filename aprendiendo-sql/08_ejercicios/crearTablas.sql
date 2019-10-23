CREATE TABLE coches(
id int(10) auto_increment not null,

modelo varchar(100) not null,
marca varchar(50),
precio int(20) not null,
stock int(255) not null,
constraint pk_coches PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE grupos(

)
....