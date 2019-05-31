<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=friendzonebdd', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
