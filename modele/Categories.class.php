<?php 
class Categorie extends AbstractEntity{

	private $nom;
	private $description;
	private $image;
	

	public function __construct($nom,$description,$image){

		$this->nom = $nom;
		$this->description = $description;
		$this->image = $image;
		
	}

	public function getNom() {
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

public function getDescription() {
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getImage() {
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	

	


}



 ?>
