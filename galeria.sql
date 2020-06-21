create database if not exists galeria;
use galeria;

CREATE TABLE IF NOT EXISTS users(
id int unsigned not null auto_increment primary key,
nome varchar(50) not null,
username varchar(50) not null,
senha varchar(100) not null
);