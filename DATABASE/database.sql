create database travelytime;

use travelytime;

create table usuariosreg (dni varchar(9), nombre varchar(40), apellidos varchar(40), fechanac date, codigopostal int, email varchar(40), direccion varchar(40));

Alter table usuariosreg add constraint pk_usuariosreg primary key (dni);

create table usulog (usuario varchar(40), contrasena varchar(40), dni varchar(9),chat Boolean); 

Alter table usulog add constraint pk_usulog primary key (usuario);

ALTER TABLE usulog ADD CONSTRAINT fk_dni FOREIGN KEY (dni) REFERENCES usuariosreg(dni);
ALTER TABLE usulog ADD UNIQUE (DNI);
create table viajes (codviaje varchar(4), destino varchar(40));

Alter table viajes add constraint pk_viajes primary key (codviaje);

create table viajesusu(dni varchar(9), codviaje varchar(4), fecha_ini datetime, fecha_fin datetime);

Alter table viajesusu add constraint pk_viajesusu primary key (dni,codviaje,fecha_ini,fecha_fin);

Alter table viajesusu add constraint fk_viajesusu_dni foreign key (dni) references usuariosreg(dni);

Alter table viajesusu add constraint fj_viajesusu_cv foreign key (codviaje) references viajes(codviaje);