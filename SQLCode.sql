create database clinica_ortodontica;

create table paciente (
id int auto_increment not null,
nome varchar (100) not null,
data_nasc date not null,
endereco varchar(55) not null,
primary key (id)
);

create table funcionario (
id int auto_increment not null,
nome varchar (100) not null,
funcao varchar(50) not null,
telefone bigint(14) not null,
primary key(id)
);

create table consulta (
id int auto_increment not null,
data date not null,
plano varchar(50) not null,
diagnostico varchar(150) not null,
primary key(id)
);