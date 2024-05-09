-- Criar Banco de dados
CREATE DATABASE perfil;
USE perfil;

 -- Criar Tabela
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    idade INT,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255),
    cidade VARCHAR(255),
    estado VARCHAR(255),
    biografia TEXT
);