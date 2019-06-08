<br>
Pour vous inscrire, utilisez ce formunaire : 
<form action="" method="post">
<div>
<label for="NomUtilisateur">Nom :</label>
<input type="text" name="NomUtilisateur">
</div>
<div>
<label for="MailUtilisateur">Mail :</label>
<input type="text" name="MailUtilisateur">
</div>
<div>
<label for="PrenomUtilsateur">Prénom</label>
<input type="text" name="PrenomUtilisateur">
</div>
<div>
<label for="VilleUtilisateur">Votre ville : </label>
<input type="text" name="VilleUtilisateur">
</div>
<div>
<label for="MotDePasseUtilisateur">Mot de passe : </label>
<input type="text" name="MotDePasseUtilisateur">
</div>
<div>
<label for="MotDePasseUtilisateur"><label>
<input value="Inscription" action="inscriptionscript.php" type="submit">
</div>
</form>

<?php
if (isset($_POST['NomUtilisateur'])) {
    echo $_POST['NomUtilisateur'];
}
if (isset($_POST['NomUtilisateur']) && isset($_POST['PrenomUtilisateur']) && isset($_POST['MotDePasseUtilisateur']) && isset($_POST['VilleUtilisateur']) && isset($_POST['MailUtilisateur'])) {
    
    $nomutil = $_POST['NomUtilisateur'];
    $prenomutil = $_POST['PrenomUtilisateur'];
    $villeutil = $_POST['VilleUtilisateur'];
    $mdputil = $_POST['MotDePasseUtilisateur'];
    $mailutil = $_POST['MailUtilisateur'];
    $addUser = $bdd->prepare('INSERT INTO utilisateur (NomUtilisateur, PrénomUtilisateur, 
    MotDePasseUtilisateur, AdresseMailUtilisateur, VilleUtilisateur)
     VALUES (:nomutil, :prenomutil, :mdputil, :mailutil, :villeutil)');
    try {
        $addUser->execute(array(
            'nomutil' => $nomutil,
            'prenomutil' => $prenomutil,
            'mdputil' => $mdputil,
            'mailutil' => $mailutil,
            'villeutil' => $villeutil
        ));
    
        echo ('inscription terminée !');
    } catch (Esception $e) {
        echo 'Erreur', $e->getMessage();
    }

}
?>