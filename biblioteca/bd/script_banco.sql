CREATE DATABASE gsls;
USE gsls;

CREATE TABLE usuario(
	idusuario   INT AUTO_INCREMENT,
	nome    VARCHAR(60),
	email   VARCHAR(60),
	senha   VARCHAR(60),	
	ouvinte VARCHAR(1),
	tipo 	VARCHAR(10),
	PRIMARY KEY    (idusuario)
);
 INSERT INTO usuario (idusuario,nome,email,senha,ouvinte,tipo)
 VALUES ('1','administrador','admin@admin.com','administrador123','s','admin');

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

CREATE TABLE comentario (
	idcomentario INT AUTO_INCREMENT,
	idusuario INT NOT NULL,
	idpalavra INT NOT NULL,
	comentario VARCHAR(500),
	PRIMARY KEY (idcomentario),
	FOREIGN KEY (idusuario) REFERENCES usuario(idusuario),
	FOREIGN KEY (idpalavra) REFERENCES palavra(idpalavra)
);