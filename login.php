<?php
$mysqli = new mysqli("localhost", "root", "", "friendzonebdd");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<?php
echo ' Pour vous connecter, utilisez ce formunaire : 
    <form action="" method="post">
    <div>
        <label for="NomUtilisateur">Nom :</label>
        <input type="text" id="name" name="NomUtilisateur">
    </div>
    <div>
        <label for="PrenomUtilsateur">Prénom</label>
        <input type="text" id="name" name="PrenomUtilisateur">
    </div>
    <div>
        <label for="MotDePasseUtilisateur">Mot de passe : </label>
        <input type="text" id="msg" name="MotDePasseUtilisateur"></input>
        <div>
        <button type="submit"> Se connecter </button>
        </div>
    </div>
</form>       
';
?>
<?php
$nomutil = $_POST['NomUtilisateur'];
$prenomutil = $_POST['PrenomUtilisateur'];
if (!empty($_POST['NomUtilisateur']) && !empty($_POST['PrenomUtilisateur']) && !empty($_POST['MotDePasseUtilisateur'])) {
    $sql = 'SELECT MotDePasseUtilisateur FROM utilisateurs WHERE PrénomUtilisateur ="$prenomutils" AND WHERE NomUtilisateur="$prenomutil"';
    $mysqli->query($sql);
}
?>
