<?php
// Configuració de l'aplicació
// Accés a la base de dades

$dbParams = [
	'driver' =>	'pdo_mysql',
	'host' =>	'127.0.0.1',
	'dbname' =>	'demoEntrades',
	'user' =>	'root',
	'password' =>'thos'
	];

// Estamos en modo desarrollo?
$dev = true;