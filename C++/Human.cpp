#include <iostream>
#include <string>

using namespace std;

class Human{
    
    private:
        string NIK;
        string name;
        string gender;

    public:
    // Constructor
        Human(){
            this->NIK = "";
            this->name = "";
            this->gender = "";
        }

        Human(string NIK, string name, string gender){
            this->NIK = NIK;
            this->name = name;
            this->gender = gender;
        }

    // Setter dan Getter

        // Untuk NIK
        string get_NIK(){
            return this->NIK;
        }

        void set_NIK(string NIK){
            this->NIK = NIK;
        }

        // Untuk Name
        string get_Name(){
            return this->name;
        }

        void set_Name(string name){
            this->name = name;
        }

        // Untuk Jenis Kelamin
        string get_Gender(){
            return this->gender;
        }

        void set_Gender(string gender){
            this->gender = gender;
        }

        // Destruktor
        ~Human(){
        }
    
};