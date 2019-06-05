<?php
$mysqli = new mysqli("localhost", "root", "", "friendzonebdd");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<?php
echo ' 
<br>
Pour vous inscrire, utilisez ce formunaire : 
    <form action="" method="post">
    <div>
        <label for="NomUtilisateur">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="MailUtilisateur">Mail :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="PrenomUtilsateur">Prénom</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="VilleUtilisateur">Votre ville : </label>
        <input type="text" id="VilleUtilisateur" name="VilleUtilisateur"></input>
    </div>
    <div>
        <label for="MotDePasseUtilisateur">Mot de passe : </label>
        <input type="text" id="MotDePasseUtilisateur" name="MotDePasseUtilisateur"></input>
    </div>
    <div>
    <label for="MotDePasseUtilisateur"><label>
    <input type="button" value="Inscription">
</div>
</form>';
?>
<?php
$nomutil = $_POST['NomUtilisateur'];
$prenomutil = $_POST['PrenomUtilisateur'];
$villeutil = $_POST['VilleUtilisateur'];
$mdputil = $_POST['MotDePasseUtilisateur'];
$mailutil = $_POST['MailUtilisateur'];

if (!empty($_POST['NomUtilisateur']) && !empty($_POST['PrenomUtilisateur']) && !empty($_POST['MotDePasseUtilisateur'] && !empty($_POST['VilleUtilisateur']))) {
    $sql = "INSERT INTO `utilisateur` (`IdUtilisateur`, `NomUtilisateur`, `PrénomUtilisateur`, `MotDePasseUtilisateur`, `AdresseMailUtilisateur`, `VilleUtilisateur`, `IdAmi`, `IdConversation`) VALUES (NULL, "$nomutil", "$prenomutil", "m$mdputil", "$mailutil", "$villeutil", '', '');";
    $mysqli->query($sql);
}
?>
<?php

?>