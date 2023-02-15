public class SivitasAkademik extends Human{
    
    private String asal_univ;
    private String email;

    public SivitasAkademik(){
		this.asal_univ = "";
        this.email = "";
	}

    public SivitasAkademik(String NIK, String name, String gender, String asal_univ, String email){
		super(NIK, name, gender);
        this.asal_univ = asal_univ;
        this.email = email;
	}

    // Untuk asal_univ
	public String getAsal_univ(){
		return this.asal_univ;
	}

	public void setAsal_univ (String asal_univ){
		this.asal_univ = asal_univ;
	}

    // Untuk Nama
	public String getEmail(){
		return this.email;
	}

	public void setEmail (String email){
		this.email = email;
	}
}