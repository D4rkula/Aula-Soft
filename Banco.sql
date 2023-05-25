CREATE DATABASE Banco;
USE Banco;

CREATE TABLE Login (
	Nome VARCHAR(300),
	Login VARCHAR (100),
	Senha VARCHAR (100),
	PRIMARY KEY (Login)
);

INSERT INTO login (Nome, login, Senha)
VALUES ('Administrador', 'Admin', 'FBP123');