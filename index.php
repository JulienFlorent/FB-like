<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
		
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="accueil.css"/>	
		<title>FriendZone !</title>
	</head>
		
	<body>
		<div class="wrapper">
			<header id="header" class="header">
				<div class="header_haut">
					<a href="accueil.html" class="bloc_logo">
						<img class="logo" alt="LOGO"  src="images\logo.png">
					</a>
					<div class="vide">  </div>
				</div>		
				<div class="header_bas">
					<div class="vide2"></div>
					<div class="liens_milieu">
						<ul class="liste1">
							<li><a href="">Chez vous</a></li>
							<li><a href="">Ventes flash</a></li>
							<li><a href="">Noël</a></li>
							<li><a href="">Chêques cadeau</a></li>
							<li><a href="">Vendre</a></li>
							<li><a href="">Aide</a></li>
						</ul>
					</div>
					<div class="liens_droite">
						<a class="lien_droite" href="">	
							<ul>
								<li>Identifiez-vous</li>
								<li>Votre compte</li>
							</ul>
						</a>
						<a class="lien_droite" id="l2" href="">	
							<ul>
								<li>Testez</li>
								<li>Prime</li>
							</ul>
						</a>
						<a class="lien_droite" href="">	
							<ul>
								<li>Vos</li>
								<li>Listes</li>
							</ul>
						</a>
						<div class="zone_panier">
							<a href="">
								<img class="logo_panier" src="images\logo_panier.png">
								<p>Panier</p>
							</a>

						</div>
					</div>
				</div>
			</header>

			<div class="navigation">
		      <ul>
		        <li><a href="">Livres de Noel</a></li>
				<li><a href="">Meilleures ventes</a></li>
				<li><a href="">Nouveautés</a></li>
				<li><a href="">Romans et polars</a></li>
				<li><a href="">BD</a></li>
				<li><a href="">Enfants et ados</a></li>
				<li><a href="">Scolaire et études</a></li>
		      </ul>
		    </div>
			<div class="zone_centrale">
				<div class="barre_laterale">
			        
			        <ul><h3>Les tops</h3>
			        	<li><a href="">Top ventes</a></li>
						<li><a href="">Top poche</a></li>
						<li><a href="">Top nouveauté</a></li>
						<li><a href="">Coups de coeur des lecteurs</a></li>
			    	</ul>

			    	
			    	<ul><h3>À l'actu</h3>
			        	<li><a href="">Idées cadeaux livres</a></li>
						<li><a href="">Nouveatés poche</a></li>
						<li><a href="">Pédagogie montessori</a></li>
						<li><a href="">Les plumes francophones</a></li>
			    	</ul>

			    	
			    	<ul><h3>À découvrir</h3>
			        	<li><a href="">Auteurs à découvrir</a></li>
						<li><a href="">Livres à découvrir</a></li>
						<li><a href="">Petits prix</a></li>
			    	</ul>

			    	
			    	<ul><h3>Lire chez Amazon</h3>
			        	<li><a href="">Tous les ebooks</a></li>
						<li><a href="">Format kindle</a></li>
						<li><a href="">Promos</a></li>
						<li><a href="">Livres audio</a></li>
			    	</ul>
			    </div>
			    <main class="main_zone">
<?php
if ($_SESSION == true) {
	echo '
	';
	include 'contenu.php';
	include 'logout.php';
} else {
	include 'login.php';
	include 'inscription.php';
}
?>
				</main>
			</div>
	    <footer class="pied_page">
	    	<a class="footer-haut" href="#header">
	    		Retour en haut
	    	</a>

	    	<div class="footer-bas">
		        <a class="conditions" href="">Conditions générales de vente</a>
				<a id="perso" href="perso.html" id="mentions">Vos informations personnelles</a>	
				<a class="cookies" href="cookies.html">Cookies</a>
				<a class="annonces" href="annonces.html">Annonces basées sur vos centres d’intérêt</a>
			</div>
		</footer> 
	</body>
</html>
