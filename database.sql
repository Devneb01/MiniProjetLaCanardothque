CREATE DATABASE la_canardotheque;
USE la_canardotheque;
CREATE TABLE CANARD(
id_canard INT AUTO_INCREMENT NOT NULL,
nom VARCHAR(50) NOT NULL ,
type ENUM('Plastique', 'Peluche', 'Bouée') NOT NULL,
etat ENUM('Dans la mare', 'En vadrouille', 'En nettoyage') NOT NULL DEFAULT 'Dans la mare',
PRIMARY KEY(id_canard)
);

CREATE TABLE ETUDIANT(
num_carte VARCHAR(50) NOT NULL ,
nom VARCHAR(50) NOT NULL ,
email VARCHAR(50) NOT NULL ,
prenom VARCHAR(50) NOT NULL,
PRIMARY KEY(num_carte)
);

CREATE TABLE EMPRUNTER(
id_canard INT NOT NULL,
date_pret DATE NOT NULL,
date_retour_prevue DATE NOT NULL,
num_carte VARCHAR(50) NOT NULL,
PRIMARY KEY(id_canard,date_pret),
FOREIGN KEY(id_canard) REFERENCES CANARD(id_canard),
FOREIGN KEY(num_carte) REFERENCES ETUDIANT(num_carte)
);
