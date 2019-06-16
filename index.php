<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
		
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="accueil.css"/>	
		<title>Projet friendzone</title>
	</head>
		
	<body>
		<div class="wrapper">
			<header id="header" class="header">

					<a href="index.php" class="bloc_logo">
						<img class="logo" alt="LOGO"  src="images\logo.png">
					</a>
					<div id="barre_recherche">
					  <div id="nav-bar-left"></div>
						  <form
						    class="nav-searchbar"
						    name="site-search"
						    >
						    <input type="hidden" name="">
						    <div class="nav-left">
						      <div id="nav-search-dropdown-card">
						        
								  <div class="nav-search-scope nav-sprite">
								    <div class="nav-search-facade" data-value="search-alias=aps">
								      <span class="nav-search-label"></span>
								      <i class="nav-icon"></i>
								    </div>
							    	
						  		</div>

						      </div>
						    </div>
						    <div class="nav-fill">
						      <div class="nav-search-field ">
						      </div>
						      <div id="nav-iss-attach"></div>
						    </div>
						    <div class="nav-right">
						    </div>
						  </form>
					<div class="vide">  </div>
				</div>		
			</header>
			<div class="navigation">
		      <ul>
		        <li><a href="">Acceuil</a></li>
				<li><a href="amis.php">Amis</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="messayes.php">Messages</a></li>
		      </ul>
		    </div>


			<div class="zone_centrale">
				<div class="barre_laterale">
			        
			        <ul><h3 class="txtblanc">Messagerie</h3>
			        	<li>
			        		<div></div>
			        	</li>
			    	</ul>
			    	
			    </div>
<?php
$connexionstring = "localhost/connection.php";
if (!empty($_SESSION['nomUtilisateur'])) {
?>
			    <div class="main_zone">
			    	<div class="sous-main">
							<h1>Derniéres Infos!</h1>
<?php
include 'contenu.php';
?>
						</div>
<?php } 
else { echo "<h2>Vous n'êtes pas connecté.</h2>
		<button name='reDirectConnection' onClick='reDirectConnection()' value =''>Vous connecter</button>
		<!-- Script de redirection vers la page de connexion dite connection.php-->
		<button name='reDirectInscription' onClick='reDirectInscription()' value =''>S'inscrire</button>
		<!-- Script de redirection vers la page d'inscription inscription.php-->
	";
}
?>

				</div>
			</div>
	    <footer class="pied_page">
	    	<a class="footer-haut" href="#header">
	    		Retour en haut
	    	</a>

	    	<div class="footer-bas">
		        <a class="conditions" href="">Conditions générales</a>
				<a id="perso" href="perso.html" id="mentions">Vos informations personnelles</a>	
			</div>
		</footer> 
	</body>
</html>
