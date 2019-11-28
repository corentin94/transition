<?php 
require('modele/Actu.class.php');

class DaoActu extends Controller {

	public function create($actu) {
		DB::select('INSERT INTO actu (fk_categorie,titre,subtitle,article,image,source,auteur,mots_cles) VALUES (?,?,?,?,?,?,?,?)',
			array(
			$actu->getFk_categorie(),
			// $actu->getDate_parution(),
			$actu->getTitre(),
			$actu->getSubtitle(),
			$actu->getArticle(),
			$actu->getImage(),
			$actu->getSource(),
			$actu->getAuteur(),
			$actu->getMots_cles()));
			
	}

	public function read($id) {
		$donnees = DB::select('SELECT * FROM actu WHERE id = ?',array($id));

		if (!empty($donnees)) {	
		foreach ($donnees as $key => $donnee) {								
			$actu = new Actu(
			
				$donnee['fk_categorie'],
				$donnee['titre'],
				$donnee['subtitle'],
				$donnee['article'],
				$donnee['image'],
				$donnee['source'],
				$donnee['auteur'],
				$donnee['mots_cles']);
				

			$actu->setDate_parution($donnee['date_parution']);
			$actu->setId($donnee['id']);
		}
			// $produit->setArchive($donnee['archives']);
			return $actu;
		} else {
			return null;
		}
	}

		public function readAll() {
		$donnees = DB::select('SELECT * FROM actu ORDER BY id DESC LIMIT 5');
		$tabActus = array();
		
		if (!empty($donnees)) {
			foreach ($donnees as $key => $donnee) {
				$tabActus[$key] = new Actu(
				$donnee['fk_categorie'],
				// $donnee['date_parution'],
				$donnee['titre'],
				$donnee['subtitle'],
				$donnee['article'],
				$donnee['image'],
				$donnee['source'],
				$donnee['auteur'],
				$donnee['mots_cles']);

				// $donnee['fk_categorie'],
				// $donee ['fk_user']);


				$tabActus[$key]->setId($donnee['id']);
				
			}
			return $tabActus;
		} else {
			return null;
		}
	}


	public function readLastActu() {

		$donnees = DB::select('SELECT * FROM actu ORDER BY date_parution DESC LIMIT 6');
		$tabActus = array();
		
		if (!empty($donnees)) {
			foreach ($donnees as $key => $donnee) {
				$tabActus[$key] = new Actu(
				$donnee['fk_categorie'],
				$donnee['titre'],
				$donnee['subtitle'],
				$donnee['article'],
				$donnee['image'],
				$donnee['source'],
				$donnee['auteur'],
				$donnee['mots_cles']);

				// $donnee['fk_categorie'],
				// $donee ['fk_user']);

				$tabActus[$key]->setDate_parution($donnee['date_parution']);
				$tabActus[$key]->setId($donnee['id']);
				
			}
			return $tabActus;
		} else {
			return null;
		}
	}


	public function readAllByCat($id) {

 		$donnees = DB::select('SELECT * FROM actu ORDER BY id DESC LIMIT 5');
		$tabActus = array();

		 		
		if (!empty($donnees)) {
			foreach ($donnees as $key => $donnee) {
 				
 				$tabActus[$key] = new Actu($donnee['fk_categorie'],$donnee['titre'],$donnee['subtitle'],$donnee['article'],$donnee['image'],$donnee['source'],$donnee['auteur'],$donnee['mots_cles']);

 				$tabActus[$key]->setId($donnee['id']);
// 				$tabProduits[$key]->setArchive($donnee['archive']);
 			}
			return $tabActus;
 		} else {
			return null;
 		}
 	}
 


public function readAllByActu($id) {

 		$donnees = DB::select('SELECT * FROM actu WHERE id = ?',array($id)); 		
 		//$tabActus = array();

		if (!empty($donnees)) {
			foreach ($donnees as $key => $donnee) {
 				
 				$actu = new Actu($donnee['titre'],$donnee['article']);

 				$actu->setId($donnee['id']);
// 				$tabProduits[$key]->setArchive($donnee['archive']);
 			}
			return $actu;
 		} else {
			return null;
 		}
 	}


 	


public function update() {}

 	public function delete() {}


}


	


 ?>