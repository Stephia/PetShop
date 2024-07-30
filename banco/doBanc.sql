DROP DATABASE IF EXISTS IFSP;
CREATE DATABASE IF NOT EXISTS IFSP;

USE IFSP;
CREATE TABLE Cidade(
	id_c     INT AUTO_INCREMENT,
	nome_c   VARCHAR(50),
    estado   VARCHAR(02),
    PRIMARY KEY (id_c) );
CREATE TABLE Pessoa(
	id_p 	      INT AUTO_INCREMENT,
    nome_p        VARCHAR(50) ,
    email         VARCHAR(50),
    senha         VARCHAR(10),
    endereco      VARCHAR(100),
    bairro        VARCHAR(100),
    id_ci         INT,
    cep           VARCHAR(10),
    PRIMARY KEY (id_p),
    CONSTRAINT FK_PessoaCidade FOREIGN KEY (id_ci) REFERENCES Cidade(id_c) );
CREATE TABLE Animal(
    id_a            INT AUTO_INCREMENT,
    nome_a          VARCHAR(50),
    especie         VARCHAR(50),
    raca            VARCHAR(50),
    dt_nascimento   DATE,
    castrado        VARCHAR(03),
    id_pe           INT,
    PRIMARY KEY (id_a),
    CONSTRAINT FK_AnimalPessoa FOREIGN KEY (id_pe) REFERENCES Pessoa(id_p) );
INSERT INTO Cidade VALUES
	(1, 'Birigui', 'SP'),
    (2, 'Bilac', 'SP'),
    (3, 'Betim', 'MG'),
	(4, 'Ipojuca', 'PE'),
	(5, 'Blumenau', 'SC');
    
SELECT * FROM Cidade WHERE estado = 'SP';

INSERT INTO Pessoa VALUES
	(1, 'Aurora', 'aurorinha@gmail.com', '409094l0v3', 'Alameda Alexandria', 'Parque Santa Edwiges', 4, '17067-600'),
    (2, 'Breno', 'breninhodograu@gmail.com', '1234567890', 'Rodovia MG-155 - do km 1,650 ao km 1,698 - lado par', 'Citrolândia', 3, '32641-520'),
    (3, 'Carolaine', 'carolainess@hotmail.com', 'eu231a23nh4', 'Alameda das Acácias', 'Residencial Boa Vista', 1, '16206-054'),
    (4, 'Dalberto', 'adalberto@yahoo.com.br', '4d4lb37t0', 'Rua Alvino Schwartz', 'Salto do Norte', 5, '89065-307'),
    (5, 'Evellyn', 'xevellynx@hotmail.com', '^0n;[Q=69w', 'Rua Dom Pedro II, 574', 'Centro', 2, '16210-970');

SELECT * FROM Pessoa WHERE id_p = 1;

INSERT INTO Animal VALUES
    (1, 'Alfredo', 'Canis lupus familiaris', 'Labrador Retriever', '2022-05-08', 'Não', 4),
    (2, 'Furacão', 'Mus musculus', 'Camundongo', '2024-07-01', 'Sim', 2),
    (3, 'Azeitona', 'Psittacidae', 'Papagaio-dos-garbes', '2023-10-28', 'Não', 5),
    (4, 'Mushu', 'Lagomorpha', 'Coelho Gigante Flemish', '2024-11-23', 'Sim', 3),
    (5, 'Duo', 'Strigiformes', 'Mocho-diabo', '2020-01-01', 'Não', 1);

UPDATE Cidade SET nome = 'Bauru' WHERE id_c = 4;