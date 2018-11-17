<?php

class opgDBscripts extends mysqli {
		
	// Single instance of self - shared among all instances - known as "Singleton"
	private static $instance = null;
	
	// Database connection configuration variables
	private $dbHost = "localhost";
	private $dbName = "opgdata";
	private $user = "opgadmin";
	private $pass = "opgUser9";
	
	
	//This method must be static, and must return an instance of the object if the object
	//does not already exist.
	public static function getInstance() {
	if (!self::$instance instanceof self) {
		self::$instance = new self;
		}
		return self::$instance;
	}
	
	// The clone and wakeup methods prevents external instantiation of copies of the Singleton class,
	// thus eliminating the possibility of duplicate objects.
	public function __clone() {
		trigger_error('Clone is not allowed.', E_USER_ERROR);
	}
	public function __wakeup() {
		trigger_error('Deserializing is not allowed.', E_USER_ERROR);
	}
	
	//  Constructor - establishes database connection
	public function __construct() { 
		parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName); 
		if (mysqli_connect_error()) { 
			exit('Connect Error ('.mysqli_connect_errno().') '. mysqli_connect_error());      
		} 
		parent::set_charset('utf-8'); 				
	}
	
	// START - OPG specific methods ----------------------------------------------------------------------- 
	public function verifyLogin ($name, $password){ 
		$name = $this->real_escape_string($name);
		$password = $this->real_escape_string($password); 
		$result = $this->query("SELECT 1 FROM login
						 WHERE UserName = '".$name."' AND Password = '". $password."'");
		return $result->data_seek(0);
	}
	public function addPet($category,$pettype,$gender,$agegroup,$imagename,$description) { 
		return $this->query("INSERT INTO pets (PetID,Category,PetType,Gender,AgeGroup,ImageName,Description)
			VALUES (NULL,'".$category."','".$pettype."','".$gender."','".$agegroup."','".$imagename."','".$description."');");   
	}
	public function viewPet() { 
		return $this->query("SELECT * FROM pets");    
	}
	public function catsLost() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Cat' AND Category = 'Lost'");    
	}
	public function catsRescued() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Cat' AND Category = 'Rescued'");    
	}
	public function dogsLost() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Dog' AND Category = 'Lost'");    
	}
	public function dogsRescued() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Dog' AND Category = 'Rescued'");    
	}
	public function othersLost() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Other' AND Category = 'Lost'");    
	}
	public function othersRescued() { 
		return $this->query("SELECT * FROM pets WHERE PetType='Other' AND Category = 'Rescued'");    
	}
	public function getPet($petid) { 
	 	return $this->query("SELECT * FROM pets WHERE PetID = ".$petid);
	}
	public function deletePet($petid) { 
	 	return $this->query("DELETE FROM pets WHERE PetID = ".$petid);
	}
	public function findPet($category,$pettype,$gender,$agegroup) { 
		return $this->query("SELECT * FROM pets WHERE Category = '".$category."' 
									  AND PetType = '".$pettype."'
									  AND Gender = '".$gender."'
									  AND AgeGroup ='".$agegroup."'");   
	}
	public function editPet($petid,$category,$pettype,$gender,$agegroup,$imagename,$description) { 
		return $this->query("UPDATE pets
			SET Category = '".$category."', 
				PetType = '".$pettype."', 
				Gender = '".$gender."', 
				AgeGroup = '".$agegroup."', 
				ImageName = '".$imagename."', 
				Description = '".$description."'
			WHERE PetID = '".$petid."';");   	
	}
	// END - OPG specific methods ----------------------------------------------------------------------- 
}
?>