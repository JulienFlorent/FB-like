<?php
//Ce script est pas fou, mais je préfère l'avoir sur un autre fichier. A édit avant final.
session_start();
if (session_destroy() == false) {
    echo "Allez chercher le mec qui a fait le php, parcequ'il y a un truc qu'il n'a pas compris sur les cookies de session";
}
include ('connection.php');
?>