<?php 
// ----------- PHASE 2 : creation du DAO ----------- //
// charge le modèle lié à la DAO
require_once('modele/User.class.php');
// Déclaration de l'objet dao avec l'héritage du "super controlleur" Controller
class DaoUser extends Controller {
	// Déclaration de méthode du dao avec l'objet $user en argument
	public function create($user) {

		DB::select('INSERT INTO user (nom,prenom,email,pass_one) VALUES (?,?,?,?)', array($user->getNom(),$user->getPrenom(),$user->getEmail(),$user->getPass_one()));
		
		$user->getId();
		
	}

	
	public function read($id) {
		$donnees = DB::select('SELECT * FROM user WHERE id = ?', array($id));
		// Affectation à la variable $user de la nouvelle instance de l'objet User avec en paramètre les données venant de la BDD.
		// if (!empty(donnee)) {
		foreach ($donnees as $key => $donnee){
		$user = new User(

		$donnee['nom'],
		$donnee['prenom'],
		$donnee['email'],
		$donnee['pass_one']);
		
		$user->setId($donnee['id']);

		return $user;

	}
}


	// public function read($id) {
	// 	$donnees = DB::select('SELECT * FROM actu WHERE id = ?',array($id));

	// 	if (!empty($donnees)) {	
	// 	foreach ($donnees as $key => $donnee) {								
	// 		$actu = new Actu(
			
	// 			$donnee['fk_categorie'],
	// 			$donnee['titre'],
	// 			$donnee['subtitle'],
	// 			$donnee['article'],
	// 			$donnee['image'],
	// 			$donnee['source'],
	// 			$donnee['auteur'],
	// 			$donnee['mots_cles']);
				

	// 		$actu->setDate_parution($donnee['date_parution']);
	// 		$actu->setId($donnee['id']);
	// 	}
	// 		// $produit->setArchive($donnee['archives']);
	// 		return $actu;
	// 	} else {
	// 		return null;
	// 	}
	// }

	public function readByEmail($email) {
			$donnees = DB::select('SELECT * FROM user WHERE email = ?', array($email));
		if (!empty($donnees)) {
			foreach($donnees as $key => $donnee){
				$user = new User($donnee['nom'],$donnee['prenom'],$donnee['email'],$donnee['pass_one']);

			$user->setId($donnee['id']);	
				
			return $user;
				}

		} else {

			return null;
		}

	}
	


	public function update($user) {
		$donnees = DB::select('UPDATE user SET nom = ?, prenom = ?, email = ?,pass_one = ? WHERE id = ?', array($user->getNom(),$user->getPrenom(),$user->getEmail(),$user->getPass_one(),$user->getId()));



		
/*		if (!empty($donnees)){

			$user = new User($user['nom'],$user['prenom'],$user['email'],$user['pass_one']);

			// $user = new User($donnees['nom'],$donnees['prenom'],$donnees['pass_one']);
				
				$user->setId($donnees['id']);

			return $user;

		} */

}



		}
		
	


 ?>