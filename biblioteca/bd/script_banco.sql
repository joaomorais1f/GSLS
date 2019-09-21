CREATE DATABASE gsls;
USE gsls;

CREATE TABLE usuario(
	idusuario   INT AUTO_INCREMENT,
	nome    VARCHAR(60),
	email   VARCHAR(60),
	senha   VARCHAR(60),	
	ouvinte VARCHAR(1),
	PRIMARY KEY    (idusuario)
);

CREATE TABLE tipo (
	idtipo INT AUTO_INCREMENT,
	descricao VARCHAR(45),
	PRIMARY KEY (idtipo)
);

INSERT INTO tipo (descricao) VALUES ('tema');
INSERT INTO tipo (descricao) VALUES ('subtema');
INSERT INTO tipo (descricao) VALUES ('frase');

CREATE TABLE palavra (
	idpalavra INT AUTO_INCREMENT,
	titulobr VARCHAR(100),
	tituloen VARCHAR(100),
	describr VARCHAR(100),
	descrien VARCHAR(100),
	imagembr VARCHAR(100),
	imagemen VARCHAR(100), 
	idpai INT, 
	idtipo INT NOT NULL,
	PRIMARY KEY (idpalavra),
	FOREIGN KEY (idtipo) REFERENCES tipo(idtipo) 
);

