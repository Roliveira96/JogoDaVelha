create database jogo collate 'utf8_unicode_ci' ;



drop database jogo;
drop table usuario;


use jogo;


create table if not exists usuario(
id_usuario int not null auto_increment,
nome varchar(300) not null,
apelido varchar(50) not null,
email varchar(200) not null,
senha varchar(20) not null,
primary key (id_usuario)

);




insert into usuario(nome,apelido,email,senha)
values
('Ricardo1','magro','Ricardo','12345');


select * from usuario;


drop table partida ;


create table partida(
id_partida int not null auto_increment,
idjogador1 int not null,
apelido1 varchar(30) not null,
idjogador2 int,
apelido2 varchar(30),
primary key(id_partida)
);

select * from partida;





