<?php
class Conexiune{
	private $servername ="localhost";
	private $username="nininexloc_pie";
	private $password="L~%XIZCefEeZ";
	private $dbname="nininexloc_pie";
	protected $con;
	public function openConnection()
	{
		try{
			$this->con = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username,$this->password);
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->con;
		}catch(PDOException $e){
			echo "Eror" .$e->getMessage();
		}
	}
	public function  closeConnection(){
		$this->con=null;
	}
}
?>
