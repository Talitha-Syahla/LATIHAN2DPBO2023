#include <bits/stdc++.h>
#include "Human.cpp"
#include "SivitasAkademik.cpp"
#include "Mahasiswa.cpp"
#include "Crud.cpp"

using namespace std;

int main(){

    Crud list;
    string name, nim, jurusan, fakultas, gender, email, asal_univ, NIK; 

    // deklarasi variabel untuk pilihan menu
    int n = 0;

// loop untuk menampilkan menu dan meminta input dari user
    while(true){
        // menampilkan menu
        cout << '\n' << "Daftar Menu : " << '\n';
        cout << "------------------------" << '\n';
        cout << "1) Menambah Data Mahasiswa" << '\n';
        cout << "2) Melihat Data Mahasiswa" << '\n';
        cout << "3) Out / Keluar" << '\n';
        cout << "------------------------" << '\n';

    // meminta input pilihan dari user
        cout << '\n' << "Pilih (nomor) : " << '\n';
        
        cin >> n;
        // Jika input menu yang dipilih adalah nomor 1
        if(n == 1){
            Mahasiswa mhs;

        // Meminta masukkan user berupa data-data yang akan di minta program            
            cout << "NIK : ";
            cin >> NIK;
            cout << "Nama : ";
            cin >> name;
            cout << "Jenis Kelamin (P/L) : ";
            cin >> gender;
            cout << "Asal Universitas : ";
            cin >> asal_univ;
            cout << "Email : ";
            cin >> email;
            cout << "NIM : ";
            cin >> nim;
            cout << "Fakultas : ";
            cin >> fakultas;
            cout << "Jurusan : ";
            cin >> jurusan;

        // Buat objek Mahasiswa sementara untuk menampung data mahasiswa yang baru ditambahkan
            Mahasiswa temp(name, nim, jurusan, fakultas, gender, NIK, email, asal_univ);
        // Panggil fungsi menambahData dari objek data untuk menambahkan data mahasiswa baru ke dalam list
            list.menambahData(temp);
            cout << "Data Mahasiswa Berhasil Ditambahkan" << endl;
        }

        // Jika input menu yang dipilih adalah nomor 2
        else if(n == 2){
            list.melihatData();
        }

        // Jika input menu yang dipilih adalah nomor 3
        else if(n == 3){
            cout << "Terima Kasih!" << endl;
            return 0;
        } 

        // Jika input menu yang dipilih tidak ada dipilihan
        else{
            cout << "Pilihan Tidak Terdaftar" << endl;
        }
        }
    
    return 0;
}