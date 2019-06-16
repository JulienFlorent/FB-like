<?php
session_start();
try {
	$bdd = new PDO('mysql:host=localhost;dbname=friendzonebdd;charset=utf8', 'root', '');
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
?>