/*CREATE DATABASE BIBLIONLINE;*/

CREATE TABLE LIVRO(
	ISBN INT(13)UNIQUE NOT NULL,
        TITULO VARCHAR(70) NOT NULL,
        SUBTITULO VARCHAR(50) DEFAULT NULL,
        AUTOR VARCHAR(100) NOT NULL,
        EDITORA VARCHAR(30) NOT NULL,
        ANO_PUBLICACAO INT(4),
        QUANTIDADE INT (3) NOT NULL,
        TAGS VARCHAR (100),
        COD_TIPO INT (1) NOT NULL DEFAULT 1,
        GENERO VARCHAR (15) DEFAULT NULL,
        PRIMARY KEY(ISBN),
        CHECK(TIPO = 1 OR TIPO = 2 OR TIPO = 3),
	FOREIGN KEY (COD_TIPO) REFERENCES TIPO_LIVRO(COD)
);

CREATE TABLE TIPO_LIVRO(
        COD_TIPO INT (1) NOT NULL AUTO_INCREMENT,
	DESC_TIPO VARCHAR(15) NOT NULL,
	PRIMARY KEY (COD_TIPO)
);

INSERT INTO TIPO_LIVRO (DESC_TIPO) VALUES
	('Didático'),
	('Paradidático'),
	('Romance')
;

CREATE TABLE USUARIO(
	CPF INT (11) UNIQUE NOT NULL,
        NOME VARCHAR (50) NOT NULL,
        APELIDO VARCHAR (30) NOT NULL,
        EMAIL VARCHAR (40) DEFAULT NULL UNIQUE,
	SENHA VARCHAR (40) NOT NULL,
        TELEFONE INT (12) NOT NULL UNIQUE,
        TIPO VARCHAR (1) NOT NULL,
        RUA VARCHAR (50) NOT NULL,
        BAIRRO VARCHAR (30) NOT NULL,
        NUMERO VARCHAR (7) NOT NULL,
        COMPLEMENTO VARCHAR (30) DEFAULT NULL,
        CEP VARCHAR (9) NOT NULL,
        PRIMARY KEY(CPF),
        CHECK(TIPO = 'f' OR TIPO = 'c')
);

CREATE TABLE LOCACAO(
	ISBN INT (13) NOT NULL,
        CPF_USUARIO INT (11) NOT NULL,
        CPF_FUNCIONARIO INT (11) NOT NULL,
        DATA DATETIME NOT NULL,
	COD_STATUS INT (1) NOT NULL DEFAULT 1,
        PRIMARY KEY(ISBN, DATA_RETIRADA, CPF_USUARIO),
        FOREIGN KEY(ISBN) REFERENCES LIVRO(ISBN),
        FOREIGN KEY(CPF_USUARIO) REFERENCES USUARIO(CPF),
        FOREIGN KEY(CPF_FUNCIONARIO) REFERENCES USUARIO(CPF),
	FOREIGN KEY(COD_STATUS) REFERENCES STATUS_LOCACAO(COD_STATUS)
);

CREATE TABLE STATUS_LOCACAO(
	COD_STATUS INT (1) NOT NULL,
	DESC_STATUS VARCHAR(15) NOT NULL,
	PRIMARY KEY (COD_STATUS)
);

INSERT INTO STATUS_LOCACAO (DESC_STATUS) VALUES
	('Locado'),
	('Devolvido')
;

CREATE TABLE RESERVA(
        ISBN INT (13) NOT NULL,
        CPF INT (11) NOT NULL,
        DATA_RESERVA DATETIME NOT NULL,
	COD_STATUS INT (1) NOT NULL DEFAULT 1,
        PRIMARY KEY(ISBN, CPF),
        FOREIGN KEY(ISBN) REFERENCES LIVRO(ISBN),
        FOREIGN KEY(CPF) REFERENCES USUARIO(CPF)
);

CREATE TABLE STATUS_RESERVA(
	COD_STATUS INT (1) NOT NULL AUTO_INCREMENT,
	DESC_STATUS VARCHAR(30) NOT NULL,
	PRIMARY KEY (COD_STATUS)
);

INSERT INTO STATUS_RESERVA (DESC_STATUS) VALUES
	('Reservada'),
	('Finalizada'),
	('Cancelada')
;

CREATE TABLE DEVOLUCAO(
	ISBN INT (13) NOT NULL,
        CPF_FUNCIONARIO INT (11) NOT NULL,
        CPF_USUARIO INT (11) NOT NULL,
        DATA_DEVOLUCAO DATETIME NOT NULL,
        PRIMARY KEY(ISBN, DATA_DEVOLUCAO),
        FOREIGN KEY(ISBN) REFERENCES LIVRO(ISBN),
        FOREIGN KEY(CPF_USUARIO) REFERENCES USUARIO(CPF),
        FOREIGN KEY(CPF_FUNCIONARIO)REFERENCES USUARIO(CPF)
);
