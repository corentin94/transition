<main id="ecologie">
	
<h1>RUBRIQUE ECOLOGIE</h1>


<section id="public-parution-ecologie">

<?php


if (isset($actus)) {
	foreach ($actus as $key => $actu) {
		
		
		echo '<div id="pressEcologie">
		<h2 class="titleAmenagement">'.$actu->getTitre().'</h2>';

		echo '<h3>'.$actu->getSubtitle().'</h3><br>';

		echo '<h4> Source : '.$actu->getSource().'  \ Auteur : '.$actu->getAuteur().' \ Mots clés : '. $actu->getMots_cles().'</h4>';

		
		echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'"<br>';
		echo '<p>'.$actu->getArticle().'<br></p>';
		


// if (isset($actus)) {
// 	foreach ($actus as $key => $actu) {

		
// 		echo '<h1>'.$actu->getTitre().'</h1>';
// 		echo '<h3>'.$actu->getSubtitle().'</h3>';
// 		echo $actu->getSource().'<br>';
// 		echo $actu->getAuteur().'<br>';
// 		echo $actu->getMots_cles();

		
// 		echo '<div id="pressecologie"><img src="'.WEBROOT.'images/'.$actu->getImage().'"<br></div>';
// 		echo $actu->getArticle();

		

	}
}




		?>

</section>
</main>

