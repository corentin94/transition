<main id="inscription">


<h1>inscription</h1>
<!-- Renvoi le message d'erreur contenu dans le sign in du User.ctrl -->
<?php

if(isset($log)){
echo $log;

}

	?>	 
	
	<form action="<?php echo WEBROOT ?>User/signIn" method="POST"enctype="multipart/form-data">
	
		<div class="info" id="infoNom"><?php  if (isset($log1)){
			echo $log1;}?></div>
		<input type="text" name="lastName" placeholder="Entrez votre Nom" required="required" >

		
		<div class="info" id="infoPrenom"><?php  if (isset($log2)){
			echo $log2;}?></div>
		<input type="text" name="firstName" placeholder="Entrez votre prénom" required="required" >
		
		<div class="info" id="infoEmail"><?php  if (isset($log3)){
			echo $log3;}?></div>
		<input type="email" name="email" placeholder="Entrez  votre email" required="required" >
		
		<div class="info" id="infoPass1"><?php  if (isset($log4)){
			echo $log4;}?></div>
		<input type="password" name="pass_one" placeholder="Entrez votre mot de passe" required="required" >
		
		<div class="info" id="infoPass2"><?php  if (isset($log5)){
			echo $log5;}?></div>
		<input type="password" name="pass_two" placeholder="Confirmez votre mot de passe" required="required" > 
		
		<input type="submit" value="S'inscrire">

	</form>

	 

	</main>
	