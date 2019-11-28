<?php 
// ----------- PHASE 2 : creation du DAO ----------- //
// charge le modèle lié à la DAO
require_once('modele/User.class.php');
// Déclaration de l'objet dao avec l'héritage du "super controlleur" Controller
class DaoProfil extends Controller {

// Déclaration de méthode du dao avec l'objet $user en argument
// CREATE
	// preparation d'une requete qui selectionne dans infouser tout les champ si fk_user est égale à l'id de l'utilisateur et que l'archive soit egale à 0
	// $request2 = $bdd->prepare('SELECT * FROM infouser WHERE fk_user = ? AND archive = 0');
 // 	$request2->execute(array($_SESSION['id']));
 // 	$donnee2 = $request2->fetchAll(); 
 	
 	// si la requete possède des donnees et qu'il existe un post avec un name sexe alors :
 	// if (sizeof($donnee2) == 0 && isset($_POST['sexe'])) {
 		
 		// CREATE (insertion de données) INFOUSER
		// $request = $bdd->prepare('INSERT INTO infouser (sexe, birthday, adress, tel, fk_user) VALUES (?,?,?,?,?)');
		// $request->execute(array($_POST['sexe'],$_POST['birthday'],$_POST['adress'],$_POST['tel'],$_SESSION['id']));
		//header('Location: profil.php');
	
	public function create($infouser) {

		DB::select('INSERT INTO infouser(sexe,birthday,adress,ville,code_postal,tel,fk_user) VALUES (?,?,?,?,?,?,?)', array($infouser->getSexe(),$infouser->getBirthday(),$infouser->getAdress(),$infouser->getVille(),$infouser->getCode_postal(),$infouser->getTel(),$infouser->getfk_user()));
	
	}

	// 	public function read($id) {
	// 	$donnees = DB::select('SELECT * FROM infouser WHERE id = ?', array($id));
	// 	$userData = $donnees->fetch();
	// 	// Affectation à la variable $user de la nouvelle instance de l'objet User avec en paramètre les données venant de la BDD.
	// 	$user = new User($userData['sexe'],$userData['birthday'],$userData[''],$userData['pass_one']);
		
	// 	$user->setId($userData['id']);

	// 	return $user;
	// }

}


 ?>