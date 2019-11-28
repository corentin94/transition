<?php 
//controlleur va dire à la DAO ACTU ->
class CtrlActu extends Controller {

 public function index() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"
		 $this->loadDao('Actu');

		//$this->loadDao('Categorie');
		// $this->loadDao('Produit');

		$d['actus'] = $this->DaoActu->readAll();
		// $d['categorie'] = $this->DaoActu->readAll();

		$this->set($d);
		
		$this->render('Actu','parution');

		// $this->render('Actu','index');

	}


		public function create() {
		$this->loadDao('Actu');


if(!isset($_SESSION['id'])){
$d['message'] = " Vous devez vous connecté ";
$this->set($d);
$this->render('Actu','index');


 } elseif (isset($_SESSION['id'])){
 	$d['messagelog'] = " Vous êtes connectés ";
 	// $this->render('Actu','index');


 
 {
 	if (empty($this->input))

 	 {
 		
 		$this->render('Actu','index');
 	

 	} else {



// $d['loading'] = " Votre article est bien enregistré ";

		$dossier = ROOT.'images/';
		$fichier = basename($this->files['image']['name']);
		move_uploaded_file($this->files['image']['tmp_name'], $dossier . $fichier);

		$actu = new Actu(
			$this->input['fk_categorie'],
			// $this->input['date_parution'],
			$this->input['titre'],
			$this->input['subtitle'],
			$this->input['article'],
			$fichier,
			$this->input['source'],
			$this->input['auteur'],
			$this->input['mots_cles']);

		
		$this->DaoActu->create($actu);
		$d['loading'] = " Votre article est bien enregistré ";

		$this->set($d);
		$this->render('Actu','index');
		
				
}

}
 
}	

}





	public function read($id) {
		$this->loadDao('Actu');
	
	if($id == null){

		
		$d['actu'] = $this->DaoActu->readAllByActu($id);

		$this->set($d);
		$this->render('Accueil','index');

	}else{

		$d['id_actu'] = $this->DaoActu->read($id);
		$this->set($d);
		$this->render('Actu','read');

	}
}

public function readAllByCat1(){
	$this->loadDao('Actu');
	if ($d['actus'] = $this->DaoActu->readAllByCat($id = 1)){
		
	$this->set($d);
	$this->render('Actu','amenagement');

	}

}

public function readAllByCat2(){
	$this->loadDao('Actu');
	if ($d['actus'] = $this->DaoActu->readAllByCat($id = 2)){
		
	$this->set($d);
	$this->render('Actu','ecologie');

	}

}


}

// 	public function read($id_cat,$id_actu = null) {
// 	$this->loadDao('Actu');
		
// 	if ($id == null) {
// 	 $d['actus'] = $this->DaoActu->readAllByCat($id_cat = 1);
// 	 	}

// 	$d['actu'] = $this->DaoActu->read();
// 	$this->set($d);

// 	$this->render('Actu','read');

// }

// public function read($id_actu = 2 ,$id_categorie = 1) {
// 		$this->loadDao('Actu');
// 		$this->loadDao('Categorie');

// 		$d['actu'] = $this->DaoCategorie->read($id = 1);
// 		$d['categorie'] = $this->DaoCategorie->readAllByCat($id);

// 		$this->set($d);
// 		$this->render('Actu','read');

// 	}




// 		 else {
// 			$d['actuSolo'] = $this->DaoActu->create($id_actu);

// 			$this->set($d);
// 			$this->render('Actu','index');
// 			//$this->render('Actu','ecologie');
		
		
// }	




// 	public function ecologie() {
// 		// Chargement de la vue 'index' avec la méthode render du "super controleur"

// 		$this->loadDao('Actu');
// 		$d['actu'] = $this->DaoActu->readAllByCat($id);
// 		$this->set($d);
// 		$this->render('Actu','ecologie');
	
		
// 	}

// }*/
	// public function readAll() {
	// 	// Chargement de la vue 'index' avec la méthode render du "super controleur"
	// 	$this->loadDao('Actu');

	// 	// $this->loadDao('Categorie');
	// 	// $this->loadDao('Produit');

	// 	$d['actu'] = $this->DaoActu->readAll();
	

	// 	$this->set($d);
	// 	$this->render('Actu','parution');
		
		// $this->render('Produit','index');

		
		
	
	 
