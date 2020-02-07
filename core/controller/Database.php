<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bc55ba111d9e46";$this->pass="c6ab4875";$this->host="us-cdbr-iron-east-04.cleardb.net";$this->ddbb="heroku_f9b859979f8afe4";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
