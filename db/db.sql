create database if not exists db_admin;

use db_admin;

create table if not exists usuarios(
  
  id_usuario int(21) auto_increment primary key,
  usuario varchar(45),
  contraseña varchar(45)
  
)ENGINE=InnoDB;

create table if not exists historial(
  
  id_historial int(21) auto_increment primary key,
  codigo varchar(45),
  fecha_i date,
  fecha_f date,
  tipo_m varchar(45),
  problema varchar(250),
  causas varchar(250),
  solucion varchar(500),
  responsable varchar(150),
  estado_final varchar(150),
  constraint fk_historial_practicante foreign key(practicante_id) references practicantes(id_p)
  
)ENGINE=InnoDB;

create table if not exists practicantes(

  id_p int(21) auto_increment primary key,
  cedula bigint,
  nombre varchar(45),
  apellido varchar(45),
  constraint cedula_p unique(cedula)

)ENGINE=InnoDB;
