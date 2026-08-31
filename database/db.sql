create database if not exists sistema_ferroviario;

use sistema_ferroviario;

create table admin (
	id_admin int primary key auto_increment,
    nome varchar(45),
    usuario varchar(45),
    senha varchar(45)
);

create table trem (
	id_trem int primary key auto_increment,
    nome varchar(45),
    modelo varchar(45),
    capacidade int,
    status varchar(45)
);

create table rota (
	id_rota int primary key auto_increment,
    origem varchar(45),
    destino varchar(45)
);

create table trem_rota (
	id_trem_rota int primary key auto_increment,
    id_trem int,
    id_rota int,
	foreign key (id_trem) references trem(id_trem),
    foreign key (id_rota) references rota(id_rota)
);

create table log_acesso (
	id_log int primary key auto_increment,
    data_hora datetime,
    acao varchar(45),
    id_admin int,
    foreign key (id_admin) references admin(id_admin)
);

create table sensor (
	id_sensor int primary key auto_increment,
    tipo_dado varchar(45),
    nome varchar(45),
    localizacao varchar(45),
    id_trem int,
    id_rota int,
    id_admin int,
    foreign key (id_trem) references trem(id_trem),
    foreign key (id_rota) references rota(id_rota),
    foreign key (id_admin) references admin(id_admin)
);

create table registro_sensor (
	id_registro_sensor int primary key auto_increment,
    id_sensor int,
    foreign key (id_sensor) references sensor(id_sensor)
);