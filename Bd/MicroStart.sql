create database microstart;

use microstart;

create table cliente(
cod_cli int primary key auto_increment
, nome varchar(20) not null
, sobrenome varchar(20) not null
, data_nasc date not null
, cnpj varchar(18) not null
, email varchar(50) not null
, senha varchar(100) not null
);

create table telefone_cli(
cod_tel int primary key auto_increment
, cod_cli integer
, telefone varchar(10) not null
, ddd integer(2) not null
, constraint cod_cli foreign key(cod_cli) references cliente(cod_cli)
);

create table endereco(
cod_end int primary key auto_increment
, rua varchar(35) not null
, cidade varchar(25) not null
, uf char(2) not null
, pais varchar(15) not null
, bairro varchar(35) not null
, cep int(9) not null
);

create table con_end_cli(
cod_con_end_cli int primary key auto_increment
, cod_cli integer
, cod_end integer
, num_casa int(5) not null
, complemento_casa varchar(50)
, constraint cod_cli foreign key(cod_cli) references cliente(cod_cli)
, constraint cod_end foreign key(cod_end) references endereco(cod_end)
);

create table fornecedor(
cod_forn int primary key auto_increment
, cnpj int(18) not null
, nome varchar(20) not null
, sobrenome varchar(35) not null
, data_nasc date not null
, email varchar(50) not null
, senha varchar(100) not null 
);

create table con_end_forn(
cod_con_end_forn int primary key auto_increment
, cod_forn integer
, cod_end integer
, num_casa int(5) not null
, complemento_casa varchar(35) not null
, constraint cod_forn foreign key(cod_forn) references fornecedor(cod_forn)
, constraint cod_end foreign key(cod_end) references endereco(cod_end)
);

create table telefone_forn(
cod_tel_forn int primary key auto_increment
, cod_forn integer
, telefone int(10) not null
, ddd int(2) not null
, constraint cod_forn foreign key(cod_forn) references fornecedor(cod_forn) 
);

create table marca(
cod_marca int primary key auto_increment
, nome varchar(20) not null
);

create table categoria(
cod_categoria int primary key auto_increment
, tipo varchar(20) not null
);

create table produto(
cod_produto int primary key auto_increment
, cod_marca integer
, cod_categoria integer
, nome varchar(30) not null
, preco float(10) not null
, tamanho varchar(20) not null
, quantidade int(6) not null
, constraint cod_marca foreign key(cod_marca) references marca(cod_marca)
, constraint cod_categoria foreign key(cod_categoria) references categoria(cod_categoria)
);

create table con_produto(
cod_forn_produto int primary key auto_increment
, cod_forn integer
, cod_produto integer
, constraint cod_forn foreign key(cod_forn) references fornecedor(cod_forn)
, constraint cod_produto foreign key(cod_produto) references produto(cod_produto)
);

create table pagamento(
cod_pag int primary key auto_increment
, tipo varchar(20) not null
);

create table transportadora(
cod_trans int primary key auto_increment
, nome varchar(20) not null
);

create table registro_venda(
cod_venda int primary key auto_increment
, cod_cli integer
, cod_pag integer
, cod_trans integer
, data_venda date not null
, constraint cod_cli foreign key(cod_cli) references cliente(cod_cli)
, constraint cod_pag foreign key(cod_pag) references pagamento(cod_pag)
, constraint cod_trans foreign key(cod_trans) references transportadora(cod_trans)
);

create table item_venda(
cod_item_venda int primary key auto_increment
, cod_venda integer
, cod_produto integer
, quantidade int(6) not null
, preco float(10) not null
, constraint cod_venda foreign key(cod_venda) references venda(cod_venda)
, constraint cod_produto foreign key(cod_produto) references produto(cod_produto)
);

alter table cliente
modify cod_cli int auto_increment;

insert into cliente(email, senha, nome, sobrenome, data_nasc, cnpj ) values('{$email}', '{$senhaCrypto}', '$nome', '$sobrenome', '2022/06/03', '6546545416');

select * from cliente;