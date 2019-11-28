<?php 

class CtrlAccueil extends Controller {
	
public function index() {
 $this->loadDao('Actu');

		// $this->loadDao('Categorie');
		// $this->loadDao('Produit');
 

		$d['actus'] = $this->DaoActu->readLastActu();
		// $d['actus'] = $this->DaoActu->readAllByCat($id = 1);

		// $d['categorie'] = $this->DaoActu->readAll();

		$this->set($d);
		
		// $this->render('Actu','parution');
	

$this->render('Accueil','index');


}



// public function read(){
// $this->loadDao('Actu');
// $d['actus'] = $this->DaoActu->readById($id);
// $this->set($d);
// $this->render('Actu','read');


//  }

 public function read($id_cat, $id_actu = null) {
		$this->loadDao('Actu');
		$this->loadDao('Categorie');
		
		if ($id_actu == null) {
			$d['actus'] = $this->DaoActu->readAllByCat($id_cat);
			$this->set($d);
			$this->render('Actu','read');
		} else {
			$d['actuSolo'] = $this->DaoActu->read($id_actu);

			$this->set($d);
			$this->render('Actu','read');
		}
		
	}


 }


// public function readAllByCat1(){
// 	$this->loadDao('Actu');
// 	if ($d['actus'] = $this->DaoActu->readAllByCat($id = 1)){

	
// 	$this->set($d);
// 	$this->render('Accueil','index');
// }

// }







?>

