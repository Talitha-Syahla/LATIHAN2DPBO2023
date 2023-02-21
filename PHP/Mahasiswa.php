<?php

class Mahasiswa extends SivitasAkademik{

	// Atribut private dari Class Mahasiswa
	private $nim = "";
    private $fakultas = "";
	private $jurusan = "";
	
	// Atribut public dari Class Mahasiswa
	public function __construct($NIK = "", $name = "", $gender = "", $asal_univ = "", $email = "", $nim = "", $fakultas = "", $jurusan = ""){
		parent::__construct($asal_univ, $email, $NIK, $name, $gender);
		$this->nim = $nim;
		$this->fakultas = $fakultas;
		$this->jurusan = $jurusan;
	}

// Setter Dan Getter

    // Untuk NIM
	public function setNim($nim){
		$this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}

    // Untuk Fakultas
    public function setFakultas($fakultas){
	    $this->fakultas = $fakultas;
	}

	public function getFakultas(){
		return $this->fakultas;
	}

	// Untuk Jurusan
    public function setJurusan($jurusan){
	    $this->jurusan = $jurusan;
	}

	public function getJurusan(){
		return $this->jurusan;
	}
}

?>