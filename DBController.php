<?php
class DBController {
	private $host = "ec2-54-211-176-156.compute-1.amazonaws.com";
	private $user = "lkblfujpnveoph";
	private $password = "a2dda41d2a64a9bc1de4ccc447742ff9c32185457810c259326670ce98c0fc42";
	private $database = "d7k35e83nt54kf";
        private $port = "5432";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = pg_connect($this->host,$this->user,$this->password,$this->database, $this->port);
		return $conn;
	}
	
	function runQuery($query) {
		$result = pg_query($this->conn,$query);
		while($row=pg_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = pg_query($this->conn,$query);
		$rowcount = pg_num_rows($result);
		return $rowcount;	
	}
}
?>