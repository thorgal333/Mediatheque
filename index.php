<?php
include "DataAccess/RevueDB.php";
?>
<h1>Liste des revues et des responsables</h1>
<table border="1">
	<thead>
<tr><td>Nom de la revue</td><td>Date de fin de l'abonnement</td><td>Responsable</td></tr>
	</thead>
<?php
$result = RetrouverListeRevue();


if ($result !== false)
{
	foreach( $result as $row)
	{
		?> <tr> <?php
		echo '<td>' . $row['titre'] . '</td>' . '<td>' . $row['dateFinAbonnement'] . '</td>' . 
		'<td><a href="infoResponsable.php?numeroResponsable='. $row['numero']. '">'  . $row['nom'] . '</a></td>';

		?> </tr> <?php
	}
}
?>
</table>