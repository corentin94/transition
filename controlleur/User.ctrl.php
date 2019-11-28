<?php 
// ----------- PHASE 3 : creation du Controlleur de l'objet ----------- //
// Déclaration de l'objet controleur qui hérite du "super controleur" Controller
class CtrlUser extends Controller {
	// méthode de l'action index
	public function index() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"
		$this->render('User','index');
	}

	public function connexion() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"
		$this->render('User','connect');
	}

	public function profil() {
		// Chargement de la vue 'index' avec la méthode render du "super controleur"
		$this->loadDao('User');
		$d['user']= $this->DaoUser->read($_SESSION['id']);
		$this->set($d);
		$this->render('User','profil');

	}



	// méthode de l'action create
	public function signIn() {
		// chargement de la DAO User avec la méthode loadDao du "super controleur"
		// $param = explode("/",$_GET['p']);
		$this->loadDao('User');
		$isBad = 0;
		/*REGEXP a r'ajouter ensuite*/

		if ($this->DaoUser->readByEmail($this->input['email']) != null) {
			 $isBad++;
			$d['user'] = $this->DaoUser->readByEmail($this->input['email']);
			$d['log'] = $this->input['email']." déjà inscript. Veuillez saisir une nouvelle inscription";

			$this->set($d);
			$this->render('User','index');
		
		} else {





			// Si le premier ne correspond pas à l'input

			if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/", $this->input['lastName'])) {

            $isBad++;

            $d['log1'] = "Le Nom doit contenir uniquement des lettres";

        } 

        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/", $this->input['firstName'])) {

            $isBad++;

            $d['log2'] = "Le Prénom doit contenir uniquement des lettres";       

        } 

          if (!preg_match("/^[\w.-]+@[\w.-]+\.[a-zA-Z0-9]{2,6}$/", $this->input['email'])) {

        $isBad++;

        $d['log3'] = "Email invalide";      

        
        } if (!preg_match('/^(?=.{6,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[&?:\/=+§^¤£@\#!()"$]).*$/',$this->input['pass_one']))

        {

          $isBad++;

            $d['log4'] = " Le mot de passe doit avoir :

              <ul>

              <li>Au moins une majuscule</li>

              <li>Au moins un chiffre</li>

              <li>Au moins 6 caractères</li>

              <li>Au moins un caractère spécial</li>

              </ul><br>";

        }elseif ($this->input['pass_one'] != $this->input['pass_two']) {

            $isBad++;

            $d['log5'] = "La vérification du mot de passe ne correspond pas";  

        } else {

            $goodPass = password_hash($this->input['pass_one'], PASSWORD_BCRYPT);

            // $goodPass = sha1($this->input['pass1']);

        }

        if ($isBad == 0){

			
						$newUser = new User(
				$this->input['lastName'],
				$this->input['firstName'], 
				$this->input['email'],
				$goodPass);
			$this->DaoUser->create($newUser);
			$d['id'] = DB::lastId();
			$_SESSION['id'] = DB::lastId();
			$_SESSION['lastName'] = $this->input['lastName'];
			$_SESSION['firstName'] = $this->input['firstName'];
			


	}else{
		$this->set($d);
		$this->render('User','index');

	}
	}
		
		header('Location: '.WEBROOT.'Accueil/index');
		

}


		// 		public function update() {
		// $this->loadDao('User');


		// $user = $this->DaoUser->read($_SESSION['id']);
		// $this->DaoUser->update($user);

		// if (!empty($this->input['lastName'])) {
		// 	$user->setNom(htmlentities($this->input['lastName']));
		// }
		// if (!empty($this->input['firstName'])) {
		// 	$user->setPrenom(htmlentities($this->input['firstName']));
		// }
		// if (!empty($this->input['email'])) {
		// 	$user->setEmail(htmlentities($this->input['email']));
		// } 
		// if (!empty($this->input['pass_one'])) {
		// 	$user->setPass_one(htmlentities($this->input['pass_one
		// 		']));

		// }
    
		
		// $this->DaoUser->update($user);
		// $d['user'] = $user;
		// $this->set($d);
		// $this->read($_SESSION['id']);

		// $this->set($d);
		// $this->render('User','profil');
	


