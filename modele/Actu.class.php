<?php  
// ----------- PHASE 1 : creation d'objet ----------- //
 // Déclaration de l'objet User avec héritage (copier/coller) de la classe abstraite AbstractEntity
class Actu extends AbstractEntity {
	// Déclaration des attributs
	private $fk_categorie;
	private $date_parution;
	private $titre;
	private $subtitle;
	private $article;
	private $image;
	private $source;
	private $auteur;
	private $mots_cles;
	
	
	
	// Déclaration du constructeur avec ses arguments qui font références aux attributs
	public function __construct($fk_categorie, $titre, $subtitle, $article, $image, $source, $auteur, $mots_cles) {
		// $this fait référence à l'instance de l'objet (new Objet()).
		// $this->categorie = $categorie;
		$this->fk_categorie = $fk_categorie;
		// $this->date_parution = $date_parution;
		$this->titre = $titre;		
		$this->subtitle = $subtitle;
		$this->article = $article;
		$this->image = $image;
		$this->source = $source;
		$this->auteur = $auteur;
		$this->mots_cles = $mots_cles;
		
		
		//$this->fk_user = $fk_user;
		
	}

	

	//public function getId() {
	//return $this->id;
	//}
    // Getter (permet de lire un attibut)
	// Déclaration du getter pour le firstName
	// public function getCategorie() {
	// 	return $this->categorie;
	// }
 //    // Setter (permet d'ecrire un attribut)
	// // Déclaration du setter pour le firstName
	// public function setCategorie($categorie) {
	// 	$this->categorie = $categorie;
	// }


	public function getFk_categorie() {
		return $this->fk_categorie;
	}

	public function setFk_categorie($fk_categorie) {
		$this->fk_categorie = $fk_categorie;
	}

	public function getDate_parution() {
		return $this->date_parution;
	}

    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le firstName
	public function setDate_parution($date_parution) {
		$this->date_parution = $date_parution;

	}
	
	public function getTitre() {
		return $this->titre;
	}

    // Setter (permet d'ecrire un attribut)
	// Déclaration du setter pour le firstName
	public function setTitre($titre) {
		$this->titre = $titre;
	}

	

	public function getSubtitle() {
		return $this->subtitle;
	}

	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	public function getArticle() {
		return $this->article;
	}

	public function setArticle($article) {
		$this->article = $article;
	}

	public function getImage() {
		return $this->image;
	}

	public function setImage($image) {
		$this->image = $image;
	}

	public function getSource() {
		return $this->source;
	}

	public function setSource($source) {
		$this->source = $source;
	}

	public function getAuteur() {
		return $this->auteur;
	}

	public function setAuteur($auteur) {
		$this->auteur = $auteur;
	}

	public function getMots_cles() {
		return $this->mots_cles;
	}

	public function setMots_cles($mots_cles) {
		$this->mots_cles = $mots_cles;
	}

}

 ?>