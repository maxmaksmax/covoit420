<?php
class DataBasePDO extends MyObject {

	private $PDOInstance = null;
	private static $_BDD = null;

   private function __construct(){
	   // echo 'dbname= '._MYSQL_DBNAME.'<br>';
	   // echo 'dbhost= '._MYSQL_HOST.'<br>';
	   // echo 'dbuser= '._MYSQL_USER.'<br>';
	   // echo 'dbpassw= '._MYSQL_PASSWORD.'<br>';
		$this->PDOInstance = new PDO('mysql:dbname='._MYSQL_DBNAME.';host='._MYSQL_HOST,_MYSQL_USER,_MYSQL_PASSWORD);
   }

   public static function getInstance() {

     if(is_null(static::$_BDD)) {
		 static::$_BDD = new DataBasePDO();
     }

     return static::$_BDD;
   }

   public function getPDOInstance(){
	   return $this->PDOInstance;
   }
}
?>
