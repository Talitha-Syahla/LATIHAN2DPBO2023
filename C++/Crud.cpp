class Crud{
    
    private:
    // Membuat sebuah vector 'list' bertipe Mahasiswa yang nantinya digunakan untuk menampung data mahasiswa
        vector<Mahasiswa> list;

    public:
    // konstruktor
    Crud(){
    }

    // method untuk menambahkan data mahasiswa ke dalam vector 'list'
    void menambahData(Mahasiswa data){
        list.push_back(data);
    }

    // method untuk melihat seluruh data mahasiswa yang ada di dalam vector 'list'
    void melihatData(){
        if(list.size() == 0){ // jika tidak ada data di dalam vector 'list'
            cout << "Data Mahasiswa Kosong" << endl;
        }
        else{ // jika ada data di dalam vector 'list'
            cout << "DATA MAHASISWA" << endl;

            // looping untuk mengambil data dari seluruh elemen vector 'list'
            for(int i=0; i<list.size(); i++){
                cout << "===============================================" << endl;
                cout << "NIK            : " << list[i].get_NIK() << endl;
                cout << "Nama           : " << list[i].get_Name() << endl;
                cout << "Jenis Kelamin  : " << list[i].get_Gender() << endl;
                cout << "Universitas    : " << list[i].get_Asal_univ() << endl;
                cout << "Email          : " << list[i].get_Email() << endl;
                cout << "NIM            : " << list[i].get_Nim() << endl;
                cout << "Fakultas       : " << list[i].get_Fakultas() << endl;
                cout << "Jurusan        : " << list[i].get_Jurusan() << endl;
            }
            cout << "===============================================\n" << endl;
        }
    }

        // Destruktor
        ~Crud(){
        }
    
};