<!-- INIT 2 : creation du super Controleur -->
<?php 
class Controller {

	// les variables
	public $input;
	public $files;
	var $vars = array();
// contructeur
	public function __construct() {
		if (isset($_POST)) {
			$this->input = $_POST;
		}
		if (isset($_FILES)) {
			$this->files = $_FILES;
		}
	}
	// Les méthodes

	function loadDao($name) {
		require_once('dao/'.$name.'.dao.php');
		$daoClass = 'Dao'.$name;
		$this->$daoClass = new $daoClass();
	}

	
	function set($d) {
		$this->vars = array_merge($this->vars, $d);
	}

	function render($controller, $viewFile) {
			extract($this->vars); 
			ob_start();
			require('vue/'.$controller.'/'.$viewFile.'.php');
			$content = ob_get_clean();
			echo $content;
	}
}

 ?>





