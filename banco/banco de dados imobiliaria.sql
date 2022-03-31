create database imobiliaria;
use imobiliaria;

create table usuarios(
	idUsuario int primary key auto_increment,
    nomeUsuario varchar(50),
    cpfUsuario varchar(20),
    emailUsuario varchar(50),
    senhaUsuario varchar(25),
    senhaUsuario varchar(255),
    nivel varchar(25) 
);