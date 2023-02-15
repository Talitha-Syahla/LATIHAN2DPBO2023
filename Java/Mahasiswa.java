public class Mahasiswa extends SivitasAkademik{

    private String nim;
    private String fakultas;
    private String jurusan;

    public Mahasiswa(){
		this.nim = "";
        this.fakultas = "";
		this.jurusan = "";
	}

    public Mahasiswa(String NIK, String name, String gender, String asal_univ, String email, String nim, String fakultas, String jurusan){
		super(NIK, name, gender, asal_univ, email);
        this.nim = nim;
        this.fakultas = fakultas;
		this.jurusan = jurusan;
	}

    // Untuk Nim
	public String getNim(){
		return this.nim;
	}

	public void setNim (String nim){
		this.nim = nim;
	}

    // Untuk Fakultas
	public String getFakultas(){
		return this.fakultas;
	}

	public void setFakultas (String fakultas){
		this.fakultas = fakultas;
	}

    // Untuk Jurusan
	public String getJurusan(){
		return this.jurusan;
	}

	public void setJurusan (String jurusan){
		this.jurusan = jurusan;
	}

    public void display(){
		System.out.println("\n                 DATA MAHASISWA");
        System.out.println("===============================================\n");
		System.out.println("NIK             : " + this.getNIK());
		System.out.println("Nama            : " + this.getName());
		System.out.println("Jenis Kelamin   : " + this.getGender());
        System.out.println("Asal Universitas: " + this.getAsal_univ());
        System.out.println("Email           : " + this.getEmail());
        System.out.println("NIM             : " + this.getNim());
        System.out.println("Fakultas        : " + this.getFakultas());
        System.out.println("Jurusan         : " + this.getJurusan());
        System.out.println("===============================================\n");

}
}