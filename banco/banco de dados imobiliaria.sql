create database imobiliaria;
-- drop database imobiliaria;
use imobiliaria;

create table usuarios(
	idUsuario int primary key auto_increment,
    nomeUsuario varchar(50),
    cpfUsuario varchar(20),
    emailUsuario varchar(50),
    senhaUsuario varchar(25),
    senhaUsuarioCrip varchar(255),
    nivelUsuario varchar(25),
    fotoUsuario varchar(100)
);

select * from usuarios