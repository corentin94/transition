<main id="FormActu">
	
	<h1> FORMULAIRE ACTUS </h1>

<?php 

	if(!isset($_SESSION['id'])){
	echo $message;

} else {

if(isset($messagelog)){

	echo $messagelog;
}

}
	
?>

<?php 

if(isset($loading)){

	echo $loading;
}

 ?>


 
 
<!-- if (isset($categories)) {
	echo'<section>';
	foreach ($categories as $key => $categorie) {
echo '<a href="'.WEBROOT.'/Actu/read/'.$categorie->getId().'"><article>';

		echo'<span>'.$categorie->getTitre().'</span>';
		echo $actu->getSubtitle().'<br>';
		echo $actu->getArticle().'<br>';

		echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
		echo $actu->getSource().'<br>';	
		echo '</article>';
		echo '</a>';
	}
	echo '</section>';
 } 

 ?> -->


<form action="<?php echo WEBROOT ?>Actu/create" method="POST"enctype="multipart/form-data">

<!-- <input type="text" name="titre" placeholder="Titre">

	<input type="hidden" name="categorie" value="1"> -->

 



	
<select name="fk_categorie" id= "form">
              <option value="">Choisir votre categorie :</option>
              <option value="1">Aménagement du territoire</option>
              <option value="2">Ecologie</option>
              
        </select>

           
	<!-- <input type="text" name="categorie" placeholder="Categorie"> -->
	

	<!-- <input type="date" id="start" name="date_parution" value="entrez votre date" >
        -->

	<input type="text" name="titre" placeholder="titre">
	<input type="text" name="subtitle" placeholder="Soustitre">
	<input type="textarea" name="article">

	 
	<input type="file" name="image">
	<input type="text" name="source" placeholder="Source de l'article">
	<input type="text" name ="auteur" placeholder="Auteur">
	<input type="text" name="mots_cles" placeholder="mots clés">


	<input type="submit" value="Ajouter">
	
</form>




</main>

