<?php
include_once 'initDB.php';


/***
 * Recherche la liste de toutes les revues
 * @return boolean | array
 */
function RetrouverListeRevue()
{
	$base = initBase();

	//SELECT avec FETCHALL()
	$sql="select responsable.numeroResponsable as numero, titre, nom, dateFinAbonnement from revue, gerer,responsable
	where gerer.numeroRevue = revue.numeroRevue and responsable.numeroResponsable = gerer.numeroResponsable";
	
	$stmt = $base->prepare($sql);


	$affiche = $stmt->execute();
	if ($affiche === false)
	{
		$retour = false;
	}
	else
	{
		$retour = $stmt->fetchAll();
	}

	//Libération de la ressource
	$base = NULL;

	return $retour;

}
