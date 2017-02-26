<?php

/***
 * Connect : connexion � la base de donn�es
 * @return PDO
 */
function initBase()
{
	$user = 'root';
	$pass = '';
	$host = 'localhost';
	$port = '3306';
	$base = 'mediatheque';
	$dsn="mysql:$host;port=$port;dbname=$base";

	try
	{
		$dbh = new PDO($dsn, $user, $pass);

	}
	catch (PDOException $e)
	{
		$msg ='Erreur de connexion avec la base de donn�e';
		die($msg);
	}
	return $dbh;
}