/*
Fichier procedures.sql
20140438 Legrand Marie
21505926 Di Giovanni Thomas
*/

/* Procédures */
CREATE PROCEDURE TRAJETS_AVEC(IN user1 VARCHAR(30), IN user2 VARCHAR(30))
BEGIN
	SELECT *
    FROM trajet as T
    WHERE (user1 IN (SELECT PASSAGER
                    FROM voyageavec
                    WHERE ID_TRAJET= T.ID)
           and user2 IN (SELECT PASSAGER
                    FROM voyageavec
                    WHERE ID_TRAJET= T.ID));
END;

CREATE PROCEDURE TENTATIVE_NOTE(IN userNotant VARCHAR(30), IN userNote VARCHAR(30))
BEGIN
	SELECT *
	FROM AVIS AS A
	WHERE A.USER_NOTANT= userNotant AND A.USER_NOTE= userNote;
END;


/* Triggers */
CREATE TRIGGER MAJ_ADD_TRAJET AFTER INSERT ON TRAJET
BEGIN
	UPDATE UTILISATEUR
	SET NBTRAJETS= NBTRAJETS+1
	WHERE EMAIL = new.CONDUCTEUR;
	
	INSERT INTO VOYAGEAVEC VALUES(new.ID,new.CONDUCTEUR);
END;

CREATE TRIGGER MAJ_DELETE_TRAJET BEFORE DELETE ON TRAJET
BEGIN
	UPDATE UTILISATEUR
	SET NBTRAJETS= NBTRAJETS-1
	WHERE EMAIL = old.CONDUCTEUR;
	
	DELETE FROM VOYAGEAVEC
	WHERE ID_TRAJET= old.ID;
END;