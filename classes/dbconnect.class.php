<?php

class connectdb{
	private $servername = "localhost";
    private $username = "root";
    private $password = "";
	public $conn = null;

	public function connect(){
		try {   
            $this->conn = new PDO("mysql:host=$this->servername;dbname=food_ordering",$this->username, $this->password);
			//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		}catch(Exception $e) { 
		echo $e->getMessage();   
		}
		return $this->conn;
	}

}

?>