<main id="profil">
	
	<h1>PROFIL</h1>
<?php  

 
    // Message de bienvenue si l'id est présent dans la session
    if (isset($_SESSION['id']) && $_SESSION['id'] != null) {

        echo 'Bienvenue '.$_SESSION['firstName'].' '.$_SESSION['lastName'].' ! Souhaitez vous modifier votre profil?';
}

?>
<section id="userUpdate">

 		<form action="<?php echo WEBROOT ?>User/update" method="POST"enctype="multipart/form-data">
	
		
		<div class="info" id="infoNom"></div>
		<input type="text" name="lastName" value="<?php echo $user->getNom();?>">
		
		<div class="info" id="infoPrenom"></div>
		<input type="text" name="firstName" value="<?php echo $user-> getPrenom();?>">

		<div class="info" id="infoEmail"></div>
		<input type="text" name="email" value="<?php echo $user->getEmail();?>">

		<div class="info" id="infoPass1"></div>
		<input type="password" name="pass_one" placeholder="ikuuytre">

		<div class="info" id="infoPass2"></div>
		<input type="password" name="pass_two" placeholder="Confirmez le nouveau mot de passe">

		<!-- <div class="info" id="infoSexe"></div>
		<span><input type="radio" name="sexe" id="h"  value="0">  <label for="h">Homme</label></span>
		<span><input type="radio" name="sexe" id="f" value="1"> <label for="f">Femme</label></span>
			

		<div class="info" id="infoBirth"></div>
		<input type="date" name="birthday" placeholder="Entrez votre date de naissance" >

		<div class="info" id="infoAdress"></div>
		<input type="text" name="adress" placeholder="Entrez votre adresse" >

		<div class="info" id="infoVille"></div>
		<input type="text" name="ville" placeholder="Entrez le nom de votre ville" >

		<div class="info" id="infoCode_postal"></div>
		<input type="text" name="code_postal" placeholder="Entrez votre code postal">

		<div class="info" id="infoTel"></div>
		<input type="text" name="tel" placeholder="Entrez votre téléphone">

		<div class="info" id="infoPays"></div>
		<input type="text" name="pays" placeholder="Indiquez votre pays" >


		
		 -->
		<input type="submit" value="Modifier">
	</form>

	<!-- <button>Supprimer compte</button> -->
	
	</section>



		</main>



	





<!-- <main id = "profil">
	
	<h1>Modifier profil</h1>

<form action="<?php echo WEBROOT ?> User/update" method="POST"enctype="multipart/form-data">
	
		<div class="info" id="infoNom"></div>
		<input type="text" name="lastName" placeholder="Entrez votre Nom" required="required">
		
		<div class="info" id="infoPrenom"></div>
		<input type="text" name="firstName" placeholder="Entrez votre prénom" required="required">

		<input type="submit" value="S'inscrire">

		
		<div class="info" id="infoEmail"></div>
		<input type="email" name="email" placeholder="Entrez  votre email" required="required">
		
		<div class="info" id="infoPass1"></div>
		<input type="password" name="pass_one" placeholder="Entrez votre mot de passe" required="required">
		
		<div class="info" id="infoPass2"></div>
		<input type="password" name="pass_two" placeholder="Confirmez votre mot de passe" required="required">
		
		<input type="submit" value="S'inscrire">

	</form>
 -->







<!-- <main id = "profil">
	
	<h1>Modifier profil</h1>

<form action="<?php echo WEBROOT ?> User/update" method="POST"enctype="multipart/form-data">
	
		<div class="info" id="infoNom"></div>
		<input type="text" name="lastName" placeholder="Entrez votre Nom" required="required">
		
		<div class="info" id="infoPrenom"></div>
		<input type="text" name="firstName" placeholder="Entrez votre prénom" required="required">

		<input type="submit" value="S'inscrire">

		
		<div class="info" id="infoEmail"></div>
		<input type="email" name="email" placeholder="Entrez  votre email" required="required">
		
		<div class="info" id="infoPass1"></div>
		<input type="password" name="pass_one" placeholder="Entrez votre mot de passe" required="required">
		
		<div class="info" id="infoPass2"></div>
		<input type="password" name="pass_two" placeholder="Confirmez votre mot de passe" required="required">
		
		<input type="submit" value="S'inscrire">

	</form>
 -->

</main>