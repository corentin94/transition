
<main id="Connect">
	
	

<h2>Connexion</h2>



	<?php
if(isset($log)){
echo $log;
}

?>



<form action="<?php echo WEBROOT ?>User/login" method="POST"enctype="multipart/form-data">

	<div class="info" id="infoMail"></div>
	<input type="email" name="email" placeholder="Email" required="required">				

		<div class="info" id="infoMail"></div>
		<input type="password" name="pass_one" placeholder="Mot de passe" required="required">
	
		
		<input type="submit" value="Se connecter">


	</form>
	
</main>





