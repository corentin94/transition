<main id="amenagement">
	
<h1>Rubrique Aménagement</h1>

<section id="public-parution-amenagement">

<?php



if (isset($actus)) {
	foreach ($actus as $key => $actu) {
		
		
		echo '<div id="pressAmenagement">
		<h2 class="titleAmenagement">'.$actu->getTitre().'</h2>';

		echo '<h3>'.$actu->getSubtitle().'</h3><br>';

		echo '<h4> Source : '.$actu->getSource().'  \ Auteur : '.$actu->getAuteur().' \ Mots clés : '. $actu->getMots_cles().'</h4>';

		
		echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'"<br>';
		echo '<p>'.$actu->getArticle().'<br></p>';
		

		// // echo $actu->getCategorie().'<br>';
		// echo $actu->getfk_Categorie().'<br>';
		// echo $actu->getTitre().'<br>';
		// echo $actu->getSubtitle().'<br>';
		// echo $actu->getArticle().'<br>';

		// echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
		// echo $actu->getSource().'<br>';	



	}
 } 

 ?>
</section>
</main>