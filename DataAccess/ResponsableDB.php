<?php
include_once 'initDB.php';

/***
 * Recherche un responsable dans la table responsable
 * @param $numero : identifiant du responsable
 * @return boolean|mixed
 */
function RetrouverResponsable($numero)
{

	$base = initBase();

	//SELECT avec FETCH()
	$sql="select * from responsable where numeroResponsable = (:numero)";
	$stmt = $base->prepare($sql);
	$stmt->BindParam(':numero', $numero);


	$affiche = $stmt->execute();
	if ($affiche === false)
	{
		$retour = false;
	}
	else
	{
		$retour = $stmt->fetch();
	}

	//Libération de la ressource
	$base = NULL;

	return $retour;

}