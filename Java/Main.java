public class Main{
    public static void main(String[] args){
        Mahasiswa toodler = new Mahasiswa(
            "321048754926530", "Talitha Syahla", "Perempuan", "Universitas Pendidikan Indonesia",
            "tal_syahla@upi.edu", "2101330", "FPMIPA", "Ilmu Komputer"
        );
        toodler.display();

         Mahasiswa toodler2 = new Mahasiswa(
            "321875445265396", "Park Jimin", "Laki-Laki", "Universitas Pendidikan Indonesia",
            "park_jim@upi.edu", "2101310", "FPMIPA", "Ilmu Komputer"
        );
        toodler2.display();
    }
}