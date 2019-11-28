<?php 

	// Définition de constantes globales 

	define('DB_HOST', 'localhost');

	define('DB_NAME', 'transition');

	define('DB_USER', 'danycoco');

	define('DB_PASS', 'Corentin94,;:!');

	
	class DB 
{
private static $db;

public static function connect()
{
	if(empty(self::$db))

{



// Stockage de la connection à la base de donnée dans la varible $bdd avec la méthode PDO

	self::$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER, DB_PASS, [

              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

              PDO::ATTR_EMULATE_PREPARES => false,

            ]
        );
}

return self::$db;

}
 

  public static function select($sql, $cond=null) 
  {
    $result = false;
    try 
    {
      $stmt = self::connect()->prepare($sql);
      $stmt->execute($cond);


      
        $result = $stmt->fetchAll();
      

    } catch (Exception $ex) { die($ex->getMessage()); }
      $stmt = null;
    return $result;
  }

  public static function lastId() {
    return self::connect()->lastInsertId();
  }

 
}
 ?>

 