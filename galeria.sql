create database if not exists galeria;
use galeria;

CREATE TABLE IF NOT EXISTS users(
id int unsigned not null auto_increment primary key,
nome varchar(50) not null,
sobrenome varchar(50) not null,
username varchar(50) not null,
email varchar(50) not null,
senha varchar(100) not null,
avatar varchar(200) not null default "./assets/img/default.png",
createdAt datetime not null default current_timestamp()
);

CREATE TABLE IF NOT EXISTS imagem(
id int unsigned not null auto_increment primary key,
caminho varchar(200) not null,
descricao varchar(50),
userId int unsigned not null,
categoria int unsigned not null default 1,
foreign key(userId) references users(id),
foreign key(categoria) references categoria(id)
);

CREATE TABLE IF NOT EXISTS categoria(
id int unsigned not null auto_increment primary key,
userId int unsigned not null,
nome varchar(50) not null,
foreign key(userId) references users(id)
);

select * from categoria;
