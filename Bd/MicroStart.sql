create database microstart;

use microstart;

create table cliente(
cod_cliente int not null primary key
, nome varchar(20) not null
, sobrenome varchar(20) not null
, data_nasc date not null
, cnpj int(18) not null
, email varchar(50)
, senha varchar(100)
)