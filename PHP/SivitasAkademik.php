<?php

class SivitasAkademik extends Human{

	// Atribut private dari Class SivitasAkademik
	private $asal_univ = "";
    private $email = "";
	
	// Atribut public dari Class SivitasAkademik
	public function __construct($asal_univ = "", $email = "", $NIK = "", $name = "", $gender = ""){
		parent::__construct($NIK, $name, $gender);
        $this->asal_univ = $asal_univ;
		$this->email = $email;
	}

// Setter Dan Getter

    // Untuk Asal Universitas
	public function setAsal_univ($asal_univ){
		$this->asal_univ = $asal_univ;
	}

	public function getAsal_univ(){
		return $this->asal_univ;
	}

    // Untuk Email
    public function setEmail($email){
	    $this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
}

?>