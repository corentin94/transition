<?php 

// ----------- PHASE 1 : creation d'objet ----------- //
 // Déclaration de l'objet User avec héritage (copier/coller) de la classe abstraite AbstractEntity
class User extends AbstractEntity {
	// Déclaration des attributs
	private $nom;
	private $prenom;
	private $email;
	private $pass_one;
	private $sexe;
	private $birthday;
	private $adress;
	private $ville;
	private $code_postal;
	private $tel;
	private $pays;
	private $fk_user;
	private $archive;
	

	// Déclaration du constructeur avec ses arguments qui font références aux attributs
	public function __construct($nom, $prenom, $email, $pass_one) {

		// $sexe,$birthday,$adress,$ville,$code_postal,$tel,$pays,$fk_user)

		// $this fait référence à l'instance de l'objet (new Objet()).
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		$this->pass_one = $pass_one;
	}


    // Getter (permet de lire un attibut)
	// Déclaration du getter pour le lasttName
	public function getNom() {
		return $this->nom;
	}
    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le lastName
	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getPass_one() {
		return $this->pass_one;
	}

	public function setPass_one($pass_one) {
		$this->pass_one = $pass_one;
	}

	// Getter (permet de lire un attibut)
	// Déclaration du getter pour le lasttName
	public function getSexe() {
		return $this->sexe;
	}
    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le lastName
	public function setSexe($sexe) {
		$this->sexe = $sexe;
	}

	public function getBirthday() {
		return $this->birthday;
	}
    
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
	}

	public function getAdress() {
		return $this->adress;
	}
    
	public function setAdress($adress) {
		$this->adress = $adress;
	}

	public function getVille() {
		return $this->ville;
	}
    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le lastName
	public function setVille($ville) {
		$this->ville = $ville;
	}

	public function getCode_postal() {
		return $this->code_postal;
	}
    
	public function setCode_postal($code_postal) {
		$this->code_postal = $code_postal;
	}

	public function getTel() {
		return $this->tel;
	}
   
	public function setTel($tel) {
		$this->tel = $tel;
	}

	public function getPays() {
		return $this->pays;
	}
   
	public function setPays($pays) {
		$this->pays = $pays;
	}

	public function getFk_user() {
		return $this->fk_user;
	}
   
	
	public function setFk_user($fk_user) {
		$this->fk_user = $fk_user;
	}

	public function getArchive() {
		return $this->archive;
	}
   
	public function setArchive($archive) {
		$this->archive = $archive;
	}

}

 ?>