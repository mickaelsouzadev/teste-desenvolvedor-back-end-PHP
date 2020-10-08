CREATE TABLE cidade (
	id INTEGER AUTO_INCREMENT,
	nome_cidade VARCHAR(255),
	id_estado INTEGER,
	PRIMARY KEY(id),
	FOREIGN KEY(id_estado) REFERENCES estado(id)
);