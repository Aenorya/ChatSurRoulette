/*
Fichier remplissage.sql
20140438 Legrand Marie
21505926 Di Giovanni Thomas
*/

alter SESSION set NLS_DATE_FORMAT = 'DD-MM-YYYY';

PROMPT "Insertion Utilisateur";
INSERT INTO UTILISATEUR VALUES("digio.thomas@hotmail.fr","Di Giovanni","Thomas",24-06-1997,"271 Avenue du Pic Saint-Loup",0619623827,"ADMIN",NULL,0);
INSERT INTO UTILISATEUR VALUES("marie.legrand@etu.umontpellier.fr","Legrand","Marie",01-01-1996,"Quelquechose",0600000000,"ADMIN",NULL,0);
INSERT INTO UTILISATEUR VALUES("test.test@test.fr","Test","Test","01-01-1980","Quelquechose",0600000000,"MEMBRE",NULL,0);

PROMPT "Insertion Véhicule";
INSERT INTO VEHICULE VALUES("00001","Marque","Modele",4,"Rouge",01-01-2005,"test.test@test.fr");

PROMPT "Insertion Trajet"
INSERT INTO TRAJET VALUES("00001","Montpellier","Paris",0747.60,22-12-2017,10:00:00,17:17:00,00001,"test.test@test.fr",50);

PROMPT "Insertion VoyageAvec"
INSERT INTO VOYAGEAVEC VALUES("00001","digio.thomas@hotmail.fr");

PROMPT "Insertion Avis"
INSERT INTO AVIS VALUES("")