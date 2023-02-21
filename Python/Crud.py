class Crud:
    
    def __init__(self):
        # Membuat sebuah list kosong yang nantinya digunakan untuk menampung data mahasiswa
        self.list = []
    
    # method untuk menambah data mahasiswa yang ditambahkan user ke dalam list
    def menambahdata(self, data):
        self.list.append(data)
        
    # method untuk melihat seluruh data mahasiswa yang ada di dalam list
    def melihatdata(self):
        if len(self.list) == 0:  # jika tidak ada data di dalam list
            print("\nData Mahasiswa Kosong")
        else: # jika ada data di dalam list
            print("                 DATA MAHASISWA")
            # looping untuk mengambil data dari seluruh elemen list
            for i in range(len(self.list)):
                print("===============================================")
                print("NIK            : ", self.list[i].get_NIK())
                print("Nama           : ", self.list[i].get_Name())
                print("Jenis Kelamin  : ", self.list[i].get_Gender())
                print("Universitas    : ", self.list[i].get_Asal_univ())
                print("Email          : ", self.list[i].get_Email())
                print("NIM            : ", self.list[i].get_Nim())
                print("Fakultas       : ", self.list[i].get_Fakultas())
                print("Jurusan        : ", self.list[i].get_Jurusan())
                print("===============================================\n")
        