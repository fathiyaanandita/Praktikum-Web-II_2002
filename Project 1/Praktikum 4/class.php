<?php

//Cara membuat clss
class Mahasiswa{
    //cara membuat properti/ fariabel
    public $nama;
    public $alamt;
    public $jurusan;

    //cara membuat fungsi/ methode
    function CekNama (){
        echo "Nama Saya : ". $this->nama;
        
    }

    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this -> nama = $datanama;
        $this -> alamat = $dataalamat;
        $this -> jurusam = $datajurusan;
    }
}

// Cara membuat objek
$mahasiswa1 = new Mahasiswa("Fathiya Anandita", "PRMH. Alam Sinarsari Jln. Dahlia, Dramaga, Bogor", "Sistem Informasi");
$mahasiswa2 = new Mahasiswa("Ajay", "Jakarta Timur", "Manajemen");
// mengakses data
echo $mahasiswa1->nama;
echo "<br>";
echo $mahasiswa2->nama;
// mengakses methode
// $mahasiswa1 -> CekNama();

?>