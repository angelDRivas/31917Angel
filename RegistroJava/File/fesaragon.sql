-- donde exista una db con el mismo nombre la elimina
drop schema if exists `fes_aragon`;

-- se crear la DB 
create schema  if not exists `fes_aragon` default  character set utf8 collate  utf8_spanish2_ci;
USE `fes_aragon`; 

-- se crear la tabla
CREATE TABLE  `ALUMNO`(
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar (8) not null,
`email` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2'
)engine=Innodb default charset=utf8;
-- define el motor de la db que se va a oucupar
-- agregar dos registros
insert into `ALUMNO`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Aaron Velasco','ico','413112576','gloria 15','5612315','aaron@gmail.com','123456','2020-05-12 17:40:00',2);

-- define la llave primaria
alter table `alumno`
  add primary key (`no_cuenta`);
commit;

-- commit confirma la trasaccion o proceso actual, haciendo que sus cambios sean permanentes
