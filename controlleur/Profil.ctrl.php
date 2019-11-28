<?php 

class CtrlProfil extends Controller {
	
public function index() {

	

$this->render('Profil','index');

}
public function create() {
		$this->loadDao('Profil');



 	if (empty($this->input))

 	 {
 		
 		$this->render('Profil','index');
 	

 	} else {

			$user = new User(
			$this->input['sexe'],
			$this->input['birthday'],
			$this->input['adress'],
			$this->input['ville'],
			$this->input['code_postal'],
			$this->input['tel'],
			$this->input['pays'],
			$this->input['email'],
			$this->input['pass_one'],
			$this->input['pass_two']);


		
		$this->DaoProfil->create($user);
		$d['loading'] = " MERCI D'AVOIR RENSEIGNE VOTRE PROFIL"; 

		$this->set($d);
		$this->render('Profil','index');
		
				
}


}

}


?>

