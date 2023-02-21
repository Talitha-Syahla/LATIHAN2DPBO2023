<?php

class Human{

	// Atribut private dari Class Human
	private $NIK = "";
    private $name = "";
    private $gender = "";
	
	// Atribut public dari Class Human
	public function __construct($NIK = "", $name = "", $gender = ""){
		$this->NIK = $NIK;
		$this->name = $name;
        $this->gender = $gender;
	}

// Setter Dan Getter

    // Untuk NIK
	public function setNIK($NIK){
		$this->NIK = $NIK;
	}

	public function getNIK(){
		return $this->NIK;
	}

    // Untuk Name
    public function setName($name){
	    $this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

    // Untuk Jenis Kelamin
	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}
}

?>