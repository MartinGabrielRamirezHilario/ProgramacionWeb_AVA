drop schema if exists `BaseDeDatosBox`;

create schema if not exists `BaseDeDatosBox` default character set utf8 collate utf8_spanish_ci;
use `BaseDeDatosBox`;

create table `Alumnos`(
`No_Alumno` int(11) not null AUTO_INCREMENT, 
`Nombre` text not null,
`Apellido` text not null,
`Telefono` varchar(10) not null,
`Fecha_de_inicio` datetime not null default current_timestamp,
`Fecha_de_limite` datetime not null,
`Saldo_a_Deber` int not null,
`Contraseña` varchar(10) not null,
primary key(`No_alumno`)
)engine=Innodb default charset=utf8;



insert into `Alumnos`(`Nombre`,`Apellido`,`Telefono`,`Fecha_de_limite`,`Saldo_a_Deber`,`Contraseña`)values('Martin','Ramirez','5551917533',date_add(current_timestamp,interval 1 month),'0','123456'); 
insert into `Alumnos`(`Nombre`,`Apellido`,`Telefono`,`Fecha_de_limite`,`Saldo_a_Deber`,`Contraseña`)values('Hugo','Hidalgo','5587448102',date_add(current_timestamp,interval 1 month),'0','123456');
insert into `Alumnos`(`Nombre`,`Apellido`,`Telefono`,`Fecha_de_limite`,`Saldo_a_Deber`,`Contraseña`)values('Itzel','China','5621180093',date_add(current_timestamp,interval 1 month),'0','123456');
select*from Alumnos