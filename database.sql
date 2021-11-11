create table persona(
    id_persona int primary key AUTO_INCREMENT,
    nombre varchar(50) not null,
    paterno varchar(50) not null,
    materno varchar(50),
    sexo varchar(1),
    estado_civil varchar(30),
    fecha_nac date
);