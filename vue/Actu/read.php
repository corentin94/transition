
<main>


<?php 
// echo '<section>';
// foreach ($actus as $key => $actu) {
// 	echo '<a href="'.WEBROOT.'Actu/read/'.$actu->getId().'"><article>';
// 		echo $actu->getTitre().'<br>';
// 		echo $actu->getArticle().'<br>';
// 		echo '<img src="'.WEBROOT.'images/'.$actu->getImage().'">';
// 		echo '</article></a>';
// }
// echo '</section>';




if (isset($actu)) {
	echo $actu->getTitre();
	//echo '<img>';
	echo $actu->getArticle();
	
}




 ?>
 </main>