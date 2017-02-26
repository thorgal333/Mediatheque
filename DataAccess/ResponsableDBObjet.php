<?php
include_once 'initDB.php';
class ResponsableDB
{
	private $base;
	public function __construct()
	{
		$this->base = initBase();
	}
	
	/***
	 * Recherche un responsable dans la table responsable
	 * @param $numero : identifiant du responsable
	 * @return boolean|mixed
	 */
	function RetrouverResponsable($numero)
	{
	
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
			$resultat = $stmt->fetch();
		}
	
		//Lib�ration de la ressource
		$base = NULL;
	
		return $resultat;
	
	}
	
	
}