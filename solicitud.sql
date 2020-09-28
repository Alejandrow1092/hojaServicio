create database servicio;

use servicio;

create table usuario(
    correoU VARCHAR (50) primary key not null,
    nombre VARCHAR (50),
    contrasena VARCHAR (255),
    tipo CHAR(1)
);

create TABLE servicio(
    folio mediumint primary key not null,
    tipo VARCHAR (15),
    fecha_init datetime,
    fecha_fin datetime 
);



create TABLE atencion(
    folio mediumint not null,
    correoU VARCHAR (50) not null,
    PRIMARY KEY(folio, correoU),

    FOREIGN KEY (atencion.folio) REFERENCES servicio (servicio.folio)
    on delete CASCADE
    on UPDATE CASCADE,
    FOREIGN KEY (atencion.correoU) REFERENCES usuario (usuario.correoU)
    on delete CASCADE
    on UPDATE CASCADE
) ENGINE=INNODB;

create TABLE solicitud(
    folio mediumint NOT NULL,
    correoS VARCHAR (50),
    PRIMARY KEY(folio, correoS),
    FOREIGN KEY (solicitud.folio) REFERENCES servicio (servicio.folio)
    on delete CASCADE
    on UPDATE CASCADE,
    FOREIGN KEY (solicitud.correoS) REFERENCES solicitante (solicitante.correoS)
    on delete CASCADE
    on UPDATE CASCADE
) ENGINE=INNODB;

create TABLE solicitante(
    correoS VARCHAR (50) NOT NULL,
    nombre varchar (50),
    celular varchar (50),
    area varchar(50),
    ext mediumint,
    PRIMARY KEY(correoS),
    on delete CASCADE
    on UPDATE CASCADE
) ;
