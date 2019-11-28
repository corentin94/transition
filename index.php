<?php 
 session_start(); 
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<?php 

// Mise en place du Routeur

		// le WEBROOT renvoit dans le dossier racine transition via l'URL
		define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

		// le ROOT renvoit vers les fichiers du serveur xampp htdocs transition index fichier
		define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
?>

	<!-- UTF 8 Déclaration  du standard affichage -->
	<meta charset="UTF-8">
	<title>Transition : </title>
	<!-- Déclaration feuille de style CSS -->
	<link rel="stylesheet" href="<?php echo WEBROOT ?>css/style.css">
	<!-- Déclaration d'adaptation d'afficahge en fonction des différents type d'écran mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Déclaration des polices de caractères -->
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">

	<title>Transition : Actualités Transition Energétique et écologiques</title>
	<meta name="description" content="Les dernières actualités en environnement, écologie, nature, développement durable, changements climatiques, santé, énergie et sciences de la Terre" />


</head>

<body>
	

<section id="accueil">
	
	<header>

		<section id="titreheader">

		<h1>Transition</h1>

		</section>

		<section id="soustitreheader">
		<h2>L'avenir t'appartient</h2>
		</section>


<!-- </section> -->

<!-- Barre de recherche -->

<section id="connexion">
	 <form action = "verif-form.php" method = "get">
   <input type = "search" name = "terme">
   <input type = "submit" name = "s" value = "Rechercher">
  </form>

		
    <?php 
    
    // Si il existe une session ID et que la session n'est pas null
    if (isset($_SESSION['id']) && $_SESSION['id'] != null) {

        // alors apparition du bouton pour deconnecter la session
        echo ' <a href="'.WEBROOT.'User/logOut"><button>Déconnecter</button></a>';

		// + Message de bienvenue si l'id est présent dans la session
        echo 'Bienvenue '.$_SESSION['firstName'].' '.$_SESSION['lastName'].' !';


} else {

	// sinon affichage du bouton "inscription" et "se connecter" dans le header
	echo '<a href="'.WEBROOT.'User/index">Inscription</a>';
    
	echo ' <a href="'.WEBROOT.'User/connexion">Se connecter</a>';
  
} 

?>

</section>

		<nav>


 	<div id="menu">
<ul>

  <li> <a href="<?php echo WEBROOT ?>Accueil/index">Accueil</a></li>
  <li> <a href="<?php echo WEBROOT ?>Actu/index">Actu</a>

<ul>

    <li><a href="<?php echo WEBROOT  ?>Actu/readAllByCat1">Société</a></li>
    <li> <a href="<?php echo WEBROOT ?>Actu/readAllByCat2">Ecologie</a></li>
	<li> <a href="<?php echo WEBROOT ?>Actu/readAllByCat2">Economie</a></li>
	<li> <a href="<?php echo WEBROOT ?>Actu/readAllByCat2">Social</a></li>
	<li> <a href="<?php echo WEBROOT ?>Actu/readAllByCat2">Débat</a></li>
  
    
<!--Actu/create = controlleur/Action-->
<!--Pour se rediriger vers une page en direct il faut la mettre entre parenthese-->
     <li><a href="<?php echo WEBROOT ?>Actu/create">Form article</a></li>
      
      </ul>
  	</li>
  
</ul>
</div>
			
			<a href="<?php echo WEBROOT ?>Actu/read">Vidéos</a>
			<!-- <ul>
				
				<li><a href="Pédagogie"></a></li>
			</ul> -->
			
			<a href="/transition/Alimentation">Alimentation</a>
			<a href="/transition/adresses">Adresses Utiles</a>
			<a href="/transition/agenda">Agenda</a>
			<a href="/transition/contact">Contact</a>


			
			

<?php

 	// S'il existe une session ID et que la session n'est pas null 
	// Affichage du lien ou du bouton profil dans la barre de Menu.
	if (isset($_SESSION['id']) && $_SESSION['id'] != null) {
		echo '<a href="'.WEBROOT.'User/profil'.'">Profil</a>';
}


?>

</nav>

	
	</header>

	</section>

<?php 



	// ----------- INIT 1 : creation du routage ----------- //

		// Charge le core de l'appli
		require_once('core/bdd.php');
		require_once('core/controller.php');
		require_once('core/abstractEntity.php');

		
		// Gestion du routage pour afficher la page par default.
		// If = on vérifie s'il y a des infos dans l'URL avec la super variable $_GET.
		// En relation avec le htaccess qui réécrit l'URL.
		// Si Get p existe on rentre dans la condition
		if (isset($_GET['p'])) {
		// si le get p est vide on rentre dans la condition je renvoie sur accueil;
			if ($_GET['p'] == "") {

				$_GET['p'] = "Accueil/index";
			}

		} else {

			$_GET['p'] = "Accueil/index";
		}

		//explode renvoi toujours un tableau
		// on explose le string du $_GET['p'] avec le séparateur / dans un tableau param => param[0] : page du site et param[1] : id du produit.Le switch case est plus intéressant car il peut gérer la page 404.		
		$param = explode("/",$_GET['p']);

		// Chargement du controleur
		$tabControlleur = array("User","Profil","Accueil","Actu");
		
		// Si dans le tableau 
		if (in_array($param[0], $tabControlleur)) {

			$controller = $param[0];

			if (isset($param[1])) {

				$action = $param[1];

			} else {

				$action = 'index';
			}

		
		require_once('controlleur/'.$controller.'.ctrl.php');
		$controller = 'Ctrl'.$controller;
		$controller = new $controller();

		// Execution de l'action du controleur avec les paramètres supplementaire si existant
		// Si action non présente dans le controleur, alors page 404
		if (method_exists($controller,$action)) {
			unset($param[0]);
			unset($param[1]);
			call_user_func_array(array($controller,$action), $param);
		} else {
			echo 'erreur 404';
		}
	}
	 
	 ?>
	 
	
	 
	 </body>

</html>



