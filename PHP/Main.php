<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LATIHAN2DPBO2023 - Talitha Syahla</title>
   <link rel="stylesheet" href="">
   
   <body>
        <center><h2>Biodata Mahasiswa Universitas Pendidikan Indonesia</h2></center>
        <center><h4>Ilmu Komputer - 2021/2022</h4></center>
</head>

        <?php
        require('Human.php');
        require('SivitasAkademik.php');
        require ('Mahasiswa.php');
        echo '<hr>';

        // hardcode inputan mahasiswa pertama
        echo "<table>";
        $mhs1 = new Mahasiswa("321037254862", "Talitha Syahla", "P", "UPI", "tal@upi.edu", "2101330", "FPMIPA", "Ilmu Komputer");
        echo "<tr>" . "<td>" . 'NIK'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getNIK().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getGender().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Universitas'  . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getAsal_univ().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Email'        . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getEmail(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getNim().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getFakultas().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs1->getJurusan().  "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa kedua
        echo "<table>";
        $mhs2 = new Mahasiswa("328476297401", "Park Jimin", "L", "UPI", "jim@upi.edu", "2101310", "FPMIPA", "Ilmu Komputer");
        echo "<tr>" . "<td>" . 'NIK'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getNIK().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getGender().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Universitas'  . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getAsal_univ().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Email'        . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getEmail(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getNim().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getFakultas().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs2->getJurusan().  "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        // hardcode inputan mahasiswa ketiga
        echo "<table>";
        $mhs3 = new Mahasiswa("328476676359", "Park Jeongwoo", "L", "UPI", "jongu@upi.edu", "2101350", "FPMIPA", "Ilmu Komputer");
        echo "<tr>" . "<td>" . 'NIK'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getNIK().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Nama'         . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getName().     "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jenis Kelamin'. "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getGender().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Universitas'  . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getAsal_univ().  "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Email'        . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getEmail(). "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'NIM'          . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getNim().   "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Fakultas'     . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getFakultas().      "</td>"."</tr>";
        echo "<tr>" . "<td>" . 'Jurusan'      . "</td>" ."<td>". ':'. "</td>"."<td>". $mhs3->getJurusan().  "</td>"."</tr>";
        echo "</table>";
        echo '<hr>';

        ?>
</body>
