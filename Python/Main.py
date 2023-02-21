from Mahasiswa import Mahasiswa
from Crud import Crud

name = ""
nim = ""
jurusan = ""
fakultas = ""
gender = ""
email = ""
asal_univ = ""
NIK = ""

list = Crud()

while True:
    print('----------------------------')
    print('       Daftar Menu ')
    print('----------------------------')
    print('1) Menambah Data Mahasiswa')
    print('2) Melihat Data Mahasiswa')
    print('3) Out / Keluar')
    print('----------------------------')
    
    # Meminta input pilihan dari user
    n = input("\nPilih (nomor) : ")
    
    # Jika input menu yang dipilih adalah nomor 1
    if n == '1':
        NIK = input("NIK                 : ")
        name = input("Nama                : ")
        gender = input("Jenis Kelamin (P/L) : ")
        asal_univ = input("Asal Universitas    : ")
        email = input("Email               : ")
        nim = input("NIM                 : ")
        fakultas = input("Fakultas            : ")
        jurusan = input("Jurusan             : ")
    
    # Buat objek Mahasiswa sementara untuk menampung data mahasiswa yang baru ditambahkan    
        temp = Mahasiswa(nim, fakultas, jurusan, asal_univ, email, NIK, name, gender)
    
    # Panggil fungsi menambahData dari objek data untuk menambahkan data mahasiswa baru ke dalam list
        list.menambahdata(temp)
        print("\nData Mahasiswa Berhasil Ditambahkan\n")
    
    # Jika input menu yang dipilih adalah nomor 2
    elif n == '2':
        list.melihatdata()
        
    # Jika input menu yang dipilih adalah nomor 3
    elif n == '3':
        print("\nTerima Kasih!\n")
        break
    
    # Jika input menu yang dipilih tidak ada dipilihan menu
    else:
        print("\nPilihan Tidak Terdaftar\n")