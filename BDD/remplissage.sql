/*
Fichier remplissage.sql
20140438 Legrand Marie
21505926 Di Giovanni Thomas
*/

alter SESSION set NLS_DATE_FORMAT = 'DD-MM-YYYY';


/* Insertion Utilisateur */
INSERT INTO UTILISATEUR VALUES("digio.thomas@hotmail.fr","Di Giovanni","Thomas",24-06-1997,"271 Avenue du Pic Saint-Loup",0619623827,"ADMIN",NULL,0);
INSERT INTO UTILISATEUR VALUES("marie.legrand@etu.umontpellier.fr","Legrand","Marie",01-01-1996,"Quelquechose",0600000000,"ADMIN",NULL,0);
INSERT INTO UTILISATEUR VALUES("test1@test.fr","NomTest1","PrenomTest1","01-01-1980","AdresseTest1",0600000000,"MEMBRE",NULL,0);
INSERT INTO UTILISATEUR VALUES("test2@test.fr","NomTest2","PrenomTest2","01-01-1980","AdresseTest2",0600000000,"MEMBRE",NULL,0);
INSERT INTO UTILISATEUR VALUES("test3@test.fr","NomTest3","PrenomTest3","01-01-1980","AdresseTest2",0600000000,"MEMBRE",NULL,0);


/* Insertion Véhicule */
INSERT INTO VEHICULE VALUES("AA-000-AA","Marque","Modele",4,"Rouge",01-01-2005,"test1@test.fr");
INSERT INTO VEHICULE VALUES("AA-010-CA","Marque","Modele",2,"Noir",01-01-2007,"test1@test.fr");
INSERT INTO VEHICULE VALUES("BB-000-AA","Marque","Modele",4,"Bleu",01-01-2003,"test2@test.fr");
INSERT INTO VEHICULE VALUES("AA-990-AP","Marque","Modele",5,"Rouge",01-01-2000,"test3@test.fr");


/* Insertion Trajet */
INSERT INTO TRAJET VALUES("00001","Montpellier","Paris",0747.60,22-12-2017,'10:00:00','17:17:00',"AA-000-AA","test1@test.fr",50);
INSERT INTO TRAJET VALUES("00002","Paris","Montpellier",0747.60,26-12-2017,'11:00:00','18:17:00',"AA-010-CA","test1@test.fr",50);
INSERT INTO TRAJET VALUES("00003","Lyon","Paris",0466.00,22-12-2017,'10:00:00','14:39:00',"BB-000-AA","marie.legrand@etu.umontpellier.fr",30);
INSERT INTO TRAJET VALUES("00004","Narbonne","Montpellier",0096.20,22-01-2018,'10:00:00','11:22:00',"BB-000-AA","test2@test.fr",10);
INSERT INTO TRAJET VALUES("00005","Montpellier","Béziers",0085.70,01-01-2018,'10:00:00','11:09:00',"AA-990-AP","test3@test.fr",11);


/* Insertion VoyageAvec */
INSERT INTO VOYAGEAVEC VALUES("00001","digio.thomas@hotmail.fr");
INSERT INTO VOYAGEAVEC VALUES("00002","marie.legrand@etu.umontpellier.fr");
INSERT INTO VOYAGEAVEC VALUES("00002","digio.thomas@hotmail.fr");
INSERT INTO VOYAGEAVEC VALUES("00003","test3@test.fr");
INSERT INTO VOYAGEAVEC VALUES("00003","digio.thomas@hotmail.fr");
INSERT INTO VOYAGEAVEC VALUES("00003","test2@test.fr");
INSERT INTO VOYAGEAVEC VALUES("00004","test1@test.fr");
INSERT INTO VOYAGEAVEC VALUES("00005","digio.thomas@hotmail.fr");


/* Insertion Avis */
INSERT INTO AVIS VALUES("00001","digio.thomas@hotmail.fr","test1@test.fr",2.0,"");
/* INSERT INTO AVIS VALUES("00001","marie.legrand@etu.umontpellier.fr","test1@test.fr",4.0,""); Test de la procédure TENTATIVE_NOTE */
INSERT INTO AVIS VALUES("00001","test1@test.fr","digio.thomas@hotmail.fr",3.0,"");
INSERT INTO AVIS VALUES("00002","digio.thomas@hotmail.fr","test1@test.fr",5.0,"");
INSERT INTO AVIS VALUES("00003","marie.legrand@etu.umontpellier.fr","test3@test.fr",0.0,"");
INSERT INTO AVIS VALUES("00004","test2@test.fr","test1@test.fr",5.0,"");
INSERT INTO AVIS VALUES("00005","digio.thomas@hotmail.fr","test3@test.fr",4.0,"");