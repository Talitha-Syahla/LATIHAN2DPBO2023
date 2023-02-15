public class Human{
    
    private String NIK;
    private String name;
    private String gender;

    public Human(){
		this.NIK = "";
        this.name = "";
		this.gender = "";
	}

    public Human(String NIK, String name, String gender){
		this.NIK = NIK;
        this.name = name;
		this.gender = gender;
	}

    // Untuk NIK
	public String getNIK(){
		return this.NIK;
	}

	public void setNIK (String NIK){
		this.NIK = NIK;
	}

    // Untuk Nama
	public String getName(){
		return this.name;
	}

	public void setName (String name){
		this.name = name;
	}

    // Untuk Jenis Kelamin
	public String getGender(){
		return this.gender;
	}

	public void setGender (String gender){
		this.gender = gender;
	}
}