<main id="parution">

<h1>REVUE DE PRESSE</h1>

<section id="parutiontitre">

<?php

if(isset ($actus)){

	echo '<section>';
	//pour chaque objet categorie présent dans le tableau catégories

	foreach ($actus as $key => $actu) {

	//génération du lien permettant de lire les tutos selon sa categorie

		echo "<pre>";
		echo htmlspecialchars( print_r($actu, 1) );
		echo "</pre>";

		echo '<a href="'.WEBROOT.'Actu/readAll/'.$actu->getId().'">';
		// echo '<a href="'.WEBROOT.'Actu/read/'.$categorie->getId().'">';
		echo '<article>';
	//génération de l'insertion de l'image qui s'affiche avec la catégorie sélectionnée
		echo '<h2 class="title">'.$actu->getTitre().'</h2><br>';

		echo '<span>'.$actu->getFk_Categorie().'</span>';
		echo $actu->getArticle().'<br>';
		echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
	//affichage de l'image de la catégorie choisie
		// echo '<span>'.$actu->getTitre().'</span>';
		// echo '<span>'.$actu->fk_Categorie().'</span>';
		
		echo '</article>';
		echo '</a>';
	}
	
	echo '</section>';
}





// if(isset($actus)) {
// 	foreach ($actus as $key => $actu) {


// 		if(isset ($actus)){
// 	echo '<section>';
// //pour chaque objet categorie présent dans le tableau catégories
// foreach ($actus as $key => $actu) {

// //génération du lien permettant de lire les tutos selon sa categorie

// 	echo '<h2 class="title">'.$actu->getTitre().'</h2><br>';

// 	echo '<a href="'.WEBROOT.'Actu/readAll/'.$actu->getId().'">';
// 	// echo '<a href="'.WEBROOT.'Actu/read/'.$categorie->getId().'">';
// 	echo '<article>';
// //génération de l'insertion de l'image qui s'affiche avec la catégorie sélectionnée
// 	echo '<span>'.$actu->getFk_Categorie().'</span>';
// 	echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
// //affichage de l'image de la catégorie choisie
	
	
// 	echo '</article>';
// 	echo '</a>';
// 	}
// 	echo '</section>';
	
// }



		
		
	// 	echo '<h2 class="title">'.$actu->getTitre().'</h2><br>';

	// 	echo '<h3>'.$actu->getSubtitle().'</h3><br>';

	// 	echo '<div id="pressActu"><img src="'.WEBROOT.'images/'.$actu->getImage().'"<br>';
	// 	echo $actu->getArticle().'</div>';
	// 	echo $actu->getSource().'<br>';
	// 	echo $actu->getAuteur().'<br>';
	// 	echo $actu->getMots_cles().'<br><br>';

	// }
// }


 ?>
		
</section>




</main>