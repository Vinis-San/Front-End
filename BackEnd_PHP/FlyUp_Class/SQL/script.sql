CREATE DATABASE FlyUp_Class
    DEFAULT CHARACTER SET = 'utf8mb4';

    use flyup_class;

    create table professor(
        matricula int AUTO_INCREMENT PRIMARY key,
        apelido VARCHAR(15) not null,
        nome VARCHAR(100) not null,
        email VARCHAR(255) not null unique
    );

 CREATE TABLE licoes (
    id INT AUTO_INCREMENT PRIMARY KEY,              -- Identificador único.
    titulo VARCHAR(255) NOT NULL,                   -- Título da lição.
    conteudo TEXT NOT NULL,                         -- Texto completo da lição.
    data_postagem DATETIME DEFAULT CURRENT_TIMESTAMP -- Data e hora de postagem.
);

ALTER TABLE licoes
ADD COLUMN professor_matricula INT,
ADD FOREIGN KEY (professor_matricula) REFERENCES professor(matricula);


