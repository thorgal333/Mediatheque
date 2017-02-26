<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Présentation médiathèque Saint-Quentin </title>

</head>
<body>
<h1>Information sur le responsable</h1>


<?php

include ("DataAccess/ResponsableDB.php");

if (isset($_GET['numeroResponsable']))
{
	$numero = $_GET['numeroResponsable'];
	$result = RetrouverResponsable($numero);


	if ($result !== false)
	{
		echo $result['nom'] . '<br> ' . $result['prenom'] . '<br> ' .'Numéro de téléphone: '. $result['telephone'];
	}
	else
    {
    	echo 'Responsable inconnu';
    }
}
?>
</body>
</html>