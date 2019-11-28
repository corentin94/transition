<?php 
require('modele/Categories.class.php');

class DaoCategorie {

	public function read($id){

		$donnees = DB::select('SELECT * FROM categorie WHERE id = 1',
			array($id));
		if(!empty($donnees)){
			$categorie = new Categorie (
			$donnee['nom'],
			$donnee['description'],
			$donnee['image'],
			$donnee['archives']);


		$categorie->setId($donnee['id']);

			return $categorie;

		}else{
			return null;
		}
	}
 
public function readAll() {
 		$donnees = DB::select('SELECT * FROM categorie');
 		$tabCategorie = array();
 	
 		if (!empty($donnees)) {
 			foreach ($donnees as $key => $donnee) {
	 			$tabCategorie[$key] = new Categorie($donnee['nom'],$donnee['description'],$donnee['image']);
	 				

	 			$tabCategorie[$key]->setId($donnee['id']);
 			}

 			return $tabCategorie;
 		} else {
 			return null;
 		}	
 	

}

}


 ?>