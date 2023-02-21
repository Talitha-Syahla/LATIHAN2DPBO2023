from Human import Human

class SivitasAkademik(Human):
    
    # Inisialisasi variabel untuk setiap objek dari kelas
    asal_univ = ""
    email = ""
    
    def __init__(self, asal_univ = "", email = "", NIK = "", name = "", gender = ""):
        super().__init__(NIK, name, gender)
        self.asal_univ = asal_univ
        self.email = email
        
    # Getter dan Setter untuk Asal Universitas
    def get_Asal_univ(self):
        return self.asal_univ
    
    def set_Asal_univ(self, asal_univ):
        self.asal_univ = asal_univ
        
    # Getter dan Setter untuk Email
    def get_Email(self):
        return self.email
    
    def set_Email(self, email):
        self.email = email