from SivitasAkademik import SivitasAkademik

class Mahasiswa(SivitasAkademik):
    
    # Inisialisasi variabel untuk setiap objek dari kelas
    nim = ""
    fakultas = ""
    jurusan = ""
    
    def __init__(self, nim = "", fakultas = "", jurusan = "", asal_univ = "", email = "", NIK = "", name = "", gender = ""):
        super().__init__(asal_univ, email, NIK, name, gender)
        self.nim = nim
        self.fakultas = fakultas
        self.jurusan = jurusan
        
    # Getter dan Setter untuk Asal Universitas
    def get_Nim(self):
        return self.nim
    
    def set_Nim(self, nim):
        self.nim = nim
        
    # Getter dan Setter untuk Fakultas
    def get_Fakultas(self):
        return self.fakultas
    
    def set_Fakultas(self, fakultas):
        self.fakultas = fakultas
        
    # Getter dan Setter untuk Jurusan
    def get_Jurusan(self):
        return self.jurusan
    
    def set_Jurusan(self, jurusan):
        self.jurusan = jurusan