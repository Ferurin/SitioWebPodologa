drop database `sitiowebmarcela`;
create database if not exists `sitiowebmarcela` default character set utf8;
use `sitiowebmarcela`;

create table if not exists `administrador` (
  `correo` varchar(25) not null primary key,
  `contrasegna` varchar(25) not null, 
  `fecha_nacimiento` date not null,
  `nombre` varchar(25) not null,
  `apellidos` varchar(25) not null,
  `RUN` varchar(10) not null,
  `telefono` varchar(9) null default null);

create table if not exists `paciente` (
`nombre` varchar(25) not null,
`apellidos` varchar(25) not null,  
`RUN` varchar(10) not null,
`correo` varchar(25) not null primary key,
`contrasegna` varchar(25) not null,
`fecha_nacimiento` date not null,
`telefono` varchar(9) null default null);

create table if not exists `consulta_medica` (
  `id` int not null auto_increment primary key,
  `costo` int default null,
  `paciente_correo` varchar(25) not null,
  `admin_correo` varchar(25) not null,
  foreign key (admin_correo) references administrador(correo) on update cascade on delete cascade,
  foreign key (paciente_correo) references paciente(correo) on update cascade on delete cascade);

create table if not exists `hora` (
  `id` int not null auto_increment primary key,
  `motivo` varchar(100) null,
  `comentario` varchar(100) null,
  `fecha` date not null,
  `hora_fecha` time not null,
  `ciudad` varchar(25) not null,
  `direccion` varchar(50) not null,
  `consulta_medica_id` int not null,
  foreign key (consulta_medica_id) references consulta_medica(id) on update cascade on delete cascade);

insert into administrador (correo, contrasegna, fecha_nacimiento, nombre, apellidos, RUN, telefono)
values ('marcelabri@gmail.com', 'marcela123', '1978-12-17', 'Marcela', 'Briones Bolaños', '117579990k', '985930672');

insert into paciente (correo, contrasegna, fecha_nacimiento, nombre, apellidos, RUN, telefono)
values ('fernandaRe@gmail.com', 'fer123', '1998-03-04', 'Fernanda', 'Rebolledo Saavedra', '123321200k', '975849365');

insert into consulta_medica (costo, paciente_correo, admin_correo)
values (16000, 'fernandaRe@gmail.com', 'marcelabri@gmail.com');

insert into hora (id, motivo, comentario, fecha, hora_fecha, ciudad, direccion, consulta_medica_id)
values (1, 'tengo un juanete', 'soy diabética', '2023-11-11', '19:00', 'Talca', 'calle volcan llaima #603', 1);