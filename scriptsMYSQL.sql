CREATE DATABASE inforgeneses;

USE inforgeneses;

CREATE TABLE calculadora (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	descricao VARCHAR(100),
	numero1 INT,
	numero2 INT) IN inforgeneses;

ALTER TABLE calculadora ADD COLUMN totais INT;

INSERT INTO calculadora (descricao, numero1, numero2)
VALUES ('Essa é uma descrição', 20, 30);

UPDATE calculadora SET totais=50 WHERE id=1;

DELETE FROM calculadora;

DROP TABLE calculadora;