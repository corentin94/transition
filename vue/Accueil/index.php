<main id="mainAccueil">
	
	<h1>PAGE ACCUEIL</h1>

<?php



// if (isset($actus)) {

// 	echo '<section>';
// 	foreach ($actus as $key => $actu) {
// 	echo '<a href="'.WEBROOT.'Tutos/read/'.$categorie->getId().'">';
// 	echo '<article>';
// 	echo '<img src="'.WEBROOT.'img/'.$categorie->getImg().'">';




// 	echo '<a class="resultat">'. $actu->getTitre() . '</a>'. '<br>';

// 		// echo $actu->getTitre().'<br>';
// 		echo $actu->getSubtitle().'<br>';
// 		echo $actu->getArticle().'<br>';
//		echo '<a class="imgaccueil"><img src="'.WEBROOT.'images/'.$actu->getImage().'">'.'<a>';

// 		// echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
// 		echo $actu->getSource().'<br>';
// 		echo '<span>'.$categorie->getNom().'</span>';
	
// 	echo '</article>';
// 	echo '</a>';	
// 	}

// echo '</section>';
//  } 

 //Pour chaque catégorie (page 1) affiche moi tous les tutos de la catégorie choisi par l'utilisateur -> controlleur read avec la fonction index qui suit (qui va ensuite peut être choisir un seul tuto et donc arriver dans )

//Si la variable $categories (déclarée dans tutos/index avec l'action readAll de la daoCategorie) existe 
if(isset ($actus)){
	echo '<section id="accueilLastParution">';
//pour chaque objet categorie présent dans le tableau catégories
foreach ($actus as $key => $actu) {
	// echo "<pre>";
	// var_dump($actu);
	// echo "</pre>";
echo "<article>
		
		<p id='p1'>";

switch ($actu->getFk_Categorie()) {
		case '1':
			echo "amenagement du territoire";
			break;

		case '2':
			echo "écologie";
			break;

		default:
			# co
			break;
	}


echo '<div class="imagesElementParent">
  <img src="'.WEBROOT.'images/'.$actu->getImage().'" alt="">'

  echo '<div class="en-haut-a-droite">
  			<h2>'.$actu->getTitre().'</h2>'

  			echo '</div>
    
 



</article>';




// echo '</p>
// 		<p id="p2">le ';
// $date = new DateTime($actu->getDate_parution());
// echo $date->format('d/m/Y à H:i:s');
		

// echo '</p>

// 		<h2>'.$actu->getTitre().'</h2>


		
// 		<img src="'.WEBROOT.'images/'.$actu->getImage().'" alt="">

		
// 	</article>';
	

//génération du lien permettant de lire les tutos selon sa categorie



// 	echo '<a href="'.WEBROOT.'Actu/read/'.$actu->getId().'">';
// 	// echo '<a href="'.WEBROOT.'Actu/read/'.$categorie->getId().'">';
// 	echo '<article>';
// //génération de l'insertion de l'image qui s'affiche avec la catégorie sélectionnée
// 	echo $actu->getArticle().'<br>';
	
// 	echo '<span>'.$actu->getFk_Categorie().'</span>';
// 	echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
// //affichage de l'image de la catégorie choisie
// 	echo '<span>'.$actu->getTitre().'</span>';
// 	// echo '<span>'.$actu->fk_Categorie().'</span>';
// 	// echo $actu->getDate_parution();
	
// 	echo '</article>';
// 	echo '</a>';

	}

	echo '</section>';

}


?>

<!-- <section>
	<article>
		
		<p>catégorie</p>
		<p>date</p>
		<h2>Titre</h2>
		<img src="" alt="">

		
	</article>

</section> -->
	</main>