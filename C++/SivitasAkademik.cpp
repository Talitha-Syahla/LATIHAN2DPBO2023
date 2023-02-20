
class SivitasAkademik :  public Human{
    
    private:
        string asal_univ;
        string email;

    public:
    // Constructor
        SivitasAkademik(){
            this->asal_univ = "";
            this->email = "";
        }

        SivitasAkademik(string asal_univ, string email, string NIK, string name, string gender) : Human(NIK, name, gender){
            this->asal_univ = asal_univ;
            this->email = email;
        }

    // Setter dan Getter

        // Untuk Asal Universitas
        string get_Asal_univ(){
            return this->asal_univ;
        }

        void set_Asal_univ(string asal_univ){
            this->asal_univ = asal_univ;
        }

        // Untuk Email
        string get_Email(){
            return this->email;
        }

        void set_Email(string email){
            this->email = email;
        }

        // Destruktor
        ~SivitasAkademik(){
        }
    
};