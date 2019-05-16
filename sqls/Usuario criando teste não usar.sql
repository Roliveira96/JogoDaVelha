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
('Ricardo','magro','ricardo.de.oliveira96@gmail.com','12345');


select * from usuario;