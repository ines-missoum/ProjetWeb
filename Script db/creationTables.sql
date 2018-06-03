DROP TABLE IF EXISTS utilisateur CASCADE;
DROP TABLE IF EXISTS categorie CASCADE;
DROP TABLE IF EXISTS partage CASCADE;
DROP TABLE IF EXISTS participer CASCADE;
DROP TABLE IF EXISTS note CASCADE;




CREATE TABLE utilisateur (
	nom_utilisateur VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
	
	ville VARCHAR(50) NOT NULL,
	nb_points INTEGER,
	email VARCHAR(50),
	
	CONSTRAINT utilisateur_pk PRIMARY KEY (nom_utilisateur)
);

CREATE TABLE categorie (
	num_categorie serial,
	nom_categorie VARCHAR(50) NOT NULL,
		
	CONSTRAINT categorie_pk PRIMARY KEY (num_categorie)
);


CREATE TABLE partage(

	num_partage serial,

	intitule VARCHAR(30) NOT NULL,
	nb_max_personne INTEGER,

	adresseRDV VARCHAR(50) ,
	dateRDV DATE,
	heure_deb TIME,
	heure_fin TIME,
	ville VARCHAR(50),
	
	
	description text,
	commentaire_partage text,

	places_dispo INTEGER,

	nom_utilisateur VARCHAR(30) NOT NULL,
	num_categorie INTEGER NOT NULL,
	

	CONSTRAINT nb_max_personne_limits CHECK (nb_max_personne BETWEEN 1 AND 10),

	CONSTRAINT partage_pk PRIMARY KEY (num_partage),

	CONSTRAINT partage_utilisateur_fk FOREIGN KEY 	(nom_utilisateur) REFERENCES 	utilisateur(nom_utilisateur),

	CONSTRAINT partage_categorie_fk FOREIGN KEY 	(num_categorie ) REFERENCES categorie(num_categorie)
);


CREATE TABLE participer (
	
	num_partage INTEGER NOT NULL,
	nom_utilisateur VARCHAR(30) NOT NULL,
	
		
	CONSTRAINT participer_pk PRIMARY KEY (num_partage, 	nom_utilisateur),

	CONSTRAINT participer_partage_fk FOREIGN KEY 	(num_partage) REFERENCES partage(num_partage),

	CONSTRAINT participer_utilisateur_fk FOREIGN KEY 	(nom_utilisateur) REFERENCES utilisateur(nom_utilisateur)

);

CREATE TABLE note (

	nom_utilisateur VARCHAR(30) NOT NULL,
	num_partage INTEGER NOT NULL,

	note INTEGER NOT NULL, 
	commentaire_note text,

	CONSTRAINT note_limits CHECK (note BETWEEN 0 AND 5),

	CONSTRAINT note_pk PRIMARY KEY (num_partage, 	nom_utilisateur),

	CONSTRAINT note_partage_fk FOREIGN KEY (num_partage) 	REFERENCES partage(num_partage),

	CONSTRAINT note_utilisateur_fk FOREIGN KEY 	(nom_utilisateur) REFERENCES utilisateur(nom_utilisateur)
	
	
);










