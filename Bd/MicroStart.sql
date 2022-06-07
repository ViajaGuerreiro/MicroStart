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
-- Deixar valor default(G) (G para gratuito e P para premium)
, plano char(1) default 'G' not null
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
, cep varchar(9) not null
);

create table con_end(
cod_con_end int primary key auto_increment
, cod_cli integer
, cod_end integer
, num_casa varchar(5) not null
, complemento_casa varchar(50)
, constraint cod_cli_end foreign key(cod_cli) references cliente(cod_cli)
, constraint cod_end foreign key(cod_end) references endereco(cod_end)
);

create table marca(
cod_marca int primary key auto_increment
, nome varchar(20) not null
);

create table categoria(
cod_categoria int primary key auto_increment
, tipo varchar(20) 
);

insert into categoria(tipo) values
 ("moda"),
 ("tecnologia"),
 ("eletrodomesticos"),
 ("construcao"),
 ("outros");

create table lote(
cod_lote int primary key auto_increment
, cod_marca integer not null
, cod_cli integer not null
, cod_categoria integer not null
, produto varchar(30) not null
, preco_lote float(10) not null
, quantidade_itens_lote int(6) not null
, tamanho_do_item varchar(20) not null
, lotes_disponiveis int(6) not null
, ativo varchar(1) default "S" not null
, descricao varchar(500)
 , img varchar(40) not null
, constraint cod_cli_lote foreign key(cod_cli) references cliente(cod_cli)
, constraint cod_marca foreign key(cod_marca) references marca(cod_marca)
, constraint cod_categoria foreign key(cod_categoria) references categoria(cod_categoria)
);

create table pagamento(
cod_pag int primary key auto_increment
, tipo varchar(20) not null
);

insert into pagamento(tipo) values
 ("mercado_pago");

create table transportadora(
cod_trans int primary key auto_increment
, nome varchar(20) not null
);

insert into transportadora(nome) values
 ("sedex"),
 ("pac"),
 ("correio"),
 ("jetLog"),
 ("retirada");

create table registro_venda(
cod_venda int primary key auto_increment
, cod_cli integer
, cod_pag integer default 1
, cod_trans integer
, cod_lote integer
, quantidade_lotes int
, data_hora_venda date not null
, ref int not null
, preco float(10,2) not null
, status_pag varchar(12) not null
, constraint cod_cli_venda foreign key(cod_cli) references cliente(cod_cli)
, constraint cod_pag foreign key(cod_pag) references pagamento(cod_pag)
, constraint cod_trans foreign key(cod_trans) references transportadora(cod_trans)
, constraint cod_lote foreign key(cod_lote) references lote(cod_lote)
);

DELIMITER $
	CREATE TRIGGER tr_registroVenda AFTER INSERT
    ON registro_venda
    FOR EACH ROW
    BEGIN
		UPDATE lote SET lotes_disponiveis = lotes_disponiveis - new.quantidade_lotes
        WHERE cod_lote = new.cod_lote;
        SET @lotes_disponiveis := (select lotes_disponiveis from lote);
        IF (@lotes_disponiveis <= 0) THEN
			UPDATE lote SET ativo = 'N' WHERE cod_lote = new.cod_lote;
		ELSE
            UPDATE lote SET ativo = 'S' WHERE cod_lote = new.cod_lote;
		END IF;
	END
$




-- LEMBRETE: TESTE(APAGAR DEPOIS) --------------------------------------------------
-- INSERT INTO registro_venda(cod_cli, cod_trans, cod_lote, quantidade_lotes, data_hora_venda, ref, preco, status_pag)
-- values (1, 1, 1, 50, '2022/05/01', 111, 50.0, 'pendente');

-- SELECT * FROM LOTE;
-- SELECT * FROM REGISTRO_VENDA;
-- ---------------------------------------------------------------------------------

