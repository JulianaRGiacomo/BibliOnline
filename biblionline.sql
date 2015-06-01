/*CREATE DATABASE BIBLIONLINE;*/

CREATE TABLE TIPO_LIVRO(
    COD_TIPO INT (1) NOT NULL AUTO_INCREMENT,
	DESC_TIPO VARCHAR (15) NOT NULL,
	PRIMARY KEY (COD_TIPO)
);

INSERT INTO TIPO_LIVRO (DESC_TIPO) 
    VALUES
        ('Didático'),
        ('Paradidático'),
        ('Romance')
;

CREATE TABLE LIVRO(
	ISBN VARCHAR (13) NOT NULL,
    TITULO VARCHAR (70) NOT NULL,
    SUBTITULO VARCHAR (50) DEFAULT NULL,
    AUTOR VARCHAR (100) NOT NULL,
    EDITORA VARCHAR (30) NOT NULL,
    ANO_PUBLICACAO INT(4),
    QUANTIDADE INT (3) NOT NULL,
    TAGS VARCHAR (100),
    COD_TIPO INT (1) NOT NULL DEFAULT 1,
    GENERO VARCHAR (25) DEFAULT NULL,
    PRIMARY KEY (ISBN),
    CHECK (TIPO = 1 OR TIPO = 2 OR TIPO = 3),
	FOREIGN KEY (COD_TIPO) REFERENCES TIPO_LIVRO (COD_TIPO)
);

INSERT INTO LIVRO
    VALUES
    (
        8532511015,
        'Harry Potter e a Pedra Filosofal',
        'Livro 1',
        'J. K. Rowling',
        'Rocco',
        2000,
        3,
        'Fantasia, Ficção, Aventura, Magia, Literatura Inglesa',
        3,
        'Fantasia/Ficção'
    ),
    (
        8576651858,
        'O Alquimista',
        NULL,
        'Paulo Coelho',
        'Planeta',
        1988,
        2,
        'Fantasia, Ficção, Nacional',
        3,
        'Fantasia/Ficção'
    ),
    (
        9788576055631,
        'Java: Como Programar',
        '8ª Edição',
        'Paul J. Deitel; Dr. Harvey M. Deitel',
        'Pearson Education',
        2010,
        1,
        'Java, Informática, Programação',
        1,
        NULL
    );

CREATE TABLE STATUS_USUARIO(
	COD_STATUS INT (1) NOT NULL AUTO_INCREMENT,
	STATUS VARCHAR(15) NOT NULL,
	DESC_STATUS VARCHAR (30) NOT NULL,
	PRIMARY KEY (COD_STATUS)
);

INSERT INTO STATUS_USUARIO (STATUS ,DESC_STATUS) 
    VALUES
        ( 'Regular', 'Apto para locação e reserva'),
        ( 'Irregular', 'Em débito com a biblioteca')
;

CREATE TABLE USUARIO(
	CPF VARCHAR (11) NOT NULL,
    NOME VARCHAR (50) NOT NULL,
    APELIDO VARCHAR (30) NOT NULL,
    EMAIL VARCHAR (40) NOT NULL,
	SENHA VARCHAR (40) NOT NULL,
	STATUS INT (1) NOT NULL,
    TELEFONE VARCHAR (12) NOT NULL,
    TIPO VARCHAR (1) NOT NULL DEFAULT 'U',
    RUA VARCHAR (50) NOT NULL,
    BAIRRO VARCHAR (30) NOT NULL,
    NUMERO VARCHAR (7) NOT NULL,
    COMPLEMENTO VARCHAR (30) DEFAULT NULL,
    CEP VARCHAR (9) NOT NULL,
    PRIMARY KEY (CPF),
	FOREIGN KEY (STATUS) REFERENCES STATUS_USUARIO(COD_STATUS),
    UNIQUE (EMAIL),
    UNIQUE (TELEFONE),
    CHECK (TIPO = 'F' OR TIPO = 'U')
);


