CREATE TABLE TBUSUARIOS(
	   id SERIAL PRIMARY KEY,
	   nome VARCHAR(100) NOT NULL,
	   email VARCHAR(100) NOT NULL,
	   senha VARCHAR(255) NOT NULL,
	   data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);