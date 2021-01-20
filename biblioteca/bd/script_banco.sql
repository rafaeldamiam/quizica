CREATE TABLE usuario(
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  nome VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  --papéis: 'user', 'admin' e 'anon' p/ usuários não logados
  papel VARCHAR(100) NOT NULL DEFAULT 'user'
);

CREATE TABLE quest(
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	quest	VARCHAR(1000) NOT NULL,
	r1	VARCHAR(500) NOT NULL,
	r2	VARCHAR(500) NOT NULL,
	r3	VARCHAR(500) NOT NULL,
	r4	VARCHAR(500) NOT NULL,
	rcerta	VARCHAR(500) NOT NULL
);

INSERT INTO usuario(nome, email, senha, papel) 
VALUES
("admin","admin@admin.com", "123", "admin"),
("usuario","usuario@usuario.com", "123", "user");

INSERT INTO quest(quest, r1, r2, r3, r4, rcerta) 
VALUES
("Questão","resposta 1", "resposta 2", "resposta 3", "resposta 4", "resposta 3"),
("Questão","resposta 1", "resposta 2", "resposta 3", "resposta 4", "resposta 2");