<?php 

class CtrlActu extends Controller {

public function index() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"
		$this->loadDao('Actu');

		// $this->loadDao('Categorie');
		// $this->loadDao('Produit');

		$d['actus'] = $this->DaoActu->readAll();
		// $d['categories'] = $this->DaoCategorie->readAll();

		$this->set($d);
		// $this->render('Produit','index');

		$this->render('Actu','index');
	
	}

	public function parution() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"



$this->loadDao('Actu');
$d['actus'] = $this->DaoActu->readAll();
$this->set($d);
		// $this->render('Produit','index');

		
		$this->render('Actu','public');
	
	}


		public function create() {
		$this->loadDao('Actu');

		$dossier = ROOT.'images/';
		$fichier = basename($this->files['image']['name']);
		move_uploaded_file($this->files['image']['tmp_name'], $dossier . $fichier);

		$actu = new Actu(
			$this->input['categorie'],
			$this->input['titre'],
			$this->input['subtitle'],
			$this->input['article'],
			$fichier,
			$this->input['source'],
			$this->input['auteur'],
			$this->input['mots_cles']);
			//$this->input['fk_categorie']);
			//$d['actu'] = $actu;

			$this->DaoActu->create($actu);

		// $this->index();

			$this->render('Actu','public');

// header('Location: '.WEBROOT.'Actu/public');


	}




		
			
			
	// header('Location: '.WEBROOT.'Actu/index');

			

	// public function index() {
	// 	// $this->loadDao('Categorie');
	// 	$this->loadDao('Actu');

	// 	$d['actus'] = $this->DaoActu->readAll();
	// 	//$d['categories'] = $this->DaoCategorie->readAll();

	// 	$this->set($d);
	// 	$this->render('Actu','index');
	// }

	}

	

?>



