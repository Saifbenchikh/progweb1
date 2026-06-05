CREATE DATABASE concours;

USE concours;

CREATE TABLE question (
    id INT AUTO_INCREMENT,
    intitule VARCHAR(255),
    reponse VARCHAR(100),
    points INT CHECK (points >= 10 AND points <= 100),
    PRIMARY KEY (id)
) ENGINE = InnoDB;