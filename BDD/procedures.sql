/*
Fichier procedures.sql
20140438 Legrand Marie
21505926 Di Giovanni Thomas
*/

alter SESSION set NLS_DATE_FORMAT = 'DD-MM-YYYY';

/* Procédure pour vérifier qu'un utilisateur a bien fait un trajet avec quelqu'un d'autre avant de le noter */
DELIMITER |
CREATE PROCEDURE TENTATIVE_NOTE()
	IF exists(select * from  where )

	
	
DELIMITER ;
/* Trigger pour augmenter le nombre de trajets d'un utilisateur lorsqu'il en fait un nouveau */
CREATE TRIGGER UP_NBTRAJETS AFTER INSERT ON TRAJET
	