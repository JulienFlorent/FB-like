<?php
include 'ConnectDB.php';
?>
Pour vous connecter, utilisez ce formunaire : 
<form action="" method="post">
<div>
<label for="NomUtilisateur">Nom :</label>
<input type="text" name="NomUtilisateur">
</div>
<div>
<label for="PrenomUtilsateur">Prénom</label>
<input type="text" name="PrenomUtilisateur">
</div>
<div>
<label for="MotDePasseUtilisateur">Mot de passe : </label>
<input type="text" name="MotDePasseUtilisateur">
</div>
<div>
<label for=""><label>
<input value="Connection" action="" type="submit">
</div>
</form>
<form action="deconnection.php" method="post">
<div> 
<input value="Se déconnecter" type="submit" name="deco">
</div>
</form>

<?php


//premiere verification, sert à voir si l'utilisateur existe
if (isset($_POST['NomUtilisateur']) && 
	isset($_POST['PrenomUtilisateur']) && 
	isset($_POST['MotDePasseUtilisateur'])) {

		$nomutil = $_POST['NomUtilisateur'];
		$prenomutil = $_POST['PrenomUtilisateur'];
		$mdputil = $_POST['MotDePasseUtilisateur'];
		$connect1 = $bdd->prepare('SELECT PrenomUtilisateur, NomUtilisateur 
								FROM utilisateur 
								WHERE PrenomUtilisateur =:prenomutil
								AND NomUtilisateur =:nomutil');
		$connect1->execute(array(
			'nomutil' => $nomutil,
			'prenomutil' => $prenomutil,
		));
		$connect1array = $connect1->fetch(PDO::FETCH_ASSOC);
		//Seconde vérification. On va chercher le mot de passe.
		if ($connect1array['PrenomUtilisateur'] == $_POST['PrenomUtilisateur'] &&
		$connect1array['NomUtilisateur'] == $_POST['NomUtilisateur']) {
			if (isset($_POST['MotDePasseUtilisateur'])){
				$connect2 = $bdd->prepare('SELECT MotDePasseUtilisateur 
										FROM utilisateur 
										WHERE MotDePasseUtilisateur =:mdputil;');
				$connect2->execute(array(
					'mdputil' => $mdputil,
				));
				$connect2array = $connect2->fetch(PDO::FETCH_ASSOC);
			//Le mot de passe est bon, je valide la et créé le cookie de session
			if ($connect2array['MotDePasseUtilisateur'] = $_POST['MotDePasseUtilisateur']) {
				$_SESSION['PrenomUtilisateur'] = $_POST['PrenomUtilisateur'];
				$_SESSION['MotDePasseUtilisateur'] = $_POST['MotDePasseUtilisateur'];
				$_SESSION['NomUtilisateur'] = $_POST['NomUtilisateur'];
				$_SESSION['Valeur'] = 1;
			} else {
				echo 'Mot de passe incorrect. ';
			}
		}
	} else {
		echo 'Nom ou prénom incorrect. ';
	}
}
if (isset($_SESSION['MotDePasseUtilisateur'])) {
	echo 'Vous êtes connecté en tant que ' . $_SESSION['PrenomUtilisateur'] . ' ' .
	$_SESSION['NomUtilisateur'] . '. <br>
	Utilisez cette page si vous souhaitez changer de compte, ou vous déconnecter !';
} else {
	echo "Vous n'êtes actuellement pas connecté(e)";

}
?>