public function update() {
		$this->loadDao('User');
		$badPoint = 0;
		$user = $this->DaoUser->read($_SESSION['id']);

		$d['log'] = "";


		$isBad = 0;
		/*REGEXP a r'ajouter ensuite*/


		if ($this->input['lastName'] != null) {
	        $nom = $this->input['lastName'];
	        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/", $nom)) {
	            $badPoint++;
	            $d['log'] .= "1";
	        }
	    } else {
	    	
	        $nom = $user->getNom();
	    }

    	if ($this->input['firstName'] != null) {
	        $prenom = $this->input['firstName'];
	        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/", $prenom)) {
	            $badPoint++;
	            $d['log'] .= "1";
	        }
	    } else {

	        $prenom = $user->getPrenom();
	    }

	    if ($this->input['email'] != null) {
	        $email = $this->input['email'];
	        if (!preg_match("/^[a-z0-9.-]+@[a-z0-9.-]+\.[a-z]{2,6}$/", $email)) {
	            $badPoint++;
	            $d['log'] .= "1";
	        
			
	    } else {

	        $email = $user->getEmail();
	    }
	
		if ($this->input['pass_one'] != null) {
        	$pass1 = $this->input['pass_one'];
        	$pass2 = $this->input['pass_two'];
        
	        if ($pass1 != $pass2) {
	           $badPoint++;
				$d['log5'] = "<p>La vérification du mot de passe ne correspond pas</p>";
			} else {
           		if (!preg_match('/^(?=.{6,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[&?:\/=+§^*¤£@\#!()"$]).*$/',$this->input['pass_one'])){
				$badPoint++;
				$d['log4'] = " <p>Le mot de passe doit avoir :</p>
				<ul>
					<li>Au moins une majuscule</li>
					<li>Au moins un chiffre</li>
					<li>Au moins 6 caractères</li>
					<li>Au moins un caractère spécial</li>
				</ul>";
				} else {
	                $mdp_secu = password_hash($pass1,PASSWORD_BCRYPT);
	            }
	        }
		} else {
        	$mdp_secu = $user->getPass_one();
   		}

     	if ($badPoint == 0) {
	        $newUser = new User($nom,$prenom,$email,$mdp_secu);
	        // recrée une nouvelle instance
	        $newUser->setId($_SESSION['id']);
	        $this->DaoUser->update($newUser);
	        $d['log6'] = "Compte modifié";
	        $this->set($d);
	        header ('Location:'.WEBROOT.'User/profil/');
        } else {
            $this->set($d);
            header ('Location:'.WEBROOT.'User/profil/');
        }
		// if (!empty($this->input['pass1'])) {
		// 	$user->setPass(htmlentities(password_hash($this->input['pass1'],PASSWORD_BCRYPT)));
		// }
		$d['user'] = $user;
		$this->set($d);
		$this->read($_SESSION['id']);
	}
}
	
	




		

// $_SESSION['lastName'] = $newUser->getNom();
// 			$_SESSION['firstName'] = $newUser->getPrenom();
// 			$_SESSION['pass_one'] = $newUser->getPass_one();



		// 	$newUser->setId(DB::lastId());
			
		// 	$d['log'] = "compte créé";
		// 	$d['user'] = $newUser;
		// 	$this->set($d);
			
		// header('Location: '.WEBROOT.'Accueil/index');
		


// 	public function login() {

//         $this->loadDao('User');

//         if ($this->DaoUser->readByEmail($this->input['email']) != null) {
            
//             $user = $this->DaoUser->readByEmail($this->input['email']);

           
            
      
//             if (password_verify($this->input['pass_one'],$user->getPass_one())) {

            	

//                 $_SESSION['id'] = $user->getId();
//                 $_SESSION['lastName'] = $user->getNom();
//                 $_SESSION['firstName'] = $user->getPrenom();
//                    $d['user'] = $user;
               
//             header('Location: '.WEBROOT.'Accueil/index');

//           } else {



// 				$d['log'] = "Mot de passe incorrect";
//                 $this->set($d);
//                 $this->render('User','connect');
            
// }
            
//         }
         

//         else {

// 			$d['log'] = $this->input['email']."Email incorrect";
//             $this->set($d);
//             $this->render('User','connect');


        	 	
        	
//         }
//     }

