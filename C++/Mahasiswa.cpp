class Mahasiswa :  public SivitasAkademik{
    
    private:
        string nim;
        string fakultas;
        string jurusan;

    public:
    // Constructor
        Mahasiswa(){
            this->nim = "";
            this->fakultas = "";
            this->jurusan = "";
        }

        Mahasiswa(string nim, string fakultas, string jurusan, string asal_univ, string email, string NIK, string name, string gender) : SivitasAkademik(asal_univ, email, NIK, name, gender){
            this->nim = nim;
            this->fakultas = fakultas;
            this->jurusan = jurusan;
        }

    // Setter dan Getter

        // Untuk NIM
        string get_Nim(){
            return this->nim;
        }

        void set_Nim(string nim){
            this->nim = nim;
        }

        // Untuk Fakultas
        string get_Fakultas(){
            return this->fakultas;
        }

        void set_Fakultas(string fakultas){
            this->fakultas = fakultas;
        }

        // Untuk Jurusan
        string get_Jurusan(){
            return this->jurusan;
        }

        void set_Jurusan(string jurusan){
            this->jurusan = jurusan;
        }

        // Destruktor
        ~Mahasiswa(){
        }
    
};