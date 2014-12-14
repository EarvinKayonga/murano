DROP TABLE IF EXISTS utilisateur ;
CREATE TABLE utilisateur (id_utilisateur BIGINT(20)  AUTO_INCREMENT NOT NULL,
pseudo VARCHAR(20),
mdp VARCHAR(20),
Nom VARCHAR(20),
prenom VARCHAR(20),
datenaissance YEAR,
PRIMARY KEY (id_utilisateur) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS commentaire ;
CREATE TABLE commentaire (id_commentaire BIGINT(20)  AUTO_INCREMENT NOT NULL,
message VARCHAR(500),
date VARCHAR(20),
id_utilisateur BIGINT(20) NOT NULL,
PRIMARY KEY (id_commentaire) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS connexion ;
CREATE TABLE connexion (id_connexion BIGINT(50)  AUTO_INCREMENT NOT NULL,
ip VARCHAR(50),
id_utilisateur BIGINT(20) NOT NULL,
PRIMARY KEY (id_connexion) ) ENGINE=InnoDB;

ALTER TABLE commentaire ADD CONSTRAINT FK_commentaire_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur);

ALTER TABLE connexion ADD CONSTRAINT FK_connexion_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id_utilisateur);
