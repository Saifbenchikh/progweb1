CREATE DATABASE concours;

USE concours;

CREATE TABLE question (
    id INT AUTO_INCREMENT,
    intitule VARCHAR(255),
    reponse VARCHAR(100),
    points INT CHECK (points >= 10 AND points <= 100),
    PRIMARY KEY (id)
) ENGINE = InnoDB;

INSERT INTO question (intitule, reponse, points) VALUES 
('Est-ce que le mot "court" est plus long que le mot "long" ?', 'Oui', 10),
('Est-ce qu''appuyer frénétiquement sur la touche R permet à l''ultime de Garen de faire plus de dégâts ?', 'Non', 20),
('Est-ce que baisser le son de la musique en voiture aide vraiment à mieux voir quand on cherche sa route ?', 'Oui', 30),
('Est-ce qu''une morsure de zombie peut se soigner avec un simple Doliprane ?', 'Non', 40),
('Est-ce que boire un shaker de whey en fixant ses muscles dans le miroir les fait grossir instantanément ?', 'Non', 50),
('Si un chat retombe toujours sur ses pattes et qu''une tartine beurrée retombe côté beurre, les scotcher ensemble crée-t-il l''anti-gravité ?', 'Oui', 60),
('Est-ce que mettre un pull à son thermomètre va l''aider à avoir moins froid ?', 'Non', 70),
('Si on naît exactement à minuit, est-on techniquement le bébé de la veille ?', 'Non', 80),
('Est-ce que regarder fixement son micro-ondes fait tourner le plateau plus vite ?', 'Non', 90),
('Est-ce que le bouton de fermeture des portes dans l''ascenseur sert vraiment à quelque chose ?', 'Non', 100);


CREATE USER 'cookie'@'localhost' IDENTIFIED BY 'bestofriendo';