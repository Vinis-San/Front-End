/*- ID
- TITULO
- DESCRICAO
- RECEITATEXTO
- AUTOR
- TIPO DA RECEITA */

create database gastrocode;

use gastrocode;

create table chef(
    id int auto_increment not null,
    nome_completo varchar(155) not null,
    apelido varchar(50) unique not null,
    senha VARCHAR(50) not null,
    PRIMARY key(id)
);

CREATE table receitas(
    id int auto_increment not null,
    titulo varchar(100) not null,
    descricao varchar(155) not null,
    receita char not null,
    chef_id int not null,
    PRIMARY key(id),
    Foreign Key (chef_id) REFERENCES gastrocode.chef(id)
);
insert into gastrocode.chef(nome_completo, apelido, senha) values
("Admin Totalis","admin","admin123");

SELECT * from gastrocode.chef