INSERT INTO USUARIO
    VALUES
        (
            '11111111111',
            'Funcionário do BibliOnline',
            'Funcionário',
            'func@rio.com',
            '40bd001563085fc35165329ea1ff5c5ecbdbbeef',
            1,
            '(82)99999-9999',
            'F',
            'Rua do Funcionário',
            'Bairro do Proletário',
            '42',
            NULL,
            '57010-001'
        ),
        (
            '22222222222',
            'Usuário do BibliOnline',
            'Usuário',
            'usu@rio.com',
            '40bd001563085fc35165329ea1ff5c5ecbdbbeef',
            2,
            '(82)99099-9999',
            'U',
            'Rua do Usuário',
            'Bairro da Burguesia',
            '7a',
            NULL,
            '57001-100'
        )
;

CREATE TABLE STATUS_LOCACAO(
	COD_STATUS INT (1) NOT NULL AUTO_INCREMENT,
	DESC_STATUS VARCHAR (15) NOT NULL,
	PRIMARY KEY (COD_STATUS)
);

INSERT INTO STATUS_LOCACAO (DESC_STATUS) 
    VALUES
        ('Locado'),
        ('Devolvido')
;

CREATE TABLE LOCACAO(
    ID VARCHAR (40) NOT NULL,
	ISBN VARCHAR (13) NOT NULL,
    CPF_USUARIO VARCHAR (11) NOT NULL,
    CPF_FUNCIONARIO VARCHAR (11) NOT NULL,
    DATA DATETIME NOT NULL,
	COD_STATUS INT (1) NOT NULL DEFAULT 1,
    PRIMARY KEY (ID),
    FOREIGN KEY (ISBN) REFERENCES LIVRO (ISBN),
    FOREIGN KEY (CPF_USUARIO) REFERENCES USUARIO (CPF),
    FOREIGN KEY (CPF_FUNCIONARIO) REFERENCES USUARIO (CPF),
	FOREIGN KEY (COD_STATUS) REFERENCES STATUS_LOCACAO (COD_STATUS)
);

CREATE TABLE RESERVA(
    ID VARCHAR (40) NOT NULL,
    ISBN VARCHAR (13) NOT NULL,
    CPF VARCHAR (11) NOT NULL,
    DATA_RESERVA DATETIME NOT NULL,
	COD_STATUS INT (1) NOT NULL DEFAULT 1,
    PRIMARY KEY (ISBN, CPF, DATA_RESERVA),
    FOREIGN KEY (ISBN) REFERENCES LIVRO (ISBN),
    FOREIGN KEY (CPF) REFERENCES USUARIO (CPF)
);

CREATE TABLE STATUS_RESERVA(
	COD_STATUS INT (1) NOT NULL AUTO_INCREMENT,
	DESC_STATUS VARCHAR (30) NOT NULL,
	PRIMARY KEY (COD_STATUS)
);

INSERT INTO STATUS_RESERVA (DESC_STATUS) 
    VALUES
        ('Ativa'),
        ('Finalizada'),
        ('Cancelada')
;

CREATE TABLE DEVOLUCAO(
    ID_LOCACAO VARCHAR (40) NOT NULL,
	ISBN VARCHAR (13) NOT NULL,
    CPF_FUNCIONARIO VARCHAR (11) NOT NULL,
    CPF_USUARIO VARCHAR (11) NOT NULL,
    DATA_DEVOLUCAO DATETIME NOT NULL,
    PRIMARY KEY (ID_LOCACAO),
    FOREIGN KEY (ID_LOCACAO) REFERENCES LOCACAO (ID),
    FOREIGN KEY (ISBN) REFERENCES LIVRO (ISBN),
    FOREIGN KEY (CPF_USUARIO) REFERENCES USUARIO (CPF),
    FOREIGN KEY (CPF_FUNCIONARIO) REFERENCES USUARIO (CPF)
);

CREATE TABLE CONFIGURACOES(
    FUNCIONARIOS_LOCAM BOOLEAN NOT NULL,
    TEMPO_RESERVA INT (2) NOT NULL,
    PRAZO_DEVOLUCAO INT (2) NOT NULL,
    TEMPO_ATRASO INT (2) NOT NULL
);