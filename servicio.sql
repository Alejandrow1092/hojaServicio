create database hojaSol;

create table usuario(
    correo VARCHAR (50) primary key not null,
    nombre VARCHAR (50),
    contrasena VARCHAR (255),
    tipo CHAR (10)
);

create TABLE servicio(
    folio mediumint primary key not null,
    tipo VARCHAR (15),
    fecha_init date,
    fecha_fin date 
);



create TABLE atencion(
    folio1 mediumint not null,
    correoU VARCHAR (50) not null,
    PRIMARY KEY(folio1, correoU),

    FOREIGN KEY (folio1) REFERENCES servicio (folio)
    on delete CASCADE
    on UPDATE CASCADE, 

    FOREIGN KEY (correoU) REFERENCES usuario (correo)
    on delete CASCADE
    on UPDATE CASCADE 
) ;

create TABLE solicitante(
    correoS VARCHAR (50) PRIMARY KEY,
    nombre varchar (50),
    celular varchar (50),
    area varchar (50),
    ext mediumint
) ;

create TABLE solicitud(
    folio2 mediumint NOT NULL,
    correoS1 VARCHAR (50),
    PRIMARY KEY(folio2, correoS1),

    FOREIGN KEY (folio2) REFERENCES servicio (folio)
    on delete CASCADE
    on UPDATE CASCADE,

    FOREIGN KEY (correoS1) REFERENCES solicitante(correoS)
     on delete CASCADE
    on UPDATE CASCADE
) ;