public function login() {
		$this->loadDao('User');


		if ($this->DaoUser->readByEmail($this->input['email']) != null) {
			
			$user = $this->DaoUser->readByEmail($this->input['email']);
		if ($this->DaoUser->readByEmail($this->input['email']) == null) {
			$d['log'] = "Email incorrect";
			$this->set($d);
			 $this->render('User','connect');
		}
		if (password_verify($this->input['pass_one'],$user->getPass_one())){
			var_dump($user->getPass_one());
				$_SESSION['id'] = $user->getId();
                $_SESSION['lastName'] = $user->getNom();
                $_SESSION['firstName'] = $user->getPrenom();
				$d['user'] = $user;
				header('Location: '.WEBROOT.'Accueil/index');
			}else{
				$d['log'] = "Mot de passe incorrect";
				$this->set($d);
				 $this->render('User','connect');
			}
		}
		else{
			$d['log'] = "Email incorrect";
			$this->set($d);
			$this->render('Accueil','index');
		}
		
	}








// 	public function login() 
// 	{
// 		// $param = explode("/",$_GET['p']);
// 		$this->loadDao('User');

// 		if ($this->DaoUser->readByEmail($this->input['email']) != null)
// 		{	
// 			$user = $this->DaoUser->readByEmail($this->input['email']);
			
// 			if (sha1($this->input['pass_one']) == $user->getPass_one()) 
// 			{
// 				$_SESSION['id'] = $user->getId();
// 				$_SESSION['lastName'] = $user->getNom();
// 				$_SESSION['firstName'] = $user->getPrenom();
// 				$d['user'] = $user;
			
// 			// } else if {

// 			//  $d['log'] = "Mot de passe incorrect";
					
// 			//  // $d['log'] = $this->input['passe_one']." erreur mot pass ";

// 			// }else{

			 
// 			//  // $d['log'] = $this->input['email']." Email incorrect ";
// 			//  $d['log'] = "Email incorrect";
// 		}

// 		$this->set($d);

// 		$this->render('Accueil','index');
		
// 	}
// }


// public function login() {
//         $this->loadDao('User');
//         if ($this->DaoUser->readByEmail($this->input['mail']) != null) {
            
//             $user = $this->DaoUser->readByEmail($this->input['mail']);
            
//             if (sha1($this->input['pass_one']) == $user->getPass_one()) {
//                 $_SESSION['id'] = $user->getId();
//                 $_SESSION['lastName'] = $user->getNom();
//                 $_SESSION['firstName'] = $user->getPrenom();

//                 $d['user'] = $user;

//             } else {

//                 $this->set($d);
//                 $d['log'] = "Mot de passe incorrect";
//                 $this->render('User','connexion');
                
            
//         } else {
//             $d['log'] = "Email incorrect";
//         }

//         if ($this->User->readByEmail($this->input['mail']) == null) {
//             $this->set($d);
//             $this->render('User','connexion');
//         }else{
//             $this->set($d);
//         header('Location: '.WEBROOT.'User/connexion');
//         }
        
//     }



	public function read($id) {
		$this->loadDao('User');

		$d['user']=$this->DaoUser->read($id);
		$this->set($d);
		$this->render('User','profil');

		
		
	}

	
		// $this->userToUpdate = $this->DaoUser->read($_SESSION['id']);
		// $this->userToUpdate->setNom($this->input['lastName']);
		// $this->userToUpdate->setPrenom($this->input['firstName']);
		// $this->userToUpdate->setEmail($this->input['email']);
		// $this->userToUpdate->setPass_one($this->input['pass_one']);


		// $this->DaoUser->update($this->userToUpdate);

		// $d['user'] = $this->DaoUser->read($_SESSION['id']);

		// $this->set($d);
		// $this->render('User','profil');

		// }


		 // if (sha1($this->input['pass_one']) == $d['user']->setPass_one()) {
   //              $_SESSION['id'] = $d['user']->setId();
   //              $_SESSION['lastName'] = $d['user']->setNom();
   //              $_SESSION['firstName'] = $d['user']->setPrenom();
		
		// verifier si pass_one et pass_two sont identique
		// si ok, crpyter pass_one sha1 

		// sha1 $this->input['pass_one']) == ($this->input['pass_two'])

		// sha1($this->input['pass_one']));

		// $this->userToUpdate->setPass_one(sha1($this->input['pass_one']);

		// }

		 // if ($this->input['pass_one']) == ($this->input['pass_two']){

	
	public function delete($id) {

	}

	

	public function logOut() {
		$_SESSION = [];
		session_destroy();
		header('Location: '.WEBROOT.'Accueil/index');
	}

	
 }

?